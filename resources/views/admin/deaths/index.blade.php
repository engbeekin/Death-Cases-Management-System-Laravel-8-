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
          <h4 class="card-title"> All Deaths</h4>
          <a href="{{route('d.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add New Hospital</a>


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
                <th style="font-size: 15px">Death Name</th>
                <th>Gender</th>
                <th>Date of Death</th>
                <th>Hospital Name</th>
                <th>City Name</th>
                <th>Disese</th>
                <th>Reason</th>
                <th>Actions</th>

            </thead>
              <tbody>
                  @foreach ($death   as $death)
                  <tr>

                    <td> {{$death->id}}</td>
                    <td>{{$death->name}}</td>
                    <td>{{$death->gender}}</td>
                    <td>{{$death->dateofdeath}}</td>
                    <td> {{$death->hospital->Hospitalname }}</td>
                    <td> {{$death->citys->cityname }}</td>
                    <td> {{$death->disease->disname }}</td>
                    <td> {{$death->reason}}</td>



                    <td><a href="{{route('d.edit',[$death->id])}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
                        <a href="{{route('d.delete',[$death->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
