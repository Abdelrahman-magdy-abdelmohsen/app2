<?php

?>

<form action="formreq" method="post">

    <input type="text" name="name">
    <input type="text" name="phone">
    <input type="text" name="address">
    <button type="submit"> send </button>
    {{csrf_field()}}
</form>

