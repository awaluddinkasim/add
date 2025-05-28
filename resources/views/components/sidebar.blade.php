<body class="hs-overlay-body-open hs-overlay-body-open:overflow-hidden">

    <!-- Sidebar -->
    <div id="hs-sidebar-content-push"
        class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64 hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform h-full hidden fixed top-0 start-0 bottom-0 z-60 bg-cyan-800 border-e border-cyan-600"
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full ">
            <!-- Header -->
            <header class="p-4 flex justify-between items-center gap-x-2">
                <a class="flex-none font-semibold text-xl text-white focus:outline-hidden focus:opacity-80" href="/"
                    aria-label="Dana Desa Ntoke">Dana Desa Ntoke</a>

                <div class="lg:hidden -me-2">
                    <!-- Close Button -->
                    <button type="button"
                        class="flex justify-center items-center gap-x-3 size-6 bg-cyan-800 border border-cyan-600 text-sm text-gray-200 hover:bg-cyan-700 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-cyan-700"
                        data-hs-overlay="#hs-sidebar-content-push">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                    <!-- End Close Button -->
                </div>
            </header>
            <!-- End Header -->

            <!-- Body -->
            <nav
                class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-cyan-700 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                    <ul class="space-y-1">

                        @foreach (config('menu') as $menu)
                            @if ($menu['admin-only'] && auth()->guard('user')->check())
                                @continue
                            @endif
                            @isset($menu['submenu'])
                                <li class="hs-accordion" id="account-accordion">
                                    <button type="button"
                                        class="hs-accordion-toggle w-full text-start nav-link @if (request()->segment(1) == $menu['active']) nav-active @endif"
                                        aria-expanded="true" aria-controls="account-accordion-sub-1-collapse-1">
                                        <i data-lucide="{{ $menu['icon'] }}" class="h-4 w-4"></i>
                                        {{ $menu['label'] }}

                                        <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-200 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m18 15-6-6-6 6" />
                                        </svg>

                                        <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-200 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <div id="account-accordion-sub-1-collapse-1"
                                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 @if ($menu['active'] == request()->segment(1)) block @else hidden @endif"
                                        role="region" aria-labelledby="account-accordion">
                                        <ul class="pt-1 ps-7 space-y-1">
                                            @foreach ($menu['submenu'] as $submenu)
                                                <li>
                                                    <a class="nav-link @if (request()->segment(2) == $menu['active'] && request()->segment(2) == $submenu['active']) bg-cyan-600 @endif"
                                                        href="{{ isset($submenu['route-name']) ? route($submenu['route-name']) : '#' }}">
                                                        {{ $submenu['label'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li>
                                    <a class="nav-link @if (request()->segment(1) == $menu['active']) nav-active @endif"
                                        href="{{ isset($menu['route-name']) ? route($menu['route-name']) : '#' }}">
                                        <i data-lucide="{{ $menu['icon'] }}" class="h-4 w-4"></i>
                                        {{ $menu['label'] }}
                                    </a>
                                </li>
                            @endisset
                        @endforeach
                    </ul>
                </div>
            </nav>
            <!-- End Body -->
        </div>
    </div>
    <!-- End Sidebar -->


</body>
