@extends('layouts.layout')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
             style="background-image: url({{asset('assets/img/breadcrumbs-bg.jpg')}});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">


                <h2>Movie Details</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Movie Details</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src={{$content['image']}} alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{$content['title']}}</h2>

{{--                            <div class="meta-top">--}}
{{--                                <ul>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a--}}
{{--                                            href="blog-details.html">John Doe</a></li>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a--}}
{{--                                            href="blog-details.html">--}}
{{--                                            <time datetime="2020-01-01">Jan 1, 2022</time>--}}
{{--                                        </a></li>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a--}}
{{--                                            href="blog-details.html">12 Comments</a></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- End meta top -->--}}

                            <div class="content">
                                <p>
                                    {{$content['content']}}
                                </p>
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->

                        <div class="post-author d-flex align-items-center">
                            <img src="{{asset('assets/img/blog/blog-author.jpg')}}" class="rounded-circle flex-shrink-0" alt="">
                            <div>
                                <h4>Jane Smith</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus
                                    accusantium.
                                    Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et
                                    accusantium
                                    ut unde voluptas.
                                </p>
                            </div>
                        </div><!-- End post author -->

                        <div class="comments">

                            <h4 class="comments-count">8 Comments</h4>

                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{asset('assets/img/blog/comments-1.jpg')}}" alt=""></div>
                                    <div>
                                        <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad
                                            aut
                                            sapiente quis molestiae est qui cum soluta.
                                            Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis
                                            et.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End comment #1 -->

                            <div id="comment-2" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{asset('assets/img/blog/comments-2.jpg')}}" alt=""></div>
                                    <div>
                                        <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet
                                            saepe.
                                            Officiis illo ut beatae.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-1" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="{{asset('assets/img/blog/comments-3.jpg')}}" alt=""></div>
                                        <div>
                                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan,2022</time>
                                            <p>
                                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam
                                                aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed
                                                necessitatibus aut est. Eum officiis sed repellat maxime vero nisi
                                                natus.
                                                Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                                Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in
                                                porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi.
                                                Pariatur distinctio labore omnis incidunt et illum. Expedita et
                                                dignissimos
                                                distinctio laborum minima fugiat.

                                                Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis
                                                error dolorum non autem quisquam vero rerum neque.
                                            </p>
                                        </div>
                                    </div>

                                    <div id="comment-reply-2" class="comment comment-reply">
                                        <div class="d-flex">
                                            <div class="comment-img"><img src="{{asset('assets/img/blog/comments-4.jpg')}}" alt="">
                                            </div>
                                            <div>
                                                <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                                <time datetime="2020-01-01">01 Jan,2022</time>
                                                <p>
                                                    Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia
                                                    dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam.
                                                    Placeat porro est commodi est officiis voluptas repellat quisquam
                                                    possimus. Perferendis id consectetur necessitatibus.
                                                </p>
                                            </div>
                                        </div>

                                    </div><!-- End comment reply #2-->

                                </div><!-- End comment reply #1-->

                            </div><!-- End comment #2-->

                            <div id="comment-3" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{asset('assets/img/blog/comments-5.jpg')}}" alt=""></div>
                                    <div>
                                        <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <p>
                                            Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus
                                            quia
                                            nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem
                                            aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                            Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea
                                            est
                                            consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus
                                            et
                                            optio veniam. Quam officia sit nostrum dolorem.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment #3 -->

                            <div id="comment-4" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{asset('assets/img/blog/comments-6.jpg')}}" alt=""></div>
                                    <div>
                                        <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit
                                            tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in
                                            fugiat.
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment #4 -->

                            <div class="reply-form">

                                <h4>Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" class="form-control"
                                                   placeholder="Your Name*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="text" class="form-control"
                                                   placeholder="Your Email*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                            <input name="website" type="text" class="form-control"
                                                   placeholder="Your Website">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col form-group">
                                        <textarea name="comment" class="form-control"
                                                  placeholder="Your Comment*"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

                    </div>



                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    @foreach($categories as $category)
                                        <li><a href='/home/movies/{{$category['slug']}}'>{{$category['category']}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    @foreach($allMovies as $movie)

                                        <div class="post-item mt-3">
                                            <img src={{$movie['image']}} alt="">
                                            <div>
                                                <h4><a href={{$movie['slug']}}>{{$movie['title']}}</a></h4>
                                            </div>
                                        </div><!-- End recent post item-->

                                    @endforeach


                                </div>

                            </div><!-- End sidebar recent posts-->
                             @if(\Illuminate\Support\Facades\Storage::url('/movies/'.$content['video']))
                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Trailer</h3>
                                <video height="300px" width="350px" controls>
                                    <source src="{{\Illuminate\Support\Facades\Storage::url('movies/'.$content['video'])}}" type="video/mp4" />
                                </video>
                            </div><!-- End sidebar tags-->
                            @endif
                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>
            </div>
        </section><!-- End Blog Details Section -->
    </main>
@endsection
