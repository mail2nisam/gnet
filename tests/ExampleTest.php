<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
    public function _testBasicExamples()
    {

        $user = new \App\User();
        $user->name = 'nisam';
        $user->email = 'mail2nisam@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        $this->seeInDatabase('users',['email'=>'mail2nisam@gmail.com']);
        $this->seeInDatabase('users',['name'=>'nisam']);

    }
}