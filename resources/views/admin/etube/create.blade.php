@extends('admin.layouts.app', ['page'=>'E-Tube'])



@section('content')


<div class="row">
  <div class="col-xl-12 mb-5 mb-xl-0">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col" style="margin-bottom: 2%">
            <h3 class="mb-0">Tambah Vidio Baru</<h3>
          </div>
          <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->

        </div>
        <!-- COntent -->
        <form action="{{route('etube.store')}}" method="POST" style="margin-left: 1.3%">
          {{csrf_field() }}
          @if($errors->count() > 0)
          <ul>
            @foreach($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach
          </ul>
          @endif

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Judul</label>
                <input type="text" name="judul" class="form-control form-control-sm" id="formGroupExampleInput" required
                  placeholder="">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Author</label>
                <input type="text" name="author" class="form-control form-control-sm" id="formGroupExampleInput"
                  required placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Link</label>
                <input type="text" name="link" class="form-control form-control-sm" id="formGroupExampleInput" required
                  placeholder="TEO7QcXZs7E">
                <span style="font-size: 12px;">Ex.https://www.youtube.com/<b>TEO7QcXZs7E</b></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Category</label>
                <select class="custom-select custom-select-sm mr-sm-2" name="id_kategori" required id="id_kategori">
                  <option selected disabled=""></option>
                  @foreach ($kategoris as $kategori)
                  <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <style>
            #cke_1_contents {
              height: 300px !important;
            }
          </style>
          <div class="row">
            <div class="col-md-12">
              <!-- <textarea class="ckeditor" id="ckedtor"></textarea> -->
              <label for="formGroupExampleInput" class="label">Description</label>
              <form action="">
                <textarea name="deskripsi" id="editor1" required rows="4" cols="50">

                      </textarea>
                <script>
                  // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'deskripsi' );
                </script>
              </form>
              <style>
                .p {
                  font-size: 14px;
                  font-weight: 600;
                  color: #565656;
                }
              </style>


              <div class="row" style="margin-top: 1%;">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary"
                    style="height: 40px;font-size: 13px;width: 100px">Submit</button>
                  <a href="{{url('admin/etube')}}" class="btn btn-danger"
                    style="height: 40px;font-size: 13px;width: 100px"> Reset</a>
                </div>
              </div>

            </div>




        </form>


      </div>
    </div>
  </div>
</div>

@endsection