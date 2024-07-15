@extends('layouts.app')
@section('content')
@section('title', 'Login')
<div>
    <!-- Logger Start -->
    @include('components.logger.logger')
    <!-- Logger End -->
    <div class="relative flex h-full w-full">
        <div class="h-screen w-1/2 bg-black">
            <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
                <div>
                    <p class="text-2xl">Login|</p>
                    <p>please login to continue|</p>
                </div>
                <div class="my-6">
                    <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2"><img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />Sign in with Google</button>
                </div>
                <div>
                    <fieldset class="border-t border-solid border-gray-600">
                        <legend class="mx-auto px-2 text-center text-sm">Or login via our secure system</legend>
                    </fieldset>
                </div>
                <div class="mt-10">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
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
                                <a href="/signup" class="text-sm hover:text-gray-200">Signup</a>
                            </div>
                        </div>
                        <div class="my-10">
                            <button type="submit" class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Login</button>
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
