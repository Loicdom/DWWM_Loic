// const requ = new XMLHttpRequest();

// requ.onreadystatechange = function(event) {
//     // XMLHttpRequest.DONE === 4
//     if (this.readyState === XMLHttpRequest.DONE) {
//         if (this.status === 200) {
//             console.log("Réponse reçue: %s", this.responseText);
//             var divCodeFournisseur = document.getElementById("codeFournisseur");
//             reponse=JSON.parse(this.responseText);
//             console.log(reponse);
//             array.forEach(element => {
                
//             });
//         } else {
//             console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
//         }
//     }
// };

// requ.open('GET', '/DWWM_Loïc/PROJET STAGE/PHP/MODEL/CodeFournisseurs.php', true);
// requ.send(null);