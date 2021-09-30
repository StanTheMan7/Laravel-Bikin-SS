 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>{{$titleDescriptions[0]->title}}</h2>
        <p>{{$titleDescriptions[0]->description}}</p>
      </div>

      <div class="row">
        @foreach ($services as $item)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mt-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-{{$item->icon}}"></i></div>
            <h4 class="title"><a href="">{{$item->title}}</a></h4>
            <p class="description">{{$item->text}}</p>
          </div>
        </div>  
        @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->