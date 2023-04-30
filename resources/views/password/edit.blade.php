<x-layout>
    <x-navbar/>
    <main class="container mx-auto mt-10">
        <section class="flex justify-center">
            <form method="POST" action="/password" class="border rounded-lg py-20 px-5 w-full md:w-1/2">
                @csrf
                @method('PUT')
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password">
                            الرمز السري الجديد
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="password" name="password" id="password">
                        @error('password')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700 " for="password_confirmation">
                            كرر الرمز السري الجديد
                        </label>
                        <input class="border border-gray-400 py-2 w-full" type="password" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm">{{ $message }}</P>
                        @enderror
                    </div>
                    
    
                    <div class="mb-6 flex justify-center">
                        <button type="submit" class="border border-indigo-500 rounded-md py-2 px-10 hover:bg-indigo-500 hover:text-gray-100 duration-100">تعديل</button>
                    </div>
            </form>
        </section>
    </main>
    </x-layout>