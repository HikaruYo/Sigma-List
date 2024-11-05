<section class="p-3 bg-gray-200 w-80 rounded-xl">
    <div class="flex flex-col justify-between items-center mx-auto">
        <div>
            {{-- TODO: Make Search Engine --}}
            @include('components.Function.search')
        </div>
        <div class="flex flex-col px-2 pt-4 w-full font-medium">
            <h2 class="text-2xl">Category</h2>
            <p>Top Anime</p>
            {{-- Saran, Dropdown untuk Tags --}}
            <p>Tags</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 p-2 border-2 border-black rounded-lg mt-2 bg-gray-300 text-sm">
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Top Anime</a>
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Movie</a>
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Action</a>
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Fantasy</a>
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Romance</a>
                <a href="" class="hover:text-gray-400 transition duration-200 border-b-2 border-black text-center pb-1">Slice of Life</a>
                <a href="" class="hover:text-gray-400 transition duration-200 text-center">Comedy</a>
                <a href="" class="hover:text-gray-400 transition duration-200 text-center">Drama</a>
                <a href="" class="hover:text-gray-400 transition duration-200 text-center">Horror</a>
            </div>
        </div>
    </div>
</section>
