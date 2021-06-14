<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketApiController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'success','data' => 'Faldi']);
    }
}
