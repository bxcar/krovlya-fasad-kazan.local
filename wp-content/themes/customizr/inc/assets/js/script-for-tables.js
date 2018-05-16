jQuery(document).ready(function () {

    jQuery('#meters-amount').on('input', function (e) {
        jQuery('#tiles-number').text(Math.ceil(jQuery(this).val() * 2.778357).toFixed(0));

        jQuery('#amount-1').text(Math.ceil(jQuery(this).val() * 1.666232).toFixed(0));
        jQuery('#amount-1-mob').text(Math.ceil(jQuery(this).val() * 1.666232).toFixed(0));
        jQuery('#amount-2').text(Math.ceil(jQuery(this).val() * 0.555410).toFixed(0));
        jQuery('#amount-2-mob').text(Math.ceil(jQuery(this).val() * 0.555410).toFixed(0));
        jQuery('#amount-3').text(Math.ceil(jQuery(this).val() * 1.110821).toFixed(0));
        jQuery('#amount-3-mob').text(Math.ceil(jQuery(this).val() * 1.110821).toFixed(0));
        jQuery('#amount-4').text(Math.ceil(jQuery(this).val() * 0.555410).toFixed(0));
        jQuery('#amount-4-mob').text(Math.ceil(jQuery(this).val() * 0.555410).toFixed(0));
        jQuery('#amount-5').text(Math.ceil(jQuery(this).val() * 1.110821).toFixed(0));
        jQuery('#amount-5-mob').text(Math.ceil(jQuery(this).val() * 1.110821).toFixed(0));
        jQuery('#amount-6').text(Math.ceil(jQuery(this).val() * 2.778357).toFixed(0));
        jQuery('#amount-6-mob').text(Math.ceil(jQuery(this).val() * 2.778357).toFixed(0));
        jQuery('#amount-7').text(Math.ceil(jQuery(this).val() * 2.221642).toFixed(0));
        jQuery('#amount-7-mob').text(Math.ceil(jQuery(this).val() * 2.221642).toFixed(0));

        jQuery('#amount-8').text(Math.ceil(jQuery(this).val() * 3.333767).toFixed(0));
        jQuery('#amount-8-mob').text(Math.ceil(jQuery(this).val() * 3.333767).toFixed(0));
        jQuery('#amount-9').text(Math.ceil(jQuery(this).val() * 5.555410).toFixed(0));
        jQuery('#amount-9-mob').text(Math.ceil(jQuery(this).val() * 5.555410).toFixed(0));
        jQuery('#amount-10').text(Math.ceil(jQuery(this).val() * 2.221642).toFixed(0));
        jQuery('#amount-10-mob').text(Math.ceil(jQuery(this).val() * 2.221642).toFixed(0));

        jQuery('#amount-11').text(Math.ceil(jQuery(this).val() * 0.109517).toFixed(0));
        jQuery('#amount-11-mob').text(Math.ceil(jQuery(this).val() * 0.109517).toFixed(0));
        jQuery('#amount-12').text(Math.ceil(jQuery(this).val() * 1.149934).toFixed(0));
        jQuery('#amount-12-mob').text(Math.ceil(jQuery(this).val() * 1.149934).toFixed(0));
        jQuery('#amount-13').text(Math.ceil(jQuery(this).val() * 7).toFixed(0));
        jQuery('#amount-13-mob').text(Math.ceil(jQuery(this).val() * 7).toFixed(0));
        jQuery('#amount-14').text(Math.ceil(jQuery(this).val() * 1).toFixed(0));
        jQuery('#amount-14-mob').text(Math.ceil(jQuery(this).val() * 1).toFixed(0));



        var sum = 0;
        for (var i = 1; i <= 14; i++) {
            sum = (jQuery('#amount-' + i).text() * jQuery('#price-' + i).text()).toFixed(2);
            jQuery('#sum-' + i).text(sum.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        }
        var sum_mob = 0;
        for (i = 1; i <= 14; i++) {
            sum_mob = (jQuery('#amount-' + i + '-mob').text() * jQuery('#price-' + i + '-mob').text()).toFixed(2);
            jQuery('#sum-' + i + '-mob').text(sum_mob.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        }



        var total_sum_1 = 0;
        for (i = 1; i <= 7; i++) {
            total_sum_1 += parseFloat(jQuery('#sum-' + i).text().replace(/,/g, ""));
        }
        jQuery('#total-sum-1').text(total_sum_1.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_1_mob = 0;
        for (i = 1; i <= 7; i++) {
            total_sum_1_mob += parseFloat(jQuery('#sum-' + i + '-mob').text().replace(/,/g, ""));
        }
        jQuery('#total-sum-1-mob').text(total_sum_1_mob.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));


        var total_sum_2 = 0;
        for (i = 8; i <= 10; i++) {
            total_sum_2 += parseFloat(jQuery('#sum-' + i).text().replace(/,/g, ""));
        }
        jQuery('#total-sum-2').text(total_sum_2.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_2_mob = 0;
        for (i = 8; i <= 10; i++) {
            total_sum_2_mob += parseFloat(jQuery('#sum-' + i + '-mob').text().replace(/,/g, ""));
        }
        jQuery('#total-sum-2-mob').text(total_sum_2_mob.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));



        var total_sum_3 = 0;
        for (i = 11; i <= 14; i++) {
            total_sum_3 += parseFloat(jQuery('#sum-' + i).text().replace(/,/g, ""));
        }
        jQuery('#total-sum-3').text(total_sum_3.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_3_mob = 0;
        for (i = 11; i <= 14; i++) {
            total_sum_3_mob += parseFloat(jQuery('#sum-' + i + '-mob').text().replace(/,/g, ""));
        }
        jQuery('#total-sum-3-mob').text(total_sum_3_mob.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));


        var total_sum_4 = total_sum_1+total_sum_2+total_sum_3;
        jQuery('#total-sum-4').text(total_sum_4.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_4_mob = total_sum_1_mob+total_sum_2_mob+total_sum_3_mob;
        jQuery('#total-sum-4-mob').text(total_sum_4_mob.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));




        var total_sum_1_m = total_sum_1/jQuery(this).val();
        jQuery('#total-sum-1-m').text(total_sum_1_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        jQuery('#total-sum-1-m-mob').text(total_sum_1_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_2_m = total_sum_2/jQuery(this).val();
        jQuery('#total-sum-2-m').text(total_sum_2_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        jQuery('#total-sum-2-m-mob').text(total_sum_2_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_3_m = total_sum_3/jQuery(this).val();
        jQuery('#total-sum-3-m').text(total_sum_3_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        jQuery('#total-sum-3-m-mob').text(total_sum_3_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));

        var total_sum_4_m = total_sum_4/jQuery(this).val();
        jQuery('#total-sum-4-m').text(total_sum_4_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
        jQuery('#total-sum-4-m-mob').text(total_sum_4_m.toFixed(2).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1,'));
    });

    jQuery('#meters-amount').trigger('input');

});