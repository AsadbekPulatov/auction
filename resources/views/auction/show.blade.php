<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<!-- body -->
<body>
<div class="container p-3">
    <div class="row">
        <div class="col-6">
            <img src="{{asset('images/products/'.$product->image)}}" alt="" class="w-100">
        </div>
        <div class="col-6">
            <h1 class="text-center">{{$product->name}}</h1>
            <h3 class="text-center">Description: {{$product->description}}</h3>
            <h3 class="text-center" id="current_price">Current Price: ${{ number_format($product->current_price, 2, '.', ',') }}</h3>
            <h3 class="text-center">End Date: {{$product->end_date}}</h3>
            <h3 class="text-center" id="time">Time: </h3>
        </div>
    </div>
    <div class="mt-3">
        <form action="{{ route('auction', $product->id) }}" class="d-flex w-50" method="post">
            @csrf
            <input type="number" name="price" class="form-control" placeholder="auction price updated">
            <button type="submit" class="btn btn-primary">Bid</button>
        </form>
    </div>
</div>
</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
<script>
    let url = '{{ route('products.store') }}'+"/"+{{$product->id}};

    // Create our number formatter.
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    });

    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    $('#current_price').text("Current Price: "+formatter.format(response.product.current_price));

                    if (response.product.status == 0) {
                        window.location.href = "{{ route('auctions.index') }}";
                    }
                    var minutes = Math.floor(response.time / 60);
                    var seconds = response.time % 60;
                    if (seconds < 10) {
                        seconds = "0" + seconds;
                    }
                    $('#time').text("Time: "+ minutes + ":" + seconds);
                },
                error: function(xhr, status, error) {
                    // handle error response
                }
            });
        }, 1000); // 1000 milliseconds = 1 second
    });
</script>
</html>
