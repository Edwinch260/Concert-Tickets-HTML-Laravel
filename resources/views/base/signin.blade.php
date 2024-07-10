@extends('konser/konser')


@section('main')
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <div class="offset-md-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body" style="padding:20px">

                <form method="POST" action="<?php echo url("");?>/prosessignin">

                    <h3>Sign In</h3>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-weight:bold;font-size:20px">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="font-weight:bold;font-size:20px">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <br/>

                    <button class="btn btn-primary">Sign In</button>

                    Atau
                    <a class="btn btn-secondary" href="<?php echo url("register");?>">Register</a>

                </form>


            </div>
        </div>
    </div>
@endsection