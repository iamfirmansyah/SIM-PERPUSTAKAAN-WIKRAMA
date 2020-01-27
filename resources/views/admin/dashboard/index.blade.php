@extends('admin.layouts.app',['page'=>'Dashboard'])


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
            <h3 class="mb-0 pd-0">Email</h3>
          </div>
          <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
          <div class="col-md-1 mt-3">
            <div class="form-group">
              <div class="input-group ">
                <a href="{{ route('email') }}"> <button class="btn-sm btn float-right btn-primary">See All</button></a>
              </div>

            </div>
          </div>

        </div>
        <div class="table-responsive table-hover">
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
                .mouse {
                  color: black;
                }

                .mouse:hover {
                  cursor: pointer;

                }
              </style>
              <thead>
                <th>From</th>
                <th>Message</th>
                <th>Status</th>
                <th>Created At</th>
              </thead>
              @foreach($emails as $email)
              <tr class="mouse">
                <td>
                  <h5><a href="{{ route('email.show', $email->id) }}">{{$email->name}}</a></h5>
                </td>
                <td>
                  <p class="jdl-yt">{{ substr($email->subject, 0, 60) }}</p>
                  <p style="font-size: 12px" class="jdl-yt">{{substr($email->message, 0, 60)}} ...</p>
                </td>
                <td>
                  @if($email->status == 'read')
                  <span class="badge badge-primary">{{ $email->status }}</span>
                  @else
                  <span class="badge badge-success">{{ $email->status }}</span>
                  @endif
                </td>
                <td>
                  <h5>{{$email->created_at->format('d M, Y')}}</h5>
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