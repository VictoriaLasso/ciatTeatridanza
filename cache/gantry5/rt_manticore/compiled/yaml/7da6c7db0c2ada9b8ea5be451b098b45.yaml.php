<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/particles/aos.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Animate On Scroll',
        'description' => 'Add animations on scroll',
        'type' => 'atom',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'duration' => [
                    'type' => 'input.text',
                    'label' => 'Duration',
                    'description' => 'Values from 0 to 3000, with step 50ms',
                    'default' => '1000'
                ],
                'once' => [
                    'type' => 'select.select',
                    'label' => 'Once',
                    'description' => 'Whether animation should happen only once - while scrolling down',
                    'default' => true,
                    'options' => [
                        1 => 'true',
                        0 => 'false'
                    ]
                ],
                'delay' => [
                    'type' => 'input.text',
                    'label' => 'Delay',
                    'description' => 'Values from 0 to 3000, with step 50ms',
                    'default' => '0'
                ],
                'easing' => [
                    'type' => 'input.text',
                    'label' => 'Easing',
                    'description' => 'Default easing for AOS animations',
                    'default' => 'ease'
                ],
                'offset' => [
                    'type' => 'input.text',
                    'label' => 'Offset',
                    'description' => 'Offset (in px) from the original trigger point',
                    'default' => '120'
                ],
                'info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'For more information on how to use this atom, see <a href="https://rockettheme.com/docs/joomla/templates/manticore/aos.md">AOS documentation<i class="fa fa-external-link" aria-hidden="true"></i></a>.'
                ]
            ]
        ]
    ]
];
