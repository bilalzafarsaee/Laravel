<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/packages')
                    ->type('name', 'Bronze')
                    ->type('price', '500')
                    ->click('@form-submit')
                    ->assertPathIs('/createPackage');
        });
    }

    
}
