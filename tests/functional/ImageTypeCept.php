<?php
$I = new FunctionalTester($scenario);
$I->wantTo('test image type can insert directly to database');
$I->haveInDatabase('image_types',
    [
        'name' => 'nature',
        'is_active' => true,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ]);
$I->seeInDatabase('image_types',['name' => 'nature']);
$I->grabFromDatabase('image_types', 'name', ['name' => 'nature']);

$I->wantToTest('Add Image Type from Form');
$I->amOnPage('image_type/create');
$I->submitForm();