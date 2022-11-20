<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function detail($id)
    {
        $day = $id;
        return view('detail',['day' => $day]);
    }
}
