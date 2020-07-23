<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:\\bitn\\w7p\\apache2\\htdocs\\ciatd/templates/rt_manticore/blueprints/styles/breakpoints.yaml',
    'modified' => 1562114184,
    'data' => [
        'name' => 'Breakpoints',
        'description' => 'Breakpoint container sizes for different viewports',
        'type' => 'configuration',
        'form' => [
            'fields' => [
                'large-desktop-container' => [
                    'type' => 'input.text',
                    'label' => 'Large Desktop',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '88rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'desktop-container' => [
                    'type' => 'input.text',
                    'label' => 'Desktop',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '76rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'tablet-container' => [
                    'type' => 'input.text',
                    'label' => 'Tablet',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '51rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'large-mobile-container' => [
                    'type' => 'input.text',
                    'label' => 'Mobile',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '30rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'mobile-menu-breakpoint' => [
                    'type' => 'input.text',
                    'label' => 'Mobile Menu',
                    'description' => 'Set breakpoint size in rem, em, or px unit values',
                    'default' => '51rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ]
            ]
        ]
    ]
];
