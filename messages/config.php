<?php

return [
    'sourcePath' => dirname(__DIR__),
    'messagePath' => __DIR__,
    'languages' => ['en', 'ru'],
    'translator' => 'Module::t',
    'sort' => false,
    'removeUnused' => true,
    'overwrite' => true,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
    ],
    'format' => 'php'
];
