const nouv = document.createElement("aside");

let titreModification = document.getElementById("titre");

if (typeRecupere == "etu") {
    nouv.innerHTML = "Etudiant";
} else if (typeRecupere == "pil") {
    nouv.innerHTML = "Pilote";
} else if (typeRecupere == "del") {
    nouv.innerHTML = "Delegue";
} else if (typeRecupere == "adm") {
    nouv.innerHTML = "Administrateur";
} else {
    alert("impossible");
}



nouv.style.color = "green";

titreModification.appendChild(nouv);