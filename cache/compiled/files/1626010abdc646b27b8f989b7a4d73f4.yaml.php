<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mohsanriaz/Sites/grav-admin/user/themes/turingtalent/blueprints/job.yaml',
    'modified' => 1539474725,
    'data' => [
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Job Summary',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'label' => 'Job title',
                                    'classes' => 'large',
                                    'placeholder' => 'Job title',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'header.company' => [
                                    'type' => 'text',
                                    'label' => 'Company name',
                                    'classes' => 'large',
                                    'placeholder' => 'Company name',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
