<h1>student data</h1>
<form action="" method="POST">
    @csrf
    <label for="">Name:</label>
    <input type="text" name="names" placeholder="enter your name">
    <br> <br>
    <label for="">Email:</label>
    <input type="text" name="email"placeholder="enter your Emil">
    <br><br>
    <!-- <label for="">Passw</label> -->
    <input type="text" name="password" placeholder="enter your Password">
    <br> <br>
    <input type="text" name="rollno" placeholder="enter your rollno">
    <br><br>
    <button>Add members</button>
    
</form>