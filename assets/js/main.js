

// ===================================== second email send ===============================

let form = document.getElementById("myform");
const statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.color= "#0D6EFD";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest();
    xhr.open("POST","message.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            if (response.indexOf("Fill all the fields please !..") || response.indexOf("Enter a validate email address!")) {
                statusTxt.style.color= "red";
            }else{
                statusTxt.style.color= "#0D6EFD"; 
                form.reset();
                setTimeout(()=>{
                    statusText.style.display= "none";
                }, 3000);
            }
            statusTxt.innerText = response;
        }else{
            alert("error occured");
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);

}