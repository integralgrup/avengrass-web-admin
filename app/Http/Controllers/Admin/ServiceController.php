<?php
//Create a new file at app/Http/Controllers/Admin/MenuController.php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Service;
class ServiceController extends Controller
{
    
    /**
     * Display a listing of the menu items.
     *
     * @return \Illuminate\View\View
     */
    protected $languages;

    public function __construct()
    {
        $this->languages = Language::all();
        view()->share('languages', $this->languages);
    }
    public function index()
    {
        // Here you would typically fetch menu items from the database
        // For now, we will return a simple view
        $services =  Service::where('lang', 'en')->get(); // Fetch all menu items
        return view('admin.service.index', compact('services'));
    }

    // You can add more methods here for creating, editing, and deleting menu items
    /**
     * Show the form for creating a new menu item.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $languages =  Language::all(); // Fetch all menu items
        return view('admin.service.create', compact('languages'));
    }

    /**
     * Store a newly created menu item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $languages =  Language::all();
        //dd($request->all());
        if ($request->has('service_id')) {
            $service_id = $request->service_id; // Use the provided service_id
        }else{
            $service_id = Service::max('service_id') + 1; // Increment the maximum service_id by 1
            if (!$service_id) {
                $service_id = 1; // If no service items exist, start with 1
            }
        }

        try {
            //Create or update existing language items
            // Check if the request has an id field to determine if it's an update or create

            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:100',
                        'seo_url_' . $language->lang_code => 'required|max:255',
                        'description_' . $language->lang_code => 'required',
                        'seo_title_' . $language->lang_code => 'nullable|max:255',
                        'seo_description_' . $language->lang_code => 'nullable|max:255',
                        'seo_keywords_' . $language->lang_code => 'nullable|max:255',
                        'sort_' . $language->lang_code => 'required|integer',
                    ]);

                }

                // save image if it exists
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                Service::updateOrCreate(
                    ['service_id' => $service_id, 'lang' => $language->lang_code],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'seo_url' => $request->input('seo_url_' . $language->lang_code) ?? $request->input('seo_url_en'),
                        'seo_title' => $request->input('seo_title_' . $language->lang_code) ?? $request->input('seo_title_en'),
                        'seo_description' => $request->input('seo_description_' . $language->lang_code) ?? $request->input('seo_description_en'),
                        'seo_keywords' => $request->input('seo_keywords_' . $language->lang_code) ?? $request->input('seo_keywords_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? $request->input('sort_en')
                    ]
                );
            }

            // Redirect back with success message
            return redirect()->back()
                         ->with('success', 'Kod güncelleme başarılı!');
            //return redirect()->route('admin.menu')->with('success', 'Menu item created successfully.');
        } catch (\Exception $e) {
            throw($e);
            return redirect()->back()->withErrors(['error' => 'Failed to edit item: ' . $e->getMessage()]);
        }
       
    }

    /**
     * Show the form for editing the specified language item.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $languages = Language::all(); // Fetch all language items
        $services = Service::all(); // Fetch the language item by ID
        return view('admin.service.edit', compact('services', 'languages'));    
    }





}