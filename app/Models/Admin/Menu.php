<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class Menu extends Model
{
    protected $table = "menu";
    protected $fillable = ['nombre','url','icono'];
    protected $guardeb = ['id'];
}
