@extends('backend.master')
@section('content')

<h1>Driver List</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        create driver
    </button>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">address</th>
      <th scope="col">driving_license</th>
      <th scope="col">phone_number</th>
      <th scope="col">nid_number</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    
  </thead>
  <tbody>
    
  </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('driver.store')}}" method="POST">
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


