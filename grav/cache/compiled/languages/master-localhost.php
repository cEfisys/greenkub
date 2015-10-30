<?php
return [
    '@class' => 'Grav\\Common\\Config\\Config',
    'checksum' => '73fd62b13f0a24c455e24a78cbbf3442:7cc9ca417493676a8e5004bb5e7f0e6b',
    'files' => [
        'system/languages' => [
            'en' => [
                'file' => 'system/languages/en.yaml',
                'modified' => 1444157728
            ]
        ]
    ],
    'data' => [
        'en' => [
            'FORM_PLUGIN' => [
                'NOT_VALIDATED' => 'Form not validated. One or more required fields are missing.'
            ],
            'LOGIN_PLUGIN' => [
                'ACCESS_DENIED' => 'Access denied...',
                'LOGIN_FAILED' => 'Login failed...',
                'LOGIN_SUCCESSFUL' => 'You have been successfully logged in.',
                'BTN_LOGIN' => 'Login',
                'BTN_LOGOUT' => 'Logout',
                'BTN_FORGOT' => 'Forgot'
            ],
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
            ],
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Error: Invalid Frontmatter

Path: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'people',
                'man' => 'men',
                'child' => 'children',
                'sex' => 'sexes',
                'move' => 'moves'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ]
        ]
    ]
];
