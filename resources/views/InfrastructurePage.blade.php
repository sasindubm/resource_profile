<x-app-layout>
    <div class="py-6 space-y-10">
        {{-- Section 1 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> මාර්ග </h1>
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 1 අබලන් තත්වයේ පවතින මාර්ග පිළිබඳ විස්තර
                        (ප්‍රමුඛතාවය අනුව) </h1>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගය :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <br>
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">දිග ප්‍රමාණය:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                        </div>


                        <div>
                            <form action="submit.php" method="post">
                                <p> මාර්ගයේ ස්වභාවය:</p>
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
                        <div>
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">නඩත්තු කරනු ලබන ආයතනය
                                :</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>
                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">Insert</button>
                    </form>
                </div>
                {{-- Table --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">මාර්ගය</th>
                                <th class="px-4 py-2 border">දිග ප්‍රමාණය(m)</th>
                                <th class="px-4 py-2 border">මාර්ගයේ ස්වභාවය</th>
                                <th class="px-4 py-2 border">නඩත්තු කරනු ලබන ආයතනය</th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody1"></tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 2. අබලන් තත්වයේ පවතින පාලම්/බෝක්කු
                            පිළිබඳ විස්තර (ප්‍රමුඛතාවය අනුව) </h1>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාලම/බෝක්කුව:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <br>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිහිටීම
                                    (විස්තර කරන්න)</label>
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
                                    <th class="px-4 py-2 border">ID</th>
                                    <th class="px-4 py-2 border">පාලම/බෝක්කුව</th>
                                    <th class="px-4 py-2 border">පිහිටීම
                                        (විස්තර කරන්න)</th>

                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 3. නව පාලම්/ බෝක්කු
                                අවශ්‍යතාවය(ප්‍රමුඛතාවය අනුව) </h1>
                            <form id="waterSourceForm" class="space-y-4">
                                @csrf

                                <div>
                                    <label for="source_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">අවශ්‍ය
                                        ස්ථානය:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <br>
                                    <label for="source_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">අවශ්‍යතාවය
                                        විස්තර කරන්න</label>
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
                                        <th class="px-4 py-2 border">ID</th>
                                        <th class="px-4 py-2 border">අවශ්‍ය ස්ථානය</th>
                                        <th class="px-4 py-2 border">අවශ්‍යතාවය විස්තර කරන්න</th>

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
                            <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4 පොදු ප්‍රවාහන ක්‍රමයක් අවශ්‍ය
                                එහෙත් නොමැති මාර්ග</h2>
                            <form id="waterSourceForm" class="space-y-4">
                                @csrf

                                <div>
                                    <label for="source_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගයේ
                                        නම:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>

                                <div>
                                    <label for="source_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">දුර
                                        ප්‍රමාණය:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>

                                <div>
                                    <label for="source_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">පවුල්
                                        සංඛ්‍යාව:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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
                                        <th class="px-4 py-2 border">මාර්ගයේ නම</th>
                                        <th class="px-5 py-2 border">දුර ප්‍රමාණය</th>
                                        <th class="px-5 py-2 border">පවුල් සංඛ්‍යාව</th>
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
                        <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> විදුලි සංදේශ, තැපැල්, බැංකු එහා
                            මූල්‍ය සේවා </h1>
                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1. තැපැල් කාර්යාල/උප තැපැල් කාර්යාල/
                            (තැපැල් කණු හා පෙට්ටි) පිළිබඳ විස්තර
                        </h2>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">තැපැල්
                                    කාර්යාලයේ/උප තැපැල් කාර්යාලයේ/තැපැල් කණුව නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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
                                    <th class="px-4 py-2 border">තැපැල් කාර්යාලයේ/උප තැපැල් කාර්යාලයේ/තැපැල් කණුව නම
                                    </th>

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

                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2. ඉන්ධන පිරවුම්හල් පිළිබඳ විස්තර
                        </h2>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිරවුම්හලේ
                                    නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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
                                    <th class="px-4 py-2 border">පිරවුම්හලේ නම
                                    </th>

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

                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3. ජල විදුලි බලාගාර කුඩා පරිමාණ/මහා
                            පරිමාණ
                        </h2>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල විදුලි
                                    බලාගාරයේ නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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
                                    <th class="px-4 py-2 border">ජල විදුලි බලාගාරයේ නම
                                    </th>

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

                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4. බැංකු හා මූල්‍ය ආයතන/රක්ෂණ ආයතන
                        </h2>
                        <form id="waterSourceForm" class="space-y-4">
                            @csrf

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">බැංකුවේ/මූල්‍ය
                                    ආයතනයේ නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="source_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">රාජ්‍ය/පෞද්ගලික:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
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
                                    <th class="px-4 py-2 border">බැංකුවේ/මූල්‍ය ආයතනයේ නම
                                    </th>
                                    <th class="px-4 py-2 border">රාජ්‍ය/පෞද්ගලික</th>


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

                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">5. ග්‍රාම නිළධාරි වසම තුල ක්‍රියාත්මක
                        සමූපකාර සමිති පිළිබඳ තොරතුරු
                    </h2>
                    <form id="waterSourceForm" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">වි.සේවා සමූපකාර
                                සමිතියේ නම:</label>
                            <input type="text" id="source_name" name="source_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div>




                        <br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">Insert</button>
                    </form>
                </div>
                {{-- Table --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">වි.සේවා සමූපකාර සමිතියේ නම
                                </th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody3"></tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Section 4 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200">4. පොදු ප්‍රවාහන ක්‍රමයක් අවශ්‍ය එහෙත්
                        නොමැති මාර් ග <b>2025</b></h1>
                    <form id="waterSourceForm4" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_4" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගයේ නම:</label>
                            <input type="text" id="road_name_4" name="road_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="distance_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">දුර
                                ප්‍රමාණය(m):</label>
                            <input type="text" id="distance_4" name="distance" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">Insert</button>
                    </form>
                </div>
                {{-- Table --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">මාර්ගයේ නම</th>
                                <th class="px-4 py-2 border">දුර ප්‍රමාණය(m)</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody4"></tbody>
                    </table>
                </div>
            </div>


            <div class="py-6">
                <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6. සේවා ආයතන </h2>

                        <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                            <tr>
                                <th></th>
                                <th class="px-4 py-2 border">වෙළෙඳ ආයතන </th>
                                <th>සංඛ්‍යාව</th>
                            </tr>


                            <tr>
                                <th class="px-4 py-2 border">1</th>
                                <td class="px-4 py-2 border">සිල්ලර කඩ</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">2</th>
                                <td class="px-4 py-2 border">ආපනශාලා හා තේ කඩ</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">3</th>
                                <td class="px-4 py-2 border">සපත්තු හා රෙදිපිළි</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">4</th>
                                <td class="px-4 py-2 border">මස්, මාළු හා එළවළු</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">5</th>
                                <td class="px-4 py-2 border">බෙහෙත් ශාලා හා ෆාමසි</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">6</th>
                                <td class="px-4 py-2 border">ලී හා යකඩ ගෘහ භාණ්ඩ</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">7</th>
                                <td class="px-4 py-2 border">විදුලි උපකරණ</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">8</th>
                                <td class="px-4 py-2 border">සාප්පු බඩු</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">9</th>
                                <td class="px-4 py-2 border">ගොඩනැගිලි ද්‍රව්‍ය</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">10</th>
                                <td class="px-4 py-2 border">මත්පැන් හල්</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">11</th>
                                <td class="px-4 py-2 border">ස්වර්ණාභරණ</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">12</th>
                                <td class="px-4 py-2 border">පොත්පත් හා ලිපිද්‍රව්‍ය</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">13</th>
                                <td class="px-4 py-2 border">ස්ත්‍රී</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <th class="px-4 py-2 border">14</th>
                                <td class="px-4 py-2 border">ස්ත්‍රී</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>



                        </table>
                        <x-primary-button>Update</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
<x-footer />
