<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $guarded = [];

  public function profileImage()
  {
    return ($this->img) ? $this->img : "https://uwosh.edu/facilities/wp-content/uploads/sites/105/2018/09/no-photo.png";
  }

  //A profile has many followers.
  public function followers()
  {
    return $this->belongsToMany(User::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}
