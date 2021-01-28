@extends('layouts.master')
@section('title')
Edit Admin role
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Admin role For Register users</h2>

                    </div>


                    <div class="card-body">
                     <div class="row">
                            <div class="col-md-6">
                                <form action="{{route ('r.update',[$user->id])}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                     <label for="name" class="form-label">User Name</label>
                                     <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                     <label for="usertype">Give Role</label>
                                     <select name="usertype" id="" class="form-control">
                                         <option value="admin">Admin</option>
                                         <option value="user">User</option>
                                     </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Edit</button>
                                    <a href="{{route('role')}}" type="submit" class="btn btn-danger">Cancel</a>
                                 </div>






                                     </form>

                                     </div>
                            </div>
                         </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

@endsection
