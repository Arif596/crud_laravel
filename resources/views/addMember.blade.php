<h1>Add Members</h1>
<form action="" method="POST">
    @csrf
    <label for="">Name:</label>
    <input type="text" name="name"palacholder="enter your name">
    <br> <br>
    <label for="">Email:</label>
    <input type="text" name="email"palacholder="enter your Emil">
    <br><br>
    <!-- <label for="">Passw</label> -->
    <input type="text" name="password" palacholder="enter your Password">
    <br> <br>
    <button>Add members</button>
    
</form>