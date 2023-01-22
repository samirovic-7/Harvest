<x-app-layout>
    <x-slot name="header">
        <div style="display: flex;justify-content: space-between;">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
                {{ Auth::user()->name }}
            </h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: black;background: white">
                Add Customer
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="post">
                            {{csrf_field()}}
                            {{ method_field('GET') }}
                            <div class="col-md-6">
                                <label for="inputtitle" class="form-label">title</label>
                                <input type="text" class="form-control" id="inputtitle" name="title">
                            </div>

                            <div class="col-md-6">
                                <label for="inputtext" class="form-label">text</label>
                                <input type="text" class="form-control" id="inputtext" name="text">
                            </div>
                            <div class="col-md-6">
                                <label for="inputimage" class="form-label">image</label>
                                <input type="text" class="form-control" id="inputimage" name="image">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success col-12" style="color: black">Add customer</button>
                                <button type="button" class="btn btn-success col-12" style="color: black" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table caption-top">
                        <caption>List of users</caption>
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            <th scope="col">title</th>
                            <th scope="col">text</th>
                         </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0; ?>
                        @foreach( $posts as $post )
                                <?php $i++; ?>
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$post->title }}</td>
                                <td>{{$post->text}}</td>
                                <td>{{$post->image}}</td>
                             </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

