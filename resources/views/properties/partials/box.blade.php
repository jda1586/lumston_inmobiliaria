<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <a href="{!! route('properties.show',['id'=>$property->id]) !!}" class="card">
        <div class="figure">
            <img src="/images/prop/1-1.png" alt="image">
            <div class="propDetails">
                ${{ number_format($property->price, 2,'.',','). ($property->status == 'for_rent'?' /mes':'') }}
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
        <h2>{!! $property->details->title !!}</h2>
        <div class="cardAddress">
                <i class="fa fa-map-marker" aria-hidden="true"></i> 39 Remsen St, Brooklyn, NY 11201, USA
        </div>
        {{--<div class="cardRating">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star-o"></span>
            (146)
        </div>--}}
        <ul class="cardFeat">
            <li><i class="fa fa-bed" aria-hidden="true"></i> {{ $property->bedrooms }}</li>
            <li><i class="fa fa-bath" aria-hidden="true"></i> {{ $property->bathrooms }}</li>
            <li><span class="icon-frame"></span> {{ $property->details->construction }} m<sup>2</sup></li>
        </ul>
        <div class="clearfix"></div>
    </a>
</div>