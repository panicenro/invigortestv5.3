<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    use DatabaseTransactions;

    public function testNewProductCreate()
    {
    	$path = '/var/www/invigortest/public/uploads/bodyBG2.jpg';
        $this->visit('products/create')
            ->type('Hello From Test 123456', 'product_name')
            ->type(125, 'product_price')
            ->type('Body from Testing...', 'product_description')
            ->attach($path, 'product_picture')
            ->press('Save')
            ->seePageIs('products');
    }

    public function testProduct()
    {    	
        $this->visit('products')
            ->seePageIs('products');
    }


    public function testUpdateProduct()
    {
    	$path = '/var/www/invigortest/public/uploads/bodyBG2.jpg';
        $this->visit('products/1/edit')
            ->type('Update Hello From Test 123456', 'product_name')
            ->type(100, 'product_price')
            ->type('Body from Testing update...', 'product_description')
            ->attach($path, 'product_picture')
            ->press('Save')
            ->seePageIs('products');
    }
   
    public function testDeleteProduct()
    {
    	$this->visit('products/destroy/1')            
            ->seePageIs('products');
    }

}
