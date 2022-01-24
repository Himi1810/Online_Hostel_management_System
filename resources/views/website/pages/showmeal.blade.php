@extends('website.master')
@section('contents')

<div class="features" style="margin-top: 40px;">
    <div class="container">
      <h3 class="m_3">Our Meal Lists</h3>
      <div class="close_but"><i class="close1"> </i></div>

      <br>
     <div class="card-header" style="text-align:center; background-color:blue" >Meal list for Student({{count($meals)}}meal)</div>
<br>

            <div class="row">
                  @foreach($meals as $key=>$item)
        <div class="col-lg-4">
        <div class="card" style="width: 16rem;">
        <img src="{{url('/uploads/meal/'.$item->image)}}" style="height:160px; "  alt="meal image">
  <div class="card-body">
    <h5 class="card-title">Meal Category: {{$item->meal_category}}</h5>
    <h5 class="card-title">Meal Fee: {{$item->meal_fee}}</h5>
    <!-- <h5 class="card-title">Room Fee: {{$item->room_fee}}</h5>
    <h5 class="card-title">Room allocative: {{$item->allocative}}</h5> -->
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="{{route('website.mealpayment')}}" class="btn btn-primary">Take one AND Payment</a>
  </div>
</div>
          <div class="view view-ninth">
                    <img src="{{url('/uploads/meal'.$item->image)}}" class="img-responsive" alt="" style="height: 190px;"/>
                   
                      
                  
           </div>

        </div>

               
         @endforeach
        </div>
    </div>
</div>



@endsection