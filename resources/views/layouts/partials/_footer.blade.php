<footer>
    <p class="text-gray-400">

        &copy; Copyright {{date('Y')}}

        @if (! Route::is('about'))
            &middot; <a href="/about-us" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>    
        @endif
        
    </p>
</footer>