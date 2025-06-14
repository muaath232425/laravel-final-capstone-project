@extends('layout.app')
@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Products</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Products</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Product Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Product Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="product_name" value="{{ old('product_name') }}"
                                            type="text" placeholder="Enter Product Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Product Code <span class="login-danger">*</span></label>
                                        <input class="form-control" name="product_code" value="{{ old('product_code') }}"
                                            type="number" placeholder="Enter Product Code">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Product Category <span class="login-danger">*</span></label>
                                        <input class="form-control" name="category" value="{{ old('category') }}"type="text"
                                            placeholder="Enter Product Category">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Product Price <span class="login-danger">*</span></label>
                                        <input class="form-control" name="price" value="{{ old('price') }}"
                                            type="number" placeholder="Enter Product Price">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Stock Quantity <span class="login-danger">*</span></label>
                                        <input class="form-control" name="stock_quantity"
                                            value="{{ old('stock_quantity') }}" type="number"
                                            placeholder="Enter Stock Quantity">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Discription <span class="login-danger">*</span></label>
                                        <input class="form-control" name="description" value="{{ old('description') }}"
                                            type="text" placeholder="Enter Discription">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Supplier Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="supplier_name" value="{{ old('supplier_name') }}"
                                            type="text" placeholder="Enter Supplier Name">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Supplier Contact <span class="login-danger">*</span></label>
                                        <input class="form-control" name="supplier_contact"
                                            value="{{ old('supplier_contact') }}" type="text"
                                            placeholder="Enter Supplier Contact">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group students-up-files">
                                        <label> Product Picture (150px X 150px)</label>
                                        <div class="uplod">
                                            <label class="file-upload image-upbtn mb-0">
                                                Choose File <input type="file" name="picture">
                                            </label>
                                        </div>
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
