@extends('layouts._main')

@section('title','Propiedades')

@section('content')
    <div class="singleTop">
        <div id="carouselFull" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($images as $image)
                    <li data-target="#carouselFull" data-slide-to="{!! $loop->iteration - 1 !!}"
                        class="{!! $loop->first ? 'active':'' !!}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($images as $image)
                    <div class="item {!! $loop->first ? 'active':'' !!}" style="max-height: 480px;">
                        <img src="{!! $image->system == 'URL' ? asset($image->path):Storage::disk('public')->url($image->path) !!}">
                        <div class="container">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="left carousel-control" href="#carouselFull" role="button" data-slide="prev"><span
                        class="fa fa-chevron-left"></span></a>
            <a class="right carousel-control" href="#carouselFull" role="button" data-slide="next"><span
                        class="fa fa-chevron-right"></span></a>
        </div>
        <div class="summary">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="summaryItem">
                        <h1 class="pageTitle">{{ $property->details->title }}</h1>
                        <div class="address"><span class="icon-pointer"></span> {{ $property->address }}
                        </div>
                        {{--<ul class="rating">
                            <li><a href="#"><span class="fa fa-star"></span></a></li>
                            <li><a href="#"><span class="fa fa-star"></span></a></li>
                            <li><a href="#"><span class="fa fa-star"></span></a></li>
                            <li><a href="#"><span class="fa fa-star"></span></a></li>
                            <li><a href="#"><span class="fa fa-star-o"></span></a></li>
                            <li>(146)</li>
                        </ul>--}}
                        <div style="font-size: x-large; float: left;">
                            <b>$ {{ number_format($property->price,2,'.',',') }}</b> MXN
                        </div>
                        {{--<div class="favLink">

                        </div>--}}
                        <ul class="stats">
                            <li style="font-size: large !important;">
                                <div class="figFavS" data-value="{!! $property->id !!}"
                                     data-status="{!! $property->favCheck(auth()->check() ? auth()->user()->id : 0) ?'selectec':'toggle' !!}">
                                    <i class="fa {!! $property->favCheck(auth()->check() ? auth()->user()->id : 0) ?'fa-heart':'fa-heart-o' !!}"
                                       style="color: red; font-size: large; cursor: pointer;" aria-hidden="true"></i>
                                    <span class="figFavN">{{ $property->users_fav()->count() }}</span>
                                </div>
                            </li>
                            @if(auth()->check() && Guardian::check('admin_property_views'))
                                <li style="font-size: large !important;">
                                    <span class="icon-eye" style="font-size: large !important;"></span> 200
                                </li>
                            @endif
                        </ul>
                        <div class="clearfix"></div>
                        <ul class="features">
                            <li>
                                <span class="fa fa-bed" aria-hidden="true"></span>
                                <div>{{ $property->bedrooms }} Habitaciones</div>
                            </li>
                            <li>
                                <span class="fa fa-bath" aria-hidden="true"></span>
                                <div>{{ $property->bathrooms }} Baños</div>
                            </li>
                            <li>
                                <span class="icon-frame"></span>
                                <div>2750 m<sup>2</sup></div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="agentAvatar summaryItem">
                        <div class="clearfix"></div>
                        @if(auth()->check() && !Guardian::check('admin_property_status'))
                            <img class="avatar agentAvatarImg"
                                 src="{!! asset('images/web/'.$property->category.'.png') !!}" alt="avatar">
                            <div class="agentName">{{ ucwords($property->category) }}</div>
                            <a data-toggle="modal" href="#contactAgent"
                               class="btn btn-lg btn-round btn-green contactBtn">
                                Contactar Agente
                            </a>
                        @elseif(Guardian::check('admin_property_status'))
                            <a data-toggle="modal" href="#contactAgent" style="margin-top: 20px;"
                               class="btn btn-lg btn-round btn-gray contactBtn">
                                Editar
                            </a>
                            @if($property->status == 'pending')
                                <a data-toggle="modal" href="#contactAgent"
                                   class="btn btn-lg btn-round btn-green contactBtn">
                                    Publicar
                                </a>
                            @else
                                <a data-toggle="modal" href="#contactAgent"
                                   class="btn btn-lg btn-round btn-yellow contactBtn">
                                    Desactivar
                                </a>
                            @endif
                            <a data-toggle="modal" href="#contactAgent"
                               class="btn btn-lg btn-round btn-red contactBtn">
                                Archivar
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="description">
        <h3>Decripción</h3>
        <p>
            {{ $property->details->description }}
        </p>
    </div>
    <div class="share">
        <h3>Comparte en rede sociales</h3>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                <a href="#" class="btn btn-sm btn-round btn-o btn-facebook"><span class="fa fa-facebook"></span>
                    Facebook</a>
            </div>
            {{--<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                <a href="#" class="btn btn-sm btn-round btn-o btn-twitter"><span class="fa fa-twitter"></span>
                    Twitter</a>
            </div>--}}
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                <a href="#" class="btn btn-sm btn-round btn-o btn-google"><span class="fa fa-google-plus"></span>
                    Google+</a>
            </div>
            {{--<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 shareItem">
                <a href="#" class="btn btn-sm btn-round btn-o btn-pinterest"><span class="fa fa-pinterest"></span>
                    Pinterest</a>
            </div>--}}
        </div>
    </div>
    <div class="amenities">
        <h3>Amenidades</h3>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-car"></span> Cochera</div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-tint"></span> Piscina</div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-leaf"></span> Jardin
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-shield"></span>
                Seguridad
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-wifi"></span> Internet</div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-phone"></span> Telefono
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-asterisk"></span> Aire
                Acondicionado
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem inactive"><span class="fa fa-sun-o"></span>
                Calefacción
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-fire"></span> Chimenea</div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-arrows-v"></span> Balcón</div>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 amItem"><span class="fa fa-desktop"></span> TV por Cable
            </div>
        </div>
    </div>
    <div class="similar">
        <h3>Propiedades similares</h3>
        <!-- carousel for medium & large devices -->
        <div id="carouselSimilar-1" class="carousel slide visible-lg carousel-col">
            <ol class="carousel-indicators">
                <li data-target="#carouselSimilar-1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSimilar-1" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="{!! asset('images/prop/1-1.png') !!}" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="{!! asset('images/prop/2-1.png') !!}" alt="image">
                                    <div class="figCaption">
                                        <div>$1,750,000</div>
                                        <span class="icon-eye"> 175</span>
                                        <span class="icon-heart"> 67</span>
                                        <span class="icon-bubble"> 9</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Hauntingly Beautiful Estate</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="{!! asset('images/prop/3-1.png') !!}" alt="image">
                                    <div class="figCaption">
                                        <div>$1,340,000</div>
                                        <span class="icon-eye"> 180</span>
                                        <span class="icon-heart"> 87</span>
                                        <span class="icon-bubble"> 12</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Sophisticated Residence</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 3</li>
                                    <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/4-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,930,000</div>
                                        <span class="icon-eye"> 145</span>
                                        <span class="icon-heart"> 99</span>
                                        <span class="icon-bubble"> 25</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Sale</div>
                                </div>
                                <h2>House With a Lovely Glass-Roofed Pergola</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/5-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$2,350,000</div>
                                        <span class="icon-eye"> 184</span>
                                        <span class="icon-heart"> 120</span>
                                        <span class="icon-bubble"> 18</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Luxury Mansion</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY
                                    11231, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/1-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carouselSimilar-1" role="button" data-slide="prev"><span
                        class="fa fa-chevron-left"></span></a>
            <a class="right carousel-control" href="#carouselSimilar-1" role="button" data-slide="next"><span
                        class="fa fa-chevron-right"></span></a>
        </div>

        <!-- carousel for small devices -->
        <div id="carouselSimilar-2" class="carousel slide visible-md carousel-col">
            <ol class="carousel-indicators">
                <li data-target="#carouselSimilar-2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSimilar-2" data-slide-to="1"></li>
                <li data-target="#carouselSimilar-2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/1-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/2-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,750,000</div>
                                        <span class="icon-eye"> 175</span>
                                        <span class="icon-heart"> 67</span>
                                        <span class="icon-bubble"> 9</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Hauntingly Beautiful Estate</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/3-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,340,000</div>
                                        <span class="icon-eye"> 180</span>
                                        <span class="icon-heart"> 87</span>
                                        <span class="icon-bubble"> 12</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Sophisticated Residence</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 3</li>
                                    <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/4-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,930,000</div>
                                        <span class="icon-eye"> 145</span>
                                        <span class="icon-heart"> 99</span>
                                        <span class="icon-bubble"> 25</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Sale</div>
                                </div>
                                <h2>House With a Lovely Glass-Roofed Pergola</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/5-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$2,350,000</div>
                                        <span class="icon-eye"> 184</span>
                                        <span class="icon-heart"> 120</span>
                                        <span class="icon-bubble"> 18</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Luxury Mansion</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY
                                    11231, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/1-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- carousel-inner -->
            <a class="left carousel-control" href="#carouselSimilar-2" role="button" data-slide="prev"><span
                        class="fa fa-chevron-left"></span></a>
            <a class="right carousel-control" href="#carouselSimilar-2" role="button" data-slide="next"><span
                        class="fa fa-chevron-right"></span></a>
        </div>

        <!-- carousel for extra-small devices -->
        <div id="carouselSimilar-3" class="carousel slide visible-xs visible-sm carousel-col">
            <ol class="carousel-indicators">
                <li data-target="#carouselSimilar-3" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSimilar-3" data-slide-to="1"></li>
                <li data-target="#carouselSimilar-3" data-slide-to="2"></li>
                <li data-target="#carouselSimilar-3" data-slide-to="3"></li>
                <li data-target="#carouselSimilar-3" data-slide-to="4"></li>
                <li data-target="#carouselSimilar-3" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/1-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/2-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,750,000</div>
                                        <span class="icon-eye"> 175</span>
                                        <span class="icon-heart"> 67</span>
                                        <span class="icon-bubble"> 9</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Hauntingly Beautiful Estate</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/3-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,340,000</div>
                                        <span class="icon-eye"> 180</span>
                                        <span class="icon-heart"> 87</span>
                                        <span class="icon-bubble"> 12</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Sophisticated Residence</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 3</li>
                                    <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/4-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,930,000</div>
                                        <span class="icon-eye"> 145</span>
                                        <span class="icon-heart"> 99</span>
                                        <span class="icon-bubble"> 25</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Sale</div>
                                </div>
                                <h2>House With a Lovely Glass-Roofed Pergola</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/5-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$2,350,000</div>
                                        <span class="icon-eye"> 184</span>
                                        <span class="icon-heart"> 120</span>
                                        <span class="icon-bubble"> 18</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">For Rent</div>
                                </div>
                                <h2>Luxury Mansion</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY
                                    11231, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 2</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-xs-12">
                            <div data-linkto="single.html" class="card">
                                <div class="figure">
                                    <img src="images/prop/1-1.png" alt="image">
                                    <div class="figCaption">
                                        <div>$1,550,000</div>
                                        <span class="icon-eye"> 200</span>
                                        <span class="icon-heart"> 54</span>
                                        <span class="icon-bubble"> 13</span>
                                    </div>
                                    <div class="figView"><span class="icon-eye"></span></div>
                                    <div class="figType">FOR SALE</div>
                                </div>
                                <h2>Modern Residence in New York</h2>
                                <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY
                                    11201, USA
                                </div>
                                <ul class="cardFeat">
                                    <li><span class="fa fa-moon-o"></span> 3</li>
                                    <li><span class="icon-drop"></span> 2</li>
                                    <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carouselSimilar-3" role="button" data-slide="prev"><span
                        class="fa fa-chevron-left"></span></a>
            <a class="right carousel-control" href="#carouselSimilar-3" role="button" data-slide="next"><span
                        class="fa fa-chevron-right"></span></a>
        </div>
    </div>
