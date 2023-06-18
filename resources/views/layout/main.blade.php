<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apoteks | @yield ('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .sidebar{
        background: darkgray;
    }

    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: black;
        display: block;
    }

    .sidebar a:hover{
        background-color: #CAC6E1;
        /* width: 213px;
        margin-left: -25px; */
    }

    .sidebar a.active{
        background-color: #CAC6E1;
        border-right: solid 4px #F49F95;
        /* width: 213px;
        margin-left: -25px; */
    }

    .navbar{
        background:  #CAC6E1;

    }

    .navbar-brand{
        margin-left: 5px;
    }


</style>
<body>

    <div class="main d-flex flex-column justify-content-between">
    <!--navbar-->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <img src="https://cdn.icon-icons.com/icons2/2248/PNG/512/pharmacy_icon_137311.png"  width="30px">
            {{-- <i class="bi bi-hospital" style="font-size: 30px"></i> --}}
          <div class="navbar-brand"><b> Apoteks</b></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>

      <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="col-lg-2  sidebar collapse d-lg-block" id="navbarSupportedContent">
                <div class="active"> 
                <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class='active' @endif>
                    <i class="bi bi-house-dash-fill">
                    <b>Dashboard</b>
                    </i>
                </a>
                <a href="/apoteks" @if (request()->route()->uri == 'apoteks') class='active' @endif>
                    <i class="bi bi-people-fill">
                   <b> Apoteks</b>
                </i></a>
                <a href="/apoteks-ban"@if (request()->route()->uri == 'apoteks-ban') class='active' @endif>
                    <i class="bi bi-bookmark-check-fill">
                   <b> View Ban Data </b>
                </i></a>

                            
            </div>
            </div>
            <div class="col-lg-10 p-5">
                    @yield('content')
            </div>
        </div>
      </div>
</div>
   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>