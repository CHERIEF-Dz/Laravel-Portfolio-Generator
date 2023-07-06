@extends('layouts.dashboard_quilljs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-history"> </i> Edit an Experience</b></h1><br>
            <form action="{{url('admin/experience/'.$experience->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"  value="{{$experience->title}}" name="title" placeholder="Title of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text"  value="{{$experience->date}}" name="date" placeholder="Date of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text"  value="{{$experience->duration}}" name="duration" placeholder="Duration of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text"  value="{{$experience->location}}" name="location" placeholder="Location of experience" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <div id="editor" class="form-control">
                        {!!$experience->description!!}
                    </div>
                    <textarea type="text" name="description" class="form-control" id="myTextarea" placeholder="Description of the experience" hidden>{{$experience->description}}</textarea>
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