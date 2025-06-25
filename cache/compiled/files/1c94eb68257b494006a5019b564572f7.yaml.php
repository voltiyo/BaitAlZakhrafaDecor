<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/BaitAlZakhrafaDecor/user/themes/quark/blueprints/contact.yaml',
    'modified' => 1748600619,
    'size' => 1764,
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
                                    'label' => 'Page Title'
                                ],
                                'header.phone_number' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number'
                                ],
                                'header.fax' => [
                                    'type' => 'text',
                                    'label' => 'Fax Number'
                                ],
                                'header.email' => [
                                    'type' => 'text',
                                    'label' => 'Email Address'
                                ],
                                'header.address' => [
                                    'type' => 'textarea',
                                    'rows' => 4,
                                    'label' => 'Address'
                                ],
                                'header.facebook_link' => [
                                    'type' => 'text',
                                    'label' => 'Facebook Link'
                                ],
                                'header.twitter_link' => [
                                    'type' => 'text',
                                    'label' => 'Twitter Link'
                                ],
                                'header.linkedin_link' => [
                                    'type' => 'text',
                                    'label' => 'Linkedin Link'
                                ],
                                'header.youtube_link' => [
                                    'type' => 'text',
                                    'label' => 'Youtube Link'
                                ],
                                'header.pinterest_link' => [
                                    'type' => 'text',
                                    'label' => 'Pinterest Link'
                                ],
                                'header.location_image' => [
                                    'type' => 'file',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'label' => 'Location Image',
                                    'multiple' => false,
                                    'destination' => 'theme://media'
                                ],
                                'header.location_alt' => [
                                    'type' => 'text',
                                    'label' => 'Location Image Alt'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
