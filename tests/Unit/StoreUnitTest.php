<?php

namespace Tests\Unit;

use App\Stores;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * Test to verify new entries in the DB
     *
     * @return void
     */
    public function testSqlAddStoreTest()
    {
        // gets current count of rows in DB table
        $currentTable = Stores::count();

        // updates DB table with new row
        factory(Stores::class)->create();

        // gets update count of rows in DB table
        $updatedTable = Stores::count();

        $this->assertGreaterThan($currentTable , $updatedTable);

    }
}
