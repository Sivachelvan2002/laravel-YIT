<div>
<form action="{{url('my/selvan')}}" method="POST">
    @csrf
    @method('PUT')
    <label for="fname">First Name</label><br/>
    <input type="text" name="fname" id="fname"><br/>
    <label for="fname">Last Name</label><br/>
    <input type="text" name="lname" id="lname"><br/>
    <input type="submit" value="submit">
</form>
</div>
