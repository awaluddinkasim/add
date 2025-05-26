<header
    class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white border-b border-gray-200 text-sm py-3">
    <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between lg:ms-64">
        <div class="flex items-center justify-between w-full">
            <button type="button"
                class="lg:hidden flex justify-center items-center gap-x-3 size-8 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-content-push"
                aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-content-push">
                <svg class="sm:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m8 9 3 3-3 3" />
                </svg>
                <svg class="hidden sm:block shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="3" rx="2" />
                    <path d="M15 3v18" />
                    <path d="m10 15-3-3 3-3" />
                </svg>
                <span class="sr-only">Navigation Toggle</span>
            </button>

            <div
                class="hs-dropdown [--strategy:absolute] [--flip:false] hs-dropdown-example relative inline-flex ml-auto">
                <button class="shrink-0 group text-left" id="hs-dropdown-example" aria-haspopup="menu"
                    aria-expanded="false" aria-label="Dropdown">
                    <div class="flex items-center">
                        <img class="inline-block shrink-0 size-12 rounded-full" src="{{ asset('images/avatar.png') }}"
                            alt="Avatar">
                        <div class="ms-3">
                            <h3 class="font-semibold text-gray-800">Administrator</h3>
                            <p class="text-sm font-medium text-gray-400">admin@example.com</p>
                        </div>
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-example">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="#">
                        Newsletter
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="#">
                        Purchases
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="#">
                        Downloads
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="#">
                        Team Account
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
