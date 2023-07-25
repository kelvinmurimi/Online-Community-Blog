<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'min_to_read', 'excerpt', 'image', 'is_published', 'body','views'
    ];

    //make slug default instead of id
    public function getRouteKeyName(){
        return 'slug';
    }
    public function title(){
        return $this->title;
    }
    public function image(){
        return $this->image;
    }
    public function slug(){
        return $this->slug;
    }
    public function min_to_read(){
        return $this->min_to_read;
    }
    public function excerpt(){
        return $this->excerpt;
    }
    public function body(){
        return $this->body;
    }
    public function created_at(){
        return $this->created_at;
    }

}
