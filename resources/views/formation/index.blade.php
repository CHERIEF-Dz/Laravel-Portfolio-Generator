@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-book"> </i> Formations</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/formation/create')}}" class="btn btn-success col-md-12">Create new Formation</a></h1></td>
        </table>
        <div class="col-md-12">            
            @foreach($formations as $formation)
                <br>
                <div class="card">
                    <div class="card-header">{{$formation->title}}</div>
                    <div class="card-body">
                        <h5>{{$formation->date}}</h5>
                        <p><em>{{$formation->location}}</em></p>
                        <p>{!! $formation->description !!}</p>
                        <table class="table" >
                            <td class="col-md-6">
                                <a href="{{url('admin/formation/'.$formation->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a>
                            </td>
                            <td class="col-md-6">
                                <form action="{{url('admin/formation/'.$formation->id)}}" method="POST">
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