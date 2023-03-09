<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    public function test_customer_index_requires_authentication()
    {
        $response = $this->get('/api/customers');

        $response->assertStatus(401);
    }

    public function test_customer_index_allows_authenticated_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/api/customers');

        $response->assertStatus(200);
    }

    public function test_customer_index_denies_unauthorized_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/customers');

        $response->assertStatus(403);
    }

    public function test_customer_store_requires_authentication()
    {
        $response = $this->post('/api/customers', []);

        $response->assertStatus(401);
    }

    public function test_customer_store_allows_authenticated_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/api/customers', []);

        $response->assertStatus(201);
    }

    public function test_customer_store_denies_unauthorized_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/api/customers', []);

        $response->assertStatus(403);
    }

    // dodaj testy dla innych endpointów

}

