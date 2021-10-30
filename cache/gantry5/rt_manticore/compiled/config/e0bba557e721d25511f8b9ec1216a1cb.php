<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1596754115,
    'checksum' => 'a70492436511e7c5c60dd6f41501144c',
    'files' => [
        'templates/rt_manticore/custom/config/_error' => [
            'index' => [
                'file' => 'templates/rt_manticore/custom/config/_error/index.yaml',
                'modified' => 1595538382
            ],
            'layout' => [
                'file' => 'templates/rt_manticore/custom/config/_error/layout.yaml',
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
            'name' => '_error',
            'timestamp' => 1595538382,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_error',
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
                'expanded' => 'Expanded',
                'extension' => 'Extension',
                'bottom' => 'Bottom',
                'copyright' => 'Copyright',
                'header' => 'Header',
                'sidebar' => 'Sidebar',
                'aside' => 'Aside',
                'mainbar' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'messages' => [
                    'system-messages-9828' => 'System Messages'
                ],
                'logo' => [
                    'logo-9841' => 'Logo / Image',
                    'logo-2925' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-7574' => 'Menu'
                ],
                'social' => [
                    'social-2794' => 'Social',
                    'social-2867' => 'Social'
                ],
                'simplecontent' => [
                    'simplecontent-7992' => 'Simple Content'
                ],
                'content' => [
                    'system-content-1560' => 'Page Content'
                ],
                'newsletter' => [
                    'newsletter-6158' => 'Newsletter'
                ],
                'simplemenu' => [
                    'simplemenu-7327' => 'Simple Menu'
                ],
                'particlesjs' => [
                    'particlesjs-3354' => 'Particles'
                ],
                'copyright' => [
                    'copyright-7065' => 'Copyright'
                ],
                'mobile-menu' => [
                    'mobile-menu-2402' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'logo-9841' => 'logo-2704',
                    'menu-7574' => 'menu-2872',
                    'social-2794' => 'social-3096',
                    'footer' => 'footer',
                    'copyright' => 'copyright',
                    'offcanvas' => 'offcanvas',
                    'logo-2925' => 'logo-8823',
                    'newsletter-6158' => 'newsletter-4035',
                    'social-2867' => 'social-5890',
                    'simplemenu-7327' => 'simplemenu-2324',
                    'particlesjs-3354' => 'particlesjs-4690',
                    'copyright-7065' => 'copyright-6444',
                    'mobile-menu-2402' => 'mobile-menu-2576'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => '_error',
                'timestamp' => 1562114184
            ],
            'layout' => [
                '/top/' => [
                    0 => [
                        0 => 'system-messages-9828'
                    ]
                ],
                'navigation' => [
                    0 => [
                        0 => 'logo-9841 20',
                        1 => 'menu-7574 60',
                        2 => 'social-2794 20'
                    ],
                    1 => [
                        0 => 'simplecontent-7992'
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
                                    0 => 'system-content-1560'
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
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section'
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
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
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
                        'variations' => 'section-horizontal-paddings'
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
                        'class' => '',
                        'variations' => 'section-horizontal-paddings'
                    ]
                ],
                'extension' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => 'section-vertical-paddings section-horizontal-paddings'
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => 'section-vertical-paddings section-horizontal-paddings'
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
                        'class' => ''
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
                'simplecontent-7992' => [
                    'title' => 'Simple Content',
                    'attributes' => [
                        'class' => '',
                        'title' => '',
                        'items' => [
                            0 => [
                                'layout' => 'header',
                                'created_date' => '',
                                'content_title' => '<strong>We</strong> are sorry!',
                                'author' => '',
                                'leading_content' => 'Gantry 5 provides a custom error page for you to configure with either positions, particles or a combination of both, as well as styling.',
                                'main_content' => '',
                                'readmore_label' => '',
                                'readmore_link' => '',
                                'readmore_class' => '',
                                'readmore_target' => '_self',
                                'title' => 'We are sorry!'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
