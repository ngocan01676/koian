var config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
                'Koian_Checkout/js/view/shipping-payment-mixin': true
            },
            'Magento_Checkout/js/view/payment': {
                'Koian_Checkout/js/view/shipping-payment-mixin': true
            }
        }
    }
}