@extends('user.sidebaruser')

@section('content')
<h2 class="text-center py-2">Product Details</h2>
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Price</th>
                        <th>Detail</th> 
                        <th>Quantity</th>
                        <th>Category</th>                       
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>                                    
                @foreach ($product as $item)
                @if(Auth::user()->id == $item->Userid)
                    <tr>
                        <td>{{$item->Productname}}</td>
                        <td>
                            <img src="{{asset($item->Productimage)}}" alt="{{$item->Productname}}" height="100">
                        </td>
                        <td>{{$item->Price}}</td>
                        <td>{{$item->Productdetail}}</td>
                        <td>{{$item->Quantity}}</td>  
                        <?php $category = App\Category::findorFail($item->Categoryid)?> 
                        <td>{{$category->Categoryname}}</td>                                           
                        <td>
                            <a href="{{ route('addproduct.edit',['id'=>$item->id])}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>                        
                                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deleting the data??</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are u sure?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" href="{{ route('addproduct.destroy',['id'=>$item->id]) }}"
                  onclick="event.preventDefault();
                  document.getElementById('delete-form').submit();">Delete</button>

          <form id="delete-form" action="{{ route('addproduct.destroy',['id'=>$item->id]) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
          </form>
        </div>
      </div>
    </div>
  </div>
                        </td>
                    </tr>  
                    @endif                      
                    @endforeach    
                                    
                </tbody>
                
            </table>
        </div>
    </div>
</div>

@endsection