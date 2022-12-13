<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $data = Categories::with('subcategories')->get();


        return view('admin.home',compact('data'));
    }


    public function addcategoryform()
    {
        return view('admin.addcategory');
    }

    public function addcategory(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);


        $create = Categories::create([
            'name' => $request->name
        ]);

        
        return back()->with('success','Added successfully!');
    }

    public function addsubcategoryform()
    {

        $categories = Categories::get();

        return view('admin.addsubcategory', compact('categories'));
    }

    public function addsubcategory(Request $request)
    {

        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required|max:255'
        ]);


        $create = Subcategories::create([
            'categories_id' => $request->category_id,
            'name' => $request->name
        ]);


        return back()->with('success','Added successfully!');
    }
}
