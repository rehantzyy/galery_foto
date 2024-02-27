<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{

    use HasFactory;
    protected $table ='photos';
    protected $fillable = [
        'judul_foto',
        'deskripsi',
        'lokasi_file',
        'album_id',
        'user_id',
    ];
    /**
     * Get the user that owns the photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album(){
        // photo mengambil id album
        return $this->belongsTo(albums::class,'album_id');
    }
    public function user()
    {
        // photo mengambil id user
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        // photo memiliki banyak like
        return $this->hasMany(likes::class, 'photo_id');
    }
    public function comments(){
        // photo memiliki banyak comments
        return $this->hasMany(comments::class, 'photo_id');
    }
}
