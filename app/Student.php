<?php namespace App;
use App\User;

/**
 *  Student Class, a subclass of \App\User
 */
class Student extends User {

  protected $singleTableField = 'student';
  protected $persisted = ['educational_degree', 'parent_id', 'school'];

  function __construct($attributes = array())
  {
    parent::__construct($attributes);
    $student_role = Role::byName('student')->first();
    $this->attachRole($student_role);
  }

  public function parent()
  {
    return $this->belongsTo('App\Parent');
  }
}
