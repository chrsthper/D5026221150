<html lang="en">
<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
        <div class="jumbotron-fluid"> </div>
        <img src="{{ asset('img/pizza3.jpg')}}" width="200px" class="img-fluid w-100">
        </div>
            <div class ="container">
                <div class="row mt-3">
                    <div class="col-3">
                        <img src="{{ asset('img/pizza1.jpeg')}}" width="75px" height="75px">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/pizza2.jpeg')}}" width="75px" height="75px">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/pizza4.jpg')}}" width="75px" height="75px">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/pizza5.jpeg')}}" width="70px" height="75px">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-2">
                <div class="col-6">
                    <h5 class="text-white"> Pepperoni Pizza</h5>
                </div>
                <div class="col-5 ml-1 text-white">
                    <img src="{{ asset('img/icons8-star-48.png')}}" width="20px">
                    4.5 (50+)
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-0">
                <div class="col-5">
                    <h5 class="text-warning">$10.00</h5>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="text-white">
                A traditional Neapolitan pizza topped with tomato sauce, fresh mozzarella, cheese basil leaves, and drizzled with olive oil.
                <span class="font-weight-bold text text-info">
                Read More
                </span>
            </p>
        </div>

        <div class="container">
            <div class="text-white">
                <h5>Size</h5>
                <div class="row mx-auto">
                    <button type="button" class="btn btn-primary mr-2">S</button>
                    <button type="button" class="btn btn-primary mr-2">M</button>
                    <button type="button" class="btn btn-primary mr-2">L</button>
                </div>
            </div>
        </div>

        <div class="container">
            <h5 class="font-weight-normal text-white mt-3">
                Ingredients
            </h5>
            <div class="row">
                <div class="border border-white rounded-sm p-2 mr-3">
                    <img src="{{ asset('img/tomato.jpeg')}}" width="60px" height="60px" alt="">
                </div>
                <div class="border border-white rounded-sm p-2 mr-3">
                    <img src="{{ asset('img/leaves.jpeg')}}" width="60px" height="60px" alt="">
                </div>
                <div class="border border-white rounded-sm p-2 mr-3">
                    <img src="{{ asset('img/onion.jpeg')}}" width="60px" height="60px" alt="">
                </div>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="container">
                <div class="row mt-5">
                    <button type="button" class="btn btn-secondary ml-2 col-2 p-2">
                        <img src="{{ asset('icons8-bag-32.png')}}" alt="">
                    </button>
                    <div class="col-1"></div>
                    <button type="button" class="btn btn-primary ml-2 col-8">Order Now</button>
                </div>
            </div>



        </div>


</body>
</html>
