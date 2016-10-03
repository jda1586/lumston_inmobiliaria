@extends('layouts._main')

@section('title','Propiedades')

@section('content')
    <div class="filter">
        <h1 class="osLight">Filtra tus resultados</h1>
        <a href="#" class="handleFilter"><span class="icon-equalizer"></span></a>
        <div class="clearfix"></div>
        <form class="filterForm">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                    <div class="formField">
                        <label>Tipo de propiedad</label>
                        <a href="#" data-toggle="dropdown"
                           class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                            <span class="dropdown-label">Todo</span>
                            <span class="fa fa-angle-down dsArrow"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select full" role="menu">
                            <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todo</a>
                            </li>
                            <li><input type="radio" name="pType"><a href="#">Renta</a></li>
                            <li><input type="radio" name="pType"><a href="#">Venta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                    <div class="formField">
                        <label>Precio</label>
                        <div class="slider priceSlider">
                            <div class="sliderTooltip">
                                <div class="stArrow"></div>
                                <div class="stLabel"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                    <div class="formField">
                        <label>Area</label>
                        <div class="slider areaSlider">
                            <div class="sliderTooltip">
                                <div class="stArrow"></div>
                                <div class="stLabel"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                    <div class="formField">
                        <label>Habitaciones</label>
                        <div class="volume">
                            <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                            <input type="text" class="form-control" readonly="readonly" value="1">
                            <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                    <div class="formField">
                        <label>Baños</label>
                        <div class="volume">
                            <a href="#" class="btn btn-gray btn-round-left"><span class="fa fa-angle-left"></span></a>
                            <input type="text" class="form-control" readonly="readonly" value="1">
                            <a href="#" class="btn btn-gray btn-round-right"><span class="fa fa-angle-right"></span></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="resultsList">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/1-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,550,000</div>
                            <span class="icon-eye"> 200</span>
                            <span class="icon-heart"> 54</span>
                            <span class="icon-bubble"> 13</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>Modern Residence in New York</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (146)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/2-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,750,000</div>
                            <span class="icon-eye"> 175</span>
                            <span class="icon-heart"> 67</span>
                            <span class="icon-bubble"> 9</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Hauntingly Beautiful Estate</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (123)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/3-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,340,000</div>
                            <span class="icon-eye"> 180</span>
                            <span class="icon-heart"> 87</span>
                            <span class="icon-bubble"> 12</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Sophisticated Residence</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (120)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 3</li>
                        <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/4-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,930,000</div>
                            <span class="icon-eye"> 145</span>
                            <span class="icon-heart"> 99</span>
                            <span class="icon-bubble"> 25</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>House With a Lovely Glass-Roofed Pergola</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (170)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/5-1.png" alt="image">
                        <div class="figCaption">
                            <div>$2,350,000</div>
                            <span class="icon-eye"> 184</span>
                            <span class="icon-heart"> 120</span>
                            <span class="icon-bubble"> 18</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Luxury Mansion</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY 11231, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (257)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/1-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,550,000</div>
                            <span class="icon-eye"> 200</span>
                            <span class="icon-heart"> 54</span>
                            <span class="icon-bubble"> 13</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>Modern Residence in New York</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (146)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/2-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,750,000</div>
                            <span class="icon-eye"> 175</span>
                            <span class="icon-heart"> 67</span>
                            <span class="icon-bubble"> 9</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Hauntingly Beautiful Estate</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (123)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/3-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,340,000</div>
                            <span class="icon-eye"> 180</span>
                            <span class="icon-heart"> 87</span>
                            <span class="icon-bubble"> 12</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Sophisticated Residence</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (120)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 3</li>
                        <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/4-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,930,000</div>
                            <span class="icon-eye"> 145</span>
                            <span class="icon-heart"> 99</span>
                            <span class="icon-bubble"> 25</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>House With a Lovely Glass-Roofed Pergola</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (170)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/5-1.png" alt="image">
                        <div class="figCaption">
                            <div>$2,350,000</div>
                            <span class="icon-eye"> 184</span>
                            <span class="icon-heart"> 120</span>
                            <span class="icon-bubble"> 18</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Luxury Mansion</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY 11231, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (257)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
        <ul class="pagination">
            <li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>
    </div>
@endsection

