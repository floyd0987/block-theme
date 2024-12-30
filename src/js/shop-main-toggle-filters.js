document.addEventListener('DOMContentLoaded', function() {
	const toggleButton = document.querySelector('.shop-main-toggle-filters');
	const filters = document.querySelector('.shop-main-filters');

	toggleButton.addEventListener('click', function() {
		if (filters.style.display === 'none' || filters.style.display === '') {
			filters.style.display = 'block';
			filters.style.opacity = 0;
			let opacity = 0;
			const fadeIn = setInterval(function() {
				if (opacity >= 1) {
					clearInterval(fadeIn);
				}
				filters.style.opacity = opacity;
				opacity += 0.1;
			}, 30);
		} else {
			let opacity = 1;
			const fadeOut = setInterval(function() {
				if (opacity <= 0) {
					clearInterval(fadeOut);
					filters.style.display = 'none';
				}
				filters.style.opacity = opacity;
				opacity -= 0.1;
			}, 30);
		}
	});
});
