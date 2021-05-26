<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Dashboard - One Nation One Heart")</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("admin_assets/css/bootstrap.css")}}">

    <link rel="stylesheet" href="{{asset("admin_assets/vendors/iconly/bold.css")}}">

    <link rel="stylesheet" href="{{asset("admin_assets/vendors/perfect-scrollbar/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("admin_assets/vendors/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" href="{{asset("admin_assets/css/app.css")}}">
    <link rel="shortcut icon" href="{{asset("admin_assets/images/favicon.svg")}}" type="image/x-icon">
    @yield("css")
</head>

<body>
    <div id="app">
        @include("admin.layouts.sidebar")
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield("title")</h3>
                <p class="text-subtitle text-muted">@yield("subtitle")</p>
            </div>
            <div class="page-content">
                @yield("content")
            </div>
        </div>
    </div>
    <script src="{{asset("admin_assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
    <script src="{{asset("admin_assets/js/bootstrap.bundle.min.js")}}"></script>
    @yield("scripts")
    <script src="{{asset("admin_assets/js/main.js")}}"></script>
</body>

</html>