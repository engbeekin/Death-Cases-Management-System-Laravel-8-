@extends('layouts.master')
@section('title')
beekin company
@endsection

@section('content')
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
                    <h2>Add New Hospital</h2>

                </div>


                <div class="card-body">
                 <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('h.update',[$hospital->id])}}" method="POST">
                                @csrf
                                {{-- hospital name --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">Hospitalname</label>
                                 <input type="text" class="form-control" name="Hospitalname" value="{{$hospital->Hospitalname}}" required>
                                </div>
                                {{-- city name --}}
                                <div class="form-group">
                                    <label for="city_id" >Choose City Name</label>
                                    <select class="form-control" name="city_id" required >
                                        <option  value="#"> Choose City Name</option>
                                           @foreach ($city as $item)
                                           <option value="{{$item->id}}">{{$item->cityname}}</option>
                                           @endforeach
                                    </select>
                                   </div>
                                   {{-- address --}}
                                <div class="form-group">
                                 <label for="content">Address</label>
                                 <input type="text" class="form-control" name="address" value="{{$hospital->address}}" required>
                                </div>
                                  {{-- Mobile --}}
                                <div class="form-group">
                                 <label for="content">Mobile NO</label>
                                 <input type="text" class="form-control" name="phone"value="{{$hospital->phone}}" required>
                                </div>


                             </div>


                             <div class="col-md-6">
                                  {{-- Email --}}
                                  <div class="form-group">
                                    <label for="content">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$hospital->email}}" required>
                                   </div>
                                    {{-- manager name --}}
                                   <div class="form-group">
                                    <label for="content">Manager Name</label>
                                    <input type="text" class="form-control" name="manager"value="{{$hospital->manager}}" required>
                                   </div>
                                   {{-- manager no --}}
                                   <div class="form-group">
                                    <label for="content">Manager No</label>
                                    <input type="text" class="form-control" name="managerno"value="{{$hospital->managerno}}" required>
                                   </div>

                             </div>

                             <div class="form-group">
                                <button type="submit" class="btn  btn-success offset-5 ">Edit</button>
                                <a href="{{route('hospital')}}" type="submit" class="btn  btn-danger">Cancel</a>
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



@endsection

