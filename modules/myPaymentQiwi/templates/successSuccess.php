<?php
/**
 * Платеж произведен
 */
?>

<h1>Оплата через терминалы QIWI</h1>

<p>Счет в системе QIWI успешно сформирован.</p>

<br />

<h2>Как оплатить?</h2>

<br />

<p>1. Подходите к любому терминалу QIWI, нажимаете среднюю кнопку "QIWI Кошелек" и вводите номер Вашего мобильного телефона,
указанного при бронировании.</p>
<p>2. Далее нажимаете кнопку "Счета к Оплате" (она будет мигать).</p>
<p>3. Оплачиваете счет наличными либо другим доступным способом, сдача переводится на Ваш мобильный телефон или любой другой сервис, доступный в терминале QIWI.</p>

<br />

<p><?php echo link_to('Подробная инструкция', 'page', array('url' => 'qiwi')) ?></p>

<br />

<p><?php echo link_to('Вернуться в личный кабинет', 'cabinet') ?></p>