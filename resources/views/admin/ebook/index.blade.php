@extends('admin.layouts.app',['page'=>'E-Book'])

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
            <h2 class="mb-0">E-Book Learning</h2>
          </div>
          <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
          <div class="col-md-2 mt-3">
            <div class="form-group">
              <div class="input-group ">
                <a href="{{url('admin/ebook/create')}}" class="btn btn-primary btn-sm">Tambah E-Book</a>
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
                <th scope="col">Judul</th>
                <th scope="col">Author</th>
                <th scope="col" class="text-center">ISBN</th>
                <th scope="col" class="text-center">Tahun</th>
                <th scope="col">Action</th>


              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <th scope="row">
                  <img src="{{ URL::to('/') }}/asset/upload/ebook/{{ $book->cover }}"
                    class="avatar avatar-sm rounded-circle" style="margin-right: 7px" alt="">
                  <a href="" class="dey">{{$book->judul}}</a>
                </th>
                <td>
                  {{$book->pengarang}}
                </td>
                <td class="text-center" style="font-weight: 600">{{$book->isbn}}</td>

                <td class="text-center">{{$book->tahun_terbit}}</td>
                <td>
                  <div class="btn-group">
                    <a href="" class="btn btn-sm btn-primary  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Action</a>
                    <div class="dropdown-menu" ria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" href="ebook/{{$book->id}}/edit" style="font-size: 12px">Edit</a>
                      <a class="dropdown-item" href="/ebook/{{$book->id}}/delete" style="font-size: 12px">Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>


          </table>
          <br>
          <span class="float-right"> {!! $books->links() !!}</span>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection