<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomrank(){
        $ranks=[
            'N',
            'R',
            'SR',
            'SSR',
            'UR'
        ];return $ranks[rand(0, count($ranks)-1)];
    }
    public function generateRandomtype(){
        $types=[
            'DD',
            'BB',
            'CV',
            'CVL',
            'CL'
        ];
        return $types[rand(0, count($types)-1)];
    }
    public function generateRandomget(){
        $gets=[
            '活動建造',
            '常駐建造'
        ];
        return $gets[rand(0, count($gets)-1)];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            DB::table('characters')->insert([
                'name' =>$this->generateRandomString(),
                'cid' =>1,
                'rank' =>$this->generateRandomString(),
                'type' =>$this->generateRandomtype(),
                'get' =>$this->generateRandomget(),
                'rarity' =>$this->generateRandomrank(),
                'build_at' =>"06:30:00",
                'year' =>rand(1,1000),
                'displacement' =>rand(10000,50000),
            ]);
        }
        
        
    }
}
