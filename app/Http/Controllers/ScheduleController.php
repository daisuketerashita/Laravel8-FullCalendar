<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //カレンダー表示
    public function index()
    {
        return view('calendar');
    }

    //部位追加ページ表示
    public function add($id)
    {
        $day = $id;
        return view('add',['day' => $day]);
    }
}
