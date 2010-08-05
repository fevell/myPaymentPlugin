<?php
/**
 * Данные для оплаты через Migom
 *
 * @param Order $order
 */
?>

<h1>Денежный перевод Migom&reg;<h1>

<h2>Информация о платеже</h2>

<p>Счет №: <strong>#<?php echo $invoice->getId() ?></strong></p>
<p>Сумма: <strong><?php echo $invoice->getAmount() ?> грн.</strong></p>

<br />

<h2>Как отправить денежный перевод MIGOM&reg;?</h2>
<p>Достаточно сделать 5 легких шагов:</p>
<p>Шаг 1. Обратитесь в любое отделение MIGOM&reg; в Вашем городе, данные отд. есть практический во всех банках страны;</p>
<p>Шаг 2. Предъявите оператору паспорт</p>
<p>Шаг 3. Заполните бланк "Заявление на перевод" и внесите в кассу деньги. В пунктах MIGOM существует безбланковая технология, которая значительно упрощает отправку перевода - отправителю необходимо лишь указать ФИО получателя и город получения перевода;</p>
<p>Шаг 4. Получите у оператора контрольный номер перевода (КНП) из 9 цифр, а также список пунктов MIGOM в городе получения перевода (по желанию);</p>
<p>Шаг 5. Любым доступным Вам способом известите получателя о переводе и сообщите ему КНП, а также точную сумму перевода, ФИО отправителя и список пунктов MIGOM в городе получателя</p>

<br />

<h3>Просим сразу после осуществления платежа, сообщить нам о том, что перечислили деньги.</h3>

<br />

<h2><?php echo link_to('Распечатать реквизиты', 'payment_migom_show', $invoice, array(
        'target' => '_blank',
    )) ?></h2>

<br />

<p><?php echo link_to('Выбрать другой способ', 'myPayment', $invoice) ?></p>