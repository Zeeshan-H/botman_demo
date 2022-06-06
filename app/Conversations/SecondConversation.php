<?php 

namespace App\Conversations;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;

class SecondConversation extends Conversation
{

    public $bot;
    public function __construct()
    {
    }

    public function sayHi() 
    {
        $this->say('Hi from Second');
    }
    public function run()
    {
        $this->sayHi();
    }
}