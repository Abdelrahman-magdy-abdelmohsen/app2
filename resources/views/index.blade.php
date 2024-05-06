<?php
?>

<table>
    <th> name </th>
    <th> created_at </th>
    <th> updated_at </th>
    <th> deleted_at</th>
    <th> action</th>
<tr>

</tr>
   @each('data',$test,'data')
    @convUnix()
    @check('100')
    correct
    @endcheck

</table>


