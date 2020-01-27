@extends('admin.layouts.app',['page'=>'Tambah'])


@section('content')
    


<div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col" style="margin-bottom: 2%">
                  <h3 class="mb-0">Tambah Buku Baru</<h3>
                </div>
<!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->

            </div>
            <!-- COntent -->
          <form action="{{route('ebook.store')}}" method="POST"  enctype="multipart/form-data" style="margin-left: 1.3%">
            {{ csrf_field() }}
              @if ($errors->count() > 0)
                  <ul>
                      @foreach ($errors->all() as $item)
                          <li>{{ $item }}</li>
                      @endforeach
                  </ul>
              @endif
<!--           <div class="row">
            <div class="col-md-6" style="margin-bottom: 2%;">
              <img src="..." class="rounded float-left border" width="150" height="150" alt="..." style="margin-bottom: 2%">
              <input type="file" class="uploads form-control ">
            </div>
          </div> -->
           <div class="row">
             <div class="col-md-6">
               <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Judul</label>
                <input type="text" required class="form-control form-control-sm" name="judul" id="formGroupExampleInput" placeholder="">
              </div>
            </div>
           </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">ISBN</label>
                <input type="number" required class="form-control form-control-sm" name="isbn" id="formGroupExampleInput" placeholder="">
              </div>
            </div>
           </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Pengarang</label>
                <input type="text" required class="form-control form-control-sm" name="pengarang" id="formGroupExampleInput" placeholder="">
              </div>
            </div>
           </div>  
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Penerbit</label>
                <input type="text" required class="form-control form-control-sm" name="penerbit" id="formGroupExampleInput" placeholder="">
              </div>
            </div>
           </div>  
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Tahun Terbit</label>
                <input type="number" required class="form-control form-control-sm" name="tahun_terbit" id="formGroupExampleInput" placeholder="" autocomplete="off">
              </div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Jumlah Halaman</label>
                <input type="number" required class="form-control form-control-sm" name="jumlah_halaman" id="formGroupExampleInput" placeholder="" autocomplete="off">
              </div>
            </div>
           </div>
             </div>
             <div class="col-md-6">
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 2%;">
               <label for="formGroupExampleInput" class="label">Cover</label><br>
              <img  id="preview_gambar" src="https://www.sciphijournal.org/wp-content/themes/fox/images/placeholder.jpg" class="rounded float-left border"  style="margin-bottom: 2%;max-width: 200px;width: 200;">

              <input type="file"  class="uploads form-control" name="cover" onchange="readURL(this);">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"><br>
              <div class="form-group" hidden>
                <label hidden for="formGroupExampleInput" class="label">Link E-Book</label>
                <input hidden type="text" name="link" value="aw" class="form-control form-control-sm" id="formGroupExampleInput" placeholder="" autocomplete="off">
                <span style="font-size: 12px">ex.www.flash/ebook.com</span>
              </div>
            </div>
           </div>
             </div>
           </div>
           <div class="row">
            <div class="col-md-12">
              <div class="form-group">
               <style>
                  #cke_1_contents{
                    height: 300px!important;
                  }
                </style>
                <div class="row">
                  <div class="col-md-12">
                    <!-- <textarea class="ckeditor" id="ckedtor"></textarea> -->
                <label for="formGroupExampleInput" class="label">Description</label>
                    
                      <textarea name="deskripsi"  id="deskripsi"  required rows="4" cols="50">
    
                      </textarea>
                        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'deskripsi' );
            </script>
              </div>
            </div>
           </div> 
           <!-- <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formGroupExampleInput" class="label">Tugas</label>
                <select class="custom-select custom-select-sm mr-sm-2" id="inlineFormCustomSelect">
                  <option selected disabled=""></option>
                  <option value="1">Ada</option>
                  <option value="2">Tidak Ada</option>
                </select>
              </div>
            </div>
           </div>  -->


          <div class="row">
            <div class="col" >
              <button type="submit" class="btn btn-primary" style="height: 40px;font-size: 13px;width: 100px">Submit</button>
              <a href="{{url('admin/ebook')}}"  class="btn btn-danger" style="height: 40px;font-size: 13px;width: 100px">Reset</a>
            </div>
          </div>

</form>


          </div>
        </div>
      </div>
      </div>

      @endsection