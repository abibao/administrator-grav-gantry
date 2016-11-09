<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/google-charts/blueprints.yaml',
    'modified' => 1478695300,
    'data' => [
        'name' => 'Google Charts',
        'version' => '1.0.0',
        'description' => 'Embeds Google charts into pages',
        'icon' => 'bar-chart',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/perlkonig/grav-plugin-google-charts',
        'demo' => 'http://perlkonig.com/demos/google-charts',
        'keywords' => 'grav, plugin, google, charts, graphs',
        'bugs' => 'https://github.com/perlkonig/grav-plugin-google-charts/issues',
        'docs' => 'https://github.com/perlkonig/grav-plugin-google-charts/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
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
                ]
            ]
        ]
    ]
];