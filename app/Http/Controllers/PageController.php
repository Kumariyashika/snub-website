<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function mission(): View
    {
        return view('pages.mission');
    }

    public function story(): View
    {
        return view('pages.story');
    }

    public function gutHealth(): View
    {
        return view('pages.gut-health');
    }

    public function fermentation(): View
    {
        return view('pages.fermentation');
    }

    public function checkout(): View
    {
        return view('checkout');
    }
}
