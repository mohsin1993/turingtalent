<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/blueprints.yaml',
    'modified' => 1538226103,
    'data' => [
        'name' => 'Turingtalent',
        'version' => '0.1.0',
        'description' => 'theme is for the purpose of private use copyright: turing talent',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Mohsan Riaz',
            'email' => 'mohsanriaz224@gmail.com'
        ],
        'homepage' => 'https://github.com/mohsan-riaz/grav-theme-turingtalent',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/mohsan-riaz/grav-theme-turingtalent/issues',
        'readme' => 'https://github.com/mohsan-riaz/grav-theme-turingtalent/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
