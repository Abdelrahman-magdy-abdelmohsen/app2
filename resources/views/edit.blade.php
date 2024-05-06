<?php

?>
<form method="post" action="{{route('example.update',['example'=>$test->id])}}">
    @csrf;
    @method('PUT');
<input type="text" name="name" value="{{$test->name}}">
    <button type="submit"> edit </button>
</form>
