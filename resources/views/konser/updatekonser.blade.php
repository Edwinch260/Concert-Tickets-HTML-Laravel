@extends('konser/konser')


@section('main')
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <div class="offset-md-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body" style="padding:20px">

                <form  enctype="multipart/form-data" method="POST" action="<?php echo url("");?>/simpankonser2">
                    <input type="hidden" name="ID" value="<?php echo $konser->ID;?>">
                    <h3>Update Konser</h3>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Nama</label>
                        <input type="text" value="<?php echo $konser->Nama;?>" class="form-control" name="Nama" placeholder="Masukkan Nama">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi" placeholder="Masukkan Deskripsi"><?php echo $konser->Deskripsi;?></textarea>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Tanggal</label>
                        <input type="date" value="<?php echo $konser->Tanggal;?>" class="form-control" name="Tanggal" placeholder="Masukkan Tanggal"/>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Jam Mulai</label>
                        <input type="time" value="<?php echo $konser->JamMulai;?>" class="form-control" name="JamMulai" placeholder="Masukkan Jam Mulai"/>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Jam Berakhir</label>
                        <input type="time" value="<?php echo $konser->JamBerakhir;?>" class="form-control" name="JamBerakhir" placeholder="Masukkan Jam Berakhir"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file"  class="form-control" accept="image/*" onchange="previewFile(event,'output')" name="image"/>
                        <img id="output" src="<?php echo url("konser/upload/".$konser->Gambar);?>" style="margin-top:10px"/>
                    </div>
                    <br/>
                    <button class="btn btn-primary">Simpan</button>
                    <br/><br/>

                    <h3>Jenis Kursi</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tipe</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for ($i=0;$i<count($detail);$i++)
                                {
                                    ?>

                                        <tr>
                                            <td>
                                                <?php
                                                    echo $detail[$i]->Tipe;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $detail[$i]->Jumlah;
                                                ?>
                                            </td>
                                            <td style="text-align:right">
                                                <?php
                                                    echo number_format($detail[$i]->Harga);
                                                ?>
                                            </td>
                                            <td>
                                                <button onclick="updatetiket(<?php echo $detail[$i]->ID;?>);" type="button" class="btn btn-secondary">Update</button>
                                                <a onclick="return confirm('Apakah anda yakin akan menghapus tiket ini?');" href="<?php echo url("deletetiket?id=".$detail[$i]->ID);?>" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                if (count($detail)<=0)
                                {
                                    ?>
                                        <tr>
                                            <td colspan=4>
                                                Belum ada detail tiket
                                            </td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <br/>
                    <button class="btn btn-primary" onclick="tambah();" type="button">Tambah Tiket</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="mdl" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo url("simpantambahtiket");?>">
                    <div class="modal-header">
                        <h5 id="TTitle" class="modal-title">Tambah Tiket</h5>

                    </div>
                    <div class="modal-body">
                            @csrf
                            <input type="hidden" name="ID" value="<?php echo $konser->ID;?>"/>
                            <input type="hidden" name="IID" id="IID" value=""/>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Tipe</label>
                                <input type="text" id="Nama" class="form-control" name="Nama" placeholder="Masukkan Tipe"/>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Jumlah</label>
                                <input type="text" id="Jumlah" class="form-control" name="Jumlah" placeholder="Masukkan Jumlah"/>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Harga</label>
                                <input type="number" id="Harga" class="form-control" name="Harga" placeholder="Masukkan Harga"/>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-primary">Simpan</button>
                        <button type="button" onclick="hidemodal();" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        function updatetiket(id)
        {
            //alert("aa");

            console.log("id",id);
            $.ajax({
                type: 'GET',
                url: "<?php echo url("detailtiket");?>",
                data: { id },
                dataType: 'json',
                success: function (data) {
                    $("#TTitle").html("Update Tiket");
                    $("#Nama").val(data.Tipe);
                    $("#Jumlah").val(data.Jumlah);
                    $("#Harga").val(data.Harga);
                    $("#IID").val(data.ID);
                    $("#mdl").modal("show");

                    //console.log("data",data);
                }
            });
        }
        function deletetetiket(id)
        {

        }
        function hidemodal()
        {
            $("#mdl").modal("hide");
        }
        function tambah()
        {
            $("#TTitle").html("Tambah Tiket");
            $("#Nama").val("");
            $("#Jumlah").val("");
            $("#Harga").val("");
            $("#IID").val("");
            $("#mdl").modal("show");
        }
        //alert("abc");
    </script>
@endsection