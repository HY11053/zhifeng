<?php

namespace App\Console\Commands;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use EasyWeChat\Support\Log;
use Illuminate\Console\Command;

class baiduxgsc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baidu:xgsearch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->xgsearch();
    }
    public function xgsearch()
    {
        $articles=Archive::where('shorttitle','<>','')->pluck('shorttitle','id');
        foreach ($articles as $key=>$article){
            if(empty(Addonarticle::where('id',$key)->value('bdxg_search'))){
                $baiduurl='http://www.baidu.com/s?ie=utf-8&wd='.$article;
                $mbaiduurl='https://m.baidu.com/ssid=37eed2bbb8f6bfd3b6f8d2d13c2f/from=844b/s?word='.$article;
                $baiduinfos=$this->getTagData($this->Curls($baiduurl),'<div class="tt">相关搜索','</table></div>');
                preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#', $baiduinfos,$matches);
                $baiduinfos=$matches[2];
                $mbdinfos=$this->getTagData($this->Curls($mbaiduurl),'<div id="relativewords" class="se-relativewords"><div class="rw-title">相关搜索','</div></div><div id="page-rcol" class="se-page-rcol"><div id="reword" class="se-reword"><div class="rw-title">相关搜索</div>');
                preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#',$mbdinfos,$matches);
                $mbdinfos=$matches[2];
                if(!empty($baiduinfos) || !emptyArray($mbdinfos)){
                    $xgarrs=array_filter(array_unique(array_merge($baiduinfos,$mbdinfos)));
                    //dd($xgarrs);
                    $xgsearch='';
                    foreach ($xgarrs as $xgarr){
                        $xgsearch.=$xgarr.',';
                    }
                    Addonarticle::where('id',$key)->update(['bdxg_search'=>$xgsearch]);
                }
                \Log::info('success');

            }
            \Log::info('success');

        }



    }
    function Curls($url)
    {
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $rs=curl_exec($curl);
        curl_close($curl);
        return $rs;
    }
    /**
     * 数据截取
     * @param
     *
     * @return
     */
    function getTagData($str, $start, $end)
    {
        if ( $start == '' || $end == '' )
        {
            return;
        }
        $str = explode($start, $str);
        if (isset($str[1]))
        {
            $str = explode($end, $str[1]);
            return $str[0];
        }else{
            return '';
        }


    }
    function ImageInformation($content,$title,$fulltitle)
    {
        preg_match('/<img.+(title=\".*?\").+>/i',$content,$match);
        if (empty($match))
        {
            return $content;
        }
        preg_match('/<img.+(alt=\".*?\").+>/i',$content,$match2);
        //dd($match2);
        if (empty($match2))
        {
            return $content;
        }

        $patterns=array();
        $replacement=array();
        $patterns[0]=$match[1];
        $patterns[1]=$match2[1];
        $title=empty($title)?$fulltitle:$title;
        $replacement[0]='title="'.$title.'"';
        $replacement[1]='alt="'.$title.'"';
        //dd($patterns[0]);
        $content=str_replace($patterns[0],$replacement[0],$content);
        $content=str_replace($patterns[1],$replacement[1],$content);
        return $content;
    }
}
