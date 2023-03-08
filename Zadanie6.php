public function testHomePage()
{
    $response = $this->get('/');

    $response->assertStatus(200);
}