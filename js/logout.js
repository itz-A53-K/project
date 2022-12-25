//logout
logoutBtn= document.querySelector('.logoutBtn');
console.log(logoutBtn);
logoutBtn.addEventListener("click", (e)=>{
        if(confirm("Do you really want to logout?")) document.location = 'http://localhost/proj/partial/_logoutFunctional.php';
     
})
