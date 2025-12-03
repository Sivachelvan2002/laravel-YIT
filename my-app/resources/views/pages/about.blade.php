@extends('layout.master')
@section('title','school-about')
@section('content')
<style>
    .form-control{
        width: 200px;
    }
</style>
<h3 class="text-center">This is About Page</h3>
<hr />
<div class="d-flex flex-column justify-content-center align-items-center">
    <form action="{{url('contact')}}" method="POST" class="border">
        @csrf
    <table class="table table-info table-hover" style="width: 34rem;">
    <tr>
        <td colspan="2" class="text-center" style="color: black">Student Details</td>
    </tr>
    <tr>
		<td class="text-center"><label for="profile">Profile</label></td>
		<td class="text-center"><input class="form-control" type="file" name="profile" id="profile" accept="image/jpg" ></td>
	</tr>
	<tr>
		<td class="text-center"><label for="father_name">Father Name</label></td>
		<td class="text-center"><input class="form-control" type="text" name="father_name" id="father_name" placeholder = "" required></td>
	</tr>
	<tr>
		<td class="text-center"><label for="student_name">Student Name</label></td>
		<td class="text-center"><input class="form-control" type="text" name="student_name" id="student_name" placeholder = "" required></td>
	</tr>
	<tr>
		<td class="text-center"><label for="admission_number">Addmission Number</label></td>
		<td class="text-center"><input class="form-control" type="text" name="admission_number" id="admission_number" placeholder = "" required></td>
	</tr>
    <tr>
		<td class="text-center"><label for="grade_id">Grade Name</label></td>
		<td class="text-center">
		<select  name="grade_id" id="grade_id" class="form-control">
			<option  name="n/a" class="text-center">--select grade--</option>
            <option  name="11">11</option>
            <option  name="12">12</option>
		</select>
		</td>
	</tr>
	<tr>
		<td class="text-center"><label for="nic_number">Nic Number</label></td>
		<td class="text-center"><input class="form-control" type="number" name="nic_number" id="nic_number" step = "0.01"></td>
	</tr>
	<tr>
		<td class="text-center"><label for="dob">Date Of Birth</label></td>
		<td class="text-center"><input class="form-control" type="Date" name="date_of_birth" id="date_of_birth" ></td>
	</tr>
	<tr>
		<td class="text-center"><label  for="gender">Gender</label></td>
    	<td class="">
        <input class="form-check-input"  type="radio" name="gender" id="male" value="male" required> <label for="male">Male</label>
        <input class="form-check-input" type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
        <input class="form-check-input" type="radio" name="gender" id="other" value="other"> <label for="other">Other</label>
    	</td>
	</tr>
	<tr>
		<td class="text-center"><label for="telepone_number">Telephone Number</label></td>
		<td class="text-center"><input class="form-control" type="number" name="telephone_number" id="telephone_number" ></td>
	</tr>
	<tr>
		<td class="text-center"><label for="address">Address</label></td>
		<td class="text-center"><input class="form-control" type="text" name="address" id="address" ></td>
	</tr>
</table>
    
    <div class="d-flex flex-row justify-content-center align-items-center">
        <input class="form-control btn btn-outline-danger" type="reset" value="Reset" >
        <input class="form-control btn btn-outline-success" type="submit" value="submit" ><br />
    </div>

</form>
</div>


@endsection