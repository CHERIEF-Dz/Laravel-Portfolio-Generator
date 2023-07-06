@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-diamond"> </i> Create new Skill</b></h1><br>
            <form action="{{url('admin/skill')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name of skill" class="form-control">
                </div>
                <div class="form-group">
                    <label for="observation">Observation</label>
                    <input type="text" name="observation" placeholder="Observation of skill" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="number" min="0" max="100" name="value" placeholder="Value of skill" class="form-control">
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Create">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection