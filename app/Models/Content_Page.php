<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Content_Page extends Model
{
    use HasFactory;
    protected $table = 'content_pages';
    protected $guarded = [''];
 
}
