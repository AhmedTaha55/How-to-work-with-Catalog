<?php
return [
    'backend' => [
        'frontName' => 'admin',
    ],
    'remote_storage' => [
        'driver' => 'file',
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '3GKF1A4fU5GtD0VeKvGkp8SWmO7ndoxQ',
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'f24_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '127.0.0.1',
                    'database' => '0t',
                    'port' => '6380',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => '',
                    '_useLua' => true,
                    'use_lua' => false,
                ],
            ],
            'page_cache' => [
                'id_prefix' => 'f24_',
            ],
        ],
        'allow_parallel_generation' => false,
    ],
    'config' => [
        'async' => 0,
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1,
    ],
    'crypt' => [
        'key' => 'base649D+NDl0ZD/VrA2rnOKeHaqt22rcnCC2Xg2d1KCtjr9Y=',
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '127.0.0.1:3308',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false,
                ],
            ],
        ],
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default',
        ],
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => '127.0.0.1',
            'port' => '6380',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '1',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '3',
            'max_concurrency' => '30',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '1',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0',
        ],
    ],
    'lock' => [
        'provider' => 'db',
    ],
    'directories' => [
        'document_root_is_pub' => true,
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'graphql_query_resolver_result' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
    ],
    'downloadable_domains' => [
        0 => 'localhost',
    ],
    'install' => [
        'date' => 'Tue, 08 Oct 2024 07:39:37 +0000',
    ],
    'http_cache_hosts' => [
        0 => [
            'host' => '127.0.0.1',
            'port' => '8081',
        ],
    ],
];
