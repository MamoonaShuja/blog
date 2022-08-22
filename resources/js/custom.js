import $ from 'jquery';
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
$(document).ready(function (){
    if($("#editor").length) {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    }
})

