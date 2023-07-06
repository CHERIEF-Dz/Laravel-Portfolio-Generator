@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-envelope"> </i> Contact Informations</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/contact/create')}}" class="btn btn-success col-md-12">Create new Contact</a></h1></td>
        </table>
        <div class="table-responsive">
            <br>
            <table class="table table-striped table-sm col-md-6">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Link</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->icon}}</td>
                        <td>{{$contact->link}}</td>
                        <td class="col-md-1"><a href="{{url('admin/contact/'.$contact->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a></td>
                        <td class="col-md-1">
                            <form action="{{url('admin/contact/'.$contact->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <div class="form-group">
                                    <input type="submit" class="form-control btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection