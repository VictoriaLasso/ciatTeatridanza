<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatTeatridanza/templates/rt_manticore/particles/search.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Search',
        'description' => 'Display search icon with link to search page.',
        'type' => 'particle',
        'icon' => 'fa-search',
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.'
                ],
                'placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Placeholder',
                    'description' => 'Input your custom placeholder',
                    'placeholder' => 'Your keyword...'
                ]
            ]
        ]
    ]
];
