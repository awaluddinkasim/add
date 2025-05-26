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
                        <div>
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
                                        <input type="password" id="password" name="password"
                                            class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-cyan-700 focus:ring-cyan-700 dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                            required="">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Checkbox -->
                                <div class="flex items-center">
                                    <div class="flex">
                                        <input id="remember-me" name="remember-me" type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-cyan-700 pointer-events-none focus:ring-cyan-700 dark:bg-bgdark dark:border-white/10 dark:checked:bg-cyan-700 dark:checked:border-cyan-700 dark:focus:ring-offset-white/10">
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                    </div>
                                </div>
                                <!-- End Checkbox -->

                                <a href="index.html"
                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-cyan-700 text-white hover:bg-cyan-700 focus:outline-none focus:ring-0 focus:ring-cyan-700 focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                    in</a>
                            </div>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
