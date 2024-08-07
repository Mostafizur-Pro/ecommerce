<div class="navbar ">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-gray-900 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                @include('components/shared/navbar/itemNavbar')
            </ul>
        </div>
        <!-- <a class="btn btn-ghost text-xl">Glowix</a> -->
        <!-- <p>Flavourist<span>X</span></p> -->
        <div class="flex items-center text-xl pl-10">
            <h3 class="font-bold ">Flavourist</h3>
            <h3 class="font-bold  text-[#F47500]">X</h3>
        </div>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 ">
            @include('components/shared/navbar/itemNavbar')
        </ul>
    </div>
    @if(auth()->user())
    <div class="dropdown dropdown-end ">
        <label tabindex="0" class="flex items-center  gap-3">
            <div class="avatar online">
                <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img alt="User Avatar" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <p class="text-xl fond-bold capitalize">{{auth()->user()->name}}</p>
        </label>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-gray-900 rounded-box w-52">
            <li><a href="/dashboard">Dashboard</a></li>
            <li>
                <a href="/" class="justify-between">
                    Profile
                    <!-- <span class="badge">New</span> -->
                </a>
            </li>

            <li><a href="">Settings</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    @else
    <div class="navbar-end">
        <a href="/login" class="btn">Login</a>
    </div>
    @endif

</div>