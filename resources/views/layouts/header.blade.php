<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/books" class="text-xl font-semibold text-gray-800"> <i class="fa fa-home"></i> Books</a>
                </div>
                {{-- <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    <a href="/books" class="text-gray-900 inline-flex items-center px-1 pt-1 text-sm font-medium">Home</a>
                </div> --}}
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, toggle classes based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/books" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50">Home</a>
        </div>
    </div>
</nav>
