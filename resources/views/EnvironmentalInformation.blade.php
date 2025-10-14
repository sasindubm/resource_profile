<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 ජල මුලාශ්‍ර විස්තර ඇතුළත් කිරීම</h2>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                        <div>
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල
                                මුලාශ්‍ර නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>


                        <div>
                            <label for="source_type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>ජල මුලාශ්‍ර වර්ගයක් තෝරන්න</option>
                                <option value="ගංගාව">ගංගාව</option>
                                <option value="ජලාශය/වැව">ජලාශය/වැව</option>
                                <option value="උල්පත්/බුබුලු">උල්පත්/බුබුලු</option>
                                <option value="ඇල/දොළ">ඇල/දොළ</option>
                                <option value="පොදු ළිං">පොදු ළිං</option>
                                <option value="වෙනත්">වෙනත්</option>
                            </select>
                        </div>


                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ජල මුලාශ්‍ර නම</th>
                                <th class="px-4 py-2 border">වර්ගය</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 ජල මුලාශ්‍ර විස්තර ඇතුළත් කිරීම</h2>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                        <div>
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල
                                මුලාශ්‍ර නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>


                        <div>
                            <label for="source_type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>ජල මුලාශ්‍ර වර්ගයක් තෝරන්න</option>
                                <option value="ගංගාව">ගංගාව</option>
                                <option value="ජලාශය/වැව">ජලාශය/වැව</option>
                                <option value="උල්පත්/බුබුලු">උල්පත්/බුබුලු</option>
                                <option value="ඇල/දොළ">ඇල/දොළ</option>
                                <option value="පොදු ළිං">පොදු ළිං</option>
                                <option value="වෙනත්">වෙනත්</option>
                            </select>
                        </div>


                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ජල මුලාශ්‍ර නම</th>
                                <th class="px-4 py-2 border">වර්ගය</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 ජල මුලාශ්‍ර විස්තර ඇතුළත් කිරීම</h2>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                        <div>
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල
                                මුලාශ්‍ර නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>


                        <div>
                            <label for="source_type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>ජල මුලාශ්‍ර වර්ගයක් තෝරන්න</option>
                                <option value="ගංගාව">ගංගාව</option>
                                <option value="ජලාශය/වැව">ජලාශය/වැව</option>
                                <option value="උල්පත්/බුබුලු">උල්පත්/බුබුලු</option>
                                <option value="ඇල/දොළ">ඇල/දොළ</option>
                                <option value="පොදු ළිං">පොදු ළිං</option>
                                <option value="වෙනත්">වෙනත්</option>
                            </select>
                        </div>


                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ජල මුලාශ්‍ර නම</th>
                                <th class="px-4 py-2 border">වර්ගය</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