@endsection

@section('_footer')
    <script>
        var price_set = [];
        var price_limit = [];

        var _latitude =  {{ $property->latitude }};
        var _longitude = {{ $property->longitude }};
        var _props = [
            {
                id: {{ $property->id }},
                title: "{{ $property->details->title }}",
                image: '{!! $property->images->first()->system == 'URL' ? asset($property->images->first()->path):Storage::disk('public')->url($property->images->first()->path) !!}',
                type: '{{ trans('search.'.$property->operation) }}',
                price: '${{ number_format($property->price, 2, '.',',') }}',
                address: '{{ $property->address }}',
                bedrooms: '{{ $property->bedrooms }}',
                bathrooms: '{{ $property->bathrooms }}',
                area: '{{ $property->details->ground }} m<sup>2</sup>',
                position: {
                    lat: {{ $property->latitude }},
                    lng: {{ $property->longitude }}
                },
                markerIcon: "{{ $property->status == 'active'?"marker-blue.png":"marker-yellow.png" }}",
            },
        ];

                {{--@if($property->latitude && $property->longitude)
                    _latitude = {!! $property->latitude !!};
                _longitude = {!! $property->longitude !!};
                @else

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
                }
                //Get the latitude and the longitude;
                function successFunction(position) {
                    _latitude = position.coords.latitude;
                    _longitude = position.coords.longitude;
                    /*codeLatLng(lat, lng)*/
                }

                function errorFunction() {
                    _latitude = 20.6690251;
                    _longitude = -103.3388489;
                }
                        @endif--}}
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
    <script src="{!! asset('js/jquery.visible.js') !!}"></script>
@endsection
