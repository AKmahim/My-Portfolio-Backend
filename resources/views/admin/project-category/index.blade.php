@extends('layouts.admin-master')

@section('meta-title')
    <title>MM - Admin | Project Category</title>
@endsection

@section('content')

     <!-- Recent Sales Start -->
     <div class="container-fluid pt-4 px-4">

        <div class="d-flex justify-content-between row ">

            <div class="col-sm-12 col-xl-8 bg-secondary text-center rounded p-4 mb-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Project Category List</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                
                                <th scope="col">ID</th>
                                <th scope="col">Project Category Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($project_category as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td style="text-align: center">{{ $item->category_name }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" onclick="alert('are you sure?')" href="/admin/project-category/delete/{{$item->id}}">Delete</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- add category box --}}
            <div class="col-sm-12 col-xl-4">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        @if(session('success')) 
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                        @endif
                        <h6 class="mb-1 text-center">Add Project Category</h6>

                        <form action="{{ url('/admin/project-category/add') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="category_name" required class="form-control" id="floatingInput"
                                    placeholder="insert new category">
                                <label for="floatingInput">Category Name</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->



   

@endsection