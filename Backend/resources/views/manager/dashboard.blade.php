@extends('manager.master.master')

@section('main_content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Dashboard
      </h3>
    </div>
    <div class="row grid-margin">
      <div class="col-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="fa fa-home"></i>
                 Total Apartment
                </p>
                <h2>{{$apartment}}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
              <div class="statistics-item">
                <p>
                  <i class="fa fa-home"></i>
                 Total Seller
                </p>
                <h2>{{$seller}}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>
  
  @endsection