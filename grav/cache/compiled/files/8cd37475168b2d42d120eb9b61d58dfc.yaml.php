<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/simple_form/languages.yaml',
    'modified' => 1444759895,
    'data' => [
        'en' => [
            'PLUGIN_SIMPLE_FORM' => [
                'TEMPLATES' => [
                    'DEFAULT' => 'Default template from this plugin'
                ],
                'ADMIN' => [
                    'BLUEPRINTS' => [
                        'GLOBAL' => [
                            'PLUGIN_STATUS' => 'Plugin status',
                            'ENABLED' => 'Enabled',
                            'DISABLED' => 'Disabled'
                        ],
                        'TAB' => [
                            'TITLE' => 'Simple Form',
                            'FIELDS' => [
                                'TOKEN' => [
                                    'LABEL' => 'SimpleForm.com Token',
                                    'PLACEHOLDER' => 'Insert your API key here.',
                                    'HELP' => 'API key from https://simpleform.com site.'
                                ],
                                'TEMPLATE_FILE' => [
                                    'LABEL' => 'Template Filename',
                                    'PLACEHOLDER' => 'Select one template filename'
                                ],
                                'REDIRECT_TO' => [
                                    'LABEL' => 'Redirect to page',
                                    'PLACEHOLDER' => 'Select one page for redirect'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
