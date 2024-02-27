<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table ='comments';
    protected $fillable = [
        'photo_id',
        'user_id',
        'isi_komentar'
    ];
    public function photo(){
        // comments mengambil id photo
        return $this->belongsTo(photo::class);
    }
    public function user(){
        // comments mengambil id user
        return $this->belongsTo(User::class);
    }

}
