<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatd/templates/rt_manticore/blueprints/styles/button.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Button Colors',
        'description' => 'Button colors for the theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Text',
                    'default' => '#030303'
                ],
                'background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Button Background',
                    'default' => '#5a63ff'
                ]
            ]
        ]
    ]
];
