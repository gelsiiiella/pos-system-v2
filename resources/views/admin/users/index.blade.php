<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div
                        class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label class="sr-only" for="simple-search">Search</label>
                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path clip-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input
                                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                        id="simple-search" placeholder="Search" required="" type="text">
                                </div>
                            </form>
                        </div>
                        <div
                            class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
                            <button
                                class="bg-primary-700 hover:bg-primary-800 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 flex items-center justify-center rounded-lg px-4 py-2 text-sm font-medium text-white focus:outline-none focus:ring-4"
                                type="button">
                                <svg aria-hidden="true" class="mr-2 h-3.5 w-3.5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        fill-rule="evenodd" />
                                </svg>
                                Add product
                            </button>
                            <div class="flex w-full items-center space-x-3 md:w-auto">
                                <button
                                    class="hover:text-primary-700 flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                                    data-dropdown-toggle="actionsDropdown" id="actionsDropdownButton" type="button">
                                    <svg aria-hidden="true" class="-ml-1 mr-1.5 h-5 w-5" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            fill-rule="evenodd" />
                                    </svg>
                                    Actions
                                </button>
                                <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                    id="actionsDropdown">
                                    <ul aria-labelledby="actionsDropdownButton"
                                        class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                href="#">Mass Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                            href="#">Delete all</a>
                                    </div>
                                </div>
                                <button
                                    class="hover:text-primary-700 flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                                    data-dropdown-toggle="filterDropdown" id="filterDropdownButton" type="button">
                                    <svg aria-hidden="true" class="mr-2 h-4 w-4 text-gray-400" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            fill-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg aria-hidden="true" class="-mr-1 ml-1.5 h-5 w-5" fill="currentColor"
                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            fill-rule="evenodd" />
                                    </svg>
                                </button>
                                <div class="z-10 hidden w-48 rounded-lg bg-white p-3 shadow dark:bg-gray-700"
                                    id="filterDropdown">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                    <ul aria-labelledby="filterDropdownButton" class="space-y-2 text-sm">
                                        <li class="flex items-center">
                                            <input
                                                class="text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700"
                                                id="apple" type="checkbox" value="">
                                            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                                                for="apple">Apple (56)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input
                                                class="text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700"
                                                id="fitbit" type="checkbox" value="">
                                            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                                                for="fitbit">Microsoft (16)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input
                                                class="text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700"
                                                id="razor" type="checkbox" value="">
                                            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                                                for="razor">Razor (49)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input
                                                class="text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700"
                                                id="nikon" type="checkbox" value="">
                                            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                                                for="nikon">Nikon (12)</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input
                                                class="text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 h-4 w-4 rounded border-gray-300 bg-gray-100 focus:ring-2 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700"
                                                id="benq" type="checkbox" value="">
                                            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
                                                for="benq">BenQ (74)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                            <thead
                                class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-4 py-3" scope="col">Product name</th>
                                    <th class="px-4 py-3" scope="col">Category</th>
                                    <th class="px-4 py-3" scope="col">Brand</th>
                                    <th class="px-4 py-3" scope="col">Description</th>
                                    <th class="px-4 py-3" scope="col">Price</th>
                                    <th class="px-4 py-3" scope="col">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Apple iMac 27&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">300</td>
                                    <td class="px-4 py-3">$2999</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="apple-imac-27-dropdown"
                                            id="apple-imac-27-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="apple-imac-27-dropdown">
                                            <ul aria-labelledby="apple-imac-27-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Apple iMac 20&#34;</th>
                                    <td class="px-4 py-3">PC</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">200</td>
                                    <td class="px-4 py-3">$1499</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="apple-imac-20-dropdown"
                                            id="apple-imac-20-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="apple-imac-20-dropdown">
                                            <ul aria-labelledby="apple-imac-20-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Apple iPhone 14</th>
                                    <td class="px-4 py-3">Phone</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">1237</td>
                                    <td class="px-4 py-3">$999</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="apple-iphone-14-dropdown"
                                            id="apple-iphone-14-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="apple-iphone-14-dropdown">
                                            <ul aria-labelledby="apple-iphone-14-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Apple iPad Air</th>
                                    <td class="px-4 py-3">Tablet</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">4578</td>
                                    <td class="px-4 py-3">$1199</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="apple-ipad-air-dropdown"
                                            id="apple-ipad-air-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="apple-ipad-air-dropdown">
                                            <ul aria-labelledby="apple-ipad-air-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Xbox Series S</th>
                                    <td class="px-4 py-3">Gaming/Console</td>
                                    <td class="px-4 py-3">Microsoft</td>
                                    <td class="px-4 py-3">56</td>
                                    <td class="px-4 py-3">$299</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="xbox-series-s-dropdown"
                                            id="xbox-series-s-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="xbox-series-s-dropdown">
                                            <ul aria-labelledby="xbox-series-s-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">PlayStation 5</th>
                                    <td class="px-4 py-3">Gaming/Console</td>
                                    <td class="px-4 py-3">Sony</td>
                                    <td class="px-4 py-3">78</td>
                                    <td class="px-4 py-3">$799</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="playstation-5-dropdown"
                                            id="playstation-5-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="playstation-5-dropdown">
                                            <ul aria-labelledby="playstation-5-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Xbox Series X</th>
                                    <td class="px-4 py-3">Gaming/Console</td>
                                    <td class="px-4 py-3">Microsoft</td>
                                    <td class="px-4 py-3">200</td>
                                    <td class="px-4 py-3">$699</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="xbox-series-x-dropdown"
                                            id="xbox-series-x-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="xbox-series-x-dropdown">
                                            <ul aria-labelledby="xbox-series-x-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Apple Watch SE</th>
                                    <td class="px-4 py-3">Watch</td>
                                    <td class="px-4 py-3">Apple</td>
                                    <td class="px-4 py-3">657</td>
                                    <td class="px-4 py-3">$399</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="apple-watch-se-dropdown"
                                            id="apple-watch-se-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="apple-watch-se-dropdown">
                                            <ul aria-labelledby="apple-watch-se-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">NIKON D850</th>
                                    <td class="px-4 py-3">Photo</td>
                                    <td class="px-4 py-3">Nikon</td>
                                    <td class="px-4 py-3">465</td>
                                    <td class="px-4 py-3">$599</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="nikon-d850-dropdown" id="nikon-d850-dropdown-button"
                                            type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="nikon-d850-dropdown">
                                            <ul aria-labelledby="nikon-d850-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
                                        scope="row">Monitor BenQ EX2710Q</th>
                                    <td class="px-4 py-3">TV/Monitor</td>
                                    <td class="px-4 py-3">BenQ</td>
                                    <td class="px-4 py-3">354</td>
                                    <td class="px-4 py-3">$499</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            data-dropdown-toggle="benq-ex2710q-dropdown"
                                            id="benq-ex2710q-dropdown-button" type="button">
                                            <svg aria-hidden="true" class="h-5 w-5" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
                                            id="benq-ex2710q-dropdown">
                                            <ul aria-labelledby="benq-ex2710q-dropdown-button"
                                                class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Show</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        href="#">Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Table navigation"
                        class="flex flex-col items-start justify-between space-y-3 p-4 md:flex-row md:items-center md:space-y-0">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            Showing
                            <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                            of
                            <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                        </span>
                        <ul class="inline-flex items-stretch -space-x-px">
                            <li>
                                <a class="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">
                                    <span class="sr-only">Previous</span>
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            fill-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">1</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">2</a>
                            </li>
                            <li>
                                <a aria-current="page"
                                    class="text-primary-600 bg-primary-50 border-primary-300 hover:bg-primary-100 hover:text-primary-700 z-10 flex items-center justify-center border px-3 py-2 text-sm leading-tight dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                                    href="#">3</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">...</a>
                            </li>
                            <li>
                                <a class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">100</a>
                            </li>
                            <li>
                                <a class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                    href="#">
                                    <span class="sr-only">Next</span>
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            fill-rule="evenodd" />
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
