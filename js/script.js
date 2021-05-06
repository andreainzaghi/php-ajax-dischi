var app = new Vue({
	el: '#app',
	data: {
		albums: [],
		genre: ''
	},
	methods: {
	
	},
	mounted: function() {
		axios.get('http://localhost/php-ajax-dischi/api.php')
			.then( (response) => {
				this.albums = response.data.response;
		});
	}
});
