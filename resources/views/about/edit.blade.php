@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-info"> </i> Edit an About Information</b></h1><br>
            <form action="{{url('admin/about/'.$about->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="information">Information</label>
                    <input type="text" name="information" value="{{$about->information}}" placeholder="About Information" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" name="value" value="{{$about->value}}" placeholder="Value" class="form-control">
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