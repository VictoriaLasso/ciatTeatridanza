<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/particles/testimonials.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Testimonials',
        'description' => 'Display testimonials.',
        'type' => 'particle',
        'icon' => 'fa-users',
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
                                'source' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Content Source',
                                    'description' => 'Choose if the content should be loaded from the platform or particle itself.',
                                    'default' => 'particle',
                                    'options' => [
                                        'particle' => 'Particle',
                                        'joomla' => 'Joomla'
                                    ]
                                ],
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
                                'subtitle' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Subtitle',
                                    'description' => 'Customize the subtitle text.',
                                    'placeholder' => 'Enter subtitle'
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
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'testimony' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Testomonial',
                                    'description' => 'Create testimonial.',
                                    'value' => 'name',
                                    'ajax' => true,
                                    'fields' => [
                                        '.content' => [
                                            'type' => 'input.textarea',
                                            'label' => 'Testimonial Content',
                                            'description' => 'Add Testimony Content'
                                        ],
                                        '.author' => [
                                            'type' => 'input.text',
                                            'label' => 'Testimony Author'
                                        ],
                                        '.position' => [
                                            'type' => 'input.text',
                                            'label' => 'Person Position'
                                        ],
                                        '.photo' => [
                                            'type' => 'input.imagepicker',
                                            'label' => 'Person Photo',
                                            'description' => 'Pick desired photo.'
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
                                    'default' => 'intro',
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
                                'article.display.text.type' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Article Text',
                                    'description' => 'Select if and how the article text should be shown.',
                                    'options' => [
                                        'intro' => 'Introduction',
                                        'full' => 'Full Article',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.limit' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Text Limit',
                                    'description' => 'Type in the number of characters the article text should be limited to.',
                                    'pattern' => '\\d+'
                                ],
                                'article.display.text.formatting' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Text Formatting',
                                    'description' => 'Select the formatting you want to use to display the article text.',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'article.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the article author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.link.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Button Link',
                                    'description' => 'Select if the Link button should show.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.link.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Button Label',
                                    'description' => 'Type in the label for the button.',
                                    'placeholder' => 'Explore Now'
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
