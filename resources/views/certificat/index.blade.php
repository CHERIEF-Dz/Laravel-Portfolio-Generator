@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="bi bi-award"> </i> Certificats</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/certificat/create')}}" class="btn btn-success col-md-12">Create new certificat</a></h1></td>
        </table>
        <div class="col-md-12">
            @foreach($certificats as $certificat)
                <br>
                <div class="card">
                    <div class="card-header"><b>{{$certificat->name}}</b> - by <b><i>{{$certificat->organisation}}</i></b></div>
                    <div class="card-body">
                        <p>Earned <b>{{(new DateTime($certificat->date))->format('F jS Y')}}</b></p>
                        <p>Skills: 
                        @foreach(explode(";",$certificat->skills) as $skill)
                            <span class="badge bg-success">{{$skill}}</span>
                        @endforeach
                        </p>
                        <table class="table" >
                            <td class="col-md-4">
                                <a href="{{$certificat->url}}" class="btn btn-secondary col-md-12">View</a>
                            </td>
                            <td class="col-md-4">
                                <a href="{{url('admin/certificat/'.$certificat->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a>
                            </td>
                            <td class="col-md-4">
                                <form action="{{url('admin/certificat/'.$certificat->id)}}" method="POST">
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