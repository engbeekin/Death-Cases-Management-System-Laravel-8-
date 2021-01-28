@extends('layouts.master')
@section('title')
All Users
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Register Admin Role</h4>
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Name</th>
                <th>Email</th>
                <th >usertype</th>
                <th >Edit</th>
                <th >Delete</th>
              </thead>
              <tbody>
                  @foreach ($user as $u)
                  <tr>
                    <td> {{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->usertype}}</td>
                    <td><a href="{{route ('r.edit',[$u->id])}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{route ('r.delete',[$u->id])}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('script')

@endsection
