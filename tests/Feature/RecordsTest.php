<?php

namespace Tests\Feature;

use Tests\TestCase;

class RecordsTest extends TestCase
{
    /**
     * Testes de integração dos Enpoints de Registros.
     *
     * @return void
     */
    public function testGetAllRecords()
    {
        $responseToken = $this->get('/api/token');
        $content = $responseToken->json();
        $token = $content['token'];

        $response = $this->get('/api/records/all', [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(200);
    }

    public function testGetRecord()
    {
        $responseToken = $this->get('/api/token');
        $content = $responseToken->json();
        $token = $content['token'];

        $data = [
            'id' => 1,
        ];

        $response = $this->withHeaders([
            'Content-Type' => 'multipart/form-data',
            'Authorization' => 'Bearer ' . $token,
        ])->post('/api/records', $data);

        $response->assertStatus(200);
    }
}
