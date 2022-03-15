function setNow() {
   var today = new Date();
   var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
   var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
   
   document.getElementById('kezdet').min = date+'T'+time;
   document.getElementById('veg').min = date+'T'+time;
}