<?php

namespace App\Http\Controllers;

use App\Models\BodiZaUsimamizi;
use App\Models\Huduma;
use App\Models\Idara;
use App\Models\KamatiZaKudumu;
use App\Models\KuhusuSisi;
use App\Models\Machapisho;
use App\Models\Madiwani;
use App\Models\Matukio;
use App\Models\PichaVideo;
use App\Models\Slideshow;
use App\Models\TaarifaKwaVyombo;
use App\Models\Vitengo;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matukio = Matukio::whereStatus('1')->orderBy('created_at','DESC')->limit(10)->get();
        $slides = Slideshow::whereStatus('1')->get();
        $images = PichaVideo::where(['status'=>'1','type'=>'picha'])->limit(4)->get();
 
        return view('website.home',['matukio'=>$matukio,'slides'=>$slides,'images'=>$images]);
    }

    public function historia()
    {
        $data = KuhusuSisi::select('historia')->first();
        return view('website.historia', ['data' => $data->historia]);
    }

    public function wasifu()
    {
        $data = KuhusuSisi::select('wasifu')->first();
        return view('website.wasifu', ['data' => $data->wasifu]);
    }

    public function dira_dhamira()
    {
        $data = KuhusuSisi::select('dira_dhamira_mikakati')->first();
        return view('website.dira_dhamira', ['data' => $data->dira_dhamira_mikakati]);
    }
    public function muundo()
    {
        return view('website.muundo');
    }
    public function idara()
    {
        $data = Idara::whereStatus('1')->get();
        return view('website.idara', ['data' => $data]);
    }
    public function vitengo()
    {
        $data = Vitengo::whereStatus('1')->get();
        return view('website.vitengo', ['data' => $data]);
    }
    public function huduma()
    {
        $data = Huduma::whereStatus('1')->get();
        return view('website.huduma', ['data' => $data]);
    }
    public function machapisho()
    {
        $data = Machapisho::whereStatus('1')->get();
        return view('website.machapisho', ['data' => $data]);
    }
    public function madiwani()
    {
        $data = Madiwani::whereStatus('1')->orderBy('role','DESC')->get();
        return view('website.madiwani', ['data' => $data]);
    }
    public function kamati()
    {
        $data = KamatiZaKudumu::whereStatus('1')->get();
        return view('website.kamati', ['data' => $data]);
    }
    public function bodi()
    {
        $data = BodiZaUsimamizi::whereStatus('1')->get();
        return view('website.bodi', ['data' => $data]);
    }
    public function taarifa_kwa_vyombo()
    {
        $data = TaarifaKwaVyombo::whereStatus('1')->get();
        return view('website.taarifa_kwa_vyombo', ['data' => $data]);
    }
    public function picha()
    {
        $data = PichaVideo::where(['status'=>'1','type'=>'picha'])->get();
        return view('website.picha',['data' => $data]);
    }

    public function video()
    {
        $data = PichaVideo::where(['status'=>'1','type'=>'video'])->get();
        return view('website.video',['data' => $data]);
    }

    public function matukio()
    {
        $data = Matukio::whereStatus('1')->get();
        return view('website.matukio',['data' => $data]);
    }

    public function maelezo_zaidi($id)
    {
        $data = Matukio::where(['id'=>$id,'status'=>'1'])->first();
        return view('website.single_news',['data' => $data]);
    }
    public function mawasiliano()
    {
        return view('website.mawasiliano');
    }
}
