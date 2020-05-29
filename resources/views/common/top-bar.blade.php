
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">

       <a class="navbar-brand" href="#">
         <img src="images/logo_saadacademy.png" alt="saadacademy logo" width="200">
       </a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <form class="form-inline">
           <button class="btn btn-outline-success my-2 my-sm-0 search-btn border-right-0 " type="submit">
               <i class="fas fa-search"></i>
           </button>
           <input class="form-control mr-sm-2 border-left-0 search-input" type="search" placeholder="Search" aria-label="Search">

       </form>

   </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-light border-left-0 border-right-0 border-bottom-0 pt-0 pb-0">
    <div class="container">

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item {{(\Illuminate\Support\Facades\Route::currentRouteName() == 'register') ? 'active' : ''}}">
                    <a class="nav-link mr-2" href="{{route('register')}}">SIGN UP</a>
                </li>

                <li class="nav-item {{(\Illuminate\Support\Facades\Route::currentRouteName() == 'login') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('login')}}">SIGN IN</a>
                </li>

            </ul>

        </div>

    </div>
</nav>
