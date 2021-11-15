<nav class="navbar navbars navbar-expand-xl">
     <div class="container h-100">
         <a class="navbar-brand" href="index.html">
             <h1 class="tm-site-title mb-0">Asset Management System</h1>
         </a>
         @auth
             <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <i class="fas fa-bars tm-nav-icon"></i>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mx-auto h-100">
                     <li class="nav-item">
                         <a class="nav-link active" href="{{ route('admin.index') }}">
                             <i class="fas fa-tachometer-alt"></i>
                             Dashboard
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('asset.index') }}">
                             <i class="fas fa-shopping-cart"></i>
                             Assets
                         </a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('staff.index') }}">
                             <i class="far fa-user"></i>
                             Employees
                         </a>
                     </li>
                     <li class="nav-item">
                       
                     </li>

                 </ul>
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link d-block" 
                             onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">

                             {{ auth()->user()->firstname }}
                             {{ __('Logout') }}

                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </li>
                 </ul>

             </div>

         @endauth


     </div>

 </nav>
