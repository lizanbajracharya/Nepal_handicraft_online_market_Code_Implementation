@extends('admin.sidebar')

@section('content')
<div class="container">
<h2 class="text-center py-2">Add new Product Category</h2>
    <form action="{{ route('addcategoryy.store')}}" method="POST" enctype="multipart/form-data">
    
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="name">Category Name</label> 
                <input type="text" name="name" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" name="upload" class="btn btn-primary d-block mx-auto" style="width:120px; font-size:20px">
                <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Submit
                </button>
            </div>
        </div>
    </form>
</div>
<div class="container mt-5">
    <h2 class="text-center pt-3 py-2">View All Product Category</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Category Name</th>               
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($category as $item)
            <tr>
                <td>{{$item->Categoryname}}</td>                
                <td>
                        <form action="{{ route('addcategoryy.destroy',['id'=>$item->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}  
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
            </tr>
            @endforeach
        </tbody>
        <link rel="stylesheet" type="text/css" href="{{asset('css/datatable.min.css')}}"/>
                <script type="text/javascript" src="{{asset('js/datatable.min.js')}}"></script>
                <script>
                    $(".table").DataTable();
                </script>
    </table>
</div>    

@endsection