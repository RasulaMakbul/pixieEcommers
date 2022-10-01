    <x-master>
        <x-slot:title>
            Mens Pant Category
        </x-slot:title>
        <form>

            <div class="form-group  m-3 p-3" style="font-size: 30px;">
                <a href="{{url('categoryList')}}"><i class="fa-solid fa-circle-left"></i></a>
            </div>
            <div class="form-group col-8 m-3">
                <label for="exampleFormControlInput1">
                    <h1>Mens Pant</h1>
                </label>
            </div>


            <div class="form-group col-8 m-3">
                <label for="exampleFormControlTextarea1">Description</label>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci aspernatur, rerum veritatis debitis nulla dicta fugit repellat voluptates pariatur minus earum itaque ipsam sequi iusto laudantium corrupti qui labore obcaecati incidunt, cumque necessitatibus id, ipsum reprehenderit laborum! Repudiandae culpa facere temporibus cumque amet porro excepturi ducimus dolor accusamus soluta cupiditate suscipit similique iure fugiat, possimus, eum magni molestiae veniam tenetur id unde sunt sequi, minima sint? Sequi, provident? Perspiciatis id natus numquam nam, accusantium aperiam corporis blanditiis ex labore repellat reiciendis veritatis culpa, deleniti molestias consequuntur ullam dolores doloribus? Voluptatem, minus ad. Temporibus tempore, cupiditate optio quaerat inventore doloribus eum.</p>


            </div>
        </form>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Available</th>
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
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">1</td>
                    <td>Jins</td>
                    <td>Male Pant</td>
                    <td>$10.8</td>
                    <td>50</td>
                    <td>
                        <a href="{{url('viewCategory')}}" class="link-success"><i class="fa-solid fa-eye fs-5 me-3"></i></a>
                        <a href="{{url('editCategory')}}" class="link-info"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="#" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>

    </x-master>