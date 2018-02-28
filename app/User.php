<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'family_name', 'email', 'gender', 'birthdate', 'id_argentina'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function roles()
    {
//        In addition to customizing the name of the joining table, you may also customize the column
//        names of the keys on the table by passing additional arguments to the belongsToMany
//        method. The third argument is the foreign key name of the model on which you are defining the
//        relationship, while the fourth argument is the foreign key name of the model that you are
//        joining to:
//          return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
        
        return $this->belongsToMany('App\Role');
    }
    
    public function isSudo()
    {
        return $this->searchRole('sudo');
    }
    
    public function isAdmin()
    {
        return $this->searchRole('admin');
    }
    
    public function hasRole($role_name)
    {
        return $this->searchRole($role_name);
    }
    
    public function hasPermission($permission)
    {
        $r = false;
        
        foreach ($this->roles as $role) {
            if ($role->hasPermission($permission)) {
                $r = true;
            }
        }
        
        return $r;
    }
    
    protected function searchRole($role_name)
    {
        $r = false;
        
        foreach ($this->roles as $role) {
            if ($role->name == $role_name) {
                $r = true;
            }
        }
        
        return $r;
    }
}
