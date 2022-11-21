
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators cl">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item ">
            <div class="df-carousel-content">
                <div class="df-carousel-content-img">
                    <div class="inphb-mask" style="width: 100%;height: 100%;">
                        <a href="#" class="df-carousel-content-img-link">En savoir plus</a>
                        <img
                            onload="this.nextElementSibling ? this.nextElementSibling.remove():''"
                            height="480"
                            decoding="async"
                            src="{{ asset("storage/fake/stdent.png") }}">
                        @include('web.layouts.img-mak')
                    </div>
                </div>
                  <div class="df-carousel-content-text">
                      <div class="df-text">
                          <h3>Lorem ipsum dolor sit amet.</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad earum fuga maiores porro possimus quos.</p>
                          <div>
                              <a href="#">Lire la suite...</a>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="df-carousel-content">
                <div class="df-carousel-content-img">
                    <div class="inphb-mask" style="width: 100%;height: 100%;">
                        <a href="#" class="df-carousel-content-img-link">En savoir plus</a>
                        <img
                            onload="this.nextElementSibling ? this.nextElementSibling.remove():''"
                            height="480"
                            decoding="async"
                            src="{{ asset("storage/fake/s2.jpg") }}">
                        @include('web.layouts.img-mak')
                    </div>
                </div>
                 <div class="df-carousel-content-text">
                     <div class="df-text">
                         <h3>Lorem ipsum dolor sit amet.</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad earum fuga maiores porro possimus quos.</p>
                         <div>
                             <a href="#">Lire la suite...</a>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="df-carousel-content">
                <div class="df-carousel-content-img">
                    <div class="inphb-mask" style="width: 100%;height: 100%;">
{{--
                        <a href="#" class="df-carousel-content-img-link">En savoir plus</a>
--}}
                        <img
                            onload="this.nextElementSibling ? this.nextElementSibling.remove():''"
                            height="480"
                            decoding="async"
                            src="{{ asset("storage/fake/stdent.png") }}">
                        @include('web.layouts.img-mak')
                    </div>
                </div>
            </div>
            {{--<div class="carousel-item-filter"></div>--}}
            <div class="carousel-caption">
                <div class="df-text kh-carousel-content">
                    <h2>Un réseau de formation de qualité</h2>
                   {{-- <div>
                        <a href="#">Lire la suite...</a>
                    </div>--}}
                </div>
            </div>

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



