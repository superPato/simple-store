<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends FeatureTestCase
{
    /** @test */
    function test_basic_example()
    {
        $name = 'Cesar Acual';

        $user = factory(\App\User::class)->create([
            'name' => $name,
            'email' => 'admin@styde.net'
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see($name)
            ->see('admin@styde.net');
    }
}
