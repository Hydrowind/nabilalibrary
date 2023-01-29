<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(!isset($request->month) && !isset($request->year)){
            $data = Transaction::all();
        }

        if(!isset($request->month) && isset($request->year)){
            $data = Transaction::whereYear('date', $request->year)->get();
        }

        if(isset($request->month) && !isset($request->year)){
            $data = Transaction::whereMonth('date', $request->month)->get();
        }

        if(isset($request->month) && isset($request->year)){
            $data = Transaction::whereMonth('date', $request->month)->whereYear('date', $request->year)->get();
        }

        switch($request->action){
            case "Submit": return view('report', ['data' => $data]);
            case "Export PDF": return PDF::loadView('export', ['data' => $data])->download();
        }
    }
}
