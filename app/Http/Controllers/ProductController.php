<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function CreateUnit(){
        $createunit = new UnitRumah; 
        $createunit->kavling = "Kavling";
        $createunit->blok = "blok";
        $createunit->no_rumah = "nomor rumah";
        $createunit->harga_rumah = "harga rumah";
        $createunit->luas_tanah = "luas tanah";
        $createunit->luas_bangunan = "luas bangunan";
        $createunit->save();
    }
    function DeleteUnit($id){
        DB::update('update unit set deleted = 1 where id = ?', [$id]);
        return redirect(deleteunit);
    }

}
