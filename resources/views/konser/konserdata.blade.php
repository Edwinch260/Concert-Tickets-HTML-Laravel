@extends('konser/konser')
@section('main')
<main>
    <div class="container" style="margin-top:30px">
        <h3>Jadwal Konser</h3>
        <?php
            //echo $abc;
        ?>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th></th>
                    <th>Konser</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i=0;$i<count($konser);$i++)
                    {
                        ?>
                            <tr>
                                <td>
                                    <img style="height:100px" src="<?php echo url("konser/upload/".$konser[$i]->Gambar);?>">
                                </td>
                                <td>
                                   <?php
                                        echo $konser[$i]->Nama;
                                   ?>
                                </td>
                                <td>
                                    <?php
                                        echo date("d-M-Y",strtotime($konser[$i]->Tanggal));
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $konser[$i]->JamMulai;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo $konser[$i]->JamBerakhir;
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo url("updatekonser");?>?id=<?php echo $konser[$i]->ID;?>">Update</a>
                                    |
                                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus konser ini');" href="<?php echo url("deletekonser");?>?id=<?php echo $konser[$i]->ID;?>">Delete</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <a class="btn btn-secondary" href="<?php echo url("tambahkonser");?>">Tambah</a>
    </div>
</main>
@endsection