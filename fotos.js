new Vue({
	el: "image-slider",
	data() {
		return {
			images: [

        "http://camaradelpacifico.org/tl_files/Casos%20Exito/RENSER%20COLOMBIA/RENSER%20BANER.jpg",
        "http://s7d9.scene7.com/is/image/minesafetyappliances/SLAR-hero?scl=1",
				"https://raw.githubusercontent.com/Ing-Anyeliz/Web1/master/maxresdefault.jpg",
			],
			currentNumber: 0,
			timer: null
			}
		},
		mounted() {
			this.startRotation();
		},
		methods: {
			startRotation() {
				this.timer = setInterval(() => {
					this.next();
				}, 3000);
			},
			stopRotation() {
				clearTimeout(this.timer);
				this.timer = null;
			},
			next() {
				this.currentNumber += 1;
			},
        prev() {
				this.currentNumber -= 1;
        }
		}
});
