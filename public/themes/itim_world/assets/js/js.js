var currentSlide = 0,
    $slideContainer = $('.slide-container'),
    $slide = $('.slide'),
    slideCount = $slide.length,
    animationTime = 300;

function setSlideDimensions () {
  var windowWidth = $(window).width();
  $slideContainer.width(windowWidth * slideCount);
  $slide.width(windowWidth);
}

function generatePagination () {
  var $pagination = $('.pagination');
  for(var i = 0; i < slideCount; i ++){
    var $indicator = $('<div>').addClass('indicator'),
        $progressBarContainer = $('<div>').addClass('progress-bar-container'),
        $progressBar = $('<div>').addClass('progress-bar'),
        indicatorTagText = $slide.eq(i).attr('data-tag'),
        $tag = $('<div>').addClass('tag').text(indicatorTagText);
    $indicator.append($tag);
    $progressBarContainer.append($progressBar);
    $pagination.append($indicator).append($progressBarContainer);
  }
  $pagination.find('.indicator').eq(0).addClass('active');
}

function goToNextSlide () {
  if(currentSlide >= slideCount - 1) return;
  var windowWidth = $(window).width();
  currentSlide++;
  $slideContainer.animate({
    left: -(windowWidth * currentSlide)
  });
  setActiveIndicator();
  $('.progress-bar').eq(currentSlide - 1).animate({
    width: '100%'
  }, animationTime);
}

function goToPreviousSlide () {
  if(currentSlide <= 0) return;
  var windowWidth = $(window).width();
  currentSlide--;
  $slideContainer.animate({
    left: -(windowWidth * currentSlide)
  }, animationTime);
  setActiveIndicator();
  $('.progress-bar').eq(currentSlide).animate({
    width: '0%'
  }, animationTime);
}

function postitionSlides () {
  var windowWidth = $(window).width();
  setSlideDimensions();
  $slideContainer.css({
    left: -(windowWidth * currentSlide)
  }, animationTime);
}

function setActiveIndicator () {
  var $indicator = $('.indicator');
  $indicator.removeClass('active').removeClass('complete');
  $indicator.eq(currentSlide).addClass('active');
  for(var i = 0; i < currentSlide; i++){
    $indicator.eq(i).addClass('complete');
  }
}

setSlideDimensions();
generatePagination();
$(window).resize(postitionSlides);
$('.next').on('click', goToNextSlide);
$('.previous').on('click', goToPreviousSlide);



(function() {
  $('#live-chat header').click(function() {
    $('.chat').slideToggle(300, 'swing');
    $('.chat-message-counter').fadeToggle(300, 'swing');

  });

}) ();

//

$(document).ready(function() {
  simpleSelect();
});

