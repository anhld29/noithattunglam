/**
 * @package 	WordPress
 * @subpackage 	Interior Design
 * @version 	1.0.6
 * 
 * Theme Custom Scripts
 * Created by CMSMasters
 * 
 */
 
"use strict";


jQuery(document).ready(function() { 
	/* Add Class To Row */
	(function ($) { 
		$('.cmsms_row_margin').each(function () { 
			var cmsms_column = $(this).find('.cmsms_column').eq(0);
			
			
			if ( 
				cmsms_column.hasClass('one_half') && 
				cmsms_column.next().hasClass('one_half') 
			) {
				$(this).addClass('cmsms_1212');
			} else if ( 
				cmsms_column.hasClass('one_third') && 
				cmsms_column.next().hasClass('two_third') 
			) {
				$(this).addClass('cmsms_1323');
			} else if ( 
				cmsms_column.hasClass('two_third') && 
				cmsms_column.next().hasClass('one_third') 
			) {
				$(this).addClass('cmsms_2313');
			} else if ( 
				cmsms_column.hasClass('one_fourth') && 
				cmsms_column.next().hasClass('three_fourth') 
			) {
				$(this).addClass('cmsms_1434');
			} else if ( 
				cmsms_column.hasClass('three_fourth') && 
				cmsms_column.next().hasClass('one_fourth') 
			) {
				$(this).addClass('cmsms_3414');
			} else if ( 
				cmsms_column.hasClass('one_third') && 
				cmsms_column.next().hasClass('one_third') && 
				cmsms_column.next().next().hasClass('one_third') 
			) {
				$(this).addClass('cmsms_131313');
			} else if (
				cmsms_column.hasClass('one_half') && 
				cmsms_column.next().hasClass('one_fourth') && 
				cmsms_column.next().next().hasClass('one_fourth')
			) {
				$(this).addClass('cmsms_121414');
			} else if ( 
				cmsms_column.hasClass('one_fourth') && 
				cmsms_column.next().hasClass('one_half') && 
				cmsms_column.next().next().hasClass('one_fourth')
			) {
				$(this).addClass('cmsms_141214');
			} else if ( 
				cmsms_column.hasClass('one_fourth') && 
				cmsms_column.next().hasClass('one_fourth') && 
				cmsms_column.next().next().hasClass('one_half') 
			) {
				$(this).addClass('cmsms_141412');
			} else if ( 
				cmsms_column.hasClass('one_fourth') && 
				cmsms_column.next().hasClass('one_fourth') && 
				cmsms_column.next().next().hasClass('one_fourth') && 
				cmsms_column.next().next().next().hasClass('one_fourth') 
			) {
				$(this).addClass('cmsms_14141414');
			} else {
				$(this).addClass('cmsms_11');
			}
		} );
	} )(jQuery);



	/* Scroll Top */
	(function ($) { 
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 200) {
				$('#slide_top').filter(':hidden').fadeIn('fast');
			} else {
				$('#slide_top').filter(':visible').fadeOut('fast');
			}
		} );
		
		
		$('.divider a, #slide_top').on('click', function () { 
			$('html, body').animate( { 
				scrollTop : 0 
			}, 'slow');
			
			
			return false;
		} );
	} )(jQuery);



	/* Lightbox Classes Adding */
	(function ($) { 
		$('.widget_custom_flickr_entries').each(function () { 
			var flickrUniqID = uniqID();
			
			
			$(this).find('.flickr_badge_image a').each(function () { 
				var src = $(this).find('img').attr('src'), 
					title = $(this).find('img').attr('title'), 
					src_full = src.replace(/_s.jpg/g, '.jpg');
				
				
				$(this).removeAttr('href').attr( { 
					href : 		src_full, 
					title : 	title, 
					rel : 		'ilightbox[flickr_' + flickrUniqID + ']' 
				} );
			} );
		} ); // Flickr Widget Lightbox
		
		
		$('.gallery').each(function () { 
			var galUniqID = uniqID();
			
			
			$(this).find('a').each(function () { 
				var linkHref = $(this).attr('href'), 
					lastDotPos = linkHref.lastIndexOf('.'), 
					imgFormat = linkHref.slice(lastDotPos + 1);
				
				
				if (imgFormat.length <= 5) {
					$(this).attr('rel', 'ilightbox[wp_gal_' + galUniqID + ']');
				}
			} );
		} ); // Wordpress Default Gallery Shortcode Lightbox
	} )(jQuery);
	
	
	
	/* iLightBox Init */
	(function ($) { 
		var ilightbox_settings = { 
			skin : 					cmsms_script.ilightbox_skin, 
			path : 					cmsms_script.ilightbox_path, 
			infinite : 				(cmsms_script.ilightbox_infinite == '1') ? true : false, 
			keepAspectRatio : 		(cmsms_script.ilightbox_aspect_ratio == '1') ? true : false, 
			mobileOptimizer : 		(cmsms_script.ilightbox_mobile_optimizer == '1') ? true : false, 
			maxScale : 				Number(cmsms_script.ilightbox_max_scale), 
			minScale : 				Number(cmsms_script.ilightbox_min_scale), 
			innerToolbar : 			(cmsms_script.ilightbox_inner_toolbar == '1') ? true : false, 
			smartRecognition : 		(cmsms_script.ilightbox_mobile_optimizer == '1') ? true : false, 
			fullAlone : 			(cmsms_script.ilightbox_fullscreen_one_slide == '1') ? true : false, 
			fullViewPort : 			cmsms_script.ilightbox_fullscreen_viewport, 
			controls : { 
				toolbar : 			(cmsms_script.ilightbox_controls_toolbar == '1') ? true : false, 
				arrows : 			(cmsms_script.ilightbox_controls_arrows == '1') ? true : false, 
				fullscreen : 		(cmsms_script.ilightbox_controls_fullscreen == '1') ? true : false, 
				thumbnail : 		(cmsms_script.ilightbox_controls_thumbnail == '1') ? true : false, 
				keyboard : 			(cmsms_script.ilightbox_controls_keyboard == '1') ? true : false, 
				mousewheel : 		(cmsms_script.ilightbox_controls_mousewheel == '1') ? true : false, 
				swipe : 			(cmsms_script.ilightbox_controls_swipe == '1') ? true : false, 
				slideshow : 		(cmsms_script.ilightbox_controls_slideshow == '1') ? true : false 
			}, 
			text : { 
				close : 			cmsms_script.ilightbox_close_text, 
				enterFullscreen : 	cmsms_script.ilightbox_enter_fullscreen_text, 
				exitFullscreen : 	cmsms_script.ilightbox_exit_fullscreen_text, 
				slideShow : 		cmsms_script.ilightbox_slideshow_text, 
				next : 				cmsms_script.ilightbox_next_text, 
				previous : 			cmsms_script.ilightbox_previous_text 
			}, 
			errors : { 
				loadImage : 		cmsms_script.ilightbox_load_image_error, 
				loadContents : 		cmsms_script.ilightbox_load_contents_error, 
				missingPlugin : 	cmsms_script.ilightbox_missing_plugin_error 
			} 
		}, 
		gallery_array = [], 
		gallery_id = '';
		
		
		$('[rel="ilightbox"]').each(function () { 
			$(this).iLightBox(ilightbox_settings);
		} );
		
		
		$('[rel^="ilightbox["]').each(function () { 
			if ($(this).closest('.cmsms_more_items_loader').length === 0) {
				var item_rel = $(this).attr('rel');
				
				
				if ($.inArray(item_rel, gallery_array) === -1) {
					gallery_array.push(item_rel);
				}
			}
		} );
		
		
		$.each(gallery_array, function (gallery_array, gallery_id) { 
			$('[rel="' + gallery_id + '"]').iLightBox(ilightbox_settings);
		} );
	} )(jQuery);
	
	
	
	/* Shortcodes Animation Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('[data-animation]').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 			$(this), 
						animation = 	el.data('animation'), 
						delay = 		(el.data('delay')) ? el.data('delay') : 0;
					
					
					setTimeout(function () { 
						el.addClass(animation + ' animated');
					}, delay);
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 			$(this), 
						animation = 	el.data('animation'), 
						delay = 		(el.data('delay')) ? el.data('delay') : 0;
					
					
					setTimeout(function () { 
						el.addClass(animation + ' animated');
					}, delay);
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('[data-animation]').addClass('animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsms_icon_box').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 	$(this);
					
					
					el.addClass('shortcode_animated');
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 	$(this);
					
					
					el.addClass('shortcode_animated');
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsms_icon_box').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsms_icon_list_items.cmsms_icon_list_type_block').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsms_icon_list_items .cmsms_icon_list_item').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsms_gallery, .cmsms_hover_slider').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('li'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsms_gallery ul li, .cmsms_hover_slider ul li').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsms_profile.vertical').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('article'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('article'), 
						delay = 	500, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsms_profile.vertical .profile').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.cmsms_clients_grid').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 		$(this), 
						items = 	el.find('.cmsms_clients_item'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 		$(this), 
						items = 	el.find('.cmsms_clients_item'), 
						delay = 	300, 
						i = 		1;
					
					
					items.each(function () { 
						var item = 	$(this);
						
						
						setTimeout(function () { 
							item.addClass('shortcode_animated');
						}, delay * i);
						
						
						i += 1;
					} );
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.cmsms_clients_grid').find('.cmsms_clients_item').addClass('shortcode_animated');
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$('.blog.columns, .blog.timeline').waypoint(function (dir) { 
				if (dir === 'down') {
					var el = 			$(this), 
						items = 		el.find('article.post'), 
						itemsCount = 	items.length, 
						delay = 		300, 
						i = 			1;
					
					
					var newTime = setInterval(function () { 
						if (el.hasClass('isotope')) {
							clearInterval(newTime);
						} else {
							return false;
						}
						
						
						items.each(function () { 
							var item = 	$(this);
							
							
							setTimeout(function () { 
								item.addClass('shortcode_animated');
							}, delay * i);
							
							
							i += 1;
							
							
							if (i === itemsCount) {
								setTimeout(function () { 
									$(window).trigger('resize');
								}, delay * i);
							}
						} );
					}, 300);
				}
			}, { 
				offset : 		'100%' 
			} ).waypoint(function (dir) { 
				if (dir === 'up') {
					var el = 			$(this), 
						items = 		el.find('article.post'), 
						itemsCount = 	items.length, 
						delay = 		300, 
						i = 			1;
					
					
					var newTime = setInterval(function () { 
						if (el.hasClass('isotope')) {
							clearInterval(newTime);
						} else {
							return false;
						}
						
						
						items.each(function () { 
							var item = 	$(this);
							
							
							setTimeout(function () { 
								item.addClass('shortcode_animated');
							}, delay * i);
							
							
							i += 1;
							
							
							if (i === itemsCount) {
								setTimeout(function () { 
									$(window).trigger('resize');
								}, delay * i);
							}
						} );
					}, 300);
				}
			}, { 
				offset : 		'25%' 
			} );
		} else {
			$('.blog.columns, .blog.timeline').find('article.post').addClass('shortcode_animated');
		}
	} )(jQuery);
	
	
	
	/* Stats Run */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsms_stats.stats_mode_circles').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsms_stat').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			180, 
							lineWidth : 	5, 
							lineCap : 		'square', 
							animate : 		1000, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : function () { 
								return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsms_script.primary_color;
							}, 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsms_stat_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsms_stats.stats_mode_circles').find('.cmsms_stat').easyPieChart( { 
				size : 			180, 
				lineWidth : 	5, 
				lineCap : 		'square', 
				animate : 		1000, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : function () { 
					return ($(this.el).data('bar-color')) ? $(this.el).data('bar-color') : cmsms_script.primary_color;
				}, 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsms_stat_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsms_counters').waypoint(function () { 
				var i = 1;
				
				
				$(this).find('.cmsms_counter').each(function () { 
					var el = $(this);
					
					
					setTimeout(function () { 
						el.easyPieChart( { 
							size : 			180, 
							lineWidth : 	0, 
							lineCap : 		'square', 
							animate : 		1500, 
							scaleColor : 	false, 
							trackColor : 	false, 
							barColor : 		'#ffffff', 
							onStep : function (from, to, val) { 
								$(this.el).find('.cmsms_counter_counter').text(~~val);
							} 
						} );
					}, 500 * i);
					
					
					i += 1;
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsms_counters').find('.cmsms_counter').easyPieChart( { 
				size : 			180, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsms_counter_counter').text(~~val);
				} 
			} );
		}
		
		
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android && 
			!checker.ua.ie9 
		) {
			$('.cmsms_stats.stats_mode_bars').waypoint(function () { 
				$(this).addClass('shortcode_animated').find('.cmsms_stat').each(function () { 
					var el = $(this);
					
					
					el.easyPieChart( { 
						size : 			180, 
						lineWidth : 	0, 
						lineCap : 		'square', 
						animate : 		1500, 
						scaleColor : 	false, 
						trackColor : 	false, 
						barColor : 		'#ffffff', 
						onStep : function (from, to, val) { 
							$(this.el).find('.cmsms_stat_counter').text(~~val);
						} 
					} );
				} );
			}, { 
				offset : 		'100%' 
			} );
		} else {
			$('.cmsms_stats.stats_mode_bars').addClass('shortcode_animated').find('.cmsms_stat').easyPieChart( { 
				size : 			180, 
				lineWidth : 	0, 
				lineCap : 		'square', 
				animate : 		1500, 
				scaleColor : 	false, 
				trackColor : 	false, 
				barColor : 		'#ffffff', 
				onStep : function (from, to, val) { 
					$(this.el).find('.cmsms_stat_counter').text(~~val);
				} 
			} );
		}
	} )(jQuery);
	
	
	
	// /* Header Search Toggle */
	(function ($) { 
		$('#header .search_bar_wrap button').on('click', function () { 
			var searchWrap = $(this).parents('.search_wrap'),
				searchInput = $(this).parents('#header').find('.search_bar_wrap input[type=search]'), 
				searchButton = $(this).parents('#header').find('.search_bar_wrap button'),
				headerBlock = $(this).parents('#header').find('.header_side, .header_side_inner');
				
			if (searchWrap.hasClass('search_opened')) {
				searchWrap.removeClass('search_opened');
				
				searchButton.removeClass('cmsms_theme_icon_cancel').attr('type', 'button');
				searchButton.removeClass('cmsms_bfade').attr('type', 'button');
				
				searchButton.addClass('cmsms-icon-search-2').attr('type', 'submit');
				searchButton.addClass('cmsms_bfade').attr('type', 'submit');
				
				setTimeout(function () {
					headerBlock.removeClass('cmsms_ovv');
				}, 400);
			} else {
				searchWrap.addClass('search_opened');
				
				searchButton.removeClass('cmsms-icon-search-2').attr('type', 'button');
				searchButton.removeClass('cmsms_bfade').attr('type', 'button');
				
				searchButton.addClass('cmsms_theme_icon_cancel').attr('type', 'button');
				setTimeout(function () {
					searchButton.addClass('cmsms_bfade').attr('type', 'button');
				}, 100);
				
				searchInput.focus();
				
				headerBlock.addClass('cmsms_ovv');
			}
			
			return false;
		} );
	} )(jQuery);
	
	
	
	/* Header Top Hide Toggle */
	(function ($) { 
		$('.header_top_but').on('click', function () { 
			var headerTopBut = $(this), 
				headerTopButArrow = headerTopBut.find('> span'), 
				headerTopOuter = headerTopBut.parents('.header_top').find('.header_top_outer');
			
			if (headerTopBut.hasClass('opened')) {
				headerTopOuter.slideUp();
				
				headerTopButArrow.removeClass('cmsms_top_arrow_pixel').addClass('cmsms_bot_arrow_pixel');
				
				headerTopBut.removeClass('opened').addClass('closed');
			} else if (headerTopBut.hasClass('closed')) {
				headerTopOuter.slideDown();
				
				headerTopButArrow.removeClass('cmsms_bot_arrow_pixel').addClass('cmsms_top_arrow_pixel');
				
				headerTopBut.removeClass('closed').addClass('opened');
			}
		} );
	} )(jQuery);
	
	
	
	
	/* Header Open/Close Navigation Toggle */
	(function ($) { 
		$('#header .header_mid .cmsms_nav_but_wrap').on('click', function () { 
			var headerNav = $(this).parents('.header_mid').find('nav'), 
				classMega = headerNav.find('.navigation'), 
				headerSideBlock = $(this).parents('#header').find('.header_side'),  
				NavButton = $(this).parents('.header_mid_inner').find('.cmsms_nav_but_wrap'),
				NavCross = $(this).parents('#header').find('span.cmsms_cross'),
				BotSideBlock = $(this).parents('#header').find('.header_side_bottom_side'),
				NavTag = $(this).parents('#header').find('a[data-tag]');
			
			
			if (headerNav.hasClass('nav_open') || headerSideBlock.hasClass('cmsms_open_side')) {
				headerNav.removeClass('nav_open');
				headerNav.removeClass('cmsms_ovv');
				
				headerSideBlock.removeClass('cmsms_open_side');
				
				NavButton.removeClass('close');
				
				NavCross.removeClass('cmsms_visible');
				BotSideBlock.removeClass('cmsms_visible');
				NavTag.removeClass('cmsms_visible');
				
			} else {
				headerNav.addClass('nav_open');
				
				headerSideBlock.addClass('cmsms_open_side');
				
				setTimeout(function () {
					headerNav.addClass('cmsms_ovv');
				}, 600);
				
				NavButton.addClass('close');
				
				setTimeout(function () {
					BotSideBlock.addClass('cmsms_visible');
					NavTag.addClass('cmsms_visible');
					NavCross.addClass('cmsms_visible');
				}, 300);
			}
			
			
			setTimeout(function () { 
				$("#header .header_side_inner .cmsms_wrap_header_side_mid").getNiceScroll().resize();
				
				if (classMega.hasClass('cmsms_mega_menu_enabled')) {
					setTimeout(function () {
						cmsmsMegaMenuDestroy();
					
					
						cmsmsMegaMenu();
					}, 300);
				}
			}, 400);
			
			
			return false;
		} );
	} )(jQuery);
	
	
	/* Header Side Close Navigation */
	
	(function($) {
	  $(document).on('click', function (event) {
		var headerSideBlock = $(this).find('.header_side'),  
			NavButton = $(this).find('.cmsms_nav_but_wrap'),
			NavCross = $(this).find('span.cmsms_cross'),
			BotSideBlock = $(this).find('.header_side_bottom_side');
			
			
		if ($(event.target).closest(".header_side").length) return;
		
			if (headerSideBlock.hasClass('cmsms_open_side')){
				NavButton.removeClass('close');
			}
			
			$(".header_side").removeClass('cmsms_open_side');
			headerSideBlock.removeClass('cmsms_open_side');
		
			
			NavCross.removeClass('cmsms_visible');
			BotSideBlock.removeClass('cmsms_visible');
			
			event.stopPropagation();
	  });
	} )(jQuery);

	
	
	
	/* Header Side Open/Close Lists Toggle */
	(function ($) {
		$('#header li.menu-item-has-children > span.cmsms_cross').on('click', function () { 
			var navSideBut = $(this), 
				navSideItem = navSideBut.parent(),
				navSideItemSub = navSideItem.find('> ul');
				
				if (navSideItem.hasClass('menu-item-mega')) {
					navSideItemSub = navSideItem.find('> .menu-item-mega-container > ul');
				} else {
					navSideItemSub = navSideItem.find('> ul');
				}
				
				
				if (navSideBut.hasClass('cmsms_opened_list')) {
					navSideItemSub.slideUp(300);
					
					navSideBut.removeClass('cmsms_opened_list');
				} else {
					navSideItemSub.slideDown(300);
					
					navSideBut.addClass('cmsms_opened_list');
				}
			
			setTimeout(function () { 
				$("#header .header_side_inner .cmsms_wrap_header_side_mid").getNiceScroll().resize();
			}, 400);
		} );
	} )(jQuery);
	
	
	(function ($) {
		$('#header li.menu-item-has-children.menu-item-object-custom > a').on('click', function () { 
			var navSideBut = $(this), 
				navSideItem = navSideBut.parent(), 
				navLink = navSideItem.find('> .cmsms_cross'),
				navSideItemSub = navSideItem.find('> ul');
			
			if (navSideItem.hasClass('menu-item-mega')) {
				navSideItemSub = navSideItem.find('> .menu-item-mega-container > ul');
			} else {
				navSideItemSub = navSideItem.find('> ul');
			}
			
			
			if (navLink.hasClass('cmsms_opened_list')) {
				navSideItemSub.slideUp(300);
				
				navLink.removeClass('cmsms_opened_list');
			} else {
				navSideItemSub.slideDown(300);
				
				navLink.addClass('cmsms_opened_list');
			}
			
			
			setTimeout(function () { 
				$("#header .header_side_inner .cmsms_wrap_header_side_mid").getNiceScroll().resize();
			}, 400);
		} );
	} )(jQuery);
	
	
	
	/* Share Buttons */
	(function ($) { 
		$('.share_posts a').on('click', function (e) { 
			var screenSize = { 
					width : 	screen.width, 
					height : 	screen.height 
				}, 
				windowWidth = 650, 
				windowHeight = 350, 
				windowTop = (screenSize.height / 2) - (windowHeight / 2), 
				windowLeft = (screenSize.width / 2) - (windowWidth / 2), 
				socialHref = $(this).attr('href'), 
				newWindow = 'width = ' + windowWidth + ', height = ' + windowHeight + ', top = ' + windowTop + ', left = ' + windowLeft + ', resizable = no, status = no, titlebar = no, toolbar = no, location = no';
			
			
			e.preventDefault();
			
			
			return window.open(socialHref, '_blank', newWindow);
		} );
	} )(jQuery);
	
	
	/* Fixed Header Function Start */
	(function ($) { 
		$('#header').cmsmsFixedHeaderScroll();
	} )(jQuery);
	
	
	
	/* Responsive Navigation Function Start */
	(function ($) { 
		$('.header_mid #navigation').cmsmsResponsiveNav();
	} )(jQuery);
	
	
	
	/* Header Side Navigation & Cart Scrolling */
	(function ($) { 
		$("#header .header_side_inner .cmsms_wrap_header_side_mid").niceScroll({
			mousescrollstep: 	30,
			cursoropacitymin: 	0,
			cursoropacitymax: 	1,
			horizrailenabled: 	true,
			hidecursordelay: 	100,
			cursorborder: 		0,
			cursorborderradius: 0,
			autohidemode: 		"leave"
		});
	} )(jQuery);
	
	
	/* Form Builder Animation */
	(function($) {
		var elems = $('.cmsms-form-builder input, .cmsms-form-builder textarea'), 
			fi = $('.cmsms-form-builder .form_info'),
			reqElems = $('.cmsms-form-builder [class^="validate"]'), 
			button = $('.cmsms-form-builder .cmsms_button');
		
		
		$(window).load(function () {
			reqElems.parent().parent().addClass('req');
		} );
	    
		
		elems.on('focus', function () { 
			var el = $(this);
			
			
			if (el.is(':not(.area_opened)')) {
				el.parent().parent().addClass('area_opened');
			}
		} );
	    
		
		elems.on('blur', function () { 
			var el = $(this);
			
			
			if (el.val().trim() === '') {
				el.val('');

				el.parent().parent().removeClass('area_opened');
				
				el.parent().parent().addClass('req');
			} else if (el.val().trim() !== '' && el.hasClass('validate[required]')) {

				el.parent().parent().removeClass('req');
			} 
		} );
		
		
		button.on('click', function () {
			var el = $(this), 
				reqEl = el.closest('.cmsms-form-builder').find('[class^="validate"]');
			
			if (!reqEl.parent().parent().hasClass('req')) {
				setTimeout(function () {
					fi.removeClass('area_opened');
					
					reqEl.parent().parent().addClass('req');
				}, 4000);
			}
		});
		
	} )(jQuery);
	
	
	
	/* Comment Form Animation */
	(function($) {
		var elems = $('.comment-respond input, .comment-respond textarea');
		
		
		elems.on('focus', function () { 
			var el = $(this);
			
			
			if (el.is(':not(.area_opened)')) {
				el.parent().addClass('area_opened');
			} 
		} );
		
		
		elems.on('blur', function () { 
			var el = $(this);
			
			
			if (el.val().trim() === '') {
				el.val('');
				
				el.parent().removeClass('area_opened');
			} 
		} );
	} )(jQuery);
	

	
	
	
	/* Row Parallax Function Start */
	(function ($) { 
		$(window).load(function () { 
			if ( 
				!checker.os.iphone && 
				!checker.os.ipad && 
				!checker.os.ipod && 
				!checker.os.android && 
				!checker.os.blackberry 
			) {
				if (checker.ua.safari) {
					if (checker.ua.chrome) {
						setTimeout(function () { 
							$.stellar( { 
								horizontalScrolling : 	false, 
								verticalOffset : 		30, 
								parallaxElements : 		false 
							} );
						}, 1500);
						
						
						$(window).on('debouncedresize', function () { 
							if ($(window).width() < 1024) {
								$.stellar('destroy');
							} else {
								$.stellar( { 
									horizontalScrolling : 	false, 
									verticalOffset : 		30, 
									parallaxElements : 		false 
								} );
							}
						} );
					}
				} else {
					setTimeout(function () { 
						$.stellar( { 
							horizontalScrolling : 	false, 
							verticalOffset : 		30, 
							parallaxElements : 		false 
						} );
					}, 1500);
					
					
					$(window).on('debouncedresize', function () { 
						if ($(window).width() < 1024) {
							$.stellar('destroy');
						} else {
							$.stellar( { 
								horizontalScrolling : 	false, 
								verticalOffset : 		30, 
								parallaxElements : 		false 
							} );
						}
					} );
				}
			} else {
				$('div.cmsms_row').css('background-attachment', 'scroll');
			}
		} );
	} )(jQuery);
	
	
	
	/* One Page Navigation */
	(function ($) { 
		function cmsmasters_get_offset_val() {
			var cmsmasters_wpAdminBar = $('#wpadminbar').outerHeight(), 
				cmsmasters_offset_val = (cmsmasters_wpAdminBar !== undefined) ? cmsmasters_wpAdminBar : 0;
			
			
			if ($('#page').hasClass('fixed_header')) {
				var header_mid_data_height = $('.header_mid').data('height'), 
					header_mid_height = header_mid_data_height - (header_mid_data_height / 3), 
					header_bot_data_height = $('.header_bot').data('height'), 
					header_bot_data_height = (header_bot_data_height !== undefined) ? header_bot_data_height : 0;
					
					
				cmsmasters_offset_val = cmsmasters_offset_val + header_mid_height + header_bot_data_height - 1;
			}
			
			
			return cmsmasters_offset_val;
		}
		
		
		var cmsmasters_window_hash = window.location.hash;
		
		if ($(cmsmasters_window_hash).length > 0) {
			setTimeout(function () { 
				$('html, body').animate( {
					scrollTop: $(cmsmasters_window_hash).offset().top - cmsmasters_get_offset_val() + 1
				}, 800);
			}, 800);
		}
		
		
		$('body').scrollspy({target: '#navigation'});
		
		
		$('#navigation a').on('click', function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				
				
				var hash = this.hash;
				
				
				if ($(hash).length > 0) {
					$('html, body').animate( {
						scrollTop: $(hash).offset().top - cmsmasters_get_offset_val() + 1
					}, 800, function() {
						if (history.pushState) {
							history.pushState(null, null, hash);
						}
					} );
				} else if (!$('body').hasClass('cmsmasters_custom_page_menu')) {
					window.location.href = cmsmasters_script.site_url + hash;
				}
			}
		} );
	} )(jQuery);
	
	
	
	/* Notise Close Button */
	(function ($) { 
		$('.cmsms_notice a.notice_close').on('click', function () { 
			$(this).parents('.cmsms_notice').fadeOut(500, function () { 
				$(this).remove();
			} );
			
			
			return false;
		} );
	} )(jQuery);
	
	
	/* Posts Slider Rollover */
	(function ($) { 
		var wrapBlock = $('.cmsms_posts_slider.cmsms_project, .cmsms_single_slider');
			
		wrapBlock.find('article, .cmsms_single_slider_post_content').each(function () {
			jQuery(this).find('.cmsms_img_rollover a').css( {
				bottom : jQuery(this).find('.slider_project_inner, .related_posts_item_wrap').outerHeight() + 'px' 
			});
			
			jQuery(this).find('.slider_project_inner, .related_posts_item_wrap').css( { 
				bottom : '-' + jQuery(this).find('.slider_project_inner, .related_posts_item_wrap').outerHeight() + 'px' 
			});
		});
			
	} )(jQuery);

	
	
	/* Toggles */
	(function ($) { 
		$('.cmsms_toggles .cmsms_toggle_title a').on('click', function (i) { 
			var active_toggle = $(this).parents('.cmsms_toggles').find('.cmsms_toggle_wrap.current_toggle .cmsms_toggle'), 
				toggle = $(this).parents('.cmsms_toggle_wrap'), 
				acc = ($(this).parents('.cmsms_toggles').hasClass('toggles_mode_accordion')) ? true : false, 
				dropDown = toggle.find('.cmsms_toggle');
			
			
			if (toggle.hasClass('current_toggle')) {
				dropDown.slideUp('fast', function () { 
					toggle.removeClass('current_toggle');
				} );
			} else {
				if (acc) {
					active_toggle.slideUp('fast', function () { 
						active_toggle.parents('.cmsms_toggle_wrap').removeClass('current_toggle');
					} );
				}
				
				dropDown.slideDown('fast', function () { 
					toggle.addClass('current_toggle');
				} );
			}
			
			
			i.preventDefault();
		} );
		
		
		$('.cmsms_toggles .cmsms_toggles_filter a').on('click', function (i) { 
			var filter_wrap = $(this).parents('.cmsms_toggles_filter'), 
				filter = $(this).data('key'), 
				toggle = $(this).parents('.cmsms_toggles').find('.cmsms_toggle_wrap');
			
			
			if ($(this).is(':not(.current_filter)')) { 
				filter_wrap.find('a').removeClass('current_filter');
				
				
				$(this).addClass('current_filter');
				
				
				toggle.filter('[data-tags~="' + filter + '"]').slideDown('fast');
				
				
				toggle.filter(':not([data-tags~="' + filter + '"])').slideUp('fast');
				
				
				toggle.filter(':not([data-tags~="' + filter + '"])').removeClass('current_toggle').find('.cmsms_toggle').removeAttr('style');
			}
			
			
			i.preventDefault();
		} );
	} )(jQuery);
	
	
	
	/* Tabs */
	(function ($) { 
		$('.cmsms_tabs ul.cmsms_tabs_list li a').on('click', function (t) { 
			var tabs_parent = $(this).parents('.cmsms_tabs'), 
				tabs = tabs_parent.find('.cmsms_tabs_wrap'), 
				index = $(this).parents('li').index();
			
			
			tabs_parent.find('.cmsms_tabs_list > .current_tab').removeClass('current_tab');
			
			
			$(this).parents('li').addClass('current_tab');
			
			
			tabs.find('.cmsms_tab').not(':eq(' + index + ')').slideUp('fast', function () { 
				$(this).removeClass('active_tab');
			} );
			
			
			tabs.find('.cmsms_tab:eq(' + index + ')').slideDown('fast', function () { 
				$(this).addClass('active_tab');
			} );
			
			
			t.preventDefault();
		} );
	} )(jQuery);
	
	
	
	/* YouTube Iframe Fix */
	(function ($) { 
		var iframe = $('iframe[src*="youtube.com"]');
		
		
		iframe.each(function () { 
			var current = 	$(this), 
				src = 		current.attr('src'); 
			
			
			if (src) {
				if (src.indexOf('?') !== -1) {
					src += "&wmode=opaque";
				} else {
					src += "?wmode=opaque";
				}
				
				
				current.attr('src', src);
			}
		} );
	} )(jQuery);
} );



/* Like Button */
function cmsmsLike(postID) { 
	"use strict";
	
	if (postID !== '') {
		var likeButton = jQuery('#cmsmsLike-' + postID), 
			data = { 
				action : 	'cmsms_ajax_like', 
				id : 		postID, 
				nonce : 	cmsms_script.nonce_ajax_like 
			};
		
		
		likeButton.find('> span').text('...');
		
		
		jQuery.post(cmsms_script.ajaxurl, data, function(response) {	
			likeButton.find('> span').text(response);
			
			
			likeButton.addClass('active');
			
			
			likeButton.attr( { 
				onclick : 	'return false;' 
			} );
		} );
	}
	
	
	return false;
}



/* Correct OS & Browser Check */
var ua = navigator.userAgent, 
	checker = { 
		os : { 
			iphone : 		ua.match(/iPhone/), 
			ipod : 			ua.match(/iPod/), 
			ipad : 			ua.match(/iPad/), 
			blackberry : 	ua.match(/BlackBerry/), 
			android : 		ua.match(/(Android|Linux armv6l|Linux armv7l)/), 
			linux : 		ua.match(/Linux/), 
			win : 			ua.match(/Windows/), 
			mac : 			ua.match(/Macintosh/) 
		}, 
		ua : { 
			ie : 		ua.match(/MSIE/), 
			ie6 : 		ua.match(/MSIE 6.0/), 
			ie7 : 		ua.match(/MSIE 7.0/), 
			ie8 : 		ua.match(/MSIE 8.0/), 
			ie9 : 		ua.match(/MSIE 9.0/), 
			ie10 : 		ua.match(/MSIE 10.0/), 
			ie11 : 		ua.match(/MSIE 11.0/), 
			opera : 	ua.match(/Opera/), 
			firefox : 	ua.match(/Firefox/), 
			chrome : 	ua.match(/Chrome/), 
			safari : 	ua.match(/(Safari|BlackBerry)/) 
		} 
	};



/* Correct Image Load Check */
function isImageOk(img) { 
	if (!img.complete) { 
		return false;
	}
	
	
	if (typeof img.naturalWidth !== undefined && img.naturalWidth === 0) { 
		return 'stop';
	}
	
	
	return true;
}



/* Check Whether the Numbers are Approximately Equal */
function checkN(a, b, x) { 
    if ((a > b && a - x <= b) || (b > a && b - x <= a)){
        return true;
    } else {
        return false;
    }
}



/* Uniq ID */
function uniqID() { 
  return Math.round(new Date().getTime() + (Math.random() * 1000000));
}

