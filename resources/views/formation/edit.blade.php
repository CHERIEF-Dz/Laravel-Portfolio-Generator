@extends('layouts.dashboard_quilljs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-book"> </i> Edit a Formation</b></h1><br>
            <form action="{{url('admin/formation/'.$formation->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"  value="{{$formation->title}}" name="title" placeholder="Title of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Duration</label>
                    <input type="text"  value="{{$formation->date}}" name="date" placeholder="Duration of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text"  value="{{$formation->location}}" name="location" placeholder="Location of formation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <div id="editor" class="form-control">
                        {!!$formation->description!!}
                    </div>
                    <textarea type="text" name="description" class="form-control" id="myTextarea" placeholder="Description of formation" hidden>{{$formation->description}}</textarea>
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