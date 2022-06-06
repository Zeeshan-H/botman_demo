<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Conversations\TestConversation;
use App\Conversations\SecondConversation;
use App\Http\Traits\PropertyDetails;
use App\Models\CheckSaved;


class BotmanController extends Controller
{
    public $scheduled_date;
        /**
     * Place your BotMan logic here.
     */
    public function handle(Request $request)
    {
        $botman = app('botman');
 
            // $secondConversation->sayHi();

            // $this->askName($botman);
            // $botman->hears($date, function($bot, $date) {
            //         $bot->startConversation(new SecondConversation());
            // });
        // }
        $botman->hears('{message}', function($bot, $message) use($request, $botman) {
            // $bot->startConversation(new SecondConversation);

            $bot->startConversation(new TestConversation($request));
           

   
            // if ($message == 'hi') {
            //     $this->askName($botman);
            // }
            
            // else{
            //     $botman->reply("write 'hi' for testing...");
            // }
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
        
    }
}
