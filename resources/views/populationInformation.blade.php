<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 වයස් කාණ්ඩ අනුව ජනගහනය </h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf


                        <div class="mb-6">
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">කාණ්ඩය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>කාණ්ඩය තෝරන්න</option>
                                <option value="අවු. 0-04">අවු.0-04</option>
                                <option value="අවු. 05-14">අවු.05-14</option>
                                <option value="අවු. 15-59">අවු.15-59</option>
                                <option value="අවු. 60-80">අවු.60-80</option>
                                <option value="අවු. 80 ට වැඩි">අවු.80 ට වැඩි</option>
                                <option value="මුළු ජනගහනය">මුළු ජනගහනය</option>

                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ස්ත්‍රී:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පුරුෂ :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>

                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">වයස් කාණ්ඩය</th>
                                <th class="px-4 py-2 border">ස්ත්‍රී</th>
                                <th class="px-4 py-2 border">පුරුෂ</th>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2 ජන වර්ගය අනුව ජනගහනය </h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf


                       <div class="mb-6">
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජන වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>වර්ගය තෝරන්න</option>
                                <option value="සිංහල">සිංහල</option>
                                <option value="දෙමළ">දෙමළ</option>
                                <option value="මුස්ලිම්">මුස්ලිම්</option>
                                <option value="මැලේ">මැලේ</option>
                                <option value="බර්ගර්">බර්ගර්</option>
                                <option value="වෙනත්">වෙනත්</option>
                                <option value="එකතුව">එකතුව</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ස්ත්‍රී:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පුරුෂ :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>

                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ජන වර්ගය</th>
                                <th class="px-4 py-2 border">ස්ත්‍රී</th>
                                <th class="px-4 py-2 border">පුරුෂ</th>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3 ආගම අනුව ජනගහනය </h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf


                        <div class="mb-6">
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ආගම් වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>වර්ගය තෝරන්න</option>
                                <option value="බෞද්ධ">බෞද්ධ</option>
                                <option value="හින්දු">හින්දු</option>
                                <option value="ඉස්ලාම්">ඉස්ලාම්</option>
                                <option value="කතෝලික">කතෝලික</option>
                                <option value="වෙනත්">වෙනත්</option>
                                <option value="මුළු ජනගහනය">මුළු ජනගහනය</option>
                            </select>
                        </div>
                       <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ස්ත්‍රී:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පුරුෂ :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>

                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ආගම් වර්ගය</th>
                                <th class="px-4 py-2 border">ස්ත්‍රී</th>
                                <th class="px-4 py-2 border">පුරුෂ</th>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4 විදේශගත ජනගහනය</h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                       <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මුළු ජනගහනය
                                :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>

                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">විදේශගත මුළු
                                පුද්ගලයින් ගණන
                                :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>



                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">මුළු ජනගහනය</th>
                                <th class="px-4 py-2 border">විදේශගත මුළු
                                පුද්ගලයින් ගණන</th>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">5 මුළු පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව </h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මුළු පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව
                                :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>

                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">කාන්තා ගෘහමූලික පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව
                                :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>



                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">මුළු පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව</th>
                                <th class="px-4 py-2 border">කාන්තා ගෘහමූලික පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව</th>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6 විශේෂ අවශ්‍යතා සහිත පුද්ගලයින් සංඛ්‍යාව </h2>
                    <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf


                        <div class="mb-6">
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">කාණ්ඩය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>කාණ්ඩය තෝරන්න</option>
                                <option value="අවු 18 ට අඩු සංඛ්‍යාව">අවු 18 ට අඩු සංඛ්‍යාව</option>
                                <option value="වයස 18 ට වැඩි විශේෂ අවශ්‍යතා සහිත පුද්ගලයින් ගණන">වයස 18 ට වැඩි විශේෂ අවශ්‍යතා සහිත පුද්ගලයින් ගණන</option>
                                <option value="මුළු විශේෂ අවශ්‍යතා සහිත පුද්ගලයින් ">මුළු විශේෂ අවශ්‍යතා සහිත පුද්ගලයින්</option>

                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිරිමි:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගැහැණු:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <div class="mb-6">
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">එකතුව:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-75 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </form>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">වයස් කාණ්ඩය</th>
                                <th class="px-4 py-2 border">පිරිමි</th>
                                <th class="px-4 py-2 border">ගැහැණු</th>
                                <th class="px-4 py-2 border">එකතුව</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>
