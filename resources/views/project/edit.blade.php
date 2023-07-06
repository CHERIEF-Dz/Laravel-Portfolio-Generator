@extends('layouts.dashboard_quilljs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-book"> </i> Edit a Project</b></h1><br>
            <form action="{{url('admin/project/'.$project->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <br/>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" value="{{$project->description}}" placeholder="Description of project" class="form-control">
                </div>
                <div class="form-group">
                    <label for="detail">Details</label>
                    <div id="editor" class="form-control">{!!$project->detail!!}</div>
                    <textarea type="text" name="detail" placeholder="Details of project" class="form-control" id="myTextarea" hidden>{{$project->detail}}</textarea>
                </div>
                <div class="form-group">
                    <label for="categorie">Category</label>
                    <select name="categorie" value="{{$project->categorie}}" placeholder="Category of project" class="form-control">
                        <option value="Web"  class="form-control">Web</option>
                        <option value="Mobile" class="form-control">Mobile</option>
                        <option value="Desktop" class="form-control">Desktop</option>
                        <option value="Other" class="form-control">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" value="{{$project->image}}" placeholder="Image of project" class="form-control">
                </div><div class="form-group">
                    <label for="client">Client</label>
                    <select name="client"  value="{{$project->client}}" placeholder="The Client" class="form-control">
                        <option value="0" class="form-control">Me</option>
                        @foreach($clients as $client)
                        <option value="{{$client->id}}" class="form-control">{{$client->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="hours_support">Hours of support</label>
                    <input type="integer" name="hours_support"  value="{{$project->hours_support}}" value="0" placeholder="Hours of support" class="form-control">
                </div>
                <div class="form-group">
                    <label for="awards">Awards</label>
                    <input type="integer" name="awards"  value="{{$project->awards}}" value="0" placeholder="Awards" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date"  value="{{$project->date}}" placeholder="Date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="url">URL of the project</label>
                    <input type="text" name="url"  value="{{$project->url}}" placeholder="URL of the project" class="form-control">
                </div>
                <div class="form-group">
                    <label for="is_visible">Is visible</label>
                    <select name="is_visible"  value="{{$project->is_visible}}" placeholder="Is this project visible" class="form-control">
                        <option value="0" class="form-control">Hidden</option>
                        <option value="1" class="form-control">Visible</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>
<br>
@endsection