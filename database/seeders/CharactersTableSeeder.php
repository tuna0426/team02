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
    public function generateRandomrank($length = 1) 
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) 
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)].'級';
        }
        return $randomString;
    }
    public function generateRandomrarity(){
        $rarity=[
            'N',#普通
            'R',#稀有
            'SR',#超稀有
            'SSR',#超激稀有
            'UR'#傳奇稀有
        ];
        return $rarity[rand(0, count($rarity)-1)];
    }
    public function generateRandomtype(){
        $types=[
            'DD',#驅逐
            'BB',#戰列
            'CV',#空母
            'CVL',#輕空母
            'CL',#輕巡
            'CA',#重巡
            'SS',#潛艦
            'BC',#戰巡
            'SSV',#潛母
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

    public function generateRandomcid()
    {
        $cid=rand(1,8);
        return $cid;
    }
    public function generateRandombuild_at()
    {
        $build_at = rand(0, 9) . ":" . rand(0, 59) . ":" . rand(0, 59); 
        return $build_at;
    }
    

    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<31;$i++){
            DB::table('characters')->insert([
                'name' =>$this->generateRandomString(),
                'cid' =>$this->generateRandomcid(),
                'rank' =>$this->generateRandomrank(),
                'type' =>$this->generateRandomtype(),
                'get' =>$this->generateRandomget(),
                'rarity' =>$this->generateRandomrarity(),
                'build_at' =>$this->generateRandombuild_at(),
                'year' =>rand(1,500),
                'displacement' =>rand(10000,50000),
            ]);
        }
        
        
    }
}
