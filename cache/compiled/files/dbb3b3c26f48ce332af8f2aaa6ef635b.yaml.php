<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/BaitAlZakhrafaDecor/user/themes/quark/blueprints/services.yaml',
    'modified' => 1748599532,
    'size' => 1469,
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
                                'header.MainTitle' => [
                                    'type' => 'text',
                                    'label' => 'Main Title'
                                ],
                                'header.paragraphs' => [
                                    'name' => 'paragraphs',
                                    'type' => 'list',
                                    'label' => 'Paragraphs',
                                    'style' => 'horizontal',
                                    'fields' => [
                                        '.header' => [
                                            'type' => 'text',
                                            'label' => 'Paragraph Header'
                                        ],
                                        '.text' => [
                                            'type' => 'textarea',
                                            'rows' => 6,
                                            'label' => 'Text'
                                        ]
                                    ]
                                ],
                                'header.images' => [
                                    'name' => 'Images',
                                    'type' => 'list',
                                    'label' => 'Images',
                                    'style' => 'horizontal',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'file',
                                            'accept' => [
                                                0 => 'image/*'
                                            ],
                                            'label' => 'Main Image',
                                            'multiple' => false,
                                            'destination' => 'theme://media'
                                        ],
                                        '.image_alt' => [
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
        ]
    ]
];
