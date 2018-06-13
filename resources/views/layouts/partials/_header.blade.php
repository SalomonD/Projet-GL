<div class="header-main">
    <div class="header-top-agileits">
        <div class="container">
            <ul class="agile_forms" data-aos="fade-left">
                @yield('icon_header')
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><a  href="index.html">Loan Management</a></h1>
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="active scroll">Accueil</a></li>
                    <li><a href="#about" class="scroll">A propos de nous</a></li>
                    <li><a href="#services" class="scroll">Nos Services</a></li>
                    <li><a href="#contact" class="scroll">Nos Contacts</a></li>
                    @yield('other_menu')
                </ul>
            </div>
            <div class="clearfix"> </div>
        </nav>
    </div>

</div>