@extends('admin.sidebar')

@section('content')
<div class="container mt-5">
    <h2 class="text-center pt-3 py-2">Requested Category</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Category Name</th>                
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($requestt as $item)
            <tr>
                <td>{{$item->categoryname}}</td>               
                <td>
                        <form action="{{ route('requestd.destroy',['id'=>$item->id]) }}" method="POST">
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