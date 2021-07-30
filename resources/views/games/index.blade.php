@extends('layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Game Library</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('games.create') }}"> Create New Game Entry</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Genre</th>
            <th>ESRB Rating</th>
            <th>Estamated Play Time</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->Title }}</td>
            <td>{{ \Str::limit($value->Description, 100) }}</td>
            <td>{{ $value->Genre }}</td>
            <td>{{ $value->ESRB }}</td>
            <td>{{ $value->EstimatedPlayTime }}</td>
            <td>{{ $value->id }}</td>
            <td>
                <form action="{{ route('games.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('games.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('games.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection