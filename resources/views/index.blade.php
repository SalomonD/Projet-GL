@section('other_css')
@stop

@section('menu')
    <li><a href="index.html" class="active scroll">Accueil</a></li>
    <li><a href="#about" class="scroll">A propos de nous</a></li>
    <li><a href="#services" class="scroll">Nos Services</a></li>
    <li><a href="#contact" class="scroll">Nos Contacts</a></li>
@stop

@extends('layouts.homeMaster')

@section('icon_header')
    
    @if(Auth::check())
      
        <li><a class="active" href="#"><i class="fa fa-user" aria-hidden="true"></i>Bienvenue {{session()->get('matricule')}}</a> </li>
        <li><a href="{{url('/logout')}}" ><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnexion</a> </li>
    @else
        <li>{{session()->get('matricule')}}!</li>
        <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Se connecter</a> </li>
        <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> S'inscrire</a> </li>
    
    @endif
    
@stop

@section('banner')
    @include('layouts.partials._banner')
@stop

@section('content')
    <!--banner bottom-->
    <div class="banner-btm-w3layouts" id="about">
        <div class="container">
            <div class="tittle-agileinfo">
                <span>01</span>
                <h2>Bienvenue a Loan management</h2>
                <p >Plateforme de gestion des emprunts</p>
            </div>
            <div class="about-main">
                <div class="col-md-4 about-grids" data-aos="zoom-in">
                    <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                    <h3 class="subheading-agileits-w3layouts">Devenir membre </h3>
                    <p class="para-agileits-w3layouts">Breve description</p>
                </div>
                <div class="col-md-4 about-grids" data-aos="zoom-in">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <h3 class="subheading-agileits-w3layouts">Devenir actionnaire</h3>
                    <p class="para-agileits-w3layouts">Breve description</p>
                </div>
                <div class="col-md-4 about-grids" data-aos="zoom-in">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h3 class="subheading-agileits-w3layouts">Effectuer un emprunt</h3>
                    <p class="para-agileits-w3layouts">Breve description</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--//banner bottom-->

    <!--services -->
    <div class="services-agileits" id="services">
        <div class="container">
            <div class="tittle-agileinfo">
                <span>02</span>
                <h3>Services Offerts</h3>
                <p >Utiliser nos services en toute securite.</p>
            </div>
            <div class="services-agileits-w3layouts">
                <div class="col-md-3 service-grids">
                    <i class="fa fa-bookmark-o" aria-hidden="true" data-aos="zoom-in"></i>
                    <p class="para-agileits-w3layouts">Devenir membre</p>
                    <h4>Standard Bookkeeping</h4>
                </div>
                <div class="col-md-3 service-grids">
                    <i class="fa fa-line-chart" aria-hidden="true" data-aos="zoom-out"></i>
                    <p class="para-agileits-w3layouts">Devenir actionnaire</p>
                    <h4>Taxes Optimization</h4>
                </div>
                <div class="col-md-3 service-grids">
                    <i class="fa fa-money" aria-hidden="true" data-aos="zoom-in"></i>
                    <p class="para-agileits-w3layouts">Effectuer un emprunt</p>
                    <h4>SMB Accountants</h4>
                </div>
                <div class="col-md-3 service-grids">
                    <i class="fa fa-pencil-square-o" aria-hidden="true" data-aos="zoom-out"></i>
                    <p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
                    <h4>Any Accounting</h4>
                </div>
                <div class="col-md-3 service-grids">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
                    <h4>Helping Businesses</h4>
                </div>
                <div class="col-md-3 service-grids">
                    <i class="fa fa-area-chart" aria-hidden="true" data-aos="zoom-in"></i>
                    <p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
                    <h4>Auditing & Individual</h4>
                </div>
                <div class="col-md-3 service-grids" >
                    <i class="fa fa-users" aria-hidden="true" data-aos="zoom-out"></i>
                    <p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
                    <h4>Seasoned Team</h4>
                </div>
                <img src="{{'/assets/images/services1.png'}}" class="img-responsive" data-aos="slide-up" alt=""/>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!-- //services -->
    <!-- Team -->

    <!-- //Team -->
    <!-- Stats -->

    <!-- //Stats -->

    <!-- gallery -->

    </div>
    <!-- //gallery -->

    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <div class="tittle-agileinfo">
                <span>03</span>
                <h3>Temoignages</h3>
                <p >Quelques experiences personnelles partagees avec vous</p>
            </div>
            <div class="w3_testimonials_grids">
                <div id="slideshow" class="disabled">
                    <button class="previous"><b>« Previous</b></button>
                    <button class="next"><b>Next »</b></button>
                    <div class="strip">
                        <div class="slide sticky">
                            <div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
                                <div class="agileinfo_team_grid1">
                                    <div class="test-top-wthree">
                                        <img src="images/t1.jpg" alt="" />
                                        <div class="test-right-wthree">
                                            <h6>Federica</h6>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="test-bottom-w3-agile">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
                                <div class="agileinfo_team_grid1">
                                    <div class="test-top-wthree">
                                        <img src="images/t2.jpg" alt="" />
                                        <div class="test-right-wthree">
                                            <h6>Liza Brent</h6>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="test-bottom-w3-agile">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
                                <div class="agileinfo_team_grid1">
                                    <div class="test-top-wthree">
                                        <img src="images/t3.jpg" alt="" />
                                        <div class="test-right-wthree">
                                            <h6>Leslie gross</h6>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="test-bottom-w3-agile">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
                                <div class="agileinfo_team_grid1">
                                    <div class="test-top-wthree">
                                        <img src="images/t4.jpg" alt="" />
                                        <div class="test-right-wthree">
                                            <h6>Kimberly Barker</h6>
                                            <p>Lorem ipsum dolor sit amet, </p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="test-bottom-w3-agile">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        <p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- newsletter -->

    <!-- //newsletter -->
@stop

@section('other_js')
@stop