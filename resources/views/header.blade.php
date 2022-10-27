@php
    $links = [
        'link1' => [
            'url' => '/',
            'name' => 'Home',
        ],
        'link2' => [
            'url' => '/presentazione',
            'name' => 'Presentazione',
        ],
        'link3' => [
            'url' => '/lista',
            'name' => 'Lista',
        ],
    ];
@endphp


<header class="d-flex gap-3 my-3">
    @foreach ($links as $link)
        <a href="{{ url($link['url']) }}">{{ $link['name'] }}</a>
    @endforeach

</header>
