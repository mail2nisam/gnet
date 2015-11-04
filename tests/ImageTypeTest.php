<?php

Class ImageTypeTest extends TestCase
{
    public function testImageTypeIndexIsGetting()
    {
        $this->call('GET', 'image_type');
        $this->assertResponseOk();
    }

    public function testImageTypeCreate()
    {
        $this->visit('image_type/create')
            ->type('natuare', 'name')
            ->check('is_active')
            ->press('Add New Type')
            ->seePageIs('image_types');
        $this->seeInDatabase();
    }
}