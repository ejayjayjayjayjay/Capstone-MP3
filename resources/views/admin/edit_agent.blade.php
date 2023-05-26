@extends('admin.admin_dashboard')
@section('admin')

 <section class="content">
    <div class="row">
        <div class="col-lg-1">
            
        </div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Edit Agent
                    </h5>
                </div>
            <div class="card-body">
                <form role="form" action="{{URL::to('/update-agent/'.$edit->id)}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Agent Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$edit->name}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Agent Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email Address" value="{{$edit->email}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password" value="{{$edit->password}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">User Role Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="role" id="exampleFormControlSelect1" required>
                                <option value="Admin" {{'admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                                <option value="Agent" {{'agent' == $edit->role ? 'selected' : ''}}>Agent</option>
                            </select>
                        </div>
                    </div>
                </div> {{--  End card body --}}

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning"> Submit </button>
                </div>

                </form>
            </div>
        </div>
        <div class="col-lg-1">

        </div>
    </div>
 </section>


@endsection