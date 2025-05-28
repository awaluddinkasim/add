<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <div class="flex bg-gray-100 min-h-screen items-center">


        <main id="content" class="w-full max-w-md mx-auto p-6 my-7">
            <img src="{{ asset('images/logo.png') }}" alt="" class="w-32 mx-auto">

            <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Selamat Datang</h1>
                        <h2 class="block text-xl font-bold text-gray-600 dark:text-white">Sistem Informasi Anggaran
                            Dana Desa Ntoke</h2>
                    </div>

                    <div class="mt-5">
                        <form action="{{ route('authenticate') }}" method="post" autocomplete="off">
                            <x-errors />

                            @csrf
                            <div class="grid gap-y-4">
                                <!-- Form Group -->
                                <div>
                                    <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                        address</label>
                                    <div class="relative">
                                        <input type="email" id="email" name="email"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-cyan-700 focus:ring-cyan-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required="">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div>
                                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                    <div class="relative">
                                        <input id="password" type="password" name="password"
                                            class="py-2.5 sm:py-3 ps-4 pe-10 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                            required>
                                        <button type="button"
                                            data-hs-toggle-password='{
                                                "target": "#password"
                                            }'
                                            class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                                            <svg class="shrink-0 size-3.5" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path class="hs-password-active:hidden"
                                                    d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                                <path class="hs-password-active:hidden"
                                                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                                </path>
                                                <path class="hs-password-active:hidden"
                                                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                                </path>
                                                <line class="hs-password-active:hidden" x1="2" x2="22"
                                                    y1="2" y2="22"></line>
                                                <path class="hidden hs-password-active:block"
                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                <circle class="hidden hs-password-active:block" cx="12"
                                                    cy="12" r="3">
                                                </circle>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="flex items-center">
                                    <div class="flex">
                                        <input id="remember-me" name="remember" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-cyan-700 pointer-events-none focus:ring-cyan-700 dark:bg-bgdark dark:border-white/10 dark:checked:bg-cyan-700 dark:checked:border-cyan-700 dark:focus:ring-offset-white/10">
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <button type="submit"
                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-cyan-700 text-white hover:bg-cyan-700 focus:outline-none focus:ring-0 focus:ring-cyan-700 focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                    in</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
