<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/particles/slideshow.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Slideshow',
        'description' => 'Background slideshow with small picture',
        'type' => 'particle',
        'icon' => 'fa-camera-retro',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_settings' => [
                            'label' => 'Settings',
                            'overridable' => false,
                            'fields' => [
                                'source' => [
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the platform or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'joomla' => 'Joomla'
                                    ]
                                ],
                                'height' => [
                                    'type' => 'input.text',
                                    'label' => 'Slide Height',
                                    'description' => 'Set minimal image height',
                                    'placeholder' => '600px',
                                    'default' => '600px',
                                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                                ],
                                'thumbs' => [
                                    'type' => 'select.select',
                                    'label' => 'Thumbnails',
                                    'description' => 'Enable or disable the thumbnails navigation.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'nav' => [
                                    'type' => 'select.select',
                                    'label' => 'Prev / Next',
                                    'description' => 'Enable or disable the Prev / Next navigation. Arrows will not appear unless they are actually required (i.e. more items than currently visible).',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'dots' => [
                                    'type' => 'select.select',
                                    'label' => 'Dots',
                                    'description' => 'Enable or disable the dots navigation.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'autoplay' => [
                                    'type' => 'select.select',
                                    'label' => 'Autoplay',
                                    'description' => 'Decide if you want your slideshow to autoplay or not.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'autoplayTimeout' => [
                                    'type' => 'input.number',
                                    'label' => 'Autoplay Timeout',
                                    'description' => 'The time between each auto transition',
                                    'default' => 8000
                                ],
                                'loop' => [
                                    'type' => 'select.select',
                                    'label' => 'Loop',
                                    'description' => 'Decide if you want your slideshow to loop or not.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'speed' => [
                                    'type' => 'input.number',
                                    'label' => 'Speed',
                                    'description' => 'Transition speed',
                                    'default' => 800
                                ],
                                'touchmove' => [
                                    'type' => 'select.select',
                                    'label' => 'Touch Move',
                                    'description' => 'Decide if you want to be able to move slides using touch.',
                                    'default' => 'disabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'overlay' => [
                                    'type' => 'select.select',
                                    'label' => 'Overlay',
                                    'description' => 'Enable or disable overlay.',
                                    'default' => 'enabled',
                                    'options' => [
                                        'enabled' => 'Enable',
                                        'disabled' => 'Disable'
                                    ]
                                ],
                                'effect' => [
                                    'type' => 'select.select',
                                    'label' => 'Effect',
                                    'description' => 'Pick slideshow effect.',
                                    'default' => 'coverflow',
                                    'options' => [
                                        'slide' => 'Slide',
                                        'fade' => 'Fade'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'items' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Slides',
                                    'description' => 'Create slideshow items.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Enter slide title'
                                        ],
                                        '.class' => [
                                            'type' => 'input.selectize',
                                            'label' => 'CSS Classes',
                                            'description' => 'CSS class name for the item.'
                                        ],
                                        '.image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Image',
                                            'description' => 'Select image for slideshow',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.bg_horizontal' => [
                                            'type' => 'select.selectize',
                                            'label' => 'BG Horizontal Position',
                                            'description' => 'Background Image horizontal position.',
                                            'placeholder' => 'Select...',
                                            'default' => 'center',
                                            'options' => [
                                                'left' => 'Left',
                                                'center' => 'Center',
                                                'right' => 'Right'
                                            ]
                                        ],
                                        '.bg_vertical' => [
                                            'type' => 'select.selectize',
                                            'label' => 'BG Vertical Position',
                                            'description' => 'Background Image horizontal position.',
                                            'placeholder' => 'Select...',
                                            'default' => 'center',
                                            'options' => [
                                                'top' => 'Top',
                                                'center' => 'Center',
                                                'bottom' => 'Bottom'
                                            ]
                                        ],
                                        '.top_title' => [
                                            'type' => 'type.text',
                                            'label' => 'Top Title',
                                            'description' => 'Enter Slide Top Title'
                                        ],
                                        '.main_title' => [
                                            'type' => 'type.text',
                                            'label' => 'Main Title',
                                            'description' => 'Enter Slide Main Title'
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'label' => 'Title Link',
                                            'description' => 'Enter title url/link.',
                                            'default' => '#'
                                        ],
                                        '.linktarget' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Title Link Target',
                                            'description' => 'Target browser window when the title is clicked.',
                                            'placeholder' => 'Select...',
                                            'default' => '_self',
                                            'options' => [
                                                '_self' => 'Self',
                                                '_blank' => 'New Window'
                                            ]
                                        ],
                                        '.author_image' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Author Image',
                                            'description' => 'Select image for slideshow',
                                            'placeholder' => 'Pick an image'
                                        ],
                                        '.author_text' => [
                                            'type' => 'type.text',
                                            'label' => 'Author Text',
                                            'default' => 'Enter author text.',
                                            'description' => 'Enter author name.'
                                        ],
                                        '.author_link' => [
                                            'type' => 'input.text',
                                            'label' => 'Author Link',
                                            'description' => 'Enter author url/link.',
                                            'default' => '#'
                                        ],
                                        '.author_linktarget' => [
                                            'type' => 'select.selectize',
                                            'label' => 'Author Link Target',
                                            'description' => 'Target browser window when the title is clicked.',
                                            'placeholder' => 'Select...',
                                            'default' => '_self',
                                            'options' => [
                                                '_self' => 'Self',
                                                '_blank' => 'New Window'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        '_tab_articles' => [
                            'label' => 'Articles',
                            'overridable' => false,
                            'fields' => [
                                'article.filter.categories' => [
                                    'type' => 'joomla.categories',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the articles should be taken from.',
                                    'overridable' => false
                                ],
                                'article.filter.articles' => [
                                    'type' => 'input.text',
                                    'label' => 'Articles',
                                    'description' => 'Enter the Joomla articles that should be shown. It should be a list of article IDs separated with a comma (i.e. 1,2,3,4,5).',
                                    'overridable' => false
                                ],
                                'article.filter.featured' => [
                                    'type' => 'select.select',
                                    'label' => 'Featured Articles',
                                    'description' => 'Select how Featured articles should be filtered.',
                                    'default' => '',
                                    'options' => [
                                        'include' => 'Include Featured',
                                        'exclude' => 'Exclude Featured',
                                        'only' => 'Only Featured'
                                    ],
                                    'overridable' => false
                                ],
                                'article.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Articles',
                                    'description' => 'Enter the maximum number of articles to display.',
                                    'default' => 5,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first article).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the articles should be ordered by.',
                                    'default' => 'publish_up',
                                    'options' => [
                                        'publish_up' => 'Published Date',
                                        'created' => 'Created Date',
                                        'modified' => 'Last Modified Date',
                                        'title' => 'Title',
                                        'ordering' => 'Ordering',
                                        'hits' => 'Hits',
                                        'id' => 'ID',
                                        'alias' => 'Alias'
                                    ],
                                    'overridable' => false
                                ],
                                'article.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the articles should be ordered by.',
                                    'default' => 'ASC',
                                    'options' => [
                                        'ASC' => 'Ascending',
                                        'DESC' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Articles Display',
                            'overridable' => false,
                            'fields' => [
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select if and what image of the article should be shown.',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'article.display.author_image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author Image',
                                    'description' => 'Select if and what image of the article should be shown.',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'article.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the article title should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the article title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'article.display.link.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Link',
                                    'description' => 'Enable or disable link.',
                                    'options' => [
                                        'enabled' => 'Enabled',
                                        'disabled' => 'Disabled'
                                    ]
                                ],
                                'article.display.link.target' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Link Target',
                                    'description' => 'Target browser window when the button is clicked.',
                                    'placeholder' => 'Select...',
                                    'default' => '_self',
                                    'options' => [
                                        '_self' => 'Self',
                                        '_blank' => 'New Window'
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
