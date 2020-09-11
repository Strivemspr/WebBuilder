<div class="accordion mb-4" id="addMenuItems">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingFive">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">Categories & Dish Items</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" data-feather="menu">
                    </button>
                </div>
            </div>
        </div>

        <div id="collapseFive" class="collapse p-3" aria-labelledby="headingFive"
            data-parent="#addMenuItems">
            {{-- <div class="bg-light p-4"> --}}
            <div class="mb-3">
                <h4 class="mb-3"><span class="badge badge-primary">Create Categories</span></h4>
                @if($restaurant->categories)
                <form id="updateAddMenuCategories" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/category/{{$restaurant->categories->id}}">
                    @method('PUT')
                @else
                <form id="addMenuCategories" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/category">
                @endif
                    @csrf
                    <div id="categoryItems" class="form-row bg-light mb-3 p-4 d-flex">
                        <div class="form-group m-1">
                            <label for="category1">Category 1<span class="badge badge-primary"></span></label>
                            <input type="text" name="category[]" class="form-control" id="category1" placeholder="Category">
                        </div>
                        <div class="form-group m-1">
                            <label for="category2">Category 2</label>
                            <input type="text" name="category[]" class="form-control" id="category2" placeholder="Category">
                        </div>
                        <div class="form-group m-1">
                            <label for="category3">Category 3</label>
                            <input type="text" name="category[]" class="form-control" id="category3" placeholder="Category">
                        </div>
                        <div class="form-group m-1">
                            <label for="category4">Category 4</label>
                            <input type="text" name="category[]" class="form-control" id="category4" placeholder="Category">
                        </div>
                        <div class="form-group m-1">
                            <label for="category4">Category 5</label>
                            <input type="text" name="category[]" class="form-control" id="category4" placeholder="Category">
                        </div>
                    </div>
                    <input hidden name="updateAddMenuCategories" type="text" value="updateAddMenuCategories">
                </form>
                <button id="buttonAddCategory" class="btn btn-success mr-2"><span class="feather" data-feather="plus"></span> Add Category</button>
                <button id="buttonRemoveCategory" class="btn btn-danger mr-2"><span class="feather" data-feather="minus"></span> Remove Last Category</button>

                @if($restaurant->categories)
                <input type="submit" class="btn btn-primary" value="Save" onclick="document.querySelector('#updateAddMenuCategories').submit()">
                @else
                <input type="submit" class="btn btn-primary" value="Save" onclick="document.querySelector('#addMenuCategories').submit()">
                @endif
            </div>
            <hr>
            <div class="mb-3">
                <h4 class="mb-3"><span class="badge badge-primary">Update Categories</span></h4>
                @if($restaurant->categories)
                <form id="updateMenuCategories" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/category/{{$restaurant->categories->id}}">
                    @csrf
                    @method('PUT')
                    <div class="form-row bg-light mb-3 p-4 d-flex" id="menuCategories">
                        @if (count(explode(',',$restaurant->categories->categories)) > 0 && !empty($restaurant->categories->categories))
                            @foreach(explode(',',$restaurant->categories->categories) as $key=>$category)
                                <div class="form-group m-1 categoryItem">
                                    <label for="category{{$key + 1}}">Category {{$key + 1}}<span class="badge badge-primary"></span></label>
                                    <div class="input-group">
                                        <input type="text" name="categoryUpdate[]" class="form-control" value="{{ucfirst($category)}}" id="category{{$key + 1}}" placeholder="Category">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger delete" type="button">Delete</button>
                                        </div>
                                    </div>        
                                </div>
                            @endforeach
                        @else 
                            <p class="m-0">You have not added any categories yet</p>
                        @endif
                    </div>
                    <input hidden name="updateMenuCategories" type="text" value="updateMenuCategories">
                </form>
                @else
                    <div class="bg-light mb-3 p-4">
                        <p class="m-0">You have not added any categories yet</p>
                    </div>
                @endif
                <input type="submit" class="btn btn-primary" value="Save" onclick="document.querySelector('#updateMenuCategories').submit()">
            </div>
            <hr>
            <div>
                <h4 class="mb-3"><span class="badge badge-primary">Add Dish Items</span></h4>
                <form id="addMenuItemsForm" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/menu">
                    @csrf
                    <div class="form-row bg-light mb-3 p-4 dish-items">
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishName1">Dish Name: <span class="badge badge-primary"></span></label>
                            <input type="text" name="dishName[]" class="form-control" id="dishName1" value="" placeholder="Dish Name">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishPrice1">Dish Price</label>
                            <input type="text" name="dishPrice[]" class="form-control" id="dishPrice1" value="" placeholder="Dish Price">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishIngredients1">Dish Ingredients</label>
                            <input type="text" name="dishIngredients[]" class="form-control" id="dishIngredients1" value="" placeholder="Dish Ingredients">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishType1">Dish Type</label>
                            {{-- <input type="text" name="dishType[]" class="form-control" id="dishType1" value="" placeholder="Dish Type"> --}}
                            <select name="dishType[]" class="form-control" id="dishType1">
                                @if ($restaurant->categories && $restaurant->categories->categories)
                                    <option selected disabled hidden>Please Select A Category</option>
                                    @foreach (explode(',',$restaurant->categories->categories) as $category))
                                    <option value="{{$category}}">{{$category}}</option>
                                    @endforeach
                                @else
                                    <option selected disabled value="null">There are no categories yet</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-row bg-light mb-3 p-4 dish-items">
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishName2">Dish Name: <span class="badge badge-primary"></span></label>
                            <input type="text" name="dishName[]" class="form-control" id="dishName2" value="" placeholder="Dish Name">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishPrice2">Dish Price</label>
                            <input type="text" name="dishPrice[]" class="form-control" id="dishPrice2" value="" placeholder="Dish Price">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishIngredients2">Dish Ingredients</label>
                            <input type="text" name="dishIngredients[]" class="form-control" id="dishIngredients2" value="" placeholder="Dish Ingredients">
                        </div>
                        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
                            <label for="dishType2">Dish Type</label>
                            {{-- <input type="text" name="dishType[]" class="form-control" id="dishType2" value="" placeholder="Dish Type"> --}}
                            <select name="dishType[]" class="form-control" id="dishType2">
                                @if ($restaurant->categories && $restaurant->categories->categories)
                                    <option selected disabled hidden>Please Select A Category</option>
                                    @foreach (explode(',',$restaurant->categories->categories) as $category))
                                    <option value="{{$category}}">{{$category}}</option>
                                    @endforeach
                                @else
                                    <option selected disabled value="null">There are no categories yet</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </form>
                <button id="buttonAdd" class="btn btn-success mr-2"><span class="feather" data-feather="plus"></span> Add Items</button>
                <button id="buttonRemove" class="btn btn-danger mr-2"><span class="feather" data-feather="minus"></span> Remove Last Item</button>
                <input type="submit" class="btn btn-primary" value="Save" onclick="document.querySelector('#addMenuItemsForm').submit()">
            </div>
        </div>
    </div>
</div>