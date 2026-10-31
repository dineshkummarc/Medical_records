<?php

namespace ContainerXmgE3Ps;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'expression-language'.\DIRECTORY_SEPARATOR.'ExpressionLanguage.php';

class ExpressionLanguageGhost53cc472 extends \Symfony\Component\ExpressionLanguage\ExpressionLanguage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'functions' => [parent::class, 'functions', null, 8],
        "\0".parent::class."\0".'cache' => [parent::class, 'cache', null, 16],
        "\0".parent::class."\0".'compiler' => [parent::class, 'compiler', null, 16],
        "\0".parent::class."\0".'lexer' => [parent::class, 'lexer', null, 16],
        "\0".parent::class."\0".'parser' => [parent::class, 'parser', null, 16],
        'cache' => [parent::class, 'cache', null, 16],
        'compiler' => [parent::class, 'compiler', null, 16],
        'functions' => [parent::class, 'functions', null, 8],
        'lexer' => [parent::class, 'lexer', null, 16],
        'parser' => [parent::class, 'parser', null, 16],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ExpressionLanguageGhost53cc472', false)) {
    \class_alias(__NAMESPACE__.'\\ExpressionLanguageGhost53cc472', 'ExpressionLanguageGhost53cc472', false);
}
