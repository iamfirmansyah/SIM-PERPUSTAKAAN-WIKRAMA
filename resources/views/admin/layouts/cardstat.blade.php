<div class="row">
  <div class="col-xl-3 col-lg-6">
    <div class="card card-stats mb-4 mb-xl-0">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Email</h5>
            <span class="h2 font-weight-bold mb-0">{{ $emailCard->count() }}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-purple text-white rounded-circle shadow">
              <i class="fas fa-envelope"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-muted text-sm">
          <span class="text-muted mr-2"><i class="fa fa-exclamation-circle"></i></span>
          <span class="text-nowrap">Total Email</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6">
    <div class="card card-stats mb-4 mb-xl-0">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total Artikel</h5>
            <span class="h2 font-weight-bold mb-0">{{ $artikels->count() }}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
              <i class="fas  fa-pen"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-muted text-sm">
          <span class="text-muted mr-2"><i class="fa fa-address-card"></i></span>
          <span class="text-nowrap">Total Artikel</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6">
    <div class="card card-stats mb-4 mb-xl-0">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total E-Books</h5>
            <span class="h2 font-weight-bold mb-0">{{$books->count()}}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-success text-white rounded-circle shadow">
              <i class="fas fa-book"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-muted text-sm">
          <span class="text-muted mr-2"><i class="fas fa-book"></i></span>
          <span class="text-nowrap">Total Buku</span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6">
    <div class="card card-stats mb-4 mb-xl-0">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total E-Tube</h5>
            <span class="h2 font-weight-bold mb-0">{{ $tubes->count() }}</span>
          </div>
          <div class="col-auto">
            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
              <i class="fab fa-youtube"></i>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-muted text-sm">
          <span class="text-muted mr-2"><i class="fab fa-youtube"></i></span>
          <span class="text-nowrap">Total E-Tube</span>
        </p>
      </div>
    </div>
  </div>
</div>