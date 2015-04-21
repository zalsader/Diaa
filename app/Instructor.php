<?php namespace App;
use App\User;

/**
 *  Instructor Class, a subclass of \App\User
 */
class Instructor extends User {

  protected $singleTableField = 'instructor';
  protected $persisted = ['educational_degree'];

  function __construct($attributes = array())
  {
    parent::__construct($attributes);
    $instructor_role = Role::byName('instructor')->first();
    $this->attachRole($instructor_role);
  }

  public function courses()
  {
    return $this->hasMany('App\Course');
  }
}
