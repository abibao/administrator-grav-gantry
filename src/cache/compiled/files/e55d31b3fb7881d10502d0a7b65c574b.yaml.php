<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/abibao-administrator/blueprints.yaml',
    'modified' => 1478727537,
    'data' => [
        'name' => 'Abibao Administrator Panel',
        'version' => '0.1.0',
        'description' => 'Allow connection to abibao api gateway',
        'icon' => 'empire',
        'author' => [
            'name' => 'Gilles Perreymond',
            'email' => 'gperreymond@gmail.com'
        ],
        'homepage' => 'https://github.com/gperreymond/grav-plugin-abibao-administrator',
        'demo' => 'https://api.abibao.com/grav-plugin',
        'keywords' => 'grav, plugin, abibao, api, gateway',
        'bugs' => 'https://github.com/gperreymond/grav-plugin-abibao-administrator/issues',
        'docs' => 'https://github.com/gperreymond/grav-plugin-abibao-administrator/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core',
            1 => 'login'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'uri' => [
                    'type' => 'text',
                    'label' => 'API gateway url to use',
                    'placeholder' => 'Please enter the uri for the gateway',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'email' => [
                    'type' => 'text',
                    'label' => 'API administrator email',
                    'placeholder' => 'Please enter the email for the administrator',
                    'validate' => [
                        'required' => true,
                        'type' => 'email'
                    ]
                ],
                'password' => [
                    'type' => 'password',
                    'label' => 'API administrator password',
                    'placeholder' => 'Please enter the password for the administrator',
                    'validate' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];
