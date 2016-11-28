<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">MPUNG@</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">Home</a></li>
                <li><a href="/companies">Companies</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contacts">Contacts</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if (Auth::check())
                                <li><a href="/users/logout">Logout</a></li>
                            @else
                                <li><a href="/users/register">Register</a></li>
                                <li><a href="/users/login">Login</a></li>
                            @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>