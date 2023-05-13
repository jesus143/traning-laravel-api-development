<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
//
    // add user
    public function test_unit_user_add() {
        $user = User::factory()->create();

        $this->assertEquals(1, User::count());
    }

    // user addition
    public function test_unit_user_addition() {
        $userInstance = new User();

        $sum = $userInstance->addition(1, 2);

        $this->assertEquals(3, $sum);
    }

    public function test_feature_user_add() {
        $attributes = [
            'name' => 'Mario',
            'age' => 30
        ];

        $response = $this->post('/api/users', $attributes);

        $response->assertOk();

        $data = $response->decodeResponseJson();


        $this->assertEquals(1, $data['user']['id']);

        $this->assertNotEmpty(User::first());

        $this->assertEquals(1, User::count());
    }

    // update
    public function test_feature_user_update_profile()
    {

        $user = User::factory()->create();


        $attributes = [
            'name' => 'Mario Maried',
            'age' => 31
        ];

        $response = $this->patch('/api/users/' . $user->id, $attributes);

        $response->assertOk();

        $data = $response->decodeResponseJson();

        $this->assertEquals($attributes['name'], $data['user']['name']);
        $this->assertEquals($attributes['age'], $data['user']['age']);

    }
    // delete
    public function test_feature_user_delete_profile()
    {
        $user = User::factory()->create();

        $attributes = [

        ];

        $response = $this->delete('/api/users/' . $user->id, $attributes);

        $response->assertOk();

        $this->assertEquals(0, User::count());
    }
    // show

    public function test_feature_user_show_profile()
    {
        $user = User::factory()->create();

        $attributes = [

        ];

        $response = $this->get('/api/users/' . $user->id, $attributes);

        $response->assertOk();

        $data = $response->decodeResponseJson();

        $this->assertNotEmpty($data['user']['name']);
    }

    public function test_feature_user_single_resource()
    {
        $user = User::factory()->create();

        $attributes = [

        ];

        $response = $this->get('/api/users/' . $user->id, $attributes);

        $response->assertOk();

        $data = $response->decodeResponseJson();


        $this->assertNotEmpty(1, $data['user']['status']);
    }
    public function test_feature_user_collection()
    {
        $user = User::factory()->create();
        $user = User::factory()->create();

        $attributes = [

        ];

        $response = $this->get('/api/users', $attributes);

        $response->assertOk();

        $data = $response->decodeResponseJson();

        dd($data);

//        $this->assertNotEmpty(1, $data['user']['status']);
    }
}
