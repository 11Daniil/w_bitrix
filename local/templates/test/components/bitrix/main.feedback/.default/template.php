<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";
// CModule::IncludeModule('iblock');
// $IBLOCK_ID = 4;
?>
<form class="form">
	Форма обратной связи
	<div class="input">
		<input type="text" name="name"  class='name' placeholder="Введите имя"> 
		<input type="tel" name="phone"  placeholder="+7(___)___-__-__" class="required phone">
	</div>
	<div class="success">
		Форма успешно отправлена
	</div>
 	<button class="btn_submit">Отправить</button>
</form>

<script type="text/javascript">

const form = document.querySelector("form");
let required = form.querySelectorAll('.required');
let btn_submit = form.querySelector('.btn_submit');
let input = form.querySelector('.input');
let success = form.querySelector('.success');

$(".phone").mask("+7(999)999-99-99");

form.addEventListener('submit', function(event) {
    errors = true
    for (let val of required) {
        if (val.value === '') {
            val.classList.add('error');
            errors = false;
        } else
            val.classList.remove('error');
    }
    if (errors === false) {
        event.preventDefault();
    }
    if (errors === true) {
        btn_submit.classList.add('none');
        input.classList.add('none');
        success.classList.add('block');
    }
})

$('.form').on('submit', function(e) 
{
	e.preventDefault();
	var user_name = $('.name').val();
	var user_phone = $('[name=phone]').val();
	let data = new FormData(e.target);
	$.ajax(
	{
        url: "/local/ajax/feedback.php", // куда отправляем
        type: "post", // метод передачи
        data: { // что отправляем
        	// data
            "name":    user_name,
            "phone":   user_phone,
        },
    });
	console.log(user_phone);
});

</script>

