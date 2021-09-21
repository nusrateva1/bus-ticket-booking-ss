@extends('backend.master')
@section('content')

<h1>Category list</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="bi bi-alarm"></i>
        create category
    </button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <!-- {{--categories--}}
{{--@dd($categories)--}} -->
@foreach($Categories as $category)
    <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->details}}</td>
        <td>{{$category->status}}</td>
        
        <td>{{$category->image}}</td>
        <td>
            
        </td>
    </tr>
@endforeach

{{$Categories->links('pagination::bootstrap-4')}}




  
  
</table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <form action="{{route('category.store')}}" method="POST">
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
                           
                           



                        <div class="form-group">
                            <label for="details">Details</label>
                            <input type="details" class="form-control" id="details" name="details" placeholder="Enter  details">
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