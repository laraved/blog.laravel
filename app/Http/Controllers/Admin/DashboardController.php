<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display main page of dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $categories = Category::lastCategories(5);
        $articles = Article::lastArticles(5);
        $countCategories = Category::count();
        $countArticles = Article::count();

        return view('admin.dashboard',
            compact('categories', 'articles', 'countCategories', 'countArticles'));
    }
}
