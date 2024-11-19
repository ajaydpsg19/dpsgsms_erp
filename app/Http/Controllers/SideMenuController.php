<?php

namespace App\Http\Controllers;

use App\Models\SideMenu;
use Illuminate\Http\Request;

class SideMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getMenu()
    {
        $menuItems= SideMenu::all();
        return $menuItems;
    }

   
}
