<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

//use Illuminate\Support\Facades\DB;

class CategoryAdsSeeder extends Seeder {
    public function run()
    {
        DB::table('category_ads')->delete();
        $category = app()->make('App\CategoryAds');
        $category->fill(['name' => 'Komputer & Gadget']);
        $category->save();
    }
}