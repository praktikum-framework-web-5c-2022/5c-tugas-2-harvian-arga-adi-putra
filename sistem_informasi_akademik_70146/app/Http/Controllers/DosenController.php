<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insert()
    {

        //RAW
        $sql = DB::insert("INSERT INTO dosen (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('0224078601', 'harvian Arga M.Kom','laki-laki','Jl.Ninjaku No.1','Karawang','2002-25-10','Harvian.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosen')->insert(
            [
                'nidn' => '0224078604',
                'nama' => 'Arip Solehudin',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Unsika No.4',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1986-05-20',
                'photo' => 'arip.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '0224078603',
                'nama' => 'Sarkosih Aljabari M.Pd',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Surkosa No.22',
                'tempat_lahir' => 'Washington Disney',
                'tanggal_lahir' => '1985-08-21',
                'photo' => 'sarkosih.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql2);
    }

    public function select()
    {

        //RAW
        $sql = DB::select("SELECT * FROM dosen");
        dd($sql);

        //SB
        $sql2 = DB::table('dosen')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update()
    {

        // RAW
        $sql = DB::update("UPDATE dosen SET alamat='JL.Ninjamu No.17',updated_at=now() WHERE id=?", [1]);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
            ->where('id', '3')
            ->update(
                [
                    'alamat' => 'JL.Ninjamu No.17',
                    'updated_at' => now(),
                ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id', '1')->first()->update([
            'alamat' => 'JL.Ninjamu No.17',
            'updated_at' => now(),
        ]);
        dd($sql2);
    }

    public function delete()
    {

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?", ['0224078601']);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
            ->where('nidn', '0224078601')
            ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn', '0224078601')->delete();
        dd($sql2);
    }
}
