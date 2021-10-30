<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/blueprints/styles/menustyle.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Menu Styles',
        'description' => 'Set menu style options.',
        'type' => 'core',
        'form' => [
            'fields' => [
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_toplevel' => [
                            'label' => 'Top Level',
                            'fields' => [
                                'background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => '#000000'
                                ],
                                'text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#c2c3c6'
                                ],
                                'text-color-alt' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text Alt',
                                    'default' => '#c2c3c6'
                                ],
                                'text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#ffffff'
                                ],
                                'background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Active Background',
                                    'default' => '#5a63ff'
                                ]
                            ]
                        ],
                        '_tab_sublevel' => [
                            'label' => 'Sub Level',
                            'fields' => [
                                'sublevel-text-color' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Text',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-text-color-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Text',
                                    'default' => '#ffffff'
                                ],
                                'sublevel-background' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Background',
                                    'default' => '#000000'
                                ],
                                'sublevel-background-active' => [
                                    'type' => 'input.colorpicker',
                                    'label' => 'Hover & Active Bg',
                                    'default' => 'rgba(255,255,255,0.15)'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
