<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Botman Chatbot in Laravel - Real Programmer</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    </body>
   
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
        var botmanWidget = {
            aboutText: 'Write Something',
            introMessage: "✋ Hi! I'm form Real Programmer"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html> 


<script type="text/javascript">

var botmanWidget = {
        frameEndpoint: '{{ asset('/botman.html') }}',
        aboutText: 'AuctionsLive Chatbot',
        introMessage: "✋ Hi! I'm form auctionslive.com",
        mainColor:'#434345',
        title: 'Auctions Live Chatbot',
        headerTextColor: '#fff',
        bubbleAvatarUrl: 'https://auctionslive.com/images/auctions-live.jpg',
        bubbleBackground: '#000',
    };


    $(document).ready(function() {
        botmanChatWidget.say('Hi');

       });
        </script>