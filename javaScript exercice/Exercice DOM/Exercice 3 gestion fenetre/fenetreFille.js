var parent = window.opener;

document.getElementById("fermerParent").addEventListener("click",function(){
    parent.close();
});

document.getElementById("fermerFenetre").addEventListener("click",self.close())