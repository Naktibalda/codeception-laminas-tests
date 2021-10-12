<?php

/**
 * @group services
 */

$I = new FunctionalTester($scenario);
$I->wantTo('see that added factory persists between requests and returns predicted service');

$foo = (object)['bar' => 1];
$I->addFactoryToContainer('foo', function () use ($foo) {
    return $foo;
});
$I->amOnPage('/form');

$serviceManager = $I->grabServiceFromContainer('ServiceManager');
$I->assertSame($foo, $serviceManager->build('foo', ['type' => 1]));
$I->assertSame($foo, $serviceManager->build('foo', ['type' => 2]));
