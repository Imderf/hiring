$(document).ready(function () {
    setEvents();
});

function setEvents() {
    $('.btn-upload').click(function () {
        $('#form-profile').find('#img_perfil').click();
    });

    $('#form-profile').submit(function (e) {
        e.preventDefault();
        saveData($(this));

    });

    setEventPreviewFiles($('#form-profile').find('#img_perfil'));

}

function saveData($form) {
    var fileImgProfile = $form.find('#img_perfil')[0];
    var formData = new FormData();
    formData.append('_token', $('[name="_token"]').val());
    formData.append('img_perfil', fileImgProfile.files[0]);
    formData.append('name', $form.find('[name="name"]').val());
    formData.append('ciudad', $form.find('[name="ciudad"]').val());
    formData.append('direccion', $form.find('[name="direccion"]').val());
    formData.append('telefono', $form.find('[name="telefono"]').val());
    formData.append('email', $form.find('[name="email"]').val());
    formData.append('sitio_web', $form.find('[name="sitio_web"]').val());
    formData.append('quien_es', $form.find('[name="quien_es"]').val());
    formData.append('redes1', $form.find('[name="redes1"]').val());
    formData.append('redes2', $form.find('[name="redes2"]').val());
    formData.append('redes3', $form.find('[name="redes3"]').val());


    var requestSoporte = new XMLHttpRequest();
    requestSoporte.open("POST", $form.attr('action'));
    requestSoporte.onload = function () {
        finishProccess($.parseJSON(requestSoporte.responseText))
    };
    $('.loading-icon').removeClass('d-none');
    requestSoporte.send(formData);

}

function finishProccess(r) {
    $('.loading-icon').addClass('d-none');

    if (r.status) {
        alert(r.message);
        window.location.reload();
    } else {
        alert('Se presento un error');
    }
}

function setEventPreviewFiles($this) {
    $this.change(function () {
        previewAttact($(this));
    });
}

function previewAttact($fileInput) {
    var fileInput = $fileInput[0];
    var reader = new FileReader();
    reader.onload = function (e) {
        $('.content-img').empty().append(getImgPreview(e.target.result));
    };
    reader.readAsDataURL(fileInput.files[0]);
}

function getImgPreview(_src) {
    return $('<img width="100%" style="margin-bottom: 5px;"/>').attr({src: _src})
}