<?php
$I = new FunctionalTester($scenario);
$I->wantTo('see the registration page');
$I->amOnPage('/auth/register');
$I->see('Register', '.panel-heading');
$I->see('Laravel 5', 'a.navbar-brand');