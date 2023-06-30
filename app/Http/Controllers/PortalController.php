<?php

namespace App\Http\Controllers;

use App\Models\News;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('news.portal', compact('news'));
    }
}
