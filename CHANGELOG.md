# Changelog

All notable changes to this project will be documented in this file.

## [unreleased]

### 🚀 Features

- Implement TrustHosts middleware to handle FQDN and IP address trust logic
- Implement TrustHosts middleware to handle FQDN and IP address trust logic
- Allow safe environment variable defaults in array-format volumes
- Add signoz template
- *(signoz)* Replace png icon by svg icon
- *(signoz)* Remove explicit 'networks' setting
- *(signoz)* Add predefined environment variables to configure Telemetry, SMTP and email sending for Alert Manager
- *(signoz)* Generate URLs for `otel-collector` service
- *(signoz)* Update documentation link
- *(signoz)* Add healthcheck to otel-collector service
- *(signoz)* Use latest tag instead of hardcoded versions
- *(signoz)* Remove redundant users.xml volume from clickhouse container
- *(signoz)* Replace clickhouse' config.xml volume with simpler configuration
- *(signoz)* Remove deprecated parameters of signoz container
- *(signoz)* Remove volumes from signoz.yaml
- *(signoz)* Assume there is a single zookeeper container
- *(signoz)* Update Clickhouse config to include all settings required by Signoz
- *(signoz)* Update config.xml and users.xml to ensure clickhouse boots correctly
- *(signoz)* Update otel-collector configuration to match upstream
- *(signoz)* Fix otel-collector config for version v0.128.0
- *(signoz)* Remove unecessary port mapping for otel-collector
- *(signoz)* Add SIGNOZ_JWT_SECRET env var generation
- *(signoz)* Upgrade clickhouse image to 25.5.6
- *(signoz)* Use latest tag for signoz/zookeeper
- *(signoz)* Update variables for SMTP configuration
- *(signoz)* Replace deprecated `TELEMETRY_ENABLED` by `SIGNOZ_STATSREPORTER_ENABLED`
- *(signoz)* Pin service image tags and `exclude_from_hc` flag to services excluded from health checks
- *(templates)* Add SMTP configuration to ente-photos compose templates
- *(templates)* Add SMTP encryption configuration to ente-photos compose templates

### 🐛 Bug Fixes

- Use wasChanged() instead of isDirty() in updated hooks
- Prevent command injection in git ls-remote operations
- Handle null environment variable values in bash escaping
- Critical privilege escalation in team invitation system
- Add authentication context to TeamPolicyTest
- Ensure negative cache results are stored in TrustHosts middleware
- Use wasChanged() instead of isDirty() in updated hook
- Prevent command injection in Docker Compose parsing - add pre-save validation
- Use canonical parser for Windows path validation
- Correct variable name typo in generateGitLsRemoteCommands method
- Update version numbers to 4.0.0-beta.436 and 4.0.0-beta.437
- Ensure authorization checks are in place for viewing and updating the application
- Ensure authorization check is performed during component mount
- *(signoz)* Remove example secrets to avoid triggering GitGuardian
- *(signoz)* Remove hardcoded container names
- *(signoz)* Remove HTTP collector FQDN in otel-collector
- *(n8n)* Add DB_SQLITE_POOL_SIZE environment variable for configuration

### 🚜 Refactor

- Improve validation error handling and coding standards
- Preserve exception chain in validation error handling
- Harden and deduplicate validateShellSafePath
- Replace random ID generation with Cuid2 for unique HTML IDs in form components

### 🧪 Testing

- Add coverage for newline and tab rejection in volume strings

### ⚙️ Miscellaneous Tasks

- *(signoz)* Remove unused ports
- *(signoz)* Bump version to 0.77.0
- *(signoz)* Bump version to 0.78.1

## [4.0.0-beta.435] - 2025-10-15

### 🚀 Features

- *(docker)* Enhance Docker image handling with new validation and parsing logic
- *(docker)* Improve Docker image submission logic with enhanced parsing
- *(docker)* Refine Docker image processing in application creation
- Add Ente Photos service template
- *(storage)* Add read-only volume handling and UI notifications
- *(service)* Add Elasticsearch password handling in extraFields method
- *(application)* Add default NIXPACKS_NODE_VERSION environment variable for Nixpacks applications
- *(proxy)* Enhance proxy configuration regeneration by extracting custom commands
- *(backup)* Enhance backup job with S3 upload handling and notifications
- *(storage)* Implement transaction handling in storage settings submission
- *(project)* Enhance project index with resource creation capabilities
- *(dashboard)* Enhance project and server sections with modal input for resource creation
- *(global-search)* Enhance resource creation functionality in search modal
- *(global-search)* Add navigation routes and enhance search functionality
- *(conductor)* Add setup script and configuration file
- *(conductor)* Add run script and update runScriptMode configuration
- *(docker-compose)* Add image specifications for coolify, soketi, and testing-host services
- *(cleanup)* Add force deletion of stuck servers and orphaned SSL certificates
- *(deployment)* Save build-time .env file before build and enhance logging for Dockerfile
- Implement Hetzner deletion failure notification system with email and messaging support
- Enhance proxy status notifications with detailed messages for various states
- Add retry functionality for server validation process
- Add retry mechanism with rate limit handling to API requests in HetznerService
- Implement ValidHostname validation rule and integrate it into server creation process
- Add support for selecting additional SSH keys from Hetzner in server creation form
- Enhance datalist component with unified input container and improved option handling
- Add modal support for creating private keys in server creation form and enhance UI for private key selection
- Add IPv4/IPv6 network configuration for Hetzner server creation
- Add pricing display to Hetzner server creation button
- Add cloud-init script support for Hetzner server creation
- Add cloud-init scripts management UI in Security section
- Add cloud-init scripts to global search
- Add artisan command to clear global search cache
- Add YAML validation for cloud-init scripts
- Add clear button for cloud-init script dropdown
- Add custom webhook notification support
- Add webhook placeholder to Test notification
- Add WebhookChannel placeholder implementation
- Implement actual webhook delivery
- Implement actual webhook delivery with Ray debugging
- Improve webhook URL field UI
- Add UUIDs and URLs to webhook notifications
- *(onboarding)* Redesign user onboarding flow with modern UI/UX
- Replace terminal dropdown with searchable datalist component
- *(onboarding)* Add Hetzner integration and fix navigation issues
- Use new homarr image
- *(templates)* Actually use the new image now
- *(templates)* Pin homarr image version to v1.40.0
- *(template)* Added newapi
- Add mail environment variables to docmost.yaml
- Add Email Envs, Install more required packages by pdsadmin
- Make an empty pds.env file to trick pdsadmin into working correctly
- Not many know how to setup this without reading pds docs
- Make the other email env also required
- *(templates)* Added Lobe Chat service
- *(service)* Add Gramps Web template
- *(campfire)* Add Docker Compose configuration for Once Campfire service
- Add Hetzner affiliate link to token form
- Update Hetzner affiliate link text and URL
- Add CPU vendor information to server types in Hetzner integration

### 🐛 Bug Fixes

- Region env variable
- Ente photos
- *(elasticsearch)* Update Elasticsearch and Kibana configuration for enhanced security and setup
- *(ui)* Make the deployments indicator toast in the bottom-left above the sidebar
- *(environment)* Clear computed property cache after adding environment variables
- *(backup)* Update backup job to use backup_log_uuid for container naming
- *(core)* Set default base_directory and include in submit method
- *(deployment)* Add warning for NIXPACKS_NODE_VERSION in node configurations
- *(deployment)* Save runtime environment variables when skipping build
- *(job)* Correct build logs URL structure in ApplicationPullRequestUpdateJob
- *(tests)* Update Docker command for running feature tests without `-it` flag
- On team creation, redirect to the new team instantly
- *(project)* Update redirect logic after resource creation to include environment UUID
- *(dashboard)* Add cursor pointer to modal input buttons for better UX
- *(modal-confirmation)* Refine escape key handling to ensure modal closes only when open
- *(conductor-setup)* Update script permissions for execution
- *(conductor)* Update run script command to 'spin up'
- *(conductor)* Update run script to include 'spin down' command
- *(docker-compose)* Set pull_policy to 'never' for coolify, soketi, and testing-host services
- *(migration)* Disable transaction for concurrent index creation
- Properly handle transaction for concurrent index operations
- Use correct property declaration for withinTransaction
- *(api-tokens)* Update settings link for API enablement message
- *(css)* Update success color to match design specifications
- *(css)* Update focus styles for input and button utilities to improve accessibility
- *(css)* Remove unnecessary tracking classes from status components for consistency
- *(css)* Update focus styles for Checkbox and modal input components to enhance accessibility
- Refresh server data before showing notification to ensure accurate proxy status
- Update Hetzner server status handling to prevent unnecessary database updates and improve UI responsiveness
- Improve error logging and handling in ServerConnectionCheckJob for Hetzner server status
- Correct dispatch logic for Hetzner server status refresh in checkHetznerServerStatus method
- Streamline proxy status handling in StartProxy and Navbar components
- Improve placeholder text for token name input in cloud provider token form
- Update cloud provider token form with improved placeholder and guidance for API token creation
- *(ci)* Sanitize branch names for Docker tag compatibility
- Set cloud-init script dropdown to empty by default
- Reset cloud-init fields when closing server creation modal
- Improve cloud-init scripts UI styling and behavior
- Allow typing in global search while data loads
- Hide 'No results found' message while data is loading
- Populate webhook notification settings for existing teams
- Register WebhookNotificationSettings with NotificationPolicy
- Add missing server_patch_webhook_notifications field
- Move POST badge before input field
- Use btn-primary for POST badge background
- *(onboarding)* Auto-select first SSH key for better UX
- Prevent container name conflict when updating database port mappings
- Missing 422 error code in openapi spec
- Allow all environment variable fields in API endpoints
- Fixed version
- Fix documentation url
- Bluesky PDS template
- Bluesky PDS template finally works normally
- Add back template info
- Now it automatically generates the JWT secret and the PLC rotation key
- Syntax error on vars
- Remove the SERVICE_EMAIL_ADMIN and make it normal
- Both email envs are needed in order for the PDS to start, so set the other one as required
- Add back template info
- Healthcheck doesn’t need to be 5s
- Make email envs not required
- Domain on coolify
- *(templates)* Update Lobe-chat openai base_url env + required envs
- *(templates)* Lobechat environnement variable
- *(lobe-chat)* Update Docker image tag to a specific version 1.135.5
- Enable docker network connection for pgadmin service
- *(template/filebrowser)* Correct routing and healthcheck for Filebrowser
- *(template/filebrowser)* Correct healthcheck for Filebrowser
- *(campfire)* Update port configuration from 80 to 3000 in Docker Compose file
- *(campfire)* Correct port comment from 3000 to 80 in Docker Compose file
- *(campfire)* Update service definition to use image instead of build in Docker Compose file
- *(templates)* Remove mattermost healthcheck command according to lack of shell in new version
- Prevent duplicate services on image change and enable real-time UI refresh
- Enhance run script to remove existing containers before starting
- Prevent TypeError in database General components with null server
- Add authorization checks to database Livewire components
- Add missing save_runtime_environment_variables() in deploy_simple_dockerfile
- *(git)* Handle Git redirects and improve URL parsing for tangled.sh and other Git hosts
- Improve logging and add shell escaping for git ls-remote
- Update run script to use bun for development
- Restore original run script functionality in conductor.json
- Use computed imageTag variable for digest-based Docker images
- Improve Docker image digest handling and add auto-parse feature
- 'new image' quick action not progressing to resource selection

### 💼 Other

- Ente config
- Cofig variables
- Lean Config
- Env
- Services & Env variables
- Product hunt Ente Logo
- Remove volumes
- Add ray logging for Hetzner createServer API request/response
- Escape all shell directory paths in Git deployment commands

### 🚜 Refactor

- *(environment-variables)* Adjust ordering logic for environment variables
- Update ente photos configuration for improved service management
- *(deployment)* Streamline environment variable generation in ApplicationDeploymentJob
- *(deployment)* Enhance deployment data retrieval and relationships
- *(deployment)* Standardize environment variable handling in ApplicationDeploymentJob
- *(deployment)* Update environment variable handling for Docker builds
- *(navbar, app)* Improve layout and styling for better responsiveness
- *(switch-team)* Remove label from team selection component for cleaner UI
- *(global-search, environment)* Streamline environment retrieval with new query method
- *(backup)* Make backup_log_uuid initialization lazy
- *(checkbox, utilities, global-search)* Enhance focus styles for better accessibility
- *(forms)* Simplify wire:dirty class bindings for input, select, and textarea components
- Replace direct SslCertificate queries with server relationship methods for consistency
- *(ui)* Improve cloud-init script save checkbox visibility and styling
- Enable cloud-init save checkbox at all times with backend validation
- Improve cloud-init script UX and remove description field
- Improve cloud-init script management UI and cache control
- Remove debug sleep from global search modal
- Reduce cloud-init label width for better layout
- Remove SendsWebhook interface
- Reposition POST badge as button
- Migrate database components from legacy model binding to explicit properties
- Volumes set back to ./pds-data:/pds
- *(campfire)* Streamline environment variable definitions in Docker Compose file

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- *(tests)* Update testing guidelines for unit and feature tests
- *(sync)* Create AI Instructions Synchronization Guide and update CLAUDE.md references
- *(database-patterns)* Add critical note on mass assignment protection for new columns
- Clarify cloud-init script compatibility
- Update changelog
- Update changelog

### 🎨 Styling

- *(campfire)* Format environment variables for better readability in Docker Compose file
- *(campfire)* Update comment for DISABLE_SSL environment variable for clarity

### 🧪 Testing

- Improve Git ls-remote parsing tests with uppercase SHA and negative cases

### ⚙️ Miscellaneous Tasks

- *(versions)* Update Coolify version numbers to 4.0.0-beta.435 and 4.0.0-beta.436
- Update package-lock.json
- *(service)* Update convex template and image

## [4.0.0-beta.434] - 2025-10-03

### 🚀 Features

- *(deployments)* Enhance Docker build argument handling for multiline variables
- *(deployments)* Add log copying functionality to clipboard in dev
- *(deployments)* Generate SERVICE_NAME environment variables from Docker Compose services

### 🐛 Bug Fixes

- *(deployments)* Enhance builder container management and environment variable handling

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update version numbers for Coolify releases
- *(versions)* Bump Coolify stable version to 4.0.0-beta.434

## [4.0.0-beta.433] - 2025-10-01

### 🚀 Features

- *(user-deletion)* Implement file locking to prevent concurrent user deletions and enhance error handling
- *(ui)* Enhance resource operations interface with dynamic selection for cloning and moving resources
- *(global-search)* Integrate projects and environments into global search functionality
- *(storage)* Consolidate storage management into a single component with enhanced UI
- *(deployments)* Add support for Coolify variables in Dockerfile

### 🐛 Bug Fixes

- *(workflows)* Update CLAUDE API key reference in GitHub Actions workflow
- *(ui)* Update docker registry image helper text for clarity
- *(ui)* Correct HTML structure and improve clarity in Docker cleanup options
- *(workflows)* Update CLAUDE API key reference in GitHub Actions workflow
- *(api)* Correct OpenAPI schema annotations for array items
- *(ui)* Improve queued deployment status readability in dark mode
- *(git)* Handle additional repository URL cases for 'tangled' and improve branch assignment logic
- *(git)* Enhance error handling for missing branch information during deployment
- *(git)* Trim whitespace from repository, branch, and commit SHA fields
- *(deployments)* Order deployments by ID for consistent retrieval

### 💼 Other

- *(storage)* Enhance file storage management with new properties and UI improvements
- *(core)* Update projects property type and enhance UI styling
- *(components)* Adjust SVG icon sizes for consistency across applications and services
- *(components)* Auto-focus first input in modal on open
- *(styles)* Enhance focus styles for buttons and links
- *(components)* Enhance close button accessibility in modal

### 🚜 Refactor

- *(global-search)* Change event listener to window level for global search modal
- *(dashboard)* Remove deployment loading logic and introduce DeploymentsIndicator component for better UI management
- *(dashboard)* Replace project navigation method with direct link in UI
- *(global-search)* Improve event handling and cleanup in global search component

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update coolify version to 4.0.0-beta.433 and nightly version to 4.0.0-beta.434 in configuration files

## [4.0.0-beta.432] - 2025-09-29

### 🚀 Features

- *(application)* Implement order-based pattern matching for watch paths with negation support
- *(github)* Enhance Docker Compose input fields for better user experience
- *(dev-seeders)* Add PersonalAccessTokenSeeder to create development API tokens
- *(application)* Add conditional .env file creation for Symfony apps during PHP deployment
- *(application)* Enhance watch path parsing to support negation syntax
- *(application)* Add normalizeWatchPaths method to improve watch path handling
- *(validation)* Enhance ValidGitRepositoryUrl to support additional safe characters and add comprehensive unit tests for various Git repository URL formats
- *(deployment)* Implement detection for Laravel/Symfony frameworks and configure NIXPACKS PHP environment variables accordingly

### 🐛 Bug Fixes

- *(application)* Restrict GitHub-based application settings to non-public repositories
- *(traits)* Update saved_outputs handling in ExecuteRemoteCommand to use collection methods for better performance
- *(application)* Enhance domain handling by replacing both dots and dashes with underscores for HTML form binding
- *(constants)* Reduce command timeout from 7200 to 3600 seconds for improved performance
- *(github)* Update repository URL to point to the v4.x branch for development
- *(models)* Update sorting of scheduled database backups to order by creation date instead of name
- *(socialite)* Add custom base URL support for GitLab provider in OAuth settings
- *(configuration-checker)* Update message to clarify redeployment requirement for configuration changes
- *(application)* Reduce docker stop timeout from 30 to 10 seconds for improved application shutdown efficiency
- *(application)* Increase docker stop timeout from 10 to 30 seconds for better application shutdown handling
- *(validation)* Update git:// URL validation to support port numbers and tilde characters in paths
- Resolve scroll lock issue after closing quick search modal with escape key
- Prevent quick search modal duplication from keyboard shortcuts

### 🚜 Refactor

- *(tests)* Simplify matchWatchPaths tests and update implementation for better clarity
- *(deployment)* Improve environment variable handling in ApplicationDeploymentJob
- *(deployment)* Remove commented-out code and streamline environment variable handling in ApplicationDeploymentJob
- *(application)* Improve handling of docker compose domains by normalizing keys and ensuring valid JSON structure
- *(forms)* Update wire:model bindings to use 'blur' instead of 'blur-sm' for input fields across multiple views

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(application)* Remove debugging statement from loadComposeFile method
- *(workflows)* Update Claude GitHub Action configuration to support new event types and improve permissions

## [4.0.0-beta.431] - 2025-09-24

### 📚 Documentation

- Update changelog

## [4.0.0-beta.430] - 2025-09-24

### 🚀 Features

- *(add-watch-paths-for-services)* Show watch paths field for docker compose applications

### 🐛 Bug Fixes

- *(PreviewCompose)* Adds port to preview urls
- *(deployment-job)* Enhance build time variable analysis
- *(docker)* Adjust openssh-client installation in Dockerfile to avoid version bug
- *(docker)* Streamline openssh-client installation in Dockerfile
- *(team)* Normalize email case in invite link generation
- *(README)* Update Juxtdigital description to reflect current services
- *(environment-variable-warning)* Enhance warning logic to check for problematic variable values
- *(install)* Ensure proper quoting of environment file paths to prevent issues with spaces
- *(security)* Implement authorization checks for terminal access management
- *(ui)* Improve mobile sidebar close behavior

### 🚜 Refactor

- *(installer)* Improve install script
- *(upgrade)* Improve upgrade script
- *(installer, upgrade)* Enhance environment variable management
- *(upgrade)* Enhance logging and quoting in upgrade scripts
- *(upgrade)* Replace warning div with a callout component for better UI consistency
- *(ui)* Replace warning and error divs with callout components for improved consistency and readability
- *(ui)* Improve styling and consistency in environment variable warning and docker cleanup components
- *(security)* Streamline update check functionality and improve UI button interactions in patches view

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Increment coolify version numbers to 4.0.0-beta.431 and 4.0.0-beta.432 in configuration files
- *(versions)* Update coolify version numbers to 4.0.0-beta.432 and 4.0.0-beta.433 in configuration files
- Remove unused files
- Adjust wording
- *(workflow)* Update pull request trigger to pull_request_target and refine permissions for enhanced security

## [4.0.0-beta.429] - 2025-09-23

### 🚀 Features

- *(environment)* Replace is_buildtime_only with is_runtime and is_buildtime flags for environment variables, updating related logic and views
- *(deployment)* Handle buildtime and runtime variables during deployment
- *(search)* Implement global search functionality with caching and modal interface
- *(search)* Enable query logging for global search caching
- *(environment)* Add dynamic checkbox options for environment variable settings based on user permissions and variable types
- *(redaction)* Implement sensitive information redaction in logs and commands
- Improve detection of special network modes
- *(api)* Add endpoint to update backup configuration by UUID and backup ID; modify response to include backup id
- *(databases)* Enhance backup management API with new endpoints and improved data handling
- *(github)* Add GitHub app management endpoints
- *(github)* Add update and delete endpoints for GitHub apps
- *(databases)* Enhance backup update and deletion logic with validation
- *(environment-variables)* Implement environment variable analysis for build-time issues
- *(databases)* Implement unique UUID generation for backup execution
- *(cloud-check)* Enhance subscription reporting in CloudCheckSubscription command
- *(cloud-check)* Enhance CloudCheckSubscription command with fix options
- *(stripe)* Enhance subscription handling and verification process
- *(private-key-refresh)* Add refresh dispatch on private key update and connection check
- *(comments)* Add automated comments for labeled pull requests to guide documentation updates
- *(comments)* Ping PR author

### 🐛 Bug Fixes

- *(docker)* Enhance container status aggregation to include restarting and exited states
- *(environment)* Correct grammatical errors in helper text for environment variable sorting checkbox
- *(ui)* Change order and fix ui on small screens
- Order for git deploy types
- *(deployment)* Enhance Dockerfile modification for build-time variables and secrets during deployment in case of docker compose buildpack
- Hide sensitive email change fields in team member responses
- *(domains)* Trim whitespace from domains before validation
- *(databases)* Update backup retrieval logic to include team context
- *(environment-variables)* Update affected services in environment variable analysis
- *(team)* Clear stripe_subscription_id on subscription end
- *(github)* Update authentication method for GitHub app operations
- *(databases)* Restrict database updates to allowed fields only
- *(cache)* Add Model import to ClearsGlobalSearchCache trait for improved functionality
- *(environment-variables)* Correct method call syntax in analyzeBuildVariable function
- *(clears-global-search-cache)* Refine team retrieval logic in getTeamIdForCache method
- *(subscription-job)* Enhance retry logic for VerifyStripeSubscriptionStatusJob
- *(environment-variable)* Update checkbox visibility and helper text for build and runtime options
- *(deployment-job)* Escape single quotes in build arguments for Docker Compose command

### 🚜 Refactor

- *(environment)* Conditionally render Docker Build Secrets checkbox based on build pack type
- *(search)* Optimize cache clearing logic to only trigger on searchable field changes
- *(environment)* Streamline rendering of Docker Build Secrets checkbox and adjust layout for environment variable settings
- *(proxy)* Streamline proxy configuration form layout and improve button placements
- *(remoteProcess)* Remove redundant file transfer functions for improved clarity
- *(github)* Enhance API request handling and validation
- *(databases)* Remove deprecated backup parameters from API documentation
- *(databases)* Streamline backup queries to use team context
- *(databases)* Update backup queries to use team-specific method
- *(server)* Update dispatch messages and streamline data synchronization
- *(cache)* Update team retrieval method in ClearsGlobalSearchCache trait
- *(database-backup)* Move unique UUID generation for backup execution to database loop
- *(cloud-commands)* Consolidate and enhance subscription management commands
- *(toast-component)* Improve layout and icon handling in toast notifications
- *(private-key-update)* Implement transaction for private key association and connection validation

### 📚 Documentation

- Update changelog
- Update changelog
- *(claude)* Update testing guidelines and add note on Application::team relationship

### 🎨 Styling

- *(environment-variable)* Adjust SVG icon margin for improved layout in locked state
- *(proxy)* Adjust padding in proxy configuration form for better visual alignment

### ⚙️ Miscellaneous Tasks

- Change order of runtime and buildtime
- *(docker-compose)* Update soketi image version to 1.0.10 in production and Windows configurations
- *(versions)* Update coolify version numbers to 4.0.0-beta.430 and 4.0.0-beta.431 in configuration files

## [4.0.0-beta.428] - 2025-09-15

### 📚 Documentation

- Update changelog

## [4.0.0-beta.427] - 2025-09-15

### 🚀 Features

- Add Ente Photos service template
- *(command)* Add option to sync GitHub releases to BunnyCDN and refactor sync logic
- *(ui)* Display current version in settings dropdown and update UI accordingly
- *(settings)* Add option to restrict PR deployments to repository members and contributors
- *(command)* Implement SSH command retry logic with exponential backoff and logging for better error handling
- *(ssh)* Add Sentry tracking for SSH retry events to enhance error monitoring
- *(exceptions)* Introduce NonReportableException to handle known errors and update Handler for selective reporting
- *(sudo-helper)* Add helper functions for command parsing and ownership management with sudo
- *(dev-command)* Dispatch CheckHelperImageJob during instance initialization to enhance setup process
- *(ssh-multiplexing)* Enhance multiplexed connection management with health checks and metadata caching
- *(ssh-multiplexing)* Add connection age metadata handling to improve multiplexed connection management
- *(database-backup)* Enhance error handling and output management in DatabaseBackupJob
- *(application)* Display parsing version in development mode and clean up domain conflict modal markup
- *(deployment)* Add SERVICE_NAME variables for service discovery
- *(storages)* Add method to retrieve the first storage ID for improved stability in storage display
- *(environment)* Add 'is_literal' attribute to environment variable for enhanced configuration options
- *(pre-commit)* Automate generation of service templates and OpenAPI documentation during pre-commit hook
- *(execute-container)* Enhance container command form with auto-connect feature for single container scenarios
- *(environment)* Introduce 'is_buildtime_only' attribute to environment variables for improved build-time configuration
- *(templates)* Add n8n service with PostgreSQL and worker support for enhanced workflow automation
- *(user-management)* Implement user deletion command with phased resource and subscription cancellation, including dry run option
- *(sentinel)* Add support for custom Docker images in StartSentinel and related methods
- *(sentinel)* Add slide-over for viewing Sentinel logs and custom Docker image input for development
- *(executions)* Add 'Load All' button to view all logs and implement loadAllLogs method for complete log retrieval
- *(auth)* Enhance user login flow to handle team invitations, attaching users to invited teams upon first login and maintaining personal team logic for regular logins
- *(laravel-boost)* Add Laravel Boost guidelines and MCP server configuration to enhance development experience
- *(deployment)* Enhance deployment status reporting with detailed information on active deployments and team members
- *(deployment)* Implement cancellation checks during deployment process to enhance user control and prevent unnecessary execution
- *(deployment)* Introduce 'use_build_secrets' setting for enhanced security during Docker builds and update related logic in deployment process

### 🐛 Bug Fixes

- *(ui)* Transactional email settings link on members page (#6491)
- *(api)* Add custom labels generation for applications with readonly container label setting enabled
- *(ui)* Add cursor pointer to upgrade button for better user interaction
- *(templates)* Update SECRET_KEY environment variable in getoutline.yaml to use SERVICE_HEX_32_OUTLINE
- *(command)* Enhance database deletion command to support multiple database types
- *(command)* Enhance cleanup process for stuck application previews by adding force delete for trashed records
- *(user)* Ensure email attributes are stored in lowercase for consistency and prevent case-related issues
- *(webhook)* Replace delete with forceDelete for application previews to ensure immediate removal
- *(ssh)* Introduce SshRetryHandler and SshRetryable trait for enhanced SSH command retry logic with exponential backoff and error handling
- Appwrite template - 500 errors, missing env vars etc.
- *(LocalFileVolume)* Add missing directory creation command for workdir in saveStorageOnServer method
- *(ScheduledTaskJob)* Replace generic Exception with NonReportableException for better error handling
- *(web-routes)* Enhance backup response messages to clarify local and S3 availability
- *(proxy)* Replace CheckConfiguration with GetProxyConfiguration and SaveConfiguration with SaveProxyConfiguration for improved clarity and consistency in proxy management
- *(private-key)* Implement transaction handling and error verification for private key storage operations
- *(deployment)* Add COOLIFY_* environment variables to Nixpacks build context for enhanced deployment configuration
- *(application)* Add functionality to stop and remove Docker containers on server
- *(templates)* Update 'compose' configuration for Appwrite service to enhance compatibility and streamline deployment
- *(security)* Update contact email for reporting vulnerabilities to enhance privacy
- *(feedback)* Update feedback email address to improve communication with users
- *(security)* Update contact email for vulnerability reports to improve security communication
- *(navbar)* Restrict subscription link visibility to admin users in cloud environment
- *(docker)* Enhance container status aggregation for multi-container applications, including exclusion handling based on docker-compose configuration
- *(application)* Improve watch paths handling by trimming and filtering empty paths to prevent unnecessary triggers
- *(server)* Update server usability check to reflect actual Docker availability status
- *(server)* Add build server check to disable Sentinel and update related logic
- *(server)* Implement refreshServer method and update navbar event listener for improved server state management
- *(deployment)* Prevent removal of running containers for pull request deployments in case of failure
- *(docker)* Redirect stderr to stdout for container log retrieval to capture error messages
- *(clone)* Update destinations method call to ensure correct retrieval of selected destination

### 🚜 Refactor

- *(jobs)* Pull github changelogs from cdn instead of github
- *(command)* Streamline database deletion process to handle multiple database types and improve user experience
- *(command)* Improve database collection logic for deletion command by using unique identifiers and enhancing user experience
- *(command)* Remove InitChangelog command as it is no longer needed
- *(command)* Streamline Init command by removing unnecessary options and enhancing error handling for various operations
- *(webhook)* Replace direct forceDelete calls with DeleteResourceJob dispatch for application previews
- *(command)* Replace forceDelete calls with DeleteResourceJob dispatch for all stuck resources in cleanup process
- *(command)* Simplify SSH command retry logic by removing unnecessary logging and improving delay calculation
- *(ssh)* Enhance error handling in SSH command execution and improve connection validation logging
- *(backlog)* Remove outdated guidelines and project manager agent files to streamline task management documentation
- *(error-handling)* Remove ray debugging statements from CheckUpdates and shared helper functions to clean up error reporting
- *(file-transfer)* Replace base64 encoding with direct file transfer method across multiple database actions for improved clarity and efficiency
- *(remoteProcess)* Remove debugging statement from transfer_file_to_server function to clean up code
- *(dns-validation)* Rename DNS validation functions for consistency and clarity, and remove unused code
- *(file-transfer)* Replace base64 encoding with direct file transfer method in various components for improved clarity and efficiency
- *(private-key)* Remove debugging statement from storeInFileSystem method for cleaner code
- *(github-webhook)* Restructure application processing by grouping applications by server for improved deployment handling
- *(deployment)* Enhance queuing logic to support concurrent deployments by including pull request ID in checks
- *(remoteProcess)* Remove debugging statement from transfer_file_to_container function for cleaner code
- *(deployment)* Streamline next deployment queuing logic by repositioning queue_next_deployment call
- *(deployment)* Add validation for pull request existence in deployment process to enhance error handling
- *(database)* Remove volume_configuration_dir and streamline configuration directory usage in MongoDB and PostgreSQL handlers
- *(application-source)* Improve layout and accessibility of Git repository links in the application source view
- *(models)* Remove 'is_readonly' attribute from multiple database models for consistency
- *(webhook)* Remove Webhook model and related logic; add migrations to drop webhooks and kubernetes tables
- *(clone)* Consolidate application cloning logic into a dedicated function for improved maintainability and readability
- *(clone)* Integrate preview cloning logic directly into application cloning function for improved clarity and maintainability
- *(application)* Enhance environment variable retrieval in configuration change check for improved accuracy
- *(clone)* Enhance application cloning by separating production and preview environment variable handling
- *(deployment)* Add environment variable copying logic to Docker build commands for pull requests
- *(environment)* Standardize service name formatting by replacing '-' and '.' with '_' in environment variable keys
- *(deployment)* Update environment file handling in Docker commands to use '/artifacts/' path and streamline variable management
- *(openapi)* Remove 'is_build_time' attribute from environment variable definitions to streamline configuration
- *(environment)* Remove 'is_build_time' attribute from environment variable handling across the application to simplify configuration
- *(environment)* Streamline environment variable handling by replacing sorting methods with direct property access and enhancing query ordering for improved performance
- *(stripe-jobs)* Comment out internal notification calls and add subscription status verification before sending failure notifications
- *(deployment)* Streamline environment variable handling for dockercompose and improve sorting of runtime variables
- *(remoteProcess)* Remove command log comments for file transfers to simplify code
- *(remoteProcess)* Remove file transfer handling from remote_process and instant_remote_process functions to simplify code
- *(deployment)* Update environment file paths in docker compose commands to use working directory for improved consistency
- *(server)* Remove debugging ray call from validateConnection method for cleaner code
- *(deployment)* Conditionally cleanup build secrets based on Docker BuildKit support and remove redundant calls for improved efficiency
- *(deployment)* Remove redundant environment variable documentation from Dockerfile comments to streamline the deployment process
- *(deployment)* Streamline Docker BuildKit detection and environment variable handling for enhanced security during application deployment
- *(deployment)* Optimize BuildKit capabilities detection and remove unnecessary comments for cleaner deployment logic
- *(deployment)* Rename method for modifying Dockerfile to improve clarity and streamline build secrets integration

### 📚 Documentation

- Update changelog
- *(testing-patterns)* Add important note to always run tests inside the `coolify` container for clarity

### ⚙️ Miscellaneous Tasks

- Update coolify version to 4.0.0-beta.427 and nightly version to 4.0.0-beta.428
- Use main value then fallback to service_ values
- Remove webhooks table cleanup
- *(cleanup)* Remove deprecated ServerCheck and related job classes to streamline codebase
- *(versions)* Update sentinel version from 0.0.15 to 0.0.16 in versions.json files
- *(constants)* Update realtime_version from 1.0.10 to 1.0.11
- *(versions)* Increment coolify version to 4.0.0-beta.428 and update realtime_version to 1.0.10
- *(docker)* Add a blank line for improved readability in Dockerfile
- *(versions)* Bump coolify version to 4.0.0-beta.429 and nightly version to 4.0.0-beta.430

## [4.0.0-beta.426] - 2025-08-28

### 🚜 Refactor

- *(policy)* Simplify ServiceDatabasePolicy methods to always return true and add manageBackups method

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- Update coolify version to 4.0.0-beta.426 and nightly version to 4.0.0-beta.427

## [4.0.0-beta.425] - 2025-08-28

### 🚀 Features

- *(domains)* Implement domain conflict detection and user confirmation modal across application components
- *(domains)* Add force_domain_override option and enhance domain conflict detection responses

### 🐛 Bug Fixes

- *(previews)* Simplify FQDN generation logic by removing unnecessary empty check
- *(templates)* Update Matrix service compose configuration for improved compatibility and clarity

### 🚜 Refactor

- *(urls)* Replace generateFqdn with generateUrl for consistent URL generation across applications
- *(domains)* Rename check_domain_usage to checkDomainUsage and update references across the application
- *(auth)* Simplify access control logic in CanAccessTerminal and ServerPolicy by allowing all users to perform actions

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- Update coolify version to 4.0.0-beta.425 and nightly version to 4.0.0-beta.426

## [4.0.0-beta.424] - 2025-08-27

### 💼 Other

- Allow deploy from container image hash

### 📚 Documentation

- Update changelog
- Update changelog

## [4.0.0-beta.423] - 2025-08-27

### 📚 Documentation

- Update changelog

## [4.0.0-beta.422] - 2025-08-27

### 📚 Documentation

- Update changelog

## [4.0.0-beta.421] - 2025-08-26

### 📚 Documentation

- Update changelog

## [4.0.0-beta.420.9] - 2025-08-26

### 🚀 Features

- *(policies)* Add EnvironmentVariablePolicy for managing environment variables ( it was missing )

### 🐛 Bug Fixes

- *(backups)* S3 backup upload is failing
- *(backups)* Rollback helper update for now
- *(parsers)* Replace hyphens with underscores in service names for consistency. this allows to properly parse custom domains in docker compose based applications
- *(parsers)* Implement parseDockerVolumeString function to handle various Docker volume formats and modes, including environment variables and Windows paths. Add unit tests for comprehensive coverage.
- *(git)* Submodule update command uses an unsupported option (#6454)
- *(service)* Swap URL for FQDN on matrix template (#6466)
- *(parsers)* Enhance volume string handling by preserving mode in application and service parsers. Update related unit tests for validation.
- *(docker)* Update parser version in FQDN generation for service-specific URLs
- *(parsers)* Do not modify service names, only for getting fqdns and related envs
- *(compose)* Temporary allow to edit volumes in apps (compose based) and services

### 🚜 Refactor

- *(git)* Improve submodule cloning
- *(parsers)* Remove unnecessary hyphen-to-underscore replacement for service names in serviceParser function

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(core)* Update version
- *(core)* Update version
- *(versions)* Update coolify version to 4.0.0-beta.421 and nightly version to 4.0.0-beta.422
- Update version
- Update development node version
- Update coolify version to 4.0.0-beta.423 and nightly version to 4.0.0-beta.424
- Update coolify version to 4.0.0-beta.424 and nightly version to 4.0.0-beta.425

## [4.0.0-beta.420.8] - 2025-08-26

### 🚜 Refactor

- *(policies)* Remove Response type hint from update methods in ApplicationPreviewPolicy and DatabasePolicy for improved flexibility

### 📚 Documentation

- Update changelog

## [4.0.0-beta.420.7] - 2025-08-26

### 🚀 Features

- *(service)* Add TriliumNext service (#5970)
- *(service)* Add Matrix service (#6029)
- *(service)* Add GitHub Action runner service (#6209)
- *(terminal)* Dispatch focus event for terminal after connection and enhance focus handling in JavaScript
- *(lang)* Add Polish language & improve forgot_password translation (#6306)
- *(service)* Update Authentik template (#6264)
- *(service)* Add sequin template (#6105)
- *(service)* Add pi-hole template (#6020)
- *(services)* Add Chroma service (#6201)
- *(service)* Add OpenPanel template (#5310)
- *(service)* Add librechat template (#5654)
- *(service)* Add Homebox service (#6116)
- *(service)* Add pterodactyl & wings services (#5537)
- *(service)* Add Bluesky PDS template (#6302)
- *(input)* Add autofocus attribute to input component for improved accessibility
- *(core)* Finally fqdn is fqdn and url is url. haha
- *(user)* Add changelog read tracking and unread count method
- *(templates)* Add new service templates and update existing compose files for various applications
- *(changelog)* Implement automated changelog fetching from GitHub and enhance changelog read tracking
- *(drizzle-gateway)* Add new drizzle-gateway service with configuration and logo
- *(drizzle-gateway)* Enhance service configuration by adding Master Password field and updating compose file path
- *(templates)* Add new service templates for Homebox, LibreChat, Pterodactyl, and Wings with corresponding configurations and logos
- *(templates)* Add Bluesky PDS service template and update compose file with new environment variable
- *(readme)* Add CubePath as a big sponsor and include new small sponsors with logos
- *(api)* Add create_environment endpoint to ProjectController for environment creation in projects
- *(api)* Add endpoints for managing environments in projects, including listing, creating, and deleting environments
- *(backup)* Add disable local backup option and related logic for S3 uploads
- *(dev patches)* Add functionality to send test email with patch data in development mode
- *(templates)* Added category per service
- *(email)* Implement email change request and verification process
- Generate category for services
- *(service)* Add elasticsearch template (#6300)
- *(sanitization)* Integrate DOMPurify for HTML sanitization across components
- *(cleanup)* Add command for sanitizing name fields across models
- *(sanitization)* Enhance HTML sanitization with improved DOMPurify configuration
- *(validation)* Centralize validation patterns for names and descriptions
- *(git-settings)* Add support for shallow cloning in application settings
- *(auth)* Implement authorization checks for server updates across multiple components
- *(auth)* Implement authorization for PrivateKey management
- *(auth)* Implement authorization for Docker and server management
- *(validation)* Add custom validation rules for Git repository URLs and branches
- *(security)* Add authorization checks for package updates in Livewire components
- *(auth)* Implement authorization checks for application management
- *(auth)* Enhance API error handling for authorization exceptions
- *(auth)* Add comprehensive authorization checks for all kind of resource creations
- *(auth)* Implement authorization checks for database management
- *(auth)* Refine authorization checks for S3 storage and service management
- *(auth)* Implement comprehensive authorization checks across API controllers
- *(auth)* Introduce resource creation authorization middleware and policies for enhanced access control
- *(auth)* Add middleware for resource creation authorization
- *(auth)* Enhance authorization checks in Livewire components for resource management
- *(validation)* Add ValidIpOrCidr rule for validating IP addresses and CIDR notations; update API access settings UI and add comprehensive tests
- *(docs)* Update architecture and development guidelines; enhance form components with built-in authorization system and improve routing documentation
- *(docs)* Expand authorization documentation for custom Alpine.js components; include manual protection patterns and implementation guidelines
- *(sentinel)* Implement SentinelRestarted event and update Livewire components to handle server restart notifications
- *(api)* Enhance IP access control in middleware and settings; support CIDR notation and special case for 0.0.0.0 to allow all IPs
- *(acl)* Change views/backend code to able to use proper ACL's later on. Currently it is not enabled.
- *(docs)* Add Backlog.md guidelines and project manager backlog agent; enhance CLAUDE.md with new links for task management
- *(docs)* Add tasks for implementing Docker build caching and optimizing staging builds; include detailed acceptance criteria and implementation plans
- *(docker)* Implement Docker cleanup processing in ScheduledJobManager; refactor server task scheduling to streamline cleanup job dispatching
- *(docs)* Expand Backlog.md guidelines with comprehensive usage instructions, CLI commands, and best practices for task management to enhance project organization and collaboration

### 🐛 Bug Fixes

- *(service)* Triliumnext platform and link
- *(application)* Update service environment variables when generating domain for Docker Compose
- *(application)* Add option to suppress toast notifications when loading compose file
- *(git)* Tracking issue due to case sensitivity
- *(git)* Tracking issue due to case sensitivity
- *(git)* Tracking issue due to case sensitivity
- *(ui)* Delete button width on small screens (#6308)
- *(service)* Matrix entrypoint
- *(ui)* Add flex-wrap to prevent overflow on small screens (#6307)
- *(docker)* Volumes get delete when stopping a service if `Delete Unused Volumes` is activated (#6317)
- *(docker)* Cleanup always running on deletion
- *(proxy)* Remove hardcoded port 80/443 checks (#6275)
- *(service)* Update healthcheck of penpot backend container (#6272)
- *(api)* Duplicated logs in application endpoint (#6292)
- *(service)* Documenso signees always pending (#6334)
- *(api)* Update service upsert to retain name and description values if not set
- *(database)* Custom postgres configs with SSL (#6352)
- *(policy)* Update delete method to check for admin status in S3StoragePolicy
- *(container)* Sort containers alphabetically by name in ExecuteContainerCommand and update filtering in Terminal Index
- *(application)* Streamline environment variable updates for Docker Compose services and enhance FQDN generation logic
- *(constants)* Update 'Change Log' to 'Changelog' in settings dropdown
- *(constants)* Update coolify version to 4.0.0-beta.420.7
- *(parsers)* Clarify comments and update variable checks for FQDN and URL handling
- *(terminal)* Update text color for terminal availability message and improve readability
- *(drizzle-gateway)* Remove healthcheck from drizzle-gateway compose file and update service template
- *(templates)* Should generate old SERVICE_FQDN service templates as well
- *(constants)* Update official service template URL to point to the v4.x branch for accuracy
- *(git)* Use exact refspec in ls-remote to avoid matching similarly named branches (e.g., changeset-release/main). Use refs/heads/<branch> or provider-specific PR refs.
- *(ApplicationPreview)* Change null check to empty check for fqdn in generate_preview_fqdn method
- *(email notifications)* Enhance EmailChannel to validate team membership for recipients and handle errors gracefully
- *(service api)* Separate create and update service functionalities
- *(templates)* Added a category tag for the docs service filter
- *(application)* Clear Docker Compose specific data when switching away from dockercompose
- *(database)* Conditionally set started_at only if the database is running
- *(ui)* Handle null values in postgres metrics (#6388)
- Disable env sorting by default
- *(proxy)* Filter host network from default proxy (#6383)
- *(modal)* Enhance confirmation text handling
- *(notification)* Update unread count display and improve HTML rendering
- *(select)* Remove unnecessary sanitization for logo rendering
- *(tags)* Update tag display to limit name length and adjust styling
- *(init)* Improve error handling for deployment and template pulling processes
- *(settings-dropdown)* Adjust unread count badge size and display logic for better consistency
- *(sanitization)* Enhance DOMPurify hook to remove Alpine.js directives for improved XSS protection
- *(servercheck)* Properly check server statuses with and without Sentinel
- *(errors)* Update error pages to provide navigation options
- *(github-deploy-key)* Update background color for selected private keys in deployment key selection UI
- *(auth)* Enhance authorization checks in application management

### 💼 Other

- *(settings-dropdown)* Add icons to buttons for improved UI in settings dropdown
- *(ui)* Introduce task for simplifying resource operations UI by replacing boxes with dropdown selections to enhance user experience and streamline interactions

### 🚜 Refactor

- *(jobs)* Remove logging for ScheduledJobManager and ServerResourceManager start and completion
- *(services)* Update validation rules to be optional
- *(service)* Improve langfuse
- *(service)* Improve openpanel template
- *(service)* Improve librechat
- *(public-git-repository)* Enhance form structure and add autofocus to repository URL input
- *(public-git-repository)* Remove commented-out code for cleaner template
- *(templates)* Update service template file handling to use dynamic file name from constants
- *(parsers)* Streamline domain handling in applicationParser and improve DNS validation logic
- *(templates)* Replace SERVICE_FQDN variables with SERVICE_URL in compose files for consistency
- *(links)* Replace inline SVGs with reusable external link component for consistency and improved maintainability
- *(previews)* Improve layout and add deployment/application logs links for previews
- *(docker compose)* Remove deprecated newParser function and associated test file to streamline codebase
- *(shared helpers)* Remove unused parseServiceVolumes function to clean up codebase
- *(parsers)* Update volume parsing logic to use beforeLast and afterLast for improved accuracy
- *(validation)* Implement centralized validation patterns across components
- *(jobs)* Rename job classes to indicate deprecation status
- Update check frequency logic for cloud and self-hosted environments; streamline server task scheduling and timezone handling
- *(policies)* Remove Response type hint from update methods in ApplicationPreviewPolicy and DatabasePolicy for improved flexibility

### 📚 Documentation

- *(claude)* Clarify that artisan commands should only be run inside the "coolify" container during development
- Add AGENTS.md for project guidance and development instructions
- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(service)* Improve matrix service
- *(service)* Format runner service
- *(service)* Improve sequin
- *(service)* Add `NOT_SECURED` env to Postiz (#6243)
- *(service)* Improve evolution-api environment variables (#6283)
- *(service)* Update Langfuse template to v3 (#6301)
- *(core)* Remove unused argument
- *(deletion)* Rename isDeleteOperation to deleteConnectedNetworks
- *(docker)* Remove unused arguments on StopService
- *(service)* Homebox formatting
- Clarify usage of custom redis configuration (#6321)
- *(changelogs)* Add .gitignore for changelogs directory and remove outdated changelog files for May, June, and July 2025
- *(service)* Change affine images (#6366)
- Elasticsearch URL, fromatting and add category
- Update service-templates json files
- *(docs)* Remove AGENTS.md file; enhance CLAUDE.md with detailed form authorization patterns and service configuration examples
- *(cleanup)* Remove unused GitLab view files for change, new, and show pages
- *(workflows)* Add backlog directory to build triggers for production and staging workflows
- *(config)* Disable auto_commit in backlog configuration to prevent automatic commits
- *(versions)* Update coolify version to 4.0.0-beta.420.8 and nightly version to 4.0.0-beta.420.9 in versions.json and constants.php
- *(docker)* Update soketi image version to 1.0.10 in production and Windows configurations

### ◀️ Revert

- *(parser)* Enhance FQDN generation logic for services and applications

## [4.0.0-beta.420.6] - 2025-07-18

### 🚀 Features

- *(service)* Enable password protection for the Wireguard Ul
- *(queues)* Improve Horizon config to reduce CPU and RAM usage (#6212)
- *(service)* Add Gowa service (#6164)
- *(container)* Add updatedSelectedContainer method to connect to non-default containers and update wire:model for improved reactivity
- *(application)* Implement environment variable updates for Docker Compose applications, including creation, updating, and deletion of SERVICE_FQDN and SERVICE_URL variables

### 🐛 Bug Fixes

- *(installer)* Public IPv4 link does not work
- *(composer)* Version constraint of prompts
- *(service)* Budibase secret keys (#6205)
- *(service)* Wg-easy host should be just the FQDN
- *(ui)* Search box overlaps the sidebar navigation (#6176)
- *(webhooks)* Exclude webhook routes from CSRF protection (#6200)
- *(services)* Update environment variable naming convention to use underscores instead of dashes for SERVICE_FQDN and SERVICE_URL

### 🚜 Refactor

- *(service)* Improve gowa
- *(previews)* Streamline preview domain generation logic in ApplicationDeploymentJob for improved clarity and maintainability
- *(services)* Simplify environment variable updates by using updateOrCreate and add cleanup for removed FQDNs

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(service)* Update Nitropage template (#6181)
- *(versions)* Update all version
- *(bump)* Update composer deps
- *(version)* Bump Coolify version to 4.0.0-beta.420.6

## [4.0.0-beta.420.4] - 2025-07-08

### 🚀 Features

- *(scheduling)* Add command to manually run scheduled database backups and tasks with options for chunking, delays, and dry runs
- *(scheduling)* Add frequency filter option for manual execution of scheduled jobs
- *(logging)* Implement scheduled logs command and enhance backup/task scheduling with cron checks
- *(logging)* Add frequency filters for scheduled logs command to support hourly, daily, weekly, and monthly job views
- *(scheduling)* Introduce ScheduledJobManager and ServerResourceManager for enhanced job scheduling and resource management
- *(previews)* Implement soft delete and cleanup for ApplicationPreview, enhancing resource management in DeleteResourceJob

### 🐛 Bug Fixes

- *(service)* Update Postiz compose configuration for improved server availability
- *(install.sh)* Use IPV4_PUBLIC_IP variable in output instead of repeated curl
- *(env)* Generate literal env variables better
- *(deployment)* Update x-data initialization in deployment view for improved functionality
- *(deployment)* Enhance COOLIFY_URL and COOLIFY_FQDN variable generation for better compatibility
- *(deployment)* Improve docker-compose domain handling and environment variable generation
- *(deployment)* Refactor domain parsing and environment variable generation using Spatie URL library
- *(deployment)* Update COOLIFY_URL and COOLIFY_FQDN generation to use Spatie URL library for improved accuracy
- *(scheduling)* Change redis cleanup command frequency from hourly to weekly for better resource management
- *(versions)* Update coolify version numbers in versions.json and constants.php to 4.0.0-beta.420.5 and 4.0.0-beta.420.6
- *(database)* Ensure internal port defaults correctly for unsupported database types in StartDatabaseProxy
- *(versions)* Update coolify version numbers in versions.json and constants.php to 4.0.0-beta.420.6 and 4.0.0-beta.420.7
- *(scheduling)* Remove unnecessary padding from scheduled task form layout for improved UI consistency
- *(horizon)* Update queue configuration to use environment variable for dynamic queue management
- *(horizon)* Add silenced jobs
- *(application)* Sanitize service names for HTML form binding and ensure original names are stored in docker compose domains
- *(previews)* Adjust padding for rate limit message in application previews
- *(previews)* Order application previews by pull request ID in descending order
- *(previews)* Add unique wire keys for preview containers and services based on pull request ID
- *(previews)* Enhance domain generation logic for application previews, ensuring unique domains are created when none are set
- *(previews)* Refine preview domain generation for Docker Compose applications, ensuring correct method usage based on build pack type
- *(ui)* Typo on proxy request handler tooltip (#6192)
- *(backups)* Large database backups are not working (#6217)
- *(backups)* Error message if there is no exception

### 🚜 Refactor

- *(previews)* Streamline preview URL generation by utilizing application method
- *(application)* Adjust layout and spacing in general application view for improved UI
- *(postgresql)* Improve layout and spacing in SSL and Proxy configuration sections for better UI consistency
- *(scheduling)* Replace deprecated job checks with ScheduledJobManager and ServerResourceManager for improved scheduling efficiency
- *(previews)* Move preview domain generation logic to ApplicationPreview model for better encapsulation and consistency across webhook handlers

### 📚 Documentation

- Update changelog
- Update changelog

## [4.0.0-beta.420.3] - 2025-07-03

### 📚 Documentation

- Update changelog

## [4.0.0-beta.420.2] - 2025-07-03

### 🚀 Features

- *(template)* Added excalidraw (#6095)
- *(template)* Add excalidraw service configuration with documentation and tags

### 🐛 Bug Fixes

- *(terminal)* Ensure shell execution only uses valid shell if available in terminal command
- *(ui)* Improve destination selection description for clarity in resource segregation
- *(jobs)* Update middleware to use expireAfter for WithoutOverlapping in multiple job classes
- Removing eager loading (#6071)
- *(template)* Adjust health check interval and retries for excalidraw service
- *(ui)* Env variable settings wrong order
- *(service)* Ensure configuration changes are properly tracked and dispatched

### 🚜 Refactor

- *(ui)* Enhance project cloning interface with improved table layout for server and resource selection
- *(terminal)* Simplify command construction for SSH execution
- *(settings)* Streamline instance admin checks and initialization of settings in Livewire components
- *(policy)* Optimize team membership checks in S3StoragePolicy
- *(popup)* Improve styling and structure of the small popup component
- *(shared)* Enhance FQDN generation logic for services in newParser function
- *(redis)* Enhance CleanupRedis command with dry-run option and improved key deletion logic
- *(init)* Standardize method naming conventions and improve command structure in Init.php
- *(shared)* Improve error handling in getTopLevelNetworks function to return network name on invalid docker-compose.yml
- *(database)* Improve error handling for unsupported database types in StartDatabaseProxy

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Bump coolify and nightly versions to 4.0.0-beta.420.3 and 4.0.0-beta.420.4 respectively
- *(versions)* Update coolify and nightly versions to 4.0.0-beta.420.4 and 4.0.0-beta.420.5 respectively

## [4.0.0-beta.420.1] - 2025-06-26

### 🐛 Bug Fixes

- *(server)* Prepend 'mux_' to UUID in muxFilename method for consistent naming
- *(ui)* Enhance terminal access messaging to clarify server functionality and terminal status
- *(database)* Proxy ssl port if ssl is enabled

### 🚜 Refactor

- *(ui)* Separate views for instance settings to separate paths to make it cleaner
- *(ui)* Remove unnecessary step3ButtonText attributes from modal confirmation components for cleaner code

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update Coolify versions to 4.0.0-beta.420.2 and 4.0.0-beta.420.3 in multiple files

## [4.0.0-beta.420] - 2025-06-26

### 🚀 Features

- *(service)* Add Miniflux service (#5843)
- *(service)* Add Pingvin Share service (#5969)
- *(auth)* Add Discord OAuth Provider (#5552)
- *(auth)* Add Clerk OAuth Provider (#5553)
- *(auth)* Add Zitadel OAuth Provider (#5490)
- *(core)* Set custom API rate limit (#5984)
- *(service)* Enhance service status handling and UI updates
- *(cleanup)* Add functionality to delete teams with no members or servers in CleanupStuckedResources command
- *(ui)* Add heart icon and enhance popup messaging for sponsorship support
- *(settings)* Add sponsorship popup toggle and corresponding database migration
- *(migrations)* Add optimized indexes to activity_log for improved query performance

### 🐛 Bug Fixes

- *(service)* Audiobookshelf healthcheck command (#5993)
- *(service)* Downgrade Evolution API phone version (#5977)
- *(service)* Pingvinshare-with-clamav
- *(ssh)* Scp requires square brackets for ipv6 (#6001)
- *(github)* Changing github app breaks the webhook. it does not anymore
- *(parser)* Improve FQDN generation and update environment variable handling
- *(ui)* Enhance status refresh buttons with loading indicators
- *(ui)* Update confirmation button text for stopping database and service
- *(routes)* Update middleware for deploy route to use 'api.ability:deploy'
- *(ui)* Refine API token creation form and update helper text for clarity
- *(ui)* Adjust layout of deployments section for improved alignment
- *(ui)* Adjust project grid layout and refine server border styling for better visibility
- *(ui)* Update border styling for consistency across components and enhance loading indicators
- *(ui)* Add padding to section headers in settings views for improved spacing
- *(ui)* Reduce gap between input fields in email settings for better alignment
- *(docker)* Conditionally enable gzip compression in Traefik labels based on configuration
- *(parser)* Enable gzip compression conditionally for Pocketbase images and streamline service creation logic
- *(ui)* Update padding for trademarks policy and enhance spacing in advanced settings section
- *(ui)* Correct closing tag for sponsorship link in layout popups
- *(ui)* Refine wording in sponsorship donation prompt in layout popups
- *(ui)* Update navbar icon color and enhance popup layout for sponsorship support
- *(ui)* Add target="_blank" to sponsorship links in layout popups for improved user experience
- *(models)* Refine comment wording in User model for clarity on user deletion criteria
- *(models)* Improve user deletion logic in User model to handle team member roles and prevent deletion if user is alone in root team
- *(ui)* Update wording in sponsorship prompt for clarity and engagement
- *(shared)* Refactor gzip handling for Pocketbase in newParser function for improved clarity

### 🚜 Refactor

- *(service)* Update Hoarder to their new name karakeep (#5964)
- *(service)* Karakeep naming and formatting
- *(service)* Improve miniflux
- *(core)* Rename API rate limit ENV
- *(ui)* Simplify container selection form in execute-container-command view
- *(email)* Streamline SMTP and resend settings logic for improved clarity
- *(invitation)* Rename methods for consistency and enhance invitation deletion logic
- *(user)* Streamline user deletion process and enhance team management logic

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(service)* Update Evolution API image to the official one (#6031)
- *(versions)* Bump coolify versions to v4.0.0-beta.420 and v4.0.0-beta.421
- *(dependencies)* Update composer dependencies to latest versions including resend-laravel to ^0.19.0 and aws-sdk-php to 3.347.0
- *(versions)* Update Coolify version to 4.0.0-beta.420.1 and add new services (karakeep, miniflux, pingvinshare) to service templates

## [4.0.0-beta.419] - 2025-06-17

### 🚀 Features

- *(core)* Add 'postmarketos' to supported OS list
- *(service)* Add memos service template (#5032)
- *(ui)* Upgrade to Tailwind v4 (#5710)
- *(service)* Add Navidrome service template (#5022)
- *(service)* Add Passbolt service (#5769)
- *(service)* Add Vert service (#5663)
- *(service)* Add Ryot service (#5232)
- *(service)* Add Marimo service (#5559)
- *(service)* Add Diun service (#5113)
- *(service)* Add Observium service (#5613)
- *(service)* Add Leantime service (#5792)
- *(service)* Add Limesurvey service (#5751)
- *(service)* Add Paymenter service (#5809)
- *(service)* Add CodiMD service (#4867)
- *(modal)* Add dispatchAction property to confirmation modal
- *(security)* Implement server patching functionality
- *(service)* Add Typesense service (#5643)
- *(service)* Add Yamtrack service (#5845)
- *(service)* Add PG Back Web service (#5079)
- *(service)* Update Maybe service and adjust it for the new release (#5795)
- *(oauth)* Set redirect uri as optional and add default value (#5760)
- *(service)* Add apache superset service (#4891)
- *(service)* Add One Time Secret service (#5650)
- *(service)* Add Seafile service (#5817)
- *(service)* Add Netbird-Client service (#5873)
- *(service)* Add OrangeHRM and Grist services (#5212)
- *(rules)* Add comprehensive documentation for Coolify architecture and development practices for AI tools, especially for cursor
- *(server)* Implement server patch check notifications
- *(api)* Add latest query param to Service restart API (#5881)
- *(api)* Add connect_to_docker_network setting to App creation API (#5691)
- *(routes)* Restrict backup download access to team admins and owners
- *(destination)* Update confirmation modal text and add persistent storage warning for server deployment
- *(terminal-access)* Implement terminal access control for servers and containers, including UI updates and backend logic
- *(ca-certificate)* Add CA certificate management functionality with UI integration and routing
- *(security-patches)* Add update check initialization and enhance notification messaging in UI
- *(previews)* Add force deploy without cache functionality and update deploy method to accept force rebuild parameter
- *(security-patterns)* Expand sensitive patterns list to include additional security-related variables
- *(database-backup)* Add MongoDB credential extraction and backup handling to DatabaseBackupJob
- *(activity-monitor)* Implement auto-scrolling functionality and dynamic content observation for improved user experience
- *(utf8-handling)* Implement UTF-8 sanitization for command outputs and enhance error handling in logs processing
- *(navbar)* Add Traefik dashboard availability check and server IP handling; refactor dynamic configurations loading
- *(proxy-dashboard)* Implement ProxyDashboardCacheService to manage Traefik dashboard cache; clear cache on configuration changes and proxy actions
- *(terminal-connection)* Enhance terminal connection handling with auto-connect feature and improved status messaging
- *(terminal)* Implement resize handling with ResizeObserver for improved terminal responsiveness
- *(migration)* Add is_sentinel_enabled column to server_settings with default true
- *(seeder)* Dispatch StartProxy action for each server in ProductionSeeder
- *(seeder)* Add CheckAndStartSentinelJob dispatch for each server in ProductionSeeder
- *(seeder)* Conditionally dispatch StartProxy action based on proxy check result
- *(service)* Update Changedetection template (#5937)

### 🐛 Bug Fixes

- *(constants)* Adding 'fedora-asahi-remix' as a supported OS (#5646)
- *(authentik)* Update docker-compose configuration for authentik service
- *(api)* Allow nullable destination_uuid (#5683)
- *(service)* Fix documenso startup and mail (#5737)
- *(docker)* Fix production dockerfile
- *(service)* Navidrome service
- *(service)* Passbolt
- *(service)* Add missing ENVs to NTFY service (#5629)
- *(service)* NTFY is behind a proxy
- *(service)* Vert logo and ENVs
- *(service)* Add platform to Observium service
- *(ActivityMonitor)* Prevent multiple event dispatches during polling
- *(service)* Convex ENVs and update image versions (#5827)
- *(service)* Paymenter
- *(ApplicationDeploymentJob)* Ensure correct COOLIFY_FQDN/COOLIFY_URL values (#4719)
- *(service)* Snapdrop no matching manifest error (#5849)
- *(service)* Use the same volume between chatwoot and sidekiq (#5851)
- *(api)* Validate docker_compose_raw input in ApplicationsController
- *(api)* Enhance validation for docker_compose_raw in ApplicationsController
- *(select)* Update PostgreSQL versions and titles in resource selection
- *(database)* Include DatabaseStatusChanged event in activityMonitor dispatch
- *(css)* Tailwind v5 things
- *(service)* Diun ENV for consistency
- *(service)* Memos service name
- *(css)* 8+ issue with new tailwind v4
- *(css)* `bg-coollabs-gradient` not working anymore
- *(ui)* Add back missing service navbar components
- *(deploy)* Update resource timestamp handling in deploy_resource method
- *(patches)* DNF reboot logic is flipped
- *(deployment)* Correct syntax for else statement in docker compose build command
- *(shared)* Remove unused relation from queryDatabaseByUuidWithinTeam function
- *(deployment)* Correct COOLIFY_URL and COOLIFY_FQDN assignments based on parsing version in preview deployments
- *(docker)* Ensure correct parsing of environment variables by limiting explode to 2 parts
- *(project)* Update selected environment handling to use environment name instead of UUID
- *(ui)* Update server status display and improve server addition layout
- *(service)* Neon WS Proxy service not working on ARM64 (#5887)
- *(server)* Enhance error handling in server patch check notifications
- *(PushServerUpdateJob)* Add null checks before updating application and database statuses
- *(environment-variables)* Update label text for build variable checkboxes to improve clarity
- *(service-management)* Update service stop and restart messages for improved clarity and formatting
- *(preview-form)* Update helper text formatting in preview URL template input for better readability
- *(application-management)* Improve stop messages for application, database, and service to enhance clarity and formatting
- *(application-configuration)* Prevent access to preview deployments for deploy_key applications and update menu visibility accordingly
- *(select-component)* Handle exceptions during parameter retrieval and environment selection in the mount method
- *(previews)* Escape container names in stopContainers method to prevent shell injection vulnerabilities
- *(docker)* Add protection against empty container queries in GetContainersStatus to prevent unnecessary updates
- *(modal-confirmation)* Decode HTML entities in confirmation text to ensure proper display
- *(select-component)* Enhance user interaction by adding cursor styles and disabling selection during processing
- *(deployment-show)* Remove unnecessary fixed positioning for button container to improve layout responsiveness
- *(email-notifications)* Change notify method to notifyNow for immediate test email delivery
- *(service-templates)* Update Convex service configuration to use FQDN variables
- *(database-heading)* Simplify stop database message for clarity
- *(navbar)* Remove unnecessary x-init directive for loading proxy configuration
- *(patches)* Add padding to loading message for better visibility during update checks
- *(terminal-connection)* Improve error handling and stability for auto-connection; enhance component readiness checks and retry logic
- *(terminal)* Add unique wire:key to terminal component for improved reactivity and state management
- *(css)* Adjust utility classes in utilities.css for consistent application of Tailwind directives
- *(css)* Refine utility classes in utilities.css for proper Tailwind directive application
- *(install)* Update Docker installation script to use dynamic OS_TYPE and correct installation URL
- *(cloudflare)* Add error handling to automated Cloudflare configuration script
- *(navbar)* Add error handling for proxy status check to improve user feedback
- *(web)* Update user team retrieval method for consistent authentication handling
- *(cloudflare)* Update refresh method to correctly set Cloudflare tunnel status and improve user notification on IP address update
- *(service)* Update service template for affine and add migration service for improved deployment process
- *(supabase)* Update Supabase service images and healthcheck methods for improved reliability
- *(terminal)* Now it should work
- *(degraded-status)* Remove unnecessary whitespace in badge element for cleaner HTML
- *(routes)* Add name to security route for improved route management
- *(migration)* Update default value handling for is_sentinel_enabled column in server_settings
- *(seeder)* Conditionally dispatch CheckAndStartSentinelJob based on server's sentinel status
- *(service)* Disable healthcheck logging for Gotenberg (#6005)
- *(service)* Joplin volume name (#5930)
- *(server)* Update sentinelUpdatedAt assignment to use server's sentinel_updated_at property

### 💼 Other

- Add support for postmarketOS (#5608)
- *(core)* Simplify events for app/db/service status changes

### 🚜 Refactor

- *(service)* Observium
- *(service)* Improve leantime
- *(service)* Imporve limesurvey
- *(service)* Improve CodiMD
- *(service)* Typsense
- *(services)* Improve yamtrack
- *(service)* Improve paymenter
- *(service)* Consolidate configuration change dispatch logic and remove unused navbar component
- *(sidebar)* Simplify server patching link by removing button element
- *(slide-over)* Streamline button element and improve code readability
- *(service)* Enhance modal confirmation component with event dispatching for service stop actions
- *(slide-over)* Enhance class merging for improved component styling
- *(core)* Use property promotion
- *(service)* Improve maybe
- *(applications)* Remove unused docker compose raw decoding
- *(service)* Make TYPESENSE_API_KEY required
- *(ui)* Show toast when server does not work and on stop
- *(service)* Improve superset
- *(service)* Improve Onetimesecret
- *(service)* Improve Seafile
- *(service)* Improve orangehrm
- *(service)* Improve grist
- *(application)* Enhance application stopping logic to support multiple servers
- *(pricing-plans)* Improve label class binding for payment frequency selection
- *(error-handling)* Replace generic Exception with RuntimeException for improved error specificity
- *(error-handling)* Change Exception to RuntimeException for clearer error reporting
- *(service)* Remove informational dispatch during service stop for cleaner execution
- *(server-ui)* Improve layout and messaging in advanced settings and charts views
- *(terminal-access)* Streamline resource retrieval and enhance terminal access messaging in UI
- *(terminal)* Enhance terminal connection management and error handling, including improved reconnection logic and cleanup procedures
- *(application-deployment)* Separate handling of FAILED and CANCELLED_BY_USER statuses for clearer logic and notification
- *(jobs)* Update middleware to include job-specific identifiers for WithoutOverlapping
- *(jobs)* Modify middleware to use job-specific identifier for WithoutOverlapping
- *(environment-variables)* Remove debug logging from bulk submit handling for cleaner code
- *(environment-variables)* Simplify application build pack check in environment variable handling
- *(logs)* Adjust padding in logs view for improved layout consistency
- *(application-deployment)* Streamline post-deployment process by always dispatching container status check
- *(service-management)* Enhance container stopping logic by implementing parallel processing and removing deprecated methods
- *(activity-monitor)* Change activity property visibility and update view references for consistency
- *(activity-monitor)* Enhance layout responsiveness by adjusting class bindings and structure for better display
- *(service-management)* Update stopContainersInParallel method to enforce Server type hint for improved type safety
- *(service-management)* Rearrange docker cleanup logic in StopService to improve readability
- *(database-management)* Simplify docker cleanup logic in StopDatabase to enhance readability
- *(activity-monitor)* Consolidate activity monitoring logic and remove deprecated NewActivityMonitor component
- *(activity-monitor)* Update dispatch method to use activityMonitor instead of deprecated newActivityMonitor
- *(push-server-update)* Enhance application preview handling by incorporating pull request IDs and adding status update protections
- *(docker-compose)* Replace hardcoded Docker Compose configuration with external YAML template for improved database detection testing
- *(test-database-detection)* Rename services for clarity, add new database configurations, and update application service dependencies
- *(database-detection)* Enhance isDatabaseImage function to utilize service configuration for improved detection accuracy
- *(install-scripts)* Update Docker installation process to include manual installation fallback and improve error handling
- *(logs-view)* Update logs display for service containers with improved headings and dynamic key binding
- *(logs)* Enhance container loading logic and improve UI for logs display across various resource types
- *(cloudflare-tunnel)* Enhance layout and structure of Cloudflare Tunnel documentation and confirmation modal
- *(terminal-connection)* Streamline auto-connection logic and improve component readiness checks
- *(logs)* Remove unused methods and debug functionality from Logs.php for cleaner code
- *(remoteProcess)* Update sanitize_utf8_text function to accept nullable string parameter for improved type safety
- *(events)* Remove ProxyStarted event and associated ProxyStartedNotification listener for code cleanup
- *(navbar)* Remove unnecessary parameters from server navbar component for cleaner implementation
- *(proxy)* Remove commented-out listener and method for cleaner code structure
- *(events)* Update ProxyStatusChangedUI constructor to accept nullable teamId for improved flexibility
- *(cloudflare)* Update server retrieval method for improved query efficiency
- *(navbar)* Remove unused PHP use statement for cleaner code
- *(proxy)* Streamline proxy status handling and improve dashboard availability checks
- *(navbar)* Simplify proxy status handling and enhance loading indicators for better user experience
- *(resource-operations)* Filter out build servers from the server list and clean up commented-out code in the resource operations view
- *(execute-container-command)* Simplify connection logic and improve terminal availability checks
- *(navigation)* Remove wire:navigate directive from configuration links for cleaner HTML structure
- *(proxy)* Update StartProxy calls to use named parameter for async option
- *(clone-project)* Enhance server retrieval by including destinations and filtering out build servers
- *(ui)* Terminal
- *(ui)* Remove terminal header from execute-container-command view
- *(ui)* Remove unnecessary padding from deployment, backup, and logs sections

### 📚 Documentation

- Update changelog
- *(service)* Add new docs link for zipline (#5912)
- Update changelog
- Update changelog
- Update changelog

### 🎨 Styling

- *(css)* Update padding utility for password input and add newline in app.css
- *(css)* Refine badge utility styles in utilities.css
- *(css)* Enhance badge utility styles in utilities.css

### ⚙️ Miscellaneous Tasks

- *(versions)* Update coolify version to 4.0.0-beta.419 and nightly version to 4.0.0-beta.420 in configuration files
- *(service)* Rename hoarder server to karakeep (#5607)
- *(service)* Update Supabase services (#5708)
- *(service)* Remove unused documenso env
- *(service)* Formatting and cleanup of ryot
- *(docs)* Remove changelog and add it to gitignore
- *(versions)* Update version to 4.0.0-beta.419
- *(service)* Diun formatting
- *(docs)* Update CHANGELOG.md
- *(service)* Switch convex vars
- *(service)* Pgbackweb formatting and naming update
- *(service)* Remove typesense default API key
- *(service)* Format yamtrack healthcheck
- *(core)* Remove unused function
- *(ui)* Remove unused stopEvent code
- *(service)* Remove unused env
- *(tests)* Update test environment database name and add new feature test for converting container environment variables to array
- *(service)* Update Immich service (#5886)
- *(service)* Remove unused logo
- *(api)* Update API docs
- *(dependencies)* Update package versions in composer.json and composer.lock for improved compatibility and performance
- *(dependencies)* Update package versions in package.json and package-lock.json for improved stability and features
- *(version)* Update coolify-realtime to version 1.0.9 in docker-compose and versions files
- *(version)* Update coolify version to 4.0.0-beta.420 and nightly version to 4.0.0-beta.421
- *(service)* Changedetection remove unused code

## [4.0.0-beta.417] - 2025-05-07

### 🐛 Bug Fixes

- *(select)* Update fallback logo path to use absolute URL for improved reliability

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update coolify version to 4.0.0-beta.418

## [4.0.0-beta.416] - 2025-05-05

### 🚀 Features

- *(migration)* Add 'is_migrated' and 'custom_type' columns to service_applications and service_databases tables
- *(backup)* Implement custom database type selection and enhance scheduled backups management
- *(README)* Add Gozunga and Macarne to sponsors list
- *(redis)* Add scheduled cleanup command for Redis keys and enhance cleanup logic

### 🐛 Bug Fixes

- *(service)* Graceful shutdown of old container (#5731)
- *(ServerCheck)* Enhance proxy container check to ensure it is running before proceeding
- *(applications)* Include pull_request_id in deployment queue check to prevent duplicate deployments
- *(database)* Update label for image input field to improve clarity
- *(ServerCheck)* Set default proxy status to 'exited' to handle missing container state
- *(database)* Reduce container stop timeout from 300 to 30 seconds for improved responsiveness
- *(ui)* System theming for charts (#5740)
- *(dev)* Mount points?!
- *(dev)* Proxy mount point
- *(ui)* Allow adding scheduled backups for non-migrated databases
- *(DatabaseBackupJob)* Escape PostgreSQL password in backup command (#5759)
- *(ui)* Correct closing div tag in service index view

### 🚜 Refactor

- *(Database)* Streamline container shutdown process and reduce timeout duration
- *(core)* Streamline container stopping process and reduce timeout duration; update related methods for consistency
- *(database)* Update DB facade usage for consistency across service files
- *(database)* Enhance application conversion logic and add existence checks for databases and applications
- *(actions)* Standardize method naming for network and configuration deletion across application and service classes
- *(logdrain)* Consolidate log drain stopping logic to reduce redundancy
- *(StandaloneMariadb)* Add type hint for destination method to improve code clarity
- *(DeleteResourceJob)* Streamline resource deletion logic and improve conditional checks for database types
- *(jobs)* Update middleware to prevent job release after expiration for CleanupInstanceStuffsJob, RestartProxyJob, and ServerCheckJob
- *(jobs)* Unify middleware configuration to prevent job release after expiration for DockerCleanupJob and PushServerUpdateJob

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(seeder)* Update git branch from 'main' to 'v4.x' for multiple examples in ApplicationSeeder
- *(versions)* Update coolify version to 4.0.0-beta.417 and nightly version to 4.0.0-beta.418

## [4.0.0-beta.415] - 2025-04-29

### 🐛 Bug Fixes

- *(ui)* Remove required attribute from image input in service application view
- *(ui)* Change application image validation to be nullable in service application view
- *(Server)* Correct proxy path formatting for Traefik proxy type

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update coolify version to 4.0.0-beta.416 and nightly version to 4.0.0-beta.417 in configuration files; fix links in deployment view

## [4.0.0-beta.414] - 2025-04-28

### 🐛 Bug Fixes

- *(ui)* Disable livewire navigate feature (causing spam of setInterval())

## [4.0.0-beta.413] - 2025-04-28

### 💼 Other

- Adjust Workflows for v5 (#5689)

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(workflows)* Adjust workflow for announcement

## [4.0.0-beta.411] - 2025-04-23

### 🚀 Features

- *(deployment)* Add repository_project_id handling for private GitHub apps and clean up unused Caddy label logic
- *(api)* Enhance OpenAPI specifications with token variable and additional key attributes
- *(docker)* Add HTTP Basic Authentication support and enhance hostname parsing in Docker run conversion
- *(api)* Add HTTP Basic Authentication fields to OpenAPI specifications and enhance PrivateKey model descriptions
- *(README)* Add InterviewPal sponsorship link and corresponding SVG icon

### 🐛 Bug Fixes

- *(backup-edit)* Conditionally enable S3 checkbox based on available validated S3 storage
- *(source)* Update no sources found message for clarity
- *(api)* Correct middleware for service update route to ensure proper permissions
- *(api)* Handle JSON response in service creation and update methods for improved error handling
- Add 201 json code to servers validate api response
- *(docker)* Ensure password hashing only occurs when HTTP Basic Authentication is enabled
- *(docker)* Enhance hostname and GPU option validation in Docker run to compose conversion
- *(terminal)* Enhance WebSocket client verification with authorized IPs in terminal server
- *(ApplicationDeploymentJob)* Ensure source is an object before checking GitHub app properties

### 🚜 Refactor

- *(jobs)* Comment out unused Caddy label handling in ApplicationDeploymentJob and simplify proxy path logic in Server model
- *(database)* Simplify database type checks in ServiceDatabase and enhance image validation in Docker helper
- *(shared)* Remove unused ray debugging statement from newParser function
- *(applications)* Remove redundant error response in create_env method
- *(api)* Restructure routes to include versioning and maintain existing feedback endpoint
- *(api)* Remove token variable from OpenAPI specifications for clarity
- *(environment-variables)* Remove protected variable checks from delete methods for cleaner logic
- *(http-basic-auth)* Rename 'http_basic_auth_enable' to 'http_basic_auth_enabled' across application files for consistency
- *(docker)* Remove debug statement and enhance hostname handling in Docker run conversion
- *(server)* Simplify proxy path logic and remove unnecessary conditions

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update coolify version to 4.0.0-beta.411 and nightly version to 4.0.0-beta.412 in configuration files
- *(versions)* Update coolify version to 4.0.0-beta.412 and nightly version to 4.0.0-beta.413 in configuration files
- *(versions)* Update coolify version to 4.0.0-beta.413 and nightly version to 4.0.0-beta.414 in configuration files
- *(versions)* Update realtime version to 1.0.8 in versions.json
- *(versions)* Update realtime version to 1.0.8 in versions.json
- *(docker)* Update soketi image version to 1.0.8 in production configuration files
- *(versions)* Update coolify version to 4.0.0-beta.414 and nightly version to 4.0.0-beta.415 in configuration files

## [4.0.0-beta.410] - 2025-04-18

### 🚀 Features

- Add HTTP Basic Authentication
- *(readme)* Add new sponsors Supadata AI and WZ-IT to the README
- *(core)* Enable magic env variables for compose based applications

### 🐛 Bug Fixes

- *(application)* Append base directory to git branch URLs for improved path handling
- *(templates)* Correct casing of "denokv" to "denoKV" in service templates JSON
- *(navbar)* Update error message link to use route for environment variables navigation
- Unsend template
- Replace ports with expose
- *(templates)* Update Unsend compose configuration for improved service integration

### 🚜 Refactor

- *(jobs)* Update WithoutOverlapping middleware to use expireAfter for better queue management

### 📚 Documentation

- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Bump coolify version to 4.0.0-beta.410 and update nightly version to 4.0.0-beta.411 in configuration files
- *(templates)* Update plausible and clickhouse images to latest versions and remove mail service

## [4.0.0-beta.409] - 2025-04-16

### 🐛 Bug Fixes

- *(parser)* Transform associative array labels into key=value format for better compatibility
- *(redis)* Update username and password input handling to clarify database sync requirements
- *(source)* Update connected source display to handle cases with no source connected

### 🚜 Refactor

- *(source)* Conditionally display connected source and change source options based on private key presence

### ⚙️ Miscellaneous Tasks

- *(versions)* Bump coolify version to 4.0.0-beta.409 in configuration files

## [4.0.0-beta.408] - 2025-04-14

### 🚀 Features

- *(OpenApi)* Enhance OpenAPI specifications by adding UUID parameters for application, project, and service updates; improve deployment listing with pagination parameters; update command signature for OpenApi generation
- *(subscription)* Enhance subscription management with loading states and Stripe status checks

### 🐛 Bug Fixes

- *(pre-commit)* Correct input redirection for /dev/tty and add OpenAPI generation command
- *(pricing-plans)* Adjust grid class for improved layout consistency in subscription pricing plans
- *(migrations)* Make stripe_comment field nullable in subscriptions table
- *(mongodb)* Also apply custom config when SSL is enabled
- *(templates)* Correct casing of denoKV references in service templates and YAML files
- *(deployment)* Handle missing destination in deployment process to prevent errors

### 💼 Other

- Add missing openapi items to PrivateKey

### 🚜 Refactor

- *(commands)* Reorganize OpenAPI and Services generation commands into a new namespace for better structure; remove old command files
- *(Dockerfile)* Remove service generation command from the build process to streamline Dockerfile and improve build efficiency
- *(navbar-delete-team)* Simplify modal confirmation layout and enhance button styling for better user experience
- *(Server)* Remove debug logging from isReachableChanged method to clean up code and improve performance

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update nightly version to 4.0.0-beta.410
- *(pre-commit)* Remove OpenAPI generation command from pre-commit hook
- *(versions)* Update realtime version to 1.0.7 and bump dependencies in package.json

## [4.0.0-beta.407] - 2025-04-09

### 📚 Documentation

- Update changelog

## [4.0.0-beta.406] - 2025-04-05

### 🚀 Features

- *(Deploy)* Add info dispatch for proxy check initiation
- *(EnvironmentVariable)* Add handling for Redis credentials in the environment variable component
- *(EnvironmentVariable)* Implement protection for critical environment variables and enhance deletion logic
- *(Application)* Add networkAliases attribute for handling network aliases as JSON or comma-separated values
- *(GithubApp)* Update default events to include 'pull_request' and streamline event handling
- *(CleanupDocker)* Add support for realtime image management in Docker cleanup process
- *(Deployment)* Enhance queue_application_deployment to handle existing deployments and return appropriate status messages
- *(SourceManagement)* Add functionality to change Git source and display current source in the application settings

### 🐛 Bug Fixes

- *(CheckProxy)* Update port conflict check to ensure accurate grep matching
- *(CheckProxy)* Refine port conflict detection with improved grep patterns
- *(CheckProxy)* Enhance port conflict detection by adjusting ss command for better output
- *(api)* Add back validateDataApplications (#5539)
- *(CheckProxy, Status)* Prevent proxy checks when force_stop is active; remove debug statement in General
- *(Status)* Conditionally check proxy status and refresh button based on force_stop state
- *(General)* Change redis_password property to nullable string
- *(DeployController)* Update request handling to use input method and enhance OpenAPI description for deployment endpoint

### 💼 Other

- Add missing UUID to openapi spec

### 🚜 Refactor

- *(Server)* Use data_get for safer access to settings properties in isFunctional method
- *(Application)* Rename network_aliases to custom_network_aliases across the application for clarity and consistency
- *(ApplicationDeploymentJob)* Streamline environment variable handling by introducing generate_coolify_env_variables method and consolidating logic for pull request and main branch scenarios
- *(ApplicationDeploymentJob, ApplicationDeploymentQueue)* Improve deployment status handling and log entry management with transaction support
- *(SourceManagement)* Sort sources by name and improve UI for changing Git source with better error handling
- *(Email)* Streamline SMTP and resend settings handling in copyFromInstanceSettings method
- *(Email)* Enhance error handling in SMTP and resend methods by passing context to handleError function
- *(DynamicConfigurations)* Improve handling of dynamic configuration content by ensuring fallback to empty string when content is null
- *(ServicesGenerate)* Update command signature from 'services:generate' to 'generate:services' for consistency; update Dockerfile to run service generation during build; update Odoo image version to 18 and add extra addons volume in compose configuration
- *(Dockerfile)* Streamline RUN commands for improved readability and maintainability by adding line continuations
- *(Dockerfile)* Reintroduce service generation command in the build process for consistency and ensure proper asset compilation

### ⚙️ Miscellaneous Tasks

- *(versions)* Bump version to 406
- *(versions)* Bump version to 407 and 408 for coolify and nightly
- *(versions)* Bump version to 408 for coolify and 409 for nightly

## [4.0.0-beta.405] - 2025-04-04

### 🚀 Features

- *(api)* Update OpenAPI spec for services (#5448)
- *(proxy)* Enhance proxy handling and port conflict detection

### 🐛 Bug Fixes

- *(api)* Used ssh keys can be deleted
- *(email)* Transactional emails not sending

### 🚜 Refactor

- *(CheckProxy)* Replace 'which' with 'command -v' for command availability checks

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Bump version to 406
- *(versions)* Bump version to 407

## [4.0.0-beta.404] - 2025-04-03

### 🚀 Features

- *(lang)* Added Azerbaijani language updated turkish language. (#5497)
- *(lang)* Added Portuguese from Brazil language (#5500)
- *(lang)* Add Indonesian language translations (#5513)

### 🐛 Bug Fixes

- *(docs)* Comment out execute for now
- *(installation)* Mount the docker config
- *(installation)* Path to config file for docker login
- *(service)* Add health check to Bugsink service (#5512)
- *(email)* Emails are not sent in multiple cases
- *(deployments)* Use graceful shutdown instead of `rm`
- *(docs)* Contribute service url (#5517)
- *(proxy)* Proxy restart does not work on domain
- *(ui)* Only show copy button on https
- *(database)* Custom config for MongoDB (#5471)

### 📚 Documentation

- Update changelog
- Update changelog
- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(service)* Remove unused code in Bugsink service
- *(versions)* Update version to 404
- *(versions)* Bump version to 403 (#5520)
- *(versions)* Bump version to 404

## [4.0.0-beta.402] - 2025-04-01

### 🚀 Features

- *(deployments)* Add list application deployments api route
- *(deploy)* Add pull request ID parameter to deploy endpoint
- *(api)* Add pull request ID parameter to applications endpoint
- *(api)* Add endpoints for retrieving application logs and deployments
- *(lang)* Added Norwegian language (#5280)
- *(dep)* Bump all dependencies

### 🐛 Bug Fixes

- Only get apps for the current team
- *(DeployController)* Cast 'pr' query parameter to integer
- *(deploy)* Validate team ID before deployment
- *(wakapi)* Typo in env variables and add some useful variables to wakapi.yaml (#5424)
- *(ui)* Instance Backup settings

### 🚜 Refactor

- *(dev)* Remove OpenAPI generation functionality
- *(migration)* Enhance local file volumes migration with logging

### ⚙️ Miscellaneous Tasks

- *(service)* Update minecraft service ENVs
- *(service)* Add more vars to infisical.yaml (#5418)
- *(service)* Add google variables to plausible.yaml (#5429)
- *(service)* Update authentik.yaml versions (#5373)
- *(core)* Remove redocs
- *(versions)* Update coolify version numbers to 4.0.0-beta.403 and 4.0.0-beta.404

## [4.0.0-beta.401] - 2025-03-28

### 📚 Documentation

- Update changelog
- Update changelog

## [4.0.0-beta.400] - 2025-03-27

### 🚀 Features

- *(database)* Disable MongoDB SSL by default in migration
- *(database)* Add CA certificate generation for database servers
- *(application)* Add SPA configuration and update Nginx generation logic

### 🐛 Bug Fixes

- *(file-storage)* Double save on compose volumes
- *(parser)* Add logging support for applications in services

### 🚜 Refactor

- *(proxy)* Improve port availability checks with multiple methods
- *(database)* Update MongoDB SSL configuration for improved security
- *(database)* Enhance SSL configuration handling for various databases
- *(notifications)* Update Telegram button URL for staging environment
- *(models)* Remove unnecessary cloud check in isEnabled method
- *(database)* Streamline event listeners in Redis General component
- *(database)* Remove redundant database status display in MongoDB view
- *(database)* Update import statements for Auth in database components
- *(database)* Require PEM key file for SSL certificate regeneration
- *(database)* Change MySQL daemon command to MariaDB daemon
- *(nightly)* Update version numbers and enhance upgrade script
- *(versions)* Update version numbers for coolify and nightly
- *(email)* Validate team membership for email recipients
- *(shared)* Simplify deployment status check logic
- *(shared)* Add logging for running deployment jobs
- *(shared)* Enhance job status check to include 'reserved'
- *(email)* Improve error handling by passing context to handleError
- *(email)* Streamline email sending logic and improve configuration handling
- *(email)* Remove unnecessary whitespace in email sending logic
- *(email)* Allow custom email recipients in email sending logic
- *(email)* Enhance sender information formatting in email logic
- *(proxy)* Remove redundant stop call in restart method
- *(file-storage)* Add loadStorageOnServer method for improved error handling
- *(docker)* Parse and sanitize YAML compose file before encoding
- *(file-storage)* Improve layout and structure of input fields
- *(email)* Update label for test email recipient input
- *(database-backup)* Remove existing Docker container before backup upload
- *(database)* Improve decryption and deduplication of local file volumes
- *(database)* Remove debug output from volume update process

### 📚 Documentation

- Update changelog
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(versions)* Update version numbers for coolify and nightly

### ◀️ Revert

- Encrypting mount and fs_path

## [4.0.0-beta.399] - 2025-03-25

### 🚀 Features

- *(service)* Neon
- *(migration)* Add `ssl_certificates` table and model
- *(migration)* Add ssl setting to `standalone_postgresqls` table
- *(ui)* Add ssl settings to Postgres ui
- *(db)* Add ssl mode to Postgres URLs
- *(db)* Setup ssl during Postgres start
- *(migration)* Encrypt local file volumes content and paths
- *(ssl)* Ssl generation helper
- *(ssl)* Migrate to `ECC`certificates using `secp521r1`
- *(ssl)* Improve SSL helper
- *(ssl)* Add a Coolify CA Certificate to all servers
- *(seeder)* Call CA SSL seeder in prod and dev
- *(ssl)* Add Coolify CA Certificate when adding a new server
- *(installer)* Create CA folder during installation
- *(ssl)* Improve SSL helper
- *(ssl)* Use new improved helper for SSL generation
- *(ui)* Add CA cert UI
- *(ui)* New copy button component
- *(ui)* Use new copy button component everywhere
- *(ui)* Improve server advanced view
- *(migration)* Add CN and alternative names to DB
- *(databases)* Add CA SSL crt location to Postgres URLs
- *(ssl)* Improve ssl generation
- *(ssl)* Regenerate SSL certs job
- *(ssl)* Regenerate certificate and valid until UI
- *(ssl)* Regenerate CA cert and all other certs logic
- *(ssl)* Add full MySQL SSL Support
- *(ssl)* Add full MariaDB SSL support
- *(ssl)* Add `openssl.conf` to configure SSL extension properly
- *(ssl)* Improve SSL generation and security a lot
- *(ssl)* Check for SSL renewal twice daily
- *(ssl)* Add SSL relationships to all DBs
- Add full SSL support to MongoDB
- *(ssl)* Fix some issues and improve ssl generation helper
- *(ssl)* Ability to create `.pem` certs and add `clientAuth` to `extendedKeyUsage`
- *(ssl)* New modes for MongoDB and get `caCert` and `mountPath` correctly
- *(ssl)* Full SSL support for Redis
- New mode implementation for MongoDB
- *(ssl)* Improve Redis and remove modes
- Full SSL support for DrangonflyDB
- SSL notification
- *(github-source)* Enhance GitHub App configuration with manual and private key support
- *(ui)* Improve GitHub repository selection and styling
- *(database)* Implement two-step confirmation for database deletion
- *(assets)* Add new SVG logo for Coolify
- *(install)* Enhance Docker address pool configuration and validation
- *(install)* Improve Docker address pool management and service restart logic
- *(install)* Add missing env variable to install script
- *(LocalFileVolume)* Add binary file detection and update UI logic
- *(templates)* Change glance for v0.7
- *(templates)* Add Freescout service template
- *(service)* Add Evolution API template
- *(service)* Add evolution-api and neon-ws-proxy templates
- *(svg)* Add coolify and evolution-api SVG logos
- *(api)* Add api to create custom services
- *(api)* Separate create and one-click routes
- *(api)* Update Services api routes and handlers
- *(api)* Unify service creation endpoint and enhance validation
- *(notifications)* Add discord ping functionality and settings
- *(user)* Implement session deletion on password reset
- *(github)* Enhance repository loading and validation in applications

### 🐛 Bug Fixes

- *(api)* Docker compose based apps creationg through api
- *(database)* Improve database type detection for Supabase Postgres images
- *(ssl)* Permission of ssl crt and key inside the container
- *(ui)* Make sure file mounts do not showing the encrypted values
- *(ssl)* Make default ssl mode require not verify-full as it does not need a ca cert
- *(ui)* Select component should not always uses title case
- *(db)* SSL certificates table and model
- *(migration)* Ssl certificates table
- *(databases)* Fix database name users new `uuid` instead of DB one
- *(database)* Fix volume and file mounts and naming
- *(migration)* Store subjectAlternativeNames as a json array in the db
- *(ssl)* Make sure the subjectAlternativeNames are unique and stored correctly
- *(ui)* Certificate expiration data is null before starting the DB
- *(deletion)* Fix DB deletion
- *(ssl)* Improve SSL cert file mounts
- *(ssl)* Always create ca crt on disk even if it is already there
- *(ssl)* Use mountPath parameter not a hardcoded path
- *(ssl)* Use 1 instead of on for mysql
- *(ssl)* Do not remove SSL directory
- *(ssl)* Wrong ssl cert is loaded to the server and UI error when regenerating SSL
- *(ssl)* Make sure when regenerating the CA cert it is not overwritten with a server cert
- *(ssl)* Regenerating certs for a specific DB
- *(ssl)* Fix MariaDB and MySQL need CA cert
- *(ssl)* Add mount path to DB to fix regeneration of certs
- *(ssl)* Fix SSL regeneration to sign with CA cert and use mount path
- *(ssl)* Get caCert correctly
- *(ssl)* Remove caCert even if it is a folder by accident
- *(ssl)* Ger caCert and `mountPath` correctly
- *(ui)* Only show Regenerate SSL Certificates button when there is a cert
- *(ssl)* Server id
- *(ssl)* When regenerating SSL certs the cert is not singed with the new CN
- *(ssl)* Adjust ca paths for MySQL
- *(ssl)* Remove mode selection for MariaDB as it is not supported
- *(ssl)* Permission issue with MariDB cert and key and paths
- *(ssl)* Rename Redis mode to verify-ca as it is not verify-full
- *(ui)* Remove unused mode for MongoDB
- *(ssl)* KeyDB port and caCert args are missing
- *(ui)* Enable SSL is not working correctly for KeyDB
- *(ssl)* Add `--tls` arg to DrangflyDB
- *(notification)* Always send SSL notifications
- *(database)* Change default value of enable_ssl to false for multiple tables
- *(ui)* Correct grammatical error in 404 page
- *(seeder)* Update GitHub app name in GithubAppSeeder
- *(plane)* Update APP_RELEASE to v0.25.2 in environment configuration
- *(domain)* Dispatch refreshStatus event after successful domain update
- *(database)* Correct container name generation for service databases
- *(database)* Limit container name length for database proxy
- *(database)* Handle unsupported database types in StartDatabaseProxy
- *(database)* Simplify container name generation in StartDatabaseProxy
- *(install)* Handle potential errors in Docker address pool configuration
- *(backups)* Retention settings
- *(redis)* Set default redis_username for new instances
- *(core)* Improve instantSave logic and error handling
- *(general)* Correct link to framework specific documentation
- *(core)* Redirect healthcheck route for dockercompose applications
- *(api)* Use name from request payload
- *(issue#4746)* Do not use setGitImportSettings inside of generateGitLsRemoteCommands
- Correct some spellings
- *(service)* Replace deprecated credentials env variables on keycloak service
- *(keycloak)* Update keycloak image version to 26.1
- *(console)* Handle missing root user in password reset command
- *(ssl)* Handle missing CA certificate in SSL regeneration job
- *(copy-button)* Ensure text is safely passed to clipboard

### 💼 Other

- Bump Coolify to 4.0.0-beta.400
- *(migration)* Add SSL fields to database tables
- SSL Support for KeyDB

### 🚜 Refactor

- *(ui)* Unhide log toggle in application settings
- *(nginx)* Streamline default Nginx configuration and improve error handling
- *(install)* Clean up install script and enhance Docker installation logic
- *(ScheduledTask)* Clean up code formatting and remove unused import
- *(app)* Remove unused MagicBar component and related code
- *(database)* Streamline SSL configuration handling across database types
- *(application)* Streamline healthcheck parsing from Dockerfile
- *(notifications)* Standardize getRecipients method signatures
- *(configuration)* Centralize configuration management in ConfigurationRepository
- *(docker)* Update image references to use centralized registry URL
- *(env)* Add centralized registry URL to environment configuration
- *(storage)* Simplify file storage iteration in Blade template
- *(models)* Add is_directory attribute to LocalFileVolume model
- *(modal)* Add ignoreWire attribute to modal-confirmation component
- *(invite-link)* Adjust layout for better responsiveness in form
- *(invite-link)* Enhance form layout for improved responsiveness
- *(network)* Enhance docker network creation with ipv6 fallback
- *(network)* Check for existing coolify network before creation
- *(database)* Enhance encryption process for local file volumes

### 📚 Documentation

- Update changelog
- Update changelog
- *(CONTRIBUTING)* Add note about Laravel Horizon accessibility
- Update changelog

### ⚙️ Miscellaneous Tasks

- *(migration)* Remove unused columns
- *(ssl)* Improve code in ssl helper
- *(migration)* Ssl cert and key should not be nullable
- *(ssl)* Rename CA cert to `coolify-ca.crt` because of conflicts
- Rename ca crt folder to ssl
- *(ui)* Improve valid until handling
- Improve code quality suggested by code rabbit
- *(supabase)* Update Supabase service template and Postgres image version
- *(versions)* Update version numbers for coolify and nightly

## [4.0.0-beta.398] - 2025-03-01

### 🚀 Features

- Use tags in update
- New update process (#115)
- VaultWarden service
- Www <-> non-www redirection for apps
- Www <-> non-www redirection
- Follow logs
- Generate www & non-www SSL certs
- Basic password reset form
- Scan for lock files and set right commands
- Public port range (WIP)
- Ports range
- Random subdomain for demo
- Random domain for services
- Astro buildpack
- 11ty buildpack
- Registration page
- Languagetool service
- Send version with update request
- Service secrets
- Webhooks inititate all applications with the correct branch
- Check ssl for new apps/services first
- Autodeploy pause
- Install pnpm into docker image if pnpm lock file is used
- Add PHP modules
- Use compose instead of normal docker cmd
- Be able to redeploy PRs
- Add n8n.io service
- Add update kuma service
- Ghost service
- Initial python support
- Add loading on register button
- *(dev)* Allow windows users to use pnpm dev
- MeiliSearch service
- Add abilitry to paste env files
- Wordpress on-demand SFTP
- Finalize on-demand sftp for wp
- PHP Composer support
- Working on-demand sftp to wp data
- Admin team sees everything
- Able to change service version/tag
- Basic white labeled version
- Able to modify database passwords
- Add persistent storage for services
- Multiply dockerfile locations for docker buildpack
- Testing fluentd logging driver
- Fluentbit investigation
- Initial deno support
- Deno DB migration
- Show exited containers on UI & better UX
- Query container state periodically
- Install svelte-18n and init setup
- Umami service
- Coolify auto-updater
- Autoupdater
- Select base image for buildpacks
- Hasura as a service
- Gzip compression
- Laravel buildpack is working!
- Laravel
- Fider service
- Database and services logs
- DNS check settings for SSL generation
- Cancel builds!
- Basic server usage on dashboard
- Show usage trends
- Usage on dashboard
- Custom script path for Plausible
- WP could have custom db
- Python image selection
- PageLoader
- Database + service usage
- Ability to change deployment type for nextjs
- Ability to change deployment type for nuxtjs
- Gitpod ready code(almost)
- Add Docker buildpack exposed port setting
- Custom port for git instances
- Gitpod integration
- Init moodle and separate stuffs to shared package
- Moodle init
- Remote docker engine init
- Working on remote docker engine
- Rde
- Remote docker engine
- Ipv4 and ipv6
- Contributors
- Add arch to database
- Stop preview deployment
- Persistent storage for all services
- Cleanup clickhouse db
- Init heroku buildpacks
- Databases on ARM
- Mongodb arm support
- New dashboard
- Appwrite service
- Heroku deployments
- Deploy bots (no domains)
- Custom dns servers
- Import public repos (wip)
- Public repo deployment
- Force rebuild + env.PORT for port + public repo build
- Add GlitchTip service
- Searxng service
- *(ui)* Rework home UI and with responsive design
- New service - weblate
- Restart application
- Show elapsed time on running builds
- Github allow fual branches
- Gitlab dual branch
- Taiga
- *(routes)* Rework ui from login and register page
- Add traefik acme json to coolify container
- Database secrets
- New servers view
- Add queue reset button
- Previewapplications init
- PreviewApplications finalized
- Fluentbit
- Show remote servers
- *(layout)* Added drawer when user is in mobile
- Re-apply ui improves
- *(ui)* Improve header of pages
- *(styles)* Make header css component
- *(routes)* Improve ui for apps, databases and services logs
- Add migration button to appwrite
- Custom certificate
- Ssl cert on traefik config
- Refresh resource status on dashboard
- Ssl certificate sets custom ssl for applications
- System-wide github apps
- Cleanup unconfigured applications
- Cleanup unconfigured services and databases
- Docker compose support
- Docker compose
- Docker compose
- Monitoring by container
- Initial support for specific git commit
- Add default to latest commit and support for gitlab
- Redirect catch-all rule
- Rollback coolify
- Only show expose if no proxy conf defined in template
- Custom/private docker registries
- Use registry for building
- Docker registries working
- Custom docker compose file location in repo
- Save doNotTrackData to db
- Add default sentry
- Do not track in settings
- System wide git out of beta
- Custom previewseparator
- Sentry frontend
- Able to host static/php sites on arm
- Save application data before deploying
- SimpleDockerfile deployment
- Able to push image to docker registry
- Revert to remote image
- *(api)* Name label
- Add Openblocks icon
- Adding icon for whoogle
- *(ui)* Add libretranslate service icon
- Handle invite_only plausible analytics
- Init h2c (http2/grpc) support
- Http + h2c paralel
- Github raw icon url
- Remove svg support
- Add host path to any container
- Able to control multiplexing
- Add runRemoteCommandSync
- Github repo with deployment key
- Add persistent volumes
- Debuggable executeNow commands
- Add private gh repos
- Delete gh app
- Installation/update github apps
- Auto-deploy
- Deploy key based deployments
- Resource limits
- Long running queue with 1 hour of timeout
- Add arm build to dev
- Disk cleanup threshold by server
- Notify user of disk cleanup init
- Pricing plans ans subs
- Add s3 storages
- Init postgresql database
- Add backup notifications
- Dockerfile build pack
- Cloud
- Force password reset + waitlist
- Send internal notification to discord
- Monitor server connection
- Invite by email from waitlist
- Rolling update
- Add resend as transactional emails
- Send request in cloud
- Add discord notifications
- Public database
- Telegram topics separation
- Developer view for env variables
- Cache team settings
- Generate public key from private keys
- Able to invite more people at once
- Trial
- Dynamic trial period
- Ssh-agent instead of filesystem based ssh keys
- New container status checks
- Generate ssh key
- Sentry add email for better support
- Healthcheck for apps
- Add cloudflare tunnel support
- Services
- Image tag for services
- Container logs
- Reset root password
- Attach Coolify defined networks to services
- Delete resource command
- Multiselect removable resources
- Disable service, required version
- Basedir / monorepo initial support
- Init version of any git deployment
- Deploy private repo with ssh key
- Add email verification for cloud
- Able to deploy docker images
- Add dockerfile location
- Proxy logs on the ui
- Add custom redis conf
- Use docker login credentials from server
- Able to customize docker labels on applications
- Show if config is not applied
- Standalone mongodb
- Cloning project
- Api tokens + deploy webhook
- Start all kinds of things
- Simple search functionality
- Mysql, mariadb
- Lock environment variables
- Download local backups
- Improve deployment time by a lot
- Deployment logs fullscreen
- Service database backups
- Make service databases public
- Log drain (wip)
- Enable/disable log drain by service
- Log drainer container check
- Add docker engine support install script to rhel based systems
- Save timestamp configuration for logs
- Custom log drain endpoints
- Auto-restart tcp proxies for databases
- Execute command in container
- Autoupdate env during seed
- Disable autoupdate
- Randomly sleep between executions
- Pull latest images for services
- Custom docker compose commands
- Add environment description + able to change name
- Raw docker compose deployments
- Add www-non-www redirects to traefik
- Import backups
- Search between resources
- Move resources between projects / environments
- Clone any resource
- Shared environments
- Concurrent builds / server
- Able to deploy multiple resources with webhook
- Add PR comments
- Dashboard live deployment view
- Added manual webhook support for bitbucket
- Add initial support for custom docker run commands
- Cleanup unreachable servers
- Tags and tag deploy webhooks
- Clone to env
- Multi deployments
- Cleanup queue
- Magic for traefik redirectregex in services
- Revalidate server
- Disable gzip compression on service applications
- Save github app permission locally
- Minversion for services
- Able to add dynamic configurations from proxy dashboard
- Custom server limit
- Delay container/server jobs
- Add static ipv4 ipv6 support
- Server disabled by overflow
- Preview deployment logs
- Collect webhooks during maintenance
- Logs and execute commands with several servers
- Domains api endpoint
- Resources api endpoint
- Team api endpoint
- Add deployment details to deploy endpoint
- Add deployments api
- Experimental caddy support
- Dynamic configuration for caddy
- Reset password
- Show resources on source page
- Able to run scheduler/horizon programatically
- Change page width
- Watch paths
- Able to make rsa/ed ssh keys
- *(application)* Update submodules after git checkout
- Add amazon linux 2023
- Upload large backups
- Edit domains easier for compose
- Able to delete configuration from server
- Configuration checker for all resources
- Allow tab in textarea
- Dynamic mux time
- Literal env variables
- Lazy load stuffs + tell user if compose based deployments have missing envs
- Can edit file/dir volumes from ui in compose based apps
- Upgrade Appwrite service template to 1.5
- Upgrade Appwrite service template to 1.5
- Add db name to backup notifications
- Initial datalist
- Update service contribution docs URL
- The final pricing plan, pay-as-you-go
- Add container name to network aliases in ApplicationDeploymentJob
- Add lazy loading for images in General.php and improve Docker Compose file handling in Application.php
- Experimental sentinel
- Start Sentinel on servers.
- Pull new sentinel image and restart container
- Init metrics
- Add AdminRemoveUser command to remove users from the database
- Adding new COOLIFY_ variables
- Save commit message and better view on deployments
- Toggle label escaping mechanism
- Shows the latest deployment commit + message on status
- New manual update process + remove next_channel
- Add lastDeploymentInfo and lastDeploymentLink props to breadcrumbs and status components
- Sort envs alphabetically and creation date
- Improve sorting of environment variables in the All component
- Update healthcheck test in StartMongodb action
- Add pull_request_id filter to get_last_successful_deployment method in Application model
- Add hc logs to healthchecks
- Add SerpAPI as a Github Sponsor
- Admin view for deleting users
- Scheduled task failed notification
- If the time seems too long it remains at 0s
- Improve Docker Engine start logic in ServerStatusJob
- If proxy stopped manually, it won't start back again
- Exclude_from_hc magic
- Gitea manual webhooks
- Add container logs in case the container does not start healthy
- Handle incomplete expired subscriptions in Stripe webhook
- Add more persistent storage types
- Add PHP memory limit environment variable to docker-compose.prod.yml
- Add manual update option to UpdateCoolify handle method
- Add port configuration for Vaultwarden service
- Able to change database passwords on the UI. It won't sync to the database.
- Able to add several domains to compose based previews
- Add bounty program link to bug report template
- Add titles
- Db proxy logs
- Easily redirect between www-and-non-www domains
- Add logos for new sponsors
- Add homepage template
- Update homepage.yaml with environment variables and volumes
- Spanish translation
- Cancelling a deployment will check if new could be started.
- Add supaguide logo to donations section
- Nixpacks now could reach local dbs internally
- Add Tigris logo to other/logos directory
- COOLIFY_CONTAINER_NAME predefined variable
- Charts
- Sentinel + charts
- Container metrics
- Add high priority queue
- Add metrics warning for servers without Sentinel enabled
- Add blacksmith logo to donations section
- Preselect server and destination if only one found
- More api endpoints
- Add API endpoint to update application by UUID
- Update statusnook logo filename in compose template
- Local fonts
- More API endpoints
- Bulk env update api endpoint
- Update server settings metrics history days to 7
- New app API endpoint
- Private gh deployments through api
- Lots of api endpoints
- Api api api api api api
- Rename CloudCleanupSubs to CloudCleanupSubscriptions
- Early fraud warning webhook
- Improve internal notification message for early fraud warning webhook
- Add schema for uuid property in app update response
- Cleanup unused docker networks from proxy
- Compose parser v2
- Display time interval for rollback images
- Add security and storage access key env to twenty template
- Add new logo for Latitude
- Enable legacy model binding in Livewire configuration
- Improve error handling in loadComposeFile method
- Add readonly labels
- Preserve git repository
- Force cleanup server
- Create/delete project endpoints
- Add patch request to projects
- Add server api endpoints
- Add branddev logo to README.md
- Update API endpoint summaries
- Update Caddy button label in proxy.blade.php
- Check custom internal name through server's applications.
- New server check job
- Delete team in cloud without subscription
- Coolify init should cleanup stuck networks in proxy
- Add manual update check functionality to settings page
- Update auto update and update check frequencies in settings
- Update Upgrade component to check for latest version of Coolify
- Improve homepage service template
- Support map fields in Directus
- Labels by proxy type
- Able to generate only the required labels for resources
- Preserve git repository with advanced file storages
- Added Windmill template
- Added Budibase template
- Add shm-size for custom docker commands
- Add custom docker container options to all databases
- Able to select different postgres database
- Add new logos for jobscollider and hostinger
- Order scheduled task executions
- Add Code Server environment variables to Service model
- Add coolify build env variables to building phase
- Add new logos for GlueOps, Ubicloud, Juxtdigital, Saasykit, and Massivegrid
- Add new logos for GlueOps, Ubicloud, Juxtdigital, Saasykit, and Massivegrid
- Update server_settings table to force docker cleanup
- Update Docker Compose file with DB_URL environment variable
- Refactor shared.php to improve environment variable handling
- Expose project description in API response
- Add elixir finetunes to the deployment job
- Make coolify full width by default
- Fully functional terminal for command center
- Custom terminal host
- Add buddy logo
- Add nullable constraint to 'fingerprint' column in private_keys table
- *(api)* Add an endpoint to execute a command
- *(api)* Add endpoint to execute a command
- Add ContainerStatusTypes enum for managing container status
- Allow specify use_build_server when creating/updating an application
- Add support for `use_build_server` in API endpoints for creating/updating applications
- Add Mixpost template
- Update resource deletion job to allow configurable options through API
- Add query parameters for deleting configurations, volumes, docker cleanup, and connected networks
- Add command to check application deployment queue
- Support Hetzner S3
- Handle HTTPS domain in ConfigureCloudflareTunnels
- Backup all databases for mysql,mariadb,postgresql
- Restart service without pulling the latest image
- Add strapi template
- Add it-tools service template and logo
- Add homarr service tamplate and logo
- Add Argilla service configuration to Service model
- Add Invoice Ninja service configuration to Service model
- Project search on frontend
- Add ollama service with open webui and logo
- Update setType method to use slug value for type
- Refactor setType method to use slug value for type
- Refactor setType method to use slug value for type
- Add Supertokens template
- Add easyappointments service template
- Add dozzle template
- Adds forgejo service with runners
- Add Mautic 4 and 5 to service templates
- Add keycloak template
- Add onedev template
- Improve search functionality in project selection
- Add customHelper to stack-form
- Add cloudbeaver template
- Add ntfy template
- Add qbittorrent template
- Add Homebox template
- Add owncloud service and logo
- Add immich service
- Auto generate url
- Refactored to work with coolify auto env vars
- Affine service template and logo
- Add LibreTranslate template
- Open version in a new tab
- Add Transmission template
- Add transmission healhcheck
- Add zipline template
- Dify template
- Required envs
- Add EdgeDB
- Show warning if people would like to use sslip with https
- Add is shared to env variables
- Variabel sync and support shared vars
- Add notification settings to server_disk_usage
- Add coder service tamplate and logo
- Debug mode for sentinel
- Add jitsi template
- Add --gpu support for custom docker command
- Add Firefox template
- Add template for Wiki.js
- Add upgrade logs to /data/coolify/source
- Custom nginx configuration for static deployments + fix 404 redirects in nginx conf
- Check local horizon scheduler deployments
- Add internal api docs to /docs/api with auth
- Add proxy type change to create/update apis
- Add MacOS template
- Add Windows template
- *(service)* :sparkles: add mealie
- Add hex magic env var
- Add deploy-only token permission
- Able to deploy without cache on every commit
- Update private key nam with new slug as well
- Allow disabling default redirect, set status to 503
- Add TLS configuration for default redirect in Server model
- Slack notifications
- Introduce root permission
- Able to download schedule task logs
- Migrate old email notification settings from the teams table
- Migrate old discord notification settings from the teams table
- Migrate old telegram notification settings from the teams table
- Add slack notifications to a new table
- Enable success messages again
- Use new notification stuff inside team model
- Some more notification settings and better defaults
- New email notification settings
- New shared function name `is_transactional_emails_enabled()`
- New shared notifications functions
- Email Notification Settings Model
- Telegram notification settings Model
- Discord notification settings Model
- Slack notification settings Model
- New Discord notification UI
- New Slack notification UI
- New telegram UI
- Use new notification event names
- Always sent notifications
- Scheduled task success notification
- Notification trait
- Get discord Webhook form new table
- Get Slack Webhook form new table
- Use new table or instance settings for email
- Use new place for settings and topic IDs for telegram
- Encrypt instance email settings
- Use encryption in instance settings model
- Scheduled task success and failure notifications
- Add docker cleanup success and failure notification settings columns
- UI for docker cleanup success and failure notification
- Docker cleanup email views
- Docker cleanup success and failure notification files
- Scheduled task success email
- Send new docker cleanup notifications
- :passport_control: integrate Authentik authentication with Coolify
- *(notification)* Add Pushover
- Add seeder command and configuration for database seeding
- Add new password magic env with symbols
- Add documenso service
- New ServerReachabilityChanged event
- Use new ServerReachabilityChanged event instead of isDirty
- Add infomaniak oauth
- Add server disk usage check frequency
- Add environment_uuid support and update API documentation
- Add service/resource/project labels
- Add coolify.environment label
- Add database subtype
- Migrate to new encryption options
- New encryption options
- Able to import full db backups for pg/mysql/mariadb
- Restore backup from server file
- Docker volume data cloning
- Move volume data cloning to a Job
- Volume cloning for ResourceOperations
- Remote server volume cloning
- Add horizon server details to queue
- Enhance horizon:manage command with worker restart check
- Add is_coolify_host to the server api responses
- DB migration for Backup retention
- UI for backup retention settings
- New global s3 and local backup deletion function
- Use new backup deletion functions
- Add calibre-web service
- Add actual-budget service
- Add rallly service
- Template for Gotenberg, a Docker-powered stateless API for PDF files
- Enhance import command options with additional guidance and improved checkbox label
- Purify for better sanitization
- Move docker cleanup to its own tab
- DB and Model for docker cleanup executions
- DockerCleanupExecutions relationship
- DockerCleanupDone event
- Get command and output for logs from CleanupDocker
- New sidebar menu and order
- Docker cleanup executions UI
- Add execution log to dockerCleanupJob
- Improve deployment UI
- Root user envs and seeding
- Email, username and password validation when they are set via envs
- Improved error handling and log output
- Add root user configuration variables to production environment
- Add log file check message in upgrade script for better troubleshooting
- Add root user details to install script
- *(core)* Wip version of coolify.json
- *(core)* Add SOURCE_COMMIT variable to build environment in ApplicationDeploymentJob
- *(service)* Update affine.yaml with AI environment variables (#4918)
- *(service)* Add new service Flipt (#4875)
- *(docs)* Update tech stack
- *(terminal)* Show terminal unavailable if the container does not have a shell on the global terminal UI
- *(ui)* Improve deployment UI
- *(template)* Add Open Web UI
- *(templates)* Add Open Web UI service template
- *(ui)* Update GitHub source creation advanced section label
- *(core)* Add dynamic label reset for application settings
- *(ui)* Conditionally enable advanced application settings based on label readonly status
- *(env)* Added COOLIFY_RESOURCE_UUID environment variable
- *(vite)* Add Cloudflare async script and style tag attributes
- *(meta)* Add comprehensive SEO and social media meta tags
- *(core)* Add name to default proxy configuration
- Add application api route
- Container logs
- Remove ansi color from log
- Add lines query parameter
- *(changelog)* Add git cliff for automatic changelog generation
- *(workflows)* Improve changelog generation and workflows
- *(ui)* Add periodic status checking for services
- *(deployment)* Ensure private key is stored in filesystem before deployment
- *(slack)* Show message title in notification previews (#5063)
- *(i18n)* Add Arabic translations (#4991)
- *(i18n)* Add French translations (#4992)
- *(services)* Update `service-templates.json`
- *(ui)* Add top padding to pricing plans view
- *(core)* Add error logging and cron parsing to docker/server schedules
- *(core)* Prevent using servers with existing resources as build servers
- *(ui)* Add textarea switching option in service compose editor
- *(ui)* Add wire:key to two-step confirmation settings
- *(database)* Add index to scheduled task executions for improved query performance
- *(database)* Add index to scheduled database backup executions
- *(billing)* Add Stripe past due subscription status tracking
- *(ui)* Add past due subscription warning banner

### 🐛 Bug Fixes

- Secrets join
- ENV variables set differently
- Capture non-error as error
- Only delete id.rsa in case of it exists
- Status is not available yet
- Docker Engine bug related to live-restore and IPs
- Version
- PreventDefault on a button, thats all
- Haproxy check should not throw error
- Delete all build files
- Cleanup images
- More error handling in proxy configuration + cleanups
- Local static assets
- Check sentry
- Typo
- Package.json
- Build secrets should be visible in runtime
- New secret should have default values
- Validate secrets
- Truncate git clone errors
- Branch used does not throw error
- Typo
- Error handling
- Stopping service without proxy
- Coolify proxy start
- Window error in SSR
- GitHub sync PR's
- Load more button
- Small fixes
- Typo
- Error with follow logs
- IsDomainConfigured
- TransactionIds
- Coolify image cleanup
- Cleanup every 10 mins
- Cleanup images
- Add no user redis to uri
- Secure cookie disabled by default
- Buggy svelte-kit-cookie-session
- Login issues
- SSL app off
- Local docker host
- Typo
- Lets encrypt
- Remove SSL with stop
- SSL off for services
- Grr
- Running state css
- Minor fixes
- Remove force SSL when doing let's encrypt request
- GhToken in session now
- Random port for certbot
- Follow icon
- Plausible volume fixed
- Database connection strings
- Gitlab webhooks fixed
- If DNS not found, do not redirect
- Github token
- Move tokens from session to cookie/store
- Email is lowercased in login
- Lowercase email everywhere
- Use normal docker-compose in dev
- Random network name for demo
- Settings fqdn grr
- Revert default network
- Http for demo, oops
- Docker scanner
- Improvement on image pulls
- Coolify image pulls
- Remove wrong/stuck proxy configurations
- Always use a buildpack
- Add icons for eleventy + astro
- Fix proxy every 10 secs
- Do not remove coolify proxy
- Update version
- Be sure .env exists
- Missing fqdn for services
- Default npm command
- Add coolify-image label for build images
- Cleanup old images, > 3 days
- Better proxy check
- Ssl + sslrenew
- Null proxyhash on restart
- Reconfigure proxy on restart
- Update process
- Reload proxy on ssl cert
- Volume name
- Update process
- Check when a container is running
- Reload haproxy if new cert is added
- Cleanup coolify images
- Application state in UI
- Do not error if proxy is not running
- Personal Gitlab repos
- Autodeploy true by default for GH repos
- No cookie found
- Missing session data
- No error if GitSource is missing
- No webhook secret found?
- Basedir for dockerfiles
- Better queue system + more support on monorepos
- Remove build logs in case of app removed
- Cleanup old builds
- Only cleanup same app
- Add nginx + htaccess files
- Skip ssl cert in case of error
- Volumes
- Cleanup only 2 hours+ old images
- Ghost logo size
- Ghost icon, remove console.log
- List ghost services
- Reload window on settings saved
- Persistent storage on webhooks
- Add license
- Space in repo names
- Gitlab repo url
- No need to dashify anymore
- Registration enabled/disabled
- Add PROTO headers
- Haproxy errors
- Build variables
- Use NodeJS for sveltekit for now
- Ignore coolify proxy error for now
- Python no wsgi
- If user not found
- Rename envs to secrets
- Infinite loop on www domains
- No need to paste clear text env for previews
- Build log fix attempt #1
- Small UI fix on logs
- Lets await!
- Async progress
- Remove console.log
- Build log
- UI
- Gitlab & Github urls
- Secrets build/runtime coudl be changed after save
- Default configuration
- *(php)* If .htaccess file found use apache
- Add default webhook domain for n8n
- Add git lfs while deploying
- Try to update build status several times
- Update stucked builds
- Update stucked builds on startup
- Revert seed
- Lame fixing
- Remove asyncUntil
- Add openssl to image
- Permission issues
- On-demand sFTP for wp
- Fix for fix haha
- Do not pull latest image
- Updated db versions
- Only show proxy for admin team
- Team view for root team
- Do not trigger >1 webhooks on GitLab
- Possible fix for spikes in CPU usage
- Last commit
- Www or not-www, that's the question
- Fix for the fix that fixes the fix
- Ton of updates for users/teams
- Small typo
- Unique storage paths
- Self-hosted GitLab URL
- No line during buildLog
- Html/apiUrls cannot end with /
- Typo
- Missing buildpack
- Enable https for Ghost
- Postgres root passwor shown and set
- Able to change postgres user password from ui
- DB Connecting string generator
- Missing install repositories GitHub
- Return own and other sources better
- Show config missing on sources
- Remove unnecessary save button haha
- Update dockerfile
- Haproxy build stuffs
- Proxy
- Types
- Invitations
- Timeout values
- Cleanup images older than a day
- Meilisearch service
- Load all branches, not just the first 30
- ProjectID for Github
- DNS check before creating SSL cert
- Try catch me
- Restart policy for resources
- No permission on first registration
- Reverting postgres password for now
- Destinations to HAProxy
- Register should happen if coolify proxy cannot be started
- GitLab typo
- Remove system wide pw reset
- Postgres root pw is pw field
- Teams view
- Improved tcp proxy monitoring for databases/ftp
- Add HTTP proxy checks
- Loading of new destinations
- Better performance for cleanup images
- Remove proxy container in case of dependent container is down
- Restart local docker coolify proxy in case of something happens to it
- Id of service container
- Switch from bitnami/redis to normal redis
- Use redis-alpine
- Wordpress extra config
- Stop sFTP connection on wp stop
- Change user's id in sftp wp instance
- Use arm based certbot on arm
- Buildlog line number is not string
- Application logs paginated
- Switch to stream on applications logs
- Scroll to top for logs
- Pull new images for services all the time it's started.
- White-labeled custom logo
- Application logs
- Deno configurations
- Text on deno buildpack
- Correct branch shown in build logs
- Vscode permission fix
- I18n
- Locales
- Application logs is not reversed and queried better
- Do not activate i18n for now
- GitHub token cleanup on team switch
- No logs found
- Code cleanups
- Reactivate posgtres password
- Contribution guide
- Simplify list services
- Contribution
- Contribution guide
- Contribution guide
- Packagemanager finder
- Unami svg size
- Team switching moved to IAM menu
- Always use IP address for webhooks
- Remove unnecessary test endpoint
- UI
- Migration
- Fider envs
- Checking low disk space
- Build image
- Update autoupdate env variable
- Renew certificates
- Webhook build images
- Missing node versions
- ExposedPorts
- Logos for dbs
- Do not run SSL renew in development
- Check domain for coolify before saving
- Remove debug info
- Cancel jobs
- Cancel old builds in database
- Better DNS check to prevent errors
- Check DNS in prod only
- DNS check
- Disable sentry for now
- Cancel
- Sentry
- No image for Docker buildpack
- Default packagemanager
- Server usage only shown for root team
- Expose ports for services
- UI
- Navbar UI
- UI
- UI
- Remove RC python
- UI
- UI
- UI
- Default Python package
- WP custom db
- UI
- Gastby buildpack
- Service checks
- Remove console.log
- Traefik
- Remove debug things
- WIP Traefik
- Proxy for http
- PR deployments view
- Minio urls + domain checks
- Remove gh token on git source changes
- Do not fetch app state in case of missconfiguration
- Demo instance save domain instantly
- Instant save on demo instance
- New source canceled view
- Lint errors in database services
- Otherfqdns
- Host key verification
- Ftp connection
- GitHub fixes
- TrustProxy
- Force restart proxy
- Only restart coolify proxy in case of version prior to 2.9.2
- Force restart proxy on seeding
- Add GIT ENV variable for submodules
- Recurisve clone instead of submodule
- Versions
- Only reconfigure coolify proxy if its missconfigured
- Demo version forms
- Typo
- Revert gh and gl cloning
- Proxy stop missing argument
- Fider changed an env variable name
- Pnpm command
- Plausible custom script
- Plausible script and middlewares
- Remove console log
- Remove comments
- Traefik middleware
- Persistent nocodb
- Nocodb persistency
- Host and reload for uvicorn
- Remove package-lock
- Be able to change database + service versions
- Lock file
- Seeding
- Forgot that the version bump changed 😅
- New destination can be created
- Include post
- New destinations
- Domain check
- Domain check
- TrustProxy for Fastify
- Hostname issue
- GitLab pagination load data
- Service domain checker
- Wp missing ftp solution
- Ftp WP issues
- Ftp?!
- Gitpod updates
- Gitpod
- Gitpod
- Wordpress FTP permission issues
- GitLab search fields
- GitHub App button
- GitLab loop on misconfigured source
- Gitpod
- Cleanup less often and can do it manually
- Admin password reset should not timeout
- Message for double branches
- Turn off autodeploy if double branch is configured
- More types for API
- More types
- Do not rebuild in case image exists and sha not changed
- Gitpod urls
- Remove new service start process
- Remove shared dir, deployment does not work
- Gitlab custom url
- Location url for services and apps
- Settings from api
- Selectable destinations
- Gitpod hardcodes
- Typo
- Typo
- Expose port checker
- States and exposed ports
- CleanupStorage
- Remote traefik webhook
- Remote engine ip address
- RemoteipAddress
- Explanation for remote engine url
- Tcp proxy
- Lol
- Webhook
- Dns check for rde
- Gitpod
- Revert last commit
- Dns check
- Dns checker
- Webhook
- Df and more debug
- Webhooks
- Load previews async
- Destination icon
- Pr webhook
- Cache image
- No ssh key found
- Prisma migration + update of docker and stuffs
- Ui
- Ui
- Only 1 ssh-agent is needed
- Reuse ssh connection
- Ssh tunnel
- Dns checking
- Fider BASE_URL set correctly
- Rde local ports
- Empty remote destinations could be removed
- Tips
- Lowercase issues fider
- Tooltip colors
- Update clickhouse configuration
- Cleanup command
- Enterprise Github instance endpoint
- Follow/cancel buttons
- Only remove coolify managed containers
- White-labeled env
- Schema
- Coolify-network on verification
- Cleanup stucked prisma-engines
- Toast
- Secrets
- Cleanup prisma engine if there is more than 1
- !isARM to isARM
- Enterprise GH link
- Empty buildpack icons
- Debounce dashboard status requests
- Decryption errors
- Postgresql  on ARM
- Make it public button
- Loading indicator
- Replace docker compose with docker-compose on CSB
- Dashboard ui
- Create coolify-infra, if it does not exists
- Gitpod conf and heroku buildpacks
- Appwrite
- Autoimport + readme
- Services import
- Heroku icon
- Heroku icon
- Dns button ui
- Bot deployments
- Bots
- AutoUpdater & cleanupStorage jobs
- Revert docker compose version to 2.6.1
- Trim secrets
- Restart containers on-failure instead of always
- Show that Ghost values could be changed
- Bots without exposed ports
- Missing commas
- ExposedPort is just optional
- Port checker
- Cancel build after 5 seconds
- ExposedPort checker
- Batch secret =
- Dashboard for non-root users
- Stream build logs
- Show build log start/end
- Ui buttons
- Clear queue on cancelling jobs
- Cancelling jobs
- Dashboard for admins
- Never stop deplyo queue
- Build queue system
- High cpu usage
- Worker
- Better worker system
- Secrets decryption
- UI thinkgs
- Delete team while it is active
- Team switching
- Queue cleanup
- Decrypt secrets
- Cleanup build cache as well
- Pr deployments + remove public gits
- Copy all files during install process
- Typo
- Process
- White labeled icon on navbar
- Whitelabeled icon
- Next/nuxt deployment type
- Again
- Pr deployment
- CompareVersions
- Include
- Include
- Gitlab apps
- Oh god Prisma
- Glitchtip things
- Loading state on start
- Ui
- Submodule
- Gitlab webhooks
- UI + refactor
- Exposedport on save
- Appwrite letsencrypt
- Traefik appwrite
- Traefik
- Finally works! :)
- Rename components + remove PR/MR deployment from public repos
- Settings missing id
- Explainer component
- Database name on logs view
- Taiga
- Ssh pid agent name
- Repository link trim
- Fqdn or expose port required
- Service deploymentEnabled
- Expose port is not required
- Remote verification
- Dockerfile
- Debug api logging + gh actions
- Workdir
- Move restart button to settings
- Gitlab webhook
- Use ip address instead of window location
- Use ip instead of window location host
- Service state update
- Add initial DNS servers
- Revert last change with domain check
- Service volume generation
- Minio default env variables
- Add php 8.1/8.2
- Edgedb ui
- Edgedb stuff
- Edgedb
- Pr previews
- DnsServer formatting
- Settings for service
- Change to execa from utils
- Save search input
- Ispublic status on databases
- Port checkers
- Ui variables
- Glitchtip env to pyhton boolean
- Autoupdater
- Show restarting apps
- Show restarting application & logs
- Remove unnecessary gitlab group name
- Secrets for PR
- Volumes for services
- Build secrets for apps
- Delete resource use window location
- Changing umami image URL to get latest version
- Gitlab importer for public repos
- Show error logs
- Umami init sql
- Plausible analytics actions
- Login
- Dev url
- UpdateMany build logs
- Fallback to db logs
- Fluentbit configuration
- Coolify update
- Fluentbit and logs
- Canceling build
- Logging
- Load more
- Build logs
- Versions of appwrite
- Appwrite?!
- Get building status
- Await
- Await #2
- Update PR building status
- Appwrite default version 1.0
- Undead endpoint does not require JWT
- *(routes)* Improve design of application page
- *(routes)* Improve design of git sources page
- *(routes)* Ui from destinations page
- *(routes)* Ui from databases page
- *(routes)* Ui from databases page
- *(routes)* Ui from databases page
- *(routes)* Ui from services page
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- *(routes)* Ui from settings page
- *(routes)* Duplicates classes in services page
- *(routes)* Searchbar ui
- Github conflicts
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- *(routes)* More ui tweaks
- Ui with headers
- *(routes)* Header of settings page in databases
- *(routes)* Ui from secrets table
- Ui
- Tooltip
- Dropdown
- Ssl certificate distribution
- Db migration
- Multiplex ssh connections
- Able to search with id
- Not found redirect
- Settings db requests
- Error during saving logs
- Consider base directory in heroku bp
- Basedirectory should be empty if null
- Allow basedirectory for heroku
- Stream logs for heroku bp
- Debug log for bp
- Scp without host verification & cert copy
- Base directory & docker bp
- Laravel php chooser
- Multiplex ssh and ssl copy
- Seed new preview secret types
- Error notification
- Empty preview value
- Error notification
- Seed
- Service logs
- Appwrite function network is not the default
- Logs in docker bp
- Able to delete apps in unconfigured state
- Disable development low disk space
- Only log things to console in dev mode
- Do not get status of more than 10 resources defined by category
- BaseDirectory
- Dashboard statuses
- Default buildImage and baseBuildImage
- Initial deploy status
- Show logs better
- Do not start tcp proxy without main container
- Cleanup stucked tcp proxies
- Default 0 pending invitations
- Handle forked repositories
- Typo
- Pr branches
- Fork pr previews
- Remove unnecessary things
- Meilisearch data dir
- Verify and configure remote docker engines
- Add buildkit features
- Nope if you are not logged in
- Do not use npx
- Pure docker based development
- Do not show nope as ip address for dbs
- Add git sha to build args
- Smart search for new services
- Logs for not running containers
- Update docker binaries
- Gh release
- Dev container
- Gitlab auth and compose reload
- Check compose domains in general
- Port required if fqdn is set
- Appwrite v1 missing containers
- Dockerfile
- Pull does not work remotely on huge compose file
- Single container logs and usage with compose
- Secret errors
- Service logs
- Heroku bp
- Expose port is readonly on the wrong condition
- Toast
- Traefik proxy q 10s
- App logs view
- Tooltip
- Toast, rde, webhooks
- Pathprefix
- Load public repos
- Webhook simplified
- Remote webhooks
- Previews wbh
- Webhooks
- Websecure redirect
- Wb for previews
- Pr stopps main deployment
- Preview wbh
- Wh catchall for all
- Remove old minio proxies
- Template files
- Compose icon
- Templates
- Confirm restart service
- Template
- Templates
- Templates
- Plausible analytics things
- Appwrite webhook
- Coolify instance proxy
- Migrate template
- Preview webhooks
- Simplify webhooks
- Remove ghost-mariadb from the list
- More simplified webhooks
- Umami + ghost issues
- Remove contribution docs
- Umami template
- Compose webhooks fixed
- Variable replacements
- Doc links
- For rollback
- N8n and weblate icon
- Expose ports for services
- Wp + mysql on arm
- Show rollback button loading
- No tags error
- Update on mobile
- Dashboard error
- GetTemplates
- Docker compose persistent volumes
- Application persistent storage things
- Volume names for undefined volume names in compose
- Empty secrets on UI
- Ports for services
- Default icon for new services
- IsBot issue
- Local dev api/ws urls
- Wrong template/type
- Gitea icon is svg
- Gh actions
- Gh actions
- Replace $$generate vars
- Webhook traefik
- Exposed ports
- Wrong icons on dashboard
- Escape % in secrets
- Move debug log settings to build logs
- Storage for compose bp + debug on
- Hasura admin secret
- Logs
- Mounts
- Load logs after build failed
- Accept logged and not logged user in /base
- Remote haproxy password/etc
- Remove hardcoded sentry dsn
- Nope in database strings
- 0 destinations redirect after creation
- Seed
- Sentry dsn update
- Dnt
- Ui
- Only visible with publicrepo
- Migrations
- Prevent webhook errors to be logged
- Login error
- Remove beta from systemwide git
- Git checkout
- Remove sentry before migration
- Webhook previewseparator
- Apache on arm
- Update PR/MRs with new previewSeparator
- Static for arm
- Failed builds should not push images
- Turn off autodeploy for simpledockerfiles
- Security hole
- Rde
- Delete resource on dashboard
- Wrong port in case of docker compose
- Public db icon on dashboard
- Cleanup
- Build commands
- Migration file
- Adding missing appwrite volume
- Appwrite tmp volume
- Do not replace secret
- Root user for dbs on arm
- Escape secrets
- Escape env vars
- Envs
- Docker buildpack env
- Secrets with newline
- Secrets
- Add default node_env variable
- Add default node_env variable
- Secrets
- Secrets
- Gh actions
- Duplicate env variables
- Cleanupstorage
- Remove unused imports
- Parsing secrets
- Read-only permission
- Read-only iam
- $ sign in secrets
- Custom gitlab git user
- Add documentation link again
- Remove prefetches
- Doc link
- Temporary disable dns check with dns servers
- Local images for reverting
- Secrets
- Compose file location
- Docker log sequence
- Delete apps with previews
- Do not cleanup compose applications as unconfigured
- Build env variables with docker compose
- Public gh repo reload compose
- Build args docker compose
- Grpc
- Secrets
- Www redirect
- Cleanup function
- Cleanup stucked containers
- Deletion + cleanupStuckedContainers
- Stucked containers
- CleanupStuckedContainers
- CleanupStuckedContainers
- Typos in docs
- Url
- Network in compose files
- Escape new line chars in wp custom configs
- Applications cannot be deleted
- Arm servics
- Base directory not found
- Cannot delete resource when you are not on root team
- Empty port in docker compose
- Set PACK_VERSION to 0.27.0
- PublishDirectory
- Host volumes
- Replace . & .. & $PWD with ~
- Handle log format volumes
- Nestjs buildpack
- Show ip address as host in public dbs
- Revert from dockerhub if ghcr.io does not exists
- Logo of CCCareers
- Typo
- Ssh
- Nullable name on deploy_keys
- Enviroments
- Remove dd - oops
- Add inprogress activity
- Application view
- Only set status in case the last command block is finished
- Poll activity
- Small typo
- Show activity on load
- Deployment should fail on error
- Tests
- Version
- Status not needed
- No project redirect
- Gh actions
- Set status
- Seeders
- Do not modify localhost
- Deployment_uuid -> type_uuid
- Read env from config, bc of cache
- Private key change view
- New destination
- Do not update next channel all the time
- Cancel deployment button
- Public repo limit shown + branch should be preselected.
- Better status on ui for apps
- Arm coolify version
- Formatting
- Gh actions
- Show github app secrets
- Do not force next version updates
- Debug log button
- Deployment key based works
- Deployment cancel/debug buttons
- Upgrade button
- Changing static build changes port
- Overwrite default nginx configuration
- Do not overlap docker image names
- Oops
- Found image name
- Name length
- Semicolons encoding by traefik
- Base_dir wip & outputs
- Cleanup docker images
- Nginx try_files
- Master is the default, not main
- No ms in rate limit resets
- Loading after button text
- Default value
- Localhost is usable
- Update docker-compose prod
- Cloud/checkoutid/lms
- Type of license code
- More verbose error
- Version lol
- Update prod compose
- Version
- Remove buggregator from dev
- Able to change localhost's private key
- Readonly input box
- Notifications
- Licensing
- Subscription link
- Migrate db schema for smtp + discord
- Text field
- Null fqdn notifications
- Remove old modal
- Proxy stop/start ui
- Proxy UI
- Empty description
- Input and textarea
- Postgres_username name to not name, lol
- DatabaseBackupJob.php
- No storage
- Backup now button
- Ui + subscription
- Self-hosted
- Make coolify-db backups unique dir
- Limits & server creation page
- Fqdn on apps
- DockerCleanupjob
- Validation
- Webhook endpoint in cloud and no system wide gh app
- Subscriptions
- Password confirmation
- Proxy start job
- Dockerimage jobs are not overlapping
- Sentry bug
- Button loading animation
- Form address
- Show hosted email service, just disable for non pro subs
- Add navbar for source + keys
- Add docker network to build process
- Overlapping apps
- Do not show system wide git on cloud
- Lowercase image names
- Typo
- SaveModel email settings
- Bug
- Db backup job
- Sentry 4459819517
- Sentry 4451028626
- Ui
- Retry notifications
- Instance email settings
- Ui
- Test email on for admins or custom smtp
- Coolify already exists should not throw error
- Delete database related things when delete database
- Remove -q from docker compose
- Errors in views
- Only send internal notifcations to enabled channels
- Recovery code
- Email sending error
- Sentry 4469575117
- Old docker version error
- Errors
- Proxy check, reduce jobs, etc
- Queue after commit
- Remove nixpkgarchive
- Remove nixpkgarchive from ui
- Webhooks should not run if server is not functional
- Server is functional check
- Confirm email before sending
- Help should send cc on email
- Sub type
- Show help modal everywhere
- Forgot password
- Disable dockerfile based healtcheck for now
- Add timeout for ssh commands
- Prevent weird ui bug for validateServer
- Lowercase email in forgot password
- Lower case email on waitlist
- Encrypt jobs
- ProcessWithEnv()->run
- Plus boarding step about Coolify
- SaveConfigurationSync
- Help uri
- Sub for root
- Redirect on server not found
- Ip check
- Uniqueips
- Simply reply to help messages
- Help
- Rate limit
- Collect billing address
- Invitation
- Smtp view
- Ssh-agent revert
- Restarting container state on ui
- Generate new key
- Missing upgrade js
- Team error
- 4.0.0-beta.37
- Localhost
- Proxy start (if not proxy defined, use Traefik)
- Do not remove localhost in boarding
- Allow non ip address (DNS)
- InstallDocker id not found
- Boarding
- Errors
- Proxy container status
- Proxy configuration saving
- Convert startProxy to action
- Stop/start UI on apps and dbs
- Improve localhost boarding process
- Try to use old docker-compose
- Boarding again
- Send internal notifications of email errors
- Add github app change on new app view
- Delete environment variables on app/db delete
- Save proxy configuration
- Add proxy to network with periodic check
- Proxy connections
- Delete persistent storages on resource deletion
- Prevent overwrite already existing env variables in services
- Mappings
- Sentry issue 4478125289
- Make sure proxy path created
- StartProxy
- Server validation with cf tunnels
- Only show traefik dashboard if its available
- Services
- Database schema
- Report livewire errors
- Links with path
- Add traefik labels no matter if traefik is selected or not
- Add expose port for containers
- Also check docker socks permission on validation
- Applications with port mappins do a normal update (not rolling update)
- Put back build pack chooser
- Proxy configuration + starter
- Show real storage name on services
- New service template layout
- Containerstatusjob
- Aaaaaaaaaaaaaaaaa
- Services view
- Services
- Manually create network for services
- Disable early updates
- Sslip for localhost
- ContainerStatusJob
- Cannot delete env with available services
- Sync command
- Install script drops an error
- Prevent sync version (it needs an option)
- Instance fqdn setting
- Sentry 4510197209
- Sentry 4504136641
- Sentry 4502634789
- Next helper image
- Service templates
- Sync:bunny
- Update process if server has been renamed
- Reporting handler
- Localhost privatekey update
- Remove private key in case you removed a github app
- Only show manually added private keys on server view
- Show source on all type of applications
- Docker cleanup should be a job by server
- File/dir based volumes are now read from the server
- Respect server fqdn
- If public repository does not have a main branch
- Preselect branc on private repos
- Deploykey branch
- Backups are now working again
- Not found base_branch in git webhooks
- Coolify db backup
- Preview deployments name, status etc
- Services should have destination as well
- Dockerfile expose is not overwritten
- If app settings is not saved to db
- Do not show subscription cancelled noti
- Show real volume names
- Only parse expose in dockerfiles if ports_exposes is empty
- Add uuid to volume names
- New volumes for services should have - instead of _
- Always pull helper image in dev
- Only show last 1000 lines
- Service status
- If waitlist is disabled, redirect to register
- Add destination to new services
- Predefined content for files
- Move /data to ./_data in dev
- UI
- Show all storages in one place for services
- Ui
- Add _data to vite ignore
- Only use _ in volume names for services
- Volume names in services
- Volume names
- Service logs visible if the whole service stack is not running
- Ui
- Compose magic
- Compose parser updated
- Dev compose files
- Traefik labels for multiport deployments
- Visible version number
- Remove SERVICE_ from deployable compose
- Delete event to deleting
- Move dev data to volumes to prevent permission issues
- Traefik labelling in case of several http and https domain added
- PR deployments use the first fqdn as base
- Email notifications subscription fixed
- Services - do not remove unnecessary things for now
- Decrease max horizon processes to get lower memory usage
- Test emails only available for user owned smtp/resend
- Ui for self-hosted email settings
- Set smtp notifications on by default
- Select branch on other git
- Private repository
- Contribution guide
- Public repository names
- *(create)* Flex wrap on server & network selection
- Better unreachable/revived server statuses
- Able to set base dir for Dockerfile build pack
- Server validation process
- Fqdn could be null
- Small
- Server unreachable count
- Do not reset unreachable count
- Contact docs
- Check connection
- Server saving
- No env goto envs from dashboard
- Goto
- Tcp proxy for dbs
- Database backups
- Only send email if transactional email set
- Backupfailed notification is forced
- Use port exposed for reverse proxy
- Contact link
- Use only ip addresses for servers
- Deleted team and it is the current one
- Add new team button
- Transactional email link
- Dashboard goto link
- Only require registry image in case of dockerimage bp
- Instant save build pack change
- Public git
- Cannot remove localhost
- Check localhost connection
- Send unreachable/revived notifications
- Boarding + verification
- Make sure proxy wont start in NONE mode
- Service check status 10 sec
- IsCloud in production seeder
- Make sure to use IP address
- Dockerfile location feature
- Server ip could be hostname in self-hosted
- Urls should be password fields
- No backup for redis
- Show database logs in case of its not healthy and running
- Proxy check for ports, do not kill anything listening on port 80/443
- Traefik dashboard ip
- Db labels
- Docker cleanup jobs
- Timeout for instant remote processes
- Dev containerjobs
- Backup database one-by-one.
- Turn off static deployment if you switch buildpacks
- Docker hub URL
- Redis URL generated
- Build image before starting dockerfile buildpacks
- Service status check is a bit better
- Generate fqdn if you deleted a service app, but it requires fqdn
- Cancel any deployments + queue next
- Add internal domain names during build process
- Noindex meta tag
- Show docker build logs
- Only include config.json if its exists and a file
- Always start proxy if not NONE is selected
- Proxy start process
- Setup:dev script & contribution guide
- Do not show configuration changed if config_hash is null
- Add config_hash if its null (old deployments)
- Label generation
- Labels
- Email channel no recepients
- Limit horizon processes to 2 by default
- Add custom port as ssh option to deploy_key based commands
- Remove custom port from git repo url
- ContainerStatus job
- Service docs links
- Add PGUSER to prevent HC warning
- Preselect s3 storage if available
- Port exposes change, shoud regenerate label
- Boarding
- Clone to with the same environment name
- Cleanup stucked resources on start
- Do not allow to delete env if a resource is defined
- Service template generator + appwrite
- Mongodb backup
- Make sure coolfiy network exists on install
- Syncbunny command
- Encrypt mongodb password
- Mongodb healtcheck command
- Rate limit for api + add mariadb + mysql
- Server settings guarded
- Space in build args
- Lock SERVICE_FQDN envs
- If user is invited, that means its email is verified
- Force password reset on invited accounts
- Add ssh options to git ls-remote
- Git ls-remote
- Remove coolify labels from ui
- Missing environment variables prevewi on service
- Invoice.paid should sleep for 5 seconds
- Local dev repo
- Deployments ui
- Dockerfile build pack fix
- Set labels on generate domain
- Network service parse
- Notification url in containerstatusjob
- Gh webhook response 200 to installation_repositories
- Delete destination
- No id found
- Missing $mailMessage
- Set default from/sender names
- No environments
- Telegram text
- Private key not found error
- UI
- Resourcesdelete command
- Port number should be int
- Separate delete with validation of server
- Add nixpacks info
- Remove filter
- Container logs are now followable in full-screen and sorted by timestamp
- Ui for labels
- Ui
- Deletions
- Build_image not found
- Github source view
- Github source view
- Dockercleanupjob should be released back
- Ui
- Local ip address
- Revert workdir to basedir
- Container status jobs for old pr deployments
- Service updates
- *(fider template)* Use the correct docs url
- Fqdn for minio
- Generate service fields
- Mariadb backups
- When to pull image
- Do not allow to enter local ip addresses
- Reset password
- Only report nonruntime errors
- Handle different label formats in services
- Server adding process
- Show defined resources in server tab, so you will know what you need to delete before you can delete the server.
- Lots of regarding git + docker compose deployments
- Pull request build variables
- Double default password length
- Do not remove deployment in case compose based failed
- No container servers
- Sentry issue
- Dockercompose save ./ volumes under /data/coolify
- Server view for link()
- Default value do not overwrite existing env value
- Use official install script with rancher (one will work for sure)
- Add cf tunnel to boarding server view
- Prevent autorefresh of proxy status
- Missing docker image thing
- Add hc for soketi
- Deploy the right compose file
- Bind volumes for compose bp
- Use hc port 80 in case of static build
- Switching to static build
- Container selection
- Service navbar using new realtime events
- Do not create duplicated networks
- Live event
- Service start + event
- Service deletion job
- Double ws connection
- Boarding view
- Do not send telegram noti  on intent payment failed
- Database ui is realtime based
- Live mode for github webhooks
- Ui
- Realtime connection popup could be disabled
- Realtime check
- Add new destination
- Proxy logs
- Db status check
- Pusher host
- Add ipv6
- Realtime connection?!
- Websocket
- Better handling of errors with install script
- Install script parse version
- Only allow to modify in .env file if AUTOUPDATE is set
- Is autoupdate not null
- Run init command after production seeder
- Init
- Comma in traefik custom labels
- Ignore if dynamic config could not be set
- Service env variable ovewritten if it has a default value
- Labelling
- Non-ascii chars in labels
- Labels
- Init script echos
- Update Coolify script
- Null notify
- Check queued deployments as well
- Copy invitation
- Password reset / invitation link requests
- Add catch all route
- Revert random container job delay
- Backup executions view
- Only check server status in container status job
- Improve server status check times
- Handle other types of generated values
- Server checking status
- Ui for adding new destination
- Reset domains on compose file change
- Domains for compose bp
- No action in webhooks
- Add debug output to gitlab webhooks
- Do not push dockerimage
- Add alpha to swarm
- Server not found
- Do not autovalidate server on mount
- Server update schedule
- Swarm support ui
- Server ready
- Get swarm service logs
- Docker compose apps env rewritten
- Storage error on dbs
- Why?!
- Stay tuned
- Cpu limit to float from int
- Add source commit to final envs
- Routing, switch back to old one
- Deploy instead of restart in case swarm is used
- Button title
- Restore falsely deleted coolify-db-backup
- Sub
- Wrong env variable parsing
- Deploy key + docker compose
- Horizon
- Duplicate compose variable
- Set deployment failed if new container is not healthy
- Nixpacks cache
- Only add restart policy if its empty (compose)
- Nixpacks buildpack
- File storage save
- Database env variables
- Healthy status
- Show framework based notification in build logs
- Traefik labels
- Use ip for sslip in dev if remote server is used
- Service labels without ports (unknown ports)
- Sort and rename (unique part) of labels
- Settings menu
- Remove traefik debug in dev mode
- Php pgsql to 8.2
- Static buildpack should set port 80
- Update navbar on build_pack change
- Do not include thegameplan.json into build image
- Submit error on postgresql
- Email verification / forgot password
- Escape build envs properly for nixpacks + docker build
- Undead endpoint
- Upload limit on ui
- Save cmd output propely (merge)
- Load profile on remote commands
- Load profile and set envs on remote cmd
- Restart should not update config hash
- Preview deployments with nixpacks
- Cleanup docker stuffs before upgrading
- Service deletion command
- Cpuset limits was determined in a way that apps only used 1 CPU max, ehh, sorry.
- Service stack view
- Change proxy view
- Checkbox click
- Git pull command for deploy key based previews
- Server status job
- Service deletion bug!
- Links
- Redis custom conf
- Sentry error
- Restrict concurrent deployments per server
- Queue
- Change env variable length
- Bitbucket manual deployments
- Webhooks for multiple apps
- Unhealthy deployments should be failed
- Add env variables for wordpress template without database
- Service deletion function
- Service deletion fix
- Dns validation + duplicated fqdns
- Validate server navbar upated
- Regenerate labels on application clone
- Service deletion
- Not able to use other shared envs
- Sentry fix
- Sentry
- Sentry error
- Sentry
- Sentry error
- Create dynamic directory
- Migrate to new modal
- Duplicate domain check
- Tags
- Wrap tags and avoid horizontal overflow
- Stripe webhooks
- Feedback from self-hosted envs to discord
- New menu on navbar
- Make sure resources are deleted in async mode
- Go to prod env from dashboard if there is no other envs defined
- User proper image_tag, if set
- New menu ui
- Lock logdrain configuration when one of them are enabled
- Add docker compose check during server validation
- Get service stack as uuid, not name
- Menu
- Flex wrap deployment previews
- Boolean docker options
- Only add 'networks' key if 'network_mode' is absent
- Cleanup scheduled tasks
- Padding left on input boxes
- Use ls / command instead ls
- Do not add the same server twice
- Only show redeployment required if status is not exited
- Add openbsd ssh server check
- Resources
- Empty build variables
- *(server)* Revalidate server button not showing in server's page
- Fluent bit ident level
- Submodule cloning
- Database status
- Permission change updates from webhook
- Server validation
- Connections being stuck and not processed until proxy restarts
- Use latest image if nothing is specified
- No coolify.yaml found
- Server validation
- Statuses
- Unknown image of service until it is uploaded
- Subscription / plan switch, etc
- Firefly service
- Force enable/disable server in case ultimate package quantity decreases
- Server disabled
- Custom dockerfile location always checked
- Import to mysql and mariadb
- Resource tab not loading if server is not reachable
- Load unmanaged async
- Do not show n/a networsk
- Service container status updates
- Public prs should not be commented
- Pull request deployments + build servers
- Env value generation
- Sentry error
- Service status updated
- Should note delete personal teams
- Make sure to show some buttons
- Sort repositories by name
- Deploy api messages
- Fqdn null in case docker compose bp
- Reload caddy issue
- /realtime endpoint
- Proxy switch
- Service ports for services + caddy
- Failed deployments should send failed email/notification
- Consider custom healthchecks in dockerfile
- Create initial files async
- Docker compose validation
- Duplicate dockerfile
- Multiline env variables
- Server stopped, service page not reachable
- Empty get logs number of lines
- Only escape envs after v239+
- 0 in env value
- Consistent container name
- Custom ip address should turn off rolling update
- Multiline input
- Raw compose deployment
- Dashboard view if no project found
- Volumes for prs
- Shared env variable parsing
- Compose env has SERVICE, but not defined for Coolify
- Public service database
- Make sure service db proxy restarted
- Restart service db proxies
- Two factor
- Ui for tags
- Update resources view
- Realtime connection check
- Multline env in dev mode
- Scheduled backup for other service databases (supabase)
- PR deployments should not be distributed to 2 servers
- Name/from address required for resend
- Autoupdater
- Async service loads
- Disabled inputs are not trucated
- Duplicated generated fqdns are now working
- Uis
- Ui for cftunnels
- Search services
- Trial users subscription page
- Async public key loading
- Unfunctional server should see resources
- Warning if you use multiple domains for a service
- New github app creation
- Always rebuild Dockerfile / dockerimage buildpacks
- Do not rebuild dockerfile based apps twice
- Make sure if envs are changed, rebuild is needed
- Members cannot manage subscriptions
- IsMember
- Storage layout
- How to update docker-compose, environment variables and fqdns
- Git submodule update
- Unintended left padding on sidebar
- Hashed random delimeter in ssh commands + make sure to remove the delimeter from the command
- Service config hash update
- Redeploy if image not found in restart only mode
- Check each required binaries one-by-one
- Helper image only pulled if required, not every 10 mins
- Make sure that confs when checking if it is changed sorted
- Respect .env file (for default values)
- Remove temporary cloudflared config
- Remove lazy loading until bug figured out
- Rollback feature
- Base64 encode .env
- $ in labels escaped
- .env saved to deployment server, not to build server
- Do no able to delete gh app without deleting resources
- 500 error on edge case
- Able to select server when creating new destination
- N8n template
- Refresh public ips on start
- Move s3 storages to separate view
- Mongo db backup
- Backups
- Autoupdate
- Respect start period and chekc interval for hc
- Parse HEALTHCHECK from dockerfile
- Make s3 name and endpoint required
- Able to update source path for predefined volumes
- Get logs with non-root user
- Mongo 4.0 db backup
- Formbricks image origin
- Add port even if traefik is used
- Typo in tags.blade.php
- Install.sh error
- Env file
- Comment out internal notification in email_verify method
- Confirmation for custom labels
- Change permissions on newly created dirs
- Color for resource operation server and project name
- Only show realtime error on non-cloud instances
- Only allow push and mr gitlab events
- Improve scheduled task adding/removing
- Docker compose dependencies for pr previews
- Properly populating dependencies
- Use commit hash on webhooks
- Commit message length
- Hc from localhost to 127.0.0.1
- Use rc in hc
- Telegram group chat notifications
- PR deployments have good predefined envs
- Optimize new resource creation
- Show it docker compose has syntax errors
- Wrong time during a failed deployment
- Removal of the failed deployment condition, addition of since started instead of finished time
- Use local versions + service templates and query them every 10 minutes
- Check proxy functionality before removing unnecessary coolify.yaml file and checking Docker Engine
- Show first 20 users only in admin view
- Add subpath for services
- Ghost subdir
- Do not pull templates in dev
- Templates
- Update error message for invalid token to mention invalid signature
- Disable containerStopped job for now
- Disable unreachable/revived notifications for now
- JSON_UNESCAPED_UNICODE
- Add wget to nixpacks builds
- Pre and post deployment commands
- Bitbucket commits link
- Better way to add curl/wget to nixpacks
- Root team able to download backups
- Build server should not have a proxy
- Improve build server functionalities
- Sentry issue
- Sentry
- Sentry error + livewire downgrade
- Sentry
- Sentry
- Sentry error
- Sentry
- Force load services from cdn on reload list
- Do not allow service storage mount point modifications
- Volume adding
- Sync upgrade process
- Publish horizon
- Add missing team model
- Test new upgrade process?
- Throw exception
- Build server dirs not created on main server
- Compose load with non-root user
- Able to redeploy dockerfile based apps without cache
- Compose previews does have env variables
- Fine-tune cdn pulls
- Spamming :D
- Parse docker version better
- Compose issues
- SERVICE_FQDN has source port in it
- Logto service
- Allow invitations via email
- Sort by defined order + fixed typo
- Only ignore volumes with driver_opts
- Check env in args for compose based apps
- Custom docker compose commands, add project dir if needed
- Autoupdate process
- Backup executions view
- Handle previously defined compose previews
- Sort backup executions
- Supabase service, newest versions
- Set default name for Docker volumes if it is null
- Multiline variable should be literal + should be multiline in bash with \
- Gitlab merge request should close PR
- Multiline build args
- Setup script doesnt link to the correct source code file
- Install.sh do not reinstall packages on arch
- Just restart
- Stripprefix middleware correctly labeled to http
- Bitbucket link
- Compose generator
- Do no truncate repositories wtih domain (git) in it
- In services should edit compose file for volumes and envs
- Handle laravel deployment better
- Db proxy status shown better in the UI
- Show commit message on webhooks + prs
- Metrics parsing
- Charts
- Application custom labels reset after saving
- Static build with new nixpacks build process
- Make server charts one livewire component with one interval selector
- You can now add env variable from ui to services
- Update compose environment with UI defined variables
- Refresh deployable compose without reload
- Remove cloud stripe notifications
- App deployment should be in high queue
- Remove zoom from modals
- Get envs before sortby
- MB is % lol
- Projects with 0 envs
- Run user commands on high prio queue
- Load js locally
- Remove lemon + paddle things
- Run container commands on high priority
- Image logo
- Remove both option for api endpoints. it just makes things complicated
- Cleanup subs in cloud
- Show keydbs/dragonflies/clickhouses
- Only run cloud clean on cloud + remove root team
- Force cleanup on busy servers
- Check domain on new app via api
- Custom container name will be the container name, not just internal network name
- Api updates
- Yaml everywhere
- Add newline character to private key before saving
- Add validation for webhook endpoint selection
- Database input validators
- Remove own app from domain checks
- Return data of app update
- Do not overwrite hardcoded variables if they rely on another variable
- Remove networks when deleting a docker compose based app
- Api
- Always set project name during app deployments
- Remove volumes as well
- Gitea pr previews
- Prevent instance fqdn persisting to other servers dynamic proxy configs
- Better volume cleanups
- Cleanup parameter
- Update redirect URL in unauthenticated exception handler
- Respect top-level configs and secrets
- Service status changed event
- Disable sentinel until a few bugs are fixed
- Service domains and envs are properly updated
- *(reactive-resume)* New healthcheck command for MinIO
- *(MinIO)* New command healthcheck
- Update minio hc in services
- Add validation for missing docker compose file
- Typo in is_literal helper
- Env is_literal helper text typo
- Update docker compose pull command with --policy always
- Plane service template
- Vikunja
- Docmost template
- Drupal
- Improve github source creation
- Tag deployments
- New docker compose parsing
- Handle / in preselecting branches
- Handle custom_internal_name check in ApplicationDeploymentJob.php
- If git limit reached, ignore it and continue with a default selection
- Backup downloads
- Missing input for api endpoint
- Volume detection (dir or file) is fixed
- Supabase
- Create file storage even if content is empty
- Preview deployments should be stopped properly via gh webhook
- Deleting application should delete preview deployments
- Plane service images
- Fix issue with deployment start command in ApplicationDeploymentJob
- Directory will be created by default for compose host mounts
- Restart proxy does not work + status indicator on the UI
- Uuid in api docs type
- Raw compose deployment .env not found
- Api -> application patch endpoint
- Remove pull always when uploading backup to s3
- Handle array env vars
- Link in task failed job notifications
- Random generated uuid will be full length (not 7 characters)
- Gitlab service
- Gitlab logo
- Bitbucket repository url
- By default volumes that we cannot determine if they are directories or files are treated as directories
- Domain update on services on the UI
- Update SERVICE_FQDN/URL env variables when you change the domain
- Several shared environment variables in one value, parsed correctly
- Members of root team should not see instance admin stuff
- Parse docker composer
- Service env parsing
- Service env variables
- Activity type invalid
- Update env on ui
- Only append docker network if service/app is running
- Remove lazy load from scheduled tasks
- Plausible template
- Service_url should not have a trailing slash
- If usagebefore cannot be determined, cleanup docker with force
- Async remote command
- Only run logdrain if necessary
- Remove network if it is only connected to coolify proxy itself
- Dir mounts should have proper dirs
- File storages (dir/file mount) handled properly
- Do not use port exposes on docker compose buildpacks
- Minecraft server template fixed
- Graceful shutdown
- Stop resources gracefully
- Handle null and empty disk usage in DockerCleanupJob
- Show latest version on manual update view
- Empty string content should be saved as a file
- Update Traefik labels on init
- Add missing middleware for server check job
- Scheduledbackup not found
- Manual update process
- Timezone not updated when systemd is missing
- If volumes + file mounts are defined, should merge them together in the compose file
- All mongo v4 backups should use the different backup command
- Database custom environment variables
- Connect compose apps to the right predefined network
- Docker compose destination network
- Server status when there are multiple servers
- Sync fqdn change on the UI
- Pr build names in case custom name is used
- Application patch request instant_deploy
- Canceling deployment on build server
- Backup of password protected postgresql database
- Docker cleanup job
- Storages with preserved git repository
- Parser parser parser
- New parser only in dev
- Parser parser
- Numberoflines should be number
- Docker cleanup job
- Fix directory and file mount headings in file-storage.blade.php
- Preview fqdn generation
- Revert a few lines
- Service ui sync bug
- Setup script doesn't work on rhel based images with some curl variant already installed
- Let's wait for healthy container during installation and wait an extra 20 seconds (for migrations)
- Infra files
- Log drain only for Applications
- Copy large compose files through scp (not ssh)
- Check if array is associative or not
- Openapi endpoint urls
- Convert environment variables to one format in shared.php
- Logical volumes could be overwritten with new path
- Env variable in value parsed
- Pull coolify image only when the app needs to be updated
- Wrong executions order
- Handle project not found error in environment_details API endpoint
- Deployment running for - without "ago"
- Update helper image pulling logic to only pull if the version is newer
- Parser
- Plunk NEXT_PUBLIC_API_URI
- Reenable overlapping servercheckjob
- Appwrite template + parser
- Don't add `networks` key if `network_mode` is used
- Remove debug statement in shared.php
- Scp through cloudflare
- Delete older versions of the helper image other than the latest one
- Update remoteProcess.php to handle null values in logItem properties
- Disable mux_enabled during server validation
- Move mc command to coolify image from helper
- Keydb. add `:` delimiter for connection string
- Cloudflare tunnel with new multiplexing feature
- Keep-alive ws connections
- Add build.sh to debug logs
- Update Coolify installer
- Terminal
- Generate https for minio
- Install script
- Handle WebSocket connection close in terminal.blade.php
- Able to open terminal to any containers
- Refactor run-command
- If you exit a container manually, it should close the underlying tty as well
- Move terminal to separate view on services
- Only update helper image in DB
- Generated fqdn for SERVICE_FQDN_APP_3000 magic envs
- Proxy status
- Coolify-db should not be in the managed resources
- Store original root key in the original location
- Logto service
- Cloudflared service
- Migrations
- Cloudflare tunnel configuration, ui, etc
- Parser
- Exited services statuses
- Make sure to reload window if app status changes
- Deploy key based deployments
- Proxy fixes
- Proxy
- *(templates)* Filebrowser FQDN env variable
- Handle edge case when build variables and env variables are in different format
- Compose based terminal
- Filebrowser template
- Edit is_build_server_enabled upon creating application on other application type
- Save settings after assigning value
- In dev mode do not ask confirmation on delete
- Mixpost
- Handle deletion of 'hello' in confirmation modal for dev environment
- Remove autofocuses
- Ipv6 scp should use -6 flag
- Cleanup stucked applicationdeploymentqueue
- Realtime watch in development mode
- Able to select root permission easier
- Able to support more database dynamically from Coolify's UI
- Strapi template
- Bitcoin core template
- Api useBuildServer
- Service application view
- Add new supported database images
- Parse proxy config and check the set ports usage
- Update FQDN
- Scheduled backup for services view
- Parser, espacing container labels
- Reset description and subject fields after submitting feedback
- Tag mass redeployments
- Service env orders, application env orders
- Proxy conf in dev
- One-click services
- Use local service-templates in dev
- New services
- Remove not used extra host
- Chatwoot service
- Directus
- Database descriptions
- Update services
- Soketi
- Select server view
- Update mattermost image tag and add default port
- Remove env, change timezone
- Postgres healthcheck
- Azimutt template - still not working haha
- New parser with SERVICE_URL_ envs
- Improve service template readability
- Update password variables in Service model
- Scheduled database server
- Select server view
- Signup
- Application domains should be http and https only
- Validate and sanitize application domains
- Sanitize and validate application domains
- Use correct env variable for invoice ninja password
- Make sure caddy is not removed by cleanup
- Libretranslate
- Do not allow to change number of lines when streaming logs
- Plunk
- No manual timezones
- Helper push
- Format
- Add port metadata and Coolify magic to generate the domain
- Sentinel
- Metrics
- Generate sentinel url
- Only enable Sentinel for new servers
- Is_static through API
- Allow setting standalone redis variables via ENVs (team variables...)
- Check for username separately form password
- Encrypt all existing redis passwords
- Pull helper image on helper_version change
- Redis database user and password
- Able to update ipv4 / ipv6 instance settings
- Metrics for dbs
- Sentinel start fixed
- Validate sentinel custom URL when enabling sentinel
- Should be able to reset labels in read-only mode with manual click
- No sentinel for swarm yet
- Charts ui
- Volume
- Sentinel config changes restarts sentinel
- Disable sentinel for now
- Disable Sentinel temporarily
- Disable Sentinel temporarily for non-dev environments
- Access team's github apps only
- Admins should now invite owner
- Add experimental flag
- GenerateSentinelUrl method
- NumberOfLines could be null
- Login / register view
- Restart sentinel once a day
- Changing private key manually won't trigger a notification
- Grammar for helper
- Fix my own grammar
- Add telescope only in dev mode
- New way to update container statuses
- Only run server storage every 10 mins if sentinel is not active
- Cloud admin view
- Queries in kernel.php
- Lower case emails only
- Change emails to lowercase on init
- Do not error on update email
- Always authenticate with lowercase emails
- Dashboard refactor
- Add min/max length to input/texarea
- Remove livewire legacy from help view
- Remove unnecessary endpoints (magic)
- Transactional email livewire
- Destinations livewire refactor
- Refactor destination/docker view
- Logdrains validation
- Reworded
- Use Auth(), add new db proxy stop event refactor clickhouse view
- Add user/pw to db view
- Sort servers by name
- Keydb view
- Refactor tags view / remove obsolete one
- Send discord/telegram notifications on high job queue
- Server view refresh on validation
- ShowBoarding
- Show docker installation logs & ubuntu 24.10 notification
- Do not overlap servercheckjob
- Server limit check
- Server validation
- Clear route / view
- Only skip docker installation on 24.10 if its not installed
- For --gpus device support
- Db/service start should be on high queue
- Do not stop sentinel on Coolify restart
- Run resourceCheck after new serviceCheckJob
- Mongodb in dev
- Better invitation errors
- Loading indicator for db proxies
- Do not execute gh workflow on template changes
- Only use sentry in cloud
- Update packagejson of coolify-realtime + add lock file
- Update last online with old function
- Seeder should not start sentinel
- Start sentinel on seeder
- Notifications ui
- Disable wire:navigate
- Confirmation Settings css for light mode
- Server wildcard
- Saving resend api key
- Wildcard domain save
- Disable cloudflare tunnel on "localhost"
- Define separate volumes for mattermost service template
- Github app name is too long
- ServerTimezone update
- Trigger.dev db host & sslmode=disable
- Manual update should be executed only once + better UX
- Upgrade.sh
- Missing privateKey
- Show proper error message on invalid Git source
- Convert HTTP to SSH source when using deploy key on GitHub
- Cloud + stripe related
- Terminal view loading in async
- Cool 500 error (thanks hugodos)
- Update schema in code decorator
- Openapi docs
- Add tests for git url converts
- Minio / logto url generation
- Admin view
- Min docker version 26
- Pull latest service-templates.json on init
- Workflow files for coolify build
- Autocompletes
- Timezone settings validation
- Invalid tz should not prevent other jobs to be executed
- Testing-host should be built locally
- Poll with modal issue
- Terminal opening issue
- If service img not found, use github as a source
- Fallback to local coolify.png
- Gather private ips
- Cf tunnel menu should be visible when server is not validated
- Deployment optimizations
- Init script + optimize laravel
- Default docker engine version + fix install script
- Pull helper image on init
- SPA static site default nginx conf
- Modal-input
- Modal (+ add) on dynamic config was not opening, removed x-cloak
- AUTOUPDATE + checkbox opacity
- Improve helper text for metrics input fields
- Refine helper text for metrics input fields
- If mux conn fails, still use it without mux + save priv key with better logic
- Migration
- Always validate ssh key
- Make sure important jobs/actions are running on high prio queue
- Do not send internal notification for backups and status jobs
- Validateconnection
- View issue
- Heading
- Remove mux cleanup
- Db backup for services
- Version should come from constants + fix stripe webhook error reporting
- Undefined variable
- Remove version.php as everything is coming from constants.php
- Sentry error
- Websocket connections autoreconnect
- Sentry error
- Sentry
- Empty server API response
- Incorrect server API patch response
- Missing `uuid` parameter on server API patch
- Missing `settings` property on servers API
- Move servers API `delete_unused_*` properties
- Servers API returning `port` as a string -> integer
- Only return server uuid on server update
- Service generate includes yml files as well (haha)
- ServercheckJob should run every 5 minutes on cloud
- New resource icons
- Search should be more visible on scroll on new resource
- Logdrain settings
- Ui
- Email should be retried with backoff
- Alpine in body layout
- Application view loading
- Postiz service
- Only able to select the right keys
- Test email should not be required
- A few inputs
- Api endpoint
- Resolve undefined searchInput reference in Alpine.js component
- URL and sync new app name
- Typos and naming
- Client and webhook secret disappear after sync
- Missing `mysql_password` API property
- Incorrect MongoDB init API property
- Old git versions does not have --cone implemented properly
- Don't allow editing traefik config
- Restart proxy
- Dev mode
- Ui
- Display actual values for disk space checks in installer script
- Proxy change behaviour
- Add warning color
- Import NotificationSlack correctly
- Add middleware to new abilities, better ux for selecting permissions, etc.
- Root + read:sensive could read senstive data with a middlewarew
- Always have download logs button on scheduled tasks
- Missing css
- Development image
- Dockerignore
- DB migration error
- Drop all unused smtp columns
- Backward compatibility
- Email notification channel enabled function
- Instance email settins
- Make sure resend is false if SMTP is true and vice versa
- Email Notification saving
- Slack and discord url now uses text filed because encryption makes the url very long
- Notification trait
- Encryption fixes
- Docker cleanup email template
- Add missing deployment notifications to telegram
- New docker cleanup settings are now saved to the DB correctly
- Ui + migrations
- Docker cleanup email notifications
- General notifications does not go through email channel
- Test notifications to only send it to the right channel
- Remove resale_license from db as well
- Nexus service
- Fileflows volume names
- --cone
- Provider error
- Database migration
- Seeder
- Migration call
- Slack helper
- Telegram helper
- Discord helper
- Telegram topic IDs
- Make pushover settings more clear
- Typo in pushover user key
- Use Livewire refresh method and lock properties
- Create pushover settings for existing teams
- Update token permission check from 'write' to 'root'
- Pushover
- Oauth seeder
- Correct heading display for OAuth settings in settings-oauth.blade.php
- Adjust spacing in login form for improved layout
- Services env values should be sensitive
- Documenso
- Dolibarr
- Typo
- Update OauthSettingSeeder to handle new provider definitions and ensure authentik is recreated if missing
- Improve OauthSettingSeeder to correctly delete non-existent providers and ensure proper handling of provider definitions
- Encrypt resend API key in instance settings
- Resend api key is already a text column
- Monaco editor light and dark mode switching
- Service status indicator + oauth saving
- Socialite for azure and authentik
- Saving oauth
- Fallback for copy button
- Copy the right text
- Maybe fallback is now working
- Only show copy button on secure context
- Render html on error page correctly
- Invalid API response on missing project
- Applications API response code + schema
- Applications API writing to unavailable models
- If an init script is renamed the old version is still on the server
- Oauthseeder
- Compose loading seq
- Resource clone name + volume name generation
- Update Dockerfile entrypoint path to /etc/entrypoint.d
- Debug mode
- Unreachable notifications
- Remove duplicated ServerCheckJob call
- Few fixes and use new ServerReachabilityChanged event
- Use serverStatus not just status
- Oauth seeder
- Service ui structure
- Check port 8080 and fallback to 80
- Refactor database view
- Always use docker cleanup frequency
- Advanced server UI
- Html css
- Fix domain being override when update application
- Use nixpacks predefined build variables, but still could update the default values from Coolify
- Use local monaco-editor instead of Cloudflare
- N8n timezone
- Smtp encryption
- Bind() to 0.0.0.0:80 failed
- Oauth seeder
- Unreachable notifications
- Instance settings migration
- Only encrypt instance email settings if there are any
- Error message
- Update healthcheck and port configurations to use port 8080
- Compose envs
- Scheduled tasks and backups are executed by server timezone.
- Show backup timezone on the UI
- Disappearing UI after livewire event received
- Add default vector db for anythingllm
- We need XSRF-TOKEN for terminal
- Prevent default link behavior for resource and settings actions in dashboard
- Increase default php memory limit
- Show if only build servers are added to your team
- Update Livewire button click method to use camelCase
- Local dropzonejs
- Import backups due to js stuff should not be navigated
- Install inetutils on Arch Linux
- Use ip in place of hostname from inetutils in arch
- Update import command to append file redirection for database restoration
- Ui bug on pw confirmation
- Exclude system and computed fields from model replication
- Service cloning on a separate server
- Application cloning
- `Undefined variable $fs_path` for databases
- Service and database cloning and label generation
- Labels and URL generation when cloning
- Clone naming for different database data volumes
- Implement all the cloneMe changes for ResourceOperations as well
- Volume and fileStorages cloning
- View text and helpers
- Teable
- Trigger with external db
- Set `EXPERIMENTAL_FEATURES` to false for labelstudio
- Monaco editor disabled state
- Edge case where executions could be null
- Create destination properly
- Getcontainer status should timeout after 30s
- Enable response for temporary unavailability in sentinel push endpoint
- Use timeout in cleanup resources
- Add timeout to sentinel process checks for improved reliability
- Horizon job checker
- Update response message for sentinel push route
- Add own servers on cloud
- Application deployment
- Service update statsu
- If $SERVICE found in the service specific configuration, then search for it in the db
- Instance wide GitHub apps are not available on other teams then the source team
- Function calls
- UI
- Deletion of single backup
- Backup job deletion - delete all backups from s3 and local
- Use new removeOldBackups function
- Retention functions and folder deletion for local backups
- Storage retention setting
- Db without s3 should still backup
- Wording
- `Undefined variable $service` when creating a new service
- Nodebb service
- Calibre-web service
- Rallly and actualbudget service
- Removed container_name
- Added healthcheck for gotenberg template
- Gotenberg
- *(template)* Gotenberg healthcheck, use /health instead of /version
- Use wire:navigate on sidebar
- Use wire:navigate on dashboard
- Use wire:navigate on projects page
- More wire:navigate
- Even more wire:navigate
- Service navigation
- Logs icons everywhere + terminal
- Redis DB should use the new resourceable columns
- Joomla service
- Add back letters to prod password requirement
- Check System and GitHub time and throw and error if it is over 50s out of sync
- Error message and server time getting
- Error rendering
- Render html correctly now
- Indent
- Potential fix for permissions update
- Expiration time claim ('exp') must be a numeric value
- Sanitize html error messages
- Production password rule and cleanup code
- Use json as it is just better than string for huge amount of logs
- Use `wire:navigate` on server sidebar
- Use finished_at for the end time instead of created_at
- Cancelled deployments should not show end and duration time
- Redirect to server index instead of show on error in Advanced and DockerCleanup components
- Disable registration after creating the root user
- RootUserSeeder
- Regex username validation
- Add spacing around echo outputs
- Success message
- Silent return if envs are empty or not set.
- Create the private key before the server in the prod seeder
- Update ProductionSeeder to check for private key instead of server's private key
- *(ui)* Missing underline for docs link in the Swarm section (#4860)
- *(service)* Change chatwoot service postgres image from `postgres:12` to `pgvector/pgvector:pg12`
- Docker image parser
- Add public key attribute to privatekey model
- Correct service update logic in Docker Compose parser
- Update CDN URL in install script to point to nightly version
- *(service)* Add healthcheck to Cloudflared service (#4859)
- Remove wire:navigate from import backups
- *(ui)* Backups link should not redirected to general
- Envs with special chars during build
- *(db)* `finished_at` timestamps are not set for existing deployments
- Load service templates on cloud
- *(email)* Transactional email sending
- *(ui)* Add missing save button for new Docker Cleanup page
- *(ui)* Show preview deployment environment variables
- *(ui)* Show error on terminal if container has no shell (bash/sh)
- *(parser)* Resource URL should only be parsed if there is one
- *(core)* Compose parsing for apps
- *(redis)* Update environment variable keys from standalone_redis_id to resourceable_id
- *(routes)* Local API docs not available on domain or IP
- *(routes)* Local API docs not available on domain or IP
- *(core)* Update application_id references to resourable_id and resourable_type for Nixpacks configuration
- *(core)* Correct spelling of 'resourable' to 'resourceable' in Nixpacks configuration for ApplicationDeploymentJob
- *(ui)* Traefik dashboard url not working
- *(ui)* Proxy status badge flashing during navigation
- *(core)* Update environment variable generation logic in ApplicationDeploymentJob to handle different build packs
- *(env)* Shared variables can not be updated
- *(ui)* Metrics stuck in loading state
- *(ui)* Use `wire:navigate` to navigate to the server settings page
- *(service)* Plunk API & health check endpoint (#4925)
- *(service)* Infinite loading and lag with invoiceninja service (#4876)
- *(service)* Invoiceninja service
- *(workflows)* `Waiting for changes` label should also be considered and improved messages
- *(workflows)* Remove tags only if the PR has been merged into the main branch
- *(terminal)* Terminal shows that it is not available, even though it is
- *(labels)* Docker labels do not generated correctly
- *(helper)* Downgrade Nixpacks to v1.29.0
- *(labels)* Generate labels when they are empty not when they are already generated
- *(storage)* Hetzner storage buckets not working
- *(ui)* Update database control UI to check server functionality before displaying actions
- *(ui)* Typo in upgrade message
- *(ui)* Cloudflare tunnel configuration should be an info, not a warning
- *(s3)* DigitalOcean storage buckets do not work
- *(ui)* Correct typo in container label helper text
- Disable certain parts if readonly label is turned off
- Cleanup old scheduled_task_executions
- Validate cron expression in Scheduled Task update
- *(core)* Check cron expression on save
- *(database)* Detect more postgres database image types
- *(templates)* Update service templates
- Remove quotes in COOLIFY_CONTAINER_NAME
- *(templates)* Update Trigger.dev service templates with v3 configuration
- *(database)* Adjust MongoDB restore command and import view styling
- *(core)* Improve public repository URL parsing for branch and base directory
- *(core)* Increase HTTP/2 max concurrent streams to 250 (default)
- *(ui)* Update docker compose file helper text to clarify repository modification
- *(ui)* Skip SERVICE_FQDN and SERVICE_URL variables during update
- *(core)* Stopping database is not disabling db proxy
- *(core)* Remove --remove-orphans flag from proxy startup command to prevent other proxy deletions (db)
- *(api)* Domain check when updating domain
- *(ui)* Always redirect to dashboard after team switch
- *(backup)* Escape special characters in database backup commands
- *(core)* Improve deployment failure Slack notification formatting
- *(core)* Update Slack notification formatting to use bold correctly
- *(core)* Enhance Slack deployment success notification formatting
- *(ui)* Simplify service templates loading logic
- *(ui)* Align title and add button vertically in various views
- Handle pullrequest:updated for reliable preview deployments
- *(ui)* Fix typo on team page (#5105)
- Cal.com documentation link give 404 (#5070)
- *(slack)* Notification settings URL in `HighDiskUsage` message (#5071)
- *(ui)* Correct typo in Storage delete dialog (#5061)
- *(lang)* Add missing italian translations (#5057)
- *(service)* Improve duplicati.yaml (#4971)
- *(service)* Links in homepage service (#5002)
- *(service)* Added SMTP credentials to getoutline yaml template file (#5011)
- *(service)* Added `KEY` Variable to Beszel Template (#5021)
- *(cloudflare-tunnels)* Dead links to docs (#5104)
- System-wide GitHub apps (#5114)
- Pull latest image from registry when using build server
- *(deployment)* Improve server selection for deployment cancellation
- *(deployment)* Improve log line rendering and formatting
- *(s3-storage)* Optimize team admin notification query
- *(core)* Improve connection testing with dynamic disk configuration for s3 backups
- *(core)* Update service status refresh event handling
- *(ui)* Adjust polling intervals for database and service status checks
- *(service)* Update Fider service template healthcheck command
- *(core)* Improve server selection error handling in Docker component
- *(core)* Add server functionality check before dispatching container status
- *(ui)* Disable sticky scroll in Monaco editor
- *(ui)* Add literal and multiline env support to services.
- *(services)* Owncloud docs link
- *(template)* Remove db-migration step from `infisical.yaml` (#5209)
- *(service)* Penpot (#5047)
- *(core)* Production dockerfile
- *(ui)* Update storage configuration guidance link
- *(ui)* Set default SMTP encryption to starttls
- *(notifications)* Correct environment URL path in application notifications
- *(config)* Update default PostgreSQL host to coolify-db instead of postgres
- *(docker)* Improve Docker compose file validation process
- *(ui)* Restrict service retrieval to current team
- *(core)* Only validate custom compose files
- *(mail)* Set default mailer to array when not specified
- *(ui)* Correct redirect routes after task deletion
- *(core)* Adding a new server should not try to make the default docker network
- *(core)* Clean up unnecessary files during application image build
- *(core)* Improve label generation and merging for applications and services
- *(billing)* Handle 'past_due' subscription status in Stripe processing
- *(revert)* Label parsing
- *(helpers)* Initialize command variable in parseCommandFromMagicEnvVariable
- *(billing)* Restrict Stripe subscription status update to 'active' only

### 💼 Other

- Only allow cleanup in production
- Make copy/password visible
- Dns check
- Remote docker engine
- Colorful states
- Application start
- Colors on svelte-select
- Improvements
- Fix
- Better layout for root team
- Fix
- Fixes
- Fix
- Fix
- Fix
- Fix
- Fix
- Fix
- Fix
- Insane amount
- Fix
- Fixes
- Fixes
- Fix
- Fixes
- Fixes
- Show extraconfig if wp is running
- Umami service
- Base image selector
- Laravel
- Appwrite
- Testing WS
- Traefik?!
- Traefik
- Traefik
- Traefik migration
- Traefik
- Traefik
- Traefik
- Notifications and application usage
- *(fix)* Traefik
- Css
- Error message https://github.com/coollabsio/coolify/issues/502
- Changes
- Settings
- For removing app
- Local ssh port
- Redesign a lot
- Fixes
- Loading indicator for plausible buttons
- Fix
- Fider
- Typing
- Fixes here and there
- Dashboard fine-tunes
- Fine-tune
- Fixes
- Fix
- Dashbord fixes
- Fixes
- Fixes
- Route to the correct path when creating destination from db config
- Fixes
- Change tooltips and info boxes
- Added rc release
- Database_branches
- Login page
- Fix login/register page
- Update devcontainer
- Add debug log
- Fix initial loading icon bg
- Fix loading start/stop db/services
- Dashboard updates and a lot more
- Dashboard updates
- Fix tooltip
- Fix button
- Fix follow button
- Arm should be on next all the time
- Fix plausible
- Fix cleanup button
- Fix buttons
- Responsive!
- Fixes
- Fix git icon
- Dropdown as infobox
- Small logs on mobile
- Improvements
- Fix destination view
- Settings view
- More UI improvements
- Fixes
- Fixes
- Fix
- Fixes
- Beta features
- Fix button
- Service fixes
- Fix basedirectory meaning
- Resource button fix
- Main resource search
- Dev logs
- Loading button
- Fix gitlab importer view
- Small fix
- Beta flag
- Hasura console notification
- Fix
- Fix
- Fixes
- Inprogress version of iam
- Fix indicato
- Iam & settings update
- Send 200 for ping and installation wh
- Settings icon
- Docker-compose support
- Docker compose
- Remove worker jobs
- One less worker thread
- New resource label
- Secrets on apps
- Fix
- Fixes
- Reload compose loading
- Pocketbase release
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Conditional on environment
- Add missing variables
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Trpc
- Extract process handling from async job.
- Extract process handling from async job.
- Extract process handling from async job.
- Extract process handling from async job.
- Extract process handling from async job.
- Extract process handling from async job.
- Extract process handling from async job.
- Persisting data
- Scheduled backups
- Boarding
- Backup existing database
- User should know that the public key
- Services are not availble yet
- Show registered users on waitlist page
- Nixpacksarchive
- Add Plausible analytics
- Global env variables
- Fix
- Trial emails
- Server check instead of app check
- Show trial instead of sub
- Server lost connection
- Services
- Services
- Services
- Ui for services
- Services
- Services
- Services
- Fixes
- Fix typo
- Fixed z-index for version link.
- Add source button
- Fixed z-index for magicbar
- A bit better error
- More visible feedback button
- Update help modal
- Help
- Marketing emails
- Fix previews to preview
- Uptime kume hc updated
- Switch back to /data (volume errors)
- Notifications
- Add shared email option to everyone
- Dockerimage
- Updated dashboard
- Fix
- Fix
- Coolify proxy access logs exposed in dev
- Able to select environment on new resource
- Delete server
- Redis
- Wordpress
- Add helper to service domains
- PAT by team
- Generate services
- Mongodb backup
- Mongodb backup
- Updates
- Fix subs
- New deployment jobs
- Compose based apps
- Swarm
- Swarm
- Swarm
- Swarm
- Disable trial
- Meilisearch
- Broadcast
- 🌮
- Env vars
- Migrate to livewire 3
- Fix for comma in labels
- Add image name to service stack + better options visibility
- Swarm
- Swarm
- Send notification email if payment
- New modal component
- Specific about newrelic logdrains
- Updates
- Change + icon to hamburger.
- Redesign
- Redesign
- Run cleanup every day
- Fix
- Fix log outputs
- Automatic cloudflare tunnels
- Backup executions
- Light buttons
- Multiple server view
- New pricing
- Fix allowTab logic
- Use 2 space instead of tab
- Non-root user for remote servers
- Non-root
- Update resource operations view
- Fix tag view
- Fix a few boxes here and there
- Responsive here and there
- Rocketchat
- New services based git apps
- Unnecessary notification
- Update process
- Glances service
- Glances
- Able to update application
- Add basedir + compose file in new compose based apps
- Formbricks template add required CRON_SECRET
- Add required CRON_SECRET to Formbricks template
- Service env parsing
- Actually update timezone on the server
- Cron jobs are executed based on the server timezone
- Server timezone seeder
- Recent backups UI
- Use apt-get instead of apt
- Typo
- Only pull helper image if the version is newer than the one
- Plunk svg
- Pull helper image if not available otherwise s3 backup upload fails
- Set a default server timezone
- Implement SSH Multiplexing
- Enabel mux
- Cleanup stale multiplexing connections
- Remote servers with port and user
- Do not change localhost server name on revalidation
- Release.md file
- SSH Multiplexing on docker desktop on Windows
- Remove labels and assignees on issue close
- Make sure this action is also triggered on PR issue close
- Volumes on development environment
- Clean new volume name for dev volumes
- Persist DBs, services and so on stored in data/coolify
- Add SSH Key fingerprint to DB
- Add a fingerprint to every private key on save, create...
- Make sure invalid private keys can not be added
- Encrypt private SSH keys in the DB
- Add is_sftp and is_server_ssh_key coloums
- New ssh key file name on disk
- Store all keys on disk by default
- Populate SSH key folder
- Populate SSH keys in dev
- Use new function names and logic everywhere
- Create a Multiplexing Helper
- SSH multiplexing
- Remove unused code form multiplexing
- SSH Key cleanup job
- Private key with ID 2 on dev
- Move more functions to the PrivateKey Model
- Add ssh key fingerprint and generate one for existing keys
- ID issues on dev seeders
- Server ID 0
- Make sure in use private keys are not deleted
- Do not delete SSH Key from disk during server validation error
- UI bug, do not write ssh key to disk in server dialog
- SSH Multiplexing for Jobs
- SSH algorhytm text
- Few multiplexing things
- Clear mux directory
- Multiplexing do not write file manually
- Integrate tow step process in the modal component WIP
- Ability to hide labels
- DB start, stop confirm
- Del init script
- General confirm
- Preview deployments and typos
- Service confirmation
- Confirm file storage
- Stop service confirm
- DB image cleanup
- Confirm ressource operation
- Environment variabel deletion
- Confirm scheduled tasks
- Confirm API token
- Confirm private key
- Confirm server deletion
- Confirm server settings
- Proxy stop and restart confirmation
- GH app deletion confirmation
- Redeploy all confirmation
- User deletion confirmation
- Team deletion confirmation
- Backup job confirmation
- Delete volume confirmation
- More conformations and fixes
- Delete unused private keys button
- Ray error because port is not uncommented
- #3322 deploy DB alterations before updating
- Css issue with advanced settings and remove cf tunnel in onboarding
- New cf tunnel install flow
- Made help text more clear
- Cloudflare tunnel
- Make helper text more clean to use a FQDN and not an URL
- Manual cleanup button and unused volumes and network deletion
- Force helper image removal
- Use the new confirmation flow
- Typo
- Typo in install script
- If API is disabeled do not show API token creation stuff
- Disable API by default
- Add debug bar
- Remove memlock as it caused problems for some users
- Server storage check
- Show backup button on supported db service stacks
- Update helper version
- Outline
- Directus
- Supertokens
- Supertokens json
- Rabbitmq
- Easyappointments
- Soketi
- Dozzle
- Windmill
- Coolify.json
- Keycloak
- Other DB options for freshrss
- Nextcloud MariaDB and MySQL versions
- Add peppermint
- Loggy
- Add UI for redis password and username
- Wireguard-easy template
- Https://github.com/coollabsio/coolify/issues/4186
- Separate resources by type in projects view
- Improve s3 add view
- Caddy docker labels do not honor "strip prefix" option
- Test rename GitHub app
- Checkmate service and fix prowlar slogan (too long)
- Arrrrr
- Dep
- Docker dep
- Trigger.dev templates - wrong key length issue
- Trigger.dev template - missing ports and wrong env usage
- Trigger.dev template - fixed otel config
- Trigger.dev template - fixed otel config
- Trigger.dev template - fixed port config
- Bump all dependencies (#5216)
- Bump Coolify to 4.0.0-beta.398

### 🚜 Refactor

- Code
- Env variable generator
- Service logs are now on one page
- Application status changed realtime
- Custom labels
- Clone project
- Compose file and install script
- Add SCHEDULER environment variable to StartSentinel.php
- Update edit-domain form in project service view
- Add Huly services to compose file
- Remove redundant heading in backup settings page
- Add isBuildServer method to Server model
- Update docker network creation in ApplicationDeploymentJob
- Update destination.blade.php to add group class for better styling
- Applicationdeploymentjob
- Improve code structure in ApplicationDeploymentJob.php
- Remove unnecessary debug statement in ApplicationDeploymentJob.php
- Remove unnecessary debug statements and improve code structure in RunRemoteProcess.php and ApplicationDeploymentJob.php
- Remove unnecessary logging statements from UpdateCoolify
- Update storage form inputs in show.blade.php
- Improve Docker Compose parsing for services
- Remove unnecessary port appending in updateCompose function
- Remove unnecessary form class in profile index.blade.php
- Update form layout in invite-link.blade.php
- Add log entry when starting new application deployment
- Improve Docker Compose parsing for services
- Update Docker Compose parsing for services
- Update slogan in shlink.yaml
- Improve display of deployment time in index.blade.php
- Remove commented out code for clearing Ray logs
- Update save_environment_variables method to use application's environment_variables instead of environment_variables_preview
- Append utm_source parameter to documentation URL
- Update save_environment_variables method to use application's environment_variables instead of environment_variables_preview
- Update deployment previews heading to "Deployments"
- Remove unused variables and improve code readability
- Initialize null properties in Github Change component
- Improve pre and post deployment command inputs
- Improve handling of Docker volumes in parseDockerComposeFile function
- Replaces duplications in code with a single function
- Update text color for stderr output in deployment show view
- Update text color for stderr output in deployment show view
- Remove debug code for saving environment variables
- Update Docker build commands for better performance and flexibility
- Update image sizes and add new logos to README.md
- Update README.md with new logos and fix styling
- Update shared.php to use correct key for retrieving sentinel version
- Update container name assignment in Application model
- Remove commented code for docker container removal
- Update Application model to include getDomainsByUuid method
- Update Project/Show component to sort environments by created_at
- Update profile index view to display 2FA QR code in a centered container
- Update dashboard.blade.php to use project's default environment for redirection
- Update gitCommitLink method to handle null values in source.html_url
- Update docker-compose generation to use multi-line literal block
- Update Service model's saveComposeConfigs method
- Add default environment to Service model's saveComposeConfigs method
- Improve handling of default environment in Service model's saveComposeConfigs method
- Remove commented out code in Service model's saveComposeConfigs method
- Update stack-form.blade.php to include wire:target attribute for submit button
- Update code to use str() instead of Str::of() for string manipulation
- Improve formatting and readability of source.blade.php
- Add is_build_time property to nixpacks_php_fallback_path and nixpacks_php_root_dir
- Simplify code for retrieving subscription in Stripe webhook
- Add force parameter to StartProxy handle method
- Comment out unused code for network cleanup
- Reset default labels when docker_compose_domains is modified
- Webhooks view
- Tags view
- Only get instanceSettings once from db
- Update Dockerfile to set CI environment variable to true
- Remove unnecessary code in AppServiceProvider.php
- Update Livewire configuration views
- Update Webhooks.php to use nullable type for webhook URLs
- Add lazy loading to tags in Livewire configuration view
- Update metrics.blade.php to improve alert message clarity
- Update version numbers to 4.0.0-beta.312
- Update version numbers to 4.0.0-beta.314
- Remove unused code and fix storage form layout
- Update Docker Compose build command to include --pull flag
- Update DockerCleanupJob to handle nullable usageBefore property
- Server status job and docker cleanup job
- Update DockerCleanupJob to use server settings for force cleanup
- Update DockerCleanupJob to use server settings for force cleanup
- Disable health check for Rust applications during deployment
- Update CleanupDatabase.php to adjust keep_days based on environment
- Adjust keep_days in CleanupDatabase.php based on environment
- Remove commented out code for cleaning up networks in CleanupDocker.php
- Update livewire polling interval in heading.blade.php
- Remove unused code for checking server status in Heading.php
- Simplify log drain installation in ServerCheckJob
- Remove unnecessary debug statement in ServerCheckJob
- Simplify log drain installation and stop log drain if necessary
- Cleanup unnecessary dynamic proxy configuration in Init command
- Remove unnecessary debug statement in ApplicationDeploymentJob
- Update timeout for graceful_shutdown_container in ApplicationDeploymentJob
- Remove unused code and optimize CheckForUpdatesJob
- Update ProxyTypes enum values to use TRAEFIK instead of TRAEFIK_V2
- Update Traefik labels on init and cleanup unnecessary dynamic proxy configuration
- Update StandalonePostgresql database initialization and backup handling
- Update cron expressions and add helper text for scheduled tasks
- Update Server model getContainers method to use collect() for containers and containerReplicates
- Import ProxyTypes enum and use TRAEFIK instead of TRAEFIK_V2
- Update event listeners in Show components
- Refresh application to get latest database changes
- Update RabbitMQ configuration to use environment variable for port
- Remove debug statement in parseDockerComposeFile function
- ParseServiceVolumes
- Update OpenApi command to generate documentation
- Remove unnecessary server status check in destination view
- Remove unnecessary admin user email and password in budibase.yaml
- Improve saving of custom internal name in Advanced.php
- Add conditional check for volumes in generate_compose_file()
- Improve storage mount forms in add.blade.php
- Load environment variables based on resource type in sortEnvironmentVariables()
- Remove unnecessary network cleanup in Init.php
- Remove unnecessary environment variable checks in parseDockerComposeFile()
- Add null check for docker_compose_raw in parseCompose()
- Update dockerComposeParser to use YAML data from $yaml instead of $compose
- Convert service variables to key-value pairs in parseDockerComposeFile function
- Update database service name from mariadb to mysql
- Remove unnecessary code in DatabaseBackupJob and BackupExecutions
- Update Docker Compose parsing function to convert service variables to key-value pairs
- Update Docker Compose parsing function to convert service variables to key-value pairs
- Remove unused server timezone seeder and related code
- Remove unused server timezone seeder and related code
- Remove unused PullCoolifyImageJob from schedule
- Update parse method in Advanced, All, ApplicationPreview, General, and ApplicationDeploymentJob classes
- Remove commented out code for getIptables() in Dashboard.php
- Update .env file path in install.sh script
- Update SELF_HOSTED environment variable in docker-compose.prod.yml
- Remove unnecessary code for creating coolify network in upgrade.sh
- Update environment variable handling in StartClickhouse.php and ApplicationDeploymentJob.php
- Improve handling of COOLIFY_URL in shared.php
- Update build_args property type in ApplicationDeploymentJob
- Update background color of sponsor section in README.md
- Update Docker Compose location handling in PublicGitRepository
- Upgrade process of Coolify
- Improve handling of server timezones in scheduled backups and tasks
- Improve handling of server timezones in scheduled backups and tasks
- Improve handling of server timezones in scheduled backups and tasks
- Update cleanup schedule to run daily at midnight
- Skip returning volume if driver type is cifs or nfs
- Improve environment variable handling in shared.php
- Improve handling of environment variable merging in upgrade script
- Remove unnecessary code in ExecuteContainerCommand.php
- Improve Docker network connection command in StartService.php
- Terminal / run command
- Add authorization check in ExecuteContainerCommand mount method
- Remove unnecessary code in Terminal.php
- Remove unnecessary code in Terminal.blade.php
- Update WebSocket connection initialization in terminal.blade.php
- Remove unnecessary console.log statements in terminal.blade.php
- Update Docker cleanup label in Heading.php and Navbar.php
- Remove commented out code in Navbar.php
- Remove CleanupSshKeysJob from schedule in Kernel.php
- Update getAJoke function to exclude offensive jokes
- Update getAJoke function to use HTTPS for API request
- Update CleanupHelperContainersJob to use more efficient Docker command
- Update PrivateKey model to improve code readability and maintainability
- Remove unnecessary code in PrivateKey model
- Update PrivateKey model to use ownedByCurrentTeam() scope for cleanupUnusedKeys()
- Update install.sh script to check if coolify-db volume exists before generating SSH key
- Update ServerSeeder and PopulateSshKeysDirectorySeeder
- Improve attribute sanitization in Server model
- Update confirmation button text for deletion actions
- Remove unnecessary code in shared.php file
- Update environment variables for services in compose files
- Update select.blade.php to improve trademarks policy display
- Update select.blade.php to improve trademarks policy display
- Fix typo in subscription URLs
- Add Postiz service to compose file (disabled for now)
- Update shared.php to include predefined ports for services
- Simplify SSH key synchronization logic
- Remove unused code in DatabaseBackupStatusJob and PopulateSshKeysDirectorySeeder
- Remove commented out code and improve environment variable handling in newParser function
- Improve label positioning in input and checkbox components
- Group and sort fields in StackForm by service name and password status
- Improve layout and add checkbox for task enablement in scheduled task form
- Update checkbox component to support full width option
- Update confirmation label in danger.blade.php template
- Fix typo in execute-container-command.blade.php
- Update OS_TYPE for Asahi Linux in install.sh script
- Add localhost as Server if it doesn't exist and not in cloud environment
- Add localhost as Server if it doesn't exist and not in cloud environment
- Update ProductionSeeder to fix issue with coolify_key assignment
- Improve modal confirmation titles and button labels
- Update install.sh script to remove redirection of upgrade output to /dev/null
- Fix modal input closeOutside prop in configuration.blade.php
- Add support for IPv6 addresses in sslip function
- Update environment variable name for uptime-kuma service
- Improve start proxy script to handle existing containers gracefully
- Update delete server confirmation modal buttons
- Remove unnecessary code
- Update search input placeholder in resource index view
- Remove deployment queue when deleting an application
- Improve SSH command generation in Terminal.php and terminal-server.js
- Fix indentation in modal-confirmation.blade.php
- Improve parsing of commands for sudo in parseCommandsByLineForSudo
- Improve popup component styling and button behavior
- Encode delimiter in SshMultiplexingHelper
- Remove inactivity timer in terminal-server.js
- Improve socket reconnection interval in terminal.js
- Remove unnecessary watch command from soketi service entrypoint
- Update Traefik configuration for improved security and logging
- Improve proxy configuration and code consistency in Server model
- Rename name method to sanitizedName in BaseModel for clarity
- Improve migration command and enhance application model with global scope and status checks
- Unify notification icon
- Remove unused Azure and Authentik service configurations from services.php
- Change email column types in instance_settings migration from string to text
- Change OauthSetting creation to updateOrCreate for better handling of existing records
- Rename `coolify.environment` to `coolify.environmentName`
- Rename parameter in DatabaseBackupJob for clarity
- Improve checkbox component accessibility and styling
- Remove unused tags method from ApplicationDeploymentJob
- Improve deployment status check in isAnyDeploymentInprogress function
- Extend HorizonServiceProvider from HorizonApplicationServiceProvider
- Streamline job status retrieval and clean up repository interface
- Enhance ApplicationDeploymentJob and HorizonServiceProvider for improved job handling
- Remove commented-out unsubscribe route from API
- Update redirect calls to use a consistent navigation method in deployment functions
- AppServiceProvider
- Github.php
- Improve data formatting and UI
- Comment out RootUserSeeder call in ProductionSeeder for clarity
- Streamline ProductionSeeder by removing debug logs and unnecessary checks, while ensuring essential seeding operations remain intact
- Remove debug echo statements from Init command to clean up output and improve readability
- *(workflows)* Replace jq with PHP script for version retrieval in workflows
- *(s3)* Improve S3 bucket endpoint formatting
- *(vite)* Improve environment variable handling in Vite configuration
- *(ui)* Simplify GitHub App registration UI and layout
- Simplify service start and restart workflows
- Use pull flag on docker compose up
- *(ui)* Simplify file storage modal confirmations
- *(notifications)* Improve transactional email settings handling
- *(scheduled-tasks)* Improve scheduled task creation and management
- *(billing)* Enhance Stripe subscription status handling and notifications

### 📚 Documentation

- Contribution guide
- How to add new services
- Update
- Update
- Update Plunk documentation link in compose/plunk.yaml
- Update link to deploy api docs
- Add TECH_STACK.md (#4883)
- *(services)* Reword nitropage url and slogan
- *(readme)* Add Convex to special sponsors section
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog
- Update changelog

### 🎨 Styling

- Linting

### 🧪 Testing

- Native binary target
- Dockerfile
- Remove prisma
- More tests
- Setup database for upcoming tests

### ⚙️ Miscellaneous Tasks

- Version bump
- Version
- Version
- Version++
- Version++
- Version++
- Version++
- Version ++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version ++
- Version++
- Version++
- Version++
- Fixed typo on New Git Source view
- Version++
- Version++
- Version++
- Version++
- Lock file + fix packages
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Update packages
- Version++
- Update build scripts
- Update build packages
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Add .pnpm-store in .gitignore
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Minor changes
- Minor changes
- Minor changes
- Whoops
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Update staging release
- Version++
- Version++
- Add jda icon for lavalink service
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Version++
- Update version to 4.0.0-beta.275
- Update DNS server validation helper text
- Dark mode should be the default
- Improve menu item styling and spacing in service configuration and index views
- Improve menu item styling and spacing in service configuration and index views
- Improve menu item styling and spacing in project index and show views
- Remove docker compose versions
- Add Listmonk service template and logo
- Refactor GetContainersStatus.php for improved readability and maintainability
- Refactor ApplicationDeploymentJob.php for improved readability and maintainability
- Add metrics and logs directories to installation script
- Update sentinel version to 0.0.2 in versions.json
- Update permissions on metrics and logs directories
- Comment out server sentinel check in ServerStatusJob
- Update version numbers to 4.0.0-beta.278
- Update hover behavior and cursor style in scheduled task executions view
- Refactor scheduled task view to improve code readability and maintainability
- Skip scheduled tasks if application or service is not running
- Remove debug logging statements in Kernel.php
- Handle invalid cron strings in Kernel.php
- Refactor Service.php to handle missing admin user in extraFields() method
- Update twenty CRM template with environment variables and dependencies
- Refactor applications.php to remove unused imports and improve code readability
- Refactor deployment index.blade.php for improved readability and rollback handling
- Refactor GitHub app selection UI in project creation form
- Update ServerLimitCheckJob.php to handle missing serverLimit value
- Remove unnecessary code for saving commit message
- Update DOCKER_VERSION to 26.0 in install.sh script
- Update Docker and Docker Compose versions in Dockerfiles
- Update version numbers to 4.0.0-beta.279
- Limit commit message length to 50 characters in ApplicationDeploymentJob
- Update version to 4.0.0-beta.283
- Change pre and post deployment command length in applications table
- Refactor container name logic in GetContainersStatus.php and ForcePasswordReset.php
- Remove unnecessary content from Docker Compose file
- Update Sentry release version to 4.0.0-beta.287
- Add Thompson Edolo as a sponsor
- Add null checks for team in Stripe webhook
- Update Sentry release version to 4.0.0-beta.288
- Update for version 289
- Fix formatting issue in deployment index.blade.php file
- Remove unnecessary wire:navigate attribute in breadcrumbs.blade.php
- Rename docker dirs
- Update laravel/socialite to version v5.14.0 and livewire/livewire to version 3.4.9
- Update modal styles for better user experience
- Update deployment index.blade.php script for better performance
- Update version numbers to 4.0.0-beta.290
- Update version numbers to 4.0.0-beta.291
- Update version numbers to 4.0.0-beta.292
- Update version numbers to 4.0.0-beta.293
- Add upgrade guide link to upgrade.blade.php
- Improve upgrade.blade.php with clearer instructions and formatting
- Update version numbers to 4.0.0-beta.294
- Add Lightspeed.run as a sponsor
- Update Dockerfile to install vim
- Update Dockerfile with latest versions of Docker, Docker Compose, Docker Buildx, Pack, and Nixpacks
- Update version numbers to 4.0.0-beta.295
- Update supported OS list with almalinux
- Update install.sh to support PopOS
- Update install.sh script to version 1.3.2 and handle Linux Mint as Ubuntu
- Update page title in resource index view
- Update logo file path in logto.yaml
- Update logo file path in logto.yaml
- Remove commented out code for docker container removal
- Add isAnyDeploymentInprogress function to check if any deployments are in progress
- Add ApplicationDeploymentJob and pint.json
- Update version numbers to 4.0.0-beta.298
- Switch to database sessions from redis
- Update dependencies and remove unused code
- Update tailwindcss and vue versions in package.json
- Update service template URL in constants.php
- Update sentinel version to 0.0.8
- Update chart styling and loading text
- Update sentinel version to 0.0.9
- Update Spanish translation for failed authentication messages
- Add portuguese traslation
- Add Turkish translations
- Add Vietnamese translate
- Add Treive logo to donations section
- Update README.md with latest release version badge
- Update latest release version badge in README.md
- Update version to 4.0.0-beta.299
- Move server delete component to the bottom of the page
- Update version to 4.0.0-beta.301
- Update version to 4.0.0-beta.302
- Update version to 4.0.0-beta.303
- Update version to 4.0.0-beta.305
- Update version to 4.0.0-beta.306
- Add log1x/laravel-webfonts package
- Update version to 4.0.0-beta.307
- Refactor ServerStatusJob constructor formatting
- Update Monaco Editor for Docker Compose and Proxy Configuration
- More details
- Refactor shared.php helper functions
- Update Plausible docker compose template to Plausible 2.1.0
- Update Plausible docker compose template to Plausible 2.1.0
- Update livewire/livewire dependency to version 3.4.9
- Refactor checkIfDomainIsAlreadyUsed function
- Update storage.blade.php view for livewire project service
- Update version to 4.0.0-beta.310
- Update composer dependencies
- Add new logo for Latitude
- Bump version to 4.0.0-beta.311
- Update version to 4.0.0-beta.315
- Update version to 4.0.0-beta.316
- Update bug report template
- Update repository form with simplified URL input field
- Update width of container in general.blade.php
- Update checkbox labels in general.blade.php
- Update general page of apps
- Handle JSON parsing errors in format_docker_command_output_to_json
- Update Traefik image version to v2.11
- Update version to 4.0.0-beta.317
- Update version to 4.0.0-beta.318
- Update helper message with link to documentation
- Disable health check by default
- Remove commented out code for sending internal notification
- Update APP_BASE_URL to use SERVICE_FQDN_PLANE
- Update resource-limits.blade.php with improved input field helpers
- Update version numbers to 4.0.0-beta.319
- Remove commented out code for docker image pruning
- Collect/create/update volumes in parseDockerComposeFile function
- Update version to 4.0.0-beta.320
- Add pull_request image builds to GH actions
- Add comment explaining the purpose of disconnecting the network in cleanup_unused_network_from_coolify_proxy()
- Update formbricks template
- Update registration view to display a notice for first user that it will be an admin
- Update server form to use password input for IP Address/Domain field
- Update navbar to include service status check
- Update navbar and configuration to improve service status check functionality
- Update workflows to include PR build and merge manifest steps
- Update UpdateCoolifyJob timeout to 10 minutes
- Update UpdateCoolifyJob to dispatch CheckForUpdatesJob synchronously
- Update version to 4.0.0-beta.321
- Update version to 4.0.0-beta.322
- Update version to 4.0.0-beta.323
- Update version to 4.0.0-beta.324
- New compose parser with tests
- Update version to 1.3.4 in install.sh and 1.0.6 in upgrade.sh
- Update memory limit to 64MB in horizon configuration
- Update php packages
- Update axios npm dependency to version 1.7.5
- Update Coolify version to 4.0.0-beta.324 and fix file paths in upgrade script
- Update Coolify version to 4.0.0-beta.324
- Update Coolify version to 4.0.0-beta.325
- Update Coolify version to 4.0.0-beta.326
- Add cd command to change directory before removing .env file
- Update Coolify version to 4.0.0-beta.327
- Update Coolify version to 4.0.0-beta.328
- Update sponsor links in README.md
- Update version.json to versions.json in GitHub workflow
- Cleanup stucked resources and scheduled backups
- Update GitHub workflow to use versions.json instead of version.json
- Update GitHub workflow to use versions.json instead of version.json
- Update GitHub workflow to use versions.json instead of version.json
- Update GitHub workflow to use jq container for version extraction
- Update GitHub workflow to use jq container for version extraction
- Update UI for displaying no executions found in scheduled task list
- Update UI for displaying deployment status in deployment list
- Update UI for displaying deployment status in deployment list
- Ignore unnecessary files in production build workflow
- Update server form layout and settings
- Update Dockerfile with latest versions of PACK and NIXPACKS
- Update coolify-helper.yml to get version from versions.json
- Disable Ray by default
- Enable Ray by default and update Dockerfile with latest versions of PACK and NIXPACKS
- Update Ray configuration and Dockerfile
- Add middleware for updating environment variables by UUID in `api.php` routes
- Expose port 3000 in browserless.yaml template
- Update Ray configuration and Dockerfile
- Update coolify version to 4.0.0-beta.331
- Update versions.json and sentry.php to 4.0.0-beta.332
- Update version to 4.0.0-beta.332
- Update DATABASE_URL in plunk.yaml to use plunk database
- Add coolify.managed=true label to Docker image builds
- Update docker image pruning command to exclude managed images
- Update docker cleanup schedule to run daily at midnight
- Update versions.json to version 1.0.1
- Update coolify-helper.yml to include "next" branch in push trigger
- Set timeout for ServerCheckJob to 60 seconds
- Update appwrite.yaml to include OpenSSL key variable assignment
- Update version numbers to 4.0.0-beta.333
- Copy .env file to .env-{DATE} if it exists
- Update .env file with new values
- Update server check job middleware to use server ID instead of UUID
- Add reminder to backup .env file before running install script again
- Copy .env file to backup location during installation script
- Add reminder to backup .env file during installation script
- Update permissions in pr-build.yml and version numbers
- Add minio/mc command to Dockerfile
- Remove itsgoingd/clockwork from require-dev in composer.json
- Update 'key' value of gitlab in Service.php to use environment variable
- Update release version to 4.0.0-beta.335
- Update constants.ssh.mux_enabled in remoteProcess.php
- Update listeners and proxy settings in server form and new server components
- Remove unnecessary null check for proxy_type in generate_default_proxy_configuration
- Remove unnecessary SSH command execution time logging
- Update release version to 4.0.0-beta.336
- Update coolify environment variable assignment with double quotes
- Update shared.php to fix issues with source and network variables
- Update terminal styling for better readability
- Update button text for container connection form
- Update Dockerfile and workflow for Coolify Realtime (v4)
- Remove unused entrypoint script and update volume mapping
- Update .env file and docker-compose configuration
- Update APP_NAME environment variable in docker-compose.prod.yml
- Update WebSocket URL in terminal.blade.php
- Update Dockerfile and workflow for Coolify Realtime (v4)
- Update Dockerfile and workflow for Coolify Realtime (v4)
- Update Dockerfile and workflow for Coolify Realtime (v4)
- Rename Command Center to Terminal in code and views
- Update branch restriction for push event in coolify-helper.yml
- Update terminal button text and layout in application heading view
- Refactor terminal component and select form layout
- Update coolify nightly version to 4.0.0-beta.335
- Update helper version to 1.0.1
- Fix syntax error in versions.json
- Update version numbers to 4.0.0-beta.337
- Update Coolify installer and scripts to include a function for fetching programming jokes
- Update docker network connection command in ApplicationDeploymentJob.php
- Add validation to prevent selecting 'default' server or container in RunCommand.php
- Update versions.json to reflect latest version of realtime container
- Update soketi image to version 1.0.1
- Nightly - Update soketi image to version 1.0.1 and versions.json to reflect latest version of realtime container
- Update version numbers to 4.0.0-beta.339
- Update version numbers to 4.0.0-beta.340
- Update version numbers to 4.0.0-beta.341
- Update version numbers to 4.0.0-beta.342
- Update remove-labels-and-assignees-on-close.yml
- Add SSH key for localhost in ProductionSeeder
- Update SSH key generation in install.sh script
- Update ProductionSeeder to call OauthSettingSeeder and PopulateSshKeysDirectorySeeder
- Update install.sh to support Asahi Linux
- Update install.sh version to 1.6
- Remove unused middleware and uniqueId method in DockerCleanupJob
- Refactor DockerCleanupJob to remove unused middleware and uniqueId method
- Remove unused migration file for populating SSH keys and clearing mux directory
- Add modified files to the commit
- Refactor pre-commit hook to improve performance and readability
- Update CONTRIBUTING.md with troubleshooting note about database migrations
- Refactor pre-commit hook to improve performance and readability
- Update cleanup command to use Redis instead of queue
- Update Docker commands to start proxy
- Update version numbers to 4.0.0-beta.343
- Update version numbers to 4.0.0-beta.344
- Update version numbers to 4.0.0-beta.345
- Update version numbers to 4.0.0-beta.346
- Add autocomplete attribute to input fields
- Refactor API Tokens component to use isApiEnabled flag
- Update versions.json file
- Remove unused .env.development.example file
- Update API Tokens view to include link to Settings menu
- Update web.php to cast server port as integer
- Update backup deletion labels to use language files
- Update database startup heading title
- Update database startup heading title
- Custom vite envs
- Update version numbers to 4.0.0-beta.348
- Refactor code to improve SSH key handling and storage
- Update Mailpit logo to use SVG format
- Fix docs link in running state
- Update Coolify Realtime workflow to only trigger on the main branch
- Refactor instanceSettings() function to improve code readability
- Update Coolify Realtime image to version 1.0.2
- Remove unnecessary code in DatabaseBackupJob.php
- Add "Not Usable" indicator for storage items
- Refactor instanceSettings() function and improve code readability
- Update version numbers to 4.0.0-beta.349 and 4.0.0-beta.350
- Update version numbers to 4.0.0-beta.350 in configuration files
- Update command signature and description for cleanup application deployment queue
- Add missing import for Attribute class in ApplicationDeploymentQueue model
- Update modal input in server form to prevent closing on outside click
- Remove unnecessary command from SshMultiplexingHelper
- Remove commented out code for uploading to S3 in DatabaseBackupJob
- Update soketi service image to version 1.0.3
- Update version to 4.0.0-beta.352
- Refactor DatabaseBackupJob to handle missing team
- Update version to 4.0.0-beta.353
- Update service application view
- Update version to 4.0.0-beta.354
- Remove debug statement in Service model
- Remove commented code in Server model
- Fix application deployment queue filter logic
- Refactor modal-confirmation component
- Update it-tools service template and port configuration
- Update homarr service template and remove unnecessary code
- Update homarr service template and remove unnecessary code
- Update version to 4.0.0-beta.355
- Update version to 4.0.0-beta.356
- Remove commented code for shared variable type validation
- Update MariaDB image to version 11 and fix service environment variable orders
- Update anythingllm.yaml volumes configuration
- Update proxy configuration paths for Caddy and Nginx in dev
- Update password form submission in modal-confirmation component
- Update project query to order by name in uppercase
- Update project query to order by name in lowercase
- Update select.blade.php with improved search functionality
- Add Nitropage service template and logo
- Bump coolify-helper version to 1.0.2
- Refactor loadServices2 method and remove unused code
- Update version to 4.0.0-beta.357
- Update service names and volumes in windmill.yaml
- Update version to 4.0.0-beta.358
- Ignore .ignition.json files in Docker and Git
- Add mattermost logo as svg
- Add mattermost svg to compose
- Update version to 4.0.0-beta.357
- Fix form submission and keydown event handling in modal-confirmation.blade.php
- Update version numbers to 4.0.0-beta.359 in configuration files
- Disable adding default environment variables in shared.php
- Update laravel/horizon dependency to version 5.29.1
- Update service extra fields to use dynamic keys
- Update livewire/livewire dependency to version 3.4.9
- Add transmission template desc
- Update transmission docs link
- Update version numbers to 4.0.0-beta.360 in configuration files
- Update AWS environment variable names in unsend.yaml
- Update AWS environment variable names in unsend.yaml
- Update livewire/livewire dependency to version 3.4.9
- Update version to 4.0.0-beta.361
- Update Docker build and push actions to v6
- Update Docker build and push actions to v6
- Update Docker build and push actions to v6
- Sync coolify-helper to dockerhub as well
- Push realtime to dockerhub
- Sync coolify-realtime to dockerhub
- Rename workflows
- Rename development to staging build
- Sync coolify-testing-host to dockerhbu
- Sync coolify prod image to dockerhub as well
- Update Docker version to 26.0
- Update project resource index page
- Update project service configuration view
- Edit www helper
- Update dep
- Regenerate openapi spec
- Composer dep bump
- Dep bump
- Upgrade cloudflared and minio
- Remove comments and improve DB column naming
- Remove unused seeder
- Remove unused waitlist stuff
- Remove wired.php (not used anymore)
- Remove unused resale license job
- Remove commented out internal notification
- Remove more waitlist stuff
- Remove commented out notification
- Remove more waitlist stuff
- Remove unused code
- Fix typo
- Remove comment out code
- Some reordering
- Remove resale license reference
- Remove functions from shared.php
- Public settings for email notification
- Remove waitlist redirect
- Remove log
- Use new notification trait
- Remove unused route
- Remove unused email component
- Comment status changes as it is disabled for now
- Bump dep
- Reorder navbar
- Rename topicID to threadId like in the telegram API response
- Update PHP configuration to set memory limit using environment variable
- Regenerate API spec, removing notification fields
- Remove ray debugging
- Version ++
- Improve Penpot healthchecks
- Switch up readonly lables to make more sense
- Remove unused computed fields
- Use the new job dispatch
- Disable volume data cloning for now
- Improve code
- Lowcoder service naming
- Use new functions
- Improve error styling
- Css
- More css as it still looks like shit
- Final css touches
- Ajust time to 50s (tests done)
- Remove debug log, finally found it
- Remove more logging
- Remove limit on commit message
- Remove dayjs
- Remove unused code and fix import
- *(dep)* Bump nixpacks version
- *(dep)* Version++
- *(dep)* Bump helper version to 1.0.5
- *(docker)* Add blank line for readability in Dockerfile
- *(versions)* Update coolify versions to v4.0.0-beta.388
- *(versions)* Update coolify versions to v4.0.0-beta.389 and add helper version retrieval script
- *(versions)* Update coolify versions to v4.0.0-beta.389
- *(core)* EnvironmentVariable Model now extends BaseModel to remove duplicated code
- *(versions)* Update coolify versions to v4.0.0-beta.3909
- *(version)* Bump Coolify version to 4.0.0-beta.391
- *(config)* Increase default PHP memory limit to 256M
- Add openapi response
- *(workflows)* Make naming more clear and remove unused code
- Bump Coolify version to 4.0.0-beta.392/393
- *(ci)* Update changelog generation workflow to target 'next' branch
- *(ci)* Update changelog generation workflow to target main branch
- Rollback Coolify version to 4.0.0-beta.392
- Bump Coolify version to 4.0.0-beta.393
- Bump Coolify version to 4.0.0-beta.394
- Bump Coolify version to 4.0.0-beta.395
- Bump Coolify version to 4.0.0-beta.396
- *(services)* Update zipline to use new Database env var. (#5210)
- *(service)* Upgrade authentik service
- *(service)* Remove unused env from zipline
- Bump helper and realtime version

### ◀️ Revert

- Show usage everytime
- Revert: revert
- Wip
- Variable parsing
- Hc return code check
- Instancesettings
- Pull policy
- Advanced dropdown
- Databasebackup
- Remove Cloudflare async tag attributes

## [1.0.0] - 2021-03-24

<!-- generated by git-cliff -->
