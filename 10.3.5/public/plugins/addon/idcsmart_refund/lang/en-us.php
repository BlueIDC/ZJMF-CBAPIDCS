<?php

return [
    'success_message' => 'Request successful',
    'fail_message' => 'Request failed',
    'param_error' => 'Parameter error',
    'delete_success' => 'Successfully deleted',
    'delete_fail' => 'Delete failed',
    'cannot_repeat_opreate' => 'Non repeatable operation',
    'client_is_not_exist' => 'The customer does not exist',
    'id_error' => 'ID error',
    'refund_suspend' => 'Deactivate',
    'refund_pending' => 'To be reviewed',
    'refund_suspending' => 'To be suspended',
    'refund_suspend_1' => 'Deactivating',
    'refund_suspended' => 'Disabled',
    'refund_refund' => 'Refunded',
    'refund_reject' => 'Rejected',
    'refund_cancelled' => 'Canceled',
    'refund_cancelled_button' => 'Cancel deactivation',
    'refund_reject_reason' => 'Reason for rejection',
    'refund_product_id_require' => 'Please select product ID',
    'refund_product_id_integer' => 'The product ID is an integer',
    'refund_type_require' => 'Please select a refund type',
    'refund_type_in' => 'The refund type value is Artistic or Auto',
    'refund_require_in' => 'The refund request value is First or Same',
    'refund_range_control_require' => 'Purchase days control is required',
    'refund_range_control_in' => 'The control value for purchase days is 0 or 1',
    'refund_range_require' => 'Purchase days are required',
    'refund_range_integer' => 'Purchase days are integers',
    'refund_range_egt' => 'The number of purchase days is an integer greater than or equal to 0',
    'refund_rule_require' => 'Please select a refund rule',
    'refund_rule_in' => 'The refund rule values are Day, Month, or Ratio',
    'refund_ratio_value_float' => 'The proportion is a floating point number',
    'refund_ratio_value_egt' => 'The ratio is greater than or equal to 0',
    'refund_ratio_value_elt' => 'The ratio is less than or equal to 100',
    'refund_product_is_not_exist' => 'The product does not exist',
    'refund_rule_only_day_or_month' => 'The refund rule value is only Day or Month',
    'refund_rule_only_ratio' => 'The refund rule value is only Ratio',
    'refund_ratio_require' => 'Proportion is required',
    'refund_refund_product_is_not_exist' => 'Refund item does not exist',
    'refund_refund_product_is_exist' => 'The product has been added to the refund product and cannot be added again',
    'refund_reason_content_require' => 'Please fill in the reason for discontinuation',
    'refund_reason_content_max' => 'The content length should not exceed 500 characters',
    'refund_refund_reason_is_not_exist' => 'The reason for deactivation does not exist',
    'refund_reason_custom_require' => 'Deactivation reason customization is required to enable',
    'refund_reason_custom_in' => 'Disable Reason Customization: Whether to enable values of 0 or 1',
    'refund_host_is_not_exist' => 'The product does not exist',
    'refund_host_cannot_suspend' => 'The product cannot be deactivated',
    'refund_suspend_reason_max' => 'The reason for product discontinuation should not exceed 500 characters',
    'refund_suspend_reason_array' => 'The reason for product discontinuation is an array',
    'refund_suspend_reason_is_not_exist' => 'The reason for product discontinuation does not exist',
    'refund_suspend_reason_require' => 'Please select the reason for product discontinuation',
    'refund_refund_is_not_exist' => 'Deactivation request does not exist',
    'refund_refund_only_pending' => 'Deactivation application can only be operated in the pending approval status',
    'refund_reject_reason_require' => 'Please fill in the reason for rejection',
    'refund_reject_reason_max' => 'The reason for rejection should not exceed 2000 characters',
    'refund_refund_only_pending_or_suspending' => 'Deactivation application is only pending approval or can be operated upon',
    'refund_refund_type_in' => 'Deactivation time is Expire or Immediate',
    'refund_product_pay_type_free' => 'Free products cannot be added as refund products',
    'refund_product_refunded' => 'The product has been applied for deactivation and cannot be applied for again',
    'refund_to_client_credit' => 'Refund to user balance',
    
    # 日志
    'refund_create_refund_product' => '{admin} Add a new refundable product: {product}',
    'refund_update_refund_product' => '{admin} Modify refundable product: {product}',
    'refund_delete_refund_product' => '{admin} Delete refundable product: {product}',
    'refund_create_refund_reason' => '{admin} Add a refund reason: {reason}',
    'refund_update_refund_reason' => '{admin} Modify the refund reason: {reason}',
    'refund_delete_refund_reason' => '{admin} Delete refund reason: {reason}',
    'refund_stop_refund_reason_custom' => '{admin} Close user defined refund reason',
    'refund_start_refund_reason_custom' => '{admin} Enable user defined refund reason',
    'refund_pending_refund_product' => '{admin} returns user: {currency_prefix} {amount} {currency_suffix} through user: {client} deactivation request',
    'refund_reject_refund_product' => '{admin} rejected user: {client} request for deactivation, reason for rejection: {reason}',
    'refund_cancel_refund_product' => '{admin} Cancel user: {client} deactivation request',
    'refund_refund_host' => '{client} Deactivated product: {host}, refund amount: {currency_prefix} {amount} {currency_suffix}',

    # 导航
    'nav_plugin_addon_idcsmart_refund' => 'Refund',
    'nav_plugin_addon_refund' => 'Refund',
    'nav_plugin_addon_refund_list' => 'Deactivate list',
    'nav_plugin_addon_refund_product_list' => 'Product management',

    'client_refund_success_send_mail' => 'Product refund successful, send mail',
    'client_refund_success_send_sms' => 'Product refund successful, send SMS',
    'admin_refund_reject_send_mail' => 'product refund rejected, send mail',
    'admin_refund_reject_send_sms' => 'Product refund rejected, send SMS',
    'client_refund_cancel_send_mail' => 'product cancellation request, send mail',
    'client_refund_cancel_send_sms' => 'product cancellation request, send SMS',
    'client_create_refund_send_mail' => 'product refund application, send mail',
    'client_create_refund_send_sms' => 'product refund application, send SMS',

];