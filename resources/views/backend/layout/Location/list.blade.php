@extends('backend.master')
@section('content')
<h1>Location List</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        create location
    </button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
     
    </tr>
  </thead>
  

<!-- {{--Location--}}
{{--@dd($Location)--}} -->
@foreach($Locations as  $key=>$location)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$location->name}}</td>
      
       
      
        
       
        
            
       
    </tr>
    @endforeach
    </table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('location.store')}}" method="POST">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add to schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       
                        

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter  name">
                           </div>
                           
                           



                        


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


