const btn_add = document.getElementById("btn_add");
const contenuEcriture = document.getElementById("contenuEcriture");
const add_contenuEcriture = document.getElementById("add_contenuEcriture");
 
btn_add.addEventListener( 'click', function() {
  let nbre_add = Number(btn_add.dataset.nbre);
  let nbre_max = Number(btn_add.dataset.max);
  if( nbre_add < nbre_max )
  {
    btn_add.dataset.nbre = Number(btn_add.dataset.nbre)+1;

    // on clone le div modele
    let form_input_clone = contenuEcriture.cloneNode(true);
    form_input_clone.removeAttribute('id'); // on supprime l attribut id du clone (car un id est unique)
    

    // bouton de suppression de la ligne
    let button = document.createElement("button");
    button.type = "button";
    button.classList.add("btn_ecriture");
    button.textContent = "-";
    button.addEventListener	( // le bouton "-" supprime tout le div
      "click",function(e){
        add_contenuEcriture.removeChild(e.target.parentElement);
        e.preventDefault();
        btn_add.dataset.nbre = Number(btn_add.dataset.nbre)-1;
        btn_add.style.display = 'block';
      }
    );
    // -----------
    form_input_clone.appendChild(button);
    add_contenuEcriture.appendChild(form_input_clone);
    // -----------
    // nombre maxi atteint
    if( nbre_add == nbre_max-1 )
    {
      btn_add.style.display = 'none';
    }
    // -----------
  }
});

