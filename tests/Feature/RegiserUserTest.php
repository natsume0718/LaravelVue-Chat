<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegiserUserTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    protected $user;

    protected function setup(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }


    /**
     * 登録画面表示
     *
     * @test
     */
    public function can_view()
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    /**
     * 登録できることの確認
     *
     * @test
     */
    public function can_register()
    {
        $this->withExceptionHandling();
        $this->assertEquals(count(User::all()), 1);
        $response = $this->post(route('register'), $this->data())
            ->assertSessionHasNoErrors()
            ->assertStatus(302);
        $this->assertEquals(count(User::all()), 2);
    }

    private function data()
    {
        return [
            'name' => $this->faker()->name,
            'password' => 'password',
            'password_confirmation' => 'password'
        ];
    }
}
