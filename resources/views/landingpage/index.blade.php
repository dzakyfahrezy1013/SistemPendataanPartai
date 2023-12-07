<!DOCTYPE html>
<html lang="en">

<head>
    @include('landingpage.header')
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('landingpage.navigation')
        <!-- Header-->
        @include('landingpage.home')
        <!-- About Section-->
        @include('landingpage.about')
    </main>
    <!-- Footer-->
    @include('landingpage.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>