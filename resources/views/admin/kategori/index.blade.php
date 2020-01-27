@extends('admin.layouts.app',['page'=>'Kategori'])

@section('cardStat')
@include('admin.layouts.cardstat')
@endsection

@section('content')



<div class="row">
  <div class="col-xl-12 mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h2 class="mb-0">kategori</h2>
          </div>
          <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
          <div class="col-md-2 mt-3">
            <div class="form-group">
              <div class="input-group ">
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah-kategori">

                  <span class="btn-inner--icon"><i class="fas fa-plus mr-2"></i></span>
                  <span class="btn-inner--text">Tambah Kategori</span>

                </button>
              </div>
            </div>
          </div>

        </div>
        <div class="table-responsive">

          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong> {{session('sukses')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @elseif(session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong> {{session('danger')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @elseif(session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong> {{session('warning')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Created At</th>
                <th scope="col"></th>


              </tr>
            </thead>
            <tbody>
              @foreach($kategoris as $kategori)
              <tr>
                <td>
                  @if($i==0)
                  {{ $i=1, $i++ }}
                  @else
                  {{$i++}}
                  @endif
                </td>
                <td>
                  {{$kategori->nama_kategori}}
                </td>
                <td>
                  {{$kategori->created_at}}
                </td>
                <td>
                  <div class="btn-group">
                    <a href="" class="btn btn-sm btn-primary  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Action</a>
                    <div class="dropdown-menu" ria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" style="font-size: 12px" data-toggle="modal"
                        data-target="#edit-kategori-{{$kategori->id_kategori}}">Edit</button>
                      <button class="dropdown-item" style="font-size: 12px" data-toggle="modal"
                        data-target="#hapus-kategori-{{$kategori->id_kategori}}">Delete</button>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>


          </table>
          <br>
          <span class="float-right"> {!! $kategoris->links() !!}</span>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Tambah kategori -->

<div class="row">
  <div class="col-md-4">
    <div class="modal fade" id="tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="tambah-kategori"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-6">
                  <h2>Tambah kategori</h2>
                </div>
                <form role="form" method="POST" action="/admin/kategori/create">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label ">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required
                          autocomplete="off">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- !Tambah kategori -->

@foreach($kategoris as $kategori)
<!-- Edit kategori -->

<div class="row">
  <div class="col-md-4">
    <div class="modal fade" id="edit-kategori-{{$kategori->id_kategori}}" tabindex="-1" role="dialog"
      aria-labelledby="edit-kategori" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-6">
                  <h2>Edit kategori</h2>
                </div>
                <form role="form" method="POST" action="/admin/kategori/{{$kategori->id_kategori}}/edit"
                  enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label">Nama Kategori</label>
                        <input type="nama_kategori" class="form-control" id="nama_kategori" name="nama_kategori" require
                          autocomplete="off" value="{{ $kategori->nama_kategori }}">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- !Edit kategori -->


<!-- Hapus kategori -->

<div class="col-md-4">
  <div class="modal fade" id="hapus-kategori-{{$kategori->id_kategori}}" tabindex="-1" role="dialog"
    aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-danger">

        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Perhatian</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">

          <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4">anda akan menghapus data kategori berikut</h4>
            <div class="table-responsive">
              <table class="table table-striped table-dark align-items-center">
                <thead class="">
                  <tr>
                    <th>Nama Kategori</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr class="table-light text-dark">
                    <td>
                      {{ $kategori->nama_kategori }}
                    </td>
                    <td>
                      {{ $kategori->created_at }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
          <a class="btn btn-danger ml-auto" href="/admin/kategori/{{ $kategori->id_kategori }}/delete">Hapus</a>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- !Hapus kategori -->
@endforeach
@endsection