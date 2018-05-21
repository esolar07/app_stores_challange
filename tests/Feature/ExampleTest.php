<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * Test to verify homepage returns 200
     *
     * @return void
     */
    public function testHomePageSuccessTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test to verify home page title text is displayed
     *
     * @return void
     */
    public function testHomePageTitleTextTest()
    {
        $response = $this->get('/');

        $response->assertSee('Car Buckets App Store Challenge');
    }

    /**
     * Test to verify stores list returns 200
     *
     * @return void
     */
    public function testStoresPageSuccessTest()
    {
        $response = $this->get('/stores');

        $response->assertStatus(200);
    }

     /**
     * Test to verify stores page title text is displayed
     *
     * @return void
     */
    public function testStoresPageTitleTextTest()
    {
        $response = $this->get('/stores');

        $response->assertSee('Stores');
    }

     /**
     * Test to verify add store page returns 200
     *
     * @return void
     */
    public function testAddStorePageSuccessTest()
    {
        $response = $this->get('/add_store');

        $response->assertStatus(200);
    }

    /**
     * Test to verify add store page title text is displayed
     *
     * @return void
     */
    public function testAddStorePageTitleTextTest()
    {
        $response = $this->get('/add_store');

        $response->assertSee('Add Store');
    }
}
