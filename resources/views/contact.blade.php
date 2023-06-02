<h1>Data Express in form of Table</h1>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Operation</td>
    </tr>
    @foreach($members as $member)
<tr>
<td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['password']}}</td>
    <td><a href={{"delete/".$member['id']}}>Delete</a></td>
    <td><a href={{"edit/".$member['id']}}>Edit</a></td>
</tr>
@endforeach
</table>