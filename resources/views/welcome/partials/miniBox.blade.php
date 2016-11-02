<li>
    <a href="{!! route('properties.show',['id' => $property->id]) !!}">
        <div style="float: left; margin-right: 10px;">
            <img src="http://mariusn.com/themes/reales-wp/wp-content/uploads/2014/12/bg-1-120x120.jpg"
                 width="60" height="60">
        </div>
        <div>
            <div>{{ $property->details->title }}</div>
            <div style="font-size: 11px; color: gray;">
                {{ $property->address }}
            </div>
            <div>
                $ {{ number_format($property->price,2,'.',',') }}
                <span class="badge">{{ trans('search.'.$property->status) }}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </a>
</li>