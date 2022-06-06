<?php 

namespace App\Conversations;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Http\Traits\PropertyDetails;
use App\Models\CheckSaved;



class TestConversation extends Conversation
{
    public $is_saved;
    public function __construct($request)
    {    
        if(isset($request->scheduled_date))
        {
            $checkDate = new CheckSaved();
            $this->is_saved = $checkDate->hasDate($request->scheduled_date);
        } 
    }

    public function sayHi() 
    {
        // dd($request);
        $question = "<input type='datetime-local' id='birthdaytime' name='birthdaytime'>";
        $this->ask($question, function($answer) {
            $this->say($answer->getText());
        });
        // $this->say($question);
        $this->say("<button class='btn-date' onclick='test()'>Update</button>");
    }

    public function showOther()
    {
        $this->say('Hi');
    }
    public function run()
    {
        $this->sayHi();
    }
}