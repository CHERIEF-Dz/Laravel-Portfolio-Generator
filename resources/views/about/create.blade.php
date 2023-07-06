@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-info"> </i> Create new About Information</b></h1><br>
            <form action="{{url('admin/about')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="information">Information</label>
                    <input type="text" name="information" placeholder="About Information" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value">Value</label>
                    <input type="text" name="value" placeholder="Value" class="form-control">
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Create">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection