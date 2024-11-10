<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    @include('components.Login.header')
{{-- TODO: BUAT LOGIN PAGE @UnggasHitamDariSukuPedalaman !! --}}
    <div class="bg-[#232b2b] flex flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-white">Login</h2>
        <form class="flex flex-col p-4 gap-2">
            @csrf
            <input
                type="email"
                placeholder="Email"
                class="p-1.5 rounded-lg"
                required
            />
            <input
                type="password"
                placeholder="Password"
                class="p-1.5 rounded-lg"
                required
            />
        </form>
    </div>
</body>
</html>
