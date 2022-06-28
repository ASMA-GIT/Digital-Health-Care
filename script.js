window.onload=() => {
    var button =document.querySelector('.cal');
    button.addEventListener('click',calculateBMI);
};
function calculateBMI()
{
var height=parseInt(document.querySelector(".height-field").value);
var weight=parseInt(document.querySelector(".weight-field").value);
var result=document.querySelector(".result");
var bmi=(weight/((height*height)/10000)).toFixed(2);
if (bmi < 18.6) result.innerHTML='Under Weight  '+bmi;

else if (bmi >=18.6 && bmi< 24.9) result.innerHTML='Good To GO  '+bmi;

else result.innerHTML='Over Weight  '+bmi;
}

function booknow()
{
    var input=parseInt(document.querySelector(".box").value);
    window.alert("Booking Successful");
}
