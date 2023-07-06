@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-users"> </i> Clients</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/client/create')}}" class="btn btn-success col-md-12">Create new Client</a></h1></td>
        </table>
        <div class="col-md-8">
            @foreach($clients as $client)
                <br>
                <div class="card">
                    <div class="card-header"><b>{{$client->name}}</b> - {{$client->job}}</div>
                    <img src="{{url($client->image)}}" alt="Image of the client {{$client->name}}" class="img-thumbnail card-img-top"/>
                    <div class="card-body">
                        <blockquote class="blockquote blockquote-custom bg-white px-3 pt-4">
                            <div class="blockquote-custom-icon bg-info shadow-1-strong">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                            <p class="mb-0 mt-2 font-italic text-center">{{$client->testimonial}}</p>
                        </blockquote>
                        <table class="table">
                            <td class="col-md-4">
                                <a href="{{$client->testimonial_link}}" class="btn btn-secondary col-md-12">Visit</a>
                            </td>
                            <td class="col-md-4">
                                <a href="{{url('admin/client/'.$client->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a>
                            </td>
                            <td class="col-md-4">
                                <form action="{{url('admin/client/'.$client->id)}}" method="POST">
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

<style>
.blockquote-custom {
position: relative;
font-size: 1.1rem;
}

.blockquote-custom-icon {
width: 50px;
height: 50px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
position: absolute;
top: -40px;
left: 19px;
}
</style>
@endsection
