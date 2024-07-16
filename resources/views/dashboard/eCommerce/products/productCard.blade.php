<div class="min-h-screen">
    @foreach($productList as $post)
    <div class="">
        <div class="bg-[#25292C] m-5 rounded-xl border border-[rgba(77,71,55,0.60)] py-3 ps-3 mb-4 sm:mb-6">
            <div class="grid grid-cols-8 items-center">
                <div class="col-span-full sm:col-span-3">
                    <div class="overflow-hidden group duration-700 rounded-xl">
                        <img class="w-full group-hover:scale-[1.1] duration-700" src="https://flavouristx-html.vercel.app/assets/images/recipe-two.png" alt="Image">
                    </div>
                </div>
                <div class="col-span-full sm:col-span-5">
                    <div class="px-3 sm:px-5 md:px-6 lg:px-8 py-4 sm:py-5 lg:py-6">
                        <span class="lg:text-xl mb-3">{{$post->name}}</span>
                        <h3 class="mb-4">{{$post->title}}</h3>
                        <div class="flex items-center gap-4 sm:gap-6 pb-3 sm:pb-4 mb-3 sm:mb-4 border-b border-[#4D4737]">
                            <div class="flex items-center gap-1 cursor-pointer">
                                <i class="ph-bold ph-fork-knife text-xl text-primary"></i>
                                <span>Supereasy</span>
                            </div>
                            <div class="flex items-center gap-1 cursor-pointer">
                                <i class="ph-bold ph-clock-afternoon text-xl text-primary"></i>
                                <span>30min</span>
                            </div>
                            <div class="flex items-center gap-1 cursor-pointer">
                                <i class="ph-bold ph-thumbs-up text-xl text-primary"></i>
                                <span>Easy</span>
                            </div>
                        </div>
                        @if(isset($post->details[0]))
                        <p class="mb-5 md:mb-6 lg:mb-8">{{ $post->details[0] }}..</p>
                        @endif
                        <a href="./instant-pot.html" class="underline font-bold">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>