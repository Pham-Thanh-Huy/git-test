<!DOCTYPE html>
<html>
<style>
    textarea{
        height: 600px;
    }
</style>
<head>
    <script src="https://cdn.tiny.cloud/1/niw9c2fqljtnhuobqfjtnyelfewiz4qqkdz1maaj45f7hdqy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        var editor_config = {
            path_absolute: "/",
            selector: 'textarea',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
</head>

<body>
    <!-- Sử dụng Laravel Form Builder để tạo form -->
    {!! Form::open(['url' => 'Post/add', 'method' => 'POST']) !!}

    <!-- Sử dụng Form::textarea để tạo trường textarea với class "hello" -->
    {!! Form::textarea('add', null, ['class' => 'hello']) !!}

    <!-- Đóng form -->
    {!! Form::close() !!}

</body>

</html>