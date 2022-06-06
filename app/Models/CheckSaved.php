<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Conversations\TestConversation;


class CheckSaved extends Model
{
    public function hasDate($scheduled_date):bool
    {
        if($scheduled_date)
        {
        $testconv = new TestConversation($scheduled_date);
        $testconv->showOther();
    
        }
        return false;
    }
}
