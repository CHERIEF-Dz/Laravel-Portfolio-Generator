@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-envelope"> </i> Edit an Contact Information</b></h1><br>
            <form action="{{url('admin/contact/'.$contact->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$contact->name}}" placeholder="Name of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" value="{{$contact->link}}" placeholder="Link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" value="{{$contact->icon}}" placeholder="Icon" class="form-control">
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