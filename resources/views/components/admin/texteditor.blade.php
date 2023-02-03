<div>
    <label for="">
        Product Details
        <span class="text-xs text-textRed"> As much as possible </span>
    </label>
    <textarea name="description" class="firstTextEditor"></textarea>
</div>

@section('js')
    <script src="https://cdn.tiny.cloud/1/gpcbht1aw5ouitwv78hk2u55ltub9ycsmuntzq4pp9tnkhe6/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            height: 300,

            selector: '.firstTextEditor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            // mergetags_list: [{
            //         value: 'First.Name',
            //         title: 'First Name'
            //     },
            //     {
            //         value: 'Email',
            //         title: 'Email'
            //     },
            // ]
        });
    </script>
@endsection
