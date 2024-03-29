class windowLoad {
	constructor () {
		this.load();
	}

	load () {
		if (window.location.pathname === '/') {
			document.querySelector('#beforeLoad').style.display = 'block';
			document.body.style.overflow = 'hidden';
		}
		else if (window.location.pathname === '/pages/writer/') {
			document.querySelector('#beforeLoad').style.display = 'block';
			document.body.style.overflow = 'hidden';
		}

		window.addEventListener('load', () => {
			const heroText = document.querySelector('.fadeIn');
			heroText.style.transition = '1s ease-in';
			heroText.classList.remove('beforeLoad');

			if (window.location.pathname === '/') {
				// console.log(window.location.pathname)
				setTimeout(function () {
					document.querySelector('#beforeLoad').style.animation = 'opacityChangeAndDisplayNone 1s ease-out';
					setTimeout(function () {
						document.querySelector('#beforeLoad').style.display = 'none';
						document.body.style.overflow = '';
					}, 1000);
				}, 1000);
			}
			else if (window.location.pathname === '/') {
				// console.log(window.location.pathname)
				setTimeout(function () {
					document.querySelector('#beforeLoad').style.animation = 'opacityChangeAndDisplayNone 1s ease-out';
					setTimeout(function () {
						document.querySelector('#beforeLoad').style.display = 'none';
						document.body.style.overflow = '';
					}, 1000);
				}, 1000);
			}
		});
	}
}
export default windowLoad;
