<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'version' => '1.0.0',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'force_ssl' => false,
    'timezone' => 'Asia/Ho_Chi_Minh',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:nO2W99mkn0yAei8yloDlbOHCfKqex/WelBb5F6uQ0tk=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Cms\\CmsServiceProvider',
      27 => 'Spatie\\Permission\\PermissionServiceProvider',
      28 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Cms\\Modules\\Core\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'array',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'sen_oi_db',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'mariadb_sen_oi',
        'port' => '3306',
        'database' => 'sen_oi_db',
        'username' => 'root',
        'password' => '.root',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'mariadb_sen_oi',
        'port' => '3306',
        'database' => 'sen_oi_db',
        'username' => 'root',
        'password' => '.root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'mariadb_sen_oi',
        'port' => '3306',
        'database' => 'sen_oi_db',
        'username' => 'root',
        'password' => '.root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/public',
        'url' => 'http://localhost',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/category' => '/var/www/html/storage/app/public/category',
      '/var/www/html/public/avatar' => '/var/www/html/storage/app/public/avatar',
      '/var/www/html/public/pet' => '/var/www/html/storage/app/public/pet',
      '/var/www/html/public/blog' => '/var/www/html/storage/app/public/blog',
      '/var/www/html/public/banner' => '/var/www/html/storage/app/public/banner',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => NULL,
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'encryption' => 'tls',
        'username' => 'dohd2201@gmail.com',
        'password' => 'nfmonywvlcjmlobq',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'role_pivot_key' => NULL,
      'permission_pivot_key' => NULL,
      'model_morph_key' => 'model_id',
      'team_foreign_key' => 'team_id',
    ),
    'register_permission_check_method' => true,
    'teams' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'store' => 'default',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'localhost',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'google' => 
    array (
      'client_id' => '446488564135-62e8ol05cgsec8dpvdksur77hkmub4bh.apps.googleusercontent.com',
      'client_secret' => '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',
      'redirect' => 'http://127.0.0.1:8000/dang-nhap/google/callback',
    ),
    'twitter' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
      ),
    ),
  ),
  'district' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 1,
      2 => 'Quận Ba Đình',
    ),
    1 => 
    array (
      0 => 2,
      1 => 1,
      2 => 'Quận Hoàn Kiếm',
    ),
    2 => 
    array (
      0 => 3,
      1 => 1,
      2 => 'Quận Tây Hồ',
    ),
    3 => 
    array (
      0 => 4,
      1 => 1,
      2 => 'Quận Long Biên',
    ),
    4 => 
    array (
      0 => 5,
      1 => 1,
      2 => 'Quận Cầu Giấy',
    ),
    5 => 
    array (
      0 => 6,
      1 => 1,
      2 => 'Quận Đống Đa',
    ),
    6 => 
    array (
      0 => 7,
      1 => 1,
      2 => 'Quận Hai Bà Trưng',
    ),
    7 => 
    array (
      0 => 8,
      1 => 1,
      2 => 'Quận Hoàng Mai',
    ),
    8 => 
    array (
      0 => 9,
      1 => 1,
      2 => 'Quận Thanh Xuân',
    ),
    9 => 
    array (
      0 => 10,
      1 => 1,
      2 => 'Huyện Sóc Sơn',
    ),
    10 => 
    array (
      0 => 11,
      1 => 1,
      2 => 'Huyện Đông Anh',
    ),
    11 => 
    array (
      0 => 12,
      1 => 1,
      2 => 'Huyện Gia Lâm',
    ),
    12 => 
    array (
      0 => 13,
      1 => 1,
      2 => 'Quận Nam Từ Liêm',
    ),
    13 => 
    array (
      0 => 14,
      1 => 1,
      2 => 'Huyện Thanh Trì',
    ),
    14 => 
    array (
      0 => 15,
      1 => 1,
      2 => 'Quận Bắc Từ Liêm',
    ),
    15 => 
    array (
      0 => 16,
      1 => 1,
      2 => 'Huyện Mê Linh',
    ),
    16 => 
    array (
      0 => 17,
      1 => 1,
      2 => 'Quận Hà Đông',
    ),
    17 => 
    array (
      0 => 18,
      1 => 1,
      2 => 'Thị xã Sơn Tây',
    ),
    18 => 
    array (
      0 => 19,
      1 => 1,
      2 => 'Huyện Ba Vì',
    ),
    19 => 
    array (
      0 => 20,
      1 => 1,
      2 => 'Huyện Phúc Thọ',
    ),
    20 => 
    array (
      0 => 21,
      1 => 1,
      2 => 'Huyện Đan Phượng',
    ),
    21 => 
    array (
      0 => 22,
      1 => 1,
      2 => 'Huyện Hoài Đức',
    ),
    22 => 
    array (
      0 => 23,
      1 => 1,
      2 => 'Huyện Quốc Oai',
    ),
    23 => 
    array (
      0 => 24,
      1 => 1,
      2 => 'Huyện Thạch Thất',
    ),
    24 => 
    array (
      0 => 25,
      1 => 1,
      2 => 'Huyện Chương Mỹ',
    ),
    25 => 
    array (
      0 => 26,
      1 => 1,
      2 => 'Huyện Thanh Oai',
    ),
    26 => 
    array (
      0 => 27,
      1 => 1,
      2 => 'Huyện Thường Tín',
    ),
    27 => 
    array (
      0 => 28,
      1 => 1,
      2 => 'Huyện Phú Xuyên',
    ),
    28 => 
    array (
      0 => 29,
      1 => 1,
      2 => 'Huyện Ứng Hòa',
    ),
    29 => 
    array (
      0 => 30,
      1 => 1,
      2 => 'Huyện Mỹ Đức',
    ),
    30 => 
    array (
      0 => 31,
      1 => 2,
      2 => 'Thành phố Hà Giang',
    ),
    31 => 
    array (
      0 => 32,
      1 => 2,
      2 => 'Huyện Đồng Văn',
    ),
    32 => 
    array (
      0 => 33,
      1 => 2,
      2 => 'Huyện Mèo Vạc',
    ),
    33 => 
    array (
      0 => 34,
      1 => 2,
      2 => 'Huyện Yên Minh',
    ),
    34 => 
    array (
      0 => 35,
      1 => 2,
      2 => 'Huyện Quản Bạ',
    ),
    35 => 
    array (
      0 => 36,
      1 => 2,
      2 => 'Huyện Vị Xuyên',
    ),
    36 => 
    array (
      0 => 37,
      1 => 2,
      2 => 'Huyện Bắc Mê',
    ),
    37 => 
    array (
      0 => 38,
      1 => 2,
      2 => 'Huyện Hoàng Su Phì',
    ),
    38 => 
    array (
      0 => 39,
      1 => 2,
      2 => 'Huyện Xín Mần',
    ),
    39 => 
    array (
      0 => 40,
      1 => 2,
      2 => 'Huyện Bắc Quang',
    ),
    40 => 
    array (
      0 => 41,
      1 => 2,
      2 => 'Huyện Quang Bình',
    ),
    41 => 
    array (
      0 => 42,
      1 => 3,
      2 => 'Thành phố Cao Bằng',
    ),
    42 => 
    array (
      0 => 43,
      1 => 3,
      2 => 'Huyện Bảo Lâm',
    ),
    43 => 
    array (
      0 => 44,
      1 => 3,
      2 => 'Huyện Bảo Lạc',
    ),
    44 => 
    array (
      0 => 45,
      1 => 3,
      2 => 'Huyện Hà Quảng',
    ),
    45 => 
    array (
      0 => 46,
      1 => 3,
      2 => 'Huyện Trùng Khánh',
    ),
    46 => 
    array (
      0 => 47,
      1 => 3,
      2 => 'Huyện Hạ Lang',
    ),
    47 => 
    array (
      0 => 48,
      1 => 3,
      2 => 'Huyện Quảng Hòa',
    ),
    48 => 
    array (
      0 => 49,
      1 => 3,
      2 => 'Huyện Hoà An',
    ),
    49 => 
    array (
      0 => 50,
      1 => 3,
      2 => 'Huyện Nguyên Bình',
    ),
    50 => 
    array (
      0 => 51,
      1 => 3,
      2 => 'Huyện Thạch An',
    ),
    51 => 
    array (
      0 => 52,
      1 => 4,
      2 => 'Thành Phố Bắc Kạn',
    ),
    52 => 
    array (
      0 => 53,
      1 => 4,
      2 => 'Huyện Pác Nặm',
    ),
    53 => 
    array (
      0 => 54,
      1 => 4,
      2 => 'Huyện Ba Bể',
    ),
    54 => 
    array (
      0 => 55,
      1 => 4,
      2 => 'Huyện Ngân Sơn',
    ),
    55 => 
    array (
      0 => 56,
      1 => 4,
      2 => 'Huyện Bạch Thông',
    ),
    56 => 
    array (
      0 => 57,
      1 => 4,
      2 => 'Huyện Chợ Đồn',
    ),
    57 => 
    array (
      0 => 58,
      1 => 4,
      2 => 'Huyện Chợ Mới',
    ),
    58 => 
    array (
      0 => 59,
      1 => 4,
      2 => 'Huyện Na Rì',
    ),
    59 => 
    array (
      0 => 60,
      1 => 5,
      2 => 'Thành phố Tuyên Quang',
    ),
    60 => 
    array (
      0 => 61,
      1 => 5,
      2 => 'Huyện Lâm Bình',
    ),
    61 => 
    array (
      0 => 62,
      1 => 5,
      2 => 'Huyện Na Hang',
    ),
    62 => 
    array (
      0 => 63,
      1 => 5,
      2 => 'Huyện Chiêm Hóa',
    ),
    63 => 
    array (
      0 => 64,
      1 => 5,
      2 => 'Huyện Hàm Yên',
    ),
    64 => 
    array (
      0 => 65,
      1 => 5,
      2 => 'Huyện Yên Sơn',
    ),
    65 => 
    array (
      0 => 66,
      1 => 5,
      2 => 'Huyện Sơn Dương',
    ),
    66 => 
    array (
      0 => 67,
      1 => 6,
      2 => 'Thành phố Lào Cai',
    ),
    67 => 
    array (
      0 => 68,
      1 => 6,
      2 => 'Huyện Bát Xát',
    ),
    68 => 
    array (
      0 => 69,
      1 => 6,
      2 => 'Huyện Mường Khương',
    ),
    69 => 
    array (
      0 => 70,
      1 => 6,
      2 => 'Huyện Si Ma Cai',
    ),
    70 => 
    array (
      0 => 71,
      1 => 6,
      2 => 'Huyện Bắc Hà',
    ),
    71 => 
    array (
      0 => 72,
      1 => 6,
      2 => 'Huyện Bảo Thắng',
    ),
    72 => 
    array (
      0 => 73,
      1 => 6,
      2 => 'Huyện Bảo Yên',
    ),
    73 => 
    array (
      0 => 74,
      1 => 6,
      2 => 'Thị xã Sa Pa',
    ),
    74 => 
    array (
      0 => 75,
      1 => 6,
      2 => 'Huyện Văn Bàn',
    ),
    75 => 
    array (
      0 => 76,
      1 => 7,
      2 => 'Thành phố Điện Biên Phủ',
    ),
    76 => 
    array (
      0 => 77,
      1 => 7,
      2 => 'Thị Xã Mường Lay',
    ),
    77 => 
    array (
      0 => 78,
      1 => 7,
      2 => 'Huyện Mường Nhé',
    ),
    78 => 
    array (
      0 => 79,
      1 => 7,
      2 => 'Huyện Mường Chà',
    ),
    79 => 
    array (
      0 => 80,
      1 => 7,
      2 => 'Huyện Tủa Chùa',
    ),
    80 => 
    array (
      0 => 81,
      1 => 7,
      2 => 'Huyện Tuần Giáo',
    ),
    81 => 
    array (
      0 => 82,
      1 => 7,
      2 => 'Huyện Điện Biên',
    ),
    82 => 
    array (
      0 => 83,
      1 => 7,
      2 => 'Huyện Điện Biên Đông',
    ),
    83 => 
    array (
      0 => 84,
      1 => 7,
      2 => 'Huyện Mường Ảng',
    ),
    84 => 
    array (
      0 => 85,
      1 => 7,
      2 => 'Huyện Nậm Pồ',
    ),
    85 => 
    array (
      0 => 86,
      1 => 8,
      2 => 'Thành phố Lai Châu',
    ),
    86 => 
    array (
      0 => 87,
      1 => 8,
      2 => 'Huyện Tam Đường',
    ),
    87 => 
    array (
      0 => 88,
      1 => 8,
      2 => 'Huyện Mường Tè',
    ),
    88 => 
    array (
      0 => 89,
      1 => 8,
      2 => 'Huyện Sìn Hồ',
    ),
    89 => 
    array (
      0 => 90,
      1 => 8,
      2 => 'Huyện Phong Thổ',
    ),
    90 => 
    array (
      0 => 91,
      1 => 8,
      2 => 'Huyện Than Uyên',
    ),
    91 => 
    array (
      0 => 92,
      1 => 8,
      2 => 'Huyện Tân Uyên',
    ),
    92 => 
    array (
      0 => 93,
      1 => 8,
      2 => 'Huyện Nậm Nhùn',
    ),
    93 => 
    array (
      0 => 94,
      1 => 9,
      2 => 'Thành phố Sơn La',
    ),
    94 => 
    array (
      0 => 95,
      1 => 9,
      2 => 'Huyện Quỳnh Nhai',
    ),
    95 => 
    array (
      0 => 96,
      1 => 9,
      2 => 'Huyện Thuận Châu',
    ),
    96 => 
    array (
      0 => 97,
      1 => 9,
      2 => 'Huyện Mường La',
    ),
    97 => 
    array (
      0 => 98,
      1 => 9,
      2 => 'Huyện Bắc Yên',
    ),
    98 => 
    array (
      0 => 99,
      1 => 9,
      2 => 'Huyện Phù Yên',
    ),
    99 => 
    array (
      0 => 100,
      1 => 9,
      2 => 'Huyện Mộc Châu',
    ),
    100 => 
    array (
      0 => 101,
      1 => 9,
      2 => 'Huyện Yên Châu',
    ),
    101 => 
    array (
      0 => 102,
      1 => 9,
      2 => 'Huyện Mai Sơn',
    ),
    102 => 
    array (
      0 => 103,
      1 => 9,
      2 => 'Huyện Sông Mã',
    ),
    103 => 
    array (
      0 => 104,
      1 => 9,
      2 => 'Huyện Sốp Cộp',
    ),
    104 => 
    array (
      0 => 105,
      1 => 9,
      2 => 'Huyện Vân Hồ',
    ),
    105 => 
    array (
      0 => 106,
      1 => 10,
      2 => 'Thành phố Yên Bái',
    ),
    106 => 
    array (
      0 => 107,
      1 => 10,
      2 => 'Thị xã Nghĩa Lộ',
    ),
    107 => 
    array (
      0 => 108,
      1 => 10,
      2 => 'Huyện Lục Yên',
    ),
    108 => 
    array (
      0 => 109,
      1 => 10,
      2 => 'Huyện Văn Yên',
    ),
    109 => 
    array (
      0 => 110,
      1 => 10,
      2 => 'Huyện Mù Căng Chải',
    ),
    110 => 
    array (
      0 => 111,
      1 => 10,
      2 => 'Huyện Trấn Yên',
    ),
    111 => 
    array (
      0 => 112,
      1 => 10,
      2 => 'Huyện Trạm Tấu',
    ),
    112 => 
    array (
      0 => 113,
      1 => 10,
      2 => 'Huyện Văn Chấn',
    ),
    113 => 
    array (
      0 => 114,
      1 => 10,
      2 => 'Huyện Yên Bình',
    ),
    114 => 
    array (
      0 => 115,
      1 => 11,
      2 => 'Thành phố Hòa Bình',
    ),
    115 => 
    array (
      0 => 116,
      1 => 11,
      2 => 'Huyện Đà Bắc',
    ),
    116 => 
    array (
      0 => 117,
      1 => 11,
      2 => 'Huyện Lương Sơn',
    ),
    117 => 
    array (
      0 => 118,
      1 => 11,
      2 => 'Huyện Kim Bôi',
    ),
    118 => 
    array (
      0 => 119,
      1 => 11,
      2 => 'Huyện Cao Phong',
    ),
    119 => 
    array (
      0 => 120,
      1 => 11,
      2 => 'Huyện Tân Lạc',
    ),
    120 => 
    array (
      0 => 121,
      1 => 11,
      2 => 'Huyện Mai Châu',
    ),
    121 => 
    array (
      0 => 122,
      1 => 11,
      2 => 'Huyện Lạc Sơn',
    ),
    122 => 
    array (
      0 => 123,
      1 => 11,
      2 => 'Huyện Yên Thủy',
    ),
    123 => 
    array (
      0 => 124,
      1 => 11,
      2 => 'Huyện Lạc Thủy',
    ),
    124 => 
    array (
      0 => 125,
      1 => 12,
      2 => 'Thành phố Thái Nguyên',
    ),
    125 => 
    array (
      0 => 126,
      1 => 12,
      2 => 'Thành phố Sông Công',
    ),
    126 => 
    array (
      0 => 127,
      1 => 12,
      2 => 'Huyện Định Hóa',
    ),
    127 => 
    array (
      0 => 128,
      1 => 12,
      2 => 'Huyện Phú Lương',
    ),
    128 => 
    array (
      0 => 129,
      1 => 12,
      2 => 'Huyện Đồng Hỷ',
    ),
    129 => 
    array (
      0 => 130,
      1 => 12,
      2 => 'Huyện Võ Nhai',
    ),
    130 => 
    array (
      0 => 131,
      1 => 12,
      2 => 'Huyện Đại Từ',
    ),
    131 => 
    array (
      0 => 132,
      1 => 12,
      2 => 'Thị xã Phổ Yên',
    ),
    132 => 
    array (
      0 => 133,
      1 => 12,
      2 => 'Huyện Phú Bình',
    ),
    133 => 
    array (
      0 => 134,
      1 => 13,
      2 => 'Thành phố Lạng Sơn',
    ),
    134 => 
    array (
      0 => 135,
      1 => 13,
      2 => 'Huyện Tràng Định',
    ),
    135 => 
    array (
      0 => 136,
      1 => 13,
      2 => 'Huyện Bình Gia',
    ),
    136 => 
    array (
      0 => 137,
      1 => 13,
      2 => 'Huyện Văn Lãng',
    ),
    137 => 
    array (
      0 => 138,
      1 => 13,
      2 => 'Huyện Cao Lộc',
    ),
    138 => 
    array (
      0 => 139,
      1 => 13,
      2 => 'Huyện Văn Quan',
    ),
    139 => 
    array (
      0 => 140,
      1 => 13,
      2 => 'Huyện Bắc Sơn',
    ),
    140 => 
    array (
      0 => 141,
      1 => 13,
      2 => 'Huyện Hữu Lũng',
    ),
    141 => 
    array (
      0 => 142,
      1 => 13,
      2 => 'Huyện Chi Lăng',
    ),
    142 => 
    array (
      0 => 143,
      1 => 13,
      2 => 'Huyện Lộc Bình',
    ),
    143 => 
    array (
      0 => 144,
      1 => 13,
      2 => 'Huyện Đình Lập',
    ),
    144 => 
    array (
      0 => 145,
      1 => 14,
      2 => 'Thành phố Hạ Long',
    ),
    145 => 
    array (
      0 => 146,
      1 => 14,
      2 => 'Thành phố Móng Cái',
    ),
    146 => 
    array (
      0 => 147,
      1 => 14,
      2 => 'Thành phố Cẩm Phả',
    ),
    147 => 
    array (
      0 => 148,
      1 => 14,
      2 => 'Thành phố Uông Bí',
    ),
    148 => 
    array (
      0 => 149,
      1 => 14,
      2 => 'Huyện Bình Liêu',
    ),
    149 => 
    array (
      0 => 150,
      1 => 14,
      2 => 'Huyện Tiên Yên',
    ),
    150 => 
    array (
      0 => 151,
      1 => 14,
      2 => 'Huyện Đầm Hà',
    ),
    151 => 
    array (
      0 => 152,
      1 => 14,
      2 => 'Huyện Hải Hà',
    ),
    152 => 
    array (
      0 => 153,
      1 => 14,
      2 => 'Huyện Ba Chẽ',
    ),
    153 => 
    array (
      0 => 154,
      1 => 14,
      2 => 'Huyện Vân Đồn',
    ),
    154 => 
    array (
      0 => 155,
      1 => 14,
      2 => 'Thị xã Đông Triều',
    ),
    155 => 
    array (
      0 => 156,
      1 => 14,
      2 => 'Thị xã Quảng Yên',
    ),
    156 => 
    array (
      0 => 157,
      1 => 14,
      2 => 'Huyện Cô Tô',
    ),
    157 => 
    array (
      0 => 158,
      1 => 15,
      2 => 'Thành phố Bắc Giang',
    ),
    158 => 
    array (
      0 => 159,
      1 => 15,
      2 => 'Huyện Yên Thế',
    ),
    159 => 
    array (
      0 => 160,
      1 => 15,
      2 => 'Huyện Tân Yên',
    ),
    160 => 
    array (
      0 => 161,
      1 => 15,
      2 => 'Huyện Lạng Giang',
    ),
    161 => 
    array (
      0 => 162,
      1 => 15,
      2 => 'Huyện Lục Nam',
    ),
    162 => 
    array (
      0 => 163,
      1 => 15,
      2 => 'Huyện Lục Ngạn',
    ),
    163 => 
    array (
      0 => 164,
      1 => 15,
      2 => 'Huyện Sơn Động',
    ),
    164 => 
    array (
      0 => 165,
      1 => 15,
      2 => 'Huyện Yên Dũng',
    ),
    165 => 
    array (
      0 => 166,
      1 => 15,
      2 => 'Huyện Việt Yên',
    ),
    166 => 
    array (
      0 => 167,
      1 => 15,
      2 => 'Huyện Hiệp Hòa',
    ),
    167 => 
    array (
      0 => 168,
      1 => 16,
      2 => 'Thành phố Việt Trì',
    ),
    168 => 
    array (
      0 => 169,
      1 => 16,
      2 => 'Thị xã Phú Thọ',
    ),
    169 => 
    array (
      0 => 170,
      1 => 16,
      2 => 'Huyện Đoan Hùng',
    ),
    170 => 
    array (
      0 => 171,
      1 => 16,
      2 => 'Huyện Hạ Hoà',
    ),
    171 => 
    array (
      0 => 172,
      1 => 16,
      2 => 'Huyện Thanh Ba',
    ),
    172 => 
    array (
      0 => 173,
      1 => 16,
      2 => 'Huyện Phù Ninh',
    ),
    173 => 
    array (
      0 => 174,
      1 => 16,
      2 => 'Huyện Yên Lập',
    ),
    174 => 
    array (
      0 => 175,
      1 => 16,
      2 => 'Huyện Cẩm Khê',
    ),
    175 => 
    array (
      0 => 176,
      1 => 16,
      2 => 'Huyện Tam Nông',
    ),
    176 => 
    array (
      0 => 177,
      1 => 16,
      2 => 'Huyện Lâm Thao',
    ),
    177 => 
    array (
      0 => 178,
      1 => 16,
      2 => 'Huyện Thanh Sơn',
    ),
    178 => 
    array (
      0 => 179,
      1 => 16,
      2 => 'Huyện Thanh Thuỷ',
    ),
    179 => 
    array (
      0 => 180,
      1 => 16,
      2 => 'Huyện Tân Sơn',
    ),
    180 => 
    array (
      0 => 181,
      1 => 17,
      2 => 'Thành phố Vĩnh Yên',
    ),
    181 => 
    array (
      0 => 182,
      1 => 17,
      2 => 'Thành phố Phúc Yên',
    ),
    182 => 
    array (
      0 => 183,
      1 => 17,
      2 => 'Huyện Lập Thạch',
    ),
    183 => 
    array (
      0 => 184,
      1 => 17,
      2 => 'Huyện Tam Dương',
    ),
    184 => 
    array (
      0 => 185,
      1 => 17,
      2 => 'Huyện Tam Đảo',
    ),
    185 => 
    array (
      0 => 186,
      1 => 17,
      2 => 'Huyện Bình Xuyên',
    ),
    186 => 
    array (
      0 => 187,
      1 => 17,
      2 => 'Huyện Yên Lạc',
    ),
    187 => 
    array (
      0 => 188,
      1 => 17,
      2 => 'Huyện Vĩnh Tường',
    ),
    188 => 
    array (
      0 => 189,
      1 => 17,
      2 => 'Huyện Sông Lô',
    ),
    189 => 
    array (
      0 => 190,
      1 => 18,
      2 => 'Thành phố Bắc Ninh',
    ),
    190 => 
    array (
      0 => 191,
      1 => 18,
      2 => 'Huyện Yên Phong',
    ),
    191 => 
    array (
      0 => 192,
      1 => 18,
      2 => 'Huyện Quế Võ',
    ),
    192 => 
    array (
      0 => 193,
      1 => 18,
      2 => 'Huyện Tiên Du',
    ),
    193 => 
    array (
      0 => 194,
      1 => 18,
      2 => 'Thành phố Từ Sơn',
    ),
    194 => 
    array (
      0 => 195,
      1 => 18,
      2 => 'Huyện Thuận Thành',
    ),
    195 => 
    array (
      0 => 196,
      1 => 18,
      2 => 'Huyện Gia Bình',
    ),
    196 => 
    array (
      0 => 197,
      1 => 18,
      2 => 'Huyện Lương Tài',
    ),
    197 => 
    array (
      0 => 198,
      1 => 19,
      2 => 'Thành phố Hải Dương',
    ),
    198 => 
    array (
      0 => 199,
      1 => 19,
      2 => 'Thành phố Chí Linh',
    ),
    199 => 
    array (
      0 => 200,
      1 => 19,
      2 => 'Huyện Nam Sách',
    ),
    200 => 
    array (
      0 => 201,
      1 => 19,
      2 => 'Thị xã Kinh Môn',
    ),
    201 => 
    array (
      0 => 202,
      1 => 19,
      2 => 'Huyện Kim Thành',
    ),
    202 => 
    array (
      0 => 203,
      1 => 19,
      2 => 'Huyện Thanh Hà',
    ),
    203 => 
    array (
      0 => 204,
      1 => 19,
      2 => 'Huyện Cẩm Giàng',
    ),
    204 => 
    array (
      0 => 205,
      1 => 19,
      2 => 'Huyện Bình Giang',
    ),
    205 => 
    array (
      0 => 206,
      1 => 19,
      2 => 'Huyện Gia Lộc',
    ),
    206 => 
    array (
      0 => 207,
      1 => 19,
      2 => 'Huyện Tứ Kỳ',
    ),
    207 => 
    array (
      0 => 208,
      1 => 19,
      2 => 'Huyện Ninh Giang',
    ),
    208 => 
    array (
      0 => 209,
      1 => 19,
      2 => 'Huyện Thanh Miện',
    ),
    209 => 
    array (
      0 => 210,
      1 => 20,
      2 => 'Quận Hồng Bàng',
    ),
    210 => 
    array (
      0 => 211,
      1 => 20,
      2 => 'Quận Ngô Quyền',
    ),
    211 => 
    array (
      0 => 212,
      1 => 20,
      2 => 'Quận Lê Chân',
    ),
    212 => 
    array (
      0 => 213,
      1 => 20,
      2 => 'Quận Hải An',
    ),
    213 => 
    array (
      0 => 214,
      1 => 20,
      2 => 'Quận Kiến An',
    ),
    214 => 
    array (
      0 => 215,
      1 => 20,
      2 => 'Quận Đồ Sơn',
    ),
    215 => 
    array (
      0 => 216,
      1 => 20,
      2 => 'Quận Dương Kinh',
    ),
    216 => 
    array (
      0 => 217,
      1 => 20,
      2 => 'Huyện Thuỷ Nguyên',
    ),
    217 => 
    array (
      0 => 218,
      1 => 20,
      2 => 'Huyện An Dương',
    ),
    218 => 
    array (
      0 => 219,
      1 => 20,
      2 => 'Huyện An Lão',
    ),
    219 => 
    array (
      0 => 220,
      1 => 20,
      2 => 'Huyện Kiến Thuỵ',
    ),
    220 => 
    array (
      0 => 221,
      1 => 20,
      2 => 'Huyện Tiên Lãng',
    ),
    221 => 
    array (
      0 => 222,
      1 => 20,
      2 => 'Huyện Vĩnh Bảo',
    ),
    222 => 
    array (
      0 => 223,
      1 => 20,
      2 => 'Huyện Cát Hải',
    ),
    223 => 
    array (
      0 => 224,
      1 => 20,
      2 => 'Huyện Bạch Long Vĩ',
    ),
    224 => 
    array (
      0 => 225,
      1 => 21,
      2 => 'Thành phố Hưng Yên',
    ),
    225 => 
    array (
      0 => 226,
      1 => 21,
      2 => 'Huyện Văn Lâm',
    ),
    226 => 
    array (
      0 => 227,
      1 => 21,
      2 => 'Huyện Văn Giang',
    ),
    227 => 
    array (
      0 => 228,
      1 => 21,
      2 => 'Huyện Yên Mỹ',
    ),
    228 => 
    array (
      0 => 229,
      1 => 21,
      2 => 'Thị xã Mỹ Hào',
    ),
    229 => 
    array (
      0 => 230,
      1 => 21,
      2 => 'Huyện Ân Thi',
    ),
    230 => 
    array (
      0 => 231,
      1 => 21,
      2 => 'Huyện Khoái Châu',
    ),
    231 => 
    array (
      0 => 232,
      1 => 21,
      2 => 'Huyện Kim Động',
    ),
    232 => 
    array (
      0 => 233,
      1 => 21,
      2 => 'Huyện Tiên Lữ',
    ),
    233 => 
    array (
      0 => 234,
      1 => 21,
      2 => 'Huyện Phù Cừ',
    ),
    234 => 
    array (
      0 => 235,
      1 => 22,
      2 => 'Thành phố Thái Bình',
    ),
    235 => 
    array (
      0 => 236,
      1 => 22,
      2 => 'Huyện Quỳnh Phụ',
    ),
    236 => 
    array (
      0 => 237,
      1 => 22,
      2 => 'Huyện Hưng Hà',
    ),
    237 => 
    array (
      0 => 238,
      1 => 22,
      2 => 'Huyện Đông Hưng',
    ),
    238 => 
    array (
      0 => 239,
      1 => 22,
      2 => 'Huyện Thái Thụy',
    ),
    239 => 
    array (
      0 => 240,
      1 => 22,
      2 => 'Huyện Tiền Hải',
    ),
    240 => 
    array (
      0 => 241,
      1 => 22,
      2 => 'Huyện Kiến Xương',
    ),
    241 => 
    array (
      0 => 242,
      1 => 22,
      2 => 'Huyện Vũ Thư',
    ),
    242 => 
    array (
      0 => 243,
      1 => 23,
      2 => 'Thành phố Phủ Lý',
    ),
    243 => 
    array (
      0 => 244,
      1 => 23,
      2 => 'Thị xã Duy Tiên',
    ),
    244 => 
    array (
      0 => 245,
      1 => 23,
      2 => 'Huyện Kim Bảng',
    ),
    245 => 
    array (
      0 => 246,
      1 => 23,
      2 => 'Huyện Thanh Liêm',
    ),
    246 => 
    array (
      0 => 247,
      1 => 23,
      2 => 'Huyện Bình Lục',
    ),
    247 => 
    array (
      0 => 248,
      1 => 23,
      2 => 'Huyện Lý Nhân',
    ),
    248 => 
    array (
      0 => 249,
      1 => 24,
      2 => 'Thành phố Nam Định',
    ),
    249 => 
    array (
      0 => 250,
      1 => 24,
      2 => 'Huyện Mỹ Lộc',
    ),
    250 => 
    array (
      0 => 251,
      1 => 24,
      2 => 'Huyện Vụ Bản',
    ),
    251 => 
    array (
      0 => 252,
      1 => 24,
      2 => 'Huyện Ý Yên',
    ),
    252 => 
    array (
      0 => 253,
      1 => 24,
      2 => 'Huyện Nghĩa Hưng',
    ),
    253 => 
    array (
      0 => 254,
      1 => 24,
      2 => 'Huyện Nam Trực',
    ),
    254 => 
    array (
      0 => 255,
      1 => 24,
      2 => 'Huyện Trực Ninh',
    ),
    255 => 
    array (
      0 => 256,
      1 => 24,
      2 => 'Huyện Xuân Trường',
    ),
    256 => 
    array (
      0 => 257,
      1 => 24,
      2 => 'Huyện Giao Thủy',
    ),
    257 => 
    array (
      0 => 258,
      1 => 24,
      2 => 'Huyện Hải Hậu',
    ),
    258 => 
    array (
      0 => 259,
      1 => 25,
      2 => 'Thành phố Ninh Bình',
    ),
    259 => 
    array (
      0 => 260,
      1 => 25,
      2 => 'Thành phố Tam Điệp',
    ),
    260 => 
    array (
      0 => 261,
      1 => 25,
      2 => 'Huyện Nho Quan',
    ),
    261 => 
    array (
      0 => 262,
      1 => 25,
      2 => 'Huyện Gia Viễn',
    ),
    262 => 
    array (
      0 => 263,
      1 => 25,
      2 => 'Huyện Hoa Lư',
    ),
    263 => 
    array (
      0 => 264,
      1 => 25,
      2 => 'Huyện Yên Khánh',
    ),
    264 => 
    array (
      0 => 265,
      1 => 25,
      2 => 'Huyện Kim Sơn',
    ),
    265 => 
    array (
      0 => 266,
      1 => 25,
      2 => 'Huyện Yên Mô',
    ),
    266 => 
    array (
      0 => 267,
      1 => 26,
      2 => 'Thành phố Thanh Hóa',
    ),
    267 => 
    array (
      0 => 268,
      1 => 26,
      2 => 'Thị xã Bỉm Sơn',
    ),
    268 => 
    array (
      0 => 269,
      1 => 26,
      2 => 'Thành phố Sầm Sơn',
    ),
    269 => 
    array (
      0 => 270,
      1 => 26,
      2 => 'Huyện Mường Lát',
    ),
    270 => 
    array (
      0 => 271,
      1 => 26,
      2 => 'Huyện Quan Hóa',
    ),
    271 => 
    array (
      0 => 272,
      1 => 26,
      2 => 'Huyện Bá Thước',
    ),
    272 => 
    array (
      0 => 273,
      1 => 26,
      2 => 'Huyện Quan Sơn',
    ),
    273 => 
    array (
      0 => 274,
      1 => 26,
      2 => 'Huyện Lang Chánh',
    ),
    274 => 
    array (
      0 => 275,
      1 => 26,
      2 => 'Huyện Ngọc Lặc',
    ),
    275 => 
    array (
      0 => 276,
      1 => 26,
      2 => 'Huyện Cẩm Thủy',
    ),
    276 => 
    array (
      0 => 277,
      1 => 26,
      2 => 'Huyện Thạch Thành',
    ),
    277 => 
    array (
      0 => 278,
      1 => 26,
      2 => 'Huyện Hà Trung',
    ),
    278 => 
    array (
      0 => 279,
      1 => 26,
      2 => 'Huyện Vĩnh Lộc',
    ),
    279 => 
    array (
      0 => 280,
      1 => 26,
      2 => 'Huyện Yên Định',
    ),
    280 => 
    array (
      0 => 281,
      1 => 26,
      2 => 'Huyện Thọ Xuân',
    ),
    281 => 
    array (
      0 => 282,
      1 => 26,
      2 => 'Huyện Thường Xuân',
    ),
    282 => 
    array (
      0 => 283,
      1 => 26,
      2 => 'Huyện Triệu Sơn',
    ),
    283 => 
    array (
      0 => 284,
      1 => 26,
      2 => 'Huyện Thiệu Hóa',
    ),
    284 => 
    array (
      0 => 285,
      1 => 26,
      2 => 'Huyện Hoằng Hóa',
    ),
    285 => 
    array (
      0 => 286,
      1 => 26,
      2 => 'Huyện Hậu Lộc',
    ),
    286 => 
    array (
      0 => 287,
      1 => 26,
      2 => 'Huyện Nga Sơn',
    ),
    287 => 
    array (
      0 => 288,
      1 => 26,
      2 => 'Huyện Như Xuân',
    ),
    288 => 
    array (
      0 => 289,
      1 => 26,
      2 => 'Huyện Như Thanh',
    ),
    289 => 
    array (
      0 => 290,
      1 => 26,
      2 => 'Huyện Nông Cống',
    ),
    290 => 
    array (
      0 => 291,
      1 => 26,
      2 => 'Huyện Đông Sơn',
    ),
    291 => 
    array (
      0 => 292,
      1 => 26,
      2 => 'Huyện Quảng Xương',
    ),
    292 => 
    array (
      0 => 293,
      1 => 26,
      2 => 'Thị xã Nghi Sơn',
    ),
    293 => 
    array (
      0 => 294,
      1 => 27,
      2 => 'Thành phố Vinh',
    ),
    294 => 
    array (
      0 => 295,
      1 => 27,
      2 => 'Thị xã Cửa Lò',
    ),
    295 => 
    array (
      0 => 296,
      1 => 27,
      2 => 'Thị xã Thái Hoà',
    ),
    296 => 
    array (
      0 => 297,
      1 => 27,
      2 => 'Huyện Quế Phong',
    ),
    297 => 
    array (
      0 => 298,
      1 => 27,
      2 => 'Huyện Quỳ Châu',
    ),
    298 => 
    array (
      0 => 299,
      1 => 27,
      2 => 'Huyện Kỳ Sơn',
    ),
    299 => 
    array (
      0 => 300,
      1 => 27,
      2 => 'Huyện Tương Dương',
    ),
    300 => 
    array (
      0 => 301,
      1 => 27,
      2 => 'Huyện Nghĩa Đàn',
    ),
    301 => 
    array (
      0 => 302,
      1 => 27,
      2 => 'Huyện Quỳ Hợp',
    ),
    302 => 
    array (
      0 => 303,
      1 => 27,
      2 => 'Huyện Quỳnh Lưu',
    ),
    303 => 
    array (
      0 => 304,
      1 => 27,
      2 => 'Huyện Con Cuông',
    ),
    304 => 
    array (
      0 => 305,
      1 => 27,
      2 => 'Huyện Tân Kỳ',
    ),
    305 => 
    array (
      0 => 306,
      1 => 27,
      2 => 'Huyện Anh Sơn',
    ),
    306 => 
    array (
      0 => 307,
      1 => 27,
      2 => 'Huyện Diễn Châu',
    ),
    307 => 
    array (
      0 => 308,
      1 => 27,
      2 => 'Huyện Yên Thành',
    ),
    308 => 
    array (
      0 => 309,
      1 => 27,
      2 => 'Huyện Đô Lương',
    ),
    309 => 
    array (
      0 => 310,
      1 => 27,
      2 => 'Huyện Thanh Chương',
    ),
    310 => 
    array (
      0 => 311,
      1 => 27,
      2 => 'Huyện Nghi Lộc',
    ),
    311 => 
    array (
      0 => 312,
      1 => 27,
      2 => 'Huyện Nam Đàn',
    ),
    312 => 
    array (
      0 => 313,
      1 => 27,
      2 => 'Huyện Hưng Nguyên',
    ),
    313 => 
    array (
      0 => 314,
      1 => 27,
      2 => 'Thị xã Hoàng Mai',
    ),
    314 => 
    array (
      0 => 315,
      1 => 28,
      2 => 'Thành phố Hà Tĩnh',
    ),
    315 => 
    array (
      0 => 316,
      1 => 28,
      2 => 'Thị xã Hồng Lĩnh',
    ),
    316 => 
    array (
      0 => 317,
      1 => 28,
      2 => 'Huyện Hương Sơn',
    ),
    317 => 
    array (
      0 => 318,
      1 => 28,
      2 => 'Huyện Đức Thọ',
    ),
    318 => 
    array (
      0 => 319,
      1 => 28,
      2 => 'Huyện Vũ Quang',
    ),
    319 => 
    array (
      0 => 320,
      1 => 28,
      2 => 'Huyện Nghi Xuân',
    ),
    320 => 
    array (
      0 => 321,
      1 => 28,
      2 => 'Huyện Can Lộc',
    ),
    321 => 
    array (
      0 => 322,
      1 => 28,
      2 => 'Huyện Hương Khê',
    ),
    322 => 
    array (
      0 => 323,
      1 => 28,
      2 => 'Huyện Thạch Hà',
    ),
    323 => 
    array (
      0 => 324,
      1 => 28,
      2 => 'Huyện Cẩm Xuyên',
    ),
    324 => 
    array (
      0 => 325,
      1 => 28,
      2 => 'Huyện Kỳ Anh',
    ),
    325 => 
    array (
      0 => 326,
      1 => 28,
      2 => 'Huyện Lộc Hà',
    ),
    326 => 
    array (
      0 => 327,
      1 => 28,
      2 => 'Thị xã Kỳ Anh',
    ),
    327 => 
    array (
      0 => 328,
      1 => 29,
      2 => 'Thành Phố Đồng Hới',
    ),
    328 => 
    array (
      0 => 329,
      1 => 29,
      2 => 'Huyện Minh Hóa',
    ),
    329 => 
    array (
      0 => 330,
      1 => 29,
      2 => 'Huyện Tuyên Hóa',
    ),
    330 => 
    array (
      0 => 331,
      1 => 29,
      2 => 'Huyện Quảng Trạch',
    ),
    331 => 
    array (
      0 => 332,
      1 => 29,
      2 => 'Huyện Bố Trạch',
    ),
    332 => 
    array (
      0 => 333,
      1 => 29,
      2 => 'Huyện Quảng Ninh',
    ),
    333 => 
    array (
      0 => 334,
      1 => 29,
      2 => 'Huyện Lệ Thủy',
    ),
    334 => 
    array (
      0 => 335,
      1 => 29,
      2 => 'Thị xã Ba Đồn',
    ),
    335 => 
    array (
      0 => 336,
      1 => 30,
      2 => 'Thành phố Đông Hà',
    ),
    336 => 
    array (
      0 => 337,
      1 => 30,
      2 => 'Thị xã Quảng Trị',
    ),
    337 => 
    array (
      0 => 338,
      1 => 30,
      2 => 'Huyện Vĩnh Linh',
    ),
    338 => 
    array (
      0 => 339,
      1 => 30,
      2 => 'Huyện Hướng Hóa',
    ),
    339 => 
    array (
      0 => 340,
      1 => 30,
      2 => 'Huyện Gio Linh',
    ),
    340 => 
    array (
      0 => 341,
      1 => 30,
      2 => 'Huyện Đa Krông',
    ),
    341 => 
    array (
      0 => 342,
      1 => 30,
      2 => 'Huyện Cam Lộ',
    ),
    342 => 
    array (
      0 => 343,
      1 => 30,
      2 => 'Huyện Triệu Phong',
    ),
    343 => 
    array (
      0 => 344,
      1 => 30,
      2 => 'Huyện Hải Lăng',
    ),
    344 => 
    array (
      0 => 345,
      1 => 30,
      2 => 'Huyện Cồn Cỏ',
    ),
    345 => 
    array (
      0 => 346,
      1 => 31,
      2 => 'Thành phố Huế',
    ),
    346 => 
    array (
      0 => 347,
      1 => 31,
      2 => 'Huyện Phong Điền',
    ),
    347 => 
    array (
      0 => 348,
      1 => 31,
      2 => 'Huyện Quảng Điền',
    ),
    348 => 
    array (
      0 => 349,
      1 => 31,
      2 => 'Huyện Phú Vang',
    ),
    349 => 
    array (
      0 => 350,
      1 => 31,
      2 => 'Thị xã Hương Thủy',
    ),
    350 => 
    array (
      0 => 351,
      1 => 31,
      2 => 'Thị xã Hương Trà',
    ),
    351 => 
    array (
      0 => 352,
      1 => 31,
      2 => 'Huyện A Lưới',
    ),
    352 => 
    array (
      0 => 353,
      1 => 31,
      2 => 'Huyện Phú Lộc',
    ),
    353 => 
    array (
      0 => 354,
      1 => 31,
      2 => 'Huyện Nam Đông',
    ),
    354 => 
    array (
      0 => 355,
      1 => 32,
      2 => 'Quận Liên Chiểu',
    ),
    355 => 
    array (
      0 => 356,
      1 => 32,
      2 => 'Quận Thanh Khê',
    ),
    356 => 
    array (
      0 => 357,
      1 => 32,
      2 => 'Quận Hải Châu',
    ),
    357 => 
    array (
      0 => 358,
      1 => 32,
      2 => 'Quận Sơn Trà',
    ),
    358 => 
    array (
      0 => 359,
      1 => 32,
      2 => 'Quận Ngũ Hành Sơn',
    ),
    359 => 
    array (
      0 => 360,
      1 => 32,
      2 => 'Quận Cẩm Lệ',
    ),
    360 => 
    array (
      0 => 361,
      1 => 32,
      2 => 'Huyện Hòa Vang',
    ),
    361 => 
    array (
      0 => 362,
      1 => 32,
      2 => 'Huyện Hoàng Sa',
    ),
    362 => 
    array (
      0 => 363,
      1 => 33,
      2 => 'Thành phố Tam Kỳ',
    ),
    363 => 
    array (
      0 => 364,
      1 => 33,
      2 => 'Thành phố Hội An',
    ),
    364 => 
    array (
      0 => 365,
      1 => 33,
      2 => 'Huyện Tây Giang',
    ),
    365 => 
    array (
      0 => 366,
      1 => 33,
      2 => 'Huyện Đông Giang',
    ),
    366 => 
    array (
      0 => 367,
      1 => 33,
      2 => 'Huyện Đại Lộc',
    ),
    367 => 
    array (
      0 => 368,
      1 => 33,
      2 => 'Thị xã Điện Bàn',
    ),
    368 => 
    array (
      0 => 369,
      1 => 33,
      2 => 'Huyện Duy Xuyên',
    ),
    369 => 
    array (
      0 => 370,
      1 => 33,
      2 => 'Huyện Quế Sơn',
    ),
    370 => 
    array (
      0 => 371,
      1 => 33,
      2 => 'Huyện Nam Giang',
    ),
    371 => 
    array (
      0 => 372,
      1 => 33,
      2 => 'Huyện Phước Sơn',
    ),
    372 => 
    array (
      0 => 373,
      1 => 33,
      2 => 'Huyện Hiệp Đức',
    ),
    373 => 
    array (
      0 => 374,
      1 => 33,
      2 => 'Huyện Thăng Bình',
    ),
    374 => 
    array (
      0 => 375,
      1 => 33,
      2 => 'Huyện Tiên Phước',
    ),
    375 => 
    array (
      0 => 376,
      1 => 33,
      2 => 'Huyện Bắc Trà My',
    ),
    376 => 
    array (
      0 => 377,
      1 => 33,
      2 => 'Huyện Nam Trà My',
    ),
    377 => 
    array (
      0 => 378,
      1 => 33,
      2 => 'Huyện Núi Thành',
    ),
    378 => 
    array (
      0 => 379,
      1 => 33,
      2 => 'Huyện Phú Ninh',
    ),
    379 => 
    array (
      0 => 380,
      1 => 33,
      2 => 'Huyện Nông Sơn',
    ),
    380 => 
    array (
      0 => 381,
      1 => 34,
      2 => 'Thành phố Quảng Ngãi',
    ),
    381 => 
    array (
      0 => 382,
      1 => 34,
      2 => 'Huyện Bình Sơn',
    ),
    382 => 
    array (
      0 => 383,
      1 => 34,
      2 => 'Huyện Trà Bồng',
    ),
    383 => 
    array (
      0 => 384,
      1 => 34,
      2 => 'Huyện Sơn Tịnh',
    ),
    384 => 
    array (
      0 => 385,
      1 => 34,
      2 => 'Huyện Tư Nghĩa',
    ),
    385 => 
    array (
      0 => 386,
      1 => 34,
      2 => 'Huyện Sơn Hà',
    ),
    386 => 
    array (
      0 => 387,
      1 => 34,
      2 => 'Huyện Sơn Tây',
    ),
    387 => 
    array (
      0 => 388,
      1 => 34,
      2 => 'Huyện Minh Long',
    ),
    388 => 
    array (
      0 => 389,
      1 => 34,
      2 => 'Huyện Nghĩa Hành',
    ),
    389 => 
    array (
      0 => 390,
      1 => 34,
      2 => 'Huyện Mộ Đức',
    ),
    390 => 
    array (
      0 => 391,
      1 => 34,
      2 => 'Thị xã Đức Phổ',
    ),
    391 => 
    array (
      0 => 392,
      1 => 34,
      2 => 'Huyện Ba Tơ',
    ),
    392 => 
    array (
      0 => 393,
      1 => 34,
      2 => 'Huyện Lý Sơn',
    ),
    393 => 
    array (
      0 => 394,
      1 => 35,
      2 => 'Thành phố Quy Nhơn',
    ),
    394 => 
    array (
      0 => 395,
      1 => 35,
      2 => 'Huyện An Lão',
    ),
    395 => 
    array (
      0 => 396,
      1 => 35,
      2 => 'Thị xã Hoài Nhơn',
    ),
    396 => 
    array (
      0 => 397,
      1 => 35,
      2 => 'Huyện Hoài Ân',
    ),
    397 => 
    array (
      0 => 398,
      1 => 35,
      2 => 'Huyện Phù Mỹ',
    ),
    398 => 
    array (
      0 => 399,
      1 => 35,
      2 => 'Huyện Vĩnh Thạnh',
    ),
    399 => 
    array (
      0 => 400,
      1 => 35,
      2 => 'Huyện Tây Sơn',
    ),
    400 => 
    array (
      0 => 401,
      1 => 35,
      2 => 'Huyện Phù Cát',
    ),
    401 => 
    array (
      0 => 402,
      1 => 35,
      2 => 'Thị xã An Nhơn',
    ),
    402 => 
    array (
      0 => 403,
      1 => 35,
      2 => 'Huyện Tuy Phước',
    ),
    403 => 
    array (
      0 => 404,
      1 => 35,
      2 => 'Huyện Vân Canh',
    ),
    404 => 
    array (
      0 => 405,
      1 => 36,
      2 => 'Thành phố Tuy Hoà',
    ),
    405 => 
    array (
      0 => 406,
      1 => 36,
      2 => 'Thị xã Sông Cầu',
    ),
    406 => 
    array (
      0 => 407,
      1 => 36,
      2 => 'Huyện Đồng Xuân',
    ),
    407 => 
    array (
      0 => 408,
      1 => 36,
      2 => 'Huyện Tuy An',
    ),
    408 => 
    array (
      0 => 409,
      1 => 36,
      2 => 'Huyện Sơn Hòa',
    ),
    409 => 
    array (
      0 => 410,
      1 => 36,
      2 => 'Huyện Sông Hinh',
    ),
    410 => 
    array (
      0 => 411,
      1 => 36,
      2 => 'Huyện Tây Hoà',
    ),
    411 => 
    array (
      0 => 412,
      1 => 36,
      2 => 'Huyện Phú Hoà',
    ),
    412 => 
    array (
      0 => 413,
      1 => 36,
      2 => 'Thị xã Đông Hòa',
    ),
    413 => 
    array (
      0 => 414,
      1 => 37,
      2 => 'Thành phố Nha Trang',
    ),
    414 => 
    array (
      0 => 415,
      1 => 37,
      2 => 'Thành phố Cam Ranh',
    ),
    415 => 
    array (
      0 => 416,
      1 => 37,
      2 => 'Huyện Cam Lâm',
    ),
    416 => 
    array (
      0 => 417,
      1 => 37,
      2 => 'Huyện Vạn Ninh',
    ),
    417 => 
    array (
      0 => 418,
      1 => 37,
      2 => 'Thị xã Ninh Hòa',
    ),
    418 => 
    array (
      0 => 419,
      1 => 37,
      2 => 'Huyện Khánh Vĩnh',
    ),
    419 => 
    array (
      0 => 420,
      1 => 37,
      2 => 'Huyện Diên Khánh',
    ),
    420 => 
    array (
      0 => 421,
      1 => 37,
      2 => 'Huyện Khánh Sơn',
    ),
    421 => 
    array (
      0 => 422,
      1 => 37,
      2 => 'Huyện Trường Sa',
    ),
    422 => 
    array (
      0 => 423,
      1 => 38,
      2 => 'Thành phố Phan Rang-Tháp Chàm',
    ),
    423 => 
    array (
      0 => 424,
      1 => 38,
      2 => 'Huyện Bác Ái',
    ),
    424 => 
    array (
      0 => 425,
      1 => 38,
      2 => 'Huyện Ninh Sơn',
    ),
    425 => 
    array (
      0 => 426,
      1 => 38,
      2 => 'Huyện Ninh Hải',
    ),
    426 => 
    array (
      0 => 427,
      1 => 38,
      2 => 'Huyện Ninh Phước',
    ),
    427 => 
    array (
      0 => 428,
      1 => 38,
      2 => 'Huyện Thuận Bắc',
    ),
    428 => 
    array (
      0 => 429,
      1 => 38,
      2 => 'Huyện Thuận Nam',
    ),
    429 => 
    array (
      0 => 430,
      1 => 39,
      2 => 'Thành phố Phan Thiết',
    ),
    430 => 
    array (
      0 => 431,
      1 => 39,
      2 => 'Thị xã La Gi',
    ),
    431 => 
    array (
      0 => 432,
      1 => 39,
      2 => 'Huyện Tuy Phong',
    ),
    432 => 
    array (
      0 => 433,
      1 => 39,
      2 => 'Huyện Bắc Bình',
    ),
    433 => 
    array (
      0 => 434,
      1 => 39,
      2 => 'Huyện Hàm Thuận Bắc',
    ),
    434 => 
    array (
      0 => 435,
      1 => 39,
      2 => 'Huyện Hàm Thuận Nam',
    ),
    435 => 
    array (
      0 => 436,
      1 => 39,
      2 => 'Huyện Tánh Linh',
    ),
    436 => 
    array (
      0 => 437,
      1 => 39,
      2 => 'Huyện Đức Linh',
    ),
    437 => 
    array (
      0 => 438,
      1 => 39,
      2 => 'Huyện Hàm Tân',
    ),
    438 => 
    array (
      0 => 439,
      1 => 39,
      2 => 'Huyện Phú Quí',
    ),
    439 => 
    array (
      0 => 440,
      1 => 40,
      2 => 'Thành phố Kon Tum',
    ),
    440 => 
    array (
      0 => 441,
      1 => 40,
      2 => 'Huyện Đắk Glei',
    ),
    441 => 
    array (
      0 => 442,
      1 => 40,
      2 => 'Huyện Ngọc Hồi',
    ),
    442 => 
    array (
      0 => 443,
      1 => 40,
      2 => 'Huyện Đắk Tô',
    ),
    443 => 
    array (
      0 => 444,
      1 => 40,
      2 => 'Huyện Kon Plông',
    ),
    444 => 
    array (
      0 => 445,
      1 => 40,
      2 => 'Huyện Kon Rẫy',
    ),
    445 => 
    array (
      0 => 446,
      1 => 40,
      2 => 'Huyện Đắk Hà',
    ),
    446 => 
    array (
      0 => 447,
      1 => 40,
      2 => 'Huyện Sa Thầy',
    ),
    447 => 
    array (
      0 => 448,
      1 => 40,
      2 => 'Huyện Tu Mơ Rông',
    ),
    448 => 
    array (
      0 => 449,
      1 => 40,
      2 => 'Huyện Ia H\' Drai',
    ),
    449 => 
    array (
      0 => 450,
      1 => 41,
      2 => 'Thành phố Pleiku',
    ),
    450 => 
    array (
      0 => 451,
      1 => 41,
      2 => 'Thị xã An Khê',
    ),
    451 => 
    array (
      0 => 452,
      1 => 41,
      2 => 'Thị xã Ayun Pa',
    ),
    452 => 
    array (
      0 => 453,
      1 => 41,
      2 => 'Huyện KBang',
    ),
    453 => 
    array (
      0 => 454,
      1 => 41,
      2 => 'Huyện Đăk Đoa',
    ),
    454 => 
    array (
      0 => 455,
      1 => 41,
      2 => 'Huyện Chư Păh',
    ),
    455 => 
    array (
      0 => 456,
      1 => 41,
      2 => 'Huyện Ia Grai',
    ),
    456 => 
    array (
      0 => 457,
      1 => 41,
      2 => 'Huyện Mang Yang',
    ),
    457 => 
    array (
      0 => 458,
      1 => 41,
      2 => 'Huyện Kông Chro',
    ),
    458 => 
    array (
      0 => 459,
      1 => 41,
      2 => 'Huyện Đức Cơ',
    ),
    459 => 
    array (
      0 => 460,
      1 => 41,
      2 => 'Huyện Chư Prông',
    ),
    460 => 
    array (
      0 => 461,
      1 => 41,
      2 => 'Huyện Chư Sê',
    ),
    461 => 
    array (
      0 => 462,
      1 => 41,
      2 => 'Huyện Đăk Pơ',
    ),
    462 => 
    array (
      0 => 463,
      1 => 41,
      2 => 'Huyện Ia Pa',
    ),
    463 => 
    array (
      0 => 464,
      1 => 41,
      2 => 'Huyện Krông Pa',
    ),
    464 => 
    array (
      0 => 465,
      1 => 41,
      2 => 'Huyện Phú Thiện',
    ),
    465 => 
    array (
      0 => 466,
      1 => 41,
      2 => 'Huyện Chư Pưh',
    ),
    466 => 
    array (
      0 => 467,
      1 => 42,
      2 => 'Thành phố Buôn Ma Thuột',
    ),
    467 => 
    array (
      0 => 468,
      1 => 42,
      2 => 'Thị Xã Buôn Hồ',
    ),
    468 => 
    array (
      0 => 469,
      1 => 42,
      2 => 'Huyện Ea H\'leo',
    ),
    469 => 
    array (
      0 => 470,
      1 => 42,
      2 => 'Huyện Ea Súp',
    ),
    470 => 
    array (
      0 => 471,
      1 => 42,
      2 => 'Huyện Buôn Đôn',
    ),
    471 => 
    array (
      0 => 472,
      1 => 42,
      2 => 'Huyện Cư M\'gar',
    ),
    472 => 
    array (
      0 => 473,
      1 => 42,
      2 => 'Huyện Krông Búk',
    ),
    473 => 
    array (
      0 => 474,
      1 => 42,
      2 => 'Huyện Krông Năng',
    ),
    474 => 
    array (
      0 => 475,
      1 => 42,
      2 => 'Huyện Ea Kar',
    ),
    475 => 
    array (
      0 => 476,
      1 => 42,
      2 => 'Huyện M\'Đrắk',
    ),
    476 => 
    array (
      0 => 477,
      1 => 42,
      2 => 'Huyện Krông Bông',
    ),
    477 => 
    array (
      0 => 478,
      1 => 42,
      2 => 'Huyện Krông Pắc',
    ),
    478 => 
    array (
      0 => 479,
      1 => 42,
      2 => 'Huyện Krông A Na',
    ),
    479 => 
    array (
      0 => 480,
      1 => 42,
      2 => 'Huyện Lắk',
    ),
    480 => 
    array (
      0 => 481,
      1 => 42,
      2 => 'Huyện Cư Kuin',
    ),
    481 => 
    array (
      0 => 482,
      1 => 43,
      2 => 'Thành phố Gia Nghĩa',
    ),
    482 => 
    array (
      0 => 483,
      1 => 43,
      2 => 'Huyện Đăk Glong',
    ),
    483 => 
    array (
      0 => 484,
      1 => 43,
      2 => 'Huyện Cư Jút',
    ),
    484 => 
    array (
      0 => 485,
      1 => 43,
      2 => 'Huyện Đắk Mil',
    ),
    485 => 
    array (
      0 => 486,
      1 => 43,
      2 => 'Huyện Krông Nô',
    ),
    486 => 
    array (
      0 => 487,
      1 => 43,
      2 => 'Huyện Đắk Song',
    ),
    487 => 
    array (
      0 => 488,
      1 => 43,
      2 => 'Huyện Đắk R\'Lấp',
    ),
    488 => 
    array (
      0 => 489,
      1 => 43,
      2 => 'Huyện Tuy Đức',
    ),
    489 => 
    array (
      0 => 490,
      1 => 44,
      2 => 'Thành phố Đà Lạt',
    ),
    490 => 
    array (
      0 => 491,
      1 => 44,
      2 => 'Thành phố Bảo Lộc',
    ),
    491 => 
    array (
      0 => 492,
      1 => 44,
      2 => 'Huyện Đam Rông',
    ),
    492 => 
    array (
      0 => 493,
      1 => 44,
      2 => 'Huyện Lạc Dương',
    ),
    493 => 
    array (
      0 => 494,
      1 => 44,
      2 => 'Huyện Lâm Hà',
    ),
    494 => 
    array (
      0 => 495,
      1 => 44,
      2 => 'Huyện Đơn Dương',
    ),
    495 => 
    array (
      0 => 496,
      1 => 44,
      2 => 'Huyện Đức Trọng',
    ),
    496 => 
    array (
      0 => 497,
      1 => 44,
      2 => 'Huyện Di Linh',
    ),
    497 => 
    array (
      0 => 498,
      1 => 44,
      2 => 'Huyện Bảo Lâm',
    ),
    498 => 
    array (
      0 => 499,
      1 => 44,
      2 => 'Huyện Đạ Huoai',
    ),
    499 => 
    array (
      0 => 500,
      1 => 44,
      2 => 'Huyện Đạ Tẻh',
    ),
    500 => 
    array (
      0 => 501,
      1 => 44,
      2 => 'Huyện Cát Tiên',
    ),
    501 => 
    array (
      0 => 502,
      1 => 45,
      2 => 'Thị xã Phước Long',
    ),
    502 => 
    array (
      0 => 503,
      1 => 45,
      2 => 'Thành phố Đồng Xoài',
    ),
    503 => 
    array (
      0 => 504,
      1 => 45,
      2 => 'Thị xã Bình Long',
    ),
    504 => 
    array (
      0 => 505,
      1 => 45,
      2 => 'Huyện Bù Gia Mập',
    ),
    505 => 
    array (
      0 => 506,
      1 => 45,
      2 => 'Huyện Lộc Ninh',
    ),
    506 => 
    array (
      0 => 507,
      1 => 45,
      2 => 'Huyện Bù Đốp',
    ),
    507 => 
    array (
      0 => 508,
      1 => 45,
      2 => 'Huyện Hớn Quản',
    ),
    508 => 
    array (
      0 => 509,
      1 => 45,
      2 => 'Huyện Đồng Phú',
    ),
    509 => 
    array (
      0 => 510,
      1 => 45,
      2 => 'Huyện Bù Đăng',
    ),
    510 => 
    array (
      0 => 511,
      1 => 45,
      2 => 'Huyện Chơn Thành',
    ),
    511 => 
    array (
      0 => 512,
      1 => 45,
      2 => 'Huyện Phú Riềng',
    ),
    512 => 
    array (
      0 => 513,
      1 => 46,
      2 => 'Thành phố Tây Ninh',
    ),
    513 => 
    array (
      0 => 514,
      1 => 46,
      2 => 'Huyện Tân Biên',
    ),
    514 => 
    array (
      0 => 515,
      1 => 46,
      2 => 'Huyện Tân Châu',
    ),
    515 => 
    array (
      0 => 516,
      1 => 46,
      2 => 'Huyện Dương Minh Châu',
    ),
    516 => 
    array (
      0 => 517,
      1 => 46,
      2 => 'Huyện Châu Thành',
    ),
    517 => 
    array (
      0 => 518,
      1 => 46,
      2 => 'Thị xã Hòa Thành',
    ),
    518 => 
    array (
      0 => 519,
      1 => 46,
      2 => 'Huyện Gò Dầu',
    ),
    519 => 
    array (
      0 => 520,
      1 => 46,
      2 => 'Huyện Bến Cầu',
    ),
    520 => 
    array (
      0 => 521,
      1 => 46,
      2 => 'Thị xã Trảng Bàng',
    ),
    521 => 
    array (
      0 => 522,
      1 => 47,
      2 => 'Thành phố Thủ Dầu Một',
    ),
    522 => 
    array (
      0 => 523,
      1 => 47,
      2 => 'Huyện Bàu Bàng',
    ),
    523 => 
    array (
      0 => 524,
      1 => 47,
      2 => 'Huyện Dầu Tiếng',
    ),
    524 => 
    array (
      0 => 525,
      1 => 47,
      2 => 'Thị xã Bến Cát',
    ),
    525 => 
    array (
      0 => 526,
      1 => 47,
      2 => 'Huyện Phú Giáo',
    ),
    526 => 
    array (
      0 => 527,
      1 => 47,
      2 => 'Thị xã Tân Uyên',
    ),
    527 => 
    array (
      0 => 528,
      1 => 47,
      2 => 'Thành phố Dĩ An',
    ),
    528 => 
    array (
      0 => 529,
      1 => 47,
      2 => 'Thành phố Thuận An',
    ),
    529 => 
    array (
      0 => 530,
      1 => 47,
      2 => 'Huyện Bắc Tân Uyên',
    ),
    530 => 
    array (
      0 => 531,
      1 => 48,
      2 => 'Thành phố Biên Hòa',
    ),
    531 => 
    array (
      0 => 532,
      1 => 48,
      2 => 'Thành phố Long Khánh',
    ),
    532 => 
    array (
      0 => 533,
      1 => 48,
      2 => 'Huyện Tân Phú',
    ),
    533 => 
    array (
      0 => 534,
      1 => 48,
      2 => 'Huyện Vĩnh Cửu',
    ),
    534 => 
    array (
      0 => 535,
      1 => 48,
      2 => 'Huyện Định Quán',
    ),
    535 => 
    array (
      0 => 536,
      1 => 48,
      2 => 'Huyện Trảng Bom',
    ),
    536 => 
    array (
      0 => 537,
      1 => 48,
      2 => 'Huyện Thống Nhất',
    ),
    537 => 
    array (
      0 => 538,
      1 => 48,
      2 => 'Huyện Cẩm Mỹ',
    ),
    538 => 
    array (
      0 => 539,
      1 => 48,
      2 => 'Huyện Long Thành',
    ),
    539 => 
    array (
      0 => 540,
      1 => 48,
      2 => 'Huyện Xuân Lộc',
    ),
    540 => 
    array (
      0 => 541,
      1 => 48,
      2 => 'Huyện Nhơn Trạch',
    ),
    541 => 
    array (
      0 => 542,
      1 => 49,
      2 => 'Thành phố Vũng Tàu',
    ),
    542 => 
    array (
      0 => 543,
      1 => 49,
      2 => 'Thành phố Bà Rịa',
    ),
    543 => 
    array (
      0 => 544,
      1 => 49,
      2 => 'Huyện Châu Đức',
    ),
    544 => 
    array (
      0 => 545,
      1 => 49,
      2 => 'Huyện Xuyên Mộc',
    ),
    545 => 
    array (
      0 => 546,
      1 => 49,
      2 => 'Huyện Long Điền',
    ),
    546 => 
    array (
      0 => 547,
      1 => 49,
      2 => 'Huyện Đất Đỏ',
    ),
    547 => 
    array (
      0 => 548,
      1 => 49,
      2 => 'Thị xã Phú Mỹ',
    ),
    548 => 
    array (
      0 => 549,
      1 => 49,
      2 => 'Huyện Côn Đảo',
    ),
    549 => 
    array (
      0 => 550,
      1 => 50,
      2 => 'Quận 1',
    ),
    550 => 
    array (
      0 => 551,
      1 => 50,
      2 => 'Quận 12',
    ),
    551 => 
    array (
      0 => 552,
      1 => 50,
      2 => 'Quận Gò Vấp',
    ),
    552 => 
    array (
      0 => 553,
      1 => 50,
      2 => 'Quận Bình Thạnh',
    ),
    553 => 
    array (
      0 => 554,
      1 => 50,
      2 => 'Quận Tân Bình',
    ),
    554 => 
    array (
      0 => 555,
      1 => 50,
      2 => 'Quận Tân Phú',
    ),
    555 => 
    array (
      0 => 556,
      1 => 50,
      2 => 'Quận Phú Nhuận',
    ),
    556 => 
    array (
      0 => 557,
      1 => 50,
      2 => 'Thành phố Thủ Đức',
    ),
    557 => 
    array (
      0 => 558,
      1 => 50,
      2 => 'Quận 3',
    ),
    558 => 
    array (
      0 => 559,
      1 => 50,
      2 => 'Quận 10',
    ),
    559 => 
    array (
      0 => 560,
      1 => 50,
      2 => 'Quận 11',
    ),
    560 => 
    array (
      0 => 561,
      1 => 50,
      2 => 'Quận 4',
    ),
    561 => 
    array (
      0 => 562,
      1 => 50,
      2 => 'Quận 5',
    ),
    562 => 
    array (
      0 => 563,
      1 => 50,
      2 => 'Quận 6',
    ),
    563 => 
    array (
      0 => 564,
      1 => 50,
      2 => 'Quận 8',
    ),
    564 => 
    array (
      0 => 565,
      1 => 50,
      2 => 'Quận Bình Tân',
    ),
    565 => 
    array (
      0 => 566,
      1 => 50,
      2 => 'Quận 7',
    ),
    566 => 
    array (
      0 => 567,
      1 => 50,
      2 => 'Huyện Củ Chi',
    ),
    567 => 
    array (
      0 => 568,
      1 => 50,
      2 => 'Huyện Hóc Môn',
    ),
    568 => 
    array (
      0 => 569,
      1 => 50,
      2 => 'Huyện Bình Chánh',
    ),
    569 => 
    array (
      0 => 570,
      1 => 50,
      2 => 'Huyện Nhà Bè',
    ),
    570 => 
    array (
      0 => 571,
      1 => 50,
      2 => 'Huyện Cần Giờ',
    ),
    571 => 
    array (
      0 => 572,
      1 => 51,
      2 => 'Thành phố Tân An',
    ),
    572 => 
    array (
      0 => 573,
      1 => 51,
      2 => 'Thị xã Kiến Tường',
    ),
    573 => 
    array (
      0 => 574,
      1 => 51,
      2 => 'Huyện Tân Hưng',
    ),
    574 => 
    array (
      0 => 575,
      1 => 51,
      2 => 'Huyện Vĩnh Hưng',
    ),
    575 => 
    array (
      0 => 576,
      1 => 51,
      2 => 'Huyện Mộc Hóa',
    ),
    576 => 
    array (
      0 => 577,
      1 => 51,
      2 => 'Huyện Tân Thạnh',
    ),
    577 => 
    array (
      0 => 578,
      1 => 51,
      2 => 'Huyện Thạnh Hóa',
    ),
    578 => 
    array (
      0 => 579,
      1 => 51,
      2 => 'Huyện Đức Huệ',
    ),
    579 => 
    array (
      0 => 580,
      1 => 51,
      2 => 'Huyện Đức Hòa',
    ),
    580 => 
    array (
      0 => 581,
      1 => 51,
      2 => 'Huyện Bến Lức',
    ),
    581 => 
    array (
      0 => 582,
      1 => 51,
      2 => 'Huyện Thủ Thừa',
    ),
    582 => 
    array (
      0 => 583,
      1 => 51,
      2 => 'Huyện Tân Trụ',
    ),
    583 => 
    array (
      0 => 584,
      1 => 51,
      2 => 'Huyện Cần Đước',
    ),
    584 => 
    array (
      0 => 585,
      1 => 51,
      2 => 'Huyện Cần Giuộc',
    ),
    585 => 
    array (
      0 => 586,
      1 => 51,
      2 => 'Huyện Châu Thành',
    ),
    586 => 
    array (
      0 => 587,
      1 => 52,
      2 => 'Thành phố Mỹ Tho',
    ),
    587 => 
    array (
      0 => 588,
      1 => 52,
      2 => 'Thị xã Gò Công',
    ),
    588 => 
    array (
      0 => 589,
      1 => 52,
      2 => 'Thị xã Cai Lậy',
    ),
    589 => 
    array (
      0 => 590,
      1 => 52,
      2 => 'Huyện Tân Phước',
    ),
    590 => 
    array (
      0 => 591,
      1 => 52,
      2 => 'Huyện Cái Bè',
    ),
    591 => 
    array (
      0 => 592,
      1 => 52,
      2 => 'Huyện Cai Lậy',
    ),
    592 => 
    array (
      0 => 593,
      1 => 52,
      2 => 'Huyện Châu Thành',
    ),
    593 => 
    array (
      0 => 594,
      1 => 52,
      2 => 'Huyện Chợ Gạo',
    ),
    594 => 
    array (
      0 => 595,
      1 => 52,
      2 => 'Huyện Gò Công Tây',
    ),
    595 => 
    array (
      0 => 596,
      1 => 52,
      2 => 'Huyện Gò Công Đông',
    ),
    596 => 
    array (
      0 => 597,
      1 => 52,
      2 => 'Huyện Tân Phú Đông',
    ),
    597 => 
    array (
      0 => 598,
      1 => 53,
      2 => 'Thành phố Bến Tre',
    ),
    598 => 
    array (
      0 => 599,
      1 => 53,
      2 => 'Huyện Châu Thành',
    ),
    599 => 
    array (
      0 => 600,
      1 => 53,
      2 => 'Huyện Chợ Lách',
    ),
    600 => 
    array (
      0 => 601,
      1 => 53,
      2 => 'Huyện Mỏ Cày Nam',
    ),
    601 => 
    array (
      0 => 602,
      1 => 53,
      2 => 'Huyện Giồng Trôm',
    ),
    602 => 
    array (
      0 => 603,
      1 => 53,
      2 => 'Huyện Bình Đại',
    ),
    603 => 
    array (
      0 => 604,
      1 => 53,
      2 => 'Huyện Ba Tri',
    ),
    604 => 
    array (
      0 => 605,
      1 => 53,
      2 => 'Huyện Thạnh Phú',
    ),
    605 => 
    array (
      0 => 606,
      1 => 53,
      2 => 'Huyện Mỏ Cày Bắc',
    ),
    606 => 
    array (
      0 => 607,
      1 => 54,
      2 => 'Thành phố Trà Vinh',
    ),
    607 => 
    array (
      0 => 608,
      1 => 54,
      2 => 'Huyện Càng Long',
    ),
    608 => 
    array (
      0 => 609,
      1 => 54,
      2 => 'Huyện Cầu Kè',
    ),
    609 => 
    array (
      0 => 610,
      1 => 54,
      2 => 'Huyện Tiểu Cần',
    ),
    610 => 
    array (
      0 => 611,
      1 => 54,
      2 => 'Huyện Châu Thành',
    ),
    611 => 
    array (
      0 => 612,
      1 => 54,
      2 => 'Huyện Cầu Ngang',
    ),
    612 => 
    array (
      0 => 613,
      1 => 54,
      2 => 'Huyện Trà Cú',
    ),
    613 => 
    array (
      0 => 614,
      1 => 54,
      2 => 'Huyện Duyên Hải',
    ),
    614 => 
    array (
      0 => 615,
      1 => 54,
      2 => 'Thị xã Duyên Hải',
    ),
    615 => 
    array (
      0 => 616,
      1 => 55,
      2 => 'Thành phố Vĩnh Long',
    ),
    616 => 
    array (
      0 => 617,
      1 => 55,
      2 => 'Huyện Long Hồ',
    ),
    617 => 
    array (
      0 => 618,
      1 => 55,
      2 => 'Huyện Mang Thít',
    ),
    618 => 
    array (
      0 => 619,
      1 => 55,
      2 => 'Huyện  Vũng Liêm',
    ),
    619 => 
    array (
      0 => 620,
      1 => 55,
      2 => 'Huyện Tam Bình',
    ),
    620 => 
    array (
      0 => 621,
      1 => 55,
      2 => 'Thị xã Bình Minh',
    ),
    621 => 
    array (
      0 => 622,
      1 => 55,
      2 => 'Huyện Trà Ôn',
    ),
    622 => 
    array (
      0 => 623,
      1 => 55,
      2 => 'Huyện Bình Tân',
    ),
    623 => 
    array (
      0 => 624,
      1 => 56,
      2 => 'Thành phố Cao Lãnh',
    ),
    624 => 
    array (
      0 => 625,
      1 => 56,
      2 => 'Thành phố Sa Đéc',
    ),
    625 => 
    array (
      0 => 626,
      1 => 56,
      2 => 'Thành phố Hồng Ngự',
    ),
    626 => 
    array (
      0 => 627,
      1 => 56,
      2 => 'Huyện Tân Hồng',
    ),
    627 => 
    array (
      0 => 628,
      1 => 56,
      2 => 'Huyện Hồng Ngự',
    ),
    628 => 
    array (
      0 => 629,
      1 => 56,
      2 => 'Huyện Tam Nông',
    ),
    629 => 
    array (
      0 => 630,
      1 => 56,
      2 => 'Huyện Tháp Mười',
    ),
    630 => 
    array (
      0 => 631,
      1 => 56,
      2 => 'Huyện Cao Lãnh',
    ),
    631 => 
    array (
      0 => 632,
      1 => 56,
      2 => 'Huyện Thanh Bình',
    ),
    632 => 
    array (
      0 => 633,
      1 => 56,
      2 => 'Huyện Lấp Vò',
    ),
    633 => 
    array (
      0 => 634,
      1 => 56,
      2 => 'Huyện Lai Vung',
    ),
    634 => 
    array (
      0 => 635,
      1 => 56,
      2 => 'Huyện Châu Thành',
    ),
    635 => 
    array (
      0 => 636,
      1 => 57,
      2 => 'Thành phố Long Xuyên',
    ),
    636 => 
    array (
      0 => 637,
      1 => 57,
      2 => 'Thành phố Châu Đốc',
    ),
    637 => 
    array (
      0 => 638,
      1 => 57,
      2 => 'Huyện An Phú',
    ),
    638 => 
    array (
      0 => 639,
      1 => 57,
      2 => 'Thị xã Tân Châu',
    ),
    639 => 
    array (
      0 => 640,
      1 => 57,
      2 => 'Huyện Phú Tân',
    ),
    640 => 
    array (
      0 => 641,
      1 => 57,
      2 => 'Huyện Châu Phú',
    ),
    641 => 
    array (
      0 => 642,
      1 => 57,
      2 => 'Huyện Tịnh Biên',
    ),
    642 => 
    array (
      0 => 643,
      1 => 57,
      2 => 'Huyện Tri Tôn',
    ),
    643 => 
    array (
      0 => 644,
      1 => 57,
      2 => 'Huyện Châu Thành',
    ),
    644 => 
    array (
      0 => 645,
      1 => 57,
      2 => 'Huyện Chợ Mới',
    ),
    645 => 
    array (
      0 => 646,
      1 => 57,
      2 => 'Huyện Thoại Sơn',
    ),
    646 => 
    array (
      0 => 647,
      1 => 58,
      2 => 'Thành phố Rạch Giá',
    ),
    647 => 
    array (
      0 => 648,
      1 => 58,
      2 => 'Thành phố Hà Tiên',
    ),
    648 => 
    array (
      0 => 649,
      1 => 58,
      2 => 'Huyện Kiên Lương',
    ),
    649 => 
    array (
      0 => 650,
      1 => 58,
      2 => 'Huyện Hòn Đất',
    ),
    650 => 
    array (
      0 => 651,
      1 => 58,
      2 => 'Huyện Tân Hiệp',
    ),
    651 => 
    array (
      0 => 652,
      1 => 58,
      2 => 'Huyện Châu Thành',
    ),
    652 => 
    array (
      0 => 653,
      1 => 58,
      2 => 'Huyện Giồng Riềng',
    ),
    653 => 
    array (
      0 => 654,
      1 => 58,
      2 => 'Huyện Gò Quao',
    ),
    654 => 
    array (
      0 => 655,
      1 => 58,
      2 => 'Huyện An Biên',
    ),
    655 => 
    array (
      0 => 656,
      1 => 58,
      2 => 'Huyện An Minh',
    ),
    656 => 
    array (
      0 => 657,
      1 => 58,
      2 => 'Huyện Vĩnh Thuận',
    ),
    657 => 
    array (
      0 => 658,
      1 => 58,
      2 => 'Thành phố Phú Quốc',
    ),
    658 => 
    array (
      0 => 659,
      1 => 58,
      2 => 'Huyện Kiên Hải',
    ),
    659 => 
    array (
      0 => 660,
      1 => 58,
      2 => 'Huyện U Minh Thượng',
    ),
    660 => 
    array (
      0 => 661,
      1 => 58,
      2 => 'Huyện Giang Thành',
    ),
    661 => 
    array (
      0 => 662,
      1 => 59,
      2 => 'Quận Ninh Kiều',
    ),
    662 => 
    array (
      0 => 663,
      1 => 59,
      2 => 'Quận Ô Môn',
    ),
    663 => 
    array (
      0 => 664,
      1 => 59,
      2 => 'Quận Bình Thuỷ',
    ),
    664 => 
    array (
      0 => 665,
      1 => 59,
      2 => 'Quận Cái Răng',
    ),
    665 => 
    array (
      0 => 666,
      1 => 59,
      2 => 'Quận Thốt Nốt',
    ),
    666 => 
    array (
      0 => 667,
      1 => 59,
      2 => 'Huyện Vĩnh Thạnh',
    ),
    667 => 
    array (
      0 => 668,
      1 => 59,
      2 => 'Huyện Cờ Đỏ',
    ),
    668 => 
    array (
      0 => 669,
      1 => 59,
      2 => 'Huyện Phong Điền',
    ),
    669 => 
    array (
      0 => 670,
      1 => 59,
      2 => 'Huyện Thới Lai',
    ),
    670 => 
    array (
      0 => 671,
      1 => 60,
      2 => 'Thành phố Vị Thanh',
    ),
    671 => 
    array (
      0 => 672,
      1 => 60,
      2 => 'Thành phố Ngã Bảy',
    ),
    672 => 
    array (
      0 => 673,
      1 => 60,
      2 => 'Huyện Châu Thành A',
    ),
    673 => 
    array (
      0 => 674,
      1 => 60,
      2 => 'Huyện Châu Thành',
    ),
    674 => 
    array (
      0 => 675,
      1 => 60,
      2 => 'Huyện Phụng Hiệp',
    ),
    675 => 
    array (
      0 => 676,
      1 => 60,
      2 => 'Huyện Vị Thuỷ',
    ),
    676 => 
    array (
      0 => 677,
      1 => 60,
      2 => 'Huyện Long Mỹ',
    ),
    677 => 
    array (
      0 => 678,
      1 => 60,
      2 => 'Thị xã Long Mỹ',
    ),
    678 => 
    array (
      0 => 679,
      1 => 61,
      2 => 'Thành phố Sóc Trăng',
    ),
    679 => 
    array (
      0 => 680,
      1 => 61,
      2 => 'Huyện Châu Thành',
    ),
    680 => 
    array (
      0 => 681,
      1 => 61,
      2 => 'Huyện Kế Sách',
    ),
    681 => 
    array (
      0 => 682,
      1 => 61,
      2 => 'Huyện Mỹ Tú',
    ),
    682 => 
    array (
      0 => 683,
      1 => 61,
      2 => 'Huyện Cù Lao Dung',
    ),
    683 => 
    array (
      0 => 684,
      1 => 61,
      2 => 'Huyện Long Phú',
    ),
    684 => 
    array (
      0 => 685,
      1 => 61,
      2 => 'Huyện Mỹ Xuyên',
    ),
    685 => 
    array (
      0 => 686,
      1 => 61,
      2 => 'Thị xã Ngã Năm',
    ),
    686 => 
    array (
      0 => 687,
      1 => 61,
      2 => 'Huyện Thạnh Trị',
    ),
    687 => 
    array (
      0 => 688,
      1 => 61,
      2 => 'Thị xã Vĩnh Châu',
    ),
    688 => 
    array (
      0 => 689,
      1 => 61,
      2 => 'Huyện Trần Đề',
    ),
    689 => 
    array (
      0 => 690,
      1 => 62,
      2 => 'Thành phố Bạc Liêu',
    ),
    690 => 
    array (
      0 => 691,
      1 => 62,
      2 => 'Huyện Hồng Dân',
    ),
    691 => 
    array (
      0 => 692,
      1 => 62,
      2 => 'Huyện Phước Long',
    ),
    692 => 
    array (
      0 => 693,
      1 => 62,
      2 => 'Huyện Vĩnh Lợi',
    ),
    693 => 
    array (
      0 => 694,
      1 => 62,
      2 => 'Thị xã Giá Rai',
    ),
    694 => 
    array (
      0 => 695,
      1 => 62,
      2 => 'Huyện Đông Hải',
    ),
    695 => 
    array (
      0 => 696,
      1 => 62,
      2 => 'Huyện Hoà Bình',
    ),
    696 => 
    array (
      0 => 697,
      1 => 63,
      2 => 'Thành phố Cà Mau',
    ),
    697 => 
    array (
      0 => 698,
      1 => 63,
      2 => 'Huyện U Minh',
    ),
    698 => 
    array (
      0 => 699,
      1 => 63,
      2 => 'Huyện Thới Bình',
    ),
    699 => 
    array (
      0 => 700,
      1 => 63,
      2 => 'Huyện Trần Văn Thời',
    ),
    700 => 
    array (
      0 => 701,
      1 => 63,
      2 => 'Huyện Cái Nước',
    ),
    701 => 
    array (
      0 => 702,
      1 => 63,
      2 => 'Huyện Đầm Dơi',
    ),
    702 => 
    array (
      0 => 703,
      1 => 63,
      2 => 'Huyện Năm Căn',
    ),
    703 => 
    array (
      0 => 704,
      1 => 63,
      2 => 'Huyện Phú Tân',
    ),
    704 => 
    array (
      0 => 705,
      1 => 63,
      2 => 'Huyện Ngọc Hiển',
    ),
  ),
  'province' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => ' Hà Nội',
    ),
    1 => 
    array (
      0 => 2,
      1 => ' Hà Giang',
    ),
    2 => 
    array (
      0 => 3,
      1 => ' Cao Bằng',
    ),
    3 => 
    array (
      0 => 4,
      1 => ' Bắc Kạn',
    ),
    4 => 
    array (
      0 => 5,
      1 => ' Tuyên Quang',
    ),
    5 => 
    array (
      0 => 6,
      1 => ' Lào Cai',
    ),
    6 => 
    array (
      0 => 7,
      1 => ' Điện Biên',
    ),
    7 => 
    array (
      0 => 8,
      1 => ' Lai Châu',
    ),
    8 => 
    array (
      0 => 9,
      1 => ' Sơn La',
    ),
    9 => 
    array (
      0 => 10,
      1 => ' Yên Bái',
    ),
    10 => 
    array (
      0 => 11,
      1 => ' Hoà Bình',
    ),
    11 => 
    array (
      0 => 12,
      1 => ' Thái Nguyên',
    ),
    12 => 
    array (
      0 => 13,
      1 => ' Lạng Sơn',
    ),
    13 => 
    array (
      0 => 14,
      1 => ' Quảng Ninh',
    ),
    14 => 
    array (
      0 => 15,
      1 => ' Bắc Giang',
    ),
    15 => 
    array (
      0 => 16,
      1 => ' Phú Thọ',
    ),
    16 => 
    array (
      0 => 17,
      1 => ' Vĩnh Phúc',
    ),
    17 => 
    array (
      0 => 18,
      1 => ' Bắc Ninh',
    ),
    18 => 
    array (
      0 => 19,
      1 => ' Hải Dương',
    ),
    19 => 
    array (
      0 => 20,
      1 => ' Hải Phòng',
    ),
    20 => 
    array (
      0 => 21,
      1 => ' Hưng Yên',
    ),
    21 => 
    array (
      0 => 22,
      1 => ' Thái Bình',
    ),
    22 => 
    array (
      0 => 23,
      1 => ' Hà Nam',
    ),
    23 => 
    array (
      0 => 24,
      1 => ' Nam Định',
    ),
    24 => 
    array (
      0 => 25,
      1 => ' Ninh Bình',
    ),
    25 => 
    array (
      0 => 26,
      1 => ' Thanh Hóa',
    ),
    26 => 
    array (
      0 => 27,
      1 => ' Nghệ An',
    ),
    27 => 
    array (
      0 => 28,
      1 => ' Hà Tĩnh',
    ),
    28 => 
    array (
      0 => 29,
      1 => ' Quảng Bình',
    ),
    29 => 
    array (
      0 => 30,
      1 => ' Quảng Trị',
    ),
    30 => 
    array (
      0 => 31,
      1 => ' Thừa Thiên Huế',
    ),
    31 => 
    array (
      0 => 32,
      1 => ' Đà Nẵng',
    ),
    32 => 
    array (
      0 => 33,
      1 => ' Quảng Nam',
    ),
    33 => 
    array (
      0 => 34,
      1 => ' Quảng Ngãi',
    ),
    34 => 
    array (
      0 => 35,
      1 => ' Bình Định',
    ),
    35 => 
    array (
      0 => 36,
      1 => ' Phú Yên',
    ),
    36 => 
    array (
      0 => 37,
      1 => ' Khánh Hòa',
    ),
    37 => 
    array (
      0 => 38,
      1 => ' Ninh Thuận',
    ),
    38 => 
    array (
      0 => 39,
      1 => ' Bình Thuận',
    ),
    39 => 
    array (
      0 => 40,
      1 => ' Kon Tum',
    ),
    40 => 
    array (
      0 => 41,
      1 => ' Gia Lai',
    ),
    41 => 
    array (
      0 => 42,
      1 => ' Đắk Lắk',
    ),
    42 => 
    array (
      0 => 43,
      1 => ' Đắk Nông',
    ),
    43 => 
    array (
      0 => 44,
      1 => ' Lâm Đồng',
    ),
    44 => 
    array (
      0 => 45,
      1 => ' Bình Phước',
    ),
    45 => 
    array (
      0 => 46,
      1 => ' Tây Ninh',
    ),
    46 => 
    array (
      0 => 47,
      1 => ' Bình Dương',
    ),
    47 => 
    array (
      0 => 48,
      1 => ' Đồng Nai',
    ),
    48 => 
    array (
      0 => 49,
      1 => ' Bà Rịa - Vũng Tàu',
    ),
    49 => 
    array (
      0 => 50,
      1 => ' Hồ Chí Minh',
    ),
    50 => 
    array (
      0 => 51,
      1 => ' Long An',
    ),
    51 => 
    array (
      0 => 52,
      1 => ' Tiền Giang',
    ),
    52 => 
    array (
      0 => 53,
      1 => ' Bến Tre',
    ),
    53 => 
    array (
      0 => 54,
      1 => ' Trà Vinh',
    ),
    54 => 
    array (
      0 => 55,
      1 => ' Vĩnh Long',
    ),
    55 => 
    array (
      0 => 56,
      1 => ' Đồng Tháp',
    ),
    56 => 
    array (
      0 => 57,
      1 => ' An Giang',
    ),
    57 => 
    array (
      0 => 58,
      1 => ' Kiên Giang',
    ),
    58 => 
    array (
      0 => 59,
      1 => ' Cần Thơ',
    ),
    59 => 
    array (
      0 => 60,
      1 => ' Hậu Giang',
    ),
    60 => 
    array (
      0 => 61,
      1 => ' Sóc Trăng',
    ),
    61 => 
    array (
      0 => 62,
      1 => ' Bạc Liêu',
    ),
    62 => 
    array (
      0 => 63,
      1 => ' Cà Mau',
    ),
  ),
  'ward' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 1,
      2 => 'Phường Phúc Xá',
    ),
    1 => 
    array (
      0 => 2,
      1 => 1,
      2 => 'Phường Trúc Bạch',
    ),
    2 => 
    array (
      0 => 3,
      1 => 1,
      2 => 'Phường Vĩnh Phúc',
    ),
    3 => 
    array (
      0 => 4,
      1 => 1,
      2 => 'Phường Cống Vị',
    ),
    4 => 
    array (
      0 => 5,
      1 => 1,
      2 => 'Phường Liễu Giai',
    ),
    5 => 
    array (
      0 => 6,
      1 => 1,
      2 => 'Phường Nguyễn Trung Trực',
    ),
    6 => 
    array (
      0 => 7,
      1 => 1,
      2 => 'Phường Quán Thánh',
    ),
    7 => 
    array (
      0 => 8,
      1 => 1,
      2 => 'Phường Ngọc Hà',
    ),
    8 => 
    array (
      0 => 9,
      1 => 1,
      2 => 'Phường Điện Biên',
    ),
    9 => 
    array (
      0 => 10,
      1 => 1,
      2 => 'Phường Đội Cấn',
    ),
    10 => 
    array (
      0 => 11,
      1 => 1,
      2 => 'Phường Ngọc Khánh',
    ),
    11 => 
    array (
      0 => 12,
      1 => 1,
      2 => 'Phường Kim Mã',
    ),
    12 => 
    array (
      0 => 13,
      1 => 1,
      2 => 'Phường Giảng Võ',
    ),
    13 => 
    array (
      0 => 14,
      1 => 1,
      2 => 'Phường Thành Công',
    ),
    14 => 
    array (
      0 => 15,
      1 => 2,
      2 => 'Phường Phúc Tân',
    ),
    15 => 
    array (
      0 => 16,
      1 => 2,
      2 => 'Phường Đồng Xuân',
    ),
    16 => 
    array (
      0 => 17,
      1 => 2,
      2 => 'Phường Hàng Mã',
    ),
    17 => 
    array (
      0 => 18,
      1 => 2,
      2 => 'Phường Hàng Buồm',
    ),
    18 => 
    array (
      0 => 19,
      1 => 2,
      2 => 'Phường Hàng Đào',
    ),
    19 => 
    array (
      0 => 20,
      1 => 2,
      2 => 'Phường Hàng Bồ',
    ),
    20 => 
    array (
      0 => 21,
      1 => 2,
      2 => 'Phường Cửa Đông',
    ),
    21 => 
    array (
      0 => 22,
      1 => 2,
      2 => 'Phường Lý Thái Tổ',
    ),
    22 => 
    array (
      0 => 23,
      1 => 2,
      2 => 'Phường Hàng Bạc',
    ),
    23 => 
    array (
      0 => 24,
      1 => 2,
      2 => 'Phường Hàng Gai',
    ),
    24 => 
    array (
      0 => 25,
      1 => 2,
      2 => 'Phường Chương Dương',
    ),
    25 => 
    array (
      0 => 26,
      1 => 2,
      2 => 'Phường Hàng Trống',
    ),
    26 => 
    array (
      0 => 27,
      1 => 2,
      2 => 'Phường Cửa Nam',
    ),
    27 => 
    array (
      0 => 28,
      1 => 2,
      2 => 'Phường Hàng Bông',
    ),
    28 => 
    array (
      0 => 29,
      1 => 2,
      2 => 'Phường Tràng Tiền',
    ),
    29 => 
    array (
      0 => 30,
      1 => 2,
      2 => 'Phường Trần Hưng Đạo',
    ),
    30 => 
    array (
      0 => 31,
      1 => 2,
      2 => 'Phường Phan Chu Trinh',
    ),
    31 => 
    array (
      0 => 32,
      1 => 2,
      2 => 'Phường Hàng Bài',
    ),
    32 => 
    array (
      0 => 33,
      1 => 3,
      2 => 'Phường Phú Thượng',
    ),
    33 => 
    array (
      0 => 34,
      1 => 3,
      2 => 'Phường Nhật Tân',
    ),
    34 => 
    array (
      0 => 35,
      1 => 3,
      2 => 'Phường Tứ Liên',
    ),
    35 => 
    array (
      0 => 36,
      1 => 3,
      2 => 'Phường Quảng An',
    ),
    36 => 
    array (
      0 => 37,
      1 => 3,
      2 => 'Phường Xuân La',
    ),
    37 => 
    array (
      0 => 38,
      1 => 3,
      2 => 'Phường Yên Phụ',
    ),
    38 => 
    array (
      0 => 39,
      1 => 3,
      2 => 'Phường Bưởi',
    ),
    39 => 
    array (
      0 => 40,
      1 => 3,
      2 => 'Phường Thụy Khuê',
    ),
    40 => 
    array (
      0 => 41,
      1 => 4,
      2 => 'Phường Thượng Thanh',
    ),
    41 => 
    array (
      0 => 42,
      1 => 4,
      2 => 'Phường Ngọc Thụy',
    ),
    42 => 
    array (
      0 => 43,
      1 => 4,
      2 => 'Phường Giang Biên',
    ),
    43 => 
    array (
      0 => 44,
      1 => 4,
      2 => 'Phường Đức Giang',
    ),
    44 => 
    array (
      0 => 45,
      1 => 4,
      2 => 'Phường Việt Hưng',
    ),
    45 => 
    array (
      0 => 46,
      1 => 4,
      2 => 'Phường Gia Thụy',
    ),
    46 => 
    array (
      0 => 47,
      1 => 4,
      2 => 'Phường Ngọc Lâm',
    ),
    47 => 
    array (
      0 => 48,
      1 => 4,
      2 => 'Phường Phúc Lợi',
    ),
    48 => 
    array (
      0 => 49,
      1 => 4,
      2 => 'Phường Bồ Đề',
    ),
    49 => 
    array (
      0 => 50,
      1 => 4,
      2 => 'Phường Sài Đồng',
    ),
    50 => 
    array (
      0 => 51,
      1 => 4,
      2 => 'Phường Long Biên',
    ),
    51 => 
    array (
      0 => 52,
      1 => 4,
      2 => 'Phường Thạch Bàn',
    ),
    52 => 
    array (
      0 => 53,
      1 => 4,
      2 => 'Phường Phúc Đồng',
    ),
    53 => 
    array (
      0 => 54,
      1 => 4,
      2 => 'Phường Cự Khối',
    ),
    54 => 
    array (
      0 => 55,
      1 => 5,
      2 => 'Phường Nghĩa Đô',
    ),
    55 => 
    array (
      0 => 56,
      1 => 5,
      2 => 'Phường Nghĩa Tân',
    ),
    56 => 
    array (
      0 => 57,
      1 => 5,
      2 => 'Phường Mai Dịch',
    ),
    57 => 
    array (
      0 => 58,
      1 => 5,
      2 => 'Phường Dịch Vọng',
    ),
    58 => 
    array (
      0 => 59,
      1 => 5,
      2 => 'Phường Dịch Vọng Hậu',
    ),
    59 => 
    array (
      0 => 60,
      1 => 5,
      2 => 'Phường Quan Hoa',
    ),
    60 => 
    array (
      0 => 61,
      1 => 5,
      2 => 'Phường Yên Hoà',
    ),
    61 => 
    array (
      0 => 62,
      1 => 5,
      2 => 'Phường Trung Hoà',
    ),
    62 => 
    array (
      0 => 63,
      1 => 6,
      2 => 'Phường Cát Linh',
    ),
    63 => 
    array (
      0 => 64,
      1 => 6,
      2 => 'Phường Văn Miếu',
    ),
    64 => 
    array (
      0 => 65,
      1 => 6,
      2 => 'Phường Quốc Tử Giám',
    ),
    65 => 
    array (
      0 => 66,
      1 => 6,
      2 => 'Phường Láng Thượng',
    ),
    66 => 
    array (
      0 => 67,
      1 => 6,
      2 => 'Phường Ô Chợ Dừa',
    ),
    67 => 
    array (
      0 => 68,
      1 => 6,
      2 => 'Phường Văn Chương',
    ),
    68 => 
    array (
      0 => 69,
      1 => 6,
      2 => 'Phường Hàng Bột',
    ),
    69 => 
    array (
      0 => 70,
      1 => 6,
      2 => 'Phường Láng Hạ',
    ),
    70 => 
    array (
      0 => 71,
      1 => 6,
      2 => 'Phường Khâm Thiên',
    ),
    71 => 
    array (
      0 => 72,
      1 => 6,
      2 => 'Phường Thổ Quan',
    ),
    72 => 
    array (
      0 => 73,
      1 => 6,
      2 => 'Phường Nam Đồng',
    ),
    73 => 
    array (
      0 => 74,
      1 => 6,
      2 => 'Phường Trung Phụng',
    ),
    74 => 
    array (
      0 => 75,
      1 => 6,
      2 => 'Phường Quang Trung',
    ),
    75 => 
    array (
      0 => 76,
      1 => 6,
      2 => 'Phường Trung Liệt',
    ),
    76 => 
    array (
      0 => 77,
      1 => 6,
      2 => 'Phường Phương Liên',
    ),
    77 => 
    array (
      0 => 78,
      1 => 6,
      2 => 'Phường Thịnh Quang',
    ),
    78 => 
    array (
      0 => 79,
      1 => 6,
      2 => 'Phường Trung Tự',
    ),
    79 => 
    array (
      0 => 80,
      1 => 6,
      2 => 'Phường Kim Liên',
    ),
    80 => 
    array (
      0 => 81,
      1 => 6,
      2 => 'Phường Phương Mai',
    ),
    81 => 
    array (
      0 => 82,
      1 => 6,
      2 => 'Phường Ngã Tư Sở',
    ),
    82 => 
    array (
      0 => 83,
      1 => 6,
      2 => 'Phường Khương Thượng',
    ),
    83 => 
    array (
      0 => 84,
      1 => 7,
      2 => 'Phường Nguyễn Du',
    ),
    84 => 
    array (
      0 => 85,
      1 => 7,
      2 => 'Phường Bạch Đằng',
    ),
    85 => 
    array (
      0 => 86,
      1 => 7,
      2 => 'Phường Phạm Đình Hổ',
    ),
    86 => 
    array (
      0 => 87,
      1 => 7,
      2 => 'Phường Lê Đại Hành',
    ),
    87 => 
    array (
      0 => 88,
      1 => 7,
      2 => 'Phường Đồng Nhân',
    ),
    88 => 
    array (
      0 => 89,
      1 => 7,
      2 => 'Phường Phố Huế',
    ),
    89 => 
    array (
      0 => 90,
      1 => 7,
      2 => 'Phường Đống Mác',
    ),
    90 => 
    array (
      0 => 91,
      1 => 7,
      2 => 'Phường Thanh Lương',
    ),
    91 => 
    array (
      0 => 92,
      1 => 7,
      2 => 'Phường Thanh Nhàn',
    ),
    92 => 
    array (
      0 => 93,
      1 => 7,
      2 => 'Phường Cầu Dền',
    ),
    93 => 
    array (
      0 => 94,
      1 => 7,
      2 => 'Phường Bách Khoa',
    ),
    94 => 
    array (
      0 => 95,
      1 => 7,
      2 => 'Phường Đồng Tâm',
    ),
    95 => 
    array (
      0 => 96,
      1 => 7,
      2 => 'Phường Vĩnh Tuy',
    ),
    96 => 
    array (
      0 => 97,
      1 => 7,
      2 => 'Phường Bạch Mai',
    ),
    97 => 
    array (
      0 => 98,
      1 => 7,
      2 => 'Phường Quỳnh Mai',
    ),
    98 => 
    array (
      0 => 99,
      1 => 7,
      2 => 'Phường Quỳnh Lôi',
    ),
    99 => 
    array (
      0 => 100,
      1 => 7,
      2 => 'Phường Minh Khai',
    ),
    100 => 
    array (
      0 => 101,
      1 => 7,
      2 => 'Phường Trương Định',
    ),
    101 => 
    array (
      0 => 102,
      1 => 8,
      2 => 'Phường Thanh Trì',
    ),
    102 => 
    array (
      0 => 103,
      1 => 8,
      2 => 'Phường Vĩnh Hưng',
    ),
    103 => 
    array (
      0 => 104,
      1 => 8,
      2 => 'Phường Định Công',
    ),
    104 => 
    array (
      0 => 105,
      1 => 8,
      2 => 'Phường Mai Động',
    ),
    105 => 
    array (
      0 => 106,
      1 => 8,
      2 => 'Phường Tương Mai',
    ),
    106 => 
    array (
      0 => 107,
      1 => 8,
      2 => 'Phường Đại Kim',
    ),
    107 => 
    array (
      0 => 108,
      1 => 8,
      2 => 'Phường Tân Mai',
    ),
    108 => 
    array (
      0 => 109,
      1 => 8,
      2 => 'Phường Hoàng Văn Thụ',
    ),
    109 => 
    array (
      0 => 110,
      1 => 8,
      2 => 'Phường Giáp Bát',
    ),
    110 => 
    array (
      0 => 111,
      1 => 8,
      2 => 'Phường Lĩnh Nam',
    ),
    111 => 
    array (
      0 => 112,
      1 => 8,
      2 => 'Phường Thịnh Liệt',
    ),
    112 => 
    array (
      0 => 113,
      1 => 8,
      2 => 'Phường Trần Phú',
    ),
    113 => 
    array (
      0 => 114,
      1 => 8,
      2 => 'Phường Hoàng Liệt',
    ),
    114 => 
    array (
      0 => 115,
      1 => 8,
      2 => 'Phường Yên Sở',
    ),
    115 => 
    array (
      0 => 116,
      1 => 9,
      2 => 'Phường Nhân Chính',
    ),
    116 => 
    array (
      0 => 117,
      1 => 9,
      2 => 'Phường Thượng Đình',
    ),
    117 => 
    array (
      0 => 118,
      1 => 9,
      2 => 'Phường Khương Trung',
    ),
    118 => 
    array (
      0 => 119,
      1 => 9,
      2 => 'Phường Khương Mai',
    ),
    119 => 
    array (
      0 => 120,
      1 => 9,
      2 => 'Phường Thanh Xuân Trung',
    ),
    120 => 
    array (
      0 => 121,
      1 => 9,
      2 => 'Phường Phương Liệt',
    ),
    121 => 
    array (
      0 => 122,
      1 => 9,
      2 => 'Phường Hạ Đình',
    ),
    122 => 
    array (
      0 => 123,
      1 => 9,
      2 => 'Phường Khương Đình',
    ),
    123 => 
    array (
      0 => 124,
      1 => 9,
      2 => 'Phường Thanh Xuân Bắc',
    ),
    124 => 
    array (
      0 => 125,
      1 => 9,
      2 => 'Phường Thanh Xuân Nam',
    ),
    125 => 
    array (
      0 => 126,
      1 => 9,
      2 => 'Phường Kim Giang',
    ),
    126 => 
    array (
      0 => 127,
      1 => 10,
      2 => 'Thị trấn Sóc Sơn',
    ),
    127 => 
    array (
      0 => 128,
      1 => 10,
      2 => 'Xã Bắc Sơn',
    ),
    128 => 
    array (
      0 => 129,
      1 => 10,
      2 => 'Xã Minh Trí',
    ),
    129 => 
    array (
      0 => 130,
      1 => 10,
      2 => 'Xã Hồng Kỳ',
    ),
    130 => 
    array (
      0 => 131,
      1 => 10,
      2 => 'Xã Nam Sơn',
    ),
    131 => 
    array (
      0 => 132,
      1 => 10,
      2 => 'Xã Trung Giã',
    ),
    132 => 
    array (
      0 => 133,
      1 => 10,
      2 => 'Xã Tân Hưng',
    ),
    133 => 
    array (
      0 => 134,
      1 => 10,
      2 => 'Xã Minh Phú',
    ),
    134 => 
    array (
      0 => 135,
      1 => 10,
      2 => 'Xã Phù Linh',
    ),
    135 => 
    array (
      0 => 136,
      1 => 10,
      2 => 'Xã Bắc Phú',
    ),
    136 => 
    array (
      0 => 137,
      1 => 10,
      2 => 'Xã Tân Minh',
    ),
    137 => 
    array (
      0 => 138,
      1 => 10,
      2 => 'Xã Quang Tiến',
    ),
    138 => 
    array (
      0 => 139,
      1 => 10,
      2 => 'Xã Hiền Ninh',
    ),
    139 => 
    array (
      0 => 140,
      1 => 10,
      2 => 'Xã Tân Dân',
    ),
    140 => 
    array (
      0 => 141,
      1 => 10,
      2 => 'Xã Tiên Dược',
    ),
    141 => 
    array (
      0 => 142,
      1 => 10,
      2 => 'Xã Việt Long',
    ),
    142 => 
    array (
      0 => 143,
      1 => 10,
      2 => 'Xã Xuân Giang',
    ),
    143 => 
    array (
      0 => 144,
      1 => 10,
      2 => 'Xã Mai Đình',
    ),
    144 => 
    array (
      0 => 145,
      1 => 10,
      2 => 'Xã Đức Hoà',
    ),
    145 => 
    array (
      0 => 146,
      1 => 10,
      2 => 'Xã Thanh Xuân',
    ),
    146 => 
    array (
      0 => 147,
      1 => 10,
      2 => 'Xã Đông Xuân',
    ),
    147 => 
    array (
      0 => 148,
      1 => 10,
      2 => 'Xã Kim Lũ',
    ),
    148 => 
    array (
      0 => 149,
      1 => 10,
      2 => 'Xã Phú Cường',
    ),
    149 => 
    array (
      0 => 150,
      1 => 10,
      2 => 'Xã Phú Minh',
    ),
    150 => 
    array (
      0 => 151,
      1 => 10,
      2 => 'Xã Phù Lỗ',
    ),
    151 => 
    array (
      0 => 152,
      1 => 10,
      2 => 'Xã Xuân Thu',
    ),
    152 => 
    array (
      0 => 153,
      1 => 11,
      2 => 'Thị trấn Đông Anh',
    ),
    153 => 
    array (
      0 => 154,
      1 => 11,
      2 => 'Xã Xuân Nộn',
    ),
    154 => 
    array (
      0 => 155,
      1 => 11,
      2 => 'Xã Thuỵ Lâm',
    ),
    155 => 
    array (
      0 => 156,
      1 => 11,
      2 => 'Xã Bắc Hồng',
    ),
    156 => 
    array (
      0 => 157,
      1 => 11,
      2 => 'Xã Nguyên Khê',
    ),
    157 => 
    array (
      0 => 158,
      1 => 11,
      2 => 'Xã Nam Hồng',
    ),
    158 => 
    array (
      0 => 159,
      1 => 11,
      2 => 'Xã Tiên Dương',
    ),
    159 => 
    array (
      0 => 160,
      1 => 11,
      2 => 'Xã Vân Hà',
    ),
    160 => 
    array (
      0 => 161,
      1 => 11,
      2 => 'Xã Uy Nỗ',
    ),
    161 => 
    array (
      0 => 162,
      1 => 11,
      2 => 'Xã Vân Nội',
    ),
    162 => 
    array (
      0 => 163,
      1 => 11,
      2 => 'Xã Liên Hà',
    ),
    163 => 
    array (
      0 => 164,
      1 => 11,
      2 => 'Xã Việt Hùng',
    ),
    164 => 
    array (
      0 => 165,
      1 => 11,
      2 => 'Xã Kim Nỗ',
    ),
    165 => 
    array (
      0 => 166,
      1 => 11,
      2 => 'Xã Kim Chung',
    ),
    166 => 
    array (
      0 => 167,
      1 => 11,
      2 => 'Xã Dục Tú',
    ),
    167 => 
    array (
      0 => 168,
      1 => 11,
      2 => 'Xã Đại Mạch',
    ),
    168 => 
    array (
      0 => 169,
      1 => 11,
      2 => 'Xã Vĩnh Ngọc',
    ),
    169 => 
    array (
      0 => 170,
      1 => 11,
      2 => 'Xã Cổ Loa',
    ),
    170 => 
    array (
      0 => 171,
      1 => 11,
      2 => 'Xã Hải Bối',
    ),
    171 => 
    array (
      0 => 172,
      1 => 11,
      2 => 'Xã Xuân Canh',
    ),
    172 => 
    array (
      0 => 173,
      1 => 11,
      2 => 'Xã Võng La',
    ),
    173 => 
    array (
      0 => 174,
      1 => 11,
      2 => 'Xã Tàm Xá',
    ),
    174 => 
    array (
      0 => 175,
      1 => 11,
      2 => 'Xã Mai Lâm',
    ),
    175 => 
    array (
      0 => 176,
      1 => 11,
      2 => 'Xã Đông Hội',
    ),
    176 => 
    array (
      0 => 177,
      1 => 12,
      2 => 'Thị trấn Yên Viên',
    ),
    177 => 
    array (
      0 => 178,
      1 => 12,
      2 => 'Xã Yên Thường',
    ),
    178 => 
    array (
      0 => 179,
      1 => 12,
      2 => 'Xã Yên Viên',
    ),
    179 => 
    array (
      0 => 180,
      1 => 12,
      2 => 'Xã Ninh Hiệp',
    ),
    180 => 
    array (
      0 => 181,
      1 => 12,
      2 => 'Xã Đình Xuyên',
    ),
    181 => 
    array (
      0 => 182,
      1 => 12,
      2 => 'Xã Dương Hà',
    ),
    182 => 
    array (
      0 => 183,
      1 => 12,
      2 => 'Xã Phù Đổng',
    ),
    183 => 
    array (
      0 => 184,
      1 => 12,
      2 => 'Xã Trung Mầu',
    ),
    184 => 
    array (
      0 => 185,
      1 => 12,
      2 => 'Xã Lệ Chi',
    ),
    185 => 
    array (
      0 => 186,
      1 => 12,
      2 => 'Xã Cổ Bi',
    ),
    186 => 
    array (
      0 => 187,
      1 => 12,
      2 => 'Xã Đặng Xá',
    ),
    187 => 
    array (
      0 => 188,
      1 => 12,
      2 => 'Xã Phú Thị',
    ),
    188 => 
    array (
      0 => 189,
      1 => 12,
      2 => 'Xã Kim Sơn',
    ),
    189 => 
    array (
      0 => 190,
      1 => 12,
      2 => 'Thị trấn Trâu Quỳ',
    ),
    190 => 
    array (
      0 => 191,
      1 => 12,
      2 => 'Xã Dương Quang',
    ),
    191 => 
    array (
      0 => 192,
      1 => 12,
      2 => 'Xã Dương Xá',
    ),
    192 => 
    array (
      0 => 193,
      1 => 12,
      2 => 'Xã Đông Dư',
    ),
    193 => 
    array (
      0 => 194,
      1 => 12,
      2 => 'Xã Đa Tốn',
    ),
    194 => 
    array (
      0 => 195,
      1 => 12,
      2 => 'Xã Kiêu Kỵ',
    ),
    195 => 
    array (
      0 => 196,
      1 => 12,
      2 => 'Xã Bát Tràng',
    ),
    196 => 
    array (
      0 => 197,
      1 => 12,
      2 => 'Xã Kim Lan',
    ),
    197 => 
    array (
      0 => 198,
      1 => 12,
      2 => 'Xã Văn Đức',
    ),
    198 => 
    array (
      0 => 199,
      1 => 13,
      2 => 'Phường Cầu Diễn',
    ),
    199 => 
    array (
      0 => 200,
      1 => 13,
      2 => 'Phường Xuân Phương',
    ),
    200 => 
    array (
      0 => 201,
      1 => 13,
      2 => 'Phường Phương Canh',
    ),
    201 => 
    array (
      0 => 202,
      1 => 13,
      2 => 'Phường Mỹ Đình 1',
    ),
    202 => 
    array (
      0 => 203,
      1 => 13,
      2 => 'Phường Mỹ Đình 2',
    ),
    203 => 
    array (
      0 => 204,
      1 => 13,
      2 => 'Phường Tây Mỗ',
    ),
    204 => 
    array (
      0 => 205,
      1 => 13,
      2 => 'Phường Mễ Trì',
    ),
    205 => 
    array (
      0 => 206,
      1 => 13,
      2 => 'Phường Phú Đô',
    ),
    206 => 
    array (
      0 => 207,
      1 => 13,
      2 => 'Phường Đại Mỗ',
    ),
    207 => 
    array (
      0 => 208,
      1 => 13,
      2 => 'Phường Trung Văn',
    ),
    208 => 
    array (
      0 => 209,
      1 => 14,
      2 => 'Thị trấn Văn Điển',
    ),
    209 => 
    array (
      0 => 210,
      1 => 14,
      2 => 'Xã Tân Triều',
    ),
    210 => 
    array (
      0 => 211,
      1 => 14,
      2 => 'Xã Thanh Liệt',
    ),
    211 => 
    array (
      0 => 212,
      1 => 14,
      2 => 'Xã Tả Thanh Oai',
    ),
    212 => 
    array (
      0 => 213,
      1 => 14,
      2 => 'Xã Hữu Hoà',
    ),
    213 => 
    array (
      0 => 214,
      1 => 14,
      2 => 'Xã Tam Hiệp',
    ),
    214 => 
    array (
      0 => 215,
      1 => 14,
      2 => 'Xã Tứ Hiệp',
    ),
    215 => 
    array (
      0 => 216,
      1 => 14,
      2 => 'Xã Yên Mỹ',
    ),
    216 => 
    array (
      0 => 217,
      1 => 14,
      2 => 'Xã Vĩnh Quỳnh',
    ),
    217 => 
    array (
      0 => 218,
      1 => 14,
      2 => 'Xã Ngũ Hiệp',
    ),
    218 => 
    array (
      0 => 219,
      1 => 14,
      2 => 'Xã Duyên Hà',
    ),
    219 => 
    array (
      0 => 220,
      1 => 14,
      2 => 'Xã Ngọc Hồi',
    ),
    220 => 
    array (
      0 => 221,
      1 => 14,
      2 => 'Xã Vạn Phúc',
    ),
    221 => 
    array (
      0 => 222,
      1 => 14,
      2 => 'Xã Đại áng',
    ),
    222 => 
    array (
      0 => 223,
      1 => 14,
      2 => 'Xã Liên Ninh',
    ),
    223 => 
    array (
      0 => 224,
      1 => 14,
      2 => 'Xã Đông Mỹ',
    ),
    224 => 
    array (
      0 => 225,
      1 => 15,
      2 => 'Phường Thượng Cát',
    ),
    225 => 
    array (
      0 => 226,
      1 => 15,
      2 => 'Phường Liên Mạc',
    ),
    226 => 
    array (
      0 => 227,
      1 => 15,
      2 => 'Phường Đông Ngạc',
    ),
    227 => 
    array (
      0 => 228,
      1 => 15,
      2 => 'Phường Đức Thắng',
    ),
    228 => 
    array (
      0 => 229,
      1 => 15,
      2 => 'Phường Thụy Phương',
    ),
    229 => 
    array (
      0 => 230,
      1 => 15,
      2 => 'Phường Tây Tựu',
    ),
    230 => 
    array (
      0 => 231,
      1 => 15,
      2 => 'Phường Xuân Đỉnh',
    ),
    231 => 
    array (
      0 => 232,
      1 => 15,
      2 => 'Phường Xuân Tảo',
    ),
    232 => 
    array (
      0 => 233,
      1 => 15,
      2 => 'Phường Minh Khai',
    ),
    233 => 
    array (
      0 => 234,
      1 => 15,
      2 => 'Phường Cổ Nhuế 1',
    ),
    234 => 
    array (
      0 => 235,
      1 => 15,
      2 => 'Phường Cổ Nhuế 2',
    ),
    235 => 
    array (
      0 => 236,
      1 => 15,
      2 => 'Phường Phú Diễn',
    ),
    236 => 
    array (
      0 => 237,
      1 => 15,
      2 => 'Phường Phúc Diễn',
    ),
    237 => 
    array (
      0 => 238,
      1 => 16,
      2 => 'Thị trấn Chi Đông',
    ),
    238 => 
    array (
      0 => 239,
      1 => 16,
      2 => 'Xã Đại Thịnh',
    ),
    239 => 
    array (
      0 => 240,
      1 => 16,
      2 => 'Xã Kim Hoa',
    ),
    240 => 
    array (
      0 => 241,
      1 => 16,
      2 => 'Xã Thạch Đà',
    ),
    241 => 
    array (
      0 => 242,
      1 => 16,
      2 => 'Xã Tiến Thắng',
    ),
    242 => 
    array (
      0 => 243,
      1 => 16,
      2 => 'Xã Tự Lập',
    ),
    243 => 
    array (
      0 => 244,
      1 => 16,
      2 => 'Thị trấn Quang Minh',
    ),
    244 => 
    array (
      0 => 245,
      1 => 16,
      2 => 'Xã Thanh Lâm',
    ),
    245 => 
    array (
      0 => 246,
      1 => 16,
      2 => 'Xã Tam Đồng',
    ),
    246 => 
    array (
      0 => 247,
      1 => 16,
      2 => 'Xã Liên Mạc',
    ),
    247 => 
    array (
      0 => 248,
      1 => 16,
      2 => 'Xã Vạn Yên',
    ),
    248 => 
    array (
      0 => 249,
      1 => 16,
      2 => 'Xã Chu Phan',
    ),
    249 => 
    array (
      0 => 250,
      1 => 16,
      2 => 'Xã Tiến Thịnh',
    ),
    250 => 
    array (
      0 => 251,
      1 => 16,
      2 => 'Xã Mê Linh',
    ),
    251 => 
    array (
      0 => 252,
      1 => 16,
      2 => 'Xã Văn Khê',
    ),
    252 => 
    array (
      0 => 253,
      1 => 16,
      2 => 'Xã Hoàng Kim',
    ),
    253 => 
    array (
      0 => 254,
      1 => 16,
      2 => 'Xã Tiền Phong',
    ),
    254 => 
    array (
      0 => 255,
      1 => 16,
      2 => 'Xã Tráng Việt',
    ),
    255 => 
    array (
      0 => 256,
      1 => 17,
      2 => 'Phường Nguyễn Trãi',
    ),
    256 => 
    array (
      0 => 257,
      1 => 17,
      2 => 'Phường Mộ Lao',
    ),
    257 => 
    array (
      0 => 258,
      1 => 17,
      2 => 'Phường Văn Quán',
    ),
    258 => 
    array (
      0 => 259,
      1 => 17,
      2 => 'Phường Vạn Phúc',
    ),
    259 => 
    array (
      0 => 260,
      1 => 17,
      2 => 'Phường Yết Kiêu',
    ),
    260 => 
    array (
      0 => 261,
      1 => 17,
      2 => 'Phường Quang Trung',
    ),
    261 => 
    array (
      0 => 262,
      1 => 17,
      2 => 'Phường La Khê',
    ),
    262 => 
    array (
      0 => 263,
      1 => 17,
      2 => 'Phường Phú La',
    ),
    263 => 
    array (
      0 => 264,
      1 => 17,
      2 => 'Phường Phúc La',
    ),
    264 => 
    array (
      0 => 265,
      1 => 17,
      2 => 'Phường Hà Cầu',
    ),
    265 => 
    array (
      0 => 266,
      1 => 17,
      2 => 'Phường Yên Nghĩa',
    ),
    266 => 
    array (
      0 => 267,
      1 => 17,
      2 => 'Phường Kiến Hưng',
    ),
    267 => 
    array (
      0 => 268,
      1 => 17,
      2 => 'Phường Phú Lãm',
    ),
    268 => 
    array (
      0 => 269,
      1 => 17,
      2 => 'Phường Phú Lương',
    ),
    269 => 
    array (
      0 => 270,
      1 => 17,
      2 => 'Phường Dương Nội',
    ),
    270 => 
    array (
      0 => 271,
      1 => 17,
      2 => 'Phường Đồng Mai',
    ),
    271 => 
    array (
      0 => 272,
      1 => 17,
      2 => 'Phường Biên Giang',
    ),
    272 => 
    array (
      0 => 273,
      1 => 18,
      2 => 'Phường Lê Lợi',
    ),
    273 => 
    array (
      0 => 274,
      1 => 18,
      2 => 'Phường Phú Thịnh',
    ),
    274 => 
    array (
      0 => 275,
      1 => 18,
      2 => 'Phường Ngô Quyền',
    ),
    275 => 
    array (
      0 => 276,
      1 => 18,
      2 => 'Phường Quang Trung',
    ),
    276 => 
    array (
      0 => 277,
      1 => 18,
      2 => 'Phường Sơn Lộc',
    ),
    277 => 
    array (
      0 => 278,
      1 => 18,
      2 => 'Phường Xuân Khanh',
    ),
    278 => 
    array (
      0 => 279,
      1 => 18,
      2 => 'Xã Đường Lâm',
    ),
    279 => 
    array (
      0 => 280,
      1 => 18,
      2 => 'Phường Viên Sơn',
    ),
    280 => 
    array (
      0 => 281,
      1 => 18,
      2 => 'Xã Xuân Sơn',
    ),
    281 => 
    array (
      0 => 282,
      1 => 18,
      2 => 'Phường Trung Hưng',
    ),
    282 => 
    array (
      0 => 283,
      1 => 18,
      2 => 'Xã Thanh Mỹ',
    ),
    283 => 
    array (
      0 => 284,
      1 => 18,
      2 => 'Phường Trung Sơn Trầm',
    ),
    284 => 
    array (
      0 => 285,
      1 => 18,
      2 => 'Xã Kim Sơn',
    ),
    285 => 
    array (
      0 => 286,
      1 => 18,
      2 => 'Xã Sơn Đông',
    ),
    286 => 
    array (
      0 => 287,
      1 => 18,
      2 => 'Xã Cổ Đông',
    ),
    287 => 
    array (
      0 => 288,
      1 => 19,
      2 => 'Thị trấn Tây Đằng',
    ),
    288 => 
    array (
      0 => 289,
      1 => 19,
      2 => 'Xã Phú Cường',
    ),
    289 => 
    array (
      0 => 290,
      1 => 19,
      2 => 'Xã Cổ Đô',
    ),
    290 => 
    array (
      0 => 291,
      1 => 19,
      2 => 'Xã Tản Hồng',
    ),
    291 => 
    array (
      0 => 292,
      1 => 19,
      2 => 'Xã Vạn Thắng',
    ),
    292 => 
    array (
      0 => 293,
      1 => 19,
      2 => 'Xã Châu Sơn',
    ),
    293 => 
    array (
      0 => 294,
      1 => 19,
      2 => 'Xã Phong Vân',
    ),
    294 => 
    array (
      0 => 295,
      1 => 19,
      2 => 'Xã Phú Đông',
    ),
    295 => 
    array (
      0 => 296,
      1 => 19,
      2 => 'Xã Phú Phương',
    ),
    296 => 
    array (
      0 => 297,
      1 => 19,
      2 => 'Xã Phú Châu',
    ),
    297 => 
    array (
      0 => 298,
      1 => 19,
      2 => 'Xã Thái Hòa',
    ),
    298 => 
    array (
      0 => 299,
      1 => 19,
      2 => 'Xã Đồng Thái',
    ),
    299 => 
    array (
      0 => 300,
      1 => 19,
      2 => 'Xã Phú Sơn',
    ),
    300 => 
    array (
      0 => 301,
      1 => 19,
      2 => 'Xã Minh Châu',
    ),
    301 => 
    array (
      0 => 302,
      1 => 19,
      2 => 'Xã Vật Lại',
    ),
    302 => 
    array (
      0 => 303,
      1 => 19,
      2 => 'Xã Chu Minh',
    ),
    303 => 
    array (
      0 => 304,
      1 => 19,
      2 => 'Xã Tòng Bạt',
    ),
    304 => 
    array (
      0 => 305,
      1 => 19,
      2 => 'Xã Cẩm Lĩnh',
    ),
    305 => 
    array (
      0 => 306,
      1 => 19,
      2 => 'Xã Sơn Đà',
    ),
    306 => 
    array (
      0 => 307,
      1 => 19,
      2 => 'Xã Đông Quang',
    ),
    307 => 
    array (
      0 => 308,
      1 => 19,
      2 => 'Xã Tiên Phong',
    ),
    308 => 
    array (
      0 => 309,
      1 => 19,
      2 => 'Xã Thụy An',
    ),
    309 => 
    array (
      0 => 310,
      1 => 19,
      2 => 'Xã Cam Thượng',
    ),
    310 => 
    array (
      0 => 311,
      1 => 19,
      2 => 'Xã Thuần Mỹ',
    ),
    311 => 
    array (
      0 => 312,
      1 => 19,
      2 => 'Xã Tản Lĩnh',
    ),
    312 => 
    array (
      0 => 313,
      1 => 19,
      2 => 'Xã Ba Trại',
    ),
    313 => 
    array (
      0 => 314,
      1 => 19,
      2 => 'Xã Minh Quang',
    ),
    314 => 
    array (
      0 => 315,
      1 => 19,
      2 => 'Xã Ba Vì',
    ),
    315 => 
    array (
      0 => 316,
      1 => 19,
      2 => 'Xã Vân Hòa',
    ),
    316 => 
    array (
      0 => 317,
      1 => 19,
      2 => 'Xã Yên Bài',
    ),
    317 => 
    array (
      0 => 318,
      1 => 19,
      2 => 'Xã Khánh Thượng',
    ),
    318 => 
    array (
      0 => 319,
      1 => 20,
      2 => 'Thị trấn Phúc Thọ',
    ),
    319 => 
    array (
      0 => 320,
      1 => 20,
      2 => 'Xã Vân Hà',
    ),
    320 => 
    array (
      0 => 321,
      1 => 20,
      2 => 'Xã Vân Phúc',
    ),
    321 => 
    array (
      0 => 322,
      1 => 20,
      2 => 'Xã Vân Nam',
    ),
    322 => 
    array (
      0 => 323,
      1 => 20,
      2 => 'Xã Xuân Đình',
    ),
    323 => 
    array (
      0 => 324,
      1 => 20,
      2 => 'Xã Sen Phương',
    ),
    324 => 
    array (
      0 => 325,
      1 => 20,
      2 => 'Xã Võng Xuyên',
    ),
    325 => 
    array (
      0 => 326,
      1 => 20,
      2 => 'Xã Thọ Lộc',
    ),
    326 => 
    array (
      0 => 327,
      1 => 20,
      2 => 'Xã Long Xuyên',
    ),
    327 => 
    array (
      0 => 328,
      1 => 20,
      2 => 'Xã Thượng Cốc',
    ),
    328 => 
    array (
      0 => 329,
      1 => 20,
      2 => 'Xã Hát Môn',
    ),
    329 => 
    array (
      0 => 330,
      1 => 20,
      2 => 'Xã Tích Giang',
    ),
    330 => 
    array (
      0 => 331,
      1 => 20,
      2 => 'Xã Thanh Đa',
    ),
    331 => 
    array (
      0 => 332,
      1 => 20,
      2 => 'Xã Trạch Mỹ Lộc',
    ),
    332 => 
    array (
      0 => 333,
      1 => 20,
      2 => 'Xã Phúc Hòa',
    ),
    333 => 
    array (
      0 => 334,
      1 => 20,
      2 => 'Xã Ngọc Tảo',
    ),
    334 => 
    array (
      0 => 335,
      1 => 20,
      2 => 'Xã Phụng Thượng',
    ),
    335 => 
    array (
      0 => 336,
      1 => 20,
      2 => 'Xã Tam Thuấn',
    ),
    336 => 
    array (
      0 => 337,
      1 => 20,
      2 => 'Xã Tam Hiệp',
    ),
    337 => 
    array (
      0 => 338,
      1 => 20,
      2 => 'Xã Hiệp Thuận',
    ),
    338 => 
    array (
      0 => 339,
      1 => 20,
      2 => 'Xã Liên Hiệp',
    ),
    339 => 
    array (
      0 => 340,
      1 => 21,
      2 => 'Thị trấn Phùng',
    ),
    340 => 
    array (
      0 => 341,
      1 => 21,
      2 => 'Xã Trung Châu',
    ),
    341 => 
    array (
      0 => 342,
      1 => 21,
      2 => 'Xã Thọ An',
    ),
    342 => 
    array (
      0 => 343,
      1 => 21,
      2 => 'Xã Thọ Xuân',
    ),
    343 => 
    array (
      0 => 344,
      1 => 21,
      2 => 'Xã Hồng Hà',
    ),
    344 => 
    array (
      0 => 345,
      1 => 21,
      2 => 'Xã Liên Hồng',
    ),
    345 => 
    array (
      0 => 346,
      1 => 21,
      2 => 'Xã Liên Hà',
    ),
    346 => 
    array (
      0 => 347,
      1 => 21,
      2 => 'Xã Hạ Mỗ',
    ),
    347 => 
    array (
      0 => 348,
      1 => 21,
      2 => 'Xã Liên Trung',
    ),
    348 => 
    array (
      0 => 349,
      1 => 21,
      2 => 'Xã Phương Đình',
    ),
    349 => 
    array (
      0 => 350,
      1 => 21,
      2 => 'Xã Thượng Mỗ',
    ),
    350 => 
    array (
      0 => 351,
      1 => 21,
      2 => 'Xã Tân Hội',
    ),
    351 => 
    array (
      0 => 352,
      1 => 21,
      2 => 'Xã Tân Lập',
    ),
    352 => 
    array (
      0 => 353,
      1 => 21,
      2 => 'Xã Đan Phượng',
    ),
    353 => 
    array (
      0 => 354,
      1 => 21,
      2 => 'Xã Đồng Tháp',
    ),
    354 => 
    array (
      0 => 355,
      1 => 21,
      2 => 'Xã Song Phượng',
    ),
    355 => 
    array (
      0 => 356,
      1 => 22,
      2 => 'Thị trấn Trạm Trôi',
    ),
    356 => 
    array (
      0 => 357,
      1 => 22,
      2 => 'Xã Đức Thượng',
    ),
    357 => 
    array (
      0 => 358,
      1 => 22,
      2 => 'Xã Minh Khai',
    ),
    358 => 
    array (
      0 => 359,
      1 => 22,
      2 => 'Xã Dương Liễu',
    ),
    359 => 
    array (
      0 => 360,
      1 => 22,
      2 => 'Xã Di Trạch',
    ),
    360 => 
    array (
      0 => 361,
      1 => 22,
      2 => 'Xã Đức Giang',
    ),
    361 => 
    array (
      0 => 362,
      1 => 22,
      2 => 'Xã Cát Quế',
    ),
    362 => 
    array (
      0 => 363,
      1 => 22,
      2 => 'Xã Kim Chung',
    ),
    363 => 
    array (
      0 => 364,
      1 => 22,
      2 => 'Xã Yên Sở',
    ),
    364 => 
    array (
      0 => 365,
      1 => 22,
      2 => 'Xã Sơn Đồng',
    ),
    365 => 
    array (
      0 => 366,
      1 => 22,
      2 => 'Xã Vân Canh',
    ),
    366 => 
    array (
      0 => 367,
      1 => 22,
      2 => 'Xã Đắc Sở',
    ),
    367 => 
    array (
      0 => 368,
      1 => 22,
      2 => 'Xã Lại Yên',
    ),
    368 => 
    array (
      0 => 369,
      1 => 22,
      2 => 'Xã Tiền Yên',
    ),
    369 => 
    array (
      0 => 370,
      1 => 22,
      2 => 'Xã Song Phương',
    ),
    370 => 
    array (
      0 => 371,
      1 => 22,
      2 => 'Xã An Khánh',
    ),
    371 => 
    array (
      0 => 372,
      1 => 22,
      2 => 'Xã An Thượng',
    ),
    372 => 
    array (
      0 => 373,
      1 => 22,
      2 => 'Xã Vân Côn',
    ),
    373 => 
    array (
      0 => 374,
      1 => 22,
      2 => 'Xã La Phù',
    ),
    374 => 
    array (
      0 => 375,
      1 => 22,
      2 => 'Xã Đông La',
    ),
    375 => 
    array (
      0 => 376,
      1 => 23,
      2 => 'Xã Đông Xuân',
    ),
    376 => 
    array (
      0 => 377,
      1 => 23,
      2 => 'Thị trấn Quốc Oai',
    ),
    377 => 
    array (
      0 => 378,
      1 => 23,
      2 => 'Xã Sài Sơn',
    ),
    378 => 
    array (
      0 => 379,
      1 => 23,
      2 => 'Xã Phượng Cách',
    ),
    379 => 
    array (
      0 => 380,
      1 => 23,
      2 => 'Xã Yên Sơn',
    ),
    380 => 
    array (
      0 => 381,
      1 => 23,
      2 => 'Xã Ngọc Liệp',
    ),
    381 => 
    array (
      0 => 382,
      1 => 23,
      2 => 'Xã Ngọc Mỹ',
    ),
    382 => 
    array (
      0 => 383,
      1 => 23,
      2 => 'Xã Liệp Tuyết',
    ),
    383 => 
    array (
      0 => 384,
      1 => 23,
      2 => 'Xã Thạch Thán',
    ),
    384 => 
    array (
      0 => 385,
      1 => 23,
      2 => 'Xã Đồng Quang',
    ),
    385 => 
    array (
      0 => 386,
      1 => 23,
      2 => 'Xã Phú Cát',
    ),
    386 => 
    array (
      0 => 387,
      1 => 23,
      2 => 'Xã Tuyết Nghĩa',
    ),
    387 => 
    array (
      0 => 388,
      1 => 23,
      2 => 'Xã Nghĩa Hương',
    ),
    388 => 
    array (
      0 => 389,
      1 => 23,
      2 => 'Xã Cộng Hòa',
    ),
    389 => 
    array (
      0 => 390,
      1 => 23,
      2 => 'Xã Tân Phú',
    ),
    390 => 
    array (
      0 => 391,
      1 => 23,
      2 => 'Xã Đại Thành',
    ),
    391 => 
    array (
      0 => 392,
      1 => 23,
      2 => 'Xã Phú Mãn',
    ),
    392 => 
    array (
      0 => 393,
      1 => 23,
      2 => 'Xã Cấn Hữu',
    ),
    393 => 
    array (
      0 => 394,
      1 => 23,
      2 => 'Xã Tân Hòa',
    ),
    394 => 
    array (
      0 => 395,
      1 => 23,
      2 => 'Xã Hòa Thạch',
    ),
    395 => 
    array (
      0 => 396,
      1 => 23,
      2 => 'Xã Đông Yên',
    ),
    396 => 
    array (
      0 => 397,
      1 => 24,
      2 => 'Xã Yên Trung',
    ),
    397 => 
    array (
      0 => 398,
      1 => 24,
      2 => 'Xã Yên Bình',
    ),
    398 => 
    array (
      0 => 399,
      1 => 24,
      2 => 'Xã Tiến Xuân',
    ),
    399 => 
    array (
      0 => 400,
      1 => 24,
      2 => 'Thị trấn Liên Quan',
    ),
    400 => 
    array (
      0 => 401,
      1 => 24,
      2 => 'Xã Đại Đồng',
    ),
    401 => 
    array (
      0 => 402,
      1 => 24,
      2 => 'Xã Cẩm Yên',
    ),
    402 => 
    array (
      0 => 403,
      1 => 24,
      2 => 'Xã Lại Thượng',
    ),
    403 => 
    array (
      0 => 404,
      1 => 24,
      2 => 'Xã Phú Kim',
    ),
    404 => 
    array (
      0 => 405,
      1 => 24,
      2 => 'Xã Hương Ngải',
    ),
    405 => 
    array (
      0 => 406,
      1 => 24,
      2 => 'Xã Canh Nậu',
    ),
    406 => 
    array (
      0 => 407,
      1 => 24,
      2 => 'Xã Kim Quan',
    ),
    407 => 
    array (
      0 => 408,
      1 => 24,
      2 => 'Xã Dị Nậu',
    ),
    408 => 
    array (
      0 => 409,
      1 => 24,
      2 => 'Xã Bình Yên',
    ),
    409 => 
    array (
      0 => 410,
      1 => 24,
      2 => 'Xã Chàng Sơn',
    ),
    410 => 
    array (
      0 => 411,
      1 => 24,
      2 => 'Xã Thạch Hoà',
    ),
    411 => 
    array (
      0 => 412,
      1 => 24,
      2 => 'Xã Cần Kiệm',
    ),
    412 => 
    array (
      0 => 413,
      1 => 24,
      2 => 'Xã Hữu Bằng',
    ),
    413 => 
    array (
      0 => 414,
      1 => 24,
      2 => 'Xã Phùng Xá',
    ),
    414 => 
    array (
      0 => 415,
      1 => 24,
      2 => 'Xã Tân Xã',
    ),
    415 => 
    array (
      0 => 416,
      1 => 24,
      2 => 'Xã Thạch Xá',
    ),
    416 => 
    array (
      0 => 417,
      1 => 24,
      2 => 'Xã Bình Phú',
    ),
    417 => 
    array (
      0 => 418,
      1 => 24,
      2 => 'Xã Hạ Bằng',
    ),
    418 => 
    array (
      0 => 419,
      1 => 24,
      2 => 'Xã Đồng Trúc',
    ),
    419 => 
    array (
      0 => 420,
      1 => 25,
      2 => 'Thị trấn Chúc Sơn',
    ),
    420 => 
    array (
      0 => 421,
      1 => 25,
      2 => 'Thị trấn Xuân Mai',
    ),
    421 => 
    array (
      0 => 422,
      1 => 25,
      2 => 'Xã Phụng Châu',
    ),
    422 => 
    array (
      0 => 423,
      1 => 25,
      2 => 'Xã Tiên Phương',
    ),
    423 => 
    array (
      0 => 424,
      1 => 25,
      2 => 'Xã Đông Sơn',
    ),
    424 => 
    array (
      0 => 425,
      1 => 25,
      2 => 'Xã Đông Phương Yên',
    ),
    425 => 
    array (
      0 => 426,
      1 => 25,
      2 => 'Xã Phú Nghĩa',
    ),
    426 => 
    array (
      0 => 427,
      1 => 25,
      2 => 'Xã Trường Yên',
    ),
    427 => 
    array (
      0 => 428,
      1 => 25,
      2 => 'Xã Ngọc Hòa',
    ),
    428 => 
    array (
      0 => 429,
      1 => 25,
      2 => 'Xã Thủy Xuân Tiên',
    ),
    429 => 
    array (
      0 => 430,
      1 => 25,
      2 => 'Xã Thanh Bình',
    ),
    430 => 
    array (
      0 => 431,
      1 => 25,
      2 => 'Xã Trung Hòa',
    ),
    431 => 
    array (
      0 => 432,
      1 => 25,
      2 => 'Xã Đại Yên',
    ),
    432 => 
    array (
      0 => 433,
      1 => 25,
      2 => 'Xã Thụy Hương',
    ),
    433 => 
    array (
      0 => 434,
      1 => 25,
      2 => 'Xã Tốt Động',
    ),
    434 => 
    array (
      0 => 435,
      1 => 25,
      2 => 'Xã Lam Điền',
    ),
    435 => 
    array (
      0 => 436,
      1 => 25,
      2 => 'Xã Tân Tiến',
    ),
    436 => 
    array (
      0 => 437,
      1 => 25,
      2 => 'Xã Nam Phương Tiến',
    ),
    437 => 
    array (
      0 => 438,
      1 => 25,
      2 => 'Xã Hợp Đồng',
    ),
    438 => 
    array (
      0 => 439,
      1 => 25,
      2 => 'Xã Hoàng Văn Thụ',
    ),
    439 => 
    array (
      0 => 440,
      1 => 25,
      2 => 'Xã Hoàng Diệu',
    ),
    440 => 
    array (
      0 => 441,
      1 => 25,
      2 => 'Xã Hữu Văn',
    ),
    441 => 
    array (
      0 => 442,
      1 => 25,
      2 => 'Xã Quảng Bị',
    ),
    442 => 
    array (
      0 => 443,
      1 => 25,
      2 => 'Xã Mỹ Lương',
    ),
    443 => 
    array (
      0 => 444,
      1 => 25,
      2 => 'Xã Thượng Vực',
    ),
    444 => 
    array (
      0 => 445,
      1 => 25,
      2 => 'Xã Hồng Phong',
    ),
    445 => 
    array (
      0 => 446,
      1 => 25,
      2 => 'Xã Đồng Phú',
    ),
    446 => 
    array (
      0 => 447,
      1 => 25,
      2 => 'Xã Trần Phú',
    ),
    447 => 
    array (
      0 => 448,
      1 => 25,
      2 => 'Xã Văn Võ',
    ),
    448 => 
    array (
      0 => 449,
      1 => 25,
      2 => 'Xã Đồng Lạc',
    ),
    449 => 
    array (
      0 => 450,
      1 => 25,
      2 => 'Xã Hòa Chính',
    ),
    450 => 
    array (
      0 => 451,
      1 => 25,
      2 => 'Xã Phú Nam An',
    ),
    451 => 
    array (
      0 => 452,
      1 => 26,
      2 => 'Thị trấn Kim Bài',
    ),
    452 => 
    array (
      0 => 453,
      1 => 26,
      2 => 'Xã Cự Khê',
    ),
    453 => 
    array (
      0 => 454,
      1 => 26,
      2 => 'Xã Bích Hòa',
    ),
    454 => 
    array (
      0 => 455,
      1 => 26,
      2 => 'Xã Mỹ Hưng',
    ),
    455 => 
    array (
      0 => 456,
      1 => 26,
      2 => 'Xã Cao Viên',
    ),
    456 => 
    array (
      0 => 457,
      1 => 26,
      2 => 'Xã Bình Minh',
    ),
    457 => 
    array (
      0 => 458,
      1 => 26,
      2 => 'Xã Tam Hưng',
    ),
    458 => 
    array (
      0 => 459,
      1 => 26,
      2 => 'Xã Thanh Cao',
    ),
    459 => 
    array (
      0 => 460,
      1 => 26,
      2 => 'Xã Thanh Thùy',
    ),
    460 => 
    array (
      0 => 461,
      1 => 26,
      2 => 'Xã Thanh Mai',
    ),
    461 => 
    array (
      0 => 462,
      1 => 26,
      2 => 'Xã Thanh Văn',
    ),
    462 => 
    array (
      0 => 463,
      1 => 26,
      2 => 'Xã Đỗ Động',
    ),
    463 => 
    array (
      0 => 464,
      1 => 26,
      2 => 'Xã Kim An',
    ),
    464 => 
    array (
      0 => 465,
      1 => 26,
      2 => 'Xã Kim Thư',
    ),
    465 => 
    array (
      0 => 466,
      1 => 26,
      2 => 'Xã Phương Trung',
    ),
    466 => 
    array (
      0 => 467,
      1 => 26,
      2 => 'Xã Tân Ước',
    ),
    467 => 
    array (
      0 => 468,
      1 => 26,
      2 => 'Xã Dân Hòa',
    ),
    468 => 
    array (
      0 => 469,
      1 => 26,
      2 => 'Xã Liên Châu',
    ),
    469 => 
    array (
      0 => 470,
      1 => 26,
      2 => 'Xã Cao Dương',
    ),
    470 => 
    array (
      0 => 471,
      1 => 26,
      2 => 'Xã Xuân Dương',
    ),
    471 => 
    array (
      0 => 472,
      1 => 26,
      2 => 'Xã Hồng Dương',
    ),
    472 => 
    array (
      0 => 473,
      1 => 27,
      2 => 'Thị trấn Thường Tín',
    ),
    473 => 
    array (
      0 => 474,
      1 => 27,
      2 => 'Xã Ninh Sở',
    ),
    474 => 
    array (
      0 => 475,
      1 => 27,
      2 => 'Xã Nhị Khê',
    ),
    475 => 
    array (
      0 => 476,
      1 => 27,
      2 => 'Xã Duyên Thái',
    ),
    476 => 
    array (
      0 => 477,
      1 => 27,
      2 => 'Xã Khánh Hà',
    ),
    477 => 
    array (
      0 => 478,
      1 => 27,
      2 => 'Xã Hòa Bình',
    ),
    478 => 
    array (
      0 => 479,
      1 => 27,
      2 => 'Xã Văn Bình',
    ),
    479 => 
    array (
      0 => 480,
      1 => 27,
      2 => 'Xã Hiền Giang',
    ),
    480 => 
    array (
      0 => 481,
      1 => 27,
      2 => 'Xã Hồng Vân',
    ),
    481 => 
    array (
      0 => 482,
      1 => 27,
      2 => 'Xã Vân Tảo',
    ),
    482 => 
    array (
      0 => 483,
      1 => 27,
      2 => 'Xã Liên Phương',
    ),
    483 => 
    array (
      0 => 484,
      1 => 27,
      2 => 'Xã Văn Phú',
    ),
    484 => 
    array (
      0 => 485,
      1 => 27,
      2 => 'Xã Tự Nhiên',
    ),
    485 => 
    array (
      0 => 486,
      1 => 27,
      2 => 'Xã Tiền Phong',
    ),
    486 => 
    array (
      0 => 487,
      1 => 27,
      2 => 'Xã Hà Hồi',
    ),
    487 => 
    array (
      0 => 488,
      1 => 27,
      2 => 'Xã Thư Phú',
    ),
    488 => 
    array (
      0 => 489,
      1 => 27,
      2 => 'Xã Nguyễn Trãi',
    ),
    489 => 
    array (
      0 => 490,
      1 => 27,
      2 => 'Xã Quất Động',
    ),
    490 => 
    array (
      0 => 491,
      1 => 27,
      2 => 'Xã Chương Dương',
    ),
    491 => 
    array (
      0 => 492,
      1 => 27,
      2 => 'Xã Tân Minh',
    ),
    492 => 
    array (
      0 => 493,
      1 => 27,
      2 => 'Xã Lê Lợi',
    ),
    493 => 
    array (
      0 => 494,
      1 => 27,
      2 => 'Xã Thắng Lợi',
    ),
    494 => 
    array (
      0 => 495,
      1 => 27,
      2 => 'Xã Dũng Tiến',
    ),
    495 => 
    array (
      0 => 496,
      1 => 27,
      2 => 'Xã Thống Nhất',
    ),
    496 => 
    array (
      0 => 497,
      1 => 27,
      2 => 'Xã Nghiêm Xuyên',
    ),
    497 => 
    array (
      0 => 498,
      1 => 27,
      2 => 'Xã Tô Hiệu',
    ),
    498 => 
    array (
      0 => 499,
      1 => 27,
      2 => 'Xã Văn Tự',
    ),
    499 => 
    array (
      0 => 500,
      1 => 27,
      2 => 'Xã Vạn Điểm',
    ),
    500 => 
    array (
      0 => 501,
      1 => 27,
      2 => 'Xã Minh Cường',
    ),
    501 => 
    array (
      0 => 502,
      1 => 28,
      2 => 'Thị trấn Phú Minh',
    ),
    502 => 
    array (
      0 => 503,
      1 => 28,
      2 => 'Thị trấn Phú Xuyên',
    ),
    503 => 
    array (
      0 => 504,
      1 => 28,
      2 => 'Xã Hồng Minh',
    ),
    504 => 
    array (
      0 => 505,
      1 => 28,
      2 => 'Xã Phượng Dực',
    ),
    505 => 
    array (
      0 => 506,
      1 => 28,
      2 => 'Xã Nam Tiến',
    ),
    506 => 
    array (
      0 => 507,
      1 => 28,
      2 => 'Xã Tri Trung',
    ),
    507 => 
    array (
      0 => 508,
      1 => 28,
      2 => 'Xã Đại Thắng',
    ),
    508 => 
    array (
      0 => 509,
      1 => 28,
      2 => 'Xã Phú Túc',
    ),
    509 => 
    array (
      0 => 510,
      1 => 28,
      2 => 'Xã Văn Hoàng',
    ),
    510 => 
    array (
      0 => 511,
      1 => 28,
      2 => 'Xã Hồng Thái',
    ),
    511 => 
    array (
      0 => 512,
      1 => 28,
      2 => 'Xã Hoàng Long',
    ),
    512 => 
    array (
      0 => 513,
      1 => 28,
      2 => 'Xã Quang Trung',
    ),
    513 => 
    array (
      0 => 514,
      1 => 28,
      2 => 'Xã Nam Phong',
    ),
    514 => 
    array (
      0 => 515,
      1 => 28,
      2 => 'Xã Nam Triều',
    ),
    515 => 
    array (
      0 => 516,
      1 => 28,
      2 => 'Xã Tân Dân',
    ),
    516 => 
    array (
      0 => 517,
      1 => 28,
      2 => 'Xã Sơn Hà',
    ),
    517 => 
    array (
      0 => 518,
      1 => 28,
      2 => 'Xã Chuyên Mỹ',
    ),
    518 => 
    array (
      0 => 519,
      1 => 28,
      2 => 'Xã Khai Thái',
    ),
    519 => 
    array (
      0 => 520,
      1 => 28,
      2 => 'Xã Phúc Tiến',
    ),
    520 => 
    array (
      0 => 521,
      1 => 28,
      2 => 'Xã Vân Từ',
    ),
    521 => 
    array (
      0 => 522,
      1 => 28,
      2 => 'Xã Tri Thủy',
    ),
    522 => 
    array (
      0 => 523,
      1 => 28,
      2 => 'Xã Đại Xuyên',
    ),
    523 => 
    array (
      0 => 524,
      1 => 28,
      2 => 'Xã Phú Yên',
    ),
    524 => 
    array (
      0 => 525,
      1 => 28,
      2 => 'Xã Bạch Hạ',
    ),
    525 => 
    array (
      0 => 526,
      1 => 28,
      2 => 'Xã Quang Lãng',
    ),
    526 => 
    array (
      0 => 527,
      1 => 28,
      2 => 'Xã Châu Can',
    ),
    527 => 
    array (
      0 => 528,
      1 => 28,
      2 => 'Xã Minh Tân',
    ),
    528 => 
    array (
      0 => 529,
      1 => 29,
      2 => 'Thị trấn Vân Đình',
    ),
    529 => 
    array (
      0 => 530,
      1 => 29,
      2 => 'Xã Viên An',
    ),
    530 => 
    array (
      0 => 531,
      1 => 29,
      2 => 'Xã Viên Nội',
    ),
    531 => 
    array (
      0 => 532,
      1 => 29,
      2 => 'Xã Hoa Sơn',
    ),
    532 => 
    array (
      0 => 533,
      1 => 29,
      2 => 'Xã Quảng Phú Cầu',
    ),
    533 => 
    array (
      0 => 534,
      1 => 29,
      2 => 'Xã Trường Thịnh',
    ),
    534 => 
    array (
      0 => 535,
      1 => 29,
      2 => 'Xã Cao Thành',
    ),
    535 => 
    array (
      0 => 536,
      1 => 29,
      2 => 'Xã Liên Bạt',
    ),
    536 => 
    array (
      0 => 537,
      1 => 29,
      2 => 'Xã Sơn Công',
    ),
    537 => 
    array (
      0 => 538,
      1 => 29,
      2 => 'Xã Đồng Tiến',
    ),
    538 => 
    array (
      0 => 539,
      1 => 29,
      2 => 'Xã Phương Tú',
    ),
    539 => 
    array (
      0 => 540,
      1 => 29,
      2 => 'Xã Trung Tú',
    ),
    540 => 
    array (
      0 => 541,
      1 => 29,
      2 => 'Xã Đồng Tân',
    ),
    541 => 
    array (
      0 => 542,
      1 => 29,
      2 => 'Xã Tảo Dương Văn',
    ),
    542 => 
    array (
      0 => 543,
      1 => 29,
      2 => 'Xã Vạn Thái',
    ),
    543 => 
    array (
      0 => 544,
      1 => 29,
      2 => 'Xã Minh Đức',
    ),
    544 => 
    array (
      0 => 545,
      1 => 29,
      2 => 'Xã Hòa Lâm',
    ),
    545 => 
    array (
      0 => 546,
      1 => 29,
      2 => 'Xã Hòa Xá',
    ),
    546 => 
    array (
      0 => 547,
      1 => 29,
      2 => 'Xã Trầm Lộng',
    ),
    547 => 
    array (
      0 => 548,
      1 => 29,
      2 => 'Xã Kim Đường',
    ),
    548 => 
    array (
      0 => 549,
      1 => 29,
      2 => 'Xã Hòa Nam',
    ),
    549 => 
    array (
      0 => 550,
      1 => 29,
      2 => 'Xã Hòa Phú',
    ),
    550 => 
    array (
      0 => 551,
      1 => 29,
      2 => 'Xã Đội Bình',
    ),
    551 => 
    array (
      0 => 552,
      1 => 29,
      2 => 'Xã Đại Hùng',
    ),
    552 => 
    array (
      0 => 553,
      1 => 29,
      2 => 'Xã Đông Lỗ',
    ),
    553 => 
    array (
      0 => 554,
      1 => 29,
      2 => 'Xã Phù Lưu',
    ),
    554 => 
    array (
      0 => 555,
      1 => 29,
      2 => 'Xã Đại Cường',
    ),
    555 => 
    array (
      0 => 556,
      1 => 29,
      2 => 'Xã Lưu Hoàng',
    ),
    556 => 
    array (
      0 => 557,
      1 => 29,
      2 => 'Xã Hồng Quang',
    ),
    557 => 
    array (
      0 => 558,
      1 => 30,
      2 => 'Thị trấn Đại Nghĩa',
    ),
    558 => 
    array (
      0 => 559,
      1 => 30,
      2 => 'Xã Đồng Tâm',
    ),
    559 => 
    array (
      0 => 560,
      1 => 30,
      2 => 'Xã Thượng Lâm',
    ),
    560 => 
    array (
      0 => 561,
      1 => 30,
      2 => 'Xã Tuy Lai',
    ),
    561 => 
    array (
      0 => 562,
      1 => 30,
      2 => 'Xã Phúc Lâm',
    ),
    562 => 
    array (
      0 => 563,
      1 => 30,
      2 => 'Xã Mỹ Thành',
    ),
    563 => 
    array (
      0 => 564,
      1 => 30,
      2 => 'Xã Bột Xuyên',
    ),
    564 => 
    array (
      0 => 565,
      1 => 30,
      2 => 'Xã An Mỹ',
    ),
    565 => 
    array (
      0 => 566,
      1 => 30,
      2 => 'Xã Hồng Sơn',
    ),
    566 => 
    array (
      0 => 567,
      1 => 30,
      2 => 'Xã Lê Thanh',
    ),
    567 => 
    array (
      0 => 568,
      1 => 30,
      2 => 'Xã Xuy Xá',
    ),
    568 => 
    array (
      0 => 569,
      1 => 30,
      2 => 'Xã Phùng Xá',
    ),
    569 => 
    array (
      0 => 570,
      1 => 30,
      2 => 'Xã Phù Lưu Tế',
    ),
    570 => 
    array (
      0 => 571,
      1 => 30,
      2 => 'Xã Đại Hưng',
    ),
    571 => 
    array (
      0 => 572,
      1 => 30,
      2 => 'Xã Vạn Kim',
    ),
    572 => 
    array (
      0 => 573,
      1 => 30,
      2 => 'Xã Đốc Tín',
    ),
    573 => 
    array (
      0 => 574,
      1 => 30,
      2 => 'Xã Hương Sơn',
    ),
    574 => 
    array (
      0 => 575,
      1 => 30,
      2 => 'Xã Hùng Tiến',
    ),
    575 => 
    array (
      0 => 576,
      1 => 30,
      2 => 'Xã An Tiến',
    ),
    576 => 
    array (
      0 => 577,
      1 => 30,
      2 => 'Xã Hợp Tiến',
    ),
    577 => 
    array (
      0 => 578,
      1 => 30,
      2 => 'Xã Hợp Thanh',
    ),
    578 => 
    array (
      0 => 579,
      1 => 30,
      2 => 'Xã An Phú',
    ),
    579 => 
    array (
      0 => 580,
      1 => 31,
      2 => 'Phường Quang Trung',
    ),
    580 => 
    array (
      0 => 581,
      1 => 31,
      2 => 'Phường Trần Phú',
    ),
    581 => 
    array (
      0 => 582,
      1 => 31,
      2 => 'Phường Ngọc Hà',
    ),
    582 => 
    array (
      0 => 583,
      1 => 31,
      2 => 'Phường Nguyễn Trãi',
    ),
    583 => 
    array (
      0 => 584,
      1 => 31,
      2 => 'Phường Minh Khai',
    ),
    584 => 
    array (
      0 => 585,
      1 => 31,
      2 => 'Xã Ngọc Đường',
    ),
    585 => 
    array (
      0 => 586,
      1 => 31,
      2 => 'Xã Phương Độ',
    ),
    586 => 
    array (
      0 => 587,
      1 => 31,
      2 => 'Xã Phương Thiện',
    ),
    587 => 
    array (
      0 => 588,
      1 => 32,
      2 => 'Thị trấn Phó Bảng',
    ),
    588 => 
    array (
      0 => 589,
      1 => 32,
      2 => 'Xã Lũng Cú',
    ),
    589 => 
    array (
      0 => 590,
      1 => 32,
      2 => 'Xã Má Lé',
    ),
    590 => 
    array (
      0 => 591,
      1 => 32,
      2 => 'Thị trấn Đồng Văn',
    ),
    591 => 
    array (
      0 => 592,
      1 => 32,
      2 => 'Xã Lũng Táo',
    ),
    592 => 
    array (
      0 => 593,
      1 => 32,
      2 => 'Xã Phố Là',
    ),
    593 => 
    array (
      0 => 594,
      1 => 32,
      2 => 'Xã Thài Phìn Tủng',
    ),
    594 => 
    array (
      0 => 595,
      1 => 32,
      2 => 'Xã Sủng Là',
    ),
    595 => 
    array (
      0 => 596,
      1 => 32,
      2 => 'Xã Xà Phìn',
    ),
    596 => 
    array (
      0 => 597,
      1 => 32,
      2 => 'Xã Tả Phìn',
    ),
    597 => 
    array (
      0 => 598,
      1 => 32,
      2 => 'Xã Tả Lủng',
    ),
    598 => 
    array (
      0 => 599,
      1 => 32,
      2 => 'Xã Phố Cáo',
    ),
    599 => 
    array (
      0 => 600,
      1 => 32,
      2 => 'Xã Sính Lủng',
    ),
    600 => 
    array (
      0 => 601,
      1 => 32,
      2 => 'Xã Sảng Tủng',
    ),
    601 => 
    array (
      0 => 602,
      1 => 32,
      2 => 'Xã Lũng Thầu',
    ),
    602 => 
    array (
      0 => 603,
      1 => 32,
      2 => 'Xã Hố Quáng Phìn',
    ),
    603 => 
    array (
      0 => 604,
      1 => 32,
      2 => 'Xã Vần Chải',
    ),
    604 => 
    array (
      0 => 605,
      1 => 32,
      2 => 'Xã Lũng Phìn',
    ),
    605 => 
    array (
      0 => 606,
      1 => 32,
      2 => 'Xã Sủng Trái',
    ),
    606 => 
    array (
      0 => 607,
      1 => 33,
      2 => 'Thị trấn Mèo Vạc',
    ),
    607 => 
    array (
      0 => 608,
      1 => 33,
      2 => 'Xã Thượng Phùng',
    ),
    608 => 
    array (
      0 => 609,
      1 => 33,
      2 => 'Xã Pải Lủng',
    ),
    609 => 
    array (
      0 => 610,
      1 => 33,
      2 => 'Xã Xín Cái',
    ),
    610 => 
    array (
      0 => 611,
      1 => 33,
      2 => 'Xã Pả Vi',
    ),
    611 => 
    array (
      0 => 612,
      1 => 33,
      2 => 'Xã Giàng Chu Phìn',
    ),
    612 => 
    array (
      0 => 613,
      1 => 33,
      2 => 'Xã Sủng Trà',
    ),
    613 => 
    array (
      0 => 614,
      1 => 33,
      2 => 'Xã Sủng Máng',
    ),
    614 => 
    array (
      0 => 615,
      1 => 33,
      2 => 'Xã Sơn Vĩ',
    ),
    615 => 
    array (
      0 => 616,
      1 => 33,
      2 => 'Xã Tả Lủng',
    ),
    616 => 
    array (
      0 => 617,
      1 => 33,
      2 => 'Xã Cán Chu Phìn',
    ),
    617 => 
    array (
      0 => 618,
      1 => 33,
      2 => 'Xã Lũng Pù',
    ),
    618 => 
    array (
      0 => 619,
      1 => 33,
      2 => 'Xã Lũng Chinh',
    ),
    619 => 
    array (
      0 => 620,
      1 => 33,
      2 => 'Xã Tát Ngà',
    ),
    620 => 
    array (
      0 => 621,
      1 => 33,
      2 => 'Xã Nậm Ban',
    ),
    621 => 
    array (
      0 => 622,
      1 => 33,
      2 => 'Xã Khâu Vai',
    ),
    622 => 
    array (
      0 => 623,
      1 => 33,
      2 => 'Xã Niêm Tòng',
    ),
    623 => 
    array (
      0 => 624,
      1 => 33,
      2 => 'Xã Niêm Sơn',
    ),
    624 => 
    array (
      0 => 625,
      1 => 34,
      2 => 'Thị trấn Yên Minh',
    ),
    625 => 
    array (
      0 => 626,
      1 => 34,
      2 => 'Xã Thắng Mố',
    ),
    626 => 
    array (
      0 => 627,
      1 => 34,
      2 => 'Xã Phú Lũng',
    ),
    627 => 
    array (
      0 => 628,
      1 => 34,
      2 => 'Xã Sủng Tráng',
    ),
    628 => 
    array (
      0 => 629,
      1 => 34,
      2 => 'Xã Bạch Đích',
    ),
    629 => 
    array (
      0 => 630,
      1 => 34,
      2 => 'Xã Na Khê',
    ),
    630 => 
    array (
      0 => 631,
      1 => 34,
      2 => 'Xã Sủng Thài',
    ),
    631 => 
    array (
      0 => 632,
      1 => 34,
      2 => 'Xã Hữu Vinh',
    ),
    632 => 
    array (
      0 => 633,
      1 => 34,
      2 => 'Xã Lao Và Chải',
    ),
    633 => 
    array (
      0 => 634,
      1 => 34,
      2 => 'Xã Mậu Duệ',
    ),
    634 => 
    array (
      0 => 635,
      1 => 34,
      2 => 'Xã Đông Minh',
    ),
    635 => 
    array (
      0 => 636,
      1 => 34,
      2 => 'Xã Mậu Long',
    ),
    636 => 
    array (
      0 => 637,
      1 => 34,
      2 => 'Xã Ngam La',
    ),
    637 => 
    array (
      0 => 638,
      1 => 34,
      2 => 'Xã Ngọc Long',
    ),
    638 => 
    array (
      0 => 639,
      1 => 34,
      2 => 'Xã Đường Thượng',
    ),
    639 => 
    array (
      0 => 640,
      1 => 34,
      2 => 'Xã Lũng Hồ',
    ),
    640 => 
    array (
      0 => 641,
      1 => 34,
      2 => 'Xã Du Tiến',
    ),
    641 => 
    array (
      0 => 642,
      1 => 34,
      2 => 'Xã Du Già',
    ),
    642 => 
    array (
      0 => 643,
      1 => 35,
      2 => 'Thị trấn Tam Sơn',
    ),
    643 => 
    array (
      0 => 644,
      1 => 35,
      2 => 'Xã Bát Đại Sơn',
    ),
    644 => 
    array (
      0 => 645,
      1 => 35,
      2 => 'Xã Nghĩa Thuận',
    ),
    645 => 
    array (
      0 => 646,
      1 => 35,
      2 => 'Xã Cán Tỷ',
    ),
    646 => 
    array (
      0 => 647,
      1 => 35,
      2 => 'Xã Cao Mã Pờ',
    ),
    647 => 
    array (
      0 => 648,
      1 => 35,
      2 => 'Xã Thanh Vân',
    ),
    648 => 
    array (
      0 => 649,
      1 => 35,
      2 => 'Xã Tùng Vài',
    ),
    649 => 
    array (
      0 => 650,
      1 => 35,
      2 => 'Xã Đông Hà',
    ),
    650 => 
    array (
      0 => 651,
      1 => 35,
      2 => 'Xã Quản Bạ',
    ),
    651 => 
    array (
      0 => 652,
      1 => 35,
      2 => 'Xã Lùng Tám',
    ),
    652 => 
    array (
      0 => 653,
      1 => 35,
      2 => 'Xã Quyết Tiến',
    ),
    653 => 
    array (
      0 => 654,
      1 => 35,
      2 => 'Xã Tả Ván',
    ),
    654 => 
    array (
      0 => 655,
      1 => 35,
      2 => 'Xã Thái An',
    ),
    655 => 
    array (
      0 => 656,
      1 => 36,
      2 => 'Xã Kim Thạch',
    ),
    656 => 
    array (
      0 => 657,
      1 => 36,
      2 => 'Xã Phú Linh',
    ),
    657 => 
    array (
      0 => 658,
      1 => 36,
      2 => 'Xã Kim Linh',
    ),
    658 => 
    array (
      0 => 659,
      1 => 36,
      2 => 'Thị trấn Vị Xuyên',
    ),
    659 => 
    array (
      0 => 660,
      1 => 36,
      2 => 'Thị trấn Nông Trường Việt Lâm',
    ),
    660 => 
    array (
      0 => 661,
      1 => 36,
      2 => 'Xã Minh Tân',
    ),
    661 => 
    array (
      0 => 662,
      1 => 36,
      2 => 'Xã Thuận Hoà',
    ),
    662 => 
    array (
      0 => 663,
      1 => 36,
      2 => 'Xã Tùng Bá',
    ),
    663 => 
    array (
      0 => 664,
      1 => 36,
      2 => 'Xã Thanh Thủy',
    ),
    664 => 
    array (
      0 => 665,
      1 => 36,
      2 => 'Xã Thanh Đức',
    ),
    665 => 
    array (
      0 => 666,
      1 => 36,
      2 => 'Xã Phong Quang',
    ),
    666 => 
    array (
      0 => 667,
      1 => 36,
      2 => 'Xã Xín Chải',
    ),
    667 => 
    array (
      0 => 668,
      1 => 36,
      2 => 'Xã Phương Tiến',
    ),
    668 => 
    array (
      0 => 669,
      1 => 36,
      2 => 'Xã Lao Chải',
    ),
    669 => 
    array (
      0 => 670,
      1 => 36,
      2 => 'Xã Cao Bồ',
    ),
    670 => 
    array (
      0 => 671,
      1 => 36,
      2 => 'Xã Đạo Đức',
    ),
    671 => 
    array (
      0 => 672,
      1 => 36,
      2 => 'Xã Thượng Sơn',
    ),
    672 => 
    array (
      0 => 673,
      1 => 36,
      2 => 'Xã Linh Hồ',
    ),
    673 => 
    array (
      0 => 674,
      1 => 36,
      2 => 'Xã Quảng Ngần',
    ),
    674 => 
    array (
      0 => 675,
      1 => 36,
      2 => 'Xã Việt Lâm',
    ),
    675 => 
    array (
      0 => 676,
      1 => 36,
      2 => 'Xã Ngọc Linh',
    ),
    676 => 
    array (
      0 => 677,
      1 => 36,
      2 => 'Xã Ngọc Minh',
    ),
    677 => 
    array (
      0 => 678,
      1 => 36,
      2 => 'Xã Bạch Ngọc',
    ),
    678 => 
    array (
      0 => 679,
      1 => 36,
      2 => 'Xã Trung Thành',
    ),
    679 => 
    array (
      0 => 680,
      1 => 37,
      2 => 'Xã Minh Sơn',
    ),
    680 => 
    array (
      0 => 681,
      1 => 37,
      2 => 'Xã Giáp Trung',
    ),
    681 => 
    array (
      0 => 682,
      1 => 37,
      2 => 'Xã Yên Định',
    ),
    682 => 
    array (
      0 => 683,
      1 => 37,
      2 => 'Thị trấn Yên Phú',
    ),
    683 => 
    array (
      0 => 684,
      1 => 37,
      2 => 'Xã Minh Ngọc',
    ),
    684 => 
    array (
      0 => 685,
      1 => 37,
      2 => 'Xã Yên Phong',
    ),
    685 => 
    array (
      0 => 686,
      1 => 37,
      2 => 'Xã Lạc Nông',
    ),
    686 => 
    array (
      0 => 687,
      1 => 37,
      2 => 'Xã Phú Nam',
    ),
    687 => 
    array (
      0 => 688,
      1 => 37,
      2 => 'Xã Yên Cường',
    ),
    688 => 
    array (
      0 => 689,
      1 => 37,
      2 => 'Xã Thượng Tân',
    ),
    689 => 
    array (
      0 => 690,
      1 => 37,
      2 => 'Xã Đường Âm',
    ),
    690 => 
    array (
      0 => 691,
      1 => 37,
      2 => 'Xã Đường Hồng',
    ),
    691 => 
    array (
      0 => 692,
      1 => 37,
      2 => 'Xã Phiêng Luông',
    ),
    692 => 
    array (
      0 => 693,
      1 => 38,
      2 => 'Thị trấn Vinh Quang',
    ),
    693 => 
    array (
      0 => 694,
      1 => 38,
      2 => 'Xã Bản Máy',
    ),
    694 => 
    array (
      0 => 695,
      1 => 38,
      2 => 'Xã Thàng Tín',
    ),
    695 => 
    array (
      0 => 696,
      1 => 38,
      2 => 'Xã Thèn Chu Phìn',
    ),
    696 => 
    array (
      0 => 697,
      1 => 38,
      2 => 'Xã Pố Lồ',
    ),
    697 => 
    array (
      0 => 698,
      1 => 38,
      2 => 'Xã Bản Phùng',
    ),
    698 => 
    array (
      0 => 699,
      1 => 38,
      2 => 'Xã Túng Sán',
    ),
    699 => 
    array (
      0 => 700,
      1 => 38,
      2 => 'Xã Chiến Phố',
    ),
    700 => 
    array (
      0 => 701,
      1 => 38,
      2 => 'Xã Đản Ván',
    ),
    701 => 
    array (
      0 => 702,
      1 => 38,
      2 => 'Xã Tụ Nhân',
    ),
    702 => 
    array (
      0 => 703,
      1 => 38,
      2 => 'Xã Tân Tiến',
    ),
    703 => 
    array (
      0 => 704,
      1 => 38,
      2 => 'Xã Nàng Đôn',
    ),
    704 => 
    array (
      0 => 705,
      1 => 38,
      2 => 'Xã Pờ Ly Ngài',
    ),
    705 => 
    array (
      0 => 706,
      1 => 38,
      2 => 'Xã Sán Xả Hồ',
    ),
    706 => 
    array (
      0 => 707,
      1 => 38,
      2 => 'Xã Bản Luốc',
    ),
    707 => 
    array (
      0 => 708,
      1 => 38,
      2 => 'Xã Ngàm Đăng Vài',
    ),
    708 => 
    array (
      0 => 709,
      1 => 38,
      2 => 'Xã Bản Nhùng',
    ),
    709 => 
    array (
      0 => 710,
      1 => 38,
      2 => 'Xã Tả Sử Choóng',
    ),
    710 => 
    array (
      0 => 711,
      1 => 38,
      2 => 'Xã Nậm Dịch',
    ),
    711 => 
    array (
      0 => 712,
      1 => 38,
      2 => 'Xã Hồ Thầu',
    ),
    712 => 
    array (
      0 => 713,
      1 => 38,
      2 => 'Xã Nam Sơn',
    ),
    713 => 
    array (
      0 => 714,
      1 => 38,
      2 => 'Xã Nậm Tỵ',
    ),
    714 => 
    array (
      0 => 715,
      1 => 38,
      2 => 'Xã Thông Nguyên',
    ),
    715 => 
    array (
      0 => 716,
      1 => 38,
      2 => 'Xã Nậm Khòa',
    ),
    716 => 
    array (
      0 => 717,
      1 => 39,
      2 => 'Thị trấn Cốc Pài',
    ),
    717 => 
    array (
      0 => 718,
      1 => 39,
      2 => 'Xã Nàn Xỉn',
    ),
    718 => 
    array (
      0 => 719,
      1 => 39,
      2 => 'Xã Bản Díu',
    ),
    719 => 
    array (
      0 => 720,
      1 => 39,
      2 => 'Xã Chí Cà',
    ),
    720 => 
    array (
      0 => 721,
      1 => 39,
      2 => 'Xã Xín Mần',
    ),
    721 => 
    array (
      0 => 722,
      1 => 39,
      2 => 'Xã Thèn Phàng',
    ),
    722 => 
    array (
      0 => 723,
      1 => 39,
      2 => 'Xã Trung Thịnh',
    ),
    723 => 
    array (
      0 => 724,
      1 => 39,
      2 => 'Xã Pà Vầy Sủ',
    ),
    724 => 
    array (
      0 => 725,
      1 => 39,
      2 => 'Xã Cốc Rế',
    ),
    725 => 
    array (
      0 => 726,
      1 => 39,
      2 => 'Xã Thu Tà',
    ),
    726 => 
    array (
      0 => 727,
      1 => 39,
      2 => 'Xã Nàn Ma',
    ),
    727 => 
    array (
      0 => 728,
      1 => 39,
      2 => 'Xã Tả Nhìu',
    ),
    728 => 
    array (
      0 => 729,
      1 => 39,
      2 => 'Xã Bản Ngò',
    ),
    729 => 
    array (
      0 => 730,
      1 => 39,
      2 => 'Xã Chế Là',
    ),
    730 => 
    array (
      0 => 731,
      1 => 39,
      2 => 'Xã Nấm Dẩn',
    ),
    731 => 
    array (
      0 => 732,
      1 => 39,
      2 => 'Xã Quảng Nguyên',
    ),
    732 => 
    array (
      0 => 733,
      1 => 39,
      2 => 'Xã Nà Chì',
    ),
    733 => 
    array (
      0 => 734,
      1 => 39,
      2 => 'Xã Khuôn Lùng',
    ),
    734 => 
    array (
      0 => 735,
      1 => 40,
      2 => 'Thị trấn Việt Quang',
    ),
    735 => 
    array (
      0 => 736,
      1 => 40,
      2 => 'Thị trấn Vĩnh Tuy',
    ),
    736 => 
    array (
      0 => 737,
      1 => 40,
      2 => 'Xã Tân Lập',
    ),
    737 => 
    array (
      0 => 738,
      1 => 40,
      2 => 'Xã Tân Thành',
    ),
    738 => 
    array (
      0 => 739,
      1 => 40,
      2 => 'Xã Đồng Tiến',
    ),
    739 => 
    array (
      0 => 740,
      1 => 40,
      2 => 'Xã Đồng Tâm',
    ),
    740 => 
    array (
      0 => 741,
      1 => 40,
      2 => 'Xã Tân Quang',
    ),
    741 => 
    array (
      0 => 742,
      1 => 40,
      2 => 'Xã Thượng Bình',
    ),
    742 => 
    array (
      0 => 743,
      1 => 40,
      2 => 'Xã Hữu Sản',
    ),
    743 => 
    array (
      0 => 744,
      1 => 40,
      2 => 'Xã Kim Ngọc',
    ),
    744 => 
    array (
      0 => 745,
      1 => 40,
      2 => 'Xã Việt Vinh',
    ),
    745 => 
    array (
      0 => 746,
      1 => 40,
      2 => 'Xã Bằng Hành',
    ),
    746 => 
    array (
      0 => 747,
      1 => 40,
      2 => 'Xã Quang Minh',
    ),
    747 => 
    array (
      0 => 748,
      1 => 40,
      2 => 'Xã Liên Hiệp',
    ),
    748 => 
    array (
      0 => 749,
      1 => 40,
      2 => 'Xã Vô Điếm',
    ),
    749 => 
    array (
      0 => 750,
      1 => 40,
      2 => 'Xã Việt Hồng',
    ),
    750 => 
    array (
      0 => 751,
      1 => 40,
      2 => 'Xã Hùng An',
    ),
    751 => 
    array (
      0 => 752,
      1 => 40,
      2 => 'Xã Đức Xuân',
    ),
    752 => 
    array (
      0 => 753,
      1 => 40,
      2 => 'Xã Tiên Kiều',
    ),
    753 => 
    array (
      0 => 754,
      1 => 40,
      2 => 'Xã Vĩnh Hảo',
    ),
    754 => 
    array (
      0 => 755,
      1 => 40,
      2 => 'Xã Vĩnh Phúc',
    ),
    755 => 
    array (
      0 => 756,
      1 => 40,
      2 => 'Xã Đồng Yên',
    ),
    756 => 
    array (
      0 => 757,
      1 => 40,
      2 => 'Xã Đông Thành',
    ),
    757 => 
    array (
      0 => 758,
      1 => 41,
      2 => 'Xã Xuân Minh',
    ),
    758 => 
    array (
      0 => 759,
      1 => 41,
      2 => 'Xã Tiên Nguyên',
    ),
    759 => 
    array (
      0 => 760,
      1 => 41,
      2 => 'Xã Tân Nam',
    ),
    760 => 
    array (
      0 => 761,
      1 => 41,
      2 => 'Xã Bản Rịa',
    ),
    761 => 
    array (
      0 => 762,
      1 => 41,
      2 => 'Xã Yên Thành',
    ),
    762 => 
    array (
      0 => 763,
      1 => 41,
      2 => 'Thị trấn Yên Bình',
    ),
    763 => 
    array (
      0 => 764,
      1 => 41,
      2 => 'Xã Tân Trịnh',
    ),
    764 => 
    array (
      0 => 765,
      1 => 41,
      2 => 'Xã Tân Bắc',
    ),
    765 => 
    array (
      0 => 766,
      1 => 41,
      2 => 'Xã Bằng Lang',
    ),
    766 => 
    array (
      0 => 767,
      1 => 41,
      2 => 'Xã Yên Hà',
    ),
    767 => 
    array (
      0 => 768,
      1 => 41,
      2 => 'Xã Hương Sơn',
    ),
    768 => 
    array (
      0 => 769,
      1 => 41,
      2 => 'Xã Xuân Giang',
    ),
    769 => 
    array (
      0 => 770,
      1 => 41,
      2 => 'Xã Nà Khương',
    ),
    770 => 
    array (
      0 => 771,
      1 => 41,
      2 => 'Xã Tiên Yên',
    ),
    771 => 
    array (
      0 => 772,
      1 => 41,
      2 => 'Xã Vĩ Thượng',
    ),
    772 => 
    array (
      0 => 773,
      1 => 42,
      2 => 'Phường Sông Hiến',
    ),
    773 => 
    array (
      0 => 774,
      1 => 42,
      2 => 'Phường Sông Bằng',
    ),
    774 => 
    array (
      0 => 775,
      1 => 42,
      2 => 'Phường Hợp Giang',
    ),
    775 => 
    array (
      0 => 776,
      1 => 42,
      2 => 'Phường Tân Giang',
    ),
    776 => 
    array (
      0 => 777,
      1 => 42,
      2 => 'Phường Ngọc Xuân',
    ),
    777 => 
    array (
      0 => 778,
      1 => 42,
      2 => 'Phường Đề Thám',
    ),
    778 => 
    array (
      0 => 779,
      1 => 42,
      2 => 'Phường Hoà Chung',
    ),
    779 => 
    array (
      0 => 780,
      1 => 42,
      2 => 'Phường Duyệt Trung',
    ),
    780 => 
    array (
      0 => 781,
      1 => 42,
      2 => 'Xã Vĩnh Quang',
    ),
    781 => 
    array (
      0 => 782,
      1 => 42,
      2 => 'Xã Hưng Đạo',
    ),
    782 => 
    array (
      0 => 783,
      1 => 42,
      2 => 'Xã Chu Trinh',
    ),
    783 => 
    array (
      0 => 784,
      1 => 43,
      2 => 'Thị trấn Pác Miầu',
    ),
    784 => 
    array (
      0 => 785,
      1 => 43,
      2 => 'Xã Đức Hạnh',
    ),
    785 => 
    array (
      0 => 786,
      1 => 43,
      2 => 'Xã Lý Bôn',
    ),
    786 => 
    array (
      0 => 787,
      1 => 43,
      2 => 'Xã Nam Cao',
    ),
    787 => 
    array (
      0 => 788,
      1 => 43,
      2 => 'Xã Nam Quang',
    ),
    788 => 
    array (
      0 => 789,
      1 => 43,
      2 => 'Xã Vĩnh Quang',
    ),
    789 => 
    array (
      0 => 790,
      1 => 43,
      2 => 'Xã Quảng Lâm',
    ),
    790 => 
    array (
      0 => 791,
      1 => 43,
      2 => 'Xã Thạch Lâm',
    ),
    791 => 
    array (
      0 => 792,
      1 => 43,
      2 => 'Xã Vĩnh Phong',
    ),
    792 => 
    array (
      0 => 793,
      1 => 43,
      2 => 'Xã Mông Ân',
    ),
    793 => 
    array (
      0 => 794,
      1 => 43,
      2 => 'Xã Thái Học',
    ),
    794 => 
    array (
      0 => 795,
      1 => 43,
      2 => 'Xã Thái Sơn',
    ),
    795 => 
    array (
      0 => 796,
      1 => 43,
      2 => 'Xã Yên Thổ',
    ),
    796 => 
    array (
      0 => 797,
      1 => 44,
      2 => 'Thị trấn Bảo Lạc',
    ),
    797 => 
    array (
      0 => 798,
      1 => 44,
      2 => 'Xã Cốc Pàng',
    ),
    798 => 
    array (
      0 => 799,
      1 => 44,
      2 => 'Xã Thượng Hà',
    ),
    799 => 
    array (
      0 => 800,
      1 => 44,
      2 => 'Xã Cô Ba',
    ),
    800 => 
    array (
      0 => 801,
      1 => 44,
      2 => 'Xã Bảo Toàn',
    ),
    801 => 
    array (
      0 => 802,
      1 => 44,
      2 => 'Xã Khánh Xuân',
    ),
    802 => 
    array (
      0 => 803,
      1 => 44,
      2 => 'Xã Xuân Trường',
    ),
    803 => 
    array (
      0 => 804,
      1 => 44,
      2 => 'Xã Hồng Trị',
    ),
    804 => 
    array (
      0 => 805,
      1 => 44,
      2 => 'Xã Kim Cúc',
    ),
    805 => 
    array (
      0 => 806,
      1 => 44,
      2 => 'Xã Phan Thanh',
    ),
    806 => 
    array (
      0 => 807,
      1 => 44,
      2 => 'Xã Hồng An',
    ),
    807 => 
    array (
      0 => 808,
      1 => 44,
      2 => 'Xã Hưng Đạo',
    ),
    808 => 
    array (
      0 => 809,
      1 => 44,
      2 => 'Xã Hưng Thịnh',
    ),
    809 => 
    array (
      0 => 810,
      1 => 44,
      2 => 'Xã Huy Giáp',
    ),
    810 => 
    array (
      0 => 811,
      1 => 44,
      2 => 'Xã Đình Phùng',
    ),
    811 => 
    array (
      0 => 812,
      1 => 44,
      2 => 'Xã Sơn Lập',
    ),
    812 => 
    array (
      0 => 813,
      1 => 44,
      2 => 'Xã Sơn Lộ',
    ),
    813 => 
    array (
      0 => 814,
      1 => 45,
      2 => 'Thị trấn Thông Nông',
    ),
    814 => 
    array (
      0 => 815,
      1 => 45,
      2 => 'Xã Cần Yên',
    ),
    815 => 
    array (
      0 => 816,
      1 => 45,
      2 => 'Xã Cần Nông',
    ),
    816 => 
    array (
      0 => 817,
      1 => 45,
      2 => 'Xã Lương Thông',
    ),
    817 => 
    array (
      0 => 818,
      1 => 45,
      2 => 'Xã Đa Thông',
    ),
    818 => 
    array (
      0 => 819,
      1 => 45,
      2 => 'Xã Ngọc Động',
    ),
    819 => 
    array (
      0 => 820,
      1 => 45,
      2 => 'Xã Yên Sơn',
    ),
    820 => 
    array (
      0 => 821,
      1 => 45,
      2 => 'Xã Lương Can',
    ),
    821 => 
    array (
      0 => 822,
      1 => 45,
      2 => 'Xã Thanh Long',
    ),
    822 => 
    array (
      0 => 823,
      1 => 45,
      2 => 'Thị trấn Xuân Hòa',
    ),
    823 => 
    array (
      0 => 824,
      1 => 45,
      2 => 'Xã Lũng Nặm',
    ),
    824 => 
    array (
      0 => 825,
      1 => 45,
      2 => 'Xã Trường Hà',
    ),
    825 => 
    array (
      0 => 826,
      1 => 45,
      2 => 'Xã Cải Viên',
    ),
    826 => 
    array (
      0 => 827,
      1 => 45,
      2 => 'Xã Nội Thôn',
    ),
    827 => 
    array (
      0 => 828,
      1 => 45,
      2 => 'Xã Tổng Cọt',
    ),
    828 => 
    array (
      0 => 829,
      1 => 45,
      2 => 'Xã Sóc Hà',
    ),
    829 => 
    array (
      0 => 830,
      1 => 45,
      2 => 'Xã Thượng Thôn',
    ),
    830 => 
    array (
      0 => 831,
      1 => 45,
      2 => 'Xã Hồng Sỹ',
    ),
    831 => 
    array (
      0 => 832,
      1 => 45,
      2 => 'Xã Quý Quân',
    ),
    832 => 
    array (
      0 => 833,
      1 => 45,
      2 => 'Xã Mã Ba',
    ),
    833 => 
    array (
      0 => 834,
      1 => 45,
      2 => 'Xã Ngọc Đào',
    ),
    834 => 
    array (
      0 => 835,
      1 => 46,
      2 => 'Thị trấn Trà Lĩnh',
    ),
    835 => 
    array (
      0 => 836,
      1 => 46,
      2 => 'Xã Tri Phương',
    ),
    836 => 
    array (
      0 => 837,
      1 => 46,
      2 => 'Xã Quang Hán',
    ),
    837 => 
    array (
      0 => 838,
      1 => 46,
      2 => 'Xã Xuân Nội',
    ),
    838 => 
    array (
      0 => 839,
      1 => 46,
      2 => 'Xã Quang Trung',
    ),
    839 => 
    array (
      0 => 840,
      1 => 46,
      2 => 'Xã Quang Vinh',
    ),
    840 => 
    array (
      0 => 841,
      1 => 46,
      2 => 'Xã Cao Chương',
    ),
    841 => 
    array (
      0 => 842,
      1 => 46,
      2 => 'Thị trấn Trùng Khánh',
    ),
    842 => 
    array (
      0 => 843,
      1 => 46,
      2 => 'Xã Ngọc Khê',
    ),
    843 => 
    array (
      0 => 844,
      1 => 46,
      2 => 'Xã Ngọc Côn',
    ),
    844 => 
    array (
      0 => 845,
      1 => 46,
      2 => 'Xã Phong Nậm',
    ),
    845 => 
    array (
      0 => 846,
      1 => 46,
      2 => 'Xã Đình Phong',
    ),
    846 => 
    array (
      0 => 847,
      1 => 46,
      2 => 'Xã Đàm Thuỷ',
    ),
    847 => 
    array (
      0 => 848,
      1 => 46,
      2 => 'Xã Khâm Thành',
    ),
    848 => 
    array (
      0 => 849,
      1 => 46,
      2 => 'Xã Chí Viễn',
    ),
    849 => 
    array (
      0 => 850,
      1 => 46,
      2 => 'Xã Lăng Hiếu',
    ),
    850 => 
    array (
      0 => 851,
      1 => 46,
      2 => 'Xã Phong Châu',
    ),
    851 => 
    array (
      0 => 852,
      1 => 46,
      2 => 'Xã Trung Phúc',
    ),
    852 => 
    array (
      0 => 853,
      1 => 46,
      2 => 'Xã Cao Thăng',
    ),
    853 => 
    array (
      0 => 854,
      1 => 46,
      2 => 'Xã Đức Hồng',
    ),
    854 => 
    array (
      0 => 855,
      1 => 46,
      2 => 'Xã Đoài Dương',
    ),
    855 => 
    array (
      0 => 856,
      1 => 47,
      2 => 'Xã Minh Long',
    ),
    856 => 
    array (
      0 => 857,
      1 => 47,
      2 => 'Xã Lý Quốc',
    ),
    857 => 
    array (
      0 => 858,
      1 => 47,
      2 => 'Xã Thắng Lợi',
    ),
    858 => 
    array (
      0 => 859,
      1 => 47,
      2 => 'Xã Đồng Loan',
    ),
    859 => 
    array (
      0 => 860,
      1 => 47,
      2 => 'Xã Đức Quang',
    ),
    860 => 
    array (
      0 => 861,
      1 => 47,
      2 => 'Xã Kim Loan',
    ),
    861 => 
    array (
      0 => 862,
      1 => 47,
      2 => 'Xã Quang Long',
    ),
    862 => 
    array (
      0 => 863,
      1 => 47,
      2 => 'Xã An Lạc',
    ),
    863 => 
    array (
      0 => 864,
      1 => 47,
      2 => 'Thị trấn Thanh Nhật',
    ),
    864 => 
    array (
      0 => 865,
      1 => 47,
      2 => 'Xã Vinh Quý',
    ),
    865 => 
    array (
      0 => 866,
      1 => 47,
      2 => 'Xã Thống Nhất',
    ),
    866 => 
    array (
      0 => 867,
      1 => 47,
      2 => 'Xã Cô Ngân',
    ),
    867 => 
    array (
      0 => 868,
      1 => 47,
      2 => 'Xã Thị Hoa',
    ),
    868 => 
    array (
      0 => 869,
      1 => 48,
      2 => 'Xã Quốc Toản',
    ),
    869 => 
    array (
      0 => 870,
      1 => 48,
      2 => 'Thị trấn Quảng Uyên',
    ),
    870 => 
    array (
      0 => 871,
      1 => 48,
      2 => 'Xã Phi Hải',
    ),
    871 => 
    array (
      0 => 872,
      1 => 48,
      2 => 'Xã Quảng Hưng',
    ),
    872 => 
    array (
      0 => 873,
      1 => 48,
      2 => 'Xã Độc Lập',
    ),
    873 => 
    array (
      0 => 874,
      1 => 48,
      2 => 'Xã Cai Bộ',
    ),
    874 => 
    array (
      0 => 875,
      1 => 48,
      2 => 'Xã Phúc Sen',
    ),
    875 => 
    array (
      0 => 876,
      1 => 48,
      2 => 'Xã Chí Thảo',
    ),
    876 => 
    array (
      0 => 877,
      1 => 48,
      2 => 'Xã Tự Do',
    ),
    877 => 
    array (
      0 => 878,
      1 => 48,
      2 => 'Xã Hồng Quang',
    ),
    878 => 
    array (
      0 => 879,
      1 => 48,
      2 => 'Xã Ngọc Động',
    ),
    879 => 
    array (
      0 => 880,
      1 => 48,
      2 => 'Xã Hạnh Phúc',
    ),
    880 => 
    array (
      0 => 881,
      1 => 48,
      2 => 'Thị trấn Tà Lùng',
    ),
    881 => 
    array (
      0 => 882,
      1 => 48,
      2 => 'Xã Bế Văn Đàn',
    ),
    882 => 
    array (
      0 => 883,
      1 => 48,
      2 => 'Xã Cách Linh',
    ),
    883 => 
    array (
      0 => 884,
      1 => 48,
      2 => 'Xã Đại Sơn',
    ),
    884 => 
    array (
      0 => 885,
      1 => 48,
      2 => 'Xã Tiên Thành',
    ),
    885 => 
    array (
      0 => 886,
      1 => 48,
      2 => 'Thị trấn Hoà Thuận',
    ),
    886 => 
    array (
      0 => 887,
      1 => 48,
      2 => 'Xã Mỹ Hưng',
    ),
    887 => 
    array (
      0 => 888,
      1 => 49,
      2 => 'Thị trấn Nước Hai',
    ),
    888 => 
    array (
      0 => 889,
      1 => 49,
      2 => 'Xã Dân Chủ',
    ),
    889 => 
    array (
      0 => 890,
      1 => 49,
      2 => 'Xã Nam Tuấn',
    ),
    890 => 
    array (
      0 => 891,
      1 => 49,
      2 => 'Xã Đại Tiến',
    ),
    891 => 
    array (
      0 => 892,
      1 => 49,
      2 => 'Xã Đức Long',
    ),
    892 => 
    array (
      0 => 893,
      1 => 49,
      2 => 'Xã Ngũ Lão',
    ),
    893 => 
    array (
      0 => 894,
      1 => 49,
      2 => 'Xã Trương Lương',
    ),
    894 => 
    array (
      0 => 895,
      1 => 49,
      2 => 'Xã Hồng Việt',
    ),
    895 => 
    array (
      0 => 896,
      1 => 49,
      2 => 'Xã Hoàng Tung',
    ),
    896 => 
    array (
      0 => 897,
      1 => 49,
      2 => 'Xã Nguyễn Huệ',
    ),
    897 => 
    array (
      0 => 898,
      1 => 49,
      2 => 'Xã Quang Trung',
    ),
    898 => 
    array (
      0 => 899,
      1 => 49,
      2 => 'Xã Bạch Đằng',
    ),
    899 => 
    array (
      0 => 900,
      1 => 49,
      2 => 'Xã Bình Dương',
    ),
    900 => 
    array (
      0 => 901,
      1 => 49,
      2 => 'Xã Lê Chung',
    ),
    901 => 
    array (
      0 => 902,
      1 => 49,
      2 => 'Xã Hồng Nam',
    ),
    902 => 
    array (
      0 => 903,
      1 => 50,
      2 => 'Thị trấn Nguyên Bình',
    ),
    903 => 
    array (
      0 => 904,
      1 => 50,
      2 => 'Thị trấn Tĩnh Túc',
    ),
    904 => 
    array (
      0 => 905,
      1 => 50,
      2 => 'Xã Yên Lạc',
    ),
    905 => 
    array (
      0 => 906,
      1 => 50,
      2 => 'Xã Triệu Nguyên',
    ),
    906 => 
    array (
      0 => 907,
      1 => 50,
      2 => 'Xã Ca Thành',
    ),
    907 => 
    array (
      0 => 908,
      1 => 50,
      2 => 'Xã Vũ Nông',
    ),
    908 => 
    array (
      0 => 909,
      1 => 50,
      2 => 'Xã Minh Tâm',
    ),
    909 => 
    array (
      0 => 910,
      1 => 50,
      2 => 'Xã Thể Dục',
    ),
    910 => 
    array (
      0 => 911,
      1 => 50,
      2 => 'Xã Mai Long',
    ),
    911 => 
    array (
      0 => 912,
      1 => 50,
      2 => 'Xã Vũ Minh',
    ),
    912 => 
    array (
      0 => 913,
      1 => 50,
      2 => 'Xã Hoa Thám',
    ),
    913 => 
    array (
      0 => 914,
      1 => 50,
      2 => 'Xã Phan Thanh',
    ),
    914 => 
    array (
      0 => 915,
      1 => 50,
      2 => 'Xã Quang Thành',
    ),
    915 => 
    array (
      0 => 916,
      1 => 50,
      2 => 'Xã Tam Kim',
    ),
    916 => 
    array (
      0 => 917,
      1 => 50,
      2 => 'Xã Thành Công',
    ),
    917 => 
    array (
      0 => 918,
      1 => 50,
      2 => 'Xã Thịnh Vượng',
    ),
    918 => 
    array (
      0 => 919,
      1 => 50,
      2 => 'Xã Hưng Đạo',
    ),
    919 => 
    array (
      0 => 920,
      1 => 51,
      2 => 'Thị trấn Đông Khê',
    ),
    920 => 
    array (
      0 => 921,
      1 => 51,
      2 => 'Xã Canh Tân',
    ),
    921 => 
    array (
      0 => 922,
      1 => 51,
      2 => 'Xã Kim Đồng',
    ),
    922 => 
    array (
      0 => 923,
      1 => 51,
      2 => 'Xã Minh Khai',
    ),
    923 => 
    array (
      0 => 924,
      1 => 51,
      2 => 'Xã Đức Thông',
    ),
    924 => 
    array (
      0 => 925,
      1 => 51,
      2 => 'Xã Thái Cường',
    ),
    925 => 
    array (
      0 => 926,
      1 => 51,
      2 => 'Xã Vân Trình',
    ),
    926 => 
    array (
      0 => 927,
      1 => 51,
      2 => 'Xã Thụy Hùng',
    ),
    927 => 
    array (
      0 => 928,
      1 => 51,
      2 => 'Xã Quang Trọng',
    ),
    928 => 
    array (
      0 => 929,
      1 => 51,
      2 => 'Xã Trọng Con',
    ),
    929 => 
    array (
      0 => 930,
      1 => 51,
      2 => 'Xã Lê Lai',
    ),
    930 => 
    array (
      0 => 931,
      1 => 51,
      2 => 'Xã Đức Long',
    ),
    931 => 
    array (
      0 => 932,
      1 => 51,
      2 => 'Xã Lê Lợi',
    ),
    932 => 
    array (
      0 => 933,
      1 => 51,
      2 => 'Xã Đức Xuân',
    ),
    933 => 
    array (
      0 => 934,
      1 => 52,
      2 => 'Phường Nguyễn Thị Minh Khai',
    ),
    934 => 
    array (
      0 => 935,
      1 => 52,
      2 => 'Phường Sông Cầu',
    ),
    935 => 
    array (
      0 => 936,
      1 => 52,
      2 => 'Phường Đức Xuân',
    ),
    936 => 
    array (
      0 => 937,
      1 => 52,
      2 => 'Phường Phùng Chí Kiên',
    ),
    937 => 
    array (
      0 => 938,
      1 => 52,
      2 => 'Phường Huyền Tụng',
    ),
    938 => 
    array (
      0 => 939,
      1 => 52,
      2 => 'Xã Dương Quang',
    ),
    939 => 
    array (
      0 => 940,
      1 => 52,
      2 => 'Xã Nông Thượng',
    ),
    940 => 
    array (
      0 => 941,
      1 => 52,
      2 => 'Phường Xuất Hóa',
    ),
    941 => 
    array (
      0 => 942,
      1 => 53,
      2 => 'Xã Bằng Thành',
    ),
    942 => 
    array (
      0 => 943,
      1 => 53,
      2 => 'Xã Nhạn Môn',
    ),
    943 => 
    array (
      0 => 944,
      1 => 53,
      2 => 'Xã Bộc Bố',
    ),
    944 => 
    array (
      0 => 945,
      1 => 53,
      2 => 'Xã Công Bằng',
    ),
    945 => 
    array (
      0 => 946,
      1 => 53,
      2 => 'Xã Giáo Hiệu',
    ),
    946 => 
    array (
      0 => 947,
      1 => 53,
      2 => 'Xã Xuân La',
    ),
    947 => 
    array (
      0 => 948,
      1 => 53,
      2 => 'Xã An Thắng',
    ),
    948 => 
    array (
      0 => 949,
      1 => 53,
      2 => 'Xã Cổ Linh',
    ),
    949 => 
    array (
      0 => 950,
      1 => 53,
      2 => 'Xã Nghiên Loan',
    ),
    950 => 
    array (
      0 => 951,
      1 => 53,
      2 => 'Xã Cao Tân',
    ),
    951 => 
    array (
      0 => 952,
      1 => 54,
      2 => 'Thị trấn Chợ Rã',
    ),
    952 => 
    array (
      0 => 953,
      1 => 54,
      2 => 'Xã Bành Trạch',
    ),
    953 => 
    array (
      0 => 954,
      1 => 54,
      2 => 'Xã Phúc Lộc',
    ),
    954 => 
    array (
      0 => 955,
      1 => 54,
      2 => 'Xã Hà Hiệu',
    ),
    955 => 
    array (
      0 => 956,
      1 => 54,
      2 => 'Xã Cao Thượng',
    ),
    956 => 
    array (
      0 => 957,
      1 => 54,
      2 => 'Xã Khang Ninh',
    ),
    957 => 
    array (
      0 => 958,
      1 => 54,
      2 => 'Xã Nam Mẫu',
    ),
    958 => 
    array (
      0 => 959,
      1 => 54,
      2 => 'Xã Thượng Giáo',
    ),
    959 => 
    array (
      0 => 960,
      1 => 54,
      2 => 'Xã Địa Linh',
    ),
    960 => 
    array (
      0 => 961,
      1 => 54,
      2 => 'Xã Yến Dương',
    ),
    961 => 
    array (
      0 => 962,
      1 => 54,
      2 => 'Xã Chu Hương',
    ),
    962 => 
    array (
      0 => 963,
      1 => 54,
      2 => 'Xã Quảng Khê',
    ),
    963 => 
    array (
      0 => 964,
      1 => 54,
      2 => 'Xã Mỹ Phương',
    ),
    964 => 
    array (
      0 => 965,
      1 => 54,
      2 => 'Xã Hoàng Trĩ',
    ),
    965 => 
    array (
      0 => 966,
      1 => 54,
      2 => 'Xã Đồng Phúc',
    ),
    966 => 
    array (
      0 => 967,
      1 => 55,
      2 => 'Thị trấn Nà Phặc',
    ),
    967 => 
    array (
      0 => 968,
      1 => 55,
      2 => 'Xã Thượng Ân',
    ),
    968 => 
    array (
      0 => 969,
      1 => 55,
      2 => 'Xã Bằng Vân',
    ),
    969 => 
    array (
      0 => 970,
      1 => 55,
      2 => 'Xã Cốc Đán',
    ),
    970 => 
    array (
      0 => 971,
      1 => 55,
      2 => 'Xã Trung Hoà',
    ),
    971 => 
    array (
      0 => 972,
      1 => 55,
      2 => 'Xã Đức Vân',
    ),
    972 => 
    array (
      0 => 973,
      1 => 55,
      2 => 'Xã Vân Tùng',
    ),
    973 => 
    array (
      0 => 974,
      1 => 55,
      2 => 'Xã Thượng Quan',
    ),
    974 => 
    array (
      0 => 975,
      1 => 55,
      2 => 'Xã Hiệp Lực',
    ),
    975 => 
    array (
      0 => 976,
      1 => 55,
      2 => 'Xã Thuần Mang',
    ),
    976 => 
    array (
      0 => 977,
      1 => 56,
      2 => 'Thị trấn Phủ Thông',
    ),
    977 => 
    array (
      0 => 978,
      1 => 56,
      2 => 'Xã Vi Hương',
    ),
    978 => 
    array (
      0 => 979,
      1 => 56,
      2 => 'Xã Sĩ Bình',
    ),
    979 => 
    array (
      0 => 980,
      1 => 56,
      2 => 'Xã Vũ Muộn',
    ),
    980 => 
    array (
      0 => 981,
      1 => 56,
      2 => 'Xã Đôn Phong',
    ),
    981 => 
    array (
      0 => 982,
      1 => 56,
      2 => 'Xã Lục Bình',
    ),
    982 => 
    array (
      0 => 983,
      1 => 56,
      2 => 'Xã Tân Tú',
    ),
    983 => 
    array (
      0 => 984,
      1 => 56,
      2 => 'Xã Nguyên Phúc',
    ),
    984 => 
    array (
      0 => 985,
      1 => 56,
      2 => 'Xã Cao Sơn',
    ),
    985 => 
    array (
      0 => 986,
      1 => 56,
      2 => 'Xã Quân Hà',
    ),
    986 => 
    array (
      0 => 987,
      1 => 56,
      2 => 'Xã Cẩm Giàng',
    ),
    987 => 
    array (
      0 => 988,
      1 => 56,
      2 => 'Xã Mỹ Thanh',
    ),
    988 => 
    array (
      0 => 989,
      1 => 56,
      2 => 'Xã Dương Phong',
    ),
    989 => 
    array (
      0 => 990,
      1 => 56,
      2 => 'Xã Quang Thuận',
    ),
    990 => 
    array (
      0 => 991,
      1 => 57,
      2 => 'Thị trấn Bằng Lũng',
    ),
    991 => 
    array (
      0 => 992,
      1 => 57,
      2 => 'Xã Xuân Lạc',
    ),
    992 => 
    array (
      0 => 993,
      1 => 57,
      2 => 'Xã Nam Cường',
    ),
    993 => 
    array (
      0 => 994,
      1 => 57,
      2 => 'Xã Đồng Lạc',
    ),
    994 => 
    array (
      0 => 995,
      1 => 57,
      2 => 'Xã Tân Lập',
    ),
    995 => 
    array (
      0 => 996,
      1 => 57,
      2 => 'Xã Bản Thi',
    ),
    996 => 
    array (
      0 => 997,
      1 => 57,
      2 => 'Xã Quảng Bạch',
    ),
    997 => 
    array (
      0 => 998,
      1 => 57,
      2 => 'Xã Bằng Phúc',
    ),
    998 => 
    array (
      0 => 999,
      1 => 57,
      2 => 'Xã Yên Thịnh',
    ),
    999 => 
    array (
      0 => 1000,
      1 => 57,
      2 => 'Xã Yên Thượng',
    ),
    1000 => 
    array (
      0 => 1001,
      1 => 57,
      2 => 'Xã Phương Viên',
    ),
    1001 => 
    array (
      0 => 1002,
      1 => 57,
      2 => 'Xã Ngọc Phái',
    ),
    1002 => 
    array (
      0 => 1003,
      1 => 57,
      2 => 'Xã Đồng Thắng',
    ),
    1003 => 
    array (
      0 => 1004,
      1 => 57,
      2 => 'Xã Lương Bằng',
    ),
    1004 => 
    array (
      0 => 1005,
      1 => 57,
      2 => 'Xã Bằng Lãng',
    ),
    1005 => 
    array (
      0 => 1006,
      1 => 57,
      2 => 'Xã Đại Sảo',
    ),
    1006 => 
    array (
      0 => 1007,
      1 => 57,
      2 => 'Xã Nghĩa Tá',
    ),
    1007 => 
    array (
      0 => 1008,
      1 => 57,
      2 => 'Xã Yên Mỹ',
    ),
    1008 => 
    array (
      0 => 1009,
      1 => 57,
      2 => 'Xã Bình Trung',
    ),
    1009 => 
    array (
      0 => 1010,
      1 => 57,
      2 => 'Xã Yên Phong',
    ),
    1010 => 
    array (
      0 => 1011,
      1 => 58,
      2 => 'Thị trấn Đồng Tâm',
    ),
    1011 => 
    array (
      0 => 1012,
      1 => 58,
      2 => 'Xã Tân Sơn',
    ),
    1012 => 
    array (
      0 => 1013,
      1 => 58,
      2 => 'Xã Thanh Vận',
    ),
    1013 => 
    array (
      0 => 1014,
      1 => 58,
      2 => 'Xã Mai Lạp',
    ),
    1014 => 
    array (
      0 => 1015,
      1 => 58,
      2 => 'Xã Hoà Mục',
    ),
    1015 => 
    array (
      0 => 1016,
      1 => 58,
      2 => 'Xã Thanh Mai',
    ),
    1016 => 
    array (
      0 => 1017,
      1 => 58,
      2 => 'Xã Cao Kỳ',
    ),
    1017 => 
    array (
      0 => 1018,
      1 => 58,
      2 => 'Xã Nông Hạ',
    ),
    1018 => 
    array (
      0 => 1019,
      1 => 58,
      2 => 'Xã Yên Cư',
    ),
    1019 => 
    array (
      0 => 1020,
      1 => 58,
      2 => 'Xã Thanh Thịnh',
    ),
    1020 => 
    array (
      0 => 1021,
      1 => 58,
      2 => 'Xã Yên Hân',
    ),
    1021 => 
    array (
      0 => 1022,
      1 => 58,
      2 => 'Xã Như Cố',
    ),
    1022 => 
    array (
      0 => 1023,
      1 => 58,
      2 => 'Xã Bình Văn',
    ),
    1023 => 
    array (
      0 => 1024,
      1 => 58,
      2 => 'Xã Quảng Chu',
    ),
    1024 => 
    array (
      0 => 1025,
      1 => 59,
      2 => 'Xã Văn Vũ',
    ),
    1025 => 
    array (
      0 => 1026,
      1 => 59,
      2 => 'Xã Văn Lang',
    ),
    1026 => 
    array (
      0 => 1027,
      1 => 59,
      2 => 'Xã Lương Thượng',
    ),
    1027 => 
    array (
      0 => 1028,
      1 => 59,
      2 => 'Xã Kim Hỷ',
    ),
    1028 => 
    array (
      0 => 1029,
      1 => 59,
      2 => 'Xã Cường Lợi',
    ),
    1029 => 
    array (
      0 => 1030,
      1 => 59,
      2 => 'Thị trấn Yến Lạc',
    ),
    1030 => 
    array (
      0 => 1031,
      1 => 59,
      2 => 'Xã Kim Lư',
    ),
    1031 => 
    array (
      0 => 1032,
      1 => 59,
      2 => 'Xã Sơn Thành',
    ),
    1032 => 
    array (
      0 => 1033,
      1 => 59,
      2 => 'Xã Văn Minh',
    ),
    1033 => 
    array (
      0 => 1034,
      1 => 59,
      2 => 'Xã Côn Minh',
    ),
    1034 => 
    array (
      0 => 1035,
      1 => 59,
      2 => 'Xã Cư Lễ',
    ),
    1035 => 
    array (
      0 => 1036,
      1 => 59,
      2 => 'Xã Trần Phú',
    ),
    1036 => 
    array (
      0 => 1037,
      1 => 59,
      2 => 'Xã Quang Phong',
    ),
    1037 => 
    array (
      0 => 1038,
      1 => 59,
      2 => 'Xã Dương Sơn',
    ),
    1038 => 
    array (
      0 => 1039,
      1 => 59,
      2 => 'Xã Xuân Dương',
    ),
    1039 => 
    array (
      0 => 1040,
      1 => 59,
      2 => 'Xã Đổng Xá',
    ),
    1040 => 
    array (
      0 => 1041,
      1 => 59,
      2 => 'Xã Liêm Thuỷ',
    ),
    1041 => 
    array (
      0 => 1042,
      1 => 60,
      2 => 'Phường Phan Thiết',
    ),
    1042 => 
    array (
      0 => 1043,
      1 => 60,
      2 => 'Phường Minh Xuân',
    ),
    1043 => 
    array (
      0 => 1044,
      1 => 60,
      2 => 'Phường Tân Quang',
    ),
    1044 => 
    array (
      0 => 1045,
      1 => 60,
      2 => 'Xã Tràng Đà',
    ),
    1045 => 
    array (
      0 => 1046,
      1 => 60,
      2 => 'Phường Nông Tiến',
    ),
    1046 => 
    array (
      0 => 1047,
      1 => 60,
      2 => 'Phường Ỷ La',
    ),
    1047 => 
    array (
      0 => 1048,
      1 => 60,
      2 => 'Phường Tân Hà',
    ),
    1048 => 
    array (
      0 => 1049,
      1 => 60,
      2 => 'Phường Hưng Thành',
    ),
    1049 => 
    array (
      0 => 1050,
      1 => 60,
      2 => 'Xã Kim Phú',
    ),
    1050 => 
    array (
      0 => 1051,
      1 => 60,
      2 => 'Xã An Khang',
    ),
    1051 => 
    array (
      0 => 1052,
      1 => 60,
      2 => 'Phường Mỹ Lâm',
    ),
    1052 => 
    array (
      0 => 1053,
      1 => 60,
      2 => 'Phường An Tường',
    ),
    1053 => 
    array (
      0 => 1054,
      1 => 60,
      2 => 'Xã Lưỡng Vượng',
    ),
    1054 => 
    array (
      0 => 1055,
      1 => 60,
      2 => 'Xã Thái Long',
    ),
    1055 => 
    array (
      0 => 1056,
      1 => 60,
      2 => 'Phường Đội Cấn',
    ),
    1056 => 
    array (
      0 => 1057,
      1 => 61,
      2 => 'Xã Phúc Yên',
    ),
    1057 => 
    array (
      0 => 1058,
      1 => 61,
      2 => 'Xã Xuân Lập',
    ),
    1058 => 
    array (
      0 => 1059,
      1 => 61,
      2 => 'Xã Khuôn Hà',
    ),
    1059 => 
    array (
      0 => 1060,
      1 => 61,
      2 => 'Thị trấn Lăng Can',
    ),
    1060 => 
    array (
      0 => 1061,
      1 => 61,
      2 => 'Xã Thượng Lâm',
    ),
    1061 => 
    array (
      0 => 1062,
      1 => 61,
      2 => 'Xã Bình An',
    ),
    1062 => 
    array (
      0 => 1063,
      1 => 61,
      2 => 'Xã Hồng Quang',
    ),
    1063 => 
    array (
      0 => 1064,
      1 => 61,
      2 => 'Xã Thổ Bình',
    ),
    1064 => 
    array (
      0 => 1065,
      1 => 61,
      2 => 'Xã Phúc Sơn',
    ),
    1065 => 
    array (
      0 => 1066,
      1 => 61,
      2 => 'Xã Minh Quang',
    ),
    1066 => 
    array (
      0 => 1067,
      1 => 62,
      2 => 'Thị trấn Na Hang',
    ),
    1067 => 
    array (
      0 => 1068,
      1 => 62,
      2 => 'Xã Sinh Long',
    ),
    1068 => 
    array (
      0 => 1069,
      1 => 62,
      2 => 'Xã Thượng Giáp',
    ),
    1069 => 
    array (
      0 => 1070,
      1 => 62,
      2 => 'Xã Thượng Nông',
    ),
    1070 => 
    array (
      0 => 1071,
      1 => 62,
      2 => 'Xã Côn Lôn',
    ),
    1071 => 
    array (
      0 => 1072,
      1 => 62,
      2 => 'Xã Yên Hoa',
    ),
    1072 => 
    array (
      0 => 1073,
      1 => 62,
      2 => 'Xã Hồng Thái',
    ),
    1073 => 
    array (
      0 => 1074,
      1 => 62,
      2 => 'Xã Đà Vị',
    ),
    1074 => 
    array (
      0 => 1075,
      1 => 62,
      2 => 'Xã Khau Tinh',
    ),
    1075 => 
    array (
      0 => 1076,
      1 => 62,
      2 => 'Xã Sơn Phú',
    ),
    1076 => 
    array (
      0 => 1077,
      1 => 62,
      2 => 'Xã Năng Khả',
    ),
    1077 => 
    array (
      0 => 1078,
      1 => 62,
      2 => 'Xã Thanh Tương',
    ),
    1078 => 
    array (
      0 => 1079,
      1 => 63,
      2 => 'Thị trấn Vĩnh Lộc',
    ),
    1079 => 
    array (
      0 => 1080,
      1 => 63,
      2 => 'Xã Trung Hà',
    ),
    1080 => 
    array (
      0 => 1081,
      1 => 63,
      2 => 'Xã Tân Mỹ',
    ),
    1081 => 
    array (
      0 => 1082,
      1 => 63,
      2 => 'Xã Hà Lang',
    ),
    1082 => 
    array (
      0 => 1083,
      1 => 63,
      2 => 'Xã Hùng Mỹ',
    ),
    1083 => 
    array (
      0 => 1084,
      1 => 63,
      2 => 'Xã Yên Lập',
    ),
    1084 => 
    array (
      0 => 1085,
      1 => 63,
      2 => 'Xã Tân An',
    ),
    1085 => 
    array (
      0 => 1086,
      1 => 63,
      2 => 'Xã Bình Phú',
    ),
    1086 => 
    array (
      0 => 1087,
      1 => 63,
      2 => 'Xã Xuân Quang',
    ),
    1087 => 
    array (
      0 => 1088,
      1 => 63,
      2 => 'Xã Ngọc Hội',
    ),
    1088 => 
    array (
      0 => 1089,
      1 => 63,
      2 => 'Xã Phú Bình',
    ),
    1089 => 
    array (
      0 => 1090,
      1 => 63,
      2 => 'Xã Hòa Phú',
    ),
    1090 => 
    array (
      0 => 1091,
      1 => 63,
      2 => 'Xã Phúc Thịnh',
    ),
    1091 => 
    array (
      0 => 1092,
      1 => 63,
      2 => 'Xã Kiên Đài',
    ),
    1092 => 
    array (
      0 => 1093,
      1 => 63,
      2 => 'Xã Tân Thịnh',
    ),
    1093 => 
    array (
      0 => 1094,
      1 => 63,
      2 => 'Xã Trung Hòa',
    ),
    1094 => 
    array (
      0 => 1095,
      1 => 63,
      2 => 'Xã Kim Bình',
    ),
    1095 => 
    array (
      0 => 1096,
      1 => 63,
      2 => 'Xã Hòa An',
    ),
    1096 => 
    array (
      0 => 1097,
      1 => 63,
      2 => 'Xã Vinh Quang',
    ),
    1097 => 
    array (
      0 => 1098,
      1 => 63,
      2 => 'Xã Tri Phú',
    ),
    1098 => 
    array (
      0 => 1099,
      1 => 63,
      2 => 'Xã Nhân Lý',
    ),
    1099 => 
    array (
      0 => 1100,
      1 => 63,
      2 => 'Xã Yên Nguyên',
    ),
    1100 => 
    array (
      0 => 1101,
      1 => 63,
      2 => 'Xã Linh Phú',
    ),
    1101 => 
    array (
      0 => 1102,
      1 => 63,
      2 => 'Xã Bình Nhân',
    ),
    1102 => 
    array (
      0 => 1103,
      1 => 64,
      2 => 'Thị trấn Tân Yên',
    ),
    1103 => 
    array (
      0 => 1104,
      1 => 64,
      2 => 'Xã Yên Thuận',
    ),
    1104 => 
    array (
      0 => 1105,
      1 => 64,
      2 => 'Xã Bạch Xa',
    ),
    1105 => 
    array (
      0 => 1106,
      1 => 64,
      2 => 'Xã Minh Khương',
    ),
    1106 => 
    array (
      0 => 1107,
      1 => 64,
      2 => 'Xã Yên Lâm',
    ),
    1107 => 
    array (
      0 => 1108,
      1 => 64,
      2 => 'Xã Minh Dân',
    ),
    1108 => 
    array (
      0 => 1109,
      1 => 64,
      2 => 'Xã Phù Lưu',
    ),
    1109 => 
    array (
      0 => 1110,
      1 => 64,
      2 => 'Xã Minh Hương',
    ),
    1110 => 
    array (
      0 => 1111,
      1 => 64,
      2 => 'Xã Yên Phú',
    ),
    1111 => 
    array (
      0 => 1112,
      1 => 64,
      2 => 'Xã Tân Thành',
    ),
    1112 => 
    array (
      0 => 1113,
      1 => 64,
      2 => 'Xã Bình Xa',
    ),
    1113 => 
    array (
      0 => 1114,
      1 => 64,
      2 => 'Xã Thái Sơn',
    ),
    1114 => 
    array (
      0 => 1115,
      1 => 64,
      2 => 'Xã Nhân Mục',
    ),
    1115 => 
    array (
      0 => 1116,
      1 => 64,
      2 => 'Xã Thành Long',
    ),
    1116 => 
    array (
      0 => 1117,
      1 => 64,
      2 => 'Xã Bằng Cốc',
    ),
    1117 => 
    array (
      0 => 1118,
      1 => 64,
      2 => 'Xã Thái Hòa',
    ),
    1118 => 
    array (
      0 => 1119,
      1 => 64,
      2 => 'Xã Đức Ninh',
    ),
    1119 => 
    array (
      0 => 1120,
      1 => 64,
      2 => 'Xã Hùng Đức',
    ),
    1120 => 
    array (
      0 => 1121,
      1 => 65,
      2 => 'Xã Quí Quân',
    ),
    1121 => 
    array (
      0 => 1122,
      1 => 65,
      2 => 'Xã Lực Hành',
    ),
    1122 => 
    array (
      0 => 1123,
      1 => 65,
      2 => 'Xã Kiến Thiết',
    ),
    1123 => 
    array (
      0 => 1124,
      1 => 65,
      2 => 'Xã Trung Minh',
    ),
    1124 => 
    array (
      0 => 1125,
      1 => 65,
      2 => 'Xã Chiêu Yên',
    ),
    1125 => 
    array (
      0 => 1126,
      1 => 65,
      2 => 'Xã Trung Trực',
    ),
    1126 => 
    array (
      0 => 1127,
      1 => 65,
      2 => 'Xã Xuân Vân',
    ),
    1127 => 
    array (
      0 => 1128,
      1 => 65,
      2 => 'Xã Phúc Ninh',
    ),
    1128 => 
    array (
      0 => 1129,
      1 => 65,
      2 => 'Xã Hùng Lợi',
    ),
    1129 => 
    array (
      0 => 1130,
      1 => 65,
      2 => 'Xã Trung Sơn',
    ),
    1130 => 
    array (
      0 => 1131,
      1 => 65,
      2 => 'Xã Tân Tiến',
    ),
    1131 => 
    array (
      0 => 1132,
      1 => 65,
      2 => 'Xã Tứ Quận',
    ),
    1132 => 
    array (
      0 => 1133,
      1 => 65,
      2 => 'Xã Đạo Viện',
    ),
    1133 => 
    array (
      0 => 1134,
      1 => 65,
      2 => 'Xã Tân Long',
    ),
    1134 => 
    array (
      0 => 1135,
      1 => 65,
      2 => 'Thị trấn Yên Sơn',
    ),
    1135 => 
    array (
      0 => 1136,
      1 => 65,
      2 => 'Xã Kim Quan',
    ),
    1136 => 
    array (
      0 => 1137,
      1 => 65,
      2 => 'Xã Lang Quán',
    ),
    1137 => 
    array (
      0 => 1138,
      1 => 65,
      2 => 'Xã Phú Thịnh',
    ),
    1138 => 
    array (
      0 => 1139,
      1 => 65,
      2 => 'Xã Công Đa',
    ),
    1139 => 
    array (
      0 => 1140,
      1 => 65,
      2 => 'Xã Trung Môn',
    ),
    1140 => 
    array (
      0 => 1141,
      1 => 65,
      2 => 'Xã Chân Sơn',
    ),
    1141 => 
    array (
      0 => 1142,
      1 => 65,
      2 => 'Xã Thái Bình',
    ),
    1142 => 
    array (
      0 => 1143,
      1 => 65,
      2 => 'Xã Tiến Bộ',
    ),
    1143 => 
    array (
      0 => 1144,
      1 => 65,
      2 => 'Xã Mỹ Bằng',
    ),
    1144 => 
    array (
      0 => 1145,
      1 => 65,
      2 => 'Xã Hoàng Khai',
    ),
    1145 => 
    array (
      0 => 1146,
      1 => 65,
      2 => 'Xã Nhữ Hán',
    ),
    1146 => 
    array (
      0 => 1147,
      1 => 65,
      2 => 'Xã Nhữ Khê',
    ),
    1147 => 
    array (
      0 => 1148,
      1 => 65,
      2 => 'Xã Đội Bình',
    ),
    1148 => 
    array (
      0 => 1149,
      1 => 66,
      2 => 'Thị trấn Sơn Dương',
    ),
    1149 => 
    array (
      0 => 1150,
      1 => 66,
      2 => 'Xã Trung Yên',
    ),
    1150 => 
    array (
      0 => 1151,
      1 => 66,
      2 => 'Xã Minh Thanh',
    ),
    1151 => 
    array (
      0 => 1152,
      1 => 66,
      2 => 'Xã Tân Trào',
    ),
    1152 => 
    array (
      0 => 1153,
      1 => 66,
      2 => 'Xã Vĩnh Lợi',
    ),
    1153 => 
    array (
      0 => 1154,
      1 => 66,
      2 => 'Xã Thượng Ấm',
    ),
    1154 => 
    array (
      0 => 1155,
      1 => 66,
      2 => 'Xã Bình Yên',
    ),
    1155 => 
    array (
      0 => 1156,
      1 => 66,
      2 => 'Xã Lương Thiện',
    ),
    1156 => 
    array (
      0 => 1157,
      1 => 66,
      2 => 'Xã Tú Thịnh',
    ),
    1157 => 
    array (
      0 => 1158,
      1 => 66,
      2 => 'Xã Cấp Tiến',
    ),
    1158 => 
    array (
      0 => 1159,
      1 => 66,
      2 => 'Xã Hợp Thành',
    ),
    1159 => 
    array (
      0 => 1160,
      1 => 66,
      2 => 'Xã Phúc Ứng',
    ),
    1160 => 
    array (
      0 => 1161,
      1 => 66,
      2 => 'Xã Đông Thọ',
    ),
    1161 => 
    array (
      0 => 1162,
      1 => 66,
      2 => 'Xã Kháng Nhật',
    ),
    1162 => 
    array (
      0 => 1163,
      1 => 66,
      2 => 'Xã Hợp Hòa',
    ),
    1163 => 
    array (
      0 => 1164,
      1 => 66,
      2 => 'Xã Quyết Thắng',
    ),
    1164 => 
    array (
      0 => 1165,
      1 => 66,
      2 => 'Xã Đồng Quý',
    ),
    1165 => 
    array (
      0 => 1166,
      1 => 66,
      2 => 'Xã Tân Thanh',
    ),
    1166 => 
    array (
      0 => 1167,
      1 => 66,
      2 => 'Xã Vân Sơn',
    ),
    1167 => 
    array (
      0 => 1168,
      1 => 66,
      2 => 'Xã Văn Phú',
    ),
    1168 => 
    array (
      0 => 1169,
      1 => 66,
      2 => 'Xã Chi Thiết',
    ),
    1169 => 
    array (
      0 => 1170,
      1 => 66,
      2 => 'Xã Đông Lợi',
    ),
    1170 => 
    array (
      0 => 1171,
      1 => 66,
      2 => 'Xã Thiện Kế',
    ),
    1171 => 
    array (
      0 => 1172,
      1 => 66,
      2 => 'Xã Hồng Lạc',
    ),
    1172 => 
    array (
      0 => 1173,
      1 => 66,
      2 => 'Xã Phú Lương',
    ),
    1173 => 
    array (
      0 => 1174,
      1 => 66,
      2 => 'Xã Ninh Lai',
    ),
    1174 => 
    array (
      0 => 1175,
      1 => 66,
      2 => 'Xã Đại Phú',
    ),
    1175 => 
    array (
      0 => 1176,
      1 => 66,
      2 => 'Xã Sơn Nam',
    ),
    1176 => 
    array (
      0 => 1177,
      1 => 66,
      2 => 'Xã Hào Phú',
    ),
    1177 => 
    array (
      0 => 1178,
      1 => 66,
      2 => 'Xã Tam Đa',
    ),
    1178 => 
    array (
      0 => 1179,
      1 => 66,
      2 => 'Xã Trường Sinh',
    ),
    1179 => 
    array (
      0 => 1180,
      1 => 67,
      2 => 'Phường Duyên Hải',
    ),
    1180 => 
    array (
      0 => 1181,
      1 => 67,
      2 => 'Phường Lào Cai',
    ),
    1181 => 
    array (
      0 => 1182,
      1 => 67,
      2 => 'Phường Cốc Lếu',
    ),
    1182 => 
    array (
      0 => 1183,
      1 => 67,
      2 => 'Phường Kim Tân',
    ),
    1183 => 
    array (
      0 => 1184,
      1 => 67,
      2 => 'Phường Bắc Lệnh',
    ),
    1184 => 
    array (
      0 => 1185,
      1 => 67,
      2 => 'Phường Pom Hán',
    ),
    1185 => 
    array (
      0 => 1186,
      1 => 67,
      2 => 'Phường Xuân Tăng',
    ),
    1186 => 
    array (
      0 => 1187,
      1 => 67,
      2 => 'Phường Bình Minh',
    ),
    1187 => 
    array (
      0 => 1188,
      1 => 67,
      2 => 'Xã Thống Nhất',
    ),
    1188 => 
    array (
      0 => 1189,
      1 => 67,
      2 => 'Xã Đồng Tuyển',
    ),
    1189 => 
    array (
      0 => 1190,
      1 => 67,
      2 => 'Xã Vạn Hoà',
    ),
    1190 => 
    array (
      0 => 1191,
      1 => 67,
      2 => 'Phường Bắc Cường',
    ),
    1191 => 
    array (
      0 => 1192,
      1 => 67,
      2 => 'Phường Nam Cường',
    ),
    1192 => 
    array (
      0 => 1193,
      1 => 67,
      2 => 'Xã Cam Đường',
    ),
    1193 => 
    array (
      0 => 1194,
      1 => 67,
      2 => 'Xã Tả Phời',
    ),
    1194 => 
    array (
      0 => 1195,
      1 => 67,
      2 => 'Xã Hợp Thành',
    ),
    1195 => 
    array (
      0 => 1196,
      1 => 67,
      2 => 'Xã Cốc San',
    ),
    1196 => 
    array (
      0 => 1197,
      1 => 68,
      2 => 'Thị trấn Bát Xát',
    ),
    1197 => 
    array (
      0 => 1198,
      1 => 68,
      2 => 'Xã A Mú Sung',
    ),
    1198 => 
    array (
      0 => 1199,
      1 => 68,
      2 => 'Xã Nậm Chạc',
    ),
    1199 => 
    array (
      0 => 1200,
      1 => 68,
      2 => 'Xã A Lù',
    ),
    1200 => 
    array (
      0 => 1201,
      1 => 68,
      2 => 'Xã Trịnh Tường',
    ),
    1201 => 
    array (
      0 => 1202,
      1 => 68,
      2 => 'Xã Y Tý',
    ),
    1202 => 
    array (
      0 => 1203,
      1 => 68,
      2 => 'Xã Cốc Mỳ',
    ),
    1203 => 
    array (
      0 => 1204,
      1 => 68,
      2 => 'Xã Dền Sáng',
    ),
    1204 => 
    array (
      0 => 1205,
      1 => 68,
      2 => 'Xã Bản Vược',
    ),
    1205 => 
    array (
      0 => 1206,
      1 => 68,
      2 => 'Xã Sàng Ma Sáo',
    ),
    1206 => 
    array (
      0 => 1207,
      1 => 68,
      2 => 'Xã Bản Qua',
    ),
    1207 => 
    array (
      0 => 1208,
      1 => 68,
      2 => 'Xã Mường Vi',
    ),
    1208 => 
    array (
      0 => 1209,
      1 => 68,
      2 => 'Xã Dền Thàng',
    ),
    1209 => 
    array (
      0 => 1210,
      1 => 68,
      2 => 'Xã Bản Xèo',
    ),
    1210 => 
    array (
      0 => 1211,
      1 => 68,
      2 => 'Xã Mường Hum',
    ),
    1211 => 
    array (
      0 => 1212,
      1 => 68,
      2 => 'Xã Trung Lèng Hồ',
    ),
    1212 => 
    array (
      0 => 1213,
      1 => 68,
      2 => 'Xã Quang Kim',
    ),
    1213 => 
    array (
      0 => 1214,
      1 => 68,
      2 => 'Xã Pa Cheo',
    ),
    1214 => 
    array (
      0 => 1215,
      1 => 68,
      2 => 'Xã Nậm Pung',
    ),
    1215 => 
    array (
      0 => 1216,
      1 => 68,
      2 => 'Xã Phìn Ngan',
    ),
    1216 => 
    array (
      0 => 1217,
      1 => 68,
      2 => 'Xã Tòng Sành',
    ),
    1217 => 
    array (
      0 => 1218,
      1 => 69,
      2 => 'Xã Pha Long',
    ),
    1218 => 
    array (
      0 => 1219,
      1 => 69,
      2 => 'Xã Tả Ngải Chồ',
    ),
    1219 => 
    array (
      0 => 1220,
      1 => 69,
      2 => 'Xã Tung Chung Phố',
    ),
    1220 => 
    array (
      0 => 1221,
      1 => 69,
      2 => 'Thị trấn Mường Khương',
    ),
    1221 => 
    array (
      0 => 1222,
      1 => 69,
      2 => 'Xã Dìn Chin',
    ),
    1222 => 
    array (
      0 => 1223,
      1 => 69,
      2 => 'Xã Tả Gia Khâu',
    ),
    1223 => 
    array (
      0 => 1224,
      1 => 69,
      2 => 'Xã Nậm Chảy',
    ),
    1224 => 
    array (
      0 => 1225,
      1 => 69,
      2 => 'Xã Nấm Lư',
    ),
    1225 => 
    array (
      0 => 1226,
      1 => 69,
      2 => 'Xã Lùng Khấu Nhin',
    ),
    1226 => 
    array (
      0 => 1227,
      1 => 69,
      2 => 'Xã Thanh Bình',
    ),
    1227 => 
    array (
      0 => 1228,
      1 => 69,
      2 => 'Xã Cao Sơn',
    ),
    1228 => 
    array (
      0 => 1229,
      1 => 69,
      2 => 'Xã Lùng Vai',
    ),
    1229 => 
    array (
      0 => 1230,
      1 => 69,
      2 => 'Xã Bản Lầu',
    ),
    1230 => 
    array (
      0 => 1231,
      1 => 69,
      2 => 'Xã La Pan Tẩn',
    ),
    1231 => 
    array (
      0 => 1232,
      1 => 69,
      2 => 'Xã Tả Thàng',
    ),
    1232 => 
    array (
      0 => 1233,
      1 => 69,
      2 => 'Xã Bản Sen',
    ),
    1233 => 
    array (
      0 => 1234,
      1 => 70,
      2 => 'Xã Nàn Sán',
    ),
    1234 => 
    array (
      0 => 1235,
      1 => 70,
      2 => 'Xã Thào Chư Phìn',
    ),
    1235 => 
    array (
      0 => 1236,
      1 => 70,
      2 => 'Xã Bản Mế',
    ),
    1236 => 
    array (
      0 => 1237,
      1 => 70,
      2 => 'Thị trấn Si Ma Cai',
    ),
    1237 => 
    array (
      0 => 1238,
      1 => 70,
      2 => 'Xã Sán Chải',
    ),
    1238 => 
    array (
      0 => 1239,
      1 => 70,
      2 => 'Xã Lùng Thẩn',
    ),
    1239 => 
    array (
      0 => 1240,
      1 => 70,
      2 => 'Xã Cán Cấu',
    ),
    1240 => 
    array (
      0 => 1241,
      1 => 70,
      2 => 'Xã Sín Chéng',
    ),
    1241 => 
    array (
      0 => 1242,
      1 => 70,
      2 => 'Xã Quan Hồ Thẩn',
    ),
    1242 => 
    array (
      0 => 1243,
      1 => 70,
      2 => 'Xã Nàn Xín',
    ),
    1243 => 
    array (
      0 => 1244,
      1 => 71,
      2 => 'Thị trấn Bắc Hà',
    ),
    1244 => 
    array (
      0 => 1245,
      1 => 71,
      2 => 'Xã Lùng Cải',
    ),
    1245 => 
    array (
      0 => 1246,
      1 => 71,
      2 => 'Xã Lùng Phình',
    ),
    1246 => 
    array (
      0 => 1247,
      1 => 71,
      2 => 'Xã Tả Van Chư',
    ),
    1247 => 
    array (
      0 => 1248,
      1 => 71,
      2 => 'Xã Tả Củ Tỷ',
    ),
    1248 => 
    array (
      0 => 1249,
      1 => 71,
      2 => 'Xã Thải Giàng Phố',
    ),
    1249 => 
    array (
      0 => 1250,
      1 => 71,
      2 => 'Xã Hoàng Thu Phố',
    ),
    1250 => 
    array (
      0 => 1251,
      1 => 71,
      2 => 'Xã Bản Phố',
    ),
    1251 => 
    array (
      0 => 1252,
      1 => 71,
      2 => 'Xã Bản Liền',
    ),
    1252 => 
    array (
      0 => 1253,
      1 => 71,
      2 => 'Xã Tà Chải',
    ),
    1253 => 
    array (
      0 => 1254,
      1 => 71,
      2 => 'Xã Na Hối',
    ),
    1254 => 
    array (
      0 => 1255,
      1 => 71,
      2 => 'Xã Cốc Ly',
    ),
    1255 => 
    array (
      0 => 1256,
      1 => 71,
      2 => 'Xã Nậm Mòn',
    ),
    1256 => 
    array (
      0 => 1257,
      1 => 71,
      2 => 'Xã Nậm Đét',
    ),
    1257 => 
    array (
      0 => 1258,
      1 => 71,
      2 => 'Xã Nậm Khánh',
    ),
    1258 => 
    array (
      0 => 1259,
      1 => 71,
      2 => 'Xã Bảo Nhai',
    ),
    1259 => 
    array (
      0 => 1260,
      1 => 71,
      2 => 'Xã Nậm Lúc',
    ),
    1260 => 
    array (
      0 => 1261,
      1 => 71,
      2 => 'Xã Cốc Lầu',
    ),
    1261 => 
    array (
      0 => 1262,
      1 => 71,
      2 => 'Xã Bản Cái',
    ),
    1262 => 
    array (
      0 => 1263,
      1 => 72,
      2 => 'Thị trấn N.T Phong Hải',
    ),
    1263 => 
    array (
      0 => 1264,
      1 => 72,
      2 => 'Thị trấn Phố Lu',
    ),
    1264 => 
    array (
      0 => 1265,
      1 => 72,
      2 => 'Thị trấn Tằng Loỏng',
    ),
    1265 => 
    array (
      0 => 1266,
      1 => 72,
      2 => 'Xã Bản Phiệt',
    ),
    1266 => 
    array (
      0 => 1267,
      1 => 72,
      2 => 'Xã Bản Cầm',
    ),
    1267 => 
    array (
      0 => 1268,
      1 => 72,
      2 => 'Xã Thái Niên',
    ),
    1268 => 
    array (
      0 => 1269,
      1 => 72,
      2 => 'Xã Phong Niên',
    ),
    1269 => 
    array (
      0 => 1270,
      1 => 72,
      2 => 'Xã Gia Phú',
    ),
    1270 => 
    array (
      0 => 1271,
      1 => 72,
      2 => 'Xã Xuân Quang',
    ),
    1271 => 
    array (
      0 => 1272,
      1 => 72,
      2 => 'Xã Sơn Hải',
    ),
    1272 => 
    array (
      0 => 1273,
      1 => 72,
      2 => 'Xã Xuân Giao',
    ),
    1273 => 
    array (
      0 => 1274,
      1 => 72,
      2 => 'Xã Trì Quang',
    ),
    1274 => 
    array (
      0 => 1275,
      1 => 72,
      2 => 'Xã Sơn Hà',
    ),
    1275 => 
    array (
      0 => 1276,
      1 => 72,
      2 => 'Xã Phú Nhuận',
    ),
    1276 => 
    array (
      0 => 1277,
      1 => 73,
      2 => 'Thị trấn Phố Ràng',
    ),
    1277 => 
    array (
      0 => 1278,
      1 => 73,
      2 => 'Xã Tân Tiến',
    ),
    1278 => 
    array (
      0 => 1279,
      1 => 73,
      2 => 'Xã Nghĩa Đô',
    ),
    1279 => 
    array (
      0 => 1280,
      1 => 73,
      2 => 'Xã Vĩnh Yên',
    ),
    1280 => 
    array (
      0 => 1281,
      1 => 73,
      2 => 'Xã Điện Quan',
    ),
    1281 => 
    array (
      0 => 1282,
      1 => 73,
      2 => 'Xã Xuân Hoà',
    ),
    1282 => 
    array (
      0 => 1283,
      1 => 73,
      2 => 'Xã Tân Dương',
    ),
    1283 => 
    array (
      0 => 1284,
      1 => 73,
      2 => 'Xã Thượng Hà',
    ),
    1284 => 
    array (
      0 => 1285,
      1 => 73,
      2 => 'Xã Kim Sơn',
    ),
    1285 => 
    array (
      0 => 1286,
      1 => 73,
      2 => 'Xã Cam Cọn',
    ),
    1286 => 
    array (
      0 => 1287,
      1 => 73,
      2 => 'Xã Minh Tân',
    ),
    1287 => 
    array (
      0 => 1288,
      1 => 73,
      2 => 'Xã Xuân Thượng',
    ),
    1288 => 
    array (
      0 => 1289,
      1 => 73,
      2 => 'Xã Việt Tiến',
    ),
    1289 => 
    array (
      0 => 1290,
      1 => 73,
      2 => 'Xã Yên Sơn',
    ),
    1290 => 
    array (
      0 => 1291,
      1 => 73,
      2 => 'Xã Bảo Hà',
    ),
    1291 => 
    array (
      0 => 1292,
      1 => 73,
      2 => 'Xã Lương Sơn',
    ),
    1292 => 
    array (
      0 => 1293,
      1 => 73,
      2 => 'Xã Phúc Khánh',
    ),
    1293 => 
    array (
      0 => 1294,
      1 => 74,
      2 => 'Phường Sa Pa',
    ),
    1294 => 
    array (
      0 => 1295,
      1 => 74,
      2 => 'Phường Ô Quý Hồ',
    ),
    1295 => 
    array (
      0 => 1296,
      1 => 74,
      2 => 'Xã Ngũ Chỉ Sơn',
    ),
    1296 => 
    array (
      0 => 1297,
      1 => 74,
      2 => 'Phường Phan Si Păng',
    ),
    1297 => 
    array (
      0 => 1298,
      1 => 74,
      2 => 'Xã Trung Chải',
    ),
    1298 => 
    array (
      0 => 1299,
      1 => 74,
      2 => 'Xã Tả Phìn',
    ),
    1299 => 
    array (
      0 => 1300,
      1 => 74,
      2 => 'Phường Hàm Rồng',
    ),
    1300 => 
    array (
      0 => 1301,
      1 => 74,
      2 => 'Xã Hoàng Liên',
    ),
    1301 => 
    array (
      0 => 1302,
      1 => 74,
      2 => 'Xã Thanh Bình',
    ),
    1302 => 
    array (
      0 => 1303,
      1 => 74,
      2 => 'Phường Cầu Mây',
    ),
    1303 => 
    array (
      0 => 1304,
      1 => 74,
      2 => 'Xã Mường Hoa',
    ),
    1304 => 
    array (
      0 => 1305,
      1 => 74,
      2 => 'Xã Tả Van',
    ),
    1305 => 
    array (
      0 => 1306,
      1 => 74,
      2 => 'Xã Mường Bo',
    ),
    1306 => 
    array (
      0 => 1307,
      1 => 74,
      2 => 'Xã Bản Hồ',
    ),
    1307 => 
    array (
      0 => 1308,
      1 => 74,
      2 => 'Xã Liên Minh',
    ),
    1308 => 
    array (
      0 => 1309,
      1 => 75,
      2 => 'Thị trấn Khánh Yên',
    ),
    1309 => 
    array (
      0 => 1310,
      1 => 75,
      2 => 'Xã Võ Lao',
    ),
    1310 => 
    array (
      0 => 1311,
      1 => 75,
      2 => 'Xã Sơn Thuỷ',
    ),
    1311 => 
    array (
      0 => 1312,
      1 => 75,
      2 => 'Xã Nậm Mả',
    ),
    1312 => 
    array (
      0 => 1313,
      1 => 75,
      2 => 'Xã Tân Thượng',
    ),
    1313 => 
    array (
      0 => 1314,
      1 => 75,
      2 => 'Xã Nậm Rạng',
    ),
    1314 => 
    array (
      0 => 1315,
      1 => 75,
      2 => 'Xã Nậm Chầy',
    ),
    1315 => 
    array (
      0 => 1316,
      1 => 75,
      2 => 'Xã Tân An',
    ),
    1316 => 
    array (
      0 => 1317,
      1 => 75,
      2 => 'Xã Khánh Yên Thượng',
    ),
    1317 => 
    array (
      0 => 1318,
      1 => 75,
      2 => 'Xã Nậm Xé',
    ),
    1318 => 
    array (
      0 => 1319,
      1 => 75,
      2 => 'Xã Dần Thàng',
    ),
    1319 => 
    array (
      0 => 1320,
      1 => 75,
      2 => 'Xã Chiềng Ken',
    ),
    1320 => 
    array (
      0 => 1321,
      1 => 75,
      2 => 'Xã Làng Giàng',
    ),
    1321 => 
    array (
      0 => 1322,
      1 => 75,
      2 => 'Xã Hoà Mạc',
    ),
    1322 => 
    array (
      0 => 1323,
      1 => 75,
      2 => 'Xã Khánh Yên Trung',
    ),
    1323 => 
    array (
      0 => 1324,
      1 => 75,
      2 => 'Xã Khánh Yên Hạ',
    ),
    1324 => 
    array (
      0 => 1325,
      1 => 75,
      2 => 'Xã Dương Quỳ',
    ),
    1325 => 
    array (
      0 => 1326,
      1 => 75,
      2 => 'Xã Nậm Tha',
    ),
    1326 => 
    array (
      0 => 1327,
      1 => 75,
      2 => 'Xã Minh Lương',
    ),
    1327 => 
    array (
      0 => 1328,
      1 => 75,
      2 => 'Xã Thẩm Dương',
    ),
    1328 => 
    array (
      0 => 1329,
      1 => 75,
      2 => 'Xã Liêm Phú',
    ),
    1329 => 
    array (
      0 => 1330,
      1 => 75,
      2 => 'Xã Nậm Xây',
    ),
    1330 => 
    array (
      0 => 1331,
      1 => 76,
      2 => 'Phường Noong Bua',
    ),
    1331 => 
    array (
      0 => 1332,
      1 => 76,
      2 => 'Phường Him Lam',
    ),
    1332 => 
    array (
      0 => 1333,
      1 => 76,
      2 => 'Phường Thanh Bình',
    ),
    1333 => 
    array (
      0 => 1334,
      1 => 76,
      2 => 'Phường Tân Thanh',
    ),
    1334 => 
    array (
      0 => 1335,
      1 => 76,
      2 => 'Phường Mường Thanh',
    ),
    1335 => 
    array (
      0 => 1336,
      1 => 76,
      2 => 'Phường Nam Thanh',
    ),
    1336 => 
    array (
      0 => 1337,
      1 => 76,
      2 => 'Phường Thanh Trường',
    ),
    1337 => 
    array (
      0 => 1338,
      1 => 76,
      2 => 'Xã Thanh Minh',
    ),
    1338 => 
    array (
      0 => 1339,
      1 => 76,
      2 => 'Xã Nà Tấu',
    ),
    1339 => 
    array (
      0 => 1340,
      1 => 76,
      2 => 'Xã Nà Nhạn',
    ),
    1340 => 
    array (
      0 => 1341,
      1 => 76,
      2 => 'Xã Mường Phăng',
    ),
    1341 => 
    array (
      0 => 1342,
      1 => 76,
      2 => 'Xã Pá Khoang',
    ),
    1342 => 
    array (
      0 => 1343,
      1 => 77,
      2 => 'Phường Sông Đà',
    ),
    1343 => 
    array (
      0 => 1344,
      1 => 77,
      2 => 'Phường Na Lay',
    ),
    1344 => 
    array (
      0 => 1345,
      1 => 77,
      2 => 'Xã Lay Nưa',
    ),
    1345 => 
    array (
      0 => 1346,
      1 => 78,
      2 => 'Xã Sín Thầu',
    ),
    1346 => 
    array (
      0 => 1347,
      1 => 78,
      2 => 'Xã Sen Thượng',
    ),
    1347 => 
    array (
      0 => 1348,
      1 => 78,
      2 => 'Xã Chung Chải',
    ),
    1348 => 
    array (
      0 => 1349,
      1 => 78,
      2 => 'Xã Leng Su Sìn',
    ),
    1349 => 
    array (
      0 => 1350,
      1 => 78,
      2 => 'Xã Pá Mỳ',
    ),
    1350 => 
    array (
      0 => 1351,
      1 => 78,
      2 => 'Xã Mường Nhé',
    ),
    1351 => 
    array (
      0 => 1352,
      1 => 78,
      2 => 'Xã Nậm Vì',
    ),
    1352 => 
    array (
      0 => 1353,
      1 => 78,
      2 => 'Xã Nậm Kè',
    ),
    1353 => 
    array (
      0 => 1354,
      1 => 78,
      2 => 'Xã Mường Toong',
    ),
    1354 => 
    array (
      0 => 1355,
      1 => 78,
      2 => 'Xã Quảng Lâm',
    ),
    1355 => 
    array (
      0 => 1356,
      1 => 78,
      2 => 'Xã Huổi Lếnh',
    ),
    1356 => 
    array (
      0 => 1357,
      1 => 79,
      2 => 'Thị Trấn Mường Chà',
    ),
    1357 => 
    array (
      0 => 1358,
      1 => 79,
      2 => 'Xã Xá Tổng',
    ),
    1358 => 
    array (
      0 => 1359,
      1 => 79,
      2 => 'Xã Mường Tùng',
    ),
    1359 => 
    array (
      0 => 1360,
      1 => 79,
      2 => 'Xã Hừa Ngài',
    ),
    1360 => 
    array (
      0 => 1361,
      1 => 79,
      2 => 'Xã Huổi Mí',
    ),
    1361 => 
    array (
      0 => 1362,
      1 => 79,
      2 => 'Xã Pa Ham',
    ),
    1362 => 
    array (
      0 => 1363,
      1 => 79,
      2 => 'Xã Nậm Nèn',
    ),
    1363 => 
    array (
      0 => 1364,
      1 => 79,
      2 => 'Xã Huổi Lèng',
    ),
    1364 => 
    array (
      0 => 1365,
      1 => 79,
      2 => 'Xã Sa Lông',
    ),
    1365 => 
    array (
      0 => 1366,
      1 => 79,
      2 => 'Xã Ma Thì Hồ',
    ),
    1366 => 
    array (
      0 => 1367,
      1 => 79,
      2 => 'Xã Na Sang',
    ),
    1367 => 
    array (
      0 => 1368,
      1 => 79,
      2 => 'Xã Mường Mươn',
    ),
    1368 => 
    array (
      0 => 1369,
      1 => 80,
      2 => 'Thị trấn Tủa Chùa',
    ),
    1369 => 
    array (
      0 => 1370,
      1 => 80,
      2 => 'Xã Huổi Só',
    ),
    1370 => 
    array (
      0 => 1371,
      1 => 80,
      2 => 'Xã Xín Chải',
    ),
    1371 => 
    array (
      0 => 1372,
      1 => 80,
      2 => 'Xã Tả Sìn Thàng',
    ),
    1372 => 
    array (
      0 => 1373,
      1 => 80,
      2 => 'Xã Lao Xả Phình',
    ),
    1373 => 
    array (
      0 => 1374,
      1 => 80,
      2 => 'Xã Tả Phìn',
    ),
    1374 => 
    array (
      0 => 1375,
      1 => 80,
      2 => 'Xã Tủa Thàng',
    ),
    1375 => 
    array (
      0 => 1376,
      1 => 80,
      2 => 'Xã Trung Thu',
    ),
    1376 => 
    array (
      0 => 1377,
      1 => 80,
      2 => 'Xã Sính Phình',
    ),
    1377 => 
    array (
      0 => 1378,
      1 => 80,
      2 => 'Xã Sáng Nhè',
    ),
    1378 => 
    array (
      0 => 1379,
      1 => 80,
      2 => 'Xã Mường Đun',
    ),
    1379 => 
    array (
      0 => 1380,
      1 => 80,
      2 => 'Xã Mường Báng',
    ),
    1380 => 
    array (
      0 => 1381,
      1 => 81,
      2 => 'Thị trấn Tuần Giáo',
    ),
    1381 => 
    array (
      0 => 1382,
      1 => 81,
      2 => 'Xã Phình Sáng',
    ),
    1382 => 
    array (
      0 => 1383,
      1 => 81,
      2 => 'Xã Rạng Đông',
    ),
    1383 => 
    array (
      0 => 1384,
      1 => 81,
      2 => 'Xã Mùn Chung',
    ),
    1384 => 
    array (
      0 => 1385,
      1 => 81,
      2 => 'Xã Nà Tòng',
    ),
    1385 => 
    array (
      0 => 1386,
      1 => 81,
      2 => 'Xã Ta Ma',
    ),
    1386 => 
    array (
      0 => 1387,
      1 => 81,
      2 => 'Xã Mường Mùn',
    ),
    1387 => 
    array (
      0 => 1388,
      1 => 81,
      2 => 'Xã Pú Xi',
    ),
    1388 => 
    array (
      0 => 1389,
      1 => 81,
      2 => 'Xã Pú Nhung',
    ),
    1389 => 
    array (
      0 => 1390,
      1 => 81,
      2 => 'Xã Quài Nưa',
    ),
    1390 => 
    array (
      0 => 1391,
      1 => 81,
      2 => 'Xã Mường Thín',
    ),
    1391 => 
    array (
      0 => 1392,
      1 => 81,
      2 => 'Xã Tỏa Tình',
    ),
    1392 => 
    array (
      0 => 1393,
      1 => 81,
      2 => 'Xã Nà Sáy',
    ),
    1393 => 
    array (
      0 => 1394,
      1 => 81,
      2 => 'Xã Mường Khong',
    ),
    1394 => 
    array (
      0 => 1395,
      1 => 81,
      2 => 'Xã Quài Cang',
    ),
    1395 => 
    array (
      0 => 1396,
      1 => 81,
      2 => 'Xã Quài Tở',
    ),
    1396 => 
    array (
      0 => 1397,
      1 => 81,
      2 => 'Xã Chiềng Sinh',
    ),
    1397 => 
    array (
      0 => 1398,
      1 => 81,
      2 => 'Xã Chiềng Đông',
    ),
    1398 => 
    array (
      0 => 1399,
      1 => 81,
      2 => 'Xã Tênh Phông',
    ),
    1399 => 
    array (
      0 => 1400,
      1 => 82,
      2 => 'Xã Mường Pồn',
    ),
    1400 => 
    array (
      0 => 1401,
      1 => 82,
      2 => 'Xã Thanh Nưa',
    ),
    1401 => 
    array (
      0 => 1402,
      1 => 82,
      2 => 'Xã Hua Thanh',
    ),
    1402 => 
    array (
      0 => 1403,
      1 => 82,
      2 => 'Xã Thanh Luông',
    ),
    1403 => 
    array (
      0 => 1404,
      1 => 82,
      2 => 'Xã Thanh Hưng',
    ),
    1404 => 
    array (
      0 => 1405,
      1 => 82,
      2 => 'Xã Thanh Xương',
    ),
    1405 => 
    array (
      0 => 1406,
      1 => 82,
      2 => 'Xã Thanh Chăn',
    ),
    1406 => 
    array (
      0 => 1407,
      1 => 82,
      2 => 'Xã Pa Thơm',
    ),
    1407 => 
    array (
      0 => 1408,
      1 => 82,
      2 => 'Xã Thanh An',
    ),
    1408 => 
    array (
      0 => 1409,
      1 => 82,
      2 => 'Xã Thanh Yên',
    ),
    1409 => 
    array (
      0 => 1410,
      1 => 82,
      2 => 'Xã Noong Luống',
    ),
    1410 => 
    array (
      0 => 1411,
      1 => 82,
      2 => 'Xã Noọng Hẹt',
    ),
    1411 => 
    array (
      0 => 1412,
      1 => 82,
      2 => 'Xã Sam Mứn',
    ),
    1412 => 
    array (
      0 => 1413,
      1 => 82,
      2 => 'Xã Pom Lót',
    ),
    1413 => 
    array (
      0 => 1414,
      1 => 82,
      2 => 'Xã Núa Ngam',
    ),
    1414 => 
    array (
      0 => 1415,
      1 => 82,
      2 => 'Xã Hẹ Muông',
    ),
    1415 => 
    array (
      0 => 1416,
      1 => 82,
      2 => 'Xã Na Ư',
    ),
    1416 => 
    array (
      0 => 1417,
      1 => 82,
      2 => 'Xã Mường Nhà',
    ),
    1417 => 
    array (
      0 => 1418,
      1 => 82,
      2 => 'Xã Na Tông',
    ),
    1418 => 
    array (
      0 => 1419,
      1 => 82,
      2 => 'Xã Mường Lói',
    ),
    1419 => 
    array (
      0 => 1420,
      1 => 82,
      2 => 'Xã Phu Luông',
    ),
    1420 => 
    array (
      0 => 1421,
      1 => 83,
      2 => 'Thị trấn Điện Biên Đông',
    ),
    1421 => 
    array (
      0 => 1422,
      1 => 83,
      2 => 'Xã Na Son',
    ),
    1422 => 
    array (
      0 => 1423,
      1 => 83,
      2 => 'Xã Phì Nhừ',
    ),
    1423 => 
    array (
      0 => 1424,
      1 => 83,
      2 => 'Xã Chiềng Sơ',
    ),
    1424 => 
    array (
      0 => 1425,
      1 => 83,
      2 => 'Xã Mường Luân',
    ),
    1425 => 
    array (
      0 => 1426,
      1 => 83,
      2 => 'Xã Pú Nhi',
    ),
    1426 => 
    array (
      0 => 1427,
      1 => 83,
      2 => 'Xã Nong U',
    ),
    1427 => 
    array (
      0 => 1428,
      1 => 83,
      2 => 'Xã Xa Dung',
    ),
    1428 => 
    array (
      0 => 1429,
      1 => 83,
      2 => 'Xã Keo Lôm',
    ),
    1429 => 
    array (
      0 => 1430,
      1 => 83,
      2 => 'Xã Luân Giới',
    ),
    1430 => 
    array (
      0 => 1431,
      1 => 83,
      2 => 'Xã Phình Giàng',
    ),
    1431 => 
    array (
      0 => 1432,
      1 => 83,
      2 => 'Xã Pú Hồng',
    ),
    1432 => 
    array (
      0 => 1433,
      1 => 83,
      2 => 'Xã Tìa Dình',
    ),
    1433 => 
    array (
      0 => 1434,
      1 => 83,
      2 => 'Xã Háng Lìa',
    ),
    1434 => 
    array (
      0 => 1435,
      1 => 84,
      2 => 'Thị trấn Mường Ảng',
    ),
    1435 => 
    array (
      0 => 1436,
      1 => 84,
      2 => 'Xã Mường Đăng',
    ),
    1436 => 
    array (
      0 => 1437,
      1 => 84,
      2 => 'Xã Ngối Cáy',
    ),
    1437 => 
    array (
      0 => 1438,
      1 => 84,
      2 => 'Xã Ẳng Tở',
    ),
    1438 => 
    array (
      0 => 1439,
      1 => 84,
      2 => 'Xã Búng Lao',
    ),
    1439 => 
    array (
      0 => 1440,
      1 => 84,
      2 => 'Xã Xuân Lao',
    ),
    1440 => 
    array (
      0 => 1441,
      1 => 84,
      2 => 'Xã Ẳng Nưa',
    ),
    1441 => 
    array (
      0 => 1442,
      1 => 84,
      2 => 'Xã Ẳng Cang',
    ),
    1442 => 
    array (
      0 => 1443,
      1 => 84,
      2 => 'Xã Nặm Lịch',
    ),
    1443 => 
    array (
      0 => 1444,
      1 => 84,
      2 => 'Xã Mường Lạn',
    ),
    1444 => 
    array (
      0 => 1445,
      1 => 85,
      2 => 'Xã Nậm Tin',
    ),
    1445 => 
    array (
      0 => 1446,
      1 => 85,
      2 => 'Xã Pa Tần',
    ),
    1446 => 
    array (
      0 => 1447,
      1 => 85,
      2 => 'Xã Chà Cang',
    ),
    1447 => 
    array (
      0 => 1448,
      1 => 85,
      2 => 'Xã Na Cô Sa',
    ),
    1448 => 
    array (
      0 => 1449,
      1 => 85,
      2 => 'Xã Nà Khoa',
    ),
    1449 => 
    array (
      0 => 1450,
      1 => 85,
      2 => 'Xã Nà Hỳ',
    ),
    1450 => 
    array (
      0 => 1451,
      1 => 85,
      2 => 'Xã Nà Bủng',
    ),
    1451 => 
    array (
      0 => 1452,
      1 => 85,
      2 => 'Xã Nậm Nhừ',
    ),
    1452 => 
    array (
      0 => 1453,
      1 => 85,
      2 => 'Xã Nậm Chua',
    ),
    1453 => 
    array (
      0 => 1454,
      1 => 85,
      2 => 'Xã Nậm Khăn',
    ),
    1454 => 
    array (
      0 => 1455,
      1 => 85,
      2 => 'Xã Chà Tở',
    ),
    1455 => 
    array (
      0 => 1456,
      1 => 85,
      2 => 'Xã Vàng Đán',
    ),
    1456 => 
    array (
      0 => 1457,
      1 => 85,
      2 => 'Xã Chà Nưa',
    ),
    1457 => 
    array (
      0 => 1458,
      1 => 85,
      2 => 'Xã Phìn Hồ',
    ),
    1458 => 
    array (
      0 => 1459,
      1 => 85,
      2 => 'Xã Si Pa Phìn',
    ),
    1459 => 
    array (
      0 => 1460,
      1 => 86,
      2 => 'Phường Quyết Thắng',
    ),
    1460 => 
    array (
      0 => 1461,
      1 => 86,
      2 => 'Phường Tân Phong',
    ),
    1461 => 
    array (
      0 => 1462,
      1 => 86,
      2 => 'Phường Quyết Tiến',
    ),
    1462 => 
    array (
      0 => 1463,
      1 => 86,
      2 => 'Phường Đoàn Kết',
    ),
    1463 => 
    array (
      0 => 1464,
      1 => 86,
      2 => 'Xã Sùng Phài',
    ),
    1464 => 
    array (
      0 => 1465,
      1 => 86,
      2 => 'Phường Đông Phong',
    ),
    1465 => 
    array (
      0 => 1466,
      1 => 86,
      2 => 'Xã San Thàng',
    ),
    1466 => 
    array (
      0 => 1467,
      1 => 87,
      2 => 'Thị trấn Tam Đường',
    ),
    1467 => 
    array (
      0 => 1468,
      1 => 87,
      2 => 'Xã Thèn Sin',
    ),
    1468 => 
    array (
      0 => 1469,
      1 => 87,
      2 => 'Xã Tả Lèng',
    ),
    1469 => 
    array (
      0 => 1470,
      1 => 87,
      2 => 'Xã Giang Ma',
    ),
    1470 => 
    array (
      0 => 1471,
      1 => 87,
      2 => 'Xã Hồ Thầu',
    ),
    1471 => 
    array (
      0 => 1472,
      1 => 87,
      2 => 'Xã Bình Lư',
    ),
    1472 => 
    array (
      0 => 1473,
      1 => 87,
      2 => 'Xã Sơn Bình',
    ),
    1473 => 
    array (
      0 => 1474,
      1 => 87,
      2 => 'Xã Nùng Nàng',
    ),
    1474 => 
    array (
      0 => 1475,
      1 => 87,
      2 => 'Xã Bản Giang',
    ),
    1475 => 
    array (
      0 => 1476,
      1 => 87,
      2 => 'Xã Bản Hon',
    ),
    1476 => 
    array (
      0 => 1477,
      1 => 87,
      2 => 'Xã Bản Bo',
    ),
    1477 => 
    array (
      0 => 1478,
      1 => 87,
      2 => 'Xã Nà Tăm',
    ),
    1478 => 
    array (
      0 => 1479,
      1 => 87,
      2 => 'Xã Khun Há',
    ),
    1479 => 
    array (
      0 => 1480,
      1 => 88,
      2 => 'Thị trấn Mường Tè',
    ),
    1480 => 
    array (
      0 => 1481,
      1 => 88,
      2 => 'Xã Thu Lũm',
    ),
    1481 => 
    array (
      0 => 1482,
      1 => 88,
      2 => 'Xã Ka Lăng',
    ),
    1482 => 
    array (
      0 => 1483,
      1 => 88,
      2 => 'Xã Tá Bạ',
    ),
    1483 => 
    array (
      0 => 1484,
      1 => 88,
      2 => 'Xã Pa ủ',
    ),
    1484 => 
    array (
      0 => 1485,
      1 => 88,
      2 => 'Xã Mường Tè',
    ),
    1485 => 
    array (
      0 => 1486,
      1 => 88,
      2 => 'Xã Pa Vệ Sử',
    ),
    1486 => 
    array (
      0 => 1487,
      1 => 88,
      2 => 'Xã Mù Cả',
    ),
    1487 => 
    array (
      0 => 1488,
      1 => 88,
      2 => 'Xã Bum Tở',
    ),
    1488 => 
    array (
      0 => 1489,
      1 => 88,
      2 => 'Xã Nậm Khao',
    ),
    1489 => 
    array (
      0 => 1490,
      1 => 88,
      2 => 'Xã Tà Tổng',
    ),
    1490 => 
    array (
      0 => 1491,
      1 => 88,
      2 => 'Xã Bum Nưa',
    ),
    1491 => 
    array (
      0 => 1492,
      1 => 88,
      2 => 'Xã Vàng San',
    ),
    1492 => 
    array (
      0 => 1493,
      1 => 88,
      2 => 'Xã Kan Hồ',
    ),
    1493 => 
    array (
      0 => 1494,
      1 => 89,
      2 => 'Thị trấn Sìn Hồ',
    ),
    1494 => 
    array (
      0 => 1495,
      1 => 89,
      2 => 'Xã Chăn Nưa',
    ),
    1495 => 
    array (
      0 => 1496,
      1 => 89,
      2 => 'Xã Pa Tần',
    ),
    1496 => 
    array (
      0 => 1497,
      1 => 89,
      2 => 'Xã Phìn Hồ',
    ),
    1497 => 
    array (
      0 => 1498,
      1 => 89,
      2 => 'Xã Hồng Thu',
    ),
    1498 => 
    array (
      0 => 1499,
      1 => 89,
      2 => 'Xã Phăng Sô Lin',
    ),
    1499 => 
    array (
      0 => 1500,
      1 => 89,
      2 => 'Xã Ma Quai',
    ),
    1500 => 
    array (
      0 => 1501,
      1 => 89,
      2 => 'Xã Lùng Thàng',
    ),
    1501 => 
    array (
      0 => 1502,
      1 => 89,
      2 => 'Xã Tả Phìn',
    ),
    1502 => 
    array (
      0 => 1503,
      1 => 89,
      2 => 'Xã Sà Dề Phìn',
    ),
    1503 => 
    array (
      0 => 1504,
      1 => 89,
      2 => 'Xã Nậm Tăm',
    ),
    1504 => 
    array (
      0 => 1505,
      1 => 89,
      2 => 'Xã Tả Ngảo',
    ),
    1505 => 
    array (
      0 => 1506,
      1 => 89,
      2 => 'Xã Pu Sam Cáp',
    ),
    1506 => 
    array (
      0 => 1507,
      1 => 89,
      2 => 'Xã Nậm Cha',
    ),
    1507 => 
    array (
      0 => 1508,
      1 => 89,
      2 => 'Xã Pa Khoá',
    ),
    1508 => 
    array (
      0 => 1509,
      1 => 89,
      2 => 'Xã Làng Mô',
    ),
    1509 => 
    array (
      0 => 1510,
      1 => 89,
      2 => 'Xã Noong Hẻo',
    ),
    1510 => 
    array (
      0 => 1511,
      1 => 89,
      2 => 'Xã Nậm Mạ',
    ),
    1511 => 
    array (
      0 => 1512,
      1 => 89,
      2 => 'Xã Căn Co',
    ),
    1512 => 
    array (
      0 => 1513,
      1 => 89,
      2 => 'Xã Tủa Sín Chải',
    ),
    1513 => 
    array (
      0 => 1514,
      1 => 89,
      2 => 'Xã Nậm Cuổi',
    ),
    1514 => 
    array (
      0 => 1515,
      1 => 89,
      2 => 'Xã Nậm Hăn',
    ),
    1515 => 
    array (
      0 => 1516,
      1 => 90,
      2 => 'Xã Lả Nhì Thàng',
    ),
    1516 => 
    array (
      0 => 1517,
      1 => 90,
      2 => 'Xã Huổi Luông',
    ),
    1517 => 
    array (
      0 => 1518,
      1 => 90,
      2 => 'Thị trấn Phong Thổ',
    ),
    1518 => 
    array (
      0 => 1519,
      1 => 90,
      2 => 'Xã Sì Lở Lầu',
    ),
    1519 => 
    array (
      0 => 1520,
      1 => 90,
      2 => 'Xã Mồ Sì San',
    ),
    1520 => 
    array (
      0 => 1521,
      1 => 90,
      2 => 'Xã Pa Vây Sử',
    ),
    1521 => 
    array (
      0 => 1522,
      1 => 90,
      2 => 'Xã Vàng Ma Chải',
    ),
    1522 => 
    array (
      0 => 1523,
      1 => 90,
      2 => 'Xã Tông Qua Lìn',
    ),
    1523 => 
    array (
      0 => 1524,
      1 => 90,
      2 => 'Xã Mù Sang',
    ),
    1524 => 
    array (
      0 => 1525,
      1 => 90,
      2 => 'Xã Dào San',
    ),
    1525 => 
    array (
      0 => 1526,
      1 => 90,
      2 => 'Xã Ma Ly Pho',
    ),
    1526 => 
    array (
      0 => 1527,
      1 => 90,
      2 => 'Xã Bản Lang',
    ),
    1527 => 
    array (
      0 => 1528,
      1 => 90,
      2 => 'Xã Hoang Thèn',
    ),
    1528 => 
    array (
      0 => 1529,
      1 => 90,
      2 => 'Xã Khổng Lào',
    ),
    1529 => 
    array (
      0 => 1530,
      1 => 90,
      2 => 'Xã Nậm Xe',
    ),
    1530 => 
    array (
      0 => 1531,
      1 => 90,
      2 => 'Xã Mường So',
    ),
    1531 => 
    array (
      0 => 1532,
      1 => 90,
      2 => 'Xã Sin Suối Hồ',
    ),
    1532 => 
    array (
      0 => 1533,
      1 => 91,
      2 => 'Thị trấn Than Uyên',
    ),
    1533 => 
    array (
      0 => 1534,
      1 => 91,
      2 => 'Xã Phúc Than',
    ),
    1534 => 
    array (
      0 => 1535,
      1 => 91,
      2 => 'Xã Mường Than',
    ),
    1535 => 
    array (
      0 => 1536,
      1 => 91,
      2 => 'Xã Mường Mít',
    ),
    1536 => 
    array (
      0 => 1537,
      1 => 91,
      2 => 'Xã Pha Mu',
    ),
    1537 => 
    array (
      0 => 1538,
      1 => 91,
      2 => 'Xã Mường Cang',
    ),
    1538 => 
    array (
      0 => 1539,
      1 => 91,
      2 => 'Xã Hua Nà',
    ),
    1539 => 
    array (
      0 => 1540,
      1 => 91,
      2 => 'Xã Tà Hừa',
    ),
    1540 => 
    array (
      0 => 1541,
      1 => 91,
      2 => 'Xã Mường Kim',
    ),
    1541 => 
    array (
      0 => 1542,
      1 => 91,
      2 => 'Xã Tà Mung',
    ),
    1542 => 
    array (
      0 => 1543,
      1 => 91,
      2 => 'Xã Tà Gia',
    ),
    1543 => 
    array (
      0 => 1544,
      1 => 91,
      2 => 'Xã Khoen On',
    ),
    1544 => 
    array (
      0 => 1545,
      1 => 92,
      2 => 'Thị trấn Tân Uyên',
    ),
    1545 => 
    array (
      0 => 1546,
      1 => 92,
      2 => 'Xã Mường Khoa',
    ),
    1546 => 
    array (
      0 => 1547,
      1 => 92,
      2 => 'Xã Phúc Khoa',
    ),
    1547 => 
    array (
      0 => 1548,
      1 => 92,
      2 => 'Xã Thân Thuộc',
    ),
    1548 => 
    array (
      0 => 1549,
      1 => 92,
      2 => 'Xã Trung Đồng',
    ),
    1549 => 
    array (
      0 => 1550,
      1 => 92,
      2 => 'Xã Hố Mít',
    ),
    1550 => 
    array (
      0 => 1551,
      1 => 92,
      2 => 'Xã Nậm Cần',
    ),
    1551 => 
    array (
      0 => 1552,
      1 => 92,
      2 => 'Xã Nậm Sỏ',
    ),
    1552 => 
    array (
      0 => 1553,
      1 => 92,
      2 => 'Xã Pắc Ta',
    ),
    1553 => 
    array (
      0 => 1554,
      1 => 92,
      2 => 'Xã Tà Mít',
    ),
    1554 => 
    array (
      0 => 1555,
      1 => 93,
      2 => 'Thị trấn Nậm Nhùn',
    ),
    1555 => 
    array (
      0 => 1556,
      1 => 93,
      2 => 'Xã Hua Bun',
    ),
    1556 => 
    array (
      0 => 1557,
      1 => 93,
      2 => 'Xã Mường Mô',
    ),
    1557 => 
    array (
      0 => 1558,
      1 => 93,
      2 => 'Xã Nậm Chà',
    ),
    1558 => 
    array (
      0 => 1559,
      1 => 93,
      2 => 'Xã Nậm Manh',
    ),
    1559 => 
    array (
      0 => 1560,
      1 => 93,
      2 => 'Xã Nậm Hàng',
    ),
    1560 => 
    array (
      0 => 1561,
      1 => 93,
      2 => 'Xã Lê Lợi',
    ),
    1561 => 
    array (
      0 => 1562,
      1 => 93,
      2 => 'Xã Pú Đao',
    ),
    1562 => 
    array (
      0 => 1563,
      1 => 93,
      2 => 'Xã Nậm Pì',
    ),
    1563 => 
    array (
      0 => 1564,
      1 => 93,
      2 => 'Xã Nậm Ban',
    ),
    1564 => 
    array (
      0 => 1565,
      1 => 93,
      2 => 'Xã Trung Chải',
    ),
    1565 => 
    array (
      0 => 1566,
      1 => 94,
      2 => 'Phường Chiềng Lề',
    ),
    1566 => 
    array (
      0 => 1567,
      1 => 94,
      2 => 'Phường Tô Hiệu',
    ),
    1567 => 
    array (
      0 => 1568,
      1 => 94,
      2 => 'Phường Quyết Thắng',
    ),
    1568 => 
    array (
      0 => 1569,
      1 => 94,
      2 => 'Phường Quyết Tâm',
    ),
    1569 => 
    array (
      0 => 1570,
      1 => 94,
      2 => 'Xã Chiềng Cọ',
    ),
    1570 => 
    array (
      0 => 1571,
      1 => 94,
      2 => 'Xã Chiềng Đen',
    ),
    1571 => 
    array (
      0 => 1572,
      1 => 94,
      2 => 'Xã Chiềng Xôm',
    ),
    1572 => 
    array (
      0 => 1573,
      1 => 94,
      2 => 'Phường Chiềng An',
    ),
    1573 => 
    array (
      0 => 1574,
      1 => 94,
      2 => 'Phường Chiềng Cơi',
    ),
    1574 => 
    array (
      0 => 1575,
      1 => 94,
      2 => 'Xã Chiềng Ngần',
    ),
    1575 => 
    array (
      0 => 1576,
      1 => 94,
      2 => 'Xã Hua La',
    ),
    1576 => 
    array (
      0 => 1577,
      1 => 94,
      2 => 'Phường Chiềng Sinh',
    ),
    1577 => 
    array (
      0 => 1578,
      1 => 95,
      2 => 'Xã Mường Chiên',
    ),
    1578 => 
    array (
      0 => 1579,
      1 => 95,
      2 => 'Xã Cà Nàng',
    ),
    1579 => 
    array (
      0 => 1580,
      1 => 95,
      2 => 'Xã Chiềng Khay',
    ),
    1580 => 
    array (
      0 => 1581,
      1 => 95,
      2 => 'Xã Mường Giôn',
    ),
    1581 => 
    array (
      0 => 1582,
      1 => 95,
      2 => 'Xã Pá Ma Pha Khinh',
    ),
    1582 => 
    array (
      0 => 1583,
      1 => 95,
      2 => 'Xã Chiềng Ơn',
    ),
    1583 => 
    array (
      0 => 1584,
      1 => 95,
      2 => 'Xã Mường Giàng',
    ),
    1584 => 
    array (
      0 => 1585,
      1 => 95,
      2 => 'Xã Chiềng Bằng',
    ),
    1585 => 
    array (
      0 => 1586,
      1 => 95,
      2 => 'Xã Mường Sại',
    ),
    1586 => 
    array (
      0 => 1587,
      1 => 95,
      2 => 'Xã Nậm ét',
    ),
    1587 => 
    array (
      0 => 1588,
      1 => 95,
      2 => 'Xã Chiềng Khoang',
    ),
    1588 => 
    array (
      0 => 1589,
      1 => 96,
      2 => 'Thị trấn Thuận Châu',
    ),
    1589 => 
    array (
      0 => 1590,
      1 => 96,
      2 => 'Xã Phổng Lái',
    ),
    1590 => 
    array (
      0 => 1591,
      1 => 96,
      2 => 'Xã Mường é',
    ),
    1591 => 
    array (
      0 => 1592,
      1 => 96,
      2 => 'Xã Chiềng Pha',
    ),
    1592 => 
    array (
      0 => 1593,
      1 => 96,
      2 => 'Xã Chiềng La',
    ),
    1593 => 
    array (
      0 => 1594,
      1 => 96,
      2 => 'Xã Chiềng Ngàm',
    ),
    1594 => 
    array (
      0 => 1595,
      1 => 96,
      2 => 'Xã Liệp Tè',
    ),
    1595 => 
    array (
      0 => 1596,
      1 => 96,
      2 => 'Xã é Tòng',
    ),
    1596 => 
    array (
      0 => 1597,
      1 => 96,
      2 => 'Xã Phổng Lập',
    ),
    1597 => 
    array (
      0 => 1598,
      1 => 96,
      2 => 'Xã Phổng Lăng',
    ),
    1598 => 
    array (
      0 => 1599,
      1 => 96,
      2 => 'Xã Chiềng Ly',
    ),
    1599 => 
    array (
      0 => 1600,
      1 => 96,
      2 => 'Xã Noong Lay',
    ),
    1600 => 
    array (
      0 => 1601,
      1 => 96,
      2 => 'Xã Mường Khiêng',
    ),
    1601 => 
    array (
      0 => 1602,
      1 => 96,
      2 => 'Xã Mường Bám',
    ),
    1602 => 
    array (
      0 => 1603,
      1 => 96,
      2 => 'Xã Long Hẹ',
    ),
    1603 => 
    array (
      0 => 1604,
      1 => 96,
      2 => 'Xã Chiềng Bôm',
    ),
    1604 => 
    array (
      0 => 1605,
      1 => 96,
      2 => 'Xã Thôm Mòn',
    ),
    1605 => 
    array (
      0 => 1606,
      1 => 96,
      2 => 'Xã Tông Lạnh',
    ),
    1606 => 
    array (
      0 => 1607,
      1 => 96,
      2 => 'Xã Tông Cọ',
    ),
    1607 => 
    array (
      0 => 1608,
      1 => 96,
      2 => 'Xã Bó Mười',
    ),
    1608 => 
    array (
      0 => 1609,
      1 => 96,
      2 => 'Xã Co Mạ',
    ),
    1609 => 
    array (
      0 => 1610,
      1 => 96,
      2 => 'Xã Púng Tra',
    ),
    1610 => 
    array (
      0 => 1611,
      1 => 96,
      2 => 'Xã Chiềng Pấc',
    ),
    1611 => 
    array (
      0 => 1612,
      1 => 96,
      2 => 'Xã Nậm Lầu',
    ),
    1612 => 
    array (
      0 => 1613,
      1 => 96,
      2 => 'Xã Bon Phặng',
    ),
    1613 => 
    array (
      0 => 1614,
      1 => 96,
      2 => 'Xã Co Tòng',
    ),
    1614 => 
    array (
      0 => 1615,
      1 => 96,
      2 => 'Xã Muổi Nọi',
    ),
    1615 => 
    array (
      0 => 1616,
      1 => 96,
      2 => 'Xã Pá Lông',
    ),
    1616 => 
    array (
      0 => 1617,
      1 => 96,
      2 => 'Xã Bản Lầm',
    ),
    1617 => 
    array (
      0 => 1618,
      1 => 97,
      2 => 'Thị trấn Ít Ong',
    ),
    1618 => 
    array (
      0 => 1619,
      1 => 97,
      2 => 'Xã Nậm Giôn',
    ),
    1619 => 
    array (
      0 => 1620,
      1 => 97,
      2 => 'Xã Chiềng Lao',
    ),
    1620 => 
    array (
      0 => 1621,
      1 => 97,
      2 => 'Xã Hua Trai',
    ),
    1621 => 
    array (
      0 => 1622,
      1 => 97,
      2 => 'Xã Ngọc Chiến',
    ),
    1622 => 
    array (
      0 => 1623,
      1 => 97,
      2 => 'Xã Mường Trai',
    ),
    1623 => 
    array (
      0 => 1624,
      1 => 97,
      2 => 'Xã Nậm Păm',
    ),
    1624 => 
    array (
      0 => 1625,
      1 => 97,
      2 => 'Xã Chiềng Muôn',
    ),
    1625 => 
    array (
      0 => 1626,
      1 => 97,
      2 => 'Xã Chiềng Ân',
    ),
    1626 => 
    array (
      0 => 1627,
      1 => 97,
      2 => 'Xã Pi Toong',
    ),
    1627 => 
    array (
      0 => 1628,
      1 => 97,
      2 => 'Xã Chiềng Công',
    ),
    1628 => 
    array (
      0 => 1629,
      1 => 97,
      2 => 'Xã Tạ Bú',
    ),
    1629 => 
    array (
      0 => 1630,
      1 => 97,
      2 => 'Xã Chiềng San',
    ),
    1630 => 
    array (
      0 => 1631,
      1 => 97,
      2 => 'Xã Mường Bú',
    ),
    1631 => 
    array (
      0 => 1632,
      1 => 97,
      2 => 'Xã Chiềng Hoa',
    ),
    1632 => 
    array (
      0 => 1633,
      1 => 97,
      2 => 'Xã Mường Chùm',
    ),
    1633 => 
    array (
      0 => 1634,
      1 => 98,
      2 => 'Thị trấn Bắc Yên',
    ),
    1634 => 
    array (
      0 => 1635,
      1 => 98,
      2 => 'Xã Phiêng Ban',
    ),
    1635 => 
    array (
      0 => 1636,
      1 => 98,
      2 => 'Xã Hang Chú',
    ),
    1636 => 
    array (
      0 => 1637,
      1 => 98,
      2 => 'Xã Xím Vàng',
    ),
    1637 => 
    array (
      0 => 1638,
      1 => 98,
      2 => 'Xã Tà Xùa',
    ),
    1638 => 
    array (
      0 => 1639,
      1 => 98,
      2 => 'Xã Háng Đồng',
    ),
    1639 => 
    array (
      0 => 1640,
      1 => 98,
      2 => 'Xã Pắc Ngà',
    ),
    1640 => 
    array (
      0 => 1641,
      1 => 98,
      2 => 'Xã Làng Chếu',
    ),
    1641 => 
    array (
      0 => 1642,
      1 => 98,
      2 => 'Xã Chim Vàn',
    ),
    1642 => 
    array (
      0 => 1643,
      1 => 98,
      2 => 'Xã Mường Khoa',
    ),
    1643 => 
    array (
      0 => 1644,
      1 => 98,
      2 => 'Xã Song Pe',
    ),
    1644 => 
    array (
      0 => 1645,
      1 => 98,
      2 => 'Xã Hồng Ngài',
    ),
    1645 => 
    array (
      0 => 1646,
      1 => 98,
      2 => 'Xã Tạ Khoa',
    ),
    1646 => 
    array (
      0 => 1647,
      1 => 98,
      2 => 'Xã Hua Nhàn',
    ),
    1647 => 
    array (
      0 => 1648,
      1 => 98,
      2 => 'Xã Phiêng Côn',
    ),
    1648 => 
    array (
      0 => 1649,
      1 => 98,
      2 => 'Xã Chiềng Sại',
    ),
    1649 => 
    array (
      0 => 1650,
      1 => 99,
      2 => 'Thị trấn Phù Yên',
    ),
    1650 => 
    array (
      0 => 1651,
      1 => 99,
      2 => 'Xã Suối Tọ',
    ),
    1651 => 
    array (
      0 => 1652,
      1 => 99,
      2 => 'Xã Mường Thải',
    ),
    1652 => 
    array (
      0 => 1653,
      1 => 99,
      2 => 'Xã Mường Cơi',
    ),
    1653 => 
    array (
      0 => 1654,
      1 => 99,
      2 => 'Xã Quang Huy',
    ),
    1654 => 
    array (
      0 => 1655,
      1 => 99,
      2 => 'Xã Huy Bắc',
    ),
    1655 => 
    array (
      0 => 1656,
      1 => 99,
      2 => 'Xã Huy Thượng',
    ),
    1656 => 
    array (
      0 => 1657,
      1 => 99,
      2 => 'Xã Tân Lang',
    ),
    1657 => 
    array (
      0 => 1658,
      1 => 99,
      2 => 'Xã Gia Phù',
    ),
    1658 => 
    array (
      0 => 1659,
      1 => 99,
      2 => 'Xã Tường Phù',
    ),
    1659 => 
    array (
      0 => 1660,
      1 => 99,
      2 => 'Xã Huy Hạ',
    ),
    1660 => 
    array (
      0 => 1661,
      1 => 99,
      2 => 'Xã Huy Tân',
    ),
    1661 => 
    array (
      0 => 1662,
      1 => 99,
      2 => 'Xã Mường Lang',
    ),
    1662 => 
    array (
      0 => 1663,
      1 => 99,
      2 => 'Xã Suối Bau',
    ),
    1663 => 
    array (
      0 => 1664,
      1 => 99,
      2 => 'Xã Huy Tường',
    ),
    1664 => 
    array (
      0 => 1665,
      1 => 99,
      2 => 'Xã Mường Do',
    ),
    1665 => 
    array (
      0 => 1666,
      1 => 99,
      2 => 'Xã Sập Xa',
    ),
    1666 => 
    array (
      0 => 1667,
      1 => 99,
      2 => 'Xã Tường Thượng',
    ),
    1667 => 
    array (
      0 => 1668,
      1 => 99,
      2 => 'Xã Tường Tiến',
    ),
    1668 => 
    array (
      0 => 1669,
      1 => 99,
      2 => 'Xã Tường Phong',
    ),
    1669 => 
    array (
      0 => 1670,
      1 => 99,
      2 => 'Xã Tường Hạ',
    ),
    1670 => 
    array (
      0 => 1671,
      1 => 99,
      2 => 'Xã Kim Bon',
    ),
    1671 => 
    array (
      0 => 1672,
      1 => 99,
      2 => 'Xã Mường Bang',
    ),
    1672 => 
    array (
      0 => 1673,
      1 => 99,
      2 => 'Xã Đá Đỏ',
    ),
    1673 => 
    array (
      0 => 1674,
      1 => 99,
      2 => 'Xã Tân Phong',
    ),
    1674 => 
    array (
      0 => 1675,
      1 => 99,
      2 => 'Xã Nam Phong',
    ),
    1675 => 
    array (
      0 => 1676,
      1 => 99,
      2 => 'Xã Bắc Phong',
    ),
    1676 => 
    array (
      0 => 1677,
      1 => 100,
      2 => 'Thị trấn Mộc Châu',
    ),
    1677 => 
    array (
      0 => 1678,
      1 => 100,
      2 => 'Thị trấn NT Mộc Châu',
    ),
    1678 => 
    array (
      0 => 1679,
      1 => 100,
      2 => 'Xã Chiềng Sơn',
    ),
    1679 => 
    array (
      0 => 1680,
      1 => 100,
      2 => 'Xã Tân Hợp',
    ),
    1680 => 
    array (
      0 => 1681,
      1 => 100,
      2 => 'Xã Qui Hướng',
    ),
    1681 => 
    array (
      0 => 1682,
      1 => 100,
      2 => 'Xã Tân Lập',
    ),
    1682 => 
    array (
      0 => 1683,
      1 => 100,
      2 => 'Xã Nà Mường',
    ),
    1683 => 
    array (
      0 => 1684,
      1 => 100,
      2 => 'Xã Tà Lai',
    ),
    1684 => 
    array (
      0 => 1685,
      1 => 100,
      2 => 'Xã Chiềng Hắc',
    ),
    1685 => 
    array (
      0 => 1686,
      1 => 100,
      2 => 'Xã Hua Păng',
    ),
    1686 => 
    array (
      0 => 1687,
      1 => 100,
      2 => 'Xã Chiềng Khừa',
    ),
    1687 => 
    array (
      0 => 1688,
      1 => 100,
      2 => 'Xã Mường Sang',
    ),
    1688 => 
    array (
      0 => 1689,
      1 => 100,
      2 => 'Xã Đông Sang',
    ),
    1689 => 
    array (
      0 => 1690,
      1 => 100,
      2 => 'Xã Phiêng Luông',
    ),
    1690 => 
    array (
      0 => 1691,
      1 => 100,
      2 => 'Xã Lóng Sập',
    ),
    1691 => 
    array (
      0 => 1692,
      1 => 101,
      2 => 'Thị trấn Yên Châu',
    ),
    1692 => 
    array (
      0 => 1693,
      1 => 101,
      2 => 'Xã Chiềng Đông',
    ),
    1693 => 
    array (
      0 => 1694,
      1 => 101,
      2 => 'Xã Sập Vạt',
    ),
    1694 => 
    array (
      0 => 1695,
      1 => 101,
      2 => 'Xã Chiềng Sàng',
    ),
    1695 => 
    array (
      0 => 1696,
      1 => 101,
      2 => 'Xã Chiềng Pằn',
    ),
    1696 => 
    array (
      0 => 1697,
      1 => 101,
      2 => 'Xã Viêng Lán',
    ),
    1697 => 
    array (
      0 => 1698,
      1 => 101,
      2 => 'Xã Chiềng Hặc',
    ),
    1698 => 
    array (
      0 => 1699,
      1 => 101,
      2 => 'Xã Mường Lựm',
    ),
    1699 => 
    array (
      0 => 1700,
      1 => 101,
      2 => 'Xã Chiềng On',
    ),
    1700 => 
    array (
      0 => 1701,
      1 => 101,
      2 => 'Xã Yên Sơn',
    ),
    1701 => 
    array (
      0 => 1702,
      1 => 101,
      2 => 'Xã Chiềng Khoi',
    ),
    1702 => 
    array (
      0 => 1703,
      1 => 101,
      2 => 'Xã Tú Nang',
    ),
    1703 => 
    array (
      0 => 1704,
      1 => 101,
      2 => 'Xã Lóng Phiêng',
    ),
    1704 => 
    array (
      0 => 1705,
      1 => 101,
      2 => 'Xã Phiêng Khoài',
    ),
    1705 => 
    array (
      0 => 1706,
      1 => 101,
      2 => 'Xã Chiềng Tương',
    ),
    1706 => 
    array (
      0 => 1707,
      1 => 102,
      2 => 'Thị trấn Hát Lót',
    ),
    1707 => 
    array (
      0 => 1708,
      1 => 102,
      2 => 'Xã Chiềng Sung',
    ),
    1708 => 
    array (
      0 => 1709,
      1 => 102,
      2 => 'Xã Mường Bằng',
    ),
    1709 => 
    array (
      0 => 1710,
      1 => 102,
      2 => 'Xã Chiềng Chăn',
    ),
    1710 => 
    array (
      0 => 1711,
      1 => 102,
      2 => 'Xã Mương Chanh',
    ),
    1711 => 
    array (
      0 => 1712,
      1 => 102,
      2 => 'Xã Chiềng Ban',
    ),
    1712 => 
    array (
      0 => 1713,
      1 => 102,
      2 => 'Xã Chiềng Mung',
    ),
    1713 => 
    array (
      0 => 1714,
      1 => 102,
      2 => 'Xã Mường Bon',
    ),
    1714 => 
    array (
      0 => 1715,
      1 => 102,
      2 => 'Xã Chiềng Chung',
    ),
    1715 => 
    array (
      0 => 1716,
      1 => 102,
      2 => 'Xã Chiềng Mai',
    ),
    1716 => 
    array (
      0 => 1717,
      1 => 102,
      2 => 'Xã Hát Lót',
    ),
    1717 => 
    array (
      0 => 1718,
      1 => 102,
      2 => 'Xã Nà Pó',
    ),
    1718 => 
    array (
      0 => 1719,
      1 => 102,
      2 => 'Xã Cò  Nòi',
    ),
    1719 => 
    array (
      0 => 1720,
      1 => 102,
      2 => 'Xã Chiềng Nơi',
    ),
    1720 => 
    array (
      0 => 1721,
      1 => 102,
      2 => 'Xã Phiêng Cằm',
    ),
    1721 => 
    array (
      0 => 1722,
      1 => 102,
      2 => 'Xã Chiềng Dong',
    ),
    1722 => 
    array (
      0 => 1723,
      1 => 102,
      2 => 'Xã Chiềng Kheo',
    ),
    1723 => 
    array (
      0 => 1724,
      1 => 102,
      2 => 'Xã Chiềng Ve',
    ),
    1724 => 
    array (
      0 => 1725,
      1 => 102,
      2 => 'Xã Chiềng Lương',
    ),
    1725 => 
    array (
      0 => 1726,
      1 => 102,
      2 => 'Xã Phiêng Pằn',
    ),
    1726 => 
    array (
      0 => 1727,
      1 => 102,
      2 => 'Xã Nà Ơt',
    ),
    1727 => 
    array (
      0 => 1728,
      1 => 102,
      2 => 'Xã Tà Hộc',
    ),
    1728 => 
    array (
      0 => 1729,
      1 => 103,
      2 => 'Thị trấn Sông Mã',
    ),
    1729 => 
    array (
      0 => 1730,
      1 => 103,
      2 => 'Xã Bó Sinh',
    ),
    1730 => 
    array (
      0 => 1731,
      1 => 103,
      2 => 'Xã Pú Pẩu',
    ),
    1731 => 
    array (
      0 => 1732,
      1 => 103,
      2 => 'Xã Chiềng Phung',
    ),
    1732 => 
    array (
      0 => 1733,
      1 => 103,
      2 => 'Xã Chiềng En',
    ),
    1733 => 
    array (
      0 => 1734,
      1 => 103,
      2 => 'Xã Mường Lầm',
    ),
    1734 => 
    array (
      0 => 1735,
      1 => 103,
      2 => 'Xã Nậm Ty',
    ),
    1735 => 
    array (
      0 => 1736,
      1 => 103,
      2 => 'Xã Đứa Mòn',
    ),
    1736 => 
    array (
      0 => 1737,
      1 => 103,
      2 => 'Xã Yên Hưng',
    ),
    1737 => 
    array (
      0 => 1738,
      1 => 103,
      2 => 'Xã Chiềng Sơ',
    ),
    1738 => 
    array (
      0 => 1739,
      1 => 103,
      2 => 'Xã Nà Nghịu',
    ),
    1739 => 
    array (
      0 => 1740,
      1 => 103,
      2 => 'Xã Nậm Mằn',
    ),
    1740 => 
    array (
      0 => 1741,
      1 => 103,
      2 => 'Xã Chiềng Khoong',
    ),
    1741 => 
    array (
      0 => 1742,
      1 => 103,
      2 => 'Xã Chiềng Cang',
    ),
    1742 => 
    array (
      0 => 1743,
      1 => 103,
      2 => 'Xã Huổi Một',
    ),
    1743 => 
    array (
      0 => 1744,
      1 => 103,
      2 => 'Xã Mường Sai',
    ),
    1744 => 
    array (
      0 => 1745,
      1 => 103,
      2 => 'Xã Mường Cai',
    ),
    1745 => 
    array (
      0 => 1746,
      1 => 103,
      2 => 'Xã Mường Hung',
    ),
    1746 => 
    array (
      0 => 1747,
      1 => 103,
      2 => 'Xã Chiềng Khương',
    ),
    1747 => 
    array (
      0 => 1748,
      1 => 104,
      2 => 'Xã Sam Kha',
    ),
    1748 => 
    array (
      0 => 1749,
      1 => 104,
      2 => 'Xã Púng Bánh',
    ),
    1749 => 
    array (
      0 => 1750,
      1 => 104,
      2 => 'Xã Sốp Cộp',
    ),
    1750 => 
    array (
      0 => 1751,
      1 => 104,
      2 => 'Xã Dồm Cang',
    ),
    1751 => 
    array (
      0 => 1752,
      1 => 104,
      2 => 'Xã Nậm Lạnh',
    ),
    1752 => 
    array (
      0 => 1753,
      1 => 104,
      2 => 'Xã Mường Lèo',
    ),
    1753 => 
    array (
      0 => 1754,
      1 => 104,
      2 => 'Xã Mường Và',
    ),
    1754 => 
    array (
      0 => 1755,
      1 => 104,
      2 => 'Xã Mường Lạn',
    ),
    1755 => 
    array (
      0 => 1756,
      1 => 105,
      2 => 'Xã Suối Bàng',
    ),
    1756 => 
    array (
      0 => 1757,
      1 => 105,
      2 => 'Xã Song Khủa',
    ),
    1757 => 
    array (
      0 => 1758,
      1 => 105,
      2 => 'Xã Liên Hoà',
    ),
    1758 => 
    array (
      0 => 1759,
      1 => 105,
      2 => 'Xã Tô Múa',
    ),
    1759 => 
    array (
      0 => 1760,
      1 => 105,
      2 => 'Xã Mường Tè',
    ),
    1760 => 
    array (
      0 => 1761,
      1 => 105,
      2 => 'Xã Chiềng Khoa',
    ),
    1761 => 
    array (
      0 => 1762,
      1 => 105,
      2 => 'Xã Mường Men',
    ),
    1762 => 
    array (
      0 => 1763,
      1 => 105,
      2 => 'Xã Quang Minh',
    ),
    1763 => 
    array (
      0 => 1764,
      1 => 105,
      2 => 'Xã Vân Hồ',
    ),
    1764 => 
    array (
      0 => 1765,
      1 => 105,
      2 => 'Xã Lóng Luông',
    ),
    1765 => 
    array (
      0 => 1766,
      1 => 105,
      2 => 'Xã Chiềng Yên',
    ),
    1766 => 
    array (
      0 => 1767,
      1 => 105,
      2 => 'Xã Chiềng Xuân',
    ),
    1767 => 
    array (
      0 => 1768,
      1 => 105,
      2 => 'Xã Xuân Nha',
    ),
    1768 => 
    array (
      0 => 1769,
      1 => 105,
      2 => 'Xã Tân Xuân',
    ),
    1769 => 
    array (
      0 => 1770,
      1 => 106,
      2 => 'Phường Yên Thịnh',
    ),
    1770 => 
    array (
      0 => 1771,
      1 => 106,
      2 => 'Phường Yên Ninh',
    ),
    1771 => 
    array (
      0 => 1772,
      1 => 106,
      2 => 'Phường Minh Tân',
    ),
    1772 => 
    array (
      0 => 1773,
      1 => 106,
      2 => 'Phường Nguyễn Thái Học',
    ),
    1773 => 
    array (
      0 => 1774,
      1 => 106,
      2 => 'Phường Đồng Tâm',
    ),
    1774 => 
    array (
      0 => 1775,
      1 => 106,
      2 => 'Phường Nguyễn Phúc',
    ),
    1775 => 
    array (
      0 => 1776,
      1 => 106,
      2 => 'Phường Hồng Hà',
    ),
    1776 => 
    array (
      0 => 1777,
      1 => 106,
      2 => 'Xã Minh Bảo',
    ),
    1777 => 
    array (
      0 => 1778,
      1 => 106,
      2 => 'Phường Nam Cường',
    ),
    1778 => 
    array (
      0 => 1779,
      1 => 106,
      2 => 'Xã Tuy Lộc',
    ),
    1779 => 
    array (
      0 => 1780,
      1 => 106,
      2 => 'Xã Tân Thịnh',
    ),
    1780 => 
    array (
      0 => 1781,
      1 => 106,
      2 => 'Xã Âu Lâu',
    ),
    1781 => 
    array (
      0 => 1782,
      1 => 106,
      2 => 'Xã Giới Phiên',
    ),
    1782 => 
    array (
      0 => 1783,
      1 => 106,
      2 => 'Phường Hợp Minh',
    ),
    1783 => 
    array (
      0 => 1784,
      1 => 106,
      2 => 'Xã Văn Phú',
    ),
    1784 => 
    array (
      0 => 1785,
      1 => 107,
      2 => 'Phường Pú Trạng',
    ),
    1785 => 
    array (
      0 => 1786,
      1 => 107,
      2 => 'Phường Trung Tâm',
    ),
    1786 => 
    array (
      0 => 1787,
      1 => 107,
      2 => 'Phường Tân An',
    ),
    1787 => 
    array (
      0 => 1788,
      1 => 107,
      2 => 'Phường Cầu Thia',
    ),
    1788 => 
    array (
      0 => 1789,
      1 => 107,
      2 => 'Xã Nghĩa Lợi',
    ),
    1789 => 
    array (
      0 => 1790,
      1 => 107,
      2 => 'Xã Nghĩa Phúc',
    ),
    1790 => 
    array (
      0 => 1791,
      1 => 107,
      2 => 'Xã Nghĩa An',
    ),
    1791 => 
    array (
      0 => 1792,
      1 => 107,
      2 => 'Xã Nghĩa Lộ',
    ),
    1792 => 
    array (
      0 => 1793,
      1 => 107,
      2 => 'Xã Sơn A',
    ),
    1793 => 
    array (
      0 => 1794,
      1 => 107,
      2 => 'Xã Phù Nham',
    ),
    1794 => 
    array (
      0 => 1795,
      1 => 107,
      2 => 'Xã Thanh Lương',
    ),
    1795 => 
    array (
      0 => 1796,
      1 => 107,
      2 => 'Xã Hạnh Sơn',
    ),
    1796 => 
    array (
      0 => 1797,
      1 => 107,
      2 => 'Xã Phúc Sơn',
    ),
    1797 => 
    array (
      0 => 1798,
      1 => 107,
      2 => 'Xã Thạch Lương',
    ),
    1798 => 
    array (
      0 => 1799,
      1 => 108,
      2 => 'Thị trấn Yên Thế',
    ),
    1799 => 
    array (
      0 => 1800,
      1 => 108,
      2 => 'Xã Tân Phượng',
    ),
    1800 => 
    array (
      0 => 1801,
      1 => 108,
      2 => 'Xã Lâm Thượng',
    ),
    1801 => 
    array (
      0 => 1802,
      1 => 108,
      2 => 'Xã Khánh Thiện',
    ),
    1802 => 
    array (
      0 => 1803,
      1 => 108,
      2 => 'Xã Minh Chuẩn',
    ),
    1803 => 
    array (
      0 => 1804,
      1 => 108,
      2 => 'Xã Mai Sơn',
    ),
    1804 => 
    array (
      0 => 1805,
      1 => 108,
      2 => 'Xã Khai Trung',
    ),
    1805 => 
    array (
      0 => 1806,
      1 => 108,
      2 => 'Xã Mường Lai',
    ),
    1806 => 
    array (
      0 => 1807,
      1 => 108,
      2 => 'Xã An Lạc',
    ),
    1807 => 
    array (
      0 => 1808,
      1 => 108,
      2 => 'Xã Minh Xuân',
    ),
    1808 => 
    array (
      0 => 1809,
      1 => 108,
      2 => 'Xã Tô Mậu',
    ),
    1809 => 
    array (
      0 => 1810,
      1 => 108,
      2 => 'Xã Tân Lĩnh',
    ),
    1810 => 
    array (
      0 => 1811,
      1 => 108,
      2 => 'Xã Yên Thắng',
    ),
    1811 => 
    array (
      0 => 1812,
      1 => 108,
      2 => 'Xã Khánh Hoà',
    ),
    1812 => 
    array (
      0 => 1813,
      1 => 108,
      2 => 'Xã Vĩnh Lạc',
    ),
    1813 => 
    array (
      0 => 1814,
      1 => 108,
      2 => 'Xã Liễu Đô',
    ),
    1814 => 
    array (
      0 => 1815,
      1 => 108,
      2 => 'Xã Động Quan',
    ),
    1815 => 
    array (
      0 => 1816,
      1 => 108,
      2 => 'Xã Tân Lập',
    ),
    1816 => 
    array (
      0 => 1817,
      1 => 108,
      2 => 'Xã Minh Tiến',
    ),
    1817 => 
    array (
      0 => 1818,
      1 => 108,
      2 => 'Xã Trúc Lâu',
    ),
    1818 => 
    array (
      0 => 1819,
      1 => 108,
      2 => 'Xã Phúc Lợi',
    ),
    1819 => 
    array (
      0 => 1820,
      1 => 108,
      2 => 'Xã Phan Thanh',
    ),
    1820 => 
    array (
      0 => 1821,
      1 => 108,
      2 => 'Xã An Phú',
    ),
    1821 => 
    array (
      0 => 1822,
      1 => 108,
      2 => 'Xã Trung Tâm',
    ),
    1822 => 
    array (
      0 => 1823,
      1 => 109,
      2 => 'Thị trấn Mậu A',
    ),
    1823 => 
    array (
      0 => 1824,
      1 => 109,
      2 => 'Xã Lang Thíp',
    ),
    1824 => 
    array (
      0 => 1825,
      1 => 109,
      2 => 'Xã Lâm Giang',
    ),
    1825 => 
    array (
      0 => 1826,
      1 => 109,
      2 => 'Xã Châu Quế Thượng',
    ),
    1826 => 
    array (
      0 => 1827,
      1 => 109,
      2 => 'Xã Châu Quế Hạ',
    ),
    1827 => 
    array (
      0 => 1828,
      1 => 109,
      2 => 'Xã An Bình',
    ),
    1828 => 
    array (
      0 => 1829,
      1 => 109,
      2 => 'Xã Quang Minh',
    ),
    1829 => 
    array (
      0 => 1830,
      1 => 109,
      2 => 'Xã Đông An',
    ),
    1830 => 
    array (
      0 => 1831,
      1 => 109,
      2 => 'Xã Đông Cuông',
    ),
    1831 => 
    array (
      0 => 1832,
      1 => 109,
      2 => 'Xã Phong Dụ Hạ',
    ),
    1832 => 
    array (
      0 => 1833,
      1 => 109,
      2 => 'Xã Mậu Đông',
    ),
    1833 => 
    array (
      0 => 1834,
      1 => 109,
      2 => 'Xã Ngòi A',
    ),
    1834 => 
    array (
      0 => 1835,
      1 => 109,
      2 => 'Xã Xuân Tầm',
    ),
    1835 => 
    array (
      0 => 1836,
      1 => 109,
      2 => 'Xã Tân Hợp',
    ),
    1836 => 
    array (
      0 => 1837,
      1 => 109,
      2 => 'Xã An Thịnh',
    ),
    1837 => 
    array (
      0 => 1838,
      1 => 109,
      2 => 'Xã Yên Thái',
    ),
    1838 => 
    array (
      0 => 1839,
      1 => 109,
      2 => 'Xã Phong Dụ Thượng',
    ),
    1839 => 
    array (
      0 => 1840,
      1 => 109,
      2 => 'Xã Yên Hợp',
    ),
    1840 => 
    array (
      0 => 1841,
      1 => 109,
      2 => 'Xã Đại Sơn',
    ),
    1841 => 
    array (
      0 => 1842,
      1 => 109,
      2 => 'Xã Đại Phác',
    ),
    1842 => 
    array (
      0 => 1843,
      1 => 109,
      2 => 'Xã Yên Phú',
    ),
    1843 => 
    array (
      0 => 1844,
      1 => 109,
      2 => 'Xã Xuân Ái',
    ),
    1844 => 
    array (
      0 => 1845,
      1 => 109,
      2 => 'Xã Viễn Sơn',
    ),
    1845 => 
    array (
      0 => 1846,
      1 => 109,
      2 => 'Xã Mỏ Vàng',
    ),
    1846 => 
    array (
      0 => 1847,
      1 => 109,
      2 => 'Xã Nà Hẩu',
    ),
    1847 => 
    array (
      0 => 1848,
      1 => 110,
      2 => 'Thị trấn Mù Căng Chải',
    ),
    1848 => 
    array (
      0 => 1849,
      1 => 110,
      2 => 'Xã Hồ Bốn',
    ),
    1849 => 
    array (
      0 => 1850,
      1 => 110,
      2 => 'Xã Nậm Có',
    ),
    1850 => 
    array (
      0 => 1851,
      1 => 110,
      2 => 'Xã Khao Mang',
    ),
    1851 => 
    array (
      0 => 1852,
      1 => 110,
      2 => 'Xã Mồ Dề',
    ),
    1852 => 
    array (
      0 => 1853,
      1 => 110,
      2 => 'Xã Chế Cu Nha',
    ),
    1853 => 
    array (
      0 => 1854,
      1 => 110,
      2 => 'Xã Lao Chải',
    ),
    1854 => 
    array (
      0 => 1855,
      1 => 110,
      2 => 'Xã Kim Nọi',
    ),
    1855 => 
    array (
      0 => 1856,
      1 => 110,
      2 => 'Xã Cao Phạ',
    ),
    1856 => 
    array (
      0 => 1857,
      1 => 110,
      2 => 'Xã La Pán Tẩn',
    ),
    1857 => 
    array (
      0 => 1858,
      1 => 110,
      2 => 'Xã Dế Su Phình',
    ),
    1858 => 
    array (
      0 => 1859,
      1 => 110,
      2 => 'Xã Chế Tạo',
    ),
    1859 => 
    array (
      0 => 1860,
      1 => 110,
      2 => 'Xã Púng Luông',
    ),
    1860 => 
    array (
      0 => 1861,
      1 => 110,
      2 => 'Xã Nậm Khắt',
    ),
    1861 => 
    array (
      0 => 1862,
      1 => 111,
      2 => 'Thị trấn Cổ Phúc',
    ),
    1862 => 
    array (
      0 => 1863,
      1 => 111,
      2 => 'Xã Tân Đồng',
    ),
    1863 => 
    array (
      0 => 1864,
      1 => 111,
      2 => 'Xã Báo Đáp',
    ),
    1864 => 
    array (
      0 => 1865,
      1 => 111,
      2 => 'Xã Đào Thịnh',
    ),
    1865 => 
    array (
      0 => 1866,
      1 => 111,
      2 => 'Xã Việt Thành',
    ),
    1866 => 
    array (
      0 => 1867,
      1 => 111,
      2 => 'Xã Hòa Cuông',
    ),
    1867 => 
    array (
      0 => 1868,
      1 => 111,
      2 => 'Xã Minh Quán',
    ),
    1868 => 
    array (
      0 => 1869,
      1 => 111,
      2 => 'Xã Quy Mông',
    ),
    1869 => 
    array (
      0 => 1870,
      1 => 111,
      2 => 'Xã Cường Thịnh',
    ),
    1870 => 
    array (
      0 => 1871,
      1 => 111,
      2 => 'Xã Kiên Thành',
    ),
    1871 => 
    array (
      0 => 1872,
      1 => 111,
      2 => 'Xã Nga Quán',
    ),
    1872 => 
    array (
      0 => 1873,
      1 => 111,
      2 => 'Xã Y Can',
    ),
    1873 => 
    array (
      0 => 1874,
      1 => 111,
      2 => 'Xã Lương Thịnh',
    ),
    1874 => 
    array (
      0 => 1875,
      1 => 111,
      2 => 'Xã Bảo Hưng',
    ),
    1875 => 
    array (
      0 => 1876,
      1 => 111,
      2 => 'Xã Việt Cường',
    ),
    1876 => 
    array (
      0 => 1877,
      1 => 111,
      2 => 'Xã Hồng Ca',
    ),
    1877 => 
    array (
      0 => 1878,
      1 => 111,
      2 => 'Xã Hưng Thịnh',
    ),
    1878 => 
    array (
      0 => 1879,
      1 => 111,
      2 => 'Xã Hưng Khánh',
    ),
    1879 => 
    array (
      0 => 1880,
      1 => 111,
      2 => 'Xã Việt Hồng',
    ),
    1880 => 
    array (
      0 => 1881,
      1 => 111,
      2 => 'Xã Vân Hội',
    ),
    1881 => 
    array (
      0 => 1882,
      1 => 112,
      2 => 'Thị trấn Trạm Tấu',
    ),
    1882 => 
    array (
      0 => 1883,
      1 => 112,
      2 => 'Xã Túc Đán',
    ),
    1883 => 
    array (
      0 => 1884,
      1 => 112,
      2 => 'Xã Pá Lau',
    ),
    1884 => 
    array (
      0 => 1885,
      1 => 112,
      2 => 'Xã Xà Hồ',
    ),
    1885 => 
    array (
      0 => 1886,
      1 => 112,
      2 => 'Xã Phình Hồ',
    ),
    1886 => 
    array (
      0 => 1887,
      1 => 112,
      2 => 'Xã Trạm Tấu',
    ),
    1887 => 
    array (
      0 => 1888,
      1 => 112,
      2 => 'Xã Tà Si Láng',
    ),
    1888 => 
    array (
      0 => 1889,
      1 => 112,
      2 => 'Xã Pá Hu',
    ),
    1889 => 
    array (
      0 => 1890,
      1 => 112,
      2 => 'Xã Làng Nhì',
    ),
    1890 => 
    array (
      0 => 1891,
      1 => 112,
      2 => 'Xã Bản Công',
    ),
    1891 => 
    array (
      0 => 1892,
      1 => 112,
      2 => 'Xã Bản Mù',
    ),
    1892 => 
    array (
      0 => 1893,
      1 => 112,
      2 => 'Xã Hát Lìu',
    ),
    1893 => 
    array (
      0 => 1894,
      1 => 113,
      2 => 'Thị trấn NT Liên Sơn',
    ),
    1894 => 
    array (
      0 => 1895,
      1 => 113,
      2 => 'Thị trấn NT Trần Phú',
    ),
    1895 => 
    array (
      0 => 1896,
      1 => 113,
      2 => 'Xã Tú Lệ',
    ),
    1896 => 
    array (
      0 => 1897,
      1 => 113,
      2 => 'Xã Nậm Búng',
    ),
    1897 => 
    array (
      0 => 1898,
      1 => 113,
      2 => 'Xã Gia Hội',
    ),
    1898 => 
    array (
      0 => 1899,
      1 => 113,
      2 => 'Xã Sùng Đô',
    ),
    1899 => 
    array (
      0 => 1900,
      1 => 113,
      2 => 'Xã Nậm Mười',
    ),
    1900 => 
    array (
      0 => 1901,
      1 => 113,
      2 => 'Xã An Lương',
    ),
    1901 => 
    array (
      0 => 1902,
      1 => 113,
      2 => 'Xã Nậm Lành',
    ),
    1902 => 
    array (
      0 => 1903,
      1 => 113,
      2 => 'Xã Sơn Lương',
    ),
    1903 => 
    array (
      0 => 1904,
      1 => 113,
      2 => 'Xã Suối Quyền',
    ),
    1904 => 
    array (
      0 => 1905,
      1 => 113,
      2 => 'Xã Suối Giàng',
    ),
    1905 => 
    array (
      0 => 1906,
      1 => 113,
      2 => 'Xã Nghĩa Sơn',
    ),
    1906 => 
    array (
      0 => 1907,
      1 => 113,
      2 => 'Xã Suối Bu',
    ),
    1907 => 
    array (
      0 => 1908,
      1 => 113,
      2 => 'Thị trấn Sơn Thịnh',
    ),
    1908 => 
    array (
      0 => 1909,
      1 => 113,
      2 => 'Xã Đại Lịch',
    ),
    1909 => 
    array (
      0 => 1910,
      1 => 113,
      2 => 'Xã Đồng Khê',
    ),
    1910 => 
    array (
      0 => 1911,
      1 => 113,
      2 => 'Xã Cát Thịnh',
    ),
    1911 => 
    array (
      0 => 1912,
      1 => 113,
      2 => 'Xã Tân Thịnh',
    ),
    1912 => 
    array (
      0 => 1913,
      1 => 113,
      2 => 'Xã Chấn Thịnh',
    ),
    1913 => 
    array (
      0 => 1914,
      1 => 113,
      2 => 'Xã Bình Thuận',
    ),
    1914 => 
    array (
      0 => 1915,
      1 => 113,
      2 => 'Xã Thượng Bằng La',
    ),
    1915 => 
    array (
      0 => 1916,
      1 => 113,
      2 => 'Xã Minh An',
    ),
    1916 => 
    array (
      0 => 1917,
      1 => 113,
      2 => 'Xã Nghĩa Tâm',
    ),
    1917 => 
    array (
      0 => 1918,
      1 => 114,
      2 => 'Thị trấn Yên Bình',
    ),
    1918 => 
    array (
      0 => 1919,
      1 => 114,
      2 => 'Thị trấn Thác Bà',
    ),
    1919 => 
    array (
      0 => 1920,
      1 => 114,
      2 => 'Xã Xuân Long',
    ),
    1920 => 
    array (
      0 => 1921,
      1 => 114,
      2 => 'Xã Cảm Nhân',
    ),
    1921 => 
    array (
      0 => 1922,
      1 => 114,
      2 => 'Xã Ngọc Chấn',
    ),
    1922 => 
    array (
      0 => 1923,
      1 => 114,
      2 => 'Xã Tân Nguyên',
    ),
    1923 => 
    array (
      0 => 1924,
      1 => 114,
      2 => 'Xã Phúc Ninh',
    ),
    1924 => 
    array (
      0 => 1925,
      1 => 114,
      2 => 'Xã Bảo Ái',
    ),
    1925 => 
    array (
      0 => 1926,
      1 => 114,
      2 => 'Xã Mỹ Gia',
    ),
    1926 => 
    array (
      0 => 1927,
      1 => 114,
      2 => 'Xã Xuân Lai',
    ),
    1927 => 
    array (
      0 => 1928,
      1 => 114,
      2 => 'Xã Mông Sơn',
    ),
    1928 => 
    array (
      0 => 1929,
      1 => 114,
      2 => 'Xã Cảm Ân',
    ),
    1929 => 
    array (
      0 => 1930,
      1 => 114,
      2 => 'Xã Yên Thành',
    ),
    1930 => 
    array (
      0 => 1931,
      1 => 114,
      2 => 'Xã Tân Hương',
    ),
    1931 => 
    array (
      0 => 1932,
      1 => 114,
      2 => 'Xã Phúc An',
    ),
    1932 => 
    array (
      0 => 1933,
      1 => 114,
      2 => 'Xã Bạch Hà',
    ),
    1933 => 
    array (
      0 => 1934,
      1 => 114,
      2 => 'Xã Vũ Linh',
    ),
    1934 => 
    array (
      0 => 1935,
      1 => 114,
      2 => 'Xã Đại Đồng',
    ),
    1935 => 
    array (
      0 => 1936,
      1 => 114,
      2 => 'Xã Vĩnh Kiên',
    ),
    1936 => 
    array (
      0 => 1937,
      1 => 114,
      2 => 'Xã Yên Bình',
    ),
    1937 => 
    array (
      0 => 1938,
      1 => 114,
      2 => 'Xã Thịnh Hưng',
    ),
    1938 => 
    array (
      0 => 1939,
      1 => 114,
      2 => 'Xã Hán Đà',
    ),
    1939 => 
    array (
      0 => 1940,
      1 => 114,
      2 => 'Xã Phú Thịnh',
    ),
    1940 => 
    array (
      0 => 1941,
      1 => 114,
      2 => 'Xã Đại Minh',
    ),
    1941 => 
    array (
      0 => 1942,
      1 => 115,
      2 => 'Phường Thái Bình',
    ),
    1942 => 
    array (
      0 => 1943,
      1 => 115,
      2 => 'Phường Tân Hòa',
    ),
    1943 => 
    array (
      0 => 1944,
      1 => 115,
      2 => 'Phường Thịnh Lang',
    ),
    1944 => 
    array (
      0 => 1945,
      1 => 115,
      2 => 'Phường Hữu Nghị',
    ),
    1945 => 
    array (
      0 => 1946,
      1 => 115,
      2 => 'Phường Tân Thịnh',
    ),
    1946 => 
    array (
      0 => 1947,
      1 => 115,
      2 => 'Phường Đồng Tiến',
    ),
    1947 => 
    array (
      0 => 1948,
      1 => 115,
      2 => 'Phường Phương Lâm',
    ),
    1948 => 
    array (
      0 => 1949,
      1 => 115,
      2 => 'Xã Yên Mông',
    ),
    1949 => 
    array (
      0 => 1950,
      1 => 115,
      2 => 'Phường Quỳnh Lâm',
    ),
    1950 => 
    array (
      0 => 1951,
      1 => 115,
      2 => 'Phường Dân Chủ',
    ),
    1951 => 
    array (
      0 => 1952,
      1 => 115,
      2 => 'Xã Hòa Bình',
    ),
    1952 => 
    array (
      0 => 1953,
      1 => 115,
      2 => 'Phường Thống Nhất',
    ),
    1953 => 
    array (
      0 => 1954,
      1 => 115,
      2 => 'Phường Kỳ Sơn',
    ),
    1954 => 
    array (
      0 => 1955,
      1 => 115,
      2 => 'Xã Thịnh Minh',
    ),
    1955 => 
    array (
      0 => 1956,
      1 => 115,
      2 => 'Xã Hợp Thành',
    ),
    1956 => 
    array (
      0 => 1957,
      1 => 115,
      2 => 'Xã Quang Tiến',
    ),
    1957 => 
    array (
      0 => 1958,
      1 => 115,
      2 => 'Xã Mông Hóa',
    ),
    1958 => 
    array (
      0 => 1959,
      1 => 115,
      2 => 'Phường Trung Minh',
    ),
    1959 => 
    array (
      0 => 1960,
      1 => 115,
      2 => 'Xã Độc Lập',
    ),
    1960 => 
    array (
      0 => 1961,
      1 => 116,
      2 => 'Thị trấn Đà Bắc',
    ),
    1961 => 
    array (
      0 => 1962,
      1 => 116,
      2 => 'Xã Nánh Nghê',
    ),
    1962 => 
    array (
      0 => 1963,
      1 => 116,
      2 => 'Xã Giáp Đắt',
    ),
    1963 => 
    array (
      0 => 1964,
      1 => 116,
      2 => 'Xã Mường Chiềng',
    ),
    1964 => 
    array (
      0 => 1965,
      1 => 116,
      2 => 'Xã Tân Pheo',
    ),
    1965 => 
    array (
      0 => 1966,
      1 => 116,
      2 => 'Xã Đồng Chum',
    ),
    1966 => 
    array (
      0 => 1967,
      1 => 116,
      2 => 'Xã Tân Minh',
    ),
    1967 => 
    array (
      0 => 1968,
      1 => 116,
      2 => 'Xã Đoàn Kết',
    ),
    1968 => 
    array (
      0 => 1969,
      1 => 116,
      2 => 'Xã Đồng Ruộng',
    ),
    1969 => 
    array (
      0 => 1970,
      1 => 116,
      2 => 'Xã Tú Lý',
    ),
    1970 => 
    array (
      0 => 1971,
      1 => 116,
      2 => 'Xã Trung Thành',
    ),
    1971 => 
    array (
      0 => 1972,
      1 => 116,
      2 => 'Xã Yên Hòa',
    ),
    1972 => 
    array (
      0 => 1973,
      1 => 116,
      2 => 'Xã Cao Sơn',
    ),
    1973 => 
    array (
      0 => 1974,
      1 => 116,
      2 => 'Xã Toàn Sơn',
    ),
    1974 => 
    array (
      0 => 1975,
      1 => 116,
      2 => 'Xã Hiền Lương',
    ),
    1975 => 
    array (
      0 => 1976,
      1 => 116,
      2 => 'Xã Tiền Phong',
    ),
    1976 => 
    array (
      0 => 1977,
      1 => 116,
      2 => 'Xã Vầy Nưa',
    ),
    1977 => 
    array (
      0 => 1978,
      1 => 117,
      2 => 'Thị trấn Lương Sơn',
    ),
    1978 => 
    array (
      0 => 1979,
      1 => 117,
      2 => 'Xã Lâm Sơn',
    ),
    1979 => 
    array (
      0 => 1980,
      1 => 117,
      2 => 'Xã Hòa Sơn',
    ),
    1980 => 
    array (
      0 => 1981,
      1 => 117,
      2 => 'Xã Tân Vinh',
    ),
    1981 => 
    array (
      0 => 1982,
      1 => 117,
      2 => 'Xã Nhuận Trạch',
    ),
    1982 => 
    array (
      0 => 1983,
      1 => 117,
      2 => 'Xã Cao Sơn',
    ),
    1983 => 
    array (
      0 => 1984,
      1 => 117,
      2 => 'Xã Cư Yên',
    ),
    1984 => 
    array (
      0 => 1985,
      1 => 117,
      2 => 'Xã Liên Sơn',
    ),
    1985 => 
    array (
      0 => 1986,
      1 => 117,
      2 => 'Xã Cao Dương',
    ),
    1986 => 
    array (
      0 => 1987,
      1 => 117,
      2 => 'Xã Thanh Sơn',
    ),
    1987 => 
    array (
      0 => 1988,
      1 => 117,
      2 => 'Xã Thanh Cao',
    ),
    1988 => 
    array (
      0 => 1989,
      1 => 118,
      2 => 'Thị trấn Bo',
    ),
    1989 => 
    array (
      0 => 1990,
      1 => 118,
      2 => 'Xã Đú Sáng',
    ),
    1990 => 
    array (
      0 => 1991,
      1 => 118,
      2 => 'Xã Hùng Sơn',
    ),
    1991 => 
    array (
      0 => 1992,
      1 => 118,
      2 => 'Xã Bình Sơn',
    ),
    1992 => 
    array (
      0 => 1993,
      1 => 118,
      2 => 'Xã Tú Sơn',
    ),
    1993 => 
    array (
      0 => 1994,
      1 => 118,
      2 => 'Xã Vĩnh Tiến',
    ),
    1994 => 
    array (
      0 => 1995,
      1 => 118,
      2 => 'Xã Đông Bắc',
    ),
    1995 => 
    array (
      0 => 1996,
      1 => 118,
      2 => 'Xã Xuân Thủy',
    ),
    1996 => 
    array (
      0 => 1997,
      1 => 118,
      2 => 'Xã Vĩnh Đồng',
    ),
    1997 => 
    array (
      0 => 1998,
      1 => 118,
      2 => 'Xã Kim Lập',
    ),
    1998 => 
    array (
      0 => 1999,
      1 => 118,
      2 => 'Xã Hợp Tiến',
    ),
    1999 => 
    array (
      0 => 2000,
      1 => 118,
      2 => 'Xã Kim Bôi',
    ),
    2000 => 
    array (
      0 => 2001,
      1 => 118,
      2 => 'Xã Nam Thượng',
    ),
    2001 => 
    array (
      0 => 2002,
      1 => 118,
      2 => 'Xã Cuối Hạ',
    ),
    2002 => 
    array (
      0 => 2003,
      1 => 118,
      2 => 'Xã Sào Báy',
    ),
    2003 => 
    array (
      0 => 2004,
      1 => 118,
      2 => 'Xã Mi Hòa',
    ),
    2004 => 
    array (
      0 => 2005,
      1 => 118,
      2 => 'Xã Nuông Dăm',
    ),
    2005 => 
    array (
      0 => 2006,
      1 => 119,
      2 => 'Thị trấn Cao Phong',
    ),
    2006 => 
    array (
      0 => 2007,
      1 => 119,
      2 => 'Xã Bình Thanh',
    ),
    2007 => 
    array (
      0 => 2008,
      1 => 119,
      2 => 'Xã Thung Nai',
    ),
    2008 => 
    array (
      0 => 2009,
      1 => 119,
      2 => 'Xã Bắc Phong',
    ),
    2009 => 
    array (
      0 => 2010,
      1 => 119,
      2 => 'Xã Thu Phong',
    ),
    2010 => 
    array (
      0 => 2011,
      1 => 119,
      2 => 'Xã Hợp Phong',
    ),
    2011 => 
    array (
      0 => 2012,
      1 => 119,
      2 => 'Xã Tây Phong',
    ),
    2012 => 
    array (
      0 => 2013,
      1 => 119,
      2 => 'Xã Dũng Phong',
    ),
    2013 => 
    array (
      0 => 2014,
      1 => 119,
      2 => 'Xã Nam Phong',
    ),
    2014 => 
    array (
      0 => 2015,
      1 => 119,
      2 => 'Xã Thạch Yên',
    ),
    2015 => 
    array (
      0 => 2016,
      1 => 120,
      2 => 'Thị trấn Mãn Đức',
    ),
    2016 => 
    array (
      0 => 2017,
      1 => 120,
      2 => 'Xã Suối Hoa',
    ),
    2017 => 
    array (
      0 => 2018,
      1 => 120,
      2 => 'Xã Phú Vinh',
    ),
    2018 => 
    array (
      0 => 2019,
      1 => 120,
      2 => 'Xã Phú Cường',
    ),
    2019 => 
    array (
      0 => 2020,
      1 => 120,
      2 => 'Xã Mỹ Hòa',
    ),
    2020 => 
    array (
      0 => 2021,
      1 => 120,
      2 => 'Xã Quyết Chiến',
    ),
    2021 => 
    array (
      0 => 2022,
      1 => 120,
      2 => 'Xã Phong Phú',
    ),
    2022 => 
    array (
      0 => 2023,
      1 => 120,
      2 => 'Xã Tử Nê',
    ),
    2023 => 
    array (
      0 => 2024,
      1 => 120,
      2 => 'Xã Thanh Hối',
    ),
    2024 => 
    array (
      0 => 2025,
      1 => 120,
      2 => 'Xã Ngọc Mỹ',
    ),
    2025 => 
    array (
      0 => 2026,
      1 => 120,
      2 => 'Xã Đông Lai',
    ),
    2026 => 
    array (
      0 => 2027,
      1 => 120,
      2 => 'Xã Vân Sơn',
    ),
    2027 => 
    array (
      0 => 2028,
      1 => 120,
      2 => 'Xã Nhân Mỹ',
    ),
    2028 => 
    array (
      0 => 2029,
      1 => 120,
      2 => 'Xã Lỗ Sơn',
    ),
    2029 => 
    array (
      0 => 2030,
      1 => 120,
      2 => 'Xã Ngổ Luông',
    ),
    2030 => 
    array (
      0 => 2031,
      1 => 120,
      2 => 'Xã Gia Mô',
    ),
    2031 => 
    array (
      0 => 2032,
      1 => 121,
      2 => 'Xã Tân Thành',
    ),
    2032 => 
    array (
      0 => 2033,
      1 => 121,
      2 => 'Thị trấn Mai Châu',
    ),
    2033 => 
    array (
      0 => 2034,
      1 => 121,
      2 => 'Xã Sơn Thủy',
    ),
    2034 => 
    array (
      0 => 2035,
      1 => 121,
      2 => 'Xã Pà Cò',
    ),
    2035 => 
    array (
      0 => 2036,
      1 => 121,
      2 => 'Xã Hang Kia',
    ),
    2036 => 
    array (
      0 => 2037,
      1 => 121,
      2 => 'Xã Đồng Tân',
    ),
    2037 => 
    array (
      0 => 2038,
      1 => 121,
      2 => 'Xã Cun Pheo',
    ),
    2038 => 
    array (
      0 => 2039,
      1 => 121,
      2 => 'Xã Bao La',
    ),
    2039 => 
    array (
      0 => 2040,
      1 => 121,
      2 => 'Xã Tòng Đậu',
    ),
    2040 => 
    array (
      0 => 2041,
      1 => 121,
      2 => 'Xã Nà Phòn',
    ),
    2041 => 
    array (
      0 => 2042,
      1 => 121,
      2 => 'Xã Săm Khóe',
    ),
    2042 => 
    array (
      0 => 2043,
      1 => 121,
      2 => 'Xã Chiềng Châu',
    ),
    2043 => 
    array (
      0 => 2044,
      1 => 121,
      2 => 'Xã Mai Hạ',
    ),
    2044 => 
    array (
      0 => 2045,
      1 => 121,
      2 => 'Xã Thành Sơn',
    ),
    2045 => 
    array (
      0 => 2046,
      1 => 121,
      2 => 'Xã Mai Hịch',
    ),
    2046 => 
    array (
      0 => 2047,
      1 => 121,
      2 => 'Xã Vạn Mai',
    ),
    2047 => 
    array (
      0 => 2048,
      1 => 122,
      2 => 'Thị trấn Vụ Bản',
    ),
    2048 => 
    array (
      0 => 2049,
      1 => 122,
      2 => 'Xã Quý Hòa',
    ),
    2049 => 
    array (
      0 => 2050,
      1 => 122,
      2 => 'Xã Miền Đồi',
    ),
    2050 => 
    array (
      0 => 2051,
      1 => 122,
      2 => 'Xã Mỹ Thành',
    ),
    2051 => 
    array (
      0 => 2052,
      1 => 122,
      2 => 'Xã Tuân Đạo',
    ),
    2052 => 
    array (
      0 => 2053,
      1 => 122,
      2 => 'Xã Văn Nghĩa',
    ),
    2053 => 
    array (
      0 => 2054,
      1 => 122,
      2 => 'Xã Văn Sơn',
    ),
    2054 => 
    array (
      0 => 2055,
      1 => 122,
      2 => 'Xã Tân Lập',
    ),
    2055 => 
    array (
      0 => 2056,
      1 => 122,
      2 => 'Xã Nhân Nghĩa',
    ),
    2056 => 
    array (
      0 => 2057,
      1 => 122,
      2 => 'Xã Thượng Cốc',
    ),
    2057 => 
    array (
      0 => 2058,
      1 => 122,
      2 => 'Xã Quyết Thắng',
    ),
    2058 => 
    array (
      0 => 2059,
      1 => 122,
      2 => 'Xã Xuất Hóa',
    ),
    2059 => 
    array (
      0 => 2060,
      1 => 122,
      2 => 'Xã Yên Phú',
    ),
    2060 => 
    array (
      0 => 2061,
      1 => 122,
      2 => 'Xã Bình Hẻm',
    ),
    2061 => 
    array (
      0 => 2062,
      1 => 122,
      2 => 'Xã Định Cư',
    ),
    2062 => 
    array (
      0 => 2063,
      1 => 122,
      2 => 'Xã Chí Đạo',
    ),
    2063 => 
    array (
      0 => 2064,
      1 => 122,
      2 => 'Xã Ngọc Sơn',
    ),
    2064 => 
    array (
      0 => 2065,
      1 => 122,
      2 => 'Xã Hương Nhượng',
    ),
    2065 => 
    array (
      0 => 2066,
      1 => 122,
      2 => 'Xã Vũ Bình',
    ),
    2066 => 
    array (
      0 => 2067,
      1 => 122,
      2 => 'Xã Tự Do',
    ),
    2067 => 
    array (
      0 => 2068,
      1 => 122,
      2 => 'Xã Yên Nghiệp',
    ),
    2068 => 
    array (
      0 => 2069,
      1 => 122,
      2 => 'Xã Tân Mỹ',
    ),
    2069 => 
    array (
      0 => 2070,
      1 => 122,
      2 => 'Xã Ân Nghĩa',
    ),
    2070 => 
    array (
      0 => 2071,
      1 => 122,
      2 => 'Xã Ngọc Lâu',
    ),
    2071 => 
    array (
      0 => 2072,
      1 => 123,
      2 => 'Thị trấn Hàng Trạm',
    ),
    2072 => 
    array (
      0 => 2073,
      1 => 123,
      2 => 'Xã Lạc Sỹ',
    ),
    2073 => 
    array (
      0 => 2074,
      1 => 123,
      2 => 'Xã Lạc Lương',
    ),
    2074 => 
    array (
      0 => 2075,
      1 => 123,
      2 => 'Xã Bảo Hiệu',
    ),
    2075 => 
    array (
      0 => 2076,
      1 => 123,
      2 => 'Xã Đa Phúc',
    ),
    2076 => 
    array (
      0 => 2077,
      1 => 123,
      2 => 'Xã Hữu Lợi',
    ),
    2077 => 
    array (
      0 => 2078,
      1 => 123,
      2 => 'Xã Lạc Thịnh',
    ),
    2078 => 
    array (
      0 => 2079,
      1 => 123,
      2 => 'Xã Đoàn Kết',
    ),
    2079 => 
    array (
      0 => 2080,
      1 => 123,
      2 => 'Xã Phú Lai',
    ),
    2080 => 
    array (
      0 => 2081,
      1 => 123,
      2 => 'Xã Yên Trị',
    ),
    2081 => 
    array (
      0 => 2082,
      1 => 123,
      2 => 'Xã Ngọc Lương',
    ),
    2082 => 
    array (
      0 => 2083,
      1 => 124,
      2 => 'Thị trấn Ba Hàng Đồi',
    ),
    2083 => 
    array (
      0 => 2084,
      1 => 124,
      2 => 'Thị trấn Chi Nê',
    ),
    2084 => 
    array (
      0 => 2085,
      1 => 124,
      2 => 'Xã Phú Nghĩa',
    ),
    2085 => 
    array (
      0 => 2086,
      1 => 124,
      2 => 'Xã Phú Thành',
    ),
    2086 => 
    array (
      0 => 2087,
      1 => 124,
      2 => 'Xã Hưng Thi',
    ),
    2087 => 
    array (
      0 => 2088,
      1 => 124,
      2 => 'Xã Khoan Dụ',
    ),
    2088 => 
    array (
      0 => 2089,
      1 => 124,
      2 => 'Xã Đồng Tâm',
    ),
    2089 => 
    array (
      0 => 2090,
      1 => 124,
      2 => 'Xã Yên Bồng',
    ),
    2090 => 
    array (
      0 => 2091,
      1 => 124,
      2 => 'Xã Thống Nhất',
    ),
    2091 => 
    array (
      0 => 2092,
      1 => 124,
      2 => 'Xã An Bình',
    ),
    2092 => 
    array (
      0 => 2093,
      1 => 125,
      2 => 'Phường Quán Triều',
    ),
    2093 => 
    array (
      0 => 2094,
      1 => 125,
      2 => 'Phường Quang Vinh',
    ),
    2094 => 
    array (
      0 => 2095,
      1 => 125,
      2 => 'Phường Túc Duyên',
    ),
    2095 => 
    array (
      0 => 2096,
      1 => 125,
      2 => 'Phường Hoàng Văn Thụ',
    ),
    2096 => 
    array (
      0 => 2097,
      1 => 125,
      2 => 'Phường Trưng Vương',
    ),
    2097 => 
    array (
      0 => 2098,
      1 => 125,
      2 => 'Phường Quang Trung',
    ),
    2098 => 
    array (
      0 => 2099,
      1 => 125,
      2 => 'Phường Phan Đình Phùng',
    ),
    2099 => 
    array (
      0 => 2100,
      1 => 125,
      2 => 'Phường Tân Thịnh',
    ),
    2100 => 
    array (
      0 => 2101,
      1 => 125,
      2 => 'Phường Thịnh Đán',
    ),
    2101 => 
    array (
      0 => 2102,
      1 => 125,
      2 => 'Phường Đồng Quang',
    ),
    2102 => 
    array (
      0 => 2103,
      1 => 125,
      2 => 'Phường Gia Sàng',
    ),
    2103 => 
    array (
      0 => 2104,
      1 => 125,
      2 => 'Phường Tân Lập',
    ),
    2104 => 
    array (
      0 => 2105,
      1 => 125,
      2 => 'Phường Cam Giá',
    ),
    2105 => 
    array (
      0 => 2106,
      1 => 125,
      2 => 'Phường Phú Xá',
    ),
    2106 => 
    array (
      0 => 2107,
      1 => 125,
      2 => 'Phường Hương Sơn',
    ),
    2107 => 
    array (
      0 => 2108,
      1 => 125,
      2 => 'Phường Trung Thành',
    ),
    2108 => 
    array (
      0 => 2109,
      1 => 125,
      2 => 'Phường Tân Thành',
    ),
    2109 => 
    array (
      0 => 2110,
      1 => 125,
      2 => 'Phường Tân Long',
    ),
    2110 => 
    array (
      0 => 2111,
      1 => 125,
      2 => 'Xã Phúc Hà',
    ),
    2111 => 
    array (
      0 => 2112,
      1 => 125,
      2 => 'Xã Phúc Xuân',
    ),
    2112 => 
    array (
      0 => 2113,
      1 => 125,
      2 => 'Xã Quyết Thắng',
    ),
    2113 => 
    array (
      0 => 2114,
      1 => 125,
      2 => 'Xã Phúc Trìu',
    ),
    2114 => 
    array (
      0 => 2115,
      1 => 125,
      2 => 'Xã Thịnh Đức',
    ),
    2115 => 
    array (
      0 => 2116,
      1 => 125,
      2 => 'Phường Tích Lương',
    ),
    2116 => 
    array (
      0 => 2117,
      1 => 125,
      2 => 'Xã Tân Cương',
    ),
    2117 => 
    array (
      0 => 2118,
      1 => 125,
      2 => 'Xã Sơn Cẩm',
    ),
    2118 => 
    array (
      0 => 2119,
      1 => 125,
      2 => 'Phường Chùa Hang',
    ),
    2119 => 
    array (
      0 => 2120,
      1 => 125,
      2 => 'Xã Cao Ngạn',
    ),
    2120 => 
    array (
      0 => 2121,
      1 => 125,
      2 => 'Xã Linh Sơn',
    ),
    2121 => 
    array (
      0 => 2122,
      1 => 125,
      2 => 'Phường Đồng Bẩm',
    ),
    2122 => 
    array (
      0 => 2123,
      1 => 125,
      2 => 'Xã Huống Thượng',
    ),
    2123 => 
    array (
      0 => 2124,
      1 => 125,
      2 => 'Xã Đồng Liên',
    ),
    2124 => 
    array (
      0 => 2125,
      1 => 126,
      2 => 'Phường Lương Sơn',
    ),
    2125 => 
    array (
      0 => 2126,
      1 => 126,
      2 => 'Phường Châu Sơn',
    ),
    2126 => 
    array (
      0 => 2127,
      1 => 126,
      2 => 'Phường Mỏ Chè',
    ),
    2127 => 
    array (
      0 => 2128,
      1 => 126,
      2 => 'Phường Cải Đan',
    ),
    2128 => 
    array (
      0 => 2129,
      1 => 126,
      2 => 'Phường Thắng Lợi',
    ),
    2129 => 
    array (
      0 => 2130,
      1 => 126,
      2 => 'Phường Phố Cò',
    ),
    2130 => 
    array (
      0 => 2131,
      1 => 126,
      2 => 'Xã Tân Quang',
    ),
    2131 => 
    array (
      0 => 2132,
      1 => 126,
      2 => 'Phường Bách Quang',
    ),
    2132 => 
    array (
      0 => 2133,
      1 => 126,
      2 => 'Xã Bình Sơn',
    ),
    2133 => 
    array (
      0 => 2134,
      1 => 126,
      2 => 'Xã Bá Xuyên',
    ),
    2134 => 
    array (
      0 => 2135,
      1 => 127,
      2 => 'Thị trấn Chợ Chu',
    ),
    2135 => 
    array (
      0 => 2136,
      1 => 127,
      2 => 'Xã Linh Thông',
    ),
    2136 => 
    array (
      0 => 2137,
      1 => 127,
      2 => 'Xã Lam Vỹ',
    ),
    2137 => 
    array (
      0 => 2138,
      1 => 127,
      2 => 'Xã Quy Kỳ',
    ),
    2138 => 
    array (
      0 => 2139,
      1 => 127,
      2 => 'Xã Tân Thịnh',
    ),
    2139 => 
    array (
      0 => 2140,
      1 => 127,
      2 => 'Xã Kim Phượng',
    ),
    2140 => 
    array (
      0 => 2141,
      1 => 127,
      2 => 'Xã Bảo Linh',
    ),
    2141 => 
    array (
      0 => 2142,
      1 => 127,
      2 => 'Xã Phúc Chu',
    ),
    2142 => 
    array (
      0 => 2143,
      1 => 127,
      2 => 'Xã Tân Dương',
    ),
    2143 => 
    array (
      0 => 2144,
      1 => 127,
      2 => 'Xã Phượng Tiến',
    ),
    2144 => 
    array (
      0 => 2145,
      1 => 127,
      2 => 'Xã Bảo Cường',
    ),
    2145 => 
    array (
      0 => 2146,
      1 => 127,
      2 => 'Xã Đồng Thịnh',
    ),
    2146 => 
    array (
      0 => 2147,
      1 => 127,
      2 => 'Xã Định Biên',
    ),
    2147 => 
    array (
      0 => 2148,
      1 => 127,
      2 => 'Xã Thanh Định',
    ),
    2148 => 
    array (
      0 => 2149,
      1 => 127,
      2 => 'Xã Trung Hội',
    ),
    2149 => 
    array (
      0 => 2150,
      1 => 127,
      2 => 'Xã Trung Lương',
    ),
    2150 => 
    array (
      0 => 2151,
      1 => 127,
      2 => 'Xã Bình Yên',
    ),
    2151 => 
    array (
      0 => 2152,
      1 => 127,
      2 => 'Xã Điềm Mặc',
    ),
    2152 => 
    array (
      0 => 2153,
      1 => 127,
      2 => 'Xã Phú Tiến',
    ),
    2153 => 
    array (
      0 => 2154,
      1 => 127,
      2 => 'Xã Bộc Nhiêu',
    ),
    2154 => 
    array (
      0 => 2155,
      1 => 127,
      2 => 'Xã Sơn Phú',
    ),
    2155 => 
    array (
      0 => 2156,
      1 => 127,
      2 => 'Xã Phú Đình',
    ),
    2156 => 
    array (
      0 => 2157,
      1 => 127,
      2 => 'Xã Bình Thành',
    ),
    2157 => 
    array (
      0 => 2158,
      1 => 128,
      2 => 'Thị trấn Giang Tiên',
    ),
    2158 => 
    array (
      0 => 2159,
      1 => 128,
      2 => 'Thị trấn Đu',
    ),
    2159 => 
    array (
      0 => 2160,
      1 => 128,
      2 => 'Xã Yên Ninh',
    ),
    2160 => 
    array (
      0 => 2161,
      1 => 128,
      2 => 'Xã Yên Trạch',
    ),
    2161 => 
    array (
      0 => 2162,
      1 => 128,
      2 => 'Xã Yên Đổ',
    ),
    2162 => 
    array (
      0 => 2163,
      1 => 128,
      2 => 'Xã Yên Lạc',
    ),
    2163 => 
    array (
      0 => 2164,
      1 => 128,
      2 => 'Xã Ôn Lương',
    ),
    2164 => 
    array (
      0 => 2165,
      1 => 128,
      2 => 'Xã Động Đạt',
    ),
    2165 => 
    array (
      0 => 2166,
      1 => 128,
      2 => 'Xã Phủ Lý',
    ),
    2166 => 
    array (
      0 => 2167,
      1 => 128,
      2 => 'Xã Phú Đô',
    ),
    2167 => 
    array (
      0 => 2168,
      1 => 128,
      2 => 'Xã Hợp Thành',
    ),
    2168 => 
    array (
      0 => 2169,
      1 => 128,
      2 => 'Xã Tức Tranh',
    ),
    2169 => 
    array (
      0 => 2170,
      1 => 128,
      2 => 'Xã Phấn Mễ',
    ),
    2170 => 
    array (
      0 => 2171,
      1 => 128,
      2 => 'Xã Vô Tranh',
    ),
    2171 => 
    array (
      0 => 2172,
      1 => 128,
      2 => 'Xã Cổ Lũng',
    ),
    2172 => 
    array (
      0 => 2173,
      1 => 129,
      2 => 'Thị trấn Sông Cầu',
    ),
    2173 => 
    array (
      0 => 2174,
      1 => 129,
      2 => 'Thị trấn Trại Cau',
    ),
    2174 => 
    array (
      0 => 2175,
      1 => 129,
      2 => 'Xã Văn Lăng',
    ),
    2175 => 
    array (
      0 => 2176,
      1 => 129,
      2 => 'Xã Tân Long',
    ),
    2176 => 
    array (
      0 => 2177,
      1 => 129,
      2 => 'Xã Hòa Bình',
    ),
    2177 => 
    array (
      0 => 2178,
      1 => 129,
      2 => 'Xã Quang Sơn',
    ),
    2178 => 
    array (
      0 => 2179,
      1 => 129,
      2 => 'Xã Minh Lập',
    ),
    2179 => 
    array (
      0 => 2180,
      1 => 129,
      2 => 'Xã Văn Hán',
    ),
    2180 => 
    array (
      0 => 2181,
      1 => 129,
      2 => 'Xã Hóa Trung',
    ),
    2181 => 
    array (
      0 => 2182,
      1 => 129,
      2 => 'Xã Khe Mo',
    ),
    2182 => 
    array (
      0 => 2183,
      1 => 129,
      2 => 'Xã Cây Thị',
    ),
    2183 => 
    array (
      0 => 2184,
      1 => 129,
      2 => 'Xã Hóa Thượng',
    ),
    2184 => 
    array (
      0 => 2185,
      1 => 129,
      2 => 'Xã Hợp Tiến',
    ),
    2185 => 
    array (
      0 => 2186,
      1 => 129,
      2 => 'Xã Tân Lợi',
    ),
    2186 => 
    array (
      0 => 2187,
      1 => 129,
      2 => 'Xã Nam Hòa',
    ),
    2187 => 
    array (
      0 => 2188,
      1 => 130,
      2 => 'Thị trấn Đình Cả',
    ),
    2188 => 
    array (
      0 => 2189,
      1 => 130,
      2 => 'Xã Sảng Mộc',
    ),
    2189 => 
    array (
      0 => 2190,
      1 => 130,
      2 => 'Xã Nghinh Tường',
    ),
    2190 => 
    array (
      0 => 2191,
      1 => 130,
      2 => 'Xã Thần Xa',
    ),
    2191 => 
    array (
      0 => 2192,
      1 => 130,
      2 => 'Xã Vũ Chấn',
    ),
    2192 => 
    array (
      0 => 2193,
      1 => 130,
      2 => 'Xã Thượng Nung',
    ),
    2193 => 
    array (
      0 => 2194,
      1 => 130,
      2 => 'Xã Phú Thượng',
    ),
    2194 => 
    array (
      0 => 2195,
      1 => 130,
      2 => 'Xã Cúc Đường',
    ),
    2195 => 
    array (
      0 => 2196,
      1 => 130,
      2 => 'Xã La Hiên',
    ),
    2196 => 
    array (
      0 => 2197,
      1 => 130,
      2 => 'Xã Lâu Thượng',
    ),
    2197 => 
    array (
      0 => 2198,
      1 => 130,
      2 => 'Xã Tràng Xá',
    ),
    2198 => 
    array (
      0 => 2199,
      1 => 130,
      2 => 'Xã Phương Giao',
    ),
    2199 => 
    array (
      0 => 2200,
      1 => 130,
      2 => 'Xã Liên Minh',
    ),
    2200 => 
    array (
      0 => 2201,
      1 => 130,
      2 => 'Xã Dân Tiến',
    ),
    2201 => 
    array (
      0 => 2202,
      1 => 130,
      2 => 'Xã Bình Long',
    ),
    2202 => 
    array (
      0 => 2203,
      1 => 131,
      2 => 'Thị trấn Hùng Sơn',
    ),
    2203 => 
    array (
      0 => 2204,
      1 => 131,
      2 => 'Thị trấn Quân Chu',
    ),
    2204 => 
    array (
      0 => 2205,
      1 => 131,
      2 => 'Xã Phúc Lương',
    ),
    2205 => 
    array (
      0 => 2206,
      1 => 131,
      2 => 'Xã Minh Tiến',
    ),
    2206 => 
    array (
      0 => 2207,
      1 => 131,
      2 => 'Xã Yên Lãng',
    ),
    2207 => 
    array (
      0 => 2208,
      1 => 131,
      2 => 'Xã Đức Lương',
    ),
    2208 => 
    array (
      0 => 2209,
      1 => 131,
      2 => 'Xã Phú Cường',
    ),
    2209 => 
    array (
      0 => 2210,
      1 => 131,
      2 => 'Xã Na Mao',
    ),
    2210 => 
    array (
      0 => 2211,
      1 => 131,
      2 => 'Xã Phú Lạc',
    ),
    2211 => 
    array (
      0 => 2212,
      1 => 131,
      2 => 'Xã Tân Linh',
    ),
    2212 => 
    array (
      0 => 2213,
      1 => 131,
      2 => 'Xã Phú Thịnh',
    ),
    2213 => 
    array (
      0 => 2214,
      1 => 131,
      2 => 'Xã Phục Linh',
    ),
    2214 => 
    array (
      0 => 2215,
      1 => 131,
      2 => 'Xã Phú Xuyên',
    ),
    2215 => 
    array (
      0 => 2216,
      1 => 131,
      2 => 'Xã Bản Ngoại',
    ),
    2216 => 
    array (
      0 => 2217,
      1 => 131,
      2 => 'Xã Tiên Hội',
    ),
    2217 => 
    array (
      0 => 2218,
      1 => 131,
      2 => 'Xã Cù Vân',
    ),
    2218 => 
    array (
      0 => 2219,
      1 => 131,
      2 => 'Xã Hà Thượng',
    ),
    2219 => 
    array (
      0 => 2220,
      1 => 131,
      2 => 'Xã La Bằng',
    ),
    2220 => 
    array (
      0 => 2221,
      1 => 131,
      2 => 'Xã Hoàng Nông',
    ),
    2221 => 
    array (
      0 => 2222,
      1 => 131,
      2 => 'Xã Khôi Kỳ',
    ),
    2222 => 
    array (
      0 => 2223,
      1 => 131,
      2 => 'Xã An Khánh',
    ),
    2223 => 
    array (
      0 => 2224,
      1 => 131,
      2 => 'Xã Tân Thái',
    ),
    2224 => 
    array (
      0 => 2225,
      1 => 131,
      2 => 'Xã Bình Thuận',
    ),
    2225 => 
    array (
      0 => 2226,
      1 => 131,
      2 => 'Xã Lục Ba',
    ),
    2226 => 
    array (
      0 => 2227,
      1 => 131,
      2 => 'Xã Mỹ Yên',
    ),
    2227 => 
    array (
      0 => 2228,
      1 => 131,
      2 => 'Xã Vạn Thọ',
    ),
    2228 => 
    array (
      0 => 2229,
      1 => 131,
      2 => 'Xã Văn Yên',
    ),
    2229 => 
    array (
      0 => 2230,
      1 => 131,
      2 => 'Xã Ký Phú',
    ),
    2230 => 
    array (
      0 => 2231,
      1 => 131,
      2 => 'Xã Cát Nê',
    ),
    2231 => 
    array (
      0 => 2232,
      1 => 131,
      2 => 'Xã Quân Chu',
    ),
    2232 => 
    array (
      0 => 2233,
      1 => 132,
      2 => 'Phường Bãi Bông',
    ),
    2233 => 
    array (
      0 => 2234,
      1 => 132,
      2 => 'Phường Bắc Sơn',
    ),
    2234 => 
    array (
      0 => 2235,
      1 => 132,
      2 => 'Phường Ba Hàng',
    ),
    2235 => 
    array (
      0 => 2236,
      1 => 132,
      2 => 'Xã Phúc Tân',
    ),
    2236 => 
    array (
      0 => 2237,
      1 => 132,
      2 => 'Xã Phúc Thuận',
    ),
    2237 => 
    array (
      0 => 2238,
      1 => 132,
      2 => 'Xã Hồng Tiến',
    ),
    2238 => 
    array (
      0 => 2239,
      1 => 132,
      2 => 'Xã Minh Đức',
    ),
    2239 => 
    array (
      0 => 2240,
      1 => 132,
      2 => 'Xã Đắc Sơn',
    ),
    2240 => 
    array (
      0 => 2241,
      1 => 132,
      2 => 'Phường Đồng Tiến',
    ),
    2241 => 
    array (
      0 => 2242,
      1 => 132,
      2 => 'Xã Thành Công',
    ),
    2242 => 
    array (
      0 => 2243,
      1 => 132,
      2 => 'Xã Tiên Phong',
    ),
    2243 => 
    array (
      0 => 2244,
      1 => 132,
      2 => 'Xã Vạn Phái',
    ),
    2244 => 
    array (
      0 => 2245,
      1 => 132,
      2 => 'Xã Nam Tiến',
    ),
    2245 => 
    array (
      0 => 2246,
      1 => 132,
      2 => 'Xã Tân Hương',
    ),
    2246 => 
    array (
      0 => 2247,
      1 => 132,
      2 => 'Xã Đông Cao',
    ),
    2247 => 
    array (
      0 => 2248,
      1 => 132,
      2 => 'Xã Trung Thành',
    ),
    2248 => 
    array (
      0 => 2249,
      1 => 132,
      2 => 'Xã Tân Phú',
    ),
    2249 => 
    array (
      0 => 2250,
      1 => 132,
      2 => 'Xã Thuận Thành',
    ),
    2250 => 
    array (
      0 => 2251,
      1 => 133,
      2 => 'Thị trấn Hương Sơn',
    ),
    2251 => 
    array (
      0 => 2252,
      1 => 133,
      2 => 'Xã Bàn Đạt',
    ),
    2252 => 
    array (
      0 => 2253,
      1 => 133,
      2 => 'Xã Tân Khánh',
    ),
    2253 => 
    array (
      0 => 2254,
      1 => 133,
      2 => 'Xã Tân Kim',
    ),
    2254 => 
    array (
      0 => 2255,
      1 => 133,
      2 => 'Xã Tân Thành',
    ),
    2255 => 
    array (
      0 => 2256,
      1 => 133,
      2 => 'Xã Đào Xá',
    ),
    2256 => 
    array (
      0 => 2257,
      1 => 133,
      2 => 'Xã Bảo Lý',
    ),
    2257 => 
    array (
      0 => 2258,
      1 => 133,
      2 => 'Xã Thượng Đình',
    ),
    2258 => 
    array (
      0 => 2259,
      1 => 133,
      2 => 'Xã Tân Hòa',
    ),
    2259 => 
    array (
      0 => 2260,
      1 => 133,
      2 => 'Xã Nhã Lộng',
    ),
    2260 => 
    array (
      0 => 2261,
      1 => 133,
      2 => 'Xã Điềm Thụy',
    ),
    2261 => 
    array (
      0 => 2262,
      1 => 133,
      2 => 'Xã Xuân Phương',
    ),
    2262 => 
    array (
      0 => 2263,
      1 => 133,
      2 => 'Xã Tân Đức',
    ),
    2263 => 
    array (
      0 => 2264,
      1 => 133,
      2 => 'Xã Úc Kỳ',
    ),
    2264 => 
    array (
      0 => 2265,
      1 => 133,
      2 => 'Xã Lương Phú',
    ),
    2265 => 
    array (
      0 => 2266,
      1 => 133,
      2 => 'Xã Nga My',
    ),
    2266 => 
    array (
      0 => 2267,
      1 => 133,
      2 => 'Xã Kha Sơn',
    ),
    2267 => 
    array (
      0 => 2268,
      1 => 133,
      2 => 'Xã Thanh Ninh',
    ),
    2268 => 
    array (
      0 => 2269,
      1 => 133,
      2 => 'Xã Dương Thành',
    ),
    2269 => 
    array (
      0 => 2270,
      1 => 133,
      2 => 'Xã Hà Châu',
    ),
    2270 => 
    array (
      0 => 2271,
      1 => 134,
      2 => 'Phường Hoàng Văn Thụ',
    ),
    2271 => 
    array (
      0 => 2272,
      1 => 134,
      2 => 'Phường Tam Thanh',
    ),
    2272 => 
    array (
      0 => 2273,
      1 => 134,
      2 => 'Phường Vĩnh Trại',
    ),
    2273 => 
    array (
      0 => 2274,
      1 => 134,
      2 => 'Phường Đông Kinh',
    ),
    2274 => 
    array (
      0 => 2275,
      1 => 134,
      2 => 'Phường Chi Lăng',
    ),
    2275 => 
    array (
      0 => 2276,
      1 => 134,
      2 => 'Xã Hoàng Đồng',
    ),
    2276 => 
    array (
      0 => 2277,
      1 => 134,
      2 => 'Xã Quảng Lạc',
    ),
    2277 => 
    array (
      0 => 2278,
      1 => 134,
      2 => 'Xã Mai Pha',
    ),
    2278 => 
    array (
      0 => 2279,
      1 => 135,
      2 => 'Thị trấn Thất Khê',
    ),
    2279 => 
    array (
      0 => 2280,
      1 => 135,
      2 => 'Xã Khánh Long',
    ),
    2280 => 
    array (
      0 => 2281,
      1 => 135,
      2 => 'Xã Đoàn Kết',
    ),
    2281 => 
    array (
      0 => 2282,
      1 => 135,
      2 => 'Xã Quốc Khánh',
    ),
    2282 => 
    array (
      0 => 2283,
      1 => 135,
      2 => 'Xã Vĩnh Tiến',
    ),
    2283 => 
    array (
      0 => 2284,
      1 => 135,
      2 => 'Xã Cao Minh',
    ),
    2284 => 
    array (
      0 => 2285,
      1 => 135,
      2 => 'Xã Chí Minh',
    ),
    2285 => 
    array (
      0 => 2286,
      1 => 135,
      2 => 'Xã Tri Phương',
    ),
    2286 => 
    array (
      0 => 2287,
      1 => 135,
      2 => 'Xã Tân Tiến',
    ),
    2287 => 
    array (
      0 => 2288,
      1 => 135,
      2 => 'Xã Tân Yên',
    ),
    2288 => 
    array (
      0 => 2289,
      1 => 135,
      2 => 'Xã Đội Cấn',
    ),
    2289 => 
    array (
      0 => 2290,
      1 => 135,
      2 => 'Xã Tân Minh',
    ),
    2290 => 
    array (
      0 => 2291,
      1 => 135,
      2 => 'Xã Kim Đồng',
    ),
    2291 => 
    array (
      0 => 2292,
      1 => 135,
      2 => 'Xã Chi Lăng',
    ),
    2292 => 
    array (
      0 => 2293,
      1 => 135,
      2 => 'Xã Trung Thành',
    ),
    2293 => 
    array (
      0 => 2294,
      1 => 135,
      2 => 'Xã Đại Đồng',
    ),
    2294 => 
    array (
      0 => 2295,
      1 => 135,
      2 => 'Xã Đào Viên',
    ),
    2295 => 
    array (
      0 => 2296,
      1 => 135,
      2 => 'Xã Đề Thám',
    ),
    2296 => 
    array (
      0 => 2297,
      1 => 135,
      2 => 'Xã Kháng Chiến',
    ),
    2297 => 
    array (
      0 => 2298,
      1 => 135,
      2 => 'Xã Hùng Sơn',
    ),
    2298 => 
    array (
      0 => 2299,
      1 => 135,
      2 => 'Xã Quốc Việt',
    ),
    2299 => 
    array (
      0 => 2300,
      1 => 135,
      2 => 'Xã Hùng Việt',
    ),
    2300 => 
    array (
      0 => 2301,
      1 => 136,
      2 => 'Xã Hưng Đạo',
    ),
    2301 => 
    array (
      0 => 2302,
      1 => 136,
      2 => 'Xã Vĩnh Yên',
    ),
    2302 => 
    array (
      0 => 2303,
      1 => 136,
      2 => 'Xã Hoa Thám',
    ),
    2303 => 
    array (
      0 => 2304,
      1 => 136,
      2 => 'Xã Quý Hòa',
    ),
    2304 => 
    array (
      0 => 2305,
      1 => 136,
      2 => 'Xã Hồng Phong',
    ),
    2305 => 
    array (
      0 => 2306,
      1 => 136,
      2 => 'Xã Yên Lỗ',
    ),
    2306 => 
    array (
      0 => 2307,
      1 => 136,
      2 => 'Xã Thiện Hòa',
    ),
    2307 => 
    array (
      0 => 2308,
      1 => 136,
      2 => 'Xã Quang Trung',
    ),
    2308 => 
    array (
      0 => 2309,
      1 => 136,
      2 => 'Xã Thiện Thuật',
    ),
    2309 => 
    array (
      0 => 2310,
      1 => 136,
      2 => 'Xã Minh Khai',
    ),
    2310 => 
    array (
      0 => 2311,
      1 => 136,
      2 => 'Xã Thiện Long',
    ),
    2311 => 
    array (
      0 => 2312,
      1 => 136,
      2 => 'Xã Hoàng Văn Thụ',
    ),
    2312 => 
    array (
      0 => 2313,
      1 => 136,
      2 => 'Xã Hòa Bình',
    ),
    2313 => 
    array (
      0 => 2314,
      1 => 136,
      2 => 'Xã Mông Ân',
    ),
    2314 => 
    array (
      0 => 2315,
      1 => 136,
      2 => 'Xã Tân Hòa',
    ),
    2315 => 
    array (
      0 => 2316,
      1 => 136,
      2 => 'Thị trấn Bình Gia',
    ),
    2316 => 
    array (
      0 => 2317,
      1 => 136,
      2 => 'Xã Hồng Thái',
    ),
    2317 => 
    array (
      0 => 2318,
      1 => 136,
      2 => 'Xã Bình La',
    ),
    2318 => 
    array (
      0 => 2319,
      1 => 136,
      2 => 'Xã Tân Văn',
    ),
    2319 => 
    array (
      0 => 2320,
      1 => 137,
      2 => 'Thị trấn Na Sầm',
    ),
    2320 => 
    array (
      0 => 2321,
      1 => 137,
      2 => 'Xã Trùng Khánh',
    ),
    2321 => 
    array (
      0 => 2322,
      1 => 137,
      2 => 'Xã Bắc La',
    ),
    2322 => 
    array (
      0 => 2323,
      1 => 137,
      2 => 'Xã Thụy Hùng',
    ),
    2323 => 
    array (
      0 => 2324,
      1 => 137,
      2 => 'Xã Bắc Hùng',
    ),
    2324 => 
    array (
      0 => 2325,
      1 => 137,
      2 => 'Xã Tân Tác',
    ),
    2325 => 
    array (
      0 => 2326,
      1 => 137,
      2 => 'Xã Thanh Long',
    ),
    2326 => 
    array (
      0 => 2327,
      1 => 137,
      2 => 'Xã Hội Hoan',
    ),
    2327 => 
    array (
      0 => 2328,
      1 => 137,
      2 => 'Xã Bắc Việt',
    ),
    2328 => 
    array (
      0 => 2329,
      1 => 137,
      2 => 'Xã Hoàng Việt',
    ),
    2329 => 
    array (
      0 => 2330,
      1 => 137,
      2 => 'Xã Gia Miễn',
    ),
    2330 => 
    array (
      0 => 2331,
      1 => 137,
      2 => 'Xã Thành Hòa',
    ),
    2331 => 
    array (
      0 => 2332,
      1 => 137,
      2 => 'Xã Tân Thanh',
    ),
    2332 => 
    array (
      0 => 2333,
      1 => 137,
      2 => 'Xã Tân Mỹ',
    ),
    2333 => 
    array (
      0 => 2334,
      1 => 137,
      2 => 'Xã Hồng Thái',
    ),
    2334 => 
    array (
      0 => 2335,
      1 => 137,
      2 => 'Xã  Hoàng Văn Thụ',
    ),
    2335 => 
    array (
      0 => 2336,
      1 => 137,
      2 => 'Xã Nhạc Kỳ',
    ),
    2336 => 
    array (
      0 => 2337,
      1 => 138,
      2 => 'Thị trấn Đồng Đăng',
    ),
    2337 => 
    array (
      0 => 2338,
      1 => 138,
      2 => 'Thị trấn Cao Lộc',
    ),
    2338 => 
    array (
      0 => 2339,
      1 => 138,
      2 => 'Xã Bảo Lâm',
    ),
    2339 => 
    array (
      0 => 2340,
      1 => 138,
      2 => 'Xã Thanh Lòa',
    ),
    2340 => 
    array (
      0 => 2341,
      1 => 138,
      2 => 'Xã Cao Lâu',
    ),
    2341 => 
    array (
      0 => 2342,
      1 => 138,
      2 => 'Xã Thạch Đạn',
    ),
    2342 => 
    array (
      0 => 2343,
      1 => 138,
      2 => 'Xã Xuất Lễ',
    ),
    2343 => 
    array (
      0 => 2344,
      1 => 138,
      2 => 'Xã Hồng Phong',
    ),
    2344 => 
    array (
      0 => 2345,
      1 => 138,
      2 => 'Xã Thụy Hùng',
    ),
    2345 => 
    array (
      0 => 2346,
      1 => 138,
      2 => 'Xã Lộc Yên',
    ),
    2346 => 
    array (
      0 => 2347,
      1 => 138,
      2 => 'Xã Phú Xá',
    ),
    2347 => 
    array (
      0 => 2348,
      1 => 138,
      2 => 'Xã Bình Trung',
    ),
    2348 => 
    array (
      0 => 2349,
      1 => 138,
      2 => 'Xã Hải Yến',
    ),
    2349 => 
    array (
      0 => 2350,
      1 => 138,
      2 => 'Xã Hòa Cư',
    ),
    2350 => 
    array (
      0 => 2351,
      1 => 138,
      2 => 'Xã Hợp Thành',
    ),
    2351 => 
    array (
      0 => 2352,
      1 => 138,
      2 => 'Xã Công Sơn',
    ),
    2352 => 
    array (
      0 => 2353,
      1 => 138,
      2 => 'Xã Gia Cát',
    ),
    2353 => 
    array (
      0 => 2354,
      1 => 138,
      2 => 'Xã Mẫu Sơn',
    ),
    2354 => 
    array (
      0 => 2355,
      1 => 138,
      2 => 'Xã Xuân Long',
    ),
    2355 => 
    array (
      0 => 2356,
      1 => 138,
      2 => 'Xã Tân Liên',
    ),
    2356 => 
    array (
      0 => 2357,
      1 => 138,
      2 => 'Xã Yên Trạch',
    ),
    2357 => 
    array (
      0 => 2358,
      1 => 138,
      2 => 'Xã Tân Thành',
    ),
    2358 => 
    array (
      0 => 2359,
      1 => 139,
      2 => 'Thị trấn Văn Quan',
    ),
    2359 => 
    array (
      0 => 2360,
      1 => 139,
      2 => 'Xã Trấn Ninh',
    ),
    2360 => 
    array (
      0 => 2361,
      1 => 139,
      2 => 'Xã Liên Hội',
    ),
    2361 => 
    array (
      0 => 2362,
      1 => 139,
      2 => 'Xã Hòa Bình',
    ),
    2362 => 
    array (
      0 => 2363,
      1 => 139,
      2 => 'Xã Tú Xuyên',
    ),
    2363 => 
    array (
      0 => 2364,
      1 => 139,
      2 => 'Xã Điềm He',
    ),
    2364 => 
    array (
      0 => 2365,
      1 => 139,
      2 => 'Xã An Sơn',
    ),
    2365 => 
    array (
      0 => 2366,
      1 => 139,
      2 => 'Xã Khánh Khê',
    ),
    2366 => 
    array (
      0 => 2367,
      1 => 139,
      2 => 'Xã Lương Năng',
    ),
    2367 => 
    array (
      0 => 2368,
      1 => 139,
      2 => 'Xã Đồng Giáp',
    ),
    2368 => 
    array (
      0 => 2369,
      1 => 139,
      2 => 'Xã Bình Phúc',
    ),
    2369 => 
    array (
      0 => 2370,
      1 => 139,
      2 => 'Xã Tràng Các',
    ),
    2370 => 
    array (
      0 => 2371,
      1 => 139,
      2 => 'Xã Tân Đoàn',
    ),
    2371 => 
    array (
      0 => 2372,
      1 => 139,
      2 => 'Xã Tri Lễ',
    ),
    2372 => 
    array (
      0 => 2373,
      1 => 139,
      2 => 'Xã Tràng Phái',
    ),
    2373 => 
    array (
      0 => 2374,
      1 => 139,
      2 => 'Xã Yên Phúc',
    ),
    2374 => 
    array (
      0 => 2375,
      1 => 139,
      2 => 'Xã Hữu Lễ',
    ),
    2375 => 
    array (
      0 => 2376,
      1 => 140,
      2 => 'Thị trấn Bắc Sơn',
    ),
    2376 => 
    array (
      0 => 2377,
      1 => 140,
      2 => 'Xã Long Đống',
    ),
    2377 => 
    array (
      0 => 2378,
      1 => 140,
      2 => 'Xã Vạn Thủy',
    ),
    2378 => 
    array (
      0 => 2379,
      1 => 140,
      2 => 'Xã Đồng ý',
    ),
    2379 => 
    array (
      0 => 2380,
      1 => 140,
      2 => 'Xã Tân Tri',
    ),
    2380 => 
    array (
      0 => 2381,
      1 => 140,
      2 => 'Xã Bắc Quỳnh',
    ),
    2381 => 
    array (
      0 => 2382,
      1 => 140,
      2 => 'Xã Hưng Vũ',
    ),
    2382 => 
    array (
      0 => 2383,
      1 => 140,
      2 => 'Xã Tân Lập',
    ),
    2383 => 
    array (
      0 => 2384,
      1 => 140,
      2 => 'Xã Vũ Sơn',
    ),
    2384 => 
    array (
      0 => 2385,
      1 => 140,
      2 => 'Xã Chiêu Vũ',
    ),
    2385 => 
    array (
      0 => 2386,
      1 => 140,
      2 => 'Xã Tân Hương',
    ),
    2386 => 
    array (
      0 => 2387,
      1 => 140,
      2 => 'Xã Chiến Thắng',
    ),
    2387 => 
    array (
      0 => 2388,
      1 => 140,
      2 => 'Xã Vũ Lăng',
    ),
    2388 => 
    array (
      0 => 2389,
      1 => 140,
      2 => 'Xã Trấn Yên',
    ),
    2389 => 
    array (
      0 => 2390,
      1 => 140,
      2 => 'Xã Vũ Lễ',
    ),
    2390 => 
    array (
      0 => 2391,
      1 => 140,
      2 => 'Xã Nhất Hòa',
    ),
    2391 => 
    array (
      0 => 2392,
      1 => 140,
      2 => 'Xã Tân Thành',
    ),
    2392 => 
    array (
      0 => 2393,
      1 => 140,
      2 => 'Xã Nhất Tiến',
    ),
    2393 => 
    array (
      0 => 2394,
      1 => 141,
      2 => 'Thị trấn Hữu Lũng',
    ),
    2394 => 
    array (
      0 => 2395,
      1 => 141,
      2 => 'Xã Hữu Liên',
    ),
    2395 => 
    array (
      0 => 2396,
      1 => 141,
      2 => 'Xã Yên Bình',
    ),
    2396 => 
    array (
      0 => 2397,
      1 => 141,
      2 => 'Xã Quyết Thắng',
    ),
    2397 => 
    array (
      0 => 2398,
      1 => 141,
      2 => 'Xã Hòa Bình',
    ),
    2398 => 
    array (
      0 => 2399,
      1 => 141,
      2 => 'Xã Yên Thịnh',
    ),
    2399 => 
    array (
      0 => 2400,
      1 => 141,
      2 => 'Xã Yên Sơn',
    ),
    2400 => 
    array (
      0 => 2401,
      1 => 141,
      2 => 'Xã Thiện Tân',
    ),
    2401 => 
    array (
      0 => 2402,
      1 => 141,
      2 => 'Xã Yên Vượng',
    ),
    2402 => 
    array (
      0 => 2403,
      1 => 141,
      2 => 'Xã Minh Tiến',
    ),
    2403 => 
    array (
      0 => 2404,
      1 => 141,
      2 => 'Xã Nhật Tiến',
    ),
    2404 => 
    array (
      0 => 2405,
      1 => 141,
      2 => 'Xã Thanh Sơn',
    ),
    2405 => 
    array (
      0 => 2406,
      1 => 141,
      2 => 'Xã Đồng Tân',
    ),
    2406 => 
    array (
      0 => 2407,
      1 => 141,
      2 => 'Xã Cai Kinh',
    ),
    2407 => 
    array (
      0 => 2408,
      1 => 141,
      2 => 'Xã Hòa Lạc',
    ),
    2408 => 
    array (
      0 => 2409,
      1 => 141,
      2 => 'Xã Vân Nham',
    ),
    2409 => 
    array (
      0 => 2410,
      1 => 141,
      2 => 'Xã Đồng Tiến',
    ),
    2410 => 
    array (
      0 => 2411,
      1 => 141,
      2 => 'Xã Tân Thành',
    ),
    2411 => 
    array (
      0 => 2412,
      1 => 141,
      2 => 'Xã Hòa Sơn',
    ),
    2412 => 
    array (
      0 => 2413,
      1 => 141,
      2 => 'Xã Minh Sơn',
    ),
    2413 => 
    array (
      0 => 2414,
      1 => 141,
      2 => 'Xã Hồ Sơn',
    ),
    2414 => 
    array (
      0 => 2415,
      1 => 141,
      2 => 'Xã Sơn Hà',
    ),
    2415 => 
    array (
      0 => 2416,
      1 => 141,
      2 => 'Xã Minh Hòa',
    ),
    2416 => 
    array (
      0 => 2417,
      1 => 141,
      2 => 'Xã Hòa Thắng',
    ),
    2417 => 
    array (
      0 => 2418,
      1 => 142,
      2 => 'Thị trấn Đồng Mỏ',
    ),
    2418 => 
    array (
      0 => 2419,
      1 => 142,
      2 => 'Thị trấn Chi Lăng',
    ),
    2419 => 
    array (
      0 => 2420,
      1 => 142,
      2 => 'Xã Vân An',
    ),
    2420 => 
    array (
      0 => 2421,
      1 => 142,
      2 => 'Xã Vân Thủy',
    ),
    2421 => 
    array (
      0 => 2422,
      1 => 142,
      2 => 'Xã Gia Lộc',
    ),
    2422 => 
    array (
      0 => 2423,
      1 => 142,
      2 => 'Xã Bắc Thủy',
    ),
    2423 => 
    array (
      0 => 2424,
      1 => 142,
      2 => 'Xã Chiến Thắng',
    ),
    2424 => 
    array (
      0 => 2425,
      1 => 142,
      2 => 'Xã Mai Sao',
    ),
    2425 => 
    array (
      0 => 2426,
      1 => 142,
      2 => 'Xã Bằng Hữu',
    ),
    2426 => 
    array (
      0 => 2427,
      1 => 142,
      2 => 'Xã Thượng Cường',
    ),
    2427 => 
    array (
      0 => 2428,
      1 => 142,
      2 => 'Xã Bằng Mạc',
    ),
    2428 => 
    array (
      0 => 2429,
      1 => 142,
      2 => 'Xã Nhân Lý',
    ),
    2429 => 
    array (
      0 => 2430,
      1 => 142,
      2 => 'Xã Lâm Sơn',
    ),
    2430 => 
    array (
      0 => 2431,
      1 => 142,
      2 => 'Xã Liên Sơn',
    ),
    2431 => 
    array (
      0 => 2432,
      1 => 142,
      2 => 'Xã Vạn Linh',
    ),
    2432 => 
    array (
      0 => 2433,
      1 => 142,
      2 => 'Xã Hòa Bình',
    ),
    2433 => 
    array (
      0 => 2434,
      1 => 142,
      2 => 'Xã Hữu Kiên',
    ),
    2434 => 
    array (
      0 => 2435,
      1 => 142,
      2 => 'Xã Quan Sơn',
    ),
    2435 => 
    array (
      0 => 2436,
      1 => 142,
      2 => 'Xã Y Tịch',
    ),
    2436 => 
    array (
      0 => 2437,
      1 => 142,
      2 => 'Xã Chi Lăng',
    ),
    2437 => 
    array (
      0 => 2438,
      1 => 143,
      2 => 'Thị trấn Na Dương',
    ),
    2438 => 
    array (
      0 => 2439,
      1 => 143,
      2 => 'Thị trấn Lộc Bình',
    ),
    2439 => 
    array (
      0 => 2440,
      1 => 143,
      2 => 'Xã Mẫu Sơn',
    ),
    2440 => 
    array (
      0 => 2441,
      1 => 143,
      2 => 'Xã Yên Khoái',
    ),
    2441 => 
    array (
      0 => 2442,
      1 => 143,
      2 => 'Xã Khánh Xuân',
    ),
    2442 => 
    array (
      0 => 2443,
      1 => 143,
      2 => 'Xã Tú Mịch',
    ),
    2443 => 
    array (
      0 => 2444,
      1 => 143,
      2 => 'Xã Hữu Khánh',
    ),
    2444 => 
    array (
      0 => 2445,
      1 => 143,
      2 => 'Xã Đồng Bục',
    ),
    2445 => 
    array (
      0 => 2446,
      1 => 143,
      2 => 'Xã Tam Gia',
    ),
    2446 => 
    array (
      0 => 2447,
      1 => 143,
      2 => 'Xã Tú Đoạn',
    ),
    2447 => 
    array (
      0 => 2448,
      1 => 143,
      2 => 'Xã Khuất Xá',
    ),
    2448 => 
    array (
      0 => 2449,
      1 => 143,
      2 => 'Xã Tĩnh Bắc',
    ),
    2449 => 
    array (
      0 => 2450,
      1 => 143,
      2 => 'Xã Thống Nhất',
    ),
    2450 => 
    array (
      0 => 2451,
      1 => 143,
      2 => 'Xã Sàn Viên',
    ),
    2451 => 
    array (
      0 => 2452,
      1 => 143,
      2 => 'Xã Đông Quan',
    ),
    2452 => 
    array (
      0 => 2453,
      1 => 143,
      2 => 'Xã Minh Hiệp',
    ),
    2453 => 
    array (
      0 => 2454,
      1 => 143,
      2 => 'Xã Hữu Lân',
    ),
    2454 => 
    array (
      0 => 2455,
      1 => 143,
      2 => 'Xã Lợi Bác',
    ),
    2455 => 
    array (
      0 => 2456,
      1 => 143,
      2 => 'Xã Nam Quan',
    ),
    2456 => 
    array (
      0 => 2457,
      1 => 143,
      2 => 'Xã Xuân Dương',
    ),
    2457 => 
    array (
      0 => 2458,
      1 => 143,
      2 => 'Xã Ái Quốc',
    ),
    2458 => 
    array (
      0 => 2459,
      1 => 144,
      2 => 'Thị trấn Đình Lập',
    ),
    2459 => 
    array (
      0 => 2460,
      1 => 144,
      2 => 'Thị trấn NT Thái Bình',
    ),
    2460 => 
    array (
      0 => 2461,
      1 => 144,
      2 => 'Xã Bắc Xa',
    ),
    2461 => 
    array (
      0 => 2462,
      1 => 144,
      2 => 'Xã Bính Xá',
    ),
    2462 => 
    array (
      0 => 2463,
      1 => 144,
      2 => 'Xã Kiên Mộc',
    ),
    2463 => 
    array (
      0 => 2464,
      1 => 144,
      2 => 'Xã Đình Lập',
    ),
    2464 => 
    array (
      0 => 2465,
      1 => 144,
      2 => 'Xã Thái Bình',
    ),
    2465 => 
    array (
      0 => 2466,
      1 => 144,
      2 => 'Xã Cường Lợi',
    ),
    2466 => 
    array (
      0 => 2467,
      1 => 144,
      2 => 'Xã Châu Sơn',
    ),
    2467 => 
    array (
      0 => 2468,
      1 => 144,
      2 => 'Xã Lâm Ca',
    ),
    2468 => 
    array (
      0 => 2469,
      1 => 144,
      2 => 'Xã Đồng Thắng',
    ),
    2469 => 
    array (
      0 => 2470,
      1 => 144,
      2 => 'Xã Bắc Lãng',
    ),
    2470 => 
    array (
      0 => 2471,
      1 => 145,
      2 => 'Phường Hà Khánh',
    ),
    2471 => 
    array (
      0 => 2472,
      1 => 145,
      2 => 'Phường Hà Phong',
    ),
    2472 => 
    array (
      0 => 2473,
      1 => 145,
      2 => 'Phường Hà Khẩu',
    ),
    2473 => 
    array (
      0 => 2474,
      1 => 145,
      2 => 'Phường Cao Xanh',
    ),
    2474 => 
    array (
      0 => 2475,
      1 => 145,
      2 => 'Phường Giếng Đáy',
    ),
    2475 => 
    array (
      0 => 2476,
      1 => 145,
      2 => 'Phường Hà Tu',
    ),
    2476 => 
    array (
      0 => 2477,
      1 => 145,
      2 => 'Phường Hà Trung',
    ),
    2477 => 
    array (
      0 => 2478,
      1 => 145,
      2 => 'Phường Hà Lầm',
    ),
    2478 => 
    array (
      0 => 2479,
      1 => 145,
      2 => 'Phường Bãi Cháy',
    ),
    2479 => 
    array (
      0 => 2480,
      1 => 145,
      2 => 'Phường Cao Thắng',
    ),
    2480 => 
    array (
      0 => 2481,
      1 => 145,
      2 => 'Phường Hùng Thắng',
    ),
    2481 => 
    array (
      0 => 2482,
      1 => 145,
      2 => 'Phường Yết Kiêu',
    ),
    2482 => 
    array (
      0 => 2483,
      1 => 145,
      2 => 'Phường Trần Hưng Đạo',
    ),
    2483 => 
    array (
      0 => 2484,
      1 => 145,
      2 => 'Phường Hồng Hải',
    ),
    2484 => 
    array (
      0 => 2485,
      1 => 145,
      2 => 'Phường Hồng Gai',
    ),
    2485 => 
    array (
      0 => 2486,
      1 => 145,
      2 => 'Phường Bạch Đằng',
    ),
    2486 => 
    array (
      0 => 2487,
      1 => 145,
      2 => 'Phường Hồng Hà',
    ),
    2487 => 
    array (
      0 => 2488,
      1 => 145,
      2 => 'Phường Tuần Châu',
    ),
    2488 => 
    array (
      0 => 2489,
      1 => 145,
      2 => 'Phường Việt Hưng',
    ),
    2489 => 
    array (
      0 => 2490,
      1 => 145,
      2 => 'Phường Đại Yên',
    ),
    2490 => 
    array (
      0 => 2491,
      1 => 145,
      2 => 'Phường Hoành Bồ',
    ),
    2491 => 
    array (
      0 => 2492,
      1 => 145,
      2 => 'Xã Kỳ Thượng',
    ),
    2492 => 
    array (
      0 => 2493,
      1 => 145,
      2 => 'Xã Đồng Sơn',
    ),
    2493 => 
    array (
      0 => 2494,
      1 => 145,
      2 => 'Xã Tân Dân',
    ),
    2494 => 
    array (
      0 => 2495,
      1 => 145,
      2 => 'Xã Đồng Lâm',
    ),
    2495 => 
    array (
      0 => 2496,
      1 => 145,
      2 => 'Xã Hòa Bình',
    ),
    2496 => 
    array (
      0 => 2497,
      1 => 145,
      2 => 'Xã Vũ Oai',
    ),
    2497 => 
    array (
      0 => 2498,
      1 => 145,
      2 => 'Xã Dân Chủ',
    ),
    2498 => 
    array (
      0 => 2499,
      1 => 145,
      2 => 'Xã Quảng La',
    ),
    2499 => 
    array (
      0 => 2500,
      1 => 145,
      2 => 'Xã Bằng Cả',
    ),
    2500 => 
    array (
      0 => 2501,
      1 => 145,
      2 => 'Xã Thống Nhất',
    ),
    2501 => 
    array (
      0 => 2502,
      1 => 145,
      2 => 'Xã Sơn Dương',
    ),
    2502 => 
    array (
      0 => 2503,
      1 => 145,
      2 => 'Xã Lê Lợi',
    ),
    2503 => 
    array (
      0 => 2504,
      1 => 146,
      2 => 'Phường Ka Long',
    ),
    2504 => 
    array (
      0 => 2505,
      1 => 146,
      2 => 'Phường Trần Phú',
    ),
    2505 => 
    array (
      0 => 2506,
      1 => 146,
      2 => 'Phường Ninh Dương',
    ),
    2506 => 
    array (
      0 => 2507,
      1 => 146,
      2 => 'Phường Hoà Lạc',
    ),
    2507 => 
    array (
      0 => 2508,
      1 => 146,
      2 => 'Phường Trà Cổ',
    ),
    2508 => 
    array (
      0 => 2509,
      1 => 146,
      2 => 'Xã Hải Sơn',
    ),
    2509 => 
    array (
      0 => 2510,
      1 => 146,
      2 => 'Xã Bắc Sơn',
    ),
    2510 => 
    array (
      0 => 2511,
      1 => 146,
      2 => 'Xã Hải Đông',
    ),
    2511 => 
    array (
      0 => 2512,
      1 => 146,
      2 => 'Xã Hải Tiến',
    ),
    2512 => 
    array (
      0 => 2513,
      1 => 146,
      2 => 'Phường Hải Yên',
    ),
    2513 => 
    array (
      0 => 2514,
      1 => 146,
      2 => 'Xã Quảng Nghĩa',
    ),
    2514 => 
    array (
      0 => 2515,
      1 => 146,
      2 => 'Phường Hải Hoà',
    ),
    2515 => 
    array (
      0 => 2516,
      1 => 146,
      2 => 'Xã Hải Xuân',
    ),
    2516 => 
    array (
      0 => 2517,
      1 => 146,
      2 => 'Xã Vạn Ninh',
    ),
    2517 => 
    array (
      0 => 2518,
      1 => 146,
      2 => 'Phường Bình Ngọc',
    ),
    2518 => 
    array (
      0 => 2519,
      1 => 146,
      2 => 'Xã Vĩnh Trung',
    ),
    2519 => 
    array (
      0 => 2520,
      1 => 146,
      2 => 'Xã Vĩnh Thực',
    ),
    2520 => 
    array (
      0 => 2521,
      1 => 147,
      2 => 'Phường Mông Dương',
    ),
    2521 => 
    array (
      0 => 2522,
      1 => 147,
      2 => 'Phường Cửa Ông',
    ),
    2522 => 
    array (
      0 => 2523,
      1 => 147,
      2 => 'Phường Cẩm Sơn',
    ),
    2523 => 
    array (
      0 => 2524,
      1 => 147,
      2 => 'Phường Cẩm Đông',
    ),
    2524 => 
    array (
      0 => 2525,
      1 => 147,
      2 => 'Phường Cẩm Phú',
    ),
    2525 => 
    array (
      0 => 2526,
      1 => 147,
      2 => 'Phường Cẩm Tây',
    ),
    2526 => 
    array (
      0 => 2527,
      1 => 147,
      2 => 'Phường Quang Hanh',
    ),
    2527 => 
    array (
      0 => 2528,
      1 => 147,
      2 => 'Phường Cẩm Thịnh',
    ),
    2528 => 
    array (
      0 => 2529,
      1 => 147,
      2 => 'Phường Cẩm Thủy',
    ),
    2529 => 
    array (
      0 => 2530,
      1 => 147,
      2 => 'Phường Cẩm Thạch',
    ),
    2530 => 
    array (
      0 => 2531,
      1 => 147,
      2 => 'Phường Cẩm Thành',
    ),
    2531 => 
    array (
      0 => 2532,
      1 => 147,
      2 => 'Phường Cẩm Trung',
    ),
    2532 => 
    array (
      0 => 2533,
      1 => 147,
      2 => 'Phường Cẩm Bình',
    ),
    2533 => 
    array (
      0 => 2534,
      1 => 147,
      2 => 'Xã Cộng Hòa',
    ),
    2534 => 
    array (
      0 => 2535,
      1 => 147,
      2 => 'Xã Cẩm Hải',
    ),
    2535 => 
    array (
      0 => 2536,
      1 => 147,
      2 => 'Xã Dương Huy',
    ),
    2536 => 
    array (
      0 => 2537,
      1 => 148,
      2 => 'Phường Vàng Danh',
    ),
    2537 => 
    array (
      0 => 2538,
      1 => 148,
      2 => 'Phường Thanh Sơn',
    ),
    2538 => 
    array (
      0 => 2539,
      1 => 148,
      2 => 'Phường Bắc Sơn',
    ),
    2539 => 
    array (
      0 => 2540,
      1 => 148,
      2 => 'Phường Quang Trung',
    ),
    2540 => 
    array (
      0 => 2541,
      1 => 148,
      2 => 'Phường Trưng Vương',
    ),
    2541 => 
    array (
      0 => 2542,
      1 => 148,
      2 => 'Phường Nam Khê',
    ),
    2542 => 
    array (
      0 => 2543,
      1 => 148,
      2 => 'Phường Yên Thanh',
    ),
    2543 => 
    array (
      0 => 2544,
      1 => 148,
      2 => 'Xã Thượng Yên Công',
    ),
    2544 => 
    array (
      0 => 2545,
      1 => 148,
      2 => 'Phường Phương Đông',
    ),
    2545 => 
    array (
      0 => 2546,
      1 => 148,
      2 => 'Phường Phương Nam',
    ),
    2546 => 
    array (
      0 => 2547,
      1 => 149,
      2 => 'Thị trấn Bình Liêu',
    ),
    2547 => 
    array (
      0 => 2548,
      1 => 149,
      2 => 'Xã Hoành Mô',
    ),
    2548 => 
    array (
      0 => 2549,
      1 => 149,
      2 => 'Xã Đồng Tâm',
    ),
    2549 => 
    array (
      0 => 2550,
      1 => 149,
      2 => 'Xã Đồng Văn',
    ),
    2550 => 
    array (
      0 => 2551,
      1 => 149,
      2 => 'Xã Vô Ngại',
    ),
    2551 => 
    array (
      0 => 2552,
      1 => 149,
      2 => 'Xã Lục Hồn',
    ),
    2552 => 
    array (
      0 => 2553,
      1 => 149,
      2 => 'Xã Húc Động',
    ),
    2553 => 
    array (
      0 => 2554,
      1 => 150,
      2 => 'Thị trấn Tiên Yên',
    ),
    2554 => 
    array (
      0 => 2555,
      1 => 150,
      2 => 'Xã Hà Lâu',
    ),
    2555 => 
    array (
      0 => 2556,
      1 => 150,
      2 => 'Xã Đại Dực',
    ),
    2556 => 
    array (
      0 => 2557,
      1 => 150,
      2 => 'Xã Phong Dụ',
    ),
    2557 => 
    array (
      0 => 2558,
      1 => 150,
      2 => 'Xã Điền Xá',
    ),
    2558 => 
    array (
      0 => 2559,
      1 => 150,
      2 => 'Xã Đông Ngũ',
    ),
    2559 => 
    array (
      0 => 2560,
      1 => 150,
      2 => 'Xã Yên Than',
    ),
    2560 => 
    array (
      0 => 2561,
      1 => 150,
      2 => 'Xã Đông Hải',
    ),
    2561 => 
    array (
      0 => 2562,
      1 => 150,
      2 => 'Xã Hải Lạng',
    ),
    2562 => 
    array (
      0 => 2563,
      1 => 150,
      2 => 'Xã Tiên Lãng',
    ),
    2563 => 
    array (
      0 => 2564,
      1 => 150,
      2 => 'Xã Đồng Rui',
    ),
    2564 => 
    array (
      0 => 2565,
      1 => 151,
      2 => 'Thị trấn Đầm Hà',
    ),
    2565 => 
    array (
      0 => 2566,
      1 => 151,
      2 => 'Xã Quảng Lâm',
    ),
    2566 => 
    array (
      0 => 2567,
      1 => 151,
      2 => 'Xã Quảng An',
    ),
    2567 => 
    array (
      0 => 2568,
      1 => 151,
      2 => 'Xã Tân Bình',
    ),
    2568 => 
    array (
      0 => 2569,
      1 => 151,
      2 => 'Xã Dực Yên',
    ),
    2569 => 
    array (
      0 => 2570,
      1 => 151,
      2 => 'Xã Quảng Tân',
    ),
    2570 => 
    array (
      0 => 2571,
      1 => 151,
      2 => 'Xã Đầm Hà',
    ),
    2571 => 
    array (
      0 => 2572,
      1 => 151,
      2 => 'Xã Tân Lập',
    ),
    2572 => 
    array (
      0 => 2573,
      1 => 151,
      2 => 'Xã Đại Bình',
    ),
    2573 => 
    array (
      0 => 2574,
      1 => 152,
      2 => 'Thị trấn Quảng Hà',
    ),
    2574 => 
    array (
      0 => 2575,
      1 => 152,
      2 => 'Xã Quảng Đức',
    ),
    2575 => 
    array (
      0 => 2576,
      1 => 152,
      2 => 'Xã Quảng Sơn',
    ),
    2576 => 
    array (
      0 => 2577,
      1 => 152,
      2 => 'Xã Quảng Thành',
    ),
    2577 => 
    array (
      0 => 2578,
      1 => 152,
      2 => 'Xã Quảng Thịnh',
    ),
    2578 => 
    array (
      0 => 2579,
      1 => 152,
      2 => 'Xã Quảng Minh',
    ),
    2579 => 
    array (
      0 => 2580,
      1 => 152,
      2 => 'Xã Quảng Chính',
    ),
    2580 => 
    array (
      0 => 2581,
      1 => 152,
      2 => 'Xã Quảng Long',
    ),
    2581 => 
    array (
      0 => 2582,
      1 => 152,
      2 => 'Xã Đường Hoa',
    ),
    2582 => 
    array (
      0 => 2583,
      1 => 152,
      2 => 'Xã Quảng Phong',
    ),
    2583 => 
    array (
      0 => 2584,
      1 => 152,
      2 => 'Xã Cái Chiên',
    ),
    2584 => 
    array (
      0 => 2585,
      1 => 153,
      2 => 'Thị trấn Ba Chẽ',
    ),
    2585 => 
    array (
      0 => 2586,
      1 => 153,
      2 => 'Xã Thanh Sơn',
    ),
    2586 => 
    array (
      0 => 2587,
      1 => 153,
      2 => 'Xã Thanh Lâm',
    ),
    2587 => 
    array (
      0 => 2588,
      1 => 153,
      2 => 'Xã Đạp Thanh',
    ),
    2588 => 
    array (
      0 => 2589,
      1 => 153,
      2 => 'Xã Nam Sơn',
    ),
    2589 => 
    array (
      0 => 2590,
      1 => 153,
      2 => 'Xã Lương Mông',
    ),
    2590 => 
    array (
      0 => 2591,
      1 => 153,
      2 => 'Xã Đồn Đạc',
    ),
    2591 => 
    array (
      0 => 2592,
      1 => 153,
      2 => 'Xã Minh Cầm',
    ),
    2592 => 
    array (
      0 => 2593,
      1 => 154,
      2 => 'Thị trấn Cái Rồng',
    ),
    2593 => 
    array (
      0 => 2594,
      1 => 154,
      2 => 'Xã Đài Xuyên',
    ),
    2594 => 
    array (
      0 => 2595,
      1 => 154,
      2 => 'Xã Bình Dân',
    ),
    2595 => 
    array (
      0 => 2596,
      1 => 154,
      2 => 'Xã Vạn Yên',
    ),
    2596 => 
    array (
      0 => 2597,
      1 => 154,
      2 => 'Xã Minh Châu',
    ),
    2597 => 
    array (
      0 => 2598,
      1 => 154,
      2 => 'Xã Đoàn Kết',
    ),
    2598 => 
    array (
      0 => 2599,
      1 => 154,
      2 => 'Xã Hạ Long',
    ),
    2599 => 
    array (
      0 => 2600,
      1 => 154,
      2 => 'Xã Đông Xá',
    ),
    2600 => 
    array (
      0 => 2601,
      1 => 154,
      2 => 'Xã Bản Sen',
    ),
    2601 => 
    array (
      0 => 2602,
      1 => 154,
      2 => 'Xã Thắng Lợi',
    ),
    2602 => 
    array (
      0 => 2603,
      1 => 154,
      2 => 'Xã Quan Lạn',
    ),
    2603 => 
    array (
      0 => 2604,
      1 => 154,
      2 => 'Xã Ngọc Vừng',
    ),
    2604 => 
    array (
      0 => 2605,
      1 => 155,
      2 => 'Phường Mạo Khê',
    ),
    2605 => 
    array (
      0 => 2606,
      1 => 155,
      2 => 'Phường Đông Triều',
    ),
    2606 => 
    array (
      0 => 2607,
      1 => 155,
      2 => 'Xã An Sinh',
    ),
    2607 => 
    array (
      0 => 2608,
      1 => 155,
      2 => 'Xã Tràng Lương',
    ),
    2608 => 
    array (
      0 => 2609,
      1 => 155,
      2 => 'Xã Bình Khê',
    ),
    2609 => 
    array (
      0 => 2610,
      1 => 155,
      2 => 'Xã Việt Dân',
    ),
    2610 => 
    array (
      0 => 2611,
      1 => 155,
      2 => 'Xã Tân Việt',
    ),
    2611 => 
    array (
      0 => 2612,
      1 => 155,
      2 => 'Xã Bình Dương',
    ),
    2612 => 
    array (
      0 => 2613,
      1 => 155,
      2 => 'Phường Đức Chính',
    ),
    2613 => 
    array (
      0 => 2614,
      1 => 155,
      2 => 'Phường Tràng An',
    ),
    2614 => 
    array (
      0 => 2615,
      1 => 155,
      2 => 'Xã Nguyễn Huệ',
    ),
    2615 => 
    array (
      0 => 2616,
      1 => 155,
      2 => 'Xã Thủy An',
    ),
    2616 => 
    array (
      0 => 2617,
      1 => 155,
      2 => 'Phường Xuân Sơn',
    ),
    2617 => 
    array (
      0 => 2618,
      1 => 155,
      2 => 'Xã Hồng Thái Tây',
    ),
    2618 => 
    array (
      0 => 2619,
      1 => 155,
      2 => 'Xã Hồng Thái Đông',
    ),
    2619 => 
    array (
      0 => 2620,
      1 => 155,
      2 => 'Phường Hoàng Quế',
    ),
    2620 => 
    array (
      0 => 2621,
      1 => 155,
      2 => 'Phường Yên Thọ',
    ),
    2621 => 
    array (
      0 => 2622,
      1 => 155,
      2 => 'Phường Hồng Phong',
    ),
    2622 => 
    array (
      0 => 2623,
      1 => 155,
      2 => 'Phường Kim Sơn',
    ),
    2623 => 
    array (
      0 => 2624,
      1 => 155,
      2 => 'Phường Hưng Đạo',
    ),
    2624 => 
    array (
      0 => 2625,
      1 => 155,
      2 => 'Xã Yên Đức',
    ),
    2625 => 
    array (
      0 => 2626,
      1 => 156,
      2 => 'Phường Quảng Yên',
    ),
    2626 => 
    array (
      0 => 2627,
      1 => 156,
      2 => 'Phường Đông Mai',
    ),
    2627 => 
    array (
      0 => 2628,
      1 => 156,
      2 => 'Phường Minh Thành',
    ),
    2628 => 
    array (
      0 => 2629,
      1 => 156,
      2 => 'Xã Sông Khoai',
    ),
    2629 => 
    array (
      0 => 2630,
      1 => 156,
      2 => 'Xã Hiệp Hòa',
    ),
    2630 => 
    array (
      0 => 2631,
      1 => 156,
      2 => 'Phường Cộng Hòa',
    ),
    2631 => 
    array (
      0 => 2632,
      1 => 156,
      2 => 'Xã Tiền An',
    ),
    2632 => 
    array (
      0 => 2633,
      1 => 156,
      2 => 'Xã Hoàng Tân',
    ),
    2633 => 
    array (
      0 => 2634,
      1 => 156,
      2 => 'Phường Tân An',
    ),
    2634 => 
    array (
      0 => 2635,
      1 => 156,
      2 => 'Phường Yên Giang',
    ),
    2635 => 
    array (
      0 => 2636,
      1 => 156,
      2 => 'Phường Nam Hoà',
    ),
    2636 => 
    array (
      0 => 2637,
      1 => 156,
      2 => 'Phường Hà An',
    ),
    2637 => 
    array (
      0 => 2638,
      1 => 156,
      2 => 'Xã Cẩm La',
    ),
    2638 => 
    array (
      0 => 2639,
      1 => 156,
      2 => 'Phường Phong Hải',
    ),
    2639 => 
    array (
      0 => 2640,
      1 => 156,
      2 => 'Phường Yên Hải',
    ),
    2640 => 
    array (
      0 => 2641,
      1 => 156,
      2 => 'Xã Liên Hòa',
    ),
    2641 => 
    array (
      0 => 2642,
      1 => 156,
      2 => 'Phường Phong Cốc',
    ),
    2642 => 
    array (
      0 => 2643,
      1 => 156,
      2 => 'Xã Liên Vị',
    ),
    2643 => 
    array (
      0 => 2644,
      1 => 156,
      2 => 'Xã Tiền Phong',
    ),
    2644 => 
    array (
      0 => 2645,
      1 => 157,
      2 => 'Thị trấn Cô Tô',
    ),
    2645 => 
    array (
      0 => 2646,
      1 => 157,
      2 => 'Xã Đồng Tiến',
    ),
    2646 => 
    array (
      0 => 2647,
      1 => 157,
      2 => 'Xã Thanh Lân',
    ),
    2647 => 
    array (
      0 => 2648,
      1 => 158,
      2 => 'Phường Thọ Xương',
    ),
    2648 => 
    array (
      0 => 2649,
      1 => 158,
      2 => 'Phường Trần Nguyên Hãn',
    ),
    2649 => 
    array (
      0 => 2650,
      1 => 158,
      2 => 'Phường Ngô Quyền',
    ),
    2650 => 
    array (
      0 => 2651,
      1 => 158,
      2 => 'Phường Hoàng Văn Thụ',
    ),
    2651 => 
    array (
      0 => 2652,
      1 => 158,
      2 => 'Phường Trần Phú',
    ),
    2652 => 
    array (
      0 => 2653,
      1 => 158,
      2 => 'Phường Mỹ Độ',
    ),
    2653 => 
    array (
      0 => 2654,
      1 => 158,
      2 => 'Phường Lê Lợi',
    ),
    2654 => 
    array (
      0 => 2655,
      1 => 158,
      2 => 'Xã Song Mai',
    ),
    2655 => 
    array (
      0 => 2656,
      1 => 158,
      2 => 'Phường Xương Giang',
    ),
    2656 => 
    array (
      0 => 2657,
      1 => 158,
      2 => 'Phường Đa Mai',
    ),
    2657 => 
    array (
      0 => 2658,
      1 => 158,
      2 => 'Phường Dĩnh Kế',
    ),
    2658 => 
    array (
      0 => 2659,
      1 => 158,
      2 => 'Xã Dĩnh Trì',
    ),
    2659 => 
    array (
      0 => 2660,
      1 => 158,
      2 => 'Xã Tân Mỹ',
    ),
    2660 => 
    array (
      0 => 2661,
      1 => 158,
      2 => 'Xã Đồng Sơn',
    ),
    2661 => 
    array (
      0 => 2662,
      1 => 158,
      2 => 'Xã Tân Tiến',
    ),
    2662 => 
    array (
      0 => 2663,
      1 => 158,
      2 => 'Xã Song Khê',
    ),
    2663 => 
    array (
      0 => 2664,
      1 => 159,
      2 => 'Xã Đồng Tiến',
    ),
    2664 => 
    array (
      0 => 2665,
      1 => 159,
      2 => 'Xã Canh Nậu',
    ),
    2665 => 
    array (
      0 => 2666,
      1 => 159,
      2 => 'Xã Xuân Lương',
    ),
    2666 => 
    array (
      0 => 2667,
      1 => 159,
      2 => 'Xã Tam Tiến',
    ),
    2667 => 
    array (
      0 => 2668,
      1 => 159,
      2 => 'Xã Đồng Vương',
    ),
    2668 => 
    array (
      0 => 2669,
      1 => 159,
      2 => 'Xã Đồng Hưu',
    ),
    2669 => 
    array (
      0 => 2670,
      1 => 159,
      2 => 'Xã Đồng Tâm',
    ),
    2670 => 
    array (
      0 => 2671,
      1 => 159,
      2 => 'Xã Tam Hiệp',
    ),
    2671 => 
    array (
      0 => 2672,
      1 => 159,
      2 => 'Xã Tiến Thắng',
    ),
    2672 => 
    array (
      0 => 2673,
      1 => 159,
      2 => 'Xã Hồng Kỳ',
    ),
    2673 => 
    array (
      0 => 2674,
      1 => 159,
      2 => 'Xã Đồng Lạc',
    ),
    2674 => 
    array (
      0 => 2675,
      1 => 159,
      2 => 'Xã Đông Sơn',
    ),
    2675 => 
    array (
      0 => 2676,
      1 => 159,
      2 => 'Xã Tân Hiệp',
    ),
    2676 => 
    array (
      0 => 2677,
      1 => 159,
      2 => 'Xã Hương Vĩ',
    ),
    2677 => 
    array (
      0 => 2678,
      1 => 159,
      2 => 'Xã Đồng Kỳ',
    ),
    2678 => 
    array (
      0 => 2679,
      1 => 159,
      2 => 'Xã An Thượng',
    ),
    2679 => 
    array (
      0 => 2680,
      1 => 159,
      2 => 'Thị trấn Phồn Xương',
    ),
    2680 => 
    array (
      0 => 2681,
      1 => 159,
      2 => 'Xã Tân Sỏi',
    ),
    2681 => 
    array (
      0 => 2682,
      1 => 159,
      2 => 'Thị trấn Bố Hạ',
    ),
    2682 => 
    array (
      0 => 2683,
      1 => 160,
      2 => 'Xã Lan Giới',
    ),
    2683 => 
    array (
      0 => 2684,
      1 => 160,
      2 => 'Thị trấn Nhã Nam',
    ),
    2684 => 
    array (
      0 => 2685,
      1 => 160,
      2 => 'Xã Tân Trung',
    ),
    2685 => 
    array (
      0 => 2686,
      1 => 160,
      2 => 'Xã Đại Hóa',
    ),
    2686 => 
    array (
      0 => 2687,
      1 => 160,
      2 => 'Xã Quang Tiến',
    ),
    2687 => 
    array (
      0 => 2688,
      1 => 160,
      2 => 'Xã Phúc Sơn',
    ),
    2688 => 
    array (
      0 => 2689,
      1 => 160,
      2 => 'Xã An Dương',
    ),
    2689 => 
    array (
      0 => 2690,
      1 => 160,
      2 => 'Xã Phúc Hòa',
    ),
    2690 => 
    array (
      0 => 2691,
      1 => 160,
      2 => 'Xã Liên Sơn',
    ),
    2691 => 
    array (
      0 => 2692,
      1 => 160,
      2 => 'Xã Hợp Đức',
    ),
    2692 => 
    array (
      0 => 2693,
      1 => 160,
      2 => 'Xã Lam Cốt',
    ),
    2693 => 
    array (
      0 => 2694,
      1 => 160,
      2 => 'Xã Cao Xá',
    ),
    2694 => 
    array (
      0 => 2695,
      1 => 160,
      2 => 'Thị trấn Cao Thượng',
    ),
    2695 => 
    array (
      0 => 2696,
      1 => 160,
      2 => 'Xã Việt Ngọc',
    ),
    2696 => 
    array (
      0 => 2697,
      1 => 160,
      2 => 'Xã Song Vân',
    ),
    2697 => 
    array (
      0 => 2698,
      1 => 160,
      2 => 'Xã Ngọc Châu',
    ),
    2698 => 
    array (
      0 => 2699,
      1 => 160,
      2 => 'Xã Ngọc Vân',
    ),
    2699 => 
    array (
      0 => 2700,
      1 => 160,
      2 => 'Xã Việt Lập',
    ),
    2700 => 
    array (
      0 => 2701,
      1 => 160,
      2 => 'Xã Liên Chung',
    ),
    2701 => 
    array (
      0 => 2702,
      1 => 160,
      2 => 'Xã Ngọc Thiện',
    ),
    2702 => 
    array (
      0 => 2703,
      1 => 160,
      2 => 'Xã Ngọc Lý',
    ),
    2703 => 
    array (
      0 => 2704,
      1 => 160,
      2 => 'Xã Quế Nham',
    ),
    2704 => 
    array (
      0 => 2705,
      1 => 161,
      2 => 'Thị trấn Vôi',
    ),
    2705 => 
    array (
      0 => 2706,
      1 => 161,
      2 => 'Xã Nghĩa Hòa',
    ),
    2706 => 
    array (
      0 => 2707,
      1 => 161,
      2 => 'Xã Nghĩa Hưng',
    ),
    2707 => 
    array (
      0 => 2708,
      1 => 161,
      2 => 'Xã Quang Thịnh',
    ),
    2708 => 
    array (
      0 => 2709,
      1 => 161,
      2 => 'Xã Hương Sơn',
    ),
    2709 => 
    array (
      0 => 2710,
      1 => 161,
      2 => 'Xã Đào Mỹ',
    ),
    2710 => 
    array (
      0 => 2711,
      1 => 161,
      2 => 'Xã Tiên Lục',
    ),
    2711 => 
    array (
      0 => 2712,
      1 => 161,
      2 => 'Xã An Hà',
    ),
    2712 => 
    array (
      0 => 2713,
      1 => 161,
      2 => 'Thị trấn Kép',
    ),
    2713 => 
    array (
      0 => 2714,
      1 => 161,
      2 => 'Xã Mỹ Hà',
    ),
    2714 => 
    array (
      0 => 2715,
      1 => 161,
      2 => 'Xã Hương Lạc',
    ),
    2715 => 
    array (
      0 => 2716,
      1 => 161,
      2 => 'Xã Dương Đức',
    ),
    2716 => 
    array (
      0 => 2717,
      1 => 161,
      2 => 'Xã Tân Thanh',
    ),
    2717 => 
    array (
      0 => 2718,
      1 => 161,
      2 => 'Xã Yên Mỹ',
    ),
    2718 => 
    array (
      0 => 2719,
      1 => 161,
      2 => 'Xã Tân Hưng',
    ),
    2719 => 
    array (
      0 => 2720,
      1 => 161,
      2 => 'Xã Mỹ Thái',
    ),
    2720 => 
    array (
      0 => 2721,
      1 => 161,
      2 => 'Xã Xương Lâm',
    ),
    2721 => 
    array (
      0 => 2722,
      1 => 161,
      2 => 'Xã Xuân Hương',
    ),
    2722 => 
    array (
      0 => 2723,
      1 => 161,
      2 => 'Xã Tân Dĩnh',
    ),
    2723 => 
    array (
      0 => 2724,
      1 => 161,
      2 => 'Xã Đại Lâm',
    ),
    2724 => 
    array (
      0 => 2725,
      1 => 161,
      2 => 'Xã Thái Đào',
    ),
    2725 => 
    array (
      0 => 2726,
      1 => 162,
      2 => 'Thị trấn Đồi Ngô',
    ),
    2726 => 
    array (
      0 => 2727,
      1 => 162,
      2 => 'Xã Đông Hưng',
    ),
    2727 => 
    array (
      0 => 2728,
      1 => 162,
      2 => 'Xã Đông Phú',
    ),
    2728 => 
    array (
      0 => 2729,
      1 => 162,
      2 => 'Xã Tam Dị',
    ),
    2729 => 
    array (
      0 => 2730,
      1 => 162,
      2 => 'Xã Bảo Sơn',
    ),
    2730 => 
    array (
      0 => 2731,
      1 => 162,
      2 => 'Xã Bảo Đài',
    ),
    2731 => 
    array (
      0 => 2732,
      1 => 162,
      2 => 'Xã Thanh Lâm',
    ),
    2732 => 
    array (
      0 => 2733,
      1 => 162,
      2 => 'Xã Tiên Nha',
    ),
    2733 => 
    array (
      0 => 2734,
      1 => 162,
      2 => 'Xã Trường Giang',
    ),
    2734 => 
    array (
      0 => 2735,
      1 => 162,
      2 => 'Xã Phương Sơn',
    ),
    2735 => 
    array (
      0 => 2736,
      1 => 162,
      2 => 'Xã Chu Điện',
    ),
    2736 => 
    array (
      0 => 2737,
      1 => 162,
      2 => 'Xã Cương Sơn',
    ),
    2737 => 
    array (
      0 => 2738,
      1 => 162,
      2 => 'Xã Nghĩa Phương',
    ),
    2738 => 
    array (
      0 => 2739,
      1 => 162,
      2 => 'Xã Vô Tranh',
    ),
    2739 => 
    array (
      0 => 2740,
      1 => 162,
      2 => 'Xã Bình Sơn',
    ),
    2740 => 
    array (
      0 => 2741,
      1 => 162,
      2 => 'Xã Lan Mẫu',
    ),
    2741 => 
    array (
      0 => 2742,
      1 => 162,
      2 => 'Xã Yên Sơn',
    ),
    2742 => 
    array (
      0 => 2743,
      1 => 162,
      2 => 'Xã Khám Lạng',
    ),
    2743 => 
    array (
      0 => 2744,
      1 => 162,
      2 => 'Xã Huyền Sơn',
    ),
    2744 => 
    array (
      0 => 2745,
      1 => 162,
      2 => 'Xã Trường Sơn',
    ),
    2745 => 
    array (
      0 => 2746,
      1 => 162,
      2 => 'Xã Lục Sơn',
    ),
    2746 => 
    array (
      0 => 2747,
      1 => 162,
      2 => 'Xã Bắc Lũng',
    ),
    2747 => 
    array (
      0 => 2748,
      1 => 162,
      2 => 'Xã Vũ Xá',
    ),
    2748 => 
    array (
      0 => 2749,
      1 => 162,
      2 => 'Xã Cẩm Lý',
    ),
    2749 => 
    array (
      0 => 2750,
      1 => 162,
      2 => 'Xã Đan Hội',
    ),
    2750 => 
    array (
      0 => 2751,
      1 => 163,
      2 => 'Thị trấn Chũ',
    ),
    2751 => 
    array (
      0 => 2752,
      1 => 163,
      2 => 'Xã Cấm Sơn',
    ),
    2752 => 
    array (
      0 => 2753,
      1 => 163,
      2 => 'Xã Tân Sơn',
    ),
    2753 => 
    array (
      0 => 2754,
      1 => 163,
      2 => 'Xã Phong Minh',
    ),
    2754 => 
    array (
      0 => 2755,
      1 => 163,
      2 => 'Xã Phong Vân',
    ),
    2755 => 
    array (
      0 => 2756,
      1 => 163,
      2 => 'Xã Xa Lý',
    ),
    2756 => 
    array (
      0 => 2757,
      1 => 163,
      2 => 'Xã Hộ Đáp',
    ),
    2757 => 
    array (
      0 => 2758,
      1 => 163,
      2 => 'Xã Sơn Hải',
    ),
    2758 => 
    array (
      0 => 2759,
      1 => 163,
      2 => 'Xã Thanh Hải',
    ),
    2759 => 
    array (
      0 => 2760,
      1 => 163,
      2 => 'Xã Kiên Lao',
    ),
    2760 => 
    array (
      0 => 2761,
      1 => 163,
      2 => 'Xã Biên Sơn',
    ),
    2761 => 
    array (
      0 => 2762,
      1 => 163,
      2 => 'Xã Kiên Thành',
    ),
    2762 => 
    array (
      0 => 2763,
      1 => 163,
      2 => 'Xã Hồng Giang',
    ),
    2763 => 
    array (
      0 => 2764,
      1 => 163,
      2 => 'Xã Kim Sơn',
    ),
    2764 => 
    array (
      0 => 2765,
      1 => 163,
      2 => 'Xã Tân Hoa',
    ),
    2765 => 
    array (
      0 => 2766,
      1 => 163,
      2 => 'Xã Giáp Sơn',
    ),
    2766 => 
    array (
      0 => 2767,
      1 => 163,
      2 => 'Xã Biển Động',
    ),
    2767 => 
    array (
      0 => 2768,
      1 => 163,
      2 => 'Xã Quý Sơn',
    ),
    2768 => 
    array (
      0 => 2769,
      1 => 163,
      2 => 'Xã Trù Hựu',
    ),
    2769 => 
    array (
      0 => 2770,
      1 => 163,
      2 => 'Xã Phì Điền',
    ),
    2770 => 
    array (
      0 => 2771,
      1 => 163,
      2 => 'Xã Tân Quang',
    ),
    2771 => 
    array (
      0 => 2772,
      1 => 163,
      2 => 'Xã Đồng Cốc',
    ),
    2772 => 
    array (
      0 => 2773,
      1 => 163,
      2 => 'Xã Tân Lập',
    ),
    2773 => 
    array (
      0 => 2774,
      1 => 163,
      2 => 'Xã Phú Nhuận',
    ),
    2774 => 
    array (
      0 => 2775,
      1 => 163,
      2 => 'Xã Mỹ An',
    ),
    2775 => 
    array (
      0 => 2776,
      1 => 163,
      2 => 'Xã Nam Dương',
    ),
    2776 => 
    array (
      0 => 2777,
      1 => 163,
      2 => 'Xã Tân Mộc',
    ),
    2777 => 
    array (
      0 => 2778,
      1 => 163,
      2 => 'Xã Đèo Gia',
    ),
    2778 => 
    array (
      0 => 2779,
      1 => 163,
      2 => 'Xã Phượng Sơn',
    ),
    2779 => 
    array (
      0 => 2780,
      1 => 164,
      2 => 'Thị trấn An Châu',
    ),
    2780 => 
    array (
      0 => 2781,
      1 => 164,
      2 => 'Thị trấn Tây Yên Tử',
    ),
    2781 => 
    array (
      0 => 2782,
      1 => 164,
      2 => 'Xã Vân Sơn',
    ),
    2782 => 
    array (
      0 => 2783,
      1 => 164,
      2 => 'Xã Hữu Sản',
    ),
    2783 => 
    array (
      0 => 2784,
      1 => 164,
      2 => 'Xã Đại Sơn',
    ),
    2784 => 
    array (
      0 => 2785,
      1 => 164,
      2 => 'Xã Phúc Sơn',
    ),
    2785 => 
    array (
      0 => 2786,
      1 => 164,
      2 => 'Xã Giáo Liêm',
    ),
    2786 => 
    array (
      0 => 2787,
      1 => 164,
      2 => 'Xã Cẩm Đàn',
    ),
    2787 => 
    array (
      0 => 2788,
      1 => 164,
      2 => 'Xã An Lạc',
    ),
    2788 => 
    array (
      0 => 2789,
      1 => 164,
      2 => 'Xã Vĩnh An',
    ),
    2789 => 
    array (
      0 => 2790,
      1 => 164,
      2 => 'Xã Yên Định',
    ),
    2790 => 
    array (
      0 => 2791,
      1 => 164,
      2 => 'Xã Lệ Viễn',
    ),
    2791 => 
    array (
      0 => 2792,
      1 => 164,
      2 => 'Xã An Bá',
    ),
    2792 => 
    array (
      0 => 2793,
      1 => 164,
      2 => 'Xã Tuấn Đạo',
    ),
    2793 => 
    array (
      0 => 2794,
      1 => 164,
      2 => 'Xã Dương Hưu',
    ),
    2794 => 
    array (
      0 => 2795,
      1 => 164,
      2 => 'Xã Long Sơn',
    ),
    2795 => 
    array (
      0 => 2796,
      1 => 164,
      2 => 'Xã Thanh Luận',
    ),
    2796 => 
    array (
      0 => 2797,
      1 => 165,
      2 => 'Thị trấn Nham Biền',
    ),
    2797 => 
    array (
      0 => 2798,
      1 => 165,
      2 => 'Thị trấn Tân An',
    ),
    2798 => 
    array (
      0 => 2799,
      1 => 165,
      2 => 'Xã Lão Hộ',
    ),
    2799 => 
    array (
      0 => 2800,
      1 => 165,
      2 => 'Xã Hương Gián',
    ),
    2800 => 
    array (
      0 => 2801,
      1 => 165,
      2 => 'Xã Quỳnh Sơn',
    ),
    2801 => 
    array (
      0 => 2802,
      1 => 165,
      2 => 'Xã Nội Hoàng',
    ),
    2802 => 
    array (
      0 => 2803,
      1 => 165,
      2 => 'Xã Tiền Phong',
    ),
    2803 => 
    array (
      0 => 2804,
      1 => 165,
      2 => 'Xã Xuân Phú',
    ),
    2804 => 
    array (
      0 => 2805,
      1 => 165,
      2 => 'Xã Tân Liễu',
    ),
    2805 => 
    array (
      0 => 2806,
      1 => 165,
      2 => 'Xã Trí Yên',
    ),
    2806 => 
    array (
      0 => 2807,
      1 => 165,
      2 => 'Xã Lãng Sơn',
    ),
    2807 => 
    array (
      0 => 2808,
      1 => 165,
      2 => 'Xã Yên Lư',
    ),
    2808 => 
    array (
      0 => 2809,
      1 => 165,
      2 => 'Xã Tiến Dũng',
    ),
    2809 => 
    array (
      0 => 2810,
      1 => 165,
      2 => 'Xã Đức Giang',
    ),
    2810 => 
    array (
      0 => 2811,
      1 => 165,
      2 => 'Xã Cảnh Thụy',
    ),
    2811 => 
    array (
      0 => 2812,
      1 => 165,
      2 => 'Xã Tư Mại',
    ),
    2812 => 
    array (
      0 => 2813,
      1 => 165,
      2 => 'Xã Đồng Việt',
    ),
    2813 => 
    array (
      0 => 2814,
      1 => 165,
      2 => 'Xã Đồng Phúc',
    ),
    2814 => 
    array (
      0 => 2815,
      1 => 166,
      2 => 'Xã Thượng Lan',
    ),
    2815 => 
    array (
      0 => 2816,
      1 => 166,
      2 => 'Xã Việt Tiến',
    ),
    2816 => 
    array (
      0 => 2817,
      1 => 166,
      2 => 'Xã Nghĩa Trung',
    ),
    2817 => 
    array (
      0 => 2818,
      1 => 166,
      2 => 'Xã Minh Đức',
    ),
    2818 => 
    array (
      0 => 2819,
      1 => 166,
      2 => 'Xã Hương Mai',
    ),
    2819 => 
    array (
      0 => 2820,
      1 => 166,
      2 => 'Xã Tự Lạn',
    ),
    2820 => 
    array (
      0 => 2821,
      1 => 166,
      2 => 'Thị trấn Bích Động',
    ),
    2821 => 
    array (
      0 => 2822,
      1 => 166,
      2 => 'Xã Trung Sơn',
    ),
    2822 => 
    array (
      0 => 2823,
      1 => 166,
      2 => 'Xã Hồng Thái',
    ),
    2823 => 
    array (
      0 => 2824,
      1 => 166,
      2 => 'Xã Tiên Sơn',
    ),
    2824 => 
    array (
      0 => 2825,
      1 => 166,
      2 => 'Xã Tăng Tiến',
    ),
    2825 => 
    array (
      0 => 2826,
      1 => 166,
      2 => 'Xã Quảng Minh',
    ),
    2826 => 
    array (
      0 => 2827,
      1 => 166,
      2 => 'Thị trấn Nếnh',
    ),
    2827 => 
    array (
      0 => 2828,
      1 => 166,
      2 => 'Xã Ninh Sơn',
    ),
    2828 => 
    array (
      0 => 2829,
      1 => 166,
      2 => 'Xã Vân Trung',
    ),
    2829 => 
    array (
      0 => 2830,
      1 => 166,
      2 => 'Xã Vân Hà',
    ),
    2830 => 
    array (
      0 => 2831,
      1 => 166,
      2 => 'Xã Quang Châu',
    ),
    2831 => 
    array (
      0 => 2832,
      1 => 167,
      2 => 'Xã Đồng Tân',
    ),
    2832 => 
    array (
      0 => 2833,
      1 => 167,
      2 => 'Xã Thanh Vân',
    ),
    2833 => 
    array (
      0 => 2834,
      1 => 167,
      2 => 'Xã Hoàng Lương',
    ),
    2834 => 
    array (
      0 => 2835,
      1 => 167,
      2 => 'Xã Hoàng Vân',
    ),
    2835 => 
    array (
      0 => 2836,
      1 => 167,
      2 => 'Xã Hoàng Thanh',
    ),
    2836 => 
    array (
      0 => 2837,
      1 => 167,
      2 => 'Xã Hoàng An',
    ),
    2837 => 
    array (
      0 => 2838,
      1 => 167,
      2 => 'Xã Ngọc Sơn',
    ),
    2838 => 
    array (
      0 => 2839,
      1 => 167,
      2 => 'Xã Thái Sơn',
    ),
    2839 => 
    array (
      0 => 2840,
      1 => 167,
      2 => 'Xã Hòa Sơn',
    ),
    2840 => 
    array (
      0 => 2841,
      1 => 167,
      2 => 'Thị trấn Thắng',
    ),
    2841 => 
    array (
      0 => 2842,
      1 => 167,
      2 => 'Xã Quang Minh',
    ),
    2842 => 
    array (
      0 => 2843,
      1 => 167,
      2 => 'Xã Lương Phong',
    ),
    2843 => 
    array (
      0 => 2844,
      1 => 167,
      2 => 'Xã Hùng Sơn',
    ),
    2844 => 
    array (
      0 => 2845,
      1 => 167,
      2 => 'Xã Đại Thành',
    ),
    2845 => 
    array (
      0 => 2846,
      1 => 167,
      2 => 'Xã Thường Thắng',
    ),
    2846 => 
    array (
      0 => 2847,
      1 => 167,
      2 => 'Xã Hợp Thịnh',
    ),
    2847 => 
    array (
      0 => 2848,
      1 => 167,
      2 => 'Xã Danh Thắng',
    ),
    2848 => 
    array (
      0 => 2849,
      1 => 167,
      2 => 'Xã Mai Trung',
    ),
    2849 => 
    array (
      0 => 2850,
      1 => 167,
      2 => 'Xã Đoan Bái',
    ),
    2850 => 
    array (
      0 => 2851,
      1 => 167,
      2 => 'Xã Bắc Lý',
    ),
    2851 => 
    array (
      0 => 2852,
      1 => 167,
      2 => 'Xã Xuân Cẩm',
    ),
    2852 => 
    array (
      0 => 2853,
      1 => 167,
      2 => 'Xã Hương Lâm',
    ),
    2853 => 
    array (
      0 => 2854,
      1 => 167,
      2 => 'Xã Đông Lỗ',
    ),
    2854 => 
    array (
      0 => 2855,
      1 => 167,
      2 => 'Xã Châu Minh',
    ),
    2855 => 
    array (
      0 => 2856,
      1 => 167,
      2 => 'Xã Mai Đình',
    ),
    2856 => 
    array (
      0 => 2857,
      1 => 168,
      2 => 'Phường Dữu Lâu',
    ),
    2857 => 
    array (
      0 => 2858,
      1 => 168,
      2 => 'Phường Vân Cơ',
    ),
    2858 => 
    array (
      0 => 2859,
      1 => 168,
      2 => 'Phường Nông Trang',
    ),
    2859 => 
    array (
      0 => 2860,
      1 => 168,
      2 => 'Phường Tân Dân',
    ),
    2860 => 
    array (
      0 => 2861,
      1 => 168,
      2 => 'Phường Gia Cẩm',
    ),
    2861 => 
    array (
      0 => 2862,
      1 => 168,
      2 => 'Phường Tiên Cát',
    ),
    2862 => 
    array (
      0 => 2863,
      1 => 168,
      2 => 'Phường Thọ Sơn',
    ),
    2863 => 
    array (
      0 => 2864,
      1 => 168,
      2 => 'Phường Thanh Miếu',
    ),
    2864 => 
    array (
      0 => 2865,
      1 => 168,
      2 => 'Phường Bạch Hạc',
    ),
    2865 => 
    array (
      0 => 2866,
      1 => 168,
      2 => 'Phường Bến Gót',
    ),
    2866 => 
    array (
      0 => 2867,
      1 => 168,
      2 => 'Phường Vân Phú',
    ),
    2867 => 
    array (
      0 => 2868,
      1 => 168,
      2 => 'Xã Phượng Lâu',
    ),
    2868 => 
    array (
      0 => 2869,
      1 => 168,
      2 => 'Xã Thụy Vân',
    ),
    2869 => 
    array (
      0 => 2870,
      1 => 168,
      2 => 'Phường Minh Phương',
    ),
    2870 => 
    array (
      0 => 2871,
      1 => 168,
      2 => 'Xã Trưng Vương',
    ),
    2871 => 
    array (
      0 => 2872,
      1 => 168,
      2 => 'Phường Minh Nông',
    ),
    2872 => 
    array (
      0 => 2873,
      1 => 168,
      2 => 'Xã Sông Lô',
    ),
    2873 => 
    array (
      0 => 2874,
      1 => 168,
      2 => 'Xã Kim Đức',
    ),
    2874 => 
    array (
      0 => 2875,
      1 => 168,
      2 => 'Xã Hùng Lô',
    ),
    2875 => 
    array (
      0 => 2876,
      1 => 168,
      2 => 'Xã Hy Cương',
    ),
    2876 => 
    array (
      0 => 2877,
      1 => 168,
      2 => 'Xã Chu Hóa',
    ),
    2877 => 
    array (
      0 => 2878,
      1 => 168,
      2 => 'Xã Thanh Đình',
    ),
    2878 => 
    array (
      0 => 2879,
      1 => 169,
      2 => 'Phường Hùng Vương',
    ),
    2879 => 
    array (
      0 => 2880,
      1 => 169,
      2 => 'Phường Phong Châu',
    ),
    2880 => 
    array (
      0 => 2881,
      1 => 169,
      2 => 'Phường Âu Cơ',
    ),
    2881 => 
    array (
      0 => 2882,
      1 => 169,
      2 => 'Xã Hà Lộc',
    ),
    2882 => 
    array (
      0 => 2883,
      1 => 169,
      2 => 'Xã Phú Hộ',
    ),
    2883 => 
    array (
      0 => 2884,
      1 => 169,
      2 => 'Xã Văn Lung',
    ),
    2884 => 
    array (
      0 => 2885,
      1 => 169,
      2 => 'Xã Thanh Minh',
    ),
    2885 => 
    array (
      0 => 2886,
      1 => 169,
      2 => 'Xã Hà Thạch',
    ),
    2886 => 
    array (
      0 => 2887,
      1 => 169,
      2 => 'Phường Thanh Vinh',
    ),
    2887 => 
    array (
      0 => 2888,
      1 => 170,
      2 => 'Thị trấn Đoan Hùng',
    ),
    2888 => 
    array (
      0 => 2889,
      1 => 170,
      2 => 'Xã Hùng Xuyên',
    ),
    2889 => 
    array (
      0 => 2890,
      1 => 170,
      2 => 'Xã Bằng Luân',
    ),
    2890 => 
    array (
      0 => 2891,
      1 => 170,
      2 => 'Xã Vân Du',
    ),
    2891 => 
    array (
      0 => 2892,
      1 => 170,
      2 => 'Xã Phú Lâm',
    ),
    2892 => 
    array (
      0 => 2893,
      1 => 170,
      2 => 'Xã Minh Lương',
    ),
    2893 => 
    array (
      0 => 2894,
      1 => 170,
      2 => 'Xã Bằng Doãn',
    ),
    2894 => 
    array (
      0 => 2895,
      1 => 170,
      2 => 'Xã Chí Đám',
    ),
    2895 => 
    array (
      0 => 2896,
      1 => 170,
      2 => 'Xã Phúc Lai',
    ),
    2896 => 
    array (
      0 => 2897,
      1 => 170,
      2 => 'Xã Ngọc Quan',
    ),
    2897 => 
    array (
      0 => 2898,
      1 => 170,
      2 => 'Xã Hợp Nhất',
    ),
    2898 => 
    array (
      0 => 2899,
      1 => 170,
      2 => 'Xã Sóc Đăng',
    ),
    2899 => 
    array (
      0 => 2900,
      1 => 170,
      2 => 'Xã Tây Cốc',
    ),
    2900 => 
    array (
      0 => 2901,
      1 => 170,
      2 => 'Xã Yên Kiện',
    ),
    2901 => 
    array (
      0 => 2902,
      1 => 170,
      2 => 'Xã Hùng Long',
    ),
    2902 => 
    array (
      0 => 2903,
      1 => 170,
      2 => 'Xã Vụ Quang',
    ),
    2903 => 
    array (
      0 => 2904,
      1 => 170,
      2 => 'Xã Vân Đồn',
    ),
    2904 => 
    array (
      0 => 2905,
      1 => 170,
      2 => 'Xã Tiêu Sơn',
    ),
    2905 => 
    array (
      0 => 2906,
      1 => 170,
      2 => 'Xã Minh Tiến',
    ),
    2906 => 
    array (
      0 => 2907,
      1 => 170,
      2 => 'Xã Minh Phú',
    ),
    2907 => 
    array (
      0 => 2908,
      1 => 170,
      2 => 'Xã Chân Mộng',
    ),
    2908 => 
    array (
      0 => 2909,
      1 => 170,
      2 => 'Xã Ca Đình',
    ),
    2909 => 
    array (
      0 => 2910,
      1 => 171,
      2 => 'Thị trấn Hạ Hoà',
    ),
    2910 => 
    array (
      0 => 2911,
      1 => 171,
      2 => 'Xã Đại Phạm',
    ),
    2911 => 
    array (
      0 => 2912,
      1 => 171,
      2 => 'Xã Đan Thượng',
    ),
    2912 => 
    array (
      0 => 2913,
      1 => 171,
      2 => 'Xã Hà Lương',
    ),
    2913 => 
    array (
      0 => 2914,
      1 => 171,
      2 => 'Xã Tứ Hiệp',
    ),
    2914 => 
    array (
      0 => 2915,
      1 => 171,
      2 => 'Xã Hiền Lương',
    ),
    2915 => 
    array (
      0 => 2916,
      1 => 171,
      2 => 'Xã Phương Viên',
    ),
    2916 => 
    array (
      0 => 2917,
      1 => 171,
      2 => 'Xã Gia Điền',
    ),
    2917 => 
    array (
      0 => 2918,
      1 => 171,
      2 => 'Xã Ấm Hạ',
    ),
    2918 => 
    array (
      0 => 2919,
      1 => 171,
      2 => 'Xã Hương Xạ',
    ),
    2919 => 
    array (
      0 => 2920,
      1 => 171,
      2 => 'Xã Xuân Áng',
    ),
    2920 => 
    array (
      0 => 2921,
      1 => 171,
      2 => 'Xã Yên Kỳ',
    ),
    2921 => 
    array (
      0 => 2922,
      1 => 171,
      2 => 'Xã Minh Hạc',
    ),
    2922 => 
    array (
      0 => 2923,
      1 => 171,
      2 => 'Xã Lang Sơn',
    ),
    2923 => 
    array (
      0 => 2924,
      1 => 171,
      2 => 'Xã Bằng Giã',
    ),
    2924 => 
    array (
      0 => 2925,
      1 => 171,
      2 => 'Xã Yên Luật',
    ),
    2925 => 
    array (
      0 => 2926,
      1 => 171,
      2 => 'Xã Vô Tranh',
    ),
    2926 => 
    array (
      0 => 2927,
      1 => 171,
      2 => 'Xã Văn Lang',
    ),
    2927 => 
    array (
      0 => 2928,
      1 => 171,
      2 => 'Xã Minh Côi',
    ),
    2928 => 
    array (
      0 => 2929,
      1 => 171,
      2 => 'Xã Vĩnh Chân',
    ),
    2929 => 
    array (
      0 => 2930,
      1 => 172,
      2 => 'Thị trấn Thanh Ba',
    ),
    2930 => 
    array (
      0 => 2931,
      1 => 172,
      2 => 'Xã Vân Lĩnh',
    ),
    2931 => 
    array (
      0 => 2932,
      1 => 172,
      2 => 'Xã Đông Lĩnh',
    ),
    2932 => 
    array (
      0 => 2933,
      1 => 172,
      2 => 'Xã Đại An',
    ),
    2933 => 
    array (
      0 => 2934,
      1 => 172,
      2 => 'Xã Hanh Cù',
    ),
    2934 => 
    array (
      0 => 2935,
      1 => 172,
      2 => 'Xã Đồng Xuân',
    ),
    2935 => 
    array (
      0 => 2936,
      1 => 172,
      2 => 'Xã Quảng Yên',
    ),
    2936 => 
    array (
      0 => 2937,
      1 => 172,
      2 => 'Xã Ninh Dân',
    ),
    2937 => 
    array (
      0 => 2938,
      1 => 172,
      2 => 'Xã Võ Lao',
    ),
    2938 => 
    array (
      0 => 2939,
      1 => 172,
      2 => 'Xã Khải Xuân',
    ),
    2939 => 
    array (
      0 => 2940,
      1 => 172,
      2 => 'Xã Mạn Lạn',
    ),
    2940 => 
    array (
      0 => 2941,
      1 => 172,
      2 => 'Xã Hoàng Cương',
    ),
    2941 => 
    array (
      0 => 2942,
      1 => 172,
      2 => 'Xã Chí Tiên',
    ),
    2942 => 
    array (
      0 => 2943,
      1 => 172,
      2 => 'Xã Đông Thành',
    ),
    2943 => 
    array (
      0 => 2944,
      1 => 172,
      2 => 'Xã Sơn Cương',
    ),
    2944 => 
    array (
      0 => 2945,
      1 => 172,
      2 => 'Xã Thanh Hà',
    ),
    2945 => 
    array (
      0 => 2946,
      1 => 172,
      2 => 'Xã Đỗ Sơn',
    ),
    2946 => 
    array (
      0 => 2947,
      1 => 172,
      2 => 'Xã Đỗ Xuyên',
    ),
    2947 => 
    array (
      0 => 2948,
      1 => 172,
      2 => 'Xã Lương Lỗ',
    ),
    2948 => 
    array (
      0 => 2949,
      1 => 173,
      2 => 'Thị trấn Phong Châu',
    ),
    2949 => 
    array (
      0 => 2950,
      1 => 173,
      2 => 'Xã Phú Mỹ',
    ),
    2950 => 
    array (
      0 => 2951,
      1 => 173,
      2 => 'Xã Lệ Mỹ',
    ),
    2951 => 
    array (
      0 => 2952,
      1 => 173,
      2 => 'Xã Liên Hoa',
    ),
    2952 => 
    array (
      0 => 2953,
      1 => 173,
      2 => 'Xã Trạm Thản',
    ),
    2953 => 
    array (
      0 => 2954,
      1 => 173,
      2 => 'Xã Trị Quận',
    ),
    2954 => 
    array (
      0 => 2955,
      1 => 173,
      2 => 'Xã Trung Giáp',
    ),
    2955 => 
    array (
      0 => 2956,
      1 => 173,
      2 => 'Xã Tiên Phú',
    ),
    2956 => 
    array (
      0 => 2957,
      1 => 173,
      2 => 'Xã Hạ Giáp',
    ),
    2957 => 
    array (
      0 => 2958,
      1 => 173,
      2 => 'Xã Bảo Thanh',
    ),
    2958 => 
    array (
      0 => 2959,
      1 => 173,
      2 => 'Xã Phú Lộc',
    ),
    2959 => 
    array (
      0 => 2960,
      1 => 173,
      2 => 'Xã Gia Thanh',
    ),
    2960 => 
    array (
      0 => 2961,
      1 => 173,
      2 => 'Xã Tiên Du',
    ),
    2961 => 
    array (
      0 => 2962,
      1 => 173,
      2 => 'Xã Phú Nham',
    ),
    2962 => 
    array (
      0 => 2963,
      1 => 173,
      2 => 'Xã An Đạo',
    ),
    2963 => 
    array (
      0 => 2964,
      1 => 173,
      2 => 'Xã Bình Phú',
    ),
    2964 => 
    array (
      0 => 2965,
      1 => 173,
      2 => 'Xã Phù Ninh',
    ),
    2965 => 
    array (
      0 => 2966,
      1 => 174,
      2 => 'Thị trấn Yên Lập',
    ),
    2966 => 
    array (
      0 => 2967,
      1 => 174,
      2 => 'Xã Mỹ Lung',
    ),
    2967 => 
    array (
      0 => 2968,
      1 => 174,
      2 => 'Xã Mỹ Lương',
    ),
    2968 => 
    array (
      0 => 2969,
      1 => 174,
      2 => 'Xã Lương Sơn',
    ),
    2969 => 
    array (
      0 => 2970,
      1 => 174,
      2 => 'Xã Xuân An',
    ),
    2970 => 
    array (
      0 => 2971,
      1 => 174,
      2 => 'Xã Xuân Viên',
    ),
    2971 => 
    array (
      0 => 2972,
      1 => 174,
      2 => 'Xã Xuân Thủy',
    ),
    2972 => 
    array (
      0 => 2973,
      1 => 174,
      2 => 'Xã Trung Sơn',
    ),
    2973 => 
    array (
      0 => 2974,
      1 => 174,
      2 => 'Xã Hưng Long',
    ),
    2974 => 
    array (
      0 => 2975,
      1 => 174,
      2 => 'Xã Nga Hoàng',
    ),
    2975 => 
    array (
      0 => 2976,
      1 => 174,
      2 => 'Xã Đồng Lạc',
    ),
    2976 => 
    array (
      0 => 2977,
      1 => 174,
      2 => 'Xã Thượng Long',
    ),
    2977 => 
    array (
      0 => 2978,
      1 => 174,
      2 => 'Xã Đồng Thịnh',
    ),
    2978 => 
    array (
      0 => 2979,
      1 => 174,
      2 => 'Xã Phúc Khánh',
    ),
    2979 => 
    array (
      0 => 2980,
      1 => 174,
      2 => 'Xã Minh Hòa',
    ),
    2980 => 
    array (
      0 => 2981,
      1 => 174,
      2 => 'Xã Ngọc Lập',
    ),
    2981 => 
    array (
      0 => 2982,
      1 => 174,
      2 => 'Xã Ngọc Đồng',
    ),
    2982 => 
    array (
      0 => 2983,
      1 => 175,
      2 => 'Thị trấn Cẩm Khê',
    ),
    2983 => 
    array (
      0 => 2984,
      1 => 175,
      2 => 'Xã Tiên Lương',
    ),
    2984 => 
    array (
      0 => 2985,
      1 => 175,
      2 => 'Xã Tuy Lộc',
    ),
    2985 => 
    array (
      0 => 2986,
      1 => 175,
      2 => 'Xã Ngô Xá',
    ),
    2986 => 
    array (
      0 => 2987,
      1 => 175,
      2 => 'Xã Minh Tân',
    ),
    2987 => 
    array (
      0 => 2988,
      1 => 175,
      2 => 'Xã Phượng Vĩ',
    ),
    2988 => 
    array (
      0 => 2989,
      1 => 175,
      2 => 'Xã Thụy Liễu',
    ),
    2989 => 
    array (
      0 => 2990,
      1 => 175,
      2 => 'Xã Tùng Khê',
    ),
    2990 => 
    array (
      0 => 2991,
      1 => 175,
      2 => 'Xã Tam Sơn',
    ),
    2991 => 
    array (
      0 => 2992,
      1 => 175,
      2 => 'Xã Văn Bán',
    ),
    2992 => 
    array (
      0 => 2993,
      1 => 175,
      2 => 'Xã Cấp Dẫn',
    ),
    2993 => 
    array (
      0 => 2994,
      1 => 175,
      2 => 'Xã Xương Thịnh',
    ),
    2994 => 
    array (
      0 => 2995,
      1 => 175,
      2 => 'Xã Phú Khê',
    ),
    2995 => 
    array (
      0 => 2996,
      1 => 175,
      2 => 'Xã Sơn Tình',
    ),
    2996 => 
    array (
      0 => 2997,
      1 => 175,
      2 => 'Xã Yên Tập',
    ),
    2997 => 
    array (
      0 => 2998,
      1 => 175,
      2 => 'Xã Hương Lung',
    ),
    2998 => 
    array (
      0 => 2999,
      1 => 175,
      2 => 'Xã Tạ Xá',
    ),
    2999 => 
    array (
      0 => 3000,
      1 => 175,
      2 => 'Xã Phú Lạc',
    ),
    3000 => 
    array (
      0 => 3001,
      1 => 175,
      2 => 'Xã Chương Xá',
    ),
    3001 => 
    array (
      0 => 3002,
      1 => 175,
      2 => 'Xã Hùng Việt',
    ),
    3002 => 
    array (
      0 => 3003,
      1 => 175,
      2 => 'Xã Văn Khúc',
    ),
    3003 => 
    array (
      0 => 3004,
      1 => 175,
      2 => 'Xã Yên Dưỡng',
    ),
    3004 => 
    array (
      0 => 3005,
      1 => 175,
      2 => 'Xã Điêu Lương',
    ),
    3005 => 
    array (
      0 => 3006,
      1 => 175,
      2 => 'Xã Đồng Lương',
    ),
    3006 => 
    array (
      0 => 3007,
      1 => 176,
      2 => 'Thị trấn Hưng Hoá',
    ),
    3007 => 
    array (
      0 => 3008,
      1 => 176,
      2 => 'Xã Hiền Quan',
    ),
    3008 => 
    array (
      0 => 3009,
      1 => 176,
      2 => 'Xã Bắc Sơn',
    ),
    3009 => 
    array (
      0 => 3010,
      1 => 176,
      2 => 'Xã Thanh Uyên',
    ),
    3010 => 
    array (
      0 => 3011,
      1 => 176,
      2 => 'Xã Lam Sơn',
    ),
    3011 => 
    array (
      0 => 3012,
      1 => 176,
      2 => 'Xã Vạn Xuân',
    ),
    3012 => 
    array (
      0 => 3013,
      1 => 176,
      2 => 'Xã Quang Húc',
    ),
    3013 => 
    array (
      0 => 3014,
      1 => 176,
      2 => 'Xã Hương Nộn',
    ),
    3014 => 
    array (
      0 => 3015,
      1 => 176,
      2 => 'Xã Tề Lễ',
    ),
    3015 => 
    array (
      0 => 3016,
      1 => 176,
      2 => 'Xã Thọ Văn',
    ),
    3016 => 
    array (
      0 => 3017,
      1 => 176,
      2 => 'Xã Dị Nậu',
    ),
    3017 => 
    array (
      0 => 3018,
      1 => 176,
      2 => 'Xã Dân Quyền',
    ),
    3018 => 
    array (
      0 => 3019,
      1 => 177,
      2 => 'Thị trấn Lâm Thao',
    ),
    3019 => 
    array (
      0 => 3020,
      1 => 177,
      2 => 'Xã Tiên Kiên',
    ),
    3020 => 
    array (
      0 => 3021,
      1 => 177,
      2 => 'Thị trấn Hùng Sơn',
    ),
    3021 => 
    array (
      0 => 3022,
      1 => 177,
      2 => 'Xã Xuân Lũng',
    ),
    3022 => 
    array (
      0 => 3023,
      1 => 177,
      2 => 'Xã Xuân Huy',
    ),
    3023 => 
    array (
      0 => 3024,
      1 => 177,
      2 => 'Xã Thạch Sơn',
    ),
    3024 => 
    array (
      0 => 3025,
      1 => 177,
      2 => 'Xã Sơn Vi',
    ),
    3025 => 
    array (
      0 => 3026,
      1 => 177,
      2 => 'Xã Phùng Nguyên',
    ),
    3026 => 
    array (
      0 => 3027,
      1 => 177,
      2 => 'Xã Cao Xá',
    ),
    3027 => 
    array (
      0 => 3028,
      1 => 177,
      2 => 'Xã Vĩnh Lại',
    ),
    3028 => 
    array (
      0 => 3029,
      1 => 177,
      2 => 'Xã Tứ Xã',
    ),
    3029 => 
    array (
      0 => 3030,
      1 => 177,
      2 => 'Xã Bản Nguyên',
    ),
    3030 => 
    array (
      0 => 3031,
      1 => 178,
      2 => 'Thị trấn Thanh Sơn',
    ),
    3031 => 
    array (
      0 => 3032,
      1 => 178,
      2 => 'Xã Sơn Hùng',
    ),
    3032 => 
    array (
      0 => 3033,
      1 => 178,
      2 => 'Xã Địch Quả',
    ),
    3033 => 
    array (
      0 => 3034,
      1 => 178,
      2 => 'Xã Giáp Lai',
    ),
    3034 => 
    array (
      0 => 3035,
      1 => 178,
      2 => 'Xã Thục Luyện',
    ),
    3035 => 
    array (
      0 => 3036,
      1 => 178,
      2 => 'Xã Võ Miếu',
    ),
    3036 => 
    array (
      0 => 3037,
      1 => 178,
      2 => 'Xã Thạch Khoán',
    ),
    3037 => 
    array (
      0 => 3038,
      1 => 178,
      2 => 'Xã Cự Thắng',
    ),
    3038 => 
    array (
      0 => 3039,
      1 => 178,
      2 => 'Xã Tất Thắng',
    ),
    3039 => 
    array (
      0 => 3040,
      1 => 178,
      2 => 'Xã Văn Miếu',
    ),
    3040 => 
    array (
      0 => 3041,
      1 => 178,
      2 => 'Xã Cự Đồng',
    ),
    3041 => 
    array (
      0 => 3042,
      1 => 178,
      2 => 'Xã Thắng Sơn',
    ),
    3042 => 
    array (
      0 => 3043,
      1 => 178,
      2 => 'Xã Tân Minh',
    ),
    3043 => 
    array (
      0 => 3044,
      1 => 178,
      2 => 'Xã Hương Cần',
    ),
    3044 => 
    array (
      0 => 3045,
      1 => 178,
      2 => 'Xã Khả Cửu',
    ),
    3045 => 
    array (
      0 => 3046,
      1 => 178,
      2 => 'Xã Đông Cửu',
    ),
    3046 => 
    array (
      0 => 3047,
      1 => 178,
      2 => 'Xã Tân Lập',
    ),
    3047 => 
    array (
      0 => 3048,
      1 => 178,
      2 => 'Xã Yên Lãng',
    ),
    3048 => 
    array (
      0 => 3049,
      1 => 178,
      2 => 'Xã Yên Lương',
    ),
    3049 => 
    array (
      0 => 3050,
      1 => 178,
      2 => 'Xã Thượng Cửu',
    ),
    3050 => 
    array (
      0 => 3051,
      1 => 178,
      2 => 'Xã Lương Nha',
    ),
    3051 => 
    array (
      0 => 3052,
      1 => 178,
      2 => 'Xã Yên Sơn',
    ),
    3052 => 
    array (
      0 => 3053,
      1 => 178,
      2 => 'Xã Tinh Nhuệ',
    ),
    3053 => 
    array (
      0 => 3054,
      1 => 179,
      2 => 'Xã Đào Xá',
    ),
    3054 => 
    array (
      0 => 3055,
      1 => 179,
      2 => 'Xã Thạch Đồng',
    ),
    3055 => 
    array (
      0 => 3056,
      1 => 179,
      2 => 'Xã Xuân Lộc',
    ),
    3056 => 
    array (
      0 => 3057,
      1 => 179,
      2 => 'Xã Tân Phương',
    ),
    3057 => 
    array (
      0 => 3058,
      1 => 179,
      2 => 'Thị trấn Thanh Thủy',
    ),
    3058 => 
    array (
      0 => 3059,
      1 => 179,
      2 => 'Xã Sơn Thủy',
    ),
    3059 => 
    array (
      0 => 3060,
      1 => 179,
      2 => 'Xã Bảo Yên',
    ),
    3060 => 
    array (
      0 => 3061,
      1 => 179,
      2 => 'Xã Đoan Hạ',
    ),
    3061 => 
    array (
      0 => 3062,
      1 => 179,
      2 => 'Xã Đồng Trung',
    ),
    3062 => 
    array (
      0 => 3063,
      1 => 179,
      2 => 'Xã Hoàng Xá',
    ),
    3063 => 
    array (
      0 => 3064,
      1 => 179,
      2 => 'Xã Tu Vũ',
    ),
    3064 => 
    array (
      0 => 3065,
      1 => 180,
      2 => 'Xã Thu Cúc',
    ),
    3065 => 
    array (
      0 => 3066,
      1 => 180,
      2 => 'Xã Thạch Kiệt',
    ),
    3066 => 
    array (
      0 => 3067,
      1 => 180,
      2 => 'Xã Thu Ngạc',
    ),
    3067 => 
    array (
      0 => 3068,
      1 => 180,
      2 => 'Xã Kiệt Sơn',
    ),
    3068 => 
    array (
      0 => 3069,
      1 => 180,
      2 => 'Xã Đồng Sơn',
    ),
    3069 => 
    array (
      0 => 3070,
      1 => 180,
      2 => 'Xã Lai Đồng',
    ),
    3070 => 
    array (
      0 => 3071,
      1 => 180,
      2 => 'Xã Tân Phú',
    ),
    3071 => 
    array (
      0 => 3072,
      1 => 180,
      2 => 'Xã Mỹ Thuận',
    ),
    3072 => 
    array (
      0 => 3073,
      1 => 180,
      2 => 'Xã Tân Sơn',
    ),
    3073 => 
    array (
      0 => 3074,
      1 => 180,
      2 => 'Xã Xuân Đài',
    ),
    3074 => 
    array (
      0 => 3075,
      1 => 180,
      2 => 'Xã Minh Đài',
    ),
    3075 => 
    array (
      0 => 3076,
      1 => 180,
      2 => 'Xã Văn Luông',
    ),
    3076 => 
    array (
      0 => 3077,
      1 => 180,
      2 => 'Xã Xuân Sơn',
    ),
    3077 => 
    array (
      0 => 3078,
      1 => 180,
      2 => 'Xã Long Cốc',
    ),
    3078 => 
    array (
      0 => 3079,
      1 => 180,
      2 => 'Xã Kim Thượng',
    ),
    3079 => 
    array (
      0 => 3080,
      1 => 180,
      2 => 'Xã Tam Thanh',
    ),
    3080 => 
    array (
      0 => 3081,
      1 => 180,
      2 => 'Xã Vinh Tiền',
    ),
    3081 => 
    array (
      0 => 3082,
      1 => 181,
      2 => 'Phường Tích Sơn',
    ),
    3082 => 
    array (
      0 => 3083,
      1 => 181,
      2 => 'Phường Liên Bảo',
    ),
    3083 => 
    array (
      0 => 3084,
      1 => 181,
      2 => 'Phường Hội Hợp',
    ),
    3084 => 
    array (
      0 => 3085,
      1 => 181,
      2 => 'Phường Đống Đa',
    ),
    3085 => 
    array (
      0 => 3086,
      1 => 181,
      2 => 'Phường Ngô Quyền',
    ),
    3086 => 
    array (
      0 => 3087,
      1 => 181,
      2 => 'Phường Đồng Tâm',
    ),
    3087 => 
    array (
      0 => 3088,
      1 => 181,
      2 => 'Xã Định Trung',
    ),
    3088 => 
    array (
      0 => 3089,
      1 => 181,
      2 => 'Phường Khai Quang',
    ),
    3089 => 
    array (
      0 => 3090,
      1 => 181,
      2 => 'Xã Thanh Trù',
    ),
    3090 => 
    array (
      0 => 3091,
      1 => 182,
      2 => 'Phường Trưng Trắc',
    ),
    3091 => 
    array (
      0 => 3092,
      1 => 182,
      2 => 'Phường Hùng Vương',
    ),
    3092 => 
    array (
      0 => 3093,
      1 => 182,
      2 => 'Phường Trưng Nhị',
    ),
    3093 => 
    array (
      0 => 3094,
      1 => 182,
      2 => 'Phường Phúc Thắng',
    ),
    3094 => 
    array (
      0 => 3095,
      1 => 182,
      2 => 'Phường Xuân Hoà',
    ),
    3095 => 
    array (
      0 => 3096,
      1 => 182,
      2 => 'Phường Đồng Xuân',
    ),
    3096 => 
    array (
      0 => 3097,
      1 => 182,
      2 => 'Xã Ngọc Thanh',
    ),
    3097 => 
    array (
      0 => 3098,
      1 => 182,
      2 => 'Xã Cao Minh',
    ),
    3098 => 
    array (
      0 => 3099,
      1 => 182,
      2 => 'Phường Nam Viêm',
    ),
    3099 => 
    array (
      0 => 3100,
      1 => 182,
      2 => 'Phường Tiền Châu',
    ),
    3100 => 
    array (
      0 => 3101,
      1 => 183,
      2 => 'Thị trấn Lập Thạch',
    ),
    3101 => 
    array (
      0 => 3102,
      1 => 183,
      2 => 'Xã Quang Sơn',
    ),
    3102 => 
    array (
      0 => 3103,
      1 => 183,
      2 => 'Xã Ngọc Mỹ',
    ),
    3103 => 
    array (
      0 => 3104,
      1 => 183,
      2 => 'Xã Hợp Lý',
    ),
    3104 => 
    array (
      0 => 3105,
      1 => 183,
      2 => 'Xã Bắc Bình',
    ),
    3105 => 
    array (
      0 => 3106,
      1 => 183,
      2 => 'Xã Thái Hòa',
    ),
    3106 => 
    array (
      0 => 3107,
      1 => 183,
      2 => 'Thị trấn Hoa Sơn',
    ),
    3107 => 
    array (
      0 => 3108,
      1 => 183,
      2 => 'Xã Liễn Sơn',
    ),
    3108 => 
    array (
      0 => 3109,
      1 => 183,
      2 => 'Xã Xuân Hòa',
    ),
    3109 => 
    array (
      0 => 3110,
      1 => 183,
      2 => 'Xã Vân Trục',
    ),
    3110 => 
    array (
      0 => 3111,
      1 => 183,
      2 => 'Xã Liên Hòa',
    ),
    3111 => 
    array (
      0 => 3112,
      1 => 183,
      2 => 'Xã Tử Du',
    ),
    3112 => 
    array (
      0 => 3113,
      1 => 183,
      2 => 'Xã Bàn Giản',
    ),
    3113 => 
    array (
      0 => 3114,
      1 => 183,
      2 => 'Xã Xuân Lôi',
    ),
    3114 => 
    array (
      0 => 3115,
      1 => 183,
      2 => 'Xã Đồng Ích',
    ),
    3115 => 
    array (
      0 => 3116,
      1 => 183,
      2 => 'Xã Tiên Lữ',
    ),
    3116 => 
    array (
      0 => 3117,
      1 => 183,
      2 => 'Xã Văn Quán',
    ),
    3117 => 
    array (
      0 => 3118,
      1 => 183,
      2 => 'Xã Đình Chu',
    ),
    3118 => 
    array (
      0 => 3119,
      1 => 183,
      2 => 'Xã Triệu Đề',
    ),
    3119 => 
    array (
      0 => 3120,
      1 => 183,
      2 => 'Xã Sơn Đông',
    ),
    3120 => 
    array (
      0 => 3121,
      1 => 184,
      2 => 'Thị trấn Hợp Hòa',
    ),
    3121 => 
    array (
      0 => 3122,
      1 => 184,
      2 => 'Xã Hoàng Hoa',
    ),
    3122 => 
    array (
      0 => 3123,
      1 => 184,
      2 => 'Xã Đồng Tĩnh',
    ),
    3123 => 
    array (
      0 => 3124,
      1 => 184,
      2 => 'Xã Kim Long',
    ),
    3124 => 
    array (
      0 => 3125,
      1 => 184,
      2 => 'Xã Hướng Đạo',
    ),
    3125 => 
    array (
      0 => 3126,
      1 => 184,
      2 => 'Xã Đạo Tú',
    ),
    3126 => 
    array (
      0 => 3127,
      1 => 184,
      2 => 'Xã An Hòa',
    ),
    3127 => 
    array (
      0 => 3128,
      1 => 184,
      2 => 'Xã Thanh Vân',
    ),
    3128 => 
    array (
      0 => 3129,
      1 => 184,
      2 => 'Xã Duy Phiên',
    ),
    3129 => 
    array (
      0 => 3130,
      1 => 184,
      2 => 'Xã Hoàng Đan',
    ),
    3130 => 
    array (
      0 => 3131,
      1 => 184,
      2 => 'Xã Hoàng Lâu',
    ),
    3131 => 
    array (
      0 => 3132,
      1 => 184,
      2 => 'Xã Vân Hội',
    ),
    3132 => 
    array (
      0 => 3133,
      1 => 184,
      2 => 'Xã Hợp Thịnh',
    ),
    3133 => 
    array (
      0 => 3134,
      1 => 185,
      2 => 'Thị trấn Tam Đảo',
    ),
    3134 => 
    array (
      0 => 3135,
      1 => 185,
      2 => 'Thị trấn Hợp Châu',
    ),
    3135 => 
    array (
      0 => 3136,
      1 => 185,
      2 => 'Xã Đạo Trù',
    ),
    3136 => 
    array (
      0 => 3137,
      1 => 185,
      2 => 'Xã Yên Dương',
    ),
    3137 => 
    array (
      0 => 3138,
      1 => 185,
      2 => 'Xã Bồ Lý',
    ),
    3138 => 
    array (
      0 => 3139,
      1 => 185,
      2 => 'Thị trấn Đại Đình',
    ),
    3139 => 
    array (
      0 => 3140,
      1 => 185,
      2 => 'Xã Tam Quan',
    ),
    3140 => 
    array (
      0 => 3141,
      1 => 185,
      2 => 'Xã Hồ Sơn',
    ),
    3141 => 
    array (
      0 => 3142,
      1 => 185,
      2 => 'Xã Minh Quang',
    ),
    3142 => 
    array (
      0 => 3143,
      1 => 186,
      2 => 'Thị trấn Hương Canh',
    ),
    3143 => 
    array (
      0 => 3144,
      1 => 186,
      2 => 'Thị trấn Gia Khánh',
    ),
    3144 => 
    array (
      0 => 3145,
      1 => 186,
      2 => 'Xã Trung Mỹ',
    ),
    3145 => 
    array (
      0 => 3146,
      1 => 186,
      2 => 'Thị trấn Bá Hiến',
    ),
    3146 => 
    array (
      0 => 3147,
      1 => 186,
      2 => 'Xã Thiện Kế',
    ),
    3147 => 
    array (
      0 => 3148,
      1 => 186,
      2 => 'Xã Hương Sơn',
    ),
    3148 => 
    array (
      0 => 3149,
      1 => 186,
      2 => 'Xã Tam Hợp',
    ),
    3149 => 
    array (
      0 => 3150,
      1 => 186,
      2 => 'Xã Quất Lưu',
    ),
    3150 => 
    array (
      0 => 3151,
      1 => 186,
      2 => 'Xã Sơn Lôi',
    ),
    3151 => 
    array (
      0 => 3152,
      1 => 186,
      2 => 'Thị trấn Đạo Đức',
    ),
    3152 => 
    array (
      0 => 3153,
      1 => 186,
      2 => 'Xã Tân Phong',
    ),
    3153 => 
    array (
      0 => 3154,
      1 => 186,
      2 => 'Thị trấn Thanh Lãng',
    ),
    3154 => 
    array (
      0 => 3155,
      1 => 186,
      2 => 'Xã Phú Xuân',
    ),
    3155 => 
    array (
      0 => 3156,
      1 => 187,
      2 => 'Thị trấn Yên Lạc',
    ),
    3156 => 
    array (
      0 => 3157,
      1 => 187,
      2 => 'Xã Đồng Cương',
    ),
    3157 => 
    array (
      0 => 3158,
      1 => 187,
      2 => 'Xã Đồng Văn',
    ),
    3158 => 
    array (
      0 => 3159,
      1 => 187,
      2 => 'Xã Bình Định',
    ),
    3159 => 
    array (
      0 => 3160,
      1 => 187,
      2 => 'Xã Trung Nguyên',
    ),
    3160 => 
    array (
      0 => 3161,
      1 => 187,
      2 => 'Xã Tề Lỗ',
    ),
    3161 => 
    array (
      0 => 3162,
      1 => 187,
      2 => 'Xã Tam Hồng',
    ),
    3162 => 
    array (
      0 => 3163,
      1 => 187,
      2 => 'Xã Yên Đồng',
    ),
    3163 => 
    array (
      0 => 3164,
      1 => 187,
      2 => 'Xã Văn Tiến',
    ),
    3164 => 
    array (
      0 => 3165,
      1 => 187,
      2 => 'Xã Nguyệt Đức',
    ),
    3165 => 
    array (
      0 => 3166,
      1 => 187,
      2 => 'Xã Yên Phương',
    ),
    3166 => 
    array (
      0 => 3167,
      1 => 187,
      2 => 'Xã Hồng Phương',
    ),
    3167 => 
    array (
      0 => 3168,
      1 => 187,
      2 => 'Xã Trung Kiên',
    ),
    3168 => 
    array (
      0 => 3169,
      1 => 187,
      2 => 'Xã Liên Châu',
    ),
    3169 => 
    array (
      0 => 3170,
      1 => 187,
      2 => 'Xã Đại Tự',
    ),
    3170 => 
    array (
      0 => 3171,
      1 => 187,
      2 => 'Xã Hồng Châu',
    ),
    3171 => 
    array (
      0 => 3172,
      1 => 187,
      2 => 'Xã Trung Hà',
    ),
    3172 => 
    array (
      0 => 3173,
      1 => 188,
      2 => 'Thị trấn Vĩnh Tường',
    ),
    3173 => 
    array (
      0 => 3174,
      1 => 188,
      2 => 'Xã Kim Xá',
    ),
    3174 => 
    array (
      0 => 3175,
      1 => 188,
      2 => 'Xã Yên Bình',
    ),
    3175 => 
    array (
      0 => 3176,
      1 => 188,
      2 => 'Xã Chấn Hưng',
    ),
    3176 => 
    array (
      0 => 3177,
      1 => 188,
      2 => 'Xã Nghĩa Hưng',
    ),
    3177 => 
    array (
      0 => 3178,
      1 => 188,
      2 => 'Xã Yên Lập',
    ),
    3178 => 
    array (
      0 => 3179,
      1 => 188,
      2 => 'Xã Việt Xuân',
    ),
    3179 => 
    array (
      0 => 3180,
      1 => 188,
      2 => 'Xã Bồ Sao',
    ),
    3180 => 
    array (
      0 => 3181,
      1 => 188,
      2 => 'Xã Đại Đồng',
    ),
    3181 => 
    array (
      0 => 3182,
      1 => 188,
      2 => 'Xã Tân Tiến',
    ),
    3182 => 
    array (
      0 => 3183,
      1 => 188,
      2 => 'Xã Lũng Hoà',
    ),
    3183 => 
    array (
      0 => 3184,
      1 => 188,
      2 => 'Xã Cao Đại',
    ),
    3184 => 
    array (
      0 => 3185,
      1 => 188,
      2 => 'Thị Trấn Thổ Tang',
    ),
    3185 => 
    array (
      0 => 3186,
      1 => 188,
      2 => 'Xã Vĩnh Sơn',
    ),
    3186 => 
    array (
      0 => 3187,
      1 => 188,
      2 => 'Xã Bình Dương',
    ),
    3187 => 
    array (
      0 => 3188,
      1 => 188,
      2 => 'Xã Tân Phú',
    ),
    3188 => 
    array (
      0 => 3189,
      1 => 188,
      2 => 'Xã Thượng Trưng',
    ),
    3189 => 
    array (
      0 => 3190,
      1 => 188,
      2 => 'Xã Vũ Di',
    ),
    3190 => 
    array (
      0 => 3191,
      1 => 188,
      2 => 'Xã Lý Nhân',
    ),
    3191 => 
    array (
      0 => 3192,
      1 => 188,
      2 => 'Xã Tuân Chính',
    ),
    3192 => 
    array (
      0 => 3193,
      1 => 188,
      2 => 'Xã Vân Xuân',
    ),
    3193 => 
    array (
      0 => 3194,
      1 => 188,
      2 => 'Xã Tam Phúc',
    ),
    3194 => 
    array (
      0 => 3195,
      1 => 188,
      2 => 'Thị trấn Tứ Trưng',
    ),
    3195 => 
    array (
      0 => 3196,
      1 => 188,
      2 => 'Xã Ngũ Kiên',
    ),
    3196 => 
    array (
      0 => 3197,
      1 => 188,
      2 => 'Xã An Tường',
    ),
    3197 => 
    array (
      0 => 3198,
      1 => 188,
      2 => 'Xã Vĩnh Thịnh',
    ),
    3198 => 
    array (
      0 => 3199,
      1 => 188,
      2 => 'Xã Phú Đa',
    ),
    3199 => 
    array (
      0 => 3200,
      1 => 188,
      2 => 'Xã Vĩnh Ninh',
    ),
    3200 => 
    array (
      0 => 3201,
      1 => 189,
      2 => 'Xã Lãng Công',
    ),
    3201 => 
    array (
      0 => 3202,
      1 => 189,
      2 => 'Xã Quang Yên',
    ),
    3202 => 
    array (
      0 => 3203,
      1 => 189,
      2 => 'Xã Bạch Lưu',
    ),
    3203 => 
    array (
      0 => 3204,
      1 => 189,
      2 => 'Xã Hải Lựu',
    ),
    3204 => 
    array (
      0 => 3205,
      1 => 189,
      2 => 'Xã Đồng Quế',
    ),
    3205 => 
    array (
      0 => 3206,
      1 => 189,
      2 => 'Xã Nhân Đạo',
    ),
    3206 => 
    array (
      0 => 3207,
      1 => 189,
      2 => 'Xã Đôn Nhân',
    ),
    3207 => 
    array (
      0 => 3208,
      1 => 189,
      2 => 'Xã Phương Khoan',
    ),
    3208 => 
    array (
      0 => 3209,
      1 => 189,
      2 => 'Xã Tân Lập',
    ),
    3209 => 
    array (
      0 => 3210,
      1 => 189,
      2 => 'Xã Nhạo Sơn',
    ),
    3210 => 
    array (
      0 => 3211,
      1 => 189,
      2 => 'Thị trấn Tam Sơn',
    ),
    3211 => 
    array (
      0 => 3212,
      1 => 189,
      2 => 'Xã Như Thụy',
    ),
    3212 => 
    array (
      0 => 3213,
      1 => 189,
      2 => 'Xã Yên Thạch',
    ),
    3213 => 
    array (
      0 => 3214,
      1 => 189,
      2 => 'Xã Đồng Thịnh',
    ),
    3214 => 
    array (
      0 => 3215,
      1 => 189,
      2 => 'Xã Tứ Yên',
    ),
    3215 => 
    array (
      0 => 3216,
      1 => 189,
      2 => 'Xã Đức Bác',
    ),
    3216 => 
    array (
      0 => 3217,
      1 => 189,
      2 => 'Xã Cao Phong',
    ),
    3217 => 
    array (
      0 => 3218,
      1 => 190,
      2 => 'Phường Vũ Ninh',
    ),
    3218 => 
    array (
      0 => 3219,
      1 => 190,
      2 => 'Phường Đáp Cầu',
    ),
    3219 => 
    array (
      0 => 3220,
      1 => 190,
      2 => 'Phường Thị Cầu',
    ),
    3220 => 
    array (
      0 => 3221,
      1 => 190,
      2 => 'Phường Kinh Bắc',
    ),
    3221 => 
    array (
      0 => 3222,
      1 => 190,
      2 => 'Phường Vệ An',
    ),
    3222 => 
    array (
      0 => 3223,
      1 => 190,
      2 => 'Phường Tiền An',
    ),
    3223 => 
    array (
      0 => 3224,
      1 => 190,
      2 => 'Phường Đại Phúc',
    ),
    3224 => 
    array (
      0 => 3225,
      1 => 190,
      2 => 'Phường Ninh Xá',
    ),
    3225 => 
    array (
      0 => 3226,
      1 => 190,
      2 => 'Phường Suối Hoa',
    ),
    3226 => 
    array (
      0 => 3227,
      1 => 190,
      2 => 'Phường Võ Cường',
    ),
    3227 => 
    array (
      0 => 3228,
      1 => 190,
      2 => 'Phường Hòa Long',
    ),
    3228 => 
    array (
      0 => 3229,
      1 => 190,
      2 => 'Phường Vạn An',
    ),
    3229 => 
    array (
      0 => 3230,
      1 => 190,
      2 => 'Phường Khúc Xuyên',
    ),
    3230 => 
    array (
      0 => 3231,
      1 => 190,
      2 => 'Phường Phong Khê',
    ),
    3231 => 
    array (
      0 => 3232,
      1 => 190,
      2 => 'Phường Kim Chân',
    ),
    3232 => 
    array (
      0 => 3233,
      1 => 190,
      2 => 'Phường Vân Dương',
    ),
    3233 => 
    array (
      0 => 3234,
      1 => 190,
      2 => 'Phường Nam Sơn',
    ),
    3234 => 
    array (
      0 => 3235,
      1 => 190,
      2 => 'Phường Khắc Niệm',
    ),
    3235 => 
    array (
      0 => 3236,
      1 => 190,
      2 => 'Phường Hạp Lĩnh',
    ),
    3236 => 
    array (
      0 => 3237,
      1 => 191,
      2 => 'Thị trấn Chờ',
    ),
    3237 => 
    array (
      0 => 3238,
      1 => 191,
      2 => 'Xã Dũng Liệt',
    ),
    3238 => 
    array (
      0 => 3239,
      1 => 191,
      2 => 'Xã Tam Đa',
    ),
    3239 => 
    array (
      0 => 3240,
      1 => 191,
      2 => 'Xã Tam Giang',
    ),
    3240 => 
    array (
      0 => 3241,
      1 => 191,
      2 => 'Xã Yên Trung',
    ),
    3241 => 
    array (
      0 => 3242,
      1 => 191,
      2 => 'Xã Thụy Hòa',
    ),
    3242 => 
    array (
      0 => 3243,
      1 => 191,
      2 => 'Xã Hòa Tiến',
    ),
    3243 => 
    array (
      0 => 3244,
      1 => 191,
      2 => 'Xã Đông Tiến',
    ),
    3244 => 
    array (
      0 => 3245,
      1 => 191,
      2 => 'Xã Yên Phụ',
    ),
    3245 => 
    array (
      0 => 3246,
      1 => 191,
      2 => 'Xã Trung Nghĩa',
    ),
    3246 => 
    array (
      0 => 3247,
      1 => 191,
      2 => 'Xã Đông Phong',
    ),
    3247 => 
    array (
      0 => 3248,
      1 => 191,
      2 => 'Xã Long Châu',
    ),
    3248 => 
    array (
      0 => 3249,
      1 => 191,
      2 => 'Xã Văn Môn',
    ),
    3249 => 
    array (
      0 => 3250,
      1 => 191,
      2 => 'Xã Đông Thọ',
    ),
    3250 => 
    array (
      0 => 3251,
      1 => 192,
      2 => 'Thị trấn Phố Mới',
    ),
    3251 => 
    array (
      0 => 3252,
      1 => 192,
      2 => 'Xã Việt Thống',
    ),
    3252 => 
    array (
      0 => 3253,
      1 => 192,
      2 => 'Xã Đại Xuân',
    ),
    3253 => 
    array (
      0 => 3254,
      1 => 192,
      2 => 'Xã Nhân Hòa',
    ),
    3254 => 
    array (
      0 => 3255,
      1 => 192,
      2 => 'Xã Bằng An',
    ),
    3255 => 
    array (
      0 => 3256,
      1 => 192,
      2 => 'Xã Phương Liễu',
    ),
    3256 => 
    array (
      0 => 3257,
      1 => 192,
      2 => 'Xã Quế Tân',
    ),
    3257 => 
    array (
      0 => 3258,
      1 => 192,
      2 => 'Xã Phù Lương',
    ),
    3258 => 
    array (
      0 => 3259,
      1 => 192,
      2 => 'Xã Phù Lãng',
    ),
    3259 => 
    array (
      0 => 3260,
      1 => 192,
      2 => 'Xã Phượng Mao',
    ),
    3260 => 
    array (
      0 => 3261,
      1 => 192,
      2 => 'Xã Việt Hùng',
    ),
    3261 => 
    array (
      0 => 3262,
      1 => 192,
      2 => 'Xã Ngọc Xá',
    ),
    3262 => 
    array (
      0 => 3263,
      1 => 192,
      2 => 'Xã Châu Phong',
    ),
    3263 => 
    array (
      0 => 3264,
      1 => 192,
      2 => 'Xã Bồng Lai',
    ),
    3264 => 
    array (
      0 => 3265,
      1 => 192,
      2 => 'Xã Cách Bi',
    ),
    3265 => 
    array (
      0 => 3266,
      1 => 192,
      2 => 'Xã Đào Viên',
    ),
    3266 => 
    array (
      0 => 3267,
      1 => 192,
      2 => 'Xã Yên Giả',
    ),
    3267 => 
    array (
      0 => 3268,
      1 => 192,
      2 => 'Xã Mộ Đạo',
    ),
    3268 => 
    array (
      0 => 3269,
      1 => 192,
      2 => 'Xã Đức Long',
    ),
    3269 => 
    array (
      0 => 3270,
      1 => 192,
      2 => 'Xã Chi Lăng',
    ),
    3270 => 
    array (
      0 => 3271,
      1 => 192,
      2 => 'Xã Hán Quảng',
    ),
    3271 => 
    array (
      0 => 3272,
      1 => 193,
      2 => 'Thị trấn Lim',
    ),
    3272 => 
    array (
      0 => 3273,
      1 => 193,
      2 => 'Xã Phú Lâm',
    ),
    3273 => 
    array (
      0 => 3274,
      1 => 193,
      2 => 'Xã Nội Duệ',
    ),
    3274 => 
    array (
      0 => 3275,
      1 => 193,
      2 => 'Xã Liên Bão',
    ),
    3275 => 
    array (
      0 => 3276,
      1 => 193,
      2 => 'Xã Hiên Vân',
    ),
    3276 => 
    array (
      0 => 3277,
      1 => 193,
      2 => 'Xã Hoàn Sơn',
    ),
    3277 => 
    array (
      0 => 3278,
      1 => 193,
      2 => 'Xã Lạc Vệ',
    ),
    3278 => 
    array (
      0 => 3279,
      1 => 193,
      2 => 'Xã Việt Đoàn',
    ),
    3279 => 
    array (
      0 => 3280,
      1 => 193,
      2 => 'Xã Phật Tích',
    ),
    3280 => 
    array (
      0 => 3281,
      1 => 193,
      2 => 'Xã Tân Chi',
    ),
    3281 => 
    array (
      0 => 3282,
      1 => 193,
      2 => 'Xã Đại Đồng',
    ),
    3282 => 
    array (
      0 => 3283,
      1 => 193,
      2 => 'Xã Tri Phương',
    ),
    3283 => 
    array (
      0 => 3284,
      1 => 193,
      2 => 'Xã Minh Đạo',
    ),
    3284 => 
    array (
      0 => 3285,
      1 => 193,
      2 => 'Xã Cảnh Hưng',
    ),
    3285 => 
    array (
      0 => 3286,
      1 => 194,
      2 => 'Phường Đông Ngàn',
    ),
    3286 => 
    array (
      0 => 3287,
      1 => 194,
      2 => 'Phường Tam Sơn',
    ),
    3287 => 
    array (
      0 => 3288,
      1 => 194,
      2 => 'Phường Hương Mạc',
    ),
    3288 => 
    array (
      0 => 3289,
      1 => 194,
      2 => 'Phường Tương Giang',
    ),
    3289 => 
    array (
      0 => 3290,
      1 => 194,
      2 => 'Phường Phù Khê',
    ),
    3290 => 
    array (
      0 => 3291,
      1 => 194,
      2 => 'Phường Đồng Kỵ',
    ),
    3291 => 
    array (
      0 => 3292,
      1 => 194,
      2 => 'Phường Trang Hạ',
    ),
    3292 => 
    array (
      0 => 3293,
      1 => 194,
      2 => 'Phường Đồng Nguyên',
    ),
    3293 => 
    array (
      0 => 3294,
      1 => 194,
      2 => 'Phường Châu Khê',
    ),
    3294 => 
    array (
      0 => 3295,
      1 => 194,
      2 => 'Phường Tân Hồng',
    ),
    3295 => 
    array (
      0 => 3296,
      1 => 194,
      2 => 'Phường Đình Bảng',
    ),
    3296 => 
    array (
      0 => 3297,
      1 => 194,
      2 => 'Phường Phù Chẩn',
    ),
    3297 => 
    array (
      0 => 3298,
      1 => 195,
      2 => 'Thị trấn Hồ',
    ),
    3298 => 
    array (
      0 => 3299,
      1 => 195,
      2 => 'Xã Hoài Thượng',
    ),
    3299 => 
    array (
      0 => 3300,
      1 => 195,
      2 => 'Xã Đại Đồng Thành',
    ),
    3300 => 
    array (
      0 => 3301,
      1 => 195,
      2 => 'Xã Mão Điền',
    ),
    3301 => 
    array (
      0 => 3302,
      1 => 195,
      2 => 'Xã Song Hồ',
    ),
    3302 => 
    array (
      0 => 3303,
      1 => 195,
      2 => 'Xã Đình Tổ',
    ),
    3303 => 
    array (
      0 => 3304,
      1 => 195,
      2 => 'Xã An Bình',
    ),
    3304 => 
    array (
      0 => 3305,
      1 => 195,
      2 => 'Xã Trí Quả',
    ),
    3305 => 
    array (
      0 => 3306,
      1 => 195,
      2 => 'Xã Gia Đông',
    ),
    3306 => 
    array (
      0 => 3307,
      1 => 195,
      2 => 'Xã Thanh Khương',
    ),
    3307 => 
    array (
      0 => 3308,
      1 => 195,
      2 => 'Xã Trạm Lộ',
    ),
    3308 => 
    array (
      0 => 3309,
      1 => 195,
      2 => 'Xã Xuân Lâm',
    ),
    3309 => 
    array (
      0 => 3310,
      1 => 195,
      2 => 'Xã Hà Mãn',
    ),
    3310 => 
    array (
      0 => 3311,
      1 => 195,
      2 => 'Xã Ngũ Thái',
    ),
    3311 => 
    array (
      0 => 3312,
      1 => 195,
      2 => 'Xã Nguyệt Đức',
    ),
    3312 => 
    array (
      0 => 3313,
      1 => 195,
      2 => 'Xã Ninh Xá',
    ),
    3313 => 
    array (
      0 => 3314,
      1 => 195,
      2 => 'Xã Nghĩa Đạo',
    ),
    3314 => 
    array (
      0 => 3315,
      1 => 195,
      2 => 'Xã Song Liễu',
    ),
    3315 => 
    array (
      0 => 3316,
      1 => 196,
      2 => 'Thị trấn Gia Bình',
    ),
    3316 => 
    array (
      0 => 3317,
      1 => 196,
      2 => 'Xã Vạn Ninh',
    ),
    3317 => 
    array (
      0 => 3318,
      1 => 196,
      2 => 'Xã Thái Bảo',
    ),
    3318 => 
    array (
      0 => 3319,
      1 => 196,
      2 => 'Xã Giang Sơn',
    ),
    3319 => 
    array (
      0 => 3320,
      1 => 196,
      2 => 'Xã Cao Đức',
    ),
    3320 => 
    array (
      0 => 3321,
      1 => 196,
      2 => 'Xã Đại Lai',
    ),
    3321 => 
    array (
      0 => 3322,
      1 => 196,
      2 => 'Xã Song Giang',
    ),
    3322 => 
    array (
      0 => 3323,
      1 => 196,
      2 => 'Xã Bình Dương',
    ),
    3323 => 
    array (
      0 => 3324,
      1 => 196,
      2 => 'Xã Lãng Ngâm',
    ),
    3324 => 
    array (
      0 => 3325,
      1 => 196,
      2 => 'Xã Nhân Thắng',
    ),
    3325 => 
    array (
      0 => 3326,
      1 => 196,
      2 => 'Xã Xuân Lai',
    ),
    3326 => 
    array (
      0 => 3327,
      1 => 196,
      2 => 'Xã Đông Cứu',
    ),
    3327 => 
    array (
      0 => 3328,
      1 => 196,
      2 => 'Xã Đại Bái',
    ),
    3328 => 
    array (
      0 => 3329,
      1 => 196,
      2 => 'Xã Quỳnh Phú',
    ),
    3329 => 
    array (
      0 => 3330,
      1 => 197,
      2 => 'Thị trấn Thứa',
    ),
    3330 => 
    array (
      0 => 3331,
      1 => 197,
      2 => 'Xã An Thịnh',
    ),
    3331 => 
    array (
      0 => 3332,
      1 => 197,
      2 => 'Xã Trung Kênh',
    ),
    3332 => 
    array (
      0 => 3333,
      1 => 197,
      2 => 'Xã Phú Hòa',
    ),
    3333 => 
    array (
      0 => 3334,
      1 => 197,
      2 => 'Xã Mỹ Hương',
    ),
    3334 => 
    array (
      0 => 3335,
      1 => 197,
      2 => 'Xã Tân Lãng',
    ),
    3335 => 
    array (
      0 => 3336,
      1 => 197,
      2 => 'Xã Quảng Phú',
    ),
    3336 => 
    array (
      0 => 3337,
      1 => 197,
      2 => 'Xã Trừng Xá',
    ),
    3337 => 
    array (
      0 => 3338,
      1 => 197,
      2 => 'Xã Lai Hạ',
    ),
    3338 => 
    array (
      0 => 3339,
      1 => 197,
      2 => 'Xã Trung Chính',
    ),
    3339 => 
    array (
      0 => 3340,
      1 => 197,
      2 => 'Xã Minh Tân',
    ),
    3340 => 
    array (
      0 => 3341,
      1 => 197,
      2 => 'Xã Bình Định',
    ),
    3341 => 
    array (
      0 => 3342,
      1 => 197,
      2 => 'Xã Phú Lương',
    ),
    3342 => 
    array (
      0 => 3343,
      1 => 197,
      2 => 'Xã Lâm Thao',
    ),
    3343 => 
    array (
      0 => 3344,
      1 => 198,
      2 => 'Phường Cẩm Thượng',
    ),
    3344 => 
    array (
      0 => 3345,
      1 => 198,
      2 => 'Phường Bình Hàn',
    ),
    3345 => 
    array (
      0 => 3346,
      1 => 198,
      2 => 'Phường Ngọc Châu',
    ),
    3346 => 
    array (
      0 => 3347,
      1 => 198,
      2 => 'Phường Nhị Châu',
    ),
    3347 => 
    array (
      0 => 3348,
      1 => 198,
      2 => 'Phường Quang Trung',
    ),
    3348 => 
    array (
      0 => 3349,
      1 => 198,
      2 => 'Phường Nguyễn Trãi',
    ),
    3349 => 
    array (
      0 => 3350,
      1 => 198,
      2 => 'Phường Phạm Ngũ Lão',
    ),
    3350 => 
    array (
      0 => 3351,
      1 => 198,
      2 => 'Phường Trần Hưng Đạo',
    ),
    3351 => 
    array (
      0 => 3352,
      1 => 198,
      2 => 'Phường Trần Phú',
    ),
    3352 => 
    array (
      0 => 3353,
      1 => 198,
      2 => 'Phường Thanh Bình',
    ),
    3353 => 
    array (
      0 => 3354,
      1 => 198,
      2 => 'Phường Tân Bình',
    ),
    3354 => 
    array (
      0 => 3355,
      1 => 198,
      2 => 'Phường Lê Thanh Nghị',
    ),
    3355 => 
    array (
      0 => 3356,
      1 => 198,
      2 => 'Phường Hải Tân',
    ),
    3356 => 
    array (
      0 => 3357,
      1 => 198,
      2 => 'Phường Tứ Minh',
    ),
    3357 => 
    array (
      0 => 3358,
      1 => 198,
      2 => 'Phường Việt Hoà',
    ),
    3358 => 
    array (
      0 => 3359,
      1 => 198,
      2 => 'Phường Ái Quốc',
    ),
    3359 => 
    array (
      0 => 3360,
      1 => 198,
      2 => 'Xã An Thượng',
    ),
    3360 => 
    array (
      0 => 3361,
      1 => 198,
      2 => 'Phường Nam Đồng',
    ),
    3361 => 
    array (
      0 => 3362,
      1 => 198,
      2 => 'Xã Quyết Thắng',
    ),
    3362 => 
    array (
      0 => 3363,
      1 => 198,
      2 => 'Xã Tiền Tiến',
    ),
    3363 => 
    array (
      0 => 3364,
      1 => 198,
      2 => 'Phường Thạch Khôi',
    ),
    3364 => 
    array (
      0 => 3365,
      1 => 198,
      2 => 'Xã Liên Hồng',
    ),
    3365 => 
    array (
      0 => 3366,
      1 => 198,
      2 => 'Phường Tân Hưng',
    ),
    3366 => 
    array (
      0 => 3367,
      1 => 198,
      2 => 'Xã Gia Xuyên',
    ),
    3367 => 
    array (
      0 => 3368,
      1 => 198,
      2 => 'Xã Ngọc Sơn',
    ),
    3368 => 
    array (
      0 => 3369,
      1 => 199,
      2 => 'Phường Phả Lại',
    ),
    3369 => 
    array (
      0 => 3370,
      1 => 199,
      2 => 'Phường Sao Đỏ',
    ),
    3370 => 
    array (
      0 => 3371,
      1 => 199,
      2 => 'Phường Bến Tắm',
    ),
    3371 => 
    array (
      0 => 3372,
      1 => 199,
      2 => 'Xã Hoàng Hoa Thám',
    ),
    3372 => 
    array (
      0 => 3373,
      1 => 199,
      2 => 'Xã Bắc An',
    ),
    3373 => 
    array (
      0 => 3374,
      1 => 199,
      2 => 'Xã Hưng Đạo',
    ),
    3374 => 
    array (
      0 => 3375,
      1 => 199,
      2 => 'Xã Lê Lợi',
    ),
    3375 => 
    array (
      0 => 3376,
      1 => 199,
      2 => 'Phường Hoàng Tiến',
    ),
    3376 => 
    array (
      0 => 3377,
      1 => 199,
      2 => 'Phường Cộng Hoà',
    ),
    3377 => 
    array (
      0 => 3378,
      1 => 199,
      2 => 'Phường Hoàng Tân',
    ),
    3378 => 
    array (
      0 => 3379,
      1 => 199,
      2 => 'Phường Cổ Thành',
    ),
    3379 => 
    array (
      0 => 3380,
      1 => 199,
      2 => 'Phường Văn An',
    ),
    3380 => 
    array (
      0 => 3381,
      1 => 199,
      2 => 'Phường Chí Minh',
    ),
    3381 => 
    array (
      0 => 3382,
      1 => 199,
      2 => 'Phường Văn Đức',
    ),
    3382 => 
    array (
      0 => 3383,
      1 => 199,
      2 => 'Phường Thái Học',
    ),
    3383 => 
    array (
      0 => 3384,
      1 => 199,
      2 => 'Xã Nhân Huệ',
    ),
    3384 => 
    array (
      0 => 3385,
      1 => 199,
      2 => 'Phường An Lạc',
    ),
    3385 => 
    array (
      0 => 3386,
      1 => 199,
      2 => 'Phường Đồng Lạc',
    ),
    3386 => 
    array (
      0 => 3387,
      1 => 199,
      2 => 'Phường Tân Dân',
    ),
    3387 => 
    array (
      0 => 3388,
      1 => 200,
      2 => 'Thị trấn Nam Sách',
    ),
    3388 => 
    array (
      0 => 3389,
      1 => 200,
      2 => 'Xã Nam Hưng',
    ),
    3389 => 
    array (
      0 => 3390,
      1 => 200,
      2 => 'Xã Nam Tân',
    ),
    3390 => 
    array (
      0 => 3391,
      1 => 200,
      2 => 'Xã Hợp Tiến',
    ),
    3391 => 
    array (
      0 => 3392,
      1 => 200,
      2 => 'Xã Hiệp Cát',
    ),
    3392 => 
    array (
      0 => 3393,
      1 => 200,
      2 => 'Xã Thanh Quang',
    ),
    3393 => 
    array (
      0 => 3394,
      1 => 200,
      2 => 'Xã Quốc Tuấn',
    ),
    3394 => 
    array (
      0 => 3395,
      1 => 200,
      2 => 'Xã Nam Chính',
    ),
    3395 => 
    array (
      0 => 3396,
      1 => 200,
      2 => 'Xã An Bình',
    ),
    3396 => 
    array (
      0 => 3397,
      1 => 200,
      2 => 'Xã Nam Trung',
    ),
    3397 => 
    array (
      0 => 3398,
      1 => 200,
      2 => 'Xã An Sơn',
    ),
    3398 => 
    array (
      0 => 3399,
      1 => 200,
      2 => 'Xã Cộng Hòa',
    ),
    3399 => 
    array (
      0 => 3400,
      1 => 200,
      2 => 'Xã Thái Tân',
    ),
    3400 => 
    array (
      0 => 3401,
      1 => 200,
      2 => 'Xã An Lâm',
    ),
    3401 => 
    array (
      0 => 3402,
      1 => 200,
      2 => 'Xã Phú Điền',
    ),
    3402 => 
    array (
      0 => 3403,
      1 => 200,
      2 => 'Xã Nam Hồng',
    ),
    3403 => 
    array (
      0 => 3404,
      1 => 200,
      2 => 'Xã Hồng Phong',
    ),
    3404 => 
    array (
      0 => 3405,
      1 => 200,
      2 => 'Xã Đồng Lạc',
    ),
    3405 => 
    array (
      0 => 3406,
      1 => 200,
      2 => 'Xã Minh Tân',
    ),
    3406 => 
    array (
      0 => 3407,
      1 => 201,
      2 => 'Phường An Lưu',
    ),
    3407 => 
    array (
      0 => 3408,
      1 => 201,
      2 => 'Xã Bạch Đằng',
    ),
    3408 => 
    array (
      0 => 3409,
      1 => 201,
      2 => 'Phường Thất Hùng',
    ),
    3409 => 
    array (
      0 => 3410,
      1 => 201,
      2 => 'Xã Lê Ninh',
    ),
    3410 => 
    array (
      0 => 3411,
      1 => 201,
      2 => 'Xã Hoành Sơn',
    ),
    3411 => 
    array (
      0 => 3412,
      1 => 201,
      2 => 'Phường Phạm Thái',
    ),
    3412 => 
    array (
      0 => 3413,
      1 => 201,
      2 => 'Phường Duy Tân',
    ),
    3413 => 
    array (
      0 => 3414,
      1 => 201,
      2 => 'Phường Tân Dân',
    ),
    3414 => 
    array (
      0 => 3415,
      1 => 201,
      2 => 'Phường Minh Tân',
    ),
    3415 => 
    array (
      0 => 3416,
      1 => 201,
      2 => 'Xã Quang Thành',
    ),
    3416 => 
    array (
      0 => 3417,
      1 => 201,
      2 => 'Xã Hiệp Hòa',
    ),
    3417 => 
    array (
      0 => 3418,
      1 => 201,
      2 => 'Phường Phú Thứ',
    ),
    3418 => 
    array (
      0 => 3419,
      1 => 201,
      2 => 'Xã Thăng Long',
    ),
    3419 => 
    array (
      0 => 3420,
      1 => 201,
      2 => 'Xã Lạc Long',
    ),
    3420 => 
    array (
      0 => 3421,
      1 => 201,
      2 => 'Phường An Sinh',
    ),
    3421 => 
    array (
      0 => 3422,
      1 => 201,
      2 => 'Phường Hiệp Sơn',
    ),
    3422 => 
    array (
      0 => 3423,
      1 => 201,
      2 => 'Xã Thượng Quận',
    ),
    3423 => 
    array (
      0 => 3424,
      1 => 201,
      2 => 'Phường An Phụ',
    ),
    3424 => 
    array (
      0 => 3425,
      1 => 201,
      2 => 'Phường Hiệp An',
    ),
    3425 => 
    array (
      0 => 3426,
      1 => 201,
      2 => 'Phường Long Xuyên',
    ),
    3426 => 
    array (
      0 => 3427,
      1 => 201,
      2 => 'Phường Thái Thịnh',
    ),
    3427 => 
    array (
      0 => 3428,
      1 => 201,
      2 => 'Phường Hiến Thành',
    ),
    3428 => 
    array (
      0 => 3429,
      1 => 201,
      2 => 'Xã Minh Hòa',
    ),
    3429 => 
    array (
      0 => 3430,
      1 => 202,
      2 => 'Thị trấn Phú Thái',
    ),
    3430 => 
    array (
      0 => 3431,
      1 => 202,
      2 => 'Xã Lai Vu',
    ),
    3431 => 
    array (
      0 => 3432,
      1 => 202,
      2 => 'Xã Cộng Hòa',
    ),
    3432 => 
    array (
      0 => 3433,
      1 => 202,
      2 => 'Xã Thượng Vũ',
    ),
    3433 => 
    array (
      0 => 3434,
      1 => 202,
      2 => 'Xã Cổ Dũng',
    ),
    3434 => 
    array (
      0 => 3435,
      1 => 202,
      2 => 'Xã Tuấn Việt',
    ),
    3435 => 
    array (
      0 => 3436,
      1 => 202,
      2 => 'Xã Kim Xuyên',
    ),
    3436 => 
    array (
      0 => 3437,
      1 => 202,
      2 => 'Xã Phúc Thành A',
    ),
    3437 => 
    array (
      0 => 3438,
      1 => 202,
      2 => 'Xã Ngũ Phúc',
    ),
    3438 => 
    array (
      0 => 3439,
      1 => 202,
      2 => 'Xã Kim Anh',
    ),
    3439 => 
    array (
      0 => 3440,
      1 => 202,
      2 => 'Xã Kim Liên',
    ),
    3440 => 
    array (
      0 => 3441,
      1 => 202,
      2 => 'Xã Kim Tân',
    ),
    3441 => 
    array (
      0 => 3442,
      1 => 202,
      2 => 'Xã Kim Đính',
    ),
    3442 => 
    array (
      0 => 3443,
      1 => 202,
      2 => 'Xã Bình Dân',
    ),
    3443 => 
    array (
      0 => 3444,
      1 => 202,
      2 => 'Xã Tam Kỳ',
    ),
    3444 => 
    array (
      0 => 3445,
      1 => 202,
      2 => 'Xã Đồng Cẩm',
    ),
    3445 => 
    array (
      0 => 3446,
      1 => 202,
      2 => 'Xã Liên Hòa',
    ),
    3446 => 
    array (
      0 => 3447,
      1 => 202,
      2 => 'Xã Đại Đức',
    ),
    3447 => 
    array (
      0 => 3448,
      1 => 203,
      2 => 'Thị trấn Thanh Hà',
    ),
    3448 => 
    array (
      0 => 3449,
      1 => 203,
      2 => 'Xã Hồng Lạc',
    ),
    3449 => 
    array (
      0 => 3450,
      1 => 203,
      2 => 'Xã Việt Hồng',
    ),
    3450 => 
    array (
      0 => 3451,
      1 => 203,
      2 => 'Xã Tân Việt',
    ),
    3451 => 
    array (
      0 => 3452,
      1 => 203,
      2 => 'Xã Cẩm Chế',
    ),
    3452 => 
    array (
      0 => 3453,
      1 => 203,
      2 => 'Xã Thanh An',
    ),
    3453 => 
    array (
      0 => 3454,
      1 => 203,
      2 => 'Xã Thanh Lang',
    ),
    3454 => 
    array (
      0 => 3455,
      1 => 203,
      2 => 'Xã Tân An',
    ),
    3455 => 
    array (
      0 => 3456,
      1 => 203,
      2 => 'Xã Liên Mạc',
    ),
    3456 => 
    array (
      0 => 3457,
      1 => 203,
      2 => 'Xã Thanh Hải',
    ),
    3457 => 
    array (
      0 => 3458,
      1 => 203,
      2 => 'Xã Thanh Khê',
    ),
    3458 => 
    array (
      0 => 3459,
      1 => 203,
      2 => 'Xã Thanh Xá',
    ),
    3459 => 
    array (
      0 => 3460,
      1 => 203,
      2 => 'Xã Thanh Xuân',
    ),
    3460 => 
    array (
      0 => 3461,
      1 => 203,
      2 => 'Xã Thanh Thủy',
    ),
    3461 => 
    array (
      0 => 3462,
      1 => 203,
      2 => 'Xã An Phượng',
    ),
    3462 => 
    array (
      0 => 3463,
      1 => 203,
      2 => 'Xã Thanh Sơn',
    ),
    3463 => 
    array (
      0 => 3464,
      1 => 203,
      2 => 'Xã Thanh Quang',
    ),
    3464 => 
    array (
      0 => 3465,
      1 => 203,
      2 => 'Xã Thanh Hồng',
    ),
    3465 => 
    array (
      0 => 3466,
      1 => 203,
      2 => 'Xã Thanh Cường',
    ),
    3466 => 
    array (
      0 => 3467,
      1 => 203,
      2 => 'Xã Vĩnh Lập',
    ),
    3467 => 
    array (
      0 => 3468,
      1 => 204,
      2 => 'Thị trấn Cẩm Giang',
    ),
    3468 => 
    array (
      0 => 3469,
      1 => 204,
      2 => 'Thị trấn Lai Cách',
    ),
    3469 => 
    array (
      0 => 3470,
      1 => 204,
      2 => 'Xã Cẩm Hưng',
    ),
    3470 => 
    array (
      0 => 3471,
      1 => 204,
      2 => 'Xã Cẩm Hoàng',
    ),
    3471 => 
    array (
      0 => 3472,
      1 => 204,
      2 => 'Xã Cẩm Văn',
    ),
    3472 => 
    array (
      0 => 3473,
      1 => 204,
      2 => 'Xã Ngọc Liên',
    ),
    3473 => 
    array (
      0 => 3474,
      1 => 204,
      2 => 'Xã Thạch Lỗi',
    ),
    3474 => 
    array (
      0 => 3475,
      1 => 204,
      2 => 'Xã Cẩm Vũ',
    ),
    3475 => 
    array (
      0 => 3476,
      1 => 204,
      2 => 'Xã Đức Chính',
    ),
    3476 => 
    array (
      0 => 3477,
      1 => 204,
      2 => 'Xã Định Sơn',
    ),
    3477 => 
    array (
      0 => 3478,
      1 => 204,
      2 => 'Xã Lương Điền',
    ),
    3478 => 
    array (
      0 => 3479,
      1 => 204,
      2 => 'Xã Cao An',
    ),
    3479 => 
    array (
      0 => 3480,
      1 => 204,
      2 => 'Xã Tân Trường',
    ),
    3480 => 
    array (
      0 => 3481,
      1 => 204,
      2 => 'Xã Cẩm Phúc',
    ),
    3481 => 
    array (
      0 => 3482,
      1 => 204,
      2 => 'Xã Cẩm Điền',
    ),
    3482 => 
    array (
      0 => 3483,
      1 => 204,
      2 => 'Xã Cẩm Đông',
    ),
    3483 => 
    array (
      0 => 3484,
      1 => 204,
      2 => 'Xã Cẩm Đoài',
    ),
    3484 => 
    array (
      0 => 3485,
      1 => 205,
      2 => 'Thị trấn Kẻ Sặt',
    ),
    3485 => 
    array (
      0 => 3486,
      1 => 205,
      2 => 'Xã Vĩnh Hưng',
    ),
    3486 => 
    array (
      0 => 3487,
      1 => 205,
      2 => 'Xã Hùng Thắng',
    ),
    3487 => 
    array (
      0 => 3488,
      1 => 205,
      2 => 'Xã Vĩnh Hồng',
    ),
    3488 => 
    array (
      0 => 3489,
      1 => 205,
      2 => 'Xã Long Xuyên',
    ),
    3489 => 
    array (
      0 => 3490,
      1 => 205,
      2 => 'Xã Tân Việt',
    ),
    3490 => 
    array (
      0 => 3491,
      1 => 205,
      2 => 'Xã Thúc Kháng',
    ),
    3491 => 
    array (
      0 => 3492,
      1 => 205,
      2 => 'Xã Tân Hồng',
    ),
    3492 => 
    array (
      0 => 3493,
      1 => 205,
      2 => 'Xã Bình Minh',
    ),
    3493 => 
    array (
      0 => 3494,
      1 => 205,
      2 => 'Xã Hồng Khê',
    ),
    3494 => 
    array (
      0 => 3495,
      1 => 205,
      2 => 'Xã Thái Học',
    ),
    3495 => 
    array (
      0 => 3496,
      1 => 205,
      2 => 'Xã Cổ Bì',
    ),
    3496 => 
    array (
      0 => 3497,
      1 => 205,
      2 => 'Xã Nhân Quyền',
    ),
    3497 => 
    array (
      0 => 3498,
      1 => 205,
      2 => 'Xã Thái Dương',
    ),
    3498 => 
    array (
      0 => 3499,
      1 => 205,
      2 => 'Xã Thái Hòa',
    ),
    3499 => 
    array (
      0 => 3500,
      1 => 205,
      2 => 'Xã Bình Xuyên',
    ),
    3500 => 
    array (
      0 => 3501,
      1 => 206,
      2 => 'Thị trấn Gia Lộc',
    ),
    3501 => 
    array (
      0 => 3502,
      1 => 206,
      2 => 'Xã Thống Nhất',
    ),
    3502 => 
    array (
      0 => 3503,
      1 => 206,
      2 => 'Xã Yết Kiêu',
    ),
    3503 => 
    array (
      0 => 3504,
      1 => 206,
      2 => 'Xã Gia Tân',
    ),
    3504 => 
    array (
      0 => 3505,
      1 => 206,
      2 => 'Xã Tân Tiến',
    ),
    3505 => 
    array (
      0 => 3506,
      1 => 206,
      2 => 'Xã Gia Khánh',
    ),
    3506 => 
    array (
      0 => 3507,
      1 => 206,
      2 => 'Xã Gia Lương',
    ),
    3507 => 
    array (
      0 => 3508,
      1 => 206,
      2 => 'Xã Lê Lợi',
    ),
    3508 => 
    array (
      0 => 3509,
      1 => 206,
      2 => 'Xã Toàn Thắng',
    ),
    3509 => 
    array (
      0 => 3510,
      1 => 206,
      2 => 'Xã Hoàng Diệu',
    ),
    3510 => 
    array (
      0 => 3511,
      1 => 206,
      2 => 'Xã Hồng Hưng',
    ),
    3511 => 
    array (
      0 => 3512,
      1 => 206,
      2 => 'Xã Phạm Trấn',
    ),
    3512 => 
    array (
      0 => 3513,
      1 => 206,
      2 => 'Xã Đoàn Thượng',
    ),
    3513 => 
    array (
      0 => 3514,
      1 => 206,
      2 => 'Xã Thống Kênh',
    ),
    3514 => 
    array (
      0 => 3515,
      1 => 206,
      2 => 'Xã Quang Minh',
    ),
    3515 => 
    array (
      0 => 3516,
      1 => 206,
      2 => 'Xã Đồng Quang',
    ),
    3516 => 
    array (
      0 => 3517,
      1 => 206,
      2 => 'Xã Nhật Tân',
    ),
    3517 => 
    array (
      0 => 3518,
      1 => 206,
      2 => 'Xã Đức Xương',
    ),
    3518 => 
    array (
      0 => 3519,
      1 => 207,
      2 => 'Thị trấn Tứ Kỳ',
    ),
    3519 => 
    array (
      0 => 3520,
      1 => 207,
      2 => 'Xã Đại Sơn',
    ),
    3520 => 
    array (
      0 => 3521,
      1 => 207,
      2 => 'Xã Hưng Đạo',
    ),
    3521 => 
    array (
      0 => 3522,
      1 => 207,
      2 => 'Xã Ngọc Kỳ',
    ),
    3522 => 
    array (
      0 => 3523,
      1 => 207,
      2 => 'Xã Bình Lăng',
    ),
    3523 => 
    array (
      0 => 3524,
      1 => 207,
      2 => 'Xã Chí Minh',
    ),
    3524 => 
    array (
      0 => 3525,
      1 => 207,
      2 => 'Xã Tái Sơn',
    ),
    3525 => 
    array (
      0 => 3526,
      1 => 207,
      2 => 'Xã Quang Phục',
    ),
    3526 => 
    array (
      0 => 3527,
      1 => 207,
      2 => 'Xã Dân Chủ',
    ),
    3527 => 
    array (
      0 => 3528,
      1 => 207,
      2 => 'Xã Tân Kỳ',
    ),
    3528 => 
    array (
      0 => 3529,
      1 => 207,
      2 => 'Xã Quang Khải',
    ),
    3529 => 
    array (
      0 => 3530,
      1 => 207,
      2 => 'Xã Đại Hợp',
    ),
    3530 => 
    array (
      0 => 3531,
      1 => 207,
      2 => 'Xã Quảng Nghiệp',
    ),
    3531 => 
    array (
      0 => 3532,
      1 => 207,
      2 => 'Xã An Thanh',
    ),
    3532 => 
    array (
      0 => 3533,
      1 => 207,
      2 => 'Xã Minh Đức',
    ),
    3533 => 
    array (
      0 => 3534,
      1 => 207,
      2 => 'Xã Văn Tố',
    ),
    3534 => 
    array (
      0 => 3535,
      1 => 207,
      2 => 'Xã Quang Trung',
    ),
    3535 => 
    array (
      0 => 3536,
      1 => 207,
      2 => 'Xã Phượng Kỳ',
    ),
    3536 => 
    array (
      0 => 3537,
      1 => 207,
      2 => 'Xã Cộng Lạc',
    ),
    3537 => 
    array (
      0 => 3538,
      1 => 207,
      2 => 'Xã Tiên Động',
    ),
    3538 => 
    array (
      0 => 3539,
      1 => 207,
      2 => 'Xã Nguyên Giáp',
    ),
    3539 => 
    array (
      0 => 3540,
      1 => 207,
      2 => 'Xã Hà Kỳ',
    ),
    3540 => 
    array (
      0 => 3541,
      1 => 207,
      2 => 'Xã Hà Thanh',
    ),
    3541 => 
    array (
      0 => 3542,
      1 => 208,
      2 => 'Thị trấn Ninh Giang',
    ),
    3542 => 
    array (
      0 => 3543,
      1 => 208,
      2 => 'Xã Ứng Hoè',
    ),
    3543 => 
    array (
      0 => 3544,
      1 => 208,
      2 => 'Xã Nghĩa An',
    ),
    3544 => 
    array (
      0 => 3545,
      1 => 208,
      2 => 'Xã Hồng Đức',
    ),
    3545 => 
    array (
      0 => 3546,
      1 => 208,
      2 => 'Xã An Đức',
    ),
    3546 => 
    array (
      0 => 3547,
      1 => 208,
      2 => 'Xã Vạn Phúc',
    ),
    3547 => 
    array (
      0 => 3548,
      1 => 208,
      2 => 'Xã Tân Hương',
    ),
    3548 => 
    array (
      0 => 3549,
      1 => 208,
      2 => 'Xã Vĩnh Hòa',
    ),
    3549 => 
    array (
      0 => 3550,
      1 => 208,
      2 => 'Xã Đông Xuyên',
    ),
    3550 => 
    array (
      0 => 3551,
      1 => 208,
      2 => 'Xã Tân Phong',
    ),
    3551 => 
    array (
      0 => 3552,
      1 => 208,
      2 => 'Xã Ninh Hải',
    ),
    3552 => 
    array (
      0 => 3553,
      1 => 208,
      2 => 'Xã Đồng Tâm',
    ),
    3553 => 
    array (
      0 => 3554,
      1 => 208,
      2 => 'Xã Tân Quang',
    ),
    3554 => 
    array (
      0 => 3555,
      1 => 208,
      2 => 'Xã Kiến Quốc',
    ),
    3555 => 
    array (
      0 => 3556,
      1 => 208,
      2 => 'Xã Hồng Dụ',
    ),
    3556 => 
    array (
      0 => 3557,
      1 => 208,
      2 => 'Xã Văn Hội',
    ),
    3557 => 
    array (
      0 => 3558,
      1 => 208,
      2 => 'Xã Hồng Phong',
    ),
    3558 => 
    array (
      0 => 3559,
      1 => 208,
      2 => 'Xã Hiệp Lực',
    ),
    3559 => 
    array (
      0 => 3560,
      1 => 208,
      2 => 'Xã Hồng Phúc',
    ),
    3560 => 
    array (
      0 => 3561,
      1 => 208,
      2 => 'Xã Hưng Long',
    ),
    3561 => 
    array (
      0 => 3562,
      1 => 209,
      2 => 'Thị trấn Thanh Miện',
    ),
    3562 => 
    array (
      0 => 3563,
      1 => 209,
      2 => 'Xã Thanh Tùng',
    ),
    3563 => 
    array (
      0 => 3564,
      1 => 209,
      2 => 'Xã Phạm Kha',
    ),
    3564 => 
    array (
      0 => 3565,
      1 => 209,
      2 => 'Xã Ngô Quyền',
    ),
    3565 => 
    array (
      0 => 3566,
      1 => 209,
      2 => 'Xã Đoàn Tùng',
    ),
    3566 => 
    array (
      0 => 3567,
      1 => 209,
      2 => 'Xã Hồng Quang',
    ),
    3567 => 
    array (
      0 => 3568,
      1 => 209,
      2 => 'Xã Tân Trào',
    ),
    3568 => 
    array (
      0 => 3569,
      1 => 209,
      2 => 'Xã Lam Sơn',
    ),
    3569 => 
    array (
      0 => 3570,
      1 => 209,
      2 => 'Xã Đoàn Kết',
    ),
    3570 => 
    array (
      0 => 3571,
      1 => 209,
      2 => 'Xã Lê Hồng',
    ),
    3571 => 
    array (
      0 => 3572,
      1 => 209,
      2 => 'Xã Tứ Cường',
    ),
    3572 => 
    array (
      0 => 3573,
      1 => 209,
      2 => 'Xã Ngũ Hùng',
    ),
    3573 => 
    array (
      0 => 3574,
      1 => 209,
      2 => 'Xã Cao Thắng',
    ),
    3574 => 
    array (
      0 => 3575,
      1 => 209,
      2 => 'Xã Chi Lăng Bắc',
    ),
    3575 => 
    array (
      0 => 3576,
      1 => 209,
      2 => 'Xã Chi Lăng Nam',
    ),
    3576 => 
    array (
      0 => 3577,
      1 => 209,
      2 => 'Xã Thanh Giang',
    ),
    3577 => 
    array (
      0 => 3578,
      1 => 209,
      2 => 'Xã Hồng Phong',
    ),
    3578 => 
    array (
      0 => 3579,
      1 => 210,
      2 => 'Phường Quán Toan',
    ),
    3579 => 
    array (
      0 => 3580,
      1 => 210,
      2 => 'Phường Hùng Vương',
    ),
    3580 => 
    array (
      0 => 3581,
      1 => 210,
      2 => 'Phường Sở Dầu',
    ),
    3581 => 
    array (
      0 => 3582,
      1 => 210,
      2 => 'Phường Thượng Lý',
    ),
    3582 => 
    array (
      0 => 3583,
      1 => 210,
      2 => 'Phường Hạ Lý',
    ),
    3583 => 
    array (
      0 => 3584,
      1 => 210,
      2 => 'Phường Minh Khai',
    ),
    3584 => 
    array (
      0 => 3585,
      1 => 210,
      2 => 'Phường Trại Chuối',
    ),
    3585 => 
    array (
      0 => 3586,
      1 => 210,
      2 => 'Phường Hoàng Văn Thụ',
    ),
    3586 => 
    array (
      0 => 3587,
      1 => 210,
      2 => 'Phường Phan Bội Châu',
    ),
    3587 => 
    array (
      0 => 3588,
      1 => 211,
      2 => 'Phường Máy Chai',
    ),
    3588 => 
    array (
      0 => 3589,
      1 => 211,
      2 => 'Phường Máy Tơ',
    ),
    3589 => 
    array (
      0 => 3590,
      1 => 211,
      2 => 'Phường Vạn Mỹ',
    ),
    3590 => 
    array (
      0 => 3591,
      1 => 211,
      2 => 'Phường Cầu Tre',
    ),
    3591 => 
    array (
      0 => 3592,
      1 => 211,
      2 => 'Phường Lạc Viên',
    ),
    3592 => 
    array (
      0 => 3593,
      1 => 211,
      2 => 'Phường Cầu Đất',
    ),
    3593 => 
    array (
      0 => 3594,
      1 => 211,
      2 => 'Phường Gia Viên',
    ),
    3594 => 
    array (
      0 => 3595,
      1 => 211,
      2 => 'Phường Đông Khê',
    ),
    3595 => 
    array (
      0 => 3596,
      1 => 211,
      2 => 'Phường Lê Lợi',
    ),
    3596 => 
    array (
      0 => 3597,
      1 => 211,
      2 => 'Phường Đằng Giang',
    ),
    3597 => 
    array (
      0 => 3598,
      1 => 211,
      2 => 'Phường Lạch Tray',
    ),
    3598 => 
    array (
      0 => 3599,
      1 => 211,
      2 => 'Phường Đổng Quốc Bình',
    ),
    3599 => 
    array (
      0 => 3600,
      1 => 212,
      2 => 'Phường Cát Dài',
    ),
    3600 => 
    array (
      0 => 3601,
      1 => 212,
      2 => 'Phường An Biên',
    ),
    3601 => 
    array (
      0 => 3602,
      1 => 212,
      2 => 'Phường Lam Sơn',
    ),
    3602 => 
    array (
      0 => 3603,
      1 => 212,
      2 => 'Phường An Dương',
    ),
    3603 => 
    array (
      0 => 3604,
      1 => 212,
      2 => 'Phường Trần Nguyên Hãn',
    ),
    3604 => 
    array (
      0 => 3605,
      1 => 212,
      2 => 'Phường Hồ Nam',
    ),
    3605 => 
    array (
      0 => 3606,
      1 => 212,
      2 => 'Phường Trại Cau',
    ),
    3606 => 
    array (
      0 => 3607,
      1 => 212,
      2 => 'Phường Dư Hàng',
    ),
    3607 => 
    array (
      0 => 3608,
      1 => 212,
      2 => 'Phường Hàng Kênh',
    ),
    3608 => 
    array (
      0 => 3609,
      1 => 212,
      2 => 'Phường Đông Hải',
    ),
    3609 => 
    array (
      0 => 3610,
      1 => 212,
      2 => 'Phường Niệm Nghĩa',
    ),
    3610 => 
    array (
      0 => 3611,
      1 => 212,
      2 => 'Phường Nghĩa Xá',
    ),
    3611 => 
    array (
      0 => 3612,
      1 => 212,
      2 => 'Phường Dư Hàng Kênh',
    ),
    3612 => 
    array (
      0 => 3613,
      1 => 212,
      2 => 'Phường Kênh Dương',
    ),
    3613 => 
    array (
      0 => 3614,
      1 => 212,
      2 => 'Phường Vĩnh Niệm',
    ),
    3614 => 
    array (
      0 => 3615,
      1 => 213,
      2 => 'Phường Đông Hải 1',
    ),
    3615 => 
    array (
      0 => 3616,
      1 => 213,
      2 => 'Phường Đông Hải 2',
    ),
    3616 => 
    array (
      0 => 3617,
      1 => 213,
      2 => 'Phường Đằng Lâm',
    ),
    3617 => 
    array (
      0 => 3618,
      1 => 213,
      2 => 'Phường Thành Tô',
    ),
    3618 => 
    array (
      0 => 3619,
      1 => 213,
      2 => 'Phường Đằng Hải',
    ),
    3619 => 
    array (
      0 => 3620,
      1 => 213,
      2 => 'Phường Nam Hải',
    ),
    3620 => 
    array (
      0 => 3621,
      1 => 213,
      2 => 'Phường Cát Bi',
    ),
    3621 => 
    array (
      0 => 3622,
      1 => 213,
      2 => 'Phường Tràng Cát',
    ),
    3622 => 
    array (
      0 => 3623,
      1 => 214,
      2 => 'Phường Quán Trữ',
    ),
    3623 => 
    array (
      0 => 3624,
      1 => 214,
      2 => 'Phường Lãm Hà',
    ),
    3624 => 
    array (
      0 => 3625,
      1 => 214,
      2 => 'Phường Đồng Hoà',
    ),
    3625 => 
    array (
      0 => 3626,
      1 => 214,
      2 => 'Phường Bắc Sơn',
    ),
    3626 => 
    array (
      0 => 3627,
      1 => 214,
      2 => 'Phường Nam Sơn',
    ),
    3627 => 
    array (
      0 => 3628,
      1 => 214,
      2 => 'Phường Ngọc Sơn',
    ),
    3628 => 
    array (
      0 => 3629,
      1 => 214,
      2 => 'Phường Trần Thành Ngọ',
    ),
    3629 => 
    array (
      0 => 3630,
      1 => 214,
      2 => 'Phường Văn Đẩu',
    ),
    3630 => 
    array (
      0 => 3631,
      1 => 214,
      2 => 'Phường Phù Liễn',
    ),
    3631 => 
    array (
      0 => 3632,
      1 => 214,
      2 => 'Phường Tràng Minh',
    ),
    3632 => 
    array (
      0 => 3633,
      1 => 215,
      2 => 'Phường Ngọc Xuyên',
    ),
    3633 => 
    array (
      0 => 3634,
      1 => 215,
      2 => 'Phường Hải Sơn',
    ),
    3634 => 
    array (
      0 => 3635,
      1 => 215,
      2 => 'Phường Vạn Hương',
    ),
    3635 => 
    array (
      0 => 3636,
      1 => 215,
      2 => 'Phường Minh Đức',
    ),
    3636 => 
    array (
      0 => 3637,
      1 => 215,
      2 => 'Phường Bàng La',
    ),
    3637 => 
    array (
      0 => 3638,
      1 => 215,
      2 => 'Phường Hợp Đức',
    ),
    3638 => 
    array (
      0 => 3639,
      1 => 216,
      2 => 'Phường Đa Phúc',
    ),
    3639 => 
    array (
      0 => 3640,
      1 => 216,
      2 => 'Phường Hưng Đạo',
    ),
    3640 => 
    array (
      0 => 3641,
      1 => 216,
      2 => 'Phường Anh Dũng',
    ),
    3641 => 
    array (
      0 => 3642,
      1 => 216,
      2 => 'Phường Hải Thành',
    ),
    3642 => 
    array (
      0 => 3643,
      1 => 216,
      2 => 'Phường Hoà Nghĩa',
    ),
    3643 => 
    array (
      0 => 3644,
      1 => 216,
      2 => 'Phường Tân Thành',
    ),
    3644 => 
    array (
      0 => 3645,
      1 => 217,
      2 => 'Thị trấn Núi Đèo',
    ),
    3645 => 
    array (
      0 => 3646,
      1 => 217,
      2 => 'Thị trấn Minh Đức',
    ),
    3646 => 
    array (
      0 => 3647,
      1 => 217,
      2 => 'Xã Lại Xuân',
    ),
    3647 => 
    array (
      0 => 3648,
      1 => 217,
      2 => 'Xã An Sơn',
    ),
    3648 => 
    array (
      0 => 3649,
      1 => 217,
      2 => 'Xã Kỳ Sơn',
    ),
    3649 => 
    array (
      0 => 3650,
      1 => 217,
      2 => 'Xã Liên Khê',
    ),
    3650 => 
    array (
      0 => 3651,
      1 => 217,
      2 => 'Xã Lưu Kiếm',
    ),
    3651 => 
    array (
      0 => 3652,
      1 => 217,
      2 => 'Xã Lưu Kỳ',
    ),
    3652 => 
    array (
      0 => 3653,
      1 => 217,
      2 => 'Xã Gia Minh',
    ),
    3653 => 
    array (
      0 => 3654,
      1 => 217,
      2 => 'Xã Gia Đức',
    ),
    3654 => 
    array (
      0 => 3655,
      1 => 217,
      2 => 'Xã Minh Tân',
    ),
    3655 => 
    array (
      0 => 3656,
      1 => 217,
      2 => 'Xã Phù Ninh',
    ),
    3656 => 
    array (
      0 => 3657,
      1 => 217,
      2 => 'Xã Quảng Thanh',
    ),
    3657 => 
    array (
      0 => 3658,
      1 => 217,
      2 => 'Xã Chính Mỹ',
    ),
    3658 => 
    array (
      0 => 3659,
      1 => 217,
      2 => 'Xã Kênh Giang',
    ),
    3659 => 
    array (
      0 => 3660,
      1 => 217,
      2 => 'Xã Hợp Thành',
    ),
    3660 => 
    array (
      0 => 3661,
      1 => 217,
      2 => 'Xã Cao Nhân',
    ),
    3661 => 
    array (
      0 => 3662,
      1 => 217,
      2 => 'Xã Mỹ Đồng',
    ),
    3662 => 
    array (
      0 => 3663,
      1 => 217,
      2 => 'Xã Đông Sơn',
    ),
    3663 => 
    array (
      0 => 3664,
      1 => 217,
      2 => 'Xã Hoà Bình',
    ),
    3664 => 
    array (
      0 => 3665,
      1 => 217,
      2 => 'Xã Trung Hà',
    ),
    3665 => 
    array (
      0 => 3666,
      1 => 217,
      2 => 'Xã An Lư',
    ),
    3666 => 
    array (
      0 => 3667,
      1 => 217,
      2 => 'Xã Thuỷ Triều',
    ),
    3667 => 
    array (
      0 => 3668,
      1 => 217,
      2 => 'Xã Ngũ Lão',
    ),
    3668 => 
    array (
      0 => 3669,
      1 => 217,
      2 => 'Xã Phục Lễ',
    ),
    3669 => 
    array (
      0 => 3670,
      1 => 217,
      2 => 'Xã Tam Hưng',
    ),
    3670 => 
    array (
      0 => 3671,
      1 => 217,
      2 => 'Xã Phả Lễ',
    ),
    3671 => 
    array (
      0 => 3672,
      1 => 217,
      2 => 'Xã Lập Lễ',
    ),
    3672 => 
    array (
      0 => 3673,
      1 => 217,
      2 => 'Xã Kiền Bái',
    ),
    3673 => 
    array (
      0 => 3674,
      1 => 217,
      2 => 'Xã Thiên Hương',
    ),
    3674 => 
    array (
      0 => 3675,
      1 => 217,
      2 => 'Xã Thuỷ Sơn',
    ),
    3675 => 
    array (
      0 => 3676,
      1 => 217,
      2 => 'Xã Thuỷ Đường',
    ),
    3676 => 
    array (
      0 => 3677,
      1 => 217,
      2 => 'Xã Hoàng Động',
    ),
    3677 => 
    array (
      0 => 3678,
      1 => 217,
      2 => 'Xã Lâm Động',
    ),
    3678 => 
    array (
      0 => 3679,
      1 => 217,
      2 => 'Xã Hoa Động',
    ),
    3679 => 
    array (
      0 => 3680,
      1 => 217,
      2 => 'Xã Tân Dương',
    ),
    3680 => 
    array (
      0 => 3681,
      1 => 217,
      2 => 'Xã Dương Quan',
    ),
    3681 => 
    array (
      0 => 3682,
      1 => 218,
      2 => 'Thị trấn An Dương',
    ),
    3682 => 
    array (
      0 => 3683,
      1 => 218,
      2 => 'Xã Lê Thiện',
    ),
    3683 => 
    array (
      0 => 3684,
      1 => 218,
      2 => 'Xã Đại Bản',
    ),
    3684 => 
    array (
      0 => 3685,
      1 => 218,
      2 => 'Xã An Hoà',
    ),
    3685 => 
    array (
      0 => 3686,
      1 => 218,
      2 => 'Xã Hồng Phong',
    ),
    3686 => 
    array (
      0 => 3687,
      1 => 218,
      2 => 'Xã Tân Tiến',
    ),
    3687 => 
    array (
      0 => 3688,
      1 => 218,
      2 => 'Xã An Hưng',
    ),
    3688 => 
    array (
      0 => 3689,
      1 => 218,
      2 => 'Xã An Hồng',
    ),
    3689 => 
    array (
      0 => 3690,
      1 => 218,
      2 => 'Xã Bắc Sơn',
    ),
    3690 => 
    array (
      0 => 3691,
      1 => 218,
      2 => 'Xã Nam Sơn',
    ),
    3691 => 
    array (
      0 => 3692,
      1 => 218,
      2 => 'Xã Lê Lợi',
    ),
    3692 => 
    array (
      0 => 3693,
      1 => 218,
      2 => 'Xã Đặng Cương',
    ),
    3693 => 
    array (
      0 => 3694,
      1 => 218,
      2 => 'Xã Đồng Thái',
    ),
    3694 => 
    array (
      0 => 3695,
      1 => 218,
      2 => 'Xã Quốc Tuấn',
    ),
    3695 => 
    array (
      0 => 3696,
      1 => 218,
      2 => 'Xã An Đồng',
    ),
    3696 => 
    array (
      0 => 3697,
      1 => 218,
      2 => 'Xã Hồng Thái',
    ),
    3697 => 
    array (
      0 => 3698,
      1 => 219,
      2 => 'Thị trấn An Lão',
    ),
    3698 => 
    array (
      0 => 3699,
      1 => 219,
      2 => 'Xã Bát Trang',
    ),
    3699 => 
    array (
      0 => 3700,
      1 => 219,
      2 => 'Xã Trường Thọ',
    ),
    3700 => 
    array (
      0 => 3701,
      1 => 219,
      2 => 'Xã Trường Thành',
    ),
    3701 => 
    array (
      0 => 3702,
      1 => 219,
      2 => 'Xã An Tiến',
    ),
    3702 => 
    array (
      0 => 3703,
      1 => 219,
      2 => 'Xã Quang Hưng',
    ),
    3703 => 
    array (
      0 => 3704,
      1 => 219,
      2 => 'Xã Quang Trung',
    ),
    3704 => 
    array (
      0 => 3705,
      1 => 219,
      2 => 'Xã Quốc Tuấn',
    ),
    3705 => 
    array (
      0 => 3706,
      1 => 219,
      2 => 'Xã An Thắng',
    ),
    3706 => 
    array (
      0 => 3707,
      1 => 219,
      2 => 'Thị trấn Trường Sơn',
    ),
    3707 => 
    array (
      0 => 3708,
      1 => 219,
      2 => 'Xã Tân Dân',
    ),
    3708 => 
    array (
      0 => 3709,
      1 => 219,
      2 => 'Xã Thái Sơn',
    ),
    3709 => 
    array (
      0 => 3710,
      1 => 219,
      2 => 'Xã Tân Viên',
    ),
    3710 => 
    array (
      0 => 3711,
      1 => 219,
      2 => 'Xã Mỹ Đức',
    ),
    3711 => 
    array (
      0 => 3712,
      1 => 219,
      2 => 'Xã Chiến Thắng',
    ),
    3712 => 
    array (
      0 => 3713,
      1 => 219,
      2 => 'Xã An Thọ',
    ),
    3713 => 
    array (
      0 => 3714,
      1 => 219,
      2 => 'Xã An Thái',
    ),
    3714 => 
    array (
      0 => 3715,
      1 => 220,
      2 => 'Thị trấn Núi Đối',
    ),
    3715 => 
    array (
      0 => 3716,
      1 => 220,
      2 => 'Xã Đông Phương',
    ),
    3716 => 
    array (
      0 => 3717,
      1 => 220,
      2 => 'Xã Thuận Thiên',
    ),
    3717 => 
    array (
      0 => 3718,
      1 => 220,
      2 => 'Xã Hữu Bằng',
    ),
    3718 => 
    array (
      0 => 3719,
      1 => 220,
      2 => 'Xã Đại Đồng',
    ),
    3719 => 
    array (
      0 => 3720,
      1 => 220,
      2 => 'Xã Ngũ Phúc',
    ),
    3720 => 
    array (
      0 => 3721,
      1 => 220,
      2 => 'Xã Kiến Quốc',
    ),
    3721 => 
    array (
      0 => 3722,
      1 => 220,
      2 => 'Xã Du Lễ',
    ),
    3722 => 
    array (
      0 => 3723,
      1 => 220,
      2 => 'Xã Thuỵ Hương',
    ),
    3723 => 
    array (
      0 => 3724,
      1 => 220,
      2 => 'Xã Thanh Sơn',
    ),
    3724 => 
    array (
      0 => 3725,
      1 => 220,
      2 => 'Xã Minh Tân',
    ),
    3725 => 
    array (
      0 => 3726,
      1 => 220,
      2 => 'Xã Đại Hà',
    ),
    3726 => 
    array (
      0 => 3727,
      1 => 220,
      2 => 'Xã Ngũ Đoan',
    ),
    3727 => 
    array (
      0 => 3728,
      1 => 220,
      2 => 'Xã Tân Phong',
    ),
    3728 => 
    array (
      0 => 3729,
      1 => 220,
      2 => 'Xã Tân Trào',
    ),
    3729 => 
    array (
      0 => 3730,
      1 => 220,
      2 => 'Xã Đoàn Xá',
    ),
    3730 => 
    array (
      0 => 3731,
      1 => 220,
      2 => 'Xã Tú Sơn',
    ),
    3731 => 
    array (
      0 => 3732,
      1 => 220,
      2 => 'Xã Đại Hợp',
    ),
    3732 => 
    array (
      0 => 3733,
      1 => 221,
      2 => 'Thị trấn Tiên Lãng',
    ),
    3733 => 
    array (
      0 => 3734,
      1 => 221,
      2 => 'Xã Đại Thắng',
    ),
    3734 => 
    array (
      0 => 3735,
      1 => 221,
      2 => 'Xã Tiên Cường',
    ),
    3735 => 
    array (
      0 => 3736,
      1 => 221,
      2 => 'Xã Tự Cường',
    ),
    3736 => 
    array (
      0 => 3737,
      1 => 221,
      2 => 'Xã Quyết Tiến',
    ),
    3737 => 
    array (
      0 => 3738,
      1 => 221,
      2 => 'Xã Khởi Nghĩa',
    ),
    3738 => 
    array (
      0 => 3739,
      1 => 221,
      2 => 'Xã Tiên Thanh',
    ),
    3739 => 
    array (
      0 => 3740,
      1 => 221,
      2 => 'Xã Cấp Tiến',
    ),
    3740 => 
    array (
      0 => 3741,
      1 => 221,
      2 => 'Xã Kiến Thiết',
    ),
    3741 => 
    array (
      0 => 3742,
      1 => 221,
      2 => 'Xã Đoàn Lập',
    ),
    3742 => 
    array (
      0 => 3743,
      1 => 221,
      2 => 'Xã Bạch Đằng',
    ),
    3743 => 
    array (
      0 => 3744,
      1 => 221,
      2 => 'Xã Quang Phục',
    ),
    3744 => 
    array (
      0 => 3745,
      1 => 221,
      2 => 'Xã Toàn Thắng',
    ),
    3745 => 
    array (
      0 => 3746,
      1 => 221,
      2 => 'Xã Tiên Thắng',
    ),
    3746 => 
    array (
      0 => 3747,
      1 => 221,
      2 => 'Xã Tiên Minh',
    ),
    3747 => 
    array (
      0 => 3748,
      1 => 221,
      2 => 'Xã Bắc Hưng',
    ),
    3748 => 
    array (
      0 => 3749,
      1 => 221,
      2 => 'Xã Nam Hưng',
    ),
    3749 => 
    array (
      0 => 3750,
      1 => 221,
      2 => 'Xã Hùng Thắng',
    ),
    3750 => 
    array (
      0 => 3751,
      1 => 221,
      2 => 'Xã Tây Hưng',
    ),
    3751 => 
    array (
      0 => 3752,
      1 => 221,
      2 => 'Xã Đông Hưng',
    ),
    3752 => 
    array (
      0 => 3753,
      1 => 221,
      2 => 'Xã Vinh Quang',
    ),
    3753 => 
    array (
      0 => 3754,
      1 => 222,
      2 => 'Thị trấn Vĩnh Bảo',
    ),
    3754 => 
    array (
      0 => 3755,
      1 => 222,
      2 => 'Xã Dũng Tiến',
    ),
    3755 => 
    array (
      0 => 3756,
      1 => 222,
      2 => 'Xã Giang Biên',
    ),
    3756 => 
    array (
      0 => 3757,
      1 => 222,
      2 => 'Xã Thắng Thuỷ',
    ),
    3757 => 
    array (
      0 => 3758,
      1 => 222,
      2 => 'Xã Trung Lập',
    ),
    3758 => 
    array (
      0 => 3759,
      1 => 222,
      2 => 'Xã Việt Tiến',
    ),
    3759 => 
    array (
      0 => 3760,
      1 => 222,
      2 => 'Xã Vĩnh An',
    ),
    3760 => 
    array (
      0 => 3761,
      1 => 222,
      2 => 'Xã Vĩnh Long',
    ),
    3761 => 
    array (
      0 => 3762,
      1 => 222,
      2 => 'Xã Hiệp Hoà',
    ),
    3762 => 
    array (
      0 => 3763,
      1 => 222,
      2 => 'Xã Hùng Tiến',
    ),
    3763 => 
    array (
      0 => 3764,
      1 => 222,
      2 => 'Xã An Hoà',
    ),
    3764 => 
    array (
      0 => 3765,
      1 => 222,
      2 => 'Xã Tân Hưng',
    ),
    3765 => 
    array (
      0 => 3766,
      1 => 222,
      2 => 'Xã Tân Liên',
    ),
    3766 => 
    array (
      0 => 3767,
      1 => 222,
      2 => 'Xã Nhân Hoà',
    ),
    3767 => 
    array (
      0 => 3768,
      1 => 222,
      2 => 'Xã Tam Đa',
    ),
    3768 => 
    array (
      0 => 3769,
      1 => 222,
      2 => 'Xã Hưng Nhân',
    ),
    3769 => 
    array (
      0 => 3770,
      1 => 222,
      2 => 'Xã Vinh Quang',
    ),
    3770 => 
    array (
      0 => 3771,
      1 => 222,
      2 => 'Xã Đồng Minh',
    ),
    3771 => 
    array (
      0 => 3772,
      1 => 222,
      2 => 'Xã Thanh Lương',
    ),
    3772 => 
    array (
      0 => 3773,
      1 => 222,
      2 => 'Xã Liên Am',
    ),
    3773 => 
    array (
      0 => 3774,
      1 => 222,
      2 => 'Xã Lý Học',
    ),
    3774 => 
    array (
      0 => 3775,
      1 => 222,
      2 => 'Xã Tam Cường',
    ),
    3775 => 
    array (
      0 => 3776,
      1 => 222,
      2 => 'Xã Hoà Bình',
    ),
    3776 => 
    array (
      0 => 3777,
      1 => 222,
      2 => 'Xã Tiền Phong',
    ),
    3777 => 
    array (
      0 => 3778,
      1 => 222,
      2 => 'Xã Vĩnh Phong',
    ),
    3778 => 
    array (
      0 => 3779,
      1 => 222,
      2 => 'Xã Cộng Hiền',
    ),
    3779 => 
    array (
      0 => 3780,
      1 => 222,
      2 => 'Xã Cao Minh',
    ),
    3780 => 
    array (
      0 => 3781,
      1 => 222,
      2 => 'Xã Cổ Am',
    ),
    3781 => 
    array (
      0 => 3782,
      1 => 222,
      2 => 'Xã Vĩnh Tiến',
    ),
    3782 => 
    array (
      0 => 3783,
      1 => 222,
      2 => 'Xã Trấn Dương',
    ),
    3783 => 
    array (
      0 => 3784,
      1 => 223,
      2 => 'Thị trấn Cát Bà',
    ),
    3784 => 
    array (
      0 => 3785,
      1 => 223,
      2 => 'Thị trấn Cát Hải',
    ),
    3785 => 
    array (
      0 => 3786,
      1 => 223,
      2 => 'Xã Nghĩa Lộ',
    ),
    3786 => 
    array (
      0 => 3787,
      1 => 223,
      2 => 'Xã Đồng Bài',
    ),
    3787 => 
    array (
      0 => 3788,
      1 => 223,
      2 => 'Xã Hoàng Châu',
    ),
    3788 => 
    array (
      0 => 3789,
      1 => 223,
      2 => 'Xã Văn Phong',
    ),
    3789 => 
    array (
      0 => 3790,
      1 => 223,
      2 => 'Xã Phù Long',
    ),
    3790 => 
    array (
      0 => 3791,
      1 => 223,
      2 => 'Xã Gia Luận',
    ),
    3791 => 
    array (
      0 => 3792,
      1 => 223,
      2 => 'Xã Hiền Hào',
    ),
    3792 => 
    array (
      0 => 3793,
      1 => 223,
      2 => 'Xã Trân Châu',
    ),
    3793 => 
    array (
      0 => 3794,
      1 => 223,
      2 => 'Xã Việt Hải',
    ),
    3794 => 
    array (
      0 => 3795,
      1 => 223,
      2 => 'Xã Xuân Đám',
    ),
    3795 => 
    array (
      0 => 3796,
      1 => 224,
      2 => '',
    ),
    3796 => 
    array (
      0 => 3797,
      1 => 225,
      2 => 'Phường Lam Sơn',
    ),
    3797 => 
    array (
      0 => 3798,
      1 => 225,
      2 => 'Phường Hiến Nam',
    ),
    3798 => 
    array (
      0 => 3799,
      1 => 225,
      2 => 'Phường An Tảo',
    ),
    3799 => 
    array (
      0 => 3800,
      1 => 225,
      2 => 'Phường Lê Lợi',
    ),
    3800 => 
    array (
      0 => 3801,
      1 => 225,
      2 => 'Phường Minh Khai',
    ),
    3801 => 
    array (
      0 => 3802,
      1 => 225,
      2 => 'Phường Quang Trung',
    ),
    3802 => 
    array (
      0 => 3803,
      1 => 225,
      2 => 'Phường Hồng Châu',
    ),
    3803 => 
    array (
      0 => 3804,
      1 => 225,
      2 => 'Xã Trung Nghĩa',
    ),
    3804 => 
    array (
      0 => 3805,
      1 => 225,
      2 => 'Xã Liên Phương',
    ),
    3805 => 
    array (
      0 => 3806,
      1 => 225,
      2 => 'Xã Hồng Nam',
    ),
    3806 => 
    array (
      0 => 3807,
      1 => 225,
      2 => 'Xã Quảng Châu',
    ),
    3807 => 
    array (
      0 => 3808,
      1 => 225,
      2 => 'Xã Bảo Khê',
    ),
    3808 => 
    array (
      0 => 3809,
      1 => 225,
      2 => 'Xã Phú Cường',
    ),
    3809 => 
    array (
      0 => 3810,
      1 => 225,
      2 => 'Xã Hùng Cường',
    ),
    3810 => 
    array (
      0 => 3811,
      1 => 225,
      2 => 'Xã Phương Chiểu',
    ),
    3811 => 
    array (
      0 => 3812,
      1 => 225,
      2 => 'Xã Tân Hưng',
    ),
    3812 => 
    array (
      0 => 3813,
      1 => 225,
      2 => 'Xã Hoàng Hanh',
    ),
    3813 => 
    array (
      0 => 3814,
      1 => 226,
      2 => 'Thị trấn Như Quỳnh',
    ),
    3814 => 
    array (
      0 => 3815,
      1 => 226,
      2 => 'Xã Lạc Đạo',
    ),
    3815 => 
    array (
      0 => 3816,
      1 => 226,
      2 => 'Xã Chỉ Đạo',
    ),
    3816 => 
    array (
      0 => 3817,
      1 => 226,
      2 => 'Xã Đại Đồng',
    ),
    3817 => 
    array (
      0 => 3818,
      1 => 226,
      2 => 'Xã Việt Hưng',
    ),
    3818 => 
    array (
      0 => 3819,
      1 => 226,
      2 => 'Xã Tân Quang',
    ),
    3819 => 
    array (
      0 => 3820,
      1 => 226,
      2 => 'Xã Đình Dù',
    ),
    3820 => 
    array (
      0 => 3821,
      1 => 226,
      2 => 'Xã Minh Hải',
    ),
    3821 => 
    array (
      0 => 3822,
      1 => 226,
      2 => 'Xã Lương Tài',
    ),
    3822 => 
    array (
      0 => 3823,
      1 => 226,
      2 => 'Xã Trưng Trắc',
    ),
    3823 => 
    array (
      0 => 3824,
      1 => 226,
      2 => 'Xã Lạc Hồng',
    ),
    3824 => 
    array (
      0 => 3825,
      1 => 227,
      2 => 'Thị trấn Văn Giang',
    ),
    3825 => 
    array (
      0 => 3826,
      1 => 227,
      2 => 'Xã Xuân Quan',
    ),
    3826 => 
    array (
      0 => 3827,
      1 => 227,
      2 => 'Xã Cửu Cao',
    ),
    3827 => 
    array (
      0 => 3828,
      1 => 227,
      2 => 'Xã Phụng Công',
    ),
    3828 => 
    array (
      0 => 3829,
      1 => 227,
      2 => 'Xã Nghĩa Trụ',
    ),
    3829 => 
    array (
      0 => 3830,
      1 => 227,
      2 => 'Xã Long Hưng',
    ),
    3830 => 
    array (
      0 => 3831,
      1 => 227,
      2 => 'Xã Vĩnh Khúc',
    ),
    3831 => 
    array (
      0 => 3832,
      1 => 227,
      2 => 'Xã Liên Nghĩa',
    ),
    3832 => 
    array (
      0 => 3833,
      1 => 227,
      2 => 'Xã Tân Tiến',
    ),
    3833 => 
    array (
      0 => 3834,
      1 => 227,
      2 => 'Xã Thắng Lợi',
    ),
    3834 => 
    array (
      0 => 3835,
      1 => 227,
      2 => 'Xã Mễ Sở',
    ),
    3835 => 
    array (
      0 => 3836,
      1 => 228,
      2 => 'Thị trấn Yên Mỹ',
    ),
    3836 => 
    array (
      0 => 3837,
      1 => 228,
      2 => 'Xã Giai Phạm',
    ),
    3837 => 
    array (
      0 => 3838,
      1 => 228,
      2 => 'Xã Nghĩa Hiệp',
    ),
    3838 => 
    array (
      0 => 3839,
      1 => 228,
      2 => 'Xã Đồng Than',
    ),
    3839 => 
    array (
      0 => 3840,
      1 => 228,
      2 => 'Xã Ngọc Long',
    ),
    3840 => 
    array (
      0 => 3841,
      1 => 228,
      2 => 'Xã Liêu Xá',
    ),
    3841 => 
    array (
      0 => 3842,
      1 => 228,
      2 => 'Xã Hoàn Long',
    ),
    3842 => 
    array (
      0 => 3843,
      1 => 228,
      2 => 'Xã Tân Lập',
    ),
    3843 => 
    array (
      0 => 3844,
      1 => 228,
      2 => 'Xã Thanh Long',
    ),
    3844 => 
    array (
      0 => 3845,
      1 => 228,
      2 => 'Xã Yên Phú',
    ),
    3845 => 
    array (
      0 => 3846,
      1 => 228,
      2 => 'Xã Việt Cường',
    ),
    3846 => 
    array (
      0 => 3847,
      1 => 228,
      2 => 'Xã Trung Hòa',
    ),
    3847 => 
    array (
      0 => 3848,
      1 => 228,
      2 => 'Xã Yên Hòa',
    ),
    3848 => 
    array (
      0 => 3849,
      1 => 228,
      2 => 'Xã Minh Châu',
    ),
    3849 => 
    array (
      0 => 3850,
      1 => 228,
      2 => 'Xã Trung Hưng',
    ),
    3850 => 
    array (
      0 => 3851,
      1 => 228,
      2 => 'Xã Lý Thường Kiệt',
    ),
    3851 => 
    array (
      0 => 3852,
      1 => 228,
      2 => 'Xã Tân Việt',
    ),
    3852 => 
    array (
      0 => 3853,
      1 => 229,
      2 => 'Phường Bần Yên Nhân',
    ),
    3853 => 
    array (
      0 => 3854,
      1 => 229,
      2 => 'Phường Phan Đình Phùng',
    ),
    3854 => 
    array (
      0 => 3855,
      1 => 229,
      2 => 'Xã Cẩm Xá',
    ),
    3855 => 
    array (
      0 => 3856,
      1 => 229,
      2 => 'Xã Dương Quang',
    ),
    3856 => 
    array (
      0 => 3857,
      1 => 229,
      2 => 'Xã Hòa Phong',
    ),
    3857 => 
    array (
      0 => 3858,
      1 => 229,
      2 => 'Phường Nhân Hòa',
    ),
    3858 => 
    array (
      0 => 3859,
      1 => 229,
      2 => 'Phường Dị Sử',
    ),
    3859 => 
    array (
      0 => 3860,
      1 => 229,
      2 => 'Phường Bạch Sam',
    ),
    3860 => 
    array (
      0 => 3861,
      1 => 229,
      2 => 'Phường Minh Đức',
    ),
    3861 => 
    array (
      0 => 3862,
      1 => 229,
      2 => 'Phường Phùng Chí Kiên',
    ),
    3862 => 
    array (
      0 => 3863,
      1 => 229,
      2 => 'Xã Xuân Dục',
    ),
    3863 => 
    array (
      0 => 3864,
      1 => 229,
      2 => 'Xã Ngọc Lâm',
    ),
    3864 => 
    array (
      0 => 3865,
      1 => 229,
      2 => 'Xã Hưng Long',
    ),
    3865 => 
    array (
      0 => 3866,
      1 => 230,
      2 => 'Thị trấn Ân Thi',
    ),
    3866 => 
    array (
      0 => 3867,
      1 => 230,
      2 => 'Xã Phù Ủng',
    ),
    3867 => 
    array (
      0 => 3868,
      1 => 230,
      2 => 'Xã Bắc Sơn',
    ),
    3868 => 
    array (
      0 => 3869,
      1 => 230,
      2 => 'Xã Bãi Sậy',
    ),
    3869 => 
    array (
      0 => 3870,
      1 => 230,
      2 => 'Xã Đào Dương',
    ),
    3870 => 
    array (
      0 => 3871,
      1 => 230,
      2 => 'Xã Tân Phúc',
    ),
    3871 => 
    array (
      0 => 3872,
      1 => 230,
      2 => 'Xã Vân Du',
    ),
    3872 => 
    array (
      0 => 3873,
      1 => 230,
      2 => 'Xã Quang Vinh',
    ),
    3873 => 
    array (
      0 => 3874,
      1 => 230,
      2 => 'Xã Xuân Trúc',
    ),
    3874 => 
    array (
      0 => 3875,
      1 => 230,
      2 => 'Xã Hoàng Hoa Thám',
    ),
    3875 => 
    array (
      0 => 3876,
      1 => 230,
      2 => 'Xã Quảng Lãng',
    ),
    3876 => 
    array (
      0 => 3877,
      1 => 230,
      2 => 'Xã Văn Nhuệ',
    ),
    3877 => 
    array (
      0 => 3878,
      1 => 230,
      2 => 'Xã Đặng Lễ',
    ),
    3878 => 
    array (
      0 => 3879,
      1 => 230,
      2 => 'Xã Cẩm Ninh',
    ),
    3879 => 
    array (
      0 => 3880,
      1 => 230,
      2 => 'Xã Nguyễn Trãi',
    ),
    3880 => 
    array (
      0 => 3881,
      1 => 230,
      2 => 'Xã Đa Lộc',
    ),
    3881 => 
    array (
      0 => 3882,
      1 => 230,
      2 => 'Xã Hồ Tùng Mậu',
    ),
    3882 => 
    array (
      0 => 3883,
      1 => 230,
      2 => 'Xã Tiền Phong',
    ),
    3883 => 
    array (
      0 => 3884,
      1 => 230,
      2 => 'Xã Hồng Vân',
    ),
    3884 => 
    array (
      0 => 3885,
      1 => 230,
      2 => 'Xã Hồng Quang',
    ),
    3885 => 
    array (
      0 => 3886,
      1 => 230,
      2 => 'Xã Hạ Lễ',
    ),
    3886 => 
    array (
      0 => 3887,
      1 => 231,
      2 => 'Thị trấn Khoái Châu',
    ),
    3887 => 
    array (
      0 => 3888,
      1 => 231,
      2 => 'Xã Đông Tảo',
    ),
    3888 => 
    array (
      0 => 3889,
      1 => 231,
      2 => 'Xã Bình Minh',
    ),
    3889 => 
    array (
      0 => 3890,
      1 => 231,
      2 => 'Xã Dạ Trạch',
    ),
    3890 => 
    array (
      0 => 3891,
      1 => 231,
      2 => 'Xã Hàm Tử',
    ),
    3891 => 
    array (
      0 => 3892,
      1 => 231,
      2 => 'Xã Ông Đình',
    ),
    3892 => 
    array (
      0 => 3893,
      1 => 231,
      2 => 'Xã Tân Dân',
    ),
    3893 => 
    array (
      0 => 3894,
      1 => 231,
      2 => 'Xã Tứ Dân',
    ),
    3894 => 
    array (
      0 => 3895,
      1 => 231,
      2 => 'Xã An Vĩ',
    ),
    3895 => 
    array (
      0 => 3896,
      1 => 231,
      2 => 'Xã Đông Kết',
    ),
    3896 => 
    array (
      0 => 3897,
      1 => 231,
      2 => 'Xã Bình Kiều',
    ),
    3897 => 
    array (
      0 => 3898,
      1 => 231,
      2 => 'Xã Dân Tiến',
    ),
    3898 => 
    array (
      0 => 3899,
      1 => 231,
      2 => 'Xã Đồng Tiến',
    ),
    3899 => 
    array (
      0 => 3900,
      1 => 231,
      2 => 'Xã Hồng Tiến',
    ),
    3900 => 
    array (
      0 => 3901,
      1 => 231,
      2 => 'Xã Tân Châu',
    ),
    3901 => 
    array (
      0 => 3902,
      1 => 231,
      2 => 'Xã Liên Khê',
    ),
    3902 => 
    array (
      0 => 3903,
      1 => 231,
      2 => 'Xã Phùng Hưng',
    ),
    3903 => 
    array (
      0 => 3904,
      1 => 231,
      2 => 'Xã Việt Hòa',
    ),
    3904 => 
    array (
      0 => 3905,
      1 => 231,
      2 => 'Xã Đông Ninh',
    ),
    3905 => 
    array (
      0 => 3906,
      1 => 231,
      2 => 'Xã Đại Tập',
    ),
    3906 => 
    array (
      0 => 3907,
      1 => 231,
      2 => 'Xã Chí Tân',
    ),
    3907 => 
    array (
      0 => 3908,
      1 => 231,
      2 => 'Xã Đại Hưng',
    ),
    3908 => 
    array (
      0 => 3909,
      1 => 231,
      2 => 'Xã Thuần Hưng',
    ),
    3909 => 
    array (
      0 => 3910,
      1 => 231,
      2 => 'Xã Thành Công',
    ),
    3910 => 
    array (
      0 => 3911,
      1 => 231,
      2 => 'Xã Nhuế Dương',
    ),
    3911 => 
    array (
      0 => 3912,
      1 => 232,
      2 => 'Thị trấn Lương Bằng',
    ),
    3912 => 
    array (
      0 => 3913,
      1 => 232,
      2 => 'Xã Nghĩa Dân',
    ),
    3913 => 
    array (
      0 => 3914,
      1 => 232,
      2 => 'Xã Toàn Thắng',
    ),
    3914 => 
    array (
      0 => 3915,
      1 => 232,
      2 => 'Xã Vĩnh Xá',
    ),
    3915 => 
    array (
      0 => 3916,
      1 => 232,
      2 => 'Xã Phạm Ngũ Lão',
    ),
    3916 => 
    array (
      0 => 3917,
      1 => 232,
      2 => 'Xã Thọ Vinh',
    ),
    3917 => 
    array (
      0 => 3918,
      1 => 232,
      2 => 'Xã Đồng Thanh',
    ),
    3918 => 
    array (
      0 => 3919,
      1 => 232,
      2 => 'Xã Song Mai',
    ),
    3919 => 
    array (
      0 => 3920,
      1 => 232,
      2 => 'Xã Chính Nghĩa',
    ),
    3920 => 
    array (
      0 => 3921,
      1 => 232,
      2 => 'Xã Nhân La',
    ),
    3921 => 
    array (
      0 => 3922,
      1 => 232,
      2 => 'Xã Phú Thịnh',
    ),
    3922 => 
    array (
      0 => 3923,
      1 => 232,
      2 => 'Xã Mai Động',
    ),
    3923 => 
    array (
      0 => 3924,
      1 => 232,
      2 => 'Xã Đức Hợp',
    ),
    3924 => 
    array (
      0 => 3925,
      1 => 232,
      2 => 'Xã Hùng An',
    ),
    3925 => 
    array (
      0 => 3926,
      1 => 232,
      2 => 'Xã Ngọc Thanh',
    ),
    3926 => 
    array (
      0 => 3927,
      1 => 232,
      2 => 'Xã Vũ Xá',
    ),
    3927 => 
    array (
      0 => 3928,
      1 => 232,
      2 => 'Xã Hiệp Cường',
    ),
    3928 => 
    array (
      0 => 3929,
      1 => 233,
      2 => 'Thị trấn Vương',
    ),
    3929 => 
    array (
      0 => 3930,
      1 => 233,
      2 => 'Xã Hưng Đạo',
    ),
    3930 => 
    array (
      0 => 3931,
      1 => 233,
      2 => 'Xã Ngô Quyền',
    ),
    3931 => 
    array (
      0 => 3932,
      1 => 233,
      2 => 'Xã Nhật Tân',
    ),
    3932 => 
    array (
      0 => 3933,
      1 => 233,
      2 => 'Xã Dị Chế',
    ),
    3933 => 
    array (
      0 => 3934,
      1 => 233,
      2 => 'Xã Lệ Xá',
    ),
    3934 => 
    array (
      0 => 3935,
      1 => 233,
      2 => 'Xã An Viên',
    ),
    3935 => 
    array (
      0 => 3936,
      1 => 233,
      2 => 'Xã Đức Thắng',
    ),
    3936 => 
    array (
      0 => 3937,
      1 => 233,
      2 => 'Xã Trung Dũng',
    ),
    3937 => 
    array (
      0 => 3938,
      1 => 233,
      2 => 'Xã Hải Triều',
    ),
    3938 => 
    array (
      0 => 3939,
      1 => 233,
      2 => 'Xã Thủ Sỹ',
    ),
    3939 => 
    array (
      0 => 3940,
      1 => 233,
      2 => 'Xã Thiện Phiến',
    ),
    3940 => 
    array (
      0 => 3941,
      1 => 233,
      2 => 'Xã Thụy Lôi',
    ),
    3941 => 
    array (
      0 => 3942,
      1 => 233,
      2 => 'Xã Cương Chính',
    ),
    3942 => 
    array (
      0 => 3943,
      1 => 233,
      2 => 'Xã Minh Phượng',
    ),
    3943 => 
    array (
      0 => 3944,
      1 => 234,
      2 => 'Thị trấn Trần Cao',
    ),
    3944 => 
    array (
      0 => 3945,
      1 => 234,
      2 => 'Xã Minh Tân',
    ),
    3945 => 
    array (
      0 => 3946,
      1 => 234,
      2 => 'Xã Phan Sào Nam',
    ),
    3946 => 
    array (
      0 => 3947,
      1 => 234,
      2 => 'Xã Quang Hưng',
    ),
    3947 => 
    array (
      0 => 3948,
      1 => 234,
      2 => 'Xã Minh Hoàng',
    ),
    3948 => 
    array (
      0 => 3949,
      1 => 234,
      2 => 'Xã Đoàn Đào',
    ),
    3949 => 
    array (
      0 => 3950,
      1 => 234,
      2 => 'Xã Tống Phan',
    ),
    3950 => 
    array (
      0 => 3951,
      1 => 234,
      2 => 'Xã Đình Cao',
    ),
    3951 => 
    array (
      0 => 3952,
      1 => 234,
      2 => 'Xã Nhật Quang',
    ),
    3952 => 
    array (
      0 => 3953,
      1 => 234,
      2 => 'Xã Tiền Tiến',
    ),
    3953 => 
    array (
      0 => 3954,
      1 => 234,
      2 => 'Xã Tam Đa',
    ),
    3954 => 
    array (
      0 => 3955,
      1 => 234,
      2 => 'Xã Minh Tiến',
    ),
    3955 => 
    array (
      0 => 3956,
      1 => 234,
      2 => 'Xã Nguyên Hòa',
    ),
    3956 => 
    array (
      0 => 3957,
      1 => 234,
      2 => 'Xã Tống Trân',
    ),
    3957 => 
    array (
      0 => 3958,
      1 => 235,
      2 => 'Phường Lê Hồng Phong',
    ),
    3958 => 
    array (
      0 => 3959,
      1 => 235,
      2 => 'Phường Bồ Xuyên',
    ),
    3959 => 
    array (
      0 => 3960,
      1 => 235,
      2 => 'Phường Đề Thám',
    ),
    3960 => 
    array (
      0 => 3961,
      1 => 235,
      2 => 'Phường Kỳ Bá',
    ),
    3961 => 
    array (
      0 => 3962,
      1 => 235,
      2 => 'Phường Quang Trung',
    ),
    3962 => 
    array (
      0 => 3963,
      1 => 235,
      2 => 'Phường Phú Khánh',
    ),
    3963 => 
    array (
      0 => 3964,
      1 => 235,
      2 => 'Phường Tiền Phong',
    ),
    3964 => 
    array (
      0 => 3965,
      1 => 235,
      2 => 'Phường Trần Hưng Đạo',
    ),
    3965 => 
    array (
      0 => 3966,
      1 => 235,
      2 => 'Phường Trần Lãm',
    ),
    3966 => 
    array (
      0 => 3967,
      1 => 235,
      2 => 'Xã Đông Hòa',
    ),
    3967 => 
    array (
      0 => 3968,
      1 => 235,
      2 => 'Phường Hoàng Diệu',
    ),
    3968 => 
    array (
      0 => 3969,
      1 => 235,
      2 => 'Xã Phú Xuân',
    ),
    3969 => 
    array (
      0 => 3970,
      1 => 235,
      2 => 'Xã Vũ Phúc',
    ),
    3970 => 
    array (
      0 => 3971,
      1 => 235,
      2 => 'Xã Vũ Chính',
    ),
    3971 => 
    array (
      0 => 3972,
      1 => 235,
      2 => 'Xã Đông Mỹ',
    ),
    3972 => 
    array (
      0 => 3973,
      1 => 235,
      2 => 'Xã Đông Thọ',
    ),
    3973 => 
    array (
      0 => 3974,
      1 => 235,
      2 => 'Xã Vũ Đông',
    ),
    3974 => 
    array (
      0 => 3975,
      1 => 235,
      2 => 'Xã Vũ Lạc',
    ),
    3975 => 
    array (
      0 => 3976,
      1 => 235,
      2 => 'Xã Tân Bình',
    ),
    3976 => 
    array (
      0 => 3977,
      1 => 236,
      2 => 'Thị trấn Quỳnh Côi',
    ),
    3977 => 
    array (
      0 => 3978,
      1 => 236,
      2 => 'Xã An Khê',
    ),
    3978 => 
    array (
      0 => 3979,
      1 => 236,
      2 => 'Xã An Đồng',
    ),
    3979 => 
    array (
      0 => 3980,
      1 => 236,
      2 => 'Xã Quỳnh Hoa',
    ),
    3980 => 
    array (
      0 => 3981,
      1 => 236,
      2 => 'Xã Quỳnh Lâm',
    ),
    3981 => 
    array (
      0 => 3982,
      1 => 236,
      2 => 'Xã Quỳnh Thọ',
    ),
    3982 => 
    array (
      0 => 3983,
      1 => 236,
      2 => 'Xã An Hiệp',
    ),
    3983 => 
    array (
      0 => 3984,
      1 => 236,
      2 => 'Xã Quỳnh Hoàng',
    ),
    3984 => 
    array (
      0 => 3985,
      1 => 236,
      2 => 'Xã Quỳnh Giao',
    ),
    3985 => 
    array (
      0 => 3986,
      1 => 236,
      2 => 'Xã An Thái',
    ),
    3986 => 
    array (
      0 => 3987,
      1 => 236,
      2 => 'Xã An Cầu',
    ),
    3987 => 
    array (
      0 => 3988,
      1 => 236,
      2 => 'Xã Quỳnh Hồng',
    ),
    3988 => 
    array (
      0 => 3989,
      1 => 236,
      2 => 'Xã Quỳnh Khê',
    ),
    3989 => 
    array (
      0 => 3990,
      1 => 236,
      2 => 'Xã Quỳnh Minh',
    ),
    3990 => 
    array (
      0 => 3991,
      1 => 236,
      2 => 'Xã An Ninh',
    ),
    3991 => 
    array (
      0 => 3992,
      1 => 236,
      2 => 'Xã Quỳnh Ngọc',
    ),
    3992 => 
    array (
      0 => 3993,
      1 => 236,
      2 => 'Xã Quỳnh Hải',
    ),
    3993 => 
    array (
      0 => 3994,
      1 => 236,
      2 => 'Thị trấn An Bài',
    ),
    3994 => 
    array (
      0 => 3995,
      1 => 236,
      2 => 'Xã An Ấp',
    ),
    3995 => 
    array (
      0 => 3996,
      1 => 236,
      2 => 'Xã Quỳnh Hội',
    ),
    3996 => 
    array (
      0 => 3997,
      1 => 236,
      2 => 'Xã Châu Sơn',
    ),
    3997 => 
    array (
      0 => 3998,
      1 => 236,
      2 => 'Xã Quỳnh Mỹ',
    ),
    3998 => 
    array (
      0 => 3999,
      1 => 236,
      2 => 'Xã An Quí',
    ),
    3999 => 
    array (
      0 => 4000,
      1 => 236,
      2 => 'Xã An Thanh',
    ),
    4000 => 
    array (
      0 => 4001,
      1 => 236,
      2 => 'Xã An Vũ',
    ),
    4001 => 
    array (
      0 => 4002,
      1 => 236,
      2 => 'Xã An Lễ',
    ),
    4002 => 
    array (
      0 => 4003,
      1 => 236,
      2 => 'Xã Quỳnh Hưng',
    ),
    4003 => 
    array (
      0 => 4004,
      1 => 236,
      2 => 'Xã Quỳnh Bảo',
    ),
    4004 => 
    array (
      0 => 4005,
      1 => 236,
      2 => 'Xã An Mỹ',
    ),
    4005 => 
    array (
      0 => 4006,
      1 => 236,
      2 => 'Xã Quỳnh Nguyên',
    ),
    4006 => 
    array (
      0 => 4007,
      1 => 236,
      2 => 'Xã An Vinh',
    ),
    4007 => 
    array (
      0 => 4008,
      1 => 236,
      2 => 'Xã Quỳnh Xá',
    ),
    4008 => 
    array (
      0 => 4009,
      1 => 236,
      2 => 'Xã An Dục',
    ),
    4009 => 
    array (
      0 => 4010,
      1 => 236,
      2 => 'Xã Đông Hải',
    ),
    4010 => 
    array (
      0 => 4011,
      1 => 236,
      2 => 'Xã Quỳnh Trang',
    ),
    4011 => 
    array (
      0 => 4012,
      1 => 236,
      2 => 'Xã An Tràng',
    ),
    4012 => 
    array (
      0 => 4013,
      1 => 236,
      2 => 'Xã Đồng Tiến',
    ),
    4013 => 
    array (
      0 => 4014,
      1 => 237,
      2 => 'Thị trấn Hưng Hà',
    ),
    4014 => 
    array (
      0 => 4015,
      1 => 237,
      2 => 'Xã Điệp Nông',
    ),
    4015 => 
    array (
      0 => 4016,
      1 => 237,
      2 => 'Xã Tân Lễ',
    ),
    4016 => 
    array (
      0 => 4017,
      1 => 237,
      2 => 'Xã Cộng Hòa',
    ),
    4017 => 
    array (
      0 => 4018,
      1 => 237,
      2 => 'Xã Dân Chủ',
    ),
    4018 => 
    array (
      0 => 4019,
      1 => 237,
      2 => 'Xã Canh Tân',
    ),
    4019 => 
    array (
      0 => 4020,
      1 => 237,
      2 => 'Xã Hòa Tiến',
    ),
    4020 => 
    array (
      0 => 4021,
      1 => 237,
      2 => 'Xã Hùng Dũng',
    ),
    4021 => 
    array (
      0 => 4022,
      1 => 237,
      2 => 'Xã Tân Tiến',
    ),
    4022 => 
    array (
      0 => 4023,
      1 => 237,
      2 => 'Thị trấn Hưng Nhân',
    ),
    4023 => 
    array (
      0 => 4024,
      1 => 237,
      2 => 'Xã Đoan Hùng',
    ),
    4024 => 
    array (
      0 => 4025,
      1 => 237,
      2 => 'Xã Duyên Hải',
    ),
    4025 => 
    array (
      0 => 4026,
      1 => 237,
      2 => 'Xã Tân Hòa',
    ),
    4026 => 
    array (
      0 => 4027,
      1 => 237,
      2 => 'Xã Văn Cẩm',
    ),
    4027 => 
    array (
      0 => 4028,
      1 => 237,
      2 => 'Xã Bắc Sơn',
    ),
    4028 => 
    array (
      0 => 4029,
      1 => 237,
      2 => 'Xã Đông Đô',
    ),
    4029 => 
    array (
      0 => 4030,
      1 => 237,
      2 => 'Xã Phúc Khánh',
    ),
    4030 => 
    array (
      0 => 4031,
      1 => 237,
      2 => 'Xã Liên Hiệp',
    ),
    4031 => 
    array (
      0 => 4032,
      1 => 237,
      2 => 'Xã Tây Đô',
    ),
    4032 => 
    array (
      0 => 4033,
      1 => 237,
      2 => 'Xã Thống Nhất',
    ),
    4033 => 
    array (
      0 => 4034,
      1 => 237,
      2 => 'Xã Tiến Đức',
    ),
    4034 => 
    array (
      0 => 4035,
      1 => 237,
      2 => 'Xã Thái Hưng',
    ),
    4035 => 
    array (
      0 => 4036,
      1 => 237,
      2 => 'Xã Thái Phương',
    ),
    4036 => 
    array (
      0 => 4037,
      1 => 237,
      2 => 'Xã Hòa Bình',
    ),
    4037 => 
    array (
      0 => 4038,
      1 => 237,
      2 => 'Xã Chi Lăng',
    ),
    4038 => 
    array (
      0 => 4039,
      1 => 237,
      2 => 'Xã Minh Khai',
    ),
    4039 => 
    array (
      0 => 4040,
      1 => 237,
      2 => 'Xã Hồng An',
    ),
    4040 => 
    array (
      0 => 4041,
      1 => 237,
      2 => 'Xã Kim Chung',
    ),
    4041 => 
    array (
      0 => 4042,
      1 => 237,
      2 => 'Xã Hồng Lĩnh',
    ),
    4042 => 
    array (
      0 => 4043,
      1 => 237,
      2 => 'Xã Minh Tân',
    ),
    4043 => 
    array (
      0 => 4044,
      1 => 237,
      2 => 'Xã Văn Lang',
    ),
    4044 => 
    array (
      0 => 4045,
      1 => 237,
      2 => 'Xã Độc Lập',
    ),
    4045 => 
    array (
      0 => 4046,
      1 => 237,
      2 => 'Xã Chí Hòa',
    ),
    4046 => 
    array (
      0 => 4047,
      1 => 237,
      2 => 'Xã Minh Hòa',
    ),
    4047 => 
    array (
      0 => 4048,
      1 => 237,
      2 => 'Xã Hồng Minh',
    ),
    4048 => 
    array (
      0 => 4049,
      1 => 238,
      2 => 'Thị trấn Đông Hưng',
    ),
    4049 => 
    array (
      0 => 4050,
      1 => 238,
      2 => 'Xã Đô Lương',
    ),
    4050 => 
    array (
      0 => 4051,
      1 => 238,
      2 => 'Xã Đông Phương',
    ),
    4051 => 
    array (
      0 => 4052,
      1 => 238,
      2 => 'Xã Liên Giang',
    ),
    4052 => 
    array (
      0 => 4053,
      1 => 238,
      2 => 'Xã An Châu',
    ),
    4053 => 
    array (
      0 => 4054,
      1 => 238,
      2 => 'Xã Đông Sơn',
    ),
    4054 => 
    array (
      0 => 4055,
      1 => 238,
      2 => 'Xã Đông Cường',
    ),
    4055 => 
    array (
      0 => 4056,
      1 => 238,
      2 => 'Xã Phú Lương',
    ),
    4056 => 
    array (
      0 => 4057,
      1 => 238,
      2 => 'Xã Mê Linh',
    ),
    4057 => 
    array (
      0 => 4058,
      1 => 238,
      2 => 'Xã Lô Giang',
    ),
    4058 => 
    array (
      0 => 4059,
      1 => 238,
      2 => 'Xã Đông La',
    ),
    4059 => 
    array (
      0 => 4060,
      1 => 238,
      2 => 'Xã Minh Tân',
    ),
    4060 => 
    array (
      0 => 4061,
      1 => 238,
      2 => 'Xã Đông Xá',
    ),
    4061 => 
    array (
      0 => 4062,
      1 => 238,
      2 => 'Xã Chương Dương',
    ),
    4062 => 
    array (
      0 => 4063,
      1 => 238,
      2 => 'Xã Nguyên Xá',
    ),
    4063 => 
    array (
      0 => 4064,
      1 => 238,
      2 => 'Xã Phong Châu',
    ),
    4064 => 
    array (
      0 => 4065,
      1 => 238,
      2 => 'Xã Hợp Tiến',
    ),
    4065 => 
    array (
      0 => 4066,
      1 => 238,
      2 => 'Xã Hồng Việt',
    ),
    4066 => 
    array (
      0 => 4067,
      1 => 238,
      2 => 'Xã Hà Giang',
    ),
    4067 => 
    array (
      0 => 4068,
      1 => 238,
      2 => 'Xã Đông Kinh',
    ),
    4068 => 
    array (
      0 => 4069,
      1 => 238,
      2 => 'Xã Đông Hợp',
    ),
    4069 => 
    array (
      0 => 4070,
      1 => 238,
      2 => 'Xã Thăng Long',
    ),
    4070 => 
    array (
      0 => 4071,
      1 => 238,
      2 => 'Xã Đông Các',
    ),
    4071 => 
    array (
      0 => 4072,
      1 => 238,
      2 => 'Xã Phú Châu',
    ),
    4072 => 
    array (
      0 => 4073,
      1 => 238,
      2 => 'Xã Liên Hoa',
    ),
    4073 => 
    array (
      0 => 4074,
      1 => 238,
      2 => 'Xã Đông Tân',
    ),
    4074 => 
    array (
      0 => 4075,
      1 => 238,
      2 => 'Xã Đông Vinh',
    ),
    4075 => 
    array (
      0 => 4076,
      1 => 238,
      2 => 'Xã Đông Động',
    ),
    4076 => 
    array (
      0 => 4077,
      1 => 238,
      2 => 'Xã Hồng Bạch',
    ),
    4077 => 
    array (
      0 => 4078,
      1 => 238,
      2 => 'Xã Trọng Quan',
    ),
    4078 => 
    array (
      0 => 4079,
      1 => 238,
      2 => 'Xã Hồng Giang',
    ),
    4079 => 
    array (
      0 => 4080,
      1 => 238,
      2 => 'Xã Đông Quan',
    ),
    4080 => 
    array (
      0 => 4081,
      1 => 238,
      2 => 'Xã Đông Quang',
    ),
    4081 => 
    array (
      0 => 4082,
      1 => 238,
      2 => 'Xã Đông Xuân',
    ),
    4082 => 
    array (
      0 => 4083,
      1 => 238,
      2 => 'Xã Đông Á',
    ),
    4083 => 
    array (
      0 => 4084,
      1 => 238,
      2 => 'Xã Đông Hoàng',
    ),
    4084 => 
    array (
      0 => 4085,
      1 => 238,
      2 => 'Xã Đông Dương',
    ),
    4085 => 
    array (
      0 => 4086,
      1 => 238,
      2 => 'Xã Minh Phú',
    ),
    4086 => 
    array (
      0 => 4087,
      1 => 239,
      2 => 'Thị trấn Diêm Điền',
    ),
    4087 => 
    array (
      0 => 4088,
      1 => 239,
      2 => 'Xã Thụy Trường',
    ),
    4088 => 
    array (
      0 => 4089,
      1 => 239,
      2 => 'Xã Hồng Dũng',
    ),
    4089 => 
    array (
      0 => 4090,
      1 => 239,
      2 => 'Xã Thụy Quỳnh',
    ),
    4090 => 
    array (
      0 => 4091,
      1 => 239,
      2 => 'Xã An Tân',
    ),
    4091 => 
    array (
      0 => 4092,
      1 => 239,
      2 => 'Xã Thụy Ninh',
    ),
    4092 => 
    array (
      0 => 4093,
      1 => 239,
      2 => 'Xã Thụy Hưng',
    ),
    4093 => 
    array (
      0 => 4094,
      1 => 239,
      2 => 'Xã Thụy Việt',
    ),
    4094 => 
    array (
      0 => 4095,
      1 => 239,
      2 => 'Xã Thụy Văn',
    ),
    4095 => 
    array (
      0 => 4096,
      1 => 239,
      2 => 'Xã Thụy Xuân',
    ),
    4096 => 
    array (
      0 => 4097,
      1 => 239,
      2 => 'Xã Dương Phúc',
    ),
    4097 => 
    array (
      0 => 4098,
      1 => 239,
      2 => 'Xã Thụy Trình',
    ),
    4098 => 
    array (
      0 => 4099,
      1 => 239,
      2 => 'Xã Thụy Bình',
    ),
    4099 => 
    array (
      0 => 4100,
      1 => 239,
      2 => 'Xã Thụy Chính',
    ),
    4100 => 
    array (
      0 => 4101,
      1 => 239,
      2 => 'Xã Thụy Dân',
    ),
    4101 => 
    array (
      0 => 4102,
      1 => 239,
      2 => 'Xã Thụy Hải',
    ),
    4102 => 
    array (
      0 => 4103,
      1 => 239,
      2 => 'Xã Thụy Liên',
    ),
    4103 => 
    array (
      0 => 4104,
      1 => 239,
      2 => 'Xã Thụy Duyên',
    ),
    4104 => 
    array (
      0 => 4105,
      1 => 239,
      2 => 'Xã Thụy Thanh',
    ),
    4105 => 
    array (
      0 => 4106,
      1 => 239,
      2 => 'Xã Thụy Sơn',
    ),
    4106 => 
    array (
      0 => 4107,
      1 => 239,
      2 => 'Xã Thụy Phong',
    ),
    4107 => 
    array (
      0 => 4108,
      1 => 239,
      2 => 'Xã Thái Thượng',
    ),
    4108 => 
    array (
      0 => 4109,
      1 => 239,
      2 => 'Xã Thái Nguyên',
    ),
    4109 => 
    array (
      0 => 4110,
      1 => 239,
      2 => 'Xã Dương Hồng  Thủy',
    ),
    4110 => 
    array (
      0 => 4111,
      1 => 239,
      2 => 'Xã Thái Giang',
    ),
    4111 => 
    array (
      0 => 4112,
      1 => 239,
      2 => 'Xã Hòa An',
    ),
    4112 => 
    array (
      0 => 4113,
      1 => 239,
      2 => 'Xã Sơn Hà',
    ),
    4113 => 
    array (
      0 => 4114,
      1 => 239,
      2 => 'Xã Thái Phúc',
    ),
    4114 => 
    array (
      0 => 4115,
      1 => 239,
      2 => 'Xã Thái Hưng',
    ),
    4115 => 
    array (
      0 => 4116,
      1 => 239,
      2 => 'Xã Thái Đô',
    ),
    4116 => 
    array (
      0 => 4117,
      1 => 239,
      2 => 'Xã Thái Xuyên',
    ),
    4117 => 
    array (
      0 => 4118,
      1 => 239,
      2 => 'Xã  Mỹ Lộc',
    ),
    4118 => 
    array (
      0 => 4119,
      1 => 239,
      2 => 'Xã Tân Học',
    ),
    4119 => 
    array (
      0 => 4120,
      1 => 239,
      2 => 'Xã Thái Thịnh',
    ),
    4120 => 
    array (
      0 => 4121,
      1 => 239,
      2 => 'Xã Thuần Thành',
    ),
    4121 => 
    array (
      0 => 4122,
      1 => 239,
      2 => 'Xã Thái Thọ',
    ),
    4122 => 
    array (
      0 => 4123,
      1 => 240,
      2 => 'Thị trấn Tiền Hải',
    ),
    4123 => 
    array (
      0 => 4124,
      1 => 240,
      2 => 'Xã Đông Trà',
    ),
    4124 => 
    array (
      0 => 4125,
      1 => 240,
      2 => 'Xã Đông Long',
    ),
    4125 => 
    array (
      0 => 4126,
      1 => 240,
      2 => 'Xã Đông Quí',
    ),
    4126 => 
    array (
      0 => 4127,
      1 => 240,
      2 => 'Xã Vũ Lăng',
    ),
    4127 => 
    array (
      0 => 4128,
      1 => 240,
      2 => 'Xã Đông Xuyên',
    ),
    4128 => 
    array (
      0 => 4129,
      1 => 240,
      2 => 'Xã Tây Lương',
    ),
    4129 => 
    array (
      0 => 4130,
      1 => 240,
      2 => 'Xã Tây Ninh',
    ),
    4130 => 
    array (
      0 => 4131,
      1 => 240,
      2 => 'Xã Đông Trung',
    ),
    4131 => 
    array (
      0 => 4132,
      1 => 240,
      2 => 'Xã Đông Hoàng',
    ),
    4132 => 
    array (
      0 => 4133,
      1 => 240,
      2 => 'Xã Đông Minh',
    ),
    4133 => 
    array (
      0 => 4134,
      1 => 240,
      2 => 'Xã Đông Phong',
    ),
    4134 => 
    array (
      0 => 4135,
      1 => 240,
      2 => 'Xã An Ninh',
    ),
    4135 => 
    array (
      0 => 4136,
      1 => 240,
      2 => 'Xã Đông Cơ',
    ),
    4136 => 
    array (
      0 => 4137,
      1 => 240,
      2 => 'Xã Tây Giang',
    ),
    4137 => 
    array (
      0 => 4138,
      1 => 240,
      2 => 'Xã Đông Lâm',
    ),
    4138 => 
    array (
      0 => 4139,
      1 => 240,
      2 => 'Xã Phương Công',
    ),
    4139 => 
    array (
      0 => 4140,
      1 => 240,
      2 => 'Xã Tây Phong',
    ),
    4140 => 
    array (
      0 => 4141,
      1 => 240,
      2 => 'Xã Tây Tiến',
    ),
    4141 => 
    array (
      0 => 4142,
      1 => 240,
      2 => 'Xã Nam Cường',
    ),
    4142 => 
    array (
      0 => 4143,
      1 => 240,
      2 => 'Xã Vân Trường',
    ),
    4143 => 
    array (
      0 => 4144,
      1 => 240,
      2 => 'Xã Nam Thắng',
    ),
    4144 => 
    array (
      0 => 4145,
      1 => 240,
      2 => 'Xã Nam Chính',
    ),
    4145 => 
    array (
      0 => 4146,
      1 => 240,
      2 => 'Xã Bắc Hải',
    ),
    4146 => 
    array (
      0 => 4147,
      1 => 240,
      2 => 'Xã Nam Thịnh',
    ),
    4147 => 
    array (
      0 => 4148,
      1 => 240,
      2 => 'Xã Nam Hà',
    ),
    4148 => 
    array (
      0 => 4149,
      1 => 240,
      2 => 'Xã Nam Thanh',
    ),
    4149 => 
    array (
      0 => 4150,
      1 => 240,
      2 => 'Xã Nam Trung',
    ),
    4150 => 
    array (
      0 => 4151,
      1 => 240,
      2 => 'Xã Nam Hồng',
    ),
    4151 => 
    array (
      0 => 4152,
      1 => 240,
      2 => 'Xã Nam Hưng',
    ),
    4152 => 
    array (
      0 => 4153,
      1 => 240,
      2 => 'Xã Nam Hải',
    ),
    4153 => 
    array (
      0 => 4154,
      1 => 240,
      2 => 'Xã Nam Phú',
    ),
    4154 => 
    array (
      0 => 4155,
      1 => 241,
      2 => 'Thị trấn Kiến Xương',
    ),
    4155 => 
    array (
      0 => 4156,
      1 => 241,
      2 => 'Xã Trà Giang',
    ),
    4156 => 
    array (
      0 => 4157,
      1 => 241,
      2 => 'Xã Quốc Tuấn',
    ),
    4157 => 
    array (
      0 => 4158,
      1 => 241,
      2 => 'Xã An Bình',
    ),
    4158 => 
    array (
      0 => 4159,
      1 => 241,
      2 => 'Xã Tây Sơn',
    ),
    4159 => 
    array (
      0 => 4160,
      1 => 241,
      2 => 'Xã Hồng Thái',
    ),
    4160 => 
    array (
      0 => 4161,
      1 => 241,
      2 => 'Xã Bình Nguyên',
    ),
    4161 => 
    array (
      0 => 4162,
      1 => 241,
      2 => 'Xã Lê Lợi',
    ),
    4162 => 
    array (
      0 => 4163,
      1 => 241,
      2 => 'Xã Vũ Lễ',
    ),
    4163 => 
    array (
      0 => 4164,
      1 => 241,
      2 => 'Xã Thanh Tân',
    ),
    4164 => 
    array (
      0 => 4165,
      1 => 241,
      2 => 'Xã Thượng Hiền',
    ),
    4165 => 
    array (
      0 => 4166,
      1 => 241,
      2 => 'Xã Nam Cao',
    ),
    4166 => 
    array (
      0 => 4167,
      1 => 241,
      2 => 'Xã Đình Phùng',
    ),
    4167 => 
    array (
      0 => 4168,
      1 => 241,
      2 => 'Xã Vũ Ninh',
    ),
    4168 => 
    array (
      0 => 4169,
      1 => 241,
      2 => 'Xã Vũ An',
    ),
    4169 => 
    array (
      0 => 4170,
      1 => 241,
      2 => 'Xã Quang Lịch',
    ),
    4170 => 
    array (
      0 => 4171,
      1 => 241,
      2 => 'Xã Hòa Bình',
    ),
    4171 => 
    array (
      0 => 4172,
      1 => 241,
      2 => 'Xã Bình Minh',
    ),
    4172 => 
    array (
      0 => 4173,
      1 => 241,
      2 => 'Xã Vũ Quí',
    ),
    4173 => 
    array (
      0 => 4174,
      1 => 241,
      2 => 'Xã Quang Bình',
    ),
    4174 => 
    array (
      0 => 4175,
      1 => 241,
      2 => 'Xã Vũ Trung',
    ),
    4175 => 
    array (
      0 => 4176,
      1 => 241,
      2 => 'Xã Vũ Thắng',
    ),
    4176 => 
    array (
      0 => 4177,
      1 => 241,
      2 => 'Xã Vũ Công',
    ),
    4177 => 
    array (
      0 => 4178,
      1 => 241,
      2 => 'Xã Vũ Hòa',
    ),
    4178 => 
    array (
      0 => 4179,
      1 => 241,
      2 => 'Xã Quang Minh',
    ),
    4179 => 
    array (
      0 => 4180,
      1 => 241,
      2 => 'Xã Quang Trung',
    ),
    4180 => 
    array (
      0 => 4181,
      1 => 241,
      2 => 'Xã Minh Quang',
    ),
    4181 => 
    array (
      0 => 4182,
      1 => 241,
      2 => 'Xã Vũ Bình',
    ),
    4182 => 
    array (
      0 => 4183,
      1 => 241,
      2 => 'Xã Minh Tân',
    ),
    4183 => 
    array (
      0 => 4184,
      1 => 241,
      2 => 'Xã Nam Bình',
    ),
    4184 => 
    array (
      0 => 4185,
      1 => 241,
      2 => 'Xã Bình Thanh',
    ),
    4185 => 
    array (
      0 => 4186,
      1 => 241,
      2 => 'Xã Bình Định',
    ),
    4186 => 
    array (
      0 => 4187,
      1 => 241,
      2 => 'Xã Hồng Tiến',
    ),
    4187 => 
    array (
      0 => 4188,
      1 => 242,
      2 => 'Thị trấn Vũ Thư',
    ),
    4188 => 
    array (
      0 => 4189,
      1 => 242,
      2 => 'Xã Hồng Lý',
    ),
    4189 => 
    array (
      0 => 4190,
      1 => 242,
      2 => 'Xã Đồng Thanh',
    ),
    4190 => 
    array (
      0 => 4191,
      1 => 242,
      2 => 'Xã Xuân Hòa',
    ),
    4191 => 
    array (
      0 => 4192,
      1 => 242,
      2 => 'Xã Hiệp Hòa',
    ),
    4192 => 
    array (
      0 => 4193,
      1 => 242,
      2 => 'Xã Phúc Thành',
    ),
    4193 => 
    array (
      0 => 4194,
      1 => 242,
      2 => 'Xã Tân Phong',
    ),
    4194 => 
    array (
      0 => 4195,
      1 => 242,
      2 => 'Xã Song Lãng',
    ),
    4195 => 
    array (
      0 => 4196,
      1 => 242,
      2 => 'Xã Tân Hòa',
    ),
    4196 => 
    array (
      0 => 4197,
      1 => 242,
      2 => 'Xã Việt Hùng',
    ),
    4197 => 
    array (
      0 => 4198,
      1 => 242,
      2 => 'Xã Minh Lãng',
    ),
    4198 => 
    array (
      0 => 4199,
      1 => 242,
      2 => 'Xã Minh Khai',
    ),
    4199 => 
    array (
      0 => 4200,
      1 => 242,
      2 => 'Xã Dũng Nghĩa',
    ),
    4200 => 
    array (
      0 => 4201,
      1 => 242,
      2 => 'Xã Minh Quang',
    ),
    4201 => 
    array (
      0 => 4202,
      1 => 242,
      2 => 'Xã Tam Quang',
    ),
    4202 => 
    array (
      0 => 4203,
      1 => 242,
      2 => 'Xã Tân Lập',
    ),
    4203 => 
    array (
      0 => 4204,
      1 => 242,
      2 => 'Xã Bách Thuận',
    ),
    4204 => 
    array (
      0 => 4205,
      1 => 242,
      2 => 'Xã Tự Tân',
    ),
    4205 => 
    array (
      0 => 4206,
      1 => 242,
      2 => 'Xã Song An',
    ),
    4206 => 
    array (
      0 => 4207,
      1 => 242,
      2 => 'Xã Trung An',
    ),
    4207 => 
    array (
      0 => 4208,
      1 => 242,
      2 => 'Xã Vũ Hội',
    ),
    4208 => 
    array (
      0 => 4209,
      1 => 242,
      2 => 'Xã Hòa Bình',
    ),
    4209 => 
    array (
      0 => 4210,
      1 => 242,
      2 => 'Xã Nguyên Xá',
    ),
    4210 => 
    array (
      0 => 4211,
      1 => 242,
      2 => 'Xã Việt Thuận',
    ),
    4211 => 
    array (
      0 => 4212,
      1 => 242,
      2 => 'Xã Vũ Vinh',
    ),
    4212 => 
    array (
      0 => 4213,
      1 => 242,
      2 => 'Xã Vũ Đoài',
    ),
    4213 => 
    array (
      0 => 4214,
      1 => 242,
      2 => 'Xã Vũ Tiến',
    ),
    4214 => 
    array (
      0 => 4215,
      1 => 242,
      2 => 'Xã Vũ Vân',
    ),
    4215 => 
    array (
      0 => 4216,
      1 => 242,
      2 => 'Xã Duy Nhất',
    ),
    4216 => 
    array (
      0 => 4217,
      1 => 242,
      2 => 'Xã Hồng Phong',
    ),
    4217 => 
    array (
      0 => 4218,
      1 => 243,
      2 => 'Phường Quang Trung',
    ),
    4218 => 
    array (
      0 => 4219,
      1 => 243,
      2 => 'Phường Lương Khánh Thiện',
    ),
    4219 => 
    array (
      0 => 4220,
      1 => 243,
      2 => 'Phường Lê Hồng Phong',
    ),
    4220 => 
    array (
      0 => 4221,
      1 => 243,
      2 => 'Phường Minh Khai',
    ),
    4221 => 
    array (
      0 => 4222,
      1 => 243,
      2 => 'Phường Hai Bà Trưng',
    ),
    4222 => 
    array (
      0 => 4223,
      1 => 243,
      2 => 'Phường Trần Hưng Đạo',
    ),
    4223 => 
    array (
      0 => 4224,
      1 => 243,
      2 => 'Phường Lam Hạ',
    ),
    4224 => 
    array (
      0 => 4225,
      1 => 243,
      2 => 'Xã Phù Vân',
    ),
    4225 => 
    array (
      0 => 4226,
      1 => 243,
      2 => 'Phường Liêm Chính',
    ),
    4226 => 
    array (
      0 => 4227,
      1 => 243,
      2 => 'Xã Liêm Chung',
    ),
    4227 => 
    array (
      0 => 4228,
      1 => 243,
      2 => 'Phường Thanh Châu',
    ),
    4228 => 
    array (
      0 => 4229,
      1 => 243,
      2 => 'Phường Châu Sơn',
    ),
    4229 => 
    array (
      0 => 4230,
      1 => 243,
      2 => 'Xã Tiên Tân',
    ),
    4230 => 
    array (
      0 => 4231,
      1 => 243,
      2 => 'Xã Tiên Hiệp',
    ),
    4231 => 
    array (
      0 => 4232,
      1 => 243,
      2 => 'Xã Tiên Hải',
    ),
    4232 => 
    array (
      0 => 4233,
      1 => 243,
      2 => 'Xã Kim Bình',
    ),
    4233 => 
    array (
      0 => 4234,
      1 => 243,
      2 => 'Xã Liêm Tuyền',
    ),
    4234 => 
    array (
      0 => 4235,
      1 => 243,
      2 => 'Xã Liêm Tiết',
    ),
    4235 => 
    array (
      0 => 4236,
      1 => 243,
      2 => 'Phường Thanh Tuyền',
    ),
    4236 => 
    array (
      0 => 4237,
      1 => 243,
      2 => 'Xã Đinh Xá',
    ),
    4237 => 
    array (
      0 => 4238,
      1 => 243,
      2 => 'Xã Trịnh Xá',
    ),
    4238 => 
    array (
      0 => 4239,
      1 => 244,
      2 => 'Phường Đồng Văn',
    ),
    4239 => 
    array (
      0 => 4240,
      1 => 244,
      2 => 'Phường Hòa Mạc',
    ),
    4240 => 
    array (
      0 => 4241,
      1 => 244,
      2 => 'Xã Mộc Bắc',
    ),
    4241 => 
    array (
      0 => 4242,
      1 => 244,
      2 => 'Phường Châu Giang',
    ),
    4242 => 
    array (
      0 => 4243,
      1 => 244,
      2 => 'Phường Bạch Thượng',
    ),
    4243 => 
    array (
      0 => 4244,
      1 => 244,
      2 => 'Phường Duy Minh',
    ),
    4244 => 
    array (
      0 => 4245,
      1 => 244,
      2 => 'Xã Mộc Nam',
    ),
    4245 => 
    array (
      0 => 4246,
      1 => 244,
      2 => 'Phường Duy Hải',
    ),
    4246 => 
    array (
      0 => 4247,
      1 => 244,
      2 => 'Xã Chuyên Ngoại',
    ),
    4247 => 
    array (
      0 => 4248,
      1 => 244,
      2 => 'Phường Yên Bắc',
    ),
    4248 => 
    array (
      0 => 4249,
      1 => 244,
      2 => 'Xã Trác Văn',
    ),
    4249 => 
    array (
      0 => 4250,
      1 => 244,
      2 => 'Phường Tiên Nội',
    ),
    4250 => 
    array (
      0 => 4251,
      1 => 244,
      2 => 'Phường Hoàng Đông',
    ),
    4251 => 
    array (
      0 => 4252,
      1 => 244,
      2 => 'Xã Yên Nam',
    ),
    4252 => 
    array (
      0 => 4253,
      1 => 244,
      2 => 'Xã Tiên Ngoại',
    ),
    4253 => 
    array (
      0 => 4254,
      1 => 244,
      2 => 'Xã Tiên Sơn',
    ),
    4254 => 
    array (
      0 => 4255,
      1 => 245,
      2 => 'Thị trấn Quế',
    ),
    4255 => 
    array (
      0 => 4256,
      1 => 245,
      2 => 'Xã Nguyễn Úy',
    ),
    4256 => 
    array (
      0 => 4257,
      1 => 245,
      2 => 'Xã Đại Cương',
    ),
    4257 => 
    array (
      0 => 4258,
      1 => 245,
      2 => 'Xã Lê Hồ',
    ),
    4258 => 
    array (
      0 => 4259,
      1 => 245,
      2 => 'Xã Tượng Lĩnh',
    ),
    4259 => 
    array (
      0 => 4260,
      1 => 245,
      2 => 'Xã Nhật Tựu',
    ),
    4260 => 
    array (
      0 => 4261,
      1 => 245,
      2 => 'Xã Nhật Tân',
    ),
    4261 => 
    array (
      0 => 4262,
      1 => 245,
      2 => 'Xã Đồng Hóa',
    ),
    4262 => 
    array (
      0 => 4263,
      1 => 245,
      2 => 'Xã Hoàng Tây',
    ),
    4263 => 
    array (
      0 => 4264,
      1 => 245,
      2 => 'Xã Tân Sơn',
    ),
    4264 => 
    array (
      0 => 4265,
      1 => 245,
      2 => 'Xã Thụy Lôi',
    ),
    4265 => 
    array (
      0 => 4266,
      1 => 245,
      2 => 'Xã Văn Xá',
    ),
    4266 => 
    array (
      0 => 4267,
      1 => 245,
      2 => 'Xã Khả Phong',
    ),
    4267 => 
    array (
      0 => 4268,
      1 => 245,
      2 => 'Xã Ngọc Sơn',
    ),
    4268 => 
    array (
      0 => 4269,
      1 => 245,
      2 => 'Thị trấn Ba Sao',
    ),
    4269 => 
    array (
      0 => 4270,
      1 => 245,
      2 => 'Xã Liên Sơn',
    ),
    4270 => 
    array (
      0 => 4271,
      1 => 245,
      2 => 'Xã Thi Sơn',
    ),
    4271 => 
    array (
      0 => 4272,
      1 => 245,
      2 => 'Xã Thanh Sơn',
    ),
    4272 => 
    array (
      0 => 4273,
      1 => 246,
      2 => 'Thị trấn Kiện Khê',
    ),
    4273 => 
    array (
      0 => 4274,
      1 => 246,
      2 => 'Xã Liêm Phong',
    ),
    4274 => 
    array (
      0 => 4275,
      1 => 246,
      2 => 'Xã Thanh Hà',
    ),
    4275 => 
    array (
      0 => 4276,
      1 => 246,
      2 => 'Xã Liêm Cần',
    ),
    4276 => 
    array (
      0 => 4277,
      1 => 246,
      2 => 'Xã Liêm Thuận',
    ),
    4277 => 
    array (
      0 => 4278,
      1 => 246,
      2 => 'Xã Thanh Thủy',
    ),
    4278 => 
    array (
      0 => 4279,
      1 => 246,
      2 => 'Xã Thanh Phong',
    ),
    4279 => 
    array (
      0 => 4280,
      1 => 246,
      2 => 'Thị trấn Tân Thanh',
    ),
    4280 => 
    array (
      0 => 4281,
      1 => 246,
      2 => 'Xã Thanh Tân',
    ),
    4281 => 
    array (
      0 => 4282,
      1 => 246,
      2 => 'Xã Liêm Túc',
    ),
    4282 => 
    array (
      0 => 4283,
      1 => 246,
      2 => 'Xã Liêm Sơn',
    ),
    4283 => 
    array (
      0 => 4284,
      1 => 246,
      2 => 'Xã Thanh Hương',
    ),
    4284 => 
    array (
      0 => 4285,
      1 => 246,
      2 => 'Xã Thanh Nghị',
    ),
    4285 => 
    array (
      0 => 4286,
      1 => 246,
      2 => 'Xã Thanh Tâm',
    ),
    4286 => 
    array (
      0 => 4287,
      1 => 246,
      2 => 'Xã Thanh Nguyên',
    ),
    4287 => 
    array (
      0 => 4288,
      1 => 246,
      2 => 'Xã Thanh Hải',
    ),
    4288 => 
    array (
      0 => 4289,
      1 => 247,
      2 => 'Thị trấn Bình Mỹ',
    ),
    4289 => 
    array (
      0 => 4290,
      1 => 247,
      2 => 'Xã Bình Nghĩa',
    ),
    4290 => 
    array (
      0 => 4291,
      1 => 247,
      2 => 'Xã Tràng An',
    ),
    4291 => 
    array (
      0 => 4292,
      1 => 247,
      2 => 'Xã Đồng Du',
    ),
    4292 => 
    array (
      0 => 4293,
      1 => 247,
      2 => 'Xã Ngọc Lũ',
    ),
    4293 => 
    array (
      0 => 4294,
      1 => 247,
      2 => 'Xã Hưng Công',
    ),
    4294 => 
    array (
      0 => 4295,
      1 => 247,
      2 => 'Xã Đồn Xá',
    ),
    4295 => 
    array (
      0 => 4296,
      1 => 247,
      2 => 'Xã An Ninh',
    ),
    4296 => 
    array (
      0 => 4297,
      1 => 247,
      2 => 'Xã Bồ Đề',
    ),
    4297 => 
    array (
      0 => 4298,
      1 => 247,
      2 => 'Xã Bối Cầu',
    ),
    4298 => 
    array (
      0 => 4299,
      1 => 247,
      2 => 'Xã An Nội',
    ),
    4299 => 
    array (
      0 => 4300,
      1 => 247,
      2 => 'Xã Vũ Bản',
    ),
    4300 => 
    array (
      0 => 4301,
      1 => 247,
      2 => 'Xã Trung Lương',
    ),
    4301 => 
    array (
      0 => 4302,
      1 => 247,
      2 => 'Xã An Đổ',
    ),
    4302 => 
    array (
      0 => 4303,
      1 => 247,
      2 => 'Xã La Sơn',
    ),
    4303 => 
    array (
      0 => 4304,
      1 => 247,
      2 => 'Xã Tiêu Động',
    ),
    4304 => 
    array (
      0 => 4305,
      1 => 247,
      2 => 'Xã An Lão',
    ),
    4305 => 
    array (
      0 => 4306,
      1 => 248,
      2 => 'Xã Hợp Lý',
    ),
    4306 => 
    array (
      0 => 4307,
      1 => 248,
      2 => 'Xã Nguyên Lý',
    ),
    4307 => 
    array (
      0 => 4308,
      1 => 248,
      2 => 'Xã Chính Lý',
    ),
    4308 => 
    array (
      0 => 4309,
      1 => 248,
      2 => 'Xã Chân Lý',
    ),
    4309 => 
    array (
      0 => 4310,
      1 => 248,
      2 => 'Xã Đạo Lý',
    ),
    4310 => 
    array (
      0 => 4311,
      1 => 248,
      2 => 'Xã Công Lý',
    ),
    4311 => 
    array (
      0 => 4312,
      1 => 248,
      2 => 'Xã Văn Lý',
    ),
    4312 => 
    array (
      0 => 4313,
      1 => 248,
      2 => 'Xã Bắc Lý',
    ),
    4313 => 
    array (
      0 => 4314,
      1 => 248,
      2 => 'Xã Đức Lý',
    ),
    4314 => 
    array (
      0 => 4315,
      1 => 248,
      2 => 'Xã Trần Hưng Đạo',
    ),
    4315 => 
    array (
      0 => 4316,
      1 => 248,
      2 => 'Thị trấn Vĩnh Trụ',
    ),
    4316 => 
    array (
      0 => 4317,
      1 => 248,
      2 => 'Xã Nhân Thịnh',
    ),
    4317 => 
    array (
      0 => 4318,
      1 => 248,
      2 => 'Xã Nhân Khang',
    ),
    4318 => 
    array (
      0 => 4319,
      1 => 248,
      2 => 'Xã Nhân Mỹ',
    ),
    4319 => 
    array (
      0 => 4320,
      1 => 248,
      2 => 'Xã Nhân Nghĩa',
    ),
    4320 => 
    array (
      0 => 4321,
      1 => 248,
      2 => 'Xã Nhân Chính',
    ),
    4321 => 
    array (
      0 => 4322,
      1 => 248,
      2 => 'Xã Nhân Bình',
    ),
    4322 => 
    array (
      0 => 4323,
      1 => 248,
      2 => 'Xã Phú Phúc',
    ),
    4323 => 
    array (
      0 => 4324,
      1 => 248,
      2 => 'Xã Xuân Khê',
    ),
    4324 => 
    array (
      0 => 4325,
      1 => 248,
      2 => 'Xã Tiến Thắng',
    ),
    4325 => 
    array (
      0 => 4326,
      1 => 248,
      2 => 'Xã Hòa Hậu',
    ),
    4326 => 
    array (
      0 => 4327,
      1 => 249,
      2 => 'Phường Hạ Long',
    ),
    4327 => 
    array (
      0 => 4328,
      1 => 249,
      2 => 'Phường Trần Tế Xương',
    ),
    4328 => 
    array (
      0 => 4329,
      1 => 249,
      2 => 'Phường Vị Hoàng',
    ),
    4329 => 
    array (
      0 => 4330,
      1 => 249,
      2 => 'Phường Vị Xuyên',
    ),
    4330 => 
    array (
      0 => 4331,
      1 => 249,
      2 => 'Phường Quang Trung',
    ),
    4331 => 
    array (
      0 => 4332,
      1 => 249,
      2 => 'Phường Cửa Bắc',
    ),
    4332 => 
    array (
      0 => 4333,
      1 => 249,
      2 => 'Phường Nguyễn Du',
    ),
    4333 => 
    array (
      0 => 4334,
      1 => 249,
      2 => 'Phường Bà Triệu',
    ),
    4334 => 
    array (
      0 => 4335,
      1 => 249,
      2 => 'Phường Trường Thi',
    ),
    4335 => 
    array (
      0 => 4336,
      1 => 249,
      2 => 'Phường Phan Đình Phùng',
    ),
    4336 => 
    array (
      0 => 4337,
      1 => 249,
      2 => 'Phường Ngô Quyền',
    ),
    4337 => 
    array (
      0 => 4338,
      1 => 249,
      2 => 'Phường Trần Hưng Đạo',
    ),
    4338 => 
    array (
      0 => 4339,
      1 => 249,
      2 => 'Phường Trần Đăng Ninh',
    ),
    4339 => 
    array (
      0 => 4340,
      1 => 249,
      2 => 'Phường Năng Tĩnh',
    ),
    4340 => 
    array (
      0 => 4341,
      1 => 249,
      2 => 'Phường Văn Miếu',
    ),
    4341 => 
    array (
      0 => 4342,
      1 => 249,
      2 => 'Phường Trần Quang Khải',
    ),
    4342 => 
    array (
      0 => 4343,
      1 => 249,
      2 => 'Phường Thống Nhất',
    ),
    4343 => 
    array (
      0 => 4344,
      1 => 249,
      2 => 'Phường Lộc Hạ',
    ),
    4344 => 
    array (
      0 => 4345,
      1 => 249,
      2 => 'Phường Lộc Vượng',
    ),
    4345 => 
    array (
      0 => 4346,
      1 => 249,
      2 => 'Phường Cửa Nam',
    ),
    4346 => 
    array (
      0 => 4347,
      1 => 249,
      2 => 'Phường Lộc Hòa',
    ),
    4347 => 
    array (
      0 => 4348,
      1 => 249,
      2 => 'Xã Nam Phong',
    ),
    4348 => 
    array (
      0 => 4349,
      1 => 249,
      2 => 'Phường Mỹ Xá',
    ),
    4349 => 
    array (
      0 => 4350,
      1 => 249,
      2 => 'Xã Lộc An',
    ),
    4350 => 
    array (
      0 => 4351,
      1 => 249,
      2 => 'Xã Nam Vân',
    ),
    4351 => 
    array (
      0 => 4352,
      1 => 250,
      2 => 'Thị trấn Mỹ Lộc',
    ),
    4352 => 
    array (
      0 => 4353,
      1 => 250,
      2 => 'Xã Mỹ Hà',
    ),
    4353 => 
    array (
      0 => 4354,
      1 => 250,
      2 => 'Xã Mỹ Tiến',
    ),
    4354 => 
    array (
      0 => 4355,
      1 => 250,
      2 => 'Xã Mỹ Thắng',
    ),
    4355 => 
    array (
      0 => 4356,
      1 => 250,
      2 => 'Xã Mỹ Trung',
    ),
    4356 => 
    array (
      0 => 4357,
      1 => 250,
      2 => 'Xã Mỹ Tân',
    ),
    4357 => 
    array (
      0 => 4358,
      1 => 250,
      2 => 'Xã Mỹ Phúc',
    ),
    4358 => 
    array (
      0 => 4359,
      1 => 250,
      2 => 'Xã Mỹ Hưng',
    ),
    4359 => 
    array (
      0 => 4360,
      1 => 250,
      2 => 'Xã Mỹ Thuận',
    ),
    4360 => 
    array (
      0 => 4361,
      1 => 250,
      2 => 'Xã Mỹ Thịnh',
    ),
    4361 => 
    array (
      0 => 4362,
      1 => 250,
      2 => 'Xã Mỹ Thành',
    ),
    4362 => 
    array (
      0 => 4363,
      1 => 251,
      2 => 'Thị trấn Gôi',
    ),
    4363 => 
    array (
      0 => 4364,
      1 => 251,
      2 => 'Xã Minh Thuận',
    ),
    4364 => 
    array (
      0 => 4365,
      1 => 251,
      2 => 'Xã Hiển Khánh',
    ),
    4365 => 
    array (
      0 => 4366,
      1 => 251,
      2 => 'Xã Tân Khánh',
    ),
    4366 => 
    array (
      0 => 4367,
      1 => 251,
      2 => 'Xã Hợp Hưng',
    ),
    4367 => 
    array (
      0 => 4368,
      1 => 251,
      2 => 'Xã Đại An',
    ),
    4368 => 
    array (
      0 => 4369,
      1 => 251,
      2 => 'Xã Tân Thành',
    ),
    4369 => 
    array (
      0 => 4370,
      1 => 251,
      2 => 'Xã Cộng Hòa',
    ),
    4370 => 
    array (
      0 => 4371,
      1 => 251,
      2 => 'Xã Trung Thành',
    ),
    4371 => 
    array (
      0 => 4372,
      1 => 251,
      2 => 'Xã Quang Trung',
    ),
    4372 => 
    array (
      0 => 4373,
      1 => 251,
      2 => 'Xã Minh Tân',
    ),
    4373 => 
    array (
      0 => 4374,
      1 => 251,
      2 => 'Xã Liên Bảo',
    ),
    4374 => 
    array (
      0 => 4375,
      1 => 251,
      2 => 'Xã Thành Lợi',
    ),
    4375 => 
    array (
      0 => 4376,
      1 => 251,
      2 => 'Xã Kim Thái',
    ),
    4376 => 
    array (
      0 => 4377,
      1 => 251,
      2 => 'Xã Liên Minh',
    ),
    4377 => 
    array (
      0 => 4378,
      1 => 251,
      2 => 'Xã Đại Thắng',
    ),
    4378 => 
    array (
      0 => 4379,
      1 => 251,
      2 => 'Xã Tam Thanh',
    ),
    4379 => 
    array (
      0 => 4380,
      1 => 251,
      2 => 'Xã Vĩnh Hào',
    ),
    4380 => 
    array (
      0 => 4381,
      1 => 252,
      2 => 'Thị trấn Lâm',
    ),
    4381 => 
    array (
      0 => 4382,
      1 => 252,
      2 => 'Xã Yên Trung',
    ),
    4382 => 
    array (
      0 => 4383,
      1 => 252,
      2 => 'Xã Yên Thành',
    ),
    4383 => 
    array (
      0 => 4384,
      1 => 252,
      2 => 'Xã Yên Tân',
    ),
    4384 => 
    array (
      0 => 4385,
      1 => 252,
      2 => 'Xã Yên Lợi',
    ),
    4385 => 
    array (
      0 => 4386,
      1 => 252,
      2 => 'Xã Yên Thọ',
    ),
    4386 => 
    array (
      0 => 4387,
      1 => 252,
      2 => 'Xã Yên Nghĩa',
    ),
    4387 => 
    array (
      0 => 4388,
      1 => 252,
      2 => 'Xã Yên Minh',
    ),
    4388 => 
    array (
      0 => 4389,
      1 => 252,
      2 => 'Xã Yên Phương',
    ),
    4389 => 
    array (
      0 => 4390,
      1 => 252,
      2 => 'Xã Yên Chính',
    ),
    4390 => 
    array (
      0 => 4391,
      1 => 252,
      2 => 'Xã Yên Bình',
    ),
    4391 => 
    array (
      0 => 4392,
      1 => 252,
      2 => 'Xã Yên Phú',
    ),
    4392 => 
    array (
      0 => 4393,
      1 => 252,
      2 => 'Xã Yên Mỹ',
    ),
    4393 => 
    array (
      0 => 4394,
      1 => 252,
      2 => 'Xã Yên Dương',
    ),
    4394 => 
    array (
      0 => 4395,
      1 => 252,
      2 => 'Xã Yên Hưng',
    ),
    4395 => 
    array (
      0 => 4396,
      1 => 252,
      2 => 'Xã Yên Khánh',
    ),
    4396 => 
    array (
      0 => 4397,
      1 => 252,
      2 => 'Xã Yên Phong',
    ),
    4397 => 
    array (
      0 => 4398,
      1 => 252,
      2 => 'Xã Yên Ninh',
    ),
    4398 => 
    array (
      0 => 4399,
      1 => 252,
      2 => 'Xã Yên Lương',
    ),
    4399 => 
    array (
      0 => 4400,
      1 => 252,
      2 => 'Xã Yên Hồng',
    ),
    4400 => 
    array (
      0 => 4401,
      1 => 252,
      2 => 'Xã Yên Quang',
    ),
    4401 => 
    array (
      0 => 4402,
      1 => 252,
      2 => 'Xã Yên Tiến',
    ),
    4402 => 
    array (
      0 => 4403,
      1 => 252,
      2 => 'Xã Yên Thắng',
    ),
    4403 => 
    array (
      0 => 4404,
      1 => 252,
      2 => 'Xã Yên Phúc',
    ),
    4404 => 
    array (
      0 => 4405,
      1 => 252,
      2 => 'Xã Yên Cường',
    ),
    4405 => 
    array (
      0 => 4406,
      1 => 252,
      2 => 'Xã Yên Lộc',
    ),
    4406 => 
    array (
      0 => 4407,
      1 => 252,
      2 => 'Xã Yên Bằng',
    ),
    4407 => 
    array (
      0 => 4408,
      1 => 252,
      2 => 'Xã Yên Đồng',
    ),
    4408 => 
    array (
      0 => 4409,
      1 => 252,
      2 => 'Xã Yên Khang',
    ),
    4409 => 
    array (
      0 => 4410,
      1 => 252,
      2 => 'Xã Yên Nhân',
    ),
    4410 => 
    array (
      0 => 4411,
      1 => 252,
      2 => 'Xã Yên Trị',
    ),
    4411 => 
    array (
      0 => 4412,
      1 => 253,
      2 => 'Thị trấn Liễu Đề',
    ),
    4412 => 
    array (
      0 => 4413,
      1 => 253,
      2 => 'Thị trấn Rạng Đông',
    ),
    4413 => 
    array (
      0 => 4414,
      1 => 253,
      2 => 'Xã Nghĩa Đồng',
    ),
    4414 => 
    array (
      0 => 4415,
      1 => 253,
      2 => 'Xã Nghĩa Thịnh',
    ),
    4415 => 
    array (
      0 => 4416,
      1 => 253,
      2 => 'Xã Nghĩa Minh',
    ),
    4416 => 
    array (
      0 => 4417,
      1 => 253,
      2 => 'Xã Nghĩa Thái',
    ),
    4417 => 
    array (
      0 => 4418,
      1 => 253,
      2 => 'Xã Hoàng Nam',
    ),
    4418 => 
    array (
      0 => 4419,
      1 => 253,
      2 => 'Xã Nghĩa Châu',
    ),
    4419 => 
    array (
      0 => 4420,
      1 => 253,
      2 => 'Xã Nghĩa Trung',
    ),
    4420 => 
    array (
      0 => 4421,
      1 => 253,
      2 => 'Xã Nghĩa Sơn',
    ),
    4421 => 
    array (
      0 => 4422,
      1 => 253,
      2 => 'Xã Nghĩa Lạc',
    ),
    4422 => 
    array (
      0 => 4423,
      1 => 253,
      2 => 'Xã Nghĩa Hồng',
    ),
    4423 => 
    array (
      0 => 4424,
      1 => 253,
      2 => 'Xã Nghĩa Phong',
    ),
    4424 => 
    array (
      0 => 4425,
      1 => 253,
      2 => 'Xã Nghĩa Phú',
    ),
    4425 => 
    array (
      0 => 4426,
      1 => 253,
      2 => 'Xã Nghĩa Bình',
    ),
    4426 => 
    array (
      0 => 4427,
      1 => 253,
      2 => 'Thị trấn Quỹ Nhất',
    ),
    4427 => 
    array (
      0 => 4428,
      1 => 253,
      2 => 'Xã Nghĩa Tân',
    ),
    4428 => 
    array (
      0 => 4429,
      1 => 253,
      2 => 'Xã Nghĩa Hùng',
    ),
    4429 => 
    array (
      0 => 4430,
      1 => 253,
      2 => 'Xã Nghĩa Lâm',
    ),
    4430 => 
    array (
      0 => 4431,
      1 => 253,
      2 => 'Xã Nghĩa Thành',
    ),
    4431 => 
    array (
      0 => 4432,
      1 => 253,
      2 => 'Xã Phúc Thắng',
    ),
    4432 => 
    array (
      0 => 4433,
      1 => 253,
      2 => 'Xã Nghĩa Lợi',
    ),
    4433 => 
    array (
      0 => 4434,
      1 => 253,
      2 => 'Xã Nghĩa Hải',
    ),
    4434 => 
    array (
      0 => 4435,
      1 => 253,
      2 => 'Xã Nam Điền',
    ),
    4435 => 
    array (
      0 => 4436,
      1 => 254,
      2 => 'Thị trấn Nam Giang',
    ),
    4436 => 
    array (
      0 => 4437,
      1 => 254,
      2 => 'Xã Nam Mỹ',
    ),
    4437 => 
    array (
      0 => 4438,
      1 => 254,
      2 => 'Xã Điền Xá',
    ),
    4438 => 
    array (
      0 => 4439,
      1 => 254,
      2 => 'Xã Nghĩa An',
    ),
    4439 => 
    array (
      0 => 4440,
      1 => 254,
      2 => 'Xã Nam Thắng',
    ),
    4440 => 
    array (
      0 => 4441,
      1 => 254,
      2 => 'Xã Nam Toàn',
    ),
    4441 => 
    array (
      0 => 4442,
      1 => 254,
      2 => 'Xã Hồng Quang',
    ),
    4442 => 
    array (
      0 => 4443,
      1 => 254,
      2 => 'Xã Tân Thịnh',
    ),
    4443 => 
    array (
      0 => 4444,
      1 => 254,
      2 => 'Xã Nam Cường',
    ),
    4444 => 
    array (
      0 => 4445,
      1 => 254,
      2 => 'Xã Nam Hồng',
    ),
    4445 => 
    array (
      0 => 4446,
      1 => 254,
      2 => 'Xã Nam Hùng',
    ),
    4446 => 
    array (
      0 => 4447,
      1 => 254,
      2 => 'Xã Nam Hoa',
    ),
    4447 => 
    array (
      0 => 4448,
      1 => 254,
      2 => 'Xã Nam Dương',
    ),
    4448 => 
    array (
      0 => 4449,
      1 => 254,
      2 => 'Xã Nam Thanh',
    ),
    4449 => 
    array (
      0 => 4450,
      1 => 254,
      2 => 'Xã Nam Lợi',
    ),
    4450 => 
    array (
      0 => 4451,
      1 => 254,
      2 => 'Xã Bình Minh',
    ),
    4451 => 
    array (
      0 => 4452,
      1 => 254,
      2 => 'Xã Đồng Sơn',
    ),
    4452 => 
    array (
      0 => 4453,
      1 => 254,
      2 => 'Xã Nam Tiến',
    ),
    4453 => 
    array (
      0 => 4454,
      1 => 254,
      2 => 'Xã Nam Hải',
    ),
    4454 => 
    array (
      0 => 4455,
      1 => 254,
      2 => 'Xã Nam Thái',
    ),
    4455 => 
    array (
      0 => 4456,
      1 => 255,
      2 => 'Thị trấn Cổ Lễ',
    ),
    4456 => 
    array (
      0 => 4457,
      1 => 255,
      2 => 'Xã Phương Định',
    ),
    4457 => 
    array (
      0 => 4458,
      1 => 255,
      2 => 'Xã Trực Chính',
    ),
    4458 => 
    array (
      0 => 4459,
      1 => 255,
      2 => 'Xã Trung Đông',
    ),
    4459 => 
    array (
      0 => 4460,
      1 => 255,
      2 => 'Xã Liêm Hải',
    ),
    4460 => 
    array (
      0 => 4461,
      1 => 255,
      2 => 'Xã Trực Tuấn',
    ),
    4461 => 
    array (
      0 => 4462,
      1 => 255,
      2 => 'Xã Việt Hùng',
    ),
    4462 => 
    array (
      0 => 4463,
      1 => 255,
      2 => 'Xã Trực Đạo',
    ),
    4463 => 
    array (
      0 => 4464,
      1 => 255,
      2 => 'Xã Trực Hưng',
    ),
    4464 => 
    array (
      0 => 4465,
      1 => 255,
      2 => 'Xã Trực Nội',
    ),
    4465 => 
    array (
      0 => 4466,
      1 => 255,
      2 => 'Thị trấn Cát Thành',
    ),
    4466 => 
    array (
      0 => 4467,
      1 => 255,
      2 => 'Xã Trực Thanh',
    ),
    4467 => 
    array (
      0 => 4468,
      1 => 255,
      2 => 'Xã Trực Khang',
    ),
    4468 => 
    array (
      0 => 4469,
      1 => 255,
      2 => 'Xã Trực Thuận',
    ),
    4469 => 
    array (
      0 => 4470,
      1 => 255,
      2 => 'Xã Trực Mỹ',
    ),
    4470 => 
    array (
      0 => 4471,
      1 => 255,
      2 => 'Xã Trực Đại',
    ),
    4471 => 
    array (
      0 => 4472,
      1 => 255,
      2 => 'Xã Trực Cường',
    ),
    4472 => 
    array (
      0 => 4473,
      1 => 255,
      2 => 'Thị trấn Ninh Cường',
    ),
    4473 => 
    array (
      0 => 4474,
      1 => 255,
      2 => 'Xã Trực Thái',
    ),
    4474 => 
    array (
      0 => 4475,
      1 => 255,
      2 => 'Xã Trực Thắng',
    ),
    4475 => 
    array (
      0 => 4476,
      1 => 256,
      2 => 'Thị trấn Xuân Trường',
    ),
    4476 => 
    array (
      0 => 4477,
      1 => 256,
      2 => 'Xã Xuân Châu',
    ),
    4477 => 
    array (
      0 => 4478,
      1 => 256,
      2 => 'Xã Xuân Hồng',
    ),
    4478 => 
    array (
      0 => 4479,
      1 => 256,
      2 => 'Xã Xuân Thành',
    ),
    4479 => 
    array (
      0 => 4480,
      1 => 256,
      2 => 'Xã Xuân Thượng',
    ),
    4480 => 
    array (
      0 => 4481,
      1 => 256,
      2 => 'Xã Xuân Phong',
    ),
    4481 => 
    array (
      0 => 4482,
      1 => 256,
      2 => 'Xã Xuân Đài',
    ),
    4482 => 
    array (
      0 => 4483,
      1 => 256,
      2 => 'Xã Xuân Tân',
    ),
    4483 => 
    array (
      0 => 4484,
      1 => 256,
      2 => 'Xã Xuân Thủy',
    ),
    4484 => 
    array (
      0 => 4485,
      1 => 256,
      2 => 'Xã Xuân Ngọc',
    ),
    4485 => 
    array (
      0 => 4486,
      1 => 256,
      2 => 'Xã Xuân Bắc',
    ),
    4486 => 
    array (
      0 => 4487,
      1 => 256,
      2 => 'Xã Xuân Phương',
    ),
    4487 => 
    array (
      0 => 4488,
      1 => 256,
      2 => 'Xã Thọ Nghiệp',
    ),
    4488 => 
    array (
      0 => 4489,
      1 => 256,
      2 => 'Xã Xuân Phú',
    ),
    4489 => 
    array (
      0 => 4490,
      1 => 256,
      2 => 'Xã Xuân Trung',
    ),
    4490 => 
    array (
      0 => 4491,
      1 => 256,
      2 => 'Xã Xuân Vinh',
    ),
    4491 => 
    array (
      0 => 4492,
      1 => 256,
      2 => 'Xã Xuân Kiên',
    ),
    4492 => 
    array (
      0 => 4493,
      1 => 256,
      2 => 'Xã Xuân Tiến',
    ),
    4493 => 
    array (
      0 => 4494,
      1 => 256,
      2 => 'Xã Xuân Ninh',
    ),
    4494 => 
    array (
      0 => 4495,
      1 => 256,
      2 => 'Xã Xuân Hòa',
    ),
    4495 => 
    array (
      0 => 4496,
      1 => 257,
      2 => 'Thị trấn Ngô Đồng',
    ),
    4496 => 
    array (
      0 => 4497,
      1 => 257,
      2 => 'Thị trấn Quất Lâm',
    ),
    4497 => 
    array (
      0 => 4498,
      1 => 257,
      2 => 'Xã Giao Hương',
    ),
    4498 => 
    array (
      0 => 4499,
      1 => 257,
      2 => 'Xã Hồng Thuận',
    ),
    4499 => 
    array (
      0 => 4500,
      1 => 257,
      2 => 'Xã Giao Thiện',
    ),
    4500 => 
    array (
      0 => 4501,
      1 => 257,
      2 => 'Xã Giao Thanh',
    ),
    4501 => 
    array (
      0 => 4502,
      1 => 257,
      2 => 'Xã Hoành Sơn',
    ),
    4502 => 
    array (
      0 => 4503,
      1 => 257,
      2 => 'Xã Bình Hòa',
    ),
    4503 => 
    array (
      0 => 4504,
      1 => 257,
      2 => 'Xã Giao Tiến',
    ),
    4504 => 
    array (
      0 => 4505,
      1 => 257,
      2 => 'Xã Giao Hà',
    ),
    4505 => 
    array (
      0 => 4506,
      1 => 257,
      2 => 'Xã Giao Nhân',
    ),
    4506 => 
    array (
      0 => 4507,
      1 => 257,
      2 => 'Xã Giao An',
    ),
    4507 => 
    array (
      0 => 4508,
      1 => 257,
      2 => 'Xã Giao Lạc',
    ),
    4508 => 
    array (
      0 => 4509,
      1 => 257,
      2 => 'Xã Giao Châu',
    ),
    4509 => 
    array (
      0 => 4510,
      1 => 257,
      2 => 'Xã Giao Tân',
    ),
    4510 => 
    array (
      0 => 4511,
      1 => 257,
      2 => 'Xã Giao Yến',
    ),
    4511 => 
    array (
      0 => 4512,
      1 => 257,
      2 => 'Xã Giao Xuân',
    ),
    4512 => 
    array (
      0 => 4513,
      1 => 257,
      2 => 'Xã Giao Thịnh',
    ),
    4513 => 
    array (
      0 => 4514,
      1 => 257,
      2 => 'Xã Giao Hải',
    ),
    4514 => 
    array (
      0 => 4515,
      1 => 257,
      2 => 'Xã Bạch Long',
    ),
    4515 => 
    array (
      0 => 4516,
      1 => 257,
      2 => 'Xã Giao Long',
    ),
    4516 => 
    array (
      0 => 4517,
      1 => 257,
      2 => 'Xã Giao Phong',
    ),
    4517 => 
    array (
      0 => 4518,
      1 => 258,
      2 => 'Thị trấn Yên Định',
    ),
    4518 => 
    array (
      0 => 4519,
      1 => 258,
      2 => 'Thị trấn Cồn',
    ),
    4519 => 
    array (
      0 => 4520,
      1 => 258,
      2 => 'Thị trấn Thịnh Long',
    ),
    4520 => 
    array (
      0 => 4521,
      1 => 258,
      2 => 'Xã Hải Nam',
    ),
    4521 => 
    array (
      0 => 4522,
      1 => 258,
      2 => 'Xã Hải Trung',
    ),
    4522 => 
    array (
      0 => 4523,
      1 => 258,
      2 => 'Xã Hải Vân',
    ),
    4523 => 
    array (
      0 => 4524,
      1 => 258,
      2 => 'Xã Hải Minh',
    ),
    4524 => 
    array (
      0 => 4525,
      1 => 258,
      2 => 'Xã Hải Anh',
    ),
    4525 => 
    array (
      0 => 4526,
      1 => 258,
      2 => 'Xã Hải Hưng',
    ),
    4526 => 
    array (
      0 => 4527,
      1 => 258,
      2 => 'Xã Hải Bắc',
    ),
    4527 => 
    array (
      0 => 4528,
      1 => 258,
      2 => 'Xã Hải Phúc',
    ),
    4528 => 
    array (
      0 => 4529,
      1 => 258,
      2 => 'Xã Hải Thanh',
    ),
    4529 => 
    array (
      0 => 4530,
      1 => 258,
      2 => 'Xã Hải Hà',
    ),
    4530 => 
    array (
      0 => 4531,
      1 => 258,
      2 => 'Xã Hải Long',
    ),
    4531 => 
    array (
      0 => 4532,
      1 => 258,
      2 => 'Xã Hải Phương',
    ),
    4532 => 
    array (
      0 => 4533,
      1 => 258,
      2 => 'Xã Hải Đường',
    ),
    4533 => 
    array (
      0 => 4534,
      1 => 258,
      2 => 'Xã Hải Lộc',
    ),
    4534 => 
    array (
      0 => 4535,
      1 => 258,
      2 => 'Xã Hải Quang',
    ),
    4535 => 
    array (
      0 => 4536,
      1 => 258,
      2 => 'Xã Hải Đông',
    ),
    4536 => 
    array (
      0 => 4537,
      1 => 258,
      2 => 'Xã Hải Sơn',
    ),
    4537 => 
    array (
      0 => 4538,
      1 => 258,
      2 => 'Xã Hải Tân',
    ),
    4538 => 
    array (
      0 => 4539,
      1 => 258,
      2 => 'Xã Hải Phong',
    ),
    4539 => 
    array (
      0 => 4540,
      1 => 258,
      2 => 'Xã Hải An',
    ),
    4540 => 
    array (
      0 => 4541,
      1 => 258,
      2 => 'Xã Hải Tây',
    ),
    4541 => 
    array (
      0 => 4542,
      1 => 258,
      2 => 'Xã Hải Lý',
    ),
    4542 => 
    array (
      0 => 4543,
      1 => 258,
      2 => 'Xã Hải Phú',
    ),
    4543 => 
    array (
      0 => 4544,
      1 => 258,
      2 => 'Xã Hải Giang',
    ),
    4544 => 
    array (
      0 => 4545,
      1 => 258,
      2 => 'Xã Hải Cường',
    ),
    4545 => 
    array (
      0 => 4546,
      1 => 258,
      2 => 'Xã Hải Ninh',
    ),
    4546 => 
    array (
      0 => 4547,
      1 => 258,
      2 => 'Xã Hải Chính',
    ),
    4547 => 
    array (
      0 => 4548,
      1 => 258,
      2 => 'Xã Hải Xuân',
    ),
    4548 => 
    array (
      0 => 4549,
      1 => 258,
      2 => 'Xã Hải Châu',
    ),
    4549 => 
    array (
      0 => 4550,
      1 => 258,
      2 => 'Xã Hải Triều',
    ),
    4550 => 
    array (
      0 => 4551,
      1 => 258,
      2 => 'Xã Hải Hòa',
    ),
    4551 => 
    array (
      0 => 4552,
      1 => 259,
      2 => 'Phường Đông Thành',
    ),
    4552 => 
    array (
      0 => 4553,
      1 => 259,
      2 => 'Phường Tân Thành',
    ),
    4553 => 
    array (
      0 => 4554,
      1 => 259,
      2 => 'Phường Thanh Bình',
    ),
    4554 => 
    array (
      0 => 4555,
      1 => 259,
      2 => 'Phường Vân Giang',
    ),
    4555 => 
    array (
      0 => 4556,
      1 => 259,
      2 => 'Phường Bích Đào',
    ),
    4556 => 
    array (
      0 => 4557,
      1 => 259,
      2 => 'Phường Phúc Thành',
    ),
    4557 => 
    array (
      0 => 4558,
      1 => 259,
      2 => 'Phường Nam Bình',
    ),
    4558 => 
    array (
      0 => 4559,
      1 => 259,
      2 => 'Phường Nam Thành',
    ),
    4559 => 
    array (
      0 => 4560,
      1 => 259,
      2 => 'Phường Ninh Khánh',
    ),
    4560 => 
    array (
      0 => 4561,
      1 => 259,
      2 => 'Xã Ninh Nhất',
    ),
    4561 => 
    array (
      0 => 4562,
      1 => 259,
      2 => 'Xã Ninh Tiến',
    ),
    4562 => 
    array (
      0 => 4563,
      1 => 259,
      2 => 'Xã Ninh Phúc',
    ),
    4563 => 
    array (
      0 => 4564,
      1 => 259,
      2 => 'Phường Ninh Sơn',
    ),
    4564 => 
    array (
      0 => 4565,
      1 => 259,
      2 => 'Phường Ninh Phong',
    ),
    4565 => 
    array (
      0 => 4566,
      1 => 260,
      2 => 'Phường Bắc Sơn',
    ),
    4566 => 
    array (
      0 => 4567,
      1 => 260,
      2 => 'Phường Trung Sơn',
    ),
    4567 => 
    array (
      0 => 4568,
      1 => 260,
      2 => 'Phường Nam Sơn',
    ),
    4568 => 
    array (
      0 => 4569,
      1 => 260,
      2 => 'Phường Tây Sơn',
    ),
    4569 => 
    array (
      0 => 4570,
      1 => 260,
      2 => 'Xã Yên Sơn',
    ),
    4570 => 
    array (
      0 => 4571,
      1 => 260,
      2 => 'Phường Yên Bình',
    ),
    4571 => 
    array (
      0 => 4572,
      1 => 260,
      2 => 'Phường Tân Bình',
    ),
    4572 => 
    array (
      0 => 4573,
      1 => 260,
      2 => 'Xã Quang Sơn',
    ),
    4573 => 
    array (
      0 => 4574,
      1 => 260,
      2 => 'Xã Đông Sơn',
    ),
    4574 => 
    array (
      0 => 4575,
      1 => 261,
      2 => 'Thị trấn Nho Quan',
    ),
    4575 => 
    array (
      0 => 4576,
      1 => 261,
      2 => 'Xã Xích Thổ',
    ),
    4576 => 
    array (
      0 => 4577,
      1 => 261,
      2 => 'Xã Gia Lâm',
    ),
    4577 => 
    array (
      0 => 4578,
      1 => 261,
      2 => 'Xã Gia Sơn',
    ),
    4578 => 
    array (
      0 => 4579,
      1 => 261,
      2 => 'Xã Thạch Bình',
    ),
    4579 => 
    array (
      0 => 4580,
      1 => 261,
      2 => 'Xã Gia Thủy',
    ),
    4580 => 
    array (
      0 => 4581,
      1 => 261,
      2 => 'Xã Gia Tường',
    ),
    4581 => 
    array (
      0 => 4582,
      1 => 261,
      2 => 'Xã Cúc Phương',
    ),
    4582 => 
    array (
      0 => 4583,
      1 => 261,
      2 => 'Xã Phú Sơn',
    ),
    4583 => 
    array (
      0 => 4584,
      1 => 261,
      2 => 'Xã Đức Long',
    ),
    4584 => 
    array (
      0 => 4585,
      1 => 261,
      2 => 'Xã Lạc Vân',
    ),
    4585 => 
    array (
      0 => 4586,
      1 => 261,
      2 => 'Xã Đồng Phong',
    ),
    4586 => 
    array (
      0 => 4587,
      1 => 261,
      2 => 'Xã Yên Quang',
    ),
    4587 => 
    array (
      0 => 4588,
      1 => 261,
      2 => 'Xã Lạng Phong',
    ),
    4588 => 
    array (
      0 => 4589,
      1 => 261,
      2 => 'Xã Thượng Hòa',
    ),
    4589 => 
    array (
      0 => 4590,
      1 => 261,
      2 => 'Xã Văn Phong',
    ),
    4590 => 
    array (
      0 => 4591,
      1 => 261,
      2 => 'Xã Văn Phương',
    ),
    4591 => 
    array (
      0 => 4592,
      1 => 261,
      2 => 'Xã Thanh Lạc',
    ),
    4592 => 
    array (
      0 => 4593,
      1 => 261,
      2 => 'Xã Sơn Lai',
    ),
    4593 => 
    array (
      0 => 4594,
      1 => 261,
      2 => 'Xã Sơn Thành',
    ),
    4594 => 
    array (
      0 => 4595,
      1 => 261,
      2 => 'Xã Văn Phú',
    ),
    4595 => 
    array (
      0 => 4596,
      1 => 261,
      2 => 'Xã Phú Lộc',
    ),
    4596 => 
    array (
      0 => 4597,
      1 => 261,
      2 => 'Xã Kỳ Phú',
    ),
    4597 => 
    array (
      0 => 4598,
      1 => 261,
      2 => 'Xã Quỳnh Lưu',
    ),
    4598 => 
    array (
      0 => 4599,
      1 => 261,
      2 => 'Xã Sơn Hà',
    ),
    4599 => 
    array (
      0 => 4600,
      1 => 261,
      2 => 'Xã Phú Long',
    ),
    4600 => 
    array (
      0 => 4601,
      1 => 261,
      2 => 'Xã Quảng Lạc',
    ),
    4601 => 
    array (
      0 => 4602,
      1 => 262,
      2 => 'Thị trấn Me',
    ),
    4602 => 
    array (
      0 => 4603,
      1 => 262,
      2 => 'Xã Gia Hòa',
    ),
    4603 => 
    array (
      0 => 4604,
      1 => 262,
      2 => 'Xã Gia Hưng',
    ),
    4604 => 
    array (
      0 => 4605,
      1 => 262,
      2 => 'Xã Liên Sơn',
    ),
    4605 => 
    array (
      0 => 4606,
      1 => 262,
      2 => 'Xã Gia Thanh',
    ),
    4606 => 
    array (
      0 => 4607,
      1 => 262,
      2 => 'Xã Gia Vân',
    ),
    4607 => 
    array (
      0 => 4608,
      1 => 262,
      2 => 'Xã Gia Phú',
    ),
    4608 => 
    array (
      0 => 4609,
      1 => 262,
      2 => 'Xã Gia Xuân',
    ),
    4609 => 
    array (
      0 => 4610,
      1 => 262,
      2 => 'Xã Gia Lập',
    ),
    4610 => 
    array (
      0 => 4611,
      1 => 262,
      2 => 'Xã Gia Vượng',
    ),
    4611 => 
    array (
      0 => 4612,
      1 => 262,
      2 => 'Xã Gia Trấn',
    ),
    4612 => 
    array (
      0 => 4613,
      1 => 262,
      2 => 'Xã Gia Thịnh',
    ),
    4613 => 
    array (
      0 => 4614,
      1 => 262,
      2 => 'Xã Gia Phương',
    ),
    4614 => 
    array (
      0 => 4615,
      1 => 262,
      2 => 'Xã Gia Tân',
    ),
    4615 => 
    array (
      0 => 4616,
      1 => 262,
      2 => 'Xã Gia Thắng',
    ),
    4616 => 
    array (
      0 => 4617,
      1 => 262,
      2 => 'Xã Gia Trung',
    ),
    4617 => 
    array (
      0 => 4618,
      1 => 262,
      2 => 'Xã Gia Minh',
    ),
    4618 => 
    array (
      0 => 4619,
      1 => 262,
      2 => 'Xã Gia Lạc',
    ),
    4619 => 
    array (
      0 => 4620,
      1 => 262,
      2 => 'Xã Gia Tiến',
    ),
    4620 => 
    array (
      0 => 4621,
      1 => 262,
      2 => 'Xã Gia Sinh',
    ),
    4621 => 
    array (
      0 => 4622,
      1 => 262,
      2 => 'Xã Gia Phong',
    ),
    4622 => 
    array (
      0 => 4623,
      1 => 263,
      2 => 'Thị trấn Thiên Tôn',
    ),
    4623 => 
    array (
      0 => 4624,
      1 => 263,
      2 => 'Xã Ninh Giang',
    ),
    4624 => 
    array (
      0 => 4625,
      1 => 263,
      2 => 'Xã Trường Yên',
    ),
    4625 => 
    array (
      0 => 4626,
      1 => 263,
      2 => 'Xã Ninh Khang',
    ),
    4626 => 
    array (
      0 => 4627,
      1 => 263,
      2 => 'Xã Ninh Mỹ',
    ),
    4627 => 
    array (
      0 => 4628,
      1 => 263,
      2 => 'Xã Ninh Hòa',
    ),
    4628 => 
    array (
      0 => 4629,
      1 => 263,
      2 => 'Xã Ninh Xuân',
    ),
    4629 => 
    array (
      0 => 4630,
      1 => 263,
      2 => 'Xã Ninh Hải',
    ),
    4630 => 
    array (
      0 => 4631,
      1 => 263,
      2 => 'Xã Ninh Thắng',
    ),
    4631 => 
    array (
      0 => 4632,
      1 => 263,
      2 => 'Xã Ninh Vân',
    ),
    4632 => 
    array (
      0 => 4633,
      1 => 263,
      2 => 'Xã Ninh An',
    ),
    4633 => 
    array (
      0 => 4634,
      1 => 264,
      2 => 'Thị trấn Yên Ninh',
    ),
    4634 => 
    array (
      0 => 4635,
      1 => 264,
      2 => 'Xã Khánh Tiên',
    ),
    4635 => 
    array (
      0 => 4636,
      1 => 264,
      2 => 'Xã Khánh Phú',
    ),
    4636 => 
    array (
      0 => 4637,
      1 => 264,
      2 => 'Xã Khánh Hòa',
    ),
    4637 => 
    array (
      0 => 4638,
      1 => 264,
      2 => 'Xã Khánh Lợi',
    ),
    4638 => 
    array (
      0 => 4639,
      1 => 264,
      2 => 'Xã Khánh An',
    ),
    4639 => 
    array (
      0 => 4640,
      1 => 264,
      2 => 'Xã Khánh Cường',
    ),
    4640 => 
    array (
      0 => 4641,
      1 => 264,
      2 => 'Xã Khánh Cư',
    ),
    4641 => 
    array (
      0 => 4642,
      1 => 264,
      2 => 'Xã Khánh Thiện',
    ),
    4642 => 
    array (
      0 => 4643,
      1 => 264,
      2 => 'Xã Khánh Hải',
    ),
    4643 => 
    array (
      0 => 4644,
      1 => 264,
      2 => 'Xã Khánh Trung',
    ),
    4644 => 
    array (
      0 => 4645,
      1 => 264,
      2 => 'Xã Khánh Mậu',
    ),
    4645 => 
    array (
      0 => 4646,
      1 => 264,
      2 => 'Xã Khánh Vân',
    ),
    4646 => 
    array (
      0 => 4647,
      1 => 264,
      2 => 'Xã Khánh Hội',
    ),
    4647 => 
    array (
      0 => 4648,
      1 => 264,
      2 => 'Xã Khánh Công',
    ),
    4648 => 
    array (
      0 => 4649,
      1 => 264,
      2 => 'Xã Khánh Thành',
    ),
    4649 => 
    array (
      0 => 4650,
      1 => 264,
      2 => 'Xã Khánh Nhạc',
    ),
    4650 => 
    array (
      0 => 4651,
      1 => 264,
      2 => 'Xã Khánh Thủy',
    ),
    4651 => 
    array (
      0 => 4652,
      1 => 264,
      2 => 'Xã Khánh Hồng',
    ),
    4652 => 
    array (
      0 => 4653,
      1 => 265,
      2 => 'Thị trấn Phát Diệm',
    ),
    4653 => 
    array (
      0 => 4654,
      1 => 265,
      2 => 'Thị trấn Bình Minh',
    ),
    4654 => 
    array (
      0 => 4655,
      1 => 265,
      2 => 'Xã Hồi Ninh',
    ),
    4655 => 
    array (
      0 => 4656,
      1 => 265,
      2 => 'Xã Xuân Chính',
    ),
    4656 => 
    array (
      0 => 4657,
      1 => 265,
      2 => 'Xã Kim Định',
    ),
    4657 => 
    array (
      0 => 4658,
      1 => 265,
      2 => 'Xã Ân Hòa',
    ),
    4658 => 
    array (
      0 => 4659,
      1 => 265,
      2 => 'Xã Hùng Tiến',
    ),
    4659 => 
    array (
      0 => 4660,
      1 => 265,
      2 => 'Xã Quang Thiện',
    ),
    4660 => 
    array (
      0 => 4661,
      1 => 265,
      2 => 'Xã Như Hòa',
    ),
    4661 => 
    array (
      0 => 4662,
      1 => 265,
      2 => 'Xã Chất Bình',
    ),
    4662 => 
    array (
      0 => 4663,
      1 => 265,
      2 => 'Xã Đồng Hướng',
    ),
    4663 => 
    array (
      0 => 4664,
      1 => 265,
      2 => 'Xã Kim Chính',
    ),
    4664 => 
    array (
      0 => 4665,
      1 => 265,
      2 => 'Xã Thượng Kiệm',
    ),
    4665 => 
    array (
      0 => 4666,
      1 => 265,
      2 => 'Xã Lưu Phương',
    ),
    4666 => 
    array (
      0 => 4667,
      1 => 265,
      2 => 'Xã Tân Thành',
    ),
    4667 => 
    array (
      0 => 4668,
      1 => 265,
      2 => 'Xã Yên Lộc',
    ),
    4668 => 
    array (
      0 => 4669,
      1 => 265,
      2 => 'Xã Lai Thành',
    ),
    4669 => 
    array (
      0 => 4670,
      1 => 265,
      2 => 'Xã Định Hóa',
    ),
    4670 => 
    array (
      0 => 4671,
      1 => 265,
      2 => 'Xã Văn Hải',
    ),
    4671 => 
    array (
      0 => 4672,
      1 => 265,
      2 => 'Xã Kim Tân',
    ),
    4672 => 
    array (
      0 => 4673,
      1 => 265,
      2 => 'Xã Kim Mỹ',
    ),
    4673 => 
    array (
      0 => 4674,
      1 => 265,
      2 => 'Xã Cồn Thoi',
    ),
    4674 => 
    array (
      0 => 4675,
      1 => 265,
      2 => 'Xã Kim Hải',
    ),
    4675 => 
    array (
      0 => 4676,
      1 => 265,
      2 => 'Xã Kim Trung',
    ),
    4676 => 
    array (
      0 => 4677,
      1 => 265,
      2 => 'Xã Kim Đông',
    ),
    4677 => 
    array (
      0 => 4678,
      1 => 266,
      2 => 'Thị trấn Yên Thịnh',
    ),
    4678 => 
    array (
      0 => 4679,
      1 => 266,
      2 => 'Xã Khánh Thượng',
    ),
    4679 => 
    array (
      0 => 4680,
      1 => 266,
      2 => 'Xã Khánh Dương',
    ),
    4680 => 
    array (
      0 => 4681,
      1 => 266,
      2 => 'Xã Mai Sơn',
    ),
    4681 => 
    array (
      0 => 4682,
      1 => 266,
      2 => 'Xã Khánh Thịnh',
    ),
    4682 => 
    array (
      0 => 4683,
      1 => 266,
      2 => 'Xã Yên Phong',
    ),
    4683 => 
    array (
      0 => 4684,
      1 => 266,
      2 => 'Xã Yên Hòa',
    ),
    4684 => 
    array (
      0 => 4685,
      1 => 266,
      2 => 'Xã Yên Thắng',
    ),
    4685 => 
    array (
      0 => 4686,
      1 => 266,
      2 => 'Xã Yên Từ',
    ),
    4686 => 
    array (
      0 => 4687,
      1 => 266,
      2 => 'Xã Yên Hưng',
    ),
    4687 => 
    array (
      0 => 4688,
      1 => 266,
      2 => 'Xã Yên Thành',
    ),
    4688 => 
    array (
      0 => 4689,
      1 => 266,
      2 => 'Xã Yên Nhân',
    ),
    4689 => 
    array (
      0 => 4690,
      1 => 266,
      2 => 'Xã Yên Mỹ',
    ),
    4690 => 
    array (
      0 => 4691,
      1 => 266,
      2 => 'Xã Yên Mạc',
    ),
    4691 => 
    array (
      0 => 4692,
      1 => 266,
      2 => 'Xã Yên Đồng',
    ),
    4692 => 
    array (
      0 => 4693,
      1 => 266,
      2 => 'Xã Yên Thái',
    ),
    4693 => 
    array (
      0 => 4694,
      1 => 266,
      2 => 'Xã Yên Lâm',
    ),
    4694 => 
    array (
      0 => 4695,
      1 => 267,
      2 => 'Phường Hàm Rồng',
    ),
    4695 => 
    array (
      0 => 4696,
      1 => 267,
      2 => 'Phường Đông Thọ',
    ),
    4696 => 
    array (
      0 => 4697,
      1 => 267,
      2 => 'Phường Nam Ngạn',
    ),
    4697 => 
    array (
      0 => 4698,
      1 => 267,
      2 => 'Phường Trường Thi',
    ),
    4698 => 
    array (
      0 => 4699,
      1 => 267,
      2 => 'Phường Điện Biên',
    ),
    4699 => 
    array (
      0 => 4700,
      1 => 267,
      2 => 'Phường Phú Sơn',
    ),
    4700 => 
    array (
      0 => 4701,
      1 => 267,
      2 => 'Phường Lam Sơn',
    ),
    4701 => 
    array (
      0 => 4702,
      1 => 267,
      2 => 'Phường Ba Đình',
    ),
    4702 => 
    array (
      0 => 4703,
      1 => 267,
      2 => 'Phường Ngọc Trạo',
    ),
    4703 => 
    array (
      0 => 4704,
      1 => 267,
      2 => 'Phường Đông Vệ',
    ),
    4704 => 
    array (
      0 => 4705,
      1 => 267,
      2 => 'Phường Đông Sơn',
    ),
    4705 => 
    array (
      0 => 4706,
      1 => 267,
      2 => 'Phường Tân Sơn',
    ),
    4706 => 
    array (
      0 => 4707,
      1 => 267,
      2 => 'Phường Đông Cương',
    ),
    4707 => 
    array (
      0 => 4708,
      1 => 267,
      2 => 'Phường Đông Hương',
    ),
    4708 => 
    array (
      0 => 4709,
      1 => 267,
      2 => 'Phường Đông Hải',
    ),
    4709 => 
    array (
      0 => 4710,
      1 => 267,
      2 => 'Phường Quảng Hưng',
    ),
    4710 => 
    array (
      0 => 4711,
      1 => 267,
      2 => 'Phường Quảng Thắng',
    ),
    4711 => 
    array (
      0 => 4712,
      1 => 267,
      2 => 'Phường Quảng Thành',
    ),
    4712 => 
    array (
      0 => 4713,
      1 => 267,
      2 => 'Xã Thiệu Vân',
    ),
    4713 => 
    array (
      0 => 4714,
      1 => 267,
      2 => 'Phường Thiệu Khánh',
    ),
    4714 => 
    array (
      0 => 4715,
      1 => 267,
      2 => 'Phường Thiệu Dương',
    ),
    4715 => 
    array (
      0 => 4716,
      1 => 267,
      2 => 'Phường Tào Xuyên',
    ),
    4716 => 
    array (
      0 => 4717,
      1 => 267,
      2 => 'Phường Long Anh',
    ),
    4717 => 
    array (
      0 => 4718,
      1 => 267,
      2 => 'Xã Hoằng Quang',
    ),
    4718 => 
    array (
      0 => 4719,
      1 => 267,
      2 => 'Xã Hoằng Đại',
    ),
    4719 => 
    array (
      0 => 4720,
      1 => 267,
      2 => 'Phường Đông Lĩnh',
    ),
    4720 => 
    array (
      0 => 4721,
      1 => 267,
      2 => 'Xã Đông Vinh',
    ),
    4721 => 
    array (
      0 => 4722,
      1 => 267,
      2 => 'Phường Đông Tân',
    ),
    4722 => 
    array (
      0 => 4723,
      1 => 267,
      2 => 'Phường An Hưng',
    ),
    4723 => 
    array (
      0 => 4724,
      1 => 267,
      2 => 'Phường Quảng Thịnh',
    ),
    4724 => 
    array (
      0 => 4725,
      1 => 267,
      2 => 'Phường Quảng Đông',
    ),
    4725 => 
    array (
      0 => 4726,
      1 => 267,
      2 => 'Phường Quảng Cát',
    ),
    4726 => 
    array (
      0 => 4727,
      1 => 267,
      2 => 'Phường Quảng Phú',
    ),
    4727 => 
    array (
      0 => 4728,
      1 => 267,
      2 => 'Phường Quảng Tâm',
    ),
    4728 => 
    array (
      0 => 4729,
      1 => 268,
      2 => 'Phường Bắc Sơn',
    ),
    4729 => 
    array (
      0 => 4730,
      1 => 268,
      2 => 'Phường Ba Đình',
    ),
    4730 => 
    array (
      0 => 4731,
      1 => 268,
      2 => 'Phường Lam Sơn',
    ),
    4731 => 
    array (
      0 => 4732,
      1 => 268,
      2 => 'Phường Ngọc Trạo',
    ),
    4732 => 
    array (
      0 => 4733,
      1 => 268,
      2 => 'Phường Đông Sơn',
    ),
    4733 => 
    array (
      0 => 4734,
      1 => 268,
      2 => 'Phường Phú Sơn',
    ),
    4734 => 
    array (
      0 => 4735,
      1 => 268,
      2 => 'Xã Quang Trung',
    ),
    4735 => 
    array (
      0 => 4736,
      1 => 269,
      2 => 'Phường Trung Sơn',
    ),
    4736 => 
    array (
      0 => 4737,
      1 => 269,
      2 => 'Phường Bắc Sơn',
    ),
    4737 => 
    array (
      0 => 4738,
      1 => 269,
      2 => 'Phường Trường Sơn',
    ),
    4738 => 
    array (
      0 => 4739,
      1 => 269,
      2 => 'Phường Quảng Cư',
    ),
    4739 => 
    array (
      0 => 4740,
      1 => 269,
      2 => 'Phường Quảng Tiến',
    ),
    4740 => 
    array (
      0 => 4741,
      1 => 269,
      2 => 'Xã Quảng Minh',
    ),
    4741 => 
    array (
      0 => 4742,
      1 => 269,
      2 => 'Xã Quảng Hùng',
    ),
    4742 => 
    array (
      0 => 4743,
      1 => 269,
      2 => 'Phường Quảng Thọ',
    ),
    4743 => 
    array (
      0 => 4744,
      1 => 269,
      2 => 'Phường Quảng Châu',
    ),
    4744 => 
    array (
      0 => 4745,
      1 => 269,
      2 => 'Phường Quảng Vinh',
    ),
    4745 => 
    array (
      0 => 4746,
      1 => 269,
      2 => 'Xã Quảng Đại',
    ),
    4746 => 
    array (
      0 => 4747,
      1 => 270,
      2 => 'Thị trấn Mường Lát',
    ),
    4747 => 
    array (
      0 => 4748,
      1 => 270,
      2 => 'Xã Tam Chung',
    ),
    4748 => 
    array (
      0 => 4749,
      1 => 270,
      2 => 'Xã Mường Lý',
    ),
    4749 => 
    array (
      0 => 4750,
      1 => 270,
      2 => 'Xã Trung Lý',
    ),
    4750 => 
    array (
      0 => 4751,
      1 => 270,
      2 => 'Xã Quang Chiểu',
    ),
    4751 => 
    array (
      0 => 4752,
      1 => 270,
      2 => 'Xã Pù Nhi',
    ),
    4752 => 
    array (
      0 => 4753,
      1 => 270,
      2 => 'Xã Nhi Sơn',
    ),
    4753 => 
    array (
      0 => 4754,
      1 => 270,
      2 => 'Xã Mường Chanh',
    ),
    4754 => 
    array (
      0 => 4755,
      1 => 271,
      2 => 'Thị trấn Hồi Xuân',
    ),
    4755 => 
    array (
      0 => 4756,
      1 => 271,
      2 => 'Xã Thành Sơn',
    ),
    4756 => 
    array (
      0 => 4757,
      1 => 271,
      2 => 'Xã Trung Sơn',
    ),
    4757 => 
    array (
      0 => 4758,
      1 => 271,
      2 => 'Xã Phú Thanh',
    ),
    4758 => 
    array (
      0 => 4759,
      1 => 271,
      2 => 'Xã Trung Thành',
    ),
    4759 => 
    array (
      0 => 4760,
      1 => 271,
      2 => 'Xã Phú Lệ',
    ),
    4760 => 
    array (
      0 => 4761,
      1 => 271,
      2 => 'Xã Phú Sơn',
    ),
    4761 => 
    array (
      0 => 4762,
      1 => 271,
      2 => 'Xã Phú Xuân',
    ),
    4762 => 
    array (
      0 => 4763,
      1 => 271,
      2 => 'Xã Hiền Chung',
    ),
    4763 => 
    array (
      0 => 4764,
      1 => 271,
      2 => 'Xã Hiền Kiệt',
    ),
    4764 => 
    array (
      0 => 4765,
      1 => 271,
      2 => 'Xã Nam Tiến',
    ),
    4765 => 
    array (
      0 => 4766,
      1 => 271,
      2 => 'Xã Thiên Phủ',
    ),
    4766 => 
    array (
      0 => 4767,
      1 => 271,
      2 => 'Xã Phú Nghiêm',
    ),
    4767 => 
    array (
      0 => 4768,
      1 => 271,
      2 => 'Xã Nam Xuân',
    ),
    4768 => 
    array (
      0 => 4769,
      1 => 271,
      2 => 'Xã Nam Động',
    ),
    4769 => 
    array (
      0 => 4770,
      1 => 272,
      2 => 'Thị trấn Cành Nàng',
    ),
    4770 => 
    array (
      0 => 4771,
      1 => 272,
      2 => 'Xã Điền Thượng',
    ),
    4771 => 
    array (
      0 => 4772,
      1 => 272,
      2 => 'Xã Điền Hạ',
    ),
    4772 => 
    array (
      0 => 4773,
      1 => 272,
      2 => 'Xã Điền Quang',
    ),
    4773 => 
    array (
      0 => 4774,
      1 => 272,
      2 => 'Xã Điền Trung',
    ),
    4774 => 
    array (
      0 => 4775,
      1 => 272,
      2 => 'Xã Thành Sơn',
    ),
    4775 => 
    array (
      0 => 4776,
      1 => 272,
      2 => 'Xã Lương Ngoại',
    ),
    4776 => 
    array (
      0 => 4777,
      1 => 272,
      2 => 'Xã Ái Thượng',
    ),
    4777 => 
    array (
      0 => 4778,
      1 => 272,
      2 => 'Xã Lương Nội',
    ),
    4778 => 
    array (
      0 => 4779,
      1 => 272,
      2 => 'Xã Điền Lư',
    ),
    4779 => 
    array (
      0 => 4780,
      1 => 272,
      2 => 'Xã Lương Trung',
    ),
    4780 => 
    array (
      0 => 4781,
      1 => 272,
      2 => 'Xã Lũng Niêm',
    ),
    4781 => 
    array (
      0 => 4782,
      1 => 272,
      2 => 'Xã Lũng Cao',
    ),
    4782 => 
    array (
      0 => 4783,
      1 => 272,
      2 => 'Xã Hạ Trung',
    ),
    4783 => 
    array (
      0 => 4784,
      1 => 272,
      2 => 'Xã Cổ Lũng',
    ),
    4784 => 
    array (
      0 => 4785,
      1 => 272,
      2 => 'Xã Thành Lâm',
    ),
    4785 => 
    array (
      0 => 4786,
      1 => 272,
      2 => 'Xã Ban Công',
    ),
    4786 => 
    array (
      0 => 4787,
      1 => 272,
      2 => 'Xã Kỳ Tân',
    ),
    4787 => 
    array (
      0 => 4788,
      1 => 272,
      2 => 'Xã Văn Nho',
    ),
    4788 => 
    array (
      0 => 4789,
      1 => 272,
      2 => 'Xã Thiết Ống',
    ),
    4789 => 
    array (
      0 => 4790,
      1 => 272,
      2 => 'Xã Thiết Kế',
    ),
    4790 => 
    array (
      0 => 4791,
      1 => 273,
      2 => 'Xã Trung Xuân',
    ),
    4791 => 
    array (
      0 => 4792,
      1 => 273,
      2 => 'Xã Trung Thượng',
    ),
    4792 => 
    array (
      0 => 4793,
      1 => 273,
      2 => 'Xã Trung Tiến',
    ),
    4793 => 
    array (
      0 => 4794,
      1 => 273,
      2 => 'Xã Trung Hạ',
    ),
    4794 => 
    array (
      0 => 4795,
      1 => 273,
      2 => 'Xã Sơn Hà',
    ),
    4795 => 
    array (
      0 => 4796,
      1 => 273,
      2 => 'Xã Tam Thanh',
    ),
    4796 => 
    array (
      0 => 4797,
      1 => 273,
      2 => 'Xã Sơn Thủy',
    ),
    4797 => 
    array (
      0 => 4798,
      1 => 273,
      2 => 'Xã Na Mèo',
    ),
    4798 => 
    array (
      0 => 4799,
      1 => 273,
      2 => 'Thị trấn Sơn Lư',
    ),
    4799 => 
    array (
      0 => 4800,
      1 => 273,
      2 => 'Xã Tam Lư',
    ),
    4800 => 
    array (
      0 => 4801,
      1 => 273,
      2 => 'Xã Sơn Điện',
    ),
    4801 => 
    array (
      0 => 4802,
      1 => 273,
      2 => 'Xã Mường Mìn',
    ),
    4802 => 
    array (
      0 => 4803,
      1 => 274,
      2 => 'Xã Yên Khương',
    ),
    4803 => 
    array (
      0 => 4804,
      1 => 274,
      2 => 'Xã Yên Thắng',
    ),
    4804 => 
    array (
      0 => 4805,
      1 => 274,
      2 => 'Xã Trí Nang',
    ),
    4805 => 
    array (
      0 => 4806,
      1 => 274,
      2 => 'Xã Giao An',
    ),
    4806 => 
    array (
      0 => 4807,
      1 => 274,
      2 => 'Xã Giao Thiện',
    ),
    4807 => 
    array (
      0 => 4808,
      1 => 274,
      2 => 'Xã Tân Phúc',
    ),
    4808 => 
    array (
      0 => 4809,
      1 => 274,
      2 => 'Xã Tam Văn',
    ),
    4809 => 
    array (
      0 => 4810,
      1 => 274,
      2 => 'Xã Lâm Phú',
    ),
    4810 => 
    array (
      0 => 4811,
      1 => 274,
      2 => 'Thị trấn Lang Chánh',
    ),
    4811 => 
    array (
      0 => 4812,
      1 => 274,
      2 => 'Xã Đồng Lương',
    ),
    4812 => 
    array (
      0 => 4813,
      1 => 275,
      2 => 'Thị Trấn Ngọc Lặc',
    ),
    4813 => 
    array (
      0 => 4814,
      1 => 275,
      2 => 'Xã Lam Sơn',
    ),
    4814 => 
    array (
      0 => 4815,
      1 => 275,
      2 => 'Xã Mỹ Tân',
    ),
    4815 => 
    array (
      0 => 4816,
      1 => 275,
      2 => 'Xã Thúy Sơn',
    ),
    4816 => 
    array (
      0 => 4817,
      1 => 275,
      2 => 'Xã Thạch Lập',
    ),
    4817 => 
    array (
      0 => 4818,
      1 => 275,
      2 => 'Xã Vân Âm',
    ),
    4818 => 
    array (
      0 => 4819,
      1 => 275,
      2 => 'Xã Cao Ngọc',
    ),
    4819 => 
    array (
      0 => 4820,
      1 => 275,
      2 => 'Xã Quang Trung',
    ),
    4820 => 
    array (
      0 => 4821,
      1 => 275,
      2 => 'Xã Đồng Thịnh',
    ),
    4821 => 
    array (
      0 => 4822,
      1 => 275,
      2 => 'Xã Ngọc Liên',
    ),
    4822 => 
    array (
      0 => 4823,
      1 => 275,
      2 => 'Xã Ngọc Sơn',
    ),
    4823 => 
    array (
      0 => 4824,
      1 => 275,
      2 => 'Xã Lộc Thịnh',
    ),
    4824 => 
    array (
      0 => 4825,
      1 => 275,
      2 => 'Xã Cao Thịnh',
    ),
    4825 => 
    array (
      0 => 4826,
      1 => 275,
      2 => 'Xã Ngọc Trung',
    ),
    4826 => 
    array (
      0 => 4827,
      1 => 275,
      2 => 'Xã Phùng Giáo',
    ),
    4827 => 
    array (
      0 => 4828,
      1 => 275,
      2 => 'Xã Phùng Minh',
    ),
    4828 => 
    array (
      0 => 4829,
      1 => 275,
      2 => 'Xã Phúc Thịnh',
    ),
    4829 => 
    array (
      0 => 4830,
      1 => 275,
      2 => 'Xã Nguyệt Ấn',
    ),
    4830 => 
    array (
      0 => 4831,
      1 => 275,
      2 => 'Xã Kiên Thọ',
    ),
    4831 => 
    array (
      0 => 4832,
      1 => 275,
      2 => 'Xã Minh Tiến',
    ),
    4832 => 
    array (
      0 => 4833,
      1 => 275,
      2 => 'Xã Minh Sơn',
    ),
    4833 => 
    array (
      0 => 4834,
      1 => 276,
      2 => 'Thị trấn Phong Sơn',
    ),
    4834 => 
    array (
      0 => 4835,
      1 => 276,
      2 => 'Xã Cẩm Thành',
    ),
    4835 => 
    array (
      0 => 4836,
      1 => 276,
      2 => 'Xã Cẩm Quý',
    ),
    4836 => 
    array (
      0 => 4837,
      1 => 276,
      2 => 'Xã Cẩm Lương',
    ),
    4837 => 
    array (
      0 => 4838,
      1 => 276,
      2 => 'Xã Cẩm Thạch',
    ),
    4838 => 
    array (
      0 => 4839,
      1 => 276,
      2 => 'Xã Cẩm Liên',
    ),
    4839 => 
    array (
      0 => 4840,
      1 => 276,
      2 => 'Xã Cẩm Giang',
    ),
    4840 => 
    array (
      0 => 4841,
      1 => 276,
      2 => 'Xã Cẩm Bình',
    ),
    4841 => 
    array (
      0 => 4842,
      1 => 276,
      2 => 'Xã Cẩm Tú',
    ),
    4842 => 
    array (
      0 => 4843,
      1 => 276,
      2 => 'Xã Cẩm Châu',
    ),
    4843 => 
    array (
      0 => 4844,
      1 => 276,
      2 => 'Xã Cẩm Tâm',
    ),
    4844 => 
    array (
      0 => 4845,
      1 => 276,
      2 => 'Xã Cẩm Ngọc',
    ),
    4845 => 
    array (
      0 => 4846,
      1 => 276,
      2 => 'Xã Cẩm Long',
    ),
    4846 => 
    array (
      0 => 4847,
      1 => 276,
      2 => 'Xã Cẩm Yên',
    ),
    4847 => 
    array (
      0 => 4848,
      1 => 276,
      2 => 'Xã Cẩm Tân',
    ),
    4848 => 
    array (
      0 => 4849,
      1 => 276,
      2 => 'Xã Cẩm Phú',
    ),
    4849 => 
    array (
      0 => 4850,
      1 => 276,
      2 => 'Xã Cẩm Vân',
    ),
    4850 => 
    array (
      0 => 4851,
      1 => 277,
      2 => 'Thị trấn Kim Tân',
    ),
    4851 => 
    array (
      0 => 4852,
      1 => 277,
      2 => 'Thị trấn Vân Du',
    ),
    4852 => 
    array (
      0 => 4853,
      1 => 277,
      2 => 'Xã Thạch Lâm',
    ),
    4853 => 
    array (
      0 => 4854,
      1 => 277,
      2 => 'Xã Thạch Quảng',
    ),
    4854 => 
    array (
      0 => 4855,
      1 => 277,
      2 => 'Xã Thạch Tượng',
    ),
    4855 => 
    array (
      0 => 4856,
      1 => 277,
      2 => 'Xã Thạch Cẩm',
    ),
    4856 => 
    array (
      0 => 4857,
      1 => 277,
      2 => 'Xã Thạch Sơn',
    ),
    4857 => 
    array (
      0 => 4858,
      1 => 277,
      2 => 'Xã Thạch Bình',
    ),
    4858 => 
    array (
      0 => 4859,
      1 => 277,
      2 => 'Xã Thạch Định',
    ),
    4859 => 
    array (
      0 => 4860,
      1 => 277,
      2 => 'Xã Thạch Đồng',
    ),
    4860 => 
    array (
      0 => 4861,
      1 => 277,
      2 => 'Xã Thạch Long',
    ),
    4861 => 
    array (
      0 => 4862,
      1 => 277,
      2 => 'Xã Thành Mỹ',
    ),
    4862 => 
    array (
      0 => 4863,
      1 => 277,
      2 => 'Xã Thành Yên',
    ),
    4863 => 
    array (
      0 => 4864,
      1 => 277,
      2 => 'Xã Thành Vinh',
    ),
    4864 => 
    array (
      0 => 4865,
      1 => 277,
      2 => 'Xã Thành Minh',
    ),
    4865 => 
    array (
      0 => 4866,
      1 => 277,
      2 => 'Xã Thành Công',
    ),
    4866 => 
    array (
      0 => 4867,
      1 => 277,
      2 => 'Xã Thành Tân',
    ),
    4867 => 
    array (
      0 => 4868,
      1 => 277,
      2 => 'Xã Thành Trực',
    ),
    4868 => 
    array (
      0 => 4869,
      1 => 277,
      2 => 'Xã Thành Tâm',
    ),
    4869 => 
    array (
      0 => 4870,
      1 => 277,
      2 => 'Xã Thành An',
    ),
    4870 => 
    array (
      0 => 4871,
      1 => 277,
      2 => 'Xã Thành Thọ',
    ),
    4871 => 
    array (
      0 => 4872,
      1 => 277,
      2 => 'Xã Thành Tiến',
    ),
    4872 => 
    array (
      0 => 4873,
      1 => 277,
      2 => 'Xã Thành Long',
    ),
    4873 => 
    array (
      0 => 4874,
      1 => 277,
      2 => 'Xã Thành Hưng',
    ),
    4874 => 
    array (
      0 => 4875,
      1 => 277,
      2 => 'Xã Ngọc Trạo',
    ),
    4875 => 
    array (
      0 => 4876,
      1 => 278,
      2 => 'Thị trấn Hà Trung',
    ),
    4876 => 
    array (
      0 => 4877,
      1 => 278,
      2 => 'Xã Hà Long',
    ),
    4877 => 
    array (
      0 => 4878,
      1 => 278,
      2 => 'Xã Hà Vinh',
    ),
    4878 => 
    array (
      0 => 4879,
      1 => 278,
      2 => 'Xã Hà Bắc',
    ),
    4879 => 
    array (
      0 => 4880,
      1 => 278,
      2 => 'Xã Hoạt Giang',
    ),
    4880 => 
    array (
      0 => 4881,
      1 => 278,
      2 => 'Xã Yên Dương',
    ),
    4881 => 
    array (
      0 => 4882,
      1 => 278,
      2 => 'Xã Hà Giang',
    ),
    4882 => 
    array (
      0 => 4883,
      1 => 278,
      2 => 'Xã Lĩnh Toại',
    ),
    4883 => 
    array (
      0 => 4884,
      1 => 278,
      2 => 'Xã Hà Ngọc',
    ),
    4884 => 
    array (
      0 => 4885,
      1 => 278,
      2 => 'Xã Yến Sơn',
    ),
    4885 => 
    array (
      0 => 4886,
      1 => 278,
      2 => 'Xã Hà Sơn',
    ),
    4886 => 
    array (
      0 => 4887,
      1 => 278,
      2 => 'Xã Hà Lĩnh',
    ),
    4887 => 
    array (
      0 => 4888,
      1 => 278,
      2 => 'Xã Hà Đông',
    ),
    4888 => 
    array (
      0 => 4889,
      1 => 278,
      2 => 'Xã Hà Tân',
    ),
    4889 => 
    array (
      0 => 4890,
      1 => 278,
      2 => 'Xã Hà Tiến',
    ),
    4890 => 
    array (
      0 => 4891,
      1 => 278,
      2 => 'Xã Hà Bình',
    ),
    4891 => 
    array (
      0 => 4892,
      1 => 278,
      2 => 'Xã Hà Lai',
    ),
    4892 => 
    array (
      0 => 4893,
      1 => 278,
      2 => 'Xã Hà Châu',
    ),
    4893 => 
    array (
      0 => 4894,
      1 => 278,
      2 => 'Xã Hà Thái',
    ),
    4894 => 
    array (
      0 => 4895,
      1 => 278,
      2 => 'Xã Hà Hải',
    ),
    4895 => 
    array (
      0 => 4896,
      1 => 279,
      2 => 'Thị trấn Vĩnh Lộc',
    ),
    4896 => 
    array (
      0 => 4897,
      1 => 279,
      2 => 'Xã Vĩnh Quang',
    ),
    4897 => 
    array (
      0 => 4898,
      1 => 279,
      2 => 'Xã Vĩnh Yên',
    ),
    4898 => 
    array (
      0 => 4899,
      1 => 279,
      2 => 'Xã Vĩnh Tiến',
    ),
    4899 => 
    array (
      0 => 4900,
      1 => 279,
      2 => 'Xã Vĩnh Long',
    ),
    4900 => 
    array (
      0 => 4901,
      1 => 279,
      2 => 'Xã Vĩnh Phúc',
    ),
    4901 => 
    array (
      0 => 4902,
      1 => 279,
      2 => 'Xã Vĩnh Hưng',
    ),
    4902 => 
    array (
      0 => 4903,
      1 => 279,
      2 => 'Xã Vĩnh Hòa',
    ),
    4903 => 
    array (
      0 => 4904,
      1 => 279,
      2 => 'Xã Minh Tân',
    ),
    4904 => 
    array (
      0 => 4905,
      1 => 279,
      2 => 'Xã Ninh Khang',
    ),
    4905 => 
    array (
      0 => 4906,
      1 => 279,
      2 => 'Xã Vĩnh Thịnh',
    ),
    4906 => 
    array (
      0 => 4907,
      1 => 279,
      2 => 'Xã Vĩnh An',
    ),
    4907 => 
    array (
      0 => 4908,
      1 => 280,
      2 => 'Thị trấn Thống Nhất',
    ),
    4908 => 
    array (
      0 => 4909,
      1 => 280,
      2 => 'Thị trấn Yên Lâm',
    ),
    4909 => 
    array (
      0 => 4910,
      1 => 280,
      2 => 'Xã Yên Tâm',
    ),
    4910 => 
    array (
      0 => 4911,
      1 => 280,
      2 => 'Xã Yên Phú',
    ),
    4911 => 
    array (
      0 => 4912,
      1 => 280,
      2 => 'Thị trấn Quý Lộc',
    ),
    4912 => 
    array (
      0 => 4913,
      1 => 280,
      2 => 'Xã Yên Thọ',
    ),
    4913 => 
    array (
      0 => 4914,
      1 => 280,
      2 => 'Xã Yên Trung',
    ),
    4914 => 
    array (
      0 => 4915,
      1 => 280,
      2 => 'Xã Yên Trường',
    ),
    4915 => 
    array (
      0 => 4916,
      1 => 280,
      2 => 'Xã Yên Phong',
    ),
    4916 => 
    array (
      0 => 4917,
      1 => 280,
      2 => 'Xã Yên Thái',
    ),
    4917 => 
    array (
      0 => 4918,
      1 => 280,
      2 => 'Xã Yên Hùng',
    ),
    4918 => 
    array (
      0 => 4919,
      1 => 280,
      2 => 'Xã Yên Thịnh',
    ),
    4919 => 
    array (
      0 => 4920,
      1 => 280,
      2 => 'Xã Yên Ninh',
    ),
    4920 => 
    array (
      0 => 4921,
      1 => 280,
      2 => 'Xã Yên Lạc',
    ),
    4921 => 
    array (
      0 => 4922,
      1 => 280,
      2 => 'Xã Định Tăng',
    ),
    4922 => 
    array (
      0 => 4923,
      1 => 280,
      2 => 'Xã Định Hòa',
    ),
    4923 => 
    array (
      0 => 4924,
      1 => 280,
      2 => 'Xã Định Thành',
    ),
    4924 => 
    array (
      0 => 4925,
      1 => 280,
      2 => 'Xã Định Công',
    ),
    4925 => 
    array (
      0 => 4926,
      1 => 280,
      2 => 'Xã Định Tân',
    ),
    4926 => 
    array (
      0 => 4927,
      1 => 280,
      2 => 'Xã Định Tiến',
    ),
    4927 => 
    array (
      0 => 4928,
      1 => 280,
      2 => 'Xã Định Long',
    ),
    4928 => 
    array (
      0 => 4929,
      1 => 280,
      2 => 'Xã Định Liên',
    ),
    4929 => 
    array (
      0 => 4930,
      1 => 280,
      2 => 'Thị trấn Quán Lào',
    ),
    4930 => 
    array (
      0 => 4931,
      1 => 280,
      2 => 'Xã Định Hưng',
    ),
    4931 => 
    array (
      0 => 4932,
      1 => 280,
      2 => 'Xã Định Hải',
    ),
    4932 => 
    array (
      0 => 4933,
      1 => 280,
      2 => 'Xã Định Bình',
    ),
    4933 => 
    array (
      0 => 4934,
      1 => 281,
      2 => 'Xã Xuân Hồng',
    ),
    4934 => 
    array (
      0 => 4935,
      1 => 281,
      2 => 'Thị trấn Thọ Xuân',
    ),
    4935 => 
    array (
      0 => 4936,
      1 => 281,
      2 => 'Xã Bắc Lương',
    ),
    4936 => 
    array (
      0 => 4937,
      1 => 281,
      2 => 'Xã Nam Giang',
    ),
    4937 => 
    array (
      0 => 4938,
      1 => 281,
      2 => 'Xã Xuân Phong',
    ),
    4938 => 
    array (
      0 => 4939,
      1 => 281,
      2 => 'Xã Thọ Lộc',
    ),
    4939 => 
    array (
      0 => 4940,
      1 => 281,
      2 => 'Xã Xuân Trường',
    ),
    4940 => 
    array (
      0 => 4941,
      1 => 281,
      2 => 'Xã Xuân Hòa',
    ),
    4941 => 
    array (
      0 => 4942,
      1 => 281,
      2 => 'Xã Thọ Hải',
    ),
    4942 => 
    array (
      0 => 4943,
      1 => 281,
      2 => 'Xã Tây Hồ',
    ),
    4943 => 
    array (
      0 => 4944,
      1 => 281,
      2 => 'Xã Xuân Giang',
    ),
    4944 => 
    array (
      0 => 4945,
      1 => 281,
      2 => 'Xã Xuân Sinh',
    ),
    4945 => 
    array (
      0 => 4946,
      1 => 281,
      2 => 'Xã Xuân Hưng',
    ),
    4946 => 
    array (
      0 => 4947,
      1 => 281,
      2 => 'Xã Thọ Diên',
    ),
    4947 => 
    array (
      0 => 4948,
      1 => 281,
      2 => 'Xã Thọ Lâm',
    ),
    4948 => 
    array (
      0 => 4949,
      1 => 281,
      2 => 'Xã Thọ Xương',
    ),
    4949 => 
    array (
      0 => 4950,
      1 => 281,
      2 => 'Xã Xuân Bái',
    ),
    4950 => 
    array (
      0 => 4951,
      1 => 281,
      2 => 'Xã Xuân Phú',
    ),
    4951 => 
    array (
      0 => 4952,
      1 => 281,
      2 => 'Thị trấn Sao Vàng',
    ),
    4952 => 
    array (
      0 => 4953,
      1 => 281,
      2 => 'Thị trấn Lam Sơn',
    ),
    4953 => 
    array (
      0 => 4954,
      1 => 281,
      2 => 'Xã Xuân Thiên',
    ),
    4954 => 
    array (
      0 => 4955,
      1 => 281,
      2 => 'Xã Thuận Minh',
    ),
    4955 => 
    array (
      0 => 4956,
      1 => 281,
      2 => 'Xã Thọ Lập',
    ),
    4956 => 
    array (
      0 => 4957,
      1 => 281,
      2 => 'Xã Quảng Phú',
    ),
    4957 => 
    array (
      0 => 4958,
      1 => 281,
      2 => 'Xã Xuân Tín',
    ),
    4958 => 
    array (
      0 => 4959,
      1 => 281,
      2 => 'Xã Phú Xuân',
    ),
    4959 => 
    array (
      0 => 4960,
      1 => 281,
      2 => 'Xã Xuân Lai',
    ),
    4960 => 
    array (
      0 => 4961,
      1 => 281,
      2 => 'Xã Xuân Lập',
    ),
    4961 => 
    array (
      0 => 4962,
      1 => 281,
      2 => 'Xã Xuân Minh',
    ),
    4962 => 
    array (
      0 => 4963,
      1 => 281,
      2 => 'Xã Trường Xuân',
    ),
    4963 => 
    array (
      0 => 4964,
      1 => 282,
      2 => 'Xã Bát Mọt',
    ),
    4964 => 
    array (
      0 => 4965,
      1 => 282,
      2 => 'Xã Yên Nhân',
    ),
    4965 => 
    array (
      0 => 4966,
      1 => 282,
      2 => 'Xã Xuân Lẹ',
    ),
    4966 => 
    array (
      0 => 4967,
      1 => 282,
      2 => 'Xã Vạn Xuân',
    ),
    4967 => 
    array (
      0 => 4968,
      1 => 282,
      2 => 'Xã Lương Sơn',
    ),
    4968 => 
    array (
      0 => 4969,
      1 => 282,
      2 => 'Xã Xuân Cao',
    ),
    4969 => 
    array (
      0 => 4970,
      1 => 282,
      2 => 'Xã Luận Thành',
    ),
    4970 => 
    array (
      0 => 4971,
      1 => 282,
      2 => 'Xã Luận Khê',
    ),
    4971 => 
    array (
      0 => 4972,
      1 => 282,
      2 => 'Xã Xuân Thắng',
    ),
    4972 => 
    array (
      0 => 4973,
      1 => 282,
      2 => 'Xã Xuân Lộc',
    ),
    4973 => 
    array (
      0 => 4974,
      1 => 282,
      2 => 'Thị trấn Thường Xuân',
    ),
    4974 => 
    array (
      0 => 4975,
      1 => 282,
      2 => 'Xã Xuân Dương',
    ),
    4975 => 
    array (
      0 => 4976,
      1 => 282,
      2 => 'Xã Thọ Thanh',
    ),
    4976 => 
    array (
      0 => 4977,
      1 => 282,
      2 => 'Xã Ngọc Phụng',
    ),
    4977 => 
    array (
      0 => 4978,
      1 => 282,
      2 => 'Xã Xuân Chinh',
    ),
    4978 => 
    array (
      0 => 4979,
      1 => 282,
      2 => 'Xã Tân Thành',
    ),
    4979 => 
    array (
      0 => 4980,
      1 => 283,
      2 => 'Thị trấn Triệu Sơn',
    ),
    4980 => 
    array (
      0 => 4981,
      1 => 283,
      2 => 'Xã Thọ Sơn',
    ),
    4981 => 
    array (
      0 => 4982,
      1 => 283,
      2 => 'Xã Thọ Bình',
    ),
    4982 => 
    array (
      0 => 4983,
      1 => 283,
      2 => 'Xã Thọ Tiến',
    ),
    4983 => 
    array (
      0 => 4984,
      1 => 283,
      2 => 'Xã Hợp Lý',
    ),
    4984 => 
    array (
      0 => 4985,
      1 => 283,
      2 => 'Xã Hợp Tiến',
    ),
    4985 => 
    array (
      0 => 4986,
      1 => 283,
      2 => 'Xã Hợp Thành',
    ),
    4986 => 
    array (
      0 => 4987,
      1 => 283,
      2 => 'Xã Triệu Thành',
    ),
    4987 => 
    array (
      0 => 4988,
      1 => 283,
      2 => 'Xã Hợp Thắng',
    ),
    4988 => 
    array (
      0 => 4989,
      1 => 283,
      2 => 'Xã Minh Sơn',
    ),
    4989 => 
    array (
      0 => 4990,
      1 => 283,
      2 => 'Xã Dân Lực',
    ),
    4990 => 
    array (
      0 => 4991,
      1 => 283,
      2 => 'Xã Dân Lý',
    ),
    4991 => 
    array (
      0 => 4992,
      1 => 283,
      2 => 'Xã Dân Quyền',
    ),
    4992 => 
    array (
      0 => 4993,
      1 => 283,
      2 => 'Xã An Nông',
    ),
    4993 => 
    array (
      0 => 4994,
      1 => 283,
      2 => 'Xã Văn Sơn',
    ),
    4994 => 
    array (
      0 => 4995,
      1 => 283,
      2 => 'Xã Thái Hòa',
    ),
    4995 => 
    array (
      0 => 4996,
      1 => 283,
      2 => 'Thị trấn Nưa',
    ),
    4996 => 
    array (
      0 => 4997,
      1 => 283,
      2 => 'Xã Đồng Lợi',
    ),
    4997 => 
    array (
      0 => 4998,
      1 => 283,
      2 => 'Xã Đồng Tiến',
    ),
    4998 => 
    array (
      0 => 4999,
      1 => 283,
      2 => 'Xã Đồng Thắng',
    ),
    4999 => 
    array (
      0 => 5000,
      1 => 283,
      2 => 'Xã Tiến Nông',
    ),
    5000 => 
    array (
      0 => 5001,
      1 => 283,
      2 => 'Xã Khuyến Nông',
    ),
    5001 => 
    array (
      0 => 5002,
      1 => 283,
      2 => 'Xã Xuân Thịnh',
    ),
    5002 => 
    array (
      0 => 5003,
      1 => 283,
      2 => 'Xã Xuân Lộc',
    ),
    5003 => 
    array (
      0 => 5004,
      1 => 283,
      2 => 'Xã Thọ Dân',
    ),
    5004 => 
    array (
      0 => 5005,
      1 => 283,
      2 => 'Xã Xuân Thọ',
    ),
    5005 => 
    array (
      0 => 5006,
      1 => 283,
      2 => 'Xã Thọ Tân',
    ),
    5006 => 
    array (
      0 => 5007,
      1 => 283,
      2 => 'Xã Thọ Ngọc',
    ),
    5007 => 
    array (
      0 => 5008,
      1 => 283,
      2 => 'Xã Thọ Cường',
    ),
    5008 => 
    array (
      0 => 5009,
      1 => 283,
      2 => 'Xã Thọ Phú',
    ),
    5009 => 
    array (
      0 => 5010,
      1 => 283,
      2 => 'Xã Thọ Vực',
    ),
    5010 => 
    array (
      0 => 5011,
      1 => 283,
      2 => 'Xã Thọ Thế',
    ),
    5011 => 
    array (
      0 => 5012,
      1 => 283,
      2 => 'Xã Nông Trường',
    ),
    5012 => 
    array (
      0 => 5013,
      1 => 283,
      2 => 'Xã Bình Sơn',
    ),
    5013 => 
    array (
      0 => 5014,
      1 => 284,
      2 => 'Thị trấn Thiệu Hóa',
    ),
    5014 => 
    array (
      0 => 5015,
      1 => 284,
      2 => 'Xã Thiệu Ngọc',
    ),
    5015 => 
    array (
      0 => 5016,
      1 => 284,
      2 => 'Xã Thiệu Vũ',
    ),
    5016 => 
    array (
      0 => 5017,
      1 => 284,
      2 => 'Xã Thiệu Phúc',
    ),
    5017 => 
    array (
      0 => 5018,
      1 => 284,
      2 => 'Xã Thiệu Tiến',
    ),
    5018 => 
    array (
      0 => 5019,
      1 => 284,
      2 => 'Xã Thiệu Công',
    ),
    5019 => 
    array (
      0 => 5020,
      1 => 284,
      2 => 'Xã Thiệu Phú',
    ),
    5020 => 
    array (
      0 => 5021,
      1 => 284,
      2 => 'Xã Thiệu Long',
    ),
    5021 => 
    array (
      0 => 5022,
      1 => 284,
      2 => 'Xã Thiệu Giang',
    ),
    5022 => 
    array (
      0 => 5023,
      1 => 284,
      2 => 'Xã Thiệu Duy',
    ),
    5023 => 
    array (
      0 => 5024,
      1 => 284,
      2 => 'Xã Thiệu Nguyên',
    ),
    5024 => 
    array (
      0 => 5025,
      1 => 284,
      2 => 'Xã Thiệu Hợp',
    ),
    5025 => 
    array (
      0 => 5026,
      1 => 284,
      2 => 'Xã Thiệu Thịnh',
    ),
    5026 => 
    array (
      0 => 5027,
      1 => 284,
      2 => 'Xã Thiệu Quang',
    ),
    5027 => 
    array (
      0 => 5028,
      1 => 284,
      2 => 'Xã Thiệu Thành',
    ),
    5028 => 
    array (
      0 => 5029,
      1 => 284,
      2 => 'Xã Thiệu Toán',
    ),
    5029 => 
    array (
      0 => 5030,
      1 => 284,
      2 => 'Xã Thiệu Chính',
    ),
    5030 => 
    array (
      0 => 5031,
      1 => 284,
      2 => 'Xã Thiệu Hòa',
    ),
    5031 => 
    array (
      0 => 5032,
      1 => 284,
      2 => 'Xã Minh Tâm',
    ),
    5032 => 
    array (
      0 => 5033,
      1 => 284,
      2 => 'Xã Thiệu Viên',
    ),
    5033 => 
    array (
      0 => 5034,
      1 => 284,
      2 => 'Xã Thiệu Lý',
    ),
    5034 => 
    array (
      0 => 5035,
      1 => 284,
      2 => 'Xã Thiệu Vận',
    ),
    5035 => 
    array (
      0 => 5036,
      1 => 284,
      2 => 'Xã Thiệu Trung',
    ),
    5036 => 
    array (
      0 => 5037,
      1 => 284,
      2 => 'Xã Tân Châu',
    ),
    5037 => 
    array (
      0 => 5038,
      1 => 284,
      2 => 'Xã Thiệu Giao',
    ),
    5038 => 
    array (
      0 => 5039,
      1 => 285,
      2 => 'Thị trấn Bút Sơn',
    ),
    5039 => 
    array (
      0 => 5040,
      1 => 285,
      2 => 'Xã Hoằng Giang',
    ),
    5040 => 
    array (
      0 => 5041,
      1 => 285,
      2 => 'Xã Hoằng Xuân',
    ),
    5041 => 
    array (
      0 => 5042,
      1 => 285,
      2 => 'Xã Hoằng Phượng',
    ),
    5042 => 
    array (
      0 => 5043,
      1 => 285,
      2 => 'Xã Hoằng Phú',
    ),
    5043 => 
    array (
      0 => 5044,
      1 => 285,
      2 => 'Xã Hoằng Quỳ',
    ),
    5044 => 
    array (
      0 => 5045,
      1 => 285,
      2 => 'Xã Hoằng Kim',
    ),
    5045 => 
    array (
      0 => 5046,
      1 => 285,
      2 => 'Xã Hoằng Trung',
    ),
    5046 => 
    array (
      0 => 5047,
      1 => 285,
      2 => 'Xã Hoằng Trinh',
    ),
    5047 => 
    array (
      0 => 5048,
      1 => 285,
      2 => 'Xã Hoằng Sơn',
    ),
    5048 => 
    array (
      0 => 5049,
      1 => 285,
      2 => 'Xã Hoằng Cát',
    ),
    5049 => 
    array (
      0 => 5050,
      1 => 285,
      2 => 'Xã Hoằng Xuyên',
    ),
    5050 => 
    array (
      0 => 5051,
      1 => 285,
      2 => 'Xã Hoằng Hợp',
    ),
    5051 => 
    array (
      0 => 5052,
      1 => 285,
      2 => 'Xã Hoằng Đức',
    ),
    5052 => 
    array (
      0 => 5053,
      1 => 285,
      2 => 'Xã Hoằng Hà',
    ),
    5053 => 
    array (
      0 => 5054,
      1 => 285,
      2 => 'Xã Hoằng Đạt',
    ),
    5054 => 
    array (
      0 => 5055,
      1 => 285,
      2 => 'Xã Hoằng Đạo',
    ),
    5055 => 
    array (
      0 => 5056,
      1 => 285,
      2 => 'Xã Hoằng Thắng',
    ),
    5056 => 
    array (
      0 => 5057,
      1 => 285,
      2 => 'Xã Hoằng Đồng',
    ),
    5057 => 
    array (
      0 => 5058,
      1 => 285,
      2 => 'Xã Hoằng Thái',
    ),
    5058 => 
    array (
      0 => 5059,
      1 => 285,
      2 => 'Xã Hoằng Thịnh',
    ),
    5059 => 
    array (
      0 => 5060,
      1 => 285,
      2 => 'Xã Hoằng Thành',
    ),
    5060 => 
    array (
      0 => 5061,
      1 => 285,
      2 => 'Xã Hoằng Lộc',
    ),
    5061 => 
    array (
      0 => 5062,
      1 => 285,
      2 => 'Xã Hoằng Trạch',
    ),
    5062 => 
    array (
      0 => 5063,
      1 => 285,
      2 => 'Xã Hoằng Phong',
    ),
    5063 => 
    array (
      0 => 5064,
      1 => 285,
      2 => 'Xã Hoằng Lưu',
    ),
    5064 => 
    array (
      0 => 5065,
      1 => 285,
      2 => 'Xã Hoằng Châu',
    ),
    5065 => 
    array (
      0 => 5066,
      1 => 285,
      2 => 'Xã Hoằng Tân',
    ),
    5066 => 
    array (
      0 => 5067,
      1 => 285,
      2 => 'Xã Hoằng Yến',
    ),
    5067 => 
    array (
      0 => 5068,
      1 => 285,
      2 => 'Xã Hoằng Tiến',
    ),
    5068 => 
    array (
      0 => 5069,
      1 => 285,
      2 => 'Xã Hoằng Hải',
    ),
    5069 => 
    array (
      0 => 5070,
      1 => 285,
      2 => 'Xã Hoằng Ngọc',
    ),
    5070 => 
    array (
      0 => 5071,
      1 => 285,
      2 => 'Xã Hoằng Trường',
    ),
    5071 => 
    array (
      0 => 5072,
      1 => 286,
      2 => 'Thị trấn Hậu Lộc',
    ),
    5072 => 
    array (
      0 => 5073,
      1 => 286,
      2 => 'Xã Đồng Lộc',
    ),
    5073 => 
    array (
      0 => 5074,
      1 => 286,
      2 => 'Xã Đại Lộc',
    ),
    5074 => 
    array (
      0 => 5075,
      1 => 286,
      2 => 'Xã Triệu Lộc',
    ),
    5075 => 
    array (
      0 => 5076,
      1 => 286,
      2 => 'Xã Tiến Lộc',
    ),
    5076 => 
    array (
      0 => 5077,
      1 => 286,
      2 => 'Xã Lộc Sơn',
    ),
    5077 => 
    array (
      0 => 5078,
      1 => 286,
      2 => 'Xã Cầu Lộc',
    ),
    5078 => 
    array (
      0 => 5079,
      1 => 286,
      2 => 'Xã Thành Lộc',
    ),
    5079 => 
    array (
      0 => 5080,
      1 => 286,
      2 => 'Xã Tuy Lộc',
    ),
    5080 => 
    array (
      0 => 5081,
      1 => 286,
      2 => 'Xã Phong Lộc',
    ),
    5081 => 
    array (
      0 => 5082,
      1 => 286,
      2 => 'Xã Mỹ Lộc',
    ),
    5082 => 
    array (
      0 => 5083,
      1 => 286,
      2 => 'Xã Thuần Lộc',
    ),
    5083 => 
    array (
      0 => 5084,
      1 => 286,
      2 => 'Xã Xuân Lộc',
    ),
    5084 => 
    array (
      0 => 5085,
      1 => 286,
      2 => 'Xã Hoa Lộc',
    ),
    5085 => 
    array (
      0 => 5086,
      1 => 286,
      2 => 'Xã Liên Lộc',
    ),
    5086 => 
    array (
      0 => 5087,
      1 => 286,
      2 => 'Xã Quang Lộc',
    ),
    5087 => 
    array (
      0 => 5088,
      1 => 286,
      2 => 'Xã Phú Lộc',
    ),
    5088 => 
    array (
      0 => 5089,
      1 => 286,
      2 => 'Xã Minh Lộc',
    ),
    5089 => 
    array (
      0 => 5090,
      1 => 286,
      2 => 'Xã Hưng Lộc',
    ),
    5090 => 
    array (
      0 => 5091,
      1 => 286,
      2 => 'Xã Hải Lộc',
    ),
    5091 => 
    array (
      0 => 5092,
      1 => 286,
      2 => 'Xã Đa Lộc',
    ),
    5092 => 
    array (
      0 => 5093,
      1 => 286,
      2 => 'Xã Ngư Lộc',
    ),
    5093 => 
    array (
      0 => 5094,
      1 => 287,
      2 => 'Thị trấn Nga Sơn',
    ),
    5094 => 
    array (
      0 => 5095,
      1 => 287,
      2 => 'Xã Ba Đình',
    ),
    5095 => 
    array (
      0 => 5096,
      1 => 287,
      2 => 'Xã Nga Vịnh',
    ),
    5096 => 
    array (
      0 => 5097,
      1 => 287,
      2 => 'Xã Nga Văn',
    ),
    5097 => 
    array (
      0 => 5098,
      1 => 287,
      2 => 'Xã Nga Thiện',
    ),
    5098 => 
    array (
      0 => 5099,
      1 => 287,
      2 => 'Xã Nga Tiến',
    ),
    5099 => 
    array (
      0 => 5100,
      1 => 287,
      2 => 'Xã Nga Phượng',
    ),
    5100 => 
    array (
      0 => 5101,
      1 => 287,
      2 => 'Xã Nga Trung',
    ),
    5101 => 
    array (
      0 => 5102,
      1 => 287,
      2 => 'Xã Nga Bạch',
    ),
    5102 => 
    array (
      0 => 5103,
      1 => 287,
      2 => 'Xã Nga Thanh',
    ),
    5103 => 
    array (
      0 => 5104,
      1 => 287,
      2 => 'Xã Nga Yên',
    ),
    5104 => 
    array (
      0 => 5105,
      1 => 287,
      2 => 'Xã Nga Giáp',
    ),
    5105 => 
    array (
      0 => 5106,
      1 => 287,
      2 => 'Xã Nga Hải',
    ),
    5106 => 
    array (
      0 => 5107,
      1 => 287,
      2 => 'Xã Nga An',
    ),
    5107 => 
    array (
      0 => 5108,
      1 => 287,
      2 => 'Xã Nga Phú',
    ),
    5108 => 
    array (
      0 => 5109,
      1 => 287,
      2 => 'Xã Nga Điền',
    ),
    5109 => 
    array (
      0 => 5110,
      1 => 287,
      2 => 'Xã Nga Tân',
    ),
    5110 => 
    array (
      0 => 5111,
      1 => 287,
      2 => 'Xã Nga Thủy',
    ),
    5111 => 
    array (
      0 => 5112,
      1 => 287,
      2 => 'Xã Nga Liên',
    ),
    5112 => 
    array (
      0 => 5113,
      1 => 287,
      2 => 'Xã Nga Thái',
    ),
    5113 => 
    array (
      0 => 5114,
      1 => 287,
      2 => 'Xã Nga Thạch',
    ),
    5114 => 
    array (
      0 => 5115,
      1 => 287,
      2 => 'Xã Nga Thắng',
    ),
    5115 => 
    array (
      0 => 5116,
      1 => 287,
      2 => 'Xã Nga Trường',
    ),
    5116 => 
    array (
      0 => 5117,
      1 => 288,
      2 => 'Thị trấn Yên Cát',
    ),
    5117 => 
    array (
      0 => 5118,
      1 => 288,
      2 => 'Xã Bãi Trành',
    ),
    5118 => 
    array (
      0 => 5119,
      1 => 288,
      2 => 'Xã Xuân Hòa',
    ),
    5119 => 
    array (
      0 => 5120,
      1 => 288,
      2 => 'Xã Xuân Bình',
    ),
    5120 => 
    array (
      0 => 5121,
      1 => 288,
      2 => 'Xã Hóa Quỳ',
    ),
    5121 => 
    array (
      0 => 5122,
      1 => 288,
      2 => 'Xã Cát Vân',
    ),
    5122 => 
    array (
      0 => 5123,
      1 => 288,
      2 => 'Xã Cát Tân',
    ),
    5123 => 
    array (
      0 => 5124,
      1 => 288,
      2 => 'Xã Tân Bình',
    ),
    5124 => 
    array (
      0 => 5125,
      1 => 288,
      2 => 'Xã Bình Lương',
    ),
    5125 => 
    array (
      0 => 5126,
      1 => 288,
      2 => 'Xã Thanh Quân',
    ),
    5126 => 
    array (
      0 => 5127,
      1 => 288,
      2 => 'Xã Thanh Xuân',
    ),
    5127 => 
    array (
      0 => 5128,
      1 => 288,
      2 => 'Xã Thanh Hòa',
    ),
    5128 => 
    array (
      0 => 5129,
      1 => 288,
      2 => 'Xã Thanh Phong',
    ),
    5129 => 
    array (
      0 => 5130,
      1 => 288,
      2 => 'Xã Thanh Lâm',
    ),
    5130 => 
    array (
      0 => 5131,
      1 => 288,
      2 => 'Xã Thanh Sơn',
    ),
    5131 => 
    array (
      0 => 5132,
      1 => 288,
      2 => 'Xã Thượng Ninh',
    ),
    5132 => 
    array (
      0 => 5133,
      1 => 289,
      2 => 'Thị trấn Bến Sung',
    ),
    5133 => 
    array (
      0 => 5134,
      1 => 289,
      2 => 'Xã Cán Khê',
    ),
    5134 => 
    array (
      0 => 5135,
      1 => 289,
      2 => 'Xã Xuân Du',
    ),
    5135 => 
    array (
      0 => 5136,
      1 => 289,
      2 => 'Xã Phượng Nghi',
    ),
    5136 => 
    array (
      0 => 5137,
      1 => 289,
      2 => 'Xã Mậu Lâm',
    ),
    5137 => 
    array (
      0 => 5138,
      1 => 289,
      2 => 'Xã Xuân Khang',
    ),
    5138 => 
    array (
      0 => 5139,
      1 => 289,
      2 => 'Xã Phú Nhuận',
    ),
    5139 => 
    array (
      0 => 5140,
      1 => 289,
      2 => 'Xã Hải Long',
    ),
    5140 => 
    array (
      0 => 5141,
      1 => 289,
      2 => 'Xã Xuân Thái',
    ),
    5141 => 
    array (
      0 => 5142,
      1 => 289,
      2 => 'Xã Xuân Phúc',
    ),
    5142 => 
    array (
      0 => 5143,
      1 => 289,
      2 => 'Xã Yên Thọ',
    ),
    5143 => 
    array (
      0 => 5144,
      1 => 289,
      2 => 'Xã Yên Lạc',
    ),
    5144 => 
    array (
      0 => 5145,
      1 => 289,
      2 => 'Xã Thanh Tân',
    ),
    5145 => 
    array (
      0 => 5146,
      1 => 289,
      2 => 'Xã Thanh Kỳ',
    ),
    5146 => 
    array (
      0 => 5147,
      1 => 290,
      2 => 'Thị trấn Nông Cống',
    ),
    5147 => 
    array (
      0 => 5148,
      1 => 290,
      2 => 'Xã Tân Phúc',
    ),
    5148 => 
    array (
      0 => 5149,
      1 => 290,
      2 => 'Xã Tân Thọ',
    ),
    5149 => 
    array (
      0 => 5150,
      1 => 290,
      2 => 'Xã Hoàng Sơn',
    ),
    5150 => 
    array (
      0 => 5151,
      1 => 290,
      2 => 'Xã Tân Khang',
    ),
    5151 => 
    array (
      0 => 5152,
      1 => 290,
      2 => 'Xã Hoàng Giang',
    ),
    5152 => 
    array (
      0 => 5153,
      1 => 290,
      2 => 'Xã Trung Chính',
    ),
    5153 => 
    array (
      0 => 5154,
      1 => 290,
      2 => 'Xã Trung Thành',
    ),
    5154 => 
    array (
      0 => 5155,
      1 => 290,
      2 => 'Xã Tế Thắng',
    ),
    5155 => 
    array (
      0 => 5156,
      1 => 290,
      2 => 'Xã Tế Lợi',
    ),
    5156 => 
    array (
      0 => 5157,
      1 => 290,
      2 => 'Xã Tế Nông',
    ),
    5157 => 
    array (
      0 => 5158,
      1 => 290,
      2 => 'Xã Minh Nghĩa',
    ),
    5158 => 
    array (
      0 => 5159,
      1 => 290,
      2 => 'Xã Minh Khôi',
    ),
    5159 => 
    array (
      0 => 5160,
      1 => 290,
      2 => 'Xã Vạn Hòa',
    ),
    5160 => 
    array (
      0 => 5161,
      1 => 290,
      2 => 'Xã Trường Trung',
    ),
    5161 => 
    array (
      0 => 5162,
      1 => 290,
      2 => 'Xã Vạn Thắng',
    ),
    5162 => 
    array (
      0 => 5163,
      1 => 290,
      2 => 'Xã Trường Giang',
    ),
    5163 => 
    array (
      0 => 5164,
      1 => 290,
      2 => 'Xã Vạn Thiện',
    ),
    5164 => 
    array (
      0 => 5165,
      1 => 290,
      2 => 'Xã Thăng Long',
    ),
    5165 => 
    array (
      0 => 5166,
      1 => 290,
      2 => 'Xã Trường Minh',
    ),
    5166 => 
    array (
      0 => 5167,
      1 => 290,
      2 => 'Xã Trường Sơn',
    ),
    5167 => 
    array (
      0 => 5168,
      1 => 290,
      2 => 'Xã Thăng Bình',
    ),
    5168 => 
    array (
      0 => 5169,
      1 => 290,
      2 => 'Xã Công Liêm',
    ),
    5169 => 
    array (
      0 => 5170,
      1 => 290,
      2 => 'Xã Tượng Văn',
    ),
    5170 => 
    array (
      0 => 5171,
      1 => 290,
      2 => 'Xã Thăng Thọ',
    ),
    5171 => 
    array (
      0 => 5172,
      1 => 290,
      2 => 'Xã Tượng Lĩnh',
    ),
    5172 => 
    array (
      0 => 5173,
      1 => 290,
      2 => 'Xã Tượng Sơn',
    ),
    5173 => 
    array (
      0 => 5174,
      1 => 290,
      2 => 'Xã Công Chính',
    ),
    5174 => 
    array (
      0 => 5175,
      1 => 290,
      2 => 'Xã Yên Mỹ',
    ),
    5175 => 
    array (
      0 => 5176,
      1 => 291,
      2 => 'Thị trấn Rừng Thông',
    ),
    5176 => 
    array (
      0 => 5177,
      1 => 291,
      2 => 'Xã Đông Hoàng',
    ),
    5177 => 
    array (
      0 => 5178,
      1 => 291,
      2 => 'Xã Đông Ninh',
    ),
    5178 => 
    array (
      0 => 5179,
      1 => 291,
      2 => 'Xã Đông Hòa',
    ),
    5179 => 
    array (
      0 => 5180,
      1 => 291,
      2 => 'Xã Đông Yên',
    ),
    5180 => 
    array (
      0 => 5181,
      1 => 291,
      2 => 'Xã Đông Minh',
    ),
    5181 => 
    array (
      0 => 5182,
      1 => 291,
      2 => 'Xã Đông Thanh',
    ),
    5182 => 
    array (
      0 => 5183,
      1 => 291,
      2 => 'Xã Đông Tiến',
    ),
    5183 => 
    array (
      0 => 5184,
      1 => 291,
      2 => 'Xã Đông Khê',
    ),
    5184 => 
    array (
      0 => 5185,
      1 => 291,
      2 => 'Xã Đông Thịnh',
    ),
    5185 => 
    array (
      0 => 5186,
      1 => 291,
      2 => 'Xã Đông Văn',
    ),
    5186 => 
    array (
      0 => 5187,
      1 => 291,
      2 => 'Xã Đông Phú',
    ),
    5187 => 
    array (
      0 => 5188,
      1 => 291,
      2 => 'Xã Đông Nam',
    ),
    5188 => 
    array (
      0 => 5189,
      1 => 291,
      2 => 'Xã Đông Quang',
    ),
    5189 => 
    array (
      0 => 5190,
      1 => 292,
      2 => 'Thị trấn Tân Phong',
    ),
    5190 => 
    array (
      0 => 5191,
      1 => 292,
      2 => 'Xã Quảng Trạch',
    ),
    5191 => 
    array (
      0 => 5192,
      1 => 292,
      2 => 'Xã Quảng Đức',
    ),
    5192 => 
    array (
      0 => 5193,
      1 => 292,
      2 => 'Xã Quảng Định',
    ),
    5193 => 
    array (
      0 => 5194,
      1 => 292,
      2 => 'Xã Quảng Nhân',
    ),
    5194 => 
    array (
      0 => 5195,
      1 => 292,
      2 => 'Xã Quảng Ninh',
    ),
    5195 => 
    array (
      0 => 5196,
      1 => 292,
      2 => 'Xã Quảng Bình',
    ),
    5196 => 
    array (
      0 => 5197,
      1 => 292,
      2 => 'Xã Quảng Hợp',
    ),
    5197 => 
    array (
      0 => 5198,
      1 => 292,
      2 => 'Xã Quảng Văn',
    ),
    5198 => 
    array (
      0 => 5199,
      1 => 292,
      2 => 'Xã Quảng Long',
    ),
    5199 => 
    array (
      0 => 5200,
      1 => 292,
      2 => 'Xã Quảng Yên',
    ),
    5200 => 
    array (
      0 => 5201,
      1 => 292,
      2 => 'Xã Quảng Hòa',
    ),
    5201 => 
    array (
      0 => 5202,
      1 => 292,
      2 => 'Xã Quảng Khê',
    ),
    5202 => 
    array (
      0 => 5203,
      1 => 292,
      2 => 'Xã Quảng Trung',
    ),
    5203 => 
    array (
      0 => 5204,
      1 => 292,
      2 => 'Xã Quảng Chính',
    ),
    5204 => 
    array (
      0 => 5205,
      1 => 292,
      2 => 'Xã Quảng Ngọc',
    ),
    5205 => 
    array (
      0 => 5206,
      1 => 292,
      2 => 'Xã Quảng Trường',
    ),
    5206 => 
    array (
      0 => 5207,
      1 => 292,
      2 => 'Xã Quảng Phúc',
    ),
    5207 => 
    array (
      0 => 5208,
      1 => 292,
      2 => 'Xã Quảng Giao',
    ),
    5208 => 
    array (
      0 => 5209,
      1 => 292,
      2 => 'Xã Quảng Hải',
    ),
    5209 => 
    array (
      0 => 5210,
      1 => 292,
      2 => 'Xã Quảng Lưu',
    ),
    5210 => 
    array (
      0 => 5211,
      1 => 292,
      2 => 'Xã Quảng Lộc',
    ),
    5211 => 
    array (
      0 => 5212,
      1 => 292,
      2 => 'Xã Tiên Trang',
    ),
    5212 => 
    array (
      0 => 5213,
      1 => 292,
      2 => 'Xã Quảng Nham',
    ),
    5213 => 
    array (
      0 => 5214,
      1 => 292,
      2 => 'Xã Quảng Thạch',
    ),
    5214 => 
    array (
      0 => 5215,
      1 => 292,
      2 => 'Xã Quảng Thái',
    ),
    5215 => 
    array (
      0 => 5216,
      1 => 293,
      2 => 'Phường Hải Hòa',
    ),
    5216 => 
    array (
      0 => 5217,
      1 => 293,
      2 => 'Phường Hải Châu',
    ),
    5217 => 
    array (
      0 => 5218,
      1 => 293,
      2 => 'Xã Thanh Thủy',
    ),
    5218 => 
    array (
      0 => 5219,
      1 => 293,
      2 => 'Xã Thanh Sơn',
    ),
    5219 => 
    array (
      0 => 5220,
      1 => 293,
      2 => 'Phường Hải Ninh',
    ),
    5220 => 
    array (
      0 => 5221,
      1 => 293,
      2 => 'Xã Anh Sơn',
    ),
    5221 => 
    array (
      0 => 5222,
      1 => 293,
      2 => 'Xã Ngọc Lĩnh',
    ),
    5222 => 
    array (
      0 => 5223,
      1 => 293,
      2 => 'Phường Hải An',
    ),
    5223 => 
    array (
      0 => 5224,
      1 => 293,
      2 => 'Xã Các Sơn',
    ),
    5224 => 
    array (
      0 => 5225,
      1 => 293,
      2 => 'Phường Tân Dân',
    ),
    5225 => 
    array (
      0 => 5226,
      1 => 293,
      2 => 'Phường Hải Lĩnh',
    ),
    5226 => 
    array (
      0 => 5227,
      1 => 293,
      2 => 'Xã Định Hải',
    ),
    5227 => 
    array (
      0 => 5228,
      1 => 293,
      2 => 'Xã Phú Sơn',
    ),
    5228 => 
    array (
      0 => 5229,
      1 => 293,
      2 => 'Phường Ninh Hải',
    ),
    5229 => 
    array (
      0 => 5230,
      1 => 293,
      2 => 'Phường Nguyên Bình',
    ),
    5230 => 
    array (
      0 => 5231,
      1 => 293,
      2 => 'Xã Hải Nhân',
    ),
    5231 => 
    array (
      0 => 5232,
      1 => 293,
      2 => 'Phường Bình Minh',
    ),
    5232 => 
    array (
      0 => 5233,
      1 => 293,
      2 => 'Phường Hải Thanh',
    ),
    5233 => 
    array (
      0 => 5234,
      1 => 293,
      2 => 'Xã Phú Lâm',
    ),
    5234 => 
    array (
      0 => 5235,
      1 => 293,
      2 => 'Phường Xuân Lâm',
    ),
    5235 => 
    array (
      0 => 5236,
      1 => 293,
      2 => 'Phường Trúc Lâm',
    ),
    5236 => 
    array (
      0 => 5237,
      1 => 293,
      2 => 'Phường Hải Bình',
    ),
    5237 => 
    array (
      0 => 5238,
      1 => 293,
      2 => 'Xã Tân Trường',
    ),
    5238 => 
    array (
      0 => 5239,
      1 => 293,
      2 => 'Xã Tùng Lâm',
    ),
    5239 => 
    array (
      0 => 5240,
      1 => 293,
      2 => 'Phường Tĩnh Hải',
    ),
    5240 => 
    array (
      0 => 5241,
      1 => 293,
      2 => 'Phường Mai Lâm',
    ),
    5241 => 
    array (
      0 => 5242,
      1 => 293,
      2 => 'Xã Trường Lâm',
    ),
    5242 => 
    array (
      0 => 5243,
      1 => 293,
      2 => 'Xã Hải Yến',
    ),
    5243 => 
    array (
      0 => 5244,
      1 => 293,
      2 => 'Phường Hải Thượng',
    ),
    5244 => 
    array (
      0 => 5245,
      1 => 293,
      2 => 'Xã Nghi Sơn',
    ),
    5245 => 
    array (
      0 => 5246,
      1 => 293,
      2 => 'Xã Hải Hà',
    ),
    5246 => 
    array (
      0 => 5247,
      1 => 294,
      2 => 'Phường Đông Vĩnh',
    ),
    5247 => 
    array (
      0 => 5248,
      1 => 294,
      2 => 'Phường Hà Huy Tập',
    ),
    5248 => 
    array (
      0 => 5249,
      1 => 294,
      2 => 'Phường Lê Lợi',
    ),
    5249 => 
    array (
      0 => 5250,
      1 => 294,
      2 => 'Phường Quán Bàu',
    ),
    5250 => 
    array (
      0 => 5251,
      1 => 294,
      2 => 'Phường Hưng Bình',
    ),
    5251 => 
    array (
      0 => 5252,
      1 => 294,
      2 => 'Phường Hưng Phúc',
    ),
    5252 => 
    array (
      0 => 5253,
      1 => 294,
      2 => 'Phường Hưng Dũng',
    ),
    5253 => 
    array (
      0 => 5254,
      1 => 294,
      2 => 'Phường Cửa Nam',
    ),
    5254 => 
    array (
      0 => 5255,
      1 => 294,
      2 => 'Phường Quang Trung',
    ),
    5255 => 
    array (
      0 => 5256,
      1 => 294,
      2 => 'Phường Đội Cung',
    ),
    5256 => 
    array (
      0 => 5257,
      1 => 294,
      2 => 'Phường Lê Mao',
    ),
    5257 => 
    array (
      0 => 5258,
      1 => 294,
      2 => 'Phường Trường Thi',
    ),
    5258 => 
    array (
      0 => 5259,
      1 => 294,
      2 => 'Phường Bến Thủy',
    ),
    5259 => 
    array (
      0 => 5260,
      1 => 294,
      2 => 'Phường Hồng Sơn',
    ),
    5260 => 
    array (
      0 => 5261,
      1 => 294,
      2 => 'Phường Trung Đô',
    ),
    5261 => 
    array (
      0 => 5262,
      1 => 294,
      2 => 'Xã Nghi Phú',
    ),
    5262 => 
    array (
      0 => 5263,
      1 => 294,
      2 => 'Xã Hưng Đông',
    ),
    5263 => 
    array (
      0 => 5264,
      1 => 294,
      2 => 'Xã Hưng Lộc',
    ),
    5264 => 
    array (
      0 => 5265,
      1 => 294,
      2 => 'Xã Hưng Hòa',
    ),
    5265 => 
    array (
      0 => 5266,
      1 => 294,
      2 => 'Phường Vinh Tân',
    ),
    5266 => 
    array (
      0 => 5267,
      1 => 294,
      2 => 'Xã Nghi Liên',
    ),
    5267 => 
    array (
      0 => 5268,
      1 => 294,
      2 => 'Xã Nghi Ân',
    ),
    5268 => 
    array (
      0 => 5269,
      1 => 294,
      2 => 'Xã Nghi Kim',
    ),
    5269 => 
    array (
      0 => 5270,
      1 => 294,
      2 => 'Xã Nghi Đức',
    ),
    5270 => 
    array (
      0 => 5271,
      1 => 294,
      2 => 'Xã Hưng Chính',
    ),
    5271 => 
    array (
      0 => 5272,
      1 => 295,
      2 => 'Phường Nghi Thuỷ',
    ),
    5272 => 
    array (
      0 => 5273,
      1 => 295,
      2 => 'Phường Nghi Tân',
    ),
    5273 => 
    array (
      0 => 5274,
      1 => 295,
      2 => 'Phường Thu Thuỷ',
    ),
    5274 => 
    array (
      0 => 5275,
      1 => 295,
      2 => 'Phường Nghi Hòa',
    ),
    5275 => 
    array (
      0 => 5276,
      1 => 295,
      2 => 'Phường Nghi Hải',
    ),
    5276 => 
    array (
      0 => 5277,
      1 => 295,
      2 => 'Phường Nghi Hương',
    ),
    5277 => 
    array (
      0 => 5278,
      1 => 295,
      2 => 'Phường Nghi Thu',
    ),
    5278 => 
    array (
      0 => 5279,
      1 => 296,
      2 => 'Phường Hoà Hiếu',
    ),
    5279 => 
    array (
      0 => 5280,
      1 => 296,
      2 => 'Phường Quang Phong',
    ),
    5280 => 
    array (
      0 => 5281,
      1 => 296,
      2 => 'Phường Quang Tiến',
    ),
    5281 => 
    array (
      0 => 5282,
      1 => 296,
      2 => 'Phường Long Sơn',
    ),
    5282 => 
    array (
      0 => 5283,
      1 => 296,
      2 => 'Xã Nghĩa Tiến',
    ),
    5283 => 
    array (
      0 => 5284,
      1 => 296,
      2 => 'Xã Nghĩa Mỹ',
    ),
    5284 => 
    array (
      0 => 5285,
      1 => 296,
      2 => 'Xã Tây Hiếu',
    ),
    5285 => 
    array (
      0 => 5286,
      1 => 296,
      2 => 'Xã Nghĩa Thuận',
    ),
    5286 => 
    array (
      0 => 5287,
      1 => 296,
      2 => 'Xã Đông Hiếu',
    ),
    5287 => 
    array (
      0 => 5288,
      1 => 297,
      2 => 'Thị trấn Kim Sơn',
    ),
    5288 => 
    array (
      0 => 5289,
      1 => 297,
      2 => 'Xã Thông Thụ',
    ),
    5289 => 
    array (
      0 => 5290,
      1 => 297,
      2 => 'Xã Đồng Văn',
    ),
    5290 => 
    array (
      0 => 5291,
      1 => 297,
      2 => 'Xã Hạnh Dịch',
    ),
    5291 => 
    array (
      0 => 5292,
      1 => 297,
      2 => 'Xã Tiền Phong',
    ),
    5292 => 
    array (
      0 => 5293,
      1 => 297,
      2 => 'Xã Nậm Giải',
    ),
    5293 => 
    array (
      0 => 5294,
      1 => 297,
      2 => 'Xã Tri Lễ',
    ),
    5294 => 
    array (
      0 => 5295,
      1 => 297,
      2 => 'Xã Châu Kim',
    ),
    5295 => 
    array (
      0 => 5296,
      1 => 297,
      2 => 'Xã Mường Nọc',
    ),
    5296 => 
    array (
      0 => 5297,
      1 => 297,
      2 => 'Xã Châu Thôn',
    ),
    5297 => 
    array (
      0 => 5298,
      1 => 297,
      2 => 'Xã Nậm Nhoóng',
    ),
    5298 => 
    array (
      0 => 5299,
      1 => 297,
      2 => 'Xã Quang Phong',
    ),
    5299 => 
    array (
      0 => 5300,
      1 => 297,
      2 => 'Xã Căm Muộn',
    ),
    5300 => 
    array (
      0 => 5301,
      1 => 298,
      2 => 'Thị trấn Tân Lạc',
    ),
    5301 => 
    array (
      0 => 5302,
      1 => 298,
      2 => 'Xã Châu Bính',
    ),
    5302 => 
    array (
      0 => 5303,
      1 => 298,
      2 => 'Xã Châu Thuận',
    ),
    5303 => 
    array (
      0 => 5304,
      1 => 298,
      2 => 'Xã Châu Hội',
    ),
    5304 => 
    array (
      0 => 5305,
      1 => 298,
      2 => 'Xã Châu Nga',
    ),
    5305 => 
    array (
      0 => 5306,
      1 => 298,
      2 => 'Xã Châu Tiến',
    ),
    5306 => 
    array (
      0 => 5307,
      1 => 298,
      2 => 'Xã Châu Hạnh',
    ),
    5307 => 
    array (
      0 => 5308,
      1 => 298,
      2 => 'Xã Châu Thắng',
    ),
    5308 => 
    array (
      0 => 5309,
      1 => 298,
      2 => 'Xã Châu Phong',
    ),
    5309 => 
    array (
      0 => 5310,
      1 => 298,
      2 => 'Xã Châu Hoàn',
    ),
    5310 => 
    array (
      0 => 5311,
      1 => 298,
      2 => 'Xã Diên Lãm',
    ),
    5311 => 
    array (
      0 => 5312,
      1 => 299,
      2 => 'Thị trấn Mường Xén',
    ),
    5312 => 
    array (
      0 => 5313,
      1 => 299,
      2 => 'Xã Mỹ Lý',
    ),
    5313 => 
    array (
      0 => 5314,
      1 => 299,
      2 => 'Xã Bắc Lý',
    ),
    5314 => 
    array (
      0 => 5315,
      1 => 299,
      2 => 'Xã Keng Đu',
    ),
    5315 => 
    array (
      0 => 5316,
      1 => 299,
      2 => 'Xã Đoọc Mạy',
    ),
    5316 => 
    array (
      0 => 5317,
      1 => 299,
      2 => 'Xã Huồi Tụ',
    ),
    5317 => 
    array (
      0 => 5318,
      1 => 299,
      2 => 'Xã Mường Lống',
    ),
    5318 => 
    array (
      0 => 5319,
      1 => 299,
      2 => 'Xã Na Loi',
    ),
    5319 => 
    array (
      0 => 5320,
      1 => 299,
      2 => 'Xã Nậm Cắn',
    ),
    5320 => 
    array (
      0 => 5321,
      1 => 299,
      2 => 'Xã Bảo Nam',
    ),
    5321 => 
    array (
      0 => 5322,
      1 => 299,
      2 => 'Xã Phà Đánh',
    ),
    5322 => 
    array (
      0 => 5323,
      1 => 299,
      2 => 'Xã Bảo Thắng',
    ),
    5323 => 
    array (
      0 => 5324,
      1 => 299,
      2 => 'Xã Hữu Lập',
    ),
    5324 => 
    array (
      0 => 5325,
      1 => 299,
      2 => 'Xã Tà Cạ',
    ),
    5325 => 
    array (
      0 => 5326,
      1 => 299,
      2 => 'Xã Chiêu Lưu',
    ),
    5326 => 
    array (
      0 => 5327,
      1 => 299,
      2 => 'Xã Mường Típ',
    ),
    5327 => 
    array (
      0 => 5328,
      1 => 299,
      2 => 'Xã Hữu Kiệm',
    ),
    5328 => 
    array (
      0 => 5329,
      1 => 299,
      2 => 'Xã Tây Sơn',
    ),
    5329 => 
    array (
      0 => 5330,
      1 => 299,
      2 => 'Xã Mường Ải',
    ),
    5330 => 
    array (
      0 => 5331,
      1 => 299,
      2 => 'Xã Na Ngoi',
    ),
    5331 => 
    array (
      0 => 5332,
      1 => 300,
      2 => 'Thị trấn Thạch Giám',
    ),
    5332 => 
    array (
      0 => 5333,
      1 => 300,
      2 => 'Xã Mai Sơn',
    ),
    5333 => 
    array (
      0 => 5334,
      1 => 300,
      2 => 'Xã Nhôn Mai',
    ),
    5334 => 
    array (
      0 => 5335,
      1 => 300,
      2 => 'Xã Hữu Khuông',
    ),
    5335 => 
    array (
      0 => 5336,
      1 => 300,
      2 => 'Xã Yên Tĩnh',
    ),
    5336 => 
    array (
      0 => 5337,
      1 => 300,
      2 => 'Xã Nga My',
    ),
    5337 => 
    array (
      0 => 5338,
      1 => 300,
      2 => 'Xã Xiêng My',
    ),
    5338 => 
    array (
      0 => 5339,
      1 => 300,
      2 => 'Xã Lưỡng Minh',
    ),
    5339 => 
    array (
      0 => 5340,
      1 => 300,
      2 => 'Xã Yên Hòa',
    ),
    5340 => 
    array (
      0 => 5341,
      1 => 300,
      2 => 'Xã Yên Na',
    ),
    5341 => 
    array (
      0 => 5342,
      1 => 300,
      2 => 'Xã Lưu Kiền',
    ),
    5342 => 
    array (
      0 => 5343,
      1 => 300,
      2 => 'Xã Xá Lượng',
    ),
    5343 => 
    array (
      0 => 5344,
      1 => 300,
      2 => 'Xã Tam Thái',
    ),
    5344 => 
    array (
      0 => 5345,
      1 => 300,
      2 => 'Xã Tam Đình',
    ),
    5345 => 
    array (
      0 => 5346,
      1 => 300,
      2 => 'Xã Yên Thắng',
    ),
    5346 => 
    array (
      0 => 5347,
      1 => 300,
      2 => 'Xã Tam Quang',
    ),
    5347 => 
    array (
      0 => 5348,
      1 => 300,
      2 => 'Xã Tam Hợp',
    ),
    5348 => 
    array (
      0 => 5349,
      1 => 301,
      2 => 'Thị trấn Nghĩa Đàn',
    ),
    5349 => 
    array (
      0 => 5350,
      1 => 301,
      2 => 'Xã Nghĩa Mai',
    ),
    5350 => 
    array (
      0 => 5351,
      1 => 301,
      2 => 'Xã Nghĩa Yên',
    ),
    5351 => 
    array (
      0 => 5352,
      1 => 301,
      2 => 'Xã Nghĩa Lạc',
    ),
    5352 => 
    array (
      0 => 5353,
      1 => 301,
      2 => 'Xã Nghĩa Lâm',
    ),
    5353 => 
    array (
      0 => 5354,
      1 => 301,
      2 => 'Xã Nghĩa Sơn',
    ),
    5354 => 
    array (
      0 => 5355,
      1 => 301,
      2 => 'Xã Nghĩa Lợi',
    ),
    5355 => 
    array (
      0 => 5356,
      1 => 301,
      2 => 'Xã Nghĩa Bình',
    ),
    5356 => 
    array (
      0 => 5357,
      1 => 301,
      2 => 'Xã Nghĩa Thọ',
    ),
    5357 => 
    array (
      0 => 5358,
      1 => 301,
      2 => 'Xã Nghĩa Minh',
    ),
    5358 => 
    array (
      0 => 5359,
      1 => 301,
      2 => 'Xã Nghĩa Phú',
    ),
    5359 => 
    array (
      0 => 5360,
      1 => 301,
      2 => 'Xã Nghĩa Hưng',
    ),
    5360 => 
    array (
      0 => 5361,
      1 => 301,
      2 => 'Xã Nghĩa Hồng',
    ),
    5361 => 
    array (
      0 => 5362,
      1 => 301,
      2 => 'Xã Nghĩa Thịnh',
    ),
    5362 => 
    array (
      0 => 5363,
      1 => 301,
      2 => 'Xã Nghĩa Trung',
    ),
    5363 => 
    array (
      0 => 5364,
      1 => 301,
      2 => 'Xã Nghĩa Hội',
    ),
    5364 => 
    array (
      0 => 5365,
      1 => 301,
      2 => 'Xã Nghĩa Thành',
    ),
    5365 => 
    array (
      0 => 5366,
      1 => 301,
      2 => 'Xã Nghĩa Hiếu',
    ),
    5366 => 
    array (
      0 => 5367,
      1 => 301,
      2 => 'Xã Nghĩa Đức',
    ),
    5367 => 
    array (
      0 => 5368,
      1 => 301,
      2 => 'Xã Nghĩa An',
    ),
    5368 => 
    array (
      0 => 5369,
      1 => 301,
      2 => 'Xã Nghĩa Long',
    ),
    5369 => 
    array (
      0 => 5370,
      1 => 301,
      2 => 'Xã Nghĩa Lộc',
    ),
    5370 => 
    array (
      0 => 5371,
      1 => 301,
      2 => 'Xã Nghĩa Khánh',
    ),
    5371 => 
    array (
      0 => 5372,
      1 => 302,
      2 => 'Thị trấn Quỳ Hợp',
    ),
    5372 => 
    array (
      0 => 5373,
      1 => 302,
      2 => 'Xã Yên Hợp',
    ),
    5373 => 
    array (
      0 => 5374,
      1 => 302,
      2 => 'Xã Châu Tiến',
    ),
    5374 => 
    array (
      0 => 5375,
      1 => 302,
      2 => 'Xã Châu Hồng',
    ),
    5375 => 
    array (
      0 => 5376,
      1 => 302,
      2 => 'Xã Đồng Hợp',
    ),
    5376 => 
    array (
      0 => 5377,
      1 => 302,
      2 => 'Xã Châu Thành',
    ),
    5377 => 
    array (
      0 => 5378,
      1 => 302,
      2 => 'Xã Liên Hợp',
    ),
    5378 => 
    array (
      0 => 5379,
      1 => 302,
      2 => 'Xã Châu Lộc',
    ),
    5379 => 
    array (
      0 => 5380,
      1 => 302,
      2 => 'Xã Tam Hợp',
    ),
    5380 => 
    array (
      0 => 5381,
      1 => 302,
      2 => 'Xã Châu Cường',
    ),
    5381 => 
    array (
      0 => 5382,
      1 => 302,
      2 => 'Xã Châu Quang',
    ),
    5382 => 
    array (
      0 => 5383,
      1 => 302,
      2 => 'Xã Thọ Hợp',
    ),
    5383 => 
    array (
      0 => 5384,
      1 => 302,
      2 => 'Xã Minh Hợp',
    ),
    5384 => 
    array (
      0 => 5385,
      1 => 302,
      2 => 'Xã Nghĩa Xuân',
    ),
    5385 => 
    array (
      0 => 5386,
      1 => 302,
      2 => 'Xã Châu Thái',
    ),
    5386 => 
    array (
      0 => 5387,
      1 => 302,
      2 => 'Xã Châu Đình',
    ),
    5387 => 
    array (
      0 => 5388,
      1 => 302,
      2 => 'Xã Văn Lợi',
    ),
    5388 => 
    array (
      0 => 5389,
      1 => 302,
      2 => 'Xã Nam Sơn',
    ),
    5389 => 
    array (
      0 => 5390,
      1 => 302,
      2 => 'Xã Châu Lý',
    ),
    5390 => 
    array (
      0 => 5391,
      1 => 302,
      2 => 'Xã Hạ Sơn',
    ),
    5391 => 
    array (
      0 => 5392,
      1 => 302,
      2 => 'Xã Bắc Sơn',
    ),
    5392 => 
    array (
      0 => 5393,
      1 => 303,
      2 => 'Thị trấn Cầu Giát',
    ),
    5393 => 
    array (
      0 => 5394,
      1 => 303,
      2 => 'Xã Quỳnh Thắng',
    ),
    5394 => 
    array (
      0 => 5395,
      1 => 303,
      2 => 'Xã Quỳnh Tân',
    ),
    5395 => 
    array (
      0 => 5396,
      1 => 303,
      2 => 'Xã Quỳnh Châu',
    ),
    5396 => 
    array (
      0 => 5397,
      1 => 303,
      2 => 'Xã Tân Sơn',
    ),
    5397 => 
    array (
      0 => 5398,
      1 => 303,
      2 => 'Xã Quỳnh Văn',
    ),
    5398 => 
    array (
      0 => 5399,
      1 => 303,
      2 => 'Xã Ngọc Sơn',
    ),
    5399 => 
    array (
      0 => 5400,
      1 => 303,
      2 => 'Xã Quỳnh Tam',
    ),
    5400 => 
    array (
      0 => 5401,
      1 => 303,
      2 => 'Xã Quỳnh Hoa',
    ),
    5401 => 
    array (
      0 => 5402,
      1 => 303,
      2 => 'Xã Quỳnh Thạch',
    ),
    5402 => 
    array (
      0 => 5403,
      1 => 303,
      2 => 'Xã Quỳnh Bảng',
    ),
    5403 => 
    array (
      0 => 5404,
      1 => 303,
      2 => 'Xã Quỳnh Mỹ',
    ),
    5404 => 
    array (
      0 => 5405,
      1 => 303,
      2 => 'Xã Quỳnh Thanh',
    ),
    5405 => 
    array (
      0 => 5406,
      1 => 303,
      2 => 'Xã Quỳnh Hậu',
    ),
    5406 => 
    array (
      0 => 5407,
      1 => 303,
      2 => 'Xã Quỳnh Lâm',
    ),
    5407 => 
    array (
      0 => 5408,
      1 => 303,
      2 => 'Xã Quỳnh Đôi',
    ),
    5408 => 
    array (
      0 => 5409,
      1 => 303,
      2 => 'Xã Quỳnh Lương',
    ),
    5409 => 
    array (
      0 => 5410,
      1 => 303,
      2 => 'Xã Quỳnh Hồng',
    ),
    5410 => 
    array (
      0 => 5411,
      1 => 303,
      2 => 'Xã Quỳnh Yên',
    ),
    5411 => 
    array (
      0 => 5412,
      1 => 303,
      2 => 'Xã Quỳnh Bá',
    ),
    5412 => 
    array (
      0 => 5413,
      1 => 303,
      2 => 'Xã Quỳnh Minh',
    ),
    5413 => 
    array (
      0 => 5414,
      1 => 303,
      2 => 'Xã Quỳnh Diễn',
    ),
    5414 => 
    array (
      0 => 5415,
      1 => 303,
      2 => 'Xã Quỳnh Hưng',
    ),
    5415 => 
    array (
      0 => 5416,
      1 => 303,
      2 => 'Xã Quỳnh Giang',
    ),
    5416 => 
    array (
      0 => 5417,
      1 => 303,
      2 => 'Xã Quỳnh Ngọc',
    ),
    5417 => 
    array (
      0 => 5418,
      1 => 303,
      2 => 'Xã Quỳnh Nghĩa',
    ),
    5418 => 
    array (
      0 => 5419,
      1 => 303,
      2 => 'Xã An Hòa',
    ),
    5419 => 
    array (
      0 => 5420,
      1 => 303,
      2 => 'Xã Tiến Thủy',
    ),
    5420 => 
    array (
      0 => 5421,
      1 => 303,
      2 => 'Xã Sơn Hải',
    ),
    5421 => 
    array (
      0 => 5422,
      1 => 303,
      2 => 'Xã Quỳnh Thọ',
    ),
    5422 => 
    array (
      0 => 5423,
      1 => 303,
      2 => 'Xã Quỳnh Thuận',
    ),
    5423 => 
    array (
      0 => 5424,
      1 => 303,
      2 => 'Xã Quỳnh Long',
    ),
    5424 => 
    array (
      0 => 5425,
      1 => 303,
      2 => 'Xã Tân Thắng',
    ),
    5425 => 
    array (
      0 => 5426,
      1 => 304,
      2 => 'Thị trấn Con Cuông',
    ),
    5426 => 
    array (
      0 => 5427,
      1 => 304,
      2 => 'Xã Bình Chuẩn',
    ),
    5427 => 
    array (
      0 => 5428,
      1 => 304,
      2 => 'Xã Lạng Khê',
    ),
    5428 => 
    array (
      0 => 5429,
      1 => 304,
      2 => 'Xã Cam Lâm',
    ),
    5429 => 
    array (
      0 => 5430,
      1 => 304,
      2 => 'Xã Thạch Ngàn',
    ),
    5430 => 
    array (
      0 => 5431,
      1 => 304,
      2 => 'Xã Đôn Phục',
    ),
    5431 => 
    array (
      0 => 5432,
      1 => 304,
      2 => 'Xã Mậu Đức',
    ),
    5432 => 
    array (
      0 => 5433,
      1 => 304,
      2 => 'Xã Châu Khê',
    ),
    5433 => 
    array (
      0 => 5434,
      1 => 304,
      2 => 'Xã Chi Khê',
    ),
    5434 => 
    array (
      0 => 5435,
      1 => 304,
      2 => 'Xã Bồng Khê',
    ),
    5435 => 
    array (
      0 => 5436,
      1 => 304,
      2 => 'Xã Yên Khê',
    ),
    5436 => 
    array (
      0 => 5437,
      1 => 304,
      2 => 'Xã Lục Dạ',
    ),
    5437 => 
    array (
      0 => 5438,
      1 => 304,
      2 => 'Xã Môn Sơn',
    ),
    5438 => 
    array (
      0 => 5439,
      1 => 305,
      2 => 'Thị trấn Tân Kỳ',
    ),
    5439 => 
    array (
      0 => 5440,
      1 => 305,
      2 => 'Xã Tân Hợp',
    ),
    5440 => 
    array (
      0 => 5441,
      1 => 305,
      2 => 'Xã Tân Phú',
    ),
    5441 => 
    array (
      0 => 5442,
      1 => 305,
      2 => 'Xã Tân Xuân',
    ),
    5442 => 
    array (
      0 => 5443,
      1 => 305,
      2 => 'Xã Giai Xuân',
    ),
    5443 => 
    array (
      0 => 5444,
      1 => 305,
      2 => 'Xã Nghĩa Bình',
    ),
    5444 => 
    array (
      0 => 5445,
      1 => 305,
      2 => 'Xã Nghĩa Đồng',
    ),
    5445 => 
    array (
      0 => 5446,
      1 => 305,
      2 => 'Xã Đồng Văn',
    ),
    5446 => 
    array (
      0 => 5447,
      1 => 305,
      2 => 'Xã Nghĩa Thái',
    ),
    5447 => 
    array (
      0 => 5448,
      1 => 305,
      2 => 'Xã Nghĩa Hợp',
    ),
    5448 => 
    array (
      0 => 5449,
      1 => 305,
      2 => 'Xã Nghĩa Hoàn',
    ),
    5449 => 
    array (
      0 => 5450,
      1 => 305,
      2 => 'Xã Nghĩa Phúc',
    ),
    5450 => 
    array (
      0 => 5451,
      1 => 305,
      2 => 'Xã Tiên Kỳ',
    ),
    5451 => 
    array (
      0 => 5452,
      1 => 305,
      2 => 'Xã Tân An',
    ),
    5452 => 
    array (
      0 => 5453,
      1 => 305,
      2 => 'Xã Nghĩa Dũng',
    ),
    5453 => 
    array (
      0 => 5454,
      1 => 305,
      2 => 'Xã Tân Long',
    ),
    5454 => 
    array (
      0 => 5455,
      1 => 305,
      2 => 'Xã Kỳ Sơn',
    ),
    5455 => 
    array (
      0 => 5456,
      1 => 305,
      2 => 'Xã Hương Sơn',
    ),
    5456 => 
    array (
      0 => 5457,
      1 => 305,
      2 => 'Xã Kỳ Tân',
    ),
    5457 => 
    array (
      0 => 5458,
      1 => 305,
      2 => 'Xã Phú Sơn',
    ),
    5458 => 
    array (
      0 => 5459,
      1 => 305,
      2 => 'Xã Tân Hương',
    ),
    5459 => 
    array (
      0 => 5460,
      1 => 305,
      2 => 'Xã Nghĩa Hành',
    ),
    5460 => 
    array (
      0 => 5461,
      1 => 306,
      2 => 'Thị trấn Anh Sơn',
    ),
    5461 => 
    array (
      0 => 5462,
      1 => 306,
      2 => 'Xã Thọ Sơn',
    ),
    5462 => 
    array (
      0 => 5463,
      1 => 306,
      2 => 'Xã Thành Sơn',
    ),
    5463 => 
    array (
      0 => 5464,
      1 => 306,
      2 => 'Xã Bình Sơn',
    ),
    5464 => 
    array (
      0 => 5465,
      1 => 306,
      2 => 'Xã Tam Sơn',
    ),
    5465 => 
    array (
      0 => 5466,
      1 => 306,
      2 => 'Xã Đỉnh Sơn',
    ),
    5466 => 
    array (
      0 => 5467,
      1 => 306,
      2 => 'Xã Hùng Sơn',
    ),
    5467 => 
    array (
      0 => 5468,
      1 => 306,
      2 => 'Xã Cẩm Sơn',
    ),
    5468 => 
    array (
      0 => 5469,
      1 => 306,
      2 => 'Xã Đức Sơn',
    ),
    5469 => 
    array (
      0 => 5470,
      1 => 306,
      2 => 'Xã Tường Sơn',
    ),
    5470 => 
    array (
      0 => 5471,
      1 => 306,
      2 => 'Xã Hoa Sơn',
    ),
    5471 => 
    array (
      0 => 5472,
      1 => 306,
      2 => 'Xã Tào Sơn',
    ),
    5472 => 
    array (
      0 => 5473,
      1 => 306,
      2 => 'Xã Vĩnh Sơn',
    ),
    5473 => 
    array (
      0 => 5474,
      1 => 306,
      2 => 'Xã Lạng Sơn',
    ),
    5474 => 
    array (
      0 => 5475,
      1 => 306,
      2 => 'Xã Hội Sơn',
    ),
    5475 => 
    array (
      0 => 5476,
      1 => 306,
      2 => 'Xã Thạch Sơn',
    ),
    5476 => 
    array (
      0 => 5477,
      1 => 306,
      2 => 'Xã Phúc Sơn',
    ),
    5477 => 
    array (
      0 => 5478,
      1 => 306,
      2 => 'Xã Long Sơn',
    ),
    5478 => 
    array (
      0 => 5479,
      1 => 306,
      2 => 'Xã Khai Sơn',
    ),
    5479 => 
    array (
      0 => 5480,
      1 => 306,
      2 => 'Xã Lĩnh Sơn',
    ),
    5480 => 
    array (
      0 => 5481,
      1 => 306,
      2 => 'Xã Cao Sơn',
    ),
    5481 => 
    array (
      0 => 5482,
      1 => 307,
      2 => 'Thị trấn Diễn Châu',
    ),
    5482 => 
    array (
      0 => 5483,
      1 => 307,
      2 => 'Xã Diễn Lâm',
    ),
    5483 => 
    array (
      0 => 5484,
      1 => 307,
      2 => 'Xã Diễn Đoài',
    ),
    5484 => 
    array (
      0 => 5485,
      1 => 307,
      2 => 'Xã Diễn Trường',
    ),
    5485 => 
    array (
      0 => 5486,
      1 => 307,
      2 => 'Xã Diễn Yên',
    ),
    5486 => 
    array (
      0 => 5487,
      1 => 307,
      2 => 'Xã Diễn Hoàng',
    ),
    5487 => 
    array (
      0 => 5488,
      1 => 307,
      2 => 'Xã Diễn Hùng',
    ),
    5488 => 
    array (
      0 => 5489,
      1 => 307,
      2 => 'Xã Diễn Mỹ',
    ),
    5489 => 
    array (
      0 => 5490,
      1 => 307,
      2 => 'Xã Diễn Hồng',
    ),
    5490 => 
    array (
      0 => 5491,
      1 => 307,
      2 => 'Xã Diễn Phong',
    ),
    5491 => 
    array (
      0 => 5492,
      1 => 307,
      2 => 'Xã Diễn Hải',
    ),
    5492 => 
    array (
      0 => 5493,
      1 => 307,
      2 => 'Xã Diễn Tháp',
    ),
    5493 => 
    array (
      0 => 5494,
      1 => 307,
      2 => 'Xã Diễn Liên',
    ),
    5494 => 
    array (
      0 => 5495,
      1 => 307,
      2 => 'Xã Diễn Vạn',
    ),
    5495 => 
    array (
      0 => 5496,
      1 => 307,
      2 => 'Xã Diễn Kim',
    ),
    5496 => 
    array (
      0 => 5497,
      1 => 307,
      2 => 'Xã Diễn Kỷ',
    ),
    5497 => 
    array (
      0 => 5498,
      1 => 307,
      2 => 'Xã Diễn Xuân',
    ),
    5498 => 
    array (
      0 => 5499,
      1 => 307,
      2 => 'Xã Diễn Thái',
    ),
    5499 => 
    array (
      0 => 5500,
      1 => 307,
      2 => 'Xã Diễn Đồng',
    ),
    5500 => 
    array (
      0 => 5501,
      1 => 307,
      2 => 'Xã Diễn Bích',
    ),
    5501 => 
    array (
      0 => 5502,
      1 => 307,
      2 => 'Xã Diễn Hạnh',
    ),
    5502 => 
    array (
      0 => 5503,
      1 => 307,
      2 => 'Xã Diễn Ngọc',
    ),
    5503 => 
    array (
      0 => 5504,
      1 => 307,
      2 => 'Xã Diễn Quảng',
    ),
    5504 => 
    array (
      0 => 5505,
      1 => 307,
      2 => 'Xã Diễn Nguyên',
    ),
    5505 => 
    array (
      0 => 5506,
      1 => 307,
      2 => 'Xã Diễn Hoa',
    ),
    5506 => 
    array (
      0 => 5507,
      1 => 307,
      2 => 'Xã Diễn Thành',
    ),
    5507 => 
    array (
      0 => 5508,
      1 => 307,
      2 => 'Xã Diễn Phúc',
    ),
    5508 => 
    array (
      0 => 5509,
      1 => 307,
      2 => 'Xã Diễn Cát',
    ),
    5509 => 
    array (
      0 => 5510,
      1 => 307,
      2 => 'Xã Diễn Thịnh',
    ),
    5510 => 
    array (
      0 => 5511,
      1 => 307,
      2 => 'Xã Diễn Tân',
    ),
    5511 => 
    array (
      0 => 5512,
      1 => 307,
      2 => 'Xã Minh Châu',
    ),
    5512 => 
    array (
      0 => 5513,
      1 => 307,
      2 => 'Xã Diễn Thọ',
    ),
    5513 => 
    array (
      0 => 5514,
      1 => 307,
      2 => 'Xã Diễn Lợi',
    ),
    5514 => 
    array (
      0 => 5515,
      1 => 307,
      2 => 'Xã Diễn Lộc',
    ),
    5515 => 
    array (
      0 => 5516,
      1 => 307,
      2 => 'Xã Diễn Trung',
    ),
    5516 => 
    array (
      0 => 5517,
      1 => 307,
      2 => 'Xã Diễn An',
    ),
    5517 => 
    array (
      0 => 5518,
      1 => 307,
      2 => 'Xã Diễn Phú',
    ),
    5518 => 
    array (
      0 => 5519,
      1 => 308,
      2 => 'Thị trấn Yên Thành',
    ),
    5519 => 
    array (
      0 => 5520,
      1 => 308,
      2 => 'Xã Mã Thành',
    ),
    5520 => 
    array (
      0 => 5521,
      1 => 308,
      2 => 'Xã Tiến Thành',
    ),
    5521 => 
    array (
      0 => 5522,
      1 => 308,
      2 => 'Xã Lăng Thành',
    ),
    5522 => 
    array (
      0 => 5523,
      1 => 308,
      2 => 'Xã Tân Thành',
    ),
    5523 => 
    array (
      0 => 5524,
      1 => 308,
      2 => 'Xã Đức Thành',
    ),
    5524 => 
    array (
      0 => 5525,
      1 => 308,
      2 => 'Xã Kim Thành',
    ),
    5525 => 
    array (
      0 => 5526,
      1 => 308,
      2 => 'Xã Hậu Thành',
    ),
    5526 => 
    array (
      0 => 5527,
      1 => 308,
      2 => 'Xã Hùng Thành',
    ),
    5527 => 
    array (
      0 => 5528,
      1 => 308,
      2 => 'Xã Đô Thành',
    ),
    5528 => 
    array (
      0 => 5529,
      1 => 308,
      2 => 'Xã Thọ Thành',
    ),
    5529 => 
    array (
      0 => 5530,
      1 => 308,
      2 => 'Xã Quang Thành',
    ),
    5530 => 
    array (
      0 => 5531,
      1 => 308,
      2 => 'Xã Tây Thành',
    ),
    5531 => 
    array (
      0 => 5532,
      1 => 308,
      2 => 'Xã Phúc Thành',
    ),
    5532 => 
    array (
      0 => 5533,
      1 => 308,
      2 => 'Xã Hồng Thành',
    ),
    5533 => 
    array (
      0 => 5534,
      1 => 308,
      2 => 'Xã Đồng Thành',
    ),
    5534 => 
    array (
      0 => 5535,
      1 => 308,
      2 => 'Xã Phú Thành',
    ),
    5535 => 
    array (
      0 => 5536,
      1 => 308,
      2 => 'Xã Hoa Thành',
    ),
    5536 => 
    array (
      0 => 5537,
      1 => 308,
      2 => 'Xã Tăng Thành',
    ),
    5537 => 
    array (
      0 => 5538,
      1 => 308,
      2 => 'Xã Văn Thành',
    ),
    5538 => 
    array (
      0 => 5539,
      1 => 308,
      2 => 'Xã Thịnh Thành',
    ),
    5539 => 
    array (
      0 => 5540,
      1 => 308,
      2 => 'Xã Hợp Thành',
    ),
    5540 => 
    array (
      0 => 5541,
      1 => 308,
      2 => 'Xã Xuân Thành',
    ),
    5541 => 
    array (
      0 => 5542,
      1 => 308,
      2 => 'Xã Bắc Thành',
    ),
    5542 => 
    array (
      0 => 5543,
      1 => 308,
      2 => 'Xã Nhân Thành',
    ),
    5543 => 
    array (
      0 => 5544,
      1 => 308,
      2 => 'Xã Trung Thành',
    ),
    5544 => 
    array (
      0 => 5545,
      1 => 308,
      2 => 'Xã Long Thành',
    ),
    5545 => 
    array (
      0 => 5546,
      1 => 308,
      2 => 'Xã Minh Thành',
    ),
    5546 => 
    array (
      0 => 5547,
      1 => 308,
      2 => 'Xã Nam Thành',
    ),
    5547 => 
    array (
      0 => 5548,
      1 => 308,
      2 => 'Xã Vĩnh Thành',
    ),
    5548 => 
    array (
      0 => 5549,
      1 => 308,
      2 => 'Xã Lý Thành',
    ),
    5549 => 
    array (
      0 => 5550,
      1 => 308,
      2 => 'Xã Khánh Thành',
    ),
    5550 => 
    array (
      0 => 5551,
      1 => 308,
      2 => 'Xã Viên Thành',
    ),
    5551 => 
    array (
      0 => 5552,
      1 => 308,
      2 => 'Xã Đại Thành',
    ),
    5552 => 
    array (
      0 => 5553,
      1 => 308,
      2 => 'Xã Liên Thành',
    ),
    5553 => 
    array (
      0 => 5554,
      1 => 308,
      2 => 'Xã Bảo Thành',
    ),
    5554 => 
    array (
      0 => 5555,
      1 => 308,
      2 => 'Xã Mỹ Thành',
    ),
    5555 => 
    array (
      0 => 5556,
      1 => 308,
      2 => 'Xã Công Thành',
    ),
    5556 => 
    array (
      0 => 5557,
      1 => 308,
      2 => 'Xã Sơn Thành',
    ),
    5557 => 
    array (
      0 => 5558,
      1 => 309,
      2 => 'Thị trấn Đô Lương',
    ),
    5558 => 
    array (
      0 => 5559,
      1 => 309,
      2 => 'Xã Giang Sơn Đông',
    ),
    5559 => 
    array (
      0 => 5560,
      1 => 309,
      2 => 'Xã Giang Sơn Tây',
    ),
    5560 => 
    array (
      0 => 5561,
      1 => 309,
      2 => 'Xã Lam Sơn',
    ),
    5561 => 
    array (
      0 => 5562,
      1 => 309,
      2 => 'Xã Bồi Sơn',
    ),
    5562 => 
    array (
      0 => 5563,
      1 => 309,
      2 => 'Xã Hồng Sơn',
    ),
    5563 => 
    array (
      0 => 5564,
      1 => 309,
      2 => 'Xã Bài Sơn',
    ),
    5564 => 
    array (
      0 => 5565,
      1 => 309,
      2 => 'Xã Ngọc Sơn',
    ),
    5565 => 
    array (
      0 => 5566,
      1 => 309,
      2 => 'Xã Bắc Sơn',
    ),
    5566 => 
    array (
      0 => 5567,
      1 => 309,
      2 => 'Xã Tràng Sơn',
    ),
    5567 => 
    array (
      0 => 5568,
      1 => 309,
      2 => 'Xã Thượng Sơn',
    ),
    5568 => 
    array (
      0 => 5569,
      1 => 309,
      2 => 'Xã Hòa Sơn',
    ),
    5569 => 
    array (
      0 => 5570,
      1 => 309,
      2 => 'Xã Đặng Sơn',
    ),
    5570 => 
    array (
      0 => 5571,
      1 => 309,
      2 => 'Xã Đông Sơn',
    ),
    5571 => 
    array (
      0 => 5572,
      1 => 309,
      2 => 'Xã Nam Sơn',
    ),
    5572 => 
    array (
      0 => 5573,
      1 => 309,
      2 => 'Xã Lưu Sơn',
    ),
    5573 => 
    array (
      0 => 5574,
      1 => 309,
      2 => 'Xã Yên Sơn',
    ),
    5574 => 
    array (
      0 => 5575,
      1 => 309,
      2 => 'Xã Văn Sơn',
    ),
    5575 => 
    array (
      0 => 5576,
      1 => 309,
      2 => 'Xã Đà Sơn',
    ),
    5576 => 
    array (
      0 => 5577,
      1 => 309,
      2 => 'Xã Lạc Sơn',
    ),
    5577 => 
    array (
      0 => 5578,
      1 => 309,
      2 => 'Xã Tân Sơn',
    ),
    5578 => 
    array (
      0 => 5579,
      1 => 309,
      2 => 'Xã Thái Sơn',
    ),
    5579 => 
    array (
      0 => 5580,
      1 => 309,
      2 => 'Xã Quang Sơn',
    ),
    5580 => 
    array (
      0 => 5581,
      1 => 309,
      2 => 'Xã Thịnh Sơn',
    ),
    5581 => 
    array (
      0 => 5582,
      1 => 309,
      2 => 'Xã Trung Sơn',
    ),
    5582 => 
    array (
      0 => 5583,
      1 => 309,
      2 => 'Xã Xuân Sơn',
    ),
    5583 => 
    array (
      0 => 5584,
      1 => 309,
      2 => 'Xã Minh Sơn',
    ),
    5584 => 
    array (
      0 => 5585,
      1 => 309,
      2 => 'Xã Thuận Sơn',
    ),
    5585 => 
    array (
      0 => 5586,
      1 => 309,
      2 => 'Xã Nhân Sơn',
    ),
    5586 => 
    array (
      0 => 5587,
      1 => 309,
      2 => 'Xã Hiến Sơn',
    ),
    5587 => 
    array (
      0 => 5588,
      1 => 309,
      2 => 'Xã Mỹ Sơn',
    ),
    5588 => 
    array (
      0 => 5589,
      1 => 309,
      2 => 'Xã Trù Sơn',
    ),
    5589 => 
    array (
      0 => 5590,
      1 => 309,
      2 => 'Xã Đại Sơn',
    ),
    5590 => 
    array (
      0 => 5591,
      1 => 310,
      2 => 'Thị trấn Thanh Chương',
    ),
    5591 => 
    array (
      0 => 5592,
      1 => 310,
      2 => 'Xã Cát Văn',
    ),
    5592 => 
    array (
      0 => 5593,
      1 => 310,
      2 => 'Xã Thanh Nho',
    ),
    5593 => 
    array (
      0 => 5594,
      1 => 310,
      2 => 'Xã Hạnh Lâm',
    ),
    5594 => 
    array (
      0 => 5595,
      1 => 310,
      2 => 'Xã Thanh Sơn',
    ),
    5595 => 
    array (
      0 => 5596,
      1 => 310,
      2 => 'Xã Thanh Hòa',
    ),
    5596 => 
    array (
      0 => 5597,
      1 => 310,
      2 => 'Xã Phong Thịnh',
    ),
    5597 => 
    array (
      0 => 5598,
      1 => 310,
      2 => 'Xã Thanh Phong',
    ),
    5598 => 
    array (
      0 => 5599,
      1 => 310,
      2 => 'Xã Thanh Mỹ',
    ),
    5599 => 
    array (
      0 => 5600,
      1 => 310,
      2 => 'Xã Thanh Tiên',
    ),
    5600 => 
    array (
      0 => 5601,
      1 => 310,
      2 => 'Xã Thanh Liên',
    ),
    5601 => 
    array (
      0 => 5602,
      1 => 310,
      2 => 'Xã Đại Đồng',
    ),
    5602 => 
    array (
      0 => 5603,
      1 => 310,
      2 => 'Xã Thanh Đồng',
    ),
    5603 => 
    array (
      0 => 5604,
      1 => 310,
      2 => 'Xã Thanh Ngọc',
    ),
    5604 => 
    array (
      0 => 5605,
      1 => 310,
      2 => 'Xã Thanh Hương',
    ),
    5605 => 
    array (
      0 => 5606,
      1 => 310,
      2 => 'Xã Ngọc Lâm',
    ),
    5606 => 
    array (
      0 => 5607,
      1 => 310,
      2 => 'Xã Thanh Lĩnh',
    ),
    5607 => 
    array (
      0 => 5608,
      1 => 310,
      2 => 'Xã Đồng Văn',
    ),
    5608 => 
    array (
      0 => 5609,
      1 => 310,
      2 => 'Xã Ngọc Sơn',
    ),
    5609 => 
    array (
      0 => 5610,
      1 => 310,
      2 => 'Xã Thanh Thịnh',
    ),
    5610 => 
    array (
      0 => 5611,
      1 => 310,
      2 => 'Xã Thanh An',
    ),
    5611 => 
    array (
      0 => 5612,
      1 => 310,
      2 => 'Xã Thanh Chi',
    ),
    5612 => 
    array (
      0 => 5613,
      1 => 310,
      2 => 'Xã Xuân Tường',
    ),
    5613 => 
    array (
      0 => 5614,
      1 => 310,
      2 => 'Xã Thanh Dương',
    ),
    5614 => 
    array (
      0 => 5615,
      1 => 310,
      2 => 'Xã Thanh Lương',
    ),
    5615 => 
    array (
      0 => 5616,
      1 => 310,
      2 => 'Xã Thanh Khê',
    ),
    5616 => 
    array (
      0 => 5617,
      1 => 310,
      2 => 'Xã Võ Liệt',
    ),
    5617 => 
    array (
      0 => 5618,
      1 => 310,
      2 => 'Xã Thanh Long',
    ),
    5618 => 
    array (
      0 => 5619,
      1 => 310,
      2 => 'Xã Thanh Thủy',
    ),
    5619 => 
    array (
      0 => 5620,
      1 => 310,
      2 => 'Xã Thanh Khai',
    ),
    5620 => 
    array (
      0 => 5621,
      1 => 310,
      2 => 'Xã Thanh Yên',
    ),
    5621 => 
    array (
      0 => 5622,
      1 => 310,
      2 => 'Xã Thanh Hà',
    ),
    5622 => 
    array (
      0 => 5623,
      1 => 310,
      2 => 'Xã Thanh Giang',
    ),
    5623 => 
    array (
      0 => 5624,
      1 => 310,
      2 => 'Xã Thanh Tùng',
    ),
    5624 => 
    array (
      0 => 5625,
      1 => 310,
      2 => 'Xã Thanh Lâm',
    ),
    5625 => 
    array (
      0 => 5626,
      1 => 310,
      2 => 'Xã Thanh Mai',
    ),
    5626 => 
    array (
      0 => 5627,
      1 => 310,
      2 => 'Xã Thanh Xuân',
    ),
    5627 => 
    array (
      0 => 5628,
      1 => 310,
      2 => 'Xã Thanh Đức',
    ),
    5628 => 
    array (
      0 => 5629,
      1 => 311,
      2 => 'Thị trấn Quán Hành',
    ),
    5629 => 
    array (
      0 => 5630,
      1 => 311,
      2 => 'Xã Nghi Văn',
    ),
    5630 => 
    array (
      0 => 5631,
      1 => 311,
      2 => 'Xã Nghi Yên',
    ),
    5631 => 
    array (
      0 => 5632,
      1 => 311,
      2 => 'Xã Nghi Tiến',
    ),
    5632 => 
    array (
      0 => 5633,
      1 => 311,
      2 => 'Xã Nghi Hưng',
    ),
    5633 => 
    array (
      0 => 5634,
      1 => 311,
      2 => 'Xã Nghi Đồng',
    ),
    5634 => 
    array (
      0 => 5635,
      1 => 311,
      2 => 'Xã Nghi Thiết',
    ),
    5635 => 
    array (
      0 => 5636,
      1 => 311,
      2 => 'Xã Nghi Lâm',
    ),
    5636 => 
    array (
      0 => 5637,
      1 => 311,
      2 => 'Xã Nghi Quang',
    ),
    5637 => 
    array (
      0 => 5638,
      1 => 311,
      2 => 'Xã Nghi Kiều',
    ),
    5638 => 
    array (
      0 => 5639,
      1 => 311,
      2 => 'Xã Nghi Mỹ',
    ),
    5639 => 
    array (
      0 => 5640,
      1 => 311,
      2 => 'Xã Nghi Phương',
    ),
    5640 => 
    array (
      0 => 5641,
      1 => 311,
      2 => 'Xã Nghi Thuận',
    ),
    5641 => 
    array (
      0 => 5642,
      1 => 311,
      2 => 'Xã Nghi Long',
    ),
    5642 => 
    array (
      0 => 5643,
      1 => 311,
      2 => 'Xã Nghi Xá',
    ),
    5643 => 
    array (
      0 => 5644,
      1 => 311,
      2 => 'Xã Nghi Hoa',
    ),
    5644 => 
    array (
      0 => 5645,
      1 => 311,
      2 => 'Xã Khánh Hợp',
    ),
    5645 => 
    array (
      0 => 5646,
      1 => 311,
      2 => 'Xã Nghi Thịnh',
    ),
    5646 => 
    array (
      0 => 5647,
      1 => 311,
      2 => 'Xã Nghi Công Bắc',
    ),
    5647 => 
    array (
      0 => 5648,
      1 => 311,
      2 => 'Xã Nghi Công Nam',
    ),
    5648 => 
    array (
      0 => 5649,
      1 => 311,
      2 => 'Xã Nghi Thạch',
    ),
    5649 => 
    array (
      0 => 5650,
      1 => 311,
      2 => 'Xã Nghi Trung',
    ),
    5650 => 
    array (
      0 => 5651,
      1 => 311,
      2 => 'Xã Nghi Trường',
    ),
    5651 => 
    array (
      0 => 5652,
      1 => 311,
      2 => 'Xã Nghi Diên',
    ),
    5652 => 
    array (
      0 => 5653,
      1 => 311,
      2 => 'Xã Nghi Phong',
    ),
    5653 => 
    array (
      0 => 5654,
      1 => 311,
      2 => 'Xã Nghi Xuân',
    ),
    5654 => 
    array (
      0 => 5655,
      1 => 311,
      2 => 'Xã Phúc Thọ',
    ),
    5655 => 
    array (
      0 => 5656,
      1 => 311,
      2 => 'Xã Nghi Thái',
    ),
    5656 => 
    array (
      0 => 5657,
      1 => 312,
      2 => 'Xã Nam Hưng',
    ),
    5657 => 
    array (
      0 => 5658,
      1 => 312,
      2 => 'Xã Nam Nghĩa',
    ),
    5658 => 
    array (
      0 => 5659,
      1 => 312,
      2 => 'Xã Nam Thanh',
    ),
    5659 => 
    array (
      0 => 5660,
      1 => 312,
      2 => 'Xã Nam Anh',
    ),
    5660 => 
    array (
      0 => 5661,
      1 => 312,
      2 => 'Xã Nam Xuân',
    ),
    5661 => 
    array (
      0 => 5662,
      1 => 312,
      2 => 'Xã Nam Thái',
    ),
    5662 => 
    array (
      0 => 5663,
      1 => 312,
      2 => 'Thị trấn Nam Đàn',
    ),
    5663 => 
    array (
      0 => 5664,
      1 => 312,
      2 => 'Xã Nam Lĩnh',
    ),
    5664 => 
    array (
      0 => 5665,
      1 => 312,
      2 => 'Xã Nam Giang',
    ),
    5665 => 
    array (
      0 => 5666,
      1 => 312,
      2 => 'Xã Xuân Hòa',
    ),
    5666 => 
    array (
      0 => 5667,
      1 => 312,
      2 => 'Xã Hùng Tiến',
    ),
    5667 => 
    array (
      0 => 5668,
      1 => 312,
      2 => 'Xã Thượng Tân Lộc',
    ),
    5668 => 
    array (
      0 => 5669,
      1 => 312,
      2 => 'Xã Kim Liên',
    ),
    5669 => 
    array (
      0 => 5670,
      1 => 312,
      2 => 'Xã Hồng Long',
    ),
    5670 => 
    array (
      0 => 5671,
      1 => 312,
      2 => 'Xã Xuân Lâm',
    ),
    5671 => 
    array (
      0 => 5672,
      1 => 312,
      2 => 'Xã Nam Cát',
    ),
    5672 => 
    array (
      0 => 5673,
      1 => 312,
      2 => 'Xã Khánh Sơn',
    ),
    5673 => 
    array (
      0 => 5674,
      1 => 312,
      2 => 'Xã Trung Phúc Cường',
    ),
    5674 => 
    array (
      0 => 5675,
      1 => 312,
      2 => 'Xã Nam Kim',
    ),
    5675 => 
    array (
      0 => 5676,
      1 => 313,
      2 => 'Thị trấn Hưng Nguyên',
    ),
    5676 => 
    array (
      0 => 5677,
      1 => 313,
      2 => 'Xã Hưng Trung',
    ),
    5677 => 
    array (
      0 => 5678,
      1 => 313,
      2 => 'Xã Hưng Yên',
    ),
    5678 => 
    array (
      0 => 5679,
      1 => 313,
      2 => 'Xã Hưng Yên Bắc',
    ),
    5679 => 
    array (
      0 => 5680,
      1 => 313,
      2 => 'Xã Hưng Tây',
    ),
    5680 => 
    array (
      0 => 5681,
      1 => 313,
      2 => 'Xã Hưng Đạo',
    ),
    5681 => 
    array (
      0 => 5682,
      1 => 313,
      2 => 'Xã Hưng Mỹ',
    ),
    5682 => 
    array (
      0 => 5683,
      1 => 313,
      2 => 'Xã Hưng Thịnh',
    ),
    5683 => 
    array (
      0 => 5684,
      1 => 313,
      2 => 'Xã Hưng Lĩnh',
    ),
    5684 => 
    array (
      0 => 5685,
      1 => 313,
      2 => 'Xã Hưng Thông',
    ),
    5685 => 
    array (
      0 => 5686,
      1 => 313,
      2 => 'Xã Hưng Tân',
    ),
    5686 => 
    array (
      0 => 5687,
      1 => 313,
      2 => 'Xã Hưng Lợi',
    ),
    5687 => 
    array (
      0 => 5688,
      1 => 313,
      2 => 'Xã Hưng Nghĩa',
    ),
    5688 => 
    array (
      0 => 5689,
      1 => 313,
      2 => 'Xã Hưng Phúc',
    ),
    5689 => 
    array (
      0 => 5690,
      1 => 313,
      2 => 'Xã Long Xá',
    ),
    5690 => 
    array (
      0 => 5691,
      1 => 313,
      2 => 'Xã Châu Nhân',
    ),
    5691 => 
    array (
      0 => 5692,
      1 => 313,
      2 => 'Xã Xuân Lam',
    ),
    5692 => 
    array (
      0 => 5693,
      1 => 313,
      2 => 'Xã Hưng Thành',
    ),
    5693 => 
    array (
      0 => 5694,
      1 => 314,
      2 => 'Xã Quỳnh Vinh',
    ),
    5694 => 
    array (
      0 => 5695,
      1 => 314,
      2 => 'Xã Quỳnh Lộc',
    ),
    5695 => 
    array (
      0 => 5696,
      1 => 314,
      2 => 'Phường Quỳnh Thiện',
    ),
    5696 => 
    array (
      0 => 5697,
      1 => 314,
      2 => 'Xã Quỳnh Lập',
    ),
    5697 => 
    array (
      0 => 5698,
      1 => 314,
      2 => 'Xã Quỳnh Trang',
    ),
    5698 => 
    array (
      0 => 5699,
      1 => 314,
      2 => 'Phường Mai Hùng',
    ),
    5699 => 
    array (
      0 => 5700,
      1 => 314,
      2 => 'Phường Quỳnh Dị',
    ),
    5700 => 
    array (
      0 => 5701,
      1 => 314,
      2 => 'Phường Quỳnh Xuân',
    ),
    5701 => 
    array (
      0 => 5702,
      1 => 314,
      2 => 'Phường Quỳnh Phương',
    ),
    5702 => 
    array (
      0 => 5703,
      1 => 314,
      2 => 'Xã Quỳnh Liên',
    ),
    5703 => 
    array (
      0 => 5704,
      1 => 315,
      2 => 'Phường Trần Phú',
    ),
    5704 => 
    array (
      0 => 5705,
      1 => 315,
      2 => 'Phường Nam Hà',
    ),
    5705 => 
    array (
      0 => 5706,
      1 => 315,
      2 => 'Phường Bắc Hà',
    ),
    5706 => 
    array (
      0 => 5707,
      1 => 315,
      2 => 'Phường Nguyễn Du',
    ),
    5707 => 
    array (
      0 => 5708,
      1 => 315,
      2 => 'Phường Tân Giang',
    ),
    5708 => 
    array (
      0 => 5709,
      1 => 315,
      2 => 'Phường Đại Nài',
    ),
    5709 => 
    array (
      0 => 5710,
      1 => 315,
      2 => 'Phường Hà Huy Tập',
    ),
    5710 => 
    array (
      0 => 5711,
      1 => 315,
      2 => 'Xã Thạch Trung',
    ),
    5711 => 
    array (
      0 => 5712,
      1 => 315,
      2 => 'Phường Thạch Quý',
    ),
    5712 => 
    array (
      0 => 5713,
      1 => 315,
      2 => 'Phường Thạch Linh',
    ),
    5713 => 
    array (
      0 => 5714,
      1 => 315,
      2 => 'Phường Văn Yên',
    ),
    5714 => 
    array (
      0 => 5715,
      1 => 315,
      2 => 'Xã Thạch Hạ',
    ),
    5715 => 
    array (
      0 => 5716,
      1 => 315,
      2 => 'Xã Đồng Môn',
    ),
    5716 => 
    array (
      0 => 5717,
      1 => 315,
      2 => 'Xã Thạch Hưng',
    ),
    5717 => 
    array (
      0 => 5718,
      1 => 315,
      2 => 'Xã Thạch Bình',
    ),
    5718 => 
    array (
      0 => 5719,
      1 => 316,
      2 => 'Phường Bắc Hồng',
    ),
    5719 => 
    array (
      0 => 5720,
      1 => 316,
      2 => 'Phường Nam Hồng',
    ),
    5720 => 
    array (
      0 => 5721,
      1 => 316,
      2 => 'Phường Trung Lương',
    ),
    5721 => 
    array (
      0 => 5722,
      1 => 316,
      2 => 'Phường Đức Thuận',
    ),
    5722 => 
    array (
      0 => 5723,
      1 => 316,
      2 => 'Phường Đậu Liêu',
    ),
    5723 => 
    array (
      0 => 5724,
      1 => 316,
      2 => 'Xã Thuận Lộc',
    ),
    5724 => 
    array (
      0 => 5725,
      1 => 317,
      2 => 'Thị trấn Phố Châu',
    ),
    5725 => 
    array (
      0 => 5726,
      1 => 317,
      2 => 'Thị trấn  Tây Sơn',
    ),
    5726 => 
    array (
      0 => 5727,
      1 => 317,
      2 => 'Xã Sơn Hồng',
    ),
    5727 => 
    array (
      0 => 5728,
      1 => 317,
      2 => 'Xã Sơn Tiến',
    ),
    5728 => 
    array (
      0 => 5729,
      1 => 317,
      2 => 'Xã Sơn Lâm',
    ),
    5729 => 
    array (
      0 => 5730,
      1 => 317,
      2 => 'Xã Sơn Lễ',
    ),
    5730 => 
    array (
      0 => 5731,
      1 => 317,
      2 => 'Xã Sơn Giang',
    ),
    5731 => 
    array (
      0 => 5732,
      1 => 317,
      2 => 'Xã Sơn Lĩnh',
    ),
    5732 => 
    array (
      0 => 5733,
      1 => 317,
      2 => 'Xã An Hòa Thịnh',
    ),
    5733 => 
    array (
      0 => 5734,
      1 => 317,
      2 => 'Xã Sơn Tây',
    ),
    5734 => 
    array (
      0 => 5735,
      1 => 317,
      2 => 'Xã Sơn Ninh',
    ),
    5735 => 
    array (
      0 => 5736,
      1 => 317,
      2 => 'Xã Sơn Châu',
    ),
    5736 => 
    array (
      0 => 5737,
      1 => 317,
      2 => 'Xã Tân Mỹ Hà',
    ),
    5737 => 
    array (
      0 => 5738,
      1 => 317,
      2 => 'Xã Quang Diệm',
    ),
    5738 => 
    array (
      0 => 5739,
      1 => 317,
      2 => 'Xã Sơn Trung',
    ),
    5739 => 
    array (
      0 => 5740,
      1 => 317,
      2 => 'Xã Sơn Bằng',
    ),
    5740 => 
    array (
      0 => 5741,
      1 => 317,
      2 => 'Xã Sơn Bình',
    ),
    5741 => 
    array (
      0 => 5742,
      1 => 317,
      2 => 'Xã Sơn Kim 1',
    ),
    5742 => 
    array (
      0 => 5743,
      1 => 317,
      2 => 'Xã Sơn Kim 2',
    ),
    5743 => 
    array (
      0 => 5744,
      1 => 317,
      2 => 'Xã Sơn Trà',
    ),
    5744 => 
    array (
      0 => 5745,
      1 => 317,
      2 => 'Xã Sơn Long',
    ),
    5745 => 
    array (
      0 => 5746,
      1 => 317,
      2 => 'Xã Kim Hoa',
    ),
    5746 => 
    array (
      0 => 5747,
      1 => 317,
      2 => 'Xã Sơn Hàm',
    ),
    5747 => 
    array (
      0 => 5748,
      1 => 317,
      2 => 'Xã Sơn Phú',
    ),
    5748 => 
    array (
      0 => 5749,
      1 => 317,
      2 => 'Xã Sơn Trường',
    ),
    5749 => 
    array (
      0 => 5750,
      1 => 318,
      2 => 'Thị trấn Đức Thọ',
    ),
    5750 => 
    array (
      0 => 5751,
      1 => 318,
      2 => 'Xã Quang Vĩnh',
    ),
    5751 => 
    array (
      0 => 5752,
      1 => 318,
      2 => 'Xã Tùng Châu',
    ),
    5752 => 
    array (
      0 => 5753,
      1 => 318,
      2 => 'Xã Trường Sơn',
    ),
    5753 => 
    array (
      0 => 5754,
      1 => 318,
      2 => 'Xã Liên Minh',
    ),
    5754 => 
    array (
      0 => 5755,
      1 => 318,
      2 => 'Xã Yên Hồ',
    ),
    5755 => 
    array (
      0 => 5756,
      1 => 318,
      2 => 'Xã Tùng Ảnh',
    ),
    5756 => 
    array (
      0 => 5757,
      1 => 318,
      2 => 'Xã Bùi La Nhân',
    ),
    5757 => 
    array (
      0 => 5758,
      1 => 318,
      2 => 'Xã Thanh Bình Thịnh',
    ),
    5758 => 
    array (
      0 => 5759,
      1 => 318,
      2 => 'Xã Lâm Trung Thủy',
    ),
    5759 => 
    array (
      0 => 5760,
      1 => 318,
      2 => 'Xã Hòa Lạc',
    ),
    5760 => 
    array (
      0 => 5761,
      1 => 318,
      2 => 'Xã Tân Dân',
    ),
    5761 => 
    array (
      0 => 5762,
      1 => 318,
      2 => 'Xã An Dũng',
    ),
    5762 => 
    array (
      0 => 5763,
      1 => 318,
      2 => 'Xã Đức Đồng',
    ),
    5763 => 
    array (
      0 => 5764,
      1 => 318,
      2 => 'Xã Đức Lạng',
    ),
    5764 => 
    array (
      0 => 5765,
      1 => 318,
      2 => 'Xã Tân Hương',
    ),
    5765 => 
    array (
      0 => 5766,
      1 => 319,
      2 => 'Thị trấn Vũ Quang',
    ),
    5766 => 
    array (
      0 => 5767,
      1 => 319,
      2 => 'Xã Ân Phú',
    ),
    5767 => 
    array (
      0 => 5768,
      1 => 319,
      2 => 'Xã Đức Giang',
    ),
    5768 => 
    array (
      0 => 5769,
      1 => 319,
      2 => 'Xã Đức Lĩnh',
    ),
    5769 => 
    array (
      0 => 5770,
      1 => 319,
      2 => 'Xã Thọ Điền',
    ),
    5770 => 
    array (
      0 => 5771,
      1 => 319,
      2 => 'Xã Đức Hương',
    ),
    5771 => 
    array (
      0 => 5772,
      1 => 319,
      2 => 'Xã Đức Bồng',
    ),
    5772 => 
    array (
      0 => 5773,
      1 => 319,
      2 => 'Xã Đức Liên',
    ),
    5773 => 
    array (
      0 => 5774,
      1 => 319,
      2 => 'Xã Hương Minh',
    ),
    5774 => 
    array (
      0 => 5775,
      1 => 319,
      2 => 'Xã Quang Thọ',
    ),
    5775 => 
    array (
      0 => 5776,
      1 => 320,
      2 => 'Thị trấn Xuân An',
    ),
    5776 => 
    array (
      0 => 5777,
      1 => 320,
      2 => 'Xã Xuân Hội',
    ),
    5777 => 
    array (
      0 => 5778,
      1 => 320,
      2 => 'Xã Đan Trường',
    ),
    5778 => 
    array (
      0 => 5779,
      1 => 320,
      2 => 'Xã Xuân Phổ',
    ),
    5779 => 
    array (
      0 => 5780,
      1 => 320,
      2 => 'Xã Xuân Hải',
    ),
    5780 => 
    array (
      0 => 5781,
      1 => 320,
      2 => 'Xã Xuân Giang',
    ),
    5781 => 
    array (
      0 => 5782,
      1 => 320,
      2 => 'Thị trấn Tiên Điền',
    ),
    5782 => 
    array (
      0 => 5783,
      1 => 320,
      2 => 'Xã Xuân Yên',
    ),
    5783 => 
    array (
      0 => 5784,
      1 => 320,
      2 => 'Xã Xuân Mỹ',
    ),
    5784 => 
    array (
      0 => 5785,
      1 => 320,
      2 => 'Xã Xuân Thành',
    ),
    5785 => 
    array (
      0 => 5786,
      1 => 320,
      2 => 'Xã Xuân Viên',
    ),
    5786 => 
    array (
      0 => 5787,
      1 => 320,
      2 => 'Xã Xuân Hồng',
    ),
    5787 => 
    array (
      0 => 5788,
      1 => 320,
      2 => 'Xã Cỗ Đạm',
    ),
    5788 => 
    array (
      0 => 5789,
      1 => 320,
      2 => 'Xã Xuân Liên',
    ),
    5789 => 
    array (
      0 => 5790,
      1 => 320,
      2 => 'Xã Xuân Lĩnh',
    ),
    5790 => 
    array (
      0 => 5791,
      1 => 320,
      2 => 'Xã Xuân Lam',
    ),
    5791 => 
    array (
      0 => 5792,
      1 => 320,
      2 => 'Xã Cương Gián',
    ),
    5792 => 
    array (
      0 => 5793,
      1 => 321,
      2 => 'Thị trấn Nghèn',
    ),
    5793 => 
    array (
      0 => 5794,
      1 => 321,
      2 => 'Xã Thiên Lộc',
    ),
    5794 => 
    array (
      0 => 5795,
      1 => 321,
      2 => 'Xã Thuần Thiện',
    ),
    5795 => 
    array (
      0 => 5796,
      1 => 321,
      2 => 'Xã Vượng Lộc',
    ),
    5796 => 
    array (
      0 => 5797,
      1 => 321,
      2 => 'Xã Thanh Lộc',
    ),
    5797 => 
    array (
      0 => 5798,
      1 => 321,
      2 => 'Xã Kim Song Trường',
    ),
    5798 => 
    array (
      0 => 5799,
      1 => 321,
      2 => 'Xã Thường Nga',
    ),
    5799 => 
    array (
      0 => 5800,
      1 => 321,
      2 => 'Xã Tùng Lộc',
    ),
    5800 => 
    array (
      0 => 5801,
      1 => 321,
      2 => 'Xã Phú Lộc',
    ),
    5801 => 
    array (
      0 => 5802,
      1 => 321,
      2 => 'Xã Gia Hanh',
    ),
    5802 => 
    array (
      0 => 5803,
      1 => 321,
      2 => 'Xã Khánh Vĩnh Yên',
    ),
    5803 => 
    array (
      0 => 5804,
      1 => 321,
      2 => 'Xã Trung Lộc',
    ),
    5804 => 
    array (
      0 => 5805,
      1 => 321,
      2 => 'Xã Xuân Lộc',
    ),
    5805 => 
    array (
      0 => 5806,
      1 => 321,
      2 => 'Xã Thượng Lộc',
    ),
    5806 => 
    array (
      0 => 5807,
      1 => 321,
      2 => 'Xã Quang Lộc',
    ),
    5807 => 
    array (
      0 => 5808,
      1 => 321,
      2 => 'Thị trấn Đồng Lộc',
    ),
    5808 => 
    array (
      0 => 5809,
      1 => 321,
      2 => 'Xã Mỹ Lộc',
    ),
    5809 => 
    array (
      0 => 5810,
      1 => 321,
      2 => 'Xã Sơn Lộc',
    ),
    5810 => 
    array (
      0 => 5811,
      1 => 322,
      2 => 'Thị trấn Hương Khê',
    ),
    5811 => 
    array (
      0 => 5812,
      1 => 322,
      2 => 'Xã Điền Mỹ',
    ),
    5812 => 
    array (
      0 => 5813,
      1 => 322,
      2 => 'Xã Hà Linh',
    ),
    5813 => 
    array (
      0 => 5814,
      1 => 322,
      2 => 'Xã Hương Thủy',
    ),
    5814 => 
    array (
      0 => 5815,
      1 => 322,
      2 => 'Xã Hòa Hải',
    ),
    5815 => 
    array (
      0 => 5816,
      1 => 322,
      2 => 'Xã Phúc Đồng',
    ),
    5816 => 
    array (
      0 => 5817,
      1 => 322,
      2 => 'Xã Hương Giang',
    ),
    5817 => 
    array (
      0 => 5818,
      1 => 322,
      2 => 'Xã Lộc Yên',
    ),
    5818 => 
    array (
      0 => 5819,
      1 => 322,
      2 => 'Xã Hương Bình',
    ),
    5819 => 
    array (
      0 => 5820,
      1 => 322,
      2 => 'Xã Hương Long',
    ),
    5820 => 
    array (
      0 => 5821,
      1 => 322,
      2 => 'Xã Phú Gia',
    ),
    5821 => 
    array (
      0 => 5822,
      1 => 322,
      2 => 'Xã Gia Phố',
    ),
    5822 => 
    array (
      0 => 5823,
      1 => 322,
      2 => 'Xã Phú Phong',
    ),
    5823 => 
    array (
      0 => 5824,
      1 => 322,
      2 => 'Xã Hương Đô',
    ),
    5824 => 
    array (
      0 => 5825,
      1 => 322,
      2 => 'Xã Hương Vĩnh',
    ),
    5825 => 
    array (
      0 => 5826,
      1 => 322,
      2 => 'Xã Hương Xuân',
    ),
    5826 => 
    array (
      0 => 5827,
      1 => 322,
      2 => 'Xã Phúc Trạch',
    ),
    5827 => 
    array (
      0 => 5828,
      1 => 322,
      2 => 'Xã Hương Trà',
    ),
    5828 => 
    array (
      0 => 5829,
      1 => 322,
      2 => 'Xã Hương Trạch',
    ),
    5829 => 
    array (
      0 => 5830,
      1 => 322,
      2 => 'Xã Hương Lâm',
    ),
    5830 => 
    array (
      0 => 5831,
      1 => 322,
      2 => 'Xã Hương Liên',
    ),
    5831 => 
    array (
      0 => 5832,
      1 => 323,
      2 => 'Thị trấn Thạch Hà',
    ),
    5832 => 
    array (
      0 => 5833,
      1 => 323,
      2 => 'Xã Ngọc Sơn',
    ),
    5833 => 
    array (
      0 => 5834,
      1 => 323,
      2 => 'Xã Thạch Hải',
    ),
    5834 => 
    array (
      0 => 5835,
      1 => 323,
      2 => 'Xã Thạch Kênh',
    ),
    5835 => 
    array (
      0 => 5836,
      1 => 323,
      2 => 'Xã Thạch Sơn',
    ),
    5836 => 
    array (
      0 => 5837,
      1 => 323,
      2 => 'Xã Thạch Liên',
    ),
    5837 => 
    array (
      0 => 5838,
      1 => 323,
      2 => 'Xã Đỉnh Bàn',
    ),
    5838 => 
    array (
      0 => 5839,
      1 => 323,
      2 => 'Xã Việt Tiến',
    ),
    5839 => 
    array (
      0 => 5840,
      1 => 323,
      2 => 'Xã Thạch Khê',
    ),
    5840 => 
    array (
      0 => 5841,
      1 => 323,
      2 => 'Xã Thạch Long',
    ),
    5841 => 
    array (
      0 => 5842,
      1 => 323,
      2 => 'Xã Thạch Trị',
    ),
    5842 => 
    array (
      0 => 5843,
      1 => 323,
      2 => 'Xã Thạch Lạc',
    ),
    5843 => 
    array (
      0 => 5844,
      1 => 323,
      2 => 'Xã Thạch Ngọc',
    ),
    5844 => 
    array (
      0 => 5845,
      1 => 323,
      2 => 'Xã Tượng Sơn',
    ),
    5845 => 
    array (
      0 => 5846,
      1 => 323,
      2 => 'Xã Thạch Văn',
    ),
    5846 => 
    array (
      0 => 5847,
      1 => 323,
      2 => 'Xã Lưu Vĩnh Sơn',
    ),
    5847 => 
    array (
      0 => 5848,
      1 => 323,
      2 => 'Xã Thạch Thắng',
    ),
    5848 => 
    array (
      0 => 5849,
      1 => 323,
      2 => 'Xã Thạch Đài',
    ),
    5849 => 
    array (
      0 => 5850,
      1 => 323,
      2 => 'Xã Thạch Hội',
    ),
    5850 => 
    array (
      0 => 5851,
      1 => 323,
      2 => 'Xã Tân Lâm Hương',
    ),
    5851 => 
    array (
      0 => 5852,
      1 => 323,
      2 => 'Xã Thạch Xuân',
    ),
    5852 => 
    array (
      0 => 5853,
      1 => 323,
      2 => 'Xã Nam Điền',
    ),
    5853 => 
    array (
      0 => 5854,
      1 => 324,
      2 => 'Thị trấn Cẩm Xuyên',
    ),
    5854 => 
    array (
      0 => 5855,
      1 => 324,
      2 => 'Thị trấn Thiên Cầm',
    ),
    5855 => 
    array (
      0 => 5856,
      1 => 324,
      2 => 'Xã Yên Hòa',
    ),
    5856 => 
    array (
      0 => 5857,
      1 => 324,
      2 => 'Xã Cẩm Dương',
    ),
    5857 => 
    array (
      0 => 5858,
      1 => 324,
      2 => 'Xã Cẩm Bình',
    ),
    5858 => 
    array (
      0 => 5859,
      1 => 324,
      2 => 'Xã Cẩm Vĩnh',
    ),
    5859 => 
    array (
      0 => 5860,
      1 => 324,
      2 => 'Xã Cẩm Thành',
    ),
    5860 => 
    array (
      0 => 5861,
      1 => 324,
      2 => 'Xã Cẩm Quang',
    ),
    5861 => 
    array (
      0 => 5862,
      1 => 324,
      2 => 'Xã Cẩm Thạch',
    ),
    5862 => 
    array (
      0 => 5863,
      1 => 324,
      2 => 'Xã Cẩm Nhượng',
    ),
    5863 => 
    array (
      0 => 5864,
      1 => 324,
      2 => 'Xã Nam Phúc Thăng',
    ),
    5864 => 
    array (
      0 => 5865,
      1 => 324,
      2 => 'Xã Cẩm Duệ',
    ),
    5865 => 
    array (
      0 => 5866,
      1 => 324,
      2 => 'Xã Cẩm Lĩnh',
    ),
    5866 => 
    array (
      0 => 5867,
      1 => 324,
      2 => 'Xã Cẩm Quan',
    ),
    5867 => 
    array (
      0 => 5868,
      1 => 324,
      2 => 'Xã Cẩm Hà',
    ),
    5868 => 
    array (
      0 => 5869,
      1 => 324,
      2 => 'Xã Cẩm Lộc',
    ),
    5869 => 
    array (
      0 => 5870,
      1 => 324,
      2 => 'Xã Cẩm Hưng',
    ),
    5870 => 
    array (
      0 => 5871,
      1 => 324,
      2 => 'Xã Cẩm Thịnh',
    ),
    5871 => 
    array (
      0 => 5872,
      1 => 324,
      2 => 'Xã Cẩm Mỹ',
    ),
    5872 => 
    array (
      0 => 5873,
      1 => 324,
      2 => 'Xã Cẩm Trung',
    ),
    5873 => 
    array (
      0 => 5874,
      1 => 324,
      2 => 'Xã Cẩm Sơn',
    ),
    5874 => 
    array (
      0 => 5875,
      1 => 324,
      2 => 'Xã Cẩm Lạc',
    ),
    5875 => 
    array (
      0 => 5876,
      1 => 324,
      2 => 'Xã Cẩm Minh',
    ),
    5876 => 
    array (
      0 => 5877,
      1 => 325,
      2 => 'Xã Kỳ Xuân',
    ),
    5877 => 
    array (
      0 => 5878,
      1 => 325,
      2 => 'Xã Kỳ Bắc',
    ),
    5878 => 
    array (
      0 => 5879,
      1 => 325,
      2 => 'Xã Kỳ Phú',
    ),
    5879 => 
    array (
      0 => 5880,
      1 => 325,
      2 => 'Xã Kỳ Phong',
    ),
    5880 => 
    array (
      0 => 5881,
      1 => 325,
      2 => 'Xã Kỳ Tiến',
    ),
    5881 => 
    array (
      0 => 5882,
      1 => 325,
      2 => 'Xã Kỳ Giang',
    ),
    5882 => 
    array (
      0 => 5883,
      1 => 325,
      2 => 'Xã Kỳ Đồng',
    ),
    5883 => 
    array (
      0 => 5884,
      1 => 325,
      2 => 'Xã Kỳ Khang',
    ),
    5884 => 
    array (
      0 => 5885,
      1 => 325,
      2 => 'Xã Kỳ Văn',
    ),
    5885 => 
    array (
      0 => 5886,
      1 => 325,
      2 => 'Xã Kỳ Trung',
    ),
    5886 => 
    array (
      0 => 5887,
      1 => 325,
      2 => 'Xã Kỳ Thọ',
    ),
    5887 => 
    array (
      0 => 5888,
      1 => 325,
      2 => 'Xã Kỳ Tây',
    ),
    5888 => 
    array (
      0 => 5889,
      1 => 325,
      2 => 'Xã Kỳ Thượng',
    ),
    5889 => 
    array (
      0 => 5890,
      1 => 325,
      2 => 'Xã Kỳ Hải',
    ),
    5890 => 
    array (
      0 => 5891,
      1 => 325,
      2 => 'Xã Kỳ Thư',
    ),
    5891 => 
    array (
      0 => 5892,
      1 => 325,
      2 => 'Xã Kỳ Châu',
    ),
    5892 => 
    array (
      0 => 5893,
      1 => 325,
      2 => 'Xã Kỳ Tân',
    ),
    5893 => 
    array (
      0 => 5894,
      1 => 325,
      2 => 'Xã Lâm Hợp',
    ),
    5894 => 
    array (
      0 => 5895,
      1 => 325,
      2 => 'Xã Kỳ Sơn',
    ),
    5895 => 
    array (
      0 => 5896,
      1 => 325,
      2 => 'Xã Kỳ Lạc',
    ),
    5896 => 
    array (
      0 => 5897,
      1 => 326,
      2 => 'Xã Tân Lộc',
    ),
    5897 => 
    array (
      0 => 5898,
      1 => 326,
      2 => 'Xã Hồng Lộc',
    ),
    5898 => 
    array (
      0 => 5899,
      1 => 326,
      2 => 'Xã Thịnh Lộc',
    ),
    5899 => 
    array (
      0 => 5900,
      1 => 326,
      2 => 'Xã Bình An',
    ),
    5900 => 
    array (
      0 => 5901,
      1 => 326,
      2 => 'Xã Ích Hậu',
    ),
    5901 => 
    array (
      0 => 5902,
      1 => 326,
      2 => 'Xã Phù Lưu',
    ),
    5902 => 
    array (
      0 => 5903,
      1 => 326,
      2 => 'Thị trấn Lộc Hà',
    ),
    5903 => 
    array (
      0 => 5904,
      1 => 326,
      2 => 'Xã Thạch Mỹ',
    ),
    5904 => 
    array (
      0 => 5905,
      1 => 326,
      2 => 'Xã Thạch Kim',
    ),
    5905 => 
    array (
      0 => 5906,
      1 => 326,
      2 => 'Xã Thạch Châu',
    ),
    5906 => 
    array (
      0 => 5907,
      1 => 326,
      2 => 'Xã Hộ Độ',
    ),
    5907 => 
    array (
      0 => 5908,
      1 => 326,
      2 => 'Xã Mai Phụ',
    ),
    5908 => 
    array (
      0 => 5909,
      1 => 327,
      2 => 'Phường Hưng Trí',
    ),
    5909 => 
    array (
      0 => 5910,
      1 => 327,
      2 => 'Xã Kỳ Ninh',
    ),
    5910 => 
    array (
      0 => 5911,
      1 => 327,
      2 => 'Xã Kỳ Lợi',
    ),
    5911 => 
    array (
      0 => 5912,
      1 => 327,
      2 => 'Xã Kỳ Hà',
    ),
    5912 => 
    array (
      0 => 5913,
      1 => 327,
      2 => 'Phường Kỳ Trinh',
    ),
    5913 => 
    array (
      0 => 5914,
      1 => 327,
      2 => 'Phường Kỳ Thịnh',
    ),
    5914 => 
    array (
      0 => 5915,
      1 => 327,
      2 => 'Xã Kỳ Hoa',
    ),
    5915 => 
    array (
      0 => 5916,
      1 => 327,
      2 => 'Phường Kỳ Phương',
    ),
    5916 => 
    array (
      0 => 5917,
      1 => 327,
      2 => 'Phường Kỳ Long',
    ),
    5917 => 
    array (
      0 => 5918,
      1 => 327,
      2 => 'Phường Kỳ Liên',
    ),
    5918 => 
    array (
      0 => 5919,
      1 => 327,
      2 => 'Xã Kỳ Nam',
    ),
    5919 => 
    array (
      0 => 5920,
      1 => 328,
      2 => 'Phường Hải Thành',
    ),
    5920 => 
    array (
      0 => 5921,
      1 => 328,
      2 => 'Phường Đồng Phú',
    ),
    5921 => 
    array (
      0 => 5922,
      1 => 328,
      2 => 'Phường Bắc Lý',
    ),
    5922 => 
    array (
      0 => 5923,
      1 => 328,
      2 => 'Phường Nam Lý',
    ),
    5923 => 
    array (
      0 => 5924,
      1 => 328,
      2 => 'Phường Đồng Hải',
    ),
    5924 => 
    array (
      0 => 5925,
      1 => 328,
      2 => 'Phường Đồng Sơn',
    ),
    5925 => 
    array (
      0 => 5926,
      1 => 328,
      2 => 'Phường Phú Hải',
    ),
    5926 => 
    array (
      0 => 5927,
      1 => 328,
      2 => 'Phường Bắc Nghĩa',
    ),
    5927 => 
    array (
      0 => 5928,
      1 => 328,
      2 => 'Phường Đức Ninh Đông',
    ),
    5928 => 
    array (
      0 => 5929,
      1 => 328,
      2 => 'Xã Quang Phú',
    ),
    5929 => 
    array (
      0 => 5930,
      1 => 328,
      2 => 'Xã Lộc Ninh',
    ),
    5930 => 
    array (
      0 => 5931,
      1 => 328,
      2 => 'Xã Bảo Ninh',
    ),
    5931 => 
    array (
      0 => 5932,
      1 => 328,
      2 => 'Xã Nghĩa Ninh',
    ),
    5932 => 
    array (
      0 => 5933,
      1 => 328,
      2 => 'Xã Thuận Đức',
    ),
    5933 => 
    array (
      0 => 5934,
      1 => 328,
      2 => 'Xã Đức Ninh',
    ),
    5934 => 
    array (
      0 => 5935,
      1 => 329,
      2 => 'Thị trấn Quy Đạt',
    ),
    5935 => 
    array (
      0 => 5936,
      1 => 329,
      2 => 'Xã Dân Hóa',
    ),
    5936 => 
    array (
      0 => 5937,
      1 => 329,
      2 => 'Xã Trọng Hóa',
    ),
    5937 => 
    array (
      0 => 5938,
      1 => 329,
      2 => 'Xã Hóa Phúc',
    ),
    5938 => 
    array (
      0 => 5939,
      1 => 329,
      2 => 'Xã Hồng Hóa',
    ),
    5939 => 
    array (
      0 => 5940,
      1 => 329,
      2 => 'Xã Hóa Thanh',
    ),
    5940 => 
    array (
      0 => 5941,
      1 => 329,
      2 => 'Xã Hóa Tiến',
    ),
    5941 => 
    array (
      0 => 5942,
      1 => 329,
      2 => 'Xã Hóa Hợp',
    ),
    5942 => 
    array (
      0 => 5943,
      1 => 329,
      2 => 'Xã Xuân Hóa',
    ),
    5943 => 
    array (
      0 => 5944,
      1 => 329,
      2 => 'Xã Yên Hóa',
    ),
    5944 => 
    array (
      0 => 5945,
      1 => 329,
      2 => 'Xã Minh Hóa',
    ),
    5945 => 
    array (
      0 => 5946,
      1 => 329,
      2 => 'Xã Tân Hóa',
    ),
    5946 => 
    array (
      0 => 5947,
      1 => 329,
      2 => 'Xã Hóa Sơn',
    ),
    5947 => 
    array (
      0 => 5948,
      1 => 329,
      2 => 'Xã Trung Hóa',
    ),
    5948 => 
    array (
      0 => 5949,
      1 => 329,
      2 => 'Xã Thượng Hóa',
    ),
    5949 => 
    array (
      0 => 5950,
      1 => 330,
      2 => 'Thị trấn Đồng Lê',
    ),
    5950 => 
    array (
      0 => 5951,
      1 => 330,
      2 => 'Xã Hương Hóa',
    ),
    5951 => 
    array (
      0 => 5952,
      1 => 330,
      2 => 'Xã Kim Hóa',
    ),
    5952 => 
    array (
      0 => 5953,
      1 => 330,
      2 => 'Xã Thanh Hóa',
    ),
    5953 => 
    array (
      0 => 5954,
      1 => 330,
      2 => 'Xã Thanh Thạch',
    ),
    5954 => 
    array (
      0 => 5955,
      1 => 330,
      2 => 'Xã Thuận Hóa',
    ),
    5955 => 
    array (
      0 => 5956,
      1 => 330,
      2 => 'Xã Lâm Hóa',
    ),
    5956 => 
    array (
      0 => 5957,
      1 => 330,
      2 => 'Xã Lê Hóa',
    ),
    5957 => 
    array (
      0 => 5958,
      1 => 330,
      2 => 'Xã Sơn Hóa',
    ),
    5958 => 
    array (
      0 => 5959,
      1 => 330,
      2 => 'Xã Đồng Hóa',
    ),
    5959 => 
    array (
      0 => 5960,
      1 => 330,
      2 => 'Xã Ngư Hóa',
    ),
    5960 => 
    array (
      0 => 5961,
      1 => 330,
      2 => 'Xã Thạch Hóa',
    ),
    5961 => 
    array (
      0 => 5962,
      1 => 330,
      2 => 'Xã Đức Hóa',
    ),
    5962 => 
    array (
      0 => 5963,
      1 => 330,
      2 => 'Xã Phong Hóa',
    ),
    5963 => 
    array (
      0 => 5964,
      1 => 330,
      2 => 'Xã Mai Hóa',
    ),
    5964 => 
    array (
      0 => 5965,
      1 => 330,
      2 => 'Xã Tiến Hóa',
    ),
    5965 => 
    array (
      0 => 5966,
      1 => 330,
      2 => 'Xã Châu Hóa',
    ),
    5966 => 
    array (
      0 => 5967,
      1 => 330,
      2 => 'Xã Cao Quảng',
    ),
    5967 => 
    array (
      0 => 5968,
      1 => 330,
      2 => 'Xã Văn Hóa',
    ),
    5968 => 
    array (
      0 => 5969,
      1 => 331,
      2 => 'Xã Quảng Hợp',
    ),
    5969 => 
    array (
      0 => 5970,
      1 => 331,
      2 => 'Xã Quảng Kim',
    ),
    5970 => 
    array (
      0 => 5971,
      1 => 331,
      2 => 'Xã Quảng Đông',
    ),
    5971 => 
    array (
      0 => 5972,
      1 => 331,
      2 => 'Xã Quảng Phú',
    ),
    5972 => 
    array (
      0 => 5973,
      1 => 331,
      2 => 'Xã Quảng Châu',
    ),
    5973 => 
    array (
      0 => 5974,
      1 => 331,
      2 => 'Xã Quảng Thạch',
    ),
    5974 => 
    array (
      0 => 5975,
      1 => 331,
      2 => 'Xã Quảng Lưu',
    ),
    5975 => 
    array (
      0 => 5976,
      1 => 331,
      2 => 'Xã Quảng Tùng',
    ),
    5976 => 
    array (
      0 => 5977,
      1 => 331,
      2 => 'Xã Cảnh Dương',
    ),
    5977 => 
    array (
      0 => 5978,
      1 => 331,
      2 => 'Xã Quảng Tiến',
    ),
    5978 => 
    array (
      0 => 5979,
      1 => 331,
      2 => 'Xã Quảng Hưng',
    ),
    5979 => 
    array (
      0 => 5980,
      1 => 331,
      2 => 'Xã Quảng Xuân',
    ),
    5980 => 
    array (
      0 => 5981,
      1 => 331,
      2 => 'Xã Cảnh Hóa',
    ),
    5981 => 
    array (
      0 => 5982,
      1 => 331,
      2 => 'Xã Liên Trường',
    ),
    5982 => 
    array (
      0 => 5983,
      1 => 331,
      2 => 'Xã Quảng Phương',
    ),
    5983 => 
    array (
      0 => 5984,
      1 => 331,
      2 => 'Xã Phù Hóa',
    ),
    5984 => 
    array (
      0 => 5985,
      1 => 331,
      2 => 'Xã Quảng Thanh',
    ),
    5985 => 
    array (
      0 => 5986,
      1 => 332,
      2 => 'Thị trấn Hoàn Lão',
    ),
    5986 => 
    array (
      0 => 5987,
      1 => 332,
      2 => 'Thị trấn NT Việt Trung',
    ),
    5987 => 
    array (
      0 => 5988,
      1 => 332,
      2 => 'Xã Xuân Trạch',
    ),
    5988 => 
    array (
      0 => 5989,
      1 => 332,
      2 => 'Xã Mỹ Trạch',
    ),
    5989 => 
    array (
      0 => 5990,
      1 => 332,
      2 => 'Xã Hạ Trạch',
    ),
    5990 => 
    array (
      0 => 5991,
      1 => 332,
      2 => 'Xã Bắc Trạch',
    ),
    5991 => 
    array (
      0 => 5992,
      1 => 332,
      2 => 'Xã Lâm Trạch',
    ),
    5992 => 
    array (
      0 => 5993,
      1 => 332,
      2 => 'Xã Thanh Trạch',
    ),
    5993 => 
    array (
      0 => 5994,
      1 => 332,
      2 => 'Xã Liên Trạch',
    ),
    5994 => 
    array (
      0 => 5995,
      1 => 332,
      2 => 'Xã Phúc Trạch',
    ),
    5995 => 
    array (
      0 => 5996,
      1 => 332,
      2 => 'Xã Cự Nẫm',
    ),
    5996 => 
    array (
      0 => 5997,
      1 => 332,
      2 => 'Xã Hải Phú',
    ),
    5997 => 
    array (
      0 => 5998,
      1 => 332,
      2 => 'Xã Thượng Trạch',
    ),
    5998 => 
    array (
      0 => 5999,
      1 => 332,
      2 => 'Xã Sơn Lộc',
    ),
    5999 => 
    array (
      0 => 6000,
      1 => 332,
      2 => 'Xã Hưng Trạch',
    ),
    6000 => 
    array (
      0 => 6001,
      1 => 332,
      2 => 'Xã Đồng Trạch',
    ),
    6001 => 
    array (
      0 => 6002,
      1 => 332,
      2 => 'Xã Đức Trạch',
    ),
    6002 => 
    array (
      0 => 6003,
      1 => 332,
      2 => 'Thị trấn Phong Nha',
    ),
    6003 => 
    array (
      0 => 6004,
      1 => 332,
      2 => 'Xã Vạn Trạch',
    ),
    6004 => 
    array (
      0 => 6005,
      1 => 332,
      2 => 'Xã Phú Định',
    ),
    6005 => 
    array (
      0 => 6006,
      1 => 332,
      2 => 'Xã Trung Trạch',
    ),
    6006 => 
    array (
      0 => 6007,
      1 => 332,
      2 => 'Xã Tây Trạch',
    ),
    6007 => 
    array (
      0 => 6008,
      1 => 332,
      2 => 'Xã Hòa Trạch',
    ),
    6008 => 
    array (
      0 => 6009,
      1 => 332,
      2 => 'Xã Đại Trạch',
    ),
    6009 => 
    array (
      0 => 6010,
      1 => 332,
      2 => 'Xã Nhân Trạch',
    ),
    6010 => 
    array (
      0 => 6011,
      1 => 332,
      2 => 'Xã Tân Trạch',
    ),
    6011 => 
    array (
      0 => 6012,
      1 => 332,
      2 => 'Xã Nam Trạch',
    ),
    6012 => 
    array (
      0 => 6013,
      1 => 332,
      2 => 'Xã Lý Trạch',
    ),
    6013 => 
    array (
      0 => 6014,
      1 => 333,
      2 => 'Thị trấn Quán Hàu',
    ),
    6014 => 
    array (
      0 => 6015,
      1 => 333,
      2 => 'Xã Trường Sơn',
    ),
    6015 => 
    array (
      0 => 6016,
      1 => 333,
      2 => 'Xã Lương Ninh',
    ),
    6016 => 
    array (
      0 => 6017,
      1 => 333,
      2 => 'Xã Vĩnh Ninh',
    ),
    6017 => 
    array (
      0 => 6018,
      1 => 333,
      2 => 'Xã Võ Ninh',
    ),
    6018 => 
    array (
      0 => 6019,
      1 => 333,
      2 => 'Xã Hải Ninh',
    ),
    6019 => 
    array (
      0 => 6020,
      1 => 333,
      2 => 'Xã Hàm Ninh',
    ),
    6020 => 
    array (
      0 => 6021,
      1 => 333,
      2 => 'Xã Duy Ninh',
    ),
    6021 => 
    array (
      0 => 6022,
      1 => 333,
      2 => 'Xã Gia Ninh',
    ),
    6022 => 
    array (
      0 => 6023,
      1 => 333,
      2 => 'Xã Trường Xuân',
    ),
    6023 => 
    array (
      0 => 6024,
      1 => 333,
      2 => 'Xã Hiền Ninh',
    ),
    6024 => 
    array (
      0 => 6025,
      1 => 333,
      2 => 'Xã Tân Ninh',
    ),
    6025 => 
    array (
      0 => 6026,
      1 => 333,
      2 => 'Xã Xuân Ninh',
    ),
    6026 => 
    array (
      0 => 6027,
      1 => 333,
      2 => 'Xã An Ninh',
    ),
    6027 => 
    array (
      0 => 6028,
      1 => 333,
      2 => 'Xã Vạn Ninh',
    ),
    6028 => 
    array (
      0 => 6029,
      1 => 334,
      2 => 'Thị trấn NT Lệ Ninh',
    ),
    6029 => 
    array (
      0 => 6030,
      1 => 334,
      2 => 'Thị trấn Kiến Giang',
    ),
    6030 => 
    array (
      0 => 6031,
      1 => 334,
      2 => 'Xã Hồng Thủy',
    ),
    6031 => 
    array (
      0 => 6032,
      1 => 334,
      2 => 'Xã Ngư Thủy Bắc',
    ),
    6032 => 
    array (
      0 => 6033,
      1 => 334,
      2 => 'Xã Hoa Thủy',
    ),
    6033 => 
    array (
      0 => 6034,
      1 => 334,
      2 => 'Xã Thanh Thủy',
    ),
    6034 => 
    array (
      0 => 6035,
      1 => 334,
      2 => 'Xã An Thủy',
    ),
    6035 => 
    array (
      0 => 6036,
      1 => 334,
      2 => 'Xã Phong Thủy',
    ),
    6036 => 
    array (
      0 => 6037,
      1 => 334,
      2 => 'Xã Cam Thủy',
    ),
    6037 => 
    array (
      0 => 6038,
      1 => 334,
      2 => 'Xã Ngân Thủy',
    ),
    6038 => 
    array (
      0 => 6039,
      1 => 334,
      2 => 'Xã Sơn Thủy',
    ),
    6039 => 
    array (
      0 => 6040,
      1 => 334,
      2 => 'Xã Lộc Thủy',
    ),
    6040 => 
    array (
      0 => 6041,
      1 => 334,
      2 => 'Xã Liên Thủy',
    ),
    6041 => 
    array (
      0 => 6042,
      1 => 334,
      2 => 'Xã Hưng Thủy',
    ),
    6042 => 
    array (
      0 => 6043,
      1 => 334,
      2 => 'Xã Dương Thủy',
    ),
    6043 => 
    array (
      0 => 6044,
      1 => 334,
      2 => 'Xã Tân Thủy',
    ),
    6044 => 
    array (
      0 => 6045,
      1 => 334,
      2 => 'Xã Phú Thủy',
    ),
    6045 => 
    array (
      0 => 6046,
      1 => 334,
      2 => 'Xã Xuân Thủy',
    ),
    6046 => 
    array (
      0 => 6047,
      1 => 334,
      2 => 'Xã Mỹ Thủy',
    ),
    6047 => 
    array (
      0 => 6048,
      1 => 334,
      2 => 'Xã Ngư Thủy',
    ),
    6048 => 
    array (
      0 => 6049,
      1 => 334,
      2 => 'Xã Mai Thủy',
    ),
    6049 => 
    array (
      0 => 6050,
      1 => 334,
      2 => 'Xã Sen Thủy',
    ),
    6050 => 
    array (
      0 => 6051,
      1 => 334,
      2 => 'Xã Thái Thủy',
    ),
    6051 => 
    array (
      0 => 6052,
      1 => 334,
      2 => 'Xã Kim Thủy',
    ),
    6052 => 
    array (
      0 => 6053,
      1 => 334,
      2 => 'Xã Trường Thủy',
    ),
    6053 => 
    array (
      0 => 6054,
      1 => 334,
      2 => 'Xã Lâm Thủy',
    ),
    6054 => 
    array (
      0 => 6055,
      1 => 335,
      2 => 'Phường Ba Đồn',
    ),
    6055 => 
    array (
      0 => 6056,
      1 => 335,
      2 => 'Phường Quảng Long',
    ),
    6056 => 
    array (
      0 => 6057,
      1 => 335,
      2 => 'Phường Quảng Thọ',
    ),
    6057 => 
    array (
      0 => 6058,
      1 => 335,
      2 => 'Xã Quảng Tiên',
    ),
    6058 => 
    array (
      0 => 6059,
      1 => 335,
      2 => 'Xã Quảng Trung',
    ),
    6059 => 
    array (
      0 => 6060,
      1 => 335,
      2 => 'Phường Quảng Phong',
    ),
    6060 => 
    array (
      0 => 6061,
      1 => 335,
      2 => 'Phường Quảng Thuận',
    ),
    6061 => 
    array (
      0 => 6062,
      1 => 335,
      2 => 'Xã Quảng Tân',
    ),
    6062 => 
    array (
      0 => 6063,
      1 => 335,
      2 => 'Xã Quảng Hải',
    ),
    6063 => 
    array (
      0 => 6064,
      1 => 335,
      2 => 'Xã Quảng Sơn',
    ),
    6064 => 
    array (
      0 => 6065,
      1 => 335,
      2 => 'Xã Quảng Lộc',
    ),
    6065 => 
    array (
      0 => 6066,
      1 => 335,
      2 => 'Xã Quảng Thủy',
    ),
    6066 => 
    array (
      0 => 6067,
      1 => 335,
      2 => 'Xã Quảng Văn',
    ),
    6067 => 
    array (
      0 => 6068,
      1 => 335,
      2 => 'Phường Quảng Phúc',
    ),
    6068 => 
    array (
      0 => 6069,
      1 => 335,
      2 => 'Xã Quảng Hòa',
    ),
    6069 => 
    array (
      0 => 6070,
      1 => 335,
      2 => 'Xã Quảng Minh',
    ),
    6070 => 
    array (
      0 => 6071,
      1 => 336,
      2 => 'Phường Đông Giang',
    ),
    6071 => 
    array (
      0 => 6072,
      1 => 336,
      2 => 'Phường 1',
    ),
    6072 => 
    array (
      0 => 6073,
      1 => 336,
      2 => 'Phường Đông Lễ',
    ),
    6073 => 
    array (
      0 => 6074,
      1 => 336,
      2 => 'Phường Đông Thanh',
    ),
    6074 => 
    array (
      0 => 6075,
      1 => 336,
      2 => 'Phường 2',
    ),
    6075 => 
    array (
      0 => 6076,
      1 => 336,
      2 => 'Phường 4',
    ),
    6076 => 
    array (
      0 => 6077,
      1 => 336,
      2 => 'Phường 5',
    ),
    6077 => 
    array (
      0 => 6078,
      1 => 336,
      2 => 'Phường Đông Lương',
    ),
    6078 => 
    array (
      0 => 6079,
      1 => 336,
      2 => 'Phường 3',
    ),
    6079 => 
    array (
      0 => 6080,
      1 => 337,
      2 => 'Phường 1',
    ),
    6080 => 
    array (
      0 => 6081,
      1 => 337,
      2 => 'Phường An Đôn',
    ),
    6081 => 
    array (
      0 => 6082,
      1 => 337,
      2 => 'Phường 2',
    ),
    6082 => 
    array (
      0 => 6083,
      1 => 337,
      2 => 'Phường 3',
    ),
    6083 => 
    array (
      0 => 6084,
      1 => 337,
      2 => 'Xã Hải Lệ',
    ),
    6084 => 
    array (
      0 => 6085,
      1 => 338,
      2 => 'Thị trấn Hồ Xá',
    ),
    6085 => 
    array (
      0 => 6086,
      1 => 338,
      2 => 'Thị trấn Bến Quan',
    ),
    6086 => 
    array (
      0 => 6087,
      1 => 338,
      2 => 'Xã Vĩnh Thái',
    ),
    6087 => 
    array (
      0 => 6088,
      1 => 338,
      2 => 'Xã Vĩnh Tú',
    ),
    6088 => 
    array (
      0 => 6089,
      1 => 338,
      2 => 'Xã Vĩnh Chấp',
    ),
    6089 => 
    array (
      0 => 6090,
      1 => 338,
      2 => 'Xã Trung Nam',
    ),
    6090 => 
    array (
      0 => 6091,
      1 => 338,
      2 => 'Xã Kim Thạch',
    ),
    6091 => 
    array (
      0 => 6092,
      1 => 338,
      2 => 'Xã Vĩnh Long',
    ),
    6092 => 
    array (
      0 => 6093,
      1 => 338,
      2 => 'Xã Vĩnh Khê',
    ),
    6093 => 
    array (
      0 => 6094,
      1 => 338,
      2 => 'Xã Vĩnh Hòa',
    ),
    6094 => 
    array (
      0 => 6095,
      1 => 338,
      2 => 'Xã Vĩnh Thủy',
    ),
    6095 => 
    array (
      0 => 6096,
      1 => 338,
      2 => 'Xã Vĩnh Lâm',
    ),
    6096 => 
    array (
      0 => 6097,
      1 => 338,
      2 => 'Xã Hiền Thành',
    ),
    6097 => 
    array (
      0 => 6098,
      1 => 338,
      2 => 'Thị trấn Cửa Tùng',
    ),
    6098 => 
    array (
      0 => 6099,
      1 => 338,
      2 => 'Xã Vĩnh Hà',
    ),
    6099 => 
    array (
      0 => 6100,
      1 => 338,
      2 => 'Xã Vĩnh Sơn',
    ),
    6100 => 
    array (
      0 => 6101,
      1 => 338,
      2 => 'Xã Vĩnh Giang',
    ),
    6101 => 
    array (
      0 => 6102,
      1 => 338,
      2 => 'Xã Vĩnh Ô',
    ),
    6102 => 
    array (
      0 => 6103,
      1 => 339,
      2 => 'Thị trấn Khe Sanh',
    ),
    6103 => 
    array (
      0 => 6104,
      1 => 339,
      2 => 'Thị trấn Lao Bảo',
    ),
    6104 => 
    array (
      0 => 6105,
      1 => 339,
      2 => 'Xã Hướng Lập',
    ),
    6105 => 
    array (
      0 => 6106,
      1 => 339,
      2 => 'Xã Hướng Việt',
    ),
    6106 => 
    array (
      0 => 6107,
      1 => 339,
      2 => 'Xã Hướng Phùng',
    ),
    6107 => 
    array (
      0 => 6108,
      1 => 339,
      2 => 'Xã Hướng Sơn',
    ),
    6108 => 
    array (
      0 => 6109,
      1 => 339,
      2 => 'Xã Hướng Linh',
    ),
    6109 => 
    array (
      0 => 6110,
      1 => 339,
      2 => 'Xã Tân Hợp',
    ),
    6110 => 
    array (
      0 => 6111,
      1 => 339,
      2 => 'Xã Hướng Tân',
    ),
    6111 => 
    array (
      0 => 6112,
      1 => 339,
      2 => 'Xã Tân Thành',
    ),
    6112 => 
    array (
      0 => 6113,
      1 => 339,
      2 => 'Xã Tân Long',
    ),
    6113 => 
    array (
      0 => 6114,
      1 => 339,
      2 => 'Xã Tân Lập',
    ),
    6114 => 
    array (
      0 => 6115,
      1 => 339,
      2 => 'Xã Tân Liên',
    ),
    6115 => 
    array (
      0 => 6116,
      1 => 339,
      2 => 'Xã Húc',
    ),
    6116 => 
    array (
      0 => 6117,
      1 => 339,
      2 => 'Xã Thuận',
    ),
    6117 => 
    array (
      0 => 6118,
      1 => 339,
      2 => 'Xã Hướng Lộc',
    ),
    6118 => 
    array (
      0 => 6119,
      1 => 339,
      2 => 'Xã Ba Tầng',
    ),
    6119 => 
    array (
      0 => 6120,
      1 => 339,
      2 => 'Xã Thanh',
    ),
    6120 => 
    array (
      0 => 6121,
      1 => 339,
      2 => 'Xã  A Dơi',
    ),
    6121 => 
    array (
      0 => 6122,
      1 => 339,
      2 => 'Xã Lìa',
    ),
    6122 => 
    array (
      0 => 6123,
      1 => 339,
      2 => 'Xã Xy',
    ),
    6123 => 
    array (
      0 => 6124,
      1 => 340,
      2 => 'Thị trấn Gio Linh',
    ),
    6124 => 
    array (
      0 => 6125,
      1 => 340,
      2 => 'Thị trấn Cửa Việt',
    ),
    6125 => 
    array (
      0 => 6126,
      1 => 340,
      2 => 'Xã Trung Giang',
    ),
    6126 => 
    array (
      0 => 6127,
      1 => 340,
      2 => 'Xã Trung Hải',
    ),
    6127 => 
    array (
      0 => 6128,
      1 => 340,
      2 => 'Xã Trung Sơn',
    ),
    6128 => 
    array (
      0 => 6129,
      1 => 340,
      2 => 'Xã Phong Bình',
    ),
    6129 => 
    array (
      0 => 6130,
      1 => 340,
      2 => 'Xã Gio Mỹ',
    ),
    6130 => 
    array (
      0 => 6131,
      1 => 340,
      2 => 'Xã Gio Hải',
    ),
    6131 => 
    array (
      0 => 6132,
      1 => 340,
      2 => 'Xã Gio An',
    ),
    6132 => 
    array (
      0 => 6133,
      1 => 340,
      2 => 'Xã Gio Châu',
    ),
    6133 => 
    array (
      0 => 6134,
      1 => 340,
      2 => 'Xã Gio Việt',
    ),
    6134 => 
    array (
      0 => 6135,
      1 => 340,
      2 => 'Xã Linh Trường',
    ),
    6135 => 
    array (
      0 => 6136,
      1 => 340,
      2 => 'Xã Gio Sơn',
    ),
    6136 => 
    array (
      0 => 6137,
      1 => 340,
      2 => 'Xã Gio Mai',
    ),
    6137 => 
    array (
      0 => 6138,
      1 => 340,
      2 => 'Xã Hải Thái',
    ),
    6138 => 
    array (
      0 => 6139,
      1 => 340,
      2 => 'Xã Linh Hải',
    ),
    6139 => 
    array (
      0 => 6140,
      1 => 340,
      2 => 'Xã Gio Quang',
    ),
    6140 => 
    array (
      0 => 6141,
      1 => 341,
      2 => 'Thị trấn Krông Klang',
    ),
    6141 => 
    array (
      0 => 6142,
      1 => 341,
      2 => 'Xã Mò Ó',
    ),
    6142 => 
    array (
      0 => 6143,
      1 => 341,
      2 => 'Xã Hướng Hiệp',
    ),
    6143 => 
    array (
      0 => 6144,
      1 => 341,
      2 => 'Xã Đa Krông',
    ),
    6144 => 
    array (
      0 => 6145,
      1 => 341,
      2 => 'Xã Triệu Nguyên',
    ),
    6145 => 
    array (
      0 => 6146,
      1 => 341,
      2 => 'Xã Ba Lòng',
    ),
    6146 => 
    array (
      0 => 6147,
      1 => 341,
      2 => 'Xã Ba Nang',
    ),
    6147 => 
    array (
      0 => 6148,
      1 => 341,
      2 => 'Xã Tà Long',
    ),
    6148 => 
    array (
      0 => 6149,
      1 => 341,
      2 => 'Xã Húc Nghì',
    ),
    6149 => 
    array (
      0 => 6150,
      1 => 341,
      2 => 'Xã A Vao',
    ),
    6150 => 
    array (
      0 => 6151,
      1 => 341,
      2 => 'Xã Tà Rụt',
    ),
    6151 => 
    array (
      0 => 6152,
      1 => 341,
      2 => 'Xã A Bung',
    ),
    6152 => 
    array (
      0 => 6153,
      1 => 341,
      2 => 'Xã A Ngo',
    ),
    6153 => 
    array (
      0 => 6154,
      1 => 342,
      2 => 'Thị trấn Cam Lộ',
    ),
    6154 => 
    array (
      0 => 6155,
      1 => 342,
      2 => 'Xã Cam Tuyền',
    ),
    6155 => 
    array (
      0 => 6156,
      1 => 342,
      2 => 'Xã Thanh An',
    ),
    6156 => 
    array (
      0 => 6157,
      1 => 342,
      2 => 'Xã Cam Thủy',
    ),
    6157 => 
    array (
      0 => 6158,
      1 => 342,
      2 => 'Xã Cam Thành',
    ),
    6158 => 
    array (
      0 => 6159,
      1 => 342,
      2 => 'Xã Cam Hiếu',
    ),
    6159 => 
    array (
      0 => 6160,
      1 => 342,
      2 => 'Xã Cam Chính',
    ),
    6160 => 
    array (
      0 => 6161,
      1 => 342,
      2 => 'Xã Cam Nghĩa',
    ),
    6161 => 
    array (
      0 => 6162,
      1 => 343,
      2 => 'Thị Trấn Ái Tử',
    ),
    6162 => 
    array (
      0 => 6163,
      1 => 343,
      2 => 'Xã Triệu An',
    ),
    6163 => 
    array (
      0 => 6164,
      1 => 343,
      2 => 'Xã Triệu Vân',
    ),
    6164 => 
    array (
      0 => 6165,
      1 => 343,
      2 => 'Xã Triệu Phước',
    ),
    6165 => 
    array (
      0 => 6166,
      1 => 343,
      2 => 'Xã Triệu Độ',
    ),
    6166 => 
    array (
      0 => 6167,
      1 => 343,
      2 => 'Xã Triệu Trạch',
    ),
    6167 => 
    array (
      0 => 6168,
      1 => 343,
      2 => 'Xã Triệu Thuận',
    ),
    6168 => 
    array (
      0 => 6169,
      1 => 343,
      2 => 'Xã Triệu Đại',
    ),
    6169 => 
    array (
      0 => 6170,
      1 => 343,
      2 => 'Xã Triệu Hòa',
    ),
    6170 => 
    array (
      0 => 6171,
      1 => 343,
      2 => 'Xã Triệu Lăng',
    ),
    6171 => 
    array (
      0 => 6172,
      1 => 343,
      2 => 'Xã Triệu Sơn',
    ),
    6172 => 
    array (
      0 => 6173,
      1 => 343,
      2 => 'Xã Triệu Long',
    ),
    6173 => 
    array (
      0 => 6174,
      1 => 343,
      2 => 'Xã Triệu Tài',
    ),
    6174 => 
    array (
      0 => 6175,
      1 => 343,
      2 => 'Xã Triệu Trung',
    ),
    6175 => 
    array (
      0 => 6176,
      1 => 343,
      2 => 'Xã Triệu Ái',
    ),
    6176 => 
    array (
      0 => 6177,
      1 => 343,
      2 => 'Xã Triệu Thượng',
    ),
    6177 => 
    array (
      0 => 6178,
      1 => 343,
      2 => 'Xã Triệu Giang',
    ),
    6178 => 
    array (
      0 => 6179,
      1 => 343,
      2 => 'Xã Triệu Thành',
    ),
    6179 => 
    array (
      0 => 6180,
      1 => 344,
      2 => 'Thị trấn Diên Sanh',
    ),
    6180 => 
    array (
      0 => 6181,
      1 => 344,
      2 => 'Xã Hải An',
    ),
    6181 => 
    array (
      0 => 6182,
      1 => 344,
      2 => 'Xã Hải Ba',
    ),
    6182 => 
    array (
      0 => 6183,
      1 => 344,
      2 => 'Xã Hải Quy',
    ),
    6183 => 
    array (
      0 => 6184,
      1 => 344,
      2 => 'Xã Hải Quế',
    ),
    6184 => 
    array (
      0 => 6185,
      1 => 344,
      2 => 'Xã Hải Hưng',
    ),
    6185 => 
    array (
      0 => 6186,
      1 => 344,
      2 => 'Xã Hải Phú',
    ),
    6186 => 
    array (
      0 => 6187,
      1 => 344,
      2 => 'Xã Hải Thượng',
    ),
    6187 => 
    array (
      0 => 6188,
      1 => 344,
      2 => 'Xã Hải Dương',
    ),
    6188 => 
    array (
      0 => 6189,
      1 => 344,
      2 => 'Xã Hải Định',
    ),
    6189 => 
    array (
      0 => 6190,
      1 => 344,
      2 => 'Xã Hải Lâm',
    ),
    6190 => 
    array (
      0 => 6191,
      1 => 344,
      2 => 'Xã Hải Phong',
    ),
    6191 => 
    array (
      0 => 6192,
      1 => 344,
      2 => 'Xã Hải Trường',
    ),
    6192 => 
    array (
      0 => 6193,
      1 => 344,
      2 => 'Xã Hải Sơn',
    ),
    6193 => 
    array (
      0 => 6194,
      1 => 344,
      2 => 'Xã Hải Chánh',
    ),
    6194 => 
    array (
      0 => 6195,
      1 => 344,
      2 => 'Xã Hải Khê',
    ),
    6195 => 
    array (
      0 => 6196,
      1 => 345,
      2 => '',
    ),
    6196 => 
    array (
      0 => 6197,
      1 => 346,
      2 => 'Phường Tây Lộc',
    ),
    6197 => 
    array (
      0 => 6198,
      1 => 346,
      2 => 'Phường Thuận Lộc',
    ),
    6198 => 
    array (
      0 => 6199,
      1 => 346,
      2 => 'Phường Gia Hội',
    ),
    6199 => 
    array (
      0 => 6200,
      1 => 346,
      2 => 'Phường Phú Hậu',
    ),
    6200 => 
    array (
      0 => 6201,
      1 => 346,
      2 => 'Phường Thuận Hòa',
    ),
    6201 => 
    array (
      0 => 6202,
      1 => 346,
      2 => 'Phường Đông Ba',
    ),
    6202 => 
    array (
      0 => 6203,
      1 => 346,
      2 => 'Phường Kim Long',
    ),
    6203 => 
    array (
      0 => 6204,
      1 => 346,
      2 => 'Phường Vỹ Dạ',
    ),
    6204 => 
    array (
      0 => 6205,
      1 => 346,
      2 => 'Phường Phường Đúc',
    ),
    6205 => 
    array (
      0 => 6206,
      1 => 346,
      2 => 'Phường Vĩnh Ninh',
    ),
    6206 => 
    array (
      0 => 6207,
      1 => 346,
      2 => 'Phường Phú Hội',
    ),
    6207 => 
    array (
      0 => 6208,
      1 => 346,
      2 => 'Phường Phú Nhuận',
    ),
    6208 => 
    array (
      0 => 6209,
      1 => 346,
      2 => 'Phường Xuân Phú',
    ),
    6209 => 
    array (
      0 => 6210,
      1 => 346,
      2 => 'Phường Trường An',
    ),
    6210 => 
    array (
      0 => 6211,
      1 => 346,
      2 => 'Phường Phước Vĩnh',
    ),
    6211 => 
    array (
      0 => 6212,
      1 => 346,
      2 => 'Phường An Cựu',
    ),
    6212 => 
    array (
      0 => 6213,
      1 => 346,
      2 => 'Phường An Hòa',
    ),
    6213 => 
    array (
      0 => 6214,
      1 => 346,
      2 => 'Phường Hương Sơ',
    ),
    6214 => 
    array (
      0 => 6215,
      1 => 346,
      2 => 'Phường Thuỷ Biều',
    ),
    6215 => 
    array (
      0 => 6216,
      1 => 346,
      2 => 'Phường Hương Long',
    ),
    6216 => 
    array (
      0 => 6217,
      1 => 346,
      2 => 'Phường Thuỷ Xuân',
    ),
    6217 => 
    array (
      0 => 6218,
      1 => 346,
      2 => 'Phường An Đông',
    ),
    6218 => 
    array (
      0 => 6219,
      1 => 346,
      2 => 'Phường An Tây',
    ),
    6219 => 
    array (
      0 => 6220,
      1 => 346,
      2 => 'Phường Thuận An',
    ),
    6220 => 
    array (
      0 => 6221,
      1 => 346,
      2 => 'Xã Phú Dương',
    ),
    6221 => 
    array (
      0 => 6222,
      1 => 346,
      2 => 'Xã Phú Mậu',
    ),
    6222 => 
    array (
      0 => 6223,
      1 => 346,
      2 => 'Xã Phú Thanh',
    ),
    6223 => 
    array (
      0 => 6224,
      1 => 346,
      2 => 'Phường Phú Thượng',
    ),
    6224 => 
    array (
      0 => 6225,
      1 => 346,
      2 => 'Phường Thủy Vân',
    ),
    6225 => 
    array (
      0 => 6226,
      1 => 346,
      2 => 'Xã Thủy Bằng',
    ),
    6226 => 
    array (
      0 => 6227,
      1 => 346,
      2 => 'Xã Hải Dương',
    ),
    6227 => 
    array (
      0 => 6228,
      1 => 346,
      2 => 'Xã Hương Phong',
    ),
    6228 => 
    array (
      0 => 6229,
      1 => 346,
      2 => 'Phường Hương Vinh',
    ),
    6229 => 
    array (
      0 => 6230,
      1 => 346,
      2 => 'Phường Hương An',
    ),
    6230 => 
    array (
      0 => 6231,
      1 => 346,
      2 => 'Phường Hương Hồ',
    ),
    6231 => 
    array (
      0 => 6232,
      1 => 346,
      2 => 'Xã Hương Thọ',
    ),
    6232 => 
    array (
      0 => 6233,
      1 => 347,
      2 => 'Thị trấn Phong Điền',
    ),
    6233 => 
    array (
      0 => 6234,
      1 => 347,
      2 => 'Xã Điền Hương',
    ),
    6234 => 
    array (
      0 => 6235,
      1 => 347,
      2 => 'Xã Điền Môn',
    ),
    6235 => 
    array (
      0 => 6236,
      1 => 347,
      2 => 'Xã Điền Lộc',
    ),
    6236 => 
    array (
      0 => 6237,
      1 => 347,
      2 => 'Xã Phong Bình',
    ),
    6237 => 
    array (
      0 => 6238,
      1 => 347,
      2 => 'Xã Điền Hòa',
    ),
    6238 => 
    array (
      0 => 6239,
      1 => 347,
      2 => 'Xã Phong Chương',
    ),
    6239 => 
    array (
      0 => 6240,
      1 => 347,
      2 => 'Xã Phong Hải',
    ),
    6240 => 
    array (
      0 => 6241,
      1 => 347,
      2 => 'Xã Điền Hải',
    ),
    6241 => 
    array (
      0 => 6242,
      1 => 347,
      2 => 'Xã Phong Hòa',
    ),
    6242 => 
    array (
      0 => 6243,
      1 => 347,
      2 => 'Xã Phong Thu',
    ),
    6243 => 
    array (
      0 => 6244,
      1 => 347,
      2 => 'Xã Phong Hiền',
    ),
    6244 => 
    array (
      0 => 6245,
      1 => 347,
      2 => 'Xã Phong Mỹ',
    ),
    6245 => 
    array (
      0 => 6246,
      1 => 347,
      2 => 'Xã Phong An',
    ),
    6246 => 
    array (
      0 => 6247,
      1 => 347,
      2 => 'Xã Phong Xuân',
    ),
    6247 => 
    array (
      0 => 6248,
      1 => 347,
      2 => 'Xã Phong Sơn',
    ),
    6248 => 
    array (
      0 => 6249,
      1 => 348,
      2 => 'Thị trấn Sịa',
    ),
    6249 => 
    array (
      0 => 6250,
      1 => 348,
      2 => 'Xã Quảng Thái',
    ),
    6250 => 
    array (
      0 => 6251,
      1 => 348,
      2 => 'Xã Quảng Ngạn',
    ),
    6251 => 
    array (
      0 => 6252,
      1 => 348,
      2 => 'Xã Quảng Lợi',
    ),
    6252 => 
    array (
      0 => 6253,
      1 => 348,
      2 => 'Xã Quảng Công',
    ),
    6253 => 
    array (
      0 => 6254,
      1 => 348,
      2 => 'Xã Quảng Phước',
    ),
    6254 => 
    array (
      0 => 6255,
      1 => 348,
      2 => 'Xã Quảng Vinh',
    ),
    6255 => 
    array (
      0 => 6256,
      1 => 348,
      2 => 'Xã Quảng An',
    ),
    6256 => 
    array (
      0 => 6257,
      1 => 348,
      2 => 'Xã Quảng Thành',
    ),
    6257 => 
    array (
      0 => 6258,
      1 => 348,
      2 => 'Xã Quảng Thọ',
    ),
    6258 => 
    array (
      0 => 6259,
      1 => 348,
      2 => 'Xã Quảng Phú',
    ),
    6259 => 
    array (
      0 => 6260,
      1 => 349,
      2 => 'Xã Phú Thuận',
    ),
    6260 => 
    array (
      0 => 6261,
      1 => 349,
      2 => 'Xã Phú An',
    ),
    6261 => 
    array (
      0 => 6262,
      1 => 349,
      2 => 'Xã Phú Hải',
    ),
    6262 => 
    array (
      0 => 6263,
      1 => 349,
      2 => 'Xã Phú Xuân',
    ),
    6263 => 
    array (
      0 => 6264,
      1 => 349,
      2 => 'Xã Phú Diên',
    ),
    6264 => 
    array (
      0 => 6265,
      1 => 349,
      2 => 'Xã Phú Mỹ',
    ),
    6265 => 
    array (
      0 => 6266,
      1 => 349,
      2 => 'Xã Phú Hồ',
    ),
    6266 => 
    array (
      0 => 6267,
      1 => 349,
      2 => 'Xã Vinh Xuân',
    ),
    6267 => 
    array (
      0 => 6268,
      1 => 349,
      2 => 'Xã Phú Lương',
    ),
    6268 => 
    array (
      0 => 6269,
      1 => 349,
      2 => 'Thị trấn Phú Đa',
    ),
    6269 => 
    array (
      0 => 6270,
      1 => 349,
      2 => 'Xã Vinh Thanh',
    ),
    6270 => 
    array (
      0 => 6271,
      1 => 349,
      2 => 'Xã Vinh An',
    ),
    6271 => 
    array (
      0 => 6272,
      1 => 349,
      2 => 'Xã Phú Gia',
    ),
    6272 => 
    array (
      0 => 6273,
      1 => 349,
      2 => 'Xã Vinh Hà',
    ),
    6273 => 
    array (
      0 => 6274,
      1 => 350,
      2 => 'Phường Phú Bài',
    ),
    6274 => 
    array (
      0 => 6275,
      1 => 350,
      2 => 'Xã Thủy Thanh',
    ),
    6275 => 
    array (
      0 => 6276,
      1 => 350,
      2 => 'Phường Thủy Dương',
    ),
    6276 => 
    array (
      0 => 6277,
      1 => 350,
      2 => 'Phường Thủy Phương',
    ),
    6277 => 
    array (
      0 => 6278,
      1 => 350,
      2 => 'Phường Thủy Châu',
    ),
    6278 => 
    array (
      0 => 6279,
      1 => 350,
      2 => 'Phường Thủy Lương',
    ),
    6279 => 
    array (
      0 => 6280,
      1 => 350,
      2 => 'Xã Thủy Tân',
    ),
    6280 => 
    array (
      0 => 6281,
      1 => 350,
      2 => 'Xã Thủy Phù',
    ),
    6281 => 
    array (
      0 => 6282,
      1 => 350,
      2 => 'Xã Phú Sơn',
    ),
    6282 => 
    array (
      0 => 6283,
      1 => 350,
      2 => 'Xã Dương Hòa',
    ),
    6283 => 
    array (
      0 => 6284,
      1 => 351,
      2 => 'Phường Tứ Hạ',
    ),
    6284 => 
    array (
      0 => 6285,
      1 => 351,
      2 => 'Xã Hương Toàn',
    ),
    6285 => 
    array (
      0 => 6286,
      1 => 351,
      2 => 'Phường Hương Vân',
    ),
    6286 => 
    array (
      0 => 6287,
      1 => 351,
      2 => 'Phường Hương Xuân',
    ),
    6287 => 
    array (
      0 => 6288,
      1 => 351,
      2 => 'Phường Hương Chữ',
    ),
    6288 => 
    array (
      0 => 6289,
      1 => 351,
      2 => 'Xã Hương Bình',
    ),
    6289 => 
    array (
      0 => 6290,
      1 => 351,
      2 => 'Xã Bình Tiến',
    ),
    6290 => 
    array (
      0 => 6291,
      1 => 351,
      2 => 'Xã Bình Thành',
    ),
    6291 => 
    array (
      0 => 6292,
      1 => 352,
      2 => 'Thị trấn A Lưới',
    ),
    6292 => 
    array (
      0 => 6293,
      1 => 352,
      2 => 'Xã Hồng Vân',
    ),
    6293 => 
    array (
      0 => 6294,
      1 => 352,
      2 => 'Xã Hồng Hạ',
    ),
    6294 => 
    array (
      0 => 6295,
      1 => 352,
      2 => 'Xã Hồng Kim',
    ),
    6295 => 
    array (
      0 => 6296,
      1 => 352,
      2 => 'Xã Trung Sơn',
    ),
    6296 => 
    array (
      0 => 6297,
      1 => 352,
      2 => 'Xã Hương Nguyên',
    ),
    6297 => 
    array (
      0 => 6298,
      1 => 352,
      2 => 'Xã Hồng Bắc',
    ),
    6298 => 
    array (
      0 => 6299,
      1 => 352,
      2 => 'Xã A Ngo',
    ),
    6299 => 
    array (
      0 => 6300,
      1 => 352,
      2 => 'Xã Sơn Thủy',
    ),
    6300 => 
    array (
      0 => 6301,
      1 => 352,
      2 => 'Xã Phú Vinh',
    ),
    6301 => 
    array (
      0 => 6302,
      1 => 352,
      2 => 'Xã Hương Phong',
    ),
    6302 => 
    array (
      0 => 6303,
      1 => 352,
      2 => 'Xã Quảng Nhâm',
    ),
    6303 => 
    array (
      0 => 6304,
      1 => 352,
      2 => 'Xã Hồng Thượng',
    ),
    6304 => 
    array (
      0 => 6305,
      1 => 352,
      2 => 'Xã Hồng Thái',
    ),
    6305 => 
    array (
      0 => 6306,
      1 => 352,
      2 => 'Xã A Roàng',
    ),
    6306 => 
    array (
      0 => 6307,
      1 => 352,
      2 => 'Xã Đông Sơn',
    ),
    6307 => 
    array (
      0 => 6308,
      1 => 352,
      2 => 'Xã Lâm Đớt',
    ),
    6308 => 
    array (
      0 => 6309,
      1 => 352,
      2 => 'Xã Hồng Thủy',
    ),
    6309 => 
    array (
      0 => 6310,
      1 => 353,
      2 => 'Thị trấn Phú Lộc',
    ),
    6310 => 
    array (
      0 => 6311,
      1 => 353,
      2 => 'Thị trấn Lăng Cô',
    ),
    6311 => 
    array (
      0 => 6312,
      1 => 353,
      2 => 'Xã Vinh Mỹ',
    ),
    6312 => 
    array (
      0 => 6313,
      1 => 353,
      2 => 'Xã Vinh Hưng',
    ),
    6313 => 
    array (
      0 => 6314,
      1 => 353,
      2 => 'Xã Giang Hải',
    ),
    6314 => 
    array (
      0 => 6315,
      1 => 353,
      2 => 'Xã Vinh Hiền',
    ),
    6315 => 
    array (
      0 => 6316,
      1 => 353,
      2 => 'Xã Lộc Bổn',
    ),
    6316 => 
    array (
      0 => 6317,
      1 => 353,
      2 => 'Xã Lộc Sơn',
    ),
    6317 => 
    array (
      0 => 6318,
      1 => 353,
      2 => 'Xã Lộc Bình',
    ),
    6318 => 
    array (
      0 => 6319,
      1 => 353,
      2 => 'Xã Lộc Vĩnh',
    ),
    6319 => 
    array (
      0 => 6320,
      1 => 353,
      2 => 'Xã Lộc An',
    ),
    6320 => 
    array (
      0 => 6321,
      1 => 353,
      2 => 'Xã Lộc Điền',
    ),
    6321 => 
    array (
      0 => 6322,
      1 => 353,
      2 => 'Xã Lộc Thủy',
    ),
    6322 => 
    array (
      0 => 6323,
      1 => 353,
      2 => 'Xã Lộc Trì',
    ),
    6323 => 
    array (
      0 => 6324,
      1 => 353,
      2 => 'Xã Lộc Tiến',
    ),
    6324 => 
    array (
      0 => 6325,
      1 => 353,
      2 => 'Xã Lộc Hòa',
    ),
    6325 => 
    array (
      0 => 6326,
      1 => 353,
      2 => 'Xã Xuân Lộc',
    ),
    6326 => 
    array (
      0 => 6327,
      1 => 354,
      2 => 'Thị trấn Khe Tre',
    ),
    6327 => 
    array (
      0 => 6328,
      1 => 354,
      2 => 'Xã Hương Phú',
    ),
    6328 => 
    array (
      0 => 6329,
      1 => 354,
      2 => 'Xã Hương Sơn',
    ),
    6329 => 
    array (
      0 => 6330,
      1 => 354,
      2 => 'Xã Hương Lộc',
    ),
    6330 => 
    array (
      0 => 6331,
      1 => 354,
      2 => 'Xã Thượng Quảng',
    ),
    6331 => 
    array (
      0 => 6332,
      1 => 354,
      2 => 'Xã Hương Xuân',
    ),
    6332 => 
    array (
      0 => 6333,
      1 => 354,
      2 => 'Xã Hương Hữu',
    ),
    6333 => 
    array (
      0 => 6334,
      1 => 354,
      2 => 'Xã Thượng Lộ',
    ),
    6334 => 
    array (
      0 => 6335,
      1 => 354,
      2 => 'Xã Thượng Long',
    ),
    6335 => 
    array (
      0 => 6336,
      1 => 354,
      2 => 'Xã Thượng Nhật',
    ),
    6336 => 
    array (
      0 => 6337,
      1 => 355,
      2 => 'Phường Hòa Hiệp Bắc',
    ),
    6337 => 
    array (
      0 => 6338,
      1 => 355,
      2 => 'Phường Hòa Hiệp Nam',
    ),
    6338 => 
    array (
      0 => 6339,
      1 => 355,
      2 => 'Phường Hòa Khánh Bắc',
    ),
    6339 => 
    array (
      0 => 6340,
      1 => 355,
      2 => 'Phường Hòa Khánh Nam',
    ),
    6340 => 
    array (
      0 => 6341,
      1 => 355,
      2 => 'Phường Hòa Minh',
    ),
    6341 => 
    array (
      0 => 6342,
      1 => 356,
      2 => 'Phường Tam Thuận',
    ),
    6342 => 
    array (
      0 => 6343,
      1 => 356,
      2 => 'Phường Thanh Khê Tây',
    ),
    6343 => 
    array (
      0 => 6344,
      1 => 356,
      2 => 'Phường Thanh Khê Đông',
    ),
    6344 => 
    array (
      0 => 6345,
      1 => 356,
      2 => 'Phường Xuân Hà',
    ),
    6345 => 
    array (
      0 => 6346,
      1 => 356,
      2 => 'Phường Tân Chính',
    ),
    6346 => 
    array (
      0 => 6347,
      1 => 356,
      2 => 'Phường Chính Gián',
    ),
    6347 => 
    array (
      0 => 6348,
      1 => 356,
      2 => 'Phường Vĩnh Trung',
    ),
    6348 => 
    array (
      0 => 6349,
      1 => 356,
      2 => 'Phường Thạc Gián',
    ),
    6349 => 
    array (
      0 => 6350,
      1 => 356,
      2 => 'Phường An Khê',
    ),
    6350 => 
    array (
      0 => 6351,
      1 => 356,
      2 => 'Phường Hòa Khê',
    ),
    6351 => 
    array (
      0 => 6352,
      1 => 357,
      2 => 'Phường Thanh Bình',
    ),
    6352 => 
    array (
      0 => 6353,
      1 => 357,
      2 => 'Phường Thuận Phước',
    ),
    6353 => 
    array (
      0 => 6354,
      1 => 357,
      2 => 'Phường Thạch Thang',
    ),
    6354 => 
    array (
      0 => 6355,
      1 => 357,
      2 => 'Phường Hải Châu  I',
    ),
    6355 => 
    array (
      0 => 6356,
      1 => 357,
      2 => 'Phường Hải Châu II',
    ),
    6356 => 
    array (
      0 => 6357,
      1 => 357,
      2 => 'Phường Phước Ninh',
    ),
    6357 => 
    array (
      0 => 6358,
      1 => 357,
      2 => 'Phường Hòa Thuận Tây',
    ),
    6358 => 
    array (
      0 => 6359,
      1 => 357,
      2 => 'Phường Hòa Thuận Đông',
    ),
    6359 => 
    array (
      0 => 6360,
      1 => 357,
      2 => 'Phường Nam Dương',
    ),
    6360 => 
    array (
      0 => 6361,
      1 => 357,
      2 => 'Phường Bình Hiên',
    ),
    6361 => 
    array (
      0 => 6362,
      1 => 357,
      2 => 'Phường Bình Thuận',
    ),
    6362 => 
    array (
      0 => 6363,
      1 => 357,
      2 => 'Phường Hòa Cường Bắc',
    ),
    6363 => 
    array (
      0 => 6364,
      1 => 357,
      2 => 'Phường Hòa Cường Nam',
    ),
    6364 => 
    array (
      0 => 6365,
      1 => 358,
      2 => 'Phường Thọ Quang',
    ),
    6365 => 
    array (
      0 => 6366,
      1 => 358,
      2 => 'Phường Nại Hiên Đông',
    ),
    6366 => 
    array (
      0 => 6367,
      1 => 358,
      2 => 'Phường Mân Thái',
    ),
    6367 => 
    array (
      0 => 6368,
      1 => 358,
      2 => 'Phường An Hải Bắc',
    ),
    6368 => 
    array (
      0 => 6369,
      1 => 358,
      2 => 'Phường Phước Mỹ',
    ),
    6369 => 
    array (
      0 => 6370,
      1 => 358,
      2 => 'Phường An Hải Tây',
    ),
    6370 => 
    array (
      0 => 6371,
      1 => 358,
      2 => 'Phường An Hải Đông',
    ),
    6371 => 
    array (
      0 => 6372,
      1 => 359,
      2 => 'Phường Mỹ An',
    ),
    6372 => 
    array (
      0 => 6373,
      1 => 359,
      2 => 'Phường Khuê Mỹ',
    ),
    6373 => 
    array (
      0 => 6374,
      1 => 359,
      2 => 'Phường Hoà Quý',
    ),
    6374 => 
    array (
      0 => 6375,
      1 => 359,
      2 => 'Phường Hoà Hải',
    ),
    6375 => 
    array (
      0 => 6376,
      1 => 360,
      2 => 'Phường Khuê Trung',
    ),
    6376 => 
    array (
      0 => 6377,
      1 => 360,
      2 => 'Phường Hòa Phát',
    ),
    6377 => 
    array (
      0 => 6378,
      1 => 360,
      2 => 'Phường Hòa An',
    ),
    6378 => 
    array (
      0 => 6379,
      1 => 360,
      2 => 'Phường Hòa Thọ Tây',
    ),
    6379 => 
    array (
      0 => 6380,
      1 => 360,
      2 => 'Phường Hòa Thọ Đông',
    ),
    6380 => 
    array (
      0 => 6381,
      1 => 360,
      2 => 'Phường Hòa Xuân',
    ),
    6381 => 
    array (
      0 => 6382,
      1 => 361,
      2 => 'Xã Hòa Bắc',
    ),
    6382 => 
    array (
      0 => 6383,
      1 => 361,
      2 => 'Xã Hòa Liên',
    ),
    6383 => 
    array (
      0 => 6384,
      1 => 361,
      2 => 'Xã Hòa Ninh',
    ),
    6384 => 
    array (
      0 => 6385,
      1 => 361,
      2 => 'Xã Hòa Sơn',
    ),
    6385 => 
    array (
      0 => 6386,
      1 => 361,
      2 => 'Xã Hòa Nhơn',
    ),
    6386 => 
    array (
      0 => 6387,
      1 => 361,
      2 => 'Xã Hòa Phú',
    ),
    6387 => 
    array (
      0 => 6388,
      1 => 361,
      2 => 'Xã Hòa Phong',
    ),
    6388 => 
    array (
      0 => 6389,
      1 => 361,
      2 => 'Xã Hòa Châu',
    ),
    6389 => 
    array (
      0 => 6390,
      1 => 361,
      2 => 'Xã Hòa Tiến',
    ),
    6390 => 
    array (
      0 => 6391,
      1 => 361,
      2 => 'Xã Hòa Phước',
    ),
    6391 => 
    array (
      0 => 6392,
      1 => 361,
      2 => 'Xã Hòa Khương',
    ),
    6392 => 
    array (
      0 => 6393,
      1 => 362,
      2 => '',
    ),
    6393 => 
    array (
      0 => 6394,
      1 => 363,
      2 => 'Phường Tân Thạnh',
    ),
    6394 => 
    array (
      0 => 6395,
      1 => 363,
      2 => 'Phường Phước Hòa',
    ),
    6395 => 
    array (
      0 => 6396,
      1 => 363,
      2 => 'Phường An Mỹ',
    ),
    6396 => 
    array (
      0 => 6397,
      1 => 363,
      2 => 'Phường Hòa Hương',
    ),
    6397 => 
    array (
      0 => 6398,
      1 => 363,
      2 => 'Phường An Xuân',
    ),
    6398 => 
    array (
      0 => 6399,
      1 => 363,
      2 => 'Phường An Sơn',
    ),
    6399 => 
    array (
      0 => 6400,
      1 => 363,
      2 => 'Phường Trường Xuân',
    ),
    6400 => 
    array (
      0 => 6401,
      1 => 363,
      2 => 'Phường An Phú',
    ),
    6401 => 
    array (
      0 => 6402,
      1 => 363,
      2 => 'Xã Tam Thanh',
    ),
    6402 => 
    array (
      0 => 6403,
      1 => 363,
      2 => 'Xã Tam Thăng',
    ),
    6403 => 
    array (
      0 => 6404,
      1 => 363,
      2 => 'Xã Tam Phú',
    ),
    6404 => 
    array (
      0 => 6405,
      1 => 363,
      2 => 'Phường Hoà Thuận',
    ),
    6405 => 
    array (
      0 => 6406,
      1 => 363,
      2 => 'Xã Tam Ngọc',
    ),
    6406 => 
    array (
      0 => 6407,
      1 => 364,
      2 => 'Phường Minh An',
    ),
    6407 => 
    array (
      0 => 6408,
      1 => 364,
      2 => 'Phường Tân An',
    ),
    6408 => 
    array (
      0 => 6409,
      1 => 364,
      2 => 'Phường Cẩm Phô',
    ),
    6409 => 
    array (
      0 => 6410,
      1 => 364,
      2 => 'Phường Thanh Hà',
    ),
    6410 => 
    array (
      0 => 6411,
      1 => 364,
      2 => 'Phường Sơn Phong',
    ),
    6411 => 
    array (
      0 => 6412,
      1 => 364,
      2 => 'Phường Cẩm Châu',
    ),
    6412 => 
    array (
      0 => 6413,
      1 => 364,
      2 => 'Phường Cửa Đại',
    ),
    6413 => 
    array (
      0 => 6414,
      1 => 364,
      2 => 'Phường Cẩm An',
    ),
    6414 => 
    array (
      0 => 6415,
      1 => 364,
      2 => 'Xã Cẩm Hà',
    ),
    6415 => 
    array (
      0 => 6416,
      1 => 364,
      2 => 'Xã Cẩm Kim',
    ),
    6416 => 
    array (
      0 => 6417,
      1 => 364,
      2 => 'Phường Cẩm Nam',
    ),
    6417 => 
    array (
      0 => 6418,
      1 => 364,
      2 => 'Xã Cẩm Thanh',
    ),
    6418 => 
    array (
      0 => 6419,
      1 => 364,
      2 => 'Xã Tân Hiệp',
    ),
    6419 => 
    array (
      0 => 6420,
      1 => 365,
      2 => 'Xã Ch\'ơm',
    ),
    6420 => 
    array (
      0 => 6421,
      1 => 365,
      2 => 'Xã Ga Ri',
    ),
    6421 => 
    array (
      0 => 6422,
      1 => 365,
      2 => 'Xã A Xan',
    ),
    6422 => 
    array (
      0 => 6423,
      1 => 365,
      2 => 'Xã Tr\'Hy',
    ),
    6423 => 
    array (
      0 => 6424,
      1 => 365,
      2 => 'Xã Lăng',
    ),
    6424 => 
    array (
      0 => 6425,
      1 => 365,
      2 => 'Xã A Nông',
    ),
    6425 => 
    array (
      0 => 6426,
      1 => 365,
      2 => 'Xã A Tiêng',
    ),
    6426 => 
    array (
      0 => 6427,
      1 => 365,
      2 => 'Xã Bha Lê',
    ),
    6427 => 
    array (
      0 => 6428,
      1 => 365,
      2 => 'Xã A Vương',
    ),
    6428 => 
    array (
      0 => 6429,
      1 => 365,
      2 => 'Xã Dang',
    ),
    6429 => 
    array (
      0 => 6430,
      1 => 366,
      2 => 'Thị trấn P Rao',
    ),
    6430 => 
    array (
      0 => 6431,
      1 => 366,
      2 => 'Xã Tà Lu',
    ),
    6431 => 
    array (
      0 => 6432,
      1 => 366,
      2 => 'Xã Sông Kôn',
    ),
    6432 => 
    array (
      0 => 6433,
      1 => 366,
      2 => 'Xã Jơ Ngây',
    ),
    6433 => 
    array (
      0 => 6434,
      1 => 366,
      2 => 'Xã A Ting',
    ),
    6434 => 
    array (
      0 => 6435,
      1 => 366,
      2 => 'Xã  Tư',
    ),
    6435 => 
    array (
      0 => 6436,
      1 => 366,
      2 => 'Xã Ba',
    ),
    6436 => 
    array (
      0 => 6437,
      1 => 366,
      2 => 'Xã A Rooi',
    ),
    6437 => 
    array (
      0 => 6438,
      1 => 366,
      2 => 'Xã Za Hung',
    ),
    6438 => 
    array (
      0 => 6439,
      1 => 366,
      2 => 'Xã Mà Cooi',
    ),
    6439 => 
    array (
      0 => 6440,
      1 => 366,
      2 => 'Xã Ka Dăng',
    ),
    6440 => 
    array (
      0 => 6441,
      1 => 367,
      2 => 'Thị Trấn Ái Nghĩa',
    ),
    6441 => 
    array (
      0 => 6442,
      1 => 367,
      2 => 'Xã Đại Sơn',
    ),
    6442 => 
    array (
      0 => 6443,
      1 => 367,
      2 => 'Xã Đại Lãnh',
    ),
    6443 => 
    array (
      0 => 6444,
      1 => 367,
      2 => 'Xã Đại Hưng',
    ),
    6444 => 
    array (
      0 => 6445,
      1 => 367,
      2 => 'Xã Đại Hồng',
    ),
    6445 => 
    array (
      0 => 6446,
      1 => 367,
      2 => 'Xã Đại Đồng',
    ),
    6446 => 
    array (
      0 => 6447,
      1 => 367,
      2 => 'Xã Đại Quang',
    ),
    6447 => 
    array (
      0 => 6448,
      1 => 367,
      2 => 'Xã Đại Nghĩa',
    ),
    6448 => 
    array (
      0 => 6449,
      1 => 367,
      2 => 'Xã Đại Hiệp',
    ),
    6449 => 
    array (
      0 => 6450,
      1 => 367,
      2 => 'Xã Đại Thạnh',
    ),
    6450 => 
    array (
      0 => 6451,
      1 => 367,
      2 => 'Xã Đại Chánh',
    ),
    6451 => 
    array (
      0 => 6452,
      1 => 367,
      2 => 'Xã Đại Tân',
    ),
    6452 => 
    array (
      0 => 6453,
      1 => 367,
      2 => 'Xã Đại Phong',
    ),
    6453 => 
    array (
      0 => 6454,
      1 => 367,
      2 => 'Xã Đại Minh',
    ),
    6454 => 
    array (
      0 => 6455,
      1 => 367,
      2 => 'Xã Đại Thắng',
    ),
    6455 => 
    array (
      0 => 6456,
      1 => 367,
      2 => 'Xã Đại Cường',
    ),
    6456 => 
    array (
      0 => 6457,
      1 => 367,
      2 => 'Xã Đại An',
    ),
    6457 => 
    array (
      0 => 6458,
      1 => 367,
      2 => 'Xã Đại Hòa',
    ),
    6458 => 
    array (
      0 => 6459,
      1 => 368,
      2 => 'Phường Vĩnh Điện',
    ),
    6459 => 
    array (
      0 => 6460,
      1 => 368,
      2 => 'Xã Điện Tiến',
    ),
    6460 => 
    array (
      0 => 6461,
      1 => 368,
      2 => 'Xã Điện Hòa',
    ),
    6461 => 
    array (
      0 => 6462,
      1 => 368,
      2 => 'Xã Điện Thắng Bắc',
    ),
    6462 => 
    array (
      0 => 6463,
      1 => 368,
      2 => 'Xã Điện Thắng Trung',
    ),
    6463 => 
    array (
      0 => 6464,
      1 => 368,
      2 => 'Xã Điện Thắng Nam',
    ),
    6464 => 
    array (
      0 => 6465,
      1 => 368,
      2 => 'Phường Điện Ngọc',
    ),
    6465 => 
    array (
      0 => 6466,
      1 => 368,
      2 => 'Xã Điện Hồng',
    ),
    6466 => 
    array (
      0 => 6467,
      1 => 368,
      2 => 'Xã Điện Thọ',
    ),
    6467 => 
    array (
      0 => 6468,
      1 => 368,
      2 => 'Xã Điện Phước',
    ),
    6468 => 
    array (
      0 => 6469,
      1 => 368,
      2 => 'Phường Điện An',
    ),
    6469 => 
    array (
      0 => 6470,
      1 => 368,
      2 => 'Phường Điện Nam Bắc',
    ),
    6470 => 
    array (
      0 => 6471,
      1 => 368,
      2 => 'Phường Điện Nam Trung',
    ),
    6471 => 
    array (
      0 => 6472,
      1 => 368,
      2 => 'Phường Điện Nam Đông',
    ),
    6472 => 
    array (
      0 => 6473,
      1 => 368,
      2 => 'Phường Điện Dương',
    ),
    6473 => 
    array (
      0 => 6474,
      1 => 368,
      2 => 'Xã Điện Quang',
    ),
    6474 => 
    array (
      0 => 6475,
      1 => 368,
      2 => 'Xã Điện Trung',
    ),
    6475 => 
    array (
      0 => 6476,
      1 => 368,
      2 => 'Xã Điện Phong',
    ),
    6476 => 
    array (
      0 => 6477,
      1 => 368,
      2 => 'Xã Điện Minh',
    ),
    6477 => 
    array (
      0 => 6478,
      1 => 368,
      2 => 'Xã Điện Phương',
    ),
    6478 => 
    array (
      0 => 6479,
      1 => 369,
      2 => 'Thị trấn Nam Phước',
    ),
    6479 => 
    array (
      0 => 6480,
      1 => 369,
      2 => 'Xã Duy Thu',
    ),
    6480 => 
    array (
      0 => 6481,
      1 => 369,
      2 => 'Xã Duy Phú',
    ),
    6481 => 
    array (
      0 => 6482,
      1 => 369,
      2 => 'Xã Duy Tân',
    ),
    6482 => 
    array (
      0 => 6483,
      1 => 369,
      2 => 'Xã Duy Hòa',
    ),
    6483 => 
    array (
      0 => 6484,
      1 => 369,
      2 => 'Xã Duy Châu',
    ),
    6484 => 
    array (
      0 => 6485,
      1 => 369,
      2 => 'Xã Duy Trinh',
    ),
    6485 => 
    array (
      0 => 6486,
      1 => 369,
      2 => 'Xã Duy Sơn',
    ),
    6486 => 
    array (
      0 => 6487,
      1 => 369,
      2 => 'Xã Duy Trung',
    ),
    6487 => 
    array (
      0 => 6488,
      1 => 369,
      2 => 'Xã Duy Phước',
    ),
    6488 => 
    array (
      0 => 6489,
      1 => 369,
      2 => 'Xã Duy Thành',
    ),
    6489 => 
    array (
      0 => 6490,
      1 => 369,
      2 => 'Xã Duy Vinh',
    ),
    6490 => 
    array (
      0 => 6491,
      1 => 369,
      2 => 'Xã Duy Nghĩa',
    ),
    6491 => 
    array (
      0 => 6492,
      1 => 369,
      2 => 'Xã Duy Hải',
    ),
    6492 => 
    array (
      0 => 6493,
      1 => 370,
      2 => 'Thị trấn Đông Phú',
    ),
    6493 => 
    array (
      0 => 6494,
      1 => 370,
      2 => 'Xã Quế Xuân 1',
    ),
    6494 => 
    array (
      0 => 6495,
      1 => 370,
      2 => 'Xã Quế Xuân 2',
    ),
    6495 => 
    array (
      0 => 6496,
      1 => 370,
      2 => 'Xã Quế Phú',
    ),
    6496 => 
    array (
      0 => 6497,
      1 => 370,
      2 => 'Thị trấn Hương An',
    ),
    6497 => 
    array (
      0 => 6498,
      1 => 370,
      2 => 'Xã Quế Hiệp',
    ),
    6498 => 
    array (
      0 => 6499,
      1 => 370,
      2 => 'Xã Quế Thuận',
    ),
    6499 => 
    array (
      0 => 6500,
      1 => 370,
      2 => 'Xã Quế Mỹ',
    ),
    6500 => 
    array (
      0 => 6501,
      1 => 370,
      2 => 'Xã Quế Long',
    ),
    6501 => 
    array (
      0 => 6502,
      1 => 370,
      2 => 'Xã Quế Châu',
    ),
    6502 => 
    array (
      0 => 6503,
      1 => 370,
      2 => 'Xã Quế Phong',
    ),
    6503 => 
    array (
      0 => 6504,
      1 => 370,
      2 => 'Xã Quế An',
    ),
    6504 => 
    array (
      0 => 6505,
      1 => 370,
      2 => 'Xã Quế Minh',
    ),
    6505 => 
    array (
      0 => 6506,
      1 => 371,
      2 => 'Thị trấn Thạnh Mỹ',
    ),
    6506 => 
    array (
      0 => 6507,
      1 => 371,
      2 => 'Xã Laêê',
    ),
    6507 => 
    array (
      0 => 6508,
      1 => 371,
      2 => 'Xã Chơ Chun',
    ),
    6508 => 
    array (
      0 => 6509,
      1 => 371,
      2 => 'Xã Zuôich',
    ),
    6509 => 
    array (
      0 => 6510,
      1 => 371,
      2 => 'Xã Tà Pơơ',
    ),
    6510 => 
    array (
      0 => 6511,
      1 => 371,
      2 => 'Xã La Dêê',
    ),
    6511 => 
    array (
      0 => 6512,
      1 => 371,
      2 => 'Xã Đắc Tôi',
    ),
    6512 => 
    array (
      0 => 6513,
      1 => 371,
      2 => 'Xã Chà Vàl',
    ),
    6513 => 
    array (
      0 => 6514,
      1 => 371,
      2 => 'Xã Tà Bhinh',
    ),
    6514 => 
    array (
      0 => 6515,
      1 => 371,
      2 => 'Xã Cà Dy',
    ),
    6515 => 
    array (
      0 => 6516,
      1 => 371,
      2 => 'Xã Đắc Pre',
    ),
    6516 => 
    array (
      0 => 6517,
      1 => 371,
      2 => 'Xã Đắc Pring',
    ),
    6517 => 
    array (
      0 => 6518,
      1 => 372,
      2 => 'Thị trấn Khâm Đức',
    ),
    6518 => 
    array (
      0 => 6519,
      1 => 372,
      2 => 'Xã Phước Xuân',
    ),
    6519 => 
    array (
      0 => 6520,
      1 => 372,
      2 => 'Xã Phước Hiệp',
    ),
    6520 => 
    array (
      0 => 6521,
      1 => 372,
      2 => 'Xã Phước Hoà',
    ),
    6521 => 
    array (
      0 => 6522,
      1 => 372,
      2 => 'Xã Phước Đức',
    ),
    6522 => 
    array (
      0 => 6523,
      1 => 372,
      2 => 'Xã Phước Năng',
    ),
    6523 => 
    array (
      0 => 6524,
      1 => 372,
      2 => 'Xã Phước Mỹ',
    ),
    6524 => 
    array (
      0 => 6525,
      1 => 372,
      2 => 'Xã Phước Chánh',
    ),
    6525 => 
    array (
      0 => 6526,
      1 => 372,
      2 => 'Xã Phước Công',
    ),
    6526 => 
    array (
      0 => 6527,
      1 => 372,
      2 => 'Xã Phước Kim',
    ),
    6527 => 
    array (
      0 => 6528,
      1 => 372,
      2 => 'Xã Phước Lộc',
    ),
    6528 => 
    array (
      0 => 6529,
      1 => 372,
      2 => 'Xã Phước Thành',
    ),
    6529 => 
    array (
      0 => 6530,
      1 => 373,
      2 => 'Xã Hiệp Hòa',
    ),
    6530 => 
    array (
      0 => 6531,
      1 => 373,
      2 => 'Xã Hiệp Thuận',
    ),
    6531 => 
    array (
      0 => 6532,
      1 => 373,
      2 => 'Xã Quế Thọ',
    ),
    6532 => 
    array (
      0 => 6533,
      1 => 373,
      2 => 'Xã Bình Lâm',
    ),
    6533 => 
    array (
      0 => 6534,
      1 => 373,
      2 => 'Xã Sông Trà',
    ),
    6534 => 
    array (
      0 => 6535,
      1 => 373,
      2 => 'Xã Phước Trà',
    ),
    6535 => 
    array (
      0 => 6536,
      1 => 373,
      2 => 'Xã Phước Gia',
    ),
    6536 => 
    array (
      0 => 6537,
      1 => 373,
      2 => 'Thị trấn Tân Bình',
    ),
    6537 => 
    array (
      0 => 6538,
      1 => 373,
      2 => 'Xã Quế Lưu',
    ),
    6538 => 
    array (
      0 => 6539,
      1 => 373,
      2 => 'Xã Thăng Phước',
    ),
    6539 => 
    array (
      0 => 6540,
      1 => 373,
      2 => 'Xã Bình Sơn',
    ),
    6540 => 
    array (
      0 => 6541,
      1 => 374,
      2 => 'Thị trấn Hà Lam',
    ),
    6541 => 
    array (
      0 => 6542,
      1 => 374,
      2 => 'Xã Bình Dương',
    ),
    6542 => 
    array (
      0 => 6543,
      1 => 374,
      2 => 'Xã Bình Giang',
    ),
    6543 => 
    array (
      0 => 6544,
      1 => 374,
      2 => 'Xã Bình Nguyên',
    ),
    6544 => 
    array (
      0 => 6545,
      1 => 374,
      2 => 'Xã Bình Phục',
    ),
    6545 => 
    array (
      0 => 6546,
      1 => 374,
      2 => 'Xã Bình Triều',
    ),
    6546 => 
    array (
      0 => 6547,
      1 => 374,
      2 => 'Xã Bình Đào',
    ),
    6547 => 
    array (
      0 => 6548,
      1 => 374,
      2 => 'Xã Bình Minh',
    ),
    6548 => 
    array (
      0 => 6549,
      1 => 374,
      2 => 'Xã Bình Lãnh',
    ),
    6549 => 
    array (
      0 => 6550,
      1 => 374,
      2 => 'Xã Bình Trị',
    ),
    6550 => 
    array (
      0 => 6551,
      1 => 374,
      2 => 'Xã Bình Định Bắc',
    ),
    6551 => 
    array (
      0 => 6552,
      1 => 374,
      2 => 'Xã Bình Định Nam',
    ),
    6552 => 
    array (
      0 => 6553,
      1 => 374,
      2 => 'Xã Bình Quý',
    ),
    6553 => 
    array (
      0 => 6554,
      1 => 374,
      2 => 'Xã Bình Phú',
    ),
    6554 => 
    array (
      0 => 6555,
      1 => 374,
      2 => 'Xã Bình Chánh',
    ),
    6555 => 
    array (
      0 => 6556,
      1 => 374,
      2 => 'Xã Bình Tú',
    ),
    6556 => 
    array (
      0 => 6557,
      1 => 374,
      2 => 'Xã Bình Sa',
    ),
    6557 => 
    array (
      0 => 6558,
      1 => 374,
      2 => 'Xã Bình Hải',
    ),
    6558 => 
    array (
      0 => 6559,
      1 => 374,
      2 => 'Xã Bình Quế',
    ),
    6559 => 
    array (
      0 => 6560,
      1 => 374,
      2 => 'Xã Bình An',
    ),
    6560 => 
    array (
      0 => 6561,
      1 => 374,
      2 => 'Xã Bình Trung',
    ),
    6561 => 
    array (
      0 => 6562,
      1 => 374,
      2 => 'Xã Bình Nam',
    ),
    6562 => 
    array (
      0 => 6563,
      1 => 375,
      2 => 'Thị trấn Tiên Kỳ',
    ),
    6563 => 
    array (
      0 => 6564,
      1 => 375,
      2 => 'Xã Tiên Sơn',
    ),
    6564 => 
    array (
      0 => 6565,
      1 => 375,
      2 => 'Xã Tiên Hà',
    ),
    6565 => 
    array (
      0 => 6566,
      1 => 375,
      2 => 'Xã Tiên Cẩm',
    ),
    6566 => 
    array (
      0 => 6567,
      1 => 375,
      2 => 'Xã Tiên Châu',
    ),
    6567 => 
    array (
      0 => 6568,
      1 => 375,
      2 => 'Xã Tiên Lãnh',
    ),
    6568 => 
    array (
      0 => 6569,
      1 => 375,
      2 => 'Xã Tiên Ngọc',
    ),
    6569 => 
    array (
      0 => 6570,
      1 => 375,
      2 => 'Xã Tiên Hiệp',
    ),
    6570 => 
    array (
      0 => 6571,
      1 => 375,
      2 => 'Xã Tiên Cảnh',
    ),
    6571 => 
    array (
      0 => 6572,
      1 => 375,
      2 => 'Xã Tiên Mỹ',
    ),
    6572 => 
    array (
      0 => 6573,
      1 => 375,
      2 => 'Xã Tiên Phong',
    ),
    6573 => 
    array (
      0 => 6574,
      1 => 375,
      2 => 'Xã Tiên Thọ',
    ),
    6574 => 
    array (
      0 => 6575,
      1 => 375,
      2 => 'Xã Tiên An',
    ),
    6575 => 
    array (
      0 => 6576,
      1 => 375,
      2 => 'Xã Tiên Lộc',
    ),
    6576 => 
    array (
      0 => 6577,
      1 => 375,
      2 => 'Xã Tiên Lập',
    ),
    6577 => 
    array (
      0 => 6578,
      1 => 376,
      2 => 'Thị trấn Trà My',
    ),
    6578 => 
    array (
      0 => 6579,
      1 => 376,
      2 => 'Xã Trà Sơn',
    ),
    6579 => 
    array (
      0 => 6580,
      1 => 376,
      2 => 'Xã Trà Kót',
    ),
    6580 => 
    array (
      0 => 6581,
      1 => 376,
      2 => 'Xã Trà Nú',
    ),
    6581 => 
    array (
      0 => 6582,
      1 => 376,
      2 => 'Xã Trà Đông',
    ),
    6582 => 
    array (
      0 => 6583,
      1 => 376,
      2 => 'Xã Trà Dương',
    ),
    6583 => 
    array (
      0 => 6584,
      1 => 376,
      2 => 'Xã Trà Giang',
    ),
    6584 => 
    array (
      0 => 6585,
      1 => 376,
      2 => 'Xã Trà Bui',
    ),
    6585 => 
    array (
      0 => 6586,
      1 => 376,
      2 => 'Xã Trà Đốc',
    ),
    6586 => 
    array (
      0 => 6587,
      1 => 376,
      2 => 'Xã Trà Tân',
    ),
    6587 => 
    array (
      0 => 6588,
      1 => 376,
      2 => 'Xã Trà Giác',
    ),
    6588 => 
    array (
      0 => 6589,
      1 => 376,
      2 => 'Xã Trà Giáp',
    ),
    6589 => 
    array (
      0 => 6590,
      1 => 376,
      2 => 'Xã Trà Ka',
    ),
    6590 => 
    array (
      0 => 6591,
      1 => 377,
      2 => 'Xã Trà Leng',
    ),
    6591 => 
    array (
      0 => 6592,
      1 => 377,
      2 => 'Xã Trà Dơn',
    ),
    6592 => 
    array (
      0 => 6593,
      1 => 377,
      2 => 'Xã Trà Tập',
    ),
    6593 => 
    array (
      0 => 6594,
      1 => 377,
      2 => 'Xã Trà Mai',
    ),
    6594 => 
    array (
      0 => 6595,
      1 => 377,
      2 => 'Xã Trà Cang',
    ),
    6595 => 
    array (
      0 => 6596,
      1 => 377,
      2 => 'Xã Trà Linh',
    ),
    6596 => 
    array (
      0 => 6597,
      1 => 377,
      2 => 'Xã Trà Nam',
    ),
    6597 => 
    array (
      0 => 6598,
      1 => 377,
      2 => 'Xã Trà Vân',
    ),
    6598 => 
    array (
      0 => 6599,
      1 => 377,
      2 => 'Xã Trà Vinh',
    ),
    6599 => 
    array (
      0 => 6600,
      1 => 378,
      2 => 'Thị trấn Núi Thành',
    ),
    6600 => 
    array (
      0 => 6601,
      1 => 378,
      2 => 'Xã Tam Xuân I',
    ),
    6601 => 
    array (
      0 => 6602,
      1 => 378,
      2 => 'Xã Tam Xuân II',
    ),
    6602 => 
    array (
      0 => 6603,
      1 => 378,
      2 => 'Xã Tam Tiến',
    ),
    6603 => 
    array (
      0 => 6604,
      1 => 378,
      2 => 'Xã Tam Sơn',
    ),
    6604 => 
    array (
      0 => 6605,
      1 => 378,
      2 => 'Xã Tam Thạnh',
    ),
    6605 => 
    array (
      0 => 6606,
      1 => 378,
      2 => 'Xã Tam Anh Bắc',
    ),
    6606 => 
    array (
      0 => 6607,
      1 => 378,
      2 => 'Xã Tam Anh Nam',
    ),
    6607 => 
    array (
      0 => 6608,
      1 => 378,
      2 => 'Xã Tam Hòa',
    ),
    6608 => 
    array (
      0 => 6609,
      1 => 378,
      2 => 'Xã Tam Hiệp',
    ),
    6609 => 
    array (
      0 => 6610,
      1 => 378,
      2 => 'Xã Tam Hải',
    ),
    6610 => 
    array (
      0 => 6611,
      1 => 378,
      2 => 'Xã Tam Giang',
    ),
    6611 => 
    array (
      0 => 6612,
      1 => 378,
      2 => 'Xã Tam Quang',
    ),
    6612 => 
    array (
      0 => 6613,
      1 => 378,
      2 => 'Xã Tam Nghĩa',
    ),
    6613 => 
    array (
      0 => 6614,
      1 => 378,
      2 => 'Xã Tam Mỹ Tây',
    ),
    6614 => 
    array (
      0 => 6615,
      1 => 378,
      2 => 'Xã Tam Mỹ Đông',
    ),
    6615 => 
    array (
      0 => 6616,
      1 => 378,
      2 => 'Xã Tam Trà',
    ),
    6616 => 
    array (
      0 => 6617,
      1 => 379,
      2 => 'Thị trấn Phú Thịnh',
    ),
    6617 => 
    array (
      0 => 6618,
      1 => 379,
      2 => 'Xã Tam Thành',
    ),
    6618 => 
    array (
      0 => 6619,
      1 => 379,
      2 => 'Xã Tam An',
    ),
    6619 => 
    array (
      0 => 6620,
      1 => 379,
      2 => 'Xã Tam Đàn',
    ),
    6620 => 
    array (
      0 => 6621,
      1 => 379,
      2 => 'Xã Tam Lộc',
    ),
    6621 => 
    array (
      0 => 6622,
      1 => 379,
      2 => 'Xã Tam Phước',
    ),
    6622 => 
    array (
      0 => 6623,
      1 => 379,
      2 => 'Xã Tam Vinh',
    ),
    6623 => 
    array (
      0 => 6624,
      1 => 379,
      2 => 'Xã Tam Thái',
    ),
    6624 => 
    array (
      0 => 6625,
      1 => 379,
      2 => 'Xã Tam Đại',
    ),
    6625 => 
    array (
      0 => 6626,
      1 => 379,
      2 => 'Xã Tam Dân',
    ),
    6626 => 
    array (
      0 => 6627,
      1 => 379,
      2 => 'Xã Tam Lãnh',
    ),
    6627 => 
    array (
      0 => 6628,
      1 => 380,
      2 => 'Xã Quế Trung',
    ),
    6628 => 
    array (
      0 => 6629,
      1 => 380,
      2 => 'Xã Ninh Phước',
    ),
    6629 => 
    array (
      0 => 6630,
      1 => 380,
      2 => 'Xã Phước Ninh',
    ),
    6630 => 
    array (
      0 => 6631,
      1 => 380,
      2 => 'Xã Quế Lộc',
    ),
    6631 => 
    array (
      0 => 6632,
      1 => 380,
      2 => 'Xã Sơn Viên',
    ),
    6632 => 
    array (
      0 => 6633,
      1 => 380,
      2 => 'Xã Quế Lâm',
    ),
    6633 => 
    array (
      0 => 6634,
      1 => 381,
      2 => 'Phường Lê Hồng Phong',
    ),
    6634 => 
    array (
      0 => 6635,
      1 => 381,
      2 => 'Phường Trần Phú',
    ),
    6635 => 
    array (
      0 => 6636,
      1 => 381,
      2 => 'Phường Quảng Phú',
    ),
    6636 => 
    array (
      0 => 6637,
      1 => 381,
      2 => 'Phường Nghĩa Chánh',
    ),
    6637 => 
    array (
      0 => 6638,
      1 => 381,
      2 => 'Phường Trần Hưng Đạo',
    ),
    6638 => 
    array (
      0 => 6639,
      1 => 381,
      2 => 'Phường Nguyễn Nghiêm',
    ),
    6639 => 
    array (
      0 => 6640,
      1 => 381,
      2 => 'Phường Nghĩa Lộ',
    ),
    6640 => 
    array (
      0 => 6641,
      1 => 381,
      2 => 'Phường Chánh Lộ',
    ),
    6641 => 
    array (
      0 => 6642,
      1 => 381,
      2 => 'Xã Nghĩa Dũng',
    ),
    6642 => 
    array (
      0 => 6643,
      1 => 381,
      2 => 'Xã Nghĩa Dõng',
    ),
    6643 => 
    array (
      0 => 6644,
      1 => 381,
      2 => 'Phường Trương Quang Trọng',
    ),
    6644 => 
    array (
      0 => 6645,
      1 => 381,
      2 => 'Xã Tịnh Hòa',
    ),
    6645 => 
    array (
      0 => 6646,
      1 => 381,
      2 => 'Xã Tịnh Kỳ',
    ),
    6646 => 
    array (
      0 => 6647,
      1 => 381,
      2 => 'Xã Tịnh Thiện',
    ),
    6647 => 
    array (
      0 => 6648,
      1 => 381,
      2 => 'Xã Tịnh Ấn Đông',
    ),
    6648 => 
    array (
      0 => 6649,
      1 => 381,
      2 => 'Xã Tịnh Châu',
    ),
    6649 => 
    array (
      0 => 6650,
      1 => 381,
      2 => 'Xã Tịnh Khê',
    ),
    6650 => 
    array (
      0 => 6651,
      1 => 381,
      2 => 'Xã Tịnh Long',
    ),
    6651 => 
    array (
      0 => 6652,
      1 => 381,
      2 => 'Xã Tịnh Ấn Tây',
    ),
    6652 => 
    array (
      0 => 6653,
      1 => 381,
      2 => 'Xã Tịnh An',
    ),
    6653 => 
    array (
      0 => 6654,
      1 => 381,
      2 => 'Xã Nghĩa Phú',
    ),
    6654 => 
    array (
      0 => 6655,
      1 => 381,
      2 => 'Xã Nghĩa Hà',
    ),
    6655 => 
    array (
      0 => 6656,
      1 => 381,
      2 => 'Xã Nghĩa An',
    ),
    6656 => 
    array (
      0 => 6657,
      1 => 382,
      2 => 'Thị Trấn Châu Ổ',
    ),
    6657 => 
    array (
      0 => 6658,
      1 => 382,
      2 => 'Xã Bình Thuận',
    ),
    6658 => 
    array (
      0 => 6659,
      1 => 382,
      2 => 'Xã Bình Thạnh',
    ),
    6659 => 
    array (
      0 => 6660,
      1 => 382,
      2 => 'Xã Bình Đông',
    ),
    6660 => 
    array (
      0 => 6661,
      1 => 382,
      2 => 'Xã Bình Chánh',
    ),
    6661 => 
    array (
      0 => 6662,
      1 => 382,
      2 => 'Xã Bình Nguyên',
    ),
    6662 => 
    array (
      0 => 6663,
      1 => 382,
      2 => 'Xã Bình Khương',
    ),
    6663 => 
    array (
      0 => 6664,
      1 => 382,
      2 => 'Xã Bình Trị',
    ),
    6664 => 
    array (
      0 => 6665,
      1 => 382,
      2 => 'Xã Bình An',
    ),
    6665 => 
    array (
      0 => 6666,
      1 => 382,
      2 => 'Xã Bình Hải',
    ),
    6666 => 
    array (
      0 => 6667,
      1 => 382,
      2 => 'Xã Bình Dương',
    ),
    6667 => 
    array (
      0 => 6668,
      1 => 382,
      2 => 'Xã Bình Phước',
    ),
    6668 => 
    array (
      0 => 6669,
      1 => 382,
      2 => 'Xã Bình Hòa',
    ),
    6669 => 
    array (
      0 => 6670,
      1 => 382,
      2 => 'Xã Bình Trung',
    ),
    6670 => 
    array (
      0 => 6671,
      1 => 382,
      2 => 'Xã Bình Minh',
    ),
    6671 => 
    array (
      0 => 6672,
      1 => 382,
      2 => 'Xã Bình Long',
    ),
    6672 => 
    array (
      0 => 6673,
      1 => 382,
      2 => 'Xã Bình Chương',
    ),
    6673 => 
    array (
      0 => 6674,
      1 => 382,
      2 => 'Xã Bình Hiệp',
    ),
    6674 => 
    array (
      0 => 6675,
      1 => 382,
      2 => 'Xã Bình Mỹ',
    ),
    6675 => 
    array (
      0 => 6676,
      1 => 382,
      2 => 'Xã Bình Tân Phú',
    ),
    6676 => 
    array (
      0 => 6677,
      1 => 382,
      2 => 'Xã Bình Châu',
    ),
    6677 => 
    array (
      0 => 6678,
      1 => 383,
      2 => 'Thị trấn Trà Xuân',
    ),
    6678 => 
    array (
      0 => 6679,
      1 => 383,
      2 => 'Xã Trà Giang',
    ),
    6679 => 
    array (
      0 => 6680,
      1 => 383,
      2 => 'Xã Trà Thủy',
    ),
    6680 => 
    array (
      0 => 6681,
      1 => 383,
      2 => 'Xã Trà Hiệp',
    ),
    6681 => 
    array (
      0 => 6682,
      1 => 383,
      2 => 'Xã Trà Bình',
    ),
    6682 => 
    array (
      0 => 6683,
      1 => 383,
      2 => 'Xã Trà Phú',
    ),
    6683 => 
    array (
      0 => 6684,
      1 => 383,
      2 => 'Xã Trà Lâm',
    ),
    6684 => 
    array (
      0 => 6685,
      1 => 383,
      2 => 'Xã Trà Tân',
    ),
    6685 => 
    array (
      0 => 6686,
      1 => 383,
      2 => 'Xã Trà Sơn',
    ),
    6686 => 
    array (
      0 => 6687,
      1 => 383,
      2 => 'Xã Trà Bùi',
    ),
    6687 => 
    array (
      0 => 6688,
      1 => 383,
      2 => 'Xã Trà Thanh',
    ),
    6688 => 
    array (
      0 => 6689,
      1 => 383,
      2 => 'Xã Sơn Trà',
    ),
    6689 => 
    array (
      0 => 6690,
      1 => 383,
      2 => 'Xã Trà Phong',
    ),
    6690 => 
    array (
      0 => 6691,
      1 => 383,
      2 => 'Xã Hương Trà',
    ),
    6691 => 
    array (
      0 => 6692,
      1 => 383,
      2 => 'Xã Trà Xinh',
    ),
    6692 => 
    array (
      0 => 6693,
      1 => 383,
      2 => 'Xã Trà Tây',
    ),
    6693 => 
    array (
      0 => 6694,
      1 => 384,
      2 => 'Xã Tịnh Thọ',
    ),
    6694 => 
    array (
      0 => 6695,
      1 => 384,
      2 => 'Xã Tịnh Trà',
    ),
    6695 => 
    array (
      0 => 6696,
      1 => 384,
      2 => 'Xã Tịnh Phong',
    ),
    6696 => 
    array (
      0 => 6697,
      1 => 384,
      2 => 'Xã Tịnh Hiệp',
    ),
    6697 => 
    array (
      0 => 6698,
      1 => 384,
      2 => 'Xã Tịnh Bình',
    ),
    6698 => 
    array (
      0 => 6699,
      1 => 384,
      2 => 'Xã Tịnh Đông',
    ),
    6699 => 
    array (
      0 => 6700,
      1 => 384,
      2 => 'Xã Tịnh Bắc',
    ),
    6700 => 
    array (
      0 => 6701,
      1 => 384,
      2 => 'Xã Tịnh Sơn',
    ),
    6701 => 
    array (
      0 => 6702,
      1 => 384,
      2 => 'Xã Tịnh Hà',
    ),
    6702 => 
    array (
      0 => 6703,
      1 => 384,
      2 => 'Xã Tịnh Giang',
    ),
    6703 => 
    array (
      0 => 6704,
      1 => 384,
      2 => 'Xã Tịnh Minh',
    ),
    6704 => 
    array (
      0 => 6705,
      1 => 385,
      2 => 'Thị trấn La Hà',
    ),
    6705 => 
    array (
      0 => 6706,
      1 => 385,
      2 => 'Thị trấn Sông Vệ',
    ),
    6706 => 
    array (
      0 => 6707,
      1 => 385,
      2 => 'Xã Nghĩa Lâm',
    ),
    6707 => 
    array (
      0 => 6708,
      1 => 385,
      2 => 'Xã Nghĩa Thắng',
    ),
    6708 => 
    array (
      0 => 6709,
      1 => 385,
      2 => 'Xã Nghĩa Thuận',
    ),
    6709 => 
    array (
      0 => 6710,
      1 => 385,
      2 => 'Xã Nghĩa Kỳ',
    ),
    6710 => 
    array (
      0 => 6711,
      1 => 385,
      2 => 'Xã Nghĩa Sơn',
    ),
    6711 => 
    array (
      0 => 6712,
      1 => 385,
      2 => 'Xã Nghĩa Hòa',
    ),
    6712 => 
    array (
      0 => 6713,
      1 => 385,
      2 => 'Xã Nghĩa Điền',
    ),
    6713 => 
    array (
      0 => 6714,
      1 => 385,
      2 => 'Xã Nghĩa Thương',
    ),
    6714 => 
    array (
      0 => 6715,
      1 => 385,
      2 => 'Xã Nghĩa Trung',
    ),
    6715 => 
    array (
      0 => 6716,
      1 => 385,
      2 => 'Xã Nghĩa Hiệp',
    ),
    6716 => 
    array (
      0 => 6717,
      1 => 385,
      2 => 'Xã Nghĩa Phương',
    ),
    6717 => 
    array (
      0 => 6718,
      1 => 385,
      2 => 'Xã Nghĩa Mỹ',
    ),
    6718 => 
    array (
      0 => 6719,
      1 => 386,
      2 => 'Thị trấn Di Lăng',
    ),
    6719 => 
    array (
      0 => 6720,
      1 => 386,
      2 => 'Xã Sơn Hạ',
    ),
    6720 => 
    array (
      0 => 6721,
      1 => 386,
      2 => 'Xã Sơn Thành',
    ),
    6721 => 
    array (
      0 => 6722,
      1 => 386,
      2 => 'Xã Sơn Nham',
    ),
    6722 => 
    array (
      0 => 6723,
      1 => 386,
      2 => 'Xã Sơn Bao',
    ),
    6723 => 
    array (
      0 => 6724,
      1 => 386,
      2 => 'Xã Sơn Linh',
    ),
    6724 => 
    array (
      0 => 6725,
      1 => 386,
      2 => 'Xã Sơn Giang',
    ),
    6725 => 
    array (
      0 => 6726,
      1 => 386,
      2 => 'Xã Sơn Trung',
    ),
    6726 => 
    array (
      0 => 6727,
      1 => 386,
      2 => 'Xã Sơn Thượng',
    ),
    6727 => 
    array (
      0 => 6728,
      1 => 386,
      2 => 'Xã Sơn Cao',
    ),
    6728 => 
    array (
      0 => 6729,
      1 => 386,
      2 => 'Xã Sơn Hải',
    ),
    6729 => 
    array (
      0 => 6730,
      1 => 386,
      2 => 'Xã Sơn Thủy',
    ),
    6730 => 
    array (
      0 => 6731,
      1 => 386,
      2 => 'Xã Sơn Kỳ',
    ),
    6731 => 
    array (
      0 => 6732,
      1 => 386,
      2 => 'Xã Sơn Ba',
    ),
    6732 => 
    array (
      0 => 6733,
      1 => 387,
      2 => 'Xã Sơn Bua',
    ),
    6733 => 
    array (
      0 => 6734,
      1 => 387,
      2 => 'Xã Sơn Mùa',
    ),
    6734 => 
    array (
      0 => 6735,
      1 => 387,
      2 => 'Xã Sơn Liên',
    ),
    6735 => 
    array (
      0 => 6736,
      1 => 387,
      2 => 'Xã Sơn Tân',
    ),
    6736 => 
    array (
      0 => 6737,
      1 => 387,
      2 => 'Xã Sơn Màu',
    ),
    6737 => 
    array (
      0 => 6738,
      1 => 387,
      2 => 'Xã Sơn Dung',
    ),
    6738 => 
    array (
      0 => 6739,
      1 => 387,
      2 => 'Xã Sơn Long',
    ),
    6739 => 
    array (
      0 => 6740,
      1 => 387,
      2 => 'Xã Sơn Tinh',
    ),
    6740 => 
    array (
      0 => 6741,
      1 => 387,
      2 => 'Xã Sơn Lập',
    ),
    6741 => 
    array (
      0 => 6742,
      1 => 388,
      2 => 'Xã Long Sơn',
    ),
    6742 => 
    array (
      0 => 6743,
      1 => 388,
      2 => 'Xã Long Mai',
    ),
    6743 => 
    array (
      0 => 6744,
      1 => 388,
      2 => 'Xã Thanh An',
    ),
    6744 => 
    array (
      0 => 6745,
      1 => 388,
      2 => 'Xã Long Môn',
    ),
    6745 => 
    array (
      0 => 6746,
      1 => 388,
      2 => 'Xã Long Hiệp',
    ),
    6746 => 
    array (
      0 => 6747,
      1 => 389,
      2 => 'Thị trấn Chợ Chùa',
    ),
    6747 => 
    array (
      0 => 6748,
      1 => 389,
      2 => 'Xã Hành Thuận',
    ),
    6748 => 
    array (
      0 => 6749,
      1 => 389,
      2 => 'Xã Hành Dũng',
    ),
    6749 => 
    array (
      0 => 6750,
      1 => 389,
      2 => 'Xã Hành Trung',
    ),
    6750 => 
    array (
      0 => 6751,
      1 => 389,
      2 => 'Xã Hành Nhân',
    ),
    6751 => 
    array (
      0 => 6752,
      1 => 389,
      2 => 'Xã Hành Đức',
    ),
    6752 => 
    array (
      0 => 6753,
      1 => 389,
      2 => 'Xã Hành Minh',
    ),
    6753 => 
    array (
      0 => 6754,
      1 => 389,
      2 => 'Xã Hành Phước',
    ),
    6754 => 
    array (
      0 => 6755,
      1 => 389,
      2 => 'Xã Hành Thiện',
    ),
    6755 => 
    array (
      0 => 6756,
      1 => 389,
      2 => 'Xã Hành Thịnh',
    ),
    6756 => 
    array (
      0 => 6757,
      1 => 389,
      2 => 'Xã Hành Tín Tây',
    ),
    6757 => 
    array (
      0 => 6758,
      1 => 389,
      2 => 'Xã Hành Tín  Đông',
    ),
    6758 => 
    array (
      0 => 6759,
      1 => 390,
      2 => 'Thị trấn Mộ Đức',
    ),
    6759 => 
    array (
      0 => 6760,
      1 => 390,
      2 => 'Xã Đức Lợi',
    ),
    6760 => 
    array (
      0 => 6761,
      1 => 390,
      2 => 'Xã Đức Thắng',
    ),
    6761 => 
    array (
      0 => 6762,
      1 => 390,
      2 => 'Xã Đức Nhuận',
    ),
    6762 => 
    array (
      0 => 6763,
      1 => 390,
      2 => 'Xã Đức Chánh',
    ),
    6763 => 
    array (
      0 => 6764,
      1 => 390,
      2 => 'Xã Đức Hiệp',
    ),
    6764 => 
    array (
      0 => 6765,
      1 => 390,
      2 => 'Xã Đức Minh',
    ),
    6765 => 
    array (
      0 => 6766,
      1 => 390,
      2 => 'Xã Đức Thạnh',
    ),
    6766 => 
    array (
      0 => 6767,
      1 => 390,
      2 => 'Xã Đức Hòa',
    ),
    6767 => 
    array (
      0 => 6768,
      1 => 390,
      2 => 'Xã Đức Tân',
    ),
    6768 => 
    array (
      0 => 6769,
      1 => 390,
      2 => 'Xã Đức Phú',
    ),
    6769 => 
    array (
      0 => 6770,
      1 => 390,
      2 => 'Xã Đức Phong',
    ),
    6770 => 
    array (
      0 => 6771,
      1 => 390,
      2 => 'Xã Đức Lân',
    ),
    6771 => 
    array (
      0 => 6772,
      1 => 391,
      2 => 'Phường Nguyễn Nghiêm',
    ),
    6772 => 
    array (
      0 => 6773,
      1 => 391,
      2 => 'Xã Phổ An',
    ),
    6773 => 
    array (
      0 => 6774,
      1 => 391,
      2 => 'Xã Phổ Phong',
    ),
    6774 => 
    array (
      0 => 6775,
      1 => 391,
      2 => 'Xã Phổ Thuận',
    ),
    6775 => 
    array (
      0 => 6776,
      1 => 391,
      2 => 'Phường Phổ Văn',
    ),
    6776 => 
    array (
      0 => 6777,
      1 => 391,
      2 => 'Phường Phổ Quang',
    ),
    6777 => 
    array (
      0 => 6778,
      1 => 391,
      2 => 'Xã Phổ Nhơn',
    ),
    6778 => 
    array (
      0 => 6779,
      1 => 391,
      2 => 'Phường Phổ Ninh',
    ),
    6779 => 
    array (
      0 => 6780,
      1 => 391,
      2 => 'Phường Phổ Minh',
    ),
    6780 => 
    array (
      0 => 6781,
      1 => 391,
      2 => 'Phường Phổ Vinh',
    ),
    6781 => 
    array (
      0 => 6782,
      1 => 391,
      2 => 'Phường Phổ Hòa',
    ),
    6782 => 
    array (
      0 => 6783,
      1 => 391,
      2 => 'Xã Phổ Cường',
    ),
    6783 => 
    array (
      0 => 6784,
      1 => 391,
      2 => 'Xã Phổ Khánh',
    ),
    6784 => 
    array (
      0 => 6785,
      1 => 391,
      2 => 'Phường Phổ Thạnh',
    ),
    6785 => 
    array (
      0 => 6786,
      1 => 391,
      2 => 'Xã Phổ Châu',
    ),
    6786 => 
    array (
      0 => 6787,
      1 => 392,
      2 => 'Thị trấn Ba Tơ',
    ),
    6787 => 
    array (
      0 => 6788,
      1 => 392,
      2 => 'Xã Ba Điền',
    ),
    6788 => 
    array (
      0 => 6789,
      1 => 392,
      2 => 'Xã Ba Vinh',
    ),
    6789 => 
    array (
      0 => 6790,
      1 => 392,
      2 => 'Xã Ba Thành',
    ),
    6790 => 
    array (
      0 => 6791,
      1 => 392,
      2 => 'Xã Ba Động',
    ),
    6791 => 
    array (
      0 => 6792,
      1 => 392,
      2 => 'Xã Ba Dinh',
    ),
    6792 => 
    array (
      0 => 6793,
      1 => 392,
      2 => 'Xã Ba Giang',
    ),
    6793 => 
    array (
      0 => 6794,
      1 => 392,
      2 => 'Xã Ba Liên',
    ),
    6794 => 
    array (
      0 => 6795,
      1 => 392,
      2 => 'Xã Ba Ngạc',
    ),
    6795 => 
    array (
      0 => 6796,
      1 => 392,
      2 => 'Xã Ba Khâm',
    ),
    6796 => 
    array (
      0 => 6797,
      1 => 392,
      2 => 'Xã Ba Cung',
    ),
    6797 => 
    array (
      0 => 6798,
      1 => 392,
      2 => 'Xã Ba Tiêu',
    ),
    6798 => 
    array (
      0 => 6799,
      1 => 392,
      2 => 'Xã Ba Trang',
    ),
    6799 => 
    array (
      0 => 6800,
      1 => 392,
      2 => 'Xã Ba Tô',
    ),
    6800 => 
    array (
      0 => 6801,
      1 => 392,
      2 => 'Xã Ba Bích',
    ),
    6801 => 
    array (
      0 => 6802,
      1 => 392,
      2 => 'Xã Ba Vì',
    ),
    6802 => 
    array (
      0 => 6803,
      1 => 392,
      2 => 'Xã Ba Lế',
    ),
    6803 => 
    array (
      0 => 6804,
      1 => 392,
      2 => 'Xã Ba Nam',
    ),
    6804 => 
    array (
      0 => 6805,
      1 => 392,
      2 => 'Xã Ba Xa',
    ),
    6805 => 
    array (
      0 => 6806,
      1 => 393,
      2 => '',
    ),
    6806 => 
    array (
      0 => 6807,
      1 => 394,
      2 => 'Phường Nhơn Bình',
    ),
    6807 => 
    array (
      0 => 6808,
      1 => 394,
      2 => 'Phường Nhơn Phú',
    ),
    6808 => 
    array (
      0 => 6809,
      1 => 394,
      2 => 'Phường Đống Đa',
    ),
    6809 => 
    array (
      0 => 6810,
      1 => 394,
      2 => 'Phường Trần Quang Diệu',
    ),
    6810 => 
    array (
      0 => 6811,
      1 => 394,
      2 => 'Phường Hải Cảng',
    ),
    6811 => 
    array (
      0 => 6812,
      1 => 394,
      2 => 'Phường Quang Trung',
    ),
    6812 => 
    array (
      0 => 6813,
      1 => 394,
      2 => 'Phường Thị Nại',
    ),
    6813 => 
    array (
      0 => 6814,
      1 => 394,
      2 => 'Phường Lê Hồng Phong',
    ),
    6814 => 
    array (
      0 => 6815,
      1 => 394,
      2 => 'Phường Trần Hưng Đạo',
    ),
    6815 => 
    array (
      0 => 6816,
      1 => 394,
      2 => 'Phường Ngô Mây',
    ),
    6816 => 
    array (
      0 => 6817,
      1 => 394,
      2 => 'Phường Lý Thường Kiệt',
    ),
    6817 => 
    array (
      0 => 6818,
      1 => 394,
      2 => 'Phường Lê Lợi',
    ),
    6818 => 
    array (
      0 => 6819,
      1 => 394,
      2 => 'Phường Trần Phú',
    ),
    6819 => 
    array (
      0 => 6820,
      1 => 394,
      2 => 'Phường Bùi Thị Xuân',
    ),
    6820 => 
    array (
      0 => 6821,
      1 => 394,
      2 => 'Phường Nguyễn Văn Cừ',
    ),
    6821 => 
    array (
      0 => 6822,
      1 => 394,
      2 => 'Phường Ghềnh Ráng',
    ),
    6822 => 
    array (
      0 => 6823,
      1 => 394,
      2 => 'Xã Nhơn Lý',
    ),
    6823 => 
    array (
      0 => 6824,
      1 => 394,
      2 => 'Xã Nhơn Hội',
    ),
    6824 => 
    array (
      0 => 6825,
      1 => 394,
      2 => 'Xã Nhơn Hải',
    ),
    6825 => 
    array (
      0 => 6826,
      1 => 394,
      2 => 'Xã Nhơn Châu',
    ),
    6826 => 
    array (
      0 => 6827,
      1 => 394,
      2 => 'Xã Phước Mỹ',
    ),
    6827 => 
    array (
      0 => 6828,
      1 => 395,
      2 => 'Thị trấn An Lão',
    ),
    6828 => 
    array (
      0 => 6829,
      1 => 395,
      2 => 'Xã An Hưng',
    ),
    6829 => 
    array (
      0 => 6830,
      1 => 395,
      2 => 'Xã An Trung',
    ),
    6830 => 
    array (
      0 => 6831,
      1 => 395,
      2 => 'Xã An Dũng',
    ),
    6831 => 
    array (
      0 => 6832,
      1 => 395,
      2 => 'Xã An Vinh',
    ),
    6832 => 
    array (
      0 => 6833,
      1 => 395,
      2 => 'Xã An Toàn',
    ),
    6833 => 
    array (
      0 => 6834,
      1 => 395,
      2 => 'Xã An Tân',
    ),
    6834 => 
    array (
      0 => 6835,
      1 => 395,
      2 => 'Xã An Hòa',
    ),
    6835 => 
    array (
      0 => 6836,
      1 => 395,
      2 => 'Xã An Quang',
    ),
    6836 => 
    array (
      0 => 6837,
      1 => 395,
      2 => 'Xã An Nghĩa',
    ),
    6837 => 
    array (
      0 => 6838,
      1 => 396,
      2 => 'Phường Tam Quan',
    ),
    6838 => 
    array (
      0 => 6839,
      1 => 396,
      2 => 'Phường Bồng Sơn',
    ),
    6839 => 
    array (
      0 => 6840,
      1 => 396,
      2 => 'Xã Hoài Sơn',
    ),
    6840 => 
    array (
      0 => 6841,
      1 => 396,
      2 => 'Xã Hoài Châu Bắc',
    ),
    6841 => 
    array (
      0 => 6842,
      1 => 396,
      2 => 'Xã Hoài Châu',
    ),
    6842 => 
    array (
      0 => 6843,
      1 => 396,
      2 => 'Xã Hoài Phú',
    ),
    6843 => 
    array (
      0 => 6844,
      1 => 396,
      2 => 'Phường Tam Quan Bắc',
    ),
    6844 => 
    array (
      0 => 6845,
      1 => 396,
      2 => 'Phường Tam Quan Nam',
    ),
    6845 => 
    array (
      0 => 6846,
      1 => 396,
      2 => 'Phường Hoài Hảo',
    ),
    6846 => 
    array (
      0 => 6847,
      1 => 396,
      2 => 'Phường Hoài Thanh Tây',
    ),
    6847 => 
    array (
      0 => 6848,
      1 => 396,
      2 => 'Phường Hoài Thanh',
    ),
    6848 => 
    array (
      0 => 6849,
      1 => 396,
      2 => 'Phường Hoài Hương',
    ),
    6849 => 
    array (
      0 => 6850,
      1 => 396,
      2 => 'Phường Hoài Tân',
    ),
    6850 => 
    array (
      0 => 6851,
      1 => 396,
      2 => 'Xã Hoài Hải',
    ),
    6851 => 
    array (
      0 => 6852,
      1 => 396,
      2 => 'Phường Hoài Xuân',
    ),
    6852 => 
    array (
      0 => 6853,
      1 => 396,
      2 => 'Xã Hoài Mỹ',
    ),
    6853 => 
    array (
      0 => 6854,
      1 => 396,
      2 => 'Phường Hoài Đức',
    ),
    6854 => 
    array (
      0 => 6855,
      1 => 397,
      2 => 'Thị trấn Tăng Bạt Hổ',
    ),
    6855 => 
    array (
      0 => 6856,
      1 => 397,
      2 => 'Xã Ân Hảo Tây',
    ),
    6856 => 
    array (
      0 => 6857,
      1 => 397,
      2 => 'Xã Ân Hảo Đông',
    ),
    6857 => 
    array (
      0 => 6858,
      1 => 397,
      2 => 'Xã Ân Sơn',
    ),
    6858 => 
    array (
      0 => 6859,
      1 => 397,
      2 => 'Xã Ân Mỹ',
    ),
    6859 => 
    array (
      0 => 6860,
      1 => 397,
      2 => 'Xã Đak Mang',
    ),
    6860 => 
    array (
      0 => 6861,
      1 => 397,
      2 => 'Xã Ân Tín',
    ),
    6861 => 
    array (
      0 => 6862,
      1 => 397,
      2 => 'Xã Ân Thạnh',
    ),
    6862 => 
    array (
      0 => 6863,
      1 => 397,
      2 => 'Xã Ân Phong',
    ),
    6863 => 
    array (
      0 => 6864,
      1 => 397,
      2 => 'Xã Ân Đức',
    ),
    6864 => 
    array (
      0 => 6865,
      1 => 397,
      2 => 'Xã Ân Hữu',
    ),
    6865 => 
    array (
      0 => 6866,
      1 => 397,
      2 => 'Xã Bok Tới',
    ),
    6866 => 
    array (
      0 => 6867,
      1 => 397,
      2 => 'Xã Ân Tường Tây',
    ),
    6867 => 
    array (
      0 => 6868,
      1 => 397,
      2 => 'Xã Ân Tường Đông',
    ),
    6868 => 
    array (
      0 => 6869,
      1 => 397,
      2 => 'Xã Ân Nghĩa',
    ),
    6869 => 
    array (
      0 => 6870,
      1 => 398,
      2 => 'Thị trấn Phù Mỹ',
    ),
    6870 => 
    array (
      0 => 6871,
      1 => 398,
      2 => 'Thị trấn Bình Dương',
    ),
    6871 => 
    array (
      0 => 6872,
      1 => 398,
      2 => 'Xã Mỹ Đức',
    ),
    6872 => 
    array (
      0 => 6873,
      1 => 398,
      2 => 'Xã Mỹ Châu',
    ),
    6873 => 
    array (
      0 => 6874,
      1 => 398,
      2 => 'Xã Mỹ Thắng',
    ),
    6874 => 
    array (
      0 => 6875,
      1 => 398,
      2 => 'Xã Mỹ Lộc',
    ),
    6875 => 
    array (
      0 => 6876,
      1 => 398,
      2 => 'Xã Mỹ Lợi',
    ),
    6876 => 
    array (
      0 => 6877,
      1 => 398,
      2 => 'Xã Mỹ An',
    ),
    6877 => 
    array (
      0 => 6878,
      1 => 398,
      2 => 'Xã Mỹ Phong',
    ),
    6878 => 
    array (
      0 => 6879,
      1 => 398,
      2 => 'Xã Mỹ Trinh',
    ),
    6879 => 
    array (
      0 => 6880,
      1 => 398,
      2 => 'Xã Mỹ Thọ',
    ),
    6880 => 
    array (
      0 => 6881,
      1 => 398,
      2 => 'Xã Mỹ Hòa',
    ),
    6881 => 
    array (
      0 => 6882,
      1 => 398,
      2 => 'Xã Mỹ Thành',
    ),
    6882 => 
    array (
      0 => 6883,
      1 => 398,
      2 => 'Xã Mỹ Chánh',
    ),
    6883 => 
    array (
      0 => 6884,
      1 => 398,
      2 => 'Xã Mỹ Quang',
    ),
    6884 => 
    array (
      0 => 6885,
      1 => 398,
      2 => 'Xã Mỹ Hiệp',
    ),
    6885 => 
    array (
      0 => 6886,
      1 => 398,
      2 => 'Xã Mỹ Tài',
    ),
    6886 => 
    array (
      0 => 6887,
      1 => 398,
      2 => 'Xã Mỹ Cát',
    ),
    6887 => 
    array (
      0 => 6888,
      1 => 398,
      2 => 'Xã Mỹ Chánh Tây',
    ),
    6888 => 
    array (
      0 => 6889,
      1 => 399,
      2 => 'Thị trấn Vĩnh Thạnh',
    ),
    6889 => 
    array (
      0 => 6890,
      1 => 399,
      2 => 'Xã Vĩnh Sơn',
    ),
    6890 => 
    array (
      0 => 6891,
      1 => 399,
      2 => 'Xã Vĩnh Kim',
    ),
    6891 => 
    array (
      0 => 6892,
      1 => 399,
      2 => 'Xã Vĩnh Hiệp',
    ),
    6892 => 
    array (
      0 => 6893,
      1 => 399,
      2 => 'Xã Vĩnh Hảo',
    ),
    6893 => 
    array (
      0 => 6894,
      1 => 399,
      2 => 'Xã Vĩnh Hòa',
    ),
    6894 => 
    array (
      0 => 6895,
      1 => 399,
      2 => 'Xã Vĩnh Thịnh',
    ),
    6895 => 
    array (
      0 => 6896,
      1 => 399,
      2 => 'Xã Vĩnh Thuận',
    ),
    6896 => 
    array (
      0 => 6897,
      1 => 399,
      2 => 'Xã Vĩnh Quang',
    ),
    6897 => 
    array (
      0 => 6898,
      1 => 400,
      2 => 'Thị trấn Phú Phong',
    ),
    6898 => 
    array (
      0 => 6899,
      1 => 400,
      2 => 'Xã Bình Tân',
    ),
    6899 => 
    array (
      0 => 6900,
      1 => 400,
      2 => 'Xã Tây Thuận',
    ),
    6900 => 
    array (
      0 => 6901,
      1 => 400,
      2 => 'Xã Bình Thuận',
    ),
    6901 => 
    array (
      0 => 6902,
      1 => 400,
      2 => 'Xã Tây Giang',
    ),
    6902 => 
    array (
      0 => 6903,
      1 => 400,
      2 => 'Xã Bình Thành',
    ),
    6903 => 
    array (
      0 => 6904,
      1 => 400,
      2 => 'Xã Tây An',
    ),
    6904 => 
    array (
      0 => 6905,
      1 => 400,
      2 => 'Xã Bình Hòa',
    ),
    6905 => 
    array (
      0 => 6906,
      1 => 400,
      2 => 'Xã Tây Bình',
    ),
    6906 => 
    array (
      0 => 6907,
      1 => 400,
      2 => 'Xã Bình Tường',
    ),
    6907 => 
    array (
      0 => 6908,
      1 => 400,
      2 => 'Xã Tây Vinh',
    ),
    6908 => 
    array (
      0 => 6909,
      1 => 400,
      2 => 'Xã Vĩnh An',
    ),
    6909 => 
    array (
      0 => 6910,
      1 => 400,
      2 => 'Xã Tây Xuân',
    ),
    6910 => 
    array (
      0 => 6911,
      1 => 400,
      2 => 'Xã Bình Nghi',
    ),
    6911 => 
    array (
      0 => 6912,
      1 => 400,
      2 => 'Xã Tây Phú',
    ),
    6912 => 
    array (
      0 => 6913,
      1 => 401,
      2 => 'Thị trấn Ngô Mây',
    ),
    6913 => 
    array (
      0 => 6914,
      1 => 401,
      2 => 'Xã Cát Sơn',
    ),
    6914 => 
    array (
      0 => 6915,
      1 => 401,
      2 => 'Xã Cát Minh',
    ),
    6915 => 
    array (
      0 => 6916,
      1 => 401,
      2 => 'Xã Cát Khánh',
    ),
    6916 => 
    array (
      0 => 6917,
      1 => 401,
      2 => 'Xã Cát Tài',
    ),
    6917 => 
    array (
      0 => 6918,
      1 => 401,
      2 => 'Xã Cát Lâm',
    ),
    6918 => 
    array (
      0 => 6919,
      1 => 401,
      2 => 'Xã Cát Hanh',
    ),
    6919 => 
    array (
      0 => 6920,
      1 => 401,
      2 => 'Xã Cát Thành',
    ),
    6920 => 
    array (
      0 => 6921,
      1 => 401,
      2 => 'Xã Cát Trinh',
    ),
    6921 => 
    array (
      0 => 6922,
      1 => 401,
      2 => 'Xã Cát Hải',
    ),
    6922 => 
    array (
      0 => 6923,
      1 => 401,
      2 => 'Xã Cát Hiệp',
    ),
    6923 => 
    array (
      0 => 6924,
      1 => 401,
      2 => 'Xã Cát Nhơn',
    ),
    6924 => 
    array (
      0 => 6925,
      1 => 401,
      2 => 'Xã Cát Hưng',
    ),
    6925 => 
    array (
      0 => 6926,
      1 => 401,
      2 => 'Xã Cát Tường',
    ),
    6926 => 
    array (
      0 => 6927,
      1 => 401,
      2 => 'Xã Cát Tân',
    ),
    6927 => 
    array (
      0 => 6928,
      1 => 401,
      2 => 'Thị trấn Cát Tiến',
    ),
    6928 => 
    array (
      0 => 6929,
      1 => 401,
      2 => 'Xã Cát Thắng',
    ),
    6929 => 
    array (
      0 => 6930,
      1 => 401,
      2 => 'Xã Cát Chánh',
    ),
    6930 => 
    array (
      0 => 6931,
      1 => 402,
      2 => 'Phường Bình Định',
    ),
    6931 => 
    array (
      0 => 6932,
      1 => 402,
      2 => 'Phường Đập Đá',
    ),
    6932 => 
    array (
      0 => 6933,
      1 => 402,
      2 => 'Xã Nhơn Mỹ',
    ),
    6933 => 
    array (
      0 => 6934,
      1 => 402,
      2 => 'Phường Nhơn Thành',
    ),
    6934 => 
    array (
      0 => 6935,
      1 => 402,
      2 => 'Xã Nhơn Hạnh',
    ),
    6935 => 
    array (
      0 => 6936,
      1 => 402,
      2 => 'Xã Nhơn Hậu',
    ),
    6936 => 
    array (
      0 => 6937,
      1 => 402,
      2 => 'Xã Nhơn Phong',
    ),
    6937 => 
    array (
      0 => 6938,
      1 => 402,
      2 => 'Xã Nhơn An',
    ),
    6938 => 
    array (
      0 => 6939,
      1 => 402,
      2 => 'Xã Nhơn Phúc',
    ),
    6939 => 
    array (
      0 => 6940,
      1 => 402,
      2 => 'Phường Nhơn Hưng',
    ),
    6940 => 
    array (
      0 => 6941,
      1 => 402,
      2 => 'Xã Nhơn Khánh',
    ),
    6941 => 
    array (
      0 => 6942,
      1 => 402,
      2 => 'Xã Nhơn Lộc',
    ),
    6942 => 
    array (
      0 => 6943,
      1 => 402,
      2 => 'Phường Nhơn Hoà',
    ),
    6943 => 
    array (
      0 => 6944,
      1 => 402,
      2 => 'Xã Nhơn Tân',
    ),
    6944 => 
    array (
      0 => 6945,
      1 => 402,
      2 => 'Xã Nhơn Thọ',
    ),
    6945 => 
    array (
      0 => 6946,
      1 => 403,
      2 => 'Thị trấn Tuy Phước',
    ),
    6946 => 
    array (
      0 => 6947,
      1 => 403,
      2 => 'Thị trấn Diêu Trì',
    ),
    6947 => 
    array (
      0 => 6948,
      1 => 403,
      2 => 'Xã Phước Thắng',
    ),
    6948 => 
    array (
      0 => 6949,
      1 => 403,
      2 => 'Xã Phước Hưng',
    ),
    6949 => 
    array (
      0 => 6950,
      1 => 403,
      2 => 'Xã Phước Quang',
    ),
    6950 => 
    array (
      0 => 6951,
      1 => 403,
      2 => 'Xã Phước Hòa',
    ),
    6951 => 
    array (
      0 => 6952,
      1 => 403,
      2 => 'Xã Phước Sơn',
    ),
    6952 => 
    array (
      0 => 6953,
      1 => 403,
      2 => 'Xã Phước Hiệp',
    ),
    6953 => 
    array (
      0 => 6954,
      1 => 403,
      2 => 'Xã Phước Lộc',
    ),
    6954 => 
    array (
      0 => 6955,
      1 => 403,
      2 => 'Xã Phước Nghĩa',
    ),
    6955 => 
    array (
      0 => 6956,
      1 => 403,
      2 => 'Xã Phước Thuận',
    ),
    6956 => 
    array (
      0 => 6957,
      1 => 403,
      2 => 'Xã Phước An',
    ),
    6957 => 
    array (
      0 => 6958,
      1 => 403,
      2 => 'Xã Phước Thành',
    ),
    6958 => 
    array (
      0 => 6959,
      1 => 404,
      2 => 'Thị trấn Vân Canh',
    ),
    6959 => 
    array (
      0 => 6960,
      1 => 404,
      2 => 'Xã Canh Liên',
    ),
    6960 => 
    array (
      0 => 6961,
      1 => 404,
      2 => 'Xã Canh Hiệp',
    ),
    6961 => 
    array (
      0 => 6962,
      1 => 404,
      2 => 'Xã Canh Vinh',
    ),
    6962 => 
    array (
      0 => 6963,
      1 => 404,
      2 => 'Xã Canh Hiển',
    ),
    6963 => 
    array (
      0 => 6964,
      1 => 404,
      2 => 'Xã Canh Thuận',
    ),
    6964 => 
    array (
      0 => 6965,
      1 => 404,
      2 => 'Xã Canh Hòa',
    ),
    6965 => 
    array (
      0 => 6966,
      1 => 405,
      2 => 'Phường 1',
    ),
    6966 => 
    array (
      0 => 6967,
      1 => 405,
      2 => 'Phường 8',
    ),
    6967 => 
    array (
      0 => 6968,
      1 => 405,
      2 => 'Phường 2',
    ),
    6968 => 
    array (
      0 => 6969,
      1 => 405,
      2 => 'Phường 9',
    ),
    6969 => 
    array (
      0 => 6970,
      1 => 405,
      2 => 'Phường 3',
    ),
    6970 => 
    array (
      0 => 6971,
      1 => 405,
      2 => 'Phường 4',
    ),
    6971 => 
    array (
      0 => 6972,
      1 => 405,
      2 => 'Phường 5',
    ),
    6972 => 
    array (
      0 => 6973,
      1 => 405,
      2 => 'Phường 7',
    ),
    6973 => 
    array (
      0 => 6974,
      1 => 405,
      2 => 'Phường 6',
    ),
    6974 => 
    array (
      0 => 6975,
      1 => 405,
      2 => 'Phường Phú Thạnh',
    ),
    6975 => 
    array (
      0 => 6976,
      1 => 405,
      2 => 'Phường Phú Đông',
    ),
    6976 => 
    array (
      0 => 6977,
      1 => 405,
      2 => 'Xã Hòa Kiến',
    ),
    6977 => 
    array (
      0 => 6978,
      1 => 405,
      2 => 'Xã Bình Kiến',
    ),
    6978 => 
    array (
      0 => 6979,
      1 => 405,
      2 => 'Xã Bình Ngọc',
    ),
    6979 => 
    array (
      0 => 6980,
      1 => 405,
      2 => 'Xã An Phú',
    ),
    6980 => 
    array (
      0 => 6981,
      1 => 405,
      2 => 'Phường Phú Lâm',
    ),
    6981 => 
    array (
      0 => 6982,
      1 => 406,
      2 => 'Phường Xuân Phú',
    ),
    6982 => 
    array (
      0 => 6983,
      1 => 406,
      2 => 'Xã Xuân Lâm',
    ),
    6983 => 
    array (
      0 => 6984,
      1 => 406,
      2 => 'Phường Xuân Thành',
    ),
    6984 => 
    array (
      0 => 6985,
      1 => 406,
      2 => 'Xã Xuân Hải',
    ),
    6985 => 
    array (
      0 => 6986,
      1 => 406,
      2 => 'Xã Xuân Lộc',
    ),
    6986 => 
    array (
      0 => 6987,
      1 => 406,
      2 => 'Xã Xuân Bình',
    ),
    6987 => 
    array (
      0 => 6988,
      1 => 406,
      2 => 'Xã Xuân Cảnh',
    ),
    6988 => 
    array (
      0 => 6989,
      1 => 406,
      2 => 'Xã Xuân Thịnh',
    ),
    6989 => 
    array (
      0 => 6990,
      1 => 406,
      2 => 'Xã Xuân Phương',
    ),
    6990 => 
    array (
      0 => 6991,
      1 => 406,
      2 => 'Phường Xuân Yên',
    ),
    6991 => 
    array (
      0 => 6992,
      1 => 406,
      2 => 'Xã Xuân Thọ 1',
    ),
    6992 => 
    array (
      0 => 6993,
      1 => 406,
      2 => 'Phường Xuân Đài',
    ),
    6993 => 
    array (
      0 => 6994,
      1 => 406,
      2 => 'Xã Xuân Thọ 2',
    ),
    6994 => 
    array (
      0 => 6995,
      1 => 407,
      2 => 'Thị trấn La Hai',
    ),
    6995 => 
    array (
      0 => 6996,
      1 => 407,
      2 => 'Xã Đa Lộc',
    ),
    6996 => 
    array (
      0 => 6997,
      1 => 407,
      2 => 'Xã Phú Mỡ',
    ),
    6997 => 
    array (
      0 => 6998,
      1 => 407,
      2 => 'Xã Xuân Lãnh',
    ),
    6998 => 
    array (
      0 => 6999,
      1 => 407,
      2 => 'Xã Xuân Long',
    ),
    6999 => 
    array (
      0 => 7000,
      1 => 407,
      2 => 'Xã Xuân Quang 1',
    ),
    7000 => 
    array (
      0 => 7001,
      1 => 407,
      2 => 'Xã Xuân Sơn Bắc',
    ),
    7001 => 
    array (
      0 => 7002,
      1 => 407,
      2 => 'Xã Xuân Quang 2',
    ),
    7002 => 
    array (
      0 => 7003,
      1 => 407,
      2 => 'Xã Xuân Sơn Nam',
    ),
    7003 => 
    array (
      0 => 7004,
      1 => 407,
      2 => 'Xã Xuân Quang 3',
    ),
    7004 => 
    array (
      0 => 7005,
      1 => 407,
      2 => 'Xã Xuân Phước',
    ),
    7005 => 
    array (
      0 => 7006,
      1 => 408,
      2 => 'Thị trấn Chí Thạnh',
    ),
    7006 => 
    array (
      0 => 7007,
      1 => 408,
      2 => 'Xã An Dân',
    ),
    7007 => 
    array (
      0 => 7008,
      1 => 408,
      2 => 'Xã An Ninh Tây',
    ),
    7008 => 
    array (
      0 => 7009,
      1 => 408,
      2 => 'Xã An Ninh Đông',
    ),
    7009 => 
    array (
      0 => 7010,
      1 => 408,
      2 => 'Xã An Thạch',
    ),
    7010 => 
    array (
      0 => 7011,
      1 => 408,
      2 => 'Xã An Định',
    ),
    7011 => 
    array (
      0 => 7012,
      1 => 408,
      2 => 'Xã An Nghiệp',
    ),
    7012 => 
    array (
      0 => 7013,
      1 => 408,
      2 => 'Xã An Cư',
    ),
    7013 => 
    array (
      0 => 7014,
      1 => 408,
      2 => 'Xã An Xuân',
    ),
    7014 => 
    array (
      0 => 7015,
      1 => 408,
      2 => 'Xã An Lĩnh',
    ),
    7015 => 
    array (
      0 => 7016,
      1 => 408,
      2 => 'Xã An Hòa Hải',
    ),
    7016 => 
    array (
      0 => 7017,
      1 => 408,
      2 => 'Xã An Hiệp',
    ),
    7017 => 
    array (
      0 => 7018,
      1 => 408,
      2 => 'Xã An Mỹ',
    ),
    7018 => 
    array (
      0 => 7019,
      1 => 408,
      2 => 'Xã An Chấn',
    ),
    7019 => 
    array (
      0 => 7020,
      1 => 408,
      2 => 'Xã An Thọ',
    ),
    7020 => 
    array (
      0 => 7021,
      1 => 409,
      2 => 'Thị trấn Củng Sơn',
    ),
    7021 => 
    array (
      0 => 7022,
      1 => 409,
      2 => 'Xã Phước Tân',
    ),
    7022 => 
    array (
      0 => 7023,
      1 => 409,
      2 => 'Xã Sơn Hội',
    ),
    7023 => 
    array (
      0 => 7024,
      1 => 409,
      2 => 'Xã Sơn Định',
    ),
    7024 => 
    array (
      0 => 7025,
      1 => 409,
      2 => 'Xã Sơn Long',
    ),
    7025 => 
    array (
      0 => 7026,
      1 => 409,
      2 => 'Xã Cà Lúi',
    ),
    7026 => 
    array (
      0 => 7027,
      1 => 409,
      2 => 'Xã Sơn Phước',
    ),
    7027 => 
    array (
      0 => 7028,
      1 => 409,
      2 => 'Xã Sơn Xuân',
    ),
    7028 => 
    array (
      0 => 7029,
      1 => 409,
      2 => 'Xã Sơn Nguyên',
    ),
    7029 => 
    array (
      0 => 7030,
      1 => 409,
      2 => 'Xã Eachà Rang',
    ),
    7030 => 
    array (
      0 => 7031,
      1 => 409,
      2 => 'Xã Krông Pa',
    ),
    7031 => 
    array (
      0 => 7032,
      1 => 409,
      2 => 'Xã Suối Bạc',
    ),
    7032 => 
    array (
      0 => 7033,
      1 => 409,
      2 => 'Xã Sơn Hà',
    ),
    7033 => 
    array (
      0 => 7034,
      1 => 409,
      2 => 'Xã Suối Trai',
    ),
    7034 => 
    array (
      0 => 7035,
      1 => 410,
      2 => 'Thị trấn Hai Riêng',
    ),
    7035 => 
    array (
      0 => 7036,
      1 => 410,
      2 => 'Xã Ea Lâm',
    ),
    7036 => 
    array (
      0 => 7037,
      1 => 410,
      2 => 'Xã Đức Bình Tây',
    ),
    7037 => 
    array (
      0 => 7038,
      1 => 410,
      2 => 'Xã Ea Bá',
    ),
    7038 => 
    array (
      0 => 7039,
      1 => 410,
      2 => 'Xã Sơn Giang',
    ),
    7039 => 
    array (
      0 => 7040,
      1 => 410,
      2 => 'Xã Đức Bình Đông',
    ),
    7040 => 
    array (
      0 => 7041,
      1 => 410,
      2 => 'Xã EaBar',
    ),
    7041 => 
    array (
      0 => 7042,
      1 => 410,
      2 => 'Xã EaBia',
    ),
    7042 => 
    array (
      0 => 7043,
      1 => 410,
      2 => 'Xã EaTrol',
    ),
    7043 => 
    array (
      0 => 7044,
      1 => 410,
      2 => 'Xã Sông Hinh',
    ),
    7044 => 
    array (
      0 => 7045,
      1 => 410,
      2 => 'Xã Ealy',
    ),
    7045 => 
    array (
      0 => 7046,
      1 => 411,
      2 => 'Xã Sơn Thành Tây',
    ),
    7046 => 
    array (
      0 => 7047,
      1 => 411,
      2 => 'Xã Sơn Thành Đông',
    ),
    7047 => 
    array (
      0 => 7048,
      1 => 411,
      2 => 'Xã Hòa Bình 1',
    ),
    7048 => 
    array (
      0 => 7049,
      1 => 411,
      2 => 'Thị trấn Phú Thứ',
    ),
    7049 => 
    array (
      0 => 7050,
      1 => 411,
      2 => 'Xã Hòa Phong',
    ),
    7050 => 
    array (
      0 => 7051,
      1 => 411,
      2 => 'Xã Hòa Phú',
    ),
    7051 => 
    array (
      0 => 7052,
      1 => 411,
      2 => 'Xã Hòa Tân Tây',
    ),
    7052 => 
    array (
      0 => 7053,
      1 => 411,
      2 => 'Xã Hòa Đồng',
    ),
    7053 => 
    array (
      0 => 7054,
      1 => 411,
      2 => 'Xã Hòa Mỹ Đông',
    ),
    7054 => 
    array (
      0 => 7055,
      1 => 411,
      2 => 'Xã Hòa Mỹ Tây',
    ),
    7055 => 
    array (
      0 => 7056,
      1 => 411,
      2 => 'Xã Hòa Thịnh',
    ),
    7056 => 
    array (
      0 => 7057,
      1 => 412,
      2 => 'Xã Hòa Quang Bắc',
    ),
    7057 => 
    array (
      0 => 7058,
      1 => 412,
      2 => 'Xã Hòa Quang Nam',
    ),
    7058 => 
    array (
      0 => 7059,
      1 => 412,
      2 => 'Xã Hòa Hội',
    ),
    7059 => 
    array (
      0 => 7060,
      1 => 412,
      2 => 'Xã Hòa Trị',
    ),
    7060 => 
    array (
      0 => 7061,
      1 => 412,
      2 => 'Xã Hòa An',
    ),
    7061 => 
    array (
      0 => 7062,
      1 => 412,
      2 => 'Xã Hòa Định Đông',
    ),
    7062 => 
    array (
      0 => 7063,
      1 => 412,
      2 => 'Thị Trấn Phú Hoà',
    ),
    7063 => 
    array (
      0 => 7064,
      1 => 412,
      2 => 'Xã Hòa Định Tây',
    ),
    7064 => 
    array (
      0 => 7065,
      1 => 412,
      2 => 'Xã Hòa Thắng',
    ),
    7065 => 
    array (
      0 => 7066,
      1 => 413,
      2 => 'Xã Hòa Thành',
    ),
    7066 => 
    array (
      0 => 7067,
      1 => 413,
      2 => 'Phường Hòa Hiệp Bắc',
    ),
    7067 => 
    array (
      0 => 7068,
      1 => 413,
      2 => 'Phường Hoà Vinh',
    ),
    7068 => 
    array (
      0 => 7069,
      1 => 413,
      2 => 'Phường Hoà Hiệp Trung',
    ),
    7069 => 
    array (
      0 => 7070,
      1 => 413,
      2 => 'Xã Hòa Tân Đông',
    ),
    7070 => 
    array (
      0 => 7071,
      1 => 413,
      2 => 'Phường Hòa Xuân Tây',
    ),
    7071 => 
    array (
      0 => 7072,
      1 => 413,
      2 => 'Phường Hòa Hiệp Nam',
    ),
    7072 => 
    array (
      0 => 7073,
      1 => 413,
      2 => 'Xã Hòa Xuân Đông',
    ),
    7073 => 
    array (
      0 => 7074,
      1 => 413,
      2 => 'Xã Hòa Tâm',
    ),
    7074 => 
    array (
      0 => 7075,
      1 => 413,
      2 => 'Xã Hòa Xuân Nam',
    ),
    7075 => 
    array (
      0 => 7076,
      1 => 414,
      2 => 'Phường Vĩnh Hòa',
    ),
    7076 => 
    array (
      0 => 7077,
      1 => 414,
      2 => 'Phường Vĩnh Hải',
    ),
    7077 => 
    array (
      0 => 7078,
      1 => 414,
      2 => 'Phường Vĩnh Phước',
    ),
    7078 => 
    array (
      0 => 7079,
      1 => 414,
      2 => 'Phường Ngọc Hiệp',
    ),
    7079 => 
    array (
      0 => 7080,
      1 => 414,
      2 => 'Phường Vĩnh Thọ',
    ),
    7080 => 
    array (
      0 => 7081,
      1 => 414,
      2 => 'Phường Xương Huân',
    ),
    7081 => 
    array (
      0 => 7082,
      1 => 414,
      2 => 'Phường Vạn Thắng',
    ),
    7082 => 
    array (
      0 => 7083,
      1 => 414,
      2 => 'Phường Vạn Thạnh',
    ),
    7083 => 
    array (
      0 => 7084,
      1 => 414,
      2 => 'Phường Phương Sài',
    ),
    7084 => 
    array (
      0 => 7085,
      1 => 414,
      2 => 'Phường Phương Sơn',
    ),
    7085 => 
    array (
      0 => 7086,
      1 => 414,
      2 => 'Phường Phước Hải',
    ),
    7086 => 
    array (
      0 => 7087,
      1 => 414,
      2 => 'Phường Phước Tân',
    ),
    7087 => 
    array (
      0 => 7088,
      1 => 414,
      2 => 'Phường Lộc Thọ',
    ),
    7088 => 
    array (
      0 => 7089,
      1 => 414,
      2 => 'Phường Phước Tiến',
    ),
    7089 => 
    array (
      0 => 7090,
      1 => 414,
      2 => 'Phường Tân Lập',
    ),
    7090 => 
    array (
      0 => 7091,
      1 => 414,
      2 => 'Phường Phước Hòa',
    ),
    7091 => 
    array (
      0 => 7092,
      1 => 414,
      2 => 'Phường Vĩnh Nguyên',
    ),
    7092 => 
    array (
      0 => 7093,
      1 => 414,
      2 => 'Phường Phước Long',
    ),
    7093 => 
    array (
      0 => 7094,
      1 => 414,
      2 => 'Phường Vĩnh Trường',
    ),
    7094 => 
    array (
      0 => 7095,
      1 => 414,
      2 => 'Xã Vĩnh Lương',
    ),
    7095 => 
    array (
      0 => 7096,
      1 => 414,
      2 => 'Xã Vĩnh Phương',
    ),
    7096 => 
    array (
      0 => 7097,
      1 => 414,
      2 => 'Xã Vĩnh Ngọc',
    ),
    7097 => 
    array (
      0 => 7098,
      1 => 414,
      2 => 'Xã Vĩnh Thạnh',
    ),
    7098 => 
    array (
      0 => 7099,
      1 => 414,
      2 => 'Xã Vĩnh Trung',
    ),
    7099 => 
    array (
      0 => 7100,
      1 => 414,
      2 => 'Xã Vĩnh Hiệp',
    ),
    7100 => 
    array (
      0 => 7101,
      1 => 414,
      2 => 'Xã Vĩnh Thái',
    ),
    7101 => 
    array (
      0 => 7102,
      1 => 414,
      2 => 'Xã Phước Đồng',
    ),
    7102 => 
    array (
      0 => 7103,
      1 => 415,
      2 => 'Phường Cam Nghĩa',
    ),
    7103 => 
    array (
      0 => 7104,
      1 => 415,
      2 => 'Phường Cam Phúc Bắc',
    ),
    7104 => 
    array (
      0 => 7105,
      1 => 415,
      2 => 'Phường Cam Phúc Nam',
    ),
    7105 => 
    array (
      0 => 7106,
      1 => 415,
      2 => 'Phường Cam Lộc',
    ),
    7106 => 
    array (
      0 => 7107,
      1 => 415,
      2 => 'Phường Cam Phú',
    ),
    7107 => 
    array (
      0 => 7108,
      1 => 415,
      2 => 'Phường Ba Ngòi',
    ),
    7108 => 
    array (
      0 => 7109,
      1 => 415,
      2 => 'Phường Cam Thuận',
    ),
    7109 => 
    array (
      0 => 7110,
      1 => 415,
      2 => 'Phường Cam Lợi',
    ),
    7110 => 
    array (
      0 => 7111,
      1 => 415,
      2 => 'Phường Cam Linh',
    ),
    7111 => 
    array (
      0 => 7112,
      1 => 415,
      2 => 'Xã Cam Thành Nam',
    ),
    7112 => 
    array (
      0 => 7113,
      1 => 415,
      2 => 'Xã Cam Phước Đông',
    ),
    7113 => 
    array (
      0 => 7114,
      1 => 415,
      2 => 'Xã Cam Thịnh Tây',
    ),
    7114 => 
    array (
      0 => 7115,
      1 => 415,
      2 => 'Xã Cam Thịnh Đông',
    ),
    7115 => 
    array (
      0 => 7116,
      1 => 415,
      2 => 'Xã Cam Lập',
    ),
    7116 => 
    array (
      0 => 7117,
      1 => 415,
      2 => 'Xã Cam Bình',
    ),
    7117 => 
    array (
      0 => 7118,
      1 => 416,
      2 => 'Xã Cam Tân',
    ),
    7118 => 
    array (
      0 => 7119,
      1 => 416,
      2 => 'Xã Cam Hòa',
    ),
    7119 => 
    array (
      0 => 7120,
      1 => 416,
      2 => 'Xã Cam Hải Đông',
    ),
    7120 => 
    array (
      0 => 7121,
      1 => 416,
      2 => 'Xã Cam Hải Tây',
    ),
    7121 => 
    array (
      0 => 7122,
      1 => 416,
      2 => 'Xã Sơn Tân',
    ),
    7122 => 
    array (
      0 => 7123,
      1 => 416,
      2 => 'Xã Cam Hiệp Bắc',
    ),
    7123 => 
    array (
      0 => 7124,
      1 => 416,
      2 => 'Thị trấn Cam Đức',
    ),
    7124 => 
    array (
      0 => 7125,
      1 => 416,
      2 => 'Xã Cam Hiệp Nam',
    ),
    7125 => 
    array (
      0 => 7126,
      1 => 416,
      2 => 'Xã Cam Phước Tây',
    ),
    7126 => 
    array (
      0 => 7127,
      1 => 416,
      2 => 'Xã Cam Thành Bắc',
    ),
    7127 => 
    array (
      0 => 7128,
      1 => 416,
      2 => 'Xã Cam An Bắc',
    ),
    7128 => 
    array (
      0 => 7129,
      1 => 416,
      2 => 'Xã Cam An Nam',
    ),
    7129 => 
    array (
      0 => 7130,
      1 => 416,
      2 => 'Xã Suối Cát',
    ),
    7130 => 
    array (
      0 => 7131,
      1 => 416,
      2 => 'Xã Suối Tân',
    ),
    7131 => 
    array (
      0 => 7132,
      1 => 417,
      2 => 'Thị trấn Vạn Giã',
    ),
    7132 => 
    array (
      0 => 7133,
      1 => 417,
      2 => 'Xã Đại Lãnh',
    ),
    7133 => 
    array (
      0 => 7134,
      1 => 417,
      2 => 'Xã Vạn Phước',
    ),
    7134 => 
    array (
      0 => 7135,
      1 => 417,
      2 => 'Xã Vạn Long',
    ),
    7135 => 
    array (
      0 => 7136,
      1 => 417,
      2 => 'Xã Vạn Bình',
    ),
    7136 => 
    array (
      0 => 7137,
      1 => 417,
      2 => 'Xã Vạn Thọ',
    ),
    7137 => 
    array (
      0 => 7138,
      1 => 417,
      2 => 'Xã Vạn Khánh',
    ),
    7138 => 
    array (
      0 => 7139,
      1 => 417,
      2 => 'Xã Vạn Phú',
    ),
    7139 => 
    array (
      0 => 7140,
      1 => 417,
      2 => 'Xã Vạn Lương',
    ),
    7140 => 
    array (
      0 => 7141,
      1 => 417,
      2 => 'Xã Vạn Thắng',
    ),
    7141 => 
    array (
      0 => 7142,
      1 => 417,
      2 => 'Xã Vạn Thạnh',
    ),
    7142 => 
    array (
      0 => 7143,
      1 => 417,
      2 => 'Xã Xuân Sơn',
    ),
    7143 => 
    array (
      0 => 7144,
      1 => 417,
      2 => 'Xã Vạn Hưng',
    ),
    7144 => 
    array (
      0 => 7145,
      1 => 418,
      2 => 'Phường Ninh Hiệp',
    ),
    7145 => 
    array (
      0 => 7146,
      1 => 418,
      2 => 'Xã Ninh Sơn',
    ),
    7146 => 
    array (
      0 => 7147,
      1 => 418,
      2 => 'Xã Ninh Tây',
    ),
    7147 => 
    array (
      0 => 7148,
      1 => 418,
      2 => 'Xã Ninh Thượng',
    ),
    7148 => 
    array (
      0 => 7149,
      1 => 418,
      2 => 'Xã Ninh An',
    ),
    7149 => 
    array (
      0 => 7150,
      1 => 418,
      2 => 'Phường Ninh Hải',
    ),
    7150 => 
    array (
      0 => 7151,
      1 => 418,
      2 => 'Xã Ninh Thọ',
    ),
    7151 => 
    array (
      0 => 7152,
      1 => 418,
      2 => 'Xã Ninh Trung',
    ),
    7152 => 
    array (
      0 => 7153,
      1 => 418,
      2 => 'Xã Ninh Sim',
    ),
    7153 => 
    array (
      0 => 7154,
      1 => 418,
      2 => 'Xã Ninh Xuân',
    ),
    7154 => 
    array (
      0 => 7155,
      1 => 418,
      2 => 'Xã Ninh Thân',
    ),
    7155 => 
    array (
      0 => 7156,
      1 => 418,
      2 => 'Phường Ninh Diêm',
    ),
    7156 => 
    array (
      0 => 7157,
      1 => 418,
      2 => 'Xã Ninh Đông',
    ),
    7157 => 
    array (
      0 => 7158,
      1 => 418,
      2 => 'Phường Ninh Thủy',
    ),
    7158 => 
    array (
      0 => 7159,
      1 => 418,
      2 => 'Phường Ninh Đa',
    ),
    7159 => 
    array (
      0 => 7160,
      1 => 418,
      2 => 'Xã Ninh Phụng',
    ),
    7160 => 
    array (
      0 => 7161,
      1 => 418,
      2 => 'Xã Ninh Bình',
    ),
    7161 => 
    array (
      0 => 7162,
      1 => 418,
      2 => 'Xã Ninh Phước',
    ),
    7162 => 
    array (
      0 => 7163,
      1 => 418,
      2 => 'Xã Ninh Phú',
    ),
    7163 => 
    array (
      0 => 7164,
      1 => 418,
      2 => 'Xã Ninh Tân',
    ),
    7164 => 
    array (
      0 => 7165,
      1 => 418,
      2 => 'Xã Ninh Quang',
    ),
    7165 => 
    array (
      0 => 7166,
      1 => 418,
      2 => 'Phường Ninh Giang',
    ),
    7166 => 
    array (
      0 => 7167,
      1 => 418,
      2 => 'Phường Ninh Hà',
    ),
    7167 => 
    array (
      0 => 7168,
      1 => 418,
      2 => 'Xã Ninh Hưng',
    ),
    7168 => 
    array (
      0 => 7169,
      1 => 418,
      2 => 'Xã Ninh Lộc',
    ),
    7169 => 
    array (
      0 => 7170,
      1 => 418,
      2 => 'Xã Ninh Ích',
    ),
    7170 => 
    array (
      0 => 7171,
      1 => 418,
      2 => 'Xã Ninh Vân',
    ),
    7171 => 
    array (
      0 => 7172,
      1 => 419,
      2 => 'Thị trấn Khánh Vĩnh',
    ),
    7172 => 
    array (
      0 => 7173,
      1 => 419,
      2 => 'Xã Khánh Hiệp',
    ),
    7173 => 
    array (
      0 => 7174,
      1 => 419,
      2 => 'Xã Khánh Bình',
    ),
    7174 => 
    array (
      0 => 7175,
      1 => 419,
      2 => 'Xã Khánh Trung',
    ),
    7175 => 
    array (
      0 => 7176,
      1 => 419,
      2 => 'Xã Khánh Đông',
    ),
    7176 => 
    array (
      0 => 7177,
      1 => 419,
      2 => 'Xã Khánh Thượng',
    ),
    7177 => 
    array (
      0 => 7178,
      1 => 419,
      2 => 'Xã Khánh Nam',
    ),
    7178 => 
    array (
      0 => 7179,
      1 => 419,
      2 => 'Xã Sông Cầu',
    ),
    7179 => 
    array (
      0 => 7180,
      1 => 419,
      2 => 'Xã Giang Ly',
    ),
    7180 => 
    array (
      0 => 7181,
      1 => 419,
      2 => 'Xã Cầu Bà',
    ),
    7181 => 
    array (
      0 => 7182,
      1 => 419,
      2 => 'Xã Liên Sang',
    ),
    7182 => 
    array (
      0 => 7183,
      1 => 419,
      2 => 'Xã Khánh Thành',
    ),
    7183 => 
    array (
      0 => 7184,
      1 => 419,
      2 => 'Xã Khánh Phú',
    ),
    7184 => 
    array (
      0 => 7185,
      1 => 419,
      2 => 'Xã Sơn Thái',
    ),
    7185 => 
    array (
      0 => 7186,
      1 => 420,
      2 => 'Thị trấn Diên Khánh',
    ),
    7186 => 
    array (
      0 => 7187,
      1 => 420,
      2 => 'Xã Diên Lâm',
    ),
    7187 => 
    array (
      0 => 7188,
      1 => 420,
      2 => 'Xã Diên Điền',
    ),
    7188 => 
    array (
      0 => 7189,
      1 => 420,
      2 => 'Xã Diên Xuân',
    ),
    7189 => 
    array (
      0 => 7190,
      1 => 420,
      2 => 'Xã Diên Sơn',
    ),
    7190 => 
    array (
      0 => 7191,
      1 => 420,
      2 => 'Xã Diên Đồng',
    ),
    7191 => 
    array (
      0 => 7192,
      1 => 420,
      2 => 'Xã Diên Phú',
    ),
    7192 => 
    array (
      0 => 7193,
      1 => 420,
      2 => 'Xã Diên Thọ',
    ),
    7193 => 
    array (
      0 => 7194,
      1 => 420,
      2 => 'Xã Diên Phước',
    ),
    7194 => 
    array (
      0 => 7195,
      1 => 420,
      2 => 'Xã Diên Lạc',
    ),
    7195 => 
    array (
      0 => 7196,
      1 => 420,
      2 => 'Xã Diên Tân',
    ),
    7196 => 
    array (
      0 => 7197,
      1 => 420,
      2 => 'Xã Diên Hòa',
    ),
    7197 => 
    array (
      0 => 7198,
      1 => 420,
      2 => 'Xã Diên Thạnh',
    ),
    7198 => 
    array (
      0 => 7199,
      1 => 420,
      2 => 'Xã Diên Toàn',
    ),
    7199 => 
    array (
      0 => 7200,
      1 => 420,
      2 => 'Xã Diên An',
    ),
    7200 => 
    array (
      0 => 7201,
      1 => 420,
      2 => 'Xã Bình Lộc',
    ),
    7201 => 
    array (
      0 => 7202,
      1 => 420,
      2 => 'Xã Suối Hiệp',
    ),
    7202 => 
    array (
      0 => 7203,
      1 => 420,
      2 => 'Xã Suối Tiên',
    ),
    7203 => 
    array (
      0 => 7204,
      1 => 421,
      2 => 'Thị trấn Tô Hạp',
    ),
    7204 => 
    array (
      0 => 7205,
      1 => 421,
      2 => 'Xã Thành Sơn',
    ),
    7205 => 
    array (
      0 => 7206,
      1 => 421,
      2 => 'Xã Sơn Lâm',
    ),
    7206 => 
    array (
      0 => 7207,
      1 => 421,
      2 => 'Xã Sơn Hiệp',
    ),
    7207 => 
    array (
      0 => 7208,
      1 => 421,
      2 => 'Xã Sơn Bình',
    ),
    7208 => 
    array (
      0 => 7209,
      1 => 421,
      2 => 'Xã Sơn Trung',
    ),
    7209 => 
    array (
      0 => 7210,
      1 => 421,
      2 => 'Xã Ba Cụm Bắc',
    ),
    7210 => 
    array (
      0 => 7211,
      1 => 421,
      2 => 'Xã Ba Cụm Nam',
    ),
    7211 => 
    array (
      0 => 7212,
      1 => 422,
      2 => 'Thị trấn Trường Sa',
    ),
    7212 => 
    array (
      0 => 7213,
      1 => 422,
      2 => 'Xã Song Tử Tây',
    ),
    7213 => 
    array (
      0 => 7214,
      1 => 422,
      2 => 'Xã Sinh Tồn',
    ),
    7214 => 
    array (
      0 => 7215,
      1 => 423,
      2 => 'Phường Đô Vinh',
    ),
    7215 => 
    array (
      0 => 7216,
      1 => 423,
      2 => 'Phường Phước Mỹ',
    ),
    7216 => 
    array (
      0 => 7217,
      1 => 423,
      2 => 'Phường Bảo An',
    ),
    7217 => 
    array (
      0 => 7218,
      1 => 423,
      2 => 'Phường Phủ Hà',
    ),
    7218 => 
    array (
      0 => 7219,
      1 => 423,
      2 => 'Phường Thanh Sơn',
    ),
    7219 => 
    array (
      0 => 7220,
      1 => 423,
      2 => 'Phường Mỹ Hương',
    ),
    7220 => 
    array (
      0 => 7221,
      1 => 423,
      2 => 'Phường Tấn Tài',
    ),
    7221 => 
    array (
      0 => 7222,
      1 => 423,
      2 => 'Phường Kinh Dinh',
    ),
    7222 => 
    array (
      0 => 7223,
      1 => 423,
      2 => 'Phường Đạo Long',
    ),
    7223 => 
    array (
      0 => 7224,
      1 => 423,
      2 => 'Phường Đài Sơn',
    ),
    7224 => 
    array (
      0 => 7225,
      1 => 423,
      2 => 'Phường Đông Hải',
    ),
    7225 => 
    array (
      0 => 7226,
      1 => 423,
      2 => 'Phường Mỹ Đông',
    ),
    7226 => 
    array (
      0 => 7227,
      1 => 423,
      2 => 'Xã Thành Hải',
    ),
    7227 => 
    array (
      0 => 7228,
      1 => 423,
      2 => 'Phường Văn Hải',
    ),
    7228 => 
    array (
      0 => 7229,
      1 => 423,
      2 => 'Phường Mỹ Bình',
    ),
    7229 => 
    array (
      0 => 7230,
      1 => 423,
      2 => 'Phường Mỹ Hải',
    ),
    7230 => 
    array (
      0 => 7231,
      1 => 424,
      2 => 'Xã Phước Bình',
    ),
    7231 => 
    array (
      0 => 7232,
      1 => 424,
      2 => 'Xã Phước Hòa',
    ),
    7232 => 
    array (
      0 => 7233,
      1 => 424,
      2 => 'Xã Phước Tân',
    ),
    7233 => 
    array (
      0 => 7234,
      1 => 424,
      2 => 'Xã Phước Tiến',
    ),
    7234 => 
    array (
      0 => 7235,
      1 => 424,
      2 => 'Xã Phước Thắng',
    ),
    7235 => 
    array (
      0 => 7236,
      1 => 424,
      2 => 'Xã Phước Thành',
    ),
    7236 => 
    array (
      0 => 7237,
      1 => 424,
      2 => 'Xã Phước Đại',
    ),
    7237 => 
    array (
      0 => 7238,
      1 => 424,
      2 => 'Xã Phước Chính',
    ),
    7238 => 
    array (
      0 => 7239,
      1 => 424,
      2 => 'Xã Phước Trung',
    ),
    7239 => 
    array (
      0 => 7240,
      1 => 425,
      2 => 'Thị trấn Tân Sơn',
    ),
    7240 => 
    array (
      0 => 7241,
      1 => 425,
      2 => 'Xã Lâm Sơn',
    ),
    7241 => 
    array (
      0 => 7242,
      1 => 425,
      2 => 'Xã Lương Sơn',
    ),
    7242 => 
    array (
      0 => 7243,
      1 => 425,
      2 => 'Xã Quảng Sơn',
    ),
    7243 => 
    array (
      0 => 7244,
      1 => 425,
      2 => 'Xã Mỹ Sơn',
    ),
    7244 => 
    array (
      0 => 7245,
      1 => 425,
      2 => 'Xã Hòa Sơn',
    ),
    7245 => 
    array (
      0 => 7246,
      1 => 425,
      2 => 'Xã Ma Nới',
    ),
    7246 => 
    array (
      0 => 7247,
      1 => 425,
      2 => 'Xã Nhơn Sơn',
    ),
    7247 => 
    array (
      0 => 7248,
      1 => 426,
      2 => 'Thị trấn Khánh Hải',
    ),
    7248 => 
    array (
      0 => 7249,
      1 => 426,
      2 => 'Xã Vĩnh Hải',
    ),
    7249 => 
    array (
      0 => 7250,
      1 => 426,
      2 => 'Xã Phương Hải',
    ),
    7250 => 
    array (
      0 => 7251,
      1 => 426,
      2 => 'Xã Tân Hải',
    ),
    7251 => 
    array (
      0 => 7252,
      1 => 426,
      2 => 'Xã Xuân Hải',
    ),
    7252 => 
    array (
      0 => 7253,
      1 => 426,
      2 => 'Xã Hộ Hải',
    ),
    7253 => 
    array (
      0 => 7254,
      1 => 426,
      2 => 'Xã Tri Hải',
    ),
    7254 => 
    array (
      0 => 7255,
      1 => 426,
      2 => 'Xã Nhơn Hải',
    ),
    7255 => 
    array (
      0 => 7256,
      1 => 426,
      2 => 'Xã Thanh Hải',
    ),
    7256 => 
    array (
      0 => 7257,
      1 => 427,
      2 => 'Thị trấn Phước Dân',
    ),
    7257 => 
    array (
      0 => 7258,
      1 => 427,
      2 => 'Xã Phước Sơn',
    ),
    7258 => 
    array (
      0 => 7259,
      1 => 427,
      2 => 'Xã Phước Thái',
    ),
    7259 => 
    array (
      0 => 7260,
      1 => 427,
      2 => 'Xã Phước Hậu',
    ),
    7260 => 
    array (
      0 => 7261,
      1 => 427,
      2 => 'Xã Phước Thuận',
    ),
    7261 => 
    array (
      0 => 7262,
      1 => 427,
      2 => 'Xã An Hải',
    ),
    7262 => 
    array (
      0 => 7263,
      1 => 427,
      2 => 'Xã Phước Hữu',
    ),
    7263 => 
    array (
      0 => 7264,
      1 => 427,
      2 => 'Xã Phước Hải',
    ),
    7264 => 
    array (
      0 => 7265,
      1 => 427,
      2 => 'Xã Phước Vinh',
    ),
    7265 => 
    array (
      0 => 7266,
      1 => 428,
      2 => 'Xã Phước Chiến',
    ),
    7266 => 
    array (
      0 => 7267,
      1 => 428,
      2 => 'Xã Công Hải',
    ),
    7267 => 
    array (
      0 => 7268,
      1 => 428,
      2 => 'Xã Phước Kháng',
    ),
    7268 => 
    array (
      0 => 7269,
      1 => 428,
      2 => 'Xã Lợi Hải',
    ),
    7269 => 
    array (
      0 => 7270,
      1 => 428,
      2 => 'Xã Bắc Sơn',
    ),
    7270 => 
    array (
      0 => 7271,
      1 => 428,
      2 => 'Xã Bắc Phong',
    ),
    7271 => 
    array (
      0 => 7272,
      1 => 429,
      2 => 'Xã Phước Hà',
    ),
    7272 => 
    array (
      0 => 7273,
      1 => 429,
      2 => 'Xã Phước Nam',
    ),
    7273 => 
    array (
      0 => 7274,
      1 => 429,
      2 => 'Xã Phước Ninh',
    ),
    7274 => 
    array (
      0 => 7275,
      1 => 429,
      2 => 'Xã Nhị Hà',
    ),
    7275 => 
    array (
      0 => 7276,
      1 => 429,
      2 => 'Xã Phước Dinh',
    ),
    7276 => 
    array (
      0 => 7277,
      1 => 429,
      2 => 'Xã Phước Minh',
    ),
    7277 => 
    array (
      0 => 7278,
      1 => 429,
      2 => 'Xã Phước Diêm',
    ),
    7278 => 
    array (
      0 => 7279,
      1 => 429,
      2 => 'Xã Cà Ná',
    ),
    7279 => 
    array (
      0 => 7280,
      1 => 430,
      2 => 'Phường Mũi Né',
    ),
    7280 => 
    array (
      0 => 7281,
      1 => 430,
      2 => 'Phường Hàm Tiến',
    ),
    7281 => 
    array (
      0 => 7282,
      1 => 430,
      2 => 'Phường Phú Hài',
    ),
    7282 => 
    array (
      0 => 7283,
      1 => 430,
      2 => 'Phường Phú Thủy',
    ),
    7283 => 
    array (
      0 => 7284,
      1 => 430,
      2 => 'Phường Phú Tài',
    ),
    7284 => 
    array (
      0 => 7285,
      1 => 430,
      2 => 'Phường Phú Trinh',
    ),
    7285 => 
    array (
      0 => 7286,
      1 => 430,
      2 => 'Phường Xuân An',
    ),
    7286 => 
    array (
      0 => 7287,
      1 => 430,
      2 => 'Phường Thanh Hải',
    ),
    7287 => 
    array (
      0 => 7288,
      1 => 430,
      2 => 'Phường Bình Hưng',
    ),
    7288 => 
    array (
      0 => 7289,
      1 => 430,
      2 => 'Phường Đức Nghĩa',
    ),
    7289 => 
    array (
      0 => 7290,
      1 => 430,
      2 => 'Phường Lạc Đạo',
    ),
    7290 => 
    array (
      0 => 7291,
      1 => 430,
      2 => 'Phường Đức Thắng',
    ),
    7291 => 
    array (
      0 => 7292,
      1 => 430,
      2 => 'Phường Hưng Long',
    ),
    7292 => 
    array (
      0 => 7293,
      1 => 430,
      2 => 'Phường Đức Long',
    ),
    7293 => 
    array (
      0 => 7294,
      1 => 430,
      2 => 'Xã Thiện Nghiệp',
    ),
    7294 => 
    array (
      0 => 7295,
      1 => 430,
      2 => 'Xã Phong Nẫm',
    ),
    7295 => 
    array (
      0 => 7296,
      1 => 430,
      2 => 'Xã Tiến Lợi',
    ),
    7296 => 
    array (
      0 => 7297,
      1 => 430,
      2 => 'Xã Tiến Thành',
    ),
    7297 => 
    array (
      0 => 7298,
      1 => 431,
      2 => 'Phường Phước Hội',
    ),
    7298 => 
    array (
      0 => 7299,
      1 => 431,
      2 => 'Phường Phước Lộc',
    ),
    7299 => 
    array (
      0 => 7300,
      1 => 431,
      2 => 'Phường Tân Thiện',
    ),
    7300 => 
    array (
      0 => 7301,
      1 => 431,
      2 => 'Phường Tân An',
    ),
    7301 => 
    array (
      0 => 7302,
      1 => 431,
      2 => 'Phường Bình Tân',
    ),
    7302 => 
    array (
      0 => 7303,
      1 => 431,
      2 => 'Xã Tân Hải',
    ),
    7303 => 
    array (
      0 => 7304,
      1 => 431,
      2 => 'Xã Tân Tiến',
    ),
    7304 => 
    array (
      0 => 7305,
      1 => 431,
      2 => 'Xã Tân Bình',
    ),
    7305 => 
    array (
      0 => 7306,
      1 => 431,
      2 => 'Xã Tân Phước',
    ),
    7306 => 
    array (
      0 => 7307,
      1 => 432,
      2 => 'Thị trấn Liên Hương',
    ),
    7307 => 
    array (
      0 => 7308,
      1 => 432,
      2 => 'Thị trấn Phan Rí Cửa',
    ),
    7308 => 
    array (
      0 => 7309,
      1 => 432,
      2 => 'Xã Phan Dũng',
    ),
    7309 => 
    array (
      0 => 7310,
      1 => 432,
      2 => 'Xã Phong Phú',
    ),
    7310 => 
    array (
      0 => 7311,
      1 => 432,
      2 => 'Xã Vĩnh Hảo',
    ),
    7311 => 
    array (
      0 => 7312,
      1 => 432,
      2 => 'Xã Vĩnh Tân',
    ),
    7312 => 
    array (
      0 => 7313,
      1 => 432,
      2 => 'Xã Phú Lạc',
    ),
    7313 => 
    array (
      0 => 7314,
      1 => 432,
      2 => 'Xã Phước Thể',
    ),
    7314 => 
    array (
      0 => 7315,
      1 => 432,
      2 => 'Xã Hòa Minh',
    ),
    7315 => 
    array (
      0 => 7316,
      1 => 432,
      2 => 'Xã Chí Công',
    ),
    7316 => 
    array (
      0 => 7317,
      1 => 432,
      2 => 'Xã Bình Thạnh',
    ),
    7317 => 
    array (
      0 => 7318,
      1 => 433,
      2 => 'Thị trấn Chợ Lầu',
    ),
    7318 => 
    array (
      0 => 7319,
      1 => 433,
      2 => 'Xã Phan Sơn',
    ),
    7319 => 
    array (
      0 => 7320,
      1 => 433,
      2 => 'Xã Phan Lâm',
    ),
    7320 => 
    array (
      0 => 7321,
      1 => 433,
      2 => 'Xã Bình An',
    ),
    7321 => 
    array (
      0 => 7322,
      1 => 433,
      2 => 'Xã Phan Điền',
    ),
    7322 => 
    array (
      0 => 7323,
      1 => 433,
      2 => 'Xã Hải Ninh',
    ),
    7323 => 
    array (
      0 => 7324,
      1 => 433,
      2 => 'Xã Sông Lũy',
    ),
    7324 => 
    array (
      0 => 7325,
      1 => 433,
      2 => 'Xã Phan Tiến',
    ),
    7325 => 
    array (
      0 => 7326,
      1 => 433,
      2 => 'Xã Sông Bình',
    ),
    7326 => 
    array (
      0 => 7327,
      1 => 433,
      2 => 'Thị trấn Lương Sơn',
    ),
    7327 => 
    array (
      0 => 7328,
      1 => 433,
      2 => 'Xã Phan Hòa',
    ),
    7328 => 
    array (
      0 => 7329,
      1 => 433,
      2 => 'Xã Phan Thanh',
    ),
    7329 => 
    array (
      0 => 7330,
      1 => 433,
      2 => 'Xã Hồng Thái',
    ),
    7330 => 
    array (
      0 => 7331,
      1 => 433,
      2 => 'Xã Phan Hiệp',
    ),
    7331 => 
    array (
      0 => 7332,
      1 => 433,
      2 => 'Xã Bình Tân',
    ),
    7332 => 
    array (
      0 => 7333,
      1 => 433,
      2 => 'Xã Phan Rí Thành',
    ),
    7333 => 
    array (
      0 => 7334,
      1 => 433,
      2 => 'Xã Hòa Thắng',
    ),
    7334 => 
    array (
      0 => 7335,
      1 => 433,
      2 => 'Xã Hồng Phong',
    ),
    7335 => 
    array (
      0 => 7336,
      1 => 434,
      2 => 'Thị trấn Ma Lâm',
    ),
    7336 => 
    array (
      0 => 7337,
      1 => 434,
      2 => 'Thị trấn Phú Long',
    ),
    7337 => 
    array (
      0 => 7338,
      1 => 434,
      2 => 'Xã La Dạ',
    ),
    7338 => 
    array (
      0 => 7339,
      1 => 434,
      2 => 'Xã Đông Tiến',
    ),
    7339 => 
    array (
      0 => 7340,
      1 => 434,
      2 => 'Xã Thuận Hòa',
    ),
    7340 => 
    array (
      0 => 7341,
      1 => 434,
      2 => 'Xã Đông Giang',
    ),
    7341 => 
    array (
      0 => 7342,
      1 => 434,
      2 => 'Xã Hàm Phú',
    ),
    7342 => 
    array (
      0 => 7343,
      1 => 434,
      2 => 'Xã Hồng Liêm',
    ),
    7343 => 
    array (
      0 => 7344,
      1 => 434,
      2 => 'Xã Thuận Minh',
    ),
    7344 => 
    array (
      0 => 7345,
      1 => 434,
      2 => 'Xã Hồng Sơn',
    ),
    7345 => 
    array (
      0 => 7346,
      1 => 434,
      2 => 'Xã Hàm Trí',
    ),
    7346 => 
    array (
      0 => 7347,
      1 => 434,
      2 => 'Xã Hàm Đức',
    ),
    7347 => 
    array (
      0 => 7348,
      1 => 434,
      2 => 'Xã Hàm Liêm',
    ),
    7348 => 
    array (
      0 => 7349,
      1 => 434,
      2 => 'Xã Hàm Chính',
    ),
    7349 => 
    array (
      0 => 7350,
      1 => 434,
      2 => 'Xã Hàm Hiệp',
    ),
    7350 => 
    array (
      0 => 7351,
      1 => 434,
      2 => 'Xã Hàm Thắng',
    ),
    7351 => 
    array (
      0 => 7352,
      1 => 434,
      2 => 'Xã Đa Mi',
    ),
    7352 => 
    array (
      0 => 7353,
      1 => 435,
      2 => 'Thị trấn Thuận Nam',
    ),
    7353 => 
    array (
      0 => 7354,
      1 => 435,
      2 => 'Xã Mỹ Thạnh',
    ),
    7354 => 
    array (
      0 => 7355,
      1 => 435,
      2 => 'Xã Hàm Cần',
    ),
    7355 => 
    array (
      0 => 7356,
      1 => 435,
      2 => 'Xã Mương Mán',
    ),
    7356 => 
    array (
      0 => 7357,
      1 => 435,
      2 => 'Xã Hàm Thạnh',
    ),
    7357 => 
    array (
      0 => 7358,
      1 => 435,
      2 => 'Xã Hàm Kiệm',
    ),
    7358 => 
    array (
      0 => 7359,
      1 => 435,
      2 => 'Xã Hàm Cường',
    ),
    7359 => 
    array (
      0 => 7360,
      1 => 435,
      2 => 'Xã Hàm Mỹ',
    ),
    7360 => 
    array (
      0 => 7361,
      1 => 435,
      2 => 'Xã Tân Lập',
    ),
    7361 => 
    array (
      0 => 7362,
      1 => 435,
      2 => 'Xã Hàm Minh',
    ),
    7362 => 
    array (
      0 => 7363,
      1 => 435,
      2 => 'Xã Thuận Quí',
    ),
    7363 => 
    array (
      0 => 7364,
      1 => 435,
      2 => 'Xã Tân Thuận',
    ),
    7364 => 
    array (
      0 => 7365,
      1 => 435,
      2 => 'Xã Tân Thành',
    ),
    7365 => 
    array (
      0 => 7366,
      1 => 436,
      2 => 'Thị trấn Lạc Tánh',
    ),
    7366 => 
    array (
      0 => 7367,
      1 => 436,
      2 => 'Xã Bắc Ruộng',
    ),
    7367 => 
    array (
      0 => 7368,
      1 => 436,
      2 => 'Xã Nghị Đức',
    ),
    7368 => 
    array (
      0 => 7369,
      1 => 436,
      2 => 'Xã La Ngâu',
    ),
    7369 => 
    array (
      0 => 7370,
      1 => 436,
      2 => 'Xã Huy Khiêm',
    ),
    7370 => 
    array (
      0 => 7371,
      1 => 436,
      2 => 'Xã Măng Tố',
    ),
    7371 => 
    array (
      0 => 7372,
      1 => 436,
      2 => 'Xã Đức Phú',
    ),
    7372 => 
    array (
      0 => 7373,
      1 => 436,
      2 => 'Xã Đồng Kho',
    ),
    7373 => 
    array (
      0 => 7374,
      1 => 436,
      2 => 'Xã Gia An',
    ),
    7374 => 
    array (
      0 => 7375,
      1 => 436,
      2 => 'Xã Đức Bình',
    ),
    7375 => 
    array (
      0 => 7376,
      1 => 436,
      2 => 'Xã Gia Huynh',
    ),
    7376 => 
    array (
      0 => 7377,
      1 => 436,
      2 => 'Xã Đức Thuận',
    ),
    7377 => 
    array (
      0 => 7378,
      1 => 436,
      2 => 'Xã Suối Kiết',
    ),
    7378 => 
    array (
      0 => 7379,
      1 => 437,
      2 => 'Thị trấn Võ Xu',
    ),
    7379 => 
    array (
      0 => 7380,
      1 => 437,
      2 => 'Thị trấn Đức Tài',
    ),
    7380 => 
    array (
      0 => 7381,
      1 => 437,
      2 => 'Xã Đa Kai',
    ),
    7381 => 
    array (
      0 => 7382,
      1 => 437,
      2 => 'Xã Sùng Nhơn',
    ),
    7382 => 
    array (
      0 => 7383,
      1 => 437,
      2 => 'Xã Mê Pu',
    ),
    7383 => 
    array (
      0 => 7384,
      1 => 437,
      2 => 'Xã Nam Chính',
    ),
    7384 => 
    array (
      0 => 7385,
      1 => 437,
      2 => 'Xã Đức Hạnh',
    ),
    7385 => 
    array (
      0 => 7386,
      1 => 437,
      2 => 'Xã Đức Tín',
    ),
    7386 => 
    array (
      0 => 7387,
      1 => 437,
      2 => 'Xã Vũ Hoà',
    ),
    7387 => 
    array (
      0 => 7388,
      1 => 437,
      2 => 'Xã Tân Hà',
    ),
    7388 => 
    array (
      0 => 7389,
      1 => 437,
      2 => 'Xã Đông Hà',
    ),
    7389 => 
    array (
      0 => 7390,
      1 => 437,
      2 => 'Xã Trà Tân',
    ),
    7390 => 
    array (
      0 => 7391,
      1 => 438,
      2 => 'Thị trấn Tân Minh',
    ),
    7391 => 
    array (
      0 => 7392,
      1 => 438,
      2 => 'Thị trấn Tân Nghĩa',
    ),
    7392 => 
    array (
      0 => 7393,
      1 => 438,
      2 => 'Xã Sông Phan',
    ),
    7393 => 
    array (
      0 => 7394,
      1 => 438,
      2 => 'Xã Tân Phúc',
    ),
    7394 => 
    array (
      0 => 7395,
      1 => 438,
      2 => 'Xã Tân Đức',
    ),
    7395 => 
    array (
      0 => 7396,
      1 => 438,
      2 => 'Xã Tân Thắng',
    ),
    7396 => 
    array (
      0 => 7397,
      1 => 438,
      2 => 'Xã Thắng Hải',
    ),
    7397 => 
    array (
      0 => 7398,
      1 => 438,
      2 => 'Xã Tân Hà',
    ),
    7398 => 
    array (
      0 => 7399,
      1 => 438,
      2 => 'Xã Tân Xuân',
    ),
    7399 => 
    array (
      0 => 7400,
      1 => 438,
      2 => 'Xã Sơn Mỹ',
    ),
    7400 => 
    array (
      0 => 7401,
      1 => 439,
      2 => 'Xã Ngũ Phụng',
    ),
    7401 => 
    array (
      0 => 7402,
      1 => 439,
      2 => 'Xã Long Hải',
    ),
    7402 => 
    array (
      0 => 7403,
      1 => 439,
      2 => 'Xã Tam Thanh',
    ),
    7403 => 
    array (
      0 => 7404,
      1 => 440,
      2 => 'Phường Quang Trung',
    ),
    7404 => 
    array (
      0 => 7405,
      1 => 440,
      2 => 'Phường Duy Tân',
    ),
    7405 => 
    array (
      0 => 7406,
      1 => 440,
      2 => 'Phường Quyết Thắng',
    ),
    7406 => 
    array (
      0 => 7407,
      1 => 440,
      2 => 'Phường Trường Chinh',
    ),
    7407 => 
    array (
      0 => 7408,
      1 => 440,
      2 => 'Phường Thắng Lợi',
    ),
    7408 => 
    array (
      0 => 7409,
      1 => 440,
      2 => 'Phường Ngô Mây',
    ),
    7409 => 
    array (
      0 => 7410,
      1 => 440,
      2 => 'Phường Thống Nhất',
    ),
    7410 => 
    array (
      0 => 7411,
      1 => 440,
      2 => 'Phường Lê Lợi',
    ),
    7411 => 
    array (
      0 => 7412,
      1 => 440,
      2 => 'Phường Nguyễn Trãi',
    ),
    7412 => 
    array (
      0 => 7413,
      1 => 440,
      2 => 'Phường Trần Hưng Đạo',
    ),
    7413 => 
    array (
      0 => 7414,
      1 => 440,
      2 => 'Xã Đắk Cấm',
    ),
    7414 => 
    array (
      0 => 7415,
      1 => 440,
      2 => 'Xã Kroong',
    ),
    7415 => 
    array (
      0 => 7416,
      1 => 440,
      2 => 'Xã Ngọk Bay',
    ),
    7416 => 
    array (
      0 => 7417,
      1 => 440,
      2 => 'Xã Vinh Quang',
    ),
    7417 => 
    array (
      0 => 7418,
      1 => 440,
      2 => 'Xã Đắk Blà',
    ),
    7418 => 
    array (
      0 => 7419,
      1 => 440,
      2 => 'Xã Ia Chim',
    ),
    7419 => 
    array (
      0 => 7420,
      1 => 440,
      2 => 'Xã Đăk Năng',
    ),
    7420 => 
    array (
      0 => 7421,
      1 => 440,
      2 => 'Xã Đoàn Kết',
    ),
    7421 => 
    array (
      0 => 7422,
      1 => 440,
      2 => 'Xã Chư Hreng',
    ),
    7422 => 
    array (
      0 => 7423,
      1 => 440,
      2 => 'Xã Đắk Rơ Wa',
    ),
    7423 => 
    array (
      0 => 7424,
      1 => 440,
      2 => 'Xã Hòa Bình',
    ),
    7424 => 
    array (
      0 => 7425,
      1 => 441,
      2 => 'Thị trấn Đắk Glei',
    ),
    7425 => 
    array (
      0 => 7426,
      1 => 441,
      2 => 'Xã Đắk Blô',
    ),
    7426 => 
    array (
      0 => 7427,
      1 => 441,
      2 => 'Xã Đắk Man',
    ),
    7427 => 
    array (
      0 => 7428,
      1 => 441,
      2 => 'Xã Đắk Nhoong',
    ),
    7428 => 
    array (
      0 => 7429,
      1 => 441,
      2 => 'Xã Đắk Pék',
    ),
    7429 => 
    array (
      0 => 7430,
      1 => 441,
      2 => 'Xã Đắk Choong',
    ),
    7430 => 
    array (
      0 => 7431,
      1 => 441,
      2 => 'Xã Xốp',
    ),
    7431 => 
    array (
      0 => 7432,
      1 => 441,
      2 => 'Xã Mường Hoong',
    ),
    7432 => 
    array (
      0 => 7433,
      1 => 441,
      2 => 'Xã Ngọc Linh',
    ),
    7433 => 
    array (
      0 => 7434,
      1 => 441,
      2 => 'Xã Đắk Long',
    ),
    7434 => 
    array (
      0 => 7435,
      1 => 441,
      2 => 'Xã Đắk KRoong',
    ),
    7435 => 
    array (
      0 => 7436,
      1 => 441,
      2 => 'Xã Đắk Môn',
    ),
    7436 => 
    array (
      0 => 7437,
      1 => 442,
      2 => 'Thị trấn Plei Kần',
    ),
    7437 => 
    array (
      0 => 7438,
      1 => 442,
      2 => 'Xã Đắk Ang',
    ),
    7438 => 
    array (
      0 => 7439,
      1 => 442,
      2 => 'Xã Đắk Dục',
    ),
    7439 => 
    array (
      0 => 7440,
      1 => 442,
      2 => 'Xã Đắk Nông',
    ),
    7440 => 
    array (
      0 => 7441,
      1 => 442,
      2 => 'Xã Đắk Xú',
    ),
    7441 => 
    array (
      0 => 7442,
      1 => 442,
      2 => 'Xã Đắk Kan',
    ),
    7442 => 
    array (
      0 => 7443,
      1 => 442,
      2 => 'Xã Bờ Y',
    ),
    7443 => 
    array (
      0 => 7444,
      1 => 442,
      2 => 'Xã Sa Loong',
    ),
    7444 => 
    array (
      0 => 7445,
      1 => 443,
      2 => 'Thị trấn Đắk Tô',
    ),
    7445 => 
    array (
      0 => 7446,
      1 => 443,
      2 => 'Xã Đắk Rơ Nga',
    ),
    7446 => 
    array (
      0 => 7447,
      1 => 443,
      2 => 'Xã Ngọk Tụ',
    ),
    7447 => 
    array (
      0 => 7448,
      1 => 443,
      2 => 'Xã Đắk Trăm',
    ),
    7448 => 
    array (
      0 => 7449,
      1 => 443,
      2 => 'Xã Văn Lem',
    ),
    7449 => 
    array (
      0 => 7450,
      1 => 443,
      2 => 'Xã Kon Đào',
    ),
    7450 => 
    array (
      0 => 7451,
      1 => 443,
      2 => 'Xã Tân Cảnh',
    ),
    7451 => 
    array (
      0 => 7452,
      1 => 443,
      2 => 'Xã Diên Bình',
    ),
    7452 => 
    array (
      0 => 7453,
      1 => 443,
      2 => 'Xã Pô Kô',
    ),
    7453 => 
    array (
      0 => 7454,
      1 => 444,
      2 => 'Xã Đắk Nên',
    ),
    7454 => 
    array (
      0 => 7455,
      1 => 444,
      2 => 'Xã Đắk Ring',
    ),
    7455 => 
    array (
      0 => 7456,
      1 => 444,
      2 => 'Xã Măng Buk',
    ),
    7456 => 
    array (
      0 => 7457,
      1 => 444,
      2 => 'Xã Đắk Tăng',
    ),
    7457 => 
    array (
      0 => 7458,
      1 => 444,
      2 => 'Xã Ngok Tem',
    ),
    7458 => 
    array (
      0 => 7459,
      1 => 444,
      2 => 'Xã Pờ Ê',
    ),
    7459 => 
    array (
      0 => 7460,
      1 => 444,
      2 => 'Xã Măng Cành',
    ),
    7460 => 
    array (
      0 => 7461,
      1 => 444,
      2 => 'Thị trấn Măng Đen',
    ),
    7461 => 
    array (
      0 => 7462,
      1 => 444,
      2 => 'Xã Hiếu',
    ),
    7462 => 
    array (
      0 => 7463,
      1 => 445,
      2 => 'Thị trấn Đắk Rve',
    ),
    7463 => 
    array (
      0 => 7464,
      1 => 445,
      2 => 'Xã Đắk Kôi',
    ),
    7464 => 
    array (
      0 => 7465,
      1 => 445,
      2 => 'Xã Đắk Tơ Lung',
    ),
    7465 => 
    array (
      0 => 7466,
      1 => 445,
      2 => 'Xã Đắk Ruồng',
    ),
    7466 => 
    array (
      0 => 7467,
      1 => 445,
      2 => 'Xã Đắk Pne',
    ),
    7467 => 
    array (
      0 => 7468,
      1 => 445,
      2 => 'Xã Đắk Tờ Re',
    ),
    7468 => 
    array (
      0 => 7469,
      1 => 445,
      2 => 'Xã Tân Lập',
    ),
    7469 => 
    array (
      0 => 7470,
      1 => 446,
      2 => 'Thị trấn Đắk Hà',
    ),
    7470 => 
    array (
      0 => 7471,
      1 => 446,
      2 => 'Xã Đắk PXi',
    ),
    7471 => 
    array (
      0 => 7472,
      1 => 446,
      2 => 'Xã Đăk Long',
    ),
    7472 => 
    array (
      0 => 7473,
      1 => 446,
      2 => 'Xã Đắk HRing',
    ),
    7473 => 
    array (
      0 => 7474,
      1 => 446,
      2 => 'Xã Đắk Ui',
    ),
    7474 => 
    array (
      0 => 7475,
      1 => 446,
      2 => 'Xã Đăk Ngọk',
    ),
    7475 => 
    array (
      0 => 7476,
      1 => 446,
      2 => 'Xã Đắk Mar',
    ),
    7476 => 
    array (
      0 => 7477,
      1 => 446,
      2 => 'Xã Ngok Wang',
    ),
    7477 => 
    array (
      0 => 7478,
      1 => 446,
      2 => 'Xã Ngok Réo',
    ),
    7478 => 
    array (
      0 => 7479,
      1 => 446,
      2 => 'Xã Hà Mòn',
    ),
    7479 => 
    array (
      0 => 7480,
      1 => 446,
      2 => 'Xã Đắk La',
    ),
    7480 => 
    array (
      0 => 7481,
      1 => 447,
      2 => 'Thị trấn Sa Thầy',
    ),
    7481 => 
    array (
      0 => 7482,
      1 => 447,
      2 => 'Xã Rơ Kơi',
    ),
    7482 => 
    array (
      0 => 7483,
      1 => 447,
      2 => 'Xã Sa Nhơn',
    ),
    7483 => 
    array (
      0 => 7484,
      1 => 447,
      2 => 'Xã Hơ Moong',
    ),
    7484 => 
    array (
      0 => 7485,
      1 => 447,
      2 => 'Xã Mô Rai',
    ),
    7485 => 
    array (
      0 => 7486,
      1 => 447,
      2 => 'Xã Sa Sơn',
    ),
    7486 => 
    array (
      0 => 7487,
      1 => 447,
      2 => 'Xã Sa Nghĩa',
    ),
    7487 => 
    array (
      0 => 7488,
      1 => 447,
      2 => 'Xã Sa Bình',
    ),
    7488 => 
    array (
      0 => 7489,
      1 => 447,
      2 => 'Xã Ya Xiêr',
    ),
    7489 => 
    array (
      0 => 7490,
      1 => 447,
      2 => 'Xã Ya Tăng',
    ),
    7490 => 
    array (
      0 => 7491,
      1 => 447,
      2 => 'Xã Ya ly',
    ),
    7491 => 
    array (
      0 => 7492,
      1 => 448,
      2 => 'Xã Ngọc Lây',
    ),
    7492 => 
    array (
      0 => 7493,
      1 => 448,
      2 => 'Xã Đắk Na',
    ),
    7493 => 
    array (
      0 => 7494,
      1 => 448,
      2 => 'Xã Măng Ri',
    ),
    7494 => 
    array (
      0 => 7495,
      1 => 448,
      2 => 'Xã Ngọc Yêu',
    ),
    7495 => 
    array (
      0 => 7496,
      1 => 448,
      2 => 'Xã Đắk Sao',
    ),
    7496 => 
    array (
      0 => 7497,
      1 => 448,
      2 => 'Xã Đắk Rơ Ông',
    ),
    7497 => 
    array (
      0 => 7498,
      1 => 448,
      2 => 'Xã Đắk Tờ Kan',
    ),
    7498 => 
    array (
      0 => 7499,
      1 => 448,
      2 => 'Xã Tu Mơ Rông',
    ),
    7499 => 
    array (
      0 => 7500,
      1 => 448,
      2 => 'Xã Đắk Hà',
    ),
    7500 => 
    array (
      0 => 7501,
      1 => 448,
      2 => 'Xã Tê Xăng',
    ),
    7501 => 
    array (
      0 => 7502,
      1 => 448,
      2 => 'Xã Văn Xuôi',
    ),
    7502 => 
    array (
      0 => 7503,
      1 => 449,
      2 => 'Xã Ia Đal',
    ),
    7503 => 
    array (
      0 => 7504,
      1 => 449,
      2 => 'Xã Ia Dom',
    ),
    7504 => 
    array (
      0 => 7505,
      1 => 449,
      2 => 'Xã Ia Tơi',
    ),
    7505 => 
    array (
      0 => 7506,
      1 => 450,
      2 => 'Phường Yên Đỗ',
    ),
    7506 => 
    array (
      0 => 7507,
      1 => 450,
      2 => 'Phường Diên Hồng',
    ),
    7507 => 
    array (
      0 => 7508,
      1 => 450,
      2 => 'Phường Ia Kring',
    ),
    7508 => 
    array (
      0 => 7509,
      1 => 450,
      2 => 'Phường Hội Thương',
    ),
    7509 => 
    array (
      0 => 7510,
      1 => 450,
      2 => 'Phường Hội Phú',
    ),
    7510 => 
    array (
      0 => 7511,
      1 => 450,
      2 => 'Phường Phù Đổng',
    ),
    7511 => 
    array (
      0 => 7512,
      1 => 450,
      2 => 'Phường Hoa Lư',
    ),
    7512 => 
    array (
      0 => 7513,
      1 => 450,
      2 => 'Phường Tây Sơn',
    ),
    7513 => 
    array (
      0 => 7514,
      1 => 450,
      2 => 'Phường Thống Nhất',
    ),
    7514 => 
    array (
      0 => 7515,
      1 => 450,
      2 => 'Phường Đống Đa',
    ),
    7515 => 
    array (
      0 => 7516,
      1 => 450,
      2 => 'Phường Trà Bá',
    ),
    7516 => 
    array (
      0 => 7517,
      1 => 450,
      2 => 'Phường Thắng Lợi',
    ),
    7517 => 
    array (
      0 => 7518,
      1 => 450,
      2 => 'Phường Yên Thế',
    ),
    7518 => 
    array (
      0 => 7519,
      1 => 450,
      2 => 'Phường Chi Lăng',
    ),
    7519 => 
    array (
      0 => 7520,
      1 => 450,
      2 => 'Xã Biển Hồ',
    ),
    7520 => 
    array (
      0 => 7521,
      1 => 450,
      2 => 'Xã Tân Sơn',
    ),
    7521 => 
    array (
      0 => 7522,
      1 => 450,
      2 => 'Xã Trà Đa',
    ),
    7522 => 
    array (
      0 => 7523,
      1 => 450,
      2 => 'Xã Chư Á',
    ),
    7523 => 
    array (
      0 => 7524,
      1 => 450,
      2 => 'Xã An Phú',
    ),
    7524 => 
    array (
      0 => 7525,
      1 => 450,
      2 => 'Xã Diên Phú',
    ),
    7525 => 
    array (
      0 => 7526,
      1 => 450,
      2 => 'Xã Ia Kênh',
    ),
    7526 => 
    array (
      0 => 7527,
      1 => 450,
      2 => 'Xã Gào',
    ),
    7527 => 
    array (
      0 => 7528,
      1 => 451,
      2 => 'Phường An Bình',
    ),
    7528 => 
    array (
      0 => 7529,
      1 => 451,
      2 => 'Phường Tây Sơn',
    ),
    7529 => 
    array (
      0 => 7530,
      1 => 451,
      2 => 'Phường An Phú',
    ),
    7530 => 
    array (
      0 => 7531,
      1 => 451,
      2 => 'Phường An Tân',
    ),
    7531 => 
    array (
      0 => 7532,
      1 => 451,
      2 => 'Xã Tú An',
    ),
    7532 => 
    array (
      0 => 7533,
      1 => 451,
      2 => 'Xã Xuân An',
    ),
    7533 => 
    array (
      0 => 7534,
      1 => 451,
      2 => 'Xã Cửu An',
    ),
    7534 => 
    array (
      0 => 7535,
      1 => 451,
      2 => 'Phường An Phước',
    ),
    7535 => 
    array (
      0 => 7536,
      1 => 451,
      2 => 'Xã Song An',
    ),
    7536 => 
    array (
      0 => 7537,
      1 => 451,
      2 => 'Phường Ngô Mây',
    ),
    7537 => 
    array (
      0 => 7538,
      1 => 451,
      2 => 'Xã Thành An',
    ),
    7538 => 
    array (
      0 => 7539,
      1 => 452,
      2 => 'Phường Cheo Reo',
    ),
    7539 => 
    array (
      0 => 7540,
      1 => 452,
      2 => 'Phường Hòa Bình',
    ),
    7540 => 
    array (
      0 => 7541,
      1 => 452,
      2 => 'Phường Đoàn Kết',
    ),
    7541 => 
    array (
      0 => 7542,
      1 => 452,
      2 => 'Phường Sông Bờ',
    ),
    7542 => 
    array (
      0 => 7543,
      1 => 452,
      2 => 'Xã Ia RBol',
    ),
    7543 => 
    array (
      0 => 7544,
      1 => 452,
      2 => 'Xã Chư Băh',
    ),
    7544 => 
    array (
      0 => 7545,
      1 => 452,
      2 => 'Xã Ia RTô',
    ),
    7545 => 
    array (
      0 => 7546,
      1 => 452,
      2 => 'Xã Ia Sao',
    ),
    7546 => 
    array (
      0 => 7547,
      1 => 453,
      2 => 'Thị trấn KBang',
    ),
    7547 => 
    array (
      0 => 7548,
      1 => 453,
      2 => 'Xã Kon Pne',
    ),
    7548 => 
    array (
      0 => 7549,
      1 => 453,
      2 => 'Xã Đăk Roong',
    ),
    7549 => 
    array (
      0 => 7550,
      1 => 453,
      2 => 'Xã Sơn Lang',
    ),
    7550 => 
    array (
      0 => 7551,
      1 => 453,
      2 => 'Xã KRong',
    ),
    7551 => 
    array (
      0 => 7552,
      1 => 453,
      2 => 'Xã Sơ Pai',
    ),
    7552 => 
    array (
      0 => 7553,
      1 => 453,
      2 => 'Xã Lơ Ku',
    ),
    7553 => 
    array (
      0 => 7554,
      1 => 453,
      2 => 'Xã Đông',
    ),
    7554 => 
    array (
      0 => 7555,
      1 => 453,
      2 => 'Xã Đak SMar',
    ),
    7555 => 
    array (
      0 => 7556,
      1 => 453,
      2 => 'Xã Nghĩa An',
    ),
    7556 => 
    array (
      0 => 7557,
      1 => 453,
      2 => 'Xã Tơ Tung',
    ),
    7557 => 
    array (
      0 => 7558,
      1 => 453,
      2 => 'Xã Kông Lơng Khơng',
    ),
    7558 => 
    array (
      0 => 7559,
      1 => 453,
      2 => 'Xã Kông Pla',
    ),
    7559 => 
    array (
      0 => 7560,
      1 => 453,
      2 => 'Xã Đăk HLơ',
    ),
    7560 => 
    array (
      0 => 7561,
      1 => 454,
      2 => 'Thị trấn Đăk Đoa',
    ),
    7561 => 
    array (
      0 => 7562,
      1 => 454,
      2 => 'Xã Hà Đông',
    ),
    7562 => 
    array (
      0 => 7563,
      1 => 454,
      2 => 'Xã Đăk Sơmei',
    ),
    7563 => 
    array (
      0 => 7564,
      1 => 454,
      2 => 'Xã Đăk Krong',
    ),
    7564 => 
    array (
      0 => 7565,
      1 => 454,
      2 => 'Xã Hải Yang',
    ),
    7565 => 
    array (
      0 => 7566,
      1 => 454,
      2 => 'Xã Kon Gang',
    ),
    7566 => 
    array (
      0 => 7567,
      1 => 454,
      2 => 'Xã Hà Bầu',
    ),
    7567 => 
    array (
      0 => 7568,
      1 => 454,
      2 => 'Xã Nam Yang',
    ),
    7568 => 
    array (
      0 => 7569,
      1 => 454,
      2 => 'Xã K\' Dang',
    ),
    7569 => 
    array (
      0 => 7570,
      1 => 454,
      2 => 'Xã H\' Neng',
    ),
    7570 => 
    array (
      0 => 7571,
      1 => 454,
      2 => 'Xã Tân Bình',
    ),
    7571 => 
    array (
      0 => 7572,
      1 => 454,
      2 => 'Xã Glar',
    ),
    7572 => 
    array (
      0 => 7573,
      1 => 454,
      2 => 'Xã A Dơk',
    ),
    7573 => 
    array (
      0 => 7574,
      1 => 454,
      2 => 'Xã Trang',
    ),
    7574 => 
    array (
      0 => 7575,
      1 => 454,
      2 => 'Xã HNol',
    ),
    7575 => 
    array (
      0 => 7576,
      1 => 454,
      2 => 'Xã Ia Pết',
    ),
    7576 => 
    array (
      0 => 7577,
      1 => 454,
      2 => 'Xã Ia Băng',
    ),
    7577 => 
    array (
      0 => 7578,
      1 => 455,
      2 => 'Thị trấn Phú Hòa',
    ),
    7578 => 
    array (
      0 => 7579,
      1 => 455,
      2 => 'Xã Hà Tây',
    ),
    7579 => 
    array (
      0 => 7580,
      1 => 455,
      2 => 'Xã Ia Khươl',
    ),
    7580 => 
    array (
      0 => 7581,
      1 => 455,
      2 => 'Xã Ia Phí',
    ),
    7581 => 
    array (
      0 => 7582,
      1 => 455,
      2 => 'Thị trấn Ia Ly',
    ),
    7582 => 
    array (
      0 => 7583,
      1 => 455,
      2 => 'Xã Ia Mơ Nông',
    ),
    7583 => 
    array (
      0 => 7584,
      1 => 455,
      2 => 'Xã Ia Kreng',
    ),
    7584 => 
    array (
      0 => 7585,
      1 => 455,
      2 => 'Xã Đăk Tơ Ver',
    ),
    7585 => 
    array (
      0 => 7586,
      1 => 455,
      2 => 'Xã Hòa Phú',
    ),
    7586 => 
    array (
      0 => 7587,
      1 => 455,
      2 => 'Xã Chư Đăng Ya',
    ),
    7587 => 
    array (
      0 => 7588,
      1 => 455,
      2 => 'Xã Ia Ka',
    ),
    7588 => 
    array (
      0 => 7589,
      1 => 455,
      2 => 'Xã Ia Nhin',
    ),
    7589 => 
    array (
      0 => 7590,
      1 => 455,
      2 => 'Xã Nghĩa Hòa',
    ),
    7590 => 
    array (
      0 => 7591,
      1 => 455,
      2 => 'Xã Nghĩa Hưng',
    ),
    7591 => 
    array (
      0 => 7592,
      1 => 456,
      2 => 'Thị trấn Ia Kha',
    ),
    7592 => 
    array (
      0 => 7593,
      1 => 456,
      2 => 'Xã Ia Sao',
    ),
    7593 => 
    array (
      0 => 7594,
      1 => 456,
      2 => 'Xã Ia Yok',
    ),
    7594 => 
    array (
      0 => 7595,
      1 => 456,
      2 => 'Xã Ia Hrung',
    ),
    7595 => 
    array (
      0 => 7596,
      1 => 456,
      2 => 'Xã Ia Bă',
    ),
    7596 => 
    array (
      0 => 7597,
      1 => 456,
      2 => 'Xã Ia Khai',
    ),
    7597 => 
    array (
      0 => 7598,
      1 => 456,
      2 => 'Xã Ia KRai',
    ),
    7598 => 
    array (
      0 => 7599,
      1 => 456,
      2 => 'Xã Ia Grăng',
    ),
    7599 => 
    array (
      0 => 7600,
      1 => 456,
      2 => 'Xã Ia Tô',
    ),
    7600 => 
    array (
      0 => 7601,
      1 => 456,
      2 => 'Xã Ia O',
    ),
    7601 => 
    array (
      0 => 7602,
      1 => 456,
      2 => 'Xã Ia Dêr',
    ),
    7602 => 
    array (
      0 => 7603,
      1 => 456,
      2 => 'Xã Ia Chia',
    ),
    7603 => 
    array (
      0 => 7604,
      1 => 456,
      2 => 'Xã Ia Pếch',
    ),
    7604 => 
    array (
      0 => 7605,
      1 => 457,
      2 => 'Thị trấn Kon Dơng',
    ),
    7605 => 
    array (
      0 => 7606,
      1 => 457,
      2 => 'Xã Ayun',
    ),
    7606 => 
    array (
      0 => 7607,
      1 => 457,
      2 => 'Xã Đak Jơ Ta',
    ),
    7607 => 
    array (
      0 => 7608,
      1 => 457,
      2 => 'Xã Đak Ta Ley',
    ),
    7608 => 
    array (
      0 => 7609,
      1 => 457,
      2 => 'Xã Hra',
    ),
    7609 => 
    array (
      0 => 7610,
      1 => 457,
      2 => 'Xã Đăk Yă',
    ),
    7610 => 
    array (
      0 => 7611,
      1 => 457,
      2 => 'Xã Đăk Djrăng',
    ),
    7611 => 
    array (
      0 => 7612,
      1 => 457,
      2 => 'Xã Lơ Pang',
    ),
    7612 => 
    array (
      0 => 7613,
      1 => 457,
      2 => 'Xã Kon Thụp',
    ),
    7613 => 
    array (
      0 => 7614,
      1 => 457,
      2 => 'Xã Đê Ar',
    ),
    7614 => 
    array (
      0 => 7615,
      1 => 457,
      2 => 'Xã Kon Chiêng',
    ),
    7615 => 
    array (
      0 => 7616,
      1 => 457,
      2 => 'Xã Đăk Trôi',
    ),
    7616 => 
    array (
      0 => 7617,
      1 => 458,
      2 => 'Thị trấn Kông Chro',
    ),
    7617 => 
    array (
      0 => 7618,
      1 => 458,
      2 => 'Xã Chư Krêy',
    ),
    7618 => 
    array (
      0 => 7619,
      1 => 458,
      2 => 'Xã An Trung',
    ),
    7619 => 
    array (
      0 => 7620,
      1 => 458,
      2 => 'Xã Kông Yang',
    ),
    7620 => 
    array (
      0 => 7621,
      1 => 458,
      2 => 'Xã Đăk Tơ Pang',
    ),
    7621 => 
    array (
      0 => 7622,
      1 => 458,
      2 => 'Xã SRó',
    ),
    7622 => 
    array (
      0 => 7623,
      1 => 458,
      2 => 'Xã Đắk Kơ Ning',
    ),
    7623 => 
    array (
      0 => 7624,
      1 => 458,
      2 => 'Xã Đăk Song',
    ),
    7624 => 
    array (
      0 => 7625,
      1 => 458,
      2 => 'Xã Đăk Pling',
    ),
    7625 => 
    array (
      0 => 7626,
      1 => 458,
      2 => 'Xã Yang Trung',
    ),
    7626 => 
    array (
      0 => 7627,
      1 => 458,
      2 => 'Xã Đăk Pơ Pho',
    ),
    7627 => 
    array (
      0 => 7628,
      1 => 458,
      2 => 'Xã Ya Ma',
    ),
    7628 => 
    array (
      0 => 7629,
      1 => 458,
      2 => 'Xã Chơ Long',
    ),
    7629 => 
    array (
      0 => 7630,
      1 => 458,
      2 => 'Xã Yang Nam',
    ),
    7630 => 
    array (
      0 => 7631,
      1 => 459,
      2 => 'Thị trấn Chư Ty',
    ),
    7631 => 
    array (
      0 => 7632,
      1 => 459,
      2 => 'Xã Ia Dơk',
    ),
    7632 => 
    array (
      0 => 7633,
      1 => 459,
      2 => 'Xã Ia Krêl',
    ),
    7633 => 
    array (
      0 => 7634,
      1 => 459,
      2 => 'Xã Ia Din',
    ),
    7634 => 
    array (
      0 => 7635,
      1 => 459,
      2 => 'Xã Ia Kla',
    ),
    7635 => 
    array (
      0 => 7636,
      1 => 459,
      2 => 'Xã Ia Dom',
    ),
    7636 => 
    array (
      0 => 7637,
      1 => 459,
      2 => 'Xã Ia Lang',
    ),
    7637 => 
    array (
      0 => 7638,
      1 => 459,
      2 => 'Xã Ia Kriêng',
    ),
    7638 => 
    array (
      0 => 7639,
      1 => 459,
      2 => 'Xã Ia Pnôn',
    ),
    7639 => 
    array (
      0 => 7640,
      1 => 459,
      2 => 'Xã Ia Nan',
    ),
    7640 => 
    array (
      0 => 7641,
      1 => 460,
      2 => 'Thị trấn Chư Prông',
    ),
    7641 => 
    array (
      0 => 7642,
      1 => 460,
      2 => 'Xã Ia Kly',
    ),
    7642 => 
    array (
      0 => 7643,
      1 => 460,
      2 => 'Xã Bình Giáo',
    ),
    7643 => 
    array (
      0 => 7644,
      1 => 460,
      2 => 'Xã Ia Drăng',
    ),
    7644 => 
    array (
      0 => 7645,
      1 => 460,
      2 => 'Xã Thăng Hưng',
    ),
    7645 => 
    array (
      0 => 7646,
      1 => 460,
      2 => 'Xã Bàu Cạn',
    ),
    7646 => 
    array (
      0 => 7647,
      1 => 460,
      2 => 'Xã Ia Phìn',
    ),
    7647 => 
    array (
      0 => 7648,
      1 => 460,
      2 => 'Xã Ia Băng',
    ),
    7648 => 
    array (
      0 => 7649,
      1 => 460,
      2 => 'Xã Ia Tôr',
    ),
    7649 => 
    array (
      0 => 7650,
      1 => 460,
      2 => 'Xã Ia Boòng',
    ),
    7650 => 
    array (
      0 => 7651,
      1 => 460,
      2 => 'Xã Ia O',
    ),
    7651 => 
    array (
      0 => 7652,
      1 => 460,
      2 => 'Xã Ia Púch',
    ),
    7652 => 
    array (
      0 => 7653,
      1 => 460,
      2 => 'Xã Ia Me',
    ),
    7653 => 
    array (
      0 => 7654,
      1 => 460,
      2 => 'Xã Ia Vê',
    ),
    7654 => 
    array (
      0 => 7655,
      1 => 460,
      2 => 'Xã Ia Pia',
    ),
    7655 => 
    array (
      0 => 7656,
      1 => 460,
      2 => 'Xã Ia Ga',
    ),
    7656 => 
    array (
      0 => 7657,
      1 => 460,
      2 => 'Xã Ia Lâu',
    ),
    7657 => 
    array (
      0 => 7658,
      1 => 460,
      2 => 'Xã Ia Piơr',
    ),
    7658 => 
    array (
      0 => 7659,
      1 => 460,
      2 => 'Xã Ia Mơ',
    ),
    7659 => 
    array (
      0 => 7660,
      1 => 461,
      2 => 'Thị trấn Chư Sê',
    ),
    7660 => 
    array (
      0 => 7661,
      1 => 461,
      2 => 'Xã Ia Tiêm',
    ),
    7661 => 
    array (
      0 => 7662,
      1 => 461,
      2 => 'Xã Chư Pơng',
    ),
    7662 => 
    array (
      0 => 7663,
      1 => 461,
      2 => 'Xã Bar Măih',
    ),
    7663 => 
    array (
      0 => 7664,
      1 => 461,
      2 => 'Xã Bờ Ngoong',
    ),
    7664 => 
    array (
      0 => 7665,
      1 => 461,
      2 => 'Xã Ia Glai',
    ),
    7665 => 
    array (
      0 => 7666,
      1 => 461,
      2 => 'Xã AL Bá',
    ),
    7666 => 
    array (
      0 => 7667,
      1 => 461,
      2 => 'Xã Kông HTok',
    ),
    7667 => 
    array (
      0 => 7668,
      1 => 461,
      2 => 'Xã AYun',
    ),
    7668 => 
    array (
      0 => 7669,
      1 => 461,
      2 => 'Xã Ia HLốp',
    ),
    7669 => 
    array (
      0 => 7670,
      1 => 461,
      2 => 'Xã Ia Blang',
    ),
    7670 => 
    array (
      0 => 7671,
      1 => 461,
      2 => 'Xã Dun',
    ),
    7671 => 
    array (
      0 => 7672,
      1 => 461,
      2 => 'Xã Ia Pal',
    ),
    7672 => 
    array (
      0 => 7673,
      1 => 461,
      2 => 'Xã H Bông',
    ),
    7673 => 
    array (
      0 => 7674,
      1 => 461,
      2 => 'Xã Ia Ko',
    ),
    7674 => 
    array (
      0 => 7675,
      1 => 462,
      2 => 'Xã Hà Tam',
    ),
    7675 => 
    array (
      0 => 7676,
      1 => 462,
      2 => 'Xã An Thành',
    ),
    7676 => 
    array (
      0 => 7677,
      1 => 462,
      2 => 'Thị trấn Đak Pơ',
    ),
    7677 => 
    array (
      0 => 7678,
      1 => 462,
      2 => 'Xã Yang Bắc',
    ),
    7678 => 
    array (
      0 => 7679,
      1 => 462,
      2 => 'Xã Cư An',
    ),
    7679 => 
    array (
      0 => 7680,
      1 => 462,
      2 => 'Xã Tân An',
    ),
    7680 => 
    array (
      0 => 7681,
      1 => 462,
      2 => 'Xã Phú An',
    ),
    7681 => 
    array (
      0 => 7682,
      1 => 462,
      2 => 'Xã Ya Hội',
    ),
    7682 => 
    array (
      0 => 7683,
      1 => 463,
      2 => 'Xã Pờ Tó',
    ),
    7683 => 
    array (
      0 => 7684,
      1 => 463,
      2 => 'Xã Chư Răng',
    ),
    7684 => 
    array (
      0 => 7685,
      1 => 463,
      2 => 'Xã Ia KDăm',
    ),
    7685 => 
    array (
      0 => 7686,
      1 => 463,
      2 => 'Xã Kim Tân',
    ),
    7686 => 
    array (
      0 => 7687,
      1 => 463,
      2 => 'Xã Chư Mố',
    ),
    7687 => 
    array (
      0 => 7688,
      1 => 463,
      2 => 'Xã Ia Tul',
    ),
    7688 => 
    array (
      0 => 7689,
      1 => 463,
      2 => 'Xã Ia Ma Rơn',
    ),
    7689 => 
    array (
      0 => 7690,
      1 => 463,
      2 => 'Xã Ia Broăi',
    ),
    7690 => 
    array (
      0 => 7691,
      1 => 463,
      2 => 'Xã Ia Trok',
    ),
    7691 => 
    array (
      0 => 7692,
      1 => 464,
      2 => 'Thị trấn Phú Túc',
    ),
    7692 => 
    array (
      0 => 7693,
      1 => 464,
      2 => 'Xã Ia RSai',
    ),
    7693 => 
    array (
      0 => 7694,
      1 => 464,
      2 => 'Xã Ia RSươm',
    ),
    7694 => 
    array (
      0 => 7695,
      1 => 464,
      2 => 'Xã Chư Gu',
    ),
    7695 => 
    array (
      0 => 7696,
      1 => 464,
      2 => 'Xã Đất Bằng',
    ),
    7696 => 
    array (
      0 => 7697,
      1 => 464,
      2 => 'Xã Ia Mláh',
    ),
    7697 => 
    array (
      0 => 7698,
      1 => 464,
      2 => 'Xã Chư Drăng',
    ),
    7698 => 
    array (
      0 => 7699,
      1 => 464,
      2 => 'Xã Phú Cần',
    ),
    7699 => 
    array (
      0 => 7700,
      1 => 464,
      2 => 'Xã Ia HDreh',
    ),
    7700 => 
    array (
      0 => 7701,
      1 => 464,
      2 => 'Xã Ia RMok',
    ),
    7701 => 
    array (
      0 => 7702,
      1 => 464,
      2 => 'Xã Chư Ngọc',
    ),
    7702 => 
    array (
      0 => 7703,
      1 => 464,
      2 => 'Xã Uar',
    ),
    7703 => 
    array (
      0 => 7704,
      1 => 464,
      2 => 'Xã Chư Rcăm',
    ),
    7704 => 
    array (
      0 => 7705,
      1 => 464,
      2 => 'Xã Krông Năng',
    ),
    7705 => 
    array (
      0 => 7706,
      1 => 465,
      2 => 'Thị trấn Phú Thiện',
    ),
    7706 => 
    array (
      0 => 7707,
      1 => 465,
      2 => 'Xã Chư A Thai',
    ),
    7707 => 
    array (
      0 => 7708,
      1 => 465,
      2 => 'Xã Ayun Hạ',
    ),
    7708 => 
    array (
      0 => 7709,
      1 => 465,
      2 => 'Xã Ia Ake',
    ),
    7709 => 
    array (
      0 => 7710,
      1 => 465,
      2 => 'Xã Ia Sol',
    ),
    7710 => 
    array (
      0 => 7711,
      1 => 465,
      2 => 'Xã Ia Piar',
    ),
    7711 => 
    array (
      0 => 7712,
      1 => 465,
      2 => 'Xã Ia Peng',
    ),
    7712 => 
    array (
      0 => 7713,
      1 => 465,
      2 => 'Xã Chrôh Pơnan',
    ),
    7713 => 
    array (
      0 => 7714,
      1 => 465,
      2 => 'Xã Ia Hiao',
    ),
    7714 => 
    array (
      0 => 7715,
      1 => 465,
      2 => 'Xã Ia Yeng',
    ),
    7715 => 
    array (
      0 => 7716,
      1 => 466,
      2 => 'Thị trấn Nhơn Hoà',
    ),
    7716 => 
    array (
      0 => 7717,
      1 => 466,
      2 => 'Xã Ia Hrú',
    ),
    7717 => 
    array (
      0 => 7718,
      1 => 466,
      2 => 'Xã Ia Rong',
    ),
    7718 => 
    array (
      0 => 7719,
      1 => 466,
      2 => 'Xã Ia Dreng',
    ),
    7719 => 
    array (
      0 => 7720,
      1 => 466,
      2 => 'Xã Ia Hla',
    ),
    7720 => 
    array (
      0 => 7721,
      1 => 466,
      2 => 'Xã Chư Don',
    ),
    7721 => 
    array (
      0 => 7722,
      1 => 466,
      2 => 'Xã Ia Phang',
    ),
    7722 => 
    array (
      0 => 7723,
      1 => 466,
      2 => 'Xã Ia Le',
    ),
    7723 => 
    array (
      0 => 7724,
      1 => 466,
      2 => 'Xã Ia BLứ',
    ),
    7724 => 
    array (
      0 => 7725,
      1 => 467,
      2 => 'Phường Tân Lập',
    ),
    7725 => 
    array (
      0 => 7726,
      1 => 467,
      2 => 'Phường Tân Hòa',
    ),
    7726 => 
    array (
      0 => 7727,
      1 => 467,
      2 => 'Phường Tân An',
    ),
    7727 => 
    array (
      0 => 7728,
      1 => 467,
      2 => 'Phường Thống Nhất',
    ),
    7728 => 
    array (
      0 => 7729,
      1 => 467,
      2 => 'Phường Thành Nhất',
    ),
    7729 => 
    array (
      0 => 7730,
      1 => 467,
      2 => 'Phường Thắng Lợi',
    ),
    7730 => 
    array (
      0 => 7731,
      1 => 467,
      2 => 'Phường Tân Lợi',
    ),
    7731 => 
    array (
      0 => 7732,
      1 => 467,
      2 => 'Phường Thành Công',
    ),
    7732 => 
    array (
      0 => 7733,
      1 => 467,
      2 => 'Phường Tân Thành',
    ),
    7733 => 
    array (
      0 => 7734,
      1 => 467,
      2 => 'Phường Tân Tiến',
    ),
    7734 => 
    array (
      0 => 7735,
      1 => 467,
      2 => 'Phường Tự An',
    ),
    7735 => 
    array (
      0 => 7736,
      1 => 467,
      2 => 'Phường Ea Tam',
    ),
    7736 => 
    array (
      0 => 7737,
      1 => 467,
      2 => 'Phường Khánh Xuân',
    ),
    7737 => 
    array (
      0 => 7738,
      1 => 467,
      2 => 'Xã Hòa Thuận',
    ),
    7738 => 
    array (
      0 => 7739,
      1 => 467,
      2 => 'Xã Cư ÊBur',
    ),
    7739 => 
    array (
      0 => 7740,
      1 => 467,
      2 => 'Xã Ea Tu',
    ),
    7740 => 
    array (
      0 => 7741,
      1 => 467,
      2 => 'Xã Hòa Thắng',
    ),
    7741 => 
    array (
      0 => 7742,
      1 => 467,
      2 => 'Xã Ea Kao',
    ),
    7742 => 
    array (
      0 => 7743,
      1 => 467,
      2 => 'Xã Hòa Phú',
    ),
    7743 => 
    array (
      0 => 7744,
      1 => 467,
      2 => 'Xã Hòa Khánh',
    ),
    7744 => 
    array (
      0 => 7745,
      1 => 467,
      2 => 'Xã Hòa Xuân',
    ),
    7745 => 
    array (
      0 => 7746,
      1 => 468,
      2 => 'Phường An Lạc',
    ),
    7746 => 
    array (
      0 => 7747,
      1 => 468,
      2 => 'Phường An Bình',
    ),
    7747 => 
    array (
      0 => 7748,
      1 => 468,
      2 => 'Phường Thiện An',
    ),
    7748 => 
    array (
      0 => 7749,
      1 => 468,
      2 => 'Phường Đạt Hiếu',
    ),
    7749 => 
    array (
      0 => 7750,
      1 => 468,
      2 => 'Phường Đoàn Kết',
    ),
    7750 => 
    array (
      0 => 7751,
      1 => 468,
      2 => 'Xã Ea Blang',
    ),
    7751 => 
    array (
      0 => 7752,
      1 => 468,
      2 => 'Xã Ea Drông',
    ),
    7752 => 
    array (
      0 => 7753,
      1 => 468,
      2 => 'Phường Thống Nhất',
    ),
    7753 => 
    array (
      0 => 7754,
      1 => 468,
      2 => 'Phường Bình Tân',
    ),
    7754 => 
    array (
      0 => 7755,
      1 => 468,
      2 => 'Xã Ea Siên',
    ),
    7755 => 
    array (
      0 => 7756,
      1 => 468,
      2 => 'Xã Bình Thuận',
    ),
    7756 => 
    array (
      0 => 7757,
      1 => 468,
      2 => 'Xã Cư Bao',
    ),
    7757 => 
    array (
      0 => 7758,
      1 => 469,
      2 => 'Thị trấn Ea Drăng',
    ),
    7758 => 
    array (
      0 => 7759,
      1 => 469,
      2 => 'Xã Ea H\'leo',
    ),
    7759 => 
    array (
      0 => 7760,
      1 => 469,
      2 => 'Xã Ea Sol',
    ),
    7760 => 
    array (
      0 => 7761,
      1 => 469,
      2 => 'Xã Ea Ral',
    ),
    7761 => 
    array (
      0 => 7762,
      1 => 469,
      2 => 'Xã Ea Wy',
    ),
    7762 => 
    array (
      0 => 7763,
      1 => 469,
      2 => 'Xã Cư A Mung',
    ),
    7763 => 
    array (
      0 => 7764,
      1 => 469,
      2 => 'Xã Cư Mốt',
    ),
    7764 => 
    array (
      0 => 7765,
      1 => 469,
      2 => 'Xã Ea Hiao',
    ),
    7765 => 
    array (
      0 => 7766,
      1 => 469,
      2 => 'Xã Ea Khal',
    ),
    7766 => 
    array (
      0 => 7767,
      1 => 469,
      2 => 'Xã Dliê Yang',
    ),
    7767 => 
    array (
      0 => 7768,
      1 => 469,
      2 => 'Xã Ea Tir',
    ),
    7768 => 
    array (
      0 => 7769,
      1 => 469,
      2 => 'Xã Ea Nam',
    ),
    7769 => 
    array (
      0 => 7770,
      1 => 470,
      2 => 'Thị trấn Ea Súp',
    ),
    7770 => 
    array (
      0 => 7771,
      1 => 470,
      2 => 'Xã Ia Lốp',
    ),
    7771 => 
    array (
      0 => 7772,
      1 => 470,
      2 => 'Xã Ia JLơi',
    ),
    7772 => 
    array (
      0 => 7773,
      1 => 470,
      2 => 'Xã Ea Rốk',
    ),
    7773 => 
    array (
      0 => 7774,
      1 => 470,
      2 => 'Xã Ya Tờ Mốt',
    ),
    7774 => 
    array (
      0 => 7775,
      1 => 470,
      2 => 'Xã Ia RVê',
    ),
    7775 => 
    array (
      0 => 7776,
      1 => 470,
      2 => 'Xã Ea Lê',
    ),
    7776 => 
    array (
      0 => 7777,
      1 => 470,
      2 => 'Xã Cư KBang',
    ),
    7777 => 
    array (
      0 => 7778,
      1 => 470,
      2 => 'Xã Ea Bung',
    ),
    7778 => 
    array (
      0 => 7779,
      1 => 470,
      2 => 'Xã Cư M\'Lan',
    ),
    7779 => 
    array (
      0 => 7780,
      1 => 471,
      2 => 'Xã Krông Na',
    ),
    7780 => 
    array (
      0 => 7781,
      1 => 471,
      2 => 'Xã Ea Huar',
    ),
    7781 => 
    array (
      0 => 7782,
      1 => 471,
      2 => 'Xã Ea Wer',
    ),
    7782 => 
    array (
      0 => 7783,
      1 => 471,
      2 => 'Xã Tân Hoà',
    ),
    7783 => 
    array (
      0 => 7784,
      1 => 471,
      2 => 'Xã Cuôr KNia',
    ),
    7784 => 
    array (
      0 => 7785,
      1 => 471,
      2 => 'Xã Ea Bar',
    ),
    7785 => 
    array (
      0 => 7786,
      1 => 471,
      2 => 'Xã Ea Nuôl',
    ),
    7786 => 
    array (
      0 => 7787,
      1 => 472,
      2 => 'Thị trấn Ea Pốk',
    ),
    7787 => 
    array (
      0 => 7788,
      1 => 472,
      2 => 'Thị trấn Quảng Phú',
    ),
    7788 => 
    array (
      0 => 7789,
      1 => 472,
      2 => 'Xã Quảng Tiến',
    ),
    7789 => 
    array (
      0 => 7790,
      1 => 472,
      2 => 'Xã Ea Kuêh',
    ),
    7790 => 
    array (
      0 => 7791,
      1 => 472,
      2 => 'Xã Ea Kiết',
    ),
    7791 => 
    array (
      0 => 7792,
      1 => 472,
      2 => 'Xã Ea Tar',
    ),
    7792 => 
    array (
      0 => 7793,
      1 => 472,
      2 => 'Xã Cư Dliê M\'nông',
    ),
    7793 => 
    array (
      0 => 7794,
      1 => 472,
      2 => 'Xã Ea H\'đinh',
    ),
    7794 => 
    array (
      0 => 7795,
      1 => 472,
      2 => 'Xã Ea Tul',
    ),
    7795 => 
    array (
      0 => 7796,
      1 => 472,
      2 => 'Xã Ea KPam',
    ),
    7796 => 
    array (
      0 => 7797,
      1 => 472,
      2 => 'Xã Ea M\'DRóh',
    ),
    7797 => 
    array (
      0 => 7798,
      1 => 472,
      2 => 'Xã Quảng Hiệp',
    ),
    7798 => 
    array (
      0 => 7799,
      1 => 472,
      2 => 'Xã Cư M\'gar',
    ),
    7799 => 
    array (
      0 => 7800,
      1 => 472,
      2 => 'Xã Ea D\'Rơng',
    ),
    7800 => 
    array (
      0 => 7801,
      1 => 472,
      2 => 'Xã Ea M\'nang',
    ),
    7801 => 
    array (
      0 => 7802,
      1 => 472,
      2 => 'Xã Cư Suê',
    ),
    7802 => 
    array (
      0 => 7803,
      1 => 472,
      2 => 'Xã Cuor Đăng',
    ),
    7803 => 
    array (
      0 => 7804,
      1 => 473,
      2 => 'Xã Cư Né',
    ),
    7804 => 
    array (
      0 => 7805,
      1 => 473,
      2 => 'Xã Chư KBô',
    ),
    7805 => 
    array (
      0 => 7806,
      1 => 473,
      2 => 'Xã Cư Pơng',
    ),
    7806 => 
    array (
      0 => 7807,
      1 => 473,
      2 => 'Xã Ea Sin',
    ),
    7807 => 
    array (
      0 => 7808,
      1 => 473,
      2 => 'Xã Pơng Drang',
    ),
    7808 => 
    array (
      0 => 7809,
      1 => 473,
      2 => 'Xã Tân Lập',
    ),
    7809 => 
    array (
      0 => 7810,
      1 => 473,
      2 => 'Xã Ea Ngai',
    ),
    7810 => 
    array (
      0 => 7811,
      1 => 474,
      2 => 'Thị trấn Krông Năng',
    ),
    7811 => 
    array (
      0 => 7812,
      1 => 474,
      2 => 'Xã ĐLiê Ya',
    ),
    7812 => 
    array (
      0 => 7813,
      1 => 474,
      2 => 'Xã Ea Tóh',
    ),
    7813 => 
    array (
      0 => 7814,
      1 => 474,
      2 => 'Xã Ea Tam',
    ),
    7814 => 
    array (
      0 => 7815,
      1 => 474,
      2 => 'Xã Phú Lộc',
    ),
    7815 => 
    array (
      0 => 7816,
      1 => 474,
      2 => 'Xã Tam Giang',
    ),
    7816 => 
    array (
      0 => 7817,
      1 => 474,
      2 => 'Xã Ea Puk',
    ),
    7817 => 
    array (
      0 => 7818,
      1 => 474,
      2 => 'Xã Ea Dăh',
    ),
    7818 => 
    array (
      0 => 7819,
      1 => 474,
      2 => 'Xã Ea Hồ',
    ),
    7819 => 
    array (
      0 => 7820,
      1 => 474,
      2 => 'Xã Phú Xuân',
    ),
    7820 => 
    array (
      0 => 7821,
      1 => 474,
      2 => 'Xã Cư Klông',
    ),
    7821 => 
    array (
      0 => 7822,
      1 => 474,
      2 => 'Xã Ea Tân',
    ),
    7822 => 
    array (
      0 => 7823,
      1 => 475,
      2 => 'Thị trấn Ea Kar',
    ),
    7823 => 
    array (
      0 => 7824,
      1 => 475,
      2 => 'Thị trấn Ea Knốp',
    ),
    7824 => 
    array (
      0 => 7825,
      1 => 475,
      2 => 'Xã Ea Sô',
    ),
    7825 => 
    array (
      0 => 7826,
      1 => 475,
      2 => 'Xã Ea Sar',
    ),
    7826 => 
    array (
      0 => 7827,
      1 => 475,
      2 => 'Xã Xuân Phú',
    ),
    7827 => 
    array (
      0 => 7828,
      1 => 475,
      2 => 'Xã Cư Huê',
    ),
    7828 => 
    array (
      0 => 7829,
      1 => 475,
      2 => 'Xã Ea Tih',
    ),
    7829 => 
    array (
      0 => 7830,
      1 => 475,
      2 => 'Xã Ea Đar',
    ),
    7830 => 
    array (
      0 => 7831,
      1 => 475,
      2 => 'Xã Ea Kmút',
    ),
    7831 => 
    array (
      0 => 7832,
      1 => 475,
      2 => 'Xã Cư Ni',
    ),
    7832 => 
    array (
      0 => 7833,
      1 => 475,
      2 => 'Xã Ea Păl',
    ),
    7833 => 
    array (
      0 => 7834,
      1 => 475,
      2 => 'Xã Cư Prông',
    ),
    7834 => 
    array (
      0 => 7835,
      1 => 475,
      2 => 'Xã Ea Ô',
    ),
    7835 => 
    array (
      0 => 7836,
      1 => 475,
      2 => 'Xã Cư ELang',
    ),
    7836 => 
    array (
      0 => 7837,
      1 => 475,
      2 => 'Xã Cư Bông',
    ),
    7837 => 
    array (
      0 => 7838,
      1 => 475,
      2 => 'Xã Cư Jang',
    ),
    7838 => 
    array (
      0 => 7839,
      1 => 476,
      2 => 'Thị trấn M\'Đrắk',
    ),
    7839 => 
    array (
      0 => 7840,
      1 => 476,
      2 => 'Xã Cư Prao',
    ),
    7840 => 
    array (
      0 => 7841,
      1 => 476,
      2 => 'Xã Ea Pil',
    ),
    7841 => 
    array (
      0 => 7842,
      1 => 476,
      2 => 'Xã Ea Lai',
    ),
    7842 => 
    array (
      0 => 7843,
      1 => 476,
      2 => 'Xã Ea H\'MLay',
    ),
    7843 => 
    array (
      0 => 7844,
      1 => 476,
      2 => 'Xã Krông Jing',
    ),
    7844 => 
    array (
      0 => 7845,
      1 => 476,
      2 => 'Xã Ea M\' Doal',
    ),
    7845 => 
    array (
      0 => 7846,
      1 => 476,
      2 => 'Xã Ea Riêng',
    ),
    7846 => 
    array (
      0 => 7847,
      1 => 476,
      2 => 'Xã Cư M\'ta',
    ),
    7847 => 
    array (
      0 => 7848,
      1 => 476,
      2 => 'Xã Cư K Róa',
    ),
    7848 => 
    array (
      0 => 7849,
      1 => 476,
      2 => 'Xã Krông Á',
    ),
    7849 => 
    array (
      0 => 7850,
      1 => 476,
      2 => 'Xã Cư San',
    ),
    7850 => 
    array (
      0 => 7851,
      1 => 476,
      2 => 'Xã Ea Trang',
    ),
    7851 => 
    array (
      0 => 7852,
      1 => 477,
      2 => 'Thị trấn Krông Kmar',
    ),
    7852 => 
    array (
      0 => 7853,
      1 => 477,
      2 => 'Xã Dang Kang',
    ),
    7853 => 
    array (
      0 => 7854,
      1 => 477,
      2 => 'Xã Cư KTy',
    ),
    7854 => 
    array (
      0 => 7855,
      1 => 477,
      2 => 'Xã Hòa Thành',
    ),
    7855 => 
    array (
      0 => 7856,
      1 => 477,
      2 => 'Xã Hòa Tân',
    ),
    7856 => 
    array (
      0 => 7857,
      1 => 477,
      2 => 'Xã Hòa Phong',
    ),
    7857 => 
    array (
      0 => 7858,
      1 => 477,
      2 => 'Xã Hòa Lễ',
    ),
    7858 => 
    array (
      0 => 7859,
      1 => 477,
      2 => 'Xã Yang Reh',
    ),
    7859 => 
    array (
      0 => 7860,
      1 => 477,
      2 => 'Xã Ea Trul',
    ),
    7860 => 
    array (
      0 => 7861,
      1 => 477,
      2 => 'Xã Khuê Ngọc Điền',
    ),
    7861 => 
    array (
      0 => 7862,
      1 => 477,
      2 => 'Xã Cư Pui',
    ),
    7862 => 
    array (
      0 => 7863,
      1 => 477,
      2 => 'Xã Hòa Sơn',
    ),
    7863 => 
    array (
      0 => 7864,
      1 => 477,
      2 => 'Xã Cư Drăm',
    ),
    7864 => 
    array (
      0 => 7865,
      1 => 477,
      2 => 'Xã Yang Mao',
    ),
    7865 => 
    array (
      0 => 7866,
      1 => 478,
      2 => 'Thị trấn Phước An',
    ),
    7866 => 
    array (
      0 => 7867,
      1 => 478,
      2 => 'Xã KRông Búk',
    ),
    7867 => 
    array (
      0 => 7868,
      1 => 478,
      2 => 'Xã Ea Kly',
    ),
    7868 => 
    array (
      0 => 7869,
      1 => 478,
      2 => 'Xã Ea Kênh',
    ),
    7869 => 
    array (
      0 => 7870,
      1 => 478,
      2 => 'Xã Ea Phê',
    ),
    7870 => 
    array (
      0 => 7871,
      1 => 478,
      2 => 'Xã Ea KNuec',
    ),
    7871 => 
    array (
      0 => 7872,
      1 => 478,
      2 => 'Xã Ea Yông',
    ),
    7872 => 
    array (
      0 => 7873,
      1 => 478,
      2 => 'Xã Hòa An',
    ),
    7873 => 
    array (
      0 => 7874,
      1 => 478,
      2 => 'Xã Ea Kuăng',
    ),
    7874 => 
    array (
      0 => 7875,
      1 => 478,
      2 => 'Xã Hòa Đông',
    ),
    7875 => 
    array (
      0 => 7876,
      1 => 478,
      2 => 'Xã Ea Hiu',
    ),
    7876 => 
    array (
      0 => 7877,
      1 => 478,
      2 => 'Xã Hòa Tiến',
    ),
    7877 => 
    array (
      0 => 7878,
      1 => 478,
      2 => 'Xã Tân Tiến',
    ),
    7878 => 
    array (
      0 => 7879,
      1 => 478,
      2 => 'Xã Vụ Bổn',
    ),
    7879 => 
    array (
      0 => 7880,
      1 => 478,
      2 => 'Xã Ea Uy',
    ),
    7880 => 
    array (
      0 => 7881,
      1 => 478,
      2 => 'Xã Ea Yiêng',
    ),
    7881 => 
    array (
      0 => 7882,
      1 => 479,
      2 => 'Thị trấn Buôn Trấp',
    ),
    7882 => 
    array (
      0 => 7883,
      1 => 479,
      2 => 'Xã Dray Sáp',
    ),
    7883 => 
    array (
      0 => 7884,
      1 => 479,
      2 => 'Xã Ea Na',
    ),
    7884 => 
    array (
      0 => 7885,
      1 => 479,
      2 => 'Xã Ea Bông',
    ),
    7885 => 
    array (
      0 => 7886,
      1 => 479,
      2 => 'Xã Băng A Drênh',
    ),
    7886 => 
    array (
      0 => 7887,
      1 => 479,
      2 => 'Xã Dur KMăl',
    ),
    7887 => 
    array (
      0 => 7888,
      1 => 479,
      2 => 'Xã Bình Hòa',
    ),
    7888 => 
    array (
      0 => 7889,
      1 => 479,
      2 => 'Xã Quảng Điền',
    ),
    7889 => 
    array (
      0 => 7890,
      1 => 480,
      2 => 'Thị trấn Liên Sơn',
    ),
    7890 => 
    array (
      0 => 7891,
      1 => 480,
      2 => 'Xã Yang Tao',
    ),
    7891 => 
    array (
      0 => 7892,
      1 => 480,
      2 => 'Xã Bông Krang',
    ),
    7892 => 
    array (
      0 => 7893,
      1 => 480,
      2 => 'Xã Đắk Liêng',
    ),
    7893 => 
    array (
      0 => 7894,
      1 => 480,
      2 => 'Xã Buôn Triết',
    ),
    7894 => 
    array (
      0 => 7895,
      1 => 480,
      2 => 'Xã Buôn Tría',
    ),
    7895 => 
    array (
      0 => 7896,
      1 => 480,
      2 => 'Xã Đắk Phơi',
    ),
    7896 => 
    array (
      0 => 7897,
      1 => 480,
      2 => 'Xã Đắk Nuê',
    ),
    7897 => 
    array (
      0 => 7898,
      1 => 480,
      2 => 'Xã Krông Nô',
    ),
    7898 => 
    array (
      0 => 7899,
      1 => 480,
      2 => 'Xã Nam Ka',
    ),
    7899 => 
    array (
      0 => 7900,
      1 => 480,
      2 => 'Xã Ea R\'Bin',
    ),
    7900 => 
    array (
      0 => 7901,
      1 => 481,
      2 => 'Xã Ea Ning',
    ),
    7901 => 
    array (
      0 => 7902,
      1 => 481,
      2 => 'Xã Cư Ê Wi',
    ),
    7902 => 
    array (
      0 => 7903,
      1 => 481,
      2 => 'Xã Ea Ktur',
    ),
    7903 => 
    array (
      0 => 7904,
      1 => 481,
      2 => 'Xã Ea Tiêu',
    ),
    7904 => 
    array (
      0 => 7905,
      1 => 481,
      2 => 'Xã Ea BHốk',
    ),
    7905 => 
    array (
      0 => 7906,
      1 => 481,
      2 => 'Xã Ea Hu',
    ),
    7906 => 
    array (
      0 => 7907,
      1 => 481,
      2 => 'Xã Dray Bhăng',
    ),
    7907 => 
    array (
      0 => 7908,
      1 => 481,
      2 => 'Xã Hòa Hiệp',
    ),
    7908 => 
    array (
      0 => 7909,
      1 => 482,
      2 => 'Phường Nghĩa Đức',
    ),
    7909 => 
    array (
      0 => 7910,
      1 => 482,
      2 => 'Phường Nghĩa Thành',
    ),
    7910 => 
    array (
      0 => 7911,
      1 => 482,
      2 => 'Phường Nghĩa Phú',
    ),
    7911 => 
    array (
      0 => 7912,
      1 => 482,
      2 => 'Phường Nghĩa Tân',
    ),
    7912 => 
    array (
      0 => 7913,
      1 => 482,
      2 => 'Phường Nghĩa Trung',
    ),
    7913 => 
    array (
      0 => 7914,
      1 => 482,
      2 => 'Xã Đăk R\'Moan',
    ),
    7914 => 
    array (
      0 => 7915,
      1 => 482,
      2 => 'Phường Quảng Thành',
    ),
    7915 => 
    array (
      0 => 7916,
      1 => 482,
      2 => 'Xã Đắk Nia',
    ),
    7916 => 
    array (
      0 => 7917,
      1 => 483,
      2 => 'Xã Quảng Sơn',
    ),
    7917 => 
    array (
      0 => 7918,
      1 => 483,
      2 => 'Xã Quảng Hoà',
    ),
    7918 => 
    array (
      0 => 7919,
      1 => 483,
      2 => 'Xã Đắk Ha',
    ),
    7919 => 
    array (
      0 => 7920,
      1 => 483,
      2 => 'Xã Đắk R\'Măng',
    ),
    7920 => 
    array (
      0 => 7921,
      1 => 483,
      2 => 'Xã Quảng Khê',
    ),
    7921 => 
    array (
      0 => 7922,
      1 => 483,
      2 => 'Xã Đắk Plao',
    ),
    7922 => 
    array (
      0 => 7923,
      1 => 483,
      2 => 'Xã Đắk Som',
    ),
    7923 => 
    array (
      0 => 7924,
      1 => 484,
      2 => 'Thị trấn Ea T\'Ling',
    ),
    7924 => 
    array (
      0 => 7925,
      1 => 484,
      2 => 'Xã Đắk Wil',
    ),
    7925 => 
    array (
      0 => 7926,
      1 => 484,
      2 => 'Xã Ea Pô',
    ),
    7926 => 
    array (
      0 => 7927,
      1 => 484,
      2 => 'Xã Nam Dong',
    ),
    7927 => 
    array (
      0 => 7928,
      1 => 484,
      2 => 'Xã Đắk DRông',
    ),
    7928 => 
    array (
      0 => 7929,
      1 => 484,
      2 => 'Xã Tâm Thắng',
    ),
    7929 => 
    array (
      0 => 7930,
      1 => 484,
      2 => 'Xã Cư Knia',
    ),
    7930 => 
    array (
      0 => 7931,
      1 => 484,
      2 => 'Xã Trúc Sơn',
    ),
    7931 => 
    array (
      0 => 7932,
      1 => 485,
      2 => 'Thị trấn Đắk Mil',
    ),
    7932 => 
    array (
      0 => 7933,
      1 => 485,
      2 => 'Xã  Đắk Lao',
    ),
    7933 => 
    array (
      0 => 7934,
      1 => 485,
      2 => 'Xã Đắk R\'La',
    ),
    7934 => 
    array (
      0 => 7935,
      1 => 485,
      2 => 'Xã Đắk Gằn',
    ),
    7935 => 
    array (
      0 => 7936,
      1 => 485,
      2 => 'Xã Đức Mạnh',
    ),
    7936 => 
    array (
      0 => 7937,
      1 => 485,
      2 => 'Xã Đắk N\'Drót',
    ),
    7937 => 
    array (
      0 => 7938,
      1 => 485,
      2 => 'Xã Long Sơn',
    ),
    7938 => 
    array (
      0 => 7939,
      1 => 485,
      2 => 'Xã Đắk Sắk',
    ),
    7939 => 
    array (
      0 => 7940,
      1 => 485,
      2 => 'Xã Thuận An',
    ),
    7940 => 
    array (
      0 => 7941,
      1 => 485,
      2 => 'Xã Đức Minh',
    ),
    7941 => 
    array (
      0 => 7942,
      1 => 486,
      2 => 'Thị trấn Đắk Mâm',
    ),
    7942 => 
    array (
      0 => 7943,
      1 => 486,
      2 => 'Xã Đắk Sôr',
    ),
    7943 => 
    array (
      0 => 7944,
      1 => 486,
      2 => 'Xã Nam Xuân',
    ),
    7944 => 
    array (
      0 => 7945,
      1 => 486,
      2 => 'Xã Buôn Choah',
    ),
    7945 => 
    array (
      0 => 7946,
      1 => 486,
      2 => 'Xã Nam Đà',
    ),
    7946 => 
    array (
      0 => 7947,
      1 => 486,
      2 => 'Xã Tân Thành',
    ),
    7947 => 
    array (
      0 => 7948,
      1 => 486,
      2 => 'Xã Đắk Drô',
    ),
    7948 => 
    array (
      0 => 7949,
      1 => 486,
      2 => 'Xã Nâm Nung',
    ),
    7949 => 
    array (
      0 => 7950,
      1 => 486,
      2 => 'Xã Đức Xuyên',
    ),
    7950 => 
    array (
      0 => 7951,
      1 => 486,
      2 => 'Xã Đắk Nang',
    ),
    7951 => 
    array (
      0 => 7952,
      1 => 486,
      2 => 'Xã Quảng Phú',
    ),
    7952 => 
    array (
      0 => 7953,
      1 => 486,
      2 => 'Xã Nâm N\'Đir',
    ),
    7953 => 
    array (
      0 => 7954,
      1 => 487,
      2 => 'Thị trấn Đức An',
    ),
    7954 => 
    array (
      0 => 7955,
      1 => 487,
      2 => 'Xã Đắk Môl',
    ),
    7955 => 
    array (
      0 => 7956,
      1 => 487,
      2 => 'Xã Đắk Hòa',
    ),
    7956 => 
    array (
      0 => 7957,
      1 => 487,
      2 => 'Xã Nam Bình',
    ),
    7957 => 
    array (
      0 => 7958,
      1 => 487,
      2 => 'Xã Thuận Hà',
    ),
    7958 => 
    array (
      0 => 7959,
      1 => 487,
      2 => 'Xã Thuận Hạnh',
    ),
    7959 => 
    array (
      0 => 7960,
      1 => 487,
      2 => 'Xã Đắk N\'Dung',
    ),
    7960 => 
    array (
      0 => 7961,
      1 => 487,
      2 => 'Xã Nâm N\'Jang',
    ),
    7961 => 
    array (
      0 => 7962,
      1 => 487,
      2 => 'Xã Trường Xuân',
    ),
    7962 => 
    array (
      0 => 7963,
      1 => 488,
      2 => 'Thị trấn Kiến Đức',
    ),
    7963 => 
    array (
      0 => 7964,
      1 => 488,
      2 => 'Xã Quảng Tín',
    ),
    7964 => 
    array (
      0 => 7965,
      1 => 488,
      2 => 'Xã Đắk Wer',
    ),
    7965 => 
    array (
      0 => 7966,
      1 => 488,
      2 => 'Xã Nhân Cơ',
    ),
    7966 => 
    array (
      0 => 7967,
      1 => 488,
      2 => 'Xã Kiến Thành',
    ),
    7967 => 
    array (
      0 => 7968,
      1 => 488,
      2 => 'Xã Nghĩa Thắng',
    ),
    7968 => 
    array (
      0 => 7969,
      1 => 488,
      2 => 'Xã Đạo Nghĩa',
    ),
    7969 => 
    array (
      0 => 7970,
      1 => 488,
      2 => 'Xã Đắk Sin',
    ),
    7970 => 
    array (
      0 => 7971,
      1 => 488,
      2 => 'Xã Hưng Bình',
    ),
    7971 => 
    array (
      0 => 7972,
      1 => 488,
      2 => 'Xã Đắk Ru',
    ),
    7972 => 
    array (
      0 => 7973,
      1 => 488,
      2 => 'Xã Nhân Đạo',
    ),
    7973 => 
    array (
      0 => 7974,
      1 => 489,
      2 => 'Xã Quảng Trực',
    ),
    7974 => 
    array (
      0 => 7975,
      1 => 489,
      2 => 'Xã Đắk Búk So',
    ),
    7975 => 
    array (
      0 => 7976,
      1 => 489,
      2 => 'Xã Quảng Tâm',
    ),
    7976 => 
    array (
      0 => 7977,
      1 => 489,
      2 => 'Xã Đắk R\'Tíh',
    ),
    7977 => 
    array (
      0 => 7978,
      1 => 489,
      2 => 'Xã Đắk Ngo',
    ),
    7978 => 
    array (
      0 => 7979,
      1 => 489,
      2 => 'Xã Quảng Tân',
    ),
    7979 => 
    array (
      0 => 7980,
      1 => 490,
      2 => 'Phường 7',
    ),
    7980 => 
    array (
      0 => 7981,
      1 => 490,
      2 => 'Phường 8',
    ),
    7981 => 
    array (
      0 => 7982,
      1 => 490,
      2 => 'Phường 12',
    ),
    7982 => 
    array (
      0 => 7983,
      1 => 490,
      2 => 'Phường 9',
    ),
    7983 => 
    array (
      0 => 7984,
      1 => 490,
      2 => 'Phường 2',
    ),
    7984 => 
    array (
      0 => 7985,
      1 => 490,
      2 => 'Phường 1',
    ),
    7985 => 
    array (
      0 => 7986,
      1 => 490,
      2 => 'Phường 6',
    ),
    7986 => 
    array (
      0 => 7987,
      1 => 490,
      2 => 'Phường 5',
    ),
    7987 => 
    array (
      0 => 7988,
      1 => 490,
      2 => 'Phường 4',
    ),
    7988 => 
    array (
      0 => 7989,
      1 => 490,
      2 => 'Phường 10',
    ),
    7989 => 
    array (
      0 => 7990,
      1 => 490,
      2 => 'Phường 11',
    ),
    7990 => 
    array (
      0 => 7991,
      1 => 490,
      2 => 'Phường 3',
    ),
    7991 => 
    array (
      0 => 7992,
      1 => 490,
      2 => 'Xã Xuân Thọ',
    ),
    7992 => 
    array (
      0 => 7993,
      1 => 490,
      2 => 'Xã Tà Nung',
    ),
    7993 => 
    array (
      0 => 7994,
      1 => 490,
      2 => 'Xã Trạm Hành',
    ),
    7994 => 
    array (
      0 => 7995,
      1 => 490,
      2 => 'Xã Xuân Trường',
    ),
    7995 => 
    array (
      0 => 7996,
      1 => 491,
      2 => 'Phường Lộc Phát',
    ),
    7996 => 
    array (
      0 => 7997,
      1 => 491,
      2 => 'Phường Lộc Tiến',
    ),
    7997 => 
    array (
      0 => 7998,
      1 => 491,
      2 => 'Phường 2',
    ),
    7998 => 
    array (
      0 => 7999,
      1 => 491,
      2 => 'Phường 1',
    ),
    7999 => 
    array (
      0 => 8000,
      1 => 491,
      2 => 'Phường B\'lao',
    ),
    8000 => 
    array (
      0 => 8001,
      1 => 491,
      2 => 'Phường Lộc Sơn',
    ),
    8001 => 
    array (
      0 => 8002,
      1 => 491,
      2 => 'Xã Đạm Bri',
    ),
    8002 => 
    array (
      0 => 8003,
      1 => 491,
      2 => 'Xã Lộc Thanh',
    ),
    8003 => 
    array (
      0 => 8004,
      1 => 491,
      2 => 'Xã Lộc Nga',
    ),
    8004 => 
    array (
      0 => 8005,
      1 => 491,
      2 => 'Xã Lộc Châu',
    ),
    8005 => 
    array (
      0 => 8006,
      1 => 491,
      2 => 'Xã Đại Lào',
    ),
    8006 => 
    array (
      0 => 8007,
      1 => 492,
      2 => 'Xã Đạ Tông',
    ),
    8007 => 
    array (
      0 => 8008,
      1 => 492,
      2 => 'Xã Đạ Long',
    ),
    8008 => 
    array (
      0 => 8009,
      1 => 492,
      2 => 'Xã Đạ M\' Rong',
    ),
    8009 => 
    array (
      0 => 8010,
      1 => 492,
      2 => 'Xã Liêng Srônh',
    ),
    8010 => 
    array (
      0 => 8011,
      1 => 492,
      2 => 'Xã Đạ Rsal',
    ),
    8011 => 
    array (
      0 => 8012,
      1 => 492,
      2 => 'Xã Rô Men',
    ),
    8012 => 
    array (
      0 => 8013,
      1 => 492,
      2 => 'Xã Phi Liêng',
    ),
    8013 => 
    array (
      0 => 8014,
      1 => 492,
      2 => 'Xã Đạ K\' Nàng',
    ),
    8014 => 
    array (
      0 => 8015,
      1 => 493,
      2 => 'Thị trấn Lạc Dương',
    ),
    8015 => 
    array (
      0 => 8016,
      1 => 493,
      2 => 'Xã Đạ Chais',
    ),
    8016 => 
    array (
      0 => 8017,
      1 => 493,
      2 => 'Xã Đạ Nhim',
    ),
    8017 => 
    array (
      0 => 8018,
      1 => 493,
      2 => 'Xã Đưng KNớ',
    ),
    8018 => 
    array (
      0 => 8019,
      1 => 493,
      2 => 'Xã Lát',
    ),
    8019 => 
    array (
      0 => 8020,
      1 => 493,
      2 => 'Xã Đạ Sar',
    ),
    8020 => 
    array (
      0 => 8021,
      1 => 494,
      2 => 'Thị trấn Nam Ban',
    ),
    8021 => 
    array (
      0 => 8022,
      1 => 494,
      2 => 'Thị trấn Đinh Văn',
    ),
    8022 => 
    array (
      0 => 8023,
      1 => 494,
      2 => 'Xã Phú Sơn',
    ),
    8023 => 
    array (
      0 => 8024,
      1 => 494,
      2 => 'Xã Phi Tô',
    ),
    8024 => 
    array (
      0 => 8025,
      1 => 494,
      2 => 'Xã Mê Linh',
    ),
    8025 => 
    array (
      0 => 8026,
      1 => 494,
      2 => 'Xã Đạ Đờn',
    ),
    8026 => 
    array (
      0 => 8027,
      1 => 494,
      2 => 'Xã Phúc Thọ',
    ),
    8027 => 
    array (
      0 => 8028,
      1 => 494,
      2 => 'Xã Đông Thanh',
    ),
    8028 => 
    array (
      0 => 8029,
      1 => 494,
      2 => 'Xã Gia Lâm',
    ),
    8029 => 
    array (
      0 => 8030,
      1 => 494,
      2 => 'Xã Tân Thanh',
    ),
    8030 => 
    array (
      0 => 8031,
      1 => 494,
      2 => 'Xã Tân Văn',
    ),
    8031 => 
    array (
      0 => 8032,
      1 => 494,
      2 => 'Xã Hoài Đức',
    ),
    8032 => 
    array (
      0 => 8033,
      1 => 494,
      2 => 'Xã Tân Hà',
    ),
    8033 => 
    array (
      0 => 8034,
      1 => 494,
      2 => 'Xã Liên Hà',
    ),
    8034 => 
    array (
      0 => 8035,
      1 => 494,
      2 => 'Xã Đan Phượng',
    ),
    8035 => 
    array (
      0 => 8036,
      1 => 494,
      2 => 'Xã Nam Hà',
    ),
    8036 => 
    array (
      0 => 8037,
      1 => 495,
      2 => 'Thị trấn D\'Ran',
    ),
    8037 => 
    array (
      0 => 8038,
      1 => 495,
      2 => 'Thị trấn Thạnh Mỹ',
    ),
    8038 => 
    array (
      0 => 8039,
      1 => 495,
      2 => 'Xã Lạc Xuân',
    ),
    8039 => 
    array (
      0 => 8040,
      1 => 495,
      2 => 'Xã Đạ Ròn',
    ),
    8040 => 
    array (
      0 => 8041,
      1 => 495,
      2 => 'Xã Lạc Lâm',
    ),
    8041 => 
    array (
      0 => 8042,
      1 => 495,
      2 => 'Xã Ka Đô',
    ),
    8042 => 
    array (
      0 => 8043,
      1 => 495,
      2 => 'Xã Quảng Lập',
    ),
    8043 => 
    array (
      0 => 8044,
      1 => 495,
      2 => 'Xã Ka Đơn',
    ),
    8044 => 
    array (
      0 => 8045,
      1 => 495,
      2 => 'Xã Tu Tra',
    ),
    8045 => 
    array (
      0 => 8046,
      1 => 495,
      2 => 'Xã Pró',
    ),
    8046 => 
    array (
      0 => 8047,
      1 => 496,
      2 => 'Thị trấn Liên Nghĩa',
    ),
    8047 => 
    array (
      0 => 8048,
      1 => 496,
      2 => 'Xã Hiệp An',
    ),
    8048 => 
    array (
      0 => 8049,
      1 => 496,
      2 => 'Xã Liên Hiệp',
    ),
    8049 => 
    array (
      0 => 8050,
      1 => 496,
      2 => 'Xã Hiệp Thạnh',
    ),
    8050 => 
    array (
      0 => 8051,
      1 => 496,
      2 => 'Xã Bình Thạnh',
    ),
    8051 => 
    array (
      0 => 8052,
      1 => 496,
      2 => 'Xã N\'Thol Hạ',
    ),
    8052 => 
    array (
      0 => 8053,
      1 => 496,
      2 => 'Xã Tân Hội',
    ),
    8053 => 
    array (
      0 => 8054,
      1 => 496,
      2 => 'Xã Tân Thành',
    ),
    8054 => 
    array (
      0 => 8055,
      1 => 496,
      2 => 'Xã Phú Hội',
    ),
    8055 => 
    array (
      0 => 8056,
      1 => 496,
      2 => 'Xã Ninh Gia',
    ),
    8056 => 
    array (
      0 => 8057,
      1 => 496,
      2 => 'Xã Tà Năng',
    ),
    8057 => 
    array (
      0 => 8058,
      1 => 496,
      2 => 'Xã Đa Quyn',
    ),
    8058 => 
    array (
      0 => 8059,
      1 => 496,
      2 => 'Xã Tà Hine',
    ),
    8059 => 
    array (
      0 => 8060,
      1 => 496,
      2 => 'Xã Đà Loan',
    ),
    8060 => 
    array (
      0 => 8061,
      1 => 496,
      2 => 'Xã Ninh Loan',
    ),
    8061 => 
    array (
      0 => 8062,
      1 => 497,
      2 => 'Thị trấn Di Linh',
    ),
    8062 => 
    array (
      0 => 8063,
      1 => 497,
      2 => 'Xã Đinh Trang Thượng',
    ),
    8063 => 
    array (
      0 => 8064,
      1 => 497,
      2 => 'Xã Tân Thượng',
    ),
    8064 => 
    array (
      0 => 8065,
      1 => 497,
      2 => 'Xã Tân Lâm',
    ),
    8065 => 
    array (
      0 => 8066,
      1 => 497,
      2 => 'Xã Tân Châu',
    ),
    8066 => 
    array (
      0 => 8067,
      1 => 497,
      2 => 'Xã Tân Nghĩa',
    ),
    8067 => 
    array (
      0 => 8068,
      1 => 497,
      2 => 'Xã Gia Hiệp',
    ),
    8068 => 
    array (
      0 => 8069,
      1 => 497,
      2 => 'Xã Đinh Lạc',
    ),
    8069 => 
    array (
      0 => 8070,
      1 => 497,
      2 => 'Xã Tam Bố',
    ),
    8070 => 
    array (
      0 => 8071,
      1 => 497,
      2 => 'Xã Đinh Trang Hòa',
    ),
    8071 => 
    array (
      0 => 8072,
      1 => 497,
      2 => 'Xã Liên Đầm',
    ),
    8072 => 
    array (
      0 => 8073,
      1 => 497,
      2 => 'Xã Gung Ré',
    ),
    8073 => 
    array (
      0 => 8074,
      1 => 497,
      2 => 'Xã Bảo Thuận',
    ),
    8074 => 
    array (
      0 => 8075,
      1 => 497,
      2 => 'Xã Hòa Ninh',
    ),
    8075 => 
    array (
      0 => 8076,
      1 => 497,
      2 => 'Xã Hòa Trung',
    ),
    8076 => 
    array (
      0 => 8077,
      1 => 497,
      2 => 'Xã Hòa Nam',
    ),
    8077 => 
    array (
      0 => 8078,
      1 => 497,
      2 => 'Xã Hòa Bắc',
    ),
    8078 => 
    array (
      0 => 8079,
      1 => 497,
      2 => 'Xã Sơn Điền',
    ),
    8079 => 
    array (
      0 => 8080,
      1 => 497,
      2 => 'Xã Gia Bắc',
    ),
    8080 => 
    array (
      0 => 8081,
      1 => 498,
      2 => 'Thị trấn Lộc Thắng',
    ),
    8081 => 
    array (
      0 => 8082,
      1 => 498,
      2 => 'Xã Lộc Bảo',
    ),
    8082 => 
    array (
      0 => 8083,
      1 => 498,
      2 => 'Xã Lộc Lâm',
    ),
    8083 => 
    array (
      0 => 8084,
      1 => 498,
      2 => 'Xã Lộc Phú',
    ),
    8084 => 
    array (
      0 => 8085,
      1 => 498,
      2 => 'Xã Lộc Bắc',
    ),
    8085 => 
    array (
      0 => 8086,
      1 => 498,
      2 => 'Xã B\' Lá',
    ),
    8086 => 
    array (
      0 => 8087,
      1 => 498,
      2 => 'Xã Lộc Ngãi',
    ),
    8087 => 
    array (
      0 => 8088,
      1 => 498,
      2 => 'Xã Lộc Quảng',
    ),
    8088 => 
    array (
      0 => 8089,
      1 => 498,
      2 => 'Xã Lộc Tân',
    ),
    8089 => 
    array (
      0 => 8090,
      1 => 498,
      2 => 'Xã Lộc Đức',
    ),
    8090 => 
    array (
      0 => 8091,
      1 => 498,
      2 => 'Xã Lộc An',
    ),
    8091 => 
    array (
      0 => 8092,
      1 => 498,
      2 => 'Xã Tân Lạc',
    ),
    8092 => 
    array (
      0 => 8093,
      1 => 498,
      2 => 'Xã Lộc Thành',
    ),
    8093 => 
    array (
      0 => 8094,
      1 => 498,
      2 => 'Xã Lộc Nam',
    ),
    8094 => 
    array (
      0 => 8095,
      1 => 499,
      2 => 'Thị trấn Đạ M\'ri',
    ),
    8095 => 
    array (
      0 => 8096,
      1 => 499,
      2 => 'Thị trấn Ma Đa Guôi',
    ),
    8096 => 
    array (
      0 => 8097,
      1 => 499,
      2 => 'Xã Hà Lâm',
    ),
    8097 => 
    array (
      0 => 8098,
      1 => 499,
      2 => 'Xã Đạ Tồn',
    ),
    8098 => 
    array (
      0 => 8099,
      1 => 499,
      2 => 'Xã Đạ Oai',
    ),
    8099 => 
    array (
      0 => 8100,
      1 => 499,
      2 => 'Xã Đạ Ploa',
    ),
    8100 => 
    array (
      0 => 8101,
      1 => 499,
      2 => 'Xã Ma Đa Guôi',
    ),
    8101 => 
    array (
      0 => 8102,
      1 => 499,
      2 => 'Xã Đoàn Kết',
    ),
    8102 => 
    array (
      0 => 8103,
      1 => 499,
      2 => 'Xã Phước Lộc',
    ),
    8103 => 
    array (
      0 => 8104,
      1 => 500,
      2 => 'Thị trấn Đạ Tẻh',
    ),
    8104 => 
    array (
      0 => 8105,
      1 => 500,
      2 => 'Xã An Nhơn',
    ),
    8105 => 
    array (
      0 => 8106,
      1 => 500,
      2 => 'Xã Quốc Oai',
    ),
    8106 => 
    array (
      0 => 8107,
      1 => 500,
      2 => 'Xã Mỹ Đức',
    ),
    8107 => 
    array (
      0 => 8108,
      1 => 500,
      2 => 'Xã Quảng Trị',
    ),
    8108 => 
    array (
      0 => 8109,
      1 => 500,
      2 => 'Xã Đạ Lây',
    ),
    8109 => 
    array (
      0 => 8110,
      1 => 500,
      2 => 'Xã Triệu Hải',
    ),
    8110 => 
    array (
      0 => 8111,
      1 => 500,
      2 => 'Xã Đạ Kho',
    ),
    8111 => 
    array (
      0 => 8112,
      1 => 500,
      2 => 'Xã Đạ Pal',
    ),
    8112 => 
    array (
      0 => 8113,
      1 => 501,
      2 => 'Thị trấn Cát Tiên',
    ),
    8113 => 
    array (
      0 => 8114,
      1 => 501,
      2 => 'Xã Tiên Hoàng',
    ),
    8114 => 
    array (
      0 => 8115,
      1 => 501,
      2 => 'Xã Phước Cát 2',
    ),
    8115 => 
    array (
      0 => 8116,
      1 => 501,
      2 => 'Xã Gia Viễn',
    ),
    8116 => 
    array (
      0 => 8117,
      1 => 501,
      2 => 'Xã Nam Ninh',
    ),
    8117 => 
    array (
      0 => 8118,
      1 => 501,
      2 => 'Thị trấn Phước Cát',
    ),
    8118 => 
    array (
      0 => 8119,
      1 => 501,
      2 => 'Xã Đức Phổ',
    ),
    8119 => 
    array (
      0 => 8120,
      1 => 501,
      2 => 'Xã Quảng Ngãi',
    ),
    8120 => 
    array (
      0 => 8121,
      1 => 501,
      2 => 'Xã Đồng Nai Thượng',
    ),
    8121 => 
    array (
      0 => 8122,
      1 => 502,
      2 => 'Phường Thác Mơ',
    ),
    8122 => 
    array (
      0 => 8123,
      1 => 502,
      2 => 'Phường Long Thủy',
    ),
    8123 => 
    array (
      0 => 8124,
      1 => 502,
      2 => 'Phường Phước Bình',
    ),
    8124 => 
    array (
      0 => 8125,
      1 => 502,
      2 => 'Phường Long Phước',
    ),
    8125 => 
    array (
      0 => 8126,
      1 => 502,
      2 => 'Phường Sơn Giang',
    ),
    8126 => 
    array (
      0 => 8127,
      1 => 502,
      2 => 'Xã Long Giang',
    ),
    8127 => 
    array (
      0 => 8128,
      1 => 502,
      2 => 'Xã Phước Tín',
    ),
    8128 => 
    array (
      0 => 8129,
      1 => 503,
      2 => 'Phường Tân Phú',
    ),
    8129 => 
    array (
      0 => 8130,
      1 => 503,
      2 => 'Phường Tân Đồng',
    ),
    8130 => 
    array (
      0 => 8131,
      1 => 503,
      2 => 'Phường Tân Bình',
    ),
    8131 => 
    array (
      0 => 8132,
      1 => 503,
      2 => 'Phường Tân Xuân',
    ),
    8132 => 
    array (
      0 => 8133,
      1 => 503,
      2 => 'Phường Tân Thiện',
    ),
    8133 => 
    array (
      0 => 8134,
      1 => 503,
      2 => 'Xã Tân Thành',
    ),
    8134 => 
    array (
      0 => 8135,
      1 => 503,
      2 => 'Phường Tiến Thành',
    ),
    8135 => 
    array (
      0 => 8136,
      1 => 503,
      2 => 'Xã Tiến Hưng',
    ),
    8136 => 
    array (
      0 => 8137,
      1 => 504,
      2 => 'Phường Hưng Chiến',
    ),
    8137 => 
    array (
      0 => 8138,
      1 => 504,
      2 => 'Phường An Lộc',
    ),
    8138 => 
    array (
      0 => 8139,
      1 => 504,
      2 => 'Phường Phú Thịnh',
    ),
    8139 => 
    array (
      0 => 8140,
      1 => 504,
      2 => 'Phường Phú Đức',
    ),
    8140 => 
    array (
      0 => 8141,
      1 => 504,
      2 => 'Xã Thanh Lương',
    ),
    8141 => 
    array (
      0 => 8142,
      1 => 504,
      2 => 'Xã Thanh Phú',
    ),
    8142 => 
    array (
      0 => 8143,
      1 => 505,
      2 => 'Xã Bù Gia Mập',
    ),
    8143 => 
    array (
      0 => 8144,
      1 => 505,
      2 => 'Xã Đak Ơ',
    ),
    8144 => 
    array (
      0 => 8145,
      1 => 505,
      2 => 'Xã Đức Hạnh',
    ),
    8145 => 
    array (
      0 => 8146,
      1 => 505,
      2 => 'Xã Phú Văn',
    ),
    8146 => 
    array (
      0 => 8147,
      1 => 505,
      2 => 'Xã Đa Kia',
    ),
    8147 => 
    array (
      0 => 8148,
      1 => 505,
      2 => 'Xã Phước Minh',
    ),
    8148 => 
    array (
      0 => 8149,
      1 => 505,
      2 => 'Xã Bình Thắng',
    ),
    8149 => 
    array (
      0 => 8150,
      1 => 505,
      2 => 'Xã Phú Nghĩa',
    ),
    8150 => 
    array (
      0 => 8151,
      1 => 506,
      2 => 'Thị trấn Lộc Ninh',
    ),
    8151 => 
    array (
      0 => 8152,
      1 => 506,
      2 => 'Xã Lộc Hòa',
    ),
    8152 => 
    array (
      0 => 8153,
      1 => 506,
      2 => 'Xã Lộc An',
    ),
    8153 => 
    array (
      0 => 8154,
      1 => 506,
      2 => 'Xã Lộc Tấn',
    ),
    8154 => 
    array (
      0 => 8155,
      1 => 506,
      2 => 'Xã Lộc Thạnh',
    ),
    8155 => 
    array (
      0 => 8156,
      1 => 506,
      2 => 'Xã Lộc Hiệp',
    ),
    8156 => 
    array (
      0 => 8157,
      1 => 506,
      2 => 'Xã Lộc Thiện',
    ),
    8157 => 
    array (
      0 => 8158,
      1 => 506,
      2 => 'Xã Lộc Thuận',
    ),
    8158 => 
    array (
      0 => 8159,
      1 => 506,
      2 => 'Xã Lộc Quang',
    ),
    8159 => 
    array (
      0 => 8160,
      1 => 506,
      2 => 'Xã Lộc Phú',
    ),
    8160 => 
    array (
      0 => 8161,
      1 => 506,
      2 => 'Xã Lộc Thái',
    ),
    8161 => 
    array (
      0 => 8162,
      1 => 506,
      2 => 'Xã Lộc Điền',
    ),
    8162 => 
    array (
      0 => 8163,
      1 => 506,
      2 => 'Xã Lộc Hưng',
    ),
    8163 => 
    array (
      0 => 8164,
      1 => 506,
      2 => 'Xã Lộc Thịnh',
    ),
    8164 => 
    array (
      0 => 8165,
      1 => 506,
      2 => 'Xã Lộc Khánh',
    ),
    8165 => 
    array (
      0 => 8166,
      1 => 507,
      2 => 'Thị trấn Thanh Bình',
    ),
    8166 => 
    array (
      0 => 8167,
      1 => 507,
      2 => 'Xã Hưng Phước',
    ),
    8167 => 
    array (
      0 => 8168,
      1 => 507,
      2 => 'Xã Phước Thiện',
    ),
    8168 => 
    array (
      0 => 8169,
      1 => 507,
      2 => 'Xã Thiện Hưng',
    ),
    8169 => 
    array (
      0 => 8170,
      1 => 507,
      2 => 'Xã Thanh Hòa',
    ),
    8170 => 
    array (
      0 => 8171,
      1 => 507,
      2 => 'Xã Tân Thành',
    ),
    8171 => 
    array (
      0 => 8172,
      1 => 507,
      2 => 'Xã Tân Tiến',
    ),
    8172 => 
    array (
      0 => 8173,
      1 => 508,
      2 => 'Xã Thanh An',
    ),
    8173 => 
    array (
      0 => 8174,
      1 => 508,
      2 => 'Xã An Khương',
    ),
    8174 => 
    array (
      0 => 8175,
      1 => 508,
      2 => 'Xã An Phú',
    ),
    8175 => 
    array (
      0 => 8176,
      1 => 508,
      2 => 'Xã Tân Lợi',
    ),
    8176 => 
    array (
      0 => 8177,
      1 => 508,
      2 => 'Xã Tân Hưng',
    ),
    8177 => 
    array (
      0 => 8178,
      1 => 508,
      2 => 'Xã Minh Đức',
    ),
    8178 => 
    array (
      0 => 8179,
      1 => 508,
      2 => 'Xã Minh Tâm',
    ),
    8179 => 
    array (
      0 => 8180,
      1 => 508,
      2 => 'Xã Phước An',
    ),
    8180 => 
    array (
      0 => 8181,
      1 => 508,
      2 => 'Xã Thanh Bình',
    ),
    8181 => 
    array (
      0 => 8182,
      1 => 508,
      2 => 'Thị trấn Tân Khai',
    ),
    8182 => 
    array (
      0 => 8183,
      1 => 508,
      2 => 'Xã Đồng Nơ',
    ),
    8183 => 
    array (
      0 => 8184,
      1 => 508,
      2 => 'Xã Tân Hiệp',
    ),
    8184 => 
    array (
      0 => 8185,
      1 => 508,
      2 => 'Xã Tân Quan',
    ),
    8185 => 
    array (
      0 => 8186,
      1 => 509,
      2 => 'Thị trấn Tân Phú',
    ),
    8186 => 
    array (
      0 => 8187,
      1 => 509,
      2 => 'Xã Thuận Lợi',
    ),
    8187 => 
    array (
      0 => 8188,
      1 => 509,
      2 => 'Xã Đồng Tâm',
    ),
    8188 => 
    array (
      0 => 8189,
      1 => 509,
      2 => 'Xã Tân Phước',
    ),
    8189 => 
    array (
      0 => 8190,
      1 => 509,
      2 => 'Xã Tân Hưng',
    ),
    8190 => 
    array (
      0 => 8191,
      1 => 509,
      2 => 'Xã Tân Lợi',
    ),
    8191 => 
    array (
      0 => 8192,
      1 => 509,
      2 => 'Xã Tân Lập',
    ),
    8192 => 
    array (
      0 => 8193,
      1 => 509,
      2 => 'Xã Tân Hòa',
    ),
    8193 => 
    array (
      0 => 8194,
      1 => 509,
      2 => 'Xã Thuận Phú',
    ),
    8194 => 
    array (
      0 => 8195,
      1 => 509,
      2 => 'Xã Đồng Tiến',
    ),
    8195 => 
    array (
      0 => 8196,
      1 => 509,
      2 => 'Xã Tân Tiến',
    ),
    8196 => 
    array (
      0 => 8197,
      1 => 510,
      2 => 'Thị trấn Đức Phong',
    ),
    8197 => 
    array (
      0 => 8198,
      1 => 510,
      2 => 'Xã Đường 10',
    ),
    8198 => 
    array (
      0 => 8199,
      1 => 510,
      2 => 'Xã Đak Nhau',
    ),
    8199 => 
    array (
      0 => 8200,
      1 => 510,
      2 => 'Xã Phú Sơn',
    ),
    8200 => 
    array (
      0 => 8201,
      1 => 510,
      2 => 'Xã Thọ Sơn',
    ),
    8201 => 
    array (
      0 => 8202,
      1 => 510,
      2 => 'Xã Bình Minh',
    ),
    8202 => 
    array (
      0 => 8203,
      1 => 510,
      2 => 'Xã Bom Bo',
    ),
    8203 => 
    array (
      0 => 8204,
      1 => 510,
      2 => 'Xã Minh Hưng',
    ),
    8204 => 
    array (
      0 => 8205,
      1 => 510,
      2 => 'Xã Đoàn Kết',
    ),
    8205 => 
    array (
      0 => 8206,
      1 => 510,
      2 => 'Xã Đồng Nai',
    ),
    8206 => 
    array (
      0 => 8207,
      1 => 510,
      2 => 'Xã Đức Liễu',
    ),
    8207 => 
    array (
      0 => 8208,
      1 => 510,
      2 => 'Xã Thống Nhất',
    ),
    8208 => 
    array (
      0 => 8209,
      1 => 510,
      2 => 'Xã Nghĩa Trung',
    ),
    8209 => 
    array (
      0 => 8210,
      1 => 510,
      2 => 'Xã Nghĩa Bình',
    ),
    8210 => 
    array (
      0 => 8211,
      1 => 510,
      2 => 'Xã Đăng Hà',
    ),
    8211 => 
    array (
      0 => 8212,
      1 => 510,
      2 => 'Xã Phước Sơn',
    ),
    8212 => 
    array (
      0 => 8213,
      1 => 511,
      2 => 'Thị trấn Chơn Thành',
    ),
    8213 => 
    array (
      0 => 8214,
      1 => 511,
      2 => 'Xã Thành Tâm',
    ),
    8214 => 
    array (
      0 => 8215,
      1 => 511,
      2 => 'Xã Minh Lập',
    ),
    8215 => 
    array (
      0 => 8216,
      1 => 511,
      2 => 'Xã Quang Minh',
    ),
    8216 => 
    array (
      0 => 8217,
      1 => 511,
      2 => 'Xã Minh Hưng',
    ),
    8217 => 
    array (
      0 => 8218,
      1 => 511,
      2 => 'Xã Minh Long',
    ),
    8218 => 
    array (
      0 => 8219,
      1 => 511,
      2 => 'Xã Minh Thành',
    ),
    8219 => 
    array (
      0 => 8220,
      1 => 511,
      2 => 'Xã Nha Bích',
    ),
    8220 => 
    array (
      0 => 8221,
      1 => 511,
      2 => 'Xã Minh Thắng',
    ),
    8221 => 
    array (
      0 => 8222,
      1 => 512,
      2 => 'Xã Long Bình',
    ),
    8222 => 
    array (
      0 => 8223,
      1 => 512,
      2 => 'Xã Bình Tân',
    ),
    8223 => 
    array (
      0 => 8224,
      1 => 512,
      2 => 'Xã Bình Sơn',
    ),
    8224 => 
    array (
      0 => 8225,
      1 => 512,
      2 => 'Xã Long Hưng',
    ),
    8225 => 
    array (
      0 => 8226,
      1 => 512,
      2 => 'Xã Phước Tân',
    ),
    8226 => 
    array (
      0 => 8227,
      1 => 512,
      2 => 'Xã Bù Nho',
    ),
    8227 => 
    array (
      0 => 8228,
      1 => 512,
      2 => 'Xã Long Hà',
    ),
    8228 => 
    array (
      0 => 8229,
      1 => 512,
      2 => 'Xã Long Tân',
    ),
    8229 => 
    array (
      0 => 8230,
      1 => 512,
      2 => 'Xã Phú Trung',
    ),
    8230 => 
    array (
      0 => 8231,
      1 => 512,
      2 => 'Xã Phú Riềng',
    ),
    8231 => 
    array (
      0 => 8232,
      1 => 513,
      2 => 'Phường 1',
    ),
    8232 => 
    array (
      0 => 8233,
      1 => 513,
      2 => 'Phường 3',
    ),
    8233 => 
    array (
      0 => 8234,
      1 => 513,
      2 => 'Phường 4',
    ),
    8234 => 
    array (
      0 => 8235,
      1 => 513,
      2 => 'Phường Hiệp Ninh',
    ),
    8235 => 
    array (
      0 => 8236,
      1 => 513,
      2 => 'Phường 2',
    ),
    8236 => 
    array (
      0 => 8237,
      1 => 513,
      2 => 'Xã Thạnh Tân',
    ),
    8237 => 
    array (
      0 => 8238,
      1 => 513,
      2 => 'Xã Tân Bình',
    ),
    8238 => 
    array (
      0 => 8239,
      1 => 513,
      2 => 'Xã Bình Minh',
    ),
    8239 => 
    array (
      0 => 8240,
      1 => 513,
      2 => 'Phường Ninh Sơn',
    ),
    8240 => 
    array (
      0 => 8241,
      1 => 513,
      2 => 'Phường Ninh Thạnh',
    ),
    8241 => 
    array (
      0 => 8242,
      1 => 514,
      2 => 'Thị trấn Tân Biên',
    ),
    8242 => 
    array (
      0 => 8243,
      1 => 514,
      2 => 'Xã Tân Lập',
    ),
    8243 => 
    array (
      0 => 8244,
      1 => 514,
      2 => 'Xã Thạnh Bắc',
    ),
    8244 => 
    array (
      0 => 8245,
      1 => 514,
      2 => 'Xã Tân Bình',
    ),
    8245 => 
    array (
      0 => 8246,
      1 => 514,
      2 => 'Xã Thạnh Bình',
    ),
    8246 => 
    array (
      0 => 8247,
      1 => 514,
      2 => 'Xã Thạnh Tây',
    ),
    8247 => 
    array (
      0 => 8248,
      1 => 514,
      2 => 'Xã Hòa Hiệp',
    ),
    8248 => 
    array (
      0 => 8249,
      1 => 514,
      2 => 'Xã Tân Phong',
    ),
    8249 => 
    array (
      0 => 8250,
      1 => 514,
      2 => 'Xã Mỏ Công',
    ),
    8250 => 
    array (
      0 => 8251,
      1 => 514,
      2 => 'Xã Trà Vong',
    ),
    8251 => 
    array (
      0 => 8252,
      1 => 515,
      2 => 'Thị trấn Tân Châu',
    ),
    8252 => 
    array (
      0 => 8253,
      1 => 515,
      2 => 'Xã Tân Hà',
    ),
    8253 => 
    array (
      0 => 8254,
      1 => 515,
      2 => 'Xã Tân Đông',
    ),
    8254 => 
    array (
      0 => 8255,
      1 => 515,
      2 => 'Xã Tân Hội',
    ),
    8255 => 
    array (
      0 => 8256,
      1 => 515,
      2 => 'Xã Tân Hòa',
    ),
    8256 => 
    array (
      0 => 8257,
      1 => 515,
      2 => 'Xã Suối Ngô',
    ),
    8257 => 
    array (
      0 => 8258,
      1 => 515,
      2 => 'Xã Suối Dây',
    ),
    8258 => 
    array (
      0 => 8259,
      1 => 515,
      2 => 'Xã Tân Hiệp',
    ),
    8259 => 
    array (
      0 => 8260,
      1 => 515,
      2 => 'Xã Thạnh Đông',
    ),
    8260 => 
    array (
      0 => 8261,
      1 => 515,
      2 => 'Xã Tân Thành',
    ),
    8261 => 
    array (
      0 => 8262,
      1 => 515,
      2 => 'Xã Tân Phú',
    ),
    8262 => 
    array (
      0 => 8263,
      1 => 515,
      2 => 'Xã Tân Hưng',
    ),
    8263 => 
    array (
      0 => 8264,
      1 => 516,
      2 => 'Thị trấn Dương Minh Châu',
    ),
    8264 => 
    array (
      0 => 8265,
      1 => 516,
      2 => 'Xã Suối Đá',
    ),
    8265 => 
    array (
      0 => 8266,
      1 => 516,
      2 => 'Xã Phan',
    ),
    8266 => 
    array (
      0 => 8267,
      1 => 516,
      2 => 'Xã Phước Ninh',
    ),
    8267 => 
    array (
      0 => 8268,
      1 => 516,
      2 => 'Xã Phước Minh',
    ),
    8268 => 
    array (
      0 => 8269,
      1 => 516,
      2 => 'Xã Bàu Năng',
    ),
    8269 => 
    array (
      0 => 8270,
      1 => 516,
      2 => 'Xã Chà Là',
    ),
    8270 => 
    array (
      0 => 8271,
      1 => 516,
      2 => 'Xã Cầu Khởi',
    ),
    8271 => 
    array (
      0 => 8272,
      1 => 516,
      2 => 'Xã Bến Củi',
    ),
    8272 => 
    array (
      0 => 8273,
      1 => 516,
      2 => 'Xã Lộc Ninh',
    ),
    8273 => 
    array (
      0 => 8274,
      1 => 516,
      2 => 'Xã Truông Mít',
    ),
    8274 => 
    array (
      0 => 8275,
      1 => 517,
      2 => 'Thị trấn Châu Thành',
    ),
    8275 => 
    array (
      0 => 8276,
      1 => 517,
      2 => 'Xã Hảo Đước',
    ),
    8276 => 
    array (
      0 => 8277,
      1 => 517,
      2 => 'Xã Phước Vinh',
    ),
    8277 => 
    array (
      0 => 8278,
      1 => 517,
      2 => 'Xã Đồng Khởi',
    ),
    8278 => 
    array (
      0 => 8279,
      1 => 517,
      2 => 'Xã Thái Bình',
    ),
    8279 => 
    array (
      0 => 8280,
      1 => 517,
      2 => 'Xã An Cơ',
    ),
    8280 => 
    array (
      0 => 8281,
      1 => 517,
      2 => 'Xã Biên Giới',
    ),
    8281 => 
    array (
      0 => 8282,
      1 => 517,
      2 => 'Xã Hòa Thạnh',
    ),
    8282 => 
    array (
      0 => 8283,
      1 => 517,
      2 => 'Xã Trí Bình',
    ),
    8283 => 
    array (
      0 => 8284,
      1 => 517,
      2 => 'Xã Hòa Hội',
    ),
    8284 => 
    array (
      0 => 8285,
      1 => 517,
      2 => 'Xã An Bình',
    ),
    8285 => 
    array (
      0 => 8286,
      1 => 517,
      2 => 'Xã Thanh Điền',
    ),
    8286 => 
    array (
      0 => 8287,
      1 => 517,
      2 => 'Xã Thành Long',
    ),
    8287 => 
    array (
      0 => 8288,
      1 => 517,
      2 => 'Xã Ninh Điền',
    ),
    8288 => 
    array (
      0 => 8289,
      1 => 517,
      2 => 'Xã Long Vĩnh',
    ),
    8289 => 
    array (
      0 => 8290,
      1 => 518,
      2 => 'Phường Long Hoa',
    ),
    8290 => 
    array (
      0 => 8291,
      1 => 518,
      2 => 'Phường Hiệp Tân',
    ),
    8291 => 
    array (
      0 => 8292,
      1 => 518,
      2 => 'Phường Long Thành Bắc',
    ),
    8292 => 
    array (
      0 => 8293,
      1 => 518,
      2 => 'Xã Trường Hòa',
    ),
    8293 => 
    array (
      0 => 8294,
      1 => 518,
      2 => 'Xã Trường Đông',
    ),
    8294 => 
    array (
      0 => 8295,
      1 => 518,
      2 => 'Phường Long Thành Trung',
    ),
    8295 => 
    array (
      0 => 8296,
      1 => 518,
      2 => 'Xã Trường Tây',
    ),
    8296 => 
    array (
      0 => 8297,
      1 => 518,
      2 => 'Xã Long Thành Nam',
    ),
    8297 => 
    array (
      0 => 8298,
      1 => 519,
      2 => 'Thị trấn Gò Dầu',
    ),
    8298 => 
    array (
      0 => 8299,
      1 => 519,
      2 => 'Xã Thạnh Đức',
    ),
    8299 => 
    array (
      0 => 8300,
      1 => 519,
      2 => 'Xã Cẩm Giang',
    ),
    8300 => 
    array (
      0 => 8301,
      1 => 519,
      2 => 'Xã Hiệp Thạnh',
    ),
    8301 => 
    array (
      0 => 8302,
      1 => 519,
      2 => 'Xã Bàu Đồn',
    ),
    8302 => 
    array (
      0 => 8303,
      1 => 519,
      2 => 'Xã Phước Thạnh',
    ),
    8303 => 
    array (
      0 => 8304,
      1 => 519,
      2 => 'Xã Phước Đông',
    ),
    8304 => 
    array (
      0 => 8305,
      1 => 519,
      2 => 'Xã Phước Trạch',
    ),
    8305 => 
    array (
      0 => 8306,
      1 => 519,
      2 => 'Xã Thanh Phước',
    ),
    8306 => 
    array (
      0 => 8307,
      1 => 520,
      2 => 'Thị trấn Bến Cầu',
    ),
    8307 => 
    array (
      0 => 8308,
      1 => 520,
      2 => 'Xã Long Chữ',
    ),
    8308 => 
    array (
      0 => 8309,
      1 => 520,
      2 => 'Xã Long Phước',
    ),
    8309 => 
    array (
      0 => 8310,
      1 => 520,
      2 => 'Xã Long Giang',
    ),
    8310 => 
    array (
      0 => 8311,
      1 => 520,
      2 => 'Xã Tiên Thuận',
    ),
    8311 => 
    array (
      0 => 8312,
      1 => 520,
      2 => 'Xã Long Khánh',
    ),
    8312 => 
    array (
      0 => 8313,
      1 => 520,
      2 => 'Xã Lợi Thuận',
    ),
    8313 => 
    array (
      0 => 8314,
      1 => 520,
      2 => 'Xã Long Thuận',
    ),
    8314 => 
    array (
      0 => 8315,
      1 => 520,
      2 => 'Xã An Thạnh',
    ),
    8315 => 
    array (
      0 => 8316,
      1 => 521,
      2 => 'Phường Trảng Bàng',
    ),
    8316 => 
    array (
      0 => 8317,
      1 => 521,
      2 => 'Xã Đôn Thuận',
    ),
    8317 => 
    array (
      0 => 8318,
      1 => 521,
      2 => 'Xã Hưng Thuận',
    ),
    8318 => 
    array (
      0 => 8319,
      1 => 521,
      2 => 'Phường Lộc Hưng',
    ),
    8319 => 
    array (
      0 => 8320,
      1 => 521,
      2 => 'Phường Gia Lộc',
    ),
    8320 => 
    array (
      0 => 8321,
      1 => 521,
      2 => 'Phường Gia Bình',
    ),
    8321 => 
    array (
      0 => 8322,
      1 => 521,
      2 => 'Xã Phước Bình',
    ),
    8322 => 
    array (
      0 => 8323,
      1 => 521,
      2 => 'Phường An Tịnh',
    ),
    8323 => 
    array (
      0 => 8324,
      1 => 521,
      2 => 'Phường An Hòa',
    ),
    8324 => 
    array (
      0 => 8325,
      1 => 521,
      2 => 'Xã Phước Chỉ',
    ),
    8325 => 
    array (
      0 => 8326,
      1 => 522,
      2 => 'Phường Hiệp Thành',
    ),
    8326 => 
    array (
      0 => 8327,
      1 => 522,
      2 => 'Phường Phú Lợi',
    ),
    8327 => 
    array (
      0 => 8328,
      1 => 522,
      2 => 'Phường Phú Cường',
    ),
    8328 => 
    array (
      0 => 8329,
      1 => 522,
      2 => 'Phường Phú Hòa',
    ),
    8329 => 
    array (
      0 => 8330,
      1 => 522,
      2 => 'Phường Phú Thọ',
    ),
    8330 => 
    array (
      0 => 8331,
      1 => 522,
      2 => 'Phường Chánh Nghĩa',
    ),
    8331 => 
    array (
      0 => 8332,
      1 => 522,
      2 => 'Phường Định Hoà',
    ),
    8332 => 
    array (
      0 => 8333,
      1 => 522,
      2 => 'Phường Hoà Phú',
    ),
    8333 => 
    array (
      0 => 8334,
      1 => 522,
      2 => 'Phường Phú Mỹ',
    ),
    8334 => 
    array (
      0 => 8335,
      1 => 522,
      2 => 'Phường Phú Tân',
    ),
    8335 => 
    array (
      0 => 8336,
      1 => 522,
      2 => 'Phường Tân An',
    ),
    8336 => 
    array (
      0 => 8337,
      1 => 522,
      2 => 'Phường Hiệp An',
    ),
    8337 => 
    array (
      0 => 8338,
      1 => 522,
      2 => 'Phường Tương Bình Hiệp',
    ),
    8338 => 
    array (
      0 => 8339,
      1 => 522,
      2 => 'Phường Chánh Mỹ',
    ),
    8339 => 
    array (
      0 => 8340,
      1 => 523,
      2 => 'Xã Trừ Văn Thố',
    ),
    8340 => 
    array (
      0 => 8341,
      1 => 523,
      2 => 'Xã Cây Trường II',
    ),
    8341 => 
    array (
      0 => 8342,
      1 => 523,
      2 => 'Thị trấn Lai Uyên',
    ),
    8342 => 
    array (
      0 => 8343,
      1 => 523,
      2 => 'Xã Tân Hưng',
    ),
    8343 => 
    array (
      0 => 8344,
      1 => 523,
      2 => 'Xã Long Nguyên',
    ),
    8344 => 
    array (
      0 => 8345,
      1 => 523,
      2 => 'Xã Hưng Hòa',
    ),
    8345 => 
    array (
      0 => 8346,
      1 => 523,
      2 => 'Xã Lai Hưng',
    ),
    8346 => 
    array (
      0 => 8347,
      1 => 524,
      2 => 'Thị trấn Dầu Tiếng',
    ),
    8347 => 
    array (
      0 => 8348,
      1 => 524,
      2 => 'Xã Minh Hoà',
    ),
    8348 => 
    array (
      0 => 8349,
      1 => 524,
      2 => 'Xã Minh Thạnh',
    ),
    8349 => 
    array (
      0 => 8350,
      1 => 524,
      2 => 'Xã Minh Tân',
    ),
    8350 => 
    array (
      0 => 8351,
      1 => 524,
      2 => 'Xã Định An',
    ),
    8351 => 
    array (
      0 => 8352,
      1 => 524,
      2 => 'Xã Long Hoà',
    ),
    8352 => 
    array (
      0 => 8353,
      1 => 524,
      2 => 'Xã Định Thành',
    ),
    8353 => 
    array (
      0 => 8354,
      1 => 524,
      2 => 'Xã Định Hiệp',
    ),
    8354 => 
    array (
      0 => 8355,
      1 => 524,
      2 => 'Xã An Lập',
    ),
    8355 => 
    array (
      0 => 8356,
      1 => 524,
      2 => 'Xã Long Tân',
    ),
    8356 => 
    array (
      0 => 8357,
      1 => 524,
      2 => 'Xã Thanh An',
    ),
    8357 => 
    array (
      0 => 8358,
      1 => 524,
      2 => 'Xã Thanh Tuyền',
    ),
    8358 => 
    array (
      0 => 8359,
      1 => 525,
      2 => 'Phường Mỹ Phước',
    ),
    8359 => 
    array (
      0 => 8360,
      1 => 525,
      2 => 'Phường Chánh Phú Hòa',
    ),
    8360 => 
    array (
      0 => 8361,
      1 => 525,
      2 => 'Xã An Điền',
    ),
    8361 => 
    array (
      0 => 8362,
      1 => 525,
      2 => 'Xã An Tây',
    ),
    8362 => 
    array (
      0 => 8363,
      1 => 525,
      2 => 'Phường Thới Hòa',
    ),
    8363 => 
    array (
      0 => 8364,
      1 => 525,
      2 => 'Phường Hòa Lợi',
    ),
    8364 => 
    array (
      0 => 8365,
      1 => 525,
      2 => 'Phường Tân Định',
    ),
    8365 => 
    array (
      0 => 8366,
      1 => 525,
      2 => 'Xã Phú An',
    ),
    8366 => 
    array (
      0 => 8367,
      1 => 526,
      2 => 'Thị trấn Phước Vĩnh',
    ),
    8367 => 
    array (
      0 => 8368,
      1 => 526,
      2 => 'Xã An Linh',
    ),
    8368 => 
    array (
      0 => 8369,
      1 => 526,
      2 => 'Xã Phước Sang',
    ),
    8369 => 
    array (
      0 => 8370,
      1 => 526,
      2 => 'Xã An Thái',
    ),
    8370 => 
    array (
      0 => 8371,
      1 => 526,
      2 => 'Xã An Long',
    ),
    8371 => 
    array (
      0 => 8372,
      1 => 526,
      2 => 'Xã An Bình',
    ),
    8372 => 
    array (
      0 => 8373,
      1 => 526,
      2 => 'Xã Tân Hiệp',
    ),
    8373 => 
    array (
      0 => 8374,
      1 => 526,
      2 => 'Xã Tam Lập',
    ),
    8374 => 
    array (
      0 => 8375,
      1 => 526,
      2 => 'Xã Tân Long',
    ),
    8375 => 
    array (
      0 => 8376,
      1 => 526,
      2 => 'Xã Vĩnh Hoà',
    ),
    8376 => 
    array (
      0 => 8377,
      1 => 526,
      2 => 'Xã Phước Hoà',
    ),
    8377 => 
    array (
      0 => 8378,
      1 => 527,
      2 => 'Phường Uyên Hưng',
    ),
    8378 => 
    array (
      0 => 8379,
      1 => 527,
      2 => 'Phường Tân Phước Khánh',
    ),
    8379 => 
    array (
      0 => 8380,
      1 => 527,
      2 => 'Phường Vĩnh Tân',
    ),
    8380 => 
    array (
      0 => 8381,
      1 => 527,
      2 => 'Phường Hội Nghĩa',
    ),
    8381 => 
    array (
      0 => 8382,
      1 => 527,
      2 => 'Phường Tân Hiệp',
    ),
    8382 => 
    array (
      0 => 8383,
      1 => 527,
      2 => 'Phường Khánh Bình',
    ),
    8383 => 
    array (
      0 => 8384,
      1 => 527,
      2 => 'Phường Phú Chánh',
    ),
    8384 => 
    array (
      0 => 8385,
      1 => 527,
      2 => 'Xã Bạch Đằng',
    ),
    8385 => 
    array (
      0 => 8386,
      1 => 527,
      2 => 'Phường Tân Vĩnh Hiệp',
    ),
    8386 => 
    array (
      0 => 8387,
      1 => 527,
      2 => 'Phường Thạnh Phước',
    ),
    8387 => 
    array (
      0 => 8388,
      1 => 527,
      2 => 'Xã Thạnh Hội',
    ),
    8388 => 
    array (
      0 => 8389,
      1 => 527,
      2 => 'Phường Thái Hòa',
    ),
    8389 => 
    array (
      0 => 8390,
      1 => 528,
      2 => 'Phường Dĩ An',
    ),
    8390 => 
    array (
      0 => 8391,
      1 => 528,
      2 => 'Phường Tân Bình',
    ),
    8391 => 
    array (
      0 => 8392,
      1 => 528,
      2 => 'Phường Tân Đông Hiệp',
    ),
    8392 => 
    array (
      0 => 8393,
      1 => 528,
      2 => 'Phường Bình An',
    ),
    8393 => 
    array (
      0 => 8394,
      1 => 528,
      2 => 'Phường Bình Thắng',
    ),
    8394 => 
    array (
      0 => 8395,
      1 => 528,
      2 => 'Phường Đông Hòa',
    ),
    8395 => 
    array (
      0 => 8396,
      1 => 528,
      2 => 'Phường An Bình',
    ),
    8396 => 
    array (
      0 => 8397,
      1 => 529,
      2 => 'Phường An Thạnh',
    ),
    8397 => 
    array (
      0 => 8398,
      1 => 529,
      2 => 'Phường Lái Thiêu',
    ),
    8398 => 
    array (
      0 => 8399,
      1 => 529,
      2 => 'Phường Bình Chuẩn',
    ),
    8399 => 
    array (
      0 => 8400,
      1 => 529,
      2 => 'Phường Thuận Giao',
    ),
    8400 => 
    array (
      0 => 8401,
      1 => 529,
      2 => 'Phường An Phú',
    ),
    8401 => 
    array (
      0 => 8402,
      1 => 529,
      2 => 'Phường Hưng Định',
    ),
    8402 => 
    array (
      0 => 8403,
      1 => 529,
      2 => 'Xã An Sơn',
    ),
    8403 => 
    array (
      0 => 8404,
      1 => 529,
      2 => 'Phường Bình Nhâm',
    ),
    8404 => 
    array (
      0 => 8405,
      1 => 529,
      2 => 'Phường Bình Hòa',
    ),
    8405 => 
    array (
      0 => 8406,
      1 => 529,
      2 => 'Phường Vĩnh Phú',
    ),
    8406 => 
    array (
      0 => 8407,
      1 => 530,
      2 => 'Xã Tân Định',
    ),
    8407 => 
    array (
      0 => 8408,
      1 => 530,
      2 => 'Xã Bình Mỹ',
    ),
    8408 => 
    array (
      0 => 8409,
      1 => 530,
      2 => 'Thị trấn Tân Bình',
    ),
    8409 => 
    array (
      0 => 8410,
      1 => 530,
      2 => 'Xã Tân Lập',
    ),
    8410 => 
    array (
      0 => 8411,
      1 => 530,
      2 => 'Thị trấn Tân Thành',
    ),
    8411 => 
    array (
      0 => 8412,
      1 => 530,
      2 => 'Xã Đất Cuốc',
    ),
    8412 => 
    array (
      0 => 8413,
      1 => 530,
      2 => 'Xã Hiếu Liêm',
    ),
    8413 => 
    array (
      0 => 8414,
      1 => 530,
      2 => 'Xã Lạc An',
    ),
    8414 => 
    array (
      0 => 8415,
      1 => 530,
      2 => 'Xã Tân Mỹ',
    ),
    8415 => 
    array (
      0 => 8416,
      1 => 530,
      2 => 'Xã Thường Tân',
    ),
    8416 => 
    array (
      0 => 8417,
      1 => 531,
      2 => 'Phường Trảng Dài',
    ),
    8417 => 
    array (
      0 => 8418,
      1 => 531,
      2 => 'Phường Tân Phong',
    ),
    8418 => 
    array (
      0 => 8419,
      1 => 531,
      2 => 'Phường Tân Biên',
    ),
    8419 => 
    array (
      0 => 8420,
      1 => 531,
      2 => 'Phường Hố Nai',
    ),
    8420 => 
    array (
      0 => 8421,
      1 => 531,
      2 => 'Phường Tân Hòa',
    ),
    8421 => 
    array (
      0 => 8422,
      1 => 531,
      2 => 'Phường Tân Hiệp',
    ),
    8422 => 
    array (
      0 => 8423,
      1 => 531,
      2 => 'Phường Bửu Long',
    ),
    8423 => 
    array (
      0 => 8424,
      1 => 531,
      2 => 'Phường Tân Tiến',
    ),
    8424 => 
    array (
      0 => 8425,
      1 => 531,
      2 => 'Phường Tam Hiệp',
    ),
    8425 => 
    array (
      0 => 8426,
      1 => 531,
      2 => 'Phường Long Bình',
    ),
    8426 => 
    array (
      0 => 8427,
      1 => 531,
      2 => 'Phường Quang Vinh',
    ),
    8427 => 
    array (
      0 => 8428,
      1 => 531,
      2 => 'Phường Tân Mai',
    ),
    8428 => 
    array (
      0 => 8429,
      1 => 531,
      2 => 'Phường Thống Nhất',
    ),
    8429 => 
    array (
      0 => 8430,
      1 => 531,
      2 => 'Phường Trung Dũng',
    ),
    8430 => 
    array (
      0 => 8431,
      1 => 531,
      2 => 'Phường Tam Hòa',
    ),
    8431 => 
    array (
      0 => 8432,
      1 => 531,
      2 => 'Phường Hòa Bình',
    ),
    8432 => 
    array (
      0 => 8433,
      1 => 531,
      2 => 'Phường Quyết Thắng',
    ),
    8433 => 
    array (
      0 => 8434,
      1 => 531,
      2 => 'Phường Thanh Bình',
    ),
    8434 => 
    array (
      0 => 8435,
      1 => 531,
      2 => 'Phường Bình Đa',
    ),
    8435 => 
    array (
      0 => 8436,
      1 => 531,
      2 => 'Phường An Bình',
    ),
    8436 => 
    array (
      0 => 8437,
      1 => 531,
      2 => 'Phường Bửu Hòa',
    ),
    8437 => 
    array (
      0 => 8438,
      1 => 531,
      2 => 'Phường Long Bình Tân',
    ),
    8438 => 
    array (
      0 => 8439,
      1 => 531,
      2 => 'Phường Tân Vạn',
    ),
    8439 => 
    array (
      0 => 8440,
      1 => 531,
      2 => 'Phường Tân Hạnh',
    ),
    8440 => 
    array (
      0 => 8441,
      1 => 531,
      2 => 'Phường Hiệp Hòa',
    ),
    8441 => 
    array (
      0 => 8442,
      1 => 531,
      2 => 'Phường Hóa An',
    ),
    8442 => 
    array (
      0 => 8443,
      1 => 531,
      2 => 'Phường An Hòa',
    ),
    8443 => 
    array (
      0 => 8444,
      1 => 531,
      2 => 'Phường Tam Phước',
    ),
    8444 => 
    array (
      0 => 8445,
      1 => 531,
      2 => 'Phường Phước Tân',
    ),
    8445 => 
    array (
      0 => 8446,
      1 => 531,
      2 => 'Xã Long Hưng',
    ),
    8446 => 
    array (
      0 => 8447,
      1 => 532,
      2 => 'Phường Xuân Trung',
    ),
    8447 => 
    array (
      0 => 8448,
      1 => 532,
      2 => 'Phường Xuân Thanh',
    ),
    8448 => 
    array (
      0 => 8449,
      1 => 532,
      2 => 'Phường Xuân Bình',
    ),
    8449 => 
    array (
      0 => 8450,
      1 => 532,
      2 => 'Phường Xuân An',
    ),
    8450 => 
    array (
      0 => 8451,
      1 => 532,
      2 => 'Phường Xuân Hoà',
    ),
    8451 => 
    array (
      0 => 8452,
      1 => 532,
      2 => 'Phường Phú Bình',
    ),
    8452 => 
    array (
      0 => 8453,
      1 => 532,
      2 => 'Xã Bình Lộc',
    ),
    8453 => 
    array (
      0 => 8454,
      1 => 532,
      2 => 'Xã Bảo Quang',
    ),
    8454 => 
    array (
      0 => 8455,
      1 => 532,
      2 => 'Phường Suối Tre',
    ),
    8455 => 
    array (
      0 => 8456,
      1 => 532,
      2 => 'Phường Bảo Vinh',
    ),
    8456 => 
    array (
      0 => 8457,
      1 => 532,
      2 => 'Phường Xuân Lập',
    ),
    8457 => 
    array (
      0 => 8458,
      1 => 532,
      2 => 'Phường Bàu Sen',
    ),
    8458 => 
    array (
      0 => 8459,
      1 => 532,
      2 => 'Xã Bàu Trâm',
    ),
    8459 => 
    array (
      0 => 8460,
      1 => 532,
      2 => 'Phường Xuân Tân',
    ),
    8460 => 
    array (
      0 => 8461,
      1 => 532,
      2 => 'Xã Hàng Gòn',
    ),
    8461 => 
    array (
      0 => 8462,
      1 => 533,
      2 => 'Thị trấn Tân Phú',
    ),
    8462 => 
    array (
      0 => 8463,
      1 => 533,
      2 => 'Xã Dak Lua',
    ),
    8463 => 
    array (
      0 => 8464,
      1 => 533,
      2 => 'Xã Nam Cát Tiên',
    ),
    8464 => 
    array (
      0 => 8465,
      1 => 533,
      2 => 'Xã Phú An',
    ),
    8465 => 
    array (
      0 => 8466,
      1 => 533,
      2 => 'Xã Núi Tượng',
    ),
    8466 => 
    array (
      0 => 8467,
      1 => 533,
      2 => 'Xã Tà Lài',
    ),
    8467 => 
    array (
      0 => 8468,
      1 => 533,
      2 => 'Xã Phú Lập',
    ),
    8468 => 
    array (
      0 => 8469,
      1 => 533,
      2 => 'Xã Phú Sơn',
    ),
    8469 => 
    array (
      0 => 8470,
      1 => 533,
      2 => 'Xã Phú Thịnh',
    ),
    8470 => 
    array (
      0 => 8471,
      1 => 533,
      2 => 'Xã Thanh Sơn',
    ),
    8471 => 
    array (
      0 => 8472,
      1 => 533,
      2 => 'Xã Phú Trung',
    ),
    8472 => 
    array (
      0 => 8473,
      1 => 533,
      2 => 'Xã Phú Xuân',
    ),
    8473 => 
    array (
      0 => 8474,
      1 => 533,
      2 => 'Xã Phú Lộc',
    ),
    8474 => 
    array (
      0 => 8475,
      1 => 533,
      2 => 'Xã Phú Lâm',
    ),
    8475 => 
    array (
      0 => 8476,
      1 => 533,
      2 => 'Xã Phú Bình',
    ),
    8476 => 
    array (
      0 => 8477,
      1 => 533,
      2 => 'Xã Phú Thanh',
    ),
    8477 => 
    array (
      0 => 8478,
      1 => 533,
      2 => 'Xã Trà Cổ',
    ),
    8478 => 
    array (
      0 => 8479,
      1 => 533,
      2 => 'Xã Phú Điền',
    ),
    8479 => 
    array (
      0 => 8480,
      1 => 534,
      2 => 'Thị trấn Vĩnh An',
    ),
    8480 => 
    array (
      0 => 8481,
      1 => 534,
      2 => 'Xã Phú Lý',
    ),
    8481 => 
    array (
      0 => 8482,
      1 => 534,
      2 => 'Xã Trị An',
    ),
    8482 => 
    array (
      0 => 8483,
      1 => 534,
      2 => 'Xã Tân An',
    ),
    8483 => 
    array (
      0 => 8484,
      1 => 534,
      2 => 'Xã Vĩnh Tân',
    ),
    8484 => 
    array (
      0 => 8485,
      1 => 534,
      2 => 'Xã Bình Lợi',
    ),
    8485 => 
    array (
      0 => 8486,
      1 => 534,
      2 => 'Xã Thạnh Phú',
    ),
    8486 => 
    array (
      0 => 8487,
      1 => 534,
      2 => 'Xã Thiện Tân',
    ),
    8487 => 
    array (
      0 => 8488,
      1 => 534,
      2 => 'Xã Tân Bình',
    ),
    8488 => 
    array (
      0 => 8489,
      1 => 534,
      2 => 'Xã Bình Hòa',
    ),
    8489 => 
    array (
      0 => 8490,
      1 => 534,
      2 => 'Xã Mã Đà',
    ),
    8490 => 
    array (
      0 => 8491,
      1 => 534,
      2 => 'Xã Hiếu Liêm',
    ),
    8491 => 
    array (
      0 => 8492,
      1 => 535,
      2 => 'Thị trấn Định Quán',
    ),
    8492 => 
    array (
      0 => 8493,
      1 => 535,
      2 => 'Xã Thanh Sơn',
    ),
    8493 => 
    array (
      0 => 8494,
      1 => 535,
      2 => 'Xã Phú Tân',
    ),
    8494 => 
    array (
      0 => 8495,
      1 => 535,
      2 => 'Xã Phú Vinh',
    ),
    8495 => 
    array (
      0 => 8496,
      1 => 535,
      2 => 'Xã Phú Lợi',
    ),
    8496 => 
    array (
      0 => 8497,
      1 => 535,
      2 => 'Xã Phú Hòa',
    ),
    8497 => 
    array (
      0 => 8498,
      1 => 535,
      2 => 'Xã Ngọc Định',
    ),
    8498 => 
    array (
      0 => 8499,
      1 => 535,
      2 => 'Xã La Ngà',
    ),
    8499 => 
    array (
      0 => 8500,
      1 => 535,
      2 => 'Xã Gia Canh',
    ),
    8500 => 
    array (
      0 => 8501,
      1 => 535,
      2 => 'Xã Phú Ngọc',
    ),
    8501 => 
    array (
      0 => 8502,
      1 => 535,
      2 => 'Xã Phú Cường',
    ),
    8502 => 
    array (
      0 => 8503,
      1 => 535,
      2 => 'Xã Túc Trưng',
    ),
    8503 => 
    array (
      0 => 8504,
      1 => 535,
      2 => 'Xã Phú Túc',
    ),
    8504 => 
    array (
      0 => 8505,
      1 => 535,
      2 => 'Xã Suối Nho',
    ),
    8505 => 
    array (
      0 => 8506,
      1 => 536,
      2 => 'Thị trấn Trảng Bom',
    ),
    8506 => 
    array (
      0 => 8507,
      1 => 536,
      2 => 'Xã Thanh Bình',
    ),
    8507 => 
    array (
      0 => 8508,
      1 => 536,
      2 => 'Xã Cây Gáo',
    ),
    8508 => 
    array (
      0 => 8509,
      1 => 536,
      2 => 'Xã Bàu Hàm',
    ),
    8509 => 
    array (
      0 => 8510,
      1 => 536,
      2 => 'Xã Sông Thao',
    ),
    8510 => 
    array (
      0 => 8511,
      1 => 536,
      2 => 'Xã Sông Trầu',
    ),
    8511 => 
    array (
      0 => 8512,
      1 => 536,
      2 => 'Xã Đông Hoà',
    ),
    8512 => 
    array (
      0 => 8513,
      1 => 536,
      2 => 'Xã Bắc Sơn',
    ),
    8513 => 
    array (
      0 => 8514,
      1 => 536,
      2 => 'Xã Hố Nai 3',
    ),
    8514 => 
    array (
      0 => 8515,
      1 => 536,
      2 => 'Xã Tây Hoà',
    ),
    8515 => 
    array (
      0 => 8516,
      1 => 536,
      2 => 'Xã Bình Minh',
    ),
    8516 => 
    array (
      0 => 8517,
      1 => 536,
      2 => 'Xã Trung Hoà',
    ),
    8517 => 
    array (
      0 => 8518,
      1 => 536,
      2 => 'Xã Đồi 61',
    ),
    8518 => 
    array (
      0 => 8519,
      1 => 536,
      2 => 'Xã Hưng Thịnh',
    ),
    8519 => 
    array (
      0 => 8520,
      1 => 536,
      2 => 'Xã Quảng Tiến',
    ),
    8520 => 
    array (
      0 => 8521,
      1 => 536,
      2 => 'Xã Giang Điền',
    ),
    8521 => 
    array (
      0 => 8522,
      1 => 536,
      2 => 'Xã An Viễn',
    ),
    8522 => 
    array (
      0 => 8523,
      1 => 537,
      2 => 'Xã Gia Tân 1',
    ),
    8523 => 
    array (
      0 => 8524,
      1 => 537,
      2 => 'Xã Gia Tân 2',
    ),
    8524 => 
    array (
      0 => 8525,
      1 => 537,
      2 => 'Xã Gia Tân 3',
    ),
    8525 => 
    array (
      0 => 8526,
      1 => 537,
      2 => 'Xã Gia Kiệm',
    ),
    8526 => 
    array (
      0 => 8527,
      1 => 537,
      2 => 'Xã Quang Trung',
    ),
    8527 => 
    array (
      0 => 8528,
      1 => 537,
      2 => 'Xã Bàu Hàm 2',
    ),
    8528 => 
    array (
      0 => 8529,
      1 => 537,
      2 => 'Xã Hưng Lộc',
    ),
    8529 => 
    array (
      0 => 8530,
      1 => 537,
      2 => 'Xã Lộ 25',
    ),
    8530 => 
    array (
      0 => 8531,
      1 => 537,
      2 => 'Xã Xuân Thiện',
    ),
    8531 => 
    array (
      0 => 8532,
      1 => 537,
      2 => 'Thị trấn Dầu Giây',
    ),
    8532 => 
    array (
      0 => 8533,
      1 => 538,
      2 => 'Xã Sông Nhạn',
    ),
    8533 => 
    array (
      0 => 8534,
      1 => 538,
      2 => 'Xã Xuân Quế',
    ),
    8534 => 
    array (
      0 => 8535,
      1 => 538,
      2 => 'Xã Nhân Nghĩa',
    ),
    8535 => 
    array (
      0 => 8536,
      1 => 538,
      2 => 'Xã Xuân Đường',
    ),
    8536 => 
    array (
      0 => 8537,
      1 => 538,
      2 => 'Thị trấn Long Giao',
    ),
    8537 => 
    array (
      0 => 8538,
      1 => 538,
      2 => 'Xã Xuân Mỹ',
    ),
    8538 => 
    array (
      0 => 8539,
      1 => 538,
      2 => 'Xã Thừa Đức',
    ),
    8539 => 
    array (
      0 => 8540,
      1 => 538,
      2 => 'Xã Bảo Bình',
    ),
    8540 => 
    array (
      0 => 8541,
      1 => 538,
      2 => 'Xã Xuân Bảo',
    ),
    8541 => 
    array (
      0 => 8542,
      1 => 538,
      2 => 'Xã Xuân Tây',
    ),
    8542 => 
    array (
      0 => 8543,
      1 => 538,
      2 => 'Xã Xuân Đông',
    ),
    8543 => 
    array (
      0 => 8544,
      1 => 538,
      2 => 'Xã Sông Ray',
    ),
    8544 => 
    array (
      0 => 8545,
      1 => 538,
      2 => 'Xã Lâm San',
    ),
    8545 => 
    array (
      0 => 8546,
      1 => 539,
      2 => 'Thị trấn Long Thành',
    ),
    8546 => 
    array (
      0 => 8547,
      1 => 539,
      2 => 'Xã An Phước',
    ),
    8547 => 
    array (
      0 => 8548,
      1 => 539,
      2 => 'Xã Bình An',
    ),
    8548 => 
    array (
      0 => 8549,
      1 => 539,
      2 => 'Xã Long Đức',
    ),
    8549 => 
    array (
      0 => 8550,
      1 => 539,
      2 => 'Xã Lộc An',
    ),
    8550 => 
    array (
      0 => 8551,
      1 => 539,
      2 => 'Xã Bình Sơn',
    ),
    8551 => 
    array (
      0 => 8552,
      1 => 539,
      2 => 'Xã Tam An',
    ),
    8552 => 
    array (
      0 => 8553,
      1 => 539,
      2 => 'Xã Cẩm Đường',
    ),
    8553 => 
    array (
      0 => 8554,
      1 => 539,
      2 => 'Xã Long An',
    ),
    8554 => 
    array (
      0 => 8555,
      1 => 539,
      2 => 'Xã Bàu Cạn',
    ),
    8555 => 
    array (
      0 => 8556,
      1 => 539,
      2 => 'Xã Long Phước',
    ),
    8556 => 
    array (
      0 => 8557,
      1 => 539,
      2 => 'Xã Phước Bình',
    ),
    8557 => 
    array (
      0 => 8558,
      1 => 539,
      2 => 'Xã Tân Hiệp',
    ),
    8558 => 
    array (
      0 => 8559,
      1 => 539,
      2 => 'Xã Phước Thái',
    ),
    8559 => 
    array (
      0 => 8560,
      1 => 540,
      2 => 'Thị trấn Gia Ray',
    ),
    8560 => 
    array (
      0 => 8561,
      1 => 540,
      2 => 'Xã Xuân Bắc',
    ),
    8561 => 
    array (
      0 => 8562,
      1 => 540,
      2 => 'Xã Suối Cao',
    ),
    8562 => 
    array (
      0 => 8563,
      1 => 540,
      2 => 'Xã Xuân Thành',
    ),
    8563 => 
    array (
      0 => 8564,
      1 => 540,
      2 => 'Xã Xuân Thọ',
    ),
    8564 => 
    array (
      0 => 8565,
      1 => 540,
      2 => 'Xã Xuân Trường',
    ),
    8565 => 
    array (
      0 => 8566,
      1 => 540,
      2 => 'Xã Xuân Hòa',
    ),
    8566 => 
    array (
      0 => 8567,
      1 => 540,
      2 => 'Xã Xuân Hưng',
    ),
    8567 => 
    array (
      0 => 8568,
      1 => 540,
      2 => 'Xã Xuân Tâm',
    ),
    8568 => 
    array (
      0 => 8569,
      1 => 540,
      2 => 'Xã Suối Cát',
    ),
    8569 => 
    array (
      0 => 8570,
      1 => 540,
      2 => 'Xã Xuân Hiệp',
    ),
    8570 => 
    array (
      0 => 8571,
      1 => 540,
      2 => 'Xã Xuân Phú',
    ),
    8571 => 
    array (
      0 => 8572,
      1 => 540,
      2 => 'Xã Xuân Định',
    ),
    8572 => 
    array (
      0 => 8573,
      1 => 540,
      2 => 'Xã Bảo Hoà',
    ),
    8573 => 
    array (
      0 => 8574,
      1 => 540,
      2 => 'Xã Lang Minh',
    ),
    8574 => 
    array (
      0 => 8575,
      1 => 541,
      2 => 'Xã Phước Thiền',
    ),
    8575 => 
    array (
      0 => 8576,
      1 => 541,
      2 => 'Xã Long Tân',
    ),
    8576 => 
    array (
      0 => 8577,
      1 => 541,
      2 => 'Xã Đại Phước',
    ),
    8577 => 
    array (
      0 => 8578,
      1 => 541,
      2 => 'Thị trấn Hiệp Phước',
    ),
    8578 => 
    array (
      0 => 8579,
      1 => 541,
      2 => 'Xã Phú Hữu',
    ),
    8579 => 
    array (
      0 => 8580,
      1 => 541,
      2 => 'Xã Phú Hội',
    ),
    8580 => 
    array (
      0 => 8581,
      1 => 541,
      2 => 'Xã Phú Thạnh',
    ),
    8581 => 
    array (
      0 => 8582,
      1 => 541,
      2 => 'Xã Phú Đông',
    ),
    8582 => 
    array (
      0 => 8583,
      1 => 541,
      2 => 'Xã Long Thọ',
    ),
    8583 => 
    array (
      0 => 8584,
      1 => 541,
      2 => 'Xã Vĩnh Thanh',
    ),
    8584 => 
    array (
      0 => 8585,
      1 => 541,
      2 => 'Xã Phước Khánh',
    ),
    8585 => 
    array (
      0 => 8586,
      1 => 541,
      2 => 'Xã Phước An',
    ),
    8586 => 
    array (
      0 => 8587,
      1 => 542,
      2 => 'Phường 1',
    ),
    8587 => 
    array (
      0 => 8588,
      1 => 542,
      2 => 'Phường Thắng Tam',
    ),
    8588 => 
    array (
      0 => 8589,
      1 => 542,
      2 => 'Phường 2',
    ),
    8589 => 
    array (
      0 => 8590,
      1 => 542,
      2 => 'Phường 3',
    ),
    8590 => 
    array (
      0 => 8591,
      1 => 542,
      2 => 'Phường 4',
    ),
    8591 => 
    array (
      0 => 8592,
      1 => 542,
      2 => 'Phường 5',
    ),
    8592 => 
    array (
      0 => 8593,
      1 => 542,
      2 => 'Phường Thắng Nhì',
    ),
    8593 => 
    array (
      0 => 8594,
      1 => 542,
      2 => 'Phường 7',
    ),
    8594 => 
    array (
      0 => 8595,
      1 => 542,
      2 => 'Phường Nguyễn An Ninh',
    ),
    8595 => 
    array (
      0 => 8596,
      1 => 542,
      2 => 'Phường 8',
    ),
    8596 => 
    array (
      0 => 8597,
      1 => 542,
      2 => 'Phường 9',
    ),
    8597 => 
    array (
      0 => 8598,
      1 => 542,
      2 => 'Phường Thắng Nhất',
    ),
    8598 => 
    array (
      0 => 8599,
      1 => 542,
      2 => 'Phường Rạch Dừa',
    ),
    8599 => 
    array (
      0 => 8600,
      1 => 542,
      2 => 'Phường 10',
    ),
    8600 => 
    array (
      0 => 8601,
      1 => 542,
      2 => 'Phường 11',
    ),
    8601 => 
    array (
      0 => 8602,
      1 => 542,
      2 => 'Phường 12',
    ),
    8602 => 
    array (
      0 => 8603,
      1 => 542,
      2 => 'Xã Long Sơn',
    ),
    8603 => 
    array (
      0 => 8604,
      1 => 543,
      2 => 'Phường Phước Hưng',
    ),
    8604 => 
    array (
      0 => 8605,
      1 => 543,
      2 => 'Phường Phước Hiệp',
    ),
    8605 => 
    array (
      0 => 8606,
      1 => 543,
      2 => 'Phường Phước Nguyên',
    ),
    8606 => 
    array (
      0 => 8607,
      1 => 543,
      2 => 'Phường Long Toàn',
    ),
    8607 => 
    array (
      0 => 8608,
      1 => 543,
      2 => 'Phường Long Tâm',
    ),
    8608 => 
    array (
      0 => 8609,
      1 => 543,
      2 => 'Phường Phước Trung',
    ),
    8609 => 
    array (
      0 => 8610,
      1 => 543,
      2 => 'Phường Long Hương',
    ),
    8610 => 
    array (
      0 => 8611,
      1 => 543,
      2 => 'Phường Kim Dinh',
    ),
    8611 => 
    array (
      0 => 8612,
      1 => 543,
      2 => 'Xã Tân Hưng',
    ),
    8612 => 
    array (
      0 => 8613,
      1 => 543,
      2 => 'Xã Long Phước',
    ),
    8613 => 
    array (
      0 => 8614,
      1 => 543,
      2 => 'Xã Hoà Long',
    ),
    8614 => 
    array (
      0 => 8615,
      1 => 544,
      2 => 'Xã Bàu Chinh',
    ),
    8615 => 
    array (
      0 => 8616,
      1 => 544,
      2 => 'Thị trấn Ngãi Giao',
    ),
    8616 => 
    array (
      0 => 8617,
      1 => 544,
      2 => 'Xã Bình Ba',
    ),
    8617 => 
    array (
      0 => 8618,
      1 => 544,
      2 => 'Xã Suối Nghệ',
    ),
    8618 => 
    array (
      0 => 8619,
      1 => 544,
      2 => 'Xã Xuân Sơn',
    ),
    8619 => 
    array (
      0 => 8620,
      1 => 544,
      2 => 'Xã Sơn Bình',
    ),
    8620 => 
    array (
      0 => 8621,
      1 => 544,
      2 => 'Xã Bình Giã',
    ),
    8621 => 
    array (
      0 => 8622,
      1 => 544,
      2 => 'Xã Bình Trung',
    ),
    8622 => 
    array (
      0 => 8623,
      1 => 544,
      2 => 'Xã Xà Bang',
    ),
    8623 => 
    array (
      0 => 8624,
      1 => 544,
      2 => 'Xã Cù Bị',
    ),
    8624 => 
    array (
      0 => 8625,
      1 => 544,
      2 => 'Xã Láng Lớn',
    ),
    8625 => 
    array (
      0 => 8626,
      1 => 544,
      2 => 'Xã Quảng Thành',
    ),
    8626 => 
    array (
      0 => 8627,
      1 => 544,
      2 => 'Xã Kim Long',
    ),
    8627 => 
    array (
      0 => 8628,
      1 => 544,
      2 => 'Xã Suối Rao',
    ),
    8628 => 
    array (
      0 => 8629,
      1 => 544,
      2 => 'Xã Đá Bạc',
    ),
    8629 => 
    array (
      0 => 8630,
      1 => 544,
      2 => 'Xã Nghĩa Thành',
    ),
    8630 => 
    array (
      0 => 8631,
      1 => 545,
      2 => 'Thị trấn Phước Bửu',
    ),
    8631 => 
    array (
      0 => 8632,
      1 => 545,
      2 => 'Xã Phước Thuận',
    ),
    8632 => 
    array (
      0 => 8633,
      1 => 545,
      2 => 'Xã Phước Tân',
    ),
    8633 => 
    array (
      0 => 8634,
      1 => 545,
      2 => 'Xã Xuyên Mộc',
    ),
    8634 => 
    array (
      0 => 8635,
      1 => 545,
      2 => 'Xã Bông Trang',
    ),
    8635 => 
    array (
      0 => 8636,
      1 => 545,
      2 => 'Xã Tân Lâm',
    ),
    8636 => 
    array (
      0 => 8637,
      1 => 545,
      2 => 'Xã Bàu Lâm',
    ),
    8637 => 
    array (
      0 => 8638,
      1 => 545,
      2 => 'Xã Hòa Bình',
    ),
    8638 => 
    array (
      0 => 8639,
      1 => 545,
      2 => 'Xã Hòa Hưng',
    ),
    8639 => 
    array (
      0 => 8640,
      1 => 545,
      2 => 'Xã Hòa Hiệp',
    ),
    8640 => 
    array (
      0 => 8641,
      1 => 545,
      2 => 'Xã Hòa Hội',
    ),
    8641 => 
    array (
      0 => 8642,
      1 => 545,
      2 => 'Xã Bưng Riềng',
    ),
    8642 => 
    array (
      0 => 8643,
      1 => 545,
      2 => 'Xã Bình Châu',
    ),
    8643 => 
    array (
      0 => 8644,
      1 => 546,
      2 => 'Thị trấn Long Điền',
    ),
    8644 => 
    array (
      0 => 8645,
      1 => 546,
      2 => 'Thị trấn Long Hải',
    ),
    8645 => 
    array (
      0 => 8646,
      1 => 546,
      2 => 'Xã An Ngãi',
    ),
    8646 => 
    array (
      0 => 8647,
      1 => 546,
      2 => 'Xã Tam Phước',
    ),
    8647 => 
    array (
      0 => 8648,
      1 => 546,
      2 => 'Xã An Nhứt',
    ),
    8648 => 
    array (
      0 => 8649,
      1 => 546,
      2 => 'Xã Phước Tỉnh',
    ),
    8649 => 
    array (
      0 => 8650,
      1 => 546,
      2 => 'Xã Phước Hưng',
    ),
    8650 => 
    array (
      0 => 8651,
      1 => 547,
      2 => 'Thị trấn Đất Đỏ',
    ),
    8651 => 
    array (
      0 => 8652,
      1 => 547,
      2 => 'Xã Phước Long Thọ',
    ),
    8652 => 
    array (
      0 => 8653,
      1 => 547,
      2 => 'Xã Phước Hội',
    ),
    8653 => 
    array (
      0 => 8654,
      1 => 547,
      2 => 'Xã Long Mỹ',
    ),
    8654 => 
    array (
      0 => 8655,
      1 => 547,
      2 => 'Thị trấn Phước Hải',
    ),
    8655 => 
    array (
      0 => 8656,
      1 => 547,
      2 => 'Xã Long Tân',
    ),
    8656 => 
    array (
      0 => 8657,
      1 => 547,
      2 => 'Xã Láng Dài',
    ),
    8657 => 
    array (
      0 => 8658,
      1 => 547,
      2 => 'Xã Lộc An',
    ),
    8658 => 
    array (
      0 => 8659,
      1 => 548,
      2 => 'Phường Phú Mỹ',
    ),
    8659 => 
    array (
      0 => 8660,
      1 => 548,
      2 => 'Xã Tân Hoà',
    ),
    8660 => 
    array (
      0 => 8661,
      1 => 548,
      2 => 'Xã Tân Hải',
    ),
    8661 => 
    array (
      0 => 8662,
      1 => 548,
      2 => 'Phường Phước Hoà',
    ),
    8662 => 
    array (
      0 => 8663,
      1 => 548,
      2 => 'Phường Tân Phước',
    ),
    8663 => 
    array (
      0 => 8664,
      1 => 548,
      2 => 'Phường Mỹ Xuân',
    ),
    8664 => 
    array (
      0 => 8665,
      1 => 548,
      2 => 'Xã Sông Xoài',
    ),
    8665 => 
    array (
      0 => 8666,
      1 => 548,
      2 => 'Phường Hắc Dịch',
    ),
    8666 => 
    array (
      0 => 8667,
      1 => 548,
      2 => 'Xã Châu Pha',
    ),
    8667 => 
    array (
      0 => 8668,
      1 => 548,
      2 => 'Xã Tóc Tiên',
    ),
    8668 => 
    array (
      0 => 8669,
      1 => 549,
      2 => '',
    ),
    8669 => 
    array (
      0 => 8670,
      1 => 550,
      2 => 'Phường Tân Định',
    ),
    8670 => 
    array (
      0 => 8671,
      1 => 550,
      2 => 'Phường Đa Kao',
    ),
    8671 => 
    array (
      0 => 8672,
      1 => 550,
      2 => 'Phường Bến Nghé',
    ),
    8672 => 
    array (
      0 => 8673,
      1 => 550,
      2 => 'Phường Bến Thành',
    ),
    8673 => 
    array (
      0 => 8674,
      1 => 550,
      2 => 'Phường Nguyễn Thái Bình',
    ),
    8674 => 
    array (
      0 => 8675,
      1 => 550,
      2 => 'Phường Phạm Ngũ Lão',
    ),
    8675 => 
    array (
      0 => 8676,
      1 => 550,
      2 => 'Phường Cầu Ông Lãnh',
    ),
    8676 => 
    array (
      0 => 8677,
      1 => 550,
      2 => 'Phường Cô Giang',
    ),
    8677 => 
    array (
      0 => 8678,
      1 => 550,
      2 => 'Phường Nguyễn Cư Trinh',
    ),
    8678 => 
    array (
      0 => 8679,
      1 => 550,
      2 => 'Phường Cầu Kho',
    ),
    8679 => 
    array (
      0 => 8680,
      1 => 551,
      2 => 'Phường Thạnh Xuân',
    ),
    8680 => 
    array (
      0 => 8681,
      1 => 551,
      2 => 'Phường Thạnh Lộc',
    ),
    8681 => 
    array (
      0 => 8682,
      1 => 551,
      2 => 'Phường Hiệp Thành',
    ),
    8682 => 
    array (
      0 => 8683,
      1 => 551,
      2 => 'Phường Thới An',
    ),
    8683 => 
    array (
      0 => 8684,
      1 => 551,
      2 => 'Phường Tân Chánh Hiệp',
    ),
    8684 => 
    array (
      0 => 8685,
      1 => 551,
      2 => 'Phường An Phú Đông',
    ),
    8685 => 
    array (
      0 => 8686,
      1 => 551,
      2 => 'Phường Tân Thới Hiệp',
    ),
    8686 => 
    array (
      0 => 8687,
      1 => 551,
      2 => 'Phường Trung Mỹ Tây',
    ),
    8687 => 
    array (
      0 => 8688,
      1 => 551,
      2 => 'Phường Tân Hưng Thuận',
    ),
    8688 => 
    array (
      0 => 8689,
      1 => 551,
      2 => 'Phường Đông Hưng Thuận',
    ),
    8689 => 
    array (
      0 => 8690,
      1 => 551,
      2 => 'Phường Tân Thới Nhất',
    ),
    8690 => 
    array (
      0 => 8691,
      1 => 552,
      2 => 'Phường 15',
    ),
    8691 => 
    array (
      0 => 8692,
      1 => 552,
      2 => 'Phường 13',
    ),
    8692 => 
    array (
      0 => 8693,
      1 => 552,
      2 => 'Phường 17',
    ),
    8693 => 
    array (
      0 => 8694,
      1 => 552,
      2 => 'Phường 6',
    ),
    8694 => 
    array (
      0 => 8695,
      1 => 552,
      2 => 'Phường 16',
    ),
    8695 => 
    array (
      0 => 8696,
      1 => 552,
      2 => 'Phường 12',
    ),
    8696 => 
    array (
      0 => 8697,
      1 => 552,
      2 => 'Phường 14',
    ),
    8697 => 
    array (
      0 => 8698,
      1 => 552,
      2 => 'Phường 10',
    ),
    8698 => 
    array (
      0 => 8699,
      1 => 552,
      2 => 'Phường 05',
    ),
    8699 => 
    array (
      0 => 8700,
      1 => 552,
      2 => 'Phường 07',
    ),
    8700 => 
    array (
      0 => 8701,
      1 => 552,
      2 => 'Phường 04',
    ),
    8701 => 
    array (
      0 => 8702,
      1 => 552,
      2 => 'Phường 01',
    ),
    8702 => 
    array (
      0 => 8703,
      1 => 552,
      2 => 'Phường 9',
    ),
    8703 => 
    array (
      0 => 8704,
      1 => 552,
      2 => 'Phường 8',
    ),
    8704 => 
    array (
      0 => 8705,
      1 => 552,
      2 => 'Phường 11',
    ),
    8705 => 
    array (
      0 => 8706,
      1 => 552,
      2 => 'Phường 03',
    ),
    8706 => 
    array (
      0 => 8707,
      1 => 553,
      2 => 'Phường 13',
    ),
    8707 => 
    array (
      0 => 8708,
      1 => 553,
      2 => 'Phường 11',
    ),
    8708 => 
    array (
      0 => 8709,
      1 => 553,
      2 => 'Phường 27',
    ),
    8709 => 
    array (
      0 => 8710,
      1 => 553,
      2 => 'Phường 26',
    ),
    8710 => 
    array (
      0 => 8711,
      1 => 553,
      2 => 'Phường 12',
    ),
    8711 => 
    array (
      0 => 8712,
      1 => 553,
      2 => 'Phường 25',
    ),
    8712 => 
    array (
      0 => 8713,
      1 => 553,
      2 => 'Phường 05',
    ),
    8713 => 
    array (
      0 => 8714,
      1 => 553,
      2 => 'Phường 07',
    ),
    8714 => 
    array (
      0 => 8715,
      1 => 553,
      2 => 'Phường 24',
    ),
    8715 => 
    array (
      0 => 8716,
      1 => 553,
      2 => 'Phường 06',
    ),
    8716 => 
    array (
      0 => 8717,
      1 => 553,
      2 => 'Phường 14',
    ),
    8717 => 
    array (
      0 => 8718,
      1 => 553,
      2 => 'Phường 15',
    ),
    8718 => 
    array (
      0 => 8719,
      1 => 553,
      2 => 'Phường 02',
    ),
    8719 => 
    array (
      0 => 8720,
      1 => 553,
      2 => 'Phường 01',
    ),
    8720 => 
    array (
      0 => 8721,
      1 => 553,
      2 => 'Phường 03',
    ),
    8721 => 
    array (
      0 => 8722,
      1 => 553,
      2 => 'Phường 17',
    ),
    8722 => 
    array (
      0 => 8723,
      1 => 553,
      2 => 'Phường 21',
    ),
    8723 => 
    array (
      0 => 8724,
      1 => 553,
      2 => 'Phường 22',
    ),
    8724 => 
    array (
      0 => 8725,
      1 => 553,
      2 => 'Phường 19',
    ),
    8725 => 
    array (
      0 => 8726,
      1 => 553,
      2 => 'Phường 28',
    ),
    8726 => 
    array (
      0 => 8727,
      1 => 554,
      2 => 'Phường 02',
    ),
    8727 => 
    array (
      0 => 8728,
      1 => 554,
      2 => 'Phường 04',
    ),
    8728 => 
    array (
      0 => 8729,
      1 => 554,
      2 => 'Phường 12',
    ),
    8729 => 
    array (
      0 => 8730,
      1 => 554,
      2 => 'Phường 13',
    ),
    8730 => 
    array (
      0 => 8731,
      1 => 554,
      2 => 'Phường 01',
    ),
    8731 => 
    array (
      0 => 8732,
      1 => 554,
      2 => 'Phường 03',
    ),
    8732 => 
    array (
      0 => 8733,
      1 => 554,
      2 => 'Phường 11',
    ),
    8733 => 
    array (
      0 => 8734,
      1 => 554,
      2 => 'Phường 07',
    ),
    8734 => 
    array (
      0 => 8735,
      1 => 554,
      2 => 'Phường 05',
    ),
    8735 => 
    array (
      0 => 8736,
      1 => 554,
      2 => 'Phường 10',
    ),
    8736 => 
    array (
      0 => 8737,
      1 => 554,
      2 => 'Phường 06',
    ),
    8737 => 
    array (
      0 => 8738,
      1 => 554,
      2 => 'Phường 08',
    ),
    8738 => 
    array (
      0 => 8739,
      1 => 554,
      2 => 'Phường 09',
    ),
    8739 => 
    array (
      0 => 8740,
      1 => 554,
      2 => 'Phường 14',
    ),
    8740 => 
    array (
      0 => 8741,
      1 => 554,
      2 => 'Phường 15',
    ),
    8741 => 
    array (
      0 => 8742,
      1 => 555,
      2 => 'Phường Tân Sơn Nhì',
    ),
    8742 => 
    array (
      0 => 8743,
      1 => 555,
      2 => 'Phường Tây Thạnh',
    ),
    8743 => 
    array (
      0 => 8744,
      1 => 555,
      2 => 'Phường Sơn Kỳ',
    ),
    8744 => 
    array (
      0 => 8745,
      1 => 555,
      2 => 'Phường Tân Quý',
    ),
    8745 => 
    array (
      0 => 8746,
      1 => 555,
      2 => 'Phường Tân Thành',
    ),
    8746 => 
    array (
      0 => 8747,
      1 => 555,
      2 => 'Phường Phú Thọ Hòa',
    ),
    8747 => 
    array (
      0 => 8748,
      1 => 555,
      2 => 'Phường Phú Thạnh',
    ),
    8748 => 
    array (
      0 => 8749,
      1 => 555,
      2 => 'Phường Phú Trung',
    ),
    8749 => 
    array (
      0 => 8750,
      1 => 555,
      2 => 'Phường Hòa Thạnh',
    ),
    8750 => 
    array (
      0 => 8751,
      1 => 555,
      2 => 'Phường Hiệp Tân',
    ),
    8751 => 
    array (
      0 => 8752,
      1 => 555,
      2 => 'Phường Tân Thới Hòa',
    ),
    8752 => 
    array (
      0 => 8753,
      1 => 556,
      2 => 'Phường 04',
    ),
    8753 => 
    array (
      0 => 8754,
      1 => 556,
      2 => 'Phường 05',
    ),
    8754 => 
    array (
      0 => 8755,
      1 => 556,
      2 => 'Phường 09',
    ),
    8755 => 
    array (
      0 => 8756,
      1 => 556,
      2 => 'Phường 07',
    ),
    8756 => 
    array (
      0 => 8757,
      1 => 556,
      2 => 'Phường 03',
    ),
    8757 => 
    array (
      0 => 8758,
      1 => 556,
      2 => 'Phường 01',
    ),
    8758 => 
    array (
      0 => 8759,
      1 => 556,
      2 => 'Phường 02',
    ),
    8759 => 
    array (
      0 => 8760,
      1 => 556,
      2 => 'Phường 08',
    ),
    8760 => 
    array (
      0 => 8761,
      1 => 556,
      2 => 'Phường 15',
    ),
    8761 => 
    array (
      0 => 8762,
      1 => 556,
      2 => 'Phường 10',
    ),
    8762 => 
    array (
      0 => 8763,
      1 => 556,
      2 => 'Phường 11',
    ),
    8763 => 
    array (
      0 => 8764,
      1 => 556,
      2 => 'Phường 17',
    ),
    8764 => 
    array (
      0 => 8765,
      1 => 556,
      2 => 'Phường 13',
    ),
    8765 => 
    array (
      0 => 8766,
      1 => 557,
      2 => 'Phường Linh Xuân',
    ),
    8766 => 
    array (
      0 => 8767,
      1 => 557,
      2 => 'Phường Bình Chiểu',
    ),
    8767 => 
    array (
      0 => 8768,
      1 => 557,
      2 => 'Phường Linh Trung',
    ),
    8768 => 
    array (
      0 => 8769,
      1 => 557,
      2 => 'Phường Tam Bình',
    ),
    8769 => 
    array (
      0 => 8770,
      1 => 557,
      2 => 'Phường Tam Phú',
    ),
    8770 => 
    array (
      0 => 8771,
      1 => 557,
      2 => 'Phường Hiệp Bình Phước',
    ),
    8771 => 
    array (
      0 => 8772,
      1 => 557,
      2 => 'Phường Hiệp Bình Chánh',
    ),
    8772 => 
    array (
      0 => 8773,
      1 => 557,
      2 => 'Phường Linh Chiểu',
    ),
    8773 => 
    array (
      0 => 8774,
      1 => 557,
      2 => 'Phường Linh Tây',
    ),
    8774 => 
    array (
      0 => 8775,
      1 => 557,
      2 => 'Phường Linh Đông',
    ),
    8775 => 
    array (
      0 => 8776,
      1 => 557,
      2 => 'Phường Bình Thọ',
    ),
    8776 => 
    array (
      0 => 8777,
      1 => 557,
      2 => 'Phường Trường Thọ',
    ),
    8777 => 
    array (
      0 => 8778,
      1 => 557,
      2 => 'Phường Long Bình',
    ),
    8778 => 
    array (
      0 => 8779,
      1 => 557,
      2 => 'Phường Long Thạnh Mỹ',
    ),
    8779 => 
    array (
      0 => 8780,
      1 => 557,
      2 => 'Phường Tân Phú',
    ),
    8780 => 
    array (
      0 => 8781,
      1 => 557,
      2 => 'Phường Hiệp Phú',
    ),
    8781 => 
    array (
      0 => 8782,
      1 => 557,
      2 => 'Phường Tăng Nhơn Phú A',
    ),
    8782 => 
    array (
      0 => 8783,
      1 => 557,
      2 => 'Phường Tăng Nhơn Phú B',
    ),
    8783 => 
    array (
      0 => 8784,
      1 => 557,
      2 => 'Phường Phước Long B',
    ),
    8784 => 
    array (
      0 => 8785,
      1 => 557,
      2 => 'Phường Phước Long A',
    ),
    8785 => 
    array (
      0 => 8786,
      1 => 557,
      2 => 'Phường Trường Thạnh',
    ),
    8786 => 
    array (
      0 => 8787,
      1 => 557,
      2 => 'Phường Long Phước',
    ),
    8787 => 
    array (
      0 => 8788,
      1 => 557,
      2 => 'Phường Long Trường',
    ),
    8788 => 
    array (
      0 => 8789,
      1 => 557,
      2 => 'Phường Phước Bình',
    ),
    8789 => 
    array (
      0 => 8790,
      1 => 557,
      2 => 'Phường Phú Hữu',
    ),
    8790 => 
    array (
      0 => 8791,
      1 => 557,
      2 => 'Phường Thảo Điền',
    ),
    8791 => 
    array (
      0 => 8792,
      1 => 557,
      2 => 'Phường An Phú',
    ),
    8792 => 
    array (
      0 => 8793,
      1 => 557,
      2 => 'Phường An Khánh',
    ),
    8793 => 
    array (
      0 => 8794,
      1 => 557,
      2 => 'Phường Bình Trưng Đông',
    ),
    8794 => 
    array (
      0 => 8795,
      1 => 557,
      2 => 'Phường Bình Trưng Tây',
    ),
    8795 => 
    array (
      0 => 8796,
      1 => 557,
      2 => 'Phường Cát Lái',
    ),
    8796 => 
    array (
      0 => 8797,
      1 => 557,
      2 => 'Phường Thạnh Mỹ Lợi',
    ),
    8797 => 
    array (
      0 => 8798,
      1 => 557,
      2 => 'Phường An Lợi Đông',
    ),
    8798 => 
    array (
      0 => 8799,
      1 => 557,
      2 => 'Phường Thủ Thiêm',
    ),
    8799 => 
    array (
      0 => 8800,
      1 => 558,
      2 => 'Phường 14',
    ),
    8800 => 
    array (
      0 => 8801,
      1 => 558,
      2 => 'Phường 12',
    ),
    8801 => 
    array (
      0 => 8802,
      1 => 558,
      2 => 'Phường 11',
    ),
    8802 => 
    array (
      0 => 8803,
      1 => 558,
      2 => 'Phường 13',
    ),
    8803 => 
    array (
      0 => 8804,
      1 => 558,
      2 => 'Phường Võ Thị Sáu',
    ),
    8804 => 
    array (
      0 => 8805,
      1 => 558,
      2 => 'Phường 09',
    ),
    8805 => 
    array (
      0 => 8806,
      1 => 558,
      2 => 'Phường 10',
    ),
    8806 => 
    array (
      0 => 8807,
      1 => 558,
      2 => 'Phường 04',
    ),
    8807 => 
    array (
      0 => 8808,
      1 => 558,
      2 => 'Phường 05',
    ),
    8808 => 
    array (
      0 => 8809,
      1 => 558,
      2 => 'Phường 03',
    ),
    8809 => 
    array (
      0 => 8810,
      1 => 558,
      2 => 'Phường 02',
    ),
    8810 => 
    array (
      0 => 8811,
      1 => 558,
      2 => 'Phường 01',
    ),
    8811 => 
    array (
      0 => 8812,
      1 => 559,
      2 => 'Phường 15',
    ),
    8812 => 
    array (
      0 => 8813,
      1 => 559,
      2 => 'Phường 13',
    ),
    8813 => 
    array (
      0 => 8814,
      1 => 559,
      2 => 'Phường 14',
    ),
    8814 => 
    array (
      0 => 8815,
      1 => 559,
      2 => 'Phường 12',
    ),
    8815 => 
    array (
      0 => 8816,
      1 => 559,
      2 => 'Phường 11',
    ),
    8816 => 
    array (
      0 => 8817,
      1 => 559,
      2 => 'Phường 10',
    ),
    8817 => 
    array (
      0 => 8818,
      1 => 559,
      2 => 'Phường 09',
    ),
    8818 => 
    array (
      0 => 8819,
      1 => 559,
      2 => 'Phường 01',
    ),
    8819 => 
    array (
      0 => 8820,
      1 => 559,
      2 => 'Phường 08',
    ),
    8820 => 
    array (
      0 => 8821,
      1 => 559,
      2 => 'Phường 02',
    ),
    8821 => 
    array (
      0 => 8822,
      1 => 559,
      2 => 'Phường 04',
    ),
    8822 => 
    array (
      0 => 8823,
      1 => 559,
      2 => 'Phường 07',
    ),
    8823 => 
    array (
      0 => 8824,
      1 => 559,
      2 => 'Phường 05',
    ),
    8824 => 
    array (
      0 => 8825,
      1 => 559,
      2 => 'Phường 06',
    ),
    8825 => 
    array (
      0 => 8826,
      1 => 560,
      2 => 'Phường 15',
    ),
    8826 => 
    array (
      0 => 8827,
      1 => 560,
      2 => 'Phường 05',
    ),
    8827 => 
    array (
      0 => 8828,
      1 => 560,
      2 => 'Phường 14',
    ),
    8828 => 
    array (
      0 => 8829,
      1 => 560,
      2 => 'Phường 11',
    ),
    8829 => 
    array (
      0 => 8830,
      1 => 560,
      2 => 'Phường 03',
    ),
    8830 => 
    array (
      0 => 8831,
      1 => 560,
      2 => 'Phường 10',
    ),
    8831 => 
    array (
      0 => 8832,
      1 => 560,
      2 => 'Phường 13',
    ),
    8832 => 
    array (
      0 => 8833,
      1 => 560,
      2 => 'Phường 08',
    ),
    8833 => 
    array (
      0 => 8834,
      1 => 560,
      2 => 'Phường 09',
    ),
    8834 => 
    array (
      0 => 8835,
      1 => 560,
      2 => 'Phường 12',
    ),
    8835 => 
    array (
      0 => 8836,
      1 => 560,
      2 => 'Phường 07',
    ),
    8836 => 
    array (
      0 => 8837,
      1 => 560,
      2 => 'Phường 06',
    ),
    8837 => 
    array (
      0 => 8838,
      1 => 560,
      2 => 'Phường 04',
    ),
    8838 => 
    array (
      0 => 8839,
      1 => 560,
      2 => 'Phường 01',
    ),
    8839 => 
    array (
      0 => 8840,
      1 => 560,
      2 => 'Phường 02',
    ),
    8840 => 
    array (
      0 => 8841,
      1 => 560,
      2 => 'Phường 16',
    ),
    8841 => 
    array (
      0 => 8842,
      1 => 561,
      2 => 'Phường 13',
    ),
    8842 => 
    array (
      0 => 8843,
      1 => 561,
      2 => 'Phường 09',
    ),
    8843 => 
    array (
      0 => 8844,
      1 => 561,
      2 => 'Phường 06',
    ),
    8844 => 
    array (
      0 => 8845,
      1 => 561,
      2 => 'Phường 08',
    ),
    8845 => 
    array (
      0 => 8846,
      1 => 561,
      2 => 'Phường 10',
    ),
    8846 => 
    array (
      0 => 8847,
      1 => 561,
      2 => 'Phường 18',
    ),
    8847 => 
    array (
      0 => 8848,
      1 => 561,
      2 => 'Phường 14',
    ),
    8848 => 
    array (
      0 => 8849,
      1 => 561,
      2 => 'Phường 04',
    ),
    8849 => 
    array (
      0 => 8850,
      1 => 561,
      2 => 'Phường 03',
    ),
    8850 => 
    array (
      0 => 8851,
      1 => 561,
      2 => 'Phường 16',
    ),
    8851 => 
    array (
      0 => 8852,
      1 => 561,
      2 => 'Phường 02',
    ),
    8852 => 
    array (
      0 => 8853,
      1 => 561,
      2 => 'Phường 15',
    ),
    8853 => 
    array (
      0 => 8854,
      1 => 561,
      2 => 'Phường 01',
    ),
    8854 => 
    array (
      0 => 8855,
      1 => 562,
      2 => 'Phường 04',
    ),
    8855 => 
    array (
      0 => 8856,
      1 => 562,
      2 => 'Phường 09',
    ),
    8856 => 
    array (
      0 => 8857,
      1 => 562,
      2 => 'Phường 03',
    ),
    8857 => 
    array (
      0 => 8858,
      1 => 562,
      2 => 'Phường 12',
    ),
    8858 => 
    array (
      0 => 8859,
      1 => 562,
      2 => 'Phường 02',
    ),
    8859 => 
    array (
      0 => 8860,
      1 => 562,
      2 => 'Phường 08',
    ),
    8860 => 
    array (
      0 => 8861,
      1 => 562,
      2 => 'Phường 07',
    ),
    8861 => 
    array (
      0 => 8862,
      1 => 562,
      2 => 'Phường 01',
    ),
    8862 => 
    array (
      0 => 8863,
      1 => 562,
      2 => 'Phường 11',
    ),
    8863 => 
    array (
      0 => 8864,
      1 => 562,
      2 => 'Phường 14',
    ),
    8864 => 
    array (
      0 => 8865,
      1 => 562,
      2 => 'Phường 05',
    ),
    8865 => 
    array (
      0 => 8866,
      1 => 562,
      2 => 'Phường 06',
    ),
    8866 => 
    array (
      0 => 8867,
      1 => 562,
      2 => 'Phường 10',
    ),
    8867 => 
    array (
      0 => 8868,
      1 => 562,
      2 => 'Phường 13',
    ),
    8868 => 
    array (
      0 => 8869,
      1 => 563,
      2 => 'Phường 14',
    ),
    8869 => 
    array (
      0 => 8870,
      1 => 563,
      2 => 'Phường 13',
    ),
    8870 => 
    array (
      0 => 8871,
      1 => 563,
      2 => 'Phường 09',
    ),
    8871 => 
    array (
      0 => 8872,
      1 => 563,
      2 => 'Phường 06',
    ),
    8872 => 
    array (
      0 => 8873,
      1 => 563,
      2 => 'Phường 12',
    ),
    8873 => 
    array (
      0 => 8874,
      1 => 563,
      2 => 'Phường 05',
    ),
    8874 => 
    array (
      0 => 8875,
      1 => 563,
      2 => 'Phường 11',
    ),
    8875 => 
    array (
      0 => 8876,
      1 => 563,
      2 => 'Phường 02',
    ),
    8876 => 
    array (
      0 => 8877,
      1 => 563,
      2 => 'Phường 01',
    ),
    8877 => 
    array (
      0 => 8878,
      1 => 563,
      2 => 'Phường 04',
    ),
    8878 => 
    array (
      0 => 8879,
      1 => 563,
      2 => 'Phường 08',
    ),
    8879 => 
    array (
      0 => 8880,
      1 => 563,
      2 => 'Phường 03',
    ),
    8880 => 
    array (
      0 => 8881,
      1 => 563,
      2 => 'Phường 07',
    ),
    8881 => 
    array (
      0 => 8882,
      1 => 563,
      2 => 'Phường 10',
    ),
    8882 => 
    array (
      0 => 8883,
      1 => 564,
      2 => 'Phường 08',
    ),
    8883 => 
    array (
      0 => 8884,
      1 => 564,
      2 => 'Phường 02',
    ),
    8884 => 
    array (
      0 => 8885,
      1 => 564,
      2 => 'Phường 01',
    ),
    8885 => 
    array (
      0 => 8886,
      1 => 564,
      2 => 'Phường 03',
    ),
    8886 => 
    array (
      0 => 8887,
      1 => 564,
      2 => 'Phường 11',
    ),
    8887 => 
    array (
      0 => 8888,
      1 => 564,
      2 => 'Phường 09',
    ),
    8888 => 
    array (
      0 => 8889,
      1 => 564,
      2 => 'Phường 10',
    ),
    8889 => 
    array (
      0 => 8890,
      1 => 564,
      2 => 'Phường 04',
    ),
    8890 => 
    array (
      0 => 8891,
      1 => 564,
      2 => 'Phường 13',
    ),
    8891 => 
    array (
      0 => 8892,
      1 => 564,
      2 => 'Phường 12',
    ),
    8892 => 
    array (
      0 => 8893,
      1 => 564,
      2 => 'Phường 05',
    ),
    8893 => 
    array (
      0 => 8894,
      1 => 564,
      2 => 'Phường 14',
    ),
    8894 => 
    array (
      0 => 8895,
      1 => 564,
      2 => 'Phường 06',
    ),
    8895 => 
    array (
      0 => 8896,
      1 => 564,
      2 => 'Phường 15',
    ),
    8896 => 
    array (
      0 => 8897,
      1 => 564,
      2 => 'Phường 16',
    ),
    8897 => 
    array (
      0 => 8898,
      1 => 564,
      2 => 'Phường 07',
    ),
    8898 => 
    array (
      0 => 8899,
      1 => 565,
      2 => 'Phường Bình Hưng Hòa',
    ),
    8899 => 
    array (
      0 => 8900,
      1 => 565,
      2 => 'Phường Bình Hưng Hoà A',
    ),
    8900 => 
    array (
      0 => 8901,
      1 => 565,
      2 => 'Phường Bình Hưng Hoà B',
    ),
    8901 => 
    array (
      0 => 8902,
      1 => 565,
      2 => 'Phường Bình Trị Đông',
    ),
    8902 => 
    array (
      0 => 8903,
      1 => 565,
      2 => 'Phường Bình Trị Đông A',
    ),
    8903 => 
    array (
      0 => 8904,
      1 => 565,
      2 => 'Phường Bình Trị Đông B',
    ),
    8904 => 
    array (
      0 => 8905,
      1 => 565,
      2 => 'Phường Tân Tạo',
    ),
    8905 => 
    array (
      0 => 8906,
      1 => 565,
      2 => 'Phường Tân Tạo A',
    ),
    8906 => 
    array (
      0 => 8907,
      1 => 565,
      2 => 'Phường  An Lạc',
    ),
    8907 => 
    array (
      0 => 8908,
      1 => 565,
      2 => 'Phường An Lạc A',
    ),
    8908 => 
    array (
      0 => 8909,
      1 => 566,
      2 => 'Phường Tân Thuận Đông',
    ),
    8909 => 
    array (
      0 => 8910,
      1 => 566,
      2 => 'Phường Tân Thuận Tây',
    ),
    8910 => 
    array (
      0 => 8911,
      1 => 566,
      2 => 'Phường Tân Kiểng',
    ),
    8911 => 
    array (
      0 => 8912,
      1 => 566,
      2 => 'Phường Tân Hưng',
    ),
    8912 => 
    array (
      0 => 8913,
      1 => 566,
      2 => 'Phường Bình Thuận',
    ),
    8913 => 
    array (
      0 => 8914,
      1 => 566,
      2 => 'Phường Tân Quy',
    ),
    8914 => 
    array (
      0 => 8915,
      1 => 566,
      2 => 'Phường Phú Thuận',
    ),
    8915 => 
    array (
      0 => 8916,
      1 => 566,
      2 => 'Phường Tân Phú',
    ),
    8916 => 
    array (
      0 => 8917,
      1 => 566,
      2 => 'Phường Tân Phong',
    ),
    8917 => 
    array (
      0 => 8918,
      1 => 566,
      2 => 'Phường Phú Mỹ',
    ),
    8918 => 
    array (
      0 => 8919,
      1 => 567,
      2 => 'Thị trấn Củ Chi',
    ),
    8919 => 
    array (
      0 => 8920,
      1 => 567,
      2 => 'Xã Phú Mỹ Hưng',
    ),
    8920 => 
    array (
      0 => 8921,
      1 => 567,
      2 => 'Xã An Phú',
    ),
    8921 => 
    array (
      0 => 8922,
      1 => 567,
      2 => 'Xã Trung Lập Thượng',
    ),
    8922 => 
    array (
      0 => 8923,
      1 => 567,
      2 => 'Xã An Nhơn Tây',
    ),
    8923 => 
    array (
      0 => 8924,
      1 => 567,
      2 => 'Xã Nhuận Đức',
    ),
    8924 => 
    array (
      0 => 8925,
      1 => 567,
      2 => 'Xã Phạm Văn Cội',
    ),
    8925 => 
    array (
      0 => 8926,
      1 => 567,
      2 => 'Xã Phú Hòa Đông',
    ),
    8926 => 
    array (
      0 => 8927,
      1 => 567,
      2 => 'Xã Trung Lập Hạ',
    ),
    8927 => 
    array (
      0 => 8928,
      1 => 567,
      2 => 'Xã Trung An',
    ),
    8928 => 
    array (
      0 => 8929,
      1 => 567,
      2 => 'Xã Phước Thạnh',
    ),
    8929 => 
    array (
      0 => 8930,
      1 => 567,
      2 => 'Xã Phước Hiệp',
    ),
    8930 => 
    array (
      0 => 8931,
      1 => 567,
      2 => 'Xã Tân An Hội',
    ),
    8931 => 
    array (
      0 => 8932,
      1 => 567,
      2 => 'Xã Phước Vĩnh An',
    ),
    8932 => 
    array (
      0 => 8933,
      1 => 567,
      2 => 'Xã Thái Mỹ',
    ),
    8933 => 
    array (
      0 => 8934,
      1 => 567,
      2 => 'Xã Tân Thạnh Tây',
    ),
    8934 => 
    array (
      0 => 8935,
      1 => 567,
      2 => 'Xã Hòa Phú',
    ),
    8935 => 
    array (
      0 => 8936,
      1 => 567,
      2 => 'Xã Tân Thạnh Đông',
    ),
    8936 => 
    array (
      0 => 8937,
      1 => 567,
      2 => 'Xã Bình Mỹ',
    ),
    8937 => 
    array (
      0 => 8938,
      1 => 567,
      2 => 'Xã Tân Phú Trung',
    ),
    8938 => 
    array (
      0 => 8939,
      1 => 567,
      2 => 'Xã Tân Thông Hội',
    ),
    8939 => 
    array (
      0 => 8940,
      1 => 568,
      2 => 'Thị trấn Hóc Môn',
    ),
    8940 => 
    array (
      0 => 8941,
      1 => 568,
      2 => 'Xã Tân Hiệp',
    ),
    8941 => 
    array (
      0 => 8942,
      1 => 568,
      2 => 'Xã Nhị Bình',
    ),
    8942 => 
    array (
      0 => 8943,
      1 => 568,
      2 => 'Xã Đông Thạnh',
    ),
    8943 => 
    array (
      0 => 8944,
      1 => 568,
      2 => 'Xã Tân Thới Nhì',
    ),
    8944 => 
    array (
      0 => 8945,
      1 => 568,
      2 => 'Xã Thới Tam Thôn',
    ),
    8945 => 
    array (
      0 => 8946,
      1 => 568,
      2 => 'Xã Xuân Thới Sơn',
    ),
    8946 => 
    array (
      0 => 8947,
      1 => 568,
      2 => 'Xã Tân Xuân',
    ),
    8947 => 
    array (
      0 => 8948,
      1 => 568,
      2 => 'Xã Xuân Thới Đông',
    ),
    8948 => 
    array (
      0 => 8949,
      1 => 568,
      2 => 'Xã Trung Chánh',
    ),
    8949 => 
    array (
      0 => 8950,
      1 => 568,
      2 => 'Xã Xuân Thới Thượng',
    ),
    8950 => 
    array (
      0 => 8951,
      1 => 568,
      2 => 'Xã Bà Điểm',
    ),
    8951 => 
    array (
      0 => 8952,
      1 => 569,
      2 => 'Thị trấn Tân Túc',
    ),
    8952 => 
    array (
      0 => 8953,
      1 => 569,
      2 => 'Xã Phạm Văn Hai',
    ),
    8953 => 
    array (
      0 => 8954,
      1 => 569,
      2 => 'Xã Vĩnh Lộc A',
    ),
    8954 => 
    array (
      0 => 8955,
      1 => 569,
      2 => 'Xã Vĩnh Lộc B',
    ),
    8955 => 
    array (
      0 => 8956,
      1 => 569,
      2 => 'Xã Bình Lợi',
    ),
    8956 => 
    array (
      0 => 8957,
      1 => 569,
      2 => 'Xã Lê Minh Xuân',
    ),
    8957 => 
    array (
      0 => 8958,
      1 => 569,
      2 => 'Xã Tân Nhựt',
    ),
    8958 => 
    array (
      0 => 8959,
      1 => 569,
      2 => 'Xã Tân Kiên',
    ),
    8959 => 
    array (
      0 => 8960,
      1 => 569,
      2 => 'Xã Bình Hưng',
    ),
    8960 => 
    array (
      0 => 8961,
      1 => 569,
      2 => 'Xã Phong Phú',
    ),
    8961 => 
    array (
      0 => 8962,
      1 => 569,
      2 => 'Xã An Phú Tây',
    ),
    8962 => 
    array (
      0 => 8963,
      1 => 569,
      2 => 'Xã Hưng Long',
    ),
    8963 => 
    array (
      0 => 8964,
      1 => 569,
      2 => 'Xã Đa Phước',
    ),
    8964 => 
    array (
      0 => 8965,
      1 => 569,
      2 => 'Xã Tân Quý Tây',
    ),
    8965 => 
    array (
      0 => 8966,
      1 => 569,
      2 => 'Xã Bình Chánh',
    ),
    8966 => 
    array (
      0 => 8967,
      1 => 569,
      2 => 'Xã Quy Đức',
    ),
    8967 => 
    array (
      0 => 8968,
      1 => 570,
      2 => 'Thị trấn Nhà Bè',
    ),
    8968 => 
    array (
      0 => 8969,
      1 => 570,
      2 => 'Xã Phước Kiển',
    ),
    8969 => 
    array (
      0 => 8970,
      1 => 570,
      2 => 'Xã Phước Lộc',
    ),
    8970 => 
    array (
      0 => 8971,
      1 => 570,
      2 => 'Xã Nhơn Đức',
    ),
    8971 => 
    array (
      0 => 8972,
      1 => 570,
      2 => 'Xã Phú Xuân',
    ),
    8972 => 
    array (
      0 => 8973,
      1 => 570,
      2 => 'Xã Long Thới',
    ),
    8973 => 
    array (
      0 => 8974,
      1 => 570,
      2 => 'Xã Hiệp Phước',
    ),
    8974 => 
    array (
      0 => 8975,
      1 => 571,
      2 => 'Thị trấn Cần Thạnh',
    ),
    8975 => 
    array (
      0 => 8976,
      1 => 571,
      2 => 'Xã Bình Khánh',
    ),
    8976 => 
    array (
      0 => 8977,
      1 => 571,
      2 => 'Xã Tam Thôn Hiệp',
    ),
    8977 => 
    array (
      0 => 8978,
      1 => 571,
      2 => 'Xã An Thới Đông',
    ),
    8978 => 
    array (
      0 => 8979,
      1 => 571,
      2 => 'Xã Thạnh An',
    ),
    8979 => 
    array (
      0 => 8980,
      1 => 571,
      2 => 'Xã Long Hòa',
    ),
    8980 => 
    array (
      0 => 8981,
      1 => 571,
      2 => 'Xã Lý Nhơn',
    ),
    8981 => 
    array (
      0 => 8982,
      1 => 572,
      2 => 'Phường 5',
    ),
    8982 => 
    array (
      0 => 8983,
      1 => 572,
      2 => 'Phường 2',
    ),
    8983 => 
    array (
      0 => 8984,
      1 => 572,
      2 => 'Phường 4',
    ),
    8984 => 
    array (
      0 => 8985,
      1 => 572,
      2 => 'Phường Tân Khánh',
    ),
    8985 => 
    array (
      0 => 8986,
      1 => 572,
      2 => 'Phường 1',
    ),
    8986 => 
    array (
      0 => 8987,
      1 => 572,
      2 => 'Phường 3',
    ),
    8987 => 
    array (
      0 => 8988,
      1 => 572,
      2 => 'Phường 7',
    ),
    8988 => 
    array (
      0 => 8989,
      1 => 572,
      2 => 'Phường 6',
    ),
    8989 => 
    array (
      0 => 8990,
      1 => 572,
      2 => 'Xã Hướng Thọ Phú',
    ),
    8990 => 
    array (
      0 => 8991,
      1 => 572,
      2 => 'Xã Nhơn Thạnh Trung',
    ),
    8991 => 
    array (
      0 => 8992,
      1 => 572,
      2 => 'Xã Lợi Bình Nhơn',
    ),
    8992 => 
    array (
      0 => 8993,
      1 => 572,
      2 => 'Xã Bình Tâm',
    ),
    8993 => 
    array (
      0 => 8994,
      1 => 572,
      2 => 'Phường Khánh Hậu',
    ),
    8994 => 
    array (
      0 => 8995,
      1 => 572,
      2 => 'Xã An Vĩnh Ngãi',
    ),
    8995 => 
    array (
      0 => 8996,
      1 => 573,
      2 => 'Phường 1',
    ),
    8996 => 
    array (
      0 => 8997,
      1 => 573,
      2 => 'Phường 2',
    ),
    8997 => 
    array (
      0 => 8998,
      1 => 573,
      2 => 'Xã Thạnh Trị',
    ),
    8998 => 
    array (
      0 => 8999,
      1 => 573,
      2 => 'Xã Bình Hiệp',
    ),
    8999 => 
    array (
      0 => 9000,
      1 => 573,
      2 => 'Xã Bình Tân',
    ),
    9000 => 
    array (
      0 => 9001,
      1 => 573,
      2 => 'Xã Tuyên Thạnh',
    ),
    9001 => 
    array (
      0 => 9002,
      1 => 573,
      2 => 'Phường 3',
    ),
    9002 => 
    array (
      0 => 9003,
      1 => 573,
      2 => 'Xã Thạnh Hưng',
    ),
    9003 => 
    array (
      0 => 9004,
      1 => 574,
      2 => 'Thị trấn Tân Hưng',
    ),
    9004 => 
    array (
      0 => 9005,
      1 => 574,
      2 => 'Xã Hưng Hà',
    ),
    9005 => 
    array (
      0 => 9006,
      1 => 574,
      2 => 'Xã Hưng Điền B',
    ),
    9006 => 
    array (
      0 => 9007,
      1 => 574,
      2 => 'Xã Hưng Điền',
    ),
    9007 => 
    array (
      0 => 9008,
      1 => 574,
      2 => 'Xã Thạnh Hưng',
    ),
    9008 => 
    array (
      0 => 9009,
      1 => 574,
      2 => 'Xã Hưng Thạnh',
    ),
    9009 => 
    array (
      0 => 9010,
      1 => 574,
      2 => 'Xã Vĩnh Thạnh',
    ),
    9010 => 
    array (
      0 => 9011,
      1 => 574,
      2 => 'Xã Vĩnh Châu B',
    ),
    9011 => 
    array (
      0 => 9012,
      1 => 574,
      2 => 'Xã Vĩnh Lợi',
    ),
    9012 => 
    array (
      0 => 9013,
      1 => 574,
      2 => 'Xã Vĩnh Đại',
    ),
    9013 => 
    array (
      0 => 9014,
      1 => 574,
      2 => 'Xã Vĩnh Châu A',
    ),
    9014 => 
    array (
      0 => 9015,
      1 => 574,
      2 => 'Xã Vĩnh Bửu',
    ),
    9015 => 
    array (
      0 => 9016,
      1 => 575,
      2 => 'Thị trấn Vĩnh Hưng',
    ),
    9016 => 
    array (
      0 => 9017,
      1 => 575,
      2 => 'Xã Hưng Điền A',
    ),
    9017 => 
    array (
      0 => 9018,
      1 => 575,
      2 => 'Xã Khánh Hưng',
    ),
    9018 => 
    array (
      0 => 9019,
      1 => 575,
      2 => 'Xã Thái Trị',
    ),
    9019 => 
    array (
      0 => 9020,
      1 => 575,
      2 => 'Xã Vĩnh Trị',
    ),
    9020 => 
    array (
      0 => 9021,
      1 => 575,
      2 => 'Xã Thái Bình Trung',
    ),
    9021 => 
    array (
      0 => 9022,
      1 => 575,
      2 => 'Xã Vĩnh Bình',
    ),
    9022 => 
    array (
      0 => 9023,
      1 => 575,
      2 => 'Xã Vĩnh Thuận',
    ),
    9023 => 
    array (
      0 => 9024,
      1 => 575,
      2 => 'Xã Tuyên Bình',
    ),
    9024 => 
    array (
      0 => 9025,
      1 => 575,
      2 => 'Xã Tuyên Bình Tây',
    ),
    9025 => 
    array (
      0 => 9026,
      1 => 576,
      2 => 'Xã Bình Hòa Tây',
    ),
    9026 => 
    array (
      0 => 9027,
      1 => 576,
      2 => 'Xã Bình Thạnh',
    ),
    9027 => 
    array (
      0 => 9028,
      1 => 576,
      2 => 'Xã Bình Hòa Trung',
    ),
    9028 => 
    array (
      0 => 9029,
      1 => 576,
      2 => 'Xã Bình Hòa Đông',
    ),
    9029 => 
    array (
      0 => 9030,
      1 => 576,
      2 => 'Thị trấn Bình Phong Thạnh',
    ),
    9030 => 
    array (
      0 => 9031,
      1 => 576,
      2 => 'Xã Tân Lập',
    ),
    9031 => 
    array (
      0 => 9032,
      1 => 576,
      2 => 'Xã Tân Thành',
    ),
    9032 => 
    array (
      0 => 9033,
      1 => 577,
      2 => 'Thị trấn Tân Thạnh',
    ),
    9033 => 
    array (
      0 => 9034,
      1 => 577,
      2 => 'Xã Bắc Hòa',
    ),
    9034 => 
    array (
      0 => 9035,
      1 => 577,
      2 => 'Xã Hậu Thạnh Tây',
    ),
    9035 => 
    array (
      0 => 9036,
      1 => 577,
      2 => 'Xã Nhơn Hòa Lập',
    ),
    9036 => 
    array (
      0 => 9037,
      1 => 577,
      2 => 'Xã Tân Lập',
    ),
    9037 => 
    array (
      0 => 9038,
      1 => 577,
      2 => 'Xã Hậu Thạnh Đông',
    ),
    9038 => 
    array (
      0 => 9039,
      1 => 577,
      2 => 'Xã Nhơn Hoà',
    ),
    9039 => 
    array (
      0 => 9040,
      1 => 577,
      2 => 'Xã Kiến Bình',
    ),
    9040 => 
    array (
      0 => 9041,
      1 => 577,
      2 => 'Xã Tân Thành',
    ),
    9041 => 
    array (
      0 => 9042,
      1 => 577,
      2 => 'Xã Tân Bình',
    ),
    9042 => 
    array (
      0 => 9043,
      1 => 577,
      2 => 'Xã Tân Ninh',
    ),
    9043 => 
    array (
      0 => 9044,
      1 => 577,
      2 => 'Xã Nhơn Ninh',
    ),
    9044 => 
    array (
      0 => 9045,
      1 => 577,
      2 => 'Xã Tân Hòa',
    ),
    9045 => 
    array (
      0 => 9046,
      1 => 578,
      2 => 'Thị trấn Thạnh Hóa',
    ),
    9046 => 
    array (
      0 => 9047,
      1 => 578,
      2 => 'Xã Tân Hiệp',
    ),
    9047 => 
    array (
      0 => 9048,
      1 => 578,
      2 => 'Xã Thuận Bình',
    ),
    9048 => 
    array (
      0 => 9049,
      1 => 578,
      2 => 'Xã Thạnh Phước',
    ),
    9049 => 
    array (
      0 => 9050,
      1 => 578,
      2 => 'Xã Thạnh Phú',
    ),
    9050 => 
    array (
      0 => 9051,
      1 => 578,
      2 => 'Xã Thuận Nghĩa Hòa',
    ),
    9051 => 
    array (
      0 => 9052,
      1 => 578,
      2 => 'Xã Thủy Đông',
    ),
    9052 => 
    array (
      0 => 9053,
      1 => 578,
      2 => 'Xã Thủy Tây',
    ),
    9053 => 
    array (
      0 => 9054,
      1 => 578,
      2 => 'Xã Tân Tây',
    ),
    9054 => 
    array (
      0 => 9055,
      1 => 578,
      2 => 'Xã Tân Đông',
    ),
    9055 => 
    array (
      0 => 9056,
      1 => 578,
      2 => 'Xã Thạnh An',
    ),
    9056 => 
    array (
      0 => 9057,
      1 => 579,
      2 => 'Thị trấn Đông Thành',
    ),
    9057 => 
    array (
      0 => 9058,
      1 => 579,
      2 => 'Xã Mỹ Quý Đông',
    ),
    9058 => 
    array (
      0 => 9059,
      1 => 579,
      2 => 'Xã Mỹ Thạnh Bắc',
    ),
    9059 => 
    array (
      0 => 9060,
      1 => 579,
      2 => 'Xã Mỹ Quý Tây',
    ),
    9060 => 
    array (
      0 => 9061,
      1 => 579,
      2 => 'Xã Mỹ Thạnh Tây',
    ),
    9061 => 
    array (
      0 => 9062,
      1 => 579,
      2 => 'Xã Mỹ Thạnh Đông',
    ),
    9062 => 
    array (
      0 => 9063,
      1 => 579,
      2 => 'Xã Bình Thành',
    ),
    9063 => 
    array (
      0 => 9064,
      1 => 579,
      2 => 'Xã Bình Hòa Bắc',
    ),
    9064 => 
    array (
      0 => 9065,
      1 => 579,
      2 => 'Xã Bình Hòa Hưng',
    ),
    9065 => 
    array (
      0 => 9066,
      1 => 579,
      2 => 'Xã Bình Hòa Nam',
    ),
    9066 => 
    array (
      0 => 9067,
      1 => 579,
      2 => 'Xã Mỹ Bình',
    ),
    9067 => 
    array (
      0 => 9068,
      1 => 580,
      2 => 'Thị trấn Hậu Nghĩa',
    ),
    9068 => 
    array (
      0 => 9069,
      1 => 580,
      2 => 'Thị trấn Hiệp Hòa',
    ),
    9069 => 
    array (
      0 => 9070,
      1 => 580,
      2 => 'Thị trấn Đức Hòa',
    ),
    9070 => 
    array (
      0 => 9071,
      1 => 580,
      2 => 'Xã Lộc Giang',
    ),
    9071 => 
    array (
      0 => 9072,
      1 => 580,
      2 => 'Xã An Ninh Đông',
    ),
    9072 => 
    array (
      0 => 9073,
      1 => 580,
      2 => 'Xã An Ninh Tây',
    ),
    9073 => 
    array (
      0 => 9074,
      1 => 580,
      2 => 'Xã Tân Mỹ',
    ),
    9074 => 
    array (
      0 => 9075,
      1 => 580,
      2 => 'Xã Hiệp Hòa',
    ),
    9075 => 
    array (
      0 => 9076,
      1 => 580,
      2 => 'Xã Đức Lập Thượng',
    ),
    9076 => 
    array (
      0 => 9077,
      1 => 580,
      2 => 'Xã Đức Lập Hạ',
    ),
    9077 => 
    array (
      0 => 9078,
      1 => 580,
      2 => 'Xã Tân Phú',
    ),
    9078 => 
    array (
      0 => 9079,
      1 => 580,
      2 => 'Xã Mỹ Hạnh Bắc',
    ),
    9079 => 
    array (
      0 => 9080,
      1 => 580,
      2 => 'Xã Đức Hòa Thượng',
    ),
    9080 => 
    array (
      0 => 9081,
      1 => 580,
      2 => 'Xã Hòa Khánh Tây',
    ),
    9081 => 
    array (
      0 => 9082,
      1 => 580,
      2 => 'Xã Hòa Khánh Đông',
    ),
    9082 => 
    array (
      0 => 9083,
      1 => 580,
      2 => 'Xã Mỹ Hạnh Nam',
    ),
    9083 => 
    array (
      0 => 9084,
      1 => 580,
      2 => 'Xã Hòa Khánh Nam',
    ),
    9084 => 
    array (
      0 => 9085,
      1 => 580,
      2 => 'Xã Đức Hòa Đông',
    ),
    9085 => 
    array (
      0 => 9086,
      1 => 580,
      2 => 'Xã Đức Hòa Hạ',
    ),
    9086 => 
    array (
      0 => 9087,
      1 => 580,
      2 => 'Xã Hựu Thạnh',
    ),
    9087 => 
    array (
      0 => 9088,
      1 => 581,
      2 => 'Thị trấn Bến Lức',
    ),
    9088 => 
    array (
      0 => 9089,
      1 => 581,
      2 => 'Xã Thạnh Lợi',
    ),
    9089 => 
    array (
      0 => 9090,
      1 => 581,
      2 => 'Xã Lương Bình',
    ),
    9090 => 
    array (
      0 => 9091,
      1 => 581,
      2 => 'Xã Thạnh Hòa',
    ),
    9091 => 
    array (
      0 => 9092,
      1 => 581,
      2 => 'Xã Lương Hòa',
    ),
    9092 => 
    array (
      0 => 9093,
      1 => 581,
      2 => 'Xã Tân Hòa',
    ),
    9093 => 
    array (
      0 => 9094,
      1 => 581,
      2 => 'Xã Tân Bửu',
    ),
    9094 => 
    array (
      0 => 9095,
      1 => 581,
      2 => 'Xã An Thạnh',
    ),
    9095 => 
    array (
      0 => 9096,
      1 => 581,
      2 => 'Xã Bình Đức',
    ),
    9096 => 
    array (
      0 => 9097,
      1 => 581,
      2 => 'Xã Mỹ Yên',
    ),
    9097 => 
    array (
      0 => 9098,
      1 => 581,
      2 => 'Xã Thanh Phú',
    ),
    9098 => 
    array (
      0 => 9099,
      1 => 581,
      2 => 'Xã Long Hiệp',
    ),
    9099 => 
    array (
      0 => 9100,
      1 => 581,
      2 => 'Xã Thạnh Đức',
    ),
    9100 => 
    array (
      0 => 9101,
      1 => 581,
      2 => 'Xã Phước Lợi',
    ),
    9101 => 
    array (
      0 => 9102,
      1 => 581,
      2 => 'Xã Nhựt Chánh',
    ),
    9102 => 
    array (
      0 => 9103,
      1 => 582,
      2 => 'Thị trấn Thủ Thừa',
    ),
    9103 => 
    array (
      0 => 9104,
      1 => 582,
      2 => 'Xã Long Thạnh',
    ),
    9104 => 
    array (
      0 => 9105,
      1 => 582,
      2 => 'Xã Tân Thành',
    ),
    9105 => 
    array (
      0 => 9106,
      1 => 582,
      2 => 'Xã Long Thuận',
    ),
    9106 => 
    array (
      0 => 9107,
      1 => 582,
      2 => 'Xã Mỹ Lạc',
    ),
    9107 => 
    array (
      0 => 9108,
      1 => 582,
      2 => 'Xã Mỹ Thạnh',
    ),
    9108 => 
    array (
      0 => 9109,
      1 => 582,
      2 => 'Xã Bình An',
    ),
    9109 => 
    array (
      0 => 9110,
      1 => 582,
      2 => 'Xã Nhị Thành',
    ),
    9110 => 
    array (
      0 => 9111,
      1 => 582,
      2 => 'Xã Mỹ An',
    ),
    9111 => 
    array (
      0 => 9112,
      1 => 582,
      2 => 'Xã Bình Thạnh',
    ),
    9112 => 
    array (
      0 => 9113,
      1 => 582,
      2 => 'Xã Mỹ Phú',
    ),
    9113 => 
    array (
      0 => 9114,
      1 => 582,
      2 => 'Xã Tân Long',
    ),
    9114 => 
    array (
      0 => 9115,
      1 => 583,
      2 => 'Thị trấn Tân Trụ',
    ),
    9115 => 
    array (
      0 => 9116,
      1 => 583,
      2 => 'Xã Tân Bình',
    ),
    9116 => 
    array (
      0 => 9117,
      1 => 583,
      2 => 'Xã Quê Mỹ Thạnh',
    ),
    9117 => 
    array (
      0 => 9118,
      1 => 583,
      2 => 'Xã Lạc Tấn',
    ),
    9118 => 
    array (
      0 => 9119,
      1 => 583,
      2 => 'Xã Bình Trinh Đông',
    ),
    9119 => 
    array (
      0 => 9120,
      1 => 583,
      2 => 'Xã Tân Phước Tây',
    ),
    9120 => 
    array (
      0 => 9121,
      1 => 583,
      2 => 'Xã Bình Lãng',
    ),
    9121 => 
    array (
      0 => 9122,
      1 => 583,
      2 => 'Xã Bình Tịnh',
    ),
    9122 => 
    array (
      0 => 9123,
      1 => 583,
      2 => 'Xã Đức Tân',
    ),
    9123 => 
    array (
      0 => 9124,
      1 => 583,
      2 => 'Xã Nhựt Ninh',
    ),
    9124 => 
    array (
      0 => 9125,
      1 => 584,
      2 => 'Thị trấn Cần Đước',
    ),
    9125 => 
    array (
      0 => 9126,
      1 => 584,
      2 => 'Xã Long Trạch',
    ),
    9126 => 
    array (
      0 => 9127,
      1 => 584,
      2 => 'Xã Long Khê',
    ),
    9127 => 
    array (
      0 => 9128,
      1 => 584,
      2 => 'Xã Long Định',
    ),
    9128 => 
    array (
      0 => 9129,
      1 => 584,
      2 => 'Xã Phước Vân',
    ),
    9129 => 
    array (
      0 => 9130,
      1 => 584,
      2 => 'Xã Long Hòa',
    ),
    9130 => 
    array (
      0 => 9131,
      1 => 584,
      2 => 'Xã Long Cang',
    ),
    9131 => 
    array (
      0 => 9132,
      1 => 584,
      2 => 'Xã Long Sơn',
    ),
    9132 => 
    array (
      0 => 9133,
      1 => 584,
      2 => 'Xã Tân Trạch',
    ),
    9133 => 
    array (
      0 => 9134,
      1 => 584,
      2 => 'Xã Mỹ Lệ',
    ),
    9134 => 
    array (
      0 => 9135,
      1 => 584,
      2 => 'Xã Tân Lân',
    ),
    9135 => 
    array (
      0 => 9136,
      1 => 584,
      2 => 'Xã Phước Tuy',
    ),
    9136 => 
    array (
      0 => 9137,
      1 => 584,
      2 => 'Xã Long Hựu Đông',
    ),
    9137 => 
    array (
      0 => 9138,
      1 => 584,
      2 => 'Xã Tân Ân',
    ),
    9138 => 
    array (
      0 => 9139,
      1 => 584,
      2 => 'Xã Phước Đông',
    ),
    9139 => 
    array (
      0 => 9140,
      1 => 584,
      2 => 'Xã Long Hựu Tây',
    ),
    9140 => 
    array (
      0 => 9141,
      1 => 584,
      2 => 'Xã Tân Chánh',
    ),
    9141 => 
    array (
      0 => 9142,
      1 => 585,
      2 => 'Thị trấn Cần Giuộc',
    ),
    9142 => 
    array (
      0 => 9143,
      1 => 585,
      2 => 'Xã Phước Lý',
    ),
    9143 => 
    array (
      0 => 9144,
      1 => 585,
      2 => 'Xã Long Thượng',
    ),
    9144 => 
    array (
      0 => 9145,
      1 => 585,
      2 => 'Xã Long Hậu',
    ),
    9145 => 
    array (
      0 => 9146,
      1 => 585,
      2 => 'Xã Phước Hậu',
    ),
    9146 => 
    array (
      0 => 9147,
      1 => 585,
      2 => 'Xã Mỹ Lộc',
    ),
    9147 => 
    array (
      0 => 9148,
      1 => 585,
      2 => 'Xã Phước Lại',
    ),
    9148 => 
    array (
      0 => 9149,
      1 => 585,
      2 => 'Xã Phước Lâm',
    ),
    9149 => 
    array (
      0 => 9150,
      1 => 585,
      2 => 'Xã Thuận Thành',
    ),
    9150 => 
    array (
      0 => 9151,
      1 => 585,
      2 => 'Xã Phước Vĩnh Tây',
    ),
    9151 => 
    array (
      0 => 9152,
      1 => 585,
      2 => 'Xã Phước Vĩnh Đông',
    ),
    9152 => 
    array (
      0 => 9153,
      1 => 585,
      2 => 'Xã Long An',
    ),
    9153 => 
    array (
      0 => 9154,
      1 => 585,
      2 => 'Xã Long Phụng',
    ),
    9154 => 
    array (
      0 => 9155,
      1 => 585,
      2 => 'Xã Đông Thạnh',
    ),
    9155 => 
    array (
      0 => 9156,
      1 => 585,
      2 => 'Xã Tân Tập',
    ),
    9156 => 
    array (
      0 => 9157,
      1 => 586,
      2 => 'Thị trấn Tầm Vu',
    ),
    9157 => 
    array (
      0 => 9158,
      1 => 586,
      2 => 'Xã Bình Quới',
    ),
    9158 => 
    array (
      0 => 9159,
      1 => 586,
      2 => 'Xã Hòa Phú',
    ),
    9159 => 
    array (
      0 => 9160,
      1 => 586,
      2 => 'Xã Phú Ngãi Trị',
    ),
    9160 => 
    array (
      0 => 9161,
      1 => 586,
      2 => 'Xã Vĩnh Công',
    ),
    9161 => 
    array (
      0 => 9162,
      1 => 586,
      2 => 'Xã Thuận Mỹ',
    ),
    9162 => 
    array (
      0 => 9163,
      1 => 586,
      2 => 'Xã Hiệp Thạnh',
    ),
    9163 => 
    array (
      0 => 9164,
      1 => 586,
      2 => 'Xã Phước Tân Hưng',
    ),
    9164 => 
    array (
      0 => 9165,
      1 => 586,
      2 => 'Xã Thanh Phú Long',
    ),
    9165 => 
    array (
      0 => 9166,
      1 => 586,
      2 => 'Xã Dương Xuân Hội',
    ),
    9166 => 
    array (
      0 => 9167,
      1 => 586,
      2 => 'Xã An Lục Long',
    ),
    9167 => 
    array (
      0 => 9168,
      1 => 586,
      2 => 'Xã Long Trì',
    ),
    9168 => 
    array (
      0 => 9169,
      1 => 586,
      2 => 'Xã Thanh Vĩnh Đông',
    ),
    9169 => 
    array (
      0 => 9170,
      1 => 587,
      2 => 'Phường 5',
    ),
    9170 => 
    array (
      0 => 9171,
      1 => 587,
      2 => 'Phường 4',
    ),
    9171 => 
    array (
      0 => 9172,
      1 => 587,
      2 => 'Phường 7',
    ),
    9172 => 
    array (
      0 => 9173,
      1 => 587,
      2 => 'Phường 3',
    ),
    9173 => 
    array (
      0 => 9174,
      1 => 587,
      2 => 'Phường 1',
    ),
    9174 => 
    array (
      0 => 9175,
      1 => 587,
      2 => 'Phường 2',
    ),
    9175 => 
    array (
      0 => 9176,
      1 => 587,
      2 => 'Phường 8',
    ),
    9176 => 
    array (
      0 => 9177,
      1 => 587,
      2 => 'Phường 6',
    ),
    9177 => 
    array (
      0 => 9178,
      1 => 587,
      2 => 'Phường 9',
    ),
    9178 => 
    array (
      0 => 9179,
      1 => 587,
      2 => 'Phường 10',
    ),
    9179 => 
    array (
      0 => 9180,
      1 => 587,
      2 => 'Phường Tân Long',
    ),
    9180 => 
    array (
      0 => 9181,
      1 => 587,
      2 => 'Xã Đạo Thạnh',
    ),
    9181 => 
    array (
      0 => 9182,
      1 => 587,
      2 => 'Xã Trung An',
    ),
    9182 => 
    array (
      0 => 9183,
      1 => 587,
      2 => 'Xã Mỹ Phong',
    ),
    9183 => 
    array (
      0 => 9184,
      1 => 587,
      2 => 'Xã Tân Mỹ Chánh',
    ),
    9184 => 
    array (
      0 => 9185,
      1 => 587,
      2 => 'Xã Phước Thạnh',
    ),
    9185 => 
    array (
      0 => 9186,
      1 => 587,
      2 => 'Xã Thới Sơn',
    ),
    9186 => 
    array (
      0 => 9187,
      1 => 588,
      2 => 'Phường 3',
    ),
    9187 => 
    array (
      0 => 9188,
      1 => 588,
      2 => 'Phường 2',
    ),
    9188 => 
    array (
      0 => 9189,
      1 => 588,
      2 => 'Phường 4',
    ),
    9189 => 
    array (
      0 => 9190,
      1 => 588,
      2 => 'Phường 1',
    ),
    9190 => 
    array (
      0 => 9191,
      1 => 588,
      2 => 'Phường 5',
    ),
    9191 => 
    array (
      0 => 9192,
      1 => 588,
      2 => 'Xã Long Hưng',
    ),
    9192 => 
    array (
      0 => 9193,
      1 => 588,
      2 => 'Xã Long Thuận',
    ),
    9193 => 
    array (
      0 => 9194,
      1 => 588,
      2 => 'Xã Long Chánh',
    ),
    9194 => 
    array (
      0 => 9195,
      1 => 588,
      2 => 'Xã Long Hòa',
    ),
    9195 => 
    array (
      0 => 9196,
      1 => 588,
      2 => 'Xã Bình Đông',
    ),
    9196 => 
    array (
      0 => 9197,
      1 => 588,
      2 => 'Xã Bình Xuân',
    ),
    9197 => 
    array (
      0 => 9198,
      1 => 588,
      2 => 'Xã Tân Trung',
    ),
    9198 => 
    array (
      0 => 9199,
      1 => 589,
      2 => 'Phường 1',
    ),
    9199 => 
    array (
      0 => 9200,
      1 => 589,
      2 => 'Phường 2',
    ),
    9200 => 
    array (
      0 => 9201,
      1 => 589,
      2 => 'Phường 3',
    ),
    9201 => 
    array (
      0 => 9202,
      1 => 589,
      2 => 'Phường 4',
    ),
    9202 => 
    array (
      0 => 9203,
      1 => 589,
      2 => 'Phường 5',
    ),
    9203 => 
    array (
      0 => 9204,
      1 => 589,
      2 => 'Xã Mỹ Phước Tây',
    ),
    9204 => 
    array (
      0 => 9205,
      1 => 589,
      2 => 'Xã Mỹ Hạnh Đông',
    ),
    9205 => 
    array (
      0 => 9206,
      1 => 589,
      2 => 'Xã Mỹ Hạnh Trung',
    ),
    9206 => 
    array (
      0 => 9207,
      1 => 589,
      2 => 'Xã Tân Phú',
    ),
    9207 => 
    array (
      0 => 9208,
      1 => 589,
      2 => 'Xã Tân Bình',
    ),
    9208 => 
    array (
      0 => 9209,
      1 => 589,
      2 => 'Xã Tân Hội',
    ),
    9209 => 
    array (
      0 => 9210,
      1 => 589,
      2 => 'Phường Nhị Mỹ',
    ),
    9210 => 
    array (
      0 => 9211,
      1 => 589,
      2 => 'Xã Nhị Quý',
    ),
    9211 => 
    array (
      0 => 9212,
      1 => 589,
      2 => 'Xã Thanh Hòa',
    ),
    9212 => 
    array (
      0 => 9213,
      1 => 589,
      2 => 'Xã Phú Quý',
    ),
    9213 => 
    array (
      0 => 9214,
      1 => 589,
      2 => 'Xã Long Khánh',
    ),
    9214 => 
    array (
      0 => 9215,
      1 => 590,
      2 => 'Thị trấn Mỹ Phước',
    ),
    9215 => 
    array (
      0 => 9216,
      1 => 590,
      2 => 'Xã Tân Hòa Đông',
    ),
    9216 => 
    array (
      0 => 9217,
      1 => 590,
      2 => 'Xã Thạnh Tân',
    ),
    9217 => 
    array (
      0 => 9218,
      1 => 590,
      2 => 'Xã Thạnh Mỹ',
    ),
    9218 => 
    array (
      0 => 9219,
      1 => 590,
      2 => 'Xã Thạnh Hoà',
    ),
    9219 => 
    array (
      0 => 9220,
      1 => 590,
      2 => 'Xã Phú Mỹ',
    ),
    9220 => 
    array (
      0 => 9221,
      1 => 590,
      2 => 'Xã Tân Hòa Thành',
    ),
    9221 => 
    array (
      0 => 9222,
      1 => 590,
      2 => 'Xã Hưng Thạnh',
    ),
    9222 => 
    array (
      0 => 9223,
      1 => 590,
      2 => 'Xã Tân Lập 1',
    ),
    9223 => 
    array (
      0 => 9224,
      1 => 590,
      2 => 'Xã Tân Hòa Tây',
    ),
    9224 => 
    array (
      0 => 9225,
      1 => 590,
      2 => 'Xã Tân Lập 2',
    ),
    9225 => 
    array (
      0 => 9226,
      1 => 590,
      2 => 'Xã Phước Lập',
    ),
    9226 => 
    array (
      0 => 9227,
      1 => 591,
      2 => 'Thị trấn Cái Bè',
    ),
    9227 => 
    array (
      0 => 9228,
      1 => 591,
      2 => 'Xã Hậu Mỹ Bắc B',
    ),
    9228 => 
    array (
      0 => 9229,
      1 => 591,
      2 => 'Xã Hậu Mỹ Bắc A',
    ),
    9229 => 
    array (
      0 => 9230,
      1 => 591,
      2 => 'Xã Mỹ Trung',
    ),
    9230 => 
    array (
      0 => 9231,
      1 => 591,
      2 => 'Xã Hậu Mỹ Trinh',
    ),
    9231 => 
    array (
      0 => 9232,
      1 => 591,
      2 => 'Xã Hậu Mỹ Phú',
    ),
    9232 => 
    array (
      0 => 9233,
      1 => 591,
      2 => 'Xã Mỹ Tân',
    ),
    9233 => 
    array (
      0 => 9234,
      1 => 591,
      2 => 'Xã Mỹ Lợi B',
    ),
    9234 => 
    array (
      0 => 9235,
      1 => 591,
      2 => 'Xã Thiện Trung',
    ),
    9235 => 
    array (
      0 => 9236,
      1 => 591,
      2 => 'Xã Mỹ Hội',
    ),
    9236 => 
    array (
      0 => 9237,
      1 => 591,
      2 => 'Xã An Cư',
    ),
    9237 => 
    array (
      0 => 9238,
      1 => 591,
      2 => 'Xã Hậu Thành',
    ),
    9238 => 
    array (
      0 => 9239,
      1 => 591,
      2 => 'Xã Mỹ Lợi A',
    ),
    9239 => 
    array (
      0 => 9240,
      1 => 591,
      2 => 'Xã Hòa Khánh',
    ),
    9240 => 
    array (
      0 => 9241,
      1 => 591,
      2 => 'Xã Thiện Trí',
    ),
    9241 => 
    array (
      0 => 9242,
      1 => 591,
      2 => 'Xã Mỹ Đức Đông',
    ),
    9242 => 
    array (
      0 => 9243,
      1 => 591,
      2 => 'Xã Mỹ Đức Tây',
    ),
    9243 => 
    array (
      0 => 9244,
      1 => 591,
      2 => 'Xã Đông Hòa Hiệp',
    ),
    9244 => 
    array (
      0 => 9245,
      1 => 591,
      2 => 'Xã An Thái Đông',
    ),
    9245 => 
    array (
      0 => 9246,
      1 => 591,
      2 => 'Xã Tân Hưng',
    ),
    9246 => 
    array (
      0 => 9247,
      1 => 591,
      2 => 'Xã Mỹ Lương',
    ),
    9247 => 
    array (
      0 => 9248,
      1 => 591,
      2 => 'Xã Tân Thanh',
    ),
    9248 => 
    array (
      0 => 9249,
      1 => 591,
      2 => 'Xã An Thái Trung',
    ),
    9249 => 
    array (
      0 => 9250,
      1 => 591,
      2 => 'Xã An Hữu',
    ),
    9250 => 
    array (
      0 => 9251,
      1 => 591,
      2 => 'Xã Hòa Hưng',
    ),
    9251 => 
    array (
      0 => 9252,
      1 => 592,
      2 => 'Xã Thạnh Lộc',
    ),
    9252 => 
    array (
      0 => 9253,
      1 => 592,
      2 => 'Xã Mỹ Thành Bắc',
    ),
    9253 => 
    array (
      0 => 9254,
      1 => 592,
      2 => 'Xã Phú Cường',
    ),
    9254 => 
    array (
      0 => 9255,
      1 => 592,
      2 => 'Xã Mỹ Thành Nam',
    ),
    9255 => 
    array (
      0 => 9256,
      1 => 592,
      2 => 'Xã Phú Nhuận',
    ),
    9256 => 
    array (
      0 => 9257,
      1 => 592,
      2 => 'Xã Bình Phú',
    ),
    9257 => 
    array (
      0 => 9258,
      1 => 592,
      2 => 'Xã Cẩm Sơn',
    ),
    9258 => 
    array (
      0 => 9259,
      1 => 592,
      2 => 'Xã Phú An',
    ),
    9259 => 
    array (
      0 => 9260,
      1 => 592,
      2 => 'Xã Mỹ Long',
    ),
    9260 => 
    array (
      0 => 9261,
      1 => 592,
      2 => 'Xã Long Tiên',
    ),
    9261 => 
    array (
      0 => 9262,
      1 => 592,
      2 => 'Xã Hiệp Đức',
    ),
    9262 => 
    array (
      0 => 9263,
      1 => 592,
      2 => 'Xã Long Trung',
    ),
    9263 => 
    array (
      0 => 9264,
      1 => 592,
      2 => 'Xã Hội Xuân',
    ),
    9264 => 
    array (
      0 => 9265,
      1 => 592,
      2 => 'Xã Tân Phong',
    ),
    9265 => 
    array (
      0 => 9266,
      1 => 592,
      2 => 'Xã Tam Bình',
    ),
    9266 => 
    array (
      0 => 9267,
      1 => 592,
      2 => 'Xã Ngũ Hiệp',
    ),
    9267 => 
    array (
      0 => 9268,
      1 => 593,
      2 => 'Thị trấn Tân Hiệp',
    ),
    9268 => 
    array (
      0 => 9269,
      1 => 593,
      2 => 'Xã Tân Hội Đông',
    ),
    9269 => 
    array (
      0 => 9270,
      1 => 593,
      2 => 'Xã Tân Hương',
    ),
    9270 => 
    array (
      0 => 9271,
      1 => 593,
      2 => 'Xã Tân Lý Đông',
    ),
    9271 => 
    array (
      0 => 9272,
      1 => 593,
      2 => 'Xã Tân Lý Tây',
    ),
    9272 => 
    array (
      0 => 9273,
      1 => 593,
      2 => 'Xã Thân Cửu Nghĩa',
    ),
    9273 => 
    array (
      0 => 9274,
      1 => 593,
      2 => 'Xã Tam Hiệp',
    ),
    9274 => 
    array (
      0 => 9275,
      1 => 593,
      2 => 'Xã Điềm Hy',
    ),
    9275 => 
    array (
      0 => 9276,
      1 => 593,
      2 => 'Xã Nhị Bình',
    ),
    9276 => 
    array (
      0 => 9277,
      1 => 593,
      2 => 'Xã Dưỡng Điềm',
    ),
    9277 => 
    array (
      0 => 9278,
      1 => 593,
      2 => 'Xã Đông Hòa',
    ),
    9278 => 
    array (
      0 => 9279,
      1 => 593,
      2 => 'Xã Long Định',
    ),
    9279 => 
    array (
      0 => 9280,
      1 => 593,
      2 => 'Xã Hữu Đạo',
    ),
    9280 => 
    array (
      0 => 9281,
      1 => 593,
      2 => 'Xã Long An',
    ),
    9281 => 
    array (
      0 => 9282,
      1 => 593,
      2 => 'Xã Long Hưng',
    ),
    9282 => 
    array (
      0 => 9283,
      1 => 593,
      2 => 'Xã Bình Trưng',
    ),
    9283 => 
    array (
      0 => 9284,
      1 => 593,
      2 => 'Xã Thạnh Phú',
    ),
    9284 => 
    array (
      0 => 9285,
      1 => 593,
      2 => 'Xã Bàn Long',
    ),
    9285 => 
    array (
      0 => 9286,
      1 => 593,
      2 => 'Xã Vĩnh Kim',
    ),
    9286 => 
    array (
      0 => 9287,
      1 => 593,
      2 => 'Xã Bình Đức',
    ),
    9287 => 
    array (
      0 => 9288,
      1 => 593,
      2 => 'Xã Song Thuận',
    ),
    9288 => 
    array (
      0 => 9289,
      1 => 593,
      2 => 'Xã Kim Sơn',
    ),
    9289 => 
    array (
      0 => 9290,
      1 => 593,
      2 => 'Xã Phú Phong',
    ),
    9290 => 
    array (
      0 => 9291,
      1 => 594,
      2 => 'Thị trấn Chợ Gạo',
    ),
    9291 => 
    array (
      0 => 9292,
      1 => 594,
      2 => 'Xã Trung Hòa',
    ),
    9292 => 
    array (
      0 => 9293,
      1 => 594,
      2 => 'Xã Hòa Tịnh',
    ),
    9293 => 
    array (
      0 => 9294,
      1 => 594,
      2 => 'Xã Mỹ Tịnh An',
    ),
    9294 => 
    array (
      0 => 9295,
      1 => 594,
      2 => 'Xã Tân Bình Thạnh',
    ),
    9295 => 
    array (
      0 => 9296,
      1 => 594,
      2 => 'Xã Phú Kiết',
    ),
    9296 => 
    array (
      0 => 9297,
      1 => 594,
      2 => 'Xã Lương Hòa Lạc',
    ),
    9297 => 
    array (
      0 => 9298,
      1 => 594,
      2 => 'Xã Thanh Bình',
    ),
    9298 => 
    array (
      0 => 9299,
      1 => 594,
      2 => 'Xã Quơn Long',
    ),
    9299 => 
    array (
      0 => 9300,
      1 => 594,
      2 => 'Xã Bình Phục Nhứt',
    ),
    9300 => 
    array (
      0 => 9301,
      1 => 594,
      2 => 'Xã Đăng Hưng Phước',
    ),
    9301 => 
    array (
      0 => 9302,
      1 => 594,
      2 => 'Xã Tân Thuận Bình',
    ),
    9302 => 
    array (
      0 => 9303,
      1 => 594,
      2 => 'Xã Song Bình',
    ),
    9303 => 
    array (
      0 => 9304,
      1 => 594,
      2 => 'Xã Bình Phan',
    ),
    9304 => 
    array (
      0 => 9305,
      1 => 594,
      2 => 'Xã Long Bình Điền',
    ),
    9305 => 
    array (
      0 => 9306,
      1 => 594,
      2 => 'Xã An Thạnh Thủy',
    ),
    9306 => 
    array (
      0 => 9307,
      1 => 594,
      2 => 'Xã Xuân Đông',
    ),
    9307 => 
    array (
      0 => 9308,
      1 => 594,
      2 => 'Xã Hòa Định',
    ),
    9308 => 
    array (
      0 => 9309,
      1 => 594,
      2 => 'Xã Bình Ninh',
    ),
    9309 => 
    array (
      0 => 9310,
      1 => 595,
      2 => 'Thị trấn Vĩnh Bình',
    ),
    9310 => 
    array (
      0 => 9311,
      1 => 595,
      2 => 'Xã Đồng Sơn',
    ),
    9311 => 
    array (
      0 => 9312,
      1 => 595,
      2 => 'Xã Bình Phú',
    ),
    9312 => 
    array (
      0 => 9313,
      1 => 595,
      2 => 'Xã Đồng Thạnh',
    ),
    9313 => 
    array (
      0 => 9314,
      1 => 595,
      2 => 'Xã Thành Công',
    ),
    9314 => 
    array (
      0 => 9315,
      1 => 595,
      2 => 'Xã Bình Nhì',
    ),
    9315 => 
    array (
      0 => 9316,
      1 => 595,
      2 => 'Xã Yên Luông',
    ),
    9316 => 
    array (
      0 => 9317,
      1 => 595,
      2 => 'Xã Thạnh Trị',
    ),
    9317 => 
    array (
      0 => 9318,
      1 => 595,
      2 => 'Xã Thạnh Nhựt',
    ),
    9318 => 
    array (
      0 => 9319,
      1 => 595,
      2 => 'Xã Long Vĩnh',
    ),
    9319 => 
    array (
      0 => 9320,
      1 => 595,
      2 => 'Xã Bình Tân',
    ),
    9320 => 
    array (
      0 => 9321,
      1 => 595,
      2 => 'Xã Vĩnh Hựu',
    ),
    9321 => 
    array (
      0 => 9322,
      1 => 595,
      2 => 'Xã Long Bình',
    ),
    9322 => 
    array (
      0 => 9323,
      1 => 596,
      2 => 'Thị trấn Tân Hòa',
    ),
    9323 => 
    array (
      0 => 9324,
      1 => 596,
      2 => 'Xã Tăng Hoà',
    ),
    9324 => 
    array (
      0 => 9325,
      1 => 596,
      2 => 'Xã Tân Phước',
    ),
    9325 => 
    array (
      0 => 9326,
      1 => 596,
      2 => 'Xã Gia Thuận',
    ),
    9326 => 
    array (
      0 => 9327,
      1 => 596,
      2 => 'Thị trấn Vàm Láng',
    ),
    9327 => 
    array (
      0 => 9328,
      1 => 596,
      2 => 'Xã Tân Tây',
    ),
    9328 => 
    array (
      0 => 9329,
      1 => 596,
      2 => 'Xã Kiểng Phước',
    ),
    9329 => 
    array (
      0 => 9330,
      1 => 596,
      2 => 'Xã Tân Đông',
    ),
    9330 => 
    array (
      0 => 9331,
      1 => 596,
      2 => 'Xã Bình Ân',
    ),
    9331 => 
    array (
      0 => 9332,
      1 => 596,
      2 => 'Xã Tân Điền',
    ),
    9332 => 
    array (
      0 => 9333,
      1 => 596,
      2 => 'Xã Bình Nghị',
    ),
    9333 => 
    array (
      0 => 9334,
      1 => 596,
      2 => 'Xã Phước Trung',
    ),
    9334 => 
    array (
      0 => 9335,
      1 => 596,
      2 => 'Xã Tân Thành',
    ),
    9335 => 
    array (
      0 => 9336,
      1 => 597,
      2 => 'Xã Tân Thới',
    ),
    9336 => 
    array (
      0 => 9337,
      1 => 597,
      2 => 'Xã Tân Phú',
    ),
    9337 => 
    array (
      0 => 9338,
      1 => 597,
      2 => 'Xã Phú Thạnh',
    ),
    9338 => 
    array (
      0 => 9339,
      1 => 597,
      2 => 'Xã Tân Thạnh',
    ),
    9339 => 
    array (
      0 => 9340,
      1 => 597,
      2 => 'Xã Phú Đông',
    ),
    9340 => 
    array (
      0 => 9341,
      1 => 597,
      2 => 'Xã Phú Tân',
    ),
    9341 => 
    array (
      0 => 9342,
      1 => 598,
      2 => 'Phường Phú Khương',
    ),
    9342 => 
    array (
      0 => 9343,
      1 => 598,
      2 => 'Phường Phú Tân',
    ),
    9343 => 
    array (
      0 => 9344,
      1 => 598,
      2 => 'Phường 8',
    ),
    9344 => 
    array (
      0 => 9345,
      1 => 598,
      2 => 'Phường 6',
    ),
    9345 => 
    array (
      0 => 9346,
      1 => 598,
      2 => 'Phường 4',
    ),
    9346 => 
    array (
      0 => 9347,
      1 => 598,
      2 => 'Phường 5',
    ),
    9347 => 
    array (
      0 => 9348,
      1 => 598,
      2 => 'Phường An Hội',
    ),
    9348 => 
    array (
      0 => 9349,
      1 => 598,
      2 => 'Phường 7',
    ),
    9349 => 
    array (
      0 => 9350,
      1 => 598,
      2 => 'Xã Sơn Đông',
    ),
    9350 => 
    array (
      0 => 9351,
      1 => 598,
      2 => 'Xã Phú Hưng',
    ),
    9351 => 
    array (
      0 => 9352,
      1 => 598,
      2 => 'Xã Bình Phú',
    ),
    9352 => 
    array (
      0 => 9353,
      1 => 598,
      2 => 'Xã Mỹ Thạnh An',
    ),
    9353 => 
    array (
      0 => 9354,
      1 => 598,
      2 => 'Xã Nhơn Thạnh',
    ),
    9354 => 
    array (
      0 => 9355,
      1 => 598,
      2 => 'Xã Phú Nhuận',
    ),
    9355 => 
    array (
      0 => 9356,
      1 => 599,
      2 => 'Thị trấn Châu Thành',
    ),
    9356 => 
    array (
      0 => 9357,
      1 => 599,
      2 => 'Xã Tân Thạch',
    ),
    9357 => 
    array (
      0 => 9358,
      1 => 599,
      2 => 'Xã Qưới Sơn',
    ),
    9358 => 
    array (
      0 => 9359,
      1 => 599,
      2 => 'Xã An Khánh',
    ),
    9359 => 
    array (
      0 => 9360,
      1 => 599,
      2 => 'Xã Giao Long',
    ),
    9360 => 
    array (
      0 => 9361,
      1 => 599,
      2 => 'Xã Phú Túc',
    ),
    9361 => 
    array (
      0 => 9362,
      1 => 599,
      2 => 'Xã Phú Đức',
    ),
    9362 => 
    array (
      0 => 9363,
      1 => 599,
      2 => 'Xã Phú An Hòa',
    ),
    9363 => 
    array (
      0 => 9364,
      1 => 599,
      2 => 'Xã An Phước',
    ),
    9364 => 
    array (
      0 => 9365,
      1 => 599,
      2 => 'Xã Tam Phước',
    ),
    9365 => 
    array (
      0 => 9366,
      1 => 599,
      2 => 'Xã Thành Triệu',
    ),
    9366 => 
    array (
      0 => 9367,
      1 => 599,
      2 => 'Xã Tường Đa',
    ),
    9367 => 
    array (
      0 => 9368,
      1 => 599,
      2 => 'Xã Tân Phú',
    ),
    9368 => 
    array (
      0 => 9369,
      1 => 599,
      2 => 'Xã Quới Thành',
    ),
    9369 => 
    array (
      0 => 9370,
      1 => 599,
      2 => 'Xã Phước Thạnh',
    ),
    9370 => 
    array (
      0 => 9371,
      1 => 599,
      2 => 'Xã An Hóa',
    ),
    9371 => 
    array (
      0 => 9372,
      1 => 599,
      2 => 'Xã Tiên Long',
    ),
    9372 => 
    array (
      0 => 9373,
      1 => 599,
      2 => 'Xã An Hiệp',
    ),
    9373 => 
    array (
      0 => 9374,
      1 => 599,
      2 => 'Xã Hữu Định',
    ),
    9374 => 
    array (
      0 => 9375,
      1 => 599,
      2 => 'Xã Tiên Thủy',
    ),
    9375 => 
    array (
      0 => 9376,
      1 => 599,
      2 => 'Xã Sơn Hòa',
    ),
    9376 => 
    array (
      0 => 9377,
      1 => 600,
      2 => 'Thị trấn Chợ Lách',
    ),
    9377 => 
    array (
      0 => 9378,
      1 => 600,
      2 => 'Xã Phú Phụng',
    ),
    9378 => 
    array (
      0 => 9379,
      1 => 600,
      2 => 'Xã Sơn Định',
    ),
    9379 => 
    array (
      0 => 9380,
      1 => 600,
      2 => 'Xã Vĩnh Bình',
    ),
    9380 => 
    array (
      0 => 9381,
      1 => 600,
      2 => 'Xã Hòa Nghĩa',
    ),
    9381 => 
    array (
      0 => 9382,
      1 => 600,
      2 => 'Xã Long Thới',
    ),
    9382 => 
    array (
      0 => 9383,
      1 => 600,
      2 => 'Xã Phú Sơn',
    ),
    9383 => 
    array (
      0 => 9384,
      1 => 600,
      2 => 'Xã Tân Thiềng',
    ),
    9384 => 
    array (
      0 => 9385,
      1 => 600,
      2 => 'Xã Vĩnh Thành',
    ),
    9385 => 
    array (
      0 => 9386,
      1 => 600,
      2 => 'Xã Vĩnh Hòa',
    ),
    9386 => 
    array (
      0 => 9387,
      1 => 600,
      2 => 'Xã Hưng Khánh Trung B',
    ),
    9387 => 
    array (
      0 => 9388,
      1 => 601,
      2 => 'Thị trấn Mỏ Cày',
    ),
    9388 => 
    array (
      0 => 9389,
      1 => 601,
      2 => 'Xã Định Thủy',
    ),
    9389 => 
    array (
      0 => 9390,
      1 => 601,
      2 => 'Xã Đa Phước Hội',
    ),
    9390 => 
    array (
      0 => 9391,
      1 => 601,
      2 => 'Xã Tân Hội',
    ),
    9391 => 
    array (
      0 => 9392,
      1 => 601,
      2 => 'Xã Phước Hiệp',
    ),
    9392 => 
    array (
      0 => 9393,
      1 => 601,
      2 => 'Xã Bình Khánh',
    ),
    9393 => 
    array (
      0 => 9394,
      1 => 601,
      2 => 'Xã An Thạnh',
    ),
    9394 => 
    array (
      0 => 9395,
      1 => 601,
      2 => 'Xã An Định',
    ),
    9395 => 
    array (
      0 => 9396,
      1 => 601,
      2 => 'Xã Thành Thới B',
    ),
    9396 => 
    array (
      0 => 9397,
      1 => 601,
      2 => 'Xã Tân Trung',
    ),
    9397 => 
    array (
      0 => 9398,
      1 => 601,
      2 => 'Xã An Thới',
    ),
    9398 => 
    array (
      0 => 9399,
      1 => 601,
      2 => 'Xã Thành Thới A',
    ),
    9399 => 
    array (
      0 => 9400,
      1 => 601,
      2 => 'Xã Minh Đức',
    ),
    9400 => 
    array (
      0 => 9401,
      1 => 601,
      2 => 'Xã Ngãi Đăng',
    ),
    9401 => 
    array (
      0 => 9402,
      1 => 601,
      2 => 'Xã Cẩm Sơn',
    ),
    9402 => 
    array (
      0 => 9403,
      1 => 601,
      2 => 'Xã Hương Mỹ',
    ),
    9403 => 
    array (
      0 => 9404,
      1 => 602,
      2 => 'Thị trấn Giồng Trôm',
    ),
    9404 => 
    array (
      0 => 9405,
      1 => 602,
      2 => 'Xã Phong Nẫm',
    ),
    9405 => 
    array (
      0 => 9406,
      1 => 602,
      2 => 'Xã Mỹ Thạnh',
    ),
    9406 => 
    array (
      0 => 9407,
      1 => 602,
      2 => 'Xã Châu Hòa',
    ),
    9407 => 
    array (
      0 => 9408,
      1 => 602,
      2 => 'Xã Lương Hòa',
    ),
    9408 => 
    array (
      0 => 9409,
      1 => 602,
      2 => 'Xã Lương Quới',
    ),
    9409 => 
    array (
      0 => 9410,
      1 => 602,
      2 => 'Xã Lương Phú',
    ),
    9410 => 
    array (
      0 => 9411,
      1 => 602,
      2 => 'Xã Châu Bình',
    ),
    9411 => 
    array (
      0 => 9412,
      1 => 602,
      2 => 'Xã Thuận Điền',
    ),
    9412 => 
    array (
      0 => 9413,
      1 => 602,
      2 => 'Xã Sơn Phú',
    ),
    9413 => 
    array (
      0 => 9414,
      1 => 602,
      2 => 'Xã Bình Hoà',
    ),
    9414 => 
    array (
      0 => 9415,
      1 => 602,
      2 => 'Xã Phước Long',
    ),
    9415 => 
    array (
      0 => 9416,
      1 => 602,
      2 => 'Xã Hưng Phong',
    ),
    9416 => 
    array (
      0 => 9417,
      1 => 602,
      2 => 'Xã Long Mỹ',
    ),
    9417 => 
    array (
      0 => 9418,
      1 => 602,
      2 => 'Xã Tân Hào',
    ),
    9418 => 
    array (
      0 => 9419,
      1 => 602,
      2 => 'Xã Bình Thành',
    ),
    9419 => 
    array (
      0 => 9420,
      1 => 602,
      2 => 'Xã Tân Thanh',
    ),
    9420 => 
    array (
      0 => 9421,
      1 => 602,
      2 => 'Xã Tân Lợi Thạnh',
    ),
    9421 => 
    array (
      0 => 9422,
      1 => 602,
      2 => 'Xã Thạnh Phú Đông',
    ),
    9422 => 
    array (
      0 => 9423,
      1 => 602,
      2 => 'Xã Hưng Nhượng',
    ),
    9423 => 
    array (
      0 => 9424,
      1 => 602,
      2 => 'Xã Hưng Lễ',
    ),
    9424 => 
    array (
      0 => 9425,
      1 => 603,
      2 => 'Thị trấn Bình Đại',
    ),
    9425 => 
    array (
      0 => 9426,
      1 => 603,
      2 => 'Xã Tam Hiệp',
    ),
    9426 => 
    array (
      0 => 9427,
      1 => 603,
      2 => 'Xã Long Định',
    ),
    9427 => 
    array (
      0 => 9428,
      1 => 603,
      2 => 'Xã Long Hòa',
    ),
    9428 => 
    array (
      0 => 9429,
      1 => 603,
      2 => 'Xã Phú Thuận',
    ),
    9429 => 
    array (
      0 => 9430,
      1 => 603,
      2 => 'Xã Vang Quới Tây',
    ),
    9430 => 
    array (
      0 => 9431,
      1 => 603,
      2 => 'Xã Vang Quới Đông',
    ),
    9431 => 
    array (
      0 => 9432,
      1 => 603,
      2 => 'Xã Châu Hưng',
    ),
    9432 => 
    array (
      0 => 9433,
      1 => 603,
      2 => 'Xã Phú Vang',
    ),
    9433 => 
    array (
      0 => 9434,
      1 => 603,
      2 => 'Xã Lộc Thuận',
    ),
    9434 => 
    array (
      0 => 9435,
      1 => 603,
      2 => 'Xã Định Trung',
    ),
    9435 => 
    array (
      0 => 9436,
      1 => 603,
      2 => 'Xã Thới Lai',
    ),
    9436 => 
    array (
      0 => 9437,
      1 => 603,
      2 => 'Xã Bình Thới',
    ),
    9437 => 
    array (
      0 => 9438,
      1 => 603,
      2 => 'Xã Phú Long',
    ),
    9438 => 
    array (
      0 => 9439,
      1 => 603,
      2 => 'Xã Bình Thắng',
    ),
    9439 => 
    array (
      0 => 9440,
      1 => 603,
      2 => 'Xã Thạnh Trị',
    ),
    9440 => 
    array (
      0 => 9441,
      1 => 603,
      2 => 'Xã Đại Hòa Lộc',
    ),
    9441 => 
    array (
      0 => 9442,
      1 => 603,
      2 => 'Xã Thừa Đức',
    ),
    9442 => 
    array (
      0 => 9443,
      1 => 603,
      2 => 'Xã Thạnh Phước',
    ),
    9443 => 
    array (
      0 => 9444,
      1 => 603,
      2 => 'Xã Thới Thuận',
    ),
    9444 => 
    array (
      0 => 9445,
      1 => 604,
      2 => 'Thị trấn Ba Tri',
    ),
    9445 => 
    array (
      0 => 9446,
      1 => 604,
      2 => 'Xã Tân Mỹ',
    ),
    9446 => 
    array (
      0 => 9447,
      1 => 604,
      2 => 'Xã Mỹ Hòa',
    ),
    9447 => 
    array (
      0 => 9448,
      1 => 604,
      2 => 'Xã Tân Xuân',
    ),
    9448 => 
    array (
      0 => 9449,
      1 => 604,
      2 => 'Xã Mỹ Chánh',
    ),
    9449 => 
    array (
      0 => 9450,
      1 => 604,
      2 => 'Xã Bảo Thạnh',
    ),
    9450 => 
    array (
      0 => 9451,
      1 => 604,
      2 => 'Xã An Phú Trung',
    ),
    9451 => 
    array (
      0 => 9452,
      1 => 604,
      2 => 'Xã Mỹ Thạnh',
    ),
    9452 => 
    array (
      0 => 9453,
      1 => 604,
      2 => 'Xã Mỹ Nhơn',
    ),
    9453 => 
    array (
      0 => 9454,
      1 => 604,
      2 => 'Xã Phước Ngãi',
    ),
    9454 => 
    array (
      0 => 9455,
      1 => 604,
      2 => 'Xã An Ngãi Trung',
    ),
    9455 => 
    array (
      0 => 9456,
      1 => 604,
      2 => 'Xã Phú Lễ',
    ),
    9456 => 
    array (
      0 => 9457,
      1 => 604,
      2 => 'Xã An Bình Tây',
    ),
    9457 => 
    array (
      0 => 9458,
      1 => 604,
      2 => 'Xã Bảo Thuận',
    ),
    9458 => 
    array (
      0 => 9459,
      1 => 604,
      2 => 'Xã Tân Hưng',
    ),
    9459 => 
    array (
      0 => 9460,
      1 => 604,
      2 => 'Xã An Ngãi Tây',
    ),
    9460 => 
    array (
      0 => 9461,
      1 => 604,
      2 => 'Xã An Hiệp',
    ),
    9461 => 
    array (
      0 => 9462,
      1 => 604,
      2 => 'Xã Vĩnh Hòa',
    ),
    9462 => 
    array (
      0 => 9463,
      1 => 604,
      2 => 'Xã Tân Thủy',
    ),
    9463 => 
    array (
      0 => 9464,
      1 => 604,
      2 => 'Xã Vĩnh An',
    ),
    9464 => 
    array (
      0 => 9465,
      1 => 604,
      2 => 'Xã An Đức',
    ),
    9465 => 
    array (
      0 => 9466,
      1 => 604,
      2 => 'Xã An Hòa Tây',
    ),
    9466 => 
    array (
      0 => 9467,
      1 => 604,
      2 => 'Xã An Thủy',
    ),
    9467 => 
    array (
      0 => 9468,
      1 => 605,
      2 => 'Thị trấn Thạnh Phú',
    ),
    9468 => 
    array (
      0 => 9469,
      1 => 605,
      2 => 'Xã Phú Khánh',
    ),
    9469 => 
    array (
      0 => 9470,
      1 => 605,
      2 => 'Xã Đại Điền',
    ),
    9470 => 
    array (
      0 => 9471,
      1 => 605,
      2 => 'Xã Quới Điền',
    ),
    9471 => 
    array (
      0 => 9472,
      1 => 605,
      2 => 'Xã Tân Phong',
    ),
    9472 => 
    array (
      0 => 9473,
      1 => 605,
      2 => 'Xã Mỹ Hưng',
    ),
    9473 => 
    array (
      0 => 9474,
      1 => 605,
      2 => 'Xã An Thạnh',
    ),
    9474 => 
    array (
      0 => 9475,
      1 => 605,
      2 => 'Xã Thới Thạnh',
    ),
    9475 => 
    array (
      0 => 9476,
      1 => 605,
      2 => 'Xã Hòa Lợi',
    ),
    9476 => 
    array (
      0 => 9477,
      1 => 605,
      2 => 'Xã An Điền',
    ),
    9477 => 
    array (
      0 => 9478,
      1 => 605,
      2 => 'Xã Bình Thạnh',
    ),
    9478 => 
    array (
      0 => 9479,
      1 => 605,
      2 => 'Xã An Thuận',
    ),
    9479 => 
    array (
      0 => 9480,
      1 => 605,
      2 => 'Xã An Quy',
    ),
    9480 => 
    array (
      0 => 9481,
      1 => 605,
      2 => 'Xã Thạnh Hải',
    ),
    9481 => 
    array (
      0 => 9482,
      1 => 605,
      2 => 'Xã An Nhơn',
    ),
    9482 => 
    array (
      0 => 9483,
      1 => 605,
      2 => 'Xã Giao Thạnh',
    ),
    9483 => 
    array (
      0 => 9484,
      1 => 605,
      2 => 'Xã Thạnh Phong',
    ),
    9484 => 
    array (
      0 => 9485,
      1 => 605,
      2 => 'Xã Mỹ An',
    ),
    9485 => 
    array (
      0 => 9486,
      1 => 606,
      2 => 'Xã Phú Mỹ',
    ),
    9486 => 
    array (
      0 => 9487,
      1 => 606,
      2 => 'Xã Hưng Khánh Trung A',
    ),
    9487 => 
    array (
      0 => 9488,
      1 => 606,
      2 => 'Xã Thanh Tân',
    ),
    9488 => 
    array (
      0 => 9489,
      1 => 606,
      2 => 'Xã Thạnh Ngãi',
    ),
    9489 => 
    array (
      0 => 9490,
      1 => 606,
      2 => 'Xã Tân Phú Tây',
    ),
    9490 => 
    array (
      0 => 9491,
      1 => 606,
      2 => 'Xã Phước Mỹ Trung',
    ),
    9491 => 
    array (
      0 => 9492,
      1 => 606,
      2 => 'Xã Tân Thành Bình',
    ),
    9492 => 
    array (
      0 => 9493,
      1 => 606,
      2 => 'Xã Thành An',
    ),
    9493 => 
    array (
      0 => 9494,
      1 => 606,
      2 => 'Xã Hòa Lộc',
    ),
    9494 => 
    array (
      0 => 9495,
      1 => 606,
      2 => 'Xã Tân Thanh Tây',
    ),
    9495 => 
    array (
      0 => 9496,
      1 => 606,
      2 => 'Xã Tân Bình',
    ),
    9496 => 
    array (
      0 => 9497,
      1 => 606,
      2 => 'Xã Nhuận Phú Tân',
    ),
    9497 => 
    array (
      0 => 9498,
      1 => 606,
      2 => 'Xã Khánh Thạnh Tân',
    ),
    9498 => 
    array (
      0 => 9499,
      1 => 607,
      2 => 'Phường 4',
    ),
    9499 => 
    array (
      0 => 9500,
      1 => 607,
      2 => 'Phường 1',
    ),
    9500 => 
    array (
      0 => 9501,
      1 => 607,
      2 => 'Phường 3',
    ),
    9501 => 
    array (
      0 => 9502,
      1 => 607,
      2 => 'Phường 2',
    ),
    9502 => 
    array (
      0 => 9503,
      1 => 607,
      2 => 'Phường 5',
    ),
    9503 => 
    array (
      0 => 9504,
      1 => 607,
      2 => 'Phường 6',
    ),
    9504 => 
    array (
      0 => 9505,
      1 => 607,
      2 => 'Phường 7',
    ),
    9505 => 
    array (
      0 => 9506,
      1 => 607,
      2 => 'Phường 8',
    ),
    9506 => 
    array (
      0 => 9507,
      1 => 607,
      2 => 'Phường 9',
    ),
    9507 => 
    array (
      0 => 9508,
      1 => 607,
      2 => 'Xã Long Đức',
    ),
    9508 => 
    array (
      0 => 9509,
      1 => 608,
      2 => 'Thị trấn Càng Long',
    ),
    9509 => 
    array (
      0 => 9510,
      1 => 608,
      2 => 'Xã Mỹ Cẩm',
    ),
    9510 => 
    array (
      0 => 9511,
      1 => 608,
      2 => 'Xã An Trường A',
    ),
    9511 => 
    array (
      0 => 9512,
      1 => 608,
      2 => 'Xã An Trường',
    ),
    9512 => 
    array (
      0 => 9513,
      1 => 608,
      2 => 'Xã Huyền Hội',
    ),
    9513 => 
    array (
      0 => 9514,
      1 => 608,
      2 => 'Xã Tân An',
    ),
    9514 => 
    array (
      0 => 9515,
      1 => 608,
      2 => 'Xã Tân Bình',
    ),
    9515 => 
    array (
      0 => 9516,
      1 => 608,
      2 => 'Xã Bình Phú',
    ),
    9516 => 
    array (
      0 => 9517,
      1 => 608,
      2 => 'Xã Phương Thạnh',
    ),
    9517 => 
    array (
      0 => 9518,
      1 => 608,
      2 => 'Xã Đại Phúc',
    ),
    9518 => 
    array (
      0 => 9519,
      1 => 608,
      2 => 'Xã Đại Phước',
    ),
    9519 => 
    array (
      0 => 9520,
      1 => 608,
      2 => 'Xã Nhị Long Phú',
    ),
    9520 => 
    array (
      0 => 9521,
      1 => 608,
      2 => 'Xã Nhị Long',
    ),
    9521 => 
    array (
      0 => 9522,
      1 => 608,
      2 => 'Xã Đức Mỹ',
    ),
    9522 => 
    array (
      0 => 9523,
      1 => 609,
      2 => 'Thị trấn Cầu Kè',
    ),
    9523 => 
    array (
      0 => 9524,
      1 => 609,
      2 => 'Xã Hòa Ân',
    ),
    9524 => 
    array (
      0 => 9525,
      1 => 609,
      2 => 'Xã Châu Điền',
    ),
    9525 => 
    array (
      0 => 9526,
      1 => 609,
      2 => 'Xã An Phú Tân',
    ),
    9526 => 
    array (
      0 => 9527,
      1 => 609,
      2 => 'Xã Hoà Tân',
    ),
    9527 => 
    array (
      0 => 9528,
      1 => 609,
      2 => 'Xã Ninh Thới',
    ),
    9528 => 
    array (
      0 => 9529,
      1 => 609,
      2 => 'Xã Phong Phú',
    ),
    9529 => 
    array (
      0 => 9530,
      1 => 609,
      2 => 'Xã Phong Thạnh',
    ),
    9530 => 
    array (
      0 => 9531,
      1 => 609,
      2 => 'Xã Tam Ngãi',
    ),
    9531 => 
    array (
      0 => 9532,
      1 => 609,
      2 => 'Xã Thông Hòa',
    ),
    9532 => 
    array (
      0 => 9533,
      1 => 609,
      2 => 'Xã Thạnh Phú',
    ),
    9533 => 
    array (
      0 => 9534,
      1 => 610,
      2 => 'Thị trấn Tiểu Cần',
    ),
    9534 => 
    array (
      0 => 9535,
      1 => 610,
      2 => 'Thị trấn Cầu Quan',
    ),
    9535 => 
    array (
      0 => 9536,
      1 => 610,
      2 => 'Xã Phú Cần',
    ),
    9536 => 
    array (
      0 => 9537,
      1 => 610,
      2 => 'Xã Hiếu Tử',
    ),
    9537 => 
    array (
      0 => 9538,
      1 => 610,
      2 => 'Xã Hiếu Trung',
    ),
    9538 => 
    array (
      0 => 9539,
      1 => 610,
      2 => 'Xã Long Thới',
    ),
    9539 => 
    array (
      0 => 9540,
      1 => 610,
      2 => 'Xã Hùng Hòa',
    ),
    9540 => 
    array (
      0 => 9541,
      1 => 610,
      2 => 'Xã Tân Hùng',
    ),
    9541 => 
    array (
      0 => 9542,
      1 => 610,
      2 => 'Xã Tập Ngãi',
    ),
    9542 => 
    array (
      0 => 9543,
      1 => 610,
      2 => 'Xã Ngãi Hùng',
    ),
    9543 => 
    array (
      0 => 9544,
      1 => 610,
      2 => 'Xã Tân Hòa',
    ),
    9544 => 
    array (
      0 => 9545,
      1 => 611,
      2 => 'Thị trấn Châu Thành',
    ),
    9545 => 
    array (
      0 => 9546,
      1 => 611,
      2 => 'Xã Đa Lộc',
    ),
    9546 => 
    array (
      0 => 9547,
      1 => 611,
      2 => 'Xã Mỹ Chánh',
    ),
    9547 => 
    array (
      0 => 9548,
      1 => 611,
      2 => 'Xã Thanh Mỹ',
    ),
    9548 => 
    array (
      0 => 9549,
      1 => 611,
      2 => 'Xã Lương Hoà A',
    ),
    9549 => 
    array (
      0 => 9550,
      1 => 611,
      2 => 'Xã Lương Hòa',
    ),
    9550 => 
    array (
      0 => 9551,
      1 => 611,
      2 => 'Xã Song Lộc',
    ),
    9551 => 
    array (
      0 => 9552,
      1 => 611,
      2 => 'Xã Nguyệt Hóa',
    ),
    9552 => 
    array (
      0 => 9553,
      1 => 611,
      2 => 'Xã Hòa Thuận',
    ),
    9553 => 
    array (
      0 => 9554,
      1 => 611,
      2 => 'Xã Hòa Lợi',
    ),
    9554 => 
    array (
      0 => 9555,
      1 => 611,
      2 => 'Xã Phước Hảo',
    ),
    9555 => 
    array (
      0 => 9556,
      1 => 611,
      2 => 'Xã Hưng Mỹ',
    ),
    9556 => 
    array (
      0 => 9557,
      1 => 611,
      2 => 'Xã Hòa Minh',
    ),
    9557 => 
    array (
      0 => 9558,
      1 => 611,
      2 => 'Xã Long Hòa',
    ),
    9558 => 
    array (
      0 => 9559,
      1 => 612,
      2 => 'Thị trấn Cầu Ngang',
    ),
    9559 => 
    array (
      0 => 9560,
      1 => 612,
      2 => 'Thị trấn Mỹ Long',
    ),
    9560 => 
    array (
      0 => 9561,
      1 => 612,
      2 => 'Xã Mỹ Long Bắc',
    ),
    9561 => 
    array (
      0 => 9562,
      1 => 612,
      2 => 'Xã Mỹ Long Nam',
    ),
    9562 => 
    array (
      0 => 9563,
      1 => 612,
      2 => 'Xã Mỹ Hòa',
    ),
    9563 => 
    array (
      0 => 9564,
      1 => 612,
      2 => 'Xã Vĩnh Kim',
    ),
    9564 => 
    array (
      0 => 9565,
      1 => 612,
      2 => 'Xã Kim Hòa',
    ),
    9565 => 
    array (
      0 => 9566,
      1 => 612,
      2 => 'Xã Hiệp Hòa',
    ),
    9566 => 
    array (
      0 => 9567,
      1 => 612,
      2 => 'Xã Thuận Hòa',
    ),
    9567 => 
    array (
      0 => 9568,
      1 => 612,
      2 => 'Xã Long Sơn',
    ),
    9568 => 
    array (
      0 => 9569,
      1 => 612,
      2 => 'Xã Nhị Trường',
    ),
    9569 => 
    array (
      0 => 9570,
      1 => 612,
      2 => 'Xã Trường Thọ',
    ),
    9570 => 
    array (
      0 => 9571,
      1 => 612,
      2 => 'Xã Hiệp Mỹ Đông',
    ),
    9571 => 
    array (
      0 => 9572,
      1 => 612,
      2 => 'Xã Hiệp Mỹ Tây',
    ),
    9572 => 
    array (
      0 => 9573,
      1 => 612,
      2 => 'Xã Thạnh Hòa Sơn',
    ),
    9573 => 
    array (
      0 => 9574,
      1 => 613,
      2 => 'Thị trấn Trà Cú',
    ),
    9574 => 
    array (
      0 => 9575,
      1 => 613,
      2 => 'Thị trấn Định An',
    ),
    9575 => 
    array (
      0 => 9576,
      1 => 613,
      2 => 'Xã Phước Hưng',
    ),
    9576 => 
    array (
      0 => 9577,
      1 => 613,
      2 => 'Xã Tập Sơn',
    ),
    9577 => 
    array (
      0 => 9578,
      1 => 613,
      2 => 'Xã Tân Sơn',
    ),
    9578 => 
    array (
      0 => 9579,
      1 => 613,
      2 => 'Xã An Quảng Hữu',
    ),
    9579 => 
    array (
      0 => 9580,
      1 => 613,
      2 => 'Xã Lưu Nghiệp Anh',
    ),
    9580 => 
    array (
      0 => 9581,
      1 => 613,
      2 => 'Xã Ngãi Xuyên',
    ),
    9581 => 
    array (
      0 => 9582,
      1 => 613,
      2 => 'Xã Kim Sơn',
    ),
    9582 => 
    array (
      0 => 9583,
      1 => 613,
      2 => 'Xã Thanh Sơn',
    ),
    9583 => 
    array (
      0 => 9584,
      1 => 613,
      2 => 'Xã Hàm Giang',
    ),
    9584 => 
    array (
      0 => 9585,
      1 => 613,
      2 => 'Xã Hàm Tân',
    ),
    9585 => 
    array (
      0 => 9586,
      1 => 613,
      2 => 'Xã Đại An',
    ),
    9586 => 
    array (
      0 => 9587,
      1 => 613,
      2 => 'Xã Định An',
    ),
    9587 => 
    array (
      0 => 9588,
      1 => 613,
      2 => 'Xã Ngọc Biên',
    ),
    9588 => 
    array (
      0 => 9589,
      1 => 613,
      2 => 'Xã Long Hiệp',
    ),
    9589 => 
    array (
      0 => 9590,
      1 => 613,
      2 => 'Xã Tân Hiệp',
    ),
    9590 => 
    array (
      0 => 9591,
      1 => 614,
      2 => 'Xã Đôn Xuân',
    ),
    9591 => 
    array (
      0 => 9592,
      1 => 614,
      2 => 'Xã Đôn Châu',
    ),
    9592 => 
    array (
      0 => 9593,
      1 => 614,
      2 => 'Thị trấn Long Thành',
    ),
    9593 => 
    array (
      0 => 9594,
      1 => 614,
      2 => 'Xã Long Khánh',
    ),
    9594 => 
    array (
      0 => 9595,
      1 => 614,
      2 => 'Xã Ngũ Lạc',
    ),
    9595 => 
    array (
      0 => 9596,
      1 => 614,
      2 => 'Xã Long Vĩnh',
    ),
    9596 => 
    array (
      0 => 9597,
      1 => 614,
      2 => 'Xã Đông Hải',
    ),
    9597 => 
    array (
      0 => 9598,
      1 => 615,
      2 => 'Phường 1',
    ),
    9598 => 
    array (
      0 => 9599,
      1 => 615,
      2 => 'Xã Long Toàn',
    ),
    9599 => 
    array (
      0 => 9600,
      1 => 615,
      2 => 'Phường 2',
    ),
    9600 => 
    array (
      0 => 9601,
      1 => 615,
      2 => 'Xã Long Hữu',
    ),
    9601 => 
    array (
      0 => 9602,
      1 => 615,
      2 => 'Xã Dân Thành',
    ),
    9602 => 
    array (
      0 => 9603,
      1 => 615,
      2 => 'Xã Trường Long Hòa',
    ),
    9603 => 
    array (
      0 => 9604,
      1 => 615,
      2 => 'Xã Hiệp Thạnh',
    ),
    9604 => 
    array (
      0 => 9605,
      1 => 616,
      2 => 'Phường 9',
    ),
    9605 => 
    array (
      0 => 9606,
      1 => 616,
      2 => 'Phường 5',
    ),
    9606 => 
    array (
      0 => 9607,
      1 => 616,
      2 => 'Phường 1',
    ),
    9607 => 
    array (
      0 => 9608,
      1 => 616,
      2 => 'Phường 2',
    ),
    9608 => 
    array (
      0 => 9609,
      1 => 616,
      2 => 'Phường 4',
    ),
    9609 => 
    array (
      0 => 9610,
      1 => 616,
      2 => 'Phường 3',
    ),
    9610 => 
    array (
      0 => 9611,
      1 => 616,
      2 => 'Phường 8',
    ),
    9611 => 
    array (
      0 => 9612,
      1 => 616,
      2 => 'Phường Tân Ngãi',
    ),
    9612 => 
    array (
      0 => 9613,
      1 => 616,
      2 => 'Phường Tân Hòa',
    ),
    9613 => 
    array (
      0 => 9614,
      1 => 616,
      2 => 'Phường Tân Hội',
    ),
    9614 => 
    array (
      0 => 9615,
      1 => 616,
      2 => 'Phường Trường An',
    ),
    9615 => 
    array (
      0 => 9616,
      1 => 617,
      2 => 'Thị trấn Long Hồ',
    ),
    9616 => 
    array (
      0 => 9617,
      1 => 617,
      2 => 'Xã Đồng Phú',
    ),
    9617 => 
    array (
      0 => 9618,
      1 => 617,
      2 => 'Xã Bình Hòa Phước',
    ),
    9618 => 
    array (
      0 => 9619,
      1 => 617,
      2 => 'Xã Hòa Ninh',
    ),
    9619 => 
    array (
      0 => 9620,
      1 => 617,
      2 => 'Xã An Bình',
    ),
    9620 => 
    array (
      0 => 9621,
      1 => 617,
      2 => 'Xã Thanh Đức',
    ),
    9621 => 
    array (
      0 => 9622,
      1 => 617,
      2 => 'Xã Tân Hạnh',
    ),
    9622 => 
    array (
      0 => 9623,
      1 => 617,
      2 => 'Xã Phước Hậu',
    ),
    9623 => 
    array (
      0 => 9624,
      1 => 617,
      2 => 'Xã Long Phước',
    ),
    9624 => 
    array (
      0 => 9625,
      1 => 617,
      2 => 'Xã Phú Đức',
    ),
    9625 => 
    array (
      0 => 9626,
      1 => 617,
      2 => 'Xã Lộc Hòa',
    ),
    9626 => 
    array (
      0 => 9627,
      1 => 617,
      2 => 'Xã Long An',
    ),
    9627 => 
    array (
      0 => 9628,
      1 => 617,
      2 => 'Xã Phú Quới',
    ),
    9628 => 
    array (
      0 => 9629,
      1 => 617,
      2 => 'Xã Thạnh Quới',
    ),
    9629 => 
    array (
      0 => 9630,
      1 => 617,
      2 => 'Xã Hòa Phú',
    ),
    9630 => 
    array (
      0 => 9631,
      1 => 618,
      2 => 'Xã Mỹ An',
    ),
    9631 => 
    array (
      0 => 9632,
      1 => 618,
      2 => 'Xã Mỹ Phước',
    ),
    9632 => 
    array (
      0 => 9633,
      1 => 618,
      2 => 'Xã An Phước',
    ),
    9633 => 
    array (
      0 => 9634,
      1 => 618,
      2 => 'Xã Nhơn Phú',
    ),
    9634 => 
    array (
      0 => 9635,
      1 => 618,
      2 => 'Xã Long Mỹ',
    ),
    9635 => 
    array (
      0 => 9636,
      1 => 618,
      2 => 'Xã Hòa Tịnh',
    ),
    9636 => 
    array (
      0 => 9637,
      1 => 618,
      2 => 'Thị trấn Cái Nhum',
    ),
    9637 => 
    array (
      0 => 9638,
      1 => 618,
      2 => 'Xã Bình Phước',
    ),
    9638 => 
    array (
      0 => 9639,
      1 => 618,
      2 => 'Xã Chánh An',
    ),
    9639 => 
    array (
      0 => 9640,
      1 => 618,
      2 => 'Xã Tân An Hội',
    ),
    9640 => 
    array (
      0 => 9641,
      1 => 618,
      2 => 'Xã Tân Long',
    ),
    9641 => 
    array (
      0 => 9642,
      1 => 618,
      2 => 'Xã Tân Long Hội',
    ),
    9642 => 
    array (
      0 => 9643,
      1 => 619,
      2 => 'Thị trấn Vũng Liêm',
    ),
    9643 => 
    array (
      0 => 9644,
      1 => 619,
      2 => 'Xã Tân Quới Trung',
    ),
    9644 => 
    array (
      0 => 9645,
      1 => 619,
      2 => 'Xã Quới Thiện',
    ),
    9645 => 
    array (
      0 => 9646,
      1 => 619,
      2 => 'Xã Quới An',
    ),
    9646 => 
    array (
      0 => 9647,
      1 => 619,
      2 => 'Xã Trung Chánh',
    ),
    9647 => 
    array (
      0 => 9648,
      1 => 619,
      2 => 'Xã Tân An Luông',
    ),
    9648 => 
    array (
      0 => 9649,
      1 => 619,
      2 => 'Xã Thanh Bình',
    ),
    9649 => 
    array (
      0 => 9650,
      1 => 619,
      2 => 'Xã Trung Thành Tây',
    ),
    9650 => 
    array (
      0 => 9651,
      1 => 619,
      2 => 'Xã Trung Hiệp',
    ),
    9651 => 
    array (
      0 => 9652,
      1 => 619,
      2 => 'Xã Hiếu Phụng',
    ),
    9652 => 
    array (
      0 => 9653,
      1 => 619,
      2 => 'Xã Trung Thành Đông',
    ),
    9653 => 
    array (
      0 => 9654,
      1 => 619,
      2 => 'Xã Trung Thành',
    ),
    9654 => 
    array (
      0 => 9655,
      1 => 619,
      2 => 'Xã Trung Hiếu',
    ),
    9655 => 
    array (
      0 => 9656,
      1 => 619,
      2 => 'Xã Trung Ngãi',
    ),
    9656 => 
    array (
      0 => 9657,
      1 => 619,
      2 => 'Xã Hiếu Thuận',
    ),
    9657 => 
    array (
      0 => 9658,
      1 => 619,
      2 => 'Xã Trung Nghĩa',
    ),
    9658 => 
    array (
      0 => 9659,
      1 => 619,
      2 => 'Xã Trung An',
    ),
    9659 => 
    array (
      0 => 9660,
      1 => 619,
      2 => 'Xã Hiếu Nhơn',
    ),
    9660 => 
    array (
      0 => 9661,
      1 => 619,
      2 => 'Xã Hiếu Thành',
    ),
    9661 => 
    array (
      0 => 9662,
      1 => 619,
      2 => 'Xã Hiếu Nghĩa',
    ),
    9662 => 
    array (
      0 => 9663,
      1 => 620,
      2 => 'Thị trấn Tam Bình',
    ),
    9663 => 
    array (
      0 => 9664,
      1 => 620,
      2 => 'Xã Tân Lộc',
    ),
    9664 => 
    array (
      0 => 9665,
      1 => 620,
      2 => 'Xã Phú Thịnh',
    ),
    9665 => 
    array (
      0 => 9666,
      1 => 620,
      2 => 'Xã Hậu Lộc',
    ),
    9666 => 
    array (
      0 => 9667,
      1 => 620,
      2 => 'Xã Hòa Thạnh',
    ),
    9667 => 
    array (
      0 => 9668,
      1 => 620,
      2 => 'Xã Hoà Lộc',
    ),
    9668 => 
    array (
      0 => 9669,
      1 => 620,
      2 => 'Xã Phú Lộc',
    ),
    9669 => 
    array (
      0 => 9670,
      1 => 620,
      2 => 'Xã Song Phú',
    ),
    9670 => 
    array (
      0 => 9671,
      1 => 620,
      2 => 'Xã Hòa Hiệp',
    ),
    9671 => 
    array (
      0 => 9672,
      1 => 620,
      2 => 'Xã Mỹ Lộc',
    ),
    9672 => 
    array (
      0 => 9673,
      1 => 620,
      2 => 'Xã Tân Phú',
    ),
    9673 => 
    array (
      0 => 9674,
      1 => 620,
      2 => 'Xã Long Phú',
    ),
    9674 => 
    array (
      0 => 9675,
      1 => 620,
      2 => 'Xã Mỹ Thạnh Trung',
    ),
    9675 => 
    array (
      0 => 9676,
      1 => 620,
      2 => 'Xã Tường Lộc',
    ),
    9676 => 
    array (
      0 => 9677,
      1 => 620,
      2 => 'Xã Loan Mỹ',
    ),
    9677 => 
    array (
      0 => 9678,
      1 => 620,
      2 => 'Xã Ngãi Tứ',
    ),
    9678 => 
    array (
      0 => 9679,
      1 => 620,
      2 => 'Xã Bình Ninh',
    ),
    9679 => 
    array (
      0 => 9680,
      1 => 621,
      2 => 'Phường Cái Vồn',
    ),
    9680 => 
    array (
      0 => 9681,
      1 => 621,
      2 => 'Phường Thành Phước',
    ),
    9681 => 
    array (
      0 => 9682,
      1 => 621,
      2 => 'Xã Thuận An',
    ),
    9682 => 
    array (
      0 => 9683,
      1 => 621,
      2 => 'Xã Đông Thạnh',
    ),
    9683 => 
    array (
      0 => 9684,
      1 => 621,
      2 => 'Xã Đông Bình',
    ),
    9684 => 
    array (
      0 => 9685,
      1 => 621,
      2 => 'Phường Đông Thuận',
    ),
    9685 => 
    array (
      0 => 9686,
      1 => 621,
      2 => 'Xã Mỹ Hòa',
    ),
    9686 => 
    array (
      0 => 9687,
      1 => 622,
      2 => 'Thị trấn Trà Ôn',
    ),
    9687 => 
    array (
      0 => 9688,
      1 => 622,
      2 => 'Xã Xuân Hiệp',
    ),
    9688 => 
    array (
      0 => 9689,
      1 => 622,
      2 => 'Xã Nhơn Bình',
    ),
    9689 => 
    array (
      0 => 9690,
      1 => 622,
      2 => 'Xã Hòa Bình',
    ),
    9690 => 
    array (
      0 => 9691,
      1 => 622,
      2 => 'Xã Thới Hòa',
    ),
    9691 => 
    array (
      0 => 9692,
      1 => 622,
      2 => 'Xã Trà Côn',
    ),
    9692 => 
    array (
      0 => 9693,
      1 => 622,
      2 => 'Xã Tân Mỹ',
    ),
    9693 => 
    array (
      0 => 9694,
      1 => 622,
      2 => 'Xã Hựu Thành',
    ),
    9694 => 
    array (
      0 => 9695,
      1 => 622,
      2 => 'Xã Vĩnh Xuân',
    ),
    9695 => 
    array (
      0 => 9696,
      1 => 622,
      2 => 'Xã Thuận Thới',
    ),
    9696 => 
    array (
      0 => 9697,
      1 => 622,
      2 => 'Xã Phú Thành',
    ),
    9697 => 
    array (
      0 => 9698,
      1 => 622,
      2 => 'Xã Thiện Mỹ',
    ),
    9698 => 
    array (
      0 => 9699,
      1 => 622,
      2 => 'Xã Lục Sỹ Thành',
    ),
    9699 => 
    array (
      0 => 9700,
      1 => 622,
      2 => 'Xã Tích Thiện',
    ),
    9700 => 
    array (
      0 => 9701,
      1 => 623,
      2 => 'Xã Tân Hưng',
    ),
    9701 => 
    array (
      0 => 9702,
      1 => 623,
      2 => 'Xã Tân Thành',
    ),
    9702 => 
    array (
      0 => 9703,
      1 => 623,
      2 => 'Xã Thành Trung',
    ),
    9703 => 
    array (
      0 => 9704,
      1 => 623,
      2 => 'Xã Tân An Thạnh',
    ),
    9704 => 
    array (
      0 => 9705,
      1 => 623,
      2 => 'Xã Tân Lược',
    ),
    9705 => 
    array (
      0 => 9706,
      1 => 623,
      2 => 'Xã Nguyễn Văn Thảnh',
    ),
    9706 => 
    array (
      0 => 9707,
      1 => 623,
      2 => 'Xã Thành Lợi',
    ),
    9707 => 
    array (
      0 => 9708,
      1 => 623,
      2 => 'Xã Mỹ Thuận',
    ),
    9708 => 
    array (
      0 => 9709,
      1 => 623,
      2 => 'Xã Tân Bình',
    ),
    9709 => 
    array (
      0 => 9710,
      1 => 623,
      2 => 'Thị trấn Tân Quới',
    ),
    9710 => 
    array (
      0 => 9711,
      1 => 624,
      2 => 'Phường 11',
    ),
    9711 => 
    array (
      0 => 9712,
      1 => 624,
      2 => 'Phường 1',
    ),
    9712 => 
    array (
      0 => 9713,
      1 => 624,
      2 => 'Phường 2',
    ),
    9713 => 
    array (
      0 => 9714,
      1 => 624,
      2 => 'Phường 4',
    ),
    9714 => 
    array (
      0 => 9715,
      1 => 624,
      2 => 'Phường 3',
    ),
    9715 => 
    array (
      0 => 9716,
      1 => 624,
      2 => 'Phường 6',
    ),
    9716 => 
    array (
      0 => 9717,
      1 => 624,
      2 => 'Xã Mỹ Ngãi',
    ),
    9717 => 
    array (
      0 => 9718,
      1 => 624,
      2 => 'Xã Mỹ Tân',
    ),
    9718 => 
    array (
      0 => 9719,
      1 => 624,
      2 => 'Xã Mỹ Trà',
    ),
    9719 => 
    array (
      0 => 9720,
      1 => 624,
      2 => 'Phường Mỹ Phú',
    ),
    9720 => 
    array (
      0 => 9721,
      1 => 624,
      2 => 'Xã Tân Thuận Tây',
    ),
    9721 => 
    array (
      0 => 9722,
      1 => 624,
      2 => 'Phường Hoà Thuận',
    ),
    9722 => 
    array (
      0 => 9723,
      1 => 624,
      2 => 'Xã Hòa An',
    ),
    9723 => 
    array (
      0 => 9724,
      1 => 624,
      2 => 'Xã Tân Thuận Đông',
    ),
    9724 => 
    array (
      0 => 9725,
      1 => 624,
      2 => 'Xã Tịnh Thới',
    ),
    9725 => 
    array (
      0 => 9726,
      1 => 625,
      2 => 'Phường 3',
    ),
    9726 => 
    array (
      0 => 9727,
      1 => 625,
      2 => 'Phường 1',
    ),
    9727 => 
    array (
      0 => 9728,
      1 => 625,
      2 => 'Phường 4',
    ),
    9728 => 
    array (
      0 => 9729,
      1 => 625,
      2 => 'Phường 2',
    ),
    9729 => 
    array (
      0 => 9730,
      1 => 625,
      2 => 'Xã Tân Khánh Đông',
    ),
    9730 => 
    array (
      0 => 9731,
      1 => 625,
      2 => 'Phường Tân Quy Đông',
    ),
    9731 => 
    array (
      0 => 9732,
      1 => 625,
      2 => 'Phường An Hoà',
    ),
    9732 => 
    array (
      0 => 9733,
      1 => 625,
      2 => 'Xã Tân Quy Tây',
    ),
    9733 => 
    array (
      0 => 9734,
      1 => 625,
      2 => 'Xã Tân Phú Đông',
    ),
    9734 => 
    array (
      0 => 9735,
      1 => 626,
      2 => 'Phường An Lộc',
    ),
    9735 => 
    array (
      0 => 9736,
      1 => 626,
      2 => 'Phường An Thạnh',
    ),
    9736 => 
    array (
      0 => 9737,
      1 => 626,
      2 => 'Xã Bình Thạnh',
    ),
    9737 => 
    array (
      0 => 9738,
      1 => 626,
      2 => 'Xã Tân Hội',
    ),
    9738 => 
    array (
      0 => 9739,
      1 => 626,
      2 => 'Phường An Lạc',
    ),
    9739 => 
    array (
      0 => 9740,
      1 => 626,
      2 => 'Phường An Bình B',
    ),
    9740 => 
    array (
      0 => 9741,
      1 => 626,
      2 => 'Phường An Bình A',
    ),
    9741 => 
    array (
      0 => 9742,
      1 => 627,
      2 => 'Thị trấn Sa Rài',
    ),
    9742 => 
    array (
      0 => 9743,
      1 => 627,
      2 => 'Xã Tân Hộ Cơ',
    ),
    9743 => 
    array (
      0 => 9744,
      1 => 627,
      2 => 'Xã Thông Bình',
    ),
    9744 => 
    array (
      0 => 9745,
      1 => 627,
      2 => 'Xã Bình Phú',
    ),
    9745 => 
    array (
      0 => 9746,
      1 => 627,
      2 => 'Xã Tân Thành A',
    ),
    9746 => 
    array (
      0 => 9747,
      1 => 627,
      2 => 'Xã Tân Thành B',
    ),
    9747 => 
    array (
      0 => 9748,
      1 => 627,
      2 => 'Xã Tân Phước',
    ),
    9748 => 
    array (
      0 => 9749,
      1 => 627,
      2 => 'Xã Tân Công Chí',
    ),
    9749 => 
    array (
      0 => 9750,
      1 => 627,
      2 => 'Xã An Phước',
    ),
    9750 => 
    array (
      0 => 9751,
      1 => 628,
      2 => 'Xã Thường Phước 1',
    ),
    9751 => 
    array (
      0 => 9752,
      1 => 628,
      2 => 'Xã Thường Thới Hậu A',
    ),
    9752 => 
    array (
      0 => 9753,
);