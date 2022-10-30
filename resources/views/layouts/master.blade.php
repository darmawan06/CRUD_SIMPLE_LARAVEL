<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CRUD SIMPLE" />
    <meta name="description" content="Website CRUD SIMPLE Dibuat Oleh Ahlinyawebsite.com" />
    <meta name="author" content="CRUD SIMPLE" />
    <title>@yield('title')</title>
     <!-- Bootstrap CSS -->
     <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       
     <!-- Bootstrap Bundle with Popper -->
     <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <div class="bg-primary">
                    <nav class="navbar navbar-marketing navbar-expand-lg fixed-top bg-transparent">
                        <div class="container">
                            @yield('navbar')
                        </div>
                    </nav>
    
                    <header class="page-header" id="header">
                        <div class="container px-3 px-md-5">
                            @yield('header')
                        </div>
                    </header>
                </div>
                @yield('contents')
                {{-- <section id="tableUsers">
                    <div class="container px-3 px-md-5">
                        
                    </div>
                </section> --}}
            </main>
        </div>

        <div id="layoutDefault_footer">
            <footer class="footer footer-bg mt-5 pt-5">
                <div class="container px-3 px-md-5">
                    <div class="row">
                       
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- CDN -->

</body>
</html>