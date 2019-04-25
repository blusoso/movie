@extends('layouts.master')

@section('content')
  </head>
  <body id="bmi">
    <div id="app">
      <div class="wrap">
        <h1>BMI calculator</h1>
        <form class="content">
          <div class="form-group col-md-3">
            <label for="height">Height (cm)</label>
            <input class="form-control" type="text" v-model="height"><br>
            <!-- <span>@{{height}}</span><br> -->
            <label for="weight">Weight (kg)</label>
            <input class="form-control" type="text" v-model="weight">
            <!-- <span>@{{weight}}</span><br> -->
          </div>
        </form>
        <!-- <button type="submit" class="btn btn-primary" v-on:click="calbmi2">Submit</button> -->
        <p>BMI: @{{calbmi2}}</p>
        <!-- <span>Category: @{{result(bmi)}}</span> -->
        <span>Category: </span>
        <span v-if="bmi > 0 && bmi < 18.50">Thinness</span>
        <span v-else-if="bmi >= 18.50 && bmi <= 22.99">Normal</span>
        <span v-else-if="bmi >= 23.00 && bmi <= 24.99">Chubby</span>
        <span v-else-if="bmi >= 25.00 && bmi <= 29.99">Fat</span>
        <span v-else-if="bmi >= 30">Very fat</span>
        <span v-else-if="bmi != 0">Please input again</span>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

  </body>
@endsection
