function checker()
{
    var at = false;
    var period = false;
    var radio = false;
    if(document.getElementById("username").value.length<1)
    {
        alert("You must insert a username");
    }
    for(var i=0; i<document.getElementById("username").value.length; i++)
    {
        if(document.getElementById("username").value.charAt(i) == '@')
        {
            at = true;
        }
        if(document.getElementById("username").value.charAt(i) == '.')
        {
            period = true;
        }
    }
    if(!(at && period))
    {
        alert("Username must be in the form of an email");
    }
    if(document.getElementById("password").value.length<1)
    {
        alert("You must insert a password");
    }
    if(!(document.getElementById("bcraw").value >= 0) || document.getElementById("bcraw").value == "")
    {
        alert("Quantities must be 0 or more");
    }
    if(!(document.getElementById("kobe").value >= 0) || document.getElementById("kobe").value == "")
    {
        alert("Quantities must be 0 or more");
    }
    if(!(document.getElementById("ramsey").value >= 0) || document.getElementById("ramsey").value == "")
    {
        alert("Quantities must be 0 or more");
    }
    if(document.getElementById("option1").checked)
    {
        radio = true;
    }
    else if(document.getElementById("option2").checked)
    {
        radio = true;
    }
    else if(document.getElementById("option3").checked)
    {
        radio = true;
    }
    if(!radio)
    {
        alert("You must pick a shipping option");
    }
}