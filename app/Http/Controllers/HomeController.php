<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menu_items = [
                [
                    'icon'      =>  '<i class="fas fa-home"></i>',
                    'title'     =>  'Dashboard',
                    'status'    =>  true,
                    'route'     =>  route('home')
                ],
                [
                    'icon'      =>  '<i class="fa-solid fa-cash-register"></i>',
                    'title'     =>  'Dépenses',
                    'status'    =>  true,
                    'route'     =>  route('expense')
                ],
            ];
        return view('admin.index')->with([
            'menu_items'  =>  $menu_items
        ]);
    }
}
