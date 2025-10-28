<x-app-layout>
    @vite('resources/js/pages/basicinfo_con.js')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">1.රාජ්‍ය ආයතන පිළිබඳ තොරතුරු</h2>
                    <form id="govFig" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">ආයතනයේ නම:</label>
                            <input type="text" id="gf_name" name="gf_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div class="mb-6">
                            <label for="source_type" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">වර්ගය:</label>
                            <select id="gf_type" name="gf_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                                <option value="" disabled selected>ආයතන වර්ගයක් තෝරන්න</option>
                                <option value="ප්‍රාදේශීය සභාව">ප්‍රාදේශීය සභාව</option>
                                <option value="ප්‍රාදේශීය ලේකම් කාර්‍යාලය">ප්‍රාදේශීය ලේකම් කාර්‍යාලය</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">ලිපිනය:</label>
                            <input type="text" id="gf_address" name="gf_address" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div>
                            <x-primary-button  class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                                {{ __('insert') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[400px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-6 border"></th>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ආයතනයේ නම</th>
                                    <th class="px-6 py-3 border">ආයතන වර්ගය</th>
                                    <th class="px-6 py-3 border">ලිපිනය</th>
                                </tr>
                            </thead>
                            <tbody id="govFigTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">2.අතහැර දැමූ රජයේ ගොඩනැගිලි පිළිබඳ තොරතුරු</h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">ගොඩනැගිල්ලේ නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">යොදාගත් කාර්‍යය:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">නැවත භාවිතයට ගත හැකිද?:</label>
                            <div class="mt-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="radio_option" value="yes">
                                    <span class="ml-2">ඔව්</span>
                                </label>
                                <label class="inline-flex items-center ml-8">
                                    <input type="radio" class="form-radio" name="radio_option" value="no">
                                    <span class="ml-2">නැහැ</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <x-primary-button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                                {{ __('insert') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[500px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ගොඩනැගිල්ලේ නම</th>
                                    <th class="px-6 py-3 border">යොදාගත් කාර්‍යය</th>
                                    <th class="px-6 py-3 border">නැවත භාවිතයට ගත හැකිද?</th>
                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">2.අතහැර දැමූ රජයේ ව්‍යාපෘති පිළිබඳ තොරතුරු</h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">ව්‍යාපෘතියේ නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div class="mb-6">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">නවතා දැමීමට හේතුව:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2">
                        </div>
                        <div>
                            <x-primary-button class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                                {{ __('insert') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[400px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ව්‍යාපෘතියේ නම</th>
                                    <th class="px-6 py-3 border">නවතා දැමීමට හේතුව</th>
                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer />