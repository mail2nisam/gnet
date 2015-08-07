<?php
$I = new FunctionalTester($scenario);
$I->prepareDb();
$I->wantTo('send email using contact form ');
$I->amOnPage('/');
$I->see('Laravel 5');
$I->amOnPage('/nisam');
$I->see('Hello nisam');
$I->amOnPage('/signup');
$I->haveInDatabase('users',['name'=>'nisam','password'=>'nisam','email'=>'mail2nisam@gmail.com','created_at'=>'2015-06-08','updated_at'=>'2015-06-08    ']);
$I->grabFromDatabase('users','email');
$I->canSeeInDatabase('users',array('email'=>'mail2nisam@gmail.com'));