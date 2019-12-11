
function creerOrganigramme() {

    $.ajax({
        url: "../PHP/organigramme.php",
        type: "GET",
        dataType: "json",
        success: function (membres) {
            creerArbre(membres); // Pass data to a function
        }
    });
}

function creerArbre(membres) {
    $('#organigramme').jstree({
        'core': {
            'data': membres
        }
    })
}



function chargerOrganigramme() {
    creerOrganigramme();
    cacherOrganigramme();
}

function afficherOrganigramme() {
    $("#organigramme").show();
}

function cacherOrganigramme() {
    $("#organigramme").hide();
}