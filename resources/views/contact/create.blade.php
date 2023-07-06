@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="fa fa-envelope"> </i> Create new Contact Information</b></h1><br>
            <form action="{{url('admin/contact')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name of client" class="form-control">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" placeholder="Link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" placeholder="Icon" class="form-control">
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