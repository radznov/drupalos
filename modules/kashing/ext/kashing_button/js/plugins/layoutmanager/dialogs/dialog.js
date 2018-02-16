CKEDITOR.dialog.add( 'kashingDialog', function( editor ) {

    console.log(editor.config.kashing_block_ids.toString());

    return {
        title: 'Kashing shortcode',
        minWidth: 400,
        minHeight: 200,
        contents: [
            {
                id: 'mainKashingShortcodeWindow',
                label: 'Kashing Shortcode',
                validate: CKEDITOR.dialog.validate.notEmpty( "Explanation field cannot be empty." ),
                elements: [
                    {
                        type: 'select',
                        id: 'kashingSelectForm',
                        label: 'Form name',
                        items: editor.config.kashing_block_ids

                    }
                ]
            }
        ],
        onOk: function() {
            var dialog = this;

            var attribute = dialog.getValueOf( 'mainKashingShortcodeWindow', 'kashingSelectForm' );

            editor.insertHtml( '[kashing id=' + attribute + ' /]' );
        },
        onShow: function() {

        }
    };
});