<?php

namespace App\Models;
class Setting extends \Eloquent
{

    // Add your validation rules here
    public static $rules = [
        'main_name' => 'required',
        'email' => 'required|email',
        'name' => 'required',
        'logo' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|max:1000'

    ];

    protected $guarded = ['id'];
    protected $appends = ['logo_image_url'];

    public function getLangName()
    {
        return $this->belongsTo('App\Models\Language', 'locale', 'locale');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id', 'id');
    }

    public function getLogoImageUrlAttribute($size = 150, $d = 'mm')
    {
        if (is_null($this->logo)) {
            return $url = asset('assets/admin/layout/img/hrm-logo-full.png');
        }

        if (strpos($this->logo, 'https://') !== false) {
            return $image = str_replace('type=normal', 'type=large', $this->logo);
        }

        return asset_url('setting/logo/' . $this->logo);
    }
}
