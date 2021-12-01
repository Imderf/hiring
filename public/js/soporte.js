$(document).ready(function () {
    setEvents();
});

function setEvents() {
    $(".btn-upload").click(function () {
        $("#form-soporte").find("#adjunto_soporte").click();
    });

    $("#form-soporte").submit(function (e) {
        e.preventDefault();
        $(".alert-upload").addClass("d-none");

        if (true /*$('#form-soporte').find('.adjunto-soporte').length > 0*/) {
            saveData($(this));
        } else {
            $(".alert-upload").removeClass("d-none");
        }
    });

    setEventPreviewFiles($("#form-soporte").find("#adjunto_soporte"));
}

function saveData($form) {
    var fileConstancia = $form.find("#constancia_activa")[0];
    var formData = new FormData();
    formData.append("_token", $('[name="_token"]').val());
    formData.append("nombre", $form.find('[name="nombre"]').val());
    formData.append("tipo_error", $form.find('[name="tipo_error"]').val());
    formData.append("comentario", $form.find('[name="comentario"]').val());
    formData.append("telefono", $form.find('[name="telefono"]').val());
    formData.append("correo", $form.find('[name="correo"]').val());
    formData.append("sitio_web", $form.find('[name="sitio_web"]').val());

    $(".file-soport").each(function (index) {
        console.log("index", index);
        var fileinput = $(this)[0];
        formData.append("file" + index, fileinput.files[0]);
    });

    var requestSoporte = new XMLHttpRequest();
    requestSoporte.open("POST", $form.attr("action"));
    requestSoporte.onload = function () {
        finishProccess($.parseJSON(requestSoporte.responseText));
    };
    $(".loading-icon").removeClass("d-none");
    requestSoporte.send(formData);
}

function finishProccess(r) {
    $(".loading-icon").addClass("d-none");

    if (r.status) {
        //alert('Soporte creado con éxito!');
        //window.location.reload();
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Soporte creado con éxito!",
            showConfirmButton: true,
            //timer: 1500,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.reload();
            }
        });
    } else {
        alert("Se presento un error");
    }
}

function setEventPreviewFiles($this) {
    $this.change(function () {
        previewAttact($(this));
        $(this).addClass("file-soport");
        $(this).removeAttr("id");
        $("#form-soporte .input-uploads-files").append(
            ' <input type="file" id="adjunto_soporte" class="d-none" accept="image/x-png,image/gif,image/jpeg">'
        );
        setEventPreviewFiles($("#form-soporte").find("#adjunto_soporte"));
    });
}

function previewAttact($fileInput) {
    var fileInput = $fileInput[0];
    var _nameFile = fileInput.files[0].name;

    var reader = new FileReader();
    reader.onload = function (e) {
        $(".content-img").append(
            $('<div class="col-md-6">').append(getImgPreview(e.target.result))
        );
    };

    reader.readAsDataURL(fileInput.files[0]);
}

function getImgPreview(_src) {
    return $('<img width="100%"/>').attr({ src: _src });
}
