<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> යටිතල පහසුකම් </h1>

                   <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 1 අබලන් තත්වයේ පවතින මාර්ග පිළිබඳ විස්තර (ප්‍රමුඛතාවය අනුව) </h1>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf

                        <div>
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගය:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                        </div>


                        <div>
                            <form action="submit.php" method="post">
                                <p> පාරේ ස්වභාවය:</p>
                                <input type="radio" id="තාර" name="gender" value="තාර">
                                <label for="male">තාර</label><br>

                                <input type="radio" id="කොන්ක්‍රීට්" name="road" value="කොන්ක්‍රීට්">
                                <label for="road">කොන්ක්‍රීට්</label><br>

                                <input type="radio" id="කාපට්" name="road" value="කාපට්">
                                <label for="road">කාපට්</label><br>
                                <input type="radio" id="Interlock" name="road" value="Interlock">
                                <label for="road">Interlock</label><br>
                                <input type="radio" id="බොරලු" name="road" value="බොරලු">
                                <label for="road">බොරලු</label><br>
                                <input type="radio" id="පස්" name="road" value="පස්">
                                <label for="road">පස්</label><br>

                            </form>
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
                                <th class="px-4 py-2 border">මාර්ග අංකය</th>
                                <th class="px-4 py-2 border">මාර්ගය</th>
                                <th class="px-4 py-2 border">දිග ප්‍රමාණය(m)</th>
                                <th class="px-4 py-2 border">මාර්ගයේ ස්වභාවය</th>
                                <th class="px-4 py-2 border">නඩත්තු කරනු ලබන ආයතනය</th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 2. අබලන් තත්වයේ පවතින පාලම්/ බෝක්කු පිළිබම විස්තරය(ප්‍රමුඛතාවය අනුව) <b />2025</b></h1>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    <br><br>
                                <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    <form action="submit.php" method="post">
                                <p>වර්ගය:</p>
                                <input type="radio" id="පාලම" name="gender" value="පාලම">
                                <label for="male">පාලම</label><br>

                                <input type="radio" id="බෝක්කු" name="gender" value="බෝක්කු">
                                <label for="female">බෝක්කු</label><br>

                        </form><br>

                        <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිහිටීම විස්තර කරන්න:</label>
                        <input type="text" id="source_name" name="source_name" required
                            class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

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
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">පාලම/බෝක්කු</th>
                                <th class="px-4 py-2 border">පිහිටීම(විස්තර කරන්න)</th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 3. නව පාලම්/ බෝක්කු අවශ්‍යතාවය(ප්‍රමුඛතාවය අනුව) <b />2025</b></h1>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අවශ්‍ය ස්ථානය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                            </div>


                            <div>
                                <form action="submit.php" method="post">
                                    <p> පාරේ ස්වභාවය:</p>
                                    <input type="radio" id="තාර" name="gender" value="තාර">
                                    <label for="male">තාර</label><br>

                                    <input type="radio" id="කොන්ක්‍රීට්" name="road" value="කොන්ක්‍රීට්">
                                    <label for="road">කොන්ක්‍රීට්</label><br>

                                    <input type="radio" id="කාපට්" name="road" value="කාපට්">
                                    <label for="road">කාපට්</label><br>
                                    <input type="radio" id="Interlock" name="road" value="Interlock">
                                    <label for="road">Interlock</label><br>
                                    <input type="radio" id="බොරලු" name="road" value="බොරලු">
                                    <label for="road">බොරලු</label><br>
                                    <input type="radio" id="පස්" name="road" value="පස්">
                                    <label for="road">පස්</label><br>
                                    <input type="submit" value="Submit">
                                </form>
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
                                    <th class="px-4 py-2 border">මාර්_ග අංකය</th>
                                    <th class="px-4 py-2 border">මාර්්ගය</th>
                                    <th class="px-4 py-2 border">දිග ප්‍රමාණය(m)</th>
                                    <th class="px-4 py-2 border">මාර්්ගයේ ස්වභාවය</th>
                                    <th class="px-4 py-2 border">නඩත්තු කරනු ලබන ආයතනය</th>

                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">




                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4 බැංකු හා මූල්‍ය ආයතන/රක්ෂණ ආයතන</h2>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>


                            <div>
                                <label for="source_type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">බැංකු හා මූල්‍ය ආයතනයේ නම:</label>
                                <select id="source_type" name="source_type" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="" disabled selected>බැංකු වර්ගයක් තෝරන්න</option>
                                    <option value="රාජ්‍ය">රාජ්‍ය බැංකු</option>
                                    <option value="පෞද්ගලික බැංකු">පෞද්ගලික බැංකු </option>
                                    <option value="සමුපකාර ග්‍රාමීය බැංකු">"සමුපකාර ග්‍රාමීය බැංකු</option>

                                </select>
                                <form action="submit.php" method="post">
                                    <p>රාජ්‍ය:</p>
                                    <input type="radio" id="රාජ්‍ය" name="gender" value="රාජ්‍ය">
                                    <label for="male">රාජ්‍ය</label><br>

                                    <input type="radio" id="පෞද්ගලික" name="gender" value="පෞද්ගලික">
                                    <label for="female">පෞද්ගලික</label><br>

                                    <input type="radio" id="වෙනත්" name="gender" value="වෙනත්">
                                    <label for="other">වෙනත්</label><br><br>

                                    <input type="submit" value="Submit">
                                </form>


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
                                    <th class="px-4 py-2 border">බැංකු හා මූල්‍ය ආයතනයේ නම</th>
                                    <th class="px-5 py-2 border">රාජ්‍ය/පෞද්ගලික</th>
                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">5 ජල මුලාශ්‍ර විස්තර ඇතුළත් කිරීම</h2>
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
<x-footer />
