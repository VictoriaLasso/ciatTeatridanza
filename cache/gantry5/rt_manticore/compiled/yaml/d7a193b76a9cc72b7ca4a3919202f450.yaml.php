<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/particles/video.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Video',
        'description' => 'Embed videos from YouTube, Vimeo, Local, or External URL.',
        'type' => 'particle',
        'icon' => 'fa-video-camera',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'columns' => [
                    'type' => 'select.selectize',
                    'label' => 'Columns',
                    'description' => 'Select columns amount.',
                    'default' => 1,
                    'options' => [
                        1 => '1 column',
                        2 => '2 columns',
                        3 => '3 columns',
                        4 => '4 columns'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Blocks',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.caption' => [
                            'type' => 'input.text',
                            'label' => 'Caption',
                            'description' => 'Video caption'
                        ],
                        '.source' => [
                            'type' => 'select.selectize',
                            'label' => 'Source',
                            'description' => 'Video Source',
                            'placeholder' => 'Select...',
                            'default' => 'local',
                            'options' => [
                                'preset' => 'Slideshow Preset',
                                'vimeo' => 'Vimeo Url',
                                'youtube' => 'YouTube Url',
                                'local' => 'Local Video',
                                'external' => 'External Url'
                            ]
                        ],
                        '.video' => [
                            'type' => 'input.text',
                            'label' => 'Url',
                            'description' => 'URL from YouTube, Vimeo, or External'
                        ],
                        '.local' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Local Video Sources',
                            'description' => 'Serve your video in multiple formats.',
                            'value' => 'title',
                            'ajax' => true,
                            'fields' => [
                                '.file' => [
                                    'type' => 'input.videopicker',
                                    'label' => 'Local Video',
                                    'description' => 'Select desired video.'
                                ]
                            ]
                        ],
                        '.posterimage' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Poster Image',
                            'description' => 'Select the poster image for Local or External Video.'
                        ],
                        '.loop' => [
                            'type' => 'select.select',
                            'label' => 'Loop',
                            'description' => 'Enable or disable video looping.',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.autoplay' => [
                            'type' => 'select.select',
                            'label' => 'Autoplay',
                            'description' => 'Enable or disable video autoplay.',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.controls' => [
                            'type' => 'select.select',
                            'label' => 'Show Controls (YouTube, Local, and External)',
                            'description' => 'Enable or disable play bar (applies to YouTube, Local, and External videos).',
                            'default' => 'disabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.info' => [
                            'type' => 'select.select',
                            'label' => 'Show Info (YouTube)',
                            'description' => 'Enable or disable top info bar (applies to YouTube only).',
                            'default' => 'disabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.related' => [
                            'type' => 'select.select',
                            'label' => 'Related Videos (YouTube)',
                            'description' => 'Enable or disable displaying related videos when Youtube video is paused or has ended.',
                            'default' => 'disabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.muted' => [
                            'type' => 'select.select',
                            'label' => 'Muted',
                            'description' => 'Videos must be Muted in order for Autoplay to work in Chrome.',
                            'default' => 'enabled',
                            'options' => [
                                'enabled' => 'Enable',
                                'disabled' => 'Disable'
                            ]
                        ],
                        '.start' => [
                            'type' => 'input.number',
                            'label' => 'Start Time (YouTube)',
                            'description' => 'Determine start time of YouTube video (in seconds).'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
