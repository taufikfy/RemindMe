<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SidebarController extends Controller
{
    public function index($menu = 'home')
    {
        $data['menu'] = $menu;
        return view('sidebar', $data);
    }
}
