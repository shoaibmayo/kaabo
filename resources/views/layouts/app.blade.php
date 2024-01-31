<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body class="index-body">
@include('includes.header')
   
@yield('content')
<script>
        AOS.init({ duration: 1000 });
    </script>
    <script>
        var MenuOpen = false;
        function OpenMenu() {
            if(!MenuOpen) {
                document.getElementById("sidebar").style.right = "10px";
                document.getElementById("hamburguer-icon").innerHTML = "&#10006;"
                MenuOpen = true;
            } else {
                document.getElementById("sidebar").style.right = "-200px";
                document.getElementById("hamburguer-icon").innerHTML = "&#9776;"
                MenuOpen = false;
            }
        }
    </script>
</body>
</html>       