<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $project_category = ProjectCategory::all();
        // dd($project_category);
        return view('admin.projects.create',compact('project_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        ini_set('memory_limit', '512M');
        
        $validated = $request->validate([
            'project_title' => 'required|string',
            'short_description' => 'required|string',
            'project_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:3072',
            'demo_link' => 'nullable|string',
            'video_link' => 'nullable|string',
            'code_link' => 'nullable|string',
            'project_category' => 'required',
            ]
        );

        // ============== project picture upload =======
        $project_picture = '';
        $temp_img = $request->file('project_picture');
        if($temp_img){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($temp_img->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'project/';
            $project_picture = $up_location.$img_name;
            $temp_img->move($up_location,$img_name);
        }

        // ================ json encoded project category =======
        $json_project_category = json_encode($request->project_category);


        // create project 
        $data = Project::create([
            'project_title' => $request->project_title,
            'short_description' => $request->short_description,
            'project_picture' => $project_picture,
            'demo_link' => $request->demo_link,
            'video_link' => $request->video_link,
            'code_link' => $request->code_link,
            'project_category' => $json_project_category,
        ]);

        if ($data) {
            return Redirect()->back()->with('success','Project Created Successfully');
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
    public function destroy(string $id)
    {
        //
        $project = Project::find($id);
        if($project){
            $project_picture = $project->project_picture;
            if($project_picture){
                if(file_exists($project_picture)){
                    unlink($project_picture);
                }

            }
           
            $project->delete();
            return Redirect()->back()->with('success','Project Deleted Successfully');

        }
        else{
            return Redirect()->back()->with('success','Something went wrong!');
        }
    }
}
