@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-check"> </i> Projects</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/project/create')}}" class="btn btn-success col-md-12">Create new project</a></h1></td>
        </table>
        <div class="col-md-8">            
            @foreach($projects as $project)
                <br>
                <div class="card">
                    <div class="card-header"><b>{{$project->categorie}}</b> - {{$project->description}}</div>
                        <img src="{{url($project->image)}}" class="img-thumbnail card-img-top"/>
                    <div class="card-body">
                        <table class="table">
                            <td class="col-md-4">
                                <a href="{{$project->page_detail}}" class="btn btn-secondary col-md-12">Visit</a>
                            </td>
                            <td class="col-md-4">
                                <a href="{{url('admin/project/'.$project->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a>
                            </td>
                            <td class="col-md-4">
                                <form action="{{url('admin/project/'.$project->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-danger" value="Delete">
                                    </div>
                                </form>
                            </td>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection