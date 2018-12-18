<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="nccc">
    <link rel="icon" href="fav.ico">
    <title>Single Page App</title>
    @yield('styles')
    <link rel="stylesheet" href="/css/app.css" integrity="" crossorigin="anonymous">
   </head>
<body >
  <div id="app" class="main">
        @yield('content')   
  </div>
  @yield('javascripts')
 

  <script type="text/javascript">
    var main = {
      mounted(){
        
      },

      created: function() {
         
      },

      data: function(){
          return {

          }
      },

      methods:{

      }
    };

  </script>
   <script src="/js/app.js" integrity=""></script>
</body>
</html>
