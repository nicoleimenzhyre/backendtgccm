<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MemberStatus;

class Member extends Model
{
    protected $fillable = [
        'first_name', 
        'middle_name',
        'last_name',
        'gender',
        'user_type'
    ];

     /**
     * Get the member_status associated with the member.
     */
    public function member_status()
    {
        return $this->hasOne('member_statuses');
    }
}
