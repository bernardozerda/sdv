function marcarTodos() {
    jQuery("#marcarTodos").click(
            function ($) {
                var marcado = $("#marcarTodos").is(":checked");

                if (!marcado)
                    $("#diasHabilitados :checkbox").attr('checked', true);
                else
                    $("#diasHabilitados :checkbox").attr('checked', false);
            }
    );
}



$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );

jQuery(function () {
    jQuery("#accordion").accordion();
});