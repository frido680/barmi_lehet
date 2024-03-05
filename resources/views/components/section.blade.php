@props([ 'type' => 'success',
'colors' => [

'success' => 'bg-green-400',

'unsuccessful' => 'bg-red-400',

'doubtful' => 'bg-gray-400'
]
])
<section class="
        p-4
        mb-6
        {{$colors[$type]}}
        ">
    <div class="container">

        {{ $slot }}

    </div>

</section>