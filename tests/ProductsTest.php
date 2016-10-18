<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Product;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use DatabaseTransactions;

    /** @test */
    public function basic_example()
    {
        $this->visit('/products')->see('Products')->click('Add New Product')->seePageIs('/products/create');
    }

    /** @test */
    public function product_list()
    {
    	$path = '/var/www/invigortest/public/uploads/bodyBG2.jpg';
    	
    	//$this->visit('/products')->see('Products');
    	
    	factory(Product::class, 2)->create();

    	factory(Product::class)->create([
    	'product_picture' => $path,
    	'product_name' => 'Test Product Name',
    	'product_price' => 120,
    	'product_description' => 'Test Product Desc',
    	]);

    	$listing = factory(Product::class)->create([
    	'product_picture' => $path,
    	'product_name' => 'Test Product Name2',
    	'product_price' => 125,
    	'product_description' => 'Test Product Desc2',
    	]);

    	$products = Product::list();

    	$this->assertEquals($listing->id, $products->first()->id);

    }

    /** @test */
    public function create_new_product()
    {
    	/*$path = '/var/www/invigortest/public/uploads/bodyBG2.jpg';
    	$this->visit('/products/create')
    		->see('Add New Product')
    		->type('Test Product Name', 'product_name')
    		->type(120.00, 'product_price')
    		->type('This is a new body from testing', 'product_description')
    		->attach($path, 'product_picture')
    		->press('Save')
    		->seePageIs('/products');*/

    }

    /** @test */
    public function update_product()
    {

    }

    /** @test */
    public function delete_product()
    {

    }
}
