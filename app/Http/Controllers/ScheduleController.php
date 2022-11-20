<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //部位追加登録処理
    public function store(Request $request,$id)
    {
        $day = $id;
        $schedule = new Schedule();

        //値を代入
        $schedule->user_id = 1;
        $schedule->sch_date = $request->sch_date;
        $schedule->sch_part = $request->sch_part;

        // インスタンスの状態をデータベースに書き込む
        $schedule->save();

        return redirect()->route('index');
    }
}
