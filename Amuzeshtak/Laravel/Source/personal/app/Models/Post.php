<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $fillable=['category_id','user_id','title','slug','description','image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function isTag($tagID)
    {
      return in_array($tagID,$this->tags->pluck('id')->toArray());
    }
}
