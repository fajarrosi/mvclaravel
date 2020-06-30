<!DOCTYPE html>
<html>
<head>
	<title>Hari Ke-1 Sanbercode | Sign Up</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>

<h4>Sign Up Form</h4>

<form action="{{route('home')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div>
		<label>First Name : </label></br>
		<input type="text" name="first"></br>
		<label>Last Name : </label></br>
		<input type="text" name="last">
	</div>
	</br>
	<div>
		<label>Gender : </label></br>

		<input type="radio" name="gender">Male</br>
		<input type="radio" name="gender">Female</br>
		<input type="radio" name="gender">Other</br>
	</div>
	</br>
	<div>
		<label>Nationality : </label></br>
		 <select name="nationality">
		    <option value="volvo">Indonesia</option>
		    <option value="saab">Singapore</option>
		    <option value="opel">Malaysian</option>
		    <option value="audi">Australian</option>
	  	</select>
	</div>
	</br>
	<div>
		<label>Language Spoken : </label></br>
	  	<input type="checkbox" name="Indonesia">Indonesia</br>
	  	<input type="checkbox" name="English">English</br>
	  	<input type="checkbox" name="Other">Other</br>
	</div>
	</br>
	<div>
		<label>Bio :</label>
  		</br>
  		<textarea name="bio"></textarea>
	</div>
	</br>
	<button type="submit">Sign Up</button>
  
</form>

</body>
</html>