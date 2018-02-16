CKEDITOR.plugins.add( 'kashing_button', {
    icons: 'kashing_button',
    init: function( editor ) {
        editor.addCommand( 'insertKashing', {
            exec: function( editor ) {
				
                editor.insertHtml( '[kashing/]' );
            }
        });
        editor.ui.addButton( 'Kashing', {
            label: 'Insert Kashing functionality',
            command: 'insertKashing',
            toolbar: 'insert,100'
        });
    }
});