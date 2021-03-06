<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <img id="logo" src="img/logos/LOGO.png">
            <a class="navbar-brand page-scroll" href="#page-top">Start Viewing STA!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#page-top"></a>
                </li>
                <li>
                    <!--                    <a class="page-scroll tablink" href="#" onclick="openTab(event, 'services');">Services</a>-->
                    <a class="page-scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="page-scroll" href="#classes">Classes</a>
                </li>
                <li>
                    <a class="page-scroll" href="#gallery">Gallery</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>

                <?php
                if (isset($_SESSION['stausername'])) {
                    echo " <li>
                                <a class=\"page-scroll\" href=\"#myclasses\">My Classes</a>
                           </li>
                           <li>
                                <a class=\"page-scroll\" href=\"logout.php\">Logout</a>
                           </li>";
                } else {
                    echo "<li>
                    <a class=\"page-scroll\" href=\"#login\">Login</a>
                </li>";
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>