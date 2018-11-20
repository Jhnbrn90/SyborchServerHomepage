<nav class="rounded-lg">
    <div class="flex p-2 items-center">
        <div class="w-1/4"></div>
        <div class="w-1/2 text-center">
            <div class="sm:text-5xl text-3xl font-medium tracking-wide">
                <a href="/">
                    <img class="mb-2 sm:mb-0" src="logo.jpg">
                </a>
            </div>
        </div>

        <div class="w-1/4 text-right mr-8 sm:text-normal text-xs font-medium ml-4 sm:ml-0">
            @auth
            <span class="text-grey-dark">Hi there, <span class="font-medium text-blue-dark">{{ ucfirst(auth()->user()->firstname) }}</span>!
            </span> <br><a class="no-underline text-grey hover:text-red-light" href="/logout">(log out)</a> @else
            <auth-buttons></auth-buttons> @endauth
        </div>
    </div>
</nav>
