function checkDate() {
    const givenDateInput = document.getElementById('date');
    const currentDate = new Date(); // current date and time
    const givenDate = new Date(givenDateInput.value); // given date
    console.log(givenDate.getFullYear());
    console.log(givenDate.getMonth());
    console.log(givenDate.getDate());
    console.log(currentDate);
    console.log(currentDate.getFullYear());
    console.log(currentDate.getMonth());
    console.log(currentDate.getDate());
    
if(document.querySelector('#name').value =="" || document.querySelector('#email').value=="" || document.querySelector('#age').value=="" ||document.querySelector('#phNo').value=="" ||document.querySelector('#streetName').value==""||document.querySelector('#district').value==""||document.querySelector('#ps').value==""||document.querySelector('#po').value=="" ||document.querySelector('#id_num').value==""||document.querySelector('#g_name').value==""||document.querySelector('#g_ph').value=="" || document.querySelector('#vacDist').value=="Select District" || document.querySelector('#vacCenter').value=="Select Vaccine Center" || document.querySelector('#date').value=="" ||document.querySelector('#dose').value=="Select vaccine dose"){
    alert('Please fill all the field');
    return false;
}
// else if(givenDate.getFullYear()<currentDate.getFullYear() || givenDate.getMonth()<currentDate.getMonth() ||givenDate.getDate()<currentDate.getDate()){
//     alert('blaaaa');
//     return false;
// }
// else{
//     // alert('blaaaa22222');
//     return true;

// }
}