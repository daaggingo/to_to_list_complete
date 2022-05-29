@extends('layouts.frontend')


@section('content')
<div class = "container">
    <div class = "row">
        <div class = "col-md-12 mt-4">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class= "card">
                <div class = "card-header">
                    <h4> Todo list items 
                        <a href = "{{url ('add-todoitem')}}" class = "btn btn-primary float-end"> Add Todoitem </a>
                    </h4>
                </div>

                <div class =  "card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th >Name</th>
                                <th >Status</th>
                                <th >Edit</th>
                                <th >Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($todoitem as $tododata)
                                <tr>
                                <th>{{$tododata->id}}</th>
                                <td>{{$tododata->name}}</td>
                                <td>{{$tododata->status}}</td>
                                <td>
                                    <a href ="{{url ('edit-todoitem/'.$tododata->id )}}" class = "btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <!-- <form action="{{url ('delete-todoitem/'.$tododata->id )}}" method = "POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type = "submit" class = "btn btn-danger">Delete</button>
                                    </form> -->
                                    <a href ="{{url ('delete-todoitem/'.$tododata->id )}}" class = "btn btn-danger">Delete</a>
                                    
                     
                                </td>
                                </tr>

                                @endforeach
                        </tbody>
                        </table>
            
                </div>
        </div>
    </div>
</div>


@endsection