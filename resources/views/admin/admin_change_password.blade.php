@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Admin Change Password</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">


            <form method="post" action="{{ route('admin.profile.store') }}">
                @csrf

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @elseif(session('error'))
                    <div class="alert alert-success" role="alert">
                        {{session('error')}}
                    </div>
                @endif

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('old_password') is-invalid @enderror" id="current_password"
                        placeholder="Old Password"/>
                        @error('old_password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->
    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                        placeholder="Old Password"/>
                        @error('new_password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->
    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm New Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"
                        placeholder="Confirm New Password"/>
                    </div>
                </div>
                <!-- end row -->
    
    
                <input type="submit" class="btn btn-warning btn-rounded waves-effect waves-light" value="Change Password">

            </form>


            </div>

        </div>
            </div>
        </div>
    </div>
</div>

@endsection