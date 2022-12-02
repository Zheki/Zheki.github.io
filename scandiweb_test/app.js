$(document).ready(function(){

    $("#productType").change(function(){
        var productType = new String($(this).val());

        $("#inputField").load("classes/product.php",{
            productType : productType
        });
    });


    console.log("passedArray");

    jQuery.validator.addMethod("alphanumeric", function(value, element){
        return this.optional(element) || /^[\w.]+$/i.test(value);
    }, "Please enter a valid input (No special characters!)");

    jQuery.validator.addMethod("numeric", function(value, element){
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "Please enter a valid value");

    jQuery.validator.addMethod("validSKU", function(value, element){
        return this.optional(element) || $.inArray($("#sku").val(), passedArray) == -1;
    }, "SKU already exists");

        $('#product_form').validate({
            ignore: [],
            rules: {
                SKU: {
                    required: true,
                    alphanumeric: true,
                    validSKU: true
                },
                Name: {
                    required: true,
                    alphanumeric: true
                },
                Price: {
                    required: true,
                    numeric: true
                },

                'Attribute[]': {
                    required: true,
                    numeric: true
                }

            },
            sumbitHandler: function(form){
                form.submit();
            }
        
    });
});


if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}