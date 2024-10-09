@extends('layouts.admin-master')

@section('meta-title')
    <title>XRI - Admin | Blog Category</title>
@endsection

@section('content')

     <!-- Recent Sales Start -->
     <div class="container-fluid pt-4 px-4">

        <div class="d-flex justify-content-between row ">

            <div class="col-sm-12 col-xl-8 bg-secondary text-center rounded p-4 mb-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Blog Category List</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                
                                <th scope="col">ID</th>
                                <th scope="col">Blog Category Name</th>
                                <th scope="col">Blog Category Img</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $categories->firstItem()+$loop->index }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    @if ($item->category_img)
                                    <td class="text-center"> <a target="_blank" href="{{url($item->category_img)}}"><img style="width: 50px;height:50px" src="{{asset($item->category_img)}}" alt="" srcset=""></a> </td>
                                        
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-sm btn-primary" onclick="alert('are you sure?')" href="/admin/blog-category/delete/{{$item->id}}">Delete</a>
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
                        <h6 class="mb-1 text-center">Add Blog Category</h6>

                        <form action="{{ url('/admin/blog-category/add') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="category_name" required class="form-control" id="floatingInput"
                                    placeholder="insert new category">
                                <label for="floatingInput">Category Name</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">category image - 270x270 (optional)</label>
                                <input name="category_img" class="form-control bg-dark" type="file" id="formFile" >
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