<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
  public function comments()
  {

    return $this->hasMany(Comment::class);

  }

  public function user()
  {

    return $this->belongsTo(User::class);

  }

  public function addComment($body)
  {

    $post_id = $this->id;

    $user_id = auth()->user()->id;

    $this->comments()->create(compact('body','post_id','user_id'));

  }

  public function scopeFilter($query, $filters)
  {
    // this is not being used because it throws an error when
    // no month and year are passed to the query.

    // if($month = $filters['month']){

    //   $query->whereMonth('created_at',Carbon::parse($month)->month);

    // }

    // if($year = $filters['year']){

    //   $query->whereYear('created_at',Carbon::parse($year)->year);

    // }

  }

  public static function archives()
  {

    return static::selectRaw("extract(year from created_at) as year, trim(to_char(created_at, 'Month')) as month, count(*) published")
    ->groupBy('year','month')
    ->orderByRaw('min(created_at) desc')
    ->get()
    ->toArray();
    
  }


}
