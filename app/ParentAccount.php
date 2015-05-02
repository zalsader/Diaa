<?php namespace App;
use App\User;

/**
 *  ParentAccount Class, a subclass of \App\User
 */
class ParentAccount extends User {

  protected $singleTableField = 'parent_account';
  protected $persisted = ['educational_degree'];

  function __construct($attributes = array())
  {
    parent::__construct($attributes);
    $parentAccount_role = Role::whereName('parentAccount')->first();
    $this->attachRole($parentAccount_role);
  }

  public function students()
  {
    return $this->hasMany('App\Student');
  }
}
