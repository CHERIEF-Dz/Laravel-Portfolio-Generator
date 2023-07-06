@extends('layouts.dashboard_quilljs')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-book"> </i> Create new Formation</b></h1><br>
            <form action="{{url('admin/formation')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Title of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Duration</label>
                    <input type="text" name="date" placeholder="Duration of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="Location of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description" placeholder="Description of formation">Description</label>
                    <textarea type="text" name="description" class="form-control" id="editor"></textarea>
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