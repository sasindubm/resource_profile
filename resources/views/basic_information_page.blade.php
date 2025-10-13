<x-app-layout>
    <div>
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 text-center">
            <h2 class="font-bold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('මූලික තොරතුරු') }}
            </h2>
            <form action="" method="post" class="max-w-2xl mx-auto p-6 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                <div class="mt-4">
                    <x-input-label for="households" :value="__('ග්‍රාම නිලධාරී වසමේ අංකය')" />
                    <select id="households" name="households" class="block mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">176B</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                    <x-input-error :messages="$errors->get('households')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="houses" :value="__('ග්‍රාම නිලධාරී වසමේ නම')" />
                    <x-text-input id="houses" class="block mt-1 w-full" type="text" name="houses" :value="old('houses')" required autofocus />
                    <x-input-error :messages="$errors->get('houses')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="roads" :value="__('දිස්ත්‍රික්කය')" />
                    <x-text-input id="roads" class="block mt-1 w-full" type="text" name="roads" :value="old('roads')" required autofocus />
                    <x-input-error :messages="$errors->get('roads')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="buildings" :value="__('ප්‍රාදේශීය ලේකම් කොට්ඨාශය')" />
                    <x-text-input id="buildings" class="block mt-1 w-full" type="text" name="buildings" :value="old('buildings')" required autofocus />
                    <x-input-error :messages="$errors->get('buildings')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="religious_places" :value="__('පළාත් පාලන ආයතනය/බල ප්‍රදේශය')" />
                    <x-text-input id="religious_places" class="block mt-1 w-full" type="text" name="religious_places" :value="old('religious_places')" required autofocus />
                    <x-input-error :messages="$errors->get('religious_places')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="individuals" :value="__('ගොවිජන සේවා මධ්‍යස්ථානය')" />
                    <x-text-input id="individuals" class="block mt-1 w-full" type="text" name="individuals" :value="old('individuals')" required autofocus />
                    <x-input-error :messages="$errors->get('individuals')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="individuals" :value="__('අධ්‍යාපන කලාපය')" />
                    <x-text-input id="individuals" class="block mt-1 w-full" type="text" name="individuals" :value="old('individuals')" required autofocus />
                    <x-input-error :messages="$errors->get('individuals')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="individuals" :value="__('අධ්‍යාපන කොට්ඨාශය')" />
                    <x-text-input id="individuals" class="block mt-1 w-full" type="text" name="individuals" :value="old('individuals')" required autofocus />
                    <x-input-error :messages="$errors->get('individuals')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="individuals" :value="__('මහවැලි කොට්ඨාශය')" />
                    <x-text-input id="individuals" class="block mt-1 w-full" type="text" name="individuals" :value="old('individuals')" required autofocus />
                    <x-input-error :messages="$errors->get('individuals')" class="mt-2" />
                </div>
                <div>
                    <x-primary-button class="mt-4">
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>