@extends("layout")
@section("content")

    <div id="inOut">
        <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
        </label>
    </div>

    <div id="containerButtons">
        <div id="bttnBack" class="bttnsDirection">
            <i class="fas fa-chevron-left"></i>
        </div>


        <div id="servicesHome">
            <div id="servicesTop">

                @php
                $var=0;
                @endphp
                {{ $var }}
            @foreach($services as $service)

            @endforeach
            </div>
            <div id="servicesTop">
                <div id="bttnRestaurant" class="bttnServices"><p>{{$services[0]->name}}</p></div>
                <div id="bttnSnackDrink" class="bttnServices"><p>Snacks and drinks</p></div>
            </div>
            <div id="servicesBottom">
                <div id="bttnSpa" class="bttnServices"><p>Spa</p></div>
                <div id="bttnAlarm" class="bttnServices"><p>Alarms</p></div>
            </div>
        </div>
        <div id="bttnForward" class="bttnsDirection">
            <i class="fas fa-chevron-right"></i>
        </div>

    </div>
    <div id="bttnsDirection">
        {{--<i class="fas fa-chevron-left"></i>--}}
        {{--<i class="fas fa-chevron-right"></i>--}}
    </div>



@endsection