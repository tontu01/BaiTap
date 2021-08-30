$(document).ready(function () {
    NewController.init();
});

var NewController = {
    init: function () {
        NewController.handelQuillEditor();
    },

    handelQuillEditor() {
        if (selectorIsExits("#editor-quill")) {
            var quillValue = $('input[name=new_content]').val();
            var quill = new Quill('#editor-quill', {
                modules: {
                    toolbar: [
                        ['bold', 'italic'],
                        ['link', 'blockquote', 'code-block', 'image'],
                        [{ list: 'ordered' }, { list: 'bullet' }]
                    ]
                },
                placeholder: 'Nhập nội dung',
                theme: 'snow'
            });
            quill.root.innerHTML = quillValue;

            $(".store-update-entity").submit(function(  ) {
                let input = $('#editor-quill').parent().children('input[type="hidden"]');
                input.val(quill.root.innerHTML.trim());
                return true; // submit form
            });
        }
    }
};
