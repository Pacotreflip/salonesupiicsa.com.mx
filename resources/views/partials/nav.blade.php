<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                    <img src="" alt="Salones Upiicsa"/>
            </a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                @if (auth()->check())
                <ul class="nav navbar-nav">
                    @include ('partials.nav-app')
                </ul>
                @endif
                @include('partials.nav-user')
            </div>
        </center>
    </div>
</div>