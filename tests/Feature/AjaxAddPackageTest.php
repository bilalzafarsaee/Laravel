<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AjaxAddPackageTest extends TestCase
{

    use RefreshDatabase, WithFaker;


    /* AJAX Form submission */
    public function testAjaxAddPackageTest()
    {
        $data = ['name' => "Bilal", 'price' => $this->faker->numberBetween(1, 50)];

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/createPackageAjax', $data);

        $response
            ->assertStatus(201)
            ->assertJsonFragment([
                'name' => "Bilal"
            ]);
        
    }
}
