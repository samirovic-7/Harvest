<x-app-layout>
    <x-slot name="header">


        <!-- Modal -->
     </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="display: flex;justify-content: space-between;">
                    <div>you are login welcome <b> {{ Auth::user()->name }} </b></div>
                        <button type="button" class="btn btn-danger"  style="color: black;background: white">
                            <a href="/post">go to posts</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

