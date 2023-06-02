<h1>Update Member</h1>
<form action="{{url('edit')}}" method="POST">
    @csrf
    <input type="hidden"name="id"  value="{{$data['id']}}">
<input type="text" name="name"placeholder="enter your name" value="{{$data['name']}}">
<br><br>
<input type="text" name="email"placeholder="enter your email" value="{{$data['email']}}">
<br><br>
<input type="text" name="password"placeholder="enter your password" value="{{$data['password']}}">
<br><br>
<Button type="submit">Update</Button>
</form>