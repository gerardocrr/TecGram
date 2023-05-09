import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Da click para subir una fotografia',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar fotografia',
    maxFiles: 1,
    uploadMultiple: false,
});

dropzone.on('success', function(file, response){
    document.querySelector('[name="imagen"]').value = response.imagen;
})
