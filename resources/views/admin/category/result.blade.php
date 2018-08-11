<?php 
<table style="width:100%">
    <tr>
        <th>Name</th>
    </tr>
    @foreach($results as $pa)
    <tr>
        <td>{{$pa->name}}</td>
    </tr>
    @endforeach
</table>
 ?>