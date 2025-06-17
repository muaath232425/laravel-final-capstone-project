@extends('layout.app')
@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Category</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Category</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Category Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Category Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="category_name" value="{{ old('category_name') }}"
                                            type="text" placeholder="Enter Category Name">
                                             @error('category_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Description <span class="login-danger"></span></label>
                                        <textarea class="form-control" name="description" value="{{ old('description') }}"
                                            type="text" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
