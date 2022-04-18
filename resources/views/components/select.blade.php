<div class="box">
    <select {{ $attributes->merge(["class" => "dropdown","tabindex" => "4" ]) }}>
        {{ $slot }}
    </select>
</div>
