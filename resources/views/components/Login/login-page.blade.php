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
<body class="bg-[#232b2b]">
    @include('components.Login.header')

    <div class="flex items-center justify-center m-20">
        {{-- TODO: BUAT LOGIN PAGE @UnggasHitamDariSukuPedalaman !! --}}
        <div class="bg-gray-600 w-fit p-6 flex flex-col items-center justify-center shadow-2xl rounded-xl">
            <h2 class="text-3xl font-bold text-white">Login</h2>
            <form method="post" class="flex flex-col p-4 gap-2">
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
                <button
                    type="submit"
                    class="bg-black bg-opacity-60 rounded-lg text-white text-xl p-1 mt-6"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
