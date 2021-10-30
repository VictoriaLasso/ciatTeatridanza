<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/bitn/w7p/apache2/htdocs/ciatTeatridanza/templates/rt_manticore/particles/popupmodule.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Popup Module',
        'description' => 'Display Popup Module items.',
        'type' => 'particle',
        'icon' => 'fa-clone',
        'form' => [
            'overrideable' => false,
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
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'module_id' => [
                    'type' => 'gantry.module',
                    'label' => 'Module Id',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Module',
                    'description' => 'Enter module Id.',
                    'pattern' => '\\d+',
                    'overridable' => false
                ],
                'guestbuttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'Guest Button Icon',
                    'description' => 'Choose the Button Icon for guest.'
                ],
                'guestbuttontext' => [
                    'type' => 'input.text',
                    'label' => 'Guest Text',
                    'description' => 'Specify the button text for guest.'
                ],
                'userbuttonicon' => [
                    'type' => 'input.icon',
                    'label' => 'User Button Icon',
                    'description' => 'Choose the Button Icon for logged in user.'
                ],
                'userbuttontext' => [
                    'type' => 'input.text',
                    'label' => 'User Text',
                    'description' => 'Specify the button text for logged in user.'
                ],
                'buttonclass' => [
                    'type' => 'input.selectize',
                    'label' => 'Button Classes',
                    'description' => 'CSS class names for the button.'
                ]
            ]
        ]
    ]
];
