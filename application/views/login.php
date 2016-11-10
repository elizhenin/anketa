<div style="width: 100vw; height: 100vh;">
    <div id="main" style="width: 100%; height: 100%;"></div>
</div>
<script type="text/javascript">
    function openPopup() {
        if (!w2ui.login) {
            $().w2form({
                name: 'login',
                style: 'border: 0px; background-color: transparent;',
                formHTML: '<form method="post">' +
                '<div class="w2ui-page page-0">' +
                '    <div class="w2ui-field">' +
                '        <label>Имя пользователя:</label>' +
                '        <div>' +
                '           <input name="login" type="text" maxlength="100" style="width: 250px"/>' +
                '        </div>' +
                '    </div>' +
                '    <div class="w2ui-field">' +
                '        <label>Пароль:</label>' +
                '        <div>' +
                '            <input name="password" type="password" maxlength="100" style="width: 250px"/>' +
                '        </div>' +
                '    </div>' +
                '</div>' +
                '<div class="w2ui-buttons">' +
                '    <button class="btn" name="reset" type="reset">Очистить</button>' +
                '    <button class="btn" name="enter" type="submit">Войти</button>' +
                '</div>' +
                '</form>',
                fields: [
                    {field: 'login', type: 'text', required: true},
                    {field: 'password', type: 'password', required: true}
                ],
                actions: {
                    "enter": function () {
                        var obj = this;
                        this.save({}, function (data) {
                            if (data.status == 'error') {
                                console.log('ERROR: ' + data.message);
                                return;
                            }

                            obj.clear();
                            $().w2popup('close');

                        });
                    },
                    "reset": function () {
                        this.clear();
                    }
                }
            });
        }
        $().w2popup('open', {
            title: 'Вход в систему',
            body: '<div id="form" style="width: 100%; height: 100%;"></div>',
            style: 'padding: 15px 0px 0px 0px',
            width: 400,
            height: 200,
            showMax: true,
            onToggle: function (event) {
                $(w2ui.login.box).hide();
                event.onComplete = function () {
                    $(w2ui.login.box).show();
                    w2ui.login.resize();
                }
            },
            onOpen: function (event) {
                event.onComplete = function () {
                    // specifying an onOpen handler instead is equivalent to specifying an onBeforeOpen handler, which would make this code execute too early and hence not deliver.
                    $('#w2ui-popup #form').w2render('login');
                }
            },
            onClose: function (event) {

                window.location.reload();

            }
        });
    }

    openPopup();

</script>