<x-app-layout>
    <div class="py-6 space-y-10">
        {{-- Section 1 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 1 .යටිතල පහසුකම් <b>2025</b></h1>
                    <form id="waterSourceForm1" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_1" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගයේ නම:</label>
                            <input type="text" id="road_name_1" name="road_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="distance_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">දුර ප්‍රමාණය:</label>
                            <input type="text" id="distance_1" name="distance" required
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
                                <th class="px-4 py-2 border">දුර ප්‍රමාණය</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody1"></tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Section 2 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200">2. අබලන් තත්වයේ පවතින පාලම්/ බෝක්කු පිළිබඳ
                        විස්තරය(ප්‍රමුඛතාවය අනුව) <b>2025</b></h1>
                    <form id="waterSourceForm2" class="space-y-4">
                        @csr
                        <label for="location_2"
                            class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිහිටීම විස්තර
                            කරන්න:</label>
                        <input type="text" id="location_2" name="location" required
                            class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                        <form action="submit.php" method="post">
                            <p>පාලම්/බෝක්කු:</p>
                            <input type="radio" id="පාලම්" name="පාලම්" value="පාලම්">
                            <label for="male">පාලම්</label><br>
                            <input type="radio" id="බෝක්කු" name="බෝක්කු" value="female">
                            <label for="female">බෝක්කු</label><br>
                            <input type="radio" id="වෙනත්" name="වෙනත්" value="other">
                            <label for="other">වෙනත්</label><br><br>
                            <input type="submit" value="Submit">
                        </form>
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
                                <th class="px-4 py-2 border">පාලම/බෝක්කු</th>
                                <th class="px-4 py-2 border">පිහිටීම(විස්තර කරන්න)</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody2"></tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Section 3 --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200">3. නව පාලම්/ බෝක්කු අවශ්‍යතාවය(ප්‍රමුඛතාවය
                        අනුව) <b>2025</b></h1>
                    <form id="waterSourceForm3" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_3"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_3" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="required_location_3"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අවශ්‍ය
                                ස්ථානය:</label>
                            <input type="text" id="required_location_3" name="required_location" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="requirement_detail_3"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අවශ්‍යතාවය විස්තර
                                කරන්න:</label>
                            <input type="text" id="requirement_detail_3" name="requirement_detail" required
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
                                <th class="px-4 py-2 border">අවශ්‍ය ස්ථානය</th>
                                <th class="px-4 py-2 border">අවශ්‍යතාවය විස්තර කරන්න</th>
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
        </div>
    </div>

    {{-- Section 1 --}}
    <div class="py-6 space-y-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 5 .විදුලි සංදේශ , තැපැල් බැංකු හා මූල්‍ය
                        සේවා <b>2025</b></h1>
                    <form id="waterSourceForm1" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">තැපැල් කාර්්‍යාල, උප
                                තැපැල් කාර්්‍යාල, තැපැල් කණුවේ නම:</label>
                            <input type="text" id="source_number_1" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">මාර්ගයේ නම:</label>
                            <input type="text" id="road_name_1" name="road_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="distance_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">දුර
                                ප්‍රමාණය:</label>
                            <input type="text" id="distance_1" name="distance" required
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
                                <th class="px-4 py-2 border">තැපැල් කාර්්‍යාල, උප තැපැල් කාර්්‍යාල, තැපැල් කණුවේ නම
                                </th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody1"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{--  6 Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200">6. ඉන්ධන පිරවුම්හල් පිලිබද විස්තරය
                        <b>2025</b>
                    </h1>
                    <form id="waterSourceForm4" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_4" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිරවුම්හලේ
                                නම:</label>
                            <input type="text" id="road_name_4" name="road_name" required
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
                                <th class="px-4 py-2 border">පිරවුම්හලේ නම</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody4"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Section 1 --}}
    <div class="py-6 space-y-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 7.ජල විදුලි බලාගාර කුඩා පරිමාණ/මහා
                        පරිමාණ -2025 <b>2025</b></h1>
                    <form id="waterSourceForm1" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_1" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල විදුලි බලාගාරයේ
                                නම:</label>
                            <input type="text" id="road_name_1" name="road_name" required
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
                                <th class="px-4 py-2 border">ජල විදුලි බලාගාරයේ නම</th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody1"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{--  6 Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200">8. බැංකු හා මූල්‍ය ආයතන/රක්ෂණ ආයතන
                        <b>2025</b>
                    </h1>
                    <form id="waterSourceForm4" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_4" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_4"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300"> බැංකුවේ මූල්‍ය
                                ආයතනයේ නම:</label>
                            <input type="text" id="road_name_4" name="road_name" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <form>
                                <label for="road_name_4"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> බැංකුවේ මූල්‍ය
                                    ආයතනයේ නම:</label>


                                <label>
                                    <input type="radio" name="gender" value="මූල්‍ය ආයතනය"> මූල්‍ය ආයතනය
                                </label><br>
                                <label>
                                    <input type="radio" name="gender" value="other"> බැංකු
                                </label><br>
                            </form>
                            <br>
                            <br>
                            <form>
                                <label for="road_name_4"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> රාජ්‍ය
                                    ද?/පෞද්ගලික ද? :</label>


                                <label>
                                    <input type="radio" name="gender" value="මූල්‍ය ආයතනය"> රාජ්‍ය
                                </label><br>
                                <label>
                                    <input type="radio" name="gender" value="other"> පෞද්ගලික
                                </label><br>
                            </form>
                        </div>
                        <br><br>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white transition ease-in-out duration-150">Insert</button>
                    </form>
                </div>
                {{-- Table --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">රාජ්‍ය/පෞද්ගලික</th>
                                <th class="px-4 py-2 border">බැංකුවේ/මූල්‍ය ආයතනයේ නම</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody4"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="py-6 space-y-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Form --}}
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                    <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 9.ජල විදුලි බලාගාර කුඩා පරිමාණ/මහා
                        පරිමාණ -2025 <b>2025</b></h1>
                    <form id="waterSourceForm1" class="space-y-4">
                        @csrf
                        <div>
                            <label for="source_number_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු අංකය:</label>
                            <input type="text" id="source_number_1" name="source_number" required
                                class="mt-2 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm">
                            <label for="road_name_1"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300"> ග්‍රාම නිළධාරී වසම
                                තුල ක්‍රියාත්මක සමුපකාර සමිති පිළිබද තොරතුරු:</label>
                            <input type="text" id="road_name_1" name="road_name" required
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
                                <th class="px-4 py-2 border">විවිධ සේවා සමුපකාර සමිතියේ නම</th>

                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody1"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="py-6 space-y-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    {{-- Form --}}
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                        <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 10.සේවා ආයතන - 2025 </h1>
                        <form id="waterSourceForm1" class="space-y-4">
                            @csrf
                            <div>
                                <table border="1 px" border 1 px solid black:- collapse padding:8px width=100%
                                    table-width="100%" cell spacing="0"c>
                                    {{-- ...existing code... --}}
                                    <table class="shadow-md border rounded-lg w-full">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-2 border">අනු අංකය</th>
                                                <th class="px-4 py-2 border">වෙළඳ ආයතනය</th>
                                                <th class="px-4 py-2 border">ආයතන සංඛ්‍යාව</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 1; $i <= 15; $i++)
                                                <tr>
                                                    <td class="px-4 py-2 border">
                                                        <input type="text" name="{{ $i }}"
                                                            value="{{ $i }}"
                                                            class="w-full border-gray-300 rounded-md dark:bg-gray-900 dark:text-gray-300"
                                                            readonly>
                                                    </td>
                                                    <td class="px-4 py-2 border">
                                                        <input type="text" name="business_{{ $i }}"
                                                            class="w-full border-gray-300 rounded-md dark:bg-gray-900 dark:text-gray-300">
                                                    </td>
                                                    <td class="px-4 py-2 border">
                                                        <input type="text" name="count_{{ $i }}"
                                                            class="w-full border-gray-300 rounded-md dark:bg-gray-900 dark:text-gray-300">
                                                    </td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>


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
                                    <th class="px-4 py-2 border">ආයතනයේ නම</th>

                                </tr>
                            </thead>
                            <tbody id="waterSourceTableBody1"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="py-6 space-y-10">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        {{-- Form --}}
                        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 dark:text-gray-200"> 11.ග්‍රාම නිළධාරී වසම තුල ඇති
                                පොදු පහසුකම් <b>2025</b></h1>
                            <form id="waterSourceForm1" class="space-y-4">
                                @csrf
                                <div>
                                    <table border="1">
                                        <tr>
                                            <th class="px-7 border" >අනු අංකය</th>
                                            <th class="px-7 border">වෙළඳ ආයතනය</th>
                                            <th class="px-7 border">වෙනත් විස්තර</th>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>අටූල්</td>
                                            <td>විස්තර 1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>අනෙක් ආයතනය</td>
                                            <td>විස්තර 2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>...</td>
                                            <td>...</td>
                                        </tr>
                                    </table >
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
                                        <th class="px-4 py-2 border">ප</th>
                                        <th class="px-4 py-2 border">විවිධ සේවා සමුපකාර සමිතියේ නම</th>

                                    </tr>
                                </thead>
                                <tbody id="waterSourceTableBody1"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
</x-app-layout>
