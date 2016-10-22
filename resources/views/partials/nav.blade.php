
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Blog</a>
        </div>

        @if(Auth::user())
        <div id="navbar" class="navbar-collapse collapse"  style="float:left;">
            <ul class="nav navbar-nav">
                <li class="active" style="margin-left:50px;"><a href="">Home</a></li>
                <li style="margin-left:50px;"><a href="#about">Posts</a></li>
                <li style="margin-left:50px;"><a href="#contact">Comments</a></li>
            </ul>
        </div>
        @endif


        <div style="float:right;">
            <ul class="nav navbar-nav">
                @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu"   style="float:right;">
                        <li><a href="#">修改密码</a></li>
                        <li><a href="/logout">退出</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>