@extends('admin.layouts.app', ['page'=>'Artikel'])


@section('cardStat')
  @include('admin.layouts.cardstat')
@endsection

@section('content')
    


<div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                
                <div class="col" style="margin-bottom: 1%;">
                    <a href="{{url('admin/artikel/create')}}"> <button style="padding: 6.5px;padding-right: 12px;padding-left: 12px" class="btn-sm btn btn-primary">Entri baru</button></a>
                  
                </div>
<!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
                <div class="col-md-1 mt-3" style="padding-right: 8%;">
                  <div class="form-group">
                    <div class="input-group ">
                    </div>
                  </div>
                </div>

            </div>
            <div class="table-responsive table-hover">
              @if(session('sukses'))  
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>  {{session('sukses')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @elseif(session('danger'))     
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>  {{session('danger')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               @elseif(session('warning'))     
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>  {{session('warning')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
<!--                 <thead class="thead-light">
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Buku</th>
                    <th scope="col">Peminjam</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Kembali</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead> -->
                <tbody>
                  <style>
                    .mouse{
                      color:black;
                    }
                    .mouse:hover{
                      cursor: pointer;

                    }

                  </style>
                  @foreach($artikels as $artikel)
                  <tr>
                    <td >
                      <h5><a href="file:///D:/Project%20Perpus/Perpustakaan/blog-single.html" class="hover"> {{ substr  ($artikel->judul, 0, 60) }} ...</a></h5>
                      <a class="text-artikel" href="artikel/{{$artikel->id}}/edit">Edit |</a>
                      <a class="text-artikel" href="">Lihat |</a>
                      <a class="text-artikel" href="/artikel/{{$artikel->id}}/delete">Hapus</a>

                    </td>
                    <td >
                      <h5 style="float: right;">{{$artikel->created_at->format('d M, Y')}}</h5>
                      <h5 style="float: right;"> 1&nbsp;&nbsp;
                        <i class="fas fa-comment-alt" style="color: #A6A6A6">&nbsp;&nbsp;&nbsp;</i> 
                        <span> 121&nbsp;&nbsp;<i class="fas fa-eye" style="color: #A6A6A6"></i></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    </td>
                </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    @endsection