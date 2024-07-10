<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
class MainController extends Controller
{

    public function signin(Request $request)
    {
        $request->session()->put("page","signin");
        $data=[];
        return view('base/signin',$data);
    }

    public function register(Request $request)
    {
        $request->session()->put("page","register");
        $data=[];
        return view('base/register',$data);
    }

    public function checkemail(Request $request)
    {
        $email=$request->input("email");
        $hasil="no";
        $upengguna=DB::table("pengguna")->where("email",$email)->first();
        if ($upengguna==null)
        {
            $hasil="ok";
        }
        echo json_encode(["result"=>$hasil]);
    }

    public function home (Request $request)
    {
        //$data["test"]="abc";
        //print_r($data);
        $request->session()->put("page","signin");
        $data=[];

        return view('base/home',$data);

    }

    public function transaksi (Request $request)
    {
        //$data["test"]="abc";
        //print_r($data);
        $request->session()->put("page","transaksi");
        $data=[];



        $user=$request->session()->get("user");
        $data["transaksi"]=DB::table("pesanan")
                           ->join("detailkonser","pesanan.DetailKonserID","detailkonser.ID")
                           ->join("konser","detailkonser.KonserID","konser.ID")
                           ->where("pesanan.PenggunaEmail",$user->email)
                           ->select("detailkonser.Tipe","detailkonser.Jumlah","detailkonser.Harga","konser.Nama","pesanan.*")
                           ->get();

        return view('base/transaksi',$data);

    }

    public function transaksiadmin (Request $request)
    {
        //$data["test"]="abc";
        //print_r($data);
        $request->session()->put("page","transaksi");
        $data=[];



        //$user=$request->session()->get("user");
        $data["transaksi"]=DB::table("pesanan")
                           ->join("detailkonser","pesanan.DetailKonserID","detailkonser.ID")
                           ->join("konser","detailkonser.KonserID","konser.ID")
                           ->join("pengguna","pesanan.PenggunaEmail","pengguna.email")
                           ->select("detailkonser.Tipe","detailkonser.Jumlah","detailkonser.Harga","konser.Nama","pesanan.*","pengguna.email","pengguna.nama","pengguna.telepon")
                           ->get();

        return view('base/transaksiadmin',$data);

    }


    public function pilihtiket(Request $request)
    {
        $id=$request->input("id");
        $jumlah=$request->input("jumlah");
        $user=$request->session()->get("user");

        //print_r($user);
        //echo "<br/>";
        //echo $jumlah;
        //echo "<br/>";
        //echo $id;

        DB::table("pesanan")->insert(["PenggunaEmail"=>$user->email,"DetailKonserID"=>$id,"Jumlah"=>$jumlah,"Tanggal"=>date("Y-m-d H:i:s")]);
        return redirect("transaksi")->with('warning', 'Pesanan berhasil diajukan');
    }
    public function prosescheckemail(Request $request)
    {
        $staff=new Staff();
        $user=$staff::where("email",$request->input("email"))->first();
        if ($user==null)
        {
            echo json_encode(["result"=>"not_found"]);
        }
        else {
            $request->session()->put("user",$user);
            echo json_encode(["result"=>"ok","user"=>$user]);
        }
    }

    public function prosessignin(Request $request)
    {

        $user=DB::table("pengguna")->where("password",$request->input("password"))->where("email",$request->input("email"))->first();


        if ($user==null)
        {
            return redirect("signin")->with('warning', 'Login gagal');;
        }
        else {
            $request->session()->put("user",$user);
            if ($user->role=="Admin")
            {
                return redirect("masterkonser");;
            }
            else{
                return redirect("homeuser");
            }

        }
    }

    public function homeuser(Request $request)
    {
        $data=[];

        $konser=DB::table("konser")->get();

        for ($i=0;$i<count($konser);$i++)
        {
            $detail=DB::table("detailkonser")->where("KonserID",$konser[$i]->ID)->get();

            for ($j=0;$j<count($detail);$j++)
            {
                $dp=DB::table("pesanan")->where("DetailKonserID",$detail[$j]->ID)->get();

                for ($k=0;$k<count($dp);$k++)
                {
                    $detail[$j]->Jumlah=$detail[$j]->Jumlah-$dp[$k]->Jumlah;
                }
            }
            $konser[$i]->detail=$detail;
        }
        $data["konser"]=$konser;
        return view('base/homeuser',$data);
    }

    public function prosesregister(Request $request)
    {

        $email=$request->input("email");
        $nama=$request->input("nama");
        $telepon=$request->input("telepon");
        $alamat=$request->input("alamat");
        $password=$request->input("password");

        $dinput=["email"=>$email,"nama"=>$nama,"password"=>$password,"alamat"=>$alamat,"telepon"=>$telepon];
        DB::table("pengguna")->insert($dinput);
        return redirect("signin")->with('warning', 'Register berhasil');
    }

    public function signout(Request $request)
    {
        $request->session()->flush();
        return redirect("signin")->with('warning', 'Logout berhasil');
    }

}