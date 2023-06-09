<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop | @yield ('content') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    .main {
        height: 100vh;
    }

    .sidebar {
        background-color: #F8F6F4;
    }

    .sidebar a {
        text-decoration: none;
        padding: 20px 20px;
        color: #404258;
        display: block;
    }

    .sidebar a:hover {
        background-color: #F9FBE7;
    }

    .sidebar a.active {
        background-color: #748B9C;
        border-right: solid 4px #50577A;
    }

    .books {
        background-color: #748B9C;
    }

    .card-data {
        border-radius: 5px;
        padding: 20px 30px;
        border: solid 1px;
        color: #fff;
    }

    .card-data {
        font-size: 20px;
    }

    .desc {
        font-size: 20px;
    }

    .count {
        font-size: 20px;
    }

    .category {
        background-color: #787A91;
    }

    .user {
        background-color: #748B9C;
    }


</style>

<body>

    <div class="main d-flex flex-column justify-content-between">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg" style="background-color: #F9F5F6">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="bi bi-shop"></i> Were'Shop</a>
                <button class="navbar-toggler"data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>

        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class= 'active' @endif><i class="bi bi-house-door-fill"></i> Dashboard</a>
                    <a href="/index" @if (request()->route()->uri == 'users') class= 'active' @endif><i class="bi bi-tags-fill"></i> Shop</a>
                </div>
                <div class="content col-lg-9 p-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>
