<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    //
    public function index()
    {
        //
        $project_category = ProjectCategory::all();
        return view('admin.project-category.index',compact('project_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $category = ProjectCategory::create($request->all());
        if ($category) {
            return Redirect()->back()->with('success','Project Category Created Successfully');
        }
        else{
            return Redirect()->back()->with('success','Something went wrong!!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $category = ProjectCategory::find($id);
        if($category){
            $category->delete();
            return Redirect()->back()->with('success','Project Category Deleted');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }
}
