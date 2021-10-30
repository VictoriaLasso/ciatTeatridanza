<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/blueprints/styles/base.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => 'rgba(255, 255, 255, 0)'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#030303'
                ],
                'text-active-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Active Color',
                    'default' => '#5a63ff'
                ]
            ]
        ]
    ]
];
