<?php
/**
 * Template Name: Tables
 */
get_header(); ?>
<h2 class="tables-title"><?php the_title(); ?></h2>
<span class="tables-subtitle">Внимание! Расчет сделан на типовой участок фасада<br>и не учитывает архитектурных особенностей здания</span>
<div class="table-container">
    <table class="main-table table1">
        <tr>
            <th colspan="2">Расчет стоимости комплектующих</th>
        </tr>
        <tr>
            <td>Ширина плитки в м</td>
            <td>0.6</td>
        </tr>
        <tr>
            <td>Высота плитки в м</td>
            <td>0.6</td>
        </tr>
        <tr>
            <td>Количество м2</td>
            <td>
                <form class="meters-amount-form" action="/" method="post">
                    <input id="meters-amount" title="" class="meters-amount" type="number" name="meters" value="767"  min="1" required>
                    <input type="submit" style="display: none;">
                </form>
            </td>
        </tr>
        <tr>
            <td>Количество плитки</td>
            <td id="tiles-number">2131</td>
        </tr>
    </table>

    <table class="main-table table2 table2-desktop">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="subth">№<br>п.п.</th>
            <th class="subth">Наименование</th>
            <th class="subth">Артикул</th>
            <th class="subth">Ед.<br>изм.</th>
            <th class="subth">Общее<br>кол-во</th>
            <th class="subth">Кол-во<br>в упак.</th>
            <th class="subth">Цена с<br>НДС за ед.<br>(руб)</th>
            <th class="subth">Сумма с<br>НДС (руб)</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Профиль Т</td>
            <td>SP-1.1</td>
            <td>м</td>
            <td id="amount-1">1278</td>
            <td></td>
            <td id="price-1"><?= get_field('table_prices')[0]['price']; ?></td>
            <td id="sum-1">306,800.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Кронштейн большой</td>
            <td>KL-150 Б</td>
            <td>шт</td>
            <td id="amount-2">426</td>
            <td></td>
            <td id="price-2"><?= get_field('table_prices')[1]['price']; ?></td>
            <td id="sum-2">34,088.89</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Кронштейн малый</td>
            <td>KL-150 М</td>
            <td>шт</td>
            <td id="amount-3">852</td>
            <td></td>
            <td id="price-3"><?= get_field('table_prices')[2]['price']; ?></td>
            <td id="sum-3">45,167.78</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Терморазрыв большой</td>
            <td>SD-9.1</td>
            <td>шт</td>
            <td id="amount-4">426</td>
            <td></td>
            <td id="price-4"><?= get_field('table_prices')[3]['price']; ?></td>
            <td id="sum-4">11,505.00</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Терморазрыв малый</td>
            <td>SD-9.2</td>
            <td>шт</td>
            <td id="amount-5">852</td>
            <td></td>
            <td id="price-5"><?= get_field('table_prices')[4]['price']; ?></td>
            <td id="sum-5">11,931.11</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Кляммер нержавеющий рядовой</td>
            <td>SD-8.1</td>
            <td>шт</td>
            <td id="amount-6">2131</td>
            <td></td>
            <td id="price-6"><?= get_field('table_prices')[5]['price']; ?></td>
            <td id="sum-6">42,611.11</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Шайба-пластина</td>
            <td>SD-7.4</td>
            <td>шт</td>
            <td id="amount-7">1704</td>
            <td></td>
            <td id="price-7"><?= get_field('table_prices')[6]['price']; ?></td>
            <td id="sum-7">11,931.11</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость подконструкции системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td id="total-sum-1">464,035.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость подконструкции системы "SL-100" на 1 м2</td>
            <td id="total-sum-1-m">605.00</td>
        </tr>
    </table>


