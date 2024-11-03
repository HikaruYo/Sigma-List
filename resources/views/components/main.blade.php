<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sigma List</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('components.header')

    {{-- Main Page --}}
    <div class="flex pt-10 lg:px-52 md:px-20 sm:px-12 px-8 pb-8 md:flex-row flex-col justify-between gap-2 bg-[#232b2b]">
        @include('components.search-box')
        @include('components.home')
    </div>

</body>
</html>
