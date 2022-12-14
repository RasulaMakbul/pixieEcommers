    <x-master>
        <x-slot:title>
            Add Product
        </x-slot:title>
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <h1>Add Product</h1>
            <form class="form-light">
                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" name="productName" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Product Name">

                </div>
                <select class="btn btn-light dropdown-toggle col-8 m-3" name="categoryName">
                    <div class="dropdown-menu dropdown-menu-right">
                        <option class="dropdown-item" type="button">Select Category</option>
                        <option class="dropdown-item" type="button">Mens</option>
                        <option class="dropdown-item" type="button">Womens</option>
                        <option class="dropdown-item" type="button">Bags</option>
                        <option class="dropdown-item" type="button">Shoes</option>
                    </div>
                </select>
                <div class="col-8 d-flex">
                    <div class="form-group col-6 m-3">
                        <label for="exampleFormControlInput1">Unit Price</label>
                        <input type="text" name="unitPrice" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Unit Price">
                    </div>
                    <div class="form-group col-5 m-3">
                        <label for="exampleFormControlInput1">Stock</label>
                        <input type="text" name="stock" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Stock">
                    </div>
                </div>



                <div class="form-group col-8 m-3">
                    <div class="form-group form-check">
                        <input type="checkbox" name="visibility" class="form-check-input bg-light" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Visible</label>
                    </div>
                </div>


                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control mt-2" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">Save</button>
                    <a type="button" href="{{url('productList')}}" class="btn btn-outline-secondary">Back</a>
                </div>


            </form>

    </x-master>