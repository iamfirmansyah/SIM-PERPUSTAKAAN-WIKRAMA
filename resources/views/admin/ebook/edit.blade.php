@extends('admin.layouts.app',['page'=>'E-Book'])


@section('content')



<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col" style="margin-bottom: 2%">
                        <h3 class="mb-0">Edit Buku</h3>
                    </div>
                    <!--                 <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div> -->

                </div>
                <!-- COntent -->
                <form action="{{ route('ebook.update',$books->id) }}" method="POST" enctype="multipart/form-data"
                    style="margin-left: 1.3%">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Judul</label>
                                        <input type="text" required class="form-control form-control-sm"
                                            value="{{$books->judul}}" name="judul" id="formGroupExampleInput"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">ISBN</label>
                                        <input type="number" required class="form-control form-control-sm"
                                            value="{{$books->isbn}}" name="isbn" id="formGroupExampleInput"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Pengarang</label>
                                        <input type="text" required class="form-control form-control-sm"
                                            value="{{$books->pengarang}}" name="pengarang" id="formGroupExampleInput"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Penerbit</label>
                                        <input type="text" required class="form-control form-control-sm" name="penerbit"
                                            value="{{$books->penerbit}}" id="formGroupExampleInput" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Tahun Terbit</label>
                                        <input type="number" required class="form-control form-control-sm"
                                            value="{{$books->tahun_terbit}}" name="tahun_terbit"
                                            id="formGroupExampleInput" placeholder="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Jumlah Halaman</label>
                                        <input type="number" required class="form-control form-control-sm"
                                            value="{{$books->jumlah_halaman}}" name="jumlah_halaman"
                                            id="formGroupExampleInput" placeholder="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom: 2%;">
                                    <label for="formGroupExampleInput" class="label">Cover</label><br>
                                    <img id="preview_gambar" src="{{ asset('asset') }}/upload/ebook/{{$books->cover}}"
                                        class="rounded float-left border"
                                        style="margin-bottom: 2%;max-width: 200px;width: 200;">

                                    <input type="file" class="uploads form-control" name="cover"
                                        onchange="readURL(this);" value="{{$books->cover}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><br>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput" class="label">Link E-Book</label>
                                        <input type="text" name="link" value="{{$books->link}}"
                                            class="form-control form-control-sm" id="formGroupExampleInput"
                                            placeholder="" autocomplete="off">
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
                                    #cke_1_contents {
                                        height: 300px !important;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <textarea class="ckeditor" id="ckedtor"></textarea> -->
                                        <label for="formGroupExampleInput" class="label">Description</label>

                                        <textarea name="deskripsi" id="deskripsi" required rows="4" cols="50">
                        {{$books->deskripsi}}
                      </textarea>
                                        <script>
                                            // Replace the <textarea id="editor1"> with a CKEditor
                                            // instance, using default configuration.
                                            CKEDITOR.replace('deskripsi');

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
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-warning"
                                        style="height: 40px;font-size: 13px;width: 100px">UPDATE</button>
                                    <a href="{{url()->previous()}}" class="btn btn-danger"
                                        style="height: 40px;font-size: 13px;width: 100px"> Cancel</a>
                                </div>
                            </div>

                </form>


            </div>
        </div>
    </div>
</div>

@endsection