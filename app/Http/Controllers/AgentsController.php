<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ValorantService;

class AgentsController extends Controller
{
    public function index() {
        $agentsData = ValorantService::getAgentsData();

        return view('agents', compact('agentsData'));
    }
}
