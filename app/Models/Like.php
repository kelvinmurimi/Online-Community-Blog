<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id'
    ];

}
