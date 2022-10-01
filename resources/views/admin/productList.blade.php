<x-master>
    <x-slot:title>
        products
    </x-slot:title>
    <a type="button" href="{{url('productAdd')}}" class="btn btn-light m-3"><i class="fa-solid fa-plus"></i> Add Product</a>

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
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>visible</td>
                    <td>
                        <a href="{{url('productView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('productEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>


            </tbody>
        </table>

    </div>

</x-master>