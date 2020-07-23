<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1595539805,
    'checksum' => '208db12cd5e5d431a8cd22fa5f93c347',
    'files' => [
        'templates/rt_manticore/custom/config/290' => [
            'index' => [
                'file' => 'templates/rt_manticore/custom/config/290/index.yaml',
                'modified' => 1595538382
            ],
            'layout' => [
                'file' => 'templates/rt_manticore/custom/config/290/layout.yaml',
                'modified' => 1562114186
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
            'name' => 290,
            'timestamp' => 1562114186,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
                'timestamp' => 1560437548
            ],
            'positions' => [
                'slideshow-a' => 'Slideshow A',
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
                'logo' => [
                    'logo-9841' => 'Logo / Image',
                    'logo-8039' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-7574' => 'Menu'
                ],
                'social' => [
                    'social-2794' => 'Social',
                    'social-3822' => 'Social'
                ],
                'slideshow' => [
                    'slideshow-4215' => 'Slideshow'
                ],
                'particlesjs' => [
                    'particlesjs-4163' => 'Particles',
                    'particlesjs-2260' => 'Particles',
                    'particlesjs-7976' => 'Particles',
                    'particlesjs-6165' => 'Particles'
                ],
                'latestnews' => [
                    'latestnews-4525' => 'Latest News'
                ],
                'recentreviews' => [
                    'recentreviews-5030' => 'Recent Reviews'
                ],
                'upcgames' => [
                    'upcgames-6633' => 'Upcoming Games'
                ],
                'toprated' => [
                    'toprated-3403' => 'Top Rated'
                ],
                'featuredvideos' => [
                    'featuredvideos-9350' => 'Featured Videos'
                ],
                'messages' => [
                    'system-messages-2416' => 'System Messages'
                ],
                'position' => [
                    'position-position-4734' => 'Slideshow A',
                    'position-position-7854' => 'Utility A',
                    'position-position-8537' => 'Sidebar A',
                    'position-position-9172' => 'MainBar A',
                    'position-position-7671' => 'Aside A',
                    'position-position-9287' => 'Expanded A',
                    'position-position-9197' => 'Extension A',
                    'position-position-9774' => 'Bottom A'
                ],
                'content' => [
                    'system-content-7084' => 'Page Content'
                ],
                'newsletter' => [
                    'newsletter-7894' => 'Newsletter'
                ],
                'simplemenu' => [
                    'simplemenu-3056' => 'Simple Menu'
                ],
                'copyright' => [
                    'copyright-4079' => 'Copyright'
                ],
                'mobile-menu' => [
                    'mobile-menu-3516' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'top' => 'top',
                    'logo-9841' => 'logo-2704',
                    'menu-7574' => 'menu-2872',
                    'social-2794' => 'social-3096',
                    'slideshow' => 'slideshow',
                    'utility' => 'utility',
                    'sidebar' => 'sidebar',
                    'mainbar' => 'mainbar',
                    'aside' => 'aside',
                    'expanded' => 'expanded',
                    'extension' => 'extension',
                    'bottom' => 'bottom',
                    'footer' => 'footer',
                    'copyright' => 'copyright',
                    'offcanvas' => 'offcanvas',
                    'system-messages-2416' => 'system-messages-9828',
                    'position-position-4734' => 'position-position-6661',
                    'position-position-7854' => 'position-position-5239',
                    'position-position-8537' => 'position-position-9414',
                    'position-position-9172' => 'position-position-8547',
                    'system-content-7084' => 'system-content-1120',
                    'position-position-7671' => 'position-position-8807',
                    'position-position-9287' => 'position-position-8124',
                    'position-position-9197' => 'position-position-4800',
                    'position-position-9774' => 'position-position-3343',
                    'logo-8039' => 'logo-8823',
                    'newsletter-7894' => 'newsletter-4035',
                    'social-3822' => 'social-5890',
                    'simplemenu-3056' => 'simplemenu-2324',
                    'particlesjs-6165' => 'particlesjs-4690',
                    'copyright-4079' => 'copyright-6444',
                    'mobile-menu-3516' => 'mobile-menu-2576'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'home_-_particles',
                'timestamp' => 1560437548
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
                        0 => 'slideshow-4215'
                    ]
                ],
                'slideshow' => [
                    
                ],
                '/header/' => [
                    0 => [
                        0 => 'particlesjs-4163'
                    ],
                    1 => [
                        0 => 'latestnews-4525'
                    ]
                ],
                '/above/' => [
                    0 => [
                        0 => 'particlesjs-2260'
                    ],
                    1 => [
                        0 => 'recentreviews-5030 70',
                        1 => 'upcgames-6633 30'
                    ]
                ],
                '/feature/' => [
                    0 => [
                        0 => 'particlesjs-7976'
                    ],
                    1 => [
                        0 => 'toprated-3403'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'featuredvideos-9350'
                    ]
                ],
                'utility' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'sidebar 20' => [
                                
                            ]
                        ],
                        1 => [
                            'mainbar 60' => [
                                
                            ]
                        ],
                        2 => [
                            'aside 20' => [
                                
                            ]
                        ]
                    ]
                ],
                'expanded' => [
                    
                ],
                'extension' => [
                    
                ],
                'bottom' => [
                    
                ],
                'footer' => [
                    
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
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'fp-slideshow',
                        'variations' => ''
                    ]
                ],
                'slideshow' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-vertical-paddings section-horizontal-paddings',
                        'variations' => ''
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings section-vertical-paddings',
                        'variations' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings',
                        'variations' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'section-horizontal-paddings section-vertical-paddings'
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main',
                    'title' => 'Main',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'aside' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
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
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'extension' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'bottom' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
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
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
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
                'slideshow-4215' => [
                    'attributes' => [
                        'source' => 'particle',
                        'height' => '600px',
                        'thumbs' => 'enabled',
                        'nav' => 'enabled',
                        'dots' => 'enabled',
                        'autoplay' => 'enabled',
                        'autoplayTimeout' => '8000',
                        'loop' => 'disabled',
                        'speed' => '800',
                        'touchmove' => 'disabled',
                        'overlay' => 'enabled',
                        'effect' => 'fade',
                        'items' => [
                            0 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-03.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Game On!',
                                'main_title' => 'Take Your Website to the Next Level with Manticore',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-01.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_blank',
                                'title' => 'Computer Game 1'
                            ],
                            1 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Rich Visuals',
                                'main_title' => 'Drive Traffic with Rich Visuals and Bold Headlines',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-02.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_self',
                                'title' => 'Computer Game 3'
                            ],
                            2 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-02.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Animated Particles',
                                'main_title' => 'Animated Particles Bring Your Website to Life',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-03.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'linktarget' => '_self',
                                'title' => 'Computer Game 5'
                            ],
                            3 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-04.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Modern Style',
                                'main_title' => 'The Perfect Design for Gaming, News, and More',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-04.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_self',
                                'title' => 'Computer Game 7'
                            ],
                            4 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-05.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Reviews',
                                'main_title' => 'Publish Rated Reviews with Brilliant Scores',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-05.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_self',
                                'title' => 'Computer Game 2'
                            ],
                            5 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-06.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Videos',
                                'main_title' => 'Share Your Latest Videos with Your Audience',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-06.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_self',
                                'title' => 'Computer Game 4'
                            ],
                            6 => [
                                'class' => '',
                                'image' => 'gantry-media://rocketlauncher/home/slideshow/img-07.jpg',
                                'bg_horizontal' => 'center',
                                'bg_vertical' => 'top',
                                'top_title' => 'Easy Config',
                                'main_title' => 'Manticore is Powered by the Gantry 5 Framework',
                                'link' => '#',
                                'linktarget' => '_self',
                                'author_image' => 'gantry-media://rocketlauncher/home/slideshow/avatar-07.jpg',
                                'author_text' => 'Published by RocketTheme',
                                'author_link' => '#',
                                'author_linktarget' => '_self',
                                'title' => 'Computer Game 6'
                            ]
                        ],
                        'article' => [
                            'filter' => [
                                'categories' => '10',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '5',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'image' => [
                                    'enabled' => 'intro'
                                ],
                                'author_image' => [
                                    'enabled' => 'intro'
                                ],
                                'title' => [
                                    'enabled' => 'show',
                                    'limit' => ''
                                ],
                                'link' => [
                                    'enabled' => 'enabled',
                                    'target' => '_self'
                                ]
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'nomarginall nopaddingall'
                    ]
                ],
                'particlesjs-4163' => [
                    'title' => 'Particles',
                    'attributes' => [
                        'count' => '30'
                    ]
                ],
                'latestnews-4525' => [
                    'title' => 'Latest News',
                    'attributes' => [
                        'source' => 'particle',
                        'class' => '',
                        'title' => 'News',
                        'uppertitle' => '',
                        'allitems' => 'All news',
                        'selected' => 'all',
                        'cols' => 'cols-4',
                        'cases' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-23',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-07.jpg',
                                        'description' => 'Built on the Powerful Gantry 5 Framework',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Built on the Powerful Gantry 5 Framework'
                                    ],
                                    1 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-08',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-05.jpg',
                                        'description' => 'Create Custom Layouts Using the Layout Manager',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Create Custom Layouts Using the Layout Manager'
                                    ]
                                ],
                                'title' => 'Releases'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-16',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-02.jpg',
                                        'description' => 'Enhance Your Menus with the Menu Editor',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Enhance Your Menus with the Menu Editor'
                                    ],
                                    1 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-13',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-04.jpg',
                                        'description' => 'Exciting New Theme with Cutting-edge Features',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Exciting New Theme with Cutting-edge Features'
                                    ]
                                ],
                                'title' => 'Previews'
                            ],
                            2 => [
                                'items' => [
                                    0 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-08',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-08.jpg',
                                        'description' => 'Fortnite Gets Avengers Endgame Event This Week',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Fortnite Gets Avengers Endgame Event This Week'
                                    ],
                                    1 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-10',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-01.jpg',
                                        'description' => 'Add Font Awesome Icons with Ease',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Add Font Awesome Icons with Ease'
                                    ]
                                ],
                                'title' => 'Blogs'
                            ],
                            3 => [
                                'items' => [
                                    0 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-01',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-06.jpg',
                                        'description' => 'Drive Traffic with Rich Visuals and Bold Headlines',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Drive Traffic with Rich Visuals and Bold Headlines'
                                    ],
                                    1 => [
                                        'layout' => 'photo',
                                        'date' => '2019-05-07',
                                        'image' => 'gantry-media://rocketlauncher/home/header/img-03.jpg',
                                        'description' => 'Manticore Looks Good on Every Platform',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Manticore Looks Good on Every Platform'
                                    ]
                                ],
                                'title' => 'Playstation'
                            ]
                        ],
                        'article' => [
                            'filter' => [
                                'categories' => '10',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '5',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'image' => [
                                    'enabled' => 'intro'
                                ],
                                'text' => [
                                    'type' => 'full',
                                    'limit' => '',
                                    'formatting' => 'text'
                                ],
                                'category' => [
                                    'enabled' => 'show'
                                ],
                                'title' => [
                                    'enabled' => 'show',
                                    'limit' => ''
                                ],
                                'date' => [
                                    'enabled' => 'created',
                                    'format' => 'l, F d, Y'
                                ],
                                'read_more' => [
                                    'enabled' => 'show',
                                    'target' => '_self'
                                ]
                            ]
                        ]
                    ]
                ],
                'particlesjs-2260' => [
                    'title' => 'Particles',
                    'attributes' => [
                        'count' => '6',
                        'shape_size' => '250'
                    ]
                ],
                'recentreviews-5030' => [
                    'title' => 'Recent Reviews',
                    'attributes' => [
                        'source' => 'particle',
                        'class' => '',
                        'title' => 'Recent Reviews',
                        'uppertitle' => '',
                        'allitems' => 'All',
                        'selected' => 'all',
                        'cases' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'date' => '2019-05-09',
                                        'author' => 'Jackson Grant',
                                        'avatar' => 'gantry-media://rocketlauncher/home/above/avatar-01.jpg',
                                        'image' => 'gantry-media://rocketlauncher/home/above/img-02.jpg',
                                        'description' => 'Manticore is a fresh new take on news and magazine-style design for the world of gaming and entertainment. Review the latest releases and share videos of your recent adventures with Manticore!',
                                        'url' => '#',
                                        'target' => '_blank',
                                        'title' => 'Up Your Game with Manticore'
                                    ],
                                    1 => [
                                        'date' => '2019-05-09',
                                        'author' => 'Jackson Grant',
                                        'avatar' => 'gantry-media://rocketlauncher/home/above/avatar-02.jpg',
                                        'image' => 'gantry-media://rocketlauncher/home/above/img-03.jpg',
                                        'description' => 'Don’t know how to code? No problem! Manticore is built on the powerful Gantry 5 framework, making it easier than ever to create a custom layout for your website and add functional improvements without writing a single line of code.',
                                        'url' => '#',
                                        'target' => '_blank',
                                        'title' => 'No Coding Required'
                                    ],
                                    2 => [
                                        'date' => '2019-05-01',
                                        'author' => 'Jackson Grant',
                                        'avatar' => 'gantry-media://rocketlauncher/home/above/avatar-03.jpg',
                                        'image' => 'gantry-media://rocketlauncher/home/above/img-04.jpg',
                                        'description' => 'Want to add a new gallery to your home page? It’s easy as dragging and dropping the Image Grid particle into your layout using Gantry’s powerful Layout Manager. Setting up your content takes seconds!',
                                        'url' => '#',
                                        'target' => '_blank',
                                        'title' => 'Drag-and-drop Simplicity'
                                    ]
                                ],
                                'title' => 'PS4'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'date' => '2019-05-11',
                                        'author' => 'Published by Jackson Grant',
                                        'avatar' => 'gantry-media://rocketlauncher/home/above/avatar-04.jpg',
                                        'image' => 'gantry-media://rocketlauncher/home/above/img-01.jpg',
                                        'description' => 'Does your navigation menu leave you wanting more? No problem! You can add particles, custom links, and Font Awesome icons to your menu with a few clicks of the mouse.',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Level Up Your Menu'
                                    ],
                                    1 => [
                                        'date' => '2019-05-11',
                                        'author' => 'Published by Jackson Grant',
                                        'avatar' => 'gantry-media://rocketlauncher/home/above/avatar-05.jpg',
                                        'image' => 'gantry-media://rocketlauncher/home/above/img-05.jpg',
                                        'description' => 'Manticore looks as good on mobile as it does on your desktop. Search engines are starting to grade sites on their mobile friendliness. Don’t settle for second place, add Manticore to your site!',
                                        'url' => '#',
                                        'target' => '_self',
                                        'title' => 'Responsive Design'
                                    ]
                                ],
                                'title' => 'XBOX ONE'
                            ]
                        ],
                        'article' => [
                            'filter' => [
                                'categories' => '10,8',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '5',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'image' => [
                                    'enabled' => 'intro'
                                ],
                                'text' => [
                                    'type' => 'intro',
                                    'limit' => '',
                                    'formatting' => 'text'
                                ],
                                'category' => [
                                    'enabled' => 'show'
                                ],
                                'title' => [
                                    'enabled' => 'show',
                                    'limit' => ''
                                ],
                                'date' => [
                                    'enabled' => 'created',
                                    'format' => 'l, F d, Y'
                                ],
                                'read_more' => [
                                    'enabled' => 'show',
                                    'target' => '_self'
                                ]
                            ]
                        ]
                    ]
                ],
                'upcgames-6633' => [
                    'title' => 'Upcoming Games',
                    'attributes' => [
                        'source' => 'particle',
                        'class' => '',
                        'title' => 'Top Upcoming Games',
                        'games' => [
                            0 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'The Last of Us Part II'
                            ],
                            1 => [
                                'date' => 'Coming September 13th, 2019',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Borderlands'
                            ],
                            2 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'The Last of Us Part II'
                            ],
                            3 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Cyberpunk 2077'
                            ],
                            4 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'The Last of Us Part II'
                            ],
                            5 => [
                                'date' => 'Coming September 13th, 2019',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Borderlands'
                            ],
                            6 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Cyberpunk 2077'
                            ],
                            7 => [
                                'date' => 'Coming September 13th, 2019',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Borderlands'
                            ],
                            8 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'Cyberpunk 2077'
                            ],
                            9 => [
                                'date' => 'Unknown Release Date',
                                'link' => '#',
                                'target' => '_blank',
                                'title' => 'The Last of Us Part II'
                            ]
                        ],
                        'article' => [
                            'filter' => [
                                'categories' => '10',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '5',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'title' => [
                                    'enabled' => 'show',
                                    'limit' => ''
                                ],
                                'date' => [
                                    'enabled' => 'created',
                                    'format' => 'l, F d, Y'
                                ]
                            ]
                        ]
                    ]
                ],
                'particlesjs-7976' => [
                    'title' => 'Particles',
                    'attributes' => [
                        'count' => '15',
                        'shape_size' => '80'
                    ]
                ],
                'toprated-3403' => [
                    'title' => 'Top Rated',
                    'attributes' => [
                        'source' => 'particle',
                        'title' => 'Top Rated Games',
                        'slides' => '6',
                        'slides_scroll' => '1',
                        'filtering_all' => 'All platforms',
                        'filtering' => 'enabled',
                        'nav' => 'enabled',
                        'autoplay' => 'enabled',
                        'autoplayTimeout' => '8000',
                        'loop' => 'enabled',
                        'groups' => [
                            0 => [
                                'items' => [
                                    0 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-01.png',
                                        'score' => '9.5',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Red Dead Redemption II'
                                    ],
                                    1 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-02.png',
                                        'score' => '9.4',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Horizon Zero Dawn'
                                    ]
                                ],
                                'title' => 'Playstation'
                            ],
                            1 => [
                                'items' => [
                                    0 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-03.png',
                                        'score' => '8.2',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Bloodborne'
                                    ],
                                    1 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-04.png',
                                        'score' => '7.8',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Dead Cells'
                                    ]
                                ],
                                'title' => 'XBOX'
                            ],
                            2 => [
                                'items' => [
                                    0 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-05.png',
                                        'score' => '8.9',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Cuphead'
                                    ],
                                    1 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-06.png',
                                        'score' => '10',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Anthem'
                                    ]
                                ],
                                'title' => 'Nintendo Switch'
                            ],
                            3 => [
                                'items' => [
                                    0 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-07.png',
                                        'score' => '9.1',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Fortnite'
                                    ],
                                    1 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-01.png',
                                        'score' => '9.5',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'The Last of Us II'
                                    ],
                                    2 => [
                                        'class' => '',
                                        'image' => 'gantry-media://rocketlauncher/home/feature/img-02.png',
                                        'score' => '10.0',
                                        'subtitle' => 'RockStar Games',
                                        'description' => '',
                                        'link' => '#',
                                        'target' => '_self',
                                        'title' => 'Dragon Ball FighterZ'
                                    ]
                                ],
                                'title' => 'PC'
                            ]
                        ],
                        'article' => [
                            'filter' => [
                                'categories' => '',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '5',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'image' => [
                                    'enabled' => 'intro'
                                ],
                                'title' => [
                                    'enabled' => 'show',
                                    'limit' => ''
                                ],
                                'link' => [
                                    'enabled' => 'show',
                                    'label' => '',
                                    'target' => '_self'
                                ]
                            ]
                        ]
                    ]
                ],
                'featuredvideos-9350' => [
                    'title' => 'Featured Videos',
                    'attributes' => [
                        'source' => 'particle',
                        'class' => '',
                        'title' => 'Featured Live Streams',
                        'description' => 'Channel in your fans for game time.',
                        'videos' => [
                            0 => [
                                'author' => 'Streamed by Taylor Jackson',
                                'author_link' => 'https://www.google.pl/',
                                'avatar' => 'gantry-media://rocketlauncher/home/showcase/avatar-02.jpg',
                                'thumbnail' => 'gantry-media://rocketlauncher/home/showcase/img-02.jpg',
                                'url' => 'https://www.youtube.com/embed/Q19apeXtGXE',
                                'title' => 'The Burning Crusade Dungeon Run'
                            ],
                            1 => [
                                'author' => 'Streamed by Taylor Jackson',
                                'author_link' => 'https://www.google.pl/',
                                'avatar' => 'gantry-media://rocketlauncher/home/showcase/avatar-05.jpg',
                                'thumbnail' => 'gantry-media://rocketlauncher/home/showcase/img-05.jpg',
                                'url' => 'https://www.youtube.com/embed/Q19apeXtGXE',
                                'title' => 'Dark Souls 3'
                            ],
                            2 => [
                                'author' => 'Streamed by Taylor Jackson',
                                'author_link' => 'https://www.google.pl/',
                                'avatar' => 'gantry-media://rocketlauncher/home/showcase/avatar-03.jpg',
                                'thumbnail' => 'gantry-media://rocketlauncher/home/showcase/img-03.jpg',
                                'url' => 'https://www.youtube.com/embed/PTEIUoAPR0g',
                                'title' => 'MK 11'
                            ],
                            3 => [
                                'author' => 'Streamed by Taylor Jackson',
                                'author_link' => 'https://www.google.pl/',
                                'avatar' => 'gantry-media://rocketlauncher/home/showcase/avatar-01.jpg',
                                'thumbnail' => 'gantry-media://rocketlauncher/home/showcase/img-01.jpg',
                                'url' => 'https://www.youtube.com/embed/Q19apeXtGXE',
                                'title' => 'Speedrun'
                            ],
                            4 => [
                                'author' => 'Streamed by Taylor Jackson',
                                'author_link' => 'https://www.google.pl/',
                                'avatar' => 'gantry-media://rocketlauncher/home/showcase/avatar-04.jpg',
                                'thumbnail' => 'gantry-media://rocketlauncher/home/showcase/img-04.jpg',
                                'url' => 'https://www.youtube.com/embed/Q19apeXtGXE',
                                'title' => 'Zero Hits'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
