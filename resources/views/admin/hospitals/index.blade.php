@extends('layouts.master')
@section('title')
All Hosptials
@endsection

@section('content')
{{-- model code --}}

{{-- end model code --}}
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Hospitals</h4>
          <a href="{{route('h.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add New Hospital</a>


       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="datatable"class="table  table-bordered" style="width:100%">
              <thead class=" text-primary">
                <th>#</th>
                <th style="font-size: 15px">Hospital Name</th>
                <th>City Name</th>
                <th >Address</th>
                <th >Phone</th>
                <th >Email</th>
                <th >Manager</th>
                <th >Manager NO</th>
                <th >Actions</th>

              </thead>
              <tbody>
                  @foreach ($hos   as $hos)
                  <tr>

                    <td> {{$hos->id}}</td>
                    <td>{{$hos->Hospitalname}}</td>
                    <td> {{$hos->city->cityname }}</td>
                    <td> {{$hos->address}}</td>
                    <td> {{$hos->phone}}</td>
                    <td> {{$hos->email}}</td>
                    <td> {{$hos->manager}}</td>

                    <td>{{$hos->managerno}}</td>
                    <td><a href="{{route('h.edit',[$hos->id])}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
                        <a href="{{route('h.delete',[$hos->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>

                  </tr>
                  @endforeach


              </tbody>
            </table>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    $(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
@endsection
