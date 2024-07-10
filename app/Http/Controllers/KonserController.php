<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
class KonserController extends Controller
{

    public function index (Request $request)
    {
        //$data["test"]="abc";
        //print_r($data);
        $request->session()->put("page","signin");
        $data=[];
        
        $temp=DB::select("SELECT DATE_FORMAT(Tanggal,'%d-%M-%Y') as tanggal2 FROM konser GROUP BY tanggal2 ORDER BY Tanggal ASC");
        
        for ($i=0;$i<count($temp);$i++)
        {
            $temp[$i]->konser=DB::select("SELECT * FROM konser WHERE DATE_FORMAT(Tanggal,'%d-%M-%Y')='".$temp[$i]->tanggal2."'");
        }
        
        $data["temp"]=$temp;
        //print_r($temp);
        return view('konser/index',$data);
    }

    public function konser(Request $request)
    {
        //variable array biasa
        $data=[];

        //select data dari database, pakai namanya DB::table
        $data["konser"]=DB::table("konser")->get();
        //$data["abc"]="def";
        //passingkan ke view dengan cara seperti ini
        return view("konser/konserdata",$data);
    }

    public function tambahkonser(Request $request)
    {
        $data=[];
        //$data["konser"]=DB::table("konser")->get();
        return view("konser/tambahkonser",$data);
    }

    public function updatekonser(Request $request) {
        $data=[];
        $data["konser"]=DB::table("konser")->where("ID",$request->input("id"))->first();

        $data["detail"]=DB::table("detailkonser")->where("KonserID",$request->input("id"))->get();
        return view("konser/updatekonser",$data);
    }

    public function deletekonser(Request $request)
    {
        DB::table("konser")->where("ID",$request->input("id"))->delete();
        return redirect("masterkonser")->with('warning', 'Konser berhasil dihapus');
    }

    public function simpantambahtiket(Request $request)
    {
        $id=$request->input("ID");
        $nama=$request->input("Nama");
        $jumlah=$request->input("Jumlah");
        $harga=$request->input('Harga');
        $iid=$request->input("IID");
        $detail=[];
        $detail["KonserID"]=$id;
        $detail["Tipe"]=$nama;
        $detail["Jumlah"]=$jumlah;
        $detail["Harga"]=$harga;

        if ($iid=="")
        {
            DB::table("detailkonser")->insert($detail);
        }
        else {
            DB::table("detailkonser")->where("ID",$iid)->update($detail);
        }
        return redirect("updatekonser?id=".$id)->with('warning', 'Tiket berhasil ditambah');
    }
    public function deletetiket(Request $request)
    {
        $dk=DB::table("detailkonser")->where("ID",$request->input("id"))->first();
        DB::table("detailkonser")->where("ID",$request->input("id"))->delete();
        return redirect("updatekonser?id=".$dk->KonserID)->with('warning', 'Tiket berhasil dihapus');
    }

    public function detailtiket(Request $request)
    {
        $detailTiket=DB::table("detailkonser")->where("ID",$request->input("id"))->first();
        echo json_encode($detailTiket);
    }

    public function simpankonser(Request $request)
    {
        $input=[];
        if ($request->image!=null)
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/konser/upload'), $imageName);
            $input["Gambar"]=$imageName;
            //print_r($input);
        }
        $kolom=["Deskripsi","JamMulai","Tanggal","JamBerakhir","Nama"];

        for ($i=0;$i<count($kolom);$i++)
        {
            $input[$kolom[$i]]=$request->input($kolom[$i]);
        }
        DB::table("konser")->insert($input);
        return redirect("masterk
        onser")->with('warning', 'Konser berhasil dibuat');
    }

    public function simpankonser2(Request $request)
    {
        $input=[];
        if ($request->image!=null)
        {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/konser/upload'), $imageName);
            $input["Gambar"]=$imageName;
            //print_r($input);
        }
        $kolom=["Deskripsi","JamMulai","Tanggal","JamBerakhir","Nama"];

        for ($i=0;$i<count($kolom);$i++)
        {
            $input[$kolom[$i]]=$request->input($kolom[$i]);
        }
        DB::table("konser")->where("ID",$request->input("ID"))->update($input);
        return redirect("masterkonser")->with('warning', 'Konser berhasil diupdate');
    }
}