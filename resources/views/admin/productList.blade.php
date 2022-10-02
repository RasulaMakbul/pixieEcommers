<x-master>
    <x-slot:title>
        products
    </x-slot:title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-file-pdf"></i> pdf</button>
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> excel</button>
            </div>
            <a type="button" href="{{route('products.create')}}" class="btn btn-sm btn-outline-secondary">
                <i class="fa-solid fa-plus"></i>
                Create Product
            </a>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $products)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td scope="row">{{ $products->productName }}</td>
                    <td scope="row">{{ $products->categoryName }}</td>
                    <td scope="row">{{ $products->unitPrice }}</td>
                    <td scope="row">{{ $products->stock }}</td>
                    <td scope="row">{{ $products->visibility }}</td>

                    <td>
                        <a href="{{route('products.show',$products->id)}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="{{route('products.destroy',$products->id)}}" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>

    </div>

</x-master>