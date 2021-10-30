<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuA extends Model
{
    use HasFactory;
    protected $table = 'menu_a_s';
    protected $guarded = [''];
    protected $fillable = ['title','parent_id'];

    public function childs() {
        return $this->hasMany(MenuA::class,'parent_id','id') ;
    }
}
