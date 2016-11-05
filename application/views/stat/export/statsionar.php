<div class="container">
    <form method="post">
        <div class="row">
            <label class="control-label">Пол</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="gender" id="gender1" value="1" checked>
                    Мужской
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="gender" id="gender2" value="2">
                    Женский
                </label>
            </div>
        </div>
        <div  class="row">
            <label class="control-label">Возраст</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="age" id="age1" value="1" checked>
                    до 25
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="age" id="age2" value="2">
                    26-60
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="age" id="age3" value="3">
                    больше 61
                </label>
            </div>
        </div>
        <div class="row">
            <label class="control-label">В какой организации Вы проходили курс лечения?</label>

            <div class="form-group">
                <select id="medorg_id" class="form-control" name="medorg_id">
                    <option value="0">(не указано)</option>
                    <?php
                    if(!empty($medorg))
                        foreach($medorg as $key=>$value){
                            ?>
                            <option value="<?=$key?>"><?=$value?></option>
                        <?php
                        }
                    ?>
                </select>
            </div>
        </div>
        <div  class="row">
            <label class="control-label">Сколько времени Вы ожидали осмотра врача в приемном отделении?</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="time" id="time1" value="1" checked>
                    быстро
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="time" id="time2" value="2">
                   немного подождал(а)
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="time" id="time3" value="3">
                    длительно
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="time" id="time4" value="4">
                    пока не обратилась(ся) повторно
                </label>
            </div>
        </div>
        <div  class="row">
            <label class="control-label">Насколько Вас удовлетворяет качество услуг?</label>

            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction1" value="1" checked onclick="answer_a_selected();">
                    Полностью удовлетворяет
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction2" value="2" onclick="answer_b_selected();">
                    В основном удовлетворяет
                </label>
            </div>
            <div class="radio form-control">
                <label>
                    <input type="radio" name="satisfaction" id="satisfaction3" value="3" onclick="answer_c_selected();">
                    Совсем не удовлетворяет
                </label>
            </div>
        </div>

        <div id="answer-c" style="display: none">
            <div  class="row">
                <label class="control-label">Оцените санитарно-гигиенические условия качества уборки помещений, освещения комнат, температурный режим и тишину в ночное время:</label>

                <div class="radio form-control">
                    <label>
                        <input type="radio" name="conditions" id="conditions1" value="1" checked>
                        полностью удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="conditions" id="conditions2" value="2">
                        частично удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="conditions" id="conditions3" value="3">
                        скорее не удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="conditions" id="conditions4" value="4">
                        полностью не удовлетворен
                    </label>
                </div>

            </div>
            <div  class="row">
                <label class="control-label">Оцените питание во время прребывания в медицинской организации:</label>

                <div class="radio form-control">
                    <label>
                        <input type="radio" name="food" id="food1" value="1" checked>
                        полностью удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="food" id="food2" value="2">
                        частично удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="food" id="food3" value="3">
                        скорее не удовлетворен
                    </label>
                </div>
                <div class="radio form-control">
                    <label>
                        <input type="radio" name="food" id="food4" value="4">
                        полностью не удовлетворен
                    </label>
                </div>
            </div>
        </div>
        <div id="answer-b" style="display: none">
            <div  class="row">
                <label class="control-label">Укажите чем не удовлетворены</label>
                <input type="text" class="form-control" placeholder="Введите текст" name="problems">
            </div>
        </div>
<hr/>
        <div class="row text-right">
            <button type="submit" class="btn-success">Готово</button>
        </div>
    </form>
</div>
<script type="application/javascript">
    function answer_a_selected(){
        $("#answer-b").hide();
        $("#answer-c").hide();
    }
    function answer_b_selected(){
        $("#answer-b").show();
        $("#answer-c").hide();
    }
    function answer_c_selected(){
        $("#answer-b").show();
        $("#answer-c").show();
    }
</script>