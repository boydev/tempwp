function addSliderJ(number)
{
	jQuery('.Table_Data_rich_web1').css('display','none');
	jQuery('.JAddSlider').addClass('JAddSliderAnim');
	jQuery('.Table_Data_rich_web2').css('display','block');
	jQuery('.JSaveSlider').addClass('JSaveSliderAnim');
	jQuery('.JCanselSlider').addClass('JCanselSliderAnim');
	jQuery('.rich_web_Slider_ID').html('[Rich_Web_Slider id="'+number+'"]');
	jQuery('.JMBSL').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Slider id="'+number+'"]&apos;);?&gt;');
	Rich_Web_Slider_Editor();
	
}
function canselSliderJ() { location.reload(); }

function rich_web_Video_Src_Clicked()
{
	var count = 0;
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_videoSrc_1').val();
		if(code.indexOf('https://www.youtube.com/')>0)
		{
			if(code.indexOf('list')>0 || code.indexOf('index')>0)
			{
				if(code.indexOf('embed')>0)
				{
					var Rich_Web_Codes1=code.split('[embed]');
					var Rich_Web_Codes2=Rich_Web_Codes1[1].split('[/embed]');
					var Rich_Web_Codes3=Rich_Web_Codes2[0].split('www.youtube.com/watch?v=');
					if(Rich_Web_Codes3[1].length != 11) { Rich_Web_Codes3[1] = Rich_Web_Codes3[1].substr(0,11); }

					jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Codes3[1]);
					jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Codes3[1]+'/mqdefault.jpg');
					jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Codes3[1]);

					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
				}
				else
				{
					var Rich_Web_Codes1 = code.split('<a href="https://www.youtube.com/');
					var Rich_Web_Codes2= Rich_Web_Codes1[1].split("=");
					var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('&');

					jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Code_Src[0]);
					jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Code_Src[0]+'/mqdefault.jpg');
					jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Code_Src[0]);
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
				}
			}
			else if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]');
				var Rich_Web_Codes2=Rich_Web_Codes1[1].split('[/embed]');
				if(Rich_Web_Codes2[0].indexOf('watch?')>0)
				{
					var Rich_Web_Codes3=Rich_Web_Codes2[0].split('=');
					
					jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Codes3[1]);
					jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Codes3[1]+'/mqdefault.jpg');
					jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Codes3[1]);
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
				}
				else
				{
					var Rich_Web_Code_Src=Rich_Web_Codes2[0];
					var Rich_Web_Im_Src=Rich_Web_Code_Src.split('embed/');

					jQuery('#rich_web_videoSrc_2').val(Rich_Web_Code_Src);
					jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Im_Src[1]+'/mqdefault.jpg');
					jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Im_Src[1]);
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
				}
			}
			else
			{
				var Rich_Web_Codes1 = code.split('<a href="https://www.youtube.com/');
				var Rich_Web_Codes2= Rich_Web_Codes1[1].split('=');
				if(Rich_Web_Codes2.length >= 5)
				{
					var Rich_Web_Code_Src = Rich_Web_Codes2[3].split('&');
				}
				else
				{
					var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('">https://');
				}
				jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Code_Src[0]);
				jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Code_Src[0]+'/mqdefault.jpg');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
		}
		else if(code.indexOf('https://youtu.be/')>0)
		{
			if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]');
				var Rich_Web_Codes2=Rich_Web_Codes1[1].split('[/embed]');
				var Rich_Web_Codes3=Rich_Web_Codes2[0].split('youtu.be/');
				if(Rich_Web_Codes3[1].length != 11) { Rich_Web_Codes3[1] = Rich_Web_Codes3[1].substr(0,11); }

				jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Codes3[1]);
				jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Codes3[1]+'/mqdefault.jpg');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Codes3[1]);

				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
			else
			{
				var Rich_Web_Codes1 = code.split('<a href="https://youtu.be/');
				var Rich_Web_Code_Src = Rich_Web_Code_Src[1].split('">https://');
				if(Rich_Web_Code_Src[0].length != 11) { Rich_Web_Code_Src[0] = Rich_Web_Code_Src[0].substr(0,11); }
				jQuery('#rich_web_videoSrc_2').val('https://www.youtube.com/embed/'+Rich_Web_Code_Src[0]);
				jQuery('#rich_web_imgSrc_2').val('http://img.youtube.com/vi/'+Rich_Web_Code_Src[0]+'/mqdefault.jpg');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://www.youtube.com/watch?v='+Rich_Web_Code_Src[0]);

				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
		}
		else if(code.indexOf('vimeo.com')>0)
		{

			if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]https://vimeo.com/');
				var Rich_Web_Code_Src=Rich_Web_Codes1[1].split('[/embed]');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://vimeo.com/'+Rich_Web_Code_Src[0]);
				if(Rich_Web_Code_Src[0].length>9)
				{
					var Real_Rich_Web_Code_Src=Rich_Web_Code_Src[0].split('/');
					Rich_Web_Code_Src[0]=Real_Rich_Web_Code_Src[2];
				}
				jQuery('#rich_web_videoSrc_2').val('https://player.vimeo.com/video/'+Rich_Web_Code_Src[0]);
				var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_ImgSlider_Vimeo', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				foobar: 'https://player.vimeo.com/video/'+Rich_Web_Code_Src[0], // translates into $_POST['foobar'] in PHP
				};
				jQuery.post(ajaxurl, data, function(response) {

					if(count == 0){
						jQuery('#rich_web_imgSrc_2').val(response);
					}
					
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
					count++
				});
			}
			else if(code.indexOf('player')>0)
			{
				var Rich_Web_Codes1 = code.split('<a href="https://player.vimeo.com/video/');
				var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">https://');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://vimeo.com/'+Rich_Web_Code_Src[0]);
				if(Rich_Web_Code_Src[0].length>9)
				{
					var Real_Rich_Web_Code_Src=Rich_Web_Code_Src[0].split('/');
					Rich_Web_Code_Src[0]=Real_Rich_Web_Code_Src[2];
				}
				jQuery('#rich_web_videoSrc_2').val('https://player.vimeo.com/video/'+Rich_Web_Code_Src[0]);
				var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_ImgSlider_Vimeo', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				foobar: 'https://player.vimeo.com/video/'+Rich_Web_Code_Src[0], // translates into $_POST['foobar'] in PHP
				};
				jQuery.post(ajaxurl, data, function(response) {
					if(count == 0){
						jQuery('#rich_web_imgSrc_2').val(response);
					}
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
					count++
				});
			}
			else
			{
				var Rich_Web_Codes1 = code.split('<a href="https://vimeo.com/');
				var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">https://');
				jQuery('#Rich_Web_SlVid_Vid_1').val('https://vimeo.com/'+Rich_Web_Code_Src[0]);
				if(Rich_Web_Code_Src[0].length>9)
				{
					var Real_Rich_Web_Code_Src=Rich_Web_Code_Src[0].split('/');
					Rich_Web_Code_Src[0]=Real_Rich_Web_Code_Src[2];
				}
				jQuery('#rich_web_videoSrc_2').val('https://player.vimeo.com/video/'+Rich_Web_Code_Src[0]);
				var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_ImgSlider_Vimeo', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				foobar: 'https://player.vimeo.com/video/'+Rich_Web_Code_Src[0], // translates into $_POST['foobar'] in PHP
				};
				jQuery.post(ajaxurl, data, function(response) {
					if(count == 0){
						jQuery('#rich_web_imgSrc_2').val(response);
					}
					if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
					count++
				});
			}
		}
		else if(code.indexOf('.mp4')>0)
		{
			if(code.indexOf('embed')>0)
			{
				var Rich_Web_Codes1=code.split('[embed]');
				var Rich_Web_Code_Src=Rich_Web_Codes1[1].split('[/embed]');
				jQuery('#Rich_Web_SlVid_Vid_1').val(Rich_Web_Code_Src[0]);
				jQuery('#rich_web_videoSrc_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
			else if(code.indexOf('video')>0)
			{
				var Rich_Web_Codes1 = code.split('mp4="');
				var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('"]');
				jQuery('#Rich_Web_SlVid_Vid_1').val(Rich_Web_Code_Src[0]);
				jQuery('#rich_web_videoSrc_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
			else
			{
				var Rich_Web_Codes1 = code.split('<a href="');
				var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">');
				jQuery('#Rich_Web_SlVid_Vid_1').val(Rich_Web_Code_Src[0]);
				jQuery('#rich_web_videoSrc_2').val(Rich_Web_Code_Src[0]);
				if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
			}
		}
		else if(code.indexOf('vevo.com')>0)
		{
			var Rich_Web_Codes1 = code.split('<a href="');
			var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">');
			var Rich_Web_Code_Src1 = Rich_Web_Code_Src[0].split('/');
			jQuery('#rich_web_videoSrc_2').val('http://cache.vevo.com/assets/html/embed.html?video='+Rich_Web_Code_Src1[Rich_Web_Code_Src1.length-1]+'&autoplay=1');
			jQuery('#Rich_Web_SlVid_Vid_1').val('http://cache.vevo.com/assets/html/embed.html?video='+Rich_Web_Code_Src1[Rich_Web_Code_Src1.length-1]+'&autoplay=1');
			if(jQuery('#rich_web_videoSrc_2').val().length>0){ clearInterval(zInt); jQuery('#rich_web_videoSrc_1').val(''); }
		}
	},100)
}

function rich_web_Img_Src_Clicked()
{
	var zInt = setInterval(function(){
		var code = jQuery('#rich_web_imgSrc_1').val();
		if(code.indexOf('img')>0)
		{
			var s=code.split('src="');
			var src=s[1].split('"');
			jQuery('#rich_web_imgSrc_2').val(src[0]);
			if(jQuery('#rich_web_imgSrc_2').val().length>0) { jQuery('#rich_web_imgSrc_1').val(''); clearInterval(zInt); }
		}
	},100)
}
function rich_web_Res()
{
	jQuery('.JSlInput2,.JSlInputVideo2').val('');
	jQuery('#rich_web_imgSrc_2').val('');
	jQuery('.jChB').attr('checked',false);
	tinymce.get('JSliderImageDesc').setContent('');
}
function checkVideoOrNot(str){
	if(str == "" || str == undefined || str == "undefined"){
		return "";
	}else{
		return "<i class='rich_web rich_web-play'></i>";
	}
}
function rw_return_admin_html(n, title, imgSrc, vSrc, link, newTab){
	return '<tr id="tr_'+n+'"><td name="number_name_'+n+'" id="number_name_'+n+'" >'+n+'</td><td id="JAdd_Img_'+n+'"><div class="rw_admin_imgVideo">'+checkVideoOrNot(vSrc)+'<img src="'+imgSrc+'" id="JAdd_Img_Src_'+n+'" name="JAdd_Img_Src_'+n+'" style="height:60px;"></div></td><td id="JAdd_Title_'+n+'" name="JAdd_Title_'+n+'">'+title+'</td><td id="tdClone_'+n+'"><i class="jIcFileso rich_web rich_web-files-o" onclick="jambCloneId('+n+')"></i></td><td id="tdEdit_'+n+'"><i class="jIcPencil rich_web rich_web-pencil" onclick="jambEditId('+n+')"></i></td><td id="tdDelete_'+n+'"><i class="jIcDel rich_web rich_web-trash" onclick="jambDelId('+n+')"></i><input type="text" style="display:none;" class="add_title" id="JADD_Tit_'+n+'" name="JADD_Tit_'+n+'" value="'+title+'"/><input type="text" style="display:none;" class="add_description" id="JAdd_Description_'+n+'" name="JAdd_Description_'+n+'" value=""/><input type="text" style="display:none;" class="add_video" id="JAdd_video_'+n+'" name="JAdd_video_'+n+'" value="'+vSrc+'"/><input type="text" style="display:none;" class="add_img" id="JAdd_src_'+n+'" name="JAdd_src_'+n+'" value="'+imgSrc+'"/><input type="text" style="display:none" class="add_link" id="JADD_Link_'+n+'" name="JADD_Link_'+n+'" value="'+link+'"><input type="text" style="display:none;" class="NewTab" id="JAdd_NewTab_'+n+'" name="JAdd_NewTab_'+n+'" value="'+newTab+'"/></td></tr>';
		
}
function descAndCountNumber(n, desc){
	jQuery('#JAdd_Description_'+n).val(desc);
	jQuery('#JumboHidNum').val(n);
}
function rich_web_Save()
{
	var JumboHidNum = jQuery('#JumboHidNum').val();
	var JSliderImageTitle = jQuery('#JSliderImageTitle').val();
	var rich_web_imgSrc_2 = jQuery('#rich_web_imgSrc_2').val();
	var rich_web_videoSrc_2 = jQuery('#rich_web_videoSrc_2').val();
	var JSliderImageLink = jQuery('#JSliderImageLink').val();
	var JSliderImageDesc = tinymce.get('JSliderImageDesc').getContent();
	var JNewTab = jQuery('#JNewTab').prop('checked');
	var html = rw_return_admin_html(parseInt(parseInt(JumboHidNum)+1), JSliderImageTitle, rich_web_imgSrc_2, rich_web_videoSrc_2, JSliderImageLink, JNewTab);
	jQuery('.rich_web_SaveSl_Table3').append(html);
	descAndCountNumber(parseInt(parseInt(JumboHidNum)+1), JSliderImageDesc);
	rich_web_Res();
}
function jambEditId(editNumber)
{
	rich_web_Res();
	var title = jQuery('#JAdd_Title_'+editNumber).text();
	var src = jQuery('#JAdd_Img_Src_'+editNumber).attr('src');
	var videoSrc = jQuery('#JAdd_video_'+editNumber).val();
	var description = jQuery('#JAdd_Description_'+editNumber).val();
	var link = jQuery('#JADD_Link_'+editNumber).val();
	var newTab = jQuery('#JAdd_NewTab_'+editNumber).val();
	jQuery('#JumboHidUpd').val(editNumber);
	jQuery('.JSVBut').hide();
	jQuery('.JUPBut').show();
	jQuery('#JSliderImageTitle').val(title);
	jQuery('#rich_web_imgSrc_2').val(src);
	jQuery('#rich_web_videoSrc_2').val(videoSrc);
	tinymce.get('JSliderImageDesc').setContent(description);
	jQuery('#JSliderImageLink').val(link);
	if(newTab=='true') { jQuery('#JNewTab').prop('checked',true); } else { jQuery('#JNewTab').prop('checked',false); }
}
function rich_web_Update()
{
	updateNumber=jQuery('#JumboHidUpd').val();
	var src = jQuery('#rich_web_imgSrc_2').val();
	var videoSrc = jQuery('#rich_web_videoSrc_2').val();
	var title = jQuery('#JSliderImageTitle').val();
	var description = tinymce.get('JSliderImageDesc').getContent();
	var link = jQuery('#JSliderImageLink').val();
	var newTab = jQuery('#JNewTab').prop('checked');
	jQuery('#JAdd_Img_Src_'+updateNumber).attr('src',src);
	jQuery('#JADD_Tit_'+updateNumber).val(title);
	jQuery('#JAdd_Title_'+updateNumber).text(title);
	jQuery('#JAdd_src_'+updateNumber).val(src);
	jQuery('#JAdd_video_'+updateNumber).val(videoSrc);
	jQuery('#JAdd_Description_'+updateNumber).val(description);
	jQuery('#JADD_Link_'+updateNumber).val(link);
	jQuery('#JAdd_NewTab_'+updateNumber).val(newTab);
	jQuery('.JSVBut').show();
	jQuery('.JUPBut').hide();
	if(jQuery('#JAdd_Img_'+updateNumber+' div i')){
		jQuery('#JAdd_Img_'+updateNumber+' div i').remove();
	}
	jQuery('#JAdd_Img_'+updateNumber+' div').append(checkVideoOrNot(jQuery('#rich_web_videoSrc_2').val()));
	rich_web_Res();
}
function rw_sortNumbering(el,n){
	jQuery(el).attr('id','tr_'+n);
	jQuery(el).find('td:nth-child(1)').html(n);
	jQuery(el).find('td:nth-child(1)').attr('name','number_name_'+n);
	jQuery(el).find('td:nth-child(1)').attr('id','number_name_'+n);
	jQuery(el).find('td:nth-child(2)').attr('id','JAdd_Img_'+n);
	jQuery(el).find('td:nth-child(2) img').attr('id','JAdd_Img_Src_'+n);
	jQuery(el).find('td:nth-child(2) img').attr('name','JAdd_Img_Src_'+n);
	jQuery(el).find('td:nth-child(3)').attr('id','JAdd_Title_'+n);
	jQuery(el).find('td:nth-child(3)').attr('name','JAdd_Title_'+n);
	jQuery(el).find('td:nth-child(4)').attr('id','tdClone_'+n);
	jQuery(el).find('td:nth-child(4) i').attr('onclick','jambCloneId('+n+')');
	jQuery(el).find('td:nth-child(5)').attr('id','tdEdit_'+n);
	jQuery(el).find('td:nth-child(5) i').attr('onclick','jambEditId('+n+')');
	jQuery(el).find('td:nth-child(6)').attr('id','tdDelete_'+n);
	jQuery(el).find('td:nth-child(6) i').attr('onclick','jambDelId('+n+')');
	jQuery(el).find('.add_title').attr('id','JADD_Tit_'+n);
	jQuery(el).find('.add_title').attr('name','JADD_Tit_'+n);
	jQuery(el).find('.add_description').attr('id','JAdd_Description_'+n);
	jQuery(el).find('.add_description').attr('name','JAdd_Description_'+n);
	jQuery(el).find('.add_img').attr('id','JAdd_src_'+n);
	jQuery(el).find('.add_img').attr('name','JAdd_src_'+n);
	jQuery(el).find('.add_video').attr('id','JAdd_video_'+n);
	jQuery(el).find('.add_video').attr('name','JAdd_video_'+n);
	jQuery(el).find('.add_link').attr('id','JADD_Link_'+n);
	jQuery(el).find('.add_link').attr('name','JADD_Link_'+n);
	jQuery(el).find('.NewTab').attr('id','JAdd_NewTab_'+n);
	jQuery(el).find('.NewTab').attr('name','JAdd_NewTab_'+n);
}
function jambCloneId(CloneNumber)
{
	var title = jQuery('#JAdd_Title_'+CloneNumber).text();
	var src = jQuery('#JAdd_Img_Src_'+CloneNumber).attr('src');
	var videoSrc = jQuery('#JAdd_video_'+CloneNumber).val();
	var description = jQuery('#JAdd_Description_'+CloneNumber).val();
	var link = jQuery('#JADD_Link_'+CloneNumber).val();
	var newTab = jQuery('#JAdd_NewTab_'+CloneNumber).val();
	var JumboHidNum = jQuery('#JumboHidNum').val();
	var html = rw_return_admin_html(parseInt(parseInt(JumboHidNum)+1), title, src, videoSrc, link, newTab);	
	jQuery('#tr_'+CloneNumber).after(html);
	descAndCountNumber(parseInt(parseInt(JumboHidNum)+1), description);
	jQuery('.rich_web_SaveSl_Table3 tr').each(function(){
		rw_sortNumbering(this,parseInt(parseInt(jQuery(this).index())+1));
	})
}
function jambDelId(removeNumber)
{
	var RWSIRSI = removeNumber;
	jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeIn();
	jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeIn();
	jQuery('.Rich_Web_SliderIm_Relative_No').click(function(){
		jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeOut();
		jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeOut();
		RWSIRSI = null;
	})
	jQuery('.Rich_Web_SliderIm_Relative_Yes').click(function(){
		if(RWSIRSI != null)
		{
			jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeOut();
			jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeOut();
			jQuery('#tr_'+removeNumber).remove();
			jQuery('#JumboHidNum').val(jQuery('#JumboHidNum').val()-1);
			jQuery('.rich_web_SaveSl_Table3 tr').each(function(){
				rw_sortNumbering(this,parseInt(parseInt(jQuery(this).index())+1));
			})
		}
		RWSIRSI = null;
	})
}
function rich_webSortable()
{
	jQuery('.rich_web_SaveSl_Table3 tbody').sortable({
		update: function( event, ui ){
			jQuery(this).find('tr').each(function(i){
				rw_sortNumbering(this,(i+1));
			});
		}
	})
}
function rich_web_Edit_Sl(number)
{
	jQuery('.Table_Data_rich_web1').css('display','none');
	jQuery('.JAddSlider').addClass('JAddSliderAnim');
	jQuery('.Table_Data_rich_web2').css('display','block');
	jQuery('.JUpdateSlider').addClass('JSaveSliderAnim');
	jQuery('.JCanselSlider').addClass('JCanselSliderAnim');
	jQuery('#upd_id').val(number);
	jQuery('.rich_web_Slider_ID').html('[Rich_Web_Slider id="'+number+'"]');
	jQuery('.JMBSL').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Slider id="'+number+'"]&apos;);?&gt;');
	Rich_Web_Slider_Editor();
	var ajaxurl = object.ajaxurl;
	var data = {
		action: 'rich_web_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: number, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var arr=Array();
		var spl=response.split('=>');
		for(var i=3;i<spl.length;i++)
		{
			arr[arr.length]=spl[i].split('[')[0].trim(); 
		}
		arr[arr.length-1]=arr[arr.length-1].split(')')[0].trim();
		jQuery('.JSliderName').val(arr[0]);
		jQuery('.JSType').val(arr[1]);
		jQuery('#JumboHidNum').val(arr[2]);
	})
	var ajaxurl = object.ajaxurl;
	var data = {
		action: 'rich_web_Edit_ImDescTit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: number, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var data = JSON.parse(response);
		var data1 = data[0];
		var data2 = data[1];
		for (var i = 0; i < data1.length; i++){
			if(data2[i]) {
				data1[i]['Sl_Video_Url'] = data2[i]['Sl_Video_Url']
			}
		}
		for(var i=0;i<data1.length;i++) {
			var html = rw_return_admin_html((i+1), data1[i]['SL_Img_Title'], data1[i]['Sl_Img_Url'], data1[i]['Sl_Video_Url'], data1[i]['Sl_Link_Url'], data1[i]['Sl_Link_NewTab']);
			jQuery('.rich_web_SaveSl_Table3').append(html);
			jQuery('#JAdd_Description_'+(i+1)).val(data1[i]['Sl_Img_Description']);
		}
	})
}
function rich_web_Delete_Sl(number)
{
	var RWSIRS = number;
	jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeIn();
	jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeIn();
	jQuery('.Rich_Web_SliderIm_Relative_No').click(function(){
		jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeOut();
		jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeOut();
		RWSIRS = null;
	})
	jQuery('.Rich_Web_SliderIm_Relative_Yes').click(function(){
		if(RWSIRS != null)
		{
			jQuery('.Rich_Web_SliderIm_Fixed_Div').fadeOut();
			jQuery('.Rich_Web_SliderIm_Absolute_Div').fadeOut();
			var ajaxurl = object.ajaxurl;
			var data = {
				action: 'rich_web_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				foobar: number, // translates into $_POST['foobar'] in PHP
			};
			jQuery.post(ajaxurl, data, function(response) { location.reload(); })
		}
		RWSIRS = null;
	})
}
function rich_web_Copy_Sl(number)
{
	var ajaxurl = object.ajaxurl;
	var data = {
		action: 'rich_web_Copy_Sl', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: number, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) { location.reload(); })
}
function Rich_Web_Slider_Editor()
{
	tinymce.init({
		selector: '#JSliderImageDesc',
		menubar: false,
		statusbar: false,
		height: 250,
		plugins: [
			'advlist autolink lists link image charmap print preview hr',
			'searchreplace wordcount code media ',
			'insertdatetime media save table contextmenu directionality',
			'paste textcolor colorpicker textpattern imagetools codesample'
		],
		toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
		toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | insertdatetime preview | forecolor backcolor",
		toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
		fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
		font_formats: 'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
	});
}