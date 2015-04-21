<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

  public static function scopeByName($query, $name){
    return $query->where('name', '=',$name);
  }
}
