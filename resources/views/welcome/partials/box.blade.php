<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <a href="#" class="propWidget-2">
        <div class="fig">
            <img src="{!! asset($property->images->first()->path) !!}" alt="{{ $property->details->title }}">
            <img class="blur" src="{!! asset($property->images->first()->path) !!}"
                 alt="{{ $property->details->title }}">
            <div class="opac"></div>
            <div class="priceCap osLight">
                <span>${{ number_format($property->price,2,'.',',').($property->status == 'for_rent'?' /mes':'') }}</span>
            </div>
            <div class="figType">{{ trans('search.'.$property->status) }}</div>
            <h3 class="osLight">{{ $property->details->title }}</h3>
            <div class="address">{{ $property->address }}</div>
        </div>
    </a>
</div>