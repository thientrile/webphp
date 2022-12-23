// change the color when the menu sticky
if (document.getElementById("nav-menu")) {
	let navMenu = document.getElementById("nav-menu");
	// let animate = document.querySelectorAll(".reveal");
	window.onscroll = function () {
		if (window.pageYOffset > 0) {
			navMenu.classList.add("navbar-white");
			navMenu.classList.add("bg-white");
			navMenu.classList.add("shadow");
			navMenu.classList.remove("navbar-dark");
		} else {
			navMenu.classList.remove("navbar-white");
			navMenu.classList.remove("bg-white");
			navMenu.classList.remove("shadow");
			navMenu.classList.add("navbar-dark");
		}

		// for (let i = 0; i < animate.length; i++) {
		// 	let windowHeight = window.innerHeight;
		// 	let elementTop = animate[i].getBoundingClientRect().top;
		// 	let elementVisible = 150;
		// 	if (elementTop < windowHeight - elementVisible) {
		// 		// animate[i].className.replace("reveal", "");
		// 		console.log(animate[i].className.search("reveal"));
		// 	} else {
		// 		// animate[i].classList.add("reveal");
		// 		console.log(false);
		// 	}
		// }
	};
}

//

// follow number
if (document.querySelectorAll("#body .follow-point .point")) {
	let follows = document.querySelectorAll("#body .follow-point .point");

	follows.forEach((follows) => {
		let startValue = parseFloat(follows.getAttribute("data-duration"));
		let endValue = parseFloat(follows.getAttribute("data-val"));
		let setTime = endValue / startValue / 100;
		let counter = setInterval(function () {
			if (endValue >= 1000) {
				startValue += 10;
			} else {
				startValue += 1;
			}

			follows.textContent = startValue.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			if (startValue == endValue) {
				clearInterval(counter);
			}
		}, setTime);
	});
}

// onte-stop
if (document.querySelectorAll(".typewrite")) {
	let TxtType = function (el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 2000;
		this.txt = "";
		this.tick();
		this.isDeleting = false;
	};

	TxtType.prototype.tick = function () {
		let i = this.loopNum % this.toRotate.length;
		let fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap" >' + this.txt + "</span>";

		let that = this;
		let delta = 200 - Math.random() * 100;

		if (this.isDeleting) {
			delta /= 2;
		}

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		} else if (this.isDeleting && this.txt === "") {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout(function () {
			that.tick();
		}, delta);
	};

	window.onload = function () {
		let elements = document.getElementsByClassName("typewrite");
		for (let i = 0; i < elements.length; i++) {
			let toRotate = elements[i].getAttribute("data-type");
			let period = elements[i].getAttribute("data-period");
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
		// INJECT CSS
		let css = document.createElement("style");
		css.type = "text/css";
		css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #000000;}";
		document.body.appendChild(css);
	};
}

// var user = [{ name: "thientrile", email: "thientrile@gmail.com", password: "04032003" }];
var user = [];
if (document.getElementById("user-login")) {
	document.getElementById("user-login").onclick = function () {
		window.location = "login.html";
	};
}
if (document.querySelector("body > div > div > div > div > div > div > div > div.card-front > div > div > button")) {
	document.querySelector(
		"body > div > div > div > div > div > div > div > div.card-front > div > div > button"
	).onclick = function () {
		console.log(true);
		let email = document.querySelector(
			"body > div > div > div > div > div > div > div > div.card-front > div > div > div:nth-child(2) > input"
		).value;
		let password = document.querySelector(
			"body > div > div > div > div > div > div > div > div.card-front > div > div > div.form-group.mt-2 > input"
		).value;
		if (email == "admin@admin.com" && password == "admin") {
			window.location = "user.html";
		}
		console.log(email);
		console.log(password);
	};
}

if (document.getElementById("logout")) {
	document.getElementById("logout").onclick = function () {
		window.location = "login.html";
	};
}


