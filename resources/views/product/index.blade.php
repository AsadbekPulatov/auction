<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-right">
                    <a href="{{route('product.create')}}" class="btn btn-primary m-2 ">Qo'shish</a>
                </div>
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">description</th>
{{--                            <th scope="col">Image</th>--}}
                            <th scope="col">Start price</th>
                            <th scope="col">Current price</th>
                            <th scope="col">End date</th>
                            <th scope="col">action</th>

                        </tr>
                        </thead>
                        <tbody>
                      @foreach($products as $product)
                          <tr>
                              <th scope="row">{{$product['id']}}</th>
                              <td>{{$product['name']}}</td>
                              <td>{{$product['description']}}</td>
{{--                              <td>{{$product['image']}}</td>--}}
                                <td>{{$product['start_price']}}</td>
                                <td>{{$product['current_price']}}</td>
                                <td>{{$product['end_date']}}</td>
                                <td>
                                    <form action="{{route('product.destroy',$product->id)}}" method="post">
                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success"><i class="fa fa-telegram">edit</i></a>
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger" style="color: black"><i class="">delete</i></button>
                                    </form>
                                </td>
                          </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
