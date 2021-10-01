<!-- ======= Features Section ======= -->
<section id="features" class="features" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>{{$titleDescriptions[0]->title}}</h2>
        <p>{{$titleDescriptions[0]->description}}</p>
      </div>

      @php
      $i=0
    @endphp


    @foreach ($features as $item)

        @if ($i%2)
          <div class="row content">
            <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
              <img src="{{asset('img/'. $item->url)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1" item-aos="fade-right">
              <h3>{{$item->title}}</h3>
              <p class="fst-italic">
                {{$item->description}}
              </p>
              <p>
                {{$item->p1}}
                {{$item->p2}}
                {{$item->p3}}
              </p>
            </div>
          </div>
        @else
          <div class="row content">
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('img/'. $item->url)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 pt-4" item-aos="fade-left" item-aos-delay="100">
             <h3>{{$item->title}}</h3>
              <p class="fst-italic">{{$item->description}}</p>
              <ul>
                <li><i class="bi bi-check"></i>{{$item->p1}}</li>
                <li><i class="bi bi-check"></i>{{$item->p2}}</li>
                <li><i class="bi bi-check"></i>{{$item->p3}}</li>
              </ul>
            </div>
         </div>
        @endif


        @php
          $i++
        @endphp

    @endforeach

    </div>
  </section><!-- End Features Section -->