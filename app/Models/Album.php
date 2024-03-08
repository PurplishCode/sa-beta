<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    
    protected $guarded = ["id"];

    protected $fillable = [
        "namaAlbum",
        "deskripsi",
        "tanggalDibuat",
        "userID",
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function fotos(): HasMany
    {
        return $this->hasMany(Foto::class);
    }
}
