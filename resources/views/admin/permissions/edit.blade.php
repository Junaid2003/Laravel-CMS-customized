<x-admin-master>
@section('content')

<div class="row">
    @if (session()->has('permission-updated'))
    <div class="alert alert-success">
    {{ session('permission-updated') }}
    </div>    
    @endif
</div>

<div class="row">
    <div class="col-sm-6">
    <h1>Edit : {{$permission->name}}</h1>
        <form method="post" action="{{route('permissions.update', $permission->id)}}">
            @csrf
            @method('PUT')
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$permission->name}}">
            </div>
            <button class="btb btn-primary form-control">Update</button>
        </form>
    </div>
</div>


@endsection
</x-admin-master>