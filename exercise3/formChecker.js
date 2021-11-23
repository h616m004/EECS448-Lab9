function checker()
{
    var at = false;
    var period = false;
    for(var i=0; i<document.getElementById("text1").value.length; i++)
    {
        if(document.getElementsByName("username").value[i] == '@')
        {
            at = true;
        }
        if(document.getElementsByName("username").value[i] == '.')
        {
            period = true;
        }
    }
    if(!(at && period))
    {
        alert("Username must be in the form of an email");
    }
}