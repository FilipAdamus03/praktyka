<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CustomerAccessTest extends TestCase
{
    use RefreshDatabase;
    
    public function testUnauthorizedUserCannotAccessCustomerRoutes()
    {
        $response = $this->get('/api/customers');
        $response->assertStatus(401);
    }

    public function testAuthorizedUserCanAccessCustomerRoutes()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user, 'api')->get('/api/customers');
        $response->assertStatus(200);
    }

    public function testUserWithoutAccessToCustomerCannotAccessCustomerRoutes()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user, 'api')->get('/api/customers');
        $response->assertStatus(403);
    }
}
