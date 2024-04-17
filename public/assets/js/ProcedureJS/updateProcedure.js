var exampleModal = document.getElementById('kt_modal_1');
const nature_jugement = ["عادي", "إداري", "تجاري"];
const degree_cont = ["إبتدائي", "إستئنافي", "النقض"];
exampleModal.addEventListener('show.bs.modal', function(event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-whatever')  
    var data = JSON.parse(recipient);  
    if(data != null){
        select_choix(data.id_nature_jugement,nature_jugement,"#id_nature_jugement","#select2-id_nature_jugement-container");
        select_choix(data.degree_cont,degree_cont,"#id_degree_cont","#select2-id_degree_cont-container");
        select_choix1(data.tribunal.id,data.tribunal.nom_ar,"#id_tribune","#select2-id_tribune-container");
        select_choix1(data.nature_dossier.id,data.nature_dossier.nature_ar,"#id_nature","#select2-id_nature-container");
        select_choix1(data.categorie_dossier.id,data.categorie_dossier.libelle,"#id_categorie","#select2-id_categorie-container");
        select_choix1(data.client.id,data.client.nom,"#id_client","#select2-id_client-container");
        select_choix1(data.client_position.id,data.client_position.libelle,"#id_position_client","#select2-id_position_client-container");
        select_choix1(data.opposant.id,data.opposant.nom,"#id_opposant","#select2-id_opposant-container");
        select_choix1(data.client_position.id,data.client_position.libelle,"#id_position_opposant","#select2-id_position_opposant-container");
    
        $("#NumBureauForm1").val(data.numero_ordre);   
        $("#NumEnregistrementForm1").val(data.numero_archive);   
        $("#DatOuvertureDossierForm1").val(data.date_dossier_bureau);
        select_choix1(data.employe.id_employe,data.employe.nom,"#RedAssigneForm1","#select2-RedAssigneForm1-container");

        select_choix1(data.employe.id_employe,data.employe.nom,"#AvDossierForm1","#select2-RedAssigneForm1-container");
    }    
})

function select_choix(num,table,id1,id2){
    $(id1).val(num);
    $(id2).attr('title', table[num]);
    $(id2).text(table[num]);
}

function select_choix1(num,val,id1,id2){
    $(id1).val(num);
    $(id2).attr('title', val);
    $(id2).text(val);
}