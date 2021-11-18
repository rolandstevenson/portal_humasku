<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
   
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">

         <li class="nav-item active">
           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>

         {{-- tampil kategori horizontal --}}
        {{-- @foreach ($category as $cat)
          <li class="nav-item active">
             <a class="nav-link" href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
         </li>
        @endforeach --}}

         <li class="nav-item dropdown active">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Category 
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($category as $cat)
              <a class="dropdown-item" href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
              @endforeach
           </div>
         </li> 

        
       </ul>
       <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
     </div>
    </div>
 </nav> 