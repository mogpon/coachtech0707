<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'content','created_at', 'updated_at'];
    public static $rules = array
    (
        'content' => 'required'
    );
    // public function getData()
    // {
    //     $txt = $this->created_at . ':' . $this->content;
    //     return $txt;
    // }
}
