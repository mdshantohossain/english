<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    use HasFactory;

    private static $manage;

    public static function newHotel($request)
    {
        self::$manage = new Manage();
        self::$manage->name = $request->name;
        self::$manage->ability = $request->ability;
        self::$manage->residential_fee = $request->residential_fee;
        self::$manage->non_residential_fee = $request->non_residential_fee;
        self::$manage->save();
    }

    public static function updateHotel($request, $id)
    {
        self::$manage = Manage::find($id);
        self::$manage->name = $request->name;
        self::$manage->ability = $request->ability;
        self::$manage->residential_fee = $request->residential_fee;
        self::$manage->non_residential_fee = $request->non_residential_fee;
        self::$manage->save();
    }

    public static function deleteHotel($id)
    {
        self::$manage = Manage::find($id);
        self::$manage->delete();
    }
}
