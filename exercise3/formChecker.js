function checker()
{
	var at = false;
	var period = false;
	var radio = false;
	var valid = true;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var bcraw = document.getElementById("bcraw").value;
	var kobe = document.getElementById("kobe").value;
	var ramsey = document.getElementById("kobe").value;
	if(username.length<1)
	{
		alert("You must insert a username");
		valid = false;

	}
	for(var i=0; i<username.length; i++)
	{
		if(username.charAt(i) == '@')
		{
		    at = true;
		}
		if(username.charAt(i) == '.')
		{
		    period = true;
		}
	}
	if(!(at && period))
	{
		alert("Username must be in the form of an email");
		valid = false;
	}
	if(password.length<1)
	{
		alert("You must insert a password");
		valid = false;
	}
	if(!(bcraw >= 0) || bcraw == "")
	{
		alert("Quantities must be 0 or more");
		valid = false;
	}
	if(!(kobe >= 0) || kobe == "")
	{
		alert("Quantities must be 0 or more");
		valid = false;
	}
	if(!(ramsey >= 0) || ramsey == "")
	{
		alert("Quantities must be 0 or more");
		valid = false;
	}
	if(document.getElementById("option1").checked)
	{
		radio = true;
		var shipping = document.getElementById("option1").value;
	}
	else if(document.getElementById("option2").checked)
	{
		radio = true;
		var shipping = document.getElementById("option2").value;
	}
	else if(document.getElementById("option3").checked)
	{
		radio = true;
		var shipping = document.getElementById("option3").value;
	}
	if(!radio)
	{
		alert("You must pick a shipping option");
		valid = false;
	}
	return valid;
}
document.addEventListener('DOMContentLoaded', function() {
	document.getElementById("submit").addEventListener("click", function() {
		if(checker())
		{
			document.querySelector("form").action="customerBackend.php";
			console.log("subitting");
		}
		else
		{
			console.log("resetting");
		}
	}); 
});

