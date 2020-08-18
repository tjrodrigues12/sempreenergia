/* var arraySliders = [];

var urlSlider = uri + '/assets/sliders';

$(document).ready(() => {

  $.ajax({

    url: urlSlider,

    context: document.body

  }).done(function (data) {

    var allLinks = $(data).find('a');

    var goodLinks = $.grep(allLinks, function (el) {

      return (el.pathname != '/');

    });


    $(goodLinks).each(function (i) {

      var objeto = {

        name: this.pathname.split('.')[0].replace('/wordpress/', ''),

        extension: this.pathname.split('.')[1] || ''

      }

      if (objeto.extension !== "") {
        arraySliders.push(objeto);
      }

    });

    var i = 0;

    var size = 100;
    var zoomIn = true;

    setSlider(arraySliders[0]);

    setInterval(function () {

      i++;

      setSlider(arraySliders[i]);

      if (!zoomIn) {
        size = 100;
      } else {
        size = 120;
      }

      zoomIn = !zoomIn;

      if (i > arraySliders.length - 1) i = 0;

    }, 5000);

    setInterval(() => {


      if (zoomIn) {
        size += 0.05;
      } else {
        size -= 0.05;
      }

      zoomSlider(size, zoomIn);

      console.log(size);

    }, 100);

  });


});


var setSlider = function (arraySliders) {

  var image = '';

  $.each(arraySliders, function (key, obj) {

    if (key !== "extension") {

      image += obj;

    } else {

      image += '.' + obj;

    }

  });

  $("header").css('background', 'url("' + urlSlider + '/' + image + '")');
  $("header").css('background-size', 'cover');
  $("header").css('background-repeat', 'no-repeat');
  $("header").css('background-position', 'center');

}

var zoomSlider = function (size) {

  $("header").css('background-size', size + '% auto');

}
*/