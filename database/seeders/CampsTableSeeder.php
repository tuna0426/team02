<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class CampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomr_or_b(){
        $r_or_b=
        [
            '赤色中軸',
            '碧藍航線'
        ];
        return $r_or_b[rand(0, count($r_or_b)-1)];
    }
    public function generateRandomcountry($length = 8) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomname($length = 4) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /*public function generateRandomcountry(){
        $country=
        [
            '美國',
            '日本',
            '德國',
            '英國',
            '中華民國',
            '蘇聯',
            '義大利',
            '法國'
        ];
        return $country[rand(0, count($country)-1)];
    }
    public function generateRandomname(){
        $name=
        [
            '白鷹',
            '重櫻',
            '鐵血',
            '皇家',
            '東煌',
            '北方聯合',
            '撒丁帝國',
            '自由鳶尾',
            '維希教廷'
        ];
        return $name[rand(0, count($name)-1)];
    }
    */
    public function run()
    {
        for($i=0;$i<7;$i++)
        {
            DB::table('camps')->insert
            ([
                //cid =>$cid
                'name' =>$this->generateRandomname(),
                'country' =>$this->generateRandomcountry(),
                'r_or_b' =>$this->generateRandomr_or_b()
            ]);
        }
    }

}