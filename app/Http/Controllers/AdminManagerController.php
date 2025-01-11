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

class AdminManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {

        $idara = Idara::whereStatus('1')->count();
        $vitengo = Vitengo::whereStatus('1')->count();
        $madiwani = Madiwani::whereStatus('1')->count();
        $matukio = Matukio::whereStatus('1')->count();
        return view('admin.home',['idara'=>$idara,'vitengo'=>$vitengo,'madiwani'=>$madiwani,'matukio'=>$matukio]);
    }
    public function profile()
    {
        return view('admin.pages.account.profile');
    }
    public function mawasiliano()
    {
        $data = KuhusuSisi::select('id', 'name','abbr','address','phone1','phone2','email1','email2','pobox')->first();
        return view('admin.pages.kuhusu-sisi.mawasiliano', ['data' => $data]);
    }

    public function socials()
    {
        $data = KuhusuSisi::select('id', 'facebook','twitter','instagram','linkedin','telegram','youtube')->first();
        return view('admin.pages.kuhusu-sisi.socials', ['data' => $data]);
    }
    public function historia()
    {
        $history = KuhusuSisi::select('id', 'historia')->first();
        return view('admin.pages.kuhusu-sisi.historia', ['history' => $history->historia, 'id' => $history->id]);
    }

    public function wasifu()
    {
        $wasifu = KuhusuSisi::select('id', 'wasifu')->first();
        return view('admin.pages.kuhusu-sisi.wasifu', ['wasifu' => $wasifu->wasifu, 'id' => $wasifu->id]);
    }

    public function DiraDhamiraMikakati()
    {
        $dira = KuhusuSisi::select('id', 'dira_dhamira_mikakati')->first();
        return view('admin.pages.kuhusu-sisi.dira', ['dira' => $dira->dira_dhamira_mikakati, 'id' => $dira->id]);
    }

    public function muundo()
    {
        return view('admin.pages.kuhusu-sisi.muundo');
    }

    public function idara()
    {
        $data = Idara::whereStatus('1')->get();
        return view('admin.pages.utawala.idara', ['data' => $data, 'count' => count($data)]);
    }
    public function vitengo()
    {
        $data = Vitengo::whereStatus('1')->get();
        return view('admin.pages.utawala.vitengo', ['data' => $data, 'count' => count($data)]);
    }

    public function huduma()
    {
        $huduma = Huduma::where('status', '1')->get();

        return view('admin.pages.huduma-zetu.view')->with(['data' => $huduma, 'count' => count($huduma)]);
    }

    public function machapisho()
    {
        $data = Machapisho::where('status', '1')->get();
        return view('admin.pages.machapisho.view')->with(['data' => $data, 'count' => count($data)]);
    }

    public function bodiZaUsimamizi()
    {
        $data = BodiZaUsimamizi::whereStatus('1')->get();
        return view('admin.pages.madiwani.bodi-za-usimamizi', ['data' => $data, 'count' => count($data)]);
    }

    public function kamatiZaKudumu()
    {
        $data = KamatiZaKudumu::whereStatus('1')->get();
        return view('admin.pages.madiwani.kamati-za-kudumu', ['data' => $data, 'count' => count($data)]);
    }

    public function orodhaYaMadiwani()
    {
        $data = Madiwani::whereStatus('1')->get();
        return view('admin.pages.madiwani.orodha-ya-madiwani', ['data' => $data, 'count' => count($data)]);
    }
    public function taarifaKwaVyombo()
    {
        $data = TaarifaKwaVyombo::whereStatus('1')->get();
        return view('admin.pages.kituo-cha-habari.taarifa-kwa-vyombo', ['data' => $data, 'count' => count($data)]);
    }
    public function picha()
    {
        $data = PichaVideo::where(['status'=>'1','type'=>'picha'])->get();
        return view('admin.pages.kituo-cha-habari.picha', ['data' => $data, 'count' => count($data)]);

    }
    public function video()
    {
        $data = PichaVideo::where(['status'=>'1','type'=>'video'])->get();
        return view('admin.pages.kituo-cha-habari.video', ['data' => $data, 'count' => count($data)]);
    }
    public function matukio()
    {
        $data = Matukio::where(['status'=>'1'])->get();
        return view('admin.pages.kituo-cha-habari.matukio', ['data' => $data, 'count' => count($data)]);
    }

    public function slideshow()
    {
        $data = Slideshow::where(['status'=>'1'])->get();
        return view('admin.pages.slideshow.view', ['data' => $data, 'count' => count($data)]);
    }
}
