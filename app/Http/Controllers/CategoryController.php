<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        //
        $categories = Category::paginate(15);

        return view('categories.list-category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('categories.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories',
            'description' => 'required|max:255',
            'img_path' => 'required|image|max:1024', // Maximum file size of 1MB
        ]);
    
        if ($request->hasFile('img_path')) {
            $imageName = Str::random(20) . '.' . $request->file('img_path')->getClientOriginalExtension();
            $imagePath = $request->file('img_path')->storeAs('public/images', $imageName);
    
            // On production, the storage link should be created
            // You can create it manually by running: php artisan storage:link
    
            $category = new Category;
            $category->name = $request->input('name');
            $category->user_id = Auth::user()->id;
            $category->cat_desc = $request->input('description');
            $category->img_path = Storage::url($imagePath); // Using Storage facade to generate correct URL
            $category->save();
    
            Session::flash('message', 'Category created successfully');
        }
    
        return redirect()->back();
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $name = Str::title($category->name);
        $desc = Str::title($category->cat_desc);
        $src = $category->img_path;
        $user = $category->user->username;
        $date = $category->updated_at;
        $clubquiz = Quiz::withCount('questions')
        ->has('questions')
        ->where('category_id', $category->id)
        ->orderBy('id')
        ->get();
        return view('explore/category-post', compact('clubquiz', 'name','desc','src','user','date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('categories.edit-category', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, Category $category)
    {
        // Validate the request
        $request->validate([
            'name' => 'unique:categories|max:255', // Allow unique name with maximum 255 characters
            'description' => 'max:255', // Allow maximum 255 characters for content
            'img_path' => 'image|max:1024', // Maximum file size of 1MB
        ]);
    
        // Get the inputs from the request
        $name = $request->input('name');
        $content = $request->input('description');
    
        // Update the category model based on the provided inputs
        if ($name !== null) {
            $category->name = $name;
        }
        if ($content !== null) {
            $category->cat_desc = $content;
        }
    
        // Handle image upload
        if ($request->hasFile('img_path')) {
            // Delete old image
                 // Delete old image
        $oldImagePath = public_path($category->img_path);
        if (File::exists($oldImagePath)) {
            File::delete($oldImagePath);
        }
    
            // Store new image
            $imageName = Str::random(20) . '.' . $request->file('img_path')->getClientOriginalExtension();
            $imagePath =  $request->file('img_path')->storeAs('public/images', $imageName);
            $category->img_path = Storage::url($imagePath);
        }
    
        // Save the updated category
        $category->save();
    
        // Flash a success message
        Session::flash('message', 'Category updated successfully');
    
        // Redirect back to the previous page
        return redirect()->back();
    }
    
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        Session::flash('message', 'Category deleted Successfully');
        return redirect()->back();

    }
}
