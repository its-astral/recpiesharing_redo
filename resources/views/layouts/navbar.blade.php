<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('afterloginpage') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{ url('recpie') }}" class="nav-item nav-link">Recpie</a>
                        <a href="{{ url('team') }}" class="nav-item nav-link">Contributors</a>
                        <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                        
                        <a href="{{'userprofile'}}" class="nav-item nav-link"><i class="bi bi-person-fill"></i>

                       
                    
                        
                    </a>

                    

                    
                    </div>
                </div>
            </nav>
            

            
        <!-- Navbar & Hero End -->