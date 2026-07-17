(function () {
	var track = document.getElementById('testimonials-track');
	var prevBtn = document.getElementById('testimonials-prev');
	var nextBtn = document.getElementById('testimonials-next');

	if (!track || !prevBtn || !nextBtn) {
		return;
	}

	function scrollStep() {
		var card = track.querySelector('.testimonial-card');
		if (!card) return 0;
		var styles = getComputedStyle(track);
		var gap = parseFloat(styles.columnGap || styles.gap || 0);
		return card.offsetWidth + gap;
	}

	prevBtn.addEventListener('click', function () {
		track.scrollBy({ left: -scrollStep(), behavior: 'smooth' });
	});

	nextBtn.addEventListener('click', function () {
		track.scrollBy({ left: scrollStep(), behavior: 'smooth' });
	});

	function updateButtonState() {
		var atStart = track.scrollLeft <= 0;
		var atEnd =
			Math.ceil(track.scrollLeft + track.clientWidth) >=
			track.scrollWidth;

		prevBtn.disabled = atStart;
		nextBtn.disabled = atEnd;
	}

	track.addEventListener('scroll', updateButtonState);
	window.addEventListener('resize', updateButtonState);
	updateButtonState();
})();
