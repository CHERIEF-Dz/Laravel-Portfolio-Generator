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
      <div class="card h-100">
        <div class="card-body bg-primary text-white">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-users fa-5x"></i>
            <h3>{{$client_number}}</h3>
          </div>
          <h4>Users</h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body bg-info text-white">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-check fa-5x"></i>
            <h3>{{$project_number}}</h3>
          </div>
          <h4>Projects</h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body bg-success text-white">
          <div class="d-flex justify-content-between align-items-center">
            <span class="bi bi-award fa-3x"></span>
            <h3>{{$awards}}</h3>
          </div>
          <h4>Awards</h4>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body bg-light text-black">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-history fa-5x"></i>
            <h3>{{$experience_number}}</h3>
          </div>
          <h4>Experiences</h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body bg-secondary text-white">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-book fa-5x"></i>
            <h3>{{$formation_number}}</h3>
          </div>
          <h4>Formations</h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body bg-dark text-white">
          <div class="d-flex justify-content-between align-items-center">
            <i class="fa fa-diamond fa-5x"></i>
            <h3>{{$skill_number}}</h3>
          </div>
          <h4>Skills</h4>
        </div>
      </div>
    </div>
  </div>
@endsection
