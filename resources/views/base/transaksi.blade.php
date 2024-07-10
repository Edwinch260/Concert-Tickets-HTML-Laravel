@extends('konser/konser')


@section('main')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <div class="container">
        <div class="card card-stats">
            <div class="card-body" style="padding-top:20px">
                <h3>
                    History Transaksi Anda
                </h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Konser</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i=0;$i<count($transaksi);$i++)
                            {
                                $detail=$transaksi[$i];
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                                echo date("d-M-Y H:i",strtotime($detail->Tanggal));
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                               echo $detail->Nama;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $detail->Tipe;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo "Rp ".number_format($detail->Harga);
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $detail->Jumlah;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo "Rp ".number_format($detail->Harga*$detail->Jumlah);
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>


    </script>
@endsection