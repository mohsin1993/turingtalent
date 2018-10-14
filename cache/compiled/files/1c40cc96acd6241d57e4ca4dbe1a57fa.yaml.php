<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mohsanriaz/Sites/grav-admin/user/plugins/minify-html/blueprints.yaml',
    'modified' => 1538600368,
    'data' => [
        'name' => 'Minify Html',
        'version' => '1.0.9',
        'description' => 'Minify HTML output',
        'icon' => 'compress',
        'keywords' => 'grav, plugin, minify html',
        'license' => 'MIT',
        'author' => [
            'name' => 'jimblue'
        ],
        'homepage' => 'https://github.com/jimblue/grav-plugin-minify-html',
        'bugs' => 'https://github.com/jimblue/grav-plugin-minify-html/issues',
        'docs' => 'https://github.com/jimblue/grav-plugin-minify-html/blob/master/README.md',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'cache' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_MINIFYHTML.CACHE.LABEL',
                    'help' => 'PLUGIN_MINIFYHTML.CACHE.HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mode' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'PLUGIN_MINIFYHTML.MODE.LABEL',
                    'help' => 'PLUGIN_MINIFYHTML.MODE.HELP',
                    'default' => 'default',
                    'options' => [
                        'default' => 'PLUGIN_MINIFYHTML.MODE.OPTION.DEFAULT',
                        'fastest' => 'PLUGIN_MINIFYHTML.MODE.OPTION.FASTEST',
                        'smallest' => 'PLUGIN_MINIFYHTML.MODE.OPTION.SMALLEST'
                    ]
                ]
            ]
        ]
    ]
];
