<?php
/**
 * Template Name: Tables
 */
get_header(); ?>
<h2 class="tables-title"><?php the_title(); ?></h2>
<span class="tables-subtitle">Внимание! Расчет сделан на типовой участок фасада<br>и не учитывает архитектурных особенностей здания</span>
<div class="table-container">
    <table class="main-table">
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
                    <input class="meters-amount" type="number" name="meters"  min="1" required>
                    <input type="submit" style="display: none;">
                </form>
            </td>
        </tr>
        <tr>
            <td>Количество плитки</td>
            <td>2131</td>
        </tr>
    </table>
</div>

<?php get_footer(); ?>
