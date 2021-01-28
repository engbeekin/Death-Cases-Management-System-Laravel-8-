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
                    <h2>Add New Death</h2>

                </div>


                <div class="card-body">
                 <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('d.store')}}" method="POST">
                                @csrf
                                {{-- Death name --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">name</label>
                                 <input type="text" class="form-control" name="name" >
                                 {{-- Gender  --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">Gender</label>
                                 <select class="form-control" name="gender" style="height: 50px" >
                                        <option > Choose Gender</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>

                                    </select>
                                 {{-- Date of Death --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">Date of Death</label>
                                 <input type="date" class="form-control" name="dateofdeath" >
                                 {{-- Hospital name --}}
                                <div class="form-group">
                                    <label for="city_id" >Choose Hospital</label>
                                    <select class="form-control" name="hospital_id" >
                                        <option  value="Choose Category"> Choose Hospital</option>
                                           @foreach ($hos as $item)
                                           <option value="{{$item->id}}">{{$item->Hospitalname}}</option>
                                           @endforeach
                                    </select>
                                   </div>
                                </div>



                             </div>
                             </div>
                             </div>


                             <div class="col-md-6">
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
                                   {{-- Disease name --}}
                                <div class="form-group">
                                    <label for="city_id" >Choose Disease</label>
                                    <select class="form-control" name="dis_id" >
                                        <option  value="Choose Category"> Choose Disease</option>
                                           @foreach ($dis as $item)
                                           <option value="{{$item->id}}">{{$item->disname}}</option>
                                           @endforeach
                                    </select>
                                   </div>
                                   {{-- Reason --}}
                                <div class="form-group">
                                 <label for="content">Reason</label>
                                 <input type="text" class="form-control" name="reason" >
                                </div>
                             </div>

                             <div class="form-group">
                                <button type="submit" class="btn  btn-success offset-5 ">Edit</button>
                                <a href="{{route('death')}}" type="submit" class="btn  btn-danger">Cancel</a>
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
