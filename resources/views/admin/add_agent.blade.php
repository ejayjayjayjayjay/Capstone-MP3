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
                        Add Agent
                    </h5>
                </div>
            <div class="card-body">
                <form role="form" action="{{URL::to('/insert-agent')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Agent Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Agent Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email Address" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">User Role Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="role" id="exampleFormControlSelect1" required>
                                <option value="Admin">Admin</option>
                                <option value="Agent">Agent</option>
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