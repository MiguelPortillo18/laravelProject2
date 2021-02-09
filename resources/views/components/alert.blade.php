<div {{$attributes->merge(['class' => "bg-orange$color-100 border-l-4 border-orange$color-500 text-orange$color-700 p-4"])}} role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$slot}}</p>
    {{$prueba()}}
</div>