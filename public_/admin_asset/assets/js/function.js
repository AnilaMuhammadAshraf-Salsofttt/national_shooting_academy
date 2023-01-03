$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true
});

/*cropper start here*/

//
// $(function () {
//
// 	var croppie = null;
//
// 	var el = document.getElementById('resizer');
//
// 	$.base64ImageToBlob = function (str) {
//
// 		var pos = str.indexOf(';base64,');
// 		var type = str.substring(5, pos);
// 		var b64 = str.substr(pos + 8);
//
// 		var imageContent = atob(b64);
//
// 		var buffer = new ArrayBuffer(imageContent.length);
// 		var view = new Uint8Array(buffer);
//
// 		for (var n = 0; n < imageContent.length; n++) {
// 			view[n] = imageContent.charCodeAt(n);
// 		}
//
// 		var blob = new Blob([buffer], {
// 			type: type
// 		});
//
// 		return blob;
// 	}
//
// 	$.getImage = function (input, croppie) {
// 		if (input.files && input.files[0]) {
// 			var reader = new FileReader();
// 			reader.onload = function (e) {
// 				croppie.bind({
// 					url: e.target.result,
// 				});
// 			}
// 			reader.readAsDataURL(input.files[0]);
// 		}
// 	}
//
//
// 	$("#upload").on("change", function (event) {
//
// 		$("#et-profile-image-modal").modal();
//
// 		croppie = new Croppie(el, {
// 			viewport: {
// 				width: 200,
// 				height: 200,
// 				type: 'circle'
// 			},
// 			boundary: {
// 				width: 250,
// 				height: 250
// 			},
// 			enableOrientation: true
// 		});
//
// 		$.getImage(event.target, croppie);
//
// 	});
//
//
// 	$("#et-crop-and-upload").on("click", function () {
//
// 		croppie.result('base64').then(function (base64) {
// 			$("#et-profile-image-modal").modal("hide");
// 			$("#et-profile-preview-image").attr("src", base64);
// 			$("#et-field-avatar").val(base64);
// 		});
//
// 	});
//
// 	$('#et-profile-image-modal').on('hidden.bs.modal', function (e) {
// 		 This function will call immediately after model close
// 		 To ensure that old croppie instance is destroyed on every model close
// 		setTimeout(function () {
// 			croppie.destroy();
// 		}, 100);
// 	})
//
// 	$(".rotate").on("click", function () {
// 		croppie.rotate(parseInt($(this).data('deg')));
// 	});
//
//
//
// });
//



/*cropper end here*/




// step form
$('#dob').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#dob-1').datepicker({
    uiLibrary: 'bootstrap4'
});


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50) + "%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
                'transform': 'scale(' + scale + ')',
                'position': 'absolute'
            });
            next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1 - now) * 50) + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function() {
            current_fs.hide();
            animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function() {
    return false;
})

// end step form







$('.subject-select').select2({
    containerCssClass: "sub-sel",
    minimumResultsForSearch: -1,
    dropdownCssClass: 'sub-dd'
});

/*modal click change start here*/

$(function() {

    $('#edit-package').on('click', function() {
        $('.manage-package-modal').modal('hide');
        $('.edit-package-modal').modal('show');
    });

    $('#pass-1').on('click', function() {
        $('.pass-rec').modal('hide');
        $('.pass-rec-2').modal('show');
    });
    $('#pass-2').on('click', function() {
        $('.pass-rec-2').modal('hide');
        $('.pass-rec-3').modal('show');
    });

});


/*modal click change end here*/



/*date picker start here*/

//
//$('#timepicker-1').timepicker({
//	uiLibrary: 'bootstrap4'
//});
//$('#timepicker-2').timepicker({
//	uiLibrary: 'bootstrap4'
//});

$(document).ready(function() {
    $(".dataTables_filter input").attr("placeholder", "Search");
});

$('#datepicker-1').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#datepicker-2').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker-3').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker-4').datepicker({
    uiLibrary: 'bootstrap4'

});
$('#datepicker-5').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker-6').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker-7').datepicker({
    uiLibrary: 'bootstrap4'
});
$('#datepicker-8').datepicker({
    uiLibrary: 'bootstrap4'
});
/*




 $('#datepicker-6').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-7').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-8').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-9').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-10').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-11').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-12').datepicker({
            uiLibrary: 'bootstrap4'
});
$('#datepicker-13').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-14').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-15').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-16').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-17').datepicker({
            uiLibrary: 'bootstrap4'
}); 
$('#datepicker-18').datepicker({
            uiLibrary: 'bootstrap4'
});

 $('#datepicker-19').datepicker({
            uiLibrary: 'bootstrap4'
});*/
/*date picker end here*/