<?php

declare(strict_types=1);

namespace Webtoolshealth\CodingStandard;

use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $container->import(SetList::CLEAN_CODE);
    $container->import(SetList::SYMFONY);
    $container->import(SetList::PSR_12);
    $container->import(SetList::PHPUNIT);

    $services->set(PhpUnitMethodCasingFixer::class)->call('configure', [[
        'case' => 'snake_case',
    ]]);

    $services->set(PhpdocAlignFixer::class)->call('configure', [[
        'align' => 'left',
    ]]);

    $services->set(DeclareStrictTypesFixer::class);
};
