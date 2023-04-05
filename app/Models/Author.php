<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    /*
     * Author Observer
     *
     * event - deleting
     *
     * info - Relationship with books , delete on author delete
     *
     * EventServiceProvider
     */
    use HasFactory;

    protected $guarded = [];

    // the best more than this method is using AuthorObserver
//    protected static function boot(){
//        parent::boot();
//
//        static::deleting(function ($model){
//            $model->books()->delete();
//        });
//    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
