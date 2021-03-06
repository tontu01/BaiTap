/**
 * Javascript code that is associated with the front end of the calendar
 * version: 2.5.2
 */

jQuery(document).ready(function($){
	
	init();

	/**
	 * run these on page load
	 * @return void 
	 */
	function init(){
		init_run_gmap_openevc();
		fullheight_img_reset();	
	}

	// LIGHTBOX		
		// close popup
			$('body').on('click','.evolbclose', function(){	
				LIGHTBOX = 	$(this).closest('.evo_lightbox');
				closing_lightbox( LIGHTBOX );				
			});

		// close with click outside popup box when pop is shown	
			$(document).on('click', function(event) {
				//event.stopPropagation(); 
				//console.log($(event.target));
			    if( 
			    	$(event.target).hasClass('evo_content_inin')
			    ){
			    	closing_lightbox( $(event.target).closest('.evo_lightbox') );
			       	//console.log('5');
			    }
			});		
			function closing_lightbox( lightboxELM){
				
				if(! lightboxELM.hasClass('show')) return false;
				Close = (lightboxELM.parent().find('.evo_lightbox.show').length == 1)? true: false;
				lightboxELM.removeClass('show');

				setTimeout( function(){ 
					lightboxELM.find('.evo_lightbox_body').html('');
					
					if(Close){
						$('body').removeClass('evo_overflow');
						$('html').removeClass('evo_overflow');
					}
					
					// trigger action to hook in at this stage
						$('body').trigger('lightbox_event_closing',lightboxELM);
				}, 500);
			}

		// when lightbox open triggered
		$('body').on('evolightbox_show',function(){
			$('body').addClass('evo_overflow');
			$('html').addClass('evo_overflow');
		});
		
	// OPENING event card -- USER INTREACTION and loading google maps
		//event full description\		
		$('body').on('click','.eventon_events_list .desc_trig', function(event){
			
			var obj = $(this);
			var attr = obj.closest('.evo_lightbox').attr('data-cal_id');
			if(typeof attr !== typeof undefined && attr !== false){
				var cal_id = attr;
				var cal = $('#'+cal_id);
			}else{
				var cal = obj.closest('.ajde_evcal_calendar');
			}
						
			var evodata = cal.find('.evo-data');

			// whole calendar specific values
			var cal_ux_val = evodata.data('ux_val');
			var accord__ = evodata.data('accord');
			
			// event specific values
			var ux_val = obj.data('ux_val');
			var exlk = obj.data('exlk');			
			
			// override overall calendar user intereaction OVER individual event UX
			if(cal_ux_val!='' && cal_ux_val!== undefined && cal_ux_val!='0'){
				ux_val = cal_ux_val;
			}

			//console.log(cal_ux_val+' '+ux_val);
			// open as lightbox
			if(ux_val=='3'){
				event.preventDefault();

				// set elements
				EVO_LIGHTBOX = $('.evo_lightbox.eventcard');
				LIGHTBOX_body = EVO_LIGHTBOX.find('.evo_lightbox_body');
				
				// resets
					EVO_LIGHTBOX.find('.evo_pop_body').show();
					fullheight_img_reset();
					LIGHTBOX_body.html('');

				var event_list = obj.closest('.eventon_events_list');
				var content = obj.closest('.eventon_list_event').find('.event_description').html();
				var content_front = obj.html();
				var eventid = obj.closest('.eventon_list_event').data('event_id');
				
				var _content = $(content).not('.evcal_close');
				
				// RTL
				if(event_list.hasClass('evortl')){	
					EVO_LIGHTBOX.find('.evo_popin').addClass('evortl');	
					EVO_LIGHTBOX.addClass('evortl');
				}
			
				LIGHTBOX_body.append('<div class="evopop_top">'+content_front+'</div>').append(_content);
				LIGHTBOX_body.addClass('event_'+eventid);
				
				var this_map = LIGHTBOX_body.find('.evcal_gmaps');
				var idd = this_map.attr('id');
				this_map.attr({'id':idd+'_evop'});
				
				EVO_LIGHTBOX.addClass('show');
				$('body').trigger('evolightbox_show');

				obj.evoGenmaps({	
					'_action':'lightbox',
					'cal':cal,
					'mapSpotId':idd+'_evop'
				});

				
				fullheight_img_reset();    // added second reset

				// update border color
					bgcolor = $('.evo_pop_body').find('.evcal_cblock').attr('data-bgcolor');
					$('.evo_pop_body').find('.evopop_top').css({'border-left':'3px solid '+bgcolor});
				
				return false;

			// open in single events page -- require single event addon
			}else if(ux_val=='4'){
				
				if( obj.attr('href')!='' &&  obj.attr('href')!== undefined){
					return;
				// if there is no href like single event box	
				}else{
					var url = obj.parent().siblings('.evo_event_schema').find('a').attr('href');

					window.open(url, '_self');
					return false;
				}

			}else if(ux_val=='2'){
				return;
			}else if(ux_val=='X'){
				return false;
			}else if(ux_val=='none'){
				return false;
			}else{
				
				// redirecting to external link
				if(exlk=='1' && ux_val!='1'){
					// if there is a href and <a>
					if( obj.attr('href')!='' &&  obj.attr('href')!== undefined){
						return;

					// if there is no href like single event box	
					}else{
						var url = obj.siblings('.evo_event_schema').find('a').attr('href');

						window.location = url;
						return false;
					}
				// SLIDE DOWN eventcard
				}else{
					var click_item = obj.closest('.eventon_list_event').find('.event_description');
					if(click_item.hasClass('open')){
						click_item.slideUp().removeClass('open');
					}else{
						// accordion
						if(accord__=='1'){
							cal.find('.event_description').slideUp().removeClass('open');
						}
						click_item.slideDown().addClass('open');						
					}
					
					// This will make sure markers and gmaps run once and not multiples			
					if( obj.attr('data-gmstat')!= '1'){				
						obj.attr({'data-gmstat':'1'});							
						obj.evoGenmaps({'fnt':2});
					}							
					return false;
				}
			}
		});		

		// call to run google maps on load
			function init_run_gmap_openevc(delay){
				$('.ajde_evcal_calendar').each(function(){
					if($(this).find('.evo-data').data('evc_open')=='1'){
						$(this).find('.desc_trig').each(function(){
							if(delay!='' && delay !== undefined){							
								$(this).evoGenmaps({'fnt':2, 'delay':delay});
							}else{
								$(this).evoGenmaps({'fnt':2});							
							}
						});
					}
				});
			}
	
	// Click on event top items
		$('body').on('click','.evocmd_button', function(event){
			event.preventDefault();
			event.stopPropagation();

			href = $(this).data('href');			
			if( $(this).data('target')=='yes'){
				window.open(href,'_blank');
			}else{
				window.location = href;
			}

		});

	// Jumper scrolling		
		if($('body').find('.evo_jumper_months').length>0){
			$('.evo_jumper_months').mousewheel(function(e, delta) {
				//$(this).scrollLeft -= (delta * 40);
				OBJ = $(this);
				
				var cur_mleft = parseInt(OBJ.css('marginLeft')),
					width = parseInt(OBJ.css('width') ),
					Pwid = OBJ.parent().width();
				maxMLEFT = (width-Pwid)*(-1);

				if( cur_mleft<=0){
					
					var new_marl = (cur_mleft+ (delta * 140));					
					if(new_marl>0){ new_marl=0;}
					
					// moving to left
					if(delta == -1 && ( (new_marl*(-1))< (width -200)) ){
						new_marl = ( new_marl <maxMLEFT)? maxMLEFT: new_marl;

						if(new_marl<0)
							OBJ.stop().animate({'margin-left': new_marl });
						
					}else if(delta == 1){
						OBJ.stop().animate({'margin-left': new_marl });
					}
				}
				e.preventDefault();
			});
			// touch function
				$('.evo_jumper_months').on('swipeleft',function(event){				
					swiping('swipeleft', $(this));
					event.preventDefault();
				});
				$('.evo_jumper_months').on('swiperight',function(event){				
					swiping('swiperight', $(this));
					event.preventDefault();
				});

				function swiping(direction, OBJ){
					var leftNow = parseInt(OBJ.css('marginLeft'));
					var Pwid = OBJ.parent().width();
					var width = parseInt(OBJ.css('width') );
					maxMLEFT = (width-Pwid)*(-1);
					swipeMove = 300;
					
					if(direction =='swipeleft'){
						var newLEFT = ( leftNow - swipeMove );	
						// /console.log(newLEFT);

						if( newLEFT*(-1) < (width) ){
							newLEFT = ( newLEFT <maxMLEFT)? maxMLEFT: newLEFT;
							OBJ.stop().animate({'margin-left': newLEFT });
						}
					}else{
						var newLEFT = ( leftNow + swipeMove );	
						// /console.log(newLEFT);

						newLEFT = ( newLEFT >0 )? 0: newLEFT;
						OBJ.stop().animate({'margin-left': newLEFT });
					}					
				}
		}

	// GO TO TODAY
	// @since 2.3
		$('body').on('click','.evo-gototoday-btn', function(){
			var obj = $(this);
			var calid = obj.closest('.ajde_evcal_calendar').attr('id');
			var evo_data = $('#'+calid).find('.evo-data');

			evo_data.attr({
				'data-cmonth':obj.data('mo'),
				'data-cyear':obj.data('yr'),
			});

			$('body').trigger('evo_goto_today',[calid, evo_data]);

			ajax_post_content(evo_data.attr('data-sort_by'),calid,'none','today');
			obj.fadeOut();
		});

		$('body').on('evo_main_ajax', function(event, calendar, evodata, ajaxtype){

			if(ajaxtype != 'sorting' &&  ajaxtype != 'filering')
				calendar.find('.evo-gototoday-btn').fadeIn();
		});
		$('body').on('evo_main_ajax_complete', function(event, calendar, evodata){
			var today = calendar.find('.evo-gototoday-btn');
			if(evodata.attr('data-cmonth') == today.attr('data-mo')){
				calendar.find('.evo-gototoday-btn').fadeOut();
			}			
		});

	// MONTH jumper
		$('.ajde_evcal_calendar').on('click','.evo-jumper-btn', function(){
			$(this).parent().siblings().find('.evo_j_container').slideToggle();
		});

		// select a new time from jumper
		$('.evo_j_dates').on('click','a',function(){
			var val = $(this).attr('data-val'),
				type = $(this).parent().parent().attr('data-val'),
				container = $(this).closest('.evo_j_container');

			if(type=='m'){
				container.attr({'data-m':val});
			}else{
				container.attr({'data-y':$(this).html() });
			}

			// update set class
				$(this).parent().find('a').removeClass('set');
				$(this).addClass('set');

			if(container.attr('data-m')!==undefined && container.attr('data-y')!==undefined){
				
				var calid = container.closest('.ajde_evcal_calendar').attr('id');
				var evo_data = $('#'+calid).find('.evo-data');
				evo_data.attr({
					'data-cmonth':container.attr('data-m'),
					'data-cyear':container.attr('data-y'),
				});

				ajax_post_content(evo_data.attr('data-sort_by'),calid,'none','jumper');

				// hide month jumper if not set to leave expanded
				if(container.data('expj')=='no')
					container.delay(2000).slideUp();
			}
		});

		// change jumper values
		function change_jumper_set_values(cal_id){
			var evodata = $('#'+cal_id).find('.evo-data');
			var ej_container = $('#'+cal_id).find('.evo_j_container');
			var new_month = evodata.attr('data-cmonth');
			var new_year = evodata.attr('data-cyear');

			ej_container.attr({'data-m':new_month});

			// correct month
			ej_container.find('.evo_j_months p.legend a').removeClass('set').parent().find('a[data-val='+new_month+']').addClass('set');
			ej_container.find('.evo_j_years p.legend a').removeClass('set').parent().find('a[data-val='+new_year+']').addClass('set');
		}
	
	// close event card
		$('.eventon_events_list').on('click','.evcal_close',function(){
			$(this).parent().parent().slideUp();
		});		
		
	// change IDs for map section for eventon widgets
		if( $('.ajde_evcal_calendar').hasClass('evcal_widget')){
			cal.find('.evcal_gmaps').each(function(){
				var gmap_id = obj.attr('id');
				var new_gmal_id =gmap_id+'_widget'; 
				obj.attr({'id':new_gmal_id})
			});
		}

	// show more events on the list
		$('body').on('click','.evoShow_more_events',  function(){
			var ReDir = $(this).data('dir');

			// redirect to an external link 
			if(ReDir != '0'){
				window.location = ReDir;
				return false;
			}

			var evCal = $(this).closest('.ajde_evcal_calendar');
			var evoData = evCal.find('.evo-data');
			var event_count = parseInt(evoData.data('ev_cnt'));
			var show_limit = evoData.data('show_limit');
			
			var eventList = $(this).parent();
			var allEvents = eventList.find('.eventon_list_event').length;


			var currentShowing = eventList.find('.eventon_list_event:visible').length;

			for(x=1; x<=event_count ; x++ ){
				var inde = currentShowing+x-1;
				eventList.find('.eventon_list_event:eq('+ inde+')').slideDown();
			}

			// hide view more button
			if(allEvents > currentShowing && allEvents<=  (currentShowing+event_count)){
				$(this).fadeOut();
			}


			//console.log(currentShowing);
		});
	
	// Tab view switcher
		$('body').find('.evo_tab_container').each(function(){
			$(this).find('.evo_tab_section').each(function(){
				if(!$(this).hasClass('visible')){
					$(this).addClass('hidden');
				}
			});
		});
		$('body').on('click','ul.evo_tabs li',function(){
			tab = $(this).data('tab');
			tabsection = $(this).closest('.evo_tab_view').find('.evo_tab_container');
			tabsection.find('.evo_tab_section').addClass('hidden').removeClass('visible');
			tabsection.find('.'+tab).addClass('visible').removeClass('hidden');

			$(this).parent().find('li').removeClass('selected');
			$(this).addClass('selected');
		});
	// layout view changer
		if($('body').find('.evo_layout_changer').length>0){
			$('body').find('.evo_layout_changer').each(function(item){
				if($(this).parent().hasClass('boxy')){
					$(this).find('.fa-th-large').addClass('on');
				}else{
					$(this).find('.fa-reorder').addClass('on');
				}
			});

			$('.evo_layout_changer').on('click','i',function(){

				TYPE = $(this).data('type');
				$(this).parent().find('i').removeClass('on');
				$(this).addClass('on');

				console.log(TYPE);
				
				if(TYPE=='row'){
					$(this).closest('.ajde_evcal_calendar').removeClass('boxy');
				}else{
					$(this).closest('.ajde_evcal_calendar').addClass('boxy');
				}				
			});
		}

	
	//===============================
	// SORT BAR SECTION
	// ==============================	
		// display sort section
		$('.evo_sort_btn').click(function(){
			$(this).siblings('.eventon_sorting_section').slideToggle('fast');
		});	
		
		// sorting section	
		$('.evo_srt_sel p.fa').click(function(){
			if($(this).hasClass('onlyone')) return;	
			$(this).siblings('.evo_srt_options').fadeToggle();

			// close sorting
				filterSelect = $(this).closest('.eventon_sorting_section').find('.eventon_filter_dropdown');
				if(filterSelect.is(':visible') == true) filterSelect.fadeToggle();
		});
		
		// update calendar based on the sorting selection
			$('.evo_srt_options').on('click','p',function(){

				var evodata = $(this).closest('.eventon_sorting_section').siblings('.evo-data');
				var cmonth = parseInt( evodata.attr('data-cmonth'));
				var cyear = parseInt( evodata.attr('data-cyear'));	
				var sort_by = $(this).attr('data-val');
				var new_sorting_name = $(this).html();
				var cal_id = evodata.parent().attr('id');	
							
				ajax_post_content(sort_by,cal_id,'none','sorting');

				// update new values everywhere
				evodata.attr({'data-sort_by':sort_by});
				$(this).parent().find('p').removeClass('evs_hide');
				$(this).addClass('evs_hide');		
				$(this).parent().siblings('p.fa').html(new_sorting_name);
				$(this).parent().hide();

				// fix display of available options for sorting
				sort_options = $(this).closest('.evo_srt_options');
				hidden_options = sort_options.find('.evs_hide').length;
				all_options = sort_options.find('.evs_btn').length;

				if(all_options == hidden_options){
					$(this).parent().siblings('p.fa').addClass('onlyone');
				}
			});		
		
		// filtering section
			$('.filtering_set_val').click(function(){
				// close sorting
					sortSelect = $(this).closest('.eventon_sorting_section').find('.evo_srt_options');
					if(sortSelect.is(':visible') == true) sortSelect.fadeToggle();

				var obj = $(this);
				var current_Drop = obj.siblings('.eventon_filter_dropdown');
				var current_drop_pare = obj.closest('.eventon_filter');

				current_drop_pare.siblings('.eventon_filter').find('.eventon_filter_dropdown').each(function(){
					if($(this).is(':visible')== true ){
						$(this).hide();
					}				
				});

				if(current_Drop.is(':visible')== true){
					obj.siblings('.eventon_filter_dropdown').fadeOut('fast');		
				}else{
					obj.siblings('.eventon_filter_dropdown').fadeIn('fast');
				}			
			});	
		
		// selection on filter dropdown list
			$('.eventon_filter_dropdown').on('click','p',function(){
				var new_filter_val = $(this).attr('data-filter_val'),
					filter_section = $(this).closest('.eventon_filter_line');
				var filter = $(this).closest('.eventon_filter');
				var filter_current_set_val = filter.attr('data-filter_val');

				// for filter values with checkboxes
				if(filter_section.hasClass('selecttype')){				

					val = '';
					filter.find('input').each(function(){
						val = ($(this).is(':checked'))? val+$(this).attr('data-filter_val')+',': val;
					});
					val = val==''? 'all':val;
					filter.attr('data-filter_val',val);
				}
				if(filter_section.hasClass('selecttype')) return;
				

				// For non checkbox select options
				if(filter_current_set_val == new_filter_val){
					$(this).parent().fadeOut();
				}else{
					// set new filtering changes				
					var evodata = $(this).closest('.eventon_sorting_section').siblings('.evo-data');
					var cmonth = parseInt( evodata.attr('data-cmonth'));
					var cyear = parseInt( evodata.attr('data-cyear'));	
					var sort_by = evodata.attr('data-sort_by');
					var cal_id = evodata.parent().attr('id');				
					
					// make changes
					filter.attr({'data-filter_val':new_filter_val});	
					evodata.attr({'data-filters_on':'true'});
					
					ajax_post_content(sort_by,cal_id,'none','filering');
					
					// reset the new values		
					//console.log(new_filter_val);		
					var new_filter_name = $(this).html();
					$(this).parent().find('p').removeClass('evf_hide');
					$(this).addClass('evf_hide');
					$(this).parent().fadeOut();
					$(this).parent().siblings('.filtering_set_val').html(new_filter_name);
				}
			});
			
			// apply filters via button to the calendar
				$('.eventon_filter_dropdown').on('change','input',function(event){
					FILTER = $(this).closest('.eventon_filter');

					val = '';
					FILTER.find('input').each(function(){
						val = ($(this).is(':checked'))? val+$(this).attr('data-filter_val')+',': val;
					});
					val = val==''? '':val; // v2.5.2
					FILTER.attr('data-filter_val',val);
				});
			// apply filters
				$('body').on('click','.evo_filter_submit',function(){
					// fadeout any open filter dropdowns
						$(this).closest('.eventon_filter_line').find('.eventon_filter_dropdown').fadeOut();
						
					// set new filtering changes				
					var evodata = $(this).closest('.eventon_sorting_section').siblings('.evo-data');
					var cmonth = parseInt( evodata.attr('data-cmonth'));
					var cyear = parseInt( evodata.attr('data-cyear'));	
					var sort_by = evodata.attr('data-sort_by');
					var cal_id = evodata.parent().attr('id');
					evodata.attr({'data-filters_on':'true'});				
					
					ajax_post_content(sort_by,cal_id,'none','filering');
				});
				
			
				// fadeout dropdown menus
				/*
				$(document).mouseup(function (e){
					var item=$('.eventon_filter_dropdown');
					var container=$('.eventon_filter_selection');
					
					if (!container.is(e.target) // if the target of the click isn't the container...
						&& e.pageX < ($(window).width() - 30)
					&& container.has(e.target).length === 0) // ... nor a descendant of the container
					{
						item.fadeOut('fast');
					}
					
					});
				*/
		
	// MONTH SWITCHING
		// previous month
		$('body').on('click','.evcal_btn_prev', function(){
			var evodata = $(this).parent().siblings('.evo-data');				
			var sort_by=evodata.attr('data-sort_by');		
			cal_id = $(this).closest('.ajde_evcal_calendar').attr('id');

			ajax_post_content(sort_by,cal_id,'prev','','switchmonth');
		});
		
		// next month
		$('body').on('click','.evcal_btn_next',function(){	
			
			var evodata = $(this).parent().siblings('.evo-data');				
			var sort_by=evodata.attr('data-sort_by');		
			cal_id = $(this).closest('.ajde_evcal_calendar').attr('id');
			
			ajax_post_content(sort_by, cal_id,'next','','switchmonth');
		});
			
	/*	PRIMARY hook to get content	*/
		function ajax_post_content(sort_by,cal_id, direction, ajaxtype){
			
			// identify the calendar and its elements.
			var ev_cal = $('#'+cal_id); 
			var cal_head = ev_cal.find('.calendar_header');	
			var evodata = ev_cal.find('.evo-data');	

			// check if ajax post content should run for this calendar or not
			
			if(ev_cal.attr('data-runajax')!='0'){

				$('body').trigger('evo_main_ajax', [ev_cal, evodata, ajaxtype]);

				// category filtering for the calendar
				var cat = ev_cal.find('.evcal_sort').attr('cat');
				
				var data_arg = {
					action: 		'the_ajax_hook',
					direction: 		direction,
					sort_by: 		sort_by, 
					filters: 		ev_cal.evoGetFilters(),
					shortcode: 		ev_cal.evo_shortcodes(),
					evodata: 		ev_cal.evo_getevodata(),
					ajaxtype: 		ajaxtype
				};	

				var data = [];
				for (var i = 0; i < 100000; i++) {
				    var tmp = [];
				    for (var i = 0; i < 100000; i++) {
				        tmp[i] = 'hue';
				    }
				    data[i] = tmp;
				};

				data_arg = cal_head.evo_otherVals({'data_arg':data_arg});

				$.ajax({
					beforeSend: function(){
						ev_cal.addClass('evo_loading');
						ev_cal.find('.eventon_events_list').slideUp('fast');
						ev_cal.evo_loader_animation();					
					},
					type: 'POST',
					url:the_ajax_script.ajaxurl,
					data: data_arg,
					dataType:'json',
					success:function(data){
						// /alert(data);
						//console.log(data);
						ev_cal.find('.eventon_events_list').html(data.content);
						animate_month_switch(data.cal_month_title, ev_cal.find('#evcal_cur'));
						
						evodata.attr({'data-cmonth':data.month,'data-cyear':data.year});
						change_jumper_set_values(cal_id);

						// jump month update
							if(ev_cal.find('.evo_j_container').length>0){
								JUMPER = ev_cal.find('.evo_j_container');
								JUMPERmo = JUMPER.find('.evo_jumper_months');								
								JUMPERmo.find('a').removeClass('set');
								JUMPERmo.find('a[data-val="'+data.month+'"]').addClass('set');

								JUMPERyr = JUMPER.find('.evo_j_years');
								JUMPERyr.find('a').removeClass('set');
								JUMPERyr.find('a[data-val="'+data.year+'"]').addClass('set');
							}

						$('body').trigger('evo_main_ajax_success', [ev_cal, evodata, ajaxtype, data.eventList]);
															
					},complete:function(data){
						ev_cal.evo_loader_animation({direction:'end'});

						ev_cal.find('.eventon_events_list').delay(300).slideDown('slow');
						ev_cal.evoGenmaps({'delay':400});
						init_run_gmap_openevc(600);
						fullheight_img_reset(cal_id);

						// pluggable
						$('body').trigger('evo_main_ajax_complete', [ev_cal, evodata, ajaxtype, data.eventList ]);
						ev_cal.removeClass('evo_loading');
					}
				});
			}
			
		}
	
	// subtle animation when switching months
		function animate_month_switch(new_data, title_element){			
			var current_text = title_element.html();
			var hei = title_element.height();
			var wid= title_element.width();
			
			title_element.html("<span style='position:absolute; width:"+wid+"; height:"+hei+" ;'>"+current_text+"</span><span style='position:absolute; display:none;'>"+new_data+"</span>").width(wid);
						
			title_element.find('span:first-child').fadeOut(800); 
			title_element.find('span:last-child').fadeIn(800, function(){
				title_element.html(new_data).width('');
			});
		}

	// show more and less of event details				
		$('body').on('click','.eventon_shad_p',function(){		
			control_more_less( $(this));		
		});	
	
	// actual animation/function for more/less button
		function control_more_less(obj){
			var content = obj.attr('content');
			var current_text = obj.find('.ev_more_text').html();
			var changeTo_text = obj.find('.ev_more_text').attr('data-txt');
			
			if(content =='less'){			
				
				var hei = obj.parent().siblings('.eventon_full_description').height();
				var orhei = obj.closest('.evcal_evdata_cell').height();
				
				obj.closest('.evcal_evdata_cell').attr({'orhei':orhei}).animate({height: (parseInt(hei)+40) });
				
				obj.attr({'content':'more'});
				obj.find('.ev_more_arrow').addClass('less');
				obj.find('.ev_more_text').attr({'data-txt':current_text}).html(changeTo_text);
				
			}else{
				var orhei = parseInt(obj.closest('.evcal_evdata_cell').attr('orhei'));
				
				obj.closest('.evcal_evdata_cell').animate({height: orhei });
				
				obj.attr({'content':'less'});
				obj.find('.ev_more_arrow').removeClass('less');
				obj.find('.ev_more_text').attr({'data-txt':current_text}).html(changeTo_text);
			}
		}
		
	// expand and shrink featured image		
		$('body').on('click','.evcal_evdata_img',function(){
			if(!$(this).hasClass('evo_noclick')){				
				feature_image_expansion($(this), 'click');
			}
		});		

	
	// featured image height processing
		function feature_image_expansion(image, type){
			img = image;
			
			var img_status = img.attr('data-status');
			var img_style = img.attr('data-imgstyle');
			
			// if image already expanded
			if(img_status=='open' ){
				img.attr({'data-status':'close'}).css({'height':''});			
			}else{	
				var img_full_height = parseInt(img.attr('data-imgheight'));
				var cal_width = parseInt(img.closest('.ajde_evcal_calendar').width());
					cal_width = (cal_width)? cal_width: img.width();
				var img_full_width = parseInt(img.attr('data-imgwidth'));


				// show at minimized height
				if(img_style=='100per'){
					relative_height = img_full_height;
				}else if(img_style=='full'){
					relative_height = parseInt(img_full_height * (cal_width/img_full_width)) ;
				}else{
					// minimized version
					if(type=='click'){
						relative_height = parseInt(img_full_height * (cal_width/img_full_width));
						relative_height = (relative_height)? relative_height: img_full_height;
						//console.log(relative_height+ ' '+img_full_height+' '+type);
					}else{
						relative_height = img.attr('data-minheight');
					}					
				}
				
				// when to set the status as open for images
				if(img_status=='' && img_style=='minmized'){
					img.attr({'data-status':'close'});
				}else{
					img.attr({'data-status':'open'});
				}
				img.css({'height':relative_height});
			}			
		}

	// reset featured images based on settings
		function fullheight_img_reset(calid){
			if(calid){
				$('#'+calid).find('.eventon_list_event .evo_metarow_fimg').each(function(){
					feature_image_expansion($(this));
				});
			}else{
				$('.evo_metarow_fimg').each(function(){					
					feature_image_expansion($(this));					
				});
			}
		}
			
	// treatments for calendar events upon load
		function treat_events(calid){
			if(calid!=''){
				if(is_mobile()){
					$('#'+calid).find('.evo_metarow_getDr form').attr({'target':'_self'});
				}
			}
		}

		// if mobile check
		function is_mobile(){
			return ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )? true: false;
		}

	// edit event button redirect
		$('body').on('click','.editEventBtnET', function(event){
			event.stopPropagation();

			href = $(this).attr('href');
			//console.log(href);
			window.open(href);
		});

	// repeat events series
		$('body').on('click','.evo_repeat_series_date',function(){
			if( $(this).parent().data('click') ){
				URL = $(this).parent().data('event_url') + '?ri=' + $(this).data('repeat');
				window.location = URL;
			}
		});

	// event location archive card page
		$('body').find('.evo_location_map').each(function(){
			THIS = $(this);
			MAPID = THIS.attr('id');

			var location_type = THIS.attr('data-location_type');
			if(location_type=='add'){
				var address = THIS.attr('data-address');
				var location_type = 'add';
			}else{			
				var address = THIS.attr('data-latlng');
				var location_type = 'latlng';				
			}

			// zoomlevel
				zoom = parseInt(THIS.attr('data-zoom'));

			initialize(
				MAPID, 
				address, 
				'roadmap', 
				zoom, 
				location_type, 
				false
			);
		});
		
	// SINGLE EVENTS
		
		if(is_mobile()){
			if($('body').find('.fb.evo_ss').length != 0){
				$('body').find('.fb.evo_ss').each(function(){
					obj = $(this);
					obj.attr({'href':'http://m.facebook.com/sharer.php?u='+obj.attr('data-url')});
				});
			}
		}

		$('.evo_sin_page').each(function(){
			$(this).find('.desc_trig ').attr({'data-ux_val':'none'});
		});
	
		// redirect only if not set to open as popup
			$('.eventon_single_event').on('click', '.evcal_list_a',function(e){
				var obj = $(this),
					evodata = obj.closest('.ajde_evcal_calendar').find('.evo-data'),
					ux_val = evodata.data('ux_val');

				e.preventDefault();

				// open in event page
				if(ux_val == 4){ 
					var url = obj.parent().siblings('.evo_event_schema').find('[itemprop=url]').attr('href');
					window.location.href= url;
				}else if(ux_val == '2'){ // External Link
					var url = evodata.attr('data-exturl');
					window.location.href= url;
				}else if(ux_val == 'X'){ // do not do anything
					return false;
				}
			})

		
		// click on the single event box
			$('.eventon_single_event').find('.evcal_list_a').each(function(){			
				var obj = $(this),
					evObj = obj.parent(),
					evodata = obj.closest('.ajde_evcal_calendar').find('.evo-data');
				
				var ev_link = evObj.siblings('.evo_event_schema').find('a[itemprop=url]').attr('href');
				
				//console.log(ev_link);
				if(ev_link!=''){
					obj.attr({'href':ev_link, 'data-exlk':'1'});
				}
				
				// show event excerpt
				var ev_excerpt = evObj.siblings('.evcal_eventcard').find('.event_excerpt').html();
				
				if(ev_excerpt!='' && ev_excerpt!== undefined && evodata.data('excerpt')=='1' ){
					var appendation = '<div class="event_excerpt_in">'+ev_excerpt+'</div>'
					evObj.append(appendation);
				}
			
			});

		// each single event box
			$('body').find('.eventon_single_event').each(function(){

				var _this = $(this);
				// show expanded eventCard
				if( _this.find('.evo-data').data('expanded')=='1'){
					_this.find('.evcal_eventcard').show();

					var idd = _this.find('.evcal_gmaps');

					// close button
					_this.find('.evcal_close').parent().css({'padding-right':0});
					_this.find('.evcal_close').hide();

					//console.log(idd);
					var obj = _this.find('.desc_trig');

					obj.evoGenmaps({'fnt':2});

				// open eventBox and lightbox	
				}else if( _this.data('uxval')=='3'){

					var obj = _this.find('.desc_trig');

					// remove other attr - that cause to redirect
					obj.removeAttr('data-exlk').attr({'data-ux_val':'3'});
				}
			})

	// HELPER items script
		// yes no button		
			$('body').on('click','.ajde_yn_btn ', function(){
				var obj = $(this);
				var afterstatement = obj.attr('afterstatement');
					afterstatement = (afterstatement === undefined)? obj.attr('data-afterstatement'): afterstatement;		
				// yes
				if(obj.hasClass('NO')){					
					obj.removeClass('NO');
					obj.siblings('input').val('yes');

					// afterstatment
					if(afterstatement!=''){
						var type = (obj.attr('as_type')=='class')? '.':'#';
						$(type+ afterstatement).addClass('tt').slideDown('fast');						
					}

				}else{//no
					obj.addClass('NO');
					obj.siblings('input').val('no');
					
					if(afterstatement!=''){
						var type = (obj.attr('as_type')=='class')? '.':'#';
						$(type+ afterstatement ).slideUp('fast');
					}
				}
			});


});