var bourse = document.getElementById('bourse');


function addAdresse(){
if (bourse.value === 'boursier') {
    document.getElementById('boursier').style="display: block";
    document.getElementById('adresse').style="display: none";
}else if(bourse.value === 'non_boursier') {
    document.getElementById('adresse').style="display: block";
    document.getElementById('boursier').style="display: none";  
}
}



