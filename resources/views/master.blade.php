<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css"/>
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">| L O G O |</a>
        <ul class="navbar-nav">

            <li class="dropdown">
                <a data-toggle="dropdown" class="nav-link text-white dropdown-toggle"  href="#">Student <b class="caret"></b></a>
                <ul class="dropdown-menu ">
                    <li><a href="{{route('home')}}" class="dropdown-item">Add Student</a></li>
                    <li><a href="{{route('manage-student')}}" class="dropdown-item">Manage Student</a></li>
                    <li><a href="{{route('manage-blog')}}" class="dropdown-item">Manage Blog</a></li>
                    <li><a href="{{route('add-blog')}}" class="dropdown-item">Add Blog</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" class="nav-link text-white dropdown-toggle" href="#">Product <b class="caret"></b></a>
                <ul class="dropdown-menu ">
                    <li><a href="{{route('add-product')}}" class=" dropdown-item ">Add Product</a></li>
                    <li><a href="{{route('manage-product')}}" class="dropdown-item">Manage Product</a></li>
                </ul>
            </li>
            <li><a href="" class="nav-link">Login</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{ asset('/') }}js/jquery-3.6.0.js"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>