<!--start first table2 mobile-->
    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Профиль Т</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">SP-1.1</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">м</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-1-mob">1278</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-1-mob"><?= get_field('table_prices')[0]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-1-mob">306,800.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Кронштейн большой</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">KL-150 Б</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-2-mob">426</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-2-mob"><?= get_field('table_prices')[1]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-2-mob">34,080.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Кронштейн малый</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">KL-150 М</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-3-mob">852</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-3-mob"><?= get_field('table_prices')[2]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-3-mob">45,156.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Терморазрыв большой</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">SD-9.1</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-4-mob">426</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-4-mob"><?= get_field('table_prices')[3]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-4-mob">11,502.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Терморазрыв малый</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">SD-9.2</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-5-mob">852</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-5-mob"><?= get_field('table_prices')[4]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-5-mob">11,928.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Кляммер нержавеющий рядовой</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">SD-8.1</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-6-mob">2131</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-6-mob"><?= get_field('table_prices')[5]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-6-mob">42,620.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Подконструкция</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Шайба-пластина</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">SD-7.4</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-7-mob">1704</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-7-mob"><?= get_field('table_prices')[6]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-7-mob">11,928.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr class="bottom-line">
            <td class="first-footer-title">Стоимость подконструкции системы "SL-100"</td>
            <td id="total-sum-1-mob">464,035.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td class="first-footer-title">Стоимость подконструкции системы "SL-100" на 1 м2</td>
            <td id="total-sum-1-m-mob">605.00</td>
        </tr>
    </table>
    <!--end first table2 mobile-->



    <table class="main-table table2 table2-desktop">
        <tr>
            <th class="mainth" colspan="8">Крепеж</th>
        </tr>
        <tr>
            <th class="subth">№<br>п.п.</th>
            <th class="subth">Наименование</th>
            <th class="subth">Артикул</th>
            <th class="subth">Ед.<br>изм.</th>
            <th class="subth">Общее<br>кол-во</th>
            <th class="subth">Кол-во<br>в упак.</th>
            <th class="subth">Цена с<br>НДС за ед.<br>(руб)</th>
            <th class="subth">Сумма с<br>НДС (руб)</th>
        </tr>
        <tr>
            <td>8</td>
            <td>Заклепка</td>
            <td>K14 5x12</td>
            <td>шт</td>
            <td id="amount-8">2557</td>
            <td>500</td>
            <td id="price-8"><?= get_field('table_prices')[7]['price']; ?></td>
            <td id="sum-8">8,948.33</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Заклепка</td>
            <td>K6 3x8</td>
            <td>шт</td>
            <td id="amount-9">4261</td>
            <td>500</td>
            <td id="price-9"><?= get_field('table_prices')[8]['price']; ?></td>
            <td id="sum-9">11,505.00</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Фасадный анкерный дюбель</td>
            <td>10*100F</td>
            <td>шт</td>
            <td id="amount-10">1704</td>
            <td>300</td>
            <td id="price-10"><?= get_field('table_prices')[9]['price']; ?></td>
            <td id="sum-10">31,020.89</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость крепежа системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td id="total-sum-2">51,474.22</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость крепежа системы "SL-100" на 1 м2</td>
            <td id="total-sum-2-m">67.11</td>
        </tr>
    </table>

    <!--start second table2 mobile-->
    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Крепеж</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Заклепка</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">K14 5x12</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-8-mob">2557</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td">500</td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-8-mob"><?= get_field('table_prices')[7]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-8-mob">8,949.50</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Крепеж</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Заклепка</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">K6 3x8</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-9-mob">4261</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td">500</td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-9-mob"><?= get_field('table_prices')[8]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-9-mob">11,504.70</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Крепеж</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Фасадный анкерный дюбель</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">10*100F</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-10-mob">1704</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td">300</td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-10-mob"><?= get_field('table_prices')[9]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-10-mob">31,012.80</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr class="bottom-line">
            <td class="first-footer-title">Стоимость крепежа системы "SL-100"</td>
            <td id="total-sum-2-mob">51,467.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td class="first-footer-title">Стоимость крепежа системы "SL-100" на 1 м2</td>
            <td id="total-sum-2-m-mob">67.10</td>
        </tr>
    </table>
    <!--end second table2 mobile-->

    <table class="main-table table2 table2-desktop">
        <tr>
            <th class="mainth" colspan="8">Утеплитель. Анкер. Керамогранит.</th>
        </tr>
        <tr>
            <th class="subth">№<br>п.п.</th>
            <th class="subth">Наименование</th>
            <th class="subth">Артикул</th>
            <th class="subth">Ед.<br>изм.</th>
            <th class="subth">Общее<br>кол-во</th>
            <th class="subth">Кол-во<br>в упак.</th>
            <th class="subth">Цена с<br>НДС за ед.<br>(руб)</th>
            <th class="subth">Сумма с<br>НДС (руб)</th>
        </tr>
        <tr>
            <td>11</td>
            <td>Утеплитель</td>
            <td>0.1</td>
            <td>м3</td>
            <td id="amount-11">84</td>
            <td></td>
            <td id="price-11"><?= get_field('table_prices')[10]['price']; ?></td>
            <td id="sum-11">0</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Негорючая ткань "TEND KM-O"</td>
            <td>1.15</td>
            <td>м2</td>
            <td id="amount-12">882</td>
            <td></td>
            <td id="price-12"><?= get_field('table_prices')[11]['price']; ?></td>
            <td id="sum-12">0</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Анкера для утеплителя</td>
            <td>7</td>
            <td>шт</td>
            <td id="amount-13">5369</td>
            <td></td>
            <td id="price-13"><?= get_field('table_prices')[12]['price']; ?></td>
            <td id="sum-13">0.00</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Керамогранит серо-бежевый соль-перец</td>
            <td>1.1</td>
            <td>м2</td>
            <td id="amount-14">767</td>
            <td></td>
            <td id="price-14"><?= get_field('table_prices')[13]['price']; ?></td>
            <td id="sum-14">0.00</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость утеплителей системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td id="total-sum-3">0.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость утеплителей системы "SL-100" на 1 м2</td>
            <td id="total-sum-3-m">0.00</td>
        </tr>
    </table>

    <!--start third table2 mobile-->
    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Утеплитель. Анкер. Керамогранит.</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Утеплитель</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">0.1</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">м3</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-11-mob">84</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-11-mob"><?= get_field('table_prices')[10]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-11-mob">8,400.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Утеплитель. Анкер. Керамогранит.</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Негорючая ткань "TEND KM-O"</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">1.15</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">м2</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-12-mob">882</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-12-mob"><?= get_field('table_prices')[11]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-12-mob">88,200.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Утеплитель. Анкер. Керамогранит.</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Анкера для утеплителя</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">7</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">шт</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-13-mob">5369</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-13-mob"><?= get_field('table_prices')[12]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-13-mob">536,900.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr>
            <th class="mainth" colspan="8">Утеплитель. Анкер. Керамогранит.</th>
        </tr>
        <tr>
            <th class="mob-th">Наименование</th>
            <td class="mob-td">Керамогранит серо-бежевый соль-перец</td>
        </tr>
        <tr>
            <th class="mob-th">Артикул</th>
            <td class="mob-td">1.1</td>
        </tr>
        <tr>
            <th class="mob-th">Ед. изм.</th>
            <td class="mob-td">м2</td>
        </tr>
        <tr>
            <th class="mob-th">Общее кол-во</th>
            <td class="mob-td" id="amount-14-mob">767</td>
        </tr>
        <tr>
            <th class="mob-th">Кол-во в упак.</th>
            <td class="mob-td"></td>
        </tr>
        <tr>
            <th class="mob-th">Цена с НДС за ед. (руб)</th>
            <td class="mob-td" id="price-14-mob"><?= get_field('table_prices')[13]['price']; ?></td>
        </tr>
        <tr>
            <th class="mob-th">Сумма с НДС (руб)</th>
            <td class="mob-td" id="sum-14-mob">76,700.00</td>
        </tr>
    </table>

    <table class="main-table table2 table2-mobile">
        <tr class="bottom-line">
            <td class="first-footer-title">Стоимость утеплителей системы "SL-100"</td>
            <td id="total-sum-3-mob">710,200.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td class="first-footer-title">Стоимость утеплителей системы "SL-100" на 1 м2</td>
            <td id="total-sum-3-m-mob">925.95</td>
        </tr>
    </table>
    <!--end third table2 mobile-->

    <table class="main-table table2 table2-desktop">
        <tr class="bottom-line">
            <td colspan="6" class="first-footer-title">Стоимость системы "SL-100"</td>
            <td></td>
            <td>Итого:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span  id="total-sum-4">515,509.22</span></td>
        </tr>
        <tr class="bottom-line last-line">
            <td colspan="6" class="first-footer-title">Стоимость системы "SL-100" на 1 м2</td>
            <td></td>
            <td id="total-sum-4-m">672.11</td>
        </tr>
    </table>

    <!--start fourth table2 mobile-->
    <table class="main-table table2 table2-mobile">
        <tr class="bottom-line">
            <td class="first-footer-title">Стоимость системы "SL-100"</td>
            <td id="total-sum-4-mob">1,225,601.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td class="first-footer-title">Стоимость системы "SL-100" на 1 м2</td>
            <td id="total-sum-4-m-mob">1,597.92</td>
        </tr>
    </table>
    <!--end fourth table2 mobile-->
</div>
<script src="<?= get_template_directory_uri(); ?>/inc/assets/js/script-for-tables.js"></script>
<?php get_footer(); ?>
