<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>@yield('title')</title>

    @include('partials/css');
</head>

<body class="animsition">
    <div class="page-wrapper">

        @include('partials/mobile')
        @include('partials/sidebar')
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('partials/desktop')

            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @include('partials/script')

</body>

</html>
<!-- end document-->
