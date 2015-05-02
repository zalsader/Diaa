<?php namespace App;
use App\User;

/**
 *  Admin Class, a subclass of \App\User
 */
class Admin extends User {

  protected $singleTableField = 'admin';

  function __construct($attributes = array())
  {
    parent::__construct($attributes);
    $admin_role = Role::whereName('admin')->first();
    $this->attachRole($admin_role);
  }
}
