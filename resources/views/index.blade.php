<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Dustin | Portfolio</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="{{ asset('css/steller.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:#0345fc; font-weight:bold; font-size: 1.5rem">Win Thein Maung</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="components.html">Copmonents</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title" style="font-size:4rem">{{ $about->name }}</h6>
                <p class="typewriter">I'm {{ $about->title }}</p>

                <div class="buttons pt-3">
                    {{-- <button class="btn btn-primary rounded">HIRE ME</button> --}}
                    @php
                        $resume = '/files/' . $about->file;
                        $profile = '/photos/' . $about->image;
                    @endphp
                    <a class="btn btn-dark rounded" href="{{ asset($resume) }}" download="">DOWNLOAD CV</a>
                </div>

                <div class="socials mt-4">
                    <a class="social-item" href="https://www.linkedin.com/in/win-thein-maung-9b39ba213/" target="blink"><i class="ti-linkedin"></i></a>
                    <a class="social-item" href="https://github.com/wintheinmg" target="blink"><i class="ti-github"></i></a>
                    <a class="social-item" href="https://www.facebook.com/win.t.maung.5855" target="blink"><i class="ti-facebook"></i></a>
                </div>
            </div>
            <div class="img-holder">
                <img src="{{ asset('imgs/3D boy using laptop and phone Illustration.png') }}" alt="">
            </div>
        </div>

        <!-- Header-widget -->
        {{-- <div class="widget">
            <div class="widget-item">
                <h2>12</h2>
                <p>Happy Clients</p>
            </div>
            <div class="widget-item">
                <h2>12</h2>
                <p>Project Completed</p>
            </div>
        </div> --}}
    </header>
    <!-- End of Page Header -->

    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3 profile-wrapper">
                    <img src="{{ asset($profile) }}" alt="" class="">
                    <span class="square first-square"></span>
                    <span class="square second-square"></span>
                </div>
                <div class="col-md-8" style="padding-left: 100px">
                    <h6 class="title">{{ $about->name }}</h6>
                    <p class="subtitle">{{ $about->title }}</p>
                    <p>{{ $about->description }}</p>
                    <a class="btn btn-primary rounded mt-3" href="{{ asset($resume) }}" download>DOWNLOAD CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills section -->
    <section class="section">
        <div class="container text-center">
            <h6 class="subtitle">Skills</h6>
            <h6 class="section-title mb-4">Why Choose me</h6>

            <div class="row text-left">
                <div class="col-sm-4">
                    <h6 class="mb-3">HTML5</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>85%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">CSS3</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">JavaScript</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">PHP</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">Laravel</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">React</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">BootStrap</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">JQuery</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">MySQL</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">Java</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">Spring MVC</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">GitHub</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Portfolio</h6>
            <h6 class="section-title mb-4">Check My Projects</h6>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row text-left">
                            <div class="col-md-4">
                                <div class="card border mb-4">
                                    <img src="{{ asset('imgs/blog-1.jpg') }}" alt="" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Designe for Everyone</h5>
                                        <div class="post-details">
                                            <a href="javascript:void(0)">Posted By: Admin</a>
                                            <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                            <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                                        <a href="javascript:void(0)">Read More..</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border mb-4">
                                    <img src="{{ asset('imgs/blog-2.jpg') }}" alt="" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Web Layouts</h5>
                                        <div class="post-details">
                                            <a href="javascript:void(0)">Posted By: Admin</a>
                                            <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                            <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                                        <a href="javascript:void(0)">Read More..</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border mb-4">
                                    <img src="{{ asset('imgs/blog-3.jpg') }}" alt="" class="card-img-top w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Bootstrap Framework</h5>
                                        <div class="post-details">
                                            <a href="javascript:void(0)">Posted By: Admin</a>
                                            <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                            <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                                        <a href="javascript:void(0)">Read More..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Testmonial</h6>
            <h6 class="section-title mb-4">What People Say About Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('imgs/avatar-1.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('imgs/avatar-2.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="{{ asset('imgs/avatar-3.jpg') }}" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of testmonial section -->

    <!-- Blog Section -->
    <section id="blog" class="section">
        <div class="container text-center">
            <h6 class="subtitle">My Blogs</h6>
            <h6 class="section-title mb-4">Latest News</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{ asset('imgs/blog-1.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Designe for Everyone</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{ asset('imgs/blog-2.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="{{ asset('imgs/blog-3.jpg') }}" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap Framework</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hire me section -->
    <section class="bg-gray p-0 section">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Hire Me For Your Project</h5>
                            <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <button class="btn btn-light rounded">Hire Me!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End od Hire me section. -->

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Contact</h6>
            <h6 class="section-title mb-4">Get In Touch With Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p> 12345 Fake ST NoWhere AB Country</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>(123) 456-7890</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>info@website.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map">
            <iframe src="https://snazzymaps.com/embed/61257"></iframe>
        </div>
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com" target="_blank">DevCRUD</a></p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        <a class="social-item" href="javascript:void(0)"><i class="ti-facebook"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-google"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-github"></i></a>
                        <a class="social-item" href="javascript:void(0)"><i class="ti-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of page footer -->

    <div id="preloader" style="">
        <div id="loader"></div>
    </div>
	<!-- core  -->
    <script src="{{ asset('vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.bundle.js') }}"></script>
    <!-- bootstrap 3 affix -->
	<script src="{{ asset('vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- steller js -->
    <script src="{{ asset('js/steller.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript">
    window.setTimeout('fadeout();', 1000);
    function fadeout(){
        $('#preloader').hide();
    }
</script>
</body>
</html>
