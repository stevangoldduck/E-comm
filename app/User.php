<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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
        'name', 'email', 'password','dob','address','phone','ktp','no_rek','bank','parent','balance','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function childs()
    {
        return $this->hasMany('App\User','parent','id');
    }
    public function countChildren($node = null)
    {
        $query = $this->childs();
        if (!empty($node))
        {
            $query = $query->where('parent', $node);
        }

        $count = 0;
        foreach ($query->get() as $child)
        {
            $count += $child->countChildren() + 1; // Plus 1 to count the direct child
            if ($count == 2)
            {
                break;
            }
        }
        return $count;
    }


    public function links()
    {
        return $this->hasMany('App\Shared');
    }

    public function trans()
    {
        return $this->hasMany('App\Transaction');
    }

    public function commissions()
    {
        return $this->hasMany('App\Commissions');
    }

    public function withdraws()
    {
        return $this->hasMany('App\Withdrawals');
    }
}
