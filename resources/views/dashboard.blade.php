<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Greeting -->
                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold text-lg">
                    {{ __("සුභ දවසක්, ") }}{{ Auth::user()->name }}{{ __("!") }}
                </div>

                <!-- Table Section -->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card">
                        <div class="card-body">
                            <!-- Mobile View: Vertical Card -->
                            <div class="space-y-4 sm:hidden">
                                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-4">
                                    <h2 class="font-bold text-lg mb-2">මූලික තොරතුරු</h2>
                                    <div class="space-y-1 text-sm">
                                        <div><span class="font-semibold">ග්‍රාම නිලධාරී වසමේ අංකය: </span> 176B</div>
                                        <div><span class="font-semibold">ග්‍රාම නිලධාරී වසමේ නම: </span>කොට්ටව බටහිර</div>
                                        <div><span class="font-semibold">දිස්ත්‍රික්කය:</span> Sample District</div>
                                        <div><span class="font-semibold">ප්‍රාදේශීය ලේකම් කොට්ඨාශය: </span> Sample Division</div>
                                        <div><span class="font-semibold">පළාත් පාලන ආයතනය/බල ප්‍රදේශය: </span> Sample Area</div>
                                        <div><span class="font-semibold">ගොවිජන සේවා මධ්‍යස්ථානය: </span> Sample Center</div>
                                        <div><span class="font-semibold">අධ්‍යාපන කලාපය: </span> Sample Zone</div>
                                        <div><span class="font-semibold">අධ්‍යාපන කොට්ඨාශය: </span> Sample Education Division</div>
                                        <div><span class="font-semibold">මහවැලි කොට්ඨාශය: </span> Sample River Division</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Desktop View: Horizontal Table -->
                            <div class="hidden sm:block overflow-x-auto">
                                <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-md rounded-lg">
                                    <caption class="font-bold text-lg my-5 p-5">මූලික තොරතුරු සාරාංශය</caption>
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-700">
                                            <th class="px-4 py-2 border">ග්‍රාම නිලධාරී වසමේ අංකය</th>
                                            <th class="px-4 py-2 border">ග්‍රාම නිලධාරී වසමේ නම</th>
                                            <th class="px-4 py-2 border">දිස්ත්‍රික්කය</th>
                                            <th class="px-4 py-2 border">ප්‍රාදේශීය ලේකම් කොට්ඨාශය</th>
                                            <th class="px-4 py-2 border">පළාත් පාලන ආයතනය/බල ප්‍රදේශය</th>
                                            <th class="px-4 py-2 border">ගොවිජන සේවා මධ්‍යස්ථානය</th>
                                            <th class="px-4 py-2 border">අධ්‍යාපන කලාපය</th>
                                            <th class="px-4 py-2 border">අධ්‍යාපන කොට්ඨාශය</th>
                                            <th class="px-4 py-2 border">මහවැලි කොට්ඨාශය</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td class="px-4 py-2 border">176B</td>
                                            <td class="px-4 py-2 border">කොට්ටව බටහිර</td>
                                            <td class="px-4 py-2 border">ගාල්ල</td>
                                            <td class="px-4 py-2 border">යක්කලමුල්ල</td>
                                            <td class="px-4 py-2 border">බද්දේගම</td>
                                            <td class="px-4 py-2 border">යක්කලමුල්ල</td>
                                            <td class="px-4 py-2 border">Sample Zone</td>
                                            <td class="px-4 py-2 border">Sample Education Division</td>
                                            <td class="px-4 py-2 border">Sample River Division</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">12</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">පවුල් ගණන</div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400">5</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">නිවාස ගණන</div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-red-600 dark:text-red-400">3</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">මාර්ග ගණාන</div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">12</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">ගොඩනැගිලි ගණන</div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-green-600 dark:text-green-400">5</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">ආගමික ස්ථාන ගණන</div>
                    </div>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-5 flex flex-col items-center">
                        <div class="text-3xl font-bold text-red-600 dark:text-red-400">3</div>
                        <div class="mt-2 text-gray-700 dark:text-gray-200">පුද්ගලයින් ගණාන</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
