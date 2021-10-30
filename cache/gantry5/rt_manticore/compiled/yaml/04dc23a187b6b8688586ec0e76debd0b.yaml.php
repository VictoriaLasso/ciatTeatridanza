<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/particles/promo.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Promo',
        'description' => 'Display promo image with text.',
        'type' => 'particle',
        'icon' => 'fa-image',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'text' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Text',
                    'description' => 'Customize the promo text.'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Pick desired promo image.'
                ]
            ]
        ]
    ]
];
