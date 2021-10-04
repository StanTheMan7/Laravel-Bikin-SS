     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>{{$titleDescriptions[3]->title}}</h2>
            <p>{{$titleDescriptions[3]->description}}</p>
          </div>
  
          <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            @foreach ($testimonials as $item)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{$item->text}}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('img/' . $item->photo)}}" class="testimonial-img" alt="">
                <h3>{{$item->name}}</h3>
                <h4>{{$item->job}}</h4>
              </div>
            </div><!-- End testimonial item -->

            @endforeach
  
            
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->