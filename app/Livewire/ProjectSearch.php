<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use App\Models\Project;

class ProjectSearch extends Component
{
    use WithPagination;
    // search parameter 
    public string $searchBy = '';
    public string $searchValue = '';
    public $projects = [];

    public function __construct()
    {
        // $this->cards = RenataCard::latest()->paginate(30);
        $this->projects = Project::orderBy('project_serial', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.project-search');
    }

    public function search(){
        // 'like', $areaCode.'%'
        if($this->searchValue == 'project_category'){
            Project::whereJsonContains('project_category', $this->searchValue)->get();
        }
        else{

            $this->projects = Project::where($this->searchBy,'like','%'.$this->searchValue.'%')->get();
        }
        // dd()
        
        $this->reset('searchBy','searchValue');
        // $this->reset(...properties:'searchBy','searchValue');
    }
}
