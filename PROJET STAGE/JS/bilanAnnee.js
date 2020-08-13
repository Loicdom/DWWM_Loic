checkbox = document.getElementById('tous');
checkbox.addEventListener("change",touteAnnee);

function touteAnnee(){
    if(checkbox.checked != true) {
        date1 = document.getElementById('date1');
        date2 = document.getElementById('date2');
        date1.value = '';
        date2.value = '';
    } else {
        date1 = document.getElementById('date1');
        date2 = document.getElementById('date2');
        date1.value = date1.min;
        date2.value = date2.max;
    }
}