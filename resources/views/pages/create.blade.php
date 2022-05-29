@extends('layouts.frontend')


@section('content')
<div class = "container">
    <div class = "row justify-content-center">
        <div class = "col-md-6">
            <div class= "card">
                <div class = "card-header">
                    <h4> Add Todo item 
                        <a href = "{{url ('/')}}" class = "btn btn-danger float-end"> BACK</a>
                    </h4>
                </div>
                <div class= "card-body">
                    <form action="{{url('store-todoitem') }}" method = 'POST'>
                        @csrf

                        <div class = "form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class = "form-control">
                        </div>

                        
                        <!-- <div class = "form-group mb-3">
                            <label for="">Status</label>
                            <input type="text" name="Status" class = "form-control">
                        </div> -->

                        
                        <div class = "form-group mb-3">
                            <button type = "submit" class = "btn btn-primary">Submit</button>
                        </div>

                    </form>

                </div>  

        </div>
    </div>
</div>




@endsection