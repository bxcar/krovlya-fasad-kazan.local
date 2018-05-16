jQuery( document ).ready(function() {

    jQuery('#meters-amount').on('input',function(e){
        jQuery('#tiles-number').text(Math.ceil(jQuery(this).val()*2.778357).toFixed(0));

        jQuery('#amount-1').text(Math.ceil(jQuery(this).val()*1.666232).toFixed(0));
        jQuery('#amount-2').text(Math.ceil(jQuery(this).val()*0.555410).toFixed(0));
        jQuery('#amount-3').text(Math.ceil(jQuery(this).val()*1.110821).toFixed(0));
        jQuery('#amount-4').text(Math.ceil(jQuery(this).val()*0.555410).toFixed(0));
        jQuery('#amount-5').text(Math.ceil(jQuery(this).val()*1.110821).toFixed(0));
        jQuery('#amount-6').text(Math.ceil(jQuery(this).val()*2.778357).toFixed(0));
        jQuery('#amount-7').text(Math.ceil(jQuery(this).val()*2.221642).toFixed(0));

        jQuery('#amount-8').text(Math.ceil(jQuery(this).val()*3.333767).toFixed(0));
        jQuery('#amount-9').text(Math.ceil(jQuery(this).val()*5.555410).toFixed(0));
        jQuery('#amount-10').text(Math.ceil(jQuery(this).val()*2.221642).toFixed(0));

        jQuery('#amount-11').text(Math.ceil(jQuery(this).val()*0.109517).toFixed(0));
        jQuery('#amount-12').text(Math.ceil(jQuery(this).val()*1.149934).toFixed(0));
        jQuery('#amount-13').text(Math.ceil(jQuery(this).val()*7).toFixed(0));
        jQuery('#amount-14').text(Math.ceil(jQuery(this).val()*1).toFixed(0));

    });












});