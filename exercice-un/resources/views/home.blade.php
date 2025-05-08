@extends('master')
@section('title', 'Home')
@section('content')

<!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Bunker</h1>
                            <span class="subheading">Moins cher qu'un appartement</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Où vivre quand le coût de la vie est si haut</h2>
                            <h3 class="post-subtitle">Que faire quand la fin approche à grand pas</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">PoorGuy</a>
                            on September 24, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">Stalin, revenu d'entre les morts pour ramener la gloire équitable à tous</h2></a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">CollegeStudent</a>
                            on September 18, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Ce que nous savions étais un mensonge</h2>
                            <h3 class="post-subtitle">Plusieurs recherches prouvent concrètement que la Terre est plate</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">iToldYouSo</a>
                            on August 24, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Trump, élu et sauveur controversé</h2>
                            <h3 class="post-subtitle">Lors d'un simple discours au capitol, l'archange Gabriel tendi la main vers le président en personne.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">RealTrumpist</a>
                            on July 8, 2023
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
@endsection