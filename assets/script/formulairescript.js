var total = 0;
var txt = $(".nombreFini");

class champs {
    constructor(valeur, validation) {
        this.valeur = valeur;
        this.validation = validation;
    }
}

var champ = new Array(13);

for (i = 0; i < 13; i++) {
    champ[i] = new champs("", 0);
}

$("#provider-select").on("change", function (event) {
    event.preventDefault();
    champ[0].valeur = contenu(this);
    calculResult();
});

$("#personnal").on("change", function (event) {
    event.preventDefault();
    if (this.checked) {
        champ[1].valeur = 1;
        calculResult();
    }
});
$("#professional").on("change", function (event) {
    event.preventDefault();
    if (this.checked) {
        champ[1].valeur = 1;
        calculResult();
    }
});

$("#tva").on("change", function (event) {
    event.preventDefault();
    champ[2].valeur = contenu(this);
    calculResult();
});

$("#fname").on("change", function (event) {
    event.preventDefault();
    champ[3].valeur = contenu(this);
    calculResult();
});

$("#name").on("change", function (event) {
    event.preventDefault();
    champ[4].valeur = contenu(this);
    calculResult();
});

$("#male").on("change", function (event) {
    event.preventDefault();
    if (this.checked) {
        champ[5].valeur = 1;
        calculResult();
    }
});
$("#female").on("change", function (event) {
    event.preventDefault();
    if (this.checked) {
        champ[5].valeur = 1;
        calculResult();
    }
});
$("#other").on("change", function (event) {
    event.preventDefault();
    if (this.checked) {
        champ[5].valeur = 1;
        calculResult();
    }
});

$("#mail").on("change", function (event) {
    event.preventDefault();
    champ[6].valeur = contenu(this);
    calculResult();
});

$("#phone").on("change", function (event) {
    event.preventDefault();
    champ[7].valeur = contenu(this);
    calculResult();
});

$("#address").on("change", function (event) {
    event.preventDefault();
    champ[8].valeur = contenu(this);
    calculResult();
});

$("#area").on("change", function (event) {
    event.preventDefault();
    champ[9].valeur = contenu(this);
    calculResult();
});

$("#city").on("change", function (event) {
    event.preventDefault();
    champ[10].valeur = contenu(this);
    calculResult();
});

$("#postal").on("change", function (event) {
    event.preventDefault();
    champ[11].valeur = contenu(this);
    calculResult();
});

$("#card").on("change", function (event) {
    event.preventDefault();
    champ[12].valeur = contenu(this);
    calculResult();
});

const contenu = (type) => {
    if (type.value === "") {
        type.style.backgroundColor = "#77cebb";
        return 0;
    } else {
        type.style.backgroundColor = "#47a3a3";
        return 1;
    }
}

function calculResult() {
    total = 0;
    for (i = 0; i < 13; i++) {
        if (champ[i].valeur == 1) {
            total++;
        }
    }

    var pourcentage = (total * 100) / 13;
    $(".progress-bar").css("width", pourcentage + "%");
    if(total==13){
        txt.text("Nombre de cases remplies: "+total+" / 13  --  FIN");
       }else{
        txt.text("Nombre de cases remplies: "+total+" / 13");
       }
}

var entrees = $("select");
var entrees2 = $("input");

function restaurer() {
    entrees.css("background-color", "#77cebb");
    entrees2.css("background-color", "#77cebb");
    alert("bon");
    for (i = 0; i < 13; i++) {
        champ[i] = new champs("", 0);
    }
    calculResult();
}

$("#postal").on("paste keyup change", function(){
    if($(this).val().length == 5){
        $.ajax({
            type: "GET",
            url: "https://apicarto.ign.fr/api/codes-postaux/communes/"+$(this).val(),
            success: function(response, textStatus, xhr){
                if(xhr.status == 200){
                    var i=0;
                    response.forEach(element =>{
                    availableTags2[i]=element.nomCommune;
                    i++;
                    })
                }
            },
            error: function(shr, ajaxOptions, thrownError){
                if(xhr.status == 404){
                    $("#postal").css("border", "1px solid red");
                }
            }
        })

        if(availableTags2.indexOf($("#city").val()) == -1){
            $("#city").css("color","red");
        }else{
            $("#city").css("color","");
        }
    }else if($(this).val().length < 5 || $(this).val().length > 5){
        availableTags2.length = 0;
        $("#city").css("color","red");
    }
    
});

$("#area").on("paste keyup change", function(){
        $.ajax({
            type: "GET",
            url: "https://geo.api.gouv.fr/regions?nom="+$(this).val(),
            success: function(response, textStatus, xhr){
                if(xhr.status == 200){
                    var i=0;
                    response.forEach(element =>{
                        availableTags[i]=element.nom;
                        i++;
                    })
                }
            },
            error: function(shr, ajaxOptions, thrownError){
                if(xhr.status == 404){
                    $("#postal").css("border", "1px solid red");
                }
            }
        })
        if(availableTags.indexOf($(this).val()) == -1){
            $(this).css("color","red");
        }else{
            $(this).css("color","");
        }
        availableTags.length = 0;
        
});

$("#city").on("paste keyup change", function(){
    if(availableTags2.indexOf($(this).val()) == -1){
        $(this).css("color","red");
    }else{
        $(this).css("color","");
    }
})

var availableTags;

$( function() {
    availableTags = [
    ];
    $( ".autocomplete" ).autocomplete({
      source: availableTags
    });
  });

  var availableTags2;

$( function() {
    availableTags2 = [
    ];
    $( ".autocomplete2" ).autocomplete({
      source: availableTags2
    });
  });