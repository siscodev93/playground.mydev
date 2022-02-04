<nav class='flex items-center p-3 bg-slate-700 text-white shadow-lg fixed w-full'>

    <div class="w-full mx-10 flex flex-row justify-between items-center">
        <a href="#" class='font-bold text-xl'>MyPlayground</a>

        <div class="navlinks flex font-light align-center">
            <a href="#" class='px-4 py-2'>About</a>
            <a href="#" class='px-4 py-2'>Services</a>
            <a href="#" class='px-4 py-2'>Contact Us</a>

            @if(Route::has('account.login') && auth()->guest())
                <a href="{{ route('account.login') }}" class='border-white border rounded-lg px-4 py-2 transition duration-300 hover:bg-white hover:text-slate-800' >Account</a>
            @elseif(Route::has('login') && ! auth()->guest())
                <a href="{{ route('account.dashboard') }}" class='border-white border rounded-lg px-4 py-2 transition duration-300 hover:bg-white hover:text-slate-800' >My Account</a>
            @endif

        </div>
    </div>
</nav>
