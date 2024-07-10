@extends('konser/konser')

@section('main')
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <div class="offset-md-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body" style="padding:20px">

                <form  enctype="multipart/form-data" method="POST" action="<?php echo url("");?>/simpankonser">
                    <h3>Tambah Konser</h3>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Nama</label>
                        <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Tanggal</label>
                        <input type="date" class="form-control" name="Tanggal" placeholder="Masukkan Tanggal"/>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Jam Mulai</label>
                        <input type="time" class="form-control" name="JamMulai" placeholder="Masukkan Jam Mulai"/>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Jam Berakhir</label>
                        <input type="time" class="form-control" name="JamBerakhir" placeholder="Masukkan Jam Berakhir"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file" required class="form-control" accept="image/*" onchange="previewFile(event,'output')" name="image"/>
                        <img id="output" style="margin-top:10px"/>
                    </div>
                    <br/>
                    <button class="btn btn-primary">Simpan</button>

                    @if(session()->has('warning'))
                        <div class="alert alert-danger">
                            {{ session()->get('warning') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection