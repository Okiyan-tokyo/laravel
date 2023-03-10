<?php

// /nowteam/teamname/team_to_sql

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teamname;
use App\Enums\PublishStateType;

class Nowlists23Controller extends Controller
{
    
    public function teamname_to_sql(){
        Teamname::truncate();
        $lists=[
            ["sapporo","札幌","J1", 215, 0,15],       
            ["kashima","鹿島","J1",183 ,24,64],       
            ["urawa","浦和","J1",231,0,43],      
            ["kashiwa","柏","J1",255,241,0],
            ["fc_tokyo","FC東京","J1",33,65,152],
            ["kawasaki","川崎","J1",53,160,217],
            ["yokohama_fm","横浜FM","J1",0,57,137],
            ["yokohama_fc","横浜FC","J1",0,160,228],
            ["shonan","湘南","J1",103,180,100],
            ["niigata","新潟","J1",255,102,0],
            ["nagoya","名古屋","J1",218,54,27],
            ["kyoto","京都","J1",116,0,107],
            ["g_osaka","G大阪","J1",9,63,166],
            ["c_osaka","C大阪","J1",212,0,105],
            ["kobe","神戸","J1",143,10,31],
            ["hiroshima","広島","J1",80,49,143],
            ["fukuoka","福岡","J1",0,64,127],
            ["tosu","鳥栖","J1",0,150,210],
            ["sendai","仙台","J2",252,204,0],
            ["akita","秋田","J2"],
            ["yamagata","山形","J2",15,34,139],
            ["iwaki","いわき","J2"],
            ["mito","水戸","J2",29,31,144],
            ["tochigi","栃木","J2",245,241,12],
            ["gunma","群馬","J2"],
            ["omiya","大宮","J2",245,105,0],
            ["chiba","千葉","J2",254,225,0],
            ["tokyo_v","東京V","J2",3,118,75],
            ["machida","町田","J2",0,35,106],
            ["kofu","甲府","J2",0,91,172],
            ["kanazawa","金沢","J2",229,0,9],
            ["shimizu","清水","J2",250,165,40],
            ["iwata","磐田","J2",110,157,211],
            ["fujieda","藤枝","J2"],
            ["okayama","岡山","J2",181,1,62],
            ["yamaguchi","山口","J2",235,94,2],
            ["tokushima","徳島","J2",17,17,131],
            ["nagasaki","長崎","J2",243,152,0],
            ["kumamoto","熊本","J2"],
            ["oita","大分","J2",20,11,140],
            ["hachinoe","八戸","J3"],
            ["iwate","岩手","J3"],
            ["fukushima","福島","J3"],
            ["ys_yokohama","YS横浜","J3"],
            ["sagamihara","相模原","J3"],
            ["matsumoto","松本","J3",2,61,29],
            ["toyama","富山","J3"],
            ["nagano","長野","J3"],
            ["numazu","沼津","J3"],
            ["gifu","岐阜","J3",0,64,23],
            ["fc_osaka","FC大阪","J3"],
            ["nara","奈良","J3",250,146,35],
            ["tottori","鳥取","J3"],
            ["sanuki","讃岐","J3"],
            ["ehime","愛媛","J3"],
            ["imabari","今治","J3"],
            ["kitakyushu","北九州","J3"],
            ["miyazaki","宮崎","J3"],
            ["kagoshima","鹿児島","J3",22,51,95],
            ["ryukyu","琉球","J3",152,7,71],
        ]; 
        foreach($lists as $list){
            $tnsets=new Teamname();
            $tnsets->eng_name=$list[0];
            $tnsets->jpn_name=$list[1];
            $tnsets->cate=$list[2];
            if(count($list)>3){
                $tnsets->red=$list[3];
                $tnsets->green=$list[4];
                $tnsets->blue=$list[5];
            }else{
                $tnsets->red=250;
                $tnsets->green=250;
                $tnsets->blue=250;
            }
            $tnsets->save();
        }
    }

}
