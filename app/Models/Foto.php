<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $fillable = [
"judulFoto",
"deskripsiFoto",
"tanggalDiunggah",
"lokasiFile",
"albumID",
"userID"
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
    public function album(): BelongsTo
    {
        return $this->belongsTo(Foto::class);
    }

    public function likeFoto(): HasMany
    {
        return $this->hasMany(likeFoto::class);
    }


    public function komentarFoto(): HasMany
    {
        return $this->hasMany(KomentarFoto::class);
    }

}
