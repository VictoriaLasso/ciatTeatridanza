<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/blueprints/styles/slideshow.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Slideshow Styles',
        'description' => 'Slideshow styles for the theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#000000'
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
