<?php

namespace App\Http\Controllers;
use App\Models\MenuItem;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = MenuItem::select('category')->distinct()->pluck('category');
        $menuItemsByCategory = [];

        foreach ($categories as $category) {
            $menuItemsByCategory[$category] = MenuItem::where('category', $category)->get();
        }

        return view('menu.index', ['menuItemsByCategory' => $menuItemsByCategory]);
    }
}
