$(".card-collapsible").find(".card-header").click(function() {
    $(this).parent().find(".card-body").toggle('fast');
});