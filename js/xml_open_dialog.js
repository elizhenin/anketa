function popup_xml_open_dialog() {
    if (!w2ui.xml_open_dialog) {
        $().w2form({
            name: 'xml_open_dialog',
            url: '/ajax/xmlupload',
            style: 'border: 0px; background-color: transparent;',
            formHTML:
            '<div class="w2ui-page page-0">'+
            '<div class="w2ui-field">'+
            '<label>Документы:</label>'+
                '<div><input id="file" name="file" style="width: 200px"></div>'+
                '</div>'+
            '</div>'+
            '<div class="w2ui-buttons">'+
            '    <button class="btn" name="save">Загрузить</button>'+
            '</div>',
            fields: [
                { field: 'file', type: 'file', required: true }
            ],

            actions: {
                "save": function () { this.save(); }
            }
        });
    }
    $().w2popup('open', {
        title   : 'Загрузка XML',
        body    : '<div id="form" style="width: 100%; height: 100%;"></div>',
        style   : 'padding: 15px 0px 0px 0px',
        width   : 400,
        height  : 200,
        showMax : true,
        onToggle: function (event) {
            $(w2ui.xml_open_dialog.box).hide();
            event.onComplete = function () {
                $(w2ui.xml_open_dialog.box).show();
                w2ui.xml_open_dialog.resize();
            }
        },
        onOpen: function (event) {
            event.onComplete = function () {
                // specifying an onOpen handler instead is equivalent to specifying an onBeforeOpen handler, which would make this code execute too early and hence not deliver.
                $('#w2ui-popup #form').w2render('xml_open_dialog');
            }
        }
    });
}