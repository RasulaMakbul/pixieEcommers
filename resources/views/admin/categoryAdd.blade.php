    <x-master>
        <x-slot:title>
            Add Category
        </x-slot:title>
        <form>

            <h1>Add Category</h1>
            <form class="form-light bg-light">
                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlInput1">Category Name</label>
                    <input type="text" class="form-control bg-light mt-2" id="exampleFormControlInput1" placeholder="Category Name">
                </div>

                <div class="form-group col-8 m-3">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control bg-light mt-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group col-8 m-3">
                    <button type="button" class="btn btn-outline-info  m-3">Save</button>
                    <a type="button" href="{{url('categoryList')}}" class="btn btn-outline-secondary">Back</a>
                </div>


            </form>

    </x-master>