<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Models;
class Cursus extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_cursus',
        'année',
        'titre_cursus',
        'description',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
