<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setup(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }


    /**
     * ログイン
     *
     * @test
     */
    public function can_view()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    /**
     * ログインできることの確認
     *
     * @test
     */
    public function can_login()
    {
        $response = $this->post(route('login'), [
            'name' => $this->user->name,
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        $this->assertAuthenticatedAs($this->user);
    }
}
