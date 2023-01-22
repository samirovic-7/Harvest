<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"  style="display: inline;">
            {{ __('Customers') }}
        </h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: black">
            Add Customer
        </button>

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
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name">
                            </div>

                            <div class="col-md-6">
                                <label for="inputAge" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputAge" name="age">
                            </div>

                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email">
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="inputPhone" name="phone">
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Employee</label>
                                <select id="inputState" class="form-select"  name="EmpId"  id="EmpId">
                                    <option hidden>Choose The Employee...</option>
{{--                                    @foreach ($employees as $employee)--}}
{{--                                        <option  value="{{$employee->id}}">{{ $employee->name }}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>

                            <div class="col-md-2">
                                <input type="hidden" class="form-control"   name="status" value="customer">
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success col-12" style="color: black">Add customer</button>
                                <button type="button" class="btn btn-success col-12" style="color: black" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
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
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Statue</th>
                            <th scope="col">Employee</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        <?php $i = 0; ?>--}}
{{--                        @foreach($customers as $customer)--}}
{{--                                <?php $i++; ?>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">{{$i}}</th>--}}
{{--                                <td>{{$customer->name}}</td>--}}
{{--                                <td>{{$customer->age}}</td>--}}
{{--                                <td>{{$customer->email}}</td>--}}
{{--                                <td>{{$customer->address}}</td>--}}
{{--                                <td>{{$customer->phone}}</td>--}}
{{--                                <td>{{$customer->status}}</td>--}}
{{--                                <td>{{$customer->EmpId}}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

