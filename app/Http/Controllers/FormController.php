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

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function processHuduma(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Huduma
                $huduma = new Huduma();
                $huduma->title = $req->title;
                $huduma->details = $req->details;
                $huduma->created_by = auth()->id(); // Assuming the authenticated user
                $huduma->status = '1'; // Default status
                $huduma->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Huduma imeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing Huduma
                $huduma = Huduma::findOrFail($req->id);
                $huduma->title = $req->title ?? $huduma->title;
                $huduma->details = $req->details ?? $huduma->details;
                $huduma->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Huduma imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $huduma = Huduma::findOrFail($req->id);
                $huduma->status = '0';
                $huduma->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Huduma imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }

    public function processChapisho(Request $req)
    {
        try {
            if ($req->action == 'add') {
                $types = 'required|mimes:pdf|max:10240';
                $req->validate([
                    'file' => $types, // Only allow PDF, max size: 10MB
                ]);
                if ($req->hasFile('file')) {
                    $file = $req->file('file');

                    // Generate a unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // Define the upload path
                    $path = $file->storeAs('uploads', $filename, 'public');
                }

                if ($path) {
                    // Create a new data
                    $huduma = new Machapisho();
                    $huduma->title = $req->title;
                    $huduma->details = $req->details;
                    $huduma->file = $path;
                    $huduma->created_by = auth()->id(); // Assuming the authenticated user
                    $huduma->status = '1'; // Default status
                    $huduma->save();

                    return redirect()->back()->with([
                        'action_success' => true,
                        'message' => 'Chapisho limeongezwa kikamilifu'
                    ]);
                } else {
                    return redirect()->back()->with([
                        'action_success' => false,
                        'message' => 'Imeshindwa kutuma chapisho'
                    ]);
                }
            } else if ($req->action == 'edit') {
                // Update an existing data
                $huduma = Machapisho::findOrFail($req->id);
                $huduma->title = $req->title ?? $huduma->title;
                $huduma->details = $req->details ?? $huduma->details;
                $huduma->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Chapisho limebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $huduma = Machapisho::findOrFail($req->id);
                $huduma->status = '0';
                $huduma->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Chapisho limefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae' . $e->getMessage()
            ]);
        }
    }

    public function processKuhusu(Request $req, $type)
    {
        try {

            if ($type == 'historia') {
                $data = KuhusuSisi::findOrFail($req->id);
                $data->historia = $req->historia ?? $data->historia;
                $data->save();
                return redirect()->route("admin-historia")->with([
                    'action_success' => true,
                    'message' => 'Umefanikiwa kubadili taarifa'
                ]);
            }
            else if ($type == 'wasifu') {
                $data = KuhusuSisi::findOrFail($req->id);
                $data->wasifu = $req->wasifu ?? $data->wasifu;
                $data->save();
                return redirect()->route("admin-wasifu")->with([
                    'action_success' => true,
                    'message' => 'Umefanikiwa kubadili taarifa'
                ]);
            }
            else if ($type == 'dira_dhamira_mikakati') {
                $data = KuhusuSisi::findOrFail($req->id);
                $data->dira_dhamira_mikakati = $req->dira_dhamira_mikakati ?? $data->dira_dhamira_mikakati;
                $data->save();
                return redirect()->route("admin-dira-dhamira-mikakati")->with([
                    'action_success' => true,
                    'message' => 'Umefanikiwa kubadili taarifa'
                ]);
            }else if($type=='mawasiliano'){
                $data = KuhusuSisi::findOrFail($req->id);
                $data->name = $req->name ?? $data->name;
                $data->abbr = $req->abbr ?? $data->abbr;
                $data->address = $req->address ?? $data->address;
                $data->phone1 = $req->phone1 ?? $data->phone1;
                $data->phone2 = $req->phone2 ?? $data->phone2;
                $data->email1 = $req->email1 ?? $data->email1;
                $data->email2 = $req->email2 ?? $data->email2;
                $data->pobox = $req->pobox ?? $data->pobox;
                $data->save();
                return redirect()->route("admin-mawasiliano")->with([
                    'action_success' => true,
                    'message' => 'Umefanikiwa kubadili taarifa'
                ]);
            }
            else if($type=='socials'){
                $data = KuhusuSisi::findOrFail($req->id);
                $data->facebook = $req->facebook ?? "";
                $data->twitter = $req->twitter ?? "";
                $data->instagram = $req->instagram ?? "";
                $data->telegram = $req->telegram ?? "";
                $data->youtube = $req->youtube ?? "";
                $data->linkedin = $req->linkedin ?? "";
                $data->save();
                return redirect()->route("admin-socials")->with([
                    'action_success' => true,
                    'message' => 'Umefanikiwa kubadili taarifa'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Taarifa haitambuliki'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae' . $e->getMessage()
            ]);
        }
    }


    public function processIdara(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Idara
                $data = new Idara();
                $data->title = $req->title;
                $data->details = $req->details;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Idara imeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing Idara
                $data = Idara::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Idara imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = Idara::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Idara imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }

    public function processVitengo(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Idara
                $data = new Vitengo();
                $data->title = $req->title;
                $data->details = $req->details;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Kitengo kimeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing Vitengo
                $data = Vitengo::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Kitengo kimebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = Vitengo::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Vitengo imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }

    public function processKamatiZaKudumu(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Idara
                $data = new KamatiZaKudumu();
                $data->title = $req->title;
                $data->details = $req->details;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Kamati imeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing KamatiZaKudumu
                $data = KamatiZaKudumu::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Kamati imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = KamatiZaKudumu::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'kamati imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }


    public function processBodiZaUsimamizi(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Idara
                $data = new BodiZaUsimamizi();
                $data->title = $req->title;
                $data->details = $req->details;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Bodi imeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing BodiZaUsimamizi
                $data = BodiZaUsimamizi::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Bodi imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = BodiZaUsimamizi::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'bodi imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }


    
    public function processMadiwani(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Idara
                $data = new Madiwani();
                $data->name = $req->name;
                $data->phone = $req->phone;
                $data->role = $req->role;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Diwani ameongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing Madiwani
                $data = Madiwani::findOrFail($req->id);
                $data->name = $req->name ?? $data->name;
                $data->phone = $req->phone ?? $data->phone;
                $data->role = $req->role ?? $data->role;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Diwani amebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = Madiwani::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Diwani amefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }



    public function processTaarifaKwaVyombo(Request $req)
    {
        try {
            if ($req->action == 'add') {
                // Create a new Taarifa
                $data = new TaarifaKwaVyombo();
                $data->title = $req->title;
                $data->details = $req->details;
                $data->created_by = auth()->id(); // Assuming the authenticated user
                $data->status = '1'; // Default status
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Taarifa imeongezwa kikamilifu'
                ]);
            } else if ($req->action == 'edit') {
                // Update an existing TaarifaKwaVyombo
                $data = TaarifaKwaVyombo::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Taarifa imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = TaarifaKwaVyombo::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Taarifa imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tatizo limetokea, tafadhali jaribu tena baadae'
            ]);
        }
    }

    public function processPichaVideo(Request $req)
    {
        try {
            if ($req->action == 'add') {

                $types = $req->type=='picha'?'required|mimes:jpeg,jpg,png,gif,svg|max:2048':'required|mimes:mp4,mov,avi,wmv|max:10240';
                $req->validate([
                    'file' => $types, // Only allow specific image formats, max size: 2MB
                ]);




                if ($req->hasFile('file')) {
                    $file = $req->file('file');

                    // Generate a unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // Define the upload path
                    $path = $file->storeAs('uploads', $filename, 'public');
                }

                if ($path) {
                    // Create a new data
                    $data = new PichaVideo();
                    $data->title = $req->title;
                    $data->details = $req->details;
                    $data->file = $path;
                    $data->type = $req->type;
                    $data->related = $req->related;
                    $data->created_by = auth()->id(); // Assuming the authenticated user
                    $data->status = '1'; // Default status
                    $data->save();

                    return redirect()->back()->with([
                        'action_success' => true,
                        'message' => 'Chapisho limeongezwa kikamilifu'
                    ]);
                } else {
                    return redirect()->back()->with([
                        'action_success' => false,
                        'message' => 'Imeshindwa kutuma chapisho'
                    ]);
                }
            } else if ($req->action == 'edit') {
                // Update an existing data
                $data = PichaVideo::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->related = $req->related;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Chapisho limebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = PichaVideo::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Chapisho limefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Warning ' . $e->getMessage()
            ]);
        }
    }
    
    public function processMatukio(Request $req)
    {
        try {
            if ($req->action == 'add') {

                $types = 'required|mimes:jpeg,jpg,png,gif,svg|max:2048';
                $req->validate([
                    'file' => $types, // Only allow specific image formats, max size: 2MB
                ]);




                if ($req->hasFile('file')) {
                    $file = $req->file('file');

                    // Generate a unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // Define the upload path
                    $path = $file->storeAs('uploads', $filename, 'public');
                }

                if ($path) {
                    // Create a new data
                    $data = new Matukio();
                    $data->title = $req->title;
                    $data->details = $req->details;
                    $data->file = $path;
                    $data->type = $req->type;
                    $data->created_by = auth()->id(); // Assuming the authenticated user
                    $data->status = '1'; // Default status
                    $data->save();

                    return redirect()->back()->with([
                        'action_success' => true,
                        'message' => 'Tukio limeongezwa kikamilifu'
                    ]);
                } else {
                    return redirect()->back()->with([
                        'action_success' => false,
                        'message' => 'Imeshindwa kutuma tukio'
                    ]);
                }
            } else if ($req->action == 'edit') {
                // Update an existing data
                $data = Matukio::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Tukio limebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = Matukio::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Tukio limefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Warning ' . $e->getMessage()
            ]);
        }
    }

    public function processSlideshow(Request $req)
    {
        try {
            if ($req->action == 'add') {

                $types = 'required|mimes:jpeg,jpg,png,gif,svg|max:2048';
                $req->validate([
                    'file' => $types, // Only allow specific image formats, max size: 2MB
                ]);




                if ($req->hasFile('file')) {
                    $file = $req->file('file');

                    // Generate a unique filename
                    $filename = time() . '_' . $file->getClientOriginalName();

                    // Define the upload path
                    $path = $file->storeAs('uploads', $filename, 'public');
                }

                if ($path) {
                    // Create a new data
                    $data = new Slideshow();
                    $data->title = $req->title;
                    $data->details = $req->details;
                    $data->file = $path;
                    $data->created_by = auth()->id(); // Assuming the authenticated user
                    $data->status = '1'; // Default status
                    $data->save();

                    return redirect()->back()->with([
                        'action_success' => true,
                        'message' => 'Slaidi imeongezwa kikamilifu'
                    ]);
                } else {
                    return redirect()->back()->with([
                        'action_success' => false,
                        'message' => 'Imeshindwa kutuma slaidi'
                    ]);
                }
            } else if ($req->action == 'edit') {
                // Update an existing data
                $data = Slideshow::findOrFail($req->id);
                $data->title = $req->title ?? $data->title;
                $data->details = $req->details ?? $data->details;
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Slaidi imebadilishwa kikamilifu'
                ]);
            } else if ($req->action == 'delete') {
                // Change the status to '0' instead of deleting
                $data = Slideshow::findOrFail($req->id);
                $data->status = '0';
                $data->save();

                return redirect()->back()->with([
                    'action_success' => true,
                    'message' => 'Slaidi imefutwa kikamilifu.'
                ]);
            }

            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Tafadhali fanya kitendo sahihi'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'action_success' => false,
                'message' => 'Warning ' . $e->getMessage()
            ]);
        }
    }
    
    

}
