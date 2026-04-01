

const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.color= "#0D6EFD";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest();
    xhr.open("POST","message.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            if (response.indexOf("Email and password field is required") || response.indexOf("Enter a validate email address!")) {
                statusTxt.style.color= "red";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusText.style.display= "none";
                });
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData );
}