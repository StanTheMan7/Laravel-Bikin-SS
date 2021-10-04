<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$titleDescriptions[2]->title}}</h2>
        <p>{{$titleDescriptions[2]->description}}</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">
        @foreach ($portfolios as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->description}}">
          <div class="portfolio-wrap">
            @if (Storage::disk('public')->exists('img/' . $item->url))
            <img class="img-fluid" src="{{ asset('img/' . $item->url) }}" alt="">
            @else
              <img class="img-fluid" src="{{ $item->url }}" alt="">
            @endif
            <div class="portfolio-info">
              <h4>{{$item->title}}  
              <p>{{$item->description}}</p>
              <div class="portfolio-links">
                <a href="{{asset($item->url)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->title}}"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section><!-- End Portfolio Section -->