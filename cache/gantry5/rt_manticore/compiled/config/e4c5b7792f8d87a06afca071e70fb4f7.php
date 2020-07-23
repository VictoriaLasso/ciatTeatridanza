<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1595539870,
    'checksum' => 'e6837b06425787bb76837a1a9b4968bf',
    'files' => [
        'templates/rt_manticore/custom/config/default' => [
            'index' => [
                'file' => 'templates/rt_manticore/custom/config/default/index.yaml',
                'modified' => 1595532921
            ],
            'layout' => [
                'file' => 'templates/rt_manticore/custom/config/default/layout.yaml',
                'modified' => 1595532921
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
                'color-1' => '#5a63ff'
            ],
            'base' => [
                'background' => 'rgba(255, 255, 255, 0)',
                'text-color' => '#030303',
                'text-active-color' => '#5a63ff'
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
                'background-color' => '#5a63ff'
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
                'animation' => 'g-fade'
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
            'navigation' => [
                'background' => '#000000',
                'background-image' => 'gantry-media://backgrounds/navigation/background-01.jpg',
                'text-color' => '#ffffff'
            ],
            'offcanvas' => [
                'background' => '#5a63ff',
                'text-color' => '#ffffff',
                'toggle-color' => '#ffffff',
                'width' => '13rem',
                'toggle-visibility' => 1
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
            ]
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
            'name' => 'default',
            'timestamp' => 1595532921,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1562114184
            ],
            'positions' => [
                'navigation-a' => 'Navigation A',
                'slideshow-a' => 'Slideshow A',
                'header-a' => 'Header A',
                'above-a' => 'Above A',
                'feature-a' => 'Feature A',
                'showcase-a' => 'Showcase A',
                'utility-a' => 'Utility A',
                'sidebar-a' => 'Sidebar A',
                'mainbar-a' => 'MainBar A',
                'aside-a' => 'Aside A',
                'expanded-a' => 'Expanded A',
                'extension-a' => 'Extension A',
                'bottom-a' => 'Bottom A'
            ],
            'sections' => [
                'top' => 'Top',
                'navigation' => 'Navigation',
                'slideshow' => 'Slideshow',
                'above' => 'Above',
                'feature' => 'Feature',
                'showcase' => 'Showcase',
                'utility' => 'Utility',
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
                    'logo-2704' => 'Logo / Image',
                    'logo-8823' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-2872' => 'Menu'
                ],
                'social' => [
                    'social-3096' => 'Social',
                    'social-5890' => 'Social'
                ],
                'position' => [
                    'position-position-7754' => 'Navigation A',
                    'position-position-6661' => 'Slideshow A',
                    'position-position-7051' => 'Header A',
                    'position-position-3264' => 'Above A',
                    'position-position-7980' => 'Feature A',
                    'position-position-9435' => 'Showcase A',
                    'position-position-5239' => 'Utility A',
                    'position-position-9414' => 'Sidebar A',
                    'position-position-8547' => 'MainBar A',
                    'position-position-8807' => 'Aside A',
                    'position-position-8124' => 'Expanded A',
                    'position-position-4800' => 'Extension A',
                    'position-position-3343' => 'Bottom A'
                ],
                'content' => [
                    'system-content-1120' => 'Page Content'
                ],
                'newsletter' => [
                    'newsletter-4035' => 'Newsletter'
                ],
                'simplemenu' => [
                    'simplemenu-2324' => 'Simple Menu'
                ],
                'particlesjs' => [
                    'particlesjs-4690' => 'Particles'
                ],
                'copyright' => [
                    'copyright-6444' => 'Copyright'
                ],
                'mobile-menu' => [
                    'mobile-menu-2576' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1562114184
            ],
            'layout' => [
                '/top/' => [
                    0 => [
                        0 => 'system-messages-9828'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-2704 20',
                        1 => 'menu-2872 60',
                        2 => 'social-3096 20'
                    ],
                    1 => [
                        0 => 'position-position-7754'
                    ]
                ],
                '/slideshow/' => [
                    0 => [
                        0 => 'position-position-6661'
                    ]
                ],
                '/header/' => [
                    0 => [
                        0 => 'position-position-7051'
                    ]
                ],
                '/above/' => [
                    0 => [
                        0 => 'position-position-3264'
                    ]
                ],
                '/feature/' => [
                    0 => [
                        0 => 'position-position-7980'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'position-position-9435'
                    ]
                ],
                '/utility/' => [
                    0 => [
                        0 => 'position-position-5239'
                    ]
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 20' => [
                                0 => [
                                    0 => 'position-position-9414'
                                ]
                            ]
                        ],
                        1 => [
                            'mainbar 60' => [
                                0 => [
                                    0 => 'position-position-8547'
                                ],
                                1 => [
                                    0 => 'system-content-1120'
                                ]
                            ]
                        ],
                        2 => [
                            'aside 20' => [
                                0 => [
                                    0 => 'position-position-8807'
                                ]
                            ]
                        ]
                    ]
                ],
                '/expanded/' => [
                    0 => [
                        0 => 'position-position-8124'
                    ]
                ],
                '/extension/' => [
                    0 => [
                        0 => 'position-position-4800'
                    ]
                ],
                '/bottom/' => [
                    0 => [
                        0 => 'position-position-3343'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'logo-8823'
                    ],
                    1 => [
                        0 => 'newsletter-4035'
                    ],
                    2 => [
                        0 => 'social-5890'
                    ],
                    3 => [
                        0 => 'simplemenu-2324'
                    ],
                    4 => [
                        0 => 'particlesjs-4690'
                    ]
                ],
                '/copyright/' => [
                    0 => [
                        0 => 'copyright-6444'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-2576'
                    ]
                ]
            ],
            'structure' => [
                'top' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'slideshow' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
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
                        'class' => '',
                        'variations' => 'section-horizontal-paddings'
                    ]
                ],
                'feature' => [
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
                        'class' => '',
                        'variations' => 'section-horizontal-paddings section-vertical-paddings'
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
                        'variations' => 'section-horizontal-paddings section-vertical-paddings'
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => 'section-horizontal-paddings'
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings section-vertical-paddings'
                    ]
                ],
                'copyright' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings'
                    ]
                ],
                'offcanvas' => [
                    'attributes' => [
                        'swipe' => '0'
                    ]
                ]
            ],
            'content' => [
                'logo-2704' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://logo/logo.svg',
                        'link' => '1',
                        'text' => 'MantiCore',
                        'title' => '',
                        'class' => 'g-logo g-logo-manticore'
                    ]
                ],
                'menu-2872' => [
                    'block' => [
                        'variations' => 'center nopaddingleft nopaddingright'
                    ]
                ],
                'social-3096' => [
                    'block' => [
                        'variations' => 'nopaddingleft nopaddingright center'
                    ]
                ],
                'position-position-7754' => [
                    'title' => 'Navigation A',
                    'attributes' => [
                        'key' => 'navigation-a'
                    ]
                ],
                'position-position-6661' => [
                    'title' => 'Slideshow A',
                    'attributes' => [
                        'key' => 'slideshow-a'
                    ]
                ],
                'position-position-7051' => [
                    'title' => 'Header A',
                    'attributes' => [
                        'key' => 'header-a'
                    ]
                ],
                'position-position-3264' => [
                    'title' => 'Above A',
                    'attributes' => [
                        'key' => 'above-a'
                    ]
                ],
                'position-position-7980' => [
                    'title' => 'Feature A',
                    'attributes' => [
                        'key' => 'feature-a'
                    ]
                ],
                'position-position-9435' => [
                    'title' => 'Showcase A',
                    'attributes' => [
                        'key' => 'showcase-a'
                    ]
                ],
                'position-position-5239' => [
                    'title' => 'Utility A',
                    'attributes' => [
                        'key' => 'utility-a'
                    ]
                ],
                'position-position-9414' => [
                    'title' => 'Sidebar A',
                    'attributes' => [
                        'key' => 'sidebar-a'
                    ]
                ],
                'position-position-8547' => [
                    'title' => 'MainBar A',
                    'attributes' => [
                        'key' => 'mainbar-a'
                    ]
                ],
                'position-position-8807' => [
                    'title' => 'Aside A',
                    'attributes' => [
                        'key' => 'aside-a'
                    ]
                ],
                'position-position-8124' => [
                    'title' => 'Expanded A',
                    'attributes' => [
                        'key' => 'expanded-a'
                    ]
                ],
                'position-position-4800' => [
                    'title' => 'Extension A',
                    'attributes' => [
                        'key' => 'extension-a'
                    ]
                ],
                'position-position-3343' => [
                    'title' => 'Bottom A',
                    'attributes' => [
                        'key' => 'bottom-a'
                    ]
                ],
                'logo-8823' => [
                    'title' => 'Logo / Image',
                    'block' => [
                        'class' => 'flush',
                        'variations' => 'center'
                    ]
                ],
                'newsletter-4035' => [
                    'attributes' => [
                        'layout' => 'g-newsletter-aside',
                        'headtext' => 'Want RocketTheme email newsletter?',
                        'inputboxtext' => 'What\'s your email address?',
                        'buttonclass' => ''
                    ],
                    'block' => [
                        'variations' => 'nomargintop nopaddingtop'
                    ]
                ],
                'social-5890' => [
                    'attributes' => [
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-youtube-play',
                                'text' => 'YouTube',
                                'link' => '#',
                                'name' => 'YouTube'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'link' => 'https://www.facebook.com/RocketTheme',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'link' => 'http://www.twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ],
                            3 => [
                                'icon' => 'fa fa-twitch',
                                'text' => 'Twitch',
                                'link' => '#',
                                'name' => 'Twitch'
                            ],
                            4 => [
                                'icon' => 'fa fa-instagram',
                                'text' => 'Instagram',
                                'link' => '#',
                                'name' => 'Instagram'
                            ],
                            5 => [
                                'icon' => 'fa fa-vimeo',
                                'text' => 'Vimeo',
                                'link' => '#',
                                'name' => 'Vimeo'
                            ],
                            6 => [
                                'icon' => 'fa fa-rss-square',
                                'text' => 'RSS',
                                'link' => '#',
                                'name' => 'RSS'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'simplemenu-2324' => [
                    'title' => 'Simple Menu',
                    'attributes' => [
                        'menus' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'All platforms'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Playstation'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'XBOX One'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Nintendo Switch'
                                    ],
                                    4 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'PC'
                                    ]
                                ],
                                'title' => 'Games'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Video Reviews'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Live Streams'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Screenshots'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Trailers'
                                    ],
                                    4 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Other Media'
                                    ]
                                ],
                                'title' => 'Media'
                            ],
                            2 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Terms of Use'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Privacy Policy'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Disclaimers'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Company Info'
                                    ],
                                    4 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Accessibility'
                                    ]
                                ],
                                'title' => 'Legal'
                            ],
                            3 => [
                                'items' => [
                                    0 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Contact Us'
                                    ],
                                    1 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Advertise'
                                    ],
                                    2 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Careers'
                                    ],
                                    3 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Support'
                                    ],
                                    4 => [
                                        'icon' => '',
                                        'link' => '#',
                                        'target' => '_blank',
                                        'title' => 'Newsletter'
                                    ]
                                ],
                                'title' => 'Useful'
                            ]
                        ]
                    ]
                ],
                'particlesjs-4690' => [
                    'title' => 'Particles',
                    'attributes' => [
                        'count' => '10',
                        'shape_size' => '100'
                    ]
                ],
                'copyright-6444' => [
                    'attributes' => [
                        'date' => [
                            'start' => '',
                            'end' => ''
                        ],
                        'owner' => 'by RocketTheme. All rights reserved.'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'mobile-menu-2576' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
