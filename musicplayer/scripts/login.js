submit.addEventListener("click",()=>{
    fetch('http://localhost:3000/API/server.php',{
        method: 'POST',
        body: new URLSearchParams({
            login: login.value,
            password: pass.value
        })
    }).then((res)=>{
        return res.json()
    }).then((res)=>{
        console.log(res)
    })
})
/* Show password */

function showpassword(){
    const input = document.querySelector(".pass");
    if(input.type === "password"){
        input.type="text";
    }
    else{
        input.type="password"
    }
    
}