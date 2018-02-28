<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
    
    public function hasPermission($permission)
    {
        return $this->searchPermission($permission);
    }
    
    protected function searchPermission($permission_name)
    {
        $r = false;
        
        foreach ($this->permissions as $permission) {
            if ($permission->name == $permission_name) {
                $r = true;
            }
        }
        
        return $r;
    }
}
