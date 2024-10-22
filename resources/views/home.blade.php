<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="max-h-screen bg-neutral-900 text-neutral-50 antialiased">


    {{-- Navigation Bar --}}
    @include('layouts.navbar')

    <div class="flex flex-col justify-center h-screen items-center gap-10">
        <div class="flex flex-col gap-2 text-center">
            <h1 class="text-7xl font-semibold ">Order Today, Delivery Today</h1>
            <h3 class="text-3xl font-normal tracking-wide">#DeliveringHappiness</h3>
        </div>
        <div>
            <a href="">
                <button class="bg-pink-200 px-5 py-2 text-lg text-neutral-950  font-semibold rounded-lg">Shop</button>
            </a>
        </div>
    </div>

</body>


</html>
