<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" contant="Metaa is a Web development company working form the Newcastle Upon Tyne. we aim to provide services for any company no matter how large or small.">
        <meta name="author" content="Scott Kelly">
        <meta name="keywords" content="Hexham, Newcastle, Web developer, Web designer, Northumberland, HTML, Laravel, Website, Blog">

        <title>Metaa</title>

        <!--css-->
        <link href="/css/stylesheet.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
        
        <!--bootstrap css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--font awsome-->
        <script src="https://kit.fontawesome.com/889f0829fa.js"></script>       
    </head>
    <body>
        @include('layouts.navbar')
        @include('inc.messages')
        <div class="container-fluid" id="main">
                
            @yield('content')
        </div>
    </body>
    
    <!--bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--javascript for navbar-->
    <script>
        //open nav
        function openNav(){
            document.getElementById('topNav').style.display='block';
            document.getElementById('navBarBtn').style.display='none';
        }

        function closeNav(){
            document.getElementById('topNav').style.display='none';
            document.getElementById('navBarBtn').style.display='block';
        }
        /* Open fullscreen overlay*/
        function openOverlay() {
            document.getElementById("full-overlay").style.width = "100%";
           
        }

        /* Close fullscreen overlay */
        function closeOverlay() {
            document.getElementById("full-overlay").style.width = "0%";
            
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149695007-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149695007-1');
</script>

</html>