function simpleSelect() {
  "use strict";
  var selectHolder,
    selectClass;

  //Setup
  // $('select').each(function() {
  //   selectClass = $(this).attr('class');
  //   selectHolder = '<dl class="simpleSelect ' + selectClass + '">';
  //   selectHolder += '<dt>' + $('option', this).first().text() + '</dt><dd><ul>';
  //   $('option', this).each(function() {
  //     selectHolder += '<li data="' + $(this).val() + '">' + $(this).text() + '</li>';
  //   });
  //   selectHolder += '</ul></dd></dl>';
  //   $(this).after(selectHolder);
  //   $('.' + selectClass).wrapAll('<div class="selectContainer"></div>');
  // });
// select-sex
  selectClass = $('#select-sex').attr('class');
  selectHolder = '<dl class="simpleSelect ' + selectClass + '">';
  selectHolder += '<dt>' + $('option', '#select-sex').first().text() + '</dt><dd><ul>';
  $('option', '#select-sex').each(function() {
    selectHolder += '<li data="' + $('#select-sex').val() + '">' + $('#select-sex').text() + '</li>';
  });
  selectHolder += '</ul></dd></dl>';
  $('#select-sex').after(selectHolder);
  $('.' + selectClass).wrapAll('<div class="selectContainer"></div>');

// select-level
  selectClass = $('#select-level').attr('class');
  selectHolder = '<dl class="simpleSelect ' + selectClass + '">';
  selectHolder += '<dt>' + $('option', '#select-level').first().text() + '</dt><dd><ul>';
  $('option', '#select-level').each(function() {
    selectHolder += '<li data="' + $('#select-level').val() + '">' + $('#select-level').text() + '</li>';
  });
  selectHolder += '</ul></dd></dl>';
  $('#select-level').after(selectHolder);
  $('.' + selectClass).wrapAll('<div class="selectContainer"></div>');

  selectClass = $('#select-program').attr('class');
  selectHolder = '<dl class="simpleSelect ' + selectClass + '">';
  selectHolder += '<dt>' + $('option', '#select-program').first().text() + '</dt><dd><ul>';
  $('option', '#select-program').each(function() {
    selectHolder += '<li data="' + $('#select-program').val() + '">' + $('#select-program').text() + '</li>';
  });
  selectHolder += '</ul></dd></dl>';
  $('#select-program').after(selectHolder);
  $('.' + selectClass).wrapAll('<div class="selectContainer"></div>');



  //Clicks
  $('.simpleSelect dd ul li').on("click", function() {
    $(this).parents().eq(3).find('select').val($(this).attr('data'));
  });

  $('.simpleSelect dt').on("click", function() {
    if ($(this).next('dd').hasClass("open")) {
      $(this).removeClass("open").next('dd').removeClass("open");
    } else {
      $(this).addClass("open").next('dd').addClass("open");
    }
  });

  $('.simpleSelect dd ul li').on("click", function() {
    $(this).parents().eq(1).removeClass("open");
    $(this).parents().eq(2).find('dt').removeClass("open");
    $(this).parents().eq(4).find('dt').text($(this).text());
  });
}


// Ajax form

// $(document).ready(function () {
//     $('.reg-form').on('submit', function(e) {
//         var id = $(this).attr('id');
//         var urlForm;
//         if(id==='reg-1'){
//           urlForm = "http://itim.freezer.wip.camp/profile/formfirst";
//         }else if (id==='reg-2') {
//           urlForm = "http://itim.freezer.wip.camp/profile/formsecond";
//         }else if (id==='reg-3') {
//           urlForm = "http://itim.freezer.wip.camp/profile/formthird";
//         }else if (id==='reg-4') {
//           urlForm = "http://itim.freezer.wip.camp/profile/formfour";
//         }else if (id==='reg-5') {
//           urlForm = "http://itim.freezer.wip.camp/profile/formfive";
//         }else if (id==='reg-6') {
//           urlForm = "http://itim.freezer.wip.camp/profile/formsix";
//         }
//         // var
//         e.preventDefault();
//         console.log(id);
//         $.ajax({
//             url : urlForm,
//             type: "POST",
//             data: $('#'+id).serializeArray(),
//             dataType: 'json',
//             success: function (data) {
//                 console.log("submit " + data);
//             }
//         });
//     });

//     $('.ques-form').on('submit', function(e) {
//         var id = $(this).attr('id');
//         var urlForm;
//         if(id==='reg-1'){
//           urlForm = "#";
//         }else if (id==='reg-2') {
//           urlForm = "#";
//         }else if (id==='reg-3') {
//           urlForm = "#";
//         }else if (id==='reg-4') {
//           urlForm = "#";
//         }else if (id==='reg-5') {
//           urlForm = "#";
//         }else if (id==='reg-6') {
//           urlForm = "#";
//         }
//         // var
//         e.preventDefault();
//         console.log(id);
//         $.ajax({
//             url : urlForm,
//             type: "POST",
//             data: $('#'+id).serializeArray(),
//             dataType: 'json',
//             success: function (data) {
//                 console.log("submit " + data);
//             }
//         });
//     });
// });

$(document).ready(function() {
  var activeItem = $("#left-menu").find('.active')
  var lastActive = localStorage.getItem("lastActive")
  if (activeItem.length <1) {
    if (lastActive){
      $('#'+lastActive).addClass("active")
      $('#'+lastActive+'_content').addClass("active")
    }else{
    $("#profile").addClass("active")
    $("#profile_content").addClass("active")
  }
  }
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
      localStorage.setItem("lastActive", e.target.id)
      e.preventDefault();
      $(this).siblings('a.active').removeClass("active");
      $(this).addClass("active");
      var index = $(this).index();
      $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
      $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});

      $( "#reg-1" ).validate({
        rules: {
          name_th: {
            required: true,
            regex: "^[ก-๙]+$"
          },
          surname_th: {
            required: true,
            regex: "^[ก-๙]+$"
          },
          name_en: {
            required: true,
            regex: "^[A-z]+$"
          },
          surname_en: {
            required: true,
            regex: "^[A-z]+$"
          },
          nickname: {
            required: true
          },
          tel: {
            required: true,
            regex: "^[0-9]+$"
          },
          sex: {
            required: true
          },
          religion: {
            required: true
          },
          dob: {
            required: true
          },
          address: {
            required: true
          },
          facebook: {
            required: true
          },
          twitter: {
            required: true
          },
      },
      messages:{
        name_th: {
          required: "กรอกข้อมูลให้ครบ",
          regex: "กรอกภาษาให้ถูกต้อง"
        },
        surname_th:{
          required: "กรอกข้อมูลให้ครบ",
          regex: "กรอกภาษาให้ถูกต้อง"
        },
        name_en:{
          required: "กรอกข้อมูลให้ครบ",
          regex: "กรอกภาษาให้ถูกต้อง"
        },
        surname_en:{
          required: "กรอกข้อมูลให้ครบ",
          regex: "กรอกภาษาให้ถูกต้อง"
        },
        nickname:"กรอกข้อมูลให้ครบ",
        tel:{
          required: "กรอกข้อมูลให้ครบ",
          regex: "กรอกตัวเลข"
        },
        sex:"กรอกข้อมูลให้ครบ",
        religion:"กรอกข้อมูลให้ครบ",
        dob:"กรอกข้อมูลให้ครบ",
        address:"กรอกข้อมูลให้ครบ",
        facebook:"กรอกข้อมูลให้ครบ",
        twitter:"กรอกข้อมูลให้ครบ",
      }
      });
      $( "#reg-2" ).validate({
        rules: {
          typeahead: {
            required: true
          },
          level: {
            required: true
          },
          program: {
            required: true
          },
          gpax: {
            required: true
          },
      },
      messages:{
        typeahead: "กรอกข้อมูลให้ครบ",
        level:"กรอกข้อมูลให้ครบ",
        program:"กรอกข้อมูลให้ครบ",
        gpax:"กรอกข้อมูลให้ครบ",
      }
      });
      $( "#reg-4" ).validate({
        rules: {
          parent_name: {
            required: true
          },
          parent_relation: {
            required: true
          },
          parent_tel: {
            required: true,
          },
      },
      messages:{
        parent_name: "กรอกข้อมูลให้ครบ",
        parent_relation:"กรอกข้อมูลให้ครบ",
        parent_tel:"กรอกข้อมูลให้ครบ",
      }

      });
      $( "#reg-5" ).validate({
        rules: {
          referal: {
            required: true
          },
          activitys: {
            required: true
          },
      },
      messages:{
        referal:"กรอกข้อมูลให้ครบ",
        activitys:"กรอกข้อมูลให้ครบ",
      }


      });

      $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "กรอกภาษาให้ถูกต้อง"
      );

$(document).ready(function(){
    $('#typeahead').typeahead({
      source: function(query,process){
        const data = {school_id:query}
        $.ajax({
          url: 'http://itim.wip.camp/profile/typeahead',
          type: 'GET',
          data: data,
          dataType: 'JSON',
          async: true,
          success: function(data){
            process(data);
          }
        });
      }
    });
  });

$(document).ready(function(){
  //$("#tel").mask("999-999-9999");
  //$("#parent_tel").mask("999-999-9999");
  $("#gpax").mask("9.99");
});

// photo

$(function () {

    "use strict";

    function url(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $(".target").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);

        }
    }
    $("#file").change(function () {
        url(this);
    });
});
