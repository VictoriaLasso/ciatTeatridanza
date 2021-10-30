<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza/templates/rt_manticore/particles/upcgames.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Upcoming Games',
        'description' => 'Display upcoming games as list',
        'type' => 'particle',
        'icon' => 'fa-gamepad',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
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
                                ]
                            ]
                        ],
                        '_tab_collection' => [
                            'label' => 'Particle Items',
                            'overridable' => false,
                            'fields' => [
                                'games' => [
                                    'type' => 'collection.list',
                                    'array' => true,
                                    'label' => 'Games',
                                    'description' => 'Add games.',
                                    'value' => 'title',
                                    'ajax' => true,
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'input.text',
                                            'label' => 'Title',
                                            'description' => 'Please provide item title.',
                                            'skip' => true
                                        ],
                                        '.date' => [
                                            'type' => 'input.text',
                                            'description' => 'Please provide item date.',
                                            'label' => 'Date'
                                        ],
                                        '.link' => [
                                            'type' => 'input.text',
                                            'description' => 'Please enter link.',
                                            'label' => 'Link'
                                        ],
                                        '.target' => [
                                            'type' => 'select.select',
                                            'label' => 'Target',
                                            'description' => 'Target browser window when item is clicked.',
                                            'placeholder' => 'Select...',
                                            'default' => '_blank',
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
                                    'overridable' => false,
                                    'type' => 'joomla.categories',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the articles should be taken from.'
                                ],
                                'article.filter.articles' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Articles',
                                    'description' => 'Enter the Joomla articles that should be shown. It should be a list of article IDs separated with a comma (i.e. 1,2,3,4,5).'
                                ],
                                'article.filter.featured' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Featured Articles',
                                    'description' => 'Select how Featured articles should be filtered.',
                                    'default' => '',
                                    'options' => [
                                        'include' => 'Include Featured',
                                        'exclude' => 'Exclude Featured',
                                        'only' => 'Only Featured'
                                    ]
                                ],
                                'article.limit.total' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Number of Articles',
                                    'description' => 'Enter the maximum number of articles to display.',
                                    'default' => 5,
                                    'pattern' => '\\d{1,2}'
                                ],
                                'article.limit.start' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first article).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}'
                                ],
                                'article.sort.orderby' => [
                                    'overridable' => false,
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
                                    ]
                                ],
                                'article.sort.ordering' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the articles should be ordered by.',
                                    'default' => 'ASC',
                                    'options' => [
                                        'ASC' => 'Ascending',
                                        'DESC' => 'Descending'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Articles Display',
                            'overridable' => false,
                            'fields' => [
                                'article.display.title.enabled' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the article title should be shown.',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'overridable' => false,
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the article title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'article.display.date.enabled' => [
                                    'overridable' => false,
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the article date should be shown.',
                                    'options' => [
                                        'created' => 'Show Created Date',
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.date.format' => [
                                    'overridable' => false,
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format. Leave empty not to display a date.',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11',
                                        'F d, Y' => 'Date12'
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
