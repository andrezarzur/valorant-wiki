<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class ValorantService {
    static function getAgentsData()
    {
        $response = Http::get('https://valorant-api.com/v1/agents');

        $agentData = $response->json();

        if ($agentData['status'] !== 200) {
            return [];
        }

        return $agentData['data'];
    }
}