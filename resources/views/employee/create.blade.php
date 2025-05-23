@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-6 m-auto">

                    <div class="card card-secondary">

                        <div class="card-header">

                            <h3 class="card-title">
                                Add New Employee
                            </h3>

                        </div>


                        <form action="{{ route('employee.store')}}" method="POST">
                            @csrf

                            <div class="row card-body col-12">

                                <div class="form-group col-12">

                                    <label for="">First Name</label>
                                    <input type="text" class="form-control g-2" name="fname" placeholder="Enter First Name">

                                </div>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror


                                <div class="form-group col-12">

                                    <label for="">Middle Name</label>
                                    <input type="text" class="form-control g-2" name="midname" placeholder="Enter Middle Name">

                                </div>
                                @error('midname') <span class="text-danger">{{$message}}</span> @enderror


                                <div class="form-group col-12">

                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control g-2" name="lname" placeholder="Enter Last Name">

                                </div>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror


                                <div class="form-group col-12">

                                    <label for="">Address</label>
                                    <input type="text" class="form-control g-2" name="address" placeholder="Enter Address">

                                </div>
                                @error('adress') <span class="text-danger">{{$message}}</span> @enderror


                                <div class="form-group col-6">

                                    <label for="">Age</label>
                                    <input type="number" class="form-control g-2" name="age" placeholder="Enter Age">

                                </div>
                                @error('age') <span class="text-danger">{{$message}}</span> @enderror


                                <div class="form-group col-6">

                                    <label for="">Zip</label>
                                    <input type="number" class="form-control g-2" name="zip" placeholder="Enter Zip">

                                </div>
                                @error('zip') <span class="text-danger">{{$message}}</span> @enderror

                            </div>


                            <div class="card-footer">

                                <button type="submit" class="btn btn-success col-12">Submit</button>

                            </div>


                        </form>

                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection