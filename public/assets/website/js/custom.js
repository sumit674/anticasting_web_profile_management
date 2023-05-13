$(document).ready(function () {
    $(".form-disable").on("submit", function () {
        var self = $(this),
            button = self.find('input[type="submit"], button'),
            submitValue = button.data("submit-value");
        button
            .attr("disabled", "disabled")
            .val(submitValue ? submitValue : "Please wait...");
    });
});
