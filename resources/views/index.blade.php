<x-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">Laravel File Manager</h1>
                <h2 class="masthead-subheading mb-0">Will Manage All Your Files</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('vendor/startbootstrap/one-page-wonder/assets/img/01.jpg') }}" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Share files with teammates everyday</h2>
                        <p>Easy access, fast and secure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
