<div class="accordion mb-4" id="restaurantDetails">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingOne">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">Restaurant Details</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-feather="menu">
                    </button>
                </div>
            </div>
        </div>

        <!-- <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                    </button>
                </h2>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                </div>
            </div>
        </div> -->

        <div id="collapseOne" class="collapse p-3" aria-labelledby="headingOne"
            data-parent="#restaurantDetails">
            <form method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$restaurant->name}}" placeholder="Restaurant Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{$restaurant->phone}}" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Restaurant Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$restaurant->email}}" placeholder="Restaurant Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="street_address">Street Address</label>
                    <input type="text" name="street_address" class="form-control" id="street_address" placeholder="1234 Main St" value="{{$restaurant->street_address}}" placeholder="Restaurant Street Address">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Apartment, studio, or floor" value="{{$restaurant->city}}" placeholder="City">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="suburb">Suburb</label>
                        <input type="text" name="suburb" class="form-control" id="suburb" value="{{$restaurant->suburb}}" placeholder="Suburb">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control" id="country" value="{{$restaurant->country}}" placeholder="Country">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" name="zip_code" class="form-control" id="zip_code" value="{{$restaurant->zip_code}}" placeholder="Zip Code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select editable id="type" name="type" class="form-control">
                        @if ($restaurant->type)
                            @foreach ($types as $type)
                                @if($type == $restaurant->type)
                                    <option selected value="{{$type}}">{{ucfirst(trans($type))}}</option>
                                @else
                                    <option value="{{$type}}">{{ucfirst(trans($type))}}</option>
                                @endif
                            @endforeach
                        @else
                            <option selected disabled hidden>Choose a restaurant type</option>
                            @foreach ($types as $type)
                                <option value="{{$type}}">{{ucfirst(trans($type))}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3 placeholder="Restaurant Description"">{{$restaurant->description}}</textarea>
                </div>
                <input hidden name="restaurantDetailsForm" type="text" value="restaurantDetailsForm">
                <input class="btn btn-primary btn-block" type="submit" type="button" value="Save">
            </form>
        </div>
    </div>
</div>