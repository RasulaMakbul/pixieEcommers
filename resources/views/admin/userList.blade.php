    <x-master>
        <x-slot:title>
            Customer List
        </x-slot:title>
        <form>

            <h1>Customers</h1>
            <table class=" table table-success table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>aaa bbb</td>
                        <td>ab@c.com</td>
                        <td>1111</td>
                        <td>male</td>
                        <td>
                            <a href="{{url('userView')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                            <a href="{{url('editUser')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>


    </x-master>