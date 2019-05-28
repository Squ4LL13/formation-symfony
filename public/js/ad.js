$('#add-image').on('click', function() {
    // Je récupère l'index des futurs champs que je vais créer
    const index = +$('#widgets-counter').val();

    // Je récupère le prototype des entrées
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);

    // J'injecte le code au sein de la div
    $('#ad_images').append(tmpl);
    $('#widgets-counter').val(index + 1);

    // Je gère le bouton supprimer
    handleDeleteButton();
});

function handleDeleteButton() {
    $('button[data-action="delete"]').on('click', function() {
        const target = this.dataset.target;
        $(target).remove();
    })
}

function updateCounter() {
    const count = +$('#ad_images div.form-group').length;

    $('#widgets-counter').val(count);
}

updateCounter();

handleDeleteButton();