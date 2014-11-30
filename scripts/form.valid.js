function validate(){ 

var email = document.getElementById('email');
var name = document.getElementById('name');
var err_name = document.getElementById('err_name');
var err_mail = document.getElementById('err_mail');
var mail_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var name_filter = /^(votre nom|)$/;
var ok=true;

if ( name.value.length < 3 )
{
   name.style.border="thick solid red";
   err_name.style.display="inline";
   name.focus();
   ok=false;
}
else {
   name.style.border="1px solid #00CCCC ";
   err_name.style.display="none";
}

if (!mail_filter.test(email.value)) 
{
   email.style.border="thick solid red";
   err_mail.style.display="inline";
   email.focus();
   ok = false;
}
else {
   email.style.border="1px solid #00CCCC ";
   err_mail.style.display="none";
}
return ok;
}

function raz(x)
{
x.style.color='#000000';
x.style.fontStyle='normal';
x.value='';
}
