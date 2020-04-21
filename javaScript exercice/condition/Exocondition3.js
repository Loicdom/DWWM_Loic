function calculatrice(){
    var n1=prompt("Entrer 1er chiffre :");
    var operateur=prompt("Donner l'opérateur :");
    var n2=prompt("Entrer 2nd chiffre :");
    var t;
    if(n1==""||n2==""||operateur==""){
        return alert("Pas de données");
    }
    n1=parseInt(n1,10);
    n2=parseInt(n2,10);
    switch (operateur){
        case '+':
            t=n1+n2;
            break;
        case '-':
            t=n1-n2;
            break;   
        case '*':
            t=n1*n2;
            break;   
        case '/':
            if (n1==0 || n2==0){
                return alert("Division impossible");
            }
            t=n1/n2;
            break;
        default:
            t="operateur non reconnu !";    
    }
    alert(t);
}
calculatrice();