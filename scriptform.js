function validateName()
{ 
    var u_name=document.myForm.nombre;
    var u_submit=document.myForm.u_submit;
    var nameError=document.getElementById("u_name_msj")
    var check=document.getElementById("check-name")

    if (/\d/.test(u_name.value))
    {
        u_name.style.borderColor='red';
        nameError.innerHTML="No puede contener número" 
        nameError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
    }
    else if (u_name.value=="")
    {
        u_name.style.borderColor='red';
        nameError.innerHTML="Rellene este campo" 
        nameError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_name.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        nameError.innerHTML=""
        
    }
}
function validateLastname()
{ 
    var u_lastname=document.myForm.apellido;
    var u_submit=document.myForm.u_submit;
    var lastnameError=document.getElementById("u_lastname_msj")
    var check=document.getElementById("check-lastname")

    if (/\d/.test(u_lastname.value))
    {
        u_lastname.style.borderColor='red';
        lastnameError.innerHTML="No puede contener número" 
        lastnameError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
    }
    else if (u_lastname.value=="")
    {
        u_lastname.style.borderColor='red';
        lastnameError.innerHTML="Rellene este campo" 
        lastnameError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_lastname.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        lastnameError.innerHTML=""
        
    }
}

function validateEmail()
{ 
    var u_mail=document.myForm.email
    var mailError=document.getElementById("u_mail_msj")
    var check=document.getElementById("check-mail")

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(u_mail.value))
    {
        u_mail.style.borderColor='green';
        mailError.innerHTML=""
        check.className="fa solid fa-check-circle"
    }
    else if (u_mail.value=="")
    {
        u_mail.style.borderColor='red';
        mailError.innerHTML="Rellene este campo" 
        mailError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_mail.style.borderColor='red';
        mailError.innerHTML="Email inválido" 
        mailError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
}
