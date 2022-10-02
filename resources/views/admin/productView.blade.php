<x-master>
    <x-slot:title>
        Single Prouct View
    </x-slot:title>


    <div class="justify-content-md-center pb-2 m-5">
        <div class="main">
            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src=" {{asset('assets')}}/img/item-01.jpg" class="card-img-top" alt="...">
                            <div class="mt-3">
                                {{ $singleProduct->productName}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-1">
                    <div class="card mb-3 content">
                        <h1 class="m-3 pt-3">About</h1>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Product Name</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ $singleProduct->productName}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Category</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ $singleProduct->categoryName}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Unit Price</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ $singleProduct->unitPrice}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Available Quantity</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ $singleProduct->stock }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Description</h5>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ $singleProduct->description}}
                                </div>
                            </div>

                            <div class=" justify-content-center fs-3 mb-3">
                                <a href="#" class="btn btn-secondary w-50 mt-5" type="submit">Edit</a>
                                <a href="{{route('products.allProducts')}}" class="btn btn-success w-50 mt-1" type="submit">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>