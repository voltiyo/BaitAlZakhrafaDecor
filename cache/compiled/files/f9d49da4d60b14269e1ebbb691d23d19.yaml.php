<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/BaitAlZakhrafaDecor/user/themes/quark/blueprints/about.yaml',
    'modified' => 1748599075,
    'size' => 1075,
    'data' => [
        'title' => 'About Page',
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
                                'header.MainHeader' => [
                                    'type' => 'text',
                                    'label' => 'About Header'
                                ],
                                'header.MainSubHeader' => [
                                    'type' => 'text',
                                    'label' => 'About Subheader'
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
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
