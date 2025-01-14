@php
    $header='profile';
    $page='change_password';
@endphp
@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Manage Password</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">User</li>
                                    {{-- <li class="breadcrumb-item active" aria-current="page">Data Tables</li> --}}
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Password Update</h3>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <form novalidate action="{{ route('user.password.change') }} " method="POST">
                                            @csrf
                                            {{-- <div class="row">
                                                <div class="col-6"> --}}
                                                    <div class="form-group">
                                                        <h5>Old Password<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="current_password" id="current_password"
                                                                class="form-control" required
                                                                data-validation-required-message="This field is required">
                                                            @error('current_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                {{-- </div>

                                                <div class="col-6"> --}}
                                                    <div class="form-group">
                                                        <h5>New Password<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control"
                                                                required id="password"
                                                                data-validation-required-message="This field is required">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                {{-- </div>
                                                <div class="col-6"> --}}
                                                    <div class="form-group">
                                                        <h5>Confirm Password<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password_confirmation" class="form-control"
                                                                required id="password_confirmation"
                                                                data-validation-required-message="This field is required">
                                                            @error('password_confirmation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                {{-- </div>
                                            </div> --}}
                                                <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-rounded btn-info mb-5"
                                                        value="Submit">
                                                </div>
                                        </form>

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
