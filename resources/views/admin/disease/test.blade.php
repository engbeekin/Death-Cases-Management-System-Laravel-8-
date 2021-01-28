@extends('layouts.master')
@section('title')
Add new Disease
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Disease</h2>

                </div>


                <div class="card-body">
                 <div class="row">
                        <div class="col-md-6">
                            <form action="#" method="POST">
                                @csrf
                                {{-- Disease name --}}
                                <div class="form-group">
                                 <label for="title" class="form-label">Disease Name</label>
                                 <input type="text" class="form-control" name="disname" >
                                </div>



                             </div>



                             <div class="form-group">
                                <button type="submit" class="btn  btn-success offset-5 ">Edit</button>
                                <a href="{{route('diseas')}}"  class="btn  btn-danger">Cancel</a>
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
