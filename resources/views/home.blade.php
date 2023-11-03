@extends('layouts.dashboard')

@section('content')
  <!-- Header -->
  <header class="container-fluid py-3">
    <div class="row">
      <div>
        <h1><b><i class="fa fa-dashboard"></i> My Dashboard</b></h1>
      </div>
    </div>
  </header>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a class="nav-link" href="{{url('/admin/client')}}">
        <div class="card h-100">
          <div class="card-body bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
              <i class="fa fa-users fa-5x"></i>
              <h3>{{$client_number}}</h3>
            </div>
            <h4>Clients</h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="nav-link" href="{{url('/admin/project')}}">
        <div class="card h-100">
          <div class="card-body bg-info text-white">
            <div class="d-flex justify-content-between align-items-center">
              <i class="fa fa-check fa-5x"></i>
              <h3>{{$project_number}}</h3>
            </div>
            <h4>Projects</h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="nav-link" href="{{url('/admin/experience')}}">
        <div class="card h-100">
          <div class="card-body bg-light text-black">
            <div class="d-flex justify-content-between align-items-center">
              <i class="fa fa-history fa-5x"></i>
              <h3>{{$experience_number}}</h3>
            </div>
            <h4>Experiences</h4>
          </div>
        </div>
      </a>
    </div>
  </div>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a class="nav-link" href="{{url('/admin/certificat')}}">
        <div class="card h-100">
          <div class="card-body bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
              <span class="fa fa-certificate fa-5x"></span>
              <h3>{{$certeficate_number}}</h3>
            </div>
            <h4>Certeficates</h4>
          </div>
        </div>
      </a>
    </div>
    
    <div class="col">
      <a class="nav-link" href="{{url('/admin/formation')}}">
        <div class="card h-100">
          <div class="card-body bg-secondary text-white">
            <div class="d-flex justify-content-between align-items-center">
              <i class="fa fa-book fa-5x"></i>
              <h3>{{$formation_number}}</h3>
            </div>
            <h4>Formations</h4>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a class="nav-link" href="{{url('/admin/skill')}}">
        <div class="card h-100">
          <div class="card-body bg-dark text-white">
            <div class="d-flex justify-content-between align-items-center">
              <i class="fa fa-diamond fa-5x"></i>
              <h3>{{$skill_number}}</h3>
            </div>
            <h4>Skills</h4>
          </div>
        </div>
      </a>
    </div>
  </div>
@endsection
