<?php
use App\Models\Blog;
use App\Models\Setting;
if (!function_exists('global_setting')) {
  function global_setting()
  {
    $setting = Setting::latest()->first();
    return $setting;
  }
}