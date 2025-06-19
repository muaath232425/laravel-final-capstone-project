@extends('layout.app')
@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
<<<<<<< HEAD
                        <h3 class="page-title">Add Brand</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Brands</a></li>
                            <li class="breadcrumb-item active">Add Brands</li>
=======
                        <h3 class="page-title">Add Products</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Products</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
=======




>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
<<<<<<< HEAD
                                    <h5 class="form-title student-info">Product Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Product Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="product_name" value="{{ old('product_name') }}"
                                            type="text" placeholder="Enter Product Name">
                                        @error('product_name')
=======
                                    <h5 class="form-title student-info">Products Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Products Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            type="text" placeholder="Enter Product Name">
                                        @error('name')
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

<<<<<<< HEAD
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Brand <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="brand_id">
                                            <option selected disabled>Select Brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group local-forms">
                                        <label>Category <span class="login-danger">*</span></label>
                                        <select class="form-control select" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
=======
                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>price <span class="login-danger">*</span></label>
                                        <input class="form-control" name="price" value="{{ old('price') }}"
                                            type="text" placeholder="Enter Product price">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>quantity <span class="login-danger">*</span></label>
                                        <input class="form-control" name="quantity" value="{{ old('quantity') }}"
                                            type="number" placeholder="Enter Product quantity">
                                        @error('quantity')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Brand <span class="login-danger">*</span></label>
                                        <select class="form-control" name="brand_id" required>
                                            <option value="">Select Brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}"
                                                    {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                                                    {{ $brand->brand_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Category <span class="login-danger">*</span></label>
                                        <select class="form-control" name="category_id" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Description <span class="login-danger"></span></label>
                                        <textarea class="form-control" name="description" value="{{ old('description') }}" type="text"
                                            placeholder="Enter Description"></textarea>
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
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
