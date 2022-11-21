@php
    $videos=\App\Models\Admin\Media::mediaActivated('video');
    $pictures=\App\Models\Admin\Media::mediaActivated('image');
@endphp

@if(!$videos->isEmpty() || !$pictures->isEmpty())
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        @if(!$pictures->isEmpty())
                            <li data-filter=".filter-image" class="filter-active">
                                Photos
                            </li>
                        @endif
                        @if(!$videos->isEmpty())
                            <li data-filter=".filter-video">
                                Videos
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                @foreach($pictures as $picture)
                    <div class="col-lg-4 col-xl-3 col-6 portfolio-item filter-image">
                        <img src="{{ $picture->file->url ?? '' }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>
                                {{ $picture->description ?? '' }}
                            </h4>
                            {{--<p>Web</p>--}}
                            <a href="{{ $picture->file->url ?? '' }}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox preview-link" title="INP-HB">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                     fill="#000000">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach($videos as $video)
                    <div class="col-lg-4 col-xl-3 col-6 portfolio-item filter-video">
                        <iframe width="560" height="315" class="img-fluid"
                                src="https://www.youtube.com/embed/{{ $video->code ?? '' }}" title="INPHB"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <div class="video-mask 69Z42gtsEuc"></div>
                        <div class="portfolio-info">
                            <h4>
                                {{ $video->description ?? '' }}
                            </h4>
                            {{--<p>Web</p>--}}
                            <a href="https://www.youtube.com/embed/{{ $video->code ?? '' }}"
                               data-gallery="portfolioGallery"
                               class="portfolio-lightbox preview-link" title="INPHB">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                     fill="#000000">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                    <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
