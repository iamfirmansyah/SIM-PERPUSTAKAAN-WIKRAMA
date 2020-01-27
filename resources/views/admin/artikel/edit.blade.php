@extends('admin.layouts.app',['page'=>'Artikel'])


@section('content')

<form action="{{route('artikel.update',$artikels->id) }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  @method('PUT')
  <div class="col-xl-12 mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="card-header border-0 ">
        <div class="row align-items-center">
          <div class="col-md-9">
            <div class="form-group">
              <input type="text" name="judul" value="{{$artikels->judul}}" class="form-control form-control-sm "
                style="padding-top: 2.8%;padding-bottom: 2.8%; " placeholder="Judul postingan">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <button type="submit" class="btn btn-warning btn-sm"
                style="padding-top: 3%;padding-bottom: 3%;">&nbsp;Update&nbsp;</button>
              <a href="{{url('admin/artikel')}}" class="btn btn-secondary btn-sm "
                style="padding-top: 3%;padding-bottom: 3%;background-color: #F6F6F6">
                &nbsp;&nbsp;&nbsp;Tutup&nbsp;&nbsp;&nbsp;

              </a>
            </div>
          </div>
          <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->
        </div>
        <style>
          #cke_1_contents {
            height: 500px !important;
          }
        </style>
        <div class="row">
          <div class="col-md-9">
            <!-- <textarea class="ckeditor" id="ckedtor"></textarea> -->
            <textarea name="deskripsi" id="deskripsi" rows="4" cols="50">
                        {{$artikels->deskripsi}}
                      </textarea>
            <script>
              // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'deskripsi' );
            </script>
            <style>
              .p {
                font-size: 14px;
                font-weight: 600;
                color: #565656;
              }
            </style>
          </div>

          <div class="col-md-3">
            <div class="row border">
              <div class="col">
                <a href="#!" class="p">
                  <p class="p" style="padding-top: 5%;">Semua Entri</p>
                </a>
                <p class="p">Cover</p>
                <img src="{{asset('asset')}}/upload/artikel/{{ $artikels->cover }}" width="100" alt="">
                <input class="form-control mt-3 mb-4" type="file" name="cover" id="cover">
                <p class="p">Label</p>
                <select class="form-control form-control-sm" name="label" id="exampleFormControlSelect1">
                  <option value="Programmer">Programmer</option>
                  <option value="Front-end">Front-end</option>
                  <option value="Back-end">Back-end</option>
                  <option value="PHP">PHP</option>
                  <option value="CSS">CSS</option>
                </select>
                <p class="p mt-4">Author</p>
                <input type="text" style="" name="author" class="form-control form-control-sm"
                  value="{{$artikels->author}}">
                <br>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
</form>


@endsection