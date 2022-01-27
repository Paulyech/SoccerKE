@extends('layouts.main')
@section('content')
<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">sports_soccer</i>
              </div>
              <p class="card-category">Tactics</p>
              <h3 class="card-title">{{ $tactics }}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">supervised_user_circle</i>
                <a href="/admin/tactics">View tactics</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection