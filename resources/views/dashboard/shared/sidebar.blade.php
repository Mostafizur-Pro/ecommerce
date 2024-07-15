<!-- resources/views/partials/sidebar.blade.php -->
<aside class="lg:px-3 lg:py-3 px-3 py-3 space-y-3 z-10 text-white">
    <div class="mb-20">
        <div class="mb-5 mt-2">
            <div class="flex items-center text-xl pl-10">
                <h3 class="font-bold ">Flavourist</h3>
                <h3 class="font-bold  text-[#F47500]">X</h3>
            </div>
        </div>
        <div class="bg-[#25292C] rounded-xl m-5 text-white relative border border-[rgba(77,71,55,0.60)]">
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-2 py-2 px-3">
                <p>Dashboard</p>
            </a>
            <a href="{{ url('/profile') }}" class="flex items-center gap-2 py-2 px-3">
                <p>Profile</p>
            </a>
            <a href="{{ url('/setting') }}" class="flex items-center gap-2 py-2 px-3">
                <p>Setting</p>
            </a>
        </div>      


    </div>
</aside>