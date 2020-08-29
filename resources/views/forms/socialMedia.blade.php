<div class="accordion col-md-4 mb-4" id="social">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingThree">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">Social Media</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" data-feather="menu">
                    </button>
                </div>
            </div>
        </div>

        <div id="collapseThree" class="collapse p-3" aria-labelledby="headingThree"
        data-parent="#social">
            @if ($restaurant->socialMedia)
                <form id="socialMediaForm" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
                    @method('PUT')
            @else
                <form id="socialMediaForm" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
            @endif
                @csrf
                <div class="form-group col-md-12">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="facebook" value="{{$restaurant->socialMedia ? $restaurant->socialMedia->facebook : ''}}" placeholder="Your Facebook Username">
                </div>
                <div class="form-group col-md-12">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" class="form-control" id="instagram" value="{{$restaurant->socialMedia ? $restaurant->socialMedia->instagram : ''}}" placeholder="Your Instagram Username">
                </div>
                <div class="form-group col-md-12">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="twitter" value="{{$restaurant->socialMedia ? $restaurant->socialMedia->twitter : ''}}" placeholder="Your Twitter Username">
                </div>
                <input hidden name="socialMediaForm" type="text" value="socialMediaForm">
                <input class="btn btn-primary btn-block" type="submit" type="button" value="Save">
            </form>
        </div>
    </div>
</div>