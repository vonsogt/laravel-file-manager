<x-layout-admin>
    <x-slot name="title">
        Login
    </x-slot>

    <x-slot name="body">
        login
    </x-slot>

    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="{{ route('home') }}" class="-intro-x flex items-center pt-5">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ asset('vendor/midone/dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> Laravel<span class="font-medium"> File Manager</span> </span>
                </a>
                <div class="my-auto">
                    <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('vendor/midone/dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Share files with
                        <br>
                        teammates everyday
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Easy access, fast and secure.</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <form class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        {{ trans('lfm.sign_in') }}
                    </h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Share files with teammates everyday. Easy access, fast and secure.</div>
                    <div class="intro-x mt-8">
                        <input name="email" type="text" value="{{ old('email', '') }}" class="intro-x login__input form-control py-3 px-4 border-gray-300 block @error('email') border-theme-6 @enderror" placeholder="{{ trans('lfm.email') }}" required>
                        @error('email')
                            <span class="flex items-center font-medium tracking-wide text-xs mt-1 ml-1 text-theme-6">
                                {{ $message }}
                            </span>
                        @enderror

                        <input name="password" type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="{{ trans('lfm.password') }}">
                    </div>
                    <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input name="remember_me" id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">{{ trans('lfm.remember_me') }}</label>
                        </div>
                        <a href="">{{ trans('lfm.forgot_password') }}?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">{{ trans('lfm.login') }}</button>
                    </div>
                </div>
            </form>
            <!-- END: Login Form -->
        </div>
    </div>

</x-layout-admin>
