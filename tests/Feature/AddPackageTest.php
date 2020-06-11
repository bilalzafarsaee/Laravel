<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddPackageTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /* Basic Form submission */
    public function testAddPackageTest()
    {
        $response = $this->postJson(route('package.create'), [
                'name' => $this->faker->word(),
                'price' => $this->faker->numberBetween(1, 50)
            ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => "OK",
            ]);
    }

    
}
