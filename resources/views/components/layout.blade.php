<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Auth In Laravel 8</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    
    @guest
    <nav class="container mx-auto mt-10">
        <ul class="flex justify-center align-middle space-x-24">
            <li><a href="{{ route('admin.login') }}" class="border rounded-xl py-2 px-4 hover:bg-indigo-600 hover:text-white focus:outline-none shadow">Admin Login</a></li>
            <li><a href="{{ route('member.login') }}" class="border rounded-xl py-2 px-4 hover:bg-indigo-600 hover:text-white focus:outline-none shadow">Member Login</a></li>
        </ul>
    </nav>
    @endguest
    
    <main class="w-full md:w-2/3 flex flex-col items-center px-3 mx-auto mt-10 rounded-xl py-6">
        <section>
            {{ $slot }}
        </section>
    </main>
</body>
</html>