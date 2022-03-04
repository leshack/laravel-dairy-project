@extends('layout.layout')
@section('page_title','Cows - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Cow</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="add_cow" id = "add_cow" method = "post" action="{{URL:: to('cow/save')}}" >
                            @csrf    
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif    
                                <div class="form-group">
                                        <label for="cow_name">Name</label>
                                        <input required type="text" class="form-control" id="cow_name" name="cow_name" placeholder="Enter cow name">
                                    </div>
                                    <div class="form-group">
                                         <label for="birth_date">Birth Date</label>
                                         <input required type="date" class="form-control" name="birth_date" id="birth_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select required id="gender" name="gender" class="form-control">
                                            <option value="F">Cow</option>
                                            <option value="H">Heiferss</option>
                                            <option value="B">Bull</option>
                                            <option value="M">Bull</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="breed">Breed</label>
                                        <select required id="breed" name="breed" class="form-control">
                                            <option value="guernsey">Guernsey</option>
                                            <option value="freshian">Freshian</option>
                                            <option value="ayrshire">Ayrshire</option>
                                            <option value="jersey">jersey</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush
