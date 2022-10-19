<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert()
    {

        // RAW
        $sql = DB::insert("INSERT INTO mahasiswa (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170146', 'Harvian Arga Adi Putra','laki-laki','Jl.Tarakarta No 9','Tarakota','2002-10-25','harvian-mhs.png',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('mahasiswa')->insert(
            [
                'npm' => '2010631170146',
                'nama' => 'Harvian Arga Adi Putra',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Tarakarta No.9',
                'tempat_lahir' => 'Tarakota',
                'tanggal_lahir' => '2002-25-10',
                'photo' => 'harvian-mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631170146',
                'nama' => 'Harvian Arga Adi Putra',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Tarakarta No.9',
                'tempat_lahir' => 'Tarakota',
                'tanggal_lahir' => '2002-25-10',
                'photo' => 'harvian-mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql2);
        return "Data berhasil diproses";
    }

    public function select()
    {

        // RAW
        $sql = DB::select("SELECT * FROM mahasiswa");
        dd($sql);

        // SB
        $sql2 = DB::table('mahasiswa')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Mahasiswa::all();
        dd($sql3);
    }

    public function update()
    {

        //RAW
        $sql = DB::update("UPDATE mahasiswa SET alamat='JL.Tarakarta No.9',updated_at=now() WHERE id=?", [1]);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswa')
            ->where('id', '1')
            ->update(
                [
                    'alamat' => 'JL.Tarakarta No.9',
                    'updated_at' => now()
                ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id', '1')->first()->update([
            'alamat' => 'JL.Tarakarta No.9',
            'updated_at' => now()
        ]);
        dd($sql2);
    }

    public function delete()
    {

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswa WHERE npm=?", ['2010631170146']);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswa')
            ->where('npm', '2010631170146')
            ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('mahasiswa', '2010631170146')->delete();
        dd($sql2);
    }
}
