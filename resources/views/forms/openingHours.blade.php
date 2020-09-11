<div class="accordion col-lg-8 mb-4" id="openingHours">
    <div class="card">
        <div class="card-header m-0 p-0 border-bottom-0" id="headingTwo">
            <div class="input-group d-flex justify-content-between">
                <h4 class="p-3 m-0">Opening Times</h4>
                <div class="input-group-append">
                    <button class="btn btn-primary btn-block feather-60 rounded-0" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" data-feather="menu">
                    </button>
                </div>
            </div>
        </div>
        <div id="collapseTwo" class="collapse p-3" aria-labelledby="headingTwo"
        data-parent="#openingHours">
        @if ($restaurant->openingHours)
            <form id="openingHoursForm" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
                @method('PUT')
        @else
            <form id="openingHoursForm" method="POST" action="/dashboard/restaurant/{{$restaurant->id}}">
        @endif
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day1">Day of the Week: <span class="badge badge-primary">Monday</span></label>
                        <input type="text" name="day1" class="form-control" id="day1" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week1 : ''}}" placeholder="Monday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime1">Start Time</label>
                        <input type="text" name="startTime1" class="form-control mb-2" id="startTime1" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time1 : ''}}" placeholder="9:00">

                        <label for="endTime1">End Time</label>
                        <input type="text" name="endTime1" class="form-control" id="endTime1" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time1 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime1">AM / PM</label>
                        <select class="form-control mb-2" name="sTime1" id="sTime1">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time1)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime1">AM / PM</label>
                        <select class="form-control" name="eTime1" id="eTime1">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time1)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day2">Day of the Week: <span class="badge badge-primary">Tuesday</span></label>
                        <input type="text" name="day2" class="form-control" id="day2" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week2 : ''}}" placeholder="Tuesday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime2">Start Time</label>
                        <input type="text" name="startTime2" class="form-control mb-2" id="startTime2" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time2 : ''}}" placeholder="9:00">

                        <label for="endTime2">End Time</label>
                        <input type="text" name="endTime2" class="form-control" id="endTime2" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time2 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime2">AM / PM</label>
                        <select class="form-control mb-2" name="sTime2" id="sTime2">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time2)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime2">AM / PM</label>
                        <select class="form-control" name="eTime2" id="eTime2">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time2)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day3">Day of the Week: <span class="badge badge-primary">Wednesday</span></label>
                        <input type="text" name="day3" class="form-control" id="day3" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week3 : ''}}" placeholder="Wednesday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime3">Start Time</label>
                        <input type="text" name="startTime3" class="form-control mb-2" id="startTime3" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time3 : ''}}" placeholder="9:00">

                        <label for="endTime3">End Time</label>
                        <input type="text" name="endTime3" class="form-control" id="endTime3" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time3 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime3">AM / PM</label>
                        <select class="form-control mb-2" name="sTime3" id="sTime3">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time3)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime3">AM / PM</label>
                        <select class="form-control" name="eTime3" id="eTime3">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time3)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day4">Day of the Week: <span class="badge badge-primary">Thursday</span></label>
                        <input type="text" name="day4" class="form-control" id="day4" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week4 : ''}}" placeholder="Thursday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime4">Start Time</label>
                        <input type="text" name="startTime4" class="form-control mb-2" id="startTime4" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time4 : ''}}" placeholder="9:00">

                        <label for="endTime4">End Time</label>
                        <input type="text" name="endTime4" class="form-control" id="endTime4" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time4 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime4">AM / PM</label>
                        <select class="form-control mb-2" name="sTime4" id="sTime4">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time4)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime4">AM / PM</label>
                        <select class="form-control" name="eTime4" id="eTime4">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time4)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day5">Day of the Week: <span class="badge badge-primary">Friday</span></label>
                        <input type="text" name="day5" class="form-control" id="day5" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week5 : ''}}" placeholder="Friday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime5">Start Time</label>
                        <input type="text" name="startTime5" class="form-control mb-2" id="startTime5" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time5 : ''}}" placeholder="9:00">

                        <label for="endTime5">End Time</label>
                        <input type="text" name="endTime5" class="form-control" id="endTime5" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time5 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime5">AM / PM</label>
                        <select class="form-control mb-2" name="sTime5" id="sTime5">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time5)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime5">AM / PM</label>
                        <select class="form-control" name="eTime5" id="eTime5">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time5)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day6">Day of the Week: <span class="badge badge-primary">Saturday</span></label>
                        <input type="text" name="day6" class="form-control" id="day6" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week6 : ''}}" placeholder="Saturday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime6">Start Time</label>
                        <input type="text" name="startTime6" class="form-control mb-2" id="startTime6" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time6 : ''}}" placeholder="9:00">

                        <label for="endTime6">End Time</label>
                        <input type="text" name="endTime6" class="form-control" id="endTime6" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time6 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime6">AM / PM</label>
                        <select class="form-control mb-2" name="sTime6" id="sTime6">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time6)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime6">AM / PM</label>
                        <select class="form-control" name="eTime6" id="eTime6">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time6)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="day7">Day of the Week: <span class="badge badge-primary">Sunday</span></label>
                        <input type="text" name="day7" class="form-control" id="day7" value="{{$restaurant->openingHours ? $restaurant->openingHours->day_of_the_week7 : ''}}" placeholder="Sunday">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startTime7">Start Time</label>
                        <input type="text" name="startTime7" class="form-control mb-2" id="startTime7" value="{{$restaurant->openingHours ? $restaurant->openingHours->start_time7 : ''}}" placeholder="9:00">

                        <label for="endTime7">End Time</label>
                        <input type="text" name="endTime7" class="form-control" id="endTime7" value="{{$restaurant->openingHours ? $restaurant->openingHours->end_time7 : ''}}" placeholder="5:00">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="sTime7">AM / PM</label>
                        <select class="form-control mb-2" name="sTime7" id="sTime7">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->s_time7)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label for="eTime7">AM / PM</label>
                        <select class="form-control" name="eTime7" id="eTime7">
                            @if ($restaurant->openingHours && $times)
                                <option hidden value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    @if ($time == $restaurant->openingHours->e_time7)
                                    <option selected value="{{$time}}">{{$time}}</option>
                                    @else
                                    <option value="{{$time}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            @else
                                <option hidden selected value="default">Choose your time</option>
                                @foreach ($times as $time)
                                    <option value="{{$time}}">{{$time}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <input hidden name="openingHoursForm" type="text" value="openingHoursForm">
                    <input class="btn btn-primary btn-block" type="submit" type="button" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>