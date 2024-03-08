<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LikeFoto extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $guarded = ["id"];

    protected $fillable = 
    ["fotoID",
    "userID"];

public function fotos(): BelongsTo
{
    return $this->belongsTo(Foto::class);
}

public function users(): BelongsTo
{
    return $this->belongsTo(User::class);
}

}
