    <x-master>
        <x-slot:title>
            Edit Order
        </x-slot:title>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('orders.update', $orders->id)}}" method="POST">
            @csrf
            @method('patch')
            <h1>Edit Order</h1>
            <form class="form-light">
                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" name="productName" class="form-control mt-2" id="exampleFormControlInput1" value="{{ $orders->productName }}">

                </div>
                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlInput1">Unit Price</label>
                    <input type="text" name="unitPrice" class="form-control mt-2" id="exampleFormControlInput1" value="{{ $orders->unitPrice }}">
                </div>
                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlInput1">Quantity</label>
                    <input type="text" name="quantity" class="form-control mt-2" id="exampleFormControlInput1" value="{{ $orders->quantity }}">
                </div>
                <select class="btn dropdown-toggle col-8 m-3" name="unit" value="{{ $orders->unit }}">
                    <div class="dropdown-menu dropdown-menu-right">
                        <option class="dropdown-item" type="button">kg</option>
                        <option class="dropdown-item" type="button">LB</option>
                    </div>
                </select>
                <div class="col-8 d-flex">
                    <div class="form-group col-6 m-3">
                        <label for="exampleFormControlInput1">Delivery Date</label>
                        <input type="date" name="deliveryDate" class="form-control mt-2" id="exampleFormControlInput1" value="{{ $orders->deliveryDate }}">
                    </div>
                    <select class="btn dropdown-toggle col-8 m-3" name="status" value="{{ $orders->productName }}">
                        <div class="dropdown-menu dropdown-menu-right">
                            <option class="dropdown-item" type="button">processing</option>
                            <option class="dropdown-item" type="button">Shipped</option>
                            <option class="dropdown-item" type="button">Delivered</option>
                            <option class="dropdown-item" type="button">canceled</option>
                        </div>
                    </select>
                </div>




                <div class="form-group col-8 m-3 mb-5">
                    <button type="submit" class="btn btn-outline-info  m-3">Update</button>
                    <a type="button" href="{{route('orders.allOrder')}}" class="btn btn-outline-secondary">Back</a>
                </div>


            </form>

    </x-master>