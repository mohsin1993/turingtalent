<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mohsanriaz/Sites/grav-admin/user/config/site.yaml',
    'modified' => 1539546039,
    'data' => [
        'title' => 'Turing Talent',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Christina',
            'email' => 'christina@turingtalent.io'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Turing Talent enables you to build world class distributed technical teams, by providing hussle-free talent sourcing, operations, managed offices, learning and development.',
            'title' => 'Turing Talent',
            'keywords' => 'turing talent, hiring, talent sourcing, operations, managed offices, distributed, teams, technical'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
