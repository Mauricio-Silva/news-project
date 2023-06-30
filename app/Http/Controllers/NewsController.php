<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = new News();
        return view('news.create')->with(['news' => $news]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $news->fill($request->all());
        $news->save();
        return redirect()->route('news.index')->with('success', 'CREATE');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $news->fill($request->all());
        $news->save();
        return redirect()->route('news.index')->with('success', 'UPDATE');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')->with('success', 'DELETE');
    }
}
