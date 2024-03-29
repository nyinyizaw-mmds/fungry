
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Avenir Next.ttc') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    </head>
    @include('/partials/nav')
    <body>
        @include('/partials/header')

        @include('/partials/thirdslide')

        @include('/partials/four')

        @include('/partials/five')

        @include('/partials/sixslide') 

        
   

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script> 
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script> --}}
      
       
       <script type="text/javascript" src="{{ asset('js/counterup.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/waypoint.js') }}"></script>
       
       <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
       <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    </body>
    
</html>
