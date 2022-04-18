@props(['currency'])

@if($currency)
    <x-option  class="label" :key="$currency['code']">{{ strtoupper($currency['code']) }}</x-option>
    @foreach($currency['child'] as $k=>$v)
        <x-option :key="$k">{{ strtoupper($k) }}</x-option>
    @endforeach
@else

@endif
