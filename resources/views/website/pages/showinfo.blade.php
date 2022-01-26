@extends('website.master')
@section('contents')

<div class="features" style="margin-top: 40px;">
    <div class="container">
      <h3 class="m_3">Hostel Information</h3>
      <div class="close_but"><i class="close1"> </i></div>
      

            <div class="row">
                  @foreach($hostels as $key=>$item)
        <div class="col-lg-4">
        <div class="card" style="width: 16rem;">
        <img src="{{url('/uploads/hostel/'.$item->image)}}" style="height:160px;" alt="hostel image">
  <div class="card-body">
    <h5 class="card-title">Name of the Hostel: {{$item->name_of_the_hostel}}</h5>
    <h5 class="card-title">Hostel Location: {{$item->hostel_location}}</h5>
    <h5 class="card-title">Hostel Type: {{$item->hostel_type}}</h5>
    <h5 class="card-title">Total Rooms: {{$item->Total_rooms}}</h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href="{{route('manageroom.hostelroom',$item->id)}}" class="btn btn-primary">View</a>
  </div>
</div>
          <div class="view view-ninth">
                    <img src="{{url('/uploads/hostel'.$item->image)}}" class="img-responsive" alt="" style="height: 190px;"/>
                   
                      
                  
           </div>

        </div>

               
         @endforeach
        </div>
    </div>
</div>



@endsection