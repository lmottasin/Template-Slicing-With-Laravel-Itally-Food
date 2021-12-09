@extends('frontend.layouts.app')
@section('main-content')

    <section id="container" class="sub-page">
        <div class="wrap-container zerogrid">
            <div class="crumbs">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="archive.html">Blog</a></li>
                </ul>
            </div>
            <div id="main-content" class="col-2-3">
                <div class="wrap-content">
                    <article>
                        <div class="art-header">
                            <a href="#">
                                <h3>Nam libero tempore, cum soluta nobis est </h3>
                            </a>
                            <div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
                        </div>
                        <div class="art-content">
                            <img src="frontend/images/6.jpg" />
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At
                                vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                        <a class="button button02" href="#">MORE</a>
                    </article>
                    <article>
                        <div class="art-header">
                            <a href="#">
                                <h3>Nam libero tempore, cum soluta nobis est </h3>
                            </a>
                            <div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
                        </div>
                        <div class="art-content">
                            <img src="frontend/images/4.jpg" />
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At
                                vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                        <a class="button button02" href="#">MORE</a>
                    </article>
                    <article>
                        <div class="art-header">
                            <a href="#">
                                <h3>Nam libero tempore, cum soluta nobis est </h3>
                            </a>
                            <div class="info">Posted on June 22, 2010 in: <a href="#">Event</a></div>
                        </div>
                        <div class="art-content">
                            <img src="frontend/images/5.jpg" />
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                                et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. At
                                vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy
                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div>
                        <a class="button button02" href="#">MORE</a>
                    </article>
                </div>
            </div>
           {{--side bar stands here--}}
            @include('frontend.layouts.sidebar')
        </div>
    </section>

@endsection
