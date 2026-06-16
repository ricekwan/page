(function ($) {
    "use strict";

    // Shared install handler used by both the upsell page and the admin notice button
    function ai_enterprise_run_install(button) {
        button.prop("disabled", true);
        button.html('<span class="dashicons dashicons-update ai-enterprise-spin"></span> Installing&hellip;').addClass("processing-spinner");

        var activationData = {
            action: "ai_enterprise_install_and_activate_plugins",
            nonce: ai_enterprise_localize.nonce,
        };

        $.post(ai_enterprise_localize.ajax_url, activationData, function (response) {
            if (response.success) {
                button.html('<span class="dashicons dashicons-yes"></span> Done!');
                window.location.reload();
            } else {
                button.prop("disabled", false).removeClass("processing-spinner");
                var msg = (response.data && response.data.message) ? response.data.message : "Installation failed. Please try again.";
                button.text(msg);
            }
        }).fail(function () {
            button.prop("disabled", false).removeClass("processing-spinner");
            button.text("Installation failed. Please try again.");
        });
    }

    // Handle install and activate plugins button click (upsell page)
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();
        ai_enterprise_run_install($(this));
    });

    // Handle install button inside the admin notice
    $(document).on("click", ".ai-enterprise-notice-install-btn", function (e) {
        e.preventDefault();
        ai_enterprise_run_install($(this));
    });

    // Handle notice dismiss button click
    $(document).on('click', '.notice-info .notice-dismiss', function () {
        var type = $(this).closest('.notice-info').data('notice');

        $.ajax({
            type: 'POST',
            url: ai_enterprise_localize.ajax_url,
            data: {
                action: 'ai_enterprise_dismissed_notice_handler',
                type: type,
                wpnonce: ai_enterprise_localize.dismiss_nonce
            },
            success: function (response) {
                if (response.success) {
                    console.log("Notice dismissed successfully");
                } else {
                    console.log("Failed to dismiss notice");
                }
            }
        });
    });

})(jQuery);