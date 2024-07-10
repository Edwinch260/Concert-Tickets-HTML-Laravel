@extends('konser/konser')


@section('main')
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <div class="offset-md-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body" style="padding:20px">

                <form id="formData" method="POST" action="<?php echo url("");?>/prosesregister">

                    <h3>Register</h3>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Email</label>
                        <input required type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Nama</label>
                        <input required type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Telepon</label>
                        <input  type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nama">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="font-weight:bold;font-size:20px">Password</label>
                        <input required type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="font-weight:bold;font-size:20px">Konfirmasi Password</label>
                        <input required type="password" class="form-control" id="password2"  placeholder="Masukkan Konfirmasi Password">
                    </div>
                    <br/>

                    <button class="btn btn-primary">Register</button>

                    Atau
                    <a class="btn btn-secondary" href="<?php echo url("signin");?>">Sign In</a>






                </form>


            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var correct=false;
        $(document).ready(function()
        {
            //alert("w");
            $('#formData').on('submit',function()
            {
                if (!correct)
                {

                    var email=$("#email").val();
                    var password=$("#password").val();
                    var password2=$("#password2").val();
                    var nama=$("#nama").val();
                    var msg="";
                    if (password!=password2)
                    {
                        alert("Konfirmasinya harus sama");
                    }
                    else {

                        $.ajax({
                            type: 'GET',
                            url: "<?php echo url("checkemail");?>",
                            data: { email },
                            dataType: 'json',
                            success: function (data) {
                                if (data.result=="no")
                                {
                                    alert("email sudah digunakan");

                                }
                                else {
                                    correct=true;
                                    $("#formData").submit();
                                }
                            }
                        });
                    }


                    return false;
                }
                else {

                }
            });
        });

    </script>
@endsection