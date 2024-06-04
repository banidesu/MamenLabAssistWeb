<nav class="md:fixed sticky top-0 w-full md:bg-transparent backdrop-blur z-10 border-b shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-10 md:w-12 h-10 md:h-12 bg-transparent rounded-full">
                        <img src="{{ asset('img/logo-mamen-hd.png') }}" alt="Logo Lab Manajemen Menengah">
                    </div>
                </div>
                <div class="ml-4">
                    <span class="text-xl text-dark md:text-white font-semibold">V-Lab</span>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#"
                        class="text-dark md:text-white border border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Home</a>
                    <a href="#"
                        class="text-dark md:text-white border border-transparent hover:border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">About</a>
                    <a href="#"
                        class="text-dark md:text-white border border-transparent hover:border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Praktikum</a>
                    <a href="#"
                        class="text-dark md:text-white border border-transparent hover:border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Download</a>
                    <a href="#"
                        class="text-dark md:text-white border border-transparent hover:border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Contact</a>
                    <a href="#"
                        class="text-dark md:text-white border border-transparent hover:border-gray-300 px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Login</a>
                </div>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-dark md:text-white hover:text-gray-900 focus:outline-none focus:ring focus:ring-offset-4 rounded">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div id="mobile-menu"
        class="overflow-hidden absolute bg-white w-full max-h-0 transition-all duration-300 ease-in-out">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Home</a>
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-transparent hover:border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">About</a>
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-transparent hover:border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Praktikum</a>
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-transparent hover:border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Download</a>
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-transparent hover:border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Contact</a>
            <a href="#"
                class="text-gray-700 hover:text-gray-900 border border-transparent hover:border-gray-300 block px-3 py-2 rounded-ss-lg rounded-ee-lg hover:shadow-sm transition-colors duration-100 outline-none text-sm font-medium">Login</a>
        </div>
    </div>
</nav>
@section('script')
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.style.maxHeight && menu.style.maxHeight !== '0px') {
                menu.style.maxHeight = '0px';
            } else {
                menu.style.maxHeight = menu.scrollHeight + 'px';
            }
        });
    </script>
@endsection
