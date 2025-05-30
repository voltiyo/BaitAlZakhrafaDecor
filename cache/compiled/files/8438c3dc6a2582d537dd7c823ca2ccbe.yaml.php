<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/BaitAlZakhrafaDecor/user/themes/quark/blueprints/home.yaml',
    'modified' => 1748598664,
    'size' => 793,
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
                                'header.MainImage' => [
                                    'type' => 'file',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'label' => 'Main Image',
                                    'multiple' => false,
                                    'destination' => 'theme://media'
                                ],
                                'header.MainImageAlt' => [
                                    'type' => 'text',
                                    'label' => 'Image Alt'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
