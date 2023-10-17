<form action="/api/tasks/{{$task->id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="name" name="string" placeholder="név">
    <input type="country" name="country" placeholder="country">
    <input type="type" name="string" placeholder="type">
    <select name="agency_id" placeholder="agency_id">
        @foreach ($users as $user)
            <option value="{{$user->agency_id}}"
            {{$user->agency_id == $task->agency_id ? 'selected' : '' }}
            >{{$user->name}}</option>
        @endforeach
    <input type="submit" value="Ok">
</form>;
