@extends('partials.tamplate')

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Order Statistics - 
            <div class="dropdown d-inline">
              <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
              <ul class="dropdown-menu dropdown-menu-sm">
                <li class="dropdown-title">Select Month</li>
                <li><a href="#" class="dropdown-item">January</a></li>
                <li><a href="#" class="dropdown-item">February</a></li>
                <li><a href="#" class="dropdown-item">March</a></li>
                <li><a href="#" class="dropdown-item">April</a></li>
                <li><a href="#" class="dropdown-item">May</a></li>
                <li><a href="#" class="dropdown-item">June</a></li>
                <li><a href="#" class="dropdown-item">July</a></li>
                <li><a href="#" class="dropdown-item active">August</a></li>
                <li><a href="#" class="dropdown-item">September</a></li>
                <li><a href="#" class="dropdown-item">October</a></li>
                <li><a href="#" class="dropdown-item">November</a></li>
                <li><a href="#" class="dropdown-item">December</a></li>
              </ul>
            </div>
          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">24</div>
              <div class="card-stats-item-label">Pending</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">12</div>
              <div class="card-stats-item-label">Shipping</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">23</div>
              <div class="card-stats-item-label">Completed</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Orders</h4>
          </div>
          <div class="card-body">
            59
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="balance-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Balance</h4>
          </div>
          <div class="card-body">
            $187,13
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-chart">
          <canvas id="sales-chart" height="80"></canvas>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Sales</h4>
          </div>
          <div class="card-body">
            4,732
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section-body">
    <h2 class="section-title">Create Class</h2>
    <p class="section-lead">
      Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
    </p>

    <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Create Data Class</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <b>Note!</b> Please Input Valid Data
            </div>
            <div class="form-group">
              <label>Class</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label>Major</label>
              <input type="text" class="form-control">
            </div>

          <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
          </div>

  
</section>


@endsection