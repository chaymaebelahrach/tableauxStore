const compteurElement = document.getElementById("compteur");
const plusButton = document.getElementById("plus");
const moinsButton = document.getElementById("moins");

let valeur = 0;

plusButton.addEventListener("click", () => {

  valeur++;
  compteurElement.textContent = valeur;
});

moinsButton.addEventListener("click", () => {
	if(valeur>0){
		valeur--;
  		compteurElement.textContent = valeur;
	}
});