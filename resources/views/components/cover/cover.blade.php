<div class="bg-[#25292C] rounded-xl m-5 text-white px-10 relative border border-[rgba(77,71,55,0.60)]">
    <img class="absolute w-60 rounded-r-xl bottom-0 right-0 transform" alt="logo" src="{{ asset('assets/contact/contact-cover.png') }}" />
    <div class="container mx-auto flex flex-col md:flex-row items-center ">
        <div class="flex flex-col w-full lg:w-1/3 justify-center items-start py-8">
            <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug md:mb-2">@yield('cover', 'Default Title')</h2>
            <div class="my-4 text-lg text-white flex items-center gap-3">
                <a class="flex gap-3 items-center" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <style>
                            svg {
                                fill: #f7f7f7;
                            }
                        </style>
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    Home
                </a>
                <a class="text-lg text-[#F47500]" href="#slide4">❯❯</a>
                <p class="text-[#F47500] font-bold">@yield('cover', 'Default Title')</p>
            </div>
        </div>
    </div>
</div>