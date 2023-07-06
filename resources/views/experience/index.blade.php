@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-history"> </i> Experiences</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/experience/create')}}" class="btn btn-success col-md-12">Create new Experience</a></h1></td>
        </table>
        <div class="col-md-12">
            @foreach($experiences as $experience)
                <br>
                <div class="card">
                    <div class="card-header">{{$experience->title}}</div>
                    <div class="card-body">
                        <h5>{{$experience->date}}</h5>
                        <p><em>{{$experience->location}}</em></p>
                        <h5>For <b>{{$experience->duration}}</b></h5>
                        <p>{!! $experience->description !!}</p>
                        <table class="table" >
                            <td class="col-md-6">
                                <a href="{{url('admin/experience/'.$experience->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a>
                            </td>
                            <td class="col-md-6">
                                <form action="{{url('admin/experience/'.$experience->id)}}" method="POST">
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