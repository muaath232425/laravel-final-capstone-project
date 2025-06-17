@extends('layout.app')
@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Supplier</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Supplier</a></li>
                            <li class="breadcrumb-item active">Edit Supplier</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('suppliers.update',$supplier->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Supplier Information <span><a href="javascript:;"><i
                                                    class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Supplier Name <span class="login-danger">*</span></label>
                                        <input class="form-control" name="supplier_name" value="{{ old('supplier_name', $supplier->supplier_name) }}"
                                            type="text" placeholder="Enter Supplier Name">
                                        @error('supplier_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Supplier Phone No <span class="login-danger">*</span></label>
                                        <input class="form-control" name="phone_no" value="{{ old('phone_no',$supplier->phone_no) }}"
                                            type="text" placeholder="Enter Supplier Phone No">
                                        @error('phone_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group local-forms">
                                        <label>Supplier Email <span class="login-danger">*</span></label>
                                        <input class="form-control" name="email" value="{{ old('email', $supplier->email) }}"
                                            type="email" placeholder="Enter Supplier Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group local-forms">
                                        <label>Address <span class="login-danger"></span></label>
                                        <textarea class="form-control" name="address" placeholder="Enter Address">{{ old('address',$supplier->address) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
