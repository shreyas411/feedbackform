function mobileNumberValidation(mobileNumber)
{
    let valid = true
    // 10 numbers

    if(mobileNumber.length !== 10)
    {
        valid = false
    }

    if(valid) return true
    else return false
}


// Main validation
function validate(e)
{ 
    let valid = true
    const mobile = document.getElementById("mobile").value

    if(!mobileNumberValidation(mobile))
    {
       valid = false;
       alert("Invalid Mobile number!");
    }

    // Main condition
    if(valid) return true
    else return false
}

function ch(grade)
{
    let val = true;
    const grade = document.getElementById('grad').value;
    if(grade == "none")
    {   val = false;
        alert("choose any graduation");
        
    }
    else
    {
        if(grade=="UG")
        {   val = true;
            document.getElementById('UG').style.display="block";
            document.getElementById('PG').style.display="none";
        }
        else
        {   val = true;
            document.getElementById('UG').style.display="none";
            document.getElementById('PG').style.display="block";
        }
    }

    if(val) return true
    else return false
}
