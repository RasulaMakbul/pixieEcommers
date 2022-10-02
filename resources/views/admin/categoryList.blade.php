    <x-master>
        <x-slot:title>
            Category
        </x-slot:title>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-file-pdf"></i> pdf</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-table"></i> excel</button>
                </div>
                <a type="button" href="{{url('categoryAdd')}}" class="btn btn-sm btn-outline-secondary">
                    <i class="fa-solid fa-plus"></i>
                    Create Category
                </a>
            </div>
        </div>

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
                    @foreach($category as $cat)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $cat->categoryName }}</td>
                        <td>{{ $cat->protucts }}</td>
                        <td>
                            <a href="{{url('categoryView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('categoryEdit')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>

        </div>

    </x-master>