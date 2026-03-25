<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Language;
use App\Models\Blog;
use App\Models\BlogSlider;
use App\Models\About;
use App\Models\Menu;
use App\Models\Office;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Club;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductImage;
use App\Models\ProductFaq;
use App\Models\ProductType;
use App\Models\ProductFeature;
use App\Models\ProductFeature2;
use App\Models\Country;
use App\Models\Continent;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ProjectGallery;
use App\Models\SeoSettings;
use App\Models\StaticImage;
use App\Models\StaticText;
use App\Models\UsingArea;
use App\Models\UsingAreasGallery;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

     // construct function
    public function __construct()
    {
        $static_images = StaticImage::where('lang', app()->getLocale())->get();

        //dd($static_images);

        $imagesByTitle = [];
        foreach($static_images as $image) {
            $imagesByTitle[$image->title] = $image;
        }


        view()->share('static_images', $imagesByTitle);

        //dd($imagesByTitle);
    }

    public function image_copy() {

    $lang = 'ru';

        /*$slider_images = Slider::where('lang', $lang)->pluck('image')->toArray();
        //dd($slider_images);
        foreach($slider_images as $image) {
            if(file_exists('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/slayt/' . $image)) {
                copy('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/slayt/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/'.$lang.'/uploads/images/' . $image);
                echo "File {$image} copied successfully.<br>";
            }
        }

        $menu_category_images = Menu::where('lang', $lang)->pluck('image')->toArray();
        //dd($menu_images);
        foreach($menu_category_images as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/kategori/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/kategori/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/'.$lang.'/uploads/product/' . $image); //'/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
                if(file_exists('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/urunler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/urunler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/'.$lang.'/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$menu_category_icons_1 = Menu::where('lang', $lang)->pluck('icon1')->toArray();
        $menu_category_icons_2 = Menu::where('lang', $lang)->pluck('icon2')->toArray();
        $menu_category_icons = array_merge($menu_category_icons_1, $menu_category_icons_2);
        //dd($menu_category_icons);
        foreach($menu_category_icons as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/kategori/icon/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/kategori/icon/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/'.$lang.'/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }

        $product_images = ProductImage::where('lang', $lang )->pluck('image')->toArray();
        foreach($product_images as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/urunresim/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-'.$lang.'-files/resimler/urunresim/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/'.$lang.'/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$product_files = Product::where('lang', $lang)->pluck('video_file')->toArray();
        $product_files2 = Product::where('lang', $lang)->pluck('pdf_file')->toArray();
        $product_files = array_merge($product_files, $product_files2);
        //dd($product_files);
        foreach($product_files as $file) {
            if($file != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/video/' . $file)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/video/' . $file, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/product/' . $file);
                    echo "File {$file} copied successfully.<br>";
                }
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/dosyalar/' . $file)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/dosyalar/' . $file, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/product/' . $file);
                    echo "File {$file} copied successfully.<br>";
                }
            }
        }

        $product_icons = ProductFeature::where('lang', $lang)->pluck('image')->toArray();
        //dd($product_icons);
        foreach($product_icons as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/ozellik/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/ozellik/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        
        /*$product_features_image = Product::where('lang', $lang)->pluck('features_image')->toArray();

        //dd($product_features);
        
        foreach($product_features_image as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/urunler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/urunler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }

        $product_features = ProductFeature2::where('lang', $lang)->pluck('image')->toArray();
        
        foreach($product_features as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/features/alt/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/features/alt/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/product/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$using_areas = UsingArea::where('lang', $lang)->pluck('image')->toArray();
        
        foreach($using_areas as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/kullanimalanlari/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/kullanimalanlari/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/using_area/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }

        $using_area_gallery = UsingAreasGallery::where('lang', $lang)->pluck('image')->toArray();
        
        foreach($using_area_gallery as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/kullanimalanlariresim/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/kullanimalanlariresim/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/using_area/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$service_images_1 = Service::where('lang', $lang)->pluck('image')->toArray();
        
        foreach($service_images_1 as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/service/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$service_images = ServiceImage::where('lang', $lang)->pluck('image')->toArray();
        
        foreach($service_images as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikresim/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikresim/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/service/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/

        /*$service_images_2 = Service::where('lang', $lang)->pluck('image_2')->toArray();
        
        foreach($service_images_2 as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/service/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/



        /*
        $project_images = Project::where('lang', $lang)->pluck('image')->toArray();
        $project_images2 = ProjectGallery::where('lang', 'tr')->pluck('image')->toArray();

        $merged_images = array_merge($project_images, $project_images2);

        //dd($merged_images);
        
        foreach($merged_images as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/projeler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/projeler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/project/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/projeresim/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/projeresim/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/project/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/


        /*$blog_images = Blog::where('lang', $lang)->pluck('image')->toArray();
        $blog_slider = BlogSlider::where('lang', $lang)->pluck('image')->toArray();
        $blog_images = array_merge($blog_images, $blog_slider);

        //dd($blog_images);

        foreach($blog_images as $image) {
            if($image != null) {
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikler/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/blog/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
                if(file_exists('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikresim/' . $image)) {
                    copy('/Applications/MAMP/htdocs/avengrass-' . $lang . '-files/resimler/icerikresim/' . $image, '/Applications/MAMP/htdocs/avengrass-web-admin/public/uploads/' . $lang . '/uploads/blog/' . $image);
                    echo "File {$image} copied successfully.<br>";
                }
            }
        }*/


        //dd($_SERVER['DOCUMENT_ROOT']);

       
    }

    public function index()
    {

        $sliders = Slider::where('lang', app()->getLocale())->get();
        $languages = Language::all();
        $about = About::where('lang', app()->getLocale())->first();

        $using_areas = UsingArea::where('lang', app()->getLocale())->get();
       
        
        $categories = Menu::where(['parent_menu_id' => 0,'page_type' => 'product_category', 'lang' => app()->getLocale()])
        ->orderBy('sort', 'asc')
        ->with('children')
        ->get();

        $projects = Project::where('lang', app()->getLocale())->with(['gallery', 'country', 'country.continent'])->orderBy('id', 'desc')->get();

        $blogs = Blog::where('lang', app()->getLocale())->orderBy('created_at', 'desc')->limit(5)->get();
        $services = Service::where('lang', app()->getLocale())->orderBy('created_at', 'desc')->get();

        $seo = SeoSettings::where('page', 'home')->where('lang', app()->getLocale())->first();

        return view('home', compact('sliders', 'languages', 'about',  'using_areas', 'categories', 'projects', 'blogs', 'services', 'seo'));
    }

    public function route($slug, $slug2 = null)
    {
        

        if($slug == 'copy-db') {

            $lang_array = ['es', 'tr', 'fr', 'ru', 'ae']; // Add more languages as needed

            if(in_array($slug2, $lang_array)) {
                $lang = $slug2;
            } else {
                return "Invalid or missing language code. Please provide a valid language code (e.g., /copy-db/es).";
            }

            //return $this->copyDB($lang);
        }

        $menu = Menu::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->firstOrFail();
        //dd($menu);
        
        // If the menu item has a page_type of 'about', fetch the about data
        if($menu->page_type == 'about') {
            $about = About::where('lang', app()->getLocale())->first();
            //$about_slider = DB::table('about_slider')->where('lang', app()->getLocale())->get()->toArray();
            //$how_we_do = DB::table('about_how_we_do')->where('lang', app()->getLocale())->get()->toArray();
            //$what_we_do =  DB::table('about_what_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get()->toArray();
            $brands = Brand::where('lang', app()->getLocale())->get();
            $seo = SeoSettings::where('page', 'about')->where('lang', app()->getLocale())->first();
            $blogs = Blog::where('lang', app()->getLocale())->limit(5)->get();
            //debug($certificates);
            
            //dd($politics);
            return view('about', compact('about','blogs',  'certificates',  'brands', 'seo'));
        }

        if($menu->page_type == 'product') {
            $product = Product::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->with(['category', 'faqs', 'types','gallery', 'images','features','features2'])->firstOrFail();
            if($product) {
                $seo = $product;
                //dd($seo);
                return view('product', compact('product', 'seo'));
            } else {

            
                $category = ProductCategory::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->first();
                $categories = ProductCategory::where('lang', app()->getLocale())->with('product')->get();
                //dd($category);
                $products = Product::where(['lang' => app()->getLocale(), 'category_id' => $category->category_id])->with(['images', 'category'])->get();
                //dd($products);
                $seo = SeoSettings::where('page', 'product_category')->where('lang', app()->getLocale())->first();
                return view('product_category', compact('category', 'categories', 'products', 'menu', 'seo'));

            }
        }

        if($menu->page_type == 'services') {
            if($slug2 == null) {
                $services = Service::where(['lang' => app()->getLocale()])->get();
                $seo = SeoSettings::where('page', 'services')->where('lang', app()->getLocale())->first();
                return view('services', compact('services', 'seo'));
            } else {
                $service = Service::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->firstOrFail();
                $lastTwoService = Service::where(['lang' => app()->getLocale()])
                    ->where('service_id', '!=', $service->service_id)
                    ->orderBy('created_at', 'desc')
                    ->limit(2)
                    ->get();
                $seo = $service;
                return view('service-detail', compact('service', 'seo', 'lastTwoService'));
            }
        }



        if($menu->page_type == 'using_areas') {
            if($slug2 != null) {
                $using_area = UsingArea::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with([])->firstOrFail();
                $seo = $using_area;
                
                return view('using_area', compact('using_area', 'seo'));
            }else {
                $using_areas = UsingArea::where(['lang' => app()->getLocale()])->get();
                $seo = SeoSettings::where('page', 'using_areas')->where('lang', app()->getLocale())->first();
                return view('using-areas', compact('using_areas', 'seo'));
            }
        }

        /*if($menu->page_type == 'product') {
            
                $product = Product::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->with(['category', 'gallery', 'faqs', 'types', 'images', 'features', 'features2'])->firstOrFail();
                
                $seo = $product;
                //dd($product);
                return view('product', compact('product', 'seo'));
            
        }*/

        

        if($menu->page_type == 'using_areas') {
            if($slug2 != null) {
                $using_area = UsingArea::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with([])->firstOrFail();
                $seo = $using_area;
                
                return view('using_area', compact('using_area', 'seo'));
            }

        }

        if($menu->page_type == 'project') {

            if($slug2 == null) {
                
                //$projects = Project::where(['lang' => app()->getLocale()])->with(['gallery'])->get();
                $projects = Project::where(['lang' => app()->getLocale()])->with(['gallery', 'country', 'country.continent'])->orderBy('id', 'desc')->get();
                $seo = SeoSettings::where('page', 'projects')->where('lang', app()->getLocale())->first();
                //dd($projects);
                return view('projects', compact('projects', 'seo'));

            }else{
                //$slug = $slug2;
                // Get project with related gallery images, and find project country and continent from countries table
                
                $project = Project::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with(['gallery'])->firstOrFail();
                $projects= Project::where(['lang' => app()->getLocale()])
                    ->where('project_id', '!=', $project->project_id)
                    ->with(['gallery'])
                    ->orderBy('created_at', 'desc')
                    ->limit(2)
                    ->get();
                $seo = $project;

                //$used_product_ids = array_map('trim', explode(',', $project->used_products));
                //dd($used_product_ids);
                /*$products = Product::where(['lang' => app()->getLocale()])
                    ->whereIn('product_id', $used_product_ids)
                    ->with(['category' => function ($q) {
                        $q->where('lang', app()->getLocale());
                    }])
                    ->limit(5)->get();*/
                //dd($products);
                return view('project', compact('project', 'projects', 'seo'));
            }

        }

        if($menu->page_type == 'blog') {
            if($slug2!= null) {
                // Get blog posts limit 5 as array
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(10)->orderBy('created_at', 'desc')->get();
                //dd($blogs);
                $blog = Blog::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                $seo = $blog;
                $blogSlider = BlogSlider::where(['lang' => app()->getLocale(), 'blog_id' => $blog->blog_id])->get();
                //dd($blogSlider);
                return view('blog-detail', compact('blog', 'blogs', 'blogSlider', 'seo'));
            }else{
                $seo = SeoSettings::where('page', 'news')->where('lang', app()->getLocale())->first();
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(12)->orderBy('created_at', 'desc')->get();
                //dd($blogs);
                return view('blog', compact('blogs', 'seo'));
            }
        }


        if($menu->page_type == 'contact') {
            $offices = Office::where(['lang' => app()->getLocale()])->get();
            $seo = SeoSettings::where('page', 'contact')->where('lang', app()->getLocale())->first();
            return view('contact', compact('offices', 'seo'));
        }

        if($menu->page_type == 'page') {
            $page = Page::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->first();
            $seo = $page;
            //dd($page);
            return view('page', compact('page', 'seo'));
        }

        //return view('page', compact('page'));
    }

    public function copyDB($lang)
    {
        die('Function disabled for security reasons.');
        $sourceLang = 'en';
        $targetLang = $lang;

        $tables = [
            'about',
            'about_certificates',
            'about_home',
            'about_how_we_do',
            'about_slider',
            'about_what_we_do',
            'blog',
            'blog_slider',
            'brand',
            'club',
            'club_faq',
            'club_features',
            'club_slider_1',
            'club_slider_2',
            'club_slider_3',
            'footer_info',
            'main_slider',
            'menu',
            'office',
            'page',
            'product',
            'product_category',
            'product_faq',
            'product_feature',
            'product_gallery',
            'product_image',
            'product_type',
            'project',
            'project_gallery',
            'seo_settings',
            'static_text',
            'static_image',
        ];

        //Fetch all records from source language
        //Change the lang column to target language
        //Insert into the same table
        foreach ($tables as $table) {
            $records = DB::table($table)->where('lang', $sourceLang)->get();
            foreach ($records as $record) {
                $newRecord = (array) $record; // Convert stdClass to array
                $newRecord['lang'] = $targetLang;
                // Remove primary key to avoid duplicate key error
                unset($newRecord[array_key_first($newRecord)]);
                DB::table($table)->insert($newRecord);
            }
        }

        return "Database copy from {$sourceLang} to {$targetLang} completed.";
    }
}