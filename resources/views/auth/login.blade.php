<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="max-h-screen bg-neutral-900 overflow-hidden antialiased">

    <div class="flex flex-col justify-center items-center overflow-hidden h-svh ">

        {{-- Navigation Bar --}}
        @include('layouts.navbar')


        <div class="flex justify-center items-center h-full bg-neutral-900 text-neutral-50">
            {{-- Card --}}
            <div
                class="relative flex flex-col justify-center items-center px-16 py-12 bg-neutral-900 h-full sm:h-fit sm:border border-neutral-700 rounded-lg overflow-hidden">

                {{-- Icon Particles --}}
                <div>
                    <img src="{{ asset('static/images/cookie_3d.png') }}" alt="ice-cream"
                        class="absolute w-12 top-8 left-9 -rotate-12 z-20 opacity-60">

                    <img src="{{ asset('static/images/shortcake_3d.png') }}" alt="ice-cream"
                        class="absolute w-20 opacity-35 top-[20%] right-10 -rotate-3 z-10">

                    <img src="{{ asset('static/images/birthday_cake_3d.png') }}" alt="ice-cream"
                        class="absolute w-44 -bottom-5 -left-6 opacity-25 rotate-12 z-10">
                </div>

                {{-- Background Gradients --}}
                <div
                    class="absolute bg-gradient-to-l from-rose-200 to-amber-100 w-[33%] h-[25%] rounded-full blur-[82px]  top-0 right-0">
                </div>
                <div
                    class="absolute bg-gradient-to-l from-pink-400 to-blue-500 w-[70%] h-[20%] opacity-55 rounded-full blur-3xl  bottom-0 -left-16">
                </div>

                {{-- Title --}}
                <div class="flex justify-center mt-3">
                    <h1 class="text-3xl font-bold tracking-wide z-10">
                        Cakeaine Cakeshop
                    </h1>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('handleLogin') }}">
                    @csrf
                    {{-- Input Field --}}
                    <div class="flex flex-col gap-2 mt-10 z-10">

                        <div class="flex flex-col gap-1.5 z-10">
                            <label for="email" class="font-semibold">Email</label>
                            <input name="email" id="email" type="email" placeholder="example@gmail.com"
                                class="rounded-md bg-neutral-800 w-[23rem] placeholder-neutral-300 text-sm h-10 border border-neutral-700 ps-2.5">
                        </div>
                        <div class="flex flex-col gap-1.5 z-10">
                            <label for="Password" class="font-semibold">Password</label>
                            <input name="password" id="password" type="password" placeholder="*****"
                                class="rounded-md bg-neutral-800 w-[23rem] placeholder-neutral-300 text-sm h-10 border border-neutral-700 ps-2.5">
                        </div>

                    </div>
                    {{-- Button Field --}}
                    <div class="relative flex justify-center mt-8">
                        <button
                            class="py-2 rounded-md w-full bg-neutral-700 z-10 font-semibold hover:bg-neutral-800 border border-neutral-600 transition-colors">Sign
                            In</button>
                    </div>
                </form>
            </div>
        </div>
</body>


</html>
