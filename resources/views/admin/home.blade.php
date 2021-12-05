<x-layout>
    <div>
        <h2 class="text-3xl my-6">Welcome from admin profile</h2>
        <h3>Email: {{auth('admin')->user()->email}}</h3>
        <h3>Name: {{auth('admin')->user()->name}}</h3>
        <h6 class="my-4">
            <a class="text-center uppercase text-blue-600 underline" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
    
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                @csrf
            </form> 
        </h6>
    </div>
</x-layout>