<div>
    <div class="row bg-primary mx-4 my-4 p-4 ">
        <div class="col-xl-12 ">
            <form method="POST" wire:submit="search">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-xl-4" >
                        <div class="input-group">
                            <select wire:model="searchBy" class="form-control mr-sm-2" id="inlineFormCustomSelect" required>
                                <option disabled selected value="">select filter option</option>
                                <option value="project_title">Project Title</option>
                                <option value="short_description">Short Description</option>
                                <option value="project_category">Project Category</option>
                                <option value="project_serial">Project Serial</option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-xl-4" >
                        <div class="input-group mb-3">
                            <input  wire:model="searchValue" type="text" class="form-control" placeholder="Enter Search Value"
                                aria-label="Search Value" aria-describedby="basic-addon2" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="input-group ">
                            <button class="btn-primary rounded" >Search
                                {{-- <span class="input-group-text" id="basic-addon2">Search</span> --}}
                            </button>
                        </div>
                    </div>
                   
                </div>
            </form>
        </div>
    </div>
    <div class="row ">
        @foreach ($projects as $project)
            <div class="col-sm-1 col-md-2 col-xl-4 mb-4">
                <div class="project-card">
                    <!-- project image section -->
                    <div class="project-image">
                        <img class="project-img" src="{{asset($project->project_picture)}}" alt="Project Image">
                    </div>
                    <!-- project details section -->
                    <div class="project-details">
                        <!-- info -->
                        <div class="project-info">
                            <h1 class="project-title">{{$project->project_title}}</h1>
                            <p class="project-description px-3">
                                {{$project->short_description}}
                            </p>
                            <!-- important link -->
                            <div class="project-links">
                                <a class="project-button px-4" href="#" target="_blank">{{$project->project_serial}}</a>
                                @if($project->demo_link)
                                    <a class="project-button" href="{{ $project->demo_link }}" target="_blank">Demo</a>
                                @endif
                            
                                @if($project->video_link)
                                    <a class="project-button" href="{{ $project->video_link }}" target="_blank">Video</a>
                                @endif
                            
                                @if($project->code_link)
                                    <a class="project-button" href="{{ $project->code_link }}" target="_blank">Code</a>
                                @endif
                            
                                <div class="dropdown ">
                                    <button class="dropbtn"><i class="ri-menu-line"></i></button>
                                    <div class="dropdown-content">
                                        {{-- Uncomment the view details link if needed --}}
                                        {{-- <a href="{{ url('/admin/authors/show/'.$item->id) }}" class="dropdown-item">View Details</a> --}}
                                        <a href="{{ url('/admin/projects/edit/'.$project->id) }}" class="dropdown-item">Update Info</a>
                                        <a href="{{ url('/admin/projects/delete/'.$project->id) }}" class="dropdown-item">Delete Project</a>
                                    </div>
                                </div>
                            </div>
                            
                            @if(!$project->code_link)
                                <p class="source-warning">
                                    <span>⚠️</span> Source code is private for commercial issue
                                </p>
                            @endif
                            
                        </div>
                        @php
                            $project_category = json_decode($project->project_category);
                            
                        @endphp
                        <!-- footer -->
                        <div class="project-footer">
                            @foreach ($project_category as $item)
                                <a href="#" class="project-tag"># {{$item}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        @endforeach
    
        {{-- {{$projects->links('pagination::bootstrap-4')}} --}}
        
        
    </div>
    
</div>