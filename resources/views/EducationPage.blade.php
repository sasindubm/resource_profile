<x-app-layout>
    <div>
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 text-center">
            <h2 class="font-bold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('6.අධ්‍යාපනය ') }}
            </h2>
            <form action="" method="post" class="max-w-2xl mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6.1 අධ්‍යාපනය ආයතන ව්‍යාප්තිය-2025</h2>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf



                <div>
                    <x-primary-button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>