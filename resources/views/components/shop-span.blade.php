@props(['cart'])

@php
  $carts = $cart ?? array();
@endphp

@if(!empty($carts))
    <span {{ $attributes->merge(['class' => 'simpleCart_total'])}}>
        {{ $carts['currency']['symbol'].$carts['sum'] }}
    </span>
@else
    <span class="simpleCart_total">Empty Cart</span>
@endif


