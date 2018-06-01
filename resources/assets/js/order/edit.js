"use strict";

require('init');

$(document).ready
(
    function()
    {
        $("FORM[name='order_edit']").validate
        (
            {
                rules:
                {
                    client_email:
                    {
                        required: true,
                        email: true
                    },
                    partner_id:
                    {
                        required: true,
                        number: true
                    },
                    status:
                    {
                        required: true
                    }
                }
            }
        );
    }
);