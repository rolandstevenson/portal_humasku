<div class="container ">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
         
          @foreach ($slide as $key => $row)
          <div class="carousel-item {{ $key == 0 ? 'active' :'' }}">
            <img src="{{ asset('uplouds/'. $row->gambar_slide )}}" class="d-block w-100" alt="{{ $row->judul_slide }}">
          </div>
          @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
</div>