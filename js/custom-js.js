
jQuery(document).ready(function($){
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top + 100;
            var element_bottom_position = (element_top_position + element_height);

            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {

                if($element.hasClass('animate-img-card')){
                    $element.find('.delay-1').addClass('animate-cs').delay( 800 );
                    $element.find('.delay-2').addClass('animate-cs').delay( 1600 );
                    $element.find('.delay-3').addClass('animate-cs').delay( 2000 );
                }
                $element.addClass('in-view'); 
            }
            // else{
            //     $element.removeClass('in-view');
            // }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    $(document).ready(function(){
        $('#menu-mobile').click(function(){
            $('#header .container > div').slideToggle('fast')
        })
    })


    $('.gallery-slide').owlCarousel({
        margin:0,
        loop:true,
        slideSpeed : 300,
        paginationSpeed : 400,
        autoplay:false,
        nav:true,
        pagination:false,  
        dots: false,
        navText: ["<i class='fas fa-angle-left'></i>","<i class='fas fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            },
            1100:{
                items:3
            }
        }
    });
})

// Ajax Post - Blog Page
jQuery(document).ready( function($){

    $(".filter-catergory-cs ul li").on('click', function(){ 
        $(".filter-catergory-cs ul li").removeClass('active');
        $(this).addClass('active');
        var cat_id = $(this).data('id');

        $.ajax({
         type : "post",
         dataType: "json",
         url : wp_ajax_custom_vars.ajaxurl,
         data : {
             action: "get_recent_post_filter", 
             cat : cat_id
         },
         error: function(response){
             console.log(response);
         },
         success: function(response) {
                   // Actualiza el mensaje con la respuesta
                   console.log(response);
                   $('.content-lastes-post').html(response.html);
                   $("a.load_more_post").attr('data-nextpage', response.nextpage);
                   $("a.load_more_post").attr('data-cat', response.cat_id );
                   if((response.nextpage) > response.totalPage){
                    $("a.load_more_post").hide();
                }else{
                    $("a.load_more_post").show();
                }
            }
        });
    });

    $(".event-load-more").on('click', 'a.load_more_post', function(e){

        e.preventDefault();

        var nextPage = $(this).attr('data-nextpage');
        var cat_id   = $(this).attr('data-cat');
        console.log(nextPage);
        $.ajax({
         type : "post",
         dataType: "json",
         url : wp_ajax_custom_vars.ajaxurl,
         data : {
             action : "load_more_post", 
             cat : cat_id,
             nextpage : nextPage,
         },
         error: function(response){
             console.log(response);
         },
         success: function(response) {
                   // Actualiza el mensaje con la respuesta
                   console.log(response);
                   $('.content-lastes-post .post__recent_content').append(response.html);
                   $("a.load_more_post").attr('data-nextpage', response.nextpage);
                   $("a.load_more_post").attr('data-cat', response.cat_id );
                   if((response.nextpage) > response.totalPage){
                    $("a.load_more_post").hide();
                }else{
                    $("a.load_more_post").show();
                }
            }
        });

    });

});

jQuery(document).ready(function($){

	var options = '';
	$('.item__field.select_field select option').each(function(index){
		console.log($(this).val());
	    if (index > 0) {
	    	if($(this).val()){
	    		options += '<div class="item-op-cs">'+$(this).val()+'</div>';
	    	}
	    }
	    
	});

	$('#pop-up-select-form').html('<div class="flex-popup-cs"><div class="layout-close-pop-fcs"></div><div class="pop-up-select-form-cs">'+options+'</div></div>');

	$('body').on('click', '.layout-close-pop-fcs', function(){
		$('div#pop-up-select-form').hide();
	});

	$('.item__field.select_field').click(function(){
		$('div#pop-up-select-form').show();
	});

	$('body').on('click', '.pop-up-select-form-cs .item-op-cs', function(){
		var val_opt = $(this).html();
		$('.container__contact__form .item__field .wpcf7-form-control-wrap select option[value="'+val_opt+'"]').attr('selected', 'selected');
		$('div#pop-up-select-form').hide();
	});


		$(document).on('keyup keypress', 'form.wpcf7-form .content__fields', function(e) {
		  if(e.keyCode == 13) {
		    e.preventDefault();
		    return false;
		  }
		});

	$('.next_steep_3').click(function(e){
		e.preventDefault();

		var validation = true;

		if($('.container__contact__form .item__field textarea').val() == ''){
			$('.container__contact__form .item__field textarea').addClass('invalid-input-cs');
		    validation = false;
		}

		if(validation){
			$('.content__steep.steep_2').hide();
			$('.content__steep.steep_3').show();
		}

	});

	$('.next_steep_2').click(function(e){

		e.preventDefault();

		var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

		var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;

		var validation = true;

		jQuery('.content__steep.steep_1 .content__fields input').each(function(){

		    var val_ipt = $(this).val();
		    var type_ipt = $(this).attr('type');


		    if(type_ipt == 'email'){
		    	if (!val_ipt.match(testEmail)){
		            $(this).addClass('invalid-input-cs');
		            //$('.invalid-message').show();
		            validation = false;
		        }
		    }

		    else if($(this).val() == ''){
		    	$(this).addClass('invalid-input-cs');
		    	validation = false;
		    }
		    console.log(type_ipt);

		})

		$('.content__fields input, .content__fields textarea').click(function(){
			$(this).removeClass('invalid-input-cs');
		})

		if(validation){
			$('.content__steep.steep_1').hide();
			$('.content__steep.steep_2').show();
		}

	});
})