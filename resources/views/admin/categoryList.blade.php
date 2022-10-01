    <x-master>
        <x-slot:title>
            Category
        </x-slot:title>

        <a type="button" href="{{url('categoryAdd')}}" class="btn btn-light m-3"><i class="fa-solid fa-plus"></i> Add Category</a>

        <div class="container-fluid pt-4 px-4">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Products</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Male Pant</td>
                        <td>50</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Male Pant</td>
                        <td>50</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Male Pant</td>
                        <td>50</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Male Pant</td>
                        <td>50</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">1</td>
                        <td>Male Pant</td>
                        <td>50</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>


                </tbody>
            </table>

        </div>

    </x-master>