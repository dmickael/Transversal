$(".hamburger").click(function(){$("nav").slideToggle("slow",function(){$(".hamburger").hide();$(".cross").show();$(".titre_caroussel").addClass('move');$(".titre_caroussel").removeClass('titre_caroussel');});});$(".cross").click(function(){$("nav").slideToggle("slow",function(){$(".cross").hide();$(".hamburger").show();$(".move").addClass('titre_caroussel');$(".move").removeClass('move');});});if(window.innerWidth<1000){$(".cross").hide();$("nav").hide();}
$(function(){$(window).resize(function(){$(".move").addClass('titre_caroussel');$(".move").removeClass('move');if(window.innerWidth<1000){$("nav").hide();$(".cross").hide();$(".hamburger").show();}else{$("nav").show();}});});/**
 * Created by maelb on 24/05/2017.
 */
