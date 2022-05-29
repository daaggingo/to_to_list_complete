@extends('layouts.frontend')


@section('content')
<div class = "container">
    <div class = "row justify-content-center">
        <div class = "col-md-6">
            <div class= "card">
                <div class = "card-header">
                    <h4> Edit Todo items 
                        <a href = "{{url ('/')}}" class = "btn btn-danger float-end"> BACK</a>
                    </h4>
                </div>
                <div class= "card-body">
                    <form action="{{url('update-todoitem/'.$todoitem->id) }}" method = 'POST'>
                        @csrf
                        @method('PUT')

                        <div class = "form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$todoitem->name}}" class = "form-control">
                        </div>

                        
                        <!-- <div class = "form-group mb-3">
                            <label for="">Status</label>
                            <input type="text" name="status" value="{{$todoitem->status}}" class = "form-control">
                        </div> -->

                        <div class = "form-group mb-3">
                            <label for="">Status</label>
                                <select name="status">
                                <option value="pending">pending</option>
                                <option value="complete">complete</option>
                                </select>
                        </div>

                        
                        <div class = "form-group mb-3">
                            <button type = "submit" class = "btn btn-primary">Update</button>
                        </div>

                    </form>

                </div>  

        </div>
    </div>
</div>




@endsection