//Components
let modal;
let btnPluss;
let btnClose;
let btnCreate;

window.onload = () => {
    init();
    
}

const init = () =>{

    //init components
    modal = document.querySelectorAll(".modal_enroll");
    btnPluss = document.querySelectorAll(".btn_student");
    btnClose = document.querySelectorAll(".close");
    btnCreate = document.querySelectorAll(".create_center");

    //Open the modal student
    btnPluss.forEach((btnP)=>{
        btnP.addEventListener("click",function(){
            displayModal(0);
        });
    });

    //Close the modal
    btnClose.forEach((btnC)=>{
        btnC.addEventListener("click",function(){
            closeModal(0);
            closeModal(1);
        });
       
    });

    //Open the modal teacher
    btnCreate.forEach((btnCr)=>{
        btnCr.addEventListener("click",function(){
            displayModal(1);
        });
       
        
    });

}
//Function display modal
const displayModal = (i) => {
    modal[i].style.display = "flex";
}

//Function close modal
const closeModal = (i) => {
    modal[i].style.display = "none";;
}