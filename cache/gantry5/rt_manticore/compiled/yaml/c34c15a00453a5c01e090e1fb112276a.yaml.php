<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/particles/particlesjs.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Particles',
        'description' => 'A lightweight particle for creating aniamted background particles.',
        'type' => 'particle',
        'icon' => 'fa-snowflake-o',
        'form' => [
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
                'shape' => [
                    'type' => 'select.select',
                    'label' => 'Particle Shape',
                    'description' => 'Select the shape of each particle',
                    'placeholder' => 'Select...',
                    'default' => 'square',
                    'options' => [
                        'circle' => 'Circle',
                        'square' => 'Square',
                        'triangle' => 'Triangle',
                        'moon' => 'Moon',
                        'pacman' => 'Pac-Man'
                    ]
                ],
                'colorsrc' => [
                    'type' => 'select.select',
                    'label' => 'Color Source',
                    'description' => 'Which color should be used as the base for tha particles',
                    'placeholder' => 'Select...',
                    'default' => 'accent',
                    'options' => [
                        'accent' => 'Accent Color 1',
                        'custom' => 'Custom'
                    ]
                ],
                'color' => [
                    'text-color' => NULL,
                    'type' => 'input.colorpicker',
                    'label' => 'Particle Color',
                    'description' => 'This color will be used when Color Source is set to Custom.',
                    'default' => '#5a63ff'
                ],
                'count' => [
                    'type' => 'input.number',
                    'label' => 'Particles Count',
                    'description' => 'Customize the particles count',
                    'default' => 10
                ],
                'shape_size' => [
                    'type' => 'input.number',
                    'label' => 'Shape Size',
                    'description' => 'Define initial size for each shape',
                    'default' => 80
                ]
            ]
        ]
    ]
];
