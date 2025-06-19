@extends('layout.app')
@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
<<<<<<< HEAD
                        <h3 class="page-title">Edit Brand</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Brands</a></li>
                            <li class="breadcrumb-item active">Edit Brands</li>
=======
                        <h3 class="page-title">Edit Product</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
<<<<<<< HEAD
                        <form action="{{ route('brands.update',$brand) }}" method="POST">
=======
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-12">
<<<<<<< HEAD
                                    <h5 class="form-title student-info">Brand Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Brand Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="brand_name" value="{{ old('brand_name',$brand->brand_name) }}"
                                            type="text" placeholder="Enter Brand Name">
                                             @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Description <span class="login-danger"></span></label>
                                        <textarea class="form-control" name="description">{{ old('description',$brand->description) }}</textarea>
=======
                                    <h5 class="form-title student-info">Product Information</h5>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Product Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="name" value="{{ old('name', $product->name) }}"
                                            type="text" placeholder="Enter Product Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Price <span class="login-danger">*</span></label>
                                        <input class="form-control" name="price" value="{{ old('price', $product->price) }}"
                                            type="text" placeholder="Enter Product Price">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group local-forms">
                                        <label>Quantity <span class="login-danger">*</span></label>
                                        <input class="form-control" name="quantity" value="{{ old('quantity', $product->quantity) }}"
                                            type="number" placeholder="Enter Quantity">
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
                                                    {{ old('brand_id', $product->brand_id) == $brand->id ? 'selected' : '' }}>
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
                                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
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
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" placeholder="Enter Description">{{ old('description', $product->description) }}</textarea>
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="student-submit">
<<<<<<< HEAD
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
=======
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </div>
                                </div>

>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
