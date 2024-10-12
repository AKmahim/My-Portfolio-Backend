<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    protected function ApiResponse($data,$message){
        if($data){
            return response()->json([
                'status'=> true,
                'message' => $message . " Successfull",
                'data' => $data,
            ],200);
        }
        else{
            return response()->json([
                'status'=> false,
                'message' => $message . " Fail",
                'data' => $data,
            ],200);
        }
    }

    // get all project 
    public function getAllProject(){
        $project = Project::latest()->orderBy('project_serial', 'asc')->get();
        return $this->ApiResponse($project,"All Project Data Fetch ");
    }

    //get all category as array
    public function getAllCategory(){
        $category = ProjectCategory::pluck('category_name')->toArray();
        return $this->ApiResponse($category,"All Category Data Fetch ");
    }

    //get project by category
    public function getProjectByCategory(string $category)
    {
        $projects = Project::whereJsonContains('project_category', $category)->get();
        
        if(!$projects->isEmpty()){
            return response()->json([
                'status'=> true,
                'message' => "Project fetch by category successfull",
                'data' => $projects,
            ],200);
        }
        else{
            return response()->json([
                'status'=> false,
                'message' => "No Project Found!!",
                'data' => $projects,
            ],404);
        }

    }
}
