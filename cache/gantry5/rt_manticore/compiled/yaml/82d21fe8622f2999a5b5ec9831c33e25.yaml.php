<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatd/templates/rt_manticore/blueprints/styles/main.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Main Styles',
        'description' => 'Main content styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(255, 255, 255, 0)'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#030303'
                ]
            ]
        ]
    ]
];
