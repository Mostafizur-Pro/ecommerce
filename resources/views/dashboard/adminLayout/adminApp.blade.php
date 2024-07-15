<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Include your external CSS libraries if needed -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="max-w-screen-2xl mx-auto bg-[#14181b] text-white">
        <div class="grid lg:grid-cols-4 gap-5">
            <div class="hidden lg:block lg:col-span-1">
                @include('dashboard.shared.sidebar')
            </div>

            <div class="lg:col-span-2">
                @include('dashboard.shared.topbar')
                @yield('admin')
            </div>

            <div class="hidden lg:block lg:col-span-1">
                <!-- @include('dashboard.shared.sidebar') -->
            </div>
        </div>
    </div>

</body>

</html>