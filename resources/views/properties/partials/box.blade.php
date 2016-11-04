<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="card">
        <div class="figFav" data-value="{!! $property->id !!}" data-status=""
             onmouseover="$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart')"
             onmouseleave="$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o')">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
        </div>
        <div class="figure" onclick="window.location = '{!! route('properties.show',['id'=>$property->id]) !!}'">
            <img src="/images/prop/1-1.png" alt="image">
            <div class="propDetails">
                $ {{ number_format($property->price, 2,'.',','). ($property->status == 'for_rent'?' /mes':'') }}
            </div>
            {{--<div class="figCaption">
                <div>${{ number_format($property->price, 2,'.',',') }}</div>
                <span class="icon-eye"> 200</span>
                <span class="icon-heart"> 54</span>
                <span class="icon-bubble"> 13</span>
            </div>--}}
            <div class="figView"><span class="icon-eye"></span></div>
            <div class="figType">{{ trans('search.'.$property->status) }}</div>

        </div>
        <h2 onclick="window.location = '{!! route('properties.show',['id'=>$property->id]) !!}'">
            {!! $property->details->title !!}
        </h2>
        <div class="cardAddress" onclick="window.location = '{!! route('properties.show',['id'=>$property->id]) !!}'">
            <i class="fa fa-map-marker" aria-hidden="true"></i> 39 Remsen St, Brooklyn, NY 11201, USA
        </div>
        <ul class="cardFeat">
            <li>
                <i class="fa fa-bed" aria-hidden="true"></i>
                {{ $property->bedrooms }}
            </li>
            <li>
                <i class="fa fa-bath" aria-hidden="true"></i>
                {{ $property->bathrooms }}
            </li>
            <li>
                <span class="icon-frame"></span> {{ $property->details->construction }} m<sup>2</sup>
            </li>
            <li style="float: right; font-size: large;">
                <i class="fa fa-download downPDF" aria-hidden="true" style="cursor: pointer;"
                   data-value="{{ $property->id }}"></i>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>