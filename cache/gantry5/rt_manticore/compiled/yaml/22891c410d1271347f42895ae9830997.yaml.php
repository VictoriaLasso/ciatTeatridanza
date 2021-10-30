<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza/templates/rt_manticore/custom/config/298/layout.yaml',
    'modified' => 1562114186,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'coming_soon',
            'timestamp' => 1560370512
        ],
        'layout' => [
            'top' => [
                
            ],
            '/navigation/' => [
                0 => [
                    0 => 'logo-9841 20',
                    1 => 'menu-7574 60',
                    2 => 'social-2794 20'
                ],
                1 => [
                    0 => 'simplecontent-8300'
                ]
            ],
            '/slideshow/' => [
                
            ],
            '/header/' => [
                
            ],
            '/above/' => [
                
            ],
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            0 => [
                                0 => 'simplecounter-4200'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'blockcontent-6645'
                ]
            ],
            'footer' => [
                
            ],
            '/copyright/' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'attributes' => [
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'aside' => [
                'attributes' => [
                    'class' => ''
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'center',
                    'variations' => ''
                ],
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'logo-9841' => [
                'title' => 'Logo / Image',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ],
                    'particle' => 'logo-2704'
                ]
            ],
            'menu-7574' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ],
                    'particle' => 'menu-2872'
                ]
            ],
            'social-2794' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ],
                    'particle' => 'social-3096'
                ]
            ],
            'simplecontent-8300' => [
                'title' => 'Coming Soon',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Coming Soon',
                            'author' => '',
                            'leading_content' => 'Website under construction.',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Coming Soon'
                        ]
                    ]
                ]
            ],
            'simplecounter-4200' => [
                'title' => 'Simple Counter',
                'attributes' => [
                    'title' => 'Stay Tuned',
                    'desc' => 'We are working on a new and exciting template that we think you will really like.',
                    'date' => '31',
                    'year' => '2020',
                    'daytext' => 'Day',
                    'daystext' => 'Days',
                    'hourtext' => 'Hour',
                    'hourstext' => 'Hours',
                    'minutetext' => 'Minute',
                    'minutestext' => 'Minutes',
                    'secondtext' => 'Second',
                    'secondstext' => 'Seconds'
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'blockcontent-6645' => [
                'title' => 'Block Content',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'icon' => '',
                    'image' => '',
                    'headline' => 'Have Something to Tell Us?',
                    'description' => 'Ideas, Suggestions or Review',
                    'linktext' => 'Contact Us',
                    'link' => '#',
                    'linkclass' => 'button-2',
                    'linktarget' => '_self',
                    'subcontents' => [
                        
                    ]
                ],
                'block' => [
                    'class' => 'nomarginbottom',
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
