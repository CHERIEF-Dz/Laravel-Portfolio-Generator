@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-12">
            <td class="col-md-8"><h1><b><i class="fa fa-cog"> </i> Setting Informations</b></h1></td>
            <td class="col-md-4"><h1><a href="{{url('admin/setting/create')}}" class="btn btn-success col-md-12">Create new Setting item</a></h1></td>
        </table>
        <div class="table-responsive">
            <br>
            <table class="table table-striped table-sm col-md-6">
                <thead>
                    <tr>
                        <th scope="col">Information</th>
                        <th scope="col">Value</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                    <tr>
                        <td>{{$setting->information}}</td>
                        <td>{{$setting->value}}</td>
                        <td class="col-md-2"><a href="{{url('admin/setting/'.$setting->id.'/edit')}}" class="btn btn-primary col-md-12">Edit</a></td>
                        <td class="col-md-2">
                            <form action="{{url('admin/setting/'.$setting->id)}}" method="POST">
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