<?php

use PhpCsFixer\Config;

$finder = PhpCsFixer\Finder::create()
    ->exclude('resources')
    ->exclude('vendor')
    ->exclude('storage')
    ->exclude('bootstrap')
    ->in(__DIR__ . '/../');

return (new Config())->setRules(
    [
        '@PHP73Migration' => true,
        '@PHP74Migration' => true,
        '@PHP80Migration' => true,
        '@PHP81Migration' => true,
        '@PSR2' => true,
        '@PSR12' => true,
        '@Symfony' => true,
        '@PhpCsFixer' => true,
        'multiline_whitespace_before_semicolons' => false,
        'return_assignment' => false,
    ]
)->setFinder($finder);
