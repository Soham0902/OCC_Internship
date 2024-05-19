var type = document.getElementById('ptype').value;
var temp = document.getElementById('ptype');
document.frm.amount.value = 500;

temp.addEventListener("change", ()=>{
    if(type==2) {
        document.frm.amount.v1alue = 500;
    }
    else {
        document.frm.amount.value = 300;
    }
})