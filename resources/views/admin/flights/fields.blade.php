<!-- Airline Id Field -->
<div class="row">
    <div class="col-12">
        <div class="form-container">
            <h6><i class="fas fa-info-circle"></i>
                &nbsp;Flight Information
            </h6>
            <div class="form-container-body row">
                <div class="form-group col-sm-3">
                    {{ Form::label('airline_id', 'Airline:') }}&nbsp;<span
                            class="required">*</span>
                    {{ Form::select('airline_id', $airlines, null , ['class' => 'form-control select2']) }}
                    <p class="text-danger">{{ $errors->first('airline_id') }}</p>
                </div>

                <!-- Flight Number Field -->
                <div class="form-group col-sm-3">
                    {{ Form::label('flight_number', 'Flight Number:') }}&nbsp;<span
                            class="required">*</span>
                    {{ Form::text('flight_number', null, ['class' => 'form-control']) }}
                    <p class="text-danger">{{ $errors->first('flight_number') }}</p>
                </div>

                <!-- Route Code Field -->
                <div class="form-group col-sm-3">
                    {{ Form::label('route_code', 'Route Code:') }}
                    {{ Form::text('route_code', null, ['class'=>'form-control', 'placeholder'=>'optional']) }}
                    <p class="text-danger">{{ $errors->first('route_code') }}</p>
                </div>

                <!-- Route Leg Field -->
                <div class="form-group col-sm-3">
                    {{ Form::label('route_leg', 'Route Leg:') }}
                    {{ Form::text('route_leg', null, ['class'=>'form-control', 'placeholder'=>'optional']) }}
                    <p class="text-danger">{{ $errors->first('route_leg') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-container">
            <h6><i class="fas fa-clock"></i>
                &nbsp;Scheduling
            </h6>
            <div class="form-container-body">
                <div class="row">
                    <div class="form-group col-md-12" style="text-align: center;">
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Monday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::MONDAY,
                                in_mask($days, \App\Models\Enums\Days::MONDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Tuesday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::TUESDAY,
                                in_mask($days, \App\Models\Enums\Days::TUESDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Wednesday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::WEDNESDAY,
                                in_mask($days, \App\Models\Enums\Days::WEDNESDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Thursday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::THURSDAY,
                                in_mask($days, \App\Models\Enums\Days::THURSDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Friday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::FRIDAY,
                                in_mask($days, \App\Models\Enums\Days::FRIDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span style="margin-right: 20px;">
                            {{ Form::label('days[]', 'Saturday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::SATURDAY,
                                in_mask($days, \App\Models\Enums\Days::SATURDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                        <span>
                            {{ Form::label('days[]', 'Sunday') }}
                            {{ Form::checkbox(
                                'days[]',
                                \App\Models\Enums\Days::SUNDAY,
                                in_mask($days, \App\Models\Enums\Days::SUNDAY),
                                ['class' => 'form-control icheck']
                            ) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="form-group col-sm-3">
        {{ Form::label('level', 'Flight Type:') }}&nbsp;<span class="required">*</span>
        {{ Form::select('flight_type', $flight_types, null, ['class' => 'form-control select2']) }}
        <p class="text-danger">{{ $errors->first('flight_type') }}</p>
    </div>

    <div class="form-group col-sm-3">
        {{ Form::label('dpt_airport_id', 'Departure Airport:') }}&nbsp;<span class="required">*</span>
        {{ Form::select('dpt_airport_id', $airports, null , ['class' => 'form-control select2']) }}
        <p class="text-danger">{{ $errors->first('dpt_airport_id') }}</p>
    </div>

    <!-- Arr Airport Id Field -->
    <div class="form-group col-sm-3">
        {{ Form::label('arr_airport_id', 'Arrival Airport:') }}&nbsp;<span class="required">*</span>
        {{ Form::select('arr_airport_id', $airports, null , ['class' => 'form-control select2']) }}
        <p class="text-danger">{{ $errors->first('arr_airport_id') }}</p>
    </div>

    <!-- Alt Airport Id Field -->
    <div class="form-group col-sm-3">
        {{ Form::label('alt_airport_id', 'Alt Airport:') }}
        {{ Form::select('alt_airport_id', $alt_airports, null , ['class' => 'form-control select2']) }}
        <p class="text-danger">{{ $errors->first('alt_airport_id') }}</p>
    </div>
</div>


<div class="row">

    <div class="form-group col-sm-2">
        {{ Form::label('dpt_time', 'Departure Time:') }}
        {{ Form::text('dpt_time', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('dpt_time') }}</p>
    </div>

    <div class="form-group col-sm-2">
        {{ Form::label('arr_time', 'Arrival Time:') }}
        {{ Form::text('arr_time', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('arr_time') }}</p>
    </div>

    <div class="form-group col-sm-4">
        {{ Form::label('flight_time', 'Flight Time (hours & minutes):') }}
        <div style="float: left">
            {{ Form::number('hours', null, [
                    'class' => 'form-control',
                    'placeholder' => 'hours'
                ]) }}
        </div>
        <div style="float: left">
            {{ Form::number('minutes', null, [
                    'class' => 'form-control',
                    'placeholder' => 'minutes'
                ]) }}
        </div>
        <p class="text-danger">{{ $errors->first('hours') }}</p>
        <p class="text-danger">{{ $errors->first('minutes') }}</p>
    </div>

    <div class="form-group col-sm-2">
        {{ Form::label('level', 'Flight Level:') }}
        {{ Form::text('level', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('level') }}</p>
    </div>

    <div class="form-group col-sm-2">
        {{ Form::label('distance', 'Distance:') }} <span class="small">in nautical miles</span>
        {{ Form::text('distance', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('distance') }}</p>
    </div>
</div>

<div class="row">
    <!-- Route Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('route', 'Route:') }}
        {{ Form::textarea('route', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('route') }}</p>
    </div>

    <!-- Notes Field -->
    <div class="form-group col-sm-6">
        {{ Form::label('notes', 'Notes:') }}
        {{ Form::textarea('notes', null, ['class' => 'form-control']) }}
        <p class="text-danger">{{ $errors->first('notes') }}</p>
    </div>
</div>

<div class="row">
    <!-- Active Field -->
    <div class="col-sm-4">
        {{ Form::label('active', 'Active:') }}
        {{ Form::hidden('active', 0, false) }}
        @if($flight!==null)
            {{ Form::checkbox('active', $flight->active, ['class' => 'form-control icheck']) }}
        @else
            {{ Form::checkbox('active', null, ['class' => 'form-control icheck']) }}
        @endif
    </div>
    <div class="col-8">
        <div class="text-right">
            {{ Form::button('Save', ['type' => 'submit', 'class' => 'btn btn-success']) }}
            <a href="{{ route('admin.flights.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
