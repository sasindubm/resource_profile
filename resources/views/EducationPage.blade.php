<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6.1 අධ්‍යාපනය ආයතන ව්‍යාප්තිය-2025</h2>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"> </th>
                                <th class="px-4 py-2 border">අධ්‍යාපනය ආයතන සංඛාව</th>
                                <th class="px-4 py-2 border">ආයතන සංඛාව</th>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">පාසල් (රජයේ)</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">2</td>
                                <td class="px-4 py-2 border">පෞද්ගලික පාසල්/ ජාත්‍යන්තර පාසල්</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">3</td>
                                <td class="px-4 py-2 border">පිරිවෙන් </td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">4</td>
                                <td class="px-4 py-2 border">කාර්මික හා වෘත්තිය පුහුණු ආයතන</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">5</td>
                                <td class="px-4 py-2 border">පෙර පාසල්</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">6</td>
                                <td class="px-4 py-2 border">දහම් පාසල්</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">7</td>
                                <td class="px-4 py-2 border">උසස් අධ්‍යාපන ආයතන</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">8</td>
                                <td class="px-4 py-2 border">විශේෂ අවශ්‍යතා සහිත අධ්‍යාපන ආයතන</td>
                                <td class="px-4 py-2 border"> </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">9 </td>
                                <td class="px-4 py-2 border">උපකාරක පන්ති පාත්වන ආයතන</td>
                                <td class="px-4 py-2 border"> </td>
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
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6.1.2 පාසල් සංඛාව-2025</h2>
                    <div>
                        <div>
                            <label for="school_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාසලේ නම:</label>
                            <input type="text" id="school_name" name="school_name" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div><br>
                        @csrf

                        <div>
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>පාසල් වර්ගයක් තෝරන්න</option>
                                <option value="ජාතික පාසල් ">ජාතික පාසල් </option>
                                <option value="1 AB උසස් පෙල විද්‍යා විෂයන් ඇති පාසල්"> 1 AB උසස් පෙල විද්‍යා විෂයන්
                                    ඇති පාසල්</option>
                                <option value="1 C උසස් පෙල කලා/ වාණිජ විෂයන් ඇති පාසල්">1 C උසස් පෙල කලා/ වාණිජ
                                    විෂයන් ඇති පාසල් </option>
                                <option value="1-11 ශ්‍රේණිය දක්වා පන්ති පවත්වන පාසල්">1-11 ශ්‍රේණිය දක්වා පන්ති
                                    පවත්වන පාසල්</option>
                                <option value="ප්‍රාථමික පාසල්">ප්‍රාථමික පාසල්</option>
                            </select>
                        </div><br>

                        <div>
                            <label for="teacher_count"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගුරුවරු
                                ගණන:</label>
                            <input type="text" id="teacher_count" name="teacher_count" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div><br>
                        @csrf
                        <div>
                            <label for="student_count"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">සිසුන්
                                ගණන:</label>
                            <input type="text" id="student_count" name="student_count" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div><br>
                        @csrf
                        <div>
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල
                                පහසුකම්:</label>
                            <label> <input type="radio" name="color" value="blue"> ඇත </label>
                            <label> <input type="radio" name="color" value="blue"> නැත </label>
                        </div><br>

                        <div>
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">වැසිකිලි
                                පහසුකම්:</label>
                            <label> <input type="radio" name="color" value="blue"> ඇත </label>
                            <label> <input type="radio" name="color" value="blue"> නැත </label>
                        </div><br>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                    </div>
                    </form>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"> පාසලේ නම </th>
                                <th class="px-4 py-2 border"> වර්ගය </th>
                                <th class="px-4 py-2 border"> ගුරුවරු ගණන </th>
                                <th class="px-4 py-2 border"> සිසුන් ගණන</th>
                                <th class="px-4 py-2 border"> ජල පහසුකම්</th>
                                <th class="px-4 py-2 border"> වැසිකිලි පහසුකම්</th>

                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6.1.3 පසුගිය වසර පහ ඇතුලත වැසිගිය
                        පාසල් පිලිබද තොරතුරු-2025</h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාසලේ
                                    නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf

                            <div>

                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">වැසිගිය
                                        වර්ශය:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                @csrf
                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">පවතින
                                        ගොඩනැගිලි සංඛාව:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Insert
                                </button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"> අනු අංකය </th>
                                <th class="px-4 py-2 border"> පාසලේ නම </th>
                                <th class="px-4 py-2 border"> වැසිගිය වර්ශය </th>
                                <th class="px-4 py-2 border"> පවතින ගොඩන ගිලි සංඛාව</th>

                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
                <div>

                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6.2. පුද්ගලික පාසල් /
                        ජාත්‍යන්තර
                        පසල්-2025</h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාසලේ
                                    නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf

                            <div>

                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගුරුවරු
                                        ගණන:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                @csrf
                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">සිසුන්
                                        ගණන:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                @csrf
                            </div>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">පාසලේ නම</th>
                                <th class="px-4 py-2 border">ගුරුවරු ගණන</th>
                                <th class="px-4 py-2 border">සිසුන් ගණන</th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> පිරිවෙන් පිලිබද තොරතුරු </h2>
                    <div>
                        <div>
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාසලේ
                                    නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පිරිවෙන්
                                    වර්ගය:</label>
                                <select id="source_type" name="source_type" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="" disabled selected>පිරිවෙන් වර්ගයක් තෝරන්න</option>
                                    <option value="ජාතික පාසල් ">මුලික</option>
                                    <option value="1 AB උසස් පෙල විද්‍යා විෂයන් ඇති පාසල්"> විද්‍යාර්ත</option>
                                    <option value="1 C උසස් පෙල කලා/ වාණිජ විෂයන් ඇති පාසල්"> මහා</option>
                                    <option value="1-11 ශ්‍රේණිය දක්වා පන්ති පවත්වන පාසල්"> ධර්මෝදය </option>

                                </select>
                            </div><br>

                            <div>

                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගුරුවරු
                                        ගණන:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                @csrf
                                <div>
                                    <label for="source_type"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300">සිසුන්
                                        ගණන:</label>
                                    <input type="text" id="source_name" name="source_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                @csrf
                            </div>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">පාසලේ නම</th>
                                <th class="px-4 py-2 border">පිරිවෙන් වර්ගය</th>
                                <th class="px-4 py-2 border">ගුරුවරු ගණන</th>
                                <th class="px-4 py-2 border">සිසුන් ගණන</th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> කාර්මික හා වෘත්තීය පුහුණු ආයතන පිළිබද
                        තොරතුරු </h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> කාර්මික හා
                                    වෘත්තීය පුහුණු ආයතන:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>


                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">කාර්මික හා වෘත්තීය පුහුණු ආයතන</th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> පෙර පාසල් පිලිබද තොරතුරු </h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> පෙර පාසලේ නම සහ
                                    ලිපිනය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගුරුවරු
                                    ගණන:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">සිසුන්
                                    ගණන:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>

                        </div>


                        </form>

                    </div>

                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">කාර්මික හා වෘත්තීය පුහුණු ආයතන සහ අවිධිමත් ආයතන</th>
                                <th class="px-4 py-2 border">ගුරුවරු ගණන</th>
                                <th class="px-4 py-2 border">සිසුන් ගණන</th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> දහම් පාසල් පිලිබද තොරතුරු </h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> දහම් පාසලේ
                                    නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">දහම් පාසල අයත්
                                    ශාසනාරක්ෂක බල මණ්ඩලය:</label>
                                <select id="source_type" name="source_type" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="" disabled selected>දහම් පාසල අයත් ශාසනාරක්ෂක බල මණ්ඩලය වර්ගයක්
                                        තෝරන්න</option>
                                    <option value="ජාතික පාසල් "> </option>
                                    <option value="1 AB උසස් පෙල විද්‍යා විෂයන් ඇති පාසල්"> </option>
                                    <option value="1 C උසස් පෙල කලා/ වාණිජ විෂයන් ඇති පාසල්"> </option>
                                    <option value="1-11 ශ්‍රේණිය දක්වා පන්ති පවත්වන පාසල්"> </option>

                                </select>
                            </div><br>
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගුරුවරු
                                    ගණන:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf
                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">සිසුන්
                                    ගණන:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>

                        </div>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">දහම් පාසලේ නම</th>
                                <th class="px-4 py-2 border">දහම් පාසල අයත් ශාසනාරක්ෂක බල මණ්ඩලය </th>
                                <th class="px-4 py-2 border">ගුරුවරු ගණන</th>
                                <th class="px-4 py-2 border">සිසුන් ගණන</th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> උපකාරක පන්ති පවත්වන ආයතන පිලිබද තොරතුරු
                    </h2>
                    <div>
                        <div>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">අනු
                                    අංකය:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> උපකාරක පන්ති
                                    ආයතනයන්හි නම:</label>
                                <input type="text" id="source_name" name="source_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>

                        </div>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">අනු අංකය</th>
                                <th class="px-4 py-2 border">උපකාරක පන්ති ආයතනයන්හි නම</th>

                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>