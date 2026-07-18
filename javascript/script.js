/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
(function () {
	var toggle = document.getElementById('menu-toggle');
	var menu = document.getElementById('primary-menu');
	var iconOpen = document.getElementById('icon-open');
	var iconClose = document.getElementById('icon-close');

	if (!toggle || !menu) {
		return;
	}

	toggle.addEventListener('click', function () {
		var isOpen = menu.classList.contains('flex');

		menu.classList.toggle('hidden');
		menu.classList.toggle('flex');
		toggle.setAttribute('aria-expanded', String(!isOpen));

		if (iconOpen && iconClose) {
			iconOpen.classList.toggle('hidden');
			iconClose.classList.toggle('hidden');
		}
	});
})();
