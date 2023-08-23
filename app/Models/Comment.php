<?php
declare(strict_types=1);

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','article_id','content'];

    public function article(){
        return $this->belongsTo(Article::class);
    }



}

