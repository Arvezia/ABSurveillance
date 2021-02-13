function required()
{
var empt = document.login.password.value;
if (empt === "")
{
alert("Tolong masukkan password");
return false;
}
else 
{
alert('Selamat Datang');
return true; 
}
}