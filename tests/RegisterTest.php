<?php


class RegisterTest extends TestCase
{
    public function testGetRegisterIndexReturnOkResponse(){
        $this->call('GET','/auth/register');
        $this->assertResponseOk();
    }
    public function testNewUserRegistration()
    {
        $this->visit('/auth/register')
            ->type('nisam', 'name')
            ->type('mail2nisam@gmail.com', 'email')
            ->type('mypassword', 'password')
            ->press('Crate Account')
            ->seePageIs('/auth/register')
            ->assertResponseOk();
    }
}