@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-user"> </i> Create new Client</b></h1><br>
            <form action="{{url('admin/client')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="job">Job</label>
                    <input type="text" name="job" placeholder="Job of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" min="0" max="100" name="image" placeholder="Image of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="testimonial">Testimonial</label>
                    <textarea  name="testimonial" placeholder="Testimonial of client" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="testimonial_link">Testimonial Link</label>
                    <input type="link"  name="testimonial_link" placeholder="Testimonial Linkof client" class="form-control"/>
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