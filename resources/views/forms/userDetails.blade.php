<div class="accordion mb-4 col-md-6" id="userDetails">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingUserDetails">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">User Details</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseUserDetails" aria-expanded="true" aria-controls="collapseOne" data-feather="menu">
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

        <div id="collapseUserDetails" class="collapse show p-3" aria-labelledby="headingUserDetails"
            data-parent="#userDetails">
            <form method="POST" action="/dashboard/user/{{Auth::user()->id}}" id="userDetailsForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{Auth::user()->name}}" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname" value="{{Auth::user()->surname}}" placeholder="Surname">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{Auth::user()->email}}" placeholder="User Email">
                </div>
            </form>
        </div>
    </div>
</div>