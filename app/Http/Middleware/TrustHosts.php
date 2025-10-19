<?php

namespace App\Http\Middleware;

use App\Models\InstanceSettings;
use Illuminate\Http\Middleware\TrustHosts as Middleware;
use Illuminate\Support\Facades\Cache;
use Spatie\Url\Url;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        $trustedHosts = [];

        // Trust the configured FQDN from InstanceSettings (cached to avoid DB query on every request)
        // Use empty string as sentinel value instead of null so negative results are cached
        $fqdnHost = Cache::remember('instance_settings_fqdn_host', 300, function () {
            try {
                $settings = InstanceSettings::get();
                if ($settings && $settings->fqdn) {
                    $url = Url::fromString($settings->fqdn);
                    $host = $url->getHost();

                    return $host ?: '';
                }
            } catch (\Exception $e) {
                // If instance settings table doesn't exist yet (during installation),
                // return empty string (sentinel) so this result is cached
            }

            return '';
        });

        // Convert sentinel value back to null for consumption
        $fqdnHost = $fqdnHost !== '' ? $fqdnHost : null;

        if ($fqdnHost) {
            $trustedHosts[] = $fqdnHost;
        }

        // Trust all subdomains of APP_URL as fallback
        $trustedHosts[] = $this->allSubdomainsOfApplicationUrl();

        return array_filter($trustedHosts);
    }
}
