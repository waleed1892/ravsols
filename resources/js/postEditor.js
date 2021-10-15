import Quill from "quill";
import "quill/dist/quill.core.css";
import "quill/dist/quill.snow.css";
import {QuillDeltaToHtmlConverter} from "quill-delta-to-html";

$(document).ready(function () {
    let toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{'header': 1}, {'header': 2}],               // custom button values
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
        [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent
        [{'direction': 'rtl'}],                         // text direction

        [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
        [{'header': [1, 2, 3, 4, 5, 6, false]}],

        [{'color': []}, {'background': []}],          // dropdown with defaults from theme
        [{'font': []}],
        [{'align': []}],

        ['clean'],                           // remove formatting button
        ['image', 'video'],

    ];
    const postEditor = new Quill('#postEditor', {
        modules: {
            toolbar: toolbarOptions,
            syntax: true
        },
        placeholder: 'Compose an epic...',
        theme: 'snow'  // or 'bubble'
    });
    window.postEditor = postEditor

    $('#postForm').on('submit', function (e) {
        e.preventDefault();
        const postForm = document.getElementById('postForm');
        const fd = new FormData(postForm);
        const content = postEditor.getContents().ops;
        const html = new QuillDeltaToHtmlConverter(content).convert();
        fd.append('content', JSON.stringify(content));
        fd.append('html_content', html)
        axios.post('/admin/posts', fd).then(res => {
            console.log(res.data)
            window.location = '/admin/posts?success=Record added successfully';
        }).catch(err => {
            console.log(err,'error')
        })
    })

    $('#postEditForm').on('submit', function (e) {
        e.preventDefault();
        const postForm = document.getElementById('postEditForm');
        const fd = new FormData(postForm);
        const post_id = fd.get('post_id')
        const content = postEditor.getContents().ops;
        const html = new QuillDeltaToHtmlConverter(content).convert();
        fd.append('content', JSON.stringify(content));
        fd.append('html_content', html)
        axios.post(`/admin/posts/${post_id}`, fd).then(res => {
            console.log(res.data)
            window.location = '/admin/posts?success=Record updated successfully';
        })
    })

    $("#imageInput").on('change', function (e) {
        const file = URL.createObjectURL(e.target.files[0])
        $('#imagePreview').attr('src', file)
    })
})
