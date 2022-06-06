<?php
namespace App\Http\Traits;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\SecondConversation;


use App\Models\Student;

trait PropertyDetails {
    public $is_saved = false;
    public function setDetails($scheduled_date) {
        $botman = app('botman');
        if($scheduled_date)
        {
            $secondConversation = new SecondConversation();
            $secondConversation->sayHi();
        }
    }

}