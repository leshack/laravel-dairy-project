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
                        <h1 class="m-0">Cows</h1>
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
                        <div class="card">
                            <div class="card-body">
                                <a href="{{URL::to('cow/add')}}" class="btn btn-primary mb-2">Add <i class="fa fa-plus"></i> </a>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Breed</th>
                                        <th style="width: 15px">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cows as $cow)

                                            <tr>
                                                <td>{{$cow->cow_id}}</td>
                                                <td>{{$cow->cow_name}}</td>
                                                <td>{{$cow->birth_date}}</td>
                                                <td>{{$cow->gender}}</td>
                                                <td>{{$cow->breed}}</td>
                                                <td>
                                                    <a href="{{URL:: to('cow/edit/'.$cow->cow_id)}}"><i class="fa fa-edit"></i> </a>
                                                    <a href="{{URL:: to('cow/delete/'.$cow->cow_id)}}"><i class="fa fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
