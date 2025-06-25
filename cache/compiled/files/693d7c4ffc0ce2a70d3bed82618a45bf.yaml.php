<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/BaitAlZakhrafaDecor/user/themes/quark/blueprints/project.yaml',
    'modified' => 1749204666,
    'size' => 1156,
    'data' => [
        'title' => 'Home Page',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'details' => [
                            'type' => 'tab',
                            'title' => 'Page Settings',
                            'fields' => [
                                'section1' => [
                                    'type' => 'section',
                                    'title' => 'Page Settings',
                                    'underline' => true
                                ],
                                'header.page_title' => [
                                    'type' => 'text',
                                    'label' => 'Page Title'
                                ]
                            ]
                        ],
                        'content' => [
                            'type' => 'tab',
                            'title' => 'Content',
                            'fields' => [
                                'header.project_name' => [
                                    'type' => 'text',
                                    'label' => 'Project Name'
                                ],
                                'header.project_preview' => [
                                    'type' => 'file',
                                    'multiple' => false,
                                    'label' => 'Project Preview',
                                    'destination' => 'theme://media',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.project_images' => [
                                    'type' => 'list',
                                    'label' => 'Project Images',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Image',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ],
                                            'destination' => 'theme://media'
                                        ]
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
