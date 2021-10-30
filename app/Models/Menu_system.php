<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Menu_system extends Model
{
    use HasFactory;
    protected $table = 'menu_item';
    protected $guarded = [''];
}
