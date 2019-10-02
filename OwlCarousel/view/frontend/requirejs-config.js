var config = {
	mixins: {
		"Magento_Ui/js/modal/modal": {
			"Koian_OwlCarousel/js/modal-widget-mixin": true
		}
	},
	paths: {
		'owl1': 'Koian_OwlCarousel/js/owl.carousel.min',
		'owl2': 'Koian_OwlCarousel/js/owl.carousel'
	},
	shim: {
		'owl1': ["jquery"],
		'owl2': ["jquery"]
	}
	
};