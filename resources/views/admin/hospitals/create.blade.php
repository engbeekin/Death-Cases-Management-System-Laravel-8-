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
                            <form action="{{route('h.store')}}" method="POST">
                                @csrf
                                {{-- hospital name --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">Hospitalname</label>
                                 <input type="text" class="form-control" name="Hospitalname" >
                                </div>
                                {{-- city name --}}
                                <div class="form-group">
                                    <label for="city_id" >Choose City Name</label>
                                    <select class="form-control" name="city_id" >
                                        <option  value="Choose Category"> Choose City Name</option>
                                           @foreach ($city as $item)
                                           <option value="{{$item->id}}">{{$item->cityname}}</option>
                                           @endforeach
                                    </select>
                                   </div>
                                   {{-- address --}}
                                <div class="form-group">
                                 <label for="content">Address</label>
                                 <input type="text" class="form-control" name="address" >
                                </div>
                                  {{-- Mobile --}}
                                <div class="form-group">
                                 <label for="content">Mobile NO</label>
                                 <input type="text" class="form-control" name="phone">
                                </div>


                             </div>


                             <div class="col-md-6">
                                  {{-- Email --}}
                                  <div class="form-group">
                                    <label for="content">Email</label>
                                    <input type="text" class="form-control" name="email">
                                   </div>
                                    {{-- manager name --}}
                                   <div class="form-group">
                                    <label for="content">Manager Name</label>
                                    <input type="text" class="form-control" name="manager">
                                   </div>
                                   {{-- manager no --}}
                                   <div class="form-group">
                                    <label for="content">Manager No</label>
                                    <input type="text" class="form-control" name="managerno">
                                   </div>

                             </div>

                             <div class="form-group">
                                <button type="submit" class="btn  btn-success offset-5 ">Add Hospital</button>
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
