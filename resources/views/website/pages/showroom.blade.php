@extends('website.master')
@section('contents')

<div class="features" style="margin-top: 40px;">
    <div class="container">
      <h3 class="m_3">Our Room Lists</h3>
      <div class="close_but"><i class="close1"> </i></div>
<br>
      <div class="card-header">Manage room for Student({{count($managerooms)}}room)</div>
<br>
            <div class="row">
                  @foreach($managerooms as $key=>$item)
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
        <img src="{{url('/uploads/manageroom/'.$item->image)}}"  alt="room image">
  <div class="card-body">
    <h5 class="card-title">Room Name: {{$item->room_name}}</h5>
    <h5 class="card-title">Room Type: {{$item->room_type}}</h5>
    <h5 class="card-title">Room Fee: {{$item->room_fee}}</h5>
    <h5 class="card-title">Room allocative: {{$item->allocative}}</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="{{route('website.pages.booking',$item->id)}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
          <div class="view view-ninth">
                    <img src="{{url('/uploads/manageroom'.$item->image)}}" class="img-responsive" alt="" style="height: 190px;"/>
                   
                      
                  
           </div>

        </div>

               
         @endforeach
        </div>
    </div>
</div>



@endsection