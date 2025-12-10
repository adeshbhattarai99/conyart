<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    // app/Http/Controllers/PerformanceController.php
    public function show(Performance $performance)
    {
        // Eager load or just pass
        return view('performances.show', compact('performance'));
    }
}
