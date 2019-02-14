<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;


class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // create User instance
        $user = factory(User::class)->create();

        // make a test http request
        $response = $this->actingAs($user, 'api')->get('api/user');

        // check if user instance is same with http json response
        $response->assertJson(
            [
                'id' => $user->id
            ]
        );
    }
}
