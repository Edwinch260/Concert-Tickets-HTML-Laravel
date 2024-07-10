@extends('konser/konser')


@section('main')
    <style>
        .ttitle{
            font-weight:bold;
        }
    </style>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <div class="container">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body" style="padding-top:20px">
                    <div class="row">
                        <?php
                            for ($i=0;$i<count($konser);$i++)
                            {
                                ?>
                                    <div class="col-md-4 card">
                                        <div class="card-body">
                                            <div style="text-align:center">
                                                <img style="height:200px" src="<?php echo url("konser/upload/".$konser[$i]->Gambar);?>">
                                            </div>
                                            <br/>
                                            <div style="text-align:center;font-weight:bold"><?php echo $konser[$i]->Nama;?></div>
                                            <p>
                                                <?php
                                                    echo $konser[$i]->Deskripsi;
                                                ?>
                                            </p>
                                            <br/>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td class="ttitle">Tanggal</td>
                                                    <td>
                                                        <?php
                                                            echo date("d-M-Y",strtotime($konser[$i]->Tanggal));
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ttitle">Jam Mulai</td>
                                                    <td>
                                                        <?php
                                                            echo $konser[$i]->JamMulai;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ttitle">Jam Selesai</td>
                                                    <td>
                                                        <?php
                                                            echo $konser[$i]->JamBerakhir;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center" colspan=2>
                                                        <button class="btn btn-primary" onclick="pesanTiket(<?php echo  $konser[$i]->ID;?>);">Pesan Tiket</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="mdl" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo url("simpantambahtiket");?>">
                    <div class="modal-header">
                        <h5 id="TTitle" class="modal-title">Pilih Kursi</h5>


                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tipe Kursi</th>
                                    <th>Kuota</th>
                                    <th>Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="bodyPesanan">

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="hidemodal();" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        var konser=<?php echo json_encode($konser);?>;

        var dkonser=null;
        function pilihTiket(id)
        {
            var dtiket=null;
            for (var i=0;i<dkonser.detail.length;i++)
            {
                if (dkonser.detail[i].ID==id)
                {
                    dtiket=dkonser.detail[i];
                }
            }
            let jumlah = prompt("Masukkan jumlah pembelian untuk tiket "+dtiket.Tipe+", dengan harga "+toMoney(dtiket.Harga), "");

            if (jumlah != null && jumlah!="") {
                if (isNumber(jumlah))
                {
                    jumlah=jumlah*1;
                    if (jumlah>dtiket.Jumlah)
                    {
                        alert("Maksimal pemesanan adalah "+dtiket.Jumlah);
                    }
                    else {
                        window.location="<?php echo url("pilihtiket?id=");?>"+id+"&jumlah="+jumlah;
                    }

                }
                else {
                    alert("Jumlah harus dalam bentuk angka");
                }

            }
            else {

            }
        }
        function isNumber(str) {
           return !isNaN(str);
        }
        function pesanTiket(id)
        {
            dkonser=null;
            for (var i=0;i<konser.length;i++)
            {
                if (konser[i].ID==id)
                {
                    dkonser=konser[i];
                }
            }

            console.log('detail',dkonser.detail);
            var thtml="";
            for (var i=0;i<dkonser.detail.length;i++)
            {
                thtml=thtml+"<tr>";
                thtml=thtml+"<td>"+dkonser.detail[i].Tipe+"</td>";
                thtml=thtml+"<td>"+dkonser.detail[i].Jumlah+"</td>";
                thtml=thtml+"<td style='text-align:right'>"+toMoney(dkonser.detail[i].Harga)+"</td>";
                thtml=thtml+"<td><button class='btn btn-primary' type='button' onclick='pilihTiket("+dkonser.detail[i].ID+")'>Pesan</button></td>";
                thtml=thtml+"</tr>";
            }
            console.log("html",thtml);
            $("#bodyPesanan").html(thtml);
            $("#mdl").modal("show");
        }
        function hidemodal()
        {
            $("#mdl").modal("hide");
        }

    </script>
@endsection