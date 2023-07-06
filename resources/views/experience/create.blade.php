@extends('layouts.dashboard_quilljs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-history"> </i> Create new Experience</b></h1><br>
            <form action="{{url('admin/experience')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" name="date" placeholder="Date of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" placeholder="Duration of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="Location of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" placeholder="Description of experience">Description</label>
                    <textarea type="text" name="description" class="form-control" id="editor"></textarea>
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" placeholder="Description of experience" value="Create">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection