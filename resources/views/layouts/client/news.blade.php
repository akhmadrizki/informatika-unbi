<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      @if ($news->isEmpty())

      @else
        <div class="section-title">
            <h2>Blog</h2>
            <p class="color-primary">Berita & Artikel</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            @foreach ($news as $post)
            <a href="#">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('images/cover/' . $post->cover) }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Berita</h4>
                            </div>

                            <h3>{{ $post->title }}</h3>
                            <p>
                                {!! Str::limit($post->content, 30) !!}
                            </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="{{ $post->user->profile }}" class="img-fluid" alt="">
                                    <span>{{ $post->user->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
                <!-- End Course Item-->
            @endforeach

        </div>
      @endif

    </div>
</section>
<!-- End Popular Courses Section -->
