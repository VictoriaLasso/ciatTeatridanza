<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/blueprints/styles/navigation.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#000000'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => 'gantry-media://backgrounds/navigation/background-01.jpg'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
