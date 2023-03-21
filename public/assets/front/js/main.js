
// upload file
const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", ()=>{
    fileInput.click();

});

fileInput.onchange = ({target}) =>{
    let file = target.files[0];
    if(file){
        let fileName = file.name;
        let uploadHTML = `
        <li class="row1">
                        <div class="content1">
                            <i class="fa-solid fa-file-alt"></i>
                            <div class="details">
                                <span class="name">${fileName}</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-check"></i>
                    </li>
        `;
        uploadedArea.innerHTML = uploadHTML;
    }
}


// random image load 

// var myElement = document.querySelector(".loader .myimage"),
//     myimages = ['../photo/2.jpg', '../photo/3.jpg', '../photo/4.jpg'],
//     myRandomNumber = Math.floor(Math.random() * myimages.length);

//     // function changeImage(myElement, myimages) {
//     //     setInterval(function() {

//     //         myElement.src = myimages[myRandomNumber];
//     //     }, 1000);
//     // }

//     // changeImage(myElement, myimages);
//     console.log(myElement.src);

