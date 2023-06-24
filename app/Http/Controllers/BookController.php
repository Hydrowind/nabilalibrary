<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.book.index', ['data' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Book::create([
            'id' => $request->id,
            'title' => $request->title,
            'year' => $request->year,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'page' => $request->page,
            'category' => strtolower($request->category),
            'quantity' => $request->quantity,
            'coverUrl' => $request->cover_url,
            'description' => $request->description,
            'synopsis' => $request->synopsis,
        ]);

        if($data->save()){
            return redirect()->route('books.index');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Book::find($id);
        return view('pages.book.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Book::find($id);
        
        $data->title = $request->title;
        $data->year = $request->year;
        $data->author = $request->author;
        $data->publisher = $request->publisher;
        $data->page = $request->page;
        $data->category = strtolower($request->category);
        $data->quantity = $request->quantity;
        $data->coverUrl = $request->cover_url;
        $data->description = $request->description;
        $data->synopsis = $request->synopsis;

        if($data->save()){
            return redirect()->route('books.index');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
}
