<div class="">
    <div class=" h-screen">
        <!-- Page Header -->
        <!-- Page Header -->
        @include('dashboard/profile/profileHeader')
        <!-- Page Header Close -->
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                <div class="box overflow-hidden">
                    <div class="box-body !p-0">
                        <div class="sm:flex items-start  px-4 main-profile-cover">
                            <style>
                                .main-profile-cover {
                                    position: relative;
                                    z-index: 9;
                                    background-image: url("{{asset('assets/cover/6.jpg')}}");
                                    background-size: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    opacity: 50;
                                }
                            </style>

                            <div>
                                <span class="avatar avatar-xxl avatar-rounded online m-4">
                                    <img src="https://spruko.com/demo/aspnet/tailwind/valex/dist/assets/images/faces/9.jpg" alt="">
                                </span>
                            </div>
                            <div class="flex-grow ">
                                <div class="flex items-center justify-between">
                                    <h6 class="font-semibold mb-1 text-white text-[1rem]">{{ auth()->user()->name }}</h6>
                                    <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i class="ri-add-line me-1 align-middle inline-block"></i>Follow</button>
                                </div>
                                <p class="mb-1 !text-white  opacity-[0.7]">{{ auth()->user()->email }}</p>
                                <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                    <span class="me-4 inline-flex"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                                    <span class="inline-flex"><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                                </p>
                                <div class="flex mb-0">
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">113</p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Projects</p>
                                    </div>
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12.2k
                                        </p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Followers</p>
                                    </div>
                                    <div class="me-6">
                                        <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                        <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Following</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                            <div class="mb-6">
                                <p class="text-[.9375rem] mb-2 font-semibold">Professional Bio :</p>
                                <p class="text-[0.75rem] text-textmuted opacity-[0.7] mb-0">
                                    I am <b class="!text-defaulttextcolor font-medium">{{ auth()->user()->name }},</b> here by conclude
                                    that,i am the founder and managing director of the prestigeous company name
                                    laugh at all and acts as the cheif executieve officer of the company.
                                </p>
                            </div>
                            <div class="mb-0">
                                <p class="text-[.9375rem] mb-2 font-semibold">Links :</p>
                                <div class="mb-0">
                                    <p class="mb-1">
                                        <a href="javascript:void(0)" class="text-primary"><u>https://mostafizur.diginieit.com/</u></a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="javascript:void(0)" class="text-primary"><u>https://www.linkedin.com/in/mostafizur-pro/</u></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                            <div class="text-textmuted">
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                        <i class="ri-mail-line align-middle text-[.875rem] text-textmuted"></i>
                                    </span>
                                    {{ auth()->user()->email }}
                                </p>
                                <p class="mb-2">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                        <i class="ri-phone-line align-middle text-[.875rem] text-textmuted"></i>
                                    </span>
                                    {{ auth()->user()->number }}
                                </p>

                            </div>
                        </div>

                        <div class="p-6 border-b dark:border-defaultborder/10 border-dashed">
                            <p class="text-[.9375rem] mb-2 me-6 font-semibold">Skills :</p>
                            <div>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">ReactJS</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">NextJS</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">Laravel</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">NodeJS</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">ExpressJS</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">Prisma</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">PostgreSQL</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">JavaScript</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">MongoDB</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">Mongoes</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">MySQL</span>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="badge bg-light text-textmuted m-1">SQL</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End::row-1 -->

    </div>
</div>