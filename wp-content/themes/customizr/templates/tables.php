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
                    <input title="" class="meters-amount" type="number" name="meters" value="100"  min="1" required>
                    <input type="submit" style="display: none;">
                </form>
            </td>
        </tr>
        <tr>
            <td>Количество плитки</td>
            <td>2131</td>
        </tr>
    </table>

    <table class="main-table table2">
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
            <td>1278</td>
            <td></td>
            <td>240.00</td>
            <td>306,800.00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Кронштейн большой</td>
            <td>KL-150 Б</td>
            <td>шт</td>
            <td>426</td>
            <td></td>
            <td>80.00</td>
            <td>34,088.89</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Кронштейн малый</td>
            <td>KL-150 М</td>
            <td>шт</td>
            <td>852</td>
            <td></td>
            <td>53.00</td>
            <td>45,167.78</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Терморазрыв большой</td>
            <td>SD-9.1</td>
            <td>шт</td>
            <td>426</td>
            <td></td>
            <td>27.00</td>
            <td>11,505.00</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Терморазрыв малый</td>
            <td>SD-9.2</td>
            <td>шт</td>
            <td>852</td>
            <td></td>
            <td>14.00</td>
            <td>11,931.11</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Кляммер нержавеющий рядовой</td>
            <td>SD-8.1</td>
            <td>шт</td>
            <td>2131</td>
            <td></td>
            <td>20.00</td>
            <td>42,611.11</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Шайба-пластина</td>
            <td>SD-7.4</td>
            <td>шт</td>
            <td>1704</td>
            <td></td>
            <td>7.00</td>
            <td>11,931.11</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость подконструкции системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td>464,035.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость подконструкции системы "SL-100" на 1 м2</td>
            <td>605.00</td>
        </tr>
    </table>

    <table class="main-table table2">
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
            <td>2557</td>
            <td>500</td>
            <td>3.50</td>
            <td>8,948.33</td>
        </tr>
        <tr>
            <td>9</td>
            <td>Заклепка</td>
            <td>K6 3x8</td>
            <td>шт</td>
            <td>4261</td>
            <td>500</td>
            <td>2.70</td>
            <td>11,505.00</td>
        </tr>
        <tr>
            <td>10</td>
            <td>Фасадный анкерный дюбель</td>
            <td>10*100F</td>
            <td>шт</td>
            <td>1704</td>
            <td>300</td>
            <td>18.20</td>
            <td>31,020.89</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость крепежа системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td>51,474.22</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость крепежа системы "SL-100" на 1 м2</td>
            <td>67.11</td>
        </tr>
    </table>

    <table class="main-table table2">
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
            <td>84</td>
            <td></td>
            <td></td>
            <td>0</td>
        </tr>
        <tr>
            <td>12</td>
            <td>Негорючая ткань "TEND KM-O"</td>
            <td>1.15</td>
            <td>м2</td>
            <td>882</td>
            <td></td>
            <td></td>
            <td>0</td>
        </tr>
        <tr>
            <td>13</td>
            <td>Анкера для утеплителя</td>
            <td>7</td>
            <td>шт</td>
            <td>5369</td>
            <td></td>
            <td></td>
            <td>0.00</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Керамогранит серо-бежевый соль-перец</td>
            <td>1.1</td>
            <td>м2</td>
            <td>767</td>
            <td></td>
            <td></td>
            <td>0.00</td>
        </tr>
        <tr class="bottom-line">
            <td></td>
            <td colspan="5" class="first-footer-title">Стоимость утеплителей системы "SL-100"</td>
            <td class="total">Итого:</td>
            <td>0.00</td>
        </tr>
        <tr class="bottom-line last-line">
            <td></td>
            <td colspan="6" class="first-footer-title">Стоимость утеплителей системы "SL-100" на 1 м2</td>
            <td>0.00</td>
        </tr>
    </table>

    <table class="main-table table2">
        <tr class="bottom-line">
            <td colspan="6" class="first-footer-title">Стоимость системы "SL-100"</td>
            <td></td>
            <td>Итого:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;515,509.22</td>
        </tr>
        <tr class="bottom-line last-line">
            <td colspan="6" class="first-footer-title">Стоимость системы "SL-100" на 1 м2</td>
            <td></td>
            <td>672.11</td>
        </tr>
    </table>
</div>

<?php get_footer(); ?>
