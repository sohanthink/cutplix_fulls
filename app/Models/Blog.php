<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "title","slug","tags","writer_id","image","description","status","category"
    ] ;

    public function user()
    {
        return $this->BelongsTo(User::class,'writer_id','id');
    }
}
