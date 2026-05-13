<?php

namespace App\Http\Controllers;

use App\Models\Menu; // or any model you want indexed
use App\Models\Blog;
use App\Models\Project;
use App\Models\Product;
use App\Models\Service;
use App\Models\UsingArea;
use App\Models\Club;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->where('lang', app()->getLocale())->get();

        $blogs = Blog::latest()->where('lang', app()->getLocale())->get();

        $projects = Project::latest()->where('lang', app()->getLocale())->get();

        $services = Service::latest()->where('lang', app()->getLocale())->get();

        $using_areas = UsingArea::latest()->where('lang', app()->getLocale())->get();

        $products = Product::latest()->where('lang', app()->getLocale())->with('category')->get();

        //$clubs = Club::latest()->where('lang', app()->getLocale())->get();


        //dd($menus, $blogs, $projects, $products);

        return response()
            ->view('sitemap.index', compact('menus', 'blogs', 'projects', 'products', 'services', 'using_areas'))
            ->header('Content-Type', 'application/xml');
    }
}
