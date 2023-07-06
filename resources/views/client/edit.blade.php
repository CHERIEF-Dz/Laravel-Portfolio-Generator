@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-user"> </i> Edit a Client</b></h1><br>
            <form action="{{url('admin/client/'.$client->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{$client->name}}" placeholder="Name of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" name="job" value="{{$client->job}}" placeholder="Job of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" min="0" max="100" value="{{$client->image}}" name="Image" placeholder="image of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="testimonial">Testimonial</label>
                    <textarea  name="testimonial" placeholder="Testimonial of client" class="form-control">{{$client->testimonial}}</textarea>
                </div>
                <div class="form-group">
                    <label for="testimonial_link">Testimonial Link</label>
                    <input type="link" value="{{$client->testimonial_link}}" name="testimonial_link" placeholder="Testimonial Linkof client" class="form-control"/>
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