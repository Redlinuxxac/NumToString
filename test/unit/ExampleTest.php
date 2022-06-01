<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/cal/{5}')
        ->assertStatus(200)
        ->assertSee('Cinco');
    }
}
