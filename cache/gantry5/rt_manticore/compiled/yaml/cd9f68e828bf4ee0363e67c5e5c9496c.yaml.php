<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/particles/featuredvideos.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Featured Videos',
        'description' => 'Display featured videos.',
        'type' => 'particle',
        'icon' => 'fa-youtube',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
                                'class' => [
                                    'overridable' => false,
                                    'type' => 'input.selectize',
                                    'label' => 'CSS Classes',
                                    'description' => 'CSS class name for the particle.'
                                ],
                                'title' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Customize the title text.',
                                    'placeholder' => 'Enter title'
                                ],
                                '_info' => [
                                    'type' => 'separator.note',
                                    'class' => 'alert alert-info',
                                    'content' => '<strong>Enable or disable YouTube likes counts</strong>. Please note that you need <a href="https://console.developers.google.com/apis/credentials" target="_blank">Google API Key</a> with YouTube Data API v3 service enabled for Featured Videos particle counts to work. Obtaining public key is free. After registration, enter your key in field below.'
                                ],
                                'counts' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'YouTube Likes Counts',
                                    'description' => 'Select if you want YouTube likes counts to display',
                                    'default' => 'hide',
                                    'options' => [
                                        'show' => 'Show',
                                        'hide' => 'Hide'
                                    ]
                                ],
                                'token' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Google API Key',
                                    'description' => 'Provide API key for displaying remote data.',
                                    'placeholder' => 'API KEY'
                                ],
                                'description' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Description',
                                    'description' => 'Customize the description.',
                                    'placeholder' => 'Enter description'
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'videos' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Videos',
                                    'description' => 'Add videos',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'overridable' => false,
                                    'fields' => [
                                        '.author' => [
                                            'type' => 'input.text',
                                            'label' => 'Author',
                                            'description' => 'Enter author'
                                        ],
                                        '.author_link' => [
                                            'type' => 'input.text',
                                            'label' => 'Author Url',
                                            'description' => 'Enter author link'
                                        ],
                                        '.avatar' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Author Avatar',
                                            'description' => 'Select author image.'
                                        ],
                                        '.thumbnail' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Custom Video Thumbnail',
                                            'description' => 'Select desired image.'
                                        ],
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Enter video title'
                                        ],
                                        '.url' => [
                                            'type' => 'input.text',
                                            'label' => 'Video Url',
                                            'description' => 'Customize video url.'
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
