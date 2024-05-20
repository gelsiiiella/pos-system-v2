<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                
                <div class="relative overflow-hidden bg-warning shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required>
                                </div>
                            </form>
                        </div>
                        <div class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
                            <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-black bg-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Add product
                            </button>
                            <div class="flex items-center w-full space-x-3 md:w-auto">
                                <button type="button" id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                    <svg class="w-5 h-5 -ml-1 mr-1.5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    Actions
                                </button>
                                <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded shadow dark:bg-gray-700 dark:divide-gray-600 divide-y divide-gray-100">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a></li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Delete all</a>
                                    </div>
                                </div>
                                <button type="button" id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd"></path>
                                    </svg>
                                    Filter
                                    <svg class="w-5 h-5 -mr-1 ml-1.5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div id="filterDropdown" class="hidden z-10 w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                        <li class="flex items-center">
                                            <input id="apple" type="checkbox" value="" class="w-4 h-4 text-primary-600 border-gray-300 rounded bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                            <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple (56)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="microsoft" type="checkbox" value="" class="w-4 h-4 text-primary-600 border-gray-300 rounded bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                            <label for="microsoft" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft (16)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="razor" type="checkbox" value="" class="w-4 h-4 text-primary-600 border-gray-300 rounded bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                            <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor (49)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="nikon" type="checkbox" value="" class="w-4 h-4 text-primary-600 border-gray-300 rounded bg-gray-100 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                            <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon (12)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Product name</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Brand</th>
                                    <th scope="col" class="px-4 py-3">Price</th>
                                    <th scope="col" class="px-4 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Placeholder for product rows -->
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Apple MacBook Pro 17"</th>
                                    <td class="px-4 py-3">Laptop</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">$2999</td>
                                    <td class="flex items-center px-4 py-3 space-x-3">
                                        <button type="button" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Edit</button>
                                        <button type="button" class="font-medium text-danger-600 dark:text-danger-500 hover:underline">Delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Microsoft Surface Pro</th>
                                    <td class="px-4 py-3">Laptop PC</td>
                                    <td class="px-4 py-3">Microsoft</td>
                                    <td class="px-4 py-3">$1999</td>
                                    <td class="flex items-center px-4 py-3 space-x-3">
                                        <button type="button" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Edit</button>
                                        <button type="button" class="font-medium text-danger-600 dark:text-danger-500 hover:underline">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">Magic Mouse 2</th>
                                    <td class="px-4 py-3">Accessories</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">$99</td>
                                    <td class="flex items-center px-4 py-3 space-x-3">
                                        <button type="button" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Edit</button>
                                        <button type="button" class="font-medium text-danger-600 dark:text-danger-500 hover:underline">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex items-center justify-between p-4">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.293 4.293a1 1 0 010 1.414L8.414 10l3.879 3.879a1 1 0 01-1.414 1.414l-4.5-4.5a1 1 0 010-1.414l4.5-4.5a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                            </li>
                            <li>
                                <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.707 15.707a1 1 0 010-1.414L11.586 10 7.707 6.121a1 1 0 011.414-1.414l4.5 4.5a1 1 0 010 1.414l-4.5 4.5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
