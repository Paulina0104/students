'use strict';
$('.transaction_amount').attr("pattern", '^(\\d+|\\d{1,3}(,\\d{3})*)(\\.\\d{2})?$');
$('.transaction_amount').on("keyup", function() {
    var currentValue = $(this).val();
    currentValue = currentValue.replace(/,/g, '');
    $(this).val(currentValue.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
});
