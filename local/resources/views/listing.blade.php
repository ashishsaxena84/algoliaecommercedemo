@extends('layout')

@section('content')
    <!--====== HEADER ONE PART START ======-->

    <header class="header-area">

        <div class="navbar-area navbar-one navbar-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                Algolia Instant Search Demo
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#products">Products</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

    </header>

    <!--====== HEADER ONE PART ENDS ======-->
    
<section id="products" class="pricing-area pt-95 pb-100">    
    <div class="ais-InstantSearch">
        <h1>Search Products</h1>
    
        <div class="left-panel">
            <div id="clear-refinements"></div>
            <h2>Categories</h2>
            <div id="categories-list"></div>
            <h2>Brands</h2>
            <div id="brand-list"></div>
            <h2>Types</h2>
            <div id="type-list"></div>
        </div>
    
        <div class="right-panel">
            <div id="searchbox" class="ais-SearchBox"></div>
            <div id="hits"></div>
            <div id="pagination"></div>
        </div>
    </div>
</section>
@stop