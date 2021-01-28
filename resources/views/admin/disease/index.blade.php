@extends('layouts.master')
@section('title')
All Diseases
@endsection

@section('content')
{{-- model code --}}

{{-- end model code --}}
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> All Diseases</h4>
          <a href="{{route('dis.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>Add New Diseases</a>


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
                <th style="font-size: 15px">Disease Name</th>

                <th >Actions</th>

              </thead>
              <tbody>
                  @foreach ($dis   as $dis)
                  <tr>

                    <td> {{$dis->id}}</td>
                    <td>{{$dis->disname}}</td>

                    <td><a href="{{route('dis.edit',[$dis->id])}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a>
                        <a href="{{route('dis.delete',[$dis->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
