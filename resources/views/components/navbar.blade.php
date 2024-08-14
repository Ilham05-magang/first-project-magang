<nav class="bg-[#D9D9D9]">
    <div class="flex flex-wrap items-center justify-center gap-4 sm:justify-between max-w-screen-xl py-4 md:p-4 mx-auto">
        <span class="self-center text-2xl font-bold ">Data Siswa</span>
        <form action="{{ route('siswas.search') }}" method="GET">
            <div class="relative">
                <input
                    type="search"
                    name="query"
                    class="font-medium decoration-none border-0 rounded-full w-60 p-2.5 no-cancel-button"
                    placeholder="Search">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-4">
                    <i class="ri-search-line"></i>
                </button>
            </div>
        </form>

    </div>
</nav>
