<x-app-layout>
    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <div class="row">
                        <form action="{{route('product.update',$products->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$products->name}}" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="5" class="form-control" rows="10" > value="{{$products->description}}"</textarea>
                            </div>
                            <div>
                                <img src="{{asset('products/'.$products->image)}}" width="150px" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="start_price" class="form-label">Start Price</label>
                                <input class="form-control" type="number" id="start_price" name="start_price" value="{{$products->start_price}}">
                            </div>
                            <div class="mb-3">
                                <label for="current_price" class="form-label">Current Price</label>
                                <input class="form-control" type="number" id="current_price" name="current_price" value="{{$products->current_price}}">
                            </div>

                            <div class="mb-3">
                                <label for="end_date" class="form-label">End date</label>
                                <input class="form-control" type="date" id="end_date" name="end_date" value="{{$products->end_date}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
