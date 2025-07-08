<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center mb-8">
                        <h3 class="text-lg font-medium mb-4">{{ __("Welcome to Book Management System") }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">{{ __("Manage your books, authors and generate reports") }}</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Books Card -->
                        <a href="{{ route('books.index') }}" class="bg-blue-500 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 rounded-lg p-6 transition duration-300 ease-in-out transform hover:scale-105">
                            <div class="flex flex-col items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <h3 class="text-xl font-semibold">{{ __('Books') }}</h3>
                                <p class="text-blue-100 dark:text-blue-200 mt-2">{{ __('Manage your book collection') }}</p>
                            </div>
                        </a>

                        <!-- Authors Card -->
                        <a href="{{ route('authors.index') }}" class="bg-green-500 hover:bg-green-600 dark:bg-green-600 dark:hover:bg-green-700 rounded-lg p-6 transition duration-300 ease-in-out transform hover:scale-105">
                            <div class="flex flex-col items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <h3 class="text-xl font-semibold">{{ __('Authors') }}</h3>
                                <p class="text-green-100 dark:text-green-200 mt-2">{{ __('Manage authors information') }}</p>
                            </div>
                        </a>

                        <!-- Reports Card -->
                        <a href="{{ route('reports.form') }}" class="bg-purple-500 hover:bg-purple-600 dark:bg-purple-600 dark:hover:bg-purple-700 rounded-lg p-6 transition duration-300 ease-in-out transform hover:scale-105">
                            <div class="flex flex-col items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <h3 class="text-xl font-semibold">{{ __('Reports') }}</h3>
                                <p class="text-purple-100 dark:text-purple-200 mt-2">{{ __('Generate book reports') }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>