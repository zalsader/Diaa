<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'full_name', 'email', 'password', 'birth_date', 'gender', 'educational_degree', 'school'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function country()
	{
		return $this->belongsTo('\Webpatser\Countries', 'id', 'country_id');
	}

	public function courses()
	{
		return $this->belongsToMany('\App\Course');
	}

	public function children()
	{
		return $this->hasMany('\App\User', 'id', 'parent_id');
	}

	public function parent()
	{
		return $this->belongsTo('\App\User', 'id', 'parent_id');
	}

	public function scopeStudents($query)
	{
		return $query->whereHas('roles', function($q){
			return $q->whereName('student');
		});
	}

	public function scopeAdmins($query)
	{
		return $query->whereHas('roles', function($q){
			return $q->whereName('admin');
		});
	}

	public function scopeInstructors($query)
	{
		return $query->whereHas('roles', function($q){
			return $q->whereName('instructor');
		});
	}

	public function scopeParents($query)
	{
		return $query->whereHas('roles', function($q){
			return $q->whereName('parent');
		});
	}

	public function scopePlaysRole($query, $roles)
	{
		return $query->whereHas('roles', function($q) use($roles){
			return $q->whereIn('name', $roles);
		});
	}

	public function getExcerptAttribute()
	{
		return $this->about;// TODO
	}

}
