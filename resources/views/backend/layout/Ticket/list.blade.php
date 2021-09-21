@extends('backend.master')
@section('content')
<h1>Ticket List</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        create schedule
    </button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Destination</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <!-- {{--Tickets--}}
{{--@dd($Tickets)--}} -->
@foreach($Ticket as  $key=>$ticket)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$ticket->time}}</td>
        <td>{{$ticket->date}}</td>
      
        <td>{{$ticket->destination}}</td>
        <td>{{$ticket->status}}</td>
       
        
            
        </td>
    </tr>
    @endforeach

     
  </tbody>
</table>

{{$Ticket->links('pagination::bootstrap-4')}}


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('Ticket.store')}}" method="POST">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add to schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        

                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time" placeholder="Enter  time">
                           </div>
                           <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" id="date" name="date" placeholder="Enter date">
                           </div>
                           <div class="form-group">
                            <label for="destinatio">Destination</label>
                            <input type="description" class="form-control" id="destination" name="destination" placeholder="Enter your destination">
                           </div>




                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Enter product description" ></textarea>
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

