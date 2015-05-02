

ie 8 menu compatibility code:
document.createElement("nav")
window.onload = function(){
	var mobilemenunav = document.getElementById("msidemenu")
	var mobilemaintoggler = document.getElementById("maintoggler")
	var mobilenavtoggler = document.getElementById("navtoggler")
	mobilemaintoggler.onclick = function(){
		mobilemenunav.style.left = 0
	}
	mobilenavtoggler.onclick = function(){
		mobilemenunav.style.left = '-100%'
	}
}