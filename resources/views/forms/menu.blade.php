<div class="accordion" id="menu">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingFour">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">Update Menu Items</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" data-feather="menu">
                    </button>
                </div>
            </div>
        </div>

        <div id="collapseFour" class="collapse p-3" aria-labelledby="headingFour"
            data-parent="#menu">

            @if (count($restaurant->menu) > 0)
                @foreach ($restaurant->menu as $dish)
                @if ($loop->last)
                <div class="bg-light p-4">
                @else
                <div class="bg-light mb-3 p-4">
                @endif
                    <form id="menuForm{{$dish->id}}" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/{{$dish->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                                <label for="dishName">Dish Name: <span class="badge badge-primary">{{$dish->name}}</span></label>
                                <input type="text" name="dishName" class="form-control" id="dishName" value="{{$dish->name}}" placeholder="Dish Name">
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                                <label for="dishPrice">Dish Price</label>
                                <input type="text" name="dishPrice" class="form-control" id="dishPrice" value="{{$dish->price}}" placeholder="Dish Price">
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                                <label for="dishIngredients">Dish Ingredients</label>
                                <input type="text" name="dishIngredients" class="form-control" id="dishIngredients" value="{{$dish->ingredients}}" placeholder="Dish Ingredients">
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-6">
                                <label for="dishType">Dish Type</label>
                                <input type="text" name="dishType" class="form-control" id="dishType" value="{{$dish->type}}" placeholder="Dish Type">
                            </div>
                            <div class="col-lg-3">
                            </div>
                        </div>
                    </form>
                    <div class="d-flex">
                        <input type="button" name="dishId" class="btn btn-success mr-2" value="Item: {{$dish->id}}">
                        <input type="submit" class="btn btn-success mr-2" value="Update" onclick="document.querySelector('#menuForm{{$dish->id}}').submit()">
                        <form method="POST" action="/dashboard/restaurant/{{$restaurant->id}}/{{$dish->id}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>