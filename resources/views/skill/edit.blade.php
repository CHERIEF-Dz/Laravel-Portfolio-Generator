@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-diamond"> </i> Edit a Skill</b></h1><br>
            <form action="{{url('admin/skill/'.$skill->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$skill->name}}" placeholder="Name of skill" class="form-control">
                </div>
                <div class="form-group">
                    <label for="observation">Observation</label>
                    <input type="text" name="observation" value="{{$skill->observation}}" placeholder="Observation of skill" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="number" min="0" max="100" value="{{$skill->value}}" name="value" placeholder="Value of skill" class="form-control">
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-warning" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection