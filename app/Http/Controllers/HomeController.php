<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Book;
use \App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function search(Request $request){
        $data = Book::where('title', 'like', '%'.$request->keyword.'%')
                        ->orWhere('author', 'like', '%'.$request->keyword.'%')->get();
        return view('search', ['data' => $data]);
    }

    /**
     * Insert 'peminjaman' Transaction with current date
     *
     * @param  int  $user_id
     * @param  int  $book_id
     * @return \Illuminate\Http\Response
     */
    public function borrow(Request $request)
    {
        if(!Auth::user()) return redirect('/login');

        $data = Transaction::create([
            'type' => 'peminjaman',
            'date' => \Carbon\Carbon::now()->format('Y-m-d'),
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
        ]);
        if($data->save()){
            return back();
        } else {
            return back();
        }
    }
}
