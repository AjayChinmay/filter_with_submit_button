<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class databaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_database()
    {
        $this->assertDatabaseHas('server_info',[
            'model' => 'Dell R210Intel Xeon X3440'
        ]);
    }

    public function test_database_missing()
    {
    $this->assertDatabaseMissing('server_info', [
        'model' => 'test',
    ]);
    }
}
