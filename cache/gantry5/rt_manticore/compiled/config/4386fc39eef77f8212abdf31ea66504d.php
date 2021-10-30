<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1596754115,
    'checksum' => '5312fa70cde2d349b1259a35817bad80',
    'files' => [
        'templates/rt_manticore/custom/config/_offline' => [
            'index' => [
                'file' => 'templates/rt_manticore/custom/config/_offline/index.yaml',
                'modified' => 1595538382
            ],
            'layout' => [
                'file' => 'templates/rt_manticore/custom/config/_offline/layout.yaml',
                'modified' => 1595538382
            ]
        ],
        'templates/rt_manticore/custom/config/default' => [
            'index' => [
                'file' => 'templates/rt_manticore/custom/config/default/index.yaml',
                'modified' => 1595532921
            ],
            'layout' => [
                'file' => 'templates/rt_manticore/custom/config/default/layout.yaml',
                'modified' => 1595532921
            ],
            'styles' => [
                'file' => 'templates/rt_manticore/custom/config/default/styles.yaml',
                'modified' => 1596754113
            ]
        ],
        'templates/rt_manticore/config/default' => [
            'page/assets' => [
                'file' => 'templates/rt_manticore/config/default/page/assets.yaml',
                'modified' => 1562114184
            ],
            'page/body' => [
                'file' => 'templates/rt_manticore/config/default/page/body.yaml',
                'modified' => 1562114184
            ],
            'page/head' => [
                'file' => 'templates/rt_manticore/config/default/page/head.yaml',
                'modified' => 1562114184
            ],
            'particles/branding' => [
                'file' => 'templates/rt_manticore/config/default/particles/branding.yaml',
                'modified' => 1562114184
            ],
            'particles/copyright' => [
                'file' => 'templates/rt_manticore/config/default/particles/copyright.yaml',
                'modified' => 1562114184
            ],
            'particles/logo' => [
                'file' => 'templates/rt_manticore/config/default/particles/logo.yaml',
                'modified' => 1562114184
            ],
            'particles/social' => [
                'file' => 'templates/rt_manticore/config/default/particles/social.yaml',
                'modified' => 1562114184
            ],
            'particles/totop' => [
                'file' => 'templates/rt_manticore/config/default/particles/totop.yaml',
                'modified' => 1562114184
            ],
            'styles' => [
                'file' => 'templates/rt_manticore/config/default/styles.yaml',
                'modified' => 1562114184
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'aos' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'duration' => '1000',
                'once' => true,
                'delay' => '0',
                'easing' => 'ease',
                'offset' => '120'
            ],
            'blockcontent' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'source' => 'particle',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'link' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'gridstatistic' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'readmoreclass' => 'button-2',
                'cols' => 'g-gridstatistic-5cols'
            ],
            'imagegrid' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'infolist' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => '',
                'svg' => '',
                'text' => 'MantiCore',
                'title' => 'MantiCore',
                'class' => 'g-logo'
            ],
            'newsletter' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'action' => 'https://rockettheme.us18.list-manage.com/subscribe/post?u=b35dd217b76653582e6741a63&amp;id=80179a67c0',
                'layout' => 'g-newsletter-aside',
                'style' => 'g-newsletter-rounded',
                'inputboxtext' => 'What\'s your email address?',
                'buttontext' => 'Subscribe',
                'buttonclass' => 'button'
            ],
            'pricingtable' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'simplecontent' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'simplecounter' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => 1,
                'month' => 0
            ],
            'simplemenu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => ''
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    0 => [
                        'icon' => 'fa fa-facebook fa-fw',
                        'text' => '',
                        'link' => 'https://www.facebook.com/RocketTheme',
                        'name' => 'Facebook'
                    ],
                    1 => [
                        'icon' => 'fa fa-twitter fa-fw',
                        'text' => '',
                        'link' => 'http://www.twitter.com/rockettheme',
                        'name' => 'Twitter'
                    ],
                    2 => [
                        'icon' => 'fa fa-github fa-fw',
                        'text' => '',
                        'link' => '#',
                        'name' => 'GitHub'
                    ],
                    3 => [
                        'icon' => 'fa fa-instagram fa-fw',
                        'text' => '',
                        'link' => '#',
                        'name' => 'Instagram'
                    ],
                    4 => [
                        'icon' => 'fa fa-linkedin fa-fw',
                        'text' => '',
                        'link' => '#',
                        'name' => 'LinkedIn'
                    ]
                ]
            ],
            'upcgames' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'source' => 'particle',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'content' => '&copy; 2019 by <a href="http://www.rockettheme.com/" title="RocketTheme" class="g-powered-by">RocketTheme</a>. All rights reserved.',
                'css' => [
                    'class' => ''
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => '2007',
                    'end' => 'now'
                ],
                'owner' => 'RocketTheme LLC',
                'link' => '',
                'target' => '_blank',
                'css' => [
                    'class' => ''
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'g-totop'
                ],
                'icon' => '',
                'content' => 'Top'
            ],
            'featuredvideos' => [
                'enabled' => true,
                'counts' => 'hide'
            ],
            'heading' => [
                'enabled' => true
            ],
            'latestnews' => [
                'enabled' => true,
                'source' => 'particle',
                'selected' => 'all',
                'cols' => 'cols-4',
                'date_format' => 'F d, Y',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'read_more' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'logos' => [
                'enabled' => true
            ],
            'particlesjs' => [
                'enabled' => true,
                'shape' => 'square',
                'colorsrc' => 'accent',
                'color' => '#5a63ff',
                'count' => 10,
                'shape_size' => 80
            ],
            'popupmodule' => [
                'enabled' => true
            ],
            'promo' => [
                'enabled' => true
            ],
            'recentreviews' => [
                'enabled' => true,
                'source' => 'particle',
                'selected' => 'all',
                'date_format' => 'F d, Y',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'read_more' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'search' => [
                'enabled' => true
            ],
            'slideshow' => [
                'enabled' => true,
                'source' => 'particle',
                'height' => '600px',
                'thumbs' => 'enabled',
                'nav' => 'enabled',
                'dots' => 'enabled',
                'autoplay' => 'enabled',
                'autoplayTimeout' => 8000,
                'loop' => 'enabled',
                'speed' => 800,
                'touchmove' => 'disabled',
                'overlay' => 'enabled',
                'effect' => 'coverflow',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'link' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'testimonials' => [
                'enabled' => true,
                'source' => 'particle',
                'autoplay' => 'enabled',
                'autoplayTimeout' => 8000,
                'loop' => 'enabled',
                'speed' => 800,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'link' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'toprated' => [
                'enabled' => true,
                'source' => 'particle',
                'slides' => 6,
                'slides_scroll' => 1,
                'filtering_all' => 'All platforms',
                'filtering' => 'enabled',
                'nav' => 'enabled',
                'autoplay' => 'enabled',
                'autoplayTimeout' => 8000,
                'loop' => 'enabled',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 5,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'link' => [
                            'target' => '_self'
                        ]
                    ]
                ]
            ],
            'video' => [
                'enabled' => true,
                'columns' => 1
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => false
                        ],
                        'edit' => false,
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'styles' => [
            'above' => [
                'background' => 'rgba(255, 255, 255, 0)',
                'text-color' => '#000000'
            ],
            'accent' => [
                'color-1' => '#2db76a'
            ],
            'base' => [
                'background' => 'rgba(255, 255, 255, 0)',
                'text-color' => '#030303',
                'text-active-color' => '#2db76a'
            ],
            'bottom' => [
                'background' => '#ffffff',
                'text-color' => '#030303'
            ],
            'breakpoints' => [
                'large-desktop-container' => '88rem',
                'desktop-container' => '76rem',
                'tablet-container' => '51rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '51rem'
            ],
            'button' => [
                'text-color' => '#030303',
                'background-color' => '#2db76a'
            ],
            'copyright' => [
                'background' => '#000000',
                'text-color' => '#666666'
            ],
            'expanded' => [
                'background' => 'rgba(255, 255, 255, 0)',
                'text-color' => '#030303'
            ],
            'extension' => [
                'background' => '#eef2ff',
                'text-color' => '#030303'
            ],
            'feature' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'font' => [
                'family-default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
            ],
            'footer' => [
                'background' => '#000000',
                'text-color' => '#888888'
            ],
            'header' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => 'rgba(255, 255, 255, 0)',
                'text-color' => '#030303'
            ],
            'menu' => [
                'animation' => 'g-fade-in-up'
            ],
            'menustyle' => [
                'background' => '#000000',
                'text-color' => '#c2c3c6',
                'text-color-alt' => '#c2c3c6',
                'text-color-active' => '#ffffff',
                'background-active' => '#2db76a',
                'sublevel-text-color' => '#ffffff',
                'sublevel-text-color-active' => '#ffffff',
                'sublevel-background' => '#000000',
                'sublevel-background-active' => 'rgba(255,255,255,0.15)'
            ],
            'navigation' => [
                'background' => '#000000',
                'background-image' => 'gantry-media://backgrounds/navigation/background-01.jpg',
                'text-color' => '#ffffff'
            ],
            'offcanvas' => [
                'background' => '#2db76a',
                'text-color' => '#ffffff',
                'toggle-color' => '#ffffff',
                'width' => '13rem',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#000000',
                'background-image' => 'gantry-media://backgrounds/showcase/img-01.jpg',
                'text-color' => '#ffffff'
            ],
            'slideshow' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'top' => [
                'background' => '#000000',
                'text-color' => '#ffffff'
            ],
            'utility' => [
                'background' => '#ffffff',
                'text-color' => '#030303'
            ],
            'preset1' => [
                'image' => 'gantry-admin://images/preset1.png',
                'description' => 'Preset 1',
                'colors' => [
                    0 => '#5a63ff'
                ],
                'styles' => [
                    'base' => [
                        'background' => 'rgba(255, 255, 255, 0)',
                        'text-color' => '#030303',
                        'text-active-color' => '#5a63ff'
                    ],
                    'accent' => [
                        'color-1' => '#5a63ff'
                    ],
                    'button' => [
                        'text-color' => '#030303',
                        'background-color' => '#5a63ff'
                    ],
                    'menustyle' => [
                        'background' => '#000000',
                        'text-color' => '#c2c3c6',
                        'text-color-alt' => '#c2c3c6',
                        'text-color-active' => '#ffffff',
                        'background-active' => '#5a63ff',
                        'sublevel-text-color' => '#ffffff',
                        'sublevel-text-color-active' => '#ffffff',
                        'sublevel-background' => '#000000',
                        'sublevel-background-active' => 'rgba(255,255,255,0.15)'
                    ],
                    'font' => [
                        'family-default' => 'rubik, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                    ],
                    'top' => [
                        'background' => '#000000',
                        'text-color' => '#ffffff'
                    ],
                    'navigation' => [
                        'background' => '#000000',
                        'background-image' => 'gantry-media://backgrounds/navigation/background-01.jpg',
                        'text-color' => '#ffffff'
                    ],
                    'slideshow' => [
                        'background' => '#000000',
                        'text-color' => '#ffffff'
                    ],
                    'header' => [
                        'background' => '#000000',
                        'text-color' => '#ffffff'
                    ],
                    'above' => [
                        'background' => 'rgba(255, 255, 255, 0)',
                        'text-color' => '#000000'
                    ],
                    'feature' => [
                        'background' => '#000000',
                        'text-color' => '#ffffff'
                    ],
                    'showcase' => [
                        'background' => '#000000',
                        'background-image' => 'gantry-media://backgrounds/showcase/img-01.jpg',
                        'text-color' => '#ffffff'
                    ],
                    'utility' => [
                        'background' => '#ffffff',
                        'text-color' => '#030303'
                    ],
                    'main' => [
                        'background' => 'rgba(255, 255, 255, 0)',
                        'text-color' => '#030303'
                    ],
                    'expanded' => [
                        'background' => 'rgba(255, 255, 255, 0)',
                        'text-color' => '#030303'
                    ],
                    'extension' => [
                        'background' => '#eef2ff',
                        'text-color' => '#030303'
                    ],
                    'bottom' => [
                        'background' => '#ffffff',
                        'text-color' => '#030303'
                    ],
                    'footer' => [
                        'background' => '#000000',
                        'text-color' => '#888888'
                    ],
                    'copyright' => [
                        'background' => '#000000',
                        'text-color' => '#666666'
                    ],
                    'offcanvas' => [
                        'background' => '#5a63ff',
                        'text-color' => '#ffffff',
                        'toggle-color' => '#ffffff'
                    ],
                    'breakpoints' => [
                        'large-desktop-container' => '88rem',
                        'desktop-container' => '76rem',
                        'tablet-container' => '51rem',
                        'large-mobile-container' => '30rem',
                        'mobile-menu-breakpoint' => '51rem'
                    ]
                ]
            ],
            'preset' => 'preset3'
        ],
        'page' => [
            'body' => [
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '3'
                ],
                'doctype' => 'html',
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => 1
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'type' => 'frameworks',
                        'title' => 'JavaScript Frameworks',
                        'attributes' => [
                            'enabled' => '1',
                            'jquery' => [
                                'enabled' => '1',
                                'ui_core' => '1',
                                'ui_sortable' => '0'
                            ],
                            'bootstrap' => [
                                'enabled' => '0'
                            ],
                            'mootools' => [
                                'enabled' => '0',
                                'more' => '0'
                            ]
                        ],
                        'id' => 'frameworks-1582'
                    ]
                ]
            ]
        ],
        'index' => [
            'name' => '_offline',
            'timestamp' => 1595538382,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_offline',
                'timestamp' => 1562114184
            ],
            'positions' => [
                
            ],
            'sections' => [
                'top' => 'Top',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'above' => 'Above',
                'showcase' => 'Showcase',
                'utility' => 'Utility',
                'feature' => 'Feature',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'aside' => 'Aside',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'messages' => [
                    'system-messages-9828' => 'System Messages'
                ],
                'logo' => [
                    'logo-5992' => 'Logo'
                ],
                'simplecontent' => [
                    'simplecontent-5551' => 'Offline Description'
                ],
                'content' => [
                    'system-content-7661' => 'Page Content'
                ],
                'blockcontent' => [
                    'blockcontent-4574' => 'Maintenance Mode'
                ],
                'copyright' => [
                    'copyright-9867' => 'Copyright'
                ]
            ],
            'inherit' => [
                'default' => [
                    'top' => 'top',
                    'extension' => 'extension',
                    'bottom' => 'bottom',
                    'copyright' => 'copyright',
                    'copyright-9867' => 'copyright-6444'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_offline',
                'timestamp' => 1562114184
            ],
            'layout' => [
                'top' => [
                    0 => [
                        0 => 'system-messages-9828'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-5992'
                    ],
                    1 => [
                        0 => 'simplecontent-5551'
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
                                    0 => 'system-content-7661'
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
                'extension' => [
                    
                ],
                'bottom' => [
                    0 => [
                        0 => 'blockcontent-4574'
                    ]
                ],
                '/footer/' => [
                    
                ],
                'copyright' => [
                    
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
                            0 => 'attributes'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-fluid-navigation'
                    ]
                ],
                'slideshow' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-default-slideshow section-horizontal-paddings'
                    ]
                ],
                'header' => [
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-header'
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-above'
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-showcase'
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-utility'
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-feature'
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => ''
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => ''
                    ],
                    'block' => [
                        'class' => 'equal-height',
                        'variations' => 'center'
                    ]
                ],
                'aside' => [
                    'attributes' => [
                        'class' => ''
                    ],
                    'block' => [
                        'fixed' => '1'
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'g-default-main',
                        'extra' => [
                            
                        ]
                    ]
                ],
                'expanded' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '1',
                        'class' => 'g-default-expanded'
                    ]
                ],
                'extension' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes'
                        ]
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes'
                        ]
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'copyright' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'logo-5992' => [
                    'block' => [
                        'variations' => 'nomarginall center'
                    ]
                ],
                'simplecontent-5551' => [
                    'title' => 'Offline Description',
                    'attributes' => [
                        'class' => '',
                        'title' => '',
                        'items' => [
                            0 => [
                                'layout' => 'header',
                                'created_date' => '',
                                'content_title' => 'Site offline',
                                'author' => '',
                                'leading_content' => 'We are working on new and exciting stuff.',
                                'main_content' => '',
                                'readmore_label' => '',
                                'readmore_link' => '',
                                'readmore_class' => '',
                                'readmore_target' => '_self',
                                'title' => 'Offline'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'align-left'
                    ]
                ],
                'system-content-7661' => [
                    'block' => [
                        'variations' => 'title6'
                    ]
                ],
                'blockcontent-4574' => [
                    'title' => 'Maintenance Mode',
                    'attributes' => [
                        'class' => '',
                        'headline' => 'Maintenance Mode',
                        'description' => 'Sorry, our Website is Temporarily Down for Maintenance. Please Check Back Again Soon.'
                    ],
                    'block' => [
                        'class' => 'g-title-large',
                        'variations' => 'center'
                    ]
                ]
            ]
        ]
    ]
];
