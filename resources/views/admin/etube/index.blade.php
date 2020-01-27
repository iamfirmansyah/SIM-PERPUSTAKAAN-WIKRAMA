@extends('admin.layouts.app',['page'=>'E-Tube'])


@section('cardStat')
@include('admin.layouts.cardstat')
@endsection

@section('content')
<div class="row">
  <div class="col-xl-12 mb-5 mb-xl-0">
    <div class="card bg-secondary shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <!--      <a href="add_artikel.html"> <button style="padding: 6.5px;padding-right: 12px;padding-left: 12px" class="btn-sm btn btn-primary">Entri baru</button></a> -->
            <h2>E-Tube Learning</h2>
          </div>
          <!--                 <div class="col text-right">
          <a href="#!" class="btn btn-sm btn-primary">See all</a>
        </div> -->
          <div class="col-md-1 mt-3" style="padding-right: 10%;">
            <div class="form-group">
              <div class="input-group ">
                <a href="{{url('admin/etube/create')}}" class="btn btn-sm btn-primary">Add E-Tube</a>
              </div>
            </div>
          </div>

        </div>
        <div class=" table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-hover table-flush">
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
            <thead class="thead">
              <tr>
                <th scope="col" width="">Vidio</th>
                <th> </th>
                <th scope="col">Author</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>

              </tr>
            </thead>

            <tbody>

              <style>
                .mouse {
                  color: black;
                }

                .mouse:hover {
                  cursor: pointer;

                }

                .jdl-yt {
                  font-size: 15px;
                  line-height: 20px;
                  font-family: 'Roboto', 'Noto', sans-serif;
                  font-weight: 400;
                }
              </style>
              @foreach ($tubes as $tube)


              <tr>
                <td>
                  <img src="https://img.youtube.com/vi/{{ $tube->link }}/mqdefault.jpg
                    " width="120px" height="68px" alt="">
                </td>
                <td>
                  <p class="jdl-yt">{{ $tube->judul }}</p>
                  <p style="font-size: 12px" class="jdl-yt">{!! substr($tube->deskripsi , 0,50) !!} ...</p>
                </td>
                <td>
                  {{ $tube->author }}
                </td>
                <td>
                  {{ $tube->created_at->formatLocalized('%d %B, %Y') }}

                </td>
                <td>
                  <div class="btn-group">
                    <a href="" class="btn btn-sm btn-primary  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Action</a>
                    <div class="dropdown-menu" ria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" href="etube/{{$tube->id}}/edit" style="font-size: 12px">Edit</a>
                      <a class="dropdown-item" href="/etube/{{$tube->id}}/delete" style="font-size: 12px">Delete</a>
                    </div>
                  </div>
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