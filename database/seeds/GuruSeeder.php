<?php

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	//sample guru inti
    	$user1 = User::create(['name'=>'cindi oktaviani','email'=>'cindioktaviani@gmail.com','password'=>'oktavia']);


        //sample guru
        $guru1 = Guru::create(['nip'=>'11','status'=>'guru','jabatan'=>'guru pelajar','pendidikan'=>'s1','jk'=>'perempuan','alamat'=>'citamiang','ttl'=>'1998-04-03','mulai_kerja'=>'2017','mapel'=>'ipa','no_tlp'='0892345462','masa_mengajar'=>'5','kelas'=>'XII','tahun_ajaran'=>'2017/2018','periode'=>'1','user_id'=>$user1->id]);
    }
}
