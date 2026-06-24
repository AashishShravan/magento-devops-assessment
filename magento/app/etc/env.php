<?php
return [
    'backend' => [
        'frontName' => 'admin_3k0ytu1'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'Uu0Yukznzx1YE0QqFp5cu3wO7NE4qBzs'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ],
            'page_cache' => [
                'id_prefix' => '69d_',
                'backend_options' => [
                    'serializer' => 'igbinary'
                ]
            ]
        ]
    ],
    'config' => [
        'async' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'base64X2bsuAmohT1DYzTIJFiOuTRdkG2Co8fykkRy+CqixXA='
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mysql',
                'dbname' => 'magento',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
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
        'translate' => 1
    ],
    'downloadable_domains' => [
        '3.108.29.220'
    ],
    'install' => [
        'date' => 'Tue, 23 Jun 2026 14:27:55 +0000'
    ]
];
