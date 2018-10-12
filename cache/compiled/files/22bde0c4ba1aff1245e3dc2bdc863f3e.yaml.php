<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mohsanriaz/Sites/grav-admin/user/plugins/lazy-image/blueprints.yaml',
    'modified' => 1539045170,
    'data' => [
        'name' => 'Lazy Image',
        'version' => '1.0.3',
        'description' => 'Defers loading your page\'s images until they are scrolled into view.',
        'icon' => 'image',
        'author' => [
            'name' => 'Matthew M. Crumley',
            'email' => 'matt@unsaturated.com',
            'url' => 'https://matt.unsaturated.com'
        ],
        'homepage' => 'https://github.com/unsaturated/grav-plugin-lazy-image',
        'demo' => 'https://matt.unsaturated.com/',
        'keywords' => 'grav, plugin, image, images, lazy, load, loading, delay',
        'bugs' => 'https://github.com/unsaturated/grav-plugin-lazy-image/issues',
        'docs' => 'https://github.com/unsaturated/grav-plugin-lazy-image/blob/master/README.md',
        'license' => 'MIT',
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
                'lazy_img_class' => [
                    'type' => 'text',
                    'label' => 'Image CSS Class',
                    'help' => 'Identifies a lazy loaded image. It should omit the leading period.'
                ]
            ]
        ]
    ]
];
