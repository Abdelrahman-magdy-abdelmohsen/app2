<td> {{ $data->name }}</td>
<td> {{ $data->created_at }}</td>
<td> {{ $data->updated_at }}</td>
<td>
    <a href="example/{{$data->id}}/edit">edit</a>
    <a href="example/{{$data->id}}">show</a>
    <form method="post" action="{{route('example.destroy',[$data->id])}}">
        @method('delete');
        @csrf;
        <input type="submit" name="btn" value="delete">

    </form>
</td>
<tr></tr>
