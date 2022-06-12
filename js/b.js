const successBtn = document.querySelector('.button7');
    
const snackbarContainer = document.getElementById('snackbar-container');


successBtn.addEventListener('click', ()=>{
    snackbar('success', 'Your vote has been counted',3000)
})

function snackbar(type,msg, time){
    const para = document.createElement('P');
    para.classList.add('snackbar');
    para.innerHTML = `${msg} <span> </span`;
    
    if(type === 'success'){
        para.classList.add('success');
    }
    snackbarContainer.appendChild(para);
    para.classList.add('fadeout');
    
    setTimeout(()=>{
        snackbarContainer.removeChild(para)
    }, time)
}