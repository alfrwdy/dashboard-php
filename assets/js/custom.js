"use strict";

$(document).ready(function () {
  setInterval(function () {
    let date = new Date();
    let hours = date.getHours() < 10 ? `0${date.getHours()}` : date.getHours();
    let minutes =
      date.getMinutes() < 10 ? `0${date.getMinutes()}` : date.getMinutes();
    let seconds =
      date.getSeconds() < 10 ? `0${date.getSeconds()}` : date.getSeconds();
    let currentTime = `${hours}:${minutes}:${seconds} WIB`;
    $("#currentTime").html(currentTime);
  }, 1000);

  $(".section").fadeIn(800);
});