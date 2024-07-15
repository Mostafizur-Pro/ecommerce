@extends('layouts.app')
@section('content')
@section('title', 'Signup')
<div>
    <div class="relative flex h-full w-full">
        <div class="h-screen w-1/2 bg-black">
            <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
                <div>
                    <p class="text-2xl">Signup|</p>
                    <p>please signup to continue|</p>
                </div>

                <div class="mt-10">
                    <form action="{{ url('signup') }}" method="POST">
                        @csrf
                        <div class="mt-4">
                            <label class="mb-2.5 block font-extrabold" for="name">Name</label>
                            <input type="text" id="name" name="name" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="name" required>
                        </div>
                        <div class="mt-4">
                            <label class="mb-2.5 block font-extrabold" for="number">Number</label>
                            <input type="text" id="number" name="number" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="Number" required>
                        </div>
                        <div class="mt-4">
                            <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="mail@user.com" required>
                        </div>
                        <div class="mt-4">
                            <label class="mb-2.5 block font-extrabold" for="password">Password</label>
                            <input type="password" id="password" name="password" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="password" required>
                        </div>
                        <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                            <div>
                                <a href="#" class="text-sm hover:text-gray-200">Forgot password</a>
                            </div>
                            <div>
                                <a href="/login" class="text-sm hover:text-gray-200">Login</a>
                            </div>
                        </div>
                        <div class="my-10">
                            <button type="submit" class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="h-screen w-1/2 bg-blue-600">
            <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
        </div>
    </div>
</div>
@endsection