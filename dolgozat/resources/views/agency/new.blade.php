<form action="/api/tasks" method="post">
    {{csrf_field()}}

    <input type="name" name="string" placeholder="név">
    <input type="country" name="country" placeholder="country">
    <input type="type" name="string" placeholder="type">
    <select name="user_id" placeholder="User Id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Ok">
</form>
