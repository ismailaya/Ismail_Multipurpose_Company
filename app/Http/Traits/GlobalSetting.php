<?php

namespace App\Http\Traits;

use App\Models\KuhusuSisi;

trait GlobalSetting
{
    public function siteSettings()
    {
        $about = KuhusuSisi::select('name', 'address', 'phone1', 'phone1', 'email1', 'email2','working_hour','pobox','logo','facebook','twitter','instagram','telegram','youtube','linkedin')->first();
        return ['about' => $about];
    }
}
