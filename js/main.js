$(document).ready(function(o){o(".smoothscroll").on("click",function(n){n.preventDefault();var t=this.hash,i=o(t);o("html, body").stop().animate({scrollTop:i.offset().top},800,"swing",function(){window.location.hash=t})})}),$(window).scroll(function(){var o=$(window).scrollTop();$("section").each(function(n){$(this).position().top<=o&&($("nav ul li a.active").removeClass("active"),$("nav ul li a").eq(n).addClass("active"))})}).scroll();