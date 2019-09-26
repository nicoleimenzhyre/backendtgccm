<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class MemberStatus extends Model
{
    protected $table = "member_statuses";

    protected $fillable = [
        'member_id', 
        'tribe_leader',
        'cell_leader',
        'member_status'
    ];

    public function member() {

        return $this->belongsTo('members');
    }
    
}
