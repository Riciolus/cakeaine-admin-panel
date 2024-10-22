<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-screen max-h-screen antialiased w-screen">

    @include('layouts.navbar')

    <div class="flex justify-center items-center h-full bg-neutral-900 text-neutral-50">
        {{-- Card --}}
        <div class="relative px-16 py-12 bg-neutral-900 border border-neutral-700 rounded-lg overflow-hidden">
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
            <form action="">
                {{-- Input Field --}}
                <div class="flex flex-col gap-2 mt-10 z-10">
                    <div class="flex flex-col gap-1.5 z-10">
                        <label for="username" class="font-semibold">Username</label>
                        <input name="username" id="username" type="text" placeholder="fufufafa"
                            class="rounded-md bg-neutral-800 w-[23rem] placeholder-neutral-300 text-sm h-10 border border-neutral-700 ps-2.5">
                    </div>
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
                    <div class="flex flex-col gap-1.5 z-10">
                        <label for="Validate Password" class="font-semibold">Validate Password</label>
                        <input name="validatePassword" id="validatePassword" type="password" placeholder="*****"
                            class="rounded-md bg-neutral-800 w-[23rem] placeholder-neutral-300 text-sm h-10 border border-neutral-700 ps-2.5">
                    </div>
                </div>
                {{-- Button Field --}}
                <div class="flex justify-center mt-8">
                    <button
                        class="py-2 rounded-md w-full bg-neutral-700 z-10 font-semibold hover:bg-neutral-900/70 border border-neutral-600 transition-colors">Sign
                        Up</button>
                </div>
            </form>
        </div>
    </div>
</body>


</html>
