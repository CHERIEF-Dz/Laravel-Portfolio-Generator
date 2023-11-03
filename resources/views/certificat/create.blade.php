@extends('layouts.dashboard_quilljs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><b><i class="bi bi-award"> </i> Create new Certificate</b></h1><br>
            <form action="{{url('admin/certificat')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name of the certificat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="organisation">Organisation</label>
                    <input type="text" name="organisation" placeholder="Organisation of the certificat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" name="url" placeholder="URL of certificat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="skills">Skills</label>
                    <input type="text" name="skills" placeholder="Skills seperated by ';'" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" placeholder="Date of the certificat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="is_visible">Is visible</label>
                    <select name="is_visible" placeholder="Is this certificat visible" class="form-control">
                        <option value="0" class="form-control" selected>Hidden</option>
                        <option value="1" class="form-control">Visible</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" placeholder="Skills of certificat" value="Create">
                </div>
            </form>
            <br/>
        </div>
    </div>
</div>
@endsection