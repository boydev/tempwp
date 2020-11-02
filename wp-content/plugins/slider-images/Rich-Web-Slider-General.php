<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
 
	global $wpdb;
	$table_name   = $wpdb->prefix . "rich_web_photo_slider_manager";
	$table_name1  = $wpdb->prefix . "rich_web_photo_slider_instal";
	$table_name2  = $wpdb->prefix . "rich_web_slider_effects_data";
	$table_name3  = $wpdb->prefix . "rich_web_slider_font_family";
	$table_name4  = $wpdb->prefix . "rich_web_slider_id";
	$table_name5  = $wpdb->prefix . "rich_web_slider_effect1";
	$table_name6  = $wpdb->prefix . "rich_web_slider_effect2";
	$table_name7  = $wpdb->prefix . "rich_web_slider_effect3";
	$table_name8  = $wpdb->prefix . "rich_web_slider_effect4";
	$table_name9  = $wpdb->prefix . "rich_web_slider_effect5";
	$table_name10 = $wpdb->prefix . "rich_web_slider_effect6";
	$table_name11 = $wpdb->prefix . "rich_web_slider_effect7";
	$table_name12 = $wpdb->prefix . "rich_web_slider_effect8";
	$table_name13 = $wpdb->prefix . "rich_web_slider_effect9";
	$table_name14 = $wpdb->prefix . "rich_web_slider_effect10";
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(check_admin_referer( 'edit-menu_', 'Rich_Web_PSlider_Nonce' ))
		{
			$Rich_Web_slider_name=sanitize_text_field($_POST['rich_web_slider_name']); $Rich_Web_slider_type=sanitize_text_field($_POST['rich_web_slider_type']);
			//Slider Navigation
			$Rich_Web_Sl1_SlS=sanitize_text_field($_POST['rich_web_Sl1_SlS']); $Rich_Web_Sl1_SlSS=sanitize_text_field($_POST['rich_web_Sl1_SlSS']); $Rich_Web_Sl1_PoH=sanitize_text_field($_POST['rich_web_Sl1_PoH']); $Rich_Web_Sl1_W=sanitize_text_field($_POST['rich_web_Sl1_W']); $Rich_Web_Sl1_H=sanitize_text_field($_POST['rich_web_Sl1_H']); $Rich_Web_Sl1_BoxS=sanitize_text_field($_POST['rich_web_Sl1_BoxS']); $Rich_Web_Sl1_BoxSC=sanitize_text_field($_POST['rich_web_Sl1_BoxSC']); $Rich_Web_Sl1_IBW=sanitize_text_field($_POST['rich_web_Sl1_IBW']); $Rich_Web_Sl1_IBS=sanitize_text_field($_POST['rich_web_Sl1_IBS']); $Rich_Web_Sl1_IBC=sanitize_text_field($_POST['rich_web_Sl1_IBC']); $Rich_Web_Sl1_IBR=sanitize_text_field($_POST['rich_web_Sl1_IBR']); $Rich_Web_Sl1_TBgC=sanitize_text_field($_POST['rich_web_Sl1_TBgC']); $Rich_Web_Sl1_TC=sanitize_text_field($_POST['rich_web_Sl1_TC']); $Rich_Web_Sl1_TTA=sanitize_text_field($_POST['rich_web_Sl1_TTA']); $Rich_Web_Sl1_TFS=sanitize_text_field($_POST['rich_web_Sl1_TFS']); $Rich_Web_Sl1_TFF=sanitize_text_field($_POST['rich_web_Sl1_TFF']); $Rich_Web_Sl1_TUp=sanitize_text_field($_POST['rich_web_Sl1_TUp']); $Rich_Web_Sl1_ArBgC=sanitize_text_field($_POST['rich_web_Sl1_ArBgC']); $Rich_Web_Sl1_ArOp=sanitize_text_field($_POST['rich_web_Sl1_ArOp']); $Rich_Web_Sl1_ArType=sanitize_text_field($_POST['rich_web_Sl1_ArType']); $Rich_Web_Sl1_ArHBgC=sanitize_text_field($_POST['rich_web_Sl1_ArHBgC']); $Rich_Web_Sl1_ArHOp=sanitize_text_field($_POST['rich_web_Sl1_ArHOp']); $Rich_Web_Sl1_ArHEff=sanitize_text_field($_POST['rich_web_Sl1_ArHEff']); $Rich_Web_Sl1_ArBoxW=sanitize_text_field($_POST['rich_web_Sl1_ArBoxW']); $Rich_Web_Sl1_NavW=sanitize_text_field($_POST['rich_web_Sl1_NavW']); $Rich_Web_Sl1_NavH=sanitize_text_field($_POST['rich_web_Sl1_NavH']); $Rich_Web_Sl1_NavPB=sanitize_text_field($_POST['rich_web_Sl1_NavPB']); $Rich_Web_Sl1_NavBW=sanitize_text_field($_POST['rich_web_Sl1_NavBW']); $Rich_Web_Sl1_NavBS=sanitize_text_field($_POST['rich_web_Sl1_NavBS']); $Rich_Web_Sl1_NavBC=sanitize_text_field($_POST['rich_web_Sl1_NavBC']); $Rich_Web_Sl1_NavBR=sanitize_text_field($_POST['rich_web_Sl1_NavBR']); $Rich_Web_Sl1_NavCC=sanitize_text_field($_POST['rich_web_Sl1_NavCC']); $Rich_Web_Sl1_NavHC=sanitize_text_field($_POST['rich_web_Sl1_NavHC']); $Rich_Web_Sl1_ArPFT=""; $Rich_Web_Sl1_NavPos=sanitize_text_field($_POST['rich_web_Sl1_NavPos']);
			//Content Slider
			$rich_CS_BIB=sanitize_text_field($_POST['rich_CS_BIB']); $rich_CS_P=sanitize_text_field($_POST['rich_CS_P']); $rich_CS_Loop=""; $rich_CS_SD=sanitize_text_field($_POST['rich_CS_SD']); $rich_CS_AT=sanitize_text_field($_POST['rich_CS_AT']); $rich_CS_Cont_BgC=sanitize_text_field($_POST['rich_CS_Cont_BgC']); $rich_CS_Cont_BSC=sanitize_text_field($_POST['rich_CS_Cont_BSC']); $rich_CS_Cont_W=sanitize_text_field($_POST['rich_CS_Cont_W']); $rich_CS_Cont_H=sanitize_text_field($_POST['rich_CS_Cont_H']); $rich_CS_Cont_Op=""; $rich_CS_Cont_BW=sanitize_text_field($_POST['rich_CS_Cont_BW']); $rich_CS_Cont_BS=sanitize_text_field($_POST['rich_CS_Cont_BS']); $rich_CS_Cont_BC=sanitize_text_field($_POST['rich_CS_Cont_BC']); $rich_CS_Cont_BR=sanitize_text_field($_POST['rich_CS_Cont_BR']); $rich_CS_Video_TShow=sanitize_text_field($_POST['rich_CS_Video_TShow']); $rich_CS_Video_TC=sanitize_text_field($_POST['rich_CS_Video_TC']); $rich_CS_Video_TSC=""; $rich_CS_Video_TFS=sanitize_text_field($_POST['rich_CS_Video_TFS']); $rich_CS_Video_TFF=sanitize_text_field($_POST['rich_CS_Video_TFF']); $rich_CS_Video_TTA=sanitize_text_field($_POST['rich_CS_Video_TTA']); $rich_CS_Video_DShow=sanitize_text_field($_POST['rich_CS_Video_DShow']); $rich_CS_Video_DC=sanitize_text_field($_POST['rich_CS_Video_DC']); $rich_CS_Video_DSC=''; $rich_CS_Video_DFS=''; $rich_CS_Video_DFF=''; $rich_CS_Video_DTA=''; $rich_CS_Video_Show=sanitize_text_field($_POST['rich_CS_Video_Show']); $rich_CS_Video_W=""; $rich_CS_Video_H=sanitize_text_field($_POST['rich_CS_Video_H']); $rich_CS_LFS=sanitize_text_field($_POST['rich_CS_LFS']); $rich_CS_LFF=sanitize_text_field($_POST['rich_CS_LFF']); $rich_CS_LC=sanitize_text_field($_POST['rich_CS_LC']); $rich_CS_LT=sanitize_text_field($_POST['rich_CS_LT']); $rich_CS_LBgC=sanitize_text_field($_POST['rich_CS_LBgC']); $rich_CS_LBC=sanitize_text_field($_POST['rich_CS_LBC']); $rich_CS_LBR=sanitize_text_field($_POST['rich_CS_LBR']); $rich_CS_LPos=sanitize_text_field($_POST['rich_CS_LPos']); $rich_CS_LHBgC=sanitize_text_field($_POST['rich_CS_LHBgC']); $rich_CS_LHC=sanitize_text_field($_POST['rich_CS_LHC']); $rich_CS_Video_ArrShow=sanitize_text_field($_POST['rich_CS_Video_ArrShow']); $rich_CS_AFS=sanitize_text_field($_POST['rich_CS_AFS']); $rich_CS_AC=sanitize_text_field($_POST['rich_CS_AC']); $rich_CS_Icon=sanitize_text_field($_POST['rich_CS_Icon']); $rich_CS_Link_BW=sanitize_text_field($_POST['rich_CS_Link_BW']); $rich_CS_Link_BS=sanitize_text_field($_POST['rich_CS_Link_BS']);
			//Fashion Slider
			$rich_fsl_animation=sanitize_text_field($_POST['rich_fsl_animation']); $rich_fsl_SShow=sanitize_text_field($_POST['rich_fsl_SShow']); $rich_fsl_SShow_Speed=sanitize_text_field($_POST['rich_fsl_SShow_Speed']); $rich_fsl_Anim_Dur=sanitize_text_field($_POST['rich_fsl_Anim_Dur']); $rich_fsl_Ic_Show=sanitize_text_field($_POST['rich_fsl_Ic_Show']); $rich_fsl_PPL_Show=sanitize_text_field($_POST['rich_fsl_PPL_Show']); $rich_fsl_Randomize=sanitize_text_field($_POST['rich_fsl_Randomize']); $rich_fsl_Loop=sanitize_text_field($_POST['rich_fsl_Loop']); $rich_fsl_Width=sanitize_text_field($_POST['rich_fsl_Width']); $rich_fsl_Height=sanitize_text_field($_POST['rich_fsl_Height']); $rich_fsl_Border_Width=sanitize_text_field($_POST['rich_fsl_Border_Width']); $rich_fsl_Border_Style=sanitize_text_field($_POST['rich_fsl_Border_Style']); $rich_fsl_Border_Color=sanitize_text_field($_POST['rich_fsl_Border_Color']); $rich_fsl_Box_Shadow=sanitize_text_field($_POST['rich_fsl_Box_Shadow']); $rich_fsl_Shadow_Color=sanitize_text_field($_POST['rich_fsl_Shadow_Color']); $rich_fsl_Desc_Show=sanitize_text_field($_POST['rich_fsl_Desc_Show']); $rich_fsl_Desc_Size=''; $rich_fsl_Desc_Color=''; $rich_fsl_Desc_Font_Family=''; $rich_fsl_Desc_Text_Align=''; $rich_fsl_Desc_Bg_Color=sanitize_text_field($_POST['rich_fsl_Desc_Bg_Color']); $rich_fsl_Title_Font_Size=sanitize_text_field($_POST['rich_fsl_Title_Font_Size']); $rich_fsl_Title_Color=sanitize_text_field($_POST['rich_fsl_Title_Color']); $rich_fsl_Title_Text_Shadow=sanitize_text_field($_POST['rich_fsl_Title_Text_Shadow']); $rich_fsl_Title_Font_Family=sanitize_text_field($_POST['rich_fsl_Title_Font_Family']); $rich_fsl_Title_Text_Align=sanitize_text_field($_POST['rich_fsl_Title_Text_Align']); $rich_fsl_Link_Text=sanitize_text_field($_POST['rich_fsl_Link_Text']); $rich_fsl_Link_Border_Width=sanitize_text_field($_POST['rich_fsl_Link_Border_Width']); $rich_fsl_Link_Border_Style=sanitize_text_field($_POST['rich_fsl_Link_Border_Style']); $rich_fsl_Link_Border_Color=sanitize_text_field($_POST['rich_fsl_Link_Border_Color']); $rich_fsl_Link_Font_Size=sanitize_text_field($_POST['rich_fsl_Link_Font_Size']); $rich_fsl_Link_Color=sanitize_text_field($_POST['rich_fsl_Link_Color']); $rich_fsl_Link_Font_Family=sanitize_text_field($_POST['rich_fsl_Link_Font_Family']); $rich_fsl_Link_Bg_Color=sanitize_text_field($_POST['rich_fsl_Link_Bg_Color']); $rich_fsl_Link_Hover_Border_Color=sanitize_text_field($_POST['rich_fsl_Link_Hover_Border_Color']); $rich_fsl_Link_Hover_Bg_Color=sanitize_text_field($_POST['rich_fsl_Link_Hover_Bg_Color']); $rich_fsl_Link_Hover_Color=sanitize_text_field($_POST['rich_fsl_Link_Hover_Color']); $rich_fsl_Icon_Size=sanitize_text_field($_POST['rich_fsl_Icon_Size']); $rich_fsl_Icon_Type=sanitize_text_field($_POST['rich_fsl_Icon_Type']); $rich_fsl_Hover_Icon_Type=sanitize_text_field($_POST['rich_fsl_Hover_Icon_Type']);
			//Circle Thumbnails Slider
			$Rich_Web_Sl_CT_W=sanitize_text_field($_POST['Rich_Web_Sl_CT_W']); $Rich_Web_Sl_CT_H=sanitize_text_field($_POST['Rich_Web_Sl_CT_H']); $Rich_Web_Sl_CT_BW=sanitize_text_field($_POST['Rich_Web_Sl_CT_BW']); $Rich_Web_Sl_CT_BS=sanitize_text_field($_POST['Rich_Web_Sl_CT_BS']); $Rich_Web_Sl_CT_BC=sanitize_text_field($_POST['Rich_Web_Sl_CT_BC']); $Rich_Web_Sl_CT_BxSShow=""; $Rich_Web_Sl_CT_BxSType=sanitize_text_field($_POST['Rich_Web_Sl_CT_BxSType']); $Rich_Web_Sl_CT_BxS=""; $Rich_Web_Sl_CT_BxC=sanitize_text_field($_POST['Rich_Web_Sl_CT_BxC']); $Rich_Web_Sl_CT_TDABgC=sanitize_text_field($_POST['Rich_Web_Sl_CT_TDABgC']); $Rich_Web_Sl_CT_TDAPos=sanitize_text_field($_POST['Rich_Web_Sl_CT_TDAPos']); $Rich_Web_Sl_CT_LBgC=sanitize_text_field($_POST['Rich_Web_Sl_CT_LBgC']); $Rich_Web_Sl_CT_TFS=sanitize_text_field($_POST['Rich_Web_Sl_CT_TFS']); $Rich_Web_Sl_CT_TFF=sanitize_text_field($_POST['Rich_Web_Sl_CT_TFF']); $Rich_Web_Sl_CT_TCC=sanitize_text_field($_POST['Rich_Web_Sl_CT_TCC']); $Rich_Web_Sl_CT_TC=sanitize_text_field($_POST['Rich_Web_Sl_CT_TC']); $Rich_Web_Sl_CT_ArBgC=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArBgC']); $Rich_Web_Sl_CT_ArBR=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArBR']); $Rich_Web_Sl_CT_ArType=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArType']); $Rich_Web_Sl_CT_ArHBC=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArHBC']); $Rich_Web_Sl_CT_ArHBR=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArHBR']); $Rich_Web_Sl_CT_ArText=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArText']); $Rich_Web_Sl_CT_ArLeft=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArLeft']); $Rich_Web_Sl_CT_ArRight=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArRight']); $Rich_Web_Sl_CT_ArTextC=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextC']); $Rich_Web_Sl_CT_ArTextFS=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextFS']); $Rich_Web_Sl_CT_ArTextFF=sanitize_text_field($_POST['Rich_Web_Sl_CT_ArTextFF']);
			//Slider Carousel
			$Rich_Web_Sl_SC_BW=sanitize_text_field($_POST['Rich_Web_Sl_SC_BW']); $Rich_Web_Sl_SC_BS=sanitize_text_field($_POST['Rich_Web_Sl_SC_BS']); $Rich_Web_Sl_SC_BC=sanitize_text_field($_POST['Rich_Web_Sl_SC_BC']); $Rich_Web_Sl_SC_BoxShShow=""; $Rich_Web_Sl_SC_BoxShType=sanitize_text_field($_POST['Rich_Web_Sl_SC_BoxShType']); $Rich_Web_Sl_SC_BoxSh=""; $Rich_Web_Sl_SC_BoxShC=sanitize_text_field($_POST['Rich_Web_Sl_SC_BoxShC']); $Rich_Web_Sl_SC_IW=sanitize_text_field($_POST['Rich_Web_Sl_SC_IW']); $Rich_Web_Sl_SC_IH=sanitize_text_field($_POST['Rich_Web_Sl_SC_IH']); $Rich_Web_Sl_SC_IBW=sanitize_text_field($_POST['Rich_Web_Sl_SC_IBW']); $Rich_Web_Sl_SC_IBS=""; $Rich_Web_Sl_SC_IBC=sanitize_text_field($_POST['Rich_Web_Sl_SC_IBC']); $Rich_Web_Sl_SC_IBR=sanitize_text_field($_POST['Rich_Web_Sl_SC_IBR']); $Rich_Web_Sl_SC_ICBW=sanitize_text_field($_POST['Rich_Web_Sl_SC_ICBW']); $Rich_Web_Sl_SC_ICBS=""; $Rich_Web_Sl_SC_ICBC=sanitize_text_field($_POST['Rich_Web_Sl_SC_ICBC']); $Rich_Web_Sl_SC_TBgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_TBgC']); $Rich_Web_Sl_SC_TC=sanitize_text_field($_POST['Rich_Web_Sl_SC_TC']); $Rich_Web_Sl_SC_TFS=sanitize_text_field($_POST['Rich_Web_Sl_SC_TFS']); $Rich_Web_Sl_SC_TFF=sanitize_text_field($_POST['Rich_Web_Sl_SC_TFF']); $Rich_Web_Sl_SC_THBgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_THBgC']); $Rich_Web_Sl_SC_THC=sanitize_text_field($_POST['Rich_Web_Sl_SC_THC']); $Rich_Web_Sl_SC_Pop_OC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_OC']); $Rich_Web_Sl_SC_Pop_BW=sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BW']); $Rich_Web_Sl_SC_Pop_BC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BC']); $Rich_Web_Sl_SC_Pop_BoxShShow=""; $Rich_Web_Sl_SC_Pop_BoxShType=sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BoxShType']); $Rich_Web_Sl_SC_Pop_BoxSh=""; $Rich_Web_Sl_SC_Pop_BoxShC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Pop_BoxShC']); $Rich_Web_Sl_SC_L_BgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BgC']); $Rich_Web_Sl_SC_L_C=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_C']); $Rich_Web_Sl_SC_L_FS=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_FS']); $Rich_Web_Sl_SC_L_BW=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BW']); $Rich_Web_Sl_SC_L_BS=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BS']); $Rich_Web_Sl_SC_L_BC=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BC']); $Rich_Web_Sl_SC_L_BR=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_BR']); $Rich_Web_Sl_SC_L_HBgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_HBgC']); $Rich_Web_Sl_SC_L_HC=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_HC']); $Rich_Web_Sl_SC_L_Type=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_Type']); $Rich_Web_Sl_SC_L_Text=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_Text']); $Rich_Web_Sl_SC_L_IType=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_IType']); $Rich_Web_Sl_SC_L_FF=sanitize_text_field($_POST['Rich_Web_Sl_SC_L_FF']); $Rich_Web_Sl_SC_PI_BgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BgC']); $Rich_Web_Sl_SC_PI_C=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_C']); $Rich_Web_Sl_SC_PI_FS=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_FS']); $Rich_Web_Sl_SC_PI_BW=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BW']); $Rich_Web_Sl_SC_PI_BS=""; $Rich_Web_Sl_SC_PI_BC=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BC']); $Rich_Web_Sl_SC_PI_BR=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_BR']); $Rich_Web_Sl_SC_PI_HBgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_HBgC']); $Rich_Web_Sl_SC_PI_HC=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_HC']); $Rich_Web_Sl_SC_PI_Type=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_Type']); $Rich_Web_Sl_SC_PI_Text=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_Text']); $Rich_Web_Sl_SC_PI_IType=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_IType']); $Rich_Web_Sl_SC_PI_FF=sanitize_text_field($_POST['Rich_Web_Sl_SC_PI_FF']); $Rich_Web_Sl_SC_Arr_BgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BgC']); $Rich_Web_Sl_SC_Arr_C=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_C']); $Rich_Web_Sl_SC_Arr_FS=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_FS']); $Rich_Web_Sl_SC_Arr_BW=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BW']); $Rich_Web_Sl_SC_Arr_BS=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BS']); $Rich_Web_Sl_SC_Arr_BC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BC']); $Rich_Web_Sl_SC_Arr_BR=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_BR']); $Rich_Web_Sl_SC_Arr_HBgC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_HBgC']); $Rich_Web_Sl_SC_Arr_HC=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_HC']); $Rich_Web_Sl_SC_Arr_Type=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Type']); $Rich_Web_Sl_SC_Arr_FF=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_FF']); $Rich_Web_Sl_SC_Arr_IType=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_IType']); $Rich_Web_Sl_SC_Arr_Next=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Next']); $Rich_Web_Sl_SC_Arr_Prev=sanitize_text_field($_POST['Rich_Web_Sl_SC_Arr_Prev']); $Rich_Web_Sl_SC_PCI_FS=sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_FS']); $Rich_Web_Sl_SC_PCI_C=sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_C']); $Rich_Web_Sl_SC_PCI_Type=sanitize_text_field($_POST['Rich_Web_Sl_SC_PCI_Type']);
			//Flexible Slider
			$Rich_Web_Sl_FS_BgC=sanitize_text_field($_POST['Rich_Web_Sl_FS_BgC']); $Rich_Web_Sl_FS_AP=sanitize_text_field($_POST['Rich_Web_Sl_FS_AP']); $Rich_Web_Sl_FS_TS=sanitize_text_field($_POST['Rich_Web_Sl_FS_TS']); $Rich_Web_Sl_FS_PT=sanitize_text_field($_POST['Rich_Web_Sl_FS_PT']); $Rich_Web_Sl_FS_SS=sanitize_text_field($_POST['Rich_Web_Sl_FS_SS']); $Rich_Web_Sl_FS_SVis=sanitize_text_field($_POST['Rich_Web_Sl_FS_SVis']); $Rich_Web_Sl_FS_CS=sanitize_text_field($_POST['Rich_Web_Sl_FS_CS']); $Rich_Web_Sl_FS_SLoop=sanitize_text_field($_POST['Rich_Web_Sl_FS_SLoop']); $Rich_Web_Sl_FS_SSc=sanitize_text_field($_POST['Rich_Web_Sl_FS_SSc']); $Rich_Web_Sl_FS_SlPos=sanitize_text_field($_POST['Rich_Web_Sl_FS_SlPos']); $Rich_Web_Sl_FS_ShNavBut=sanitize_text_field($_POST['Rich_Web_Sl_FS_ShNavBut']); $Rich_Web_Sl_FS_I_W=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_W']); $Rich_Web_Sl_FS_I_H=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_H']); $Rich_Web_Sl_FS_I_BW=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BW']); $Rich_Web_Sl_FS_I_BS=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BS']); $Rich_Web_Sl_FS_I_BC=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BC']); $Rich_Web_Sl_FS_I_BR=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BR']); $Rich_Web_Sl_FS_I_BoxShShow=""; $Rich_Web_Sl_FS_I_BoxShType=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BoxShType']); $Rich_Web_Sl_FS_I_BoxSh=""; $Rich_Web_Sl_FS_I_BoxShC=sanitize_text_field($_POST['Rich_Web_Sl_FS_I_BoxShC']); $Rich_Web_Sl_FS_T_C=sanitize_text_field($_POST['Rich_Web_Sl_FS_T_C']); $Rich_Web_Sl_FS_T_FF=sanitize_text_field($_POST['Rich_Web_Sl_FS_T_FF']); $Rich_Web_Sl_FS_Nav_Show=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_Show']); $Rich_Web_Sl_FS_Nav_W=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_W']); $Rich_Web_Sl_FS_Nav_H=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_H']); $Rich_Web_Sl_FS_Nav_BW=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BW']); $Rich_Web_Sl_FS_Nav_BS=""; $Rich_Web_Sl_FS_Nav_BC=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BC']); $Rich_Web_Sl_FS_Nav_BR=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_BR']); $Rich_Web_Sl_FS_Nav_PB=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_PB']); $Rich_Web_Sl_FS_Nav_CC=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_CC']); $Rich_Web_Sl_FS_Nav_HC=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_HC']); $Rich_Web_Sl_FS_Nav_C=sanitize_text_field($_POST['Rich_Web_Sl_FS_Nav_C']); $Rich_Web_Sl_FS_Arr_Show=""; $Rich_Web_Sl_FS_Arr_Type=sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_Type']); $Rich_Web_Sl_FS_Arr_S=sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_S']); $Rich_Web_Sl_FS_Arr_C=sanitize_text_field($_POST['Rich_Web_Sl_FS_Arr_C']);
			//Dymanic Slider
			$Rich_Web_Sl_DS_AP=sanitize_text_field($_POST['Rich_Web_Sl_DS_AP']); $Rich_Web_Sl_DS_PT=sanitize_text_field($_POST['Rich_Web_Sl_DS_PT']); $Rich_Web_Sl_DS_Tr=sanitize_text_field($_POST['Rich_Web_Sl_DS_Tr']); $Rich_Web_Sl_DS_H=sanitize_text_field($_POST['Rich_Web_Sl_DS_H']); $Rich_Web_Sl_DS_BW=sanitize_text_field($_POST['Rich_Web_Sl_DS_BW']); $Rich_Web_Sl_DS_BS=sanitize_text_field($_POST['Rich_Web_Sl_DS_BS']); $Rich_Web_Sl_DS_BC=sanitize_text_field($_POST['Rich_Web_Sl_DS_BC']); $Rich_Web_Sl_DS_TFS=sanitize_text_field($_POST['Rich_Web_Sl_DS_TFS']); $Rich_Web_Sl_DS_TFF=sanitize_text_field($_POST['Rich_Web_Sl_DS_TFF']); $Rich_Web_Sl_DS_TC=sanitize_text_field($_POST['Rich_Web_Sl_DS_TC']); $Rich_Web_Sl_DS_DFS=sanitize_text_field($_POST['Rich_Web_Sl_DS_DFS']); $Rich_Web_Sl_DS_DFF=''; $Rich_Web_Sl_DS_DC=''; $Rich_Web_Sl_DS_LFS=sanitize_text_field($_POST['Rich_Web_Sl_DS_LFS']); $Rich_Web_Sl_DS_LFF=sanitize_text_field($_POST['Rich_Web_Sl_DS_LFF']); $Rich_Web_Sl_DS_LC=sanitize_text_field($_POST['Rich_Web_Sl_DS_LC']); $Rich_Web_Sl_DS_LBgC=sanitize_text_field($_POST['Rich_Web_Sl_DS_LBgC']); $Rich_Web_Sl_DS_LBW=sanitize_text_field($_POST['Rich_Web_Sl_DS_LBW']); $Rich_Web_Sl_DS_LBS=sanitize_text_field($_POST['Rich_Web_Sl_DS_LBS']); $Rich_Web_Sl_DS_LBC=sanitize_text_field($_POST['Rich_Web_Sl_DS_LBC']); $Rich_Web_Sl_DS_LBR=sanitize_text_field($_POST['Rich_Web_Sl_DS_LBR']); $Rich_Web_Sl_DS_LHC=sanitize_text_field($_POST['Rich_Web_Sl_DS_LHC']); $Rich_Web_Sl_DS_LHBgC=sanitize_text_field($_POST['Rich_Web_Sl_DS_LHBgC']); $Rich_Web_Sl_DS_LT=sanitize_text_field($_POST['Rich_Web_Sl_DS_LT']); $Rich_Web_Sl_DS_Arr_Show=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_Show']); $Rich_Web_Sl_DS_Arr_LT=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_LT']); $Rich_Web_Sl_DS_Arr_RT=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_RT']); $Rich_Web_Sl_DS_Arr_C=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_C']); $Rich_Web_Sl_DS_Arr_BgC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BgC']); $Rich_Web_Sl_DS_Arr_BW=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BW']); $Rich_Web_Sl_DS_Arr_BS=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BS']); $Rich_Web_Sl_DS_Arr_BC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BC']); $Rich_Web_Sl_DS_Arr_BR=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_BR']); $Rich_Web_Sl_DS_Arr_HC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_HC']); $Rich_Web_Sl_DS_Arr_HBgC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Arr_HBgC']); $Rich_Web_Sl_DS_Nav_W=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_W']); $Rich_Web_Sl_DS_Nav_H=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_H']); $Rich_Web_Sl_DS_Nav_PB=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_PB']); $Rich_Web_Sl_DS_Nav_BW=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BW']); $Rich_Web_Sl_DS_Nav_BS=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BS']); $Rich_Web_Sl_DS_Nav_BC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BC']); $Rich_Web_Sl_DS_Nav_BR=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_BR']); $Rich_Web_Sl_DS_Nav_C=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_C']); $Rich_Web_Sl_DS_Nav_HC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_HC']); $Rich_Web_Sl_DS_Nav_CC=sanitize_text_field($_POST['Rich_Web_Sl_DS_Nav_CC']);
			//Thumbnails Slider & Lightbox
			$Rich_Web_Sl_TSL_W=sanitize_text_field($_POST['Rich_Web_Sl_TSL_W']); $Rich_Web_Sl_TSL_H=sanitize_text_field($_POST['Rich_Web_Sl_TSL_H']); $Rich_Web_Sl_TSL_BW=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BW']); $Rich_Web_Sl_TSL_BS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BS']); $Rich_Web_Sl_TSL_BC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BC']); $Rich_Web_Sl_TSL_BR=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BR']); $Rich_Web_Sl_TSL_BoxShShow=""; $Rich_Web_Sl_TSL_BoxShType=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BoxShType']); $Rich_Web_Sl_TSL_BoxSh=""; $Rich_Web_Sl_TSL_BoxShC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_BoxShC']); $Rich_Web_Sl_TSL_CM=sanitize_text_field($_POST['Rich_Web_Sl_TSL_CM']); $Rich_Web_Sl_TSL_TA=sanitize_text_field($_POST['Rich_Web_Sl_TSL_TA']); $Rich_Web_Sl_TSL_AP=sanitize_text_field($_POST['Rich_Web_Sl_TSL_AP']); $Rich_Web_Sl_TSL_PH=sanitize_text_field($_POST['Rich_Web_Sl_TSL_PH']); $Rich_Web_Sl_TSL_Loop=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Loop']); $Rich_Web_Sl_TSL_PT=sanitize_text_field($_POST['Rich_Web_Sl_TSL_PT']); $Rich_Web_Sl_TSL_CS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_CS']); $Rich_Web_Sl_TSL_Nav_Show=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_Show']); $Rich_Web_Sl_TSL_Nav_W=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_W']); $Rich_Web_Sl_TSL_Nav_H=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_H']); $Rich_Web_Sl_TSL_Nav_PB=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_PB']); $Rich_Web_Sl_TSL_Nav_BC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_BC']); $Rich_Web_Sl_TSL_Nav_BR=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_BR']); $Rich_Web_Sl_TSL_Nav_CBC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_CBC']); $Rich_Web_Sl_TSL_Nav_HBC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_HBC']); $Rich_Web_Sl_TSL_Nav_Pos=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Nav_Pos']); $Rich_Web_Sl_TSL_SS_Show=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_Show']); $Rich_Web_Sl_TSL_SS_W=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_W']); $Rich_Web_Sl_TSL_SS_H=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_H']); $Rich_Web_Sl_TSL_SS_BC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_BC']); $Rich_Web_Sl_TSL_SS_BR=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_BR']); $Rich_Web_Sl_TSL_SS_StC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_StC']); $Rich_Web_Sl_TSL_SS_SpC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_SS_SpC']); $Rich_Web_Sl_TSL_Arr_Show=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_Show']); $Rich_Web_Sl_TSL_Arr_Type=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_Type']); $Rich_Web_Sl_TSL_Arr_S=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_S']); $Rich_Web_Sl_TSL_Arr_C=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Arr_C']); $Rich_Web_Sl_TSL_Pop_OvC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_OvC']); $Rich_Web_Sl_TSL_Pop_BW=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BW']); $Rich_Web_Sl_TSL_Pop_BS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BS']); $Rich_Web_Sl_TSL_Pop_BC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BC']); $Rich_Web_Sl_TSL_Pop_BR=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BR']); $Rich_Web_Sl_TSL_Pop_BgC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_BgC']); $Rich_Web_Sl_TSL_TFS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_TFS']); $Rich_Web_Sl_TSL_TFF=sanitize_text_field($_POST['Rich_Web_Sl_TSL_TFF']); $Rich_Web_Sl_TSL_TC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_TC']); $Rich_Web_Sl_TSL_Pop_ArrType=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrType']); $Rich_Web_Sl_TSL_Pop_ArrS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrS']); $Rich_Web_Sl_TSL_Pop_ArrC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_Pop_ArrC']); $Rich_Web_Sl_TSL_CIT=sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIT']); $Rich_Web_Sl_TSL_CIS=sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIS']); $Rich_Web_Sl_TSL_CIC=sanitize_text_field($_POST['Rich_Web_Sl_TSL_CIC']);
			//Accordion Slider
			$Rich_Web_AcSL_W=sanitize_text_field($_POST['Rich_Web_AcSL_W']); $Rich_Web_AcSL_H=sanitize_text_field($_POST['Rich_Web_AcSL_H']); $Rich_Web_AcSL_BW=sanitize_text_field($_POST['Rich_Web_AcSL_BW']); $Rich_Web_AcSL_BS=sanitize_text_field($_POST['Rich_Web_AcSL_BS']); $Rich_Web_AcSL_BC=sanitize_text_field($_POST['Rich_Web_AcSL_BC']); $Rich_Web_AcSL_BSh=sanitize_text_field($_POST['Rich_Web_AcSL_BSh']); $Rich_Web_AcSL_BShC=sanitize_text_field($_POST['Rich_Web_AcSL_BShC']); $Rich_Web_AcSL_Img_W=sanitize_text_field($_POST['Rich_Web_AcSL_Img_W']); $Rich_Web_AcSL_Img_BSh=sanitize_text_field($_POST['Rich_Web_AcSL_Img_BSh']); $Rich_Web_AcSL_Img_BShC=sanitize_text_field($_POST['Rich_Web_AcSL_Img_BShC']); $Rich_Web_AcSL_Title_FS=sanitize_text_field($_POST['Rich_Web_AcSL_Title_FS']); $Rich_Web_AcSL_Title_FF=sanitize_text_field($_POST['Rich_Web_AcSL_Title_FF']); $Rich_Web_AcSL_Title_C=sanitize_text_field($_POST['Rich_Web_AcSL_Title_C']); $Rich_Web_AcSL_Title_TSh=sanitize_text_field($_POST['Rich_Web_AcSL_Title_TSh']); $Rich_Web_AcSL_Title_TShC=sanitize_text_field($_POST['Rich_Web_AcSL_Title_TShC']); $Rich_Web_AcSL_Title_BgC=sanitize_text_field($_POST['Rich_Web_AcSL_Title_BgC']); $Rich_Web_AcSL_Link_FS=sanitize_text_field($_POST['Rich_Web_AcSL_Link_FS']); $Rich_Web_AcSL_Link_FF=sanitize_text_field($_POST['Rich_Web_AcSL_Link_FF']); $Rich_Web_AcSL_Link_C=sanitize_text_field($_POST['Rich_Web_AcSL_Link_C']); $Rich_Web_AcSL_Link_TSh=""; $Rich_Web_AcSL_Link_TShC=""; $Rich_Web_AcSL_Link_BgC=sanitize_text_field($_POST['Rich_Web_AcSL_Link_BgC']); $Rich_Web_AcSL_Link_Text=sanitize_text_field($_POST['Rich_Web_AcSL_Link_Text']);
			//Animation Slider
			$Rich_Web_AnSL_W=sanitize_text_field($_POST['Rich_Web_AnSL_W']); $Rich_Web_AnSL_H=sanitize_text_field($_POST['Rich_Web_AnSL_H']); $Rich_Web_AnSL_BW=sanitize_text_field($_POST['Rich_Web_AnSL_BW']); $Rich_Web_AnSL_BS=sanitize_text_field($_POST['Rich_Web_AnSL_BS']); $Rich_Web_AnSL_BC=sanitize_text_field($_POST['Rich_Web_AnSL_BC']); $Rich_Web_AnSL_BR=sanitize_text_field($_POST['Rich_Web_AnSL_BR']); $Rich_Web_AnSL_BSh=""; $Rich_Web_AnSL_ShC=sanitize_text_field($_POST['Rich_Web_AnSL_ShC']); $Rich_Web_AnSL_ET=sanitize_text_field($_POST['Rich_Web_AnSL_ET']); $Rich_Web_AnSL_SSh=sanitize_text_field($_POST['Rich_Web_AnSL_SSh']); $Rich_Web_AnSL_SShChT=sanitize_text_field($_POST['Rich_Web_AnSL_SShChT']); $Rich_Web_AnSL_T_FS=sanitize_text_field($_POST['Rich_Web_AnSL_T_FS']); $Rich_Web_AnSL_T_FF=sanitize_text_field($_POST['Rich_Web_AnSL_T_FF']); $Rich_Web_AnSL_T_C=sanitize_text_field($_POST['Rich_Web_AnSL_T_C']); $Rich_Web_AnSL_T_BgC=sanitize_text_field($_POST['Rich_Web_AnSL_T_BgC']); $Rich_Web_AnSL_T_TA=sanitize_text_field($_POST['Rich_Web_AnSL_T_TA']); $Rich_Web_AnSL_T_Sh=sanitize_text_field($_POST['Rich_Web_AnSL_T_Sh']); $Rich_Web_AnSL_T_ShC=sanitize_text_field($_POST['Rich_Web_AnSL_T_ShC']); $Rich_Web_AnSL_N_Sh=sanitize_text_field($_POST['Rich_Web_AnSL_N_Sh']); $Rich_Web_AnSL_N_S=sanitize_text_field($_POST['Rich_Web_AnSL_N_S']); $Rich_Web_AnSL_N_BW=sanitize_text_field($_POST['Rich_Web_AnSL_N_BW']); $Rich_Web_AnSL_N_BC=sanitize_text_field($_POST['Rich_Web_AnSL_N_BC']); $Rich_Web_AnSL_N_BgC=sanitize_text_field($_POST['Rich_Web_AnSL_N_BgC']); $Rich_Web_AnSL_N_BS=sanitize_text_field($_POST['Rich_Web_AnSL_N_BS']); $Rich_Web_AnSL_N_HBgC=sanitize_text_field($_POST['Rich_Web_AnSL_N_HBgC']); $Rich_Web_AnSL_N_CC=sanitize_text_field($_POST['Rich_Web_AnSL_N_CC']); $Rich_Web_AnSL_N_M=sanitize_text_field($_POST['Rich_Web_AnSL_N_M']); $Rich_Web_AnSL_Ic_Sh=""; $Rich_Web_AnSL_Ic_T=sanitize_text_field($_POST['Rich_Web_AnSL_Ic_T']); $Rich_Web_AnSL_Ic_S=sanitize_text_field($_POST['Rich_Web_AnSL_Ic_S']); $Rich_Web_AnSL_Ic_C=sanitize_text_field($_POST['Rich_Web_AnSL_Ic_C']); $Rich_Web_AnSL_L_BgC=''; $Rich_Web_AnSL_L_T=''; $Rich_Web_AnSL_L_FS=''; $Rich_Web_AnSL_L_FF=''; $Rich_Web_AnSL_L_C=''; $Rich_Web_AnSL_L1_T=''; $Rich_Web_AnSL_L2_T=''; $Rich_Web_AnSL_L3_T='';
			

			if($Rich_Web_Sl1_SlS=='on'){ $Rich_Web_Sl1_SlS='true'; }else{ $Rich_Web_Sl1_SlS='false'; }
			if($Rich_Web_Sl1_PoH=='on'){ $Rich_Web_Sl1_PoH='true'; }else{ $Rich_Web_Sl1_PoH='false'; }
			
			if($Rich_Web_Sl1_TUp=='on'){ $Rich_Web_Sl1_TUp='true'; }else{ $Rich_Web_Sl1_TUp='false'; }
			if($rich_CS_BIB=='on'){ $rich_CS_BIB='true'; }else{ $rich_CS_BIB='none'; }
			if($rich_CS_P=='on'){ $rich_CS_P='true'; }else{ $rich_CS_P='none'; }
			
			if($rich_CS_Video_TShow=='on'){ $rich_CS_Video_TShow='true'; }else{ $rich_CS_Video_TShow='none'; }
			if($rich_CS_Video_DShow=='on'){ $rich_CS_Video_DShow='true'; }else{ $rich_CS_Video_DShow='none'; }
			if($rich_CS_Video_Show=='on'){ $rich_CS_Video_Show='true'; }else{ $rich_CS_Video_Show='none'; }
			if($rich_CS_Video_ArrShow=='on'){ $rich_CS_Video_ArrShow='true'; }else{ $rich_CS_Video_ArrShow='none'; }
			if($rich_fsl_SShow == 'on'){ $rich_fsl_SShow = 'true'; }else{ $rich_fsl_SShow = 'false'; }
			if($rich_fsl_Ic_Show == 'on'){ $rich_fsl_Ic_Show = 'true'; }else{ $rich_fsl_Ic_Show = 'false'; }
			if($rich_fsl_PPL_Show == 'on'){ $rich_fsl_PPL_Show = 'true'; }else{ $rich_fsl_PPL_Show = 'false'; }
			if($rich_fsl_Randomize == 'on'){ $rich_fsl_Randomize = 'true'; }else{ $rich_fsl_Randomize = 'false'; }
			if($rich_fsl_Loop == 'on'){ $rich_fsl_Loop = 'true'; }else{ $rich_fsl_Loop = 'false'; }
			
			if($Rich_Web_Sl_CT_ArText == 'on'){ $Rich_Web_Sl_CT_ArText = 'true'; }else{ $Rich_Web_Sl_CT_ArText = 'false'; }
			
			if($Rich_Web_Sl_FS_AP == 'on'){ $Rich_Web_Sl_FS_AP = 'true'; }else{ $Rich_Web_Sl_FS_AP = 'false'; }
			
			if($Rich_Web_Sl_FS_SLoop == 'on'){ $Rich_Web_Sl_FS_SLoop = 'true'; }else{ $Rich_Web_Sl_FS_SLoop = 'false'; }
			if($Rich_Web_Sl_FS_ShNavBut == 'on'){ $Rich_Web_Sl_FS_ShNavBut = 'true'; }else{ $Rich_Web_Sl_FS_ShNavBut = 'false'; }
			
			if($Rich_Web_Sl_FS_Nav_Show == 'on'){ $Rich_Web_Sl_FS_Nav_Show = 'true'; }else{ $Rich_Web_Sl_FS_Nav_Show = 'false'; }
			
			if($Rich_Web_Sl_DS_AP == 'on'){ $Rich_Web_Sl_DS_AP = 'true'; }else{ $Rich_Web_Sl_DS_AP = 'false'; }
			if($Rich_Web_Sl_DS_DFS == 'on'){ $Rich_Web_Sl_DS_DFS = 'true'; }else{ $Rich_Web_Sl_DS_DFS = 'false'; }
			if($Rich_Web_Sl_DS_Tr == 'on'){ $Rich_Web_Sl_DS_Tr = 'true'; }else{ $Rich_Web_Sl_DS_Tr = 'false'; }
			if($Rich_Web_Sl_DS_Arr_Show == 'on'){ $Rich_Web_Sl_DS_Arr_Show = 'true'; }else{ $Rich_Web_Sl_DS_Arr_Show = 'false'; }
			
			if($Rich_Web_Sl_TSL_TA == 'on'){ $Rich_Web_Sl_TSL_TA = 'true'; }else{ $Rich_Web_Sl_TSL_TA = 'false'; }
			if($Rich_Web_Sl_TSL_AP == 'on'){ $Rich_Web_Sl_TSL_AP = 'true'; }else{ $Rich_Web_Sl_TSL_AP = 'false'; }
			if($Rich_Web_Sl_TSL_PH == 'on'){ $Rich_Web_Sl_TSL_PH = 'true'; }else{ $Rich_Web_Sl_TSL_PH = 'false'; }
			if($Rich_Web_Sl_TSL_Loop == 'on'){ $Rich_Web_Sl_TSL_Loop = 'true'; }else{ $Rich_Web_Sl_TSL_Loop = 'false'; }
			if($Rich_Web_Sl_TSL_Nav_Show == 'on'){ $Rich_Web_Sl_TSL_Nav_Show = 'true'; }else{ $Rich_Web_Sl_TSL_Nav_Show = 'false'; }
			if($Rich_Web_Sl_TSL_SS_Show == 'on'){ $Rich_Web_Sl_TSL_SS_Show = 'true'; }else{ $Rich_Web_Sl_TSL_SS_Show = 'false'; }
			if($Rich_Web_Sl_TSL_Arr_Show == 'on'){ $Rich_Web_Sl_TSL_Arr_Show = 'true'; }else{ $Rich_Web_Sl_TSL_Arr_Show = 'false'; }
			if($Rich_Web_AnSL_SSh == 'on'){ $Rich_Web_AnSL_SSh = 'true'; }else{ $Rich_Web_AnSL_SSh = 'false'; }
			if($Rich_Web_AnSL_N_Sh == 'on'){ $Rich_Web_AnSL_N_Sh = 'true'; }else{ $Rich_Web_AnSL_N_Sh = 'false'; }
			

			if(isset($_POST['rich_webSlSave']))
			{
				$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, slider_name, slider_type) VALUES (%d, %s, %s)", '', $Rich_Web_slider_name, $Rich_Web_slider_type));

				$Rich_Web_Slider_ID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d order by id desc limit 1", 0));

				if($Rich_Web_slider_type=='Slider Navigation')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name5 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, rich_web_Sl1_SlS, rich_web_Sl1_SlSS, rich_web_Sl1_PoH, rich_web_Sl1_W, rich_web_Sl1_H, rich_web_Sl1_BoxS, rich_web_Sl1_BoxSC, rich_web_Sl1_IBW, rich_web_Sl1_IBS, rich_web_Sl1_IBC, rich_web_Sl1_IBR, rich_web_Sl1_TBgC, rich_web_Sl1_TC, rich_web_Sl1_TTA, rich_web_Sl1_TFS, rich_web_Sl1_TFF, rich_web_Sl1_TUp, rich_web_Sl1_ArBgC, rich_web_Sl1_ArOp, rich_web_Sl1_ArType, rich_web_Sl1_ArHBgC, rich_web_Sl1_ArHOp, rich_web_Sl1_ArHEff, rich_web_Sl1_ArBoxW, rich_web_Sl1_NavW, rich_web_Sl1_NavH, rich_web_Sl1_NavPB, rich_web_Sl1_NavBW, rich_web_Sl1_NavBS, rich_web_Sl1_NavBC, rich_web_Sl1_NavBR, rich_web_Sl1_NavCC, rich_web_Sl1_NavHC, rich_web_Sl1_ArPFT, rich_web_Sl1_NavPos) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl1_SlS, $Rich_Web_Sl1_SlSS, $Rich_Web_Sl1_PoH, $Rich_Web_Sl1_W, $Rich_Web_Sl1_H, $Rich_Web_Sl1_BoxS, $Rich_Web_Sl1_BoxSC, $Rich_Web_Sl1_IBW, $Rich_Web_Sl1_IBS, $Rich_Web_Sl1_IBC, $Rich_Web_Sl1_IBR, $Rich_Web_Sl1_TBgC, $Rich_Web_Sl1_TC, $Rich_Web_Sl1_TTA, $Rich_Web_Sl1_TFS, $Rich_Web_Sl1_TFF, $Rich_Web_Sl1_TUp, $Rich_Web_Sl1_ArBgC, $Rich_Web_Sl1_ArOp, $Rich_Web_Sl1_ArType, $Rich_Web_Sl1_ArHBgC, $Rich_Web_Sl1_ArHOp, $Rich_Web_Sl1_ArHEff, $Rich_Web_Sl1_ArBoxW, $Rich_Web_Sl1_NavW, $Rich_Web_Sl1_NavH, $Rich_Web_Sl1_NavPB, $Rich_Web_Sl1_NavBW, $Rich_Web_Sl1_NavBS, $Rich_Web_Sl1_NavBC, $Rich_Web_Sl1_NavBR, $Rich_Web_Sl1_NavCC, $Rich_Web_Sl1_NavHC, $Rich_Web_Sl1_ArPFT, $Rich_Web_Sl1_NavPos));
					
				}
				else if($Rich_Web_slider_type=='Content Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name6 (id, richideo_EN_ID, rich_web_slider_name, rich_web_slider_type, rich_CS_BIB, rich_CS_P, rich_CS_Loop, rich_CS_SD, rich_CS_AT, rich_CS_Cont_BgC, rich_CS_Cont_BSC, rich_CS_Cont_W, rich_CS_Cont_H, rich_CS_Cont_Op, rich_CS_Cont_BW, rich_CS_Cont_BS, rich_CS_Cont_BC, rich_CS_Cont_BR, rich_CS_Video_TShow, rich_CS_Video_TC, rich_CS_Video_TSC, rich_CS_Video_TFS, rich_CS_Video_TFF, rich_CS_Video_TTA, rich_CS_Video_DShow, rich_CS_Video_DC, rich_CS_Video_DSC, rich_CS_Video_DFS, rich_CS_Video_DFF, rich_CS_Video_DTA, rich_CS_Video_Show, rich_CS_Video_W, rich_CS_Video_H, rich_CS_LFS, rich_CS_LFF, rich_CS_LC, rich_CS_LT, rich_CS_LBgC, rich_CS_LBC, rich_CS_LBR, rich_CS_LPos, rich_CS_LHBgC, rich_CS_LHC, rich_CS_Video_ArrShow, rich_CS_AFS, rich_CS_AC, rich_CS_Icon, rich_CS_Link_BW, rich_CS_Link_BS) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $rich_CS_BIB, $rich_CS_P, $rich_CS_Loop, $rich_CS_SD, $rich_CS_AT, $rich_CS_Cont_BgC, $rich_CS_Cont_BSC, $rich_CS_Cont_W, $rich_CS_Cont_H, $rich_CS_Cont_Op, $rich_CS_Cont_BW, $rich_CS_Cont_BS, $rich_CS_Cont_BC, $rich_CS_Cont_BR, $rich_CS_Video_TShow, $rich_CS_Video_TC, $rich_CS_Video_TSC, $rich_CS_Video_TFS,$rich_CS_Video_TFF, $rich_CS_Video_TTA, $rich_CS_Video_DShow, $rich_CS_Video_DC, $rich_CS_Video_DSC, $rich_CS_Video_DFS, $rich_CS_Video_DFF, $rich_CS_Video_DTA, $rich_CS_Video_Show, $rich_CS_Video_W, $rich_CS_Video_H, $rich_CS_LFS, $rich_CS_LFF, $rich_CS_LC, $rich_CS_LT, $rich_CS_LBgC, $rich_CS_LBC, $rich_CS_LBR, $rich_CS_LPos, $rich_CS_LHBgC, $rich_CS_LHC, $rich_CS_Video_ArrShow, $rich_CS_AFS, $rich_CS_AC, $rich_CS_Icon, $rich_CS_Link_BW, $rich_CS_Link_BS));
					
				}
				else if($Rich_Web_slider_type=='Fashion Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, rich_fsl_animation, rich_fsl_SShow, rich_fsl_SShow_Speed, rich_fsl_Anim_Dur, rich_fsl_Ic_Show, rich_fsl_PPL_Show, rich_fsl_Randomize, rich_fsl_Loop, rich_fsl_Width, rich_fsl_Height, rich_fsl_Border_Width, rich_fsl_Border_Style, rich_fsl_Border_Color, rich_fsl_Box_Shadow, rich_fsl_Shadow_Color, rich_fsl_Desc_Show, rich_fsl_Desc_Size, rich_fsl_Desc_Color, rich_fsl_Desc_Font_Family, rich_fsl_Desc_Text_Align, rich_fsl_Desc_Bg_Color, rich_fsl_Title_Font_Size, rich_fsl_Title_Color, rich_fsl_Title_Text_Shadow, rich_fsl_Title_Font_Family, rich_fsl_Title_Text_Align, rich_fsl_Link_Text, rich_fsl_Link_Border_Width, rich_fsl_Link_Border_Style, rich_fsl_Link_Border_Color, rich_fsl_Link_Font_Size, rich_fsl_Link_Color, rich_fsl_Link_Font_Family, rich_fsl_Link_Bg_Color, rich_fsl_Link_Hover_Border_Color, rich_fsl_Link_Hover_Bg_Color, rich_fsl_Link_Hover_Color, rich_fsl_Icon_Size, rich_fsl_Icon_Type, rich_fsl_Hover_Icon_Type) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $rich_fsl_animation, $rich_fsl_SShow, $rich_fsl_SShow_Speed, $rich_fsl_Anim_Dur, $rich_fsl_Ic_Show, $rich_fsl_PPL_Show, $rich_fsl_Randomize, $rich_fsl_Loop, $rich_fsl_Width, $rich_fsl_Height, $rich_fsl_Border_Width, $rich_fsl_Border_Style, $rich_fsl_Border_Color, $rich_fsl_Box_Shadow, $rich_fsl_Shadow_Color, $rich_fsl_Desc_Show, $rich_fsl_Desc_Size, $rich_fsl_Desc_Color, $rich_fsl_Desc_Font_Family, $rich_fsl_Desc_Text_Align, $rich_fsl_Desc_Bg_Color, $rich_fsl_Title_Font_Size, $rich_fsl_Title_Color, $rich_fsl_Title_Text_Shadow, $rich_fsl_Title_Font_Family, $rich_fsl_Title_Text_Align, $rich_fsl_Link_Text, $rich_fsl_Link_Border_Width, $rich_fsl_Link_Border_Style, $rich_fsl_Link_Border_Color, $rich_fsl_Link_Font_Size, $rich_fsl_Link_Color, $rich_fsl_Link_Font_Family, $rich_fsl_Link_Bg_Color, $rich_fsl_Link_Hover_Border_Color, $rich_fsl_Link_Hover_Bg_Color, $rich_fsl_Link_Hover_Color, $rich_fsl_Icon_Size, $rich_fsl_Icon_Type, $rich_fsl_Hover_Icon_Type));
					
				}
				else if($Rich_Web_slider_type=='Circle Thumbnails')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_CT_W, Rich_Web_Sl_CT_H, Rich_Web_Sl_CT_BW, Rich_Web_Sl_CT_BS, Rich_Web_Sl_CT_BC, Rich_Web_Sl_CT_BxSShow, Rich_Web_Sl_CT_BxSType, Rich_Web_Sl_CT_BxS, Rich_Web_Sl_CT_BxC, Rich_Web_Sl_CT_TDABgC, Rich_Web_Sl_CT_TDAPos, Rich_Web_Sl_CT_LBgC, Rich_Web_Sl_CT_TFS, Rich_Web_Sl_CT_TFF, Rich_Web_Sl_CT_TCC, Rich_Web_Sl_CT_TC, Rich_Web_Sl_CT_ArBgC, Rich_Web_Sl_CT_ArBR, Rich_Web_Sl_CT_ArType, Rich_Web_Sl_CT_ArHBC, Rich_Web_Sl_CT_ArHBR, Rich_Web_Sl_CT_ArText, Rich_Web_Sl_CT_ArLeft, Rich_Web_Sl_CT_ArRight, Rich_Web_Sl_CT_ArTextC, Rich_Web_Sl_CT_ArTextFS, Rich_Web_Sl_CT_ArTextFF) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_CT_W, $Rich_Web_Sl_CT_H, $Rich_Web_Sl_CT_BW, $Rich_Web_Sl_CT_BS, $Rich_Web_Sl_CT_BC, $Rich_Web_Sl_CT_BxSShow, $Rich_Web_Sl_CT_BxSType, $Rich_Web_Sl_CT_BxS, $Rich_Web_Sl_CT_BxC, $Rich_Web_Sl_CT_TDABgC, $Rich_Web_Sl_CT_TDAPos, $Rich_Web_Sl_CT_LBgC, $Rich_Web_Sl_CT_TFS, $Rich_Web_Sl_CT_TFF, $Rich_Web_Sl_CT_TCC, $Rich_Web_Sl_CT_TC, $Rich_Web_Sl_CT_ArBgC, $Rich_Web_Sl_CT_ArBR, $Rich_Web_Sl_CT_ArType, $Rich_Web_Sl_CT_ArHBC, $Rich_Web_Sl_CT_ArHBR, $Rich_Web_Sl_CT_ArText, $Rich_Web_Sl_CT_ArLeft, $Rich_Web_Sl_CT_ArRight, $Rich_Web_Sl_CT_ArTextC, $Rich_Web_Sl_CT_ArTextFS, $Rich_Web_Sl_CT_ArTextFF));
					
				}
				else if($Rich_Web_slider_type=='Slider Carousel')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_SC_BW, Rich_Web_Sl_SC_BS, Rich_Web_Sl_SC_BC, Rich_Web_Sl_SC_BoxShShow, Rich_Web_Sl_SC_BoxShType, Rich_Web_Sl_SC_BoxSh, Rich_Web_Sl_SC_BoxShC, Rich_Web_Sl_SC_IW, Rich_Web_Sl_SC_IH, Rich_Web_Sl_SC_IBW, Rich_Web_Sl_SC_IBS, Rich_Web_Sl_SC_IBC, Rich_Web_Sl_SC_IBR, Rich_Web_Sl_SC_ICBW, Rich_Web_Sl_SC_ICBS, Rich_Web_Sl_SC_ICBC, Rich_Web_Sl_SC_TBgC, Rich_Web_Sl_SC_TC, Rich_Web_Sl_SC_TFS, Rich_Web_Sl_SC_TFF, Rich_Web_Sl_SC_THBgC, Rich_Web_Sl_SC_THC, Rich_Web_Sl_SC_Pop_OC, Rich_Web_Sl_SC_Pop_BW, Rich_Web_Sl_SC_Pop_BC, Rich_Web_Sl_SC_Pop_BoxShShow, Rich_Web_Sl_SC_Pop_BoxShType, Rich_Web_Sl_SC_Pop_BoxSh, Rich_Web_Sl_SC_Pop_BoxShC, Rich_Web_Sl_SC_L_BgC, Rich_Web_Sl_SC_L_C, Rich_Web_Sl_SC_L_FS, Rich_Web_Sl_SC_L_BW, Rich_Web_Sl_SC_L_BS, Rich_Web_Sl_SC_L_BC, Rich_Web_Sl_SC_L_BR, Rich_Web_Sl_SC_L_HBgC, Rich_Web_Sl_SC_L_HC, Rich_Web_Sl_SC_L_Type, Rich_Web_Sl_SC_L_Text, Rich_Web_Sl_SC_L_IType, Rich_Web_Sl_SC_L_FF, Rich_Web_Sl_SC_PI_BgC, Rich_Web_Sl_SC_PI_C, Rich_Web_Sl_SC_PI_FS, Rich_Web_Sl_SC_PI_BW, Rich_Web_Sl_SC_PI_BS, Rich_Web_Sl_SC_PI_BC, Rich_Web_Sl_SC_PI_BR, Rich_Web_Sl_SC_PI_HBgC, Rich_Web_Sl_SC_PI_HC, Rich_Web_Sl_SC_PI_Type, Rich_Web_Sl_SC_PI_Text, Rich_Web_Sl_SC_PI_IType, Rich_Web_Sl_SC_PI_FF, Rich_Web_Sl_SC_Arr_BgC, Rich_Web_Sl_SC_Arr_C, Rich_Web_Sl_SC_Arr_FS, Rich_Web_Sl_SC_Arr_BW, Rich_Web_Sl_SC_Arr_BS, Rich_Web_Sl_SC_Arr_BC, Rich_Web_Sl_SC_Arr_BR, Rich_Web_Sl_SC_Arr_HBgC, Rich_Web_Sl_SC_Arr_HC, Rich_Web_Sl_SC_Arr_Type, Rich_Web_Sl_SC_Arr_FF, Rich_Web_Sl_SC_Arr_IType, Rich_Web_Sl_SC_Arr_Next, Rich_Web_Sl_SC_Arr_Prev, Rich_Web_Sl_SC_PCI_FS, Rich_Web_Sl_SC_PCI_C, Rich_Web_Sl_SC_PCI_Type) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_SC_BW, $Rich_Web_Sl_SC_BS, $Rich_Web_Sl_SC_BC, $Rich_Web_Sl_SC_BoxShShow, $Rich_Web_Sl_SC_BoxShType, $Rich_Web_Sl_SC_BoxSh, $Rich_Web_Sl_SC_BoxShC, $Rich_Web_Sl_SC_IW, $Rich_Web_Sl_SC_IH, $Rich_Web_Sl_SC_IBW, $Rich_Web_Sl_SC_IBS, $Rich_Web_Sl_SC_IBC, $Rich_Web_Sl_SC_IBR, $Rich_Web_Sl_SC_ICBW, $Rich_Web_Sl_SC_ICBS, $Rich_Web_Sl_SC_ICBC, $Rich_Web_Sl_SC_TBgC, $Rich_Web_Sl_SC_TC, $Rich_Web_Sl_SC_TFS, $Rich_Web_Sl_SC_TFF, $Rich_Web_Sl_SC_THBgC, $Rich_Web_Sl_SC_THC, $Rich_Web_Sl_SC_Pop_OC, $Rich_Web_Sl_SC_Pop_BW, $Rich_Web_Sl_SC_Pop_BC, $Rich_Web_Sl_SC_Pop_BoxShShow, $Rich_Web_Sl_SC_Pop_BoxShType, $Rich_Web_Sl_SC_Pop_BoxSh, $Rich_Web_Sl_SC_Pop_BoxShC, $Rich_Web_Sl_SC_L_BgC, $Rich_Web_Sl_SC_L_C, $Rich_Web_Sl_SC_L_FS, $Rich_Web_Sl_SC_L_BW, $Rich_Web_Sl_SC_L_BS, $Rich_Web_Sl_SC_L_BC, $Rich_Web_Sl_SC_L_BR, $Rich_Web_Sl_SC_L_HBgC, $Rich_Web_Sl_SC_L_HC, $Rich_Web_Sl_SC_L_Type, $Rich_Web_Sl_SC_L_Text, $Rich_Web_Sl_SC_L_IType, $Rich_Web_Sl_SC_L_FF, $Rich_Web_Sl_SC_PI_BgC, $Rich_Web_Sl_SC_PI_C, $Rich_Web_Sl_SC_PI_FS, $Rich_Web_Sl_SC_PI_BW, $Rich_Web_Sl_SC_PI_BS, $Rich_Web_Sl_SC_PI_BC, $Rich_Web_Sl_SC_PI_BR, $Rich_Web_Sl_SC_PI_HBgC, $Rich_Web_Sl_SC_PI_HC, $Rich_Web_Sl_SC_PI_Type, $Rich_Web_Sl_SC_PI_Text, $Rich_Web_Sl_SC_PI_IType, $Rich_Web_Sl_SC_PI_FF, $Rich_Web_Sl_SC_Arr_BgC, $Rich_Web_Sl_SC_Arr_C, $Rich_Web_Sl_SC_Arr_FS, $Rich_Web_Sl_SC_Arr_BW, $Rich_Web_Sl_SC_Arr_BS, $Rich_Web_Sl_SC_Arr_BC, $Rich_Web_Sl_SC_Arr_BR, $Rich_Web_Sl_SC_Arr_HBgC, $Rich_Web_Sl_SC_Arr_HC, $Rich_Web_Sl_SC_Arr_Type, $Rich_Web_Sl_SC_Arr_FF, $Rich_Web_Sl_SC_Arr_IType, $Rich_Web_Sl_SC_Arr_Next, $Rich_Web_Sl_SC_Arr_Prev, $Rich_Web_Sl_SC_PCI_FS, $Rich_Web_Sl_SC_PCI_C, $Rich_Web_Sl_SC_PCI_Type));
					
				}
				else if($Rich_Web_slider_type=='Flexible Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name10 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_FS_BgC, Rich_Web_Sl_FS_AP, Rich_Web_Sl_FS_TS, Rich_Web_Sl_FS_PT, Rich_Web_Sl_FS_SS, Rich_Web_Sl_FS_SVis, Rich_Web_Sl_FS_CS, Rich_Web_Sl_FS_SLoop, Rich_Web_Sl_FS_SSc, Rich_Web_Sl_FS_SlPos, Rich_Web_Sl_FS_ShNavBut, Rich_Web_Sl_FS_I_W, Rich_Web_Sl_FS_I_H, Rich_Web_Sl_FS_I_BW, Rich_Web_Sl_FS_I_BS, Rich_Web_Sl_FS_I_BC, Rich_Web_Sl_FS_I_BR, Rich_Web_Sl_FS_I_BoxShShow, Rich_Web_Sl_FS_I_BoxShType, Rich_Web_Sl_FS_I_BoxSh, Rich_Web_Sl_FS_I_BoxShC, Rich_Web_Sl_FS_T_C, Rich_Web_Sl_FS_T_FF, Rich_Web_Sl_FS_Nav_Show, Rich_Web_Sl_FS_Nav_W, Rich_Web_Sl_FS_Nav_H, Rich_Web_Sl_FS_Nav_BW, Rich_Web_Sl_FS_Nav_BS, Rich_Web_Sl_FS_Nav_BC, Rich_Web_Sl_FS_Nav_BR, Rich_Web_Sl_FS_Nav_PB, Rich_Web_Sl_FS_Nav_CC, Rich_Web_Sl_FS_Nav_HC, Rich_Web_Sl_FS_Nav_C, Rich_Web_Sl_FS_Arr_Show, Rich_Web_Sl_FS_Arr_Type, Rich_Web_Sl_FS_Arr_S, Rich_Web_Sl_FS_Arr_C) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_FS_BgC, $Rich_Web_Sl_FS_AP, $Rich_Web_Sl_FS_TS, $Rich_Web_Sl_FS_PT, $Rich_Web_Sl_FS_SS, $Rich_Web_Sl_FS_SVis, $Rich_Web_Sl_FS_CS, $Rich_Web_Sl_FS_SLoop, $Rich_Web_Sl_FS_SSc, $Rich_Web_Sl_FS_SlPos, $Rich_Web_Sl_FS_ShNavBut, $Rich_Web_Sl_FS_I_W, $Rich_Web_Sl_FS_I_H, $Rich_Web_Sl_FS_I_BW, $Rich_Web_Sl_FS_I_BS, $Rich_Web_Sl_FS_I_BC, $Rich_Web_Sl_FS_I_BR, $Rich_Web_Sl_FS_I_BoxShShow, $Rich_Web_Sl_FS_I_BoxShType, $Rich_Web_Sl_FS_I_BoxSh, $Rich_Web_Sl_FS_I_BoxShC, $Rich_Web_Sl_FS_T_C, $Rich_Web_Sl_FS_T_FF, $Rich_Web_Sl_FS_Nav_Show, $Rich_Web_Sl_FS_Nav_W, $Rich_Web_Sl_FS_Nav_H, $Rich_Web_Sl_FS_Nav_BW, $Rich_Web_Sl_FS_Nav_BS, $Rich_Web_Sl_FS_Nav_BC, $Rich_Web_Sl_FS_Nav_BR, $Rich_Web_Sl_FS_Nav_PB, $Rich_Web_Sl_FS_Nav_CC, $Rich_Web_Sl_FS_Nav_HC, $Rich_Web_Sl_FS_Nav_C, $Rich_Web_Sl_FS_Arr_Show, $Rich_Web_Sl_FS_Arr_Type, $Rich_Web_Sl_FS_Arr_S, $Rich_Web_Sl_FS_Arr_C));
					
				}
				else if($Rich_Web_slider_type=='Dynamic Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name11 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_DS_AP, Rich_Web_Sl_DS_PT, Rich_Web_Sl_DS_Tr, Rich_Web_Sl_DS_H, Rich_Web_Sl_DS_BW, Rich_Web_Sl_DS_BS, Rich_Web_Sl_DS_BC, Rich_Web_Sl_DS_TFS, Rich_Web_Sl_DS_TFF, Rich_Web_Sl_DS_TC, Rich_Web_Sl_DS_DFS, Rich_Web_Sl_DS_DFF, Rich_Web_Sl_DS_DC, Rich_Web_Sl_DS_LFS, Rich_Web_Sl_DS_LFF, Rich_Web_Sl_DS_LC, Rich_Web_Sl_DS_LBgC, Rich_Web_Sl_DS_LBW, Rich_Web_Sl_DS_LBS, Rich_Web_Sl_DS_LBC, Rich_Web_Sl_DS_LBR, Rich_Web_Sl_DS_LHC, Rich_Web_Sl_DS_LHBgC, Rich_Web_Sl_DS_LT, Rich_Web_Sl_DS_Arr_Show, Rich_Web_Sl_DS_Arr_LT, Rich_Web_Sl_DS_Arr_RT, Rich_Web_Sl_DS_Arr_C, Rich_Web_Sl_DS_Arr_BgC, Rich_Web_Sl_DS_Arr_BW, Rich_Web_Sl_DS_Arr_BS, Rich_Web_Sl_DS_Arr_BC, Rich_Web_Sl_DS_Arr_BR, Rich_Web_Sl_DS_Arr_HC, Rich_Web_Sl_DS_Arr_HBgC, Rich_Web_Sl_DS_Nav_W, Rich_Web_Sl_DS_Nav_H, Rich_Web_Sl_DS_Nav_PB, Rich_Web_Sl_DS_Nav_BW, Rich_Web_Sl_DS_Nav_BS, Rich_Web_Sl_DS_Nav_BC, Rich_Web_Sl_DS_Nav_BR, Rich_Web_Sl_DS_Nav_C, Rich_Web_Sl_DS_Nav_HC, Rich_Web_Sl_DS_Nav_CC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_DS_AP, $Rich_Web_Sl_DS_PT, $Rich_Web_Sl_DS_Tr, $Rich_Web_Sl_DS_H, $Rich_Web_Sl_DS_BW, $Rich_Web_Sl_DS_BS, $Rich_Web_Sl_DS_BC, $Rich_Web_Sl_DS_TFS, $Rich_Web_Sl_DS_TFF, $Rich_Web_Sl_DS_TC, $Rich_Web_Sl_DS_DFS, $Rich_Web_Sl_DS_DFF, $Rich_Web_Sl_DS_DC, $Rich_Web_Sl_DS_LFS, $Rich_Web_Sl_DS_LFF, $Rich_Web_Sl_DS_LC, $Rich_Web_Sl_DS_LBgC, $Rich_Web_Sl_DS_LBW, $Rich_Web_Sl_DS_LBS, $Rich_Web_Sl_DS_LBC, $Rich_Web_Sl_DS_LBR, $Rich_Web_Sl_DS_LHC, $Rich_Web_Sl_DS_LHBgC, $Rich_Web_Sl_DS_LT, $Rich_Web_Sl_DS_Arr_Show, $Rich_Web_Sl_DS_Arr_LT, $Rich_Web_Sl_DS_Arr_RT, $Rich_Web_Sl_DS_Arr_C, $Rich_Web_Sl_DS_Arr_BgC, $Rich_Web_Sl_DS_Arr_BW, $Rich_Web_Sl_DS_Arr_BS, $Rich_Web_Sl_DS_Arr_BC, $Rich_Web_Sl_DS_Arr_BR, $Rich_Web_Sl_DS_Arr_HC, $Rich_Web_Sl_DS_Arr_HBgC, $Rich_Web_Sl_DS_Nav_W, $Rich_Web_Sl_DS_Nav_H, $Rich_Web_Sl_DS_Nav_PB, $Rich_Web_Sl_DS_Nav_BW, $Rich_Web_Sl_DS_Nav_BS, $Rich_Web_Sl_DS_Nav_BC, $Rich_Web_Sl_DS_Nav_BR, $Rich_Web_Sl_DS_Nav_C, $Rich_Web_Sl_DS_Nav_HC, $Rich_Web_Sl_DS_Nav_CC));
					
				}
				else if($Rich_Web_slider_type=='Thumbnails Slider & Lightbox')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name12 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_Sl_TSL_W, Rich_Web_Sl_TSL_H, Rich_Web_Sl_TSL_BW, Rich_Web_Sl_TSL_BS, Rich_Web_Sl_TSL_BC, Rich_Web_Sl_TSL_BR, Rich_Web_Sl_TSL_BoxShShow, Rich_Web_Sl_TSL_BoxShType, Rich_Web_Sl_TSL_BoxSh, Rich_Web_Sl_TSL_BoxShC, Rich_Web_Sl_TSL_CM, Rich_Web_Sl_TSL_TA, Rich_Web_Sl_TSL_AP, Rich_Web_Sl_TSL_PH, Rich_Web_Sl_TSL_Loop, Rich_Web_Sl_TSL_PT, Rich_Web_Sl_TSL_CS, Rich_Web_Sl_TSL_Nav_Show, Rich_Web_Sl_TSL_Nav_W, Rich_Web_Sl_TSL_Nav_H, Rich_Web_Sl_TSL_Nav_PB, Rich_Web_Sl_TSL_Nav_BC, Rich_Web_Sl_TSL_Nav_BR, Rich_Web_Sl_TSL_Nav_CBC, Rich_Web_Sl_TSL_Nav_HBC, Rich_Web_Sl_TSL_Nav_Pos, Rich_Web_Sl_TSL_SS_Show, Rich_Web_Sl_TSL_SS_W, Rich_Web_Sl_TSL_SS_H, Rich_Web_Sl_TSL_SS_BC, Rich_Web_Sl_TSL_SS_BR, Rich_Web_Sl_TSL_SS_StC, Rich_Web_Sl_TSL_SS_SpC, Rich_Web_Sl_TSL_Arr_Show, Rich_Web_Sl_TSL_Arr_Type, Rich_Web_Sl_TSL_Arr_S, Rich_Web_Sl_TSL_Arr_C, Rich_Web_Sl_TSL_Pop_OvC, Rich_Web_Sl_TSL_Pop_BW, Rich_Web_Sl_TSL_Pop_BS, Rich_Web_Sl_TSL_Pop_BC, Rich_Web_Sl_TSL_Pop_BR, Rich_Web_Sl_TSL_Pop_BgC, Rich_Web_Sl_TSL_TFS, Rich_Web_Sl_TSL_TFF, Rich_Web_Sl_TSL_TC, Rich_Web_Sl_TSL_Pop_ArrType, Rich_Web_Sl_TSL_Pop_ArrS, Rich_Web_Sl_TSL_Pop_ArrC, Rich_Web_Sl_TSL_CIT, Rich_Web_Sl_TSL_CIS, Rich_Web_Sl_TSL_CIC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_TSL_W, $Rich_Web_Sl_TSL_H, $Rich_Web_Sl_TSL_BW, $Rich_Web_Sl_TSL_BS, $Rich_Web_Sl_TSL_BC, $Rich_Web_Sl_TSL_BR, $Rich_Web_Sl_TSL_BoxShShow, $Rich_Web_Sl_TSL_BoxShType, $Rich_Web_Sl_TSL_BoxSh, $Rich_Web_Sl_TSL_BoxShC, $Rich_Web_Sl_TSL_CM, $Rich_Web_Sl_TSL_TA, $Rich_Web_Sl_TSL_AP, $Rich_Web_Sl_TSL_PH, $Rich_Web_Sl_TSL_Loop, $Rich_Web_Sl_TSL_PT, $Rich_Web_Sl_TSL_CS, $Rich_Web_Sl_TSL_Nav_Show, $Rich_Web_Sl_TSL_Nav_W, $Rich_Web_Sl_TSL_Nav_H, $Rich_Web_Sl_TSL_Nav_PB, $Rich_Web_Sl_TSL_Nav_BC, $Rich_Web_Sl_TSL_Nav_BR, $Rich_Web_Sl_TSL_Nav_CBC, $Rich_Web_Sl_TSL_Nav_HBC, $Rich_Web_Sl_TSL_Nav_Pos, $Rich_Web_Sl_TSL_SS_Show, $Rich_Web_Sl_TSL_SS_W, $Rich_Web_Sl_TSL_SS_H, $Rich_Web_Sl_TSL_SS_BC, $Rich_Web_Sl_TSL_SS_BR, $Rich_Web_Sl_TSL_SS_StC, $Rich_Web_Sl_TSL_SS_SpC, $Rich_Web_Sl_TSL_Arr_Show, $Rich_Web_Sl_TSL_Arr_Type, $Rich_Web_Sl_TSL_Arr_S, $Rich_Web_Sl_TSL_Arr_C, $Rich_Web_Sl_TSL_Pop_OvC, $Rich_Web_Sl_TSL_Pop_BW, $Rich_Web_Sl_TSL_Pop_BS, $Rich_Web_Sl_TSL_Pop_BC, $Rich_Web_Sl_TSL_Pop_BR, $Rich_Web_Sl_TSL_Pop_BgC, $Rich_Web_Sl_TSL_TFS, $Rich_Web_Sl_TSL_TFF, $Rich_Web_Sl_TSL_TC, $Rich_Web_Sl_TSL_Pop_ArrType, $Rich_Web_Sl_TSL_Pop_ArrS, $Rich_Web_Sl_TSL_Pop_ArrC, $Rich_Web_Sl_TSL_CIT, $Rich_Web_Sl_TSL_CIS, $Rich_Web_Sl_TSL_CIC));
					
				}
				else if($Rich_Web_slider_type=='Accordion Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name13 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_AcSL_W, Rich_Web_AcSL_H, Rich_Web_AcSL_BW, Rich_Web_AcSL_BS, Rich_Web_AcSL_BC, Rich_Web_AcSL_BSh, Rich_Web_AcSL_BShC, Rich_Web_AcSL_Img_W, Rich_Web_AcSL_Img_BSh, Rich_Web_AcSL_Img_BShC, Rich_Web_AcSL_Title_FS, Rich_Web_AcSL_Title_FF, Rich_Web_AcSL_Title_C, Rich_Web_AcSL_Title_TSh, Rich_Web_AcSL_Title_TShC, Rich_Web_AcSL_Title_BgC, Rich_Web_AcSL_Link_FS, Rich_Web_AcSL_Link_FF, Rich_Web_AcSL_Link_C, Rich_Web_AcSL_Link_TSh, Rich_Web_AcSL_Link_TShC, Rich_Web_AcSL_Link_BgC, Rich_Web_AcSL_Link_Text) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_AcSL_W, $Rich_Web_AcSL_H, $Rich_Web_AcSL_BW, $Rich_Web_AcSL_BS, $Rich_Web_AcSL_BC, $Rich_Web_AcSL_BSh, $Rich_Web_AcSL_BShC, $Rich_Web_AcSL_Img_W, $Rich_Web_AcSL_Img_BSh, $Rich_Web_AcSL_Img_BShC, $Rich_Web_AcSL_Title_FS, $Rich_Web_AcSL_Title_FF, $Rich_Web_AcSL_Title_C, $Rich_Web_AcSL_Title_TSh, $Rich_Web_AcSL_Title_TShC, $Rich_Web_AcSL_Title_BgC, $Rich_Web_AcSL_Link_FS, $Rich_Web_AcSL_Link_FF, $Rich_Web_AcSL_Link_C, $Rich_Web_AcSL_Link_TSh, $Rich_Web_AcSL_Link_TShC, $Rich_Web_AcSL_Link_BgC, $Rich_Web_AcSL_Link_Text));
					
				}
				else if($Rich_Web_slider_type=='Animation Slider')
				{
					$wpdb->query($wpdb->prepare("INSERT INTO $table_name14 (id, rich_web_slider_ID, rich_web_slider_name, rich_web_slider_type, Rich_Web_AnSL_W, Rich_Web_AnSL_H, Rich_Web_AnSL_BW, Rich_Web_AnSL_BS, Rich_Web_AnSL_BC, Rich_Web_AnSL_BR, Rich_Web_AnSL_BSh, Rich_Web_AnSL_ShC, Rich_Web_AnSL_ET, Rich_Web_AnSL_SSh, Rich_Web_AnSL_SShChT, Rich_Web_AnSL_T_FS, Rich_Web_AnSL_T_FF, Rich_Web_AnSL_T_C, Rich_Web_AnSL_T_BgC, Rich_Web_AnSL_T_TA, Rich_Web_AnSL_T_Sh, Rich_Web_AnSL_T_ShC, Rich_Web_AnSL_N_Sh, Rich_Web_AnSL_N_S, Rich_Web_AnSL_N_BW, Rich_Web_AnSL_N_BC, Rich_Web_AnSL_N_BgC, Rich_Web_AnSL_N_BS, Rich_Web_AnSL_N_HBgC, Rich_Web_AnSL_N_CC, Rich_Web_AnSL_N_M, Rich_Web_AnSL_Ic_Sh, Rich_Web_AnSL_Ic_T, Rich_Web_AnSL_Ic_S, Rich_Web_AnSL_Ic_C, Rich_Web_AnSL_L_BgC, Rich_Web_AnSL_L_T, Rich_Web_AnSL_L_FS, Rich_Web_AnSL_L_FF, Rich_Web_AnSL_L_C, Rich_Web_AnSL_L1_T, Rich_Web_AnSL_L2_T, Rich_Web_AnSL_L3_T) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $Rich_Web_Slider_ID[0]->id, $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_AnSL_W, $Rich_Web_AnSL_H, $Rich_Web_AnSL_BW, $Rich_Web_AnSL_BS, $Rich_Web_AnSL_BC, $Rich_Web_AnSL_BR, $Rich_Web_AnSL_BSh, $Rich_Web_AnSL_ShC, $Rich_Web_AnSL_ET, $Rich_Web_AnSL_SSh, $Rich_Web_AnSL_SShChT, $Rich_Web_AnSL_T_FS, $Rich_Web_AnSL_T_FF, $Rich_Web_AnSL_T_C, $Rich_Web_AnSL_T_BgC, $Rich_Web_AnSL_T_TA, $Rich_Web_AnSL_T_Sh, $Rich_Web_AnSL_T_ShC, $Rich_Web_AnSL_N_Sh, $Rich_Web_AnSL_N_S, $Rich_Web_AnSL_N_BW, $Rich_Web_AnSL_N_BC, $Rich_Web_AnSL_N_BgC, $Rich_Web_AnSL_N_BS, $Rich_Web_AnSL_N_HBgC, $Rich_Web_AnSL_N_CC, $Rich_Web_AnSL_N_M, $Rich_Web_AnSL_Ic_Sh, $Rich_Web_AnSL_Ic_T, $Rich_Web_AnSL_Ic_S, $Rich_Web_AnSL_Ic_C, $Rich_Web_AnSL_L_BgC, $Rich_Web_AnSL_L_T, $Rich_Web_AnSL_L_FS, $Rich_Web_AnSL_L_FF, $Rich_Web_AnSL_L_C, $Rich_Web_AnSL_L1_T, $Rich_Web_AnSL_L2_T, $Rich_Web_AnSL_L3_T));
					
				}
			}
			else if(isset($_POST['rich_webSlUpdate']))
			{
				$Rich_Web_Slider_UP_ID=sanitize_text_field($_POST['rich_web_Slider_UP_ID']);

				$wpdb->query($wpdb->prepare("UPDATE $table_name2 set slider_name = %s, slider_type = %s WHERE id = %d", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Slider_UP_ID));

				if($Rich_Web_slider_type=='Slider Navigation')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name5 set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_web_Sl1_SlS = %s, rich_web_Sl1_SlSS = %s, rich_web_Sl1_PoH = %s, rich_web_Sl1_W = %s, rich_web_Sl1_H = %s, rich_web_Sl1_BoxS = %s, rich_web_Sl1_BoxSC = %s, rich_web_Sl1_IBW = %s, rich_web_Sl1_IBS = %s, rich_web_Sl1_IBC = %s, rich_web_Sl1_IBR = %s, rich_web_Sl1_TBgC = %s, rich_web_Sl1_TC = %s, rich_web_Sl1_TTA = %s, rich_web_Sl1_TFS = %s, rich_web_Sl1_TFF = %s, rich_web_Sl1_TUp = %s, rich_web_Sl1_ArBgC = %s, rich_web_Sl1_ArOp = %s, rich_web_Sl1_ArType = %s, rich_web_Sl1_ArHBgC = %s, rich_web_Sl1_ArHOp = %s, rich_web_Sl1_ArHEff = %s, rich_web_Sl1_ArBoxW = %s, rich_web_Sl1_NavW = %s, rich_web_Sl1_NavH = %s, rich_web_Sl1_NavPB = %s, rich_web_Sl1_NavBW = %s, rich_web_Sl1_NavBS = %s, rich_web_Sl1_NavBC = %s, rich_web_Sl1_NavBR = %s, rich_web_Sl1_NavCC = %s, rich_web_Sl1_NavHC = %s, rich_web_Sl1_ArPFT = %s, rich_web_Sl1_NavPos = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl1_SlS, $Rich_Web_Sl1_SlSS, $Rich_Web_Sl1_PoH, $Rich_Web_Sl1_W, $Rich_Web_Sl1_H, $Rich_Web_Sl1_BoxS, $Rich_Web_Sl1_BoxSC, $Rich_Web_Sl1_IBW, $Rich_Web_Sl1_IBS, $Rich_Web_Sl1_IBC, $Rich_Web_Sl1_IBR, $Rich_Web_Sl1_TBgC, $Rich_Web_Sl1_TC, $Rich_Web_Sl1_TTA, $Rich_Web_Sl1_TFS, $Rich_Web_Sl1_TFF, $Rich_Web_Sl1_TUp, $Rich_Web_Sl1_ArBgC, $Rich_Web_Sl1_ArOp, $Rich_Web_Sl1_ArType, $Rich_Web_Sl1_ArHBgC, $Rich_Web_Sl1_ArHOp, $Rich_Web_Sl1_ArHEff, $Rich_Web_Sl1_ArBoxW, $Rich_Web_Sl1_NavW, $Rich_Web_Sl1_NavH, $Rich_Web_Sl1_NavPB, $Rich_Web_Sl1_NavBW, $Rich_Web_Sl1_NavBS, $Rich_Web_Sl1_NavBC, $Rich_Web_Sl1_NavBR, $Rich_Web_Sl1_NavCC, $Rich_Web_Sl1_NavHC, $Rich_Web_Sl1_ArPFT, $Rich_Web_Sl1_NavPos, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Content Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name6 set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_CS_BIB = %s, rich_CS_P = %s, rich_CS_Loop = %s, rich_CS_SD = %s, rich_CS_AT = %s, rich_CS_Cont_BgC = %s, rich_CS_Cont_BSC = %s, rich_CS_Cont_W = %s, rich_CS_Cont_H = %s, rich_CS_Cont_Op = %s, rich_CS_Cont_BW = %s, rich_CS_Cont_BS = %s, rich_CS_Cont_BC = %s, rich_CS_Cont_BR = %s, rich_CS_Video_TShow = %s, rich_CS_Video_TC = %s, rich_CS_Video_TSC = %s, rich_CS_Video_TFS = %s, rich_CS_Video_TFF = %s, rich_CS_Video_TTA = %s, rich_CS_Video_DShow = %s, rich_CS_Video_DC = %s, rich_CS_Video_DSC = %s, rich_CS_Video_DFS = %s, rich_CS_Video_DFF = %s, rich_CS_Video_DTA = %s, rich_CS_Video_Show = %s, rich_CS_Video_W = %s, rich_CS_Video_H = %s, rich_CS_LFS = %s, rich_CS_LFF = %s, rich_CS_LC = %s, rich_CS_LT = %s, rich_CS_LBgC = %s, rich_CS_LBC = %s, rich_CS_LBR = %s, rich_CS_LPos = %s, rich_CS_LHBgC = %s, rich_CS_LHC = %s, rich_CS_Video_ArrShow = %s, rich_CS_AFS = %s, rich_CS_AC = %s, rich_CS_Icon = %s, rich_CS_Link_BW = %s, rich_CS_Link_BS = %s WHERE richideo_EN_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $rich_CS_BIB, $rich_CS_P, $rich_CS_Loop, $rich_CS_SD, $rich_CS_AT, $rich_CS_Cont_BgC, $rich_CS_Cont_BSC, $rich_CS_Cont_W, $rich_CS_Cont_H, $rich_CS_Cont_Op, $rich_CS_Cont_BW, $rich_CS_Cont_BS, $rich_CS_Cont_BC, $rich_CS_Cont_BR, $rich_CS_Video_TShow, $rich_CS_Video_TC, $rich_CS_Video_TSC, $rich_CS_Video_TFS, $rich_CS_Video_TFF, $rich_CS_Video_TTA, $rich_CS_Video_DShow, $rich_CS_Video_DC, $rich_CS_Video_DSC, $rich_CS_Video_DFS, $rich_CS_Video_DFF, $rich_CS_Video_DTA, $rich_CS_Video_Show, $rich_CS_Video_W, $rich_CS_Video_H, $rich_CS_LFS, $rich_CS_LFF, $rich_CS_LC, $rich_CS_LT, $rich_CS_LBgC, $rich_CS_LBC, $rich_CS_LBR, $rich_CS_LPos, $rich_CS_LHBgC, $rich_CS_LHC, $rich_CS_Video_ArrShow, $rich_CS_AFS, $rich_CS_AC, $rich_CS_Icon, $rich_CS_Link_BW, $rich_CS_Link_BS, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Fashion Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name7 set rich_web_slider_name = %s, rich_web_slider_type = %s, rich_fsl_animation = %s, rich_fsl_SShow = %s, rich_fsl_SShow_Speed = %s, rich_fsl_Anim_Dur = %s, rich_fsl_Ic_Show = %s, rich_fsl_PPL_Show = %s, rich_fsl_Randomize = %s, rich_fsl_Loop = %s, rich_fsl_Width = %s, rich_fsl_Height = %s, rich_fsl_Border_Width = %s, rich_fsl_Border_Style = %s, rich_fsl_Border_Color = %s, rich_fsl_Box_Shadow = %s, rich_fsl_Shadow_Color = %s, rich_fsl_Desc_Show = %s, rich_fsl_Desc_Size = %s, rich_fsl_Desc_Color = %s, rich_fsl_Desc_Font_Family = %s, rich_fsl_Desc_Text_Align = %s, rich_fsl_Desc_Bg_Color = %s, rich_fsl_Title_Font_Size = %s, rich_fsl_Title_Color = %s, rich_fsl_Title_Text_Shadow = %s, rich_fsl_Title_Font_Family = %s, rich_fsl_Title_Text_Align = %s, rich_fsl_Link_Text = %s, rich_fsl_Link_Border_Width = %s, rich_fsl_Link_Border_Style = %s, rich_fsl_Link_Border_Color = %s, rich_fsl_Link_Font_Size = %s, rich_fsl_Link_Color = %s, rich_fsl_Link_Font_Family = %s, rich_fsl_Link_Bg_Color = %s, rich_fsl_Link_Hover_Border_Color = %s, rich_fsl_Link_Hover_Bg_Color = %s, rich_fsl_Link_Hover_Color = %s, rich_fsl_Icon_Size = %s, rich_fsl_Icon_Type = %s, rich_fsl_Hover_Icon_Type = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $rich_fsl_animation, $rich_fsl_SShow, $rich_fsl_SShow_Speed, $rich_fsl_Anim_Dur, $rich_fsl_Ic_Show, $rich_fsl_PPL_Show, $rich_fsl_Randomize, $rich_fsl_Loop, $rich_fsl_Width, $rich_fsl_Height, $rich_fsl_Border_Width, $rich_fsl_Border_Style, $rich_fsl_Border_Color, $rich_fsl_Box_Shadow, $rich_fsl_Shadow_Color, $rich_fsl_Desc_Show, $rich_fsl_Desc_Size, $rich_fsl_Desc_Color, $rich_fsl_Desc_Font_Family, $rich_fsl_Desc_Text_Align, $rich_fsl_Desc_Bg_Color, $rich_fsl_Title_Font_Size, $rich_fsl_Title_Color, $rich_fsl_Title_Text_Shadow, $rich_fsl_Title_Font_Family, $rich_fsl_Title_Text_Align, $rich_fsl_Link_Text, $rich_fsl_Link_Border_Width, $rich_fsl_Link_Border_Style, $rich_fsl_Link_Border_Color, $rich_fsl_Link_Font_Size, $rich_fsl_Link_Color, $rich_fsl_Link_Font_Family, $rich_fsl_Link_Bg_Color, $rich_fsl_Link_Hover_Border_Color, $rich_fsl_Link_Hover_Bg_Color, $rich_fsl_Link_Hover_Color, $rich_fsl_Icon_Size, $rich_fsl_Icon_Type, $rich_fsl_Hover_Icon_Type, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Circle Thumbnails')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name8 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_CT_W = %s, Rich_Web_Sl_CT_H = %s, Rich_Web_Sl_CT_BW = %s, Rich_Web_Sl_CT_BS = %s, Rich_Web_Sl_CT_BC = %s, Rich_Web_Sl_CT_BxSShow = %s, Rich_Web_Sl_CT_BxSType = %s, Rich_Web_Sl_CT_BxS = %s, Rich_Web_Sl_CT_BxC = %s, Rich_Web_Sl_CT_TDABgC = %s, Rich_Web_Sl_CT_TDAPos = %s, Rich_Web_Sl_CT_LBgC = %s, Rich_Web_Sl_CT_TFS = %s, Rich_Web_Sl_CT_TFF = %s, Rich_Web_Sl_CT_TCC = %s, Rich_Web_Sl_CT_TC = %s, Rich_Web_Sl_CT_ArBgC = %s, Rich_Web_Sl_CT_ArBR = %s, Rich_Web_Sl_CT_ArType = %s, Rich_Web_Sl_CT_ArHBC = %s, Rich_Web_Sl_CT_ArHBR = %s, Rich_Web_Sl_CT_ArText = %s, Rich_Web_Sl_CT_ArLeft = %s, Rich_Web_Sl_CT_ArRight = %s, Rich_Web_Sl_CT_ArTextC = %s, Rich_Web_Sl_CT_ArTextFS = %s, Rich_Web_Sl_CT_ArTextFF = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_CT_W, $Rich_Web_Sl_CT_H, $Rich_Web_Sl_CT_BW, $Rich_Web_Sl_CT_BS, $Rich_Web_Sl_CT_BC, $Rich_Web_Sl_CT_BxSShow, $Rich_Web_Sl_CT_BxSType, $Rich_Web_Sl_CT_BxS, $Rich_Web_Sl_CT_BxC, $Rich_Web_Sl_CT_TDABgC, $Rich_Web_Sl_CT_TDAPos, $Rich_Web_Sl_CT_LBgC, $Rich_Web_Sl_CT_TFS, $Rich_Web_Sl_CT_TFF, $Rich_Web_Sl_CT_TCC, $Rich_Web_Sl_CT_TC, $Rich_Web_Sl_CT_ArBgC, $Rich_Web_Sl_CT_ArBR, $Rich_Web_Sl_CT_ArType, $Rich_Web_Sl_CT_ArHBC, $Rich_Web_Sl_CT_ArHBR, $Rich_Web_Sl_CT_ArText, $Rich_Web_Sl_CT_ArLeft, $Rich_Web_Sl_CT_ArRight, $Rich_Web_Sl_CT_ArTextC, $Rich_Web_Sl_CT_ArTextFS, $Rich_Web_Sl_CT_ArTextFF, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Slider Carousel')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name9 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_SC_BW = %s, Rich_Web_Sl_SC_BS = %s, Rich_Web_Sl_SC_BC = %s, Rich_Web_Sl_SC_BoxShShow = %s, Rich_Web_Sl_SC_BoxShType = %s, Rich_Web_Sl_SC_BoxSh = %s, Rich_Web_Sl_SC_BoxShC = %s, Rich_Web_Sl_SC_IW = %s, Rich_Web_Sl_SC_IH = %s, Rich_Web_Sl_SC_IBW = %s, Rich_Web_Sl_SC_IBS = %s, Rich_Web_Sl_SC_IBC = %s, Rich_Web_Sl_SC_IBR = %s, Rich_Web_Sl_SC_ICBW = %s, Rich_Web_Sl_SC_ICBS = %s, Rich_Web_Sl_SC_ICBC = %s, Rich_Web_Sl_SC_TBgC = %s, Rich_Web_Sl_SC_TC = %s, Rich_Web_Sl_SC_TFS = %s, Rich_Web_Sl_SC_TFF = %s, Rich_Web_Sl_SC_THBgC = %s, Rich_Web_Sl_SC_THC = %s, Rich_Web_Sl_SC_Pop_OC = %s, Rich_Web_Sl_SC_Pop_BW = %s, Rich_Web_Sl_SC_Pop_BC = %s, Rich_Web_Sl_SC_Pop_BoxShShow = %s, Rich_Web_Sl_SC_Pop_BoxShType = %s, Rich_Web_Sl_SC_Pop_BoxSh = %s, Rich_Web_Sl_SC_Pop_BoxShC = %s, Rich_Web_Sl_SC_L_BgC = %s, Rich_Web_Sl_SC_L_C = %s, Rich_Web_Sl_SC_L_FS = %s, Rich_Web_Sl_SC_L_BW = %s, Rich_Web_Sl_SC_L_BS = %s, Rich_Web_Sl_SC_L_BC = %s, Rich_Web_Sl_SC_L_BR = %s, Rich_Web_Sl_SC_L_HBgC = %s, Rich_Web_Sl_SC_L_HC = %s, Rich_Web_Sl_SC_L_Type = %s, Rich_Web_Sl_SC_L_Text = %s, Rich_Web_Sl_SC_L_IType = %s, Rich_Web_Sl_SC_L_FF = %s, Rich_Web_Sl_SC_PI_BgC = %s, Rich_Web_Sl_SC_PI_C = %s, Rich_Web_Sl_SC_PI_FS = %s, Rich_Web_Sl_SC_PI_BW = %s, Rich_Web_Sl_SC_PI_BS = %s, Rich_Web_Sl_SC_PI_BC = %s, Rich_Web_Sl_SC_PI_BR = %s, Rich_Web_Sl_SC_PI_HBgC = %s, Rich_Web_Sl_SC_PI_HC = %s, Rich_Web_Sl_SC_PI_Type = %s, Rich_Web_Sl_SC_PI_Text = %s, Rich_Web_Sl_SC_PI_IType = %s, Rich_Web_Sl_SC_PI_FF = %s, Rich_Web_Sl_SC_Arr_BgC = %s, Rich_Web_Sl_SC_Arr_C = %s, Rich_Web_Sl_SC_Arr_FS = %s, Rich_Web_Sl_SC_Arr_BW = %s, Rich_Web_Sl_SC_Arr_BS = %s, Rich_Web_Sl_SC_Arr_BC = %s, Rich_Web_Sl_SC_Arr_BR = %s, Rich_Web_Sl_SC_Arr_HBgC = %s, Rich_Web_Sl_SC_Arr_HC = %s, Rich_Web_Sl_SC_Arr_Type = %s, Rich_Web_Sl_SC_Arr_FF = %s, Rich_Web_Sl_SC_Arr_IType = %s, Rich_Web_Sl_SC_Arr_Next = %s, Rich_Web_Sl_SC_Arr_Prev = %s, Rich_Web_Sl_SC_PCI_FS = %s, Rich_Web_Sl_SC_PCI_C = %s, Rich_Web_Sl_SC_PCI_Type = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_SC_BW, $Rich_Web_Sl_SC_BS, $Rich_Web_Sl_SC_BC, $Rich_Web_Sl_SC_BoxShShow, $Rich_Web_Sl_SC_BoxShType, $Rich_Web_Sl_SC_BoxSh, $Rich_Web_Sl_SC_BoxShC, $Rich_Web_Sl_SC_IW, $Rich_Web_Sl_SC_IH, $Rich_Web_Sl_SC_IBW, $Rich_Web_Sl_SC_IBS, $Rich_Web_Sl_SC_IBC, $Rich_Web_Sl_SC_IBR, $Rich_Web_Sl_SC_ICBW, $Rich_Web_Sl_SC_ICBS, $Rich_Web_Sl_SC_ICBC, $Rich_Web_Sl_SC_TBgC, $Rich_Web_Sl_SC_TC, $Rich_Web_Sl_SC_TFS, $Rich_Web_Sl_SC_TFF, $Rich_Web_Sl_SC_THBgC, $Rich_Web_Sl_SC_THC, $Rich_Web_Sl_SC_Pop_OC, $Rich_Web_Sl_SC_Pop_BW, $Rich_Web_Sl_SC_Pop_BC, $Rich_Web_Sl_SC_Pop_BoxShShow, $Rich_Web_Sl_SC_Pop_BoxShType, $Rich_Web_Sl_SC_Pop_BoxSh, $Rich_Web_Sl_SC_Pop_BoxShC, $Rich_Web_Sl_SC_L_BgC, $Rich_Web_Sl_SC_L_C, $Rich_Web_Sl_SC_L_FS, $Rich_Web_Sl_SC_L_BW, $Rich_Web_Sl_SC_L_BS, $Rich_Web_Sl_SC_L_BC, $Rich_Web_Sl_SC_L_BR, $Rich_Web_Sl_SC_L_HBgC, $Rich_Web_Sl_SC_L_HC, $Rich_Web_Sl_SC_L_Type, $Rich_Web_Sl_SC_L_Text, $Rich_Web_Sl_SC_L_IType, $Rich_Web_Sl_SC_L_FF, $Rich_Web_Sl_SC_PI_BgC, $Rich_Web_Sl_SC_PI_C, $Rich_Web_Sl_SC_PI_FS, $Rich_Web_Sl_SC_PI_BW, $Rich_Web_Sl_SC_PI_BS, $Rich_Web_Sl_SC_PI_BC, $Rich_Web_Sl_SC_PI_BR, $Rich_Web_Sl_SC_PI_HBgC, $Rich_Web_Sl_SC_PI_HC, $Rich_Web_Sl_SC_PI_Type, $Rich_Web_Sl_SC_PI_Text, $Rich_Web_Sl_SC_PI_IType, $Rich_Web_Sl_SC_PI_FF, $Rich_Web_Sl_SC_Arr_BgC, $Rich_Web_Sl_SC_Arr_C, $Rich_Web_Sl_SC_Arr_FS, $Rich_Web_Sl_SC_Arr_BW, $Rich_Web_Sl_SC_Arr_BS, $Rich_Web_Sl_SC_Arr_BC, $Rich_Web_Sl_SC_Arr_BR, $Rich_Web_Sl_SC_Arr_HBgC, $Rich_Web_Sl_SC_Arr_HC, $Rich_Web_Sl_SC_Arr_Type, $Rich_Web_Sl_SC_Arr_FF, $Rich_Web_Sl_SC_Arr_IType, $Rich_Web_Sl_SC_Arr_Next, $Rich_Web_Sl_SC_Arr_Prev, $Rich_Web_Sl_SC_PCI_FS, $Rich_Web_Sl_SC_PCI_C, $Rich_Web_Sl_SC_PCI_Type, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Flexible Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name10 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_FS_BgC = %s, Rich_Web_Sl_FS_AP = %s, Rich_Web_Sl_FS_TS = %s, Rich_Web_Sl_FS_PT = %s, Rich_Web_Sl_FS_SS = %s, Rich_Web_Sl_FS_SVis = %s, Rich_Web_Sl_FS_CS = %s, Rich_Web_Sl_FS_SLoop = %s, Rich_Web_Sl_FS_SSc = %s, Rich_Web_Sl_FS_SlPos = %s, Rich_Web_Sl_FS_ShNavBut = %s, Rich_Web_Sl_FS_I_W = %s, Rich_Web_Sl_FS_I_H = %s, Rich_Web_Sl_FS_I_BW = %s, Rich_Web_Sl_FS_I_BS = %s, Rich_Web_Sl_FS_I_BC = %s, Rich_Web_Sl_FS_I_BR = %s, Rich_Web_Sl_FS_I_BoxShShow = %s, Rich_Web_Sl_FS_I_BoxShType = %s, Rich_Web_Sl_FS_I_BoxSh = %s, Rich_Web_Sl_FS_I_BoxShC = %s, Rich_Web_Sl_FS_T_C = %s, Rich_Web_Sl_FS_T_FF = %s, Rich_Web_Sl_FS_Nav_Show = %s, Rich_Web_Sl_FS_Nav_W = %s, Rich_Web_Sl_FS_Nav_H = %s, Rich_Web_Sl_FS_Nav_BW = %s, Rich_Web_Sl_FS_Nav_BS = %s, Rich_Web_Sl_FS_Nav_BC = %s, Rich_Web_Sl_FS_Nav_BR = %s, Rich_Web_Sl_FS_Nav_PB = %s, Rich_Web_Sl_FS_Nav_CC = %s, Rich_Web_Sl_FS_Nav_HC = %s, Rich_Web_Sl_FS_Nav_C = %s, Rich_Web_Sl_FS_Arr_Show = %s, Rich_Web_Sl_FS_Arr_Type = %s, Rich_Web_Sl_FS_Arr_S = %s, Rich_Web_Sl_FS_Arr_C = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_FS_BgC, $Rich_Web_Sl_FS_AP, $Rich_Web_Sl_FS_TS, $Rich_Web_Sl_FS_PT, $Rich_Web_Sl_FS_SS, $Rich_Web_Sl_FS_SVis, $Rich_Web_Sl_FS_CS, $Rich_Web_Sl_FS_SLoop, $Rich_Web_Sl_FS_SSc, $Rich_Web_Sl_FS_SlPos, $Rich_Web_Sl_FS_ShNavBut, $Rich_Web_Sl_FS_I_W, $Rich_Web_Sl_FS_I_H, $Rich_Web_Sl_FS_I_BW, $Rich_Web_Sl_FS_I_BS, $Rich_Web_Sl_FS_I_BC, $Rich_Web_Sl_FS_I_BR, $Rich_Web_Sl_FS_I_BoxShShow, $Rich_Web_Sl_FS_I_BoxShType, $Rich_Web_Sl_FS_I_BoxSh, $Rich_Web_Sl_FS_I_BoxShC, $Rich_Web_Sl_FS_T_C, $Rich_Web_Sl_FS_T_FF, $Rich_Web_Sl_FS_Nav_Show, $Rich_Web_Sl_FS_Nav_W, $Rich_Web_Sl_FS_Nav_H, $Rich_Web_Sl_FS_Nav_BW, $Rich_Web_Sl_FS_Nav_BS, $Rich_Web_Sl_FS_Nav_BC, $Rich_Web_Sl_FS_Nav_BR, $Rich_Web_Sl_FS_Nav_PB, $Rich_Web_Sl_FS_Nav_CC, $Rich_Web_Sl_FS_Nav_HC, $Rich_Web_Sl_FS_Nav_C, $Rich_Web_Sl_FS_Arr_Show, $Rich_Web_Sl_FS_Arr_Type, $Rich_Web_Sl_FS_Arr_S, $Rich_Web_Sl_FS_Arr_C, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Dynamic Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name11 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_DS_AP = %s, Rich_Web_Sl_DS_PT = %s, Rich_Web_Sl_DS_Tr = %s, Rich_Web_Sl_DS_H = %s, Rich_Web_Sl_DS_BW = %s, Rich_Web_Sl_DS_BS = %s, Rich_Web_Sl_DS_BC = %s, Rich_Web_Sl_DS_TFS = %s, Rich_Web_Sl_DS_TFF = %s, Rich_Web_Sl_DS_TC = %s, Rich_Web_Sl_DS_DFS = %s, Rich_Web_Sl_DS_DFF = %s, Rich_Web_Sl_DS_DC = %s, Rich_Web_Sl_DS_LFS = %s, Rich_Web_Sl_DS_LFF = %s, Rich_Web_Sl_DS_LC = %s, Rich_Web_Sl_DS_LBgC = %s, Rich_Web_Sl_DS_LBW = %s, Rich_Web_Sl_DS_LBS = %s, Rich_Web_Sl_DS_LBC = %s, Rich_Web_Sl_DS_LBR = %s, Rich_Web_Sl_DS_LHC = %s, Rich_Web_Sl_DS_LHBgC = %s, Rich_Web_Sl_DS_LT = %s, Rich_Web_Sl_DS_Arr_Show = %s, Rich_Web_Sl_DS_Arr_LT = %s, Rich_Web_Sl_DS_Arr_RT = %s, Rich_Web_Sl_DS_Arr_C = %s, Rich_Web_Sl_DS_Arr_BgC = %s, Rich_Web_Sl_DS_Arr_BW = %s, Rich_Web_Sl_DS_Arr_BS = %s, Rich_Web_Sl_DS_Arr_BC = %s, Rich_Web_Sl_DS_Arr_BR = %s, Rich_Web_Sl_DS_Arr_HC = %s, Rich_Web_Sl_DS_Arr_HBgC = %s, Rich_Web_Sl_DS_Nav_W = %s, Rich_Web_Sl_DS_Nav_H = %s, Rich_Web_Sl_DS_Nav_PB = %s, Rich_Web_Sl_DS_Nav_BW = %s, Rich_Web_Sl_DS_Nav_BS = %s, Rich_Web_Sl_DS_Nav_BC = %s, Rich_Web_Sl_DS_Nav_BR = %s, Rich_Web_Sl_DS_Nav_C = %s, Rich_Web_Sl_DS_Nav_HC = %s, Rich_Web_Sl_DS_Nav_CC = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_DS_AP, $Rich_Web_Sl_DS_PT, $Rich_Web_Sl_DS_Tr, $Rich_Web_Sl_DS_H, $Rich_Web_Sl_DS_BW, $Rich_Web_Sl_DS_BS, $Rich_Web_Sl_DS_BC, $Rich_Web_Sl_DS_TFS, $Rich_Web_Sl_DS_TFF, $Rich_Web_Sl_DS_TC, $Rich_Web_Sl_DS_DFS, $Rich_Web_Sl_DS_DFF, $Rich_Web_Sl_DS_DC, $Rich_Web_Sl_DS_LFS, $Rich_Web_Sl_DS_LFF, $Rich_Web_Sl_DS_LC, $Rich_Web_Sl_DS_LBgC, $Rich_Web_Sl_DS_LBW, $Rich_Web_Sl_DS_LBS, $Rich_Web_Sl_DS_LBC, $Rich_Web_Sl_DS_LBR, $Rich_Web_Sl_DS_LHC, $Rich_Web_Sl_DS_LHBgC, $Rich_Web_Sl_DS_LT, $Rich_Web_Sl_DS_Arr_Show, $Rich_Web_Sl_DS_Arr_LT, $Rich_Web_Sl_DS_Arr_RT, $Rich_Web_Sl_DS_Arr_C, $Rich_Web_Sl_DS_Arr_BgC, $Rich_Web_Sl_DS_Arr_BW, $Rich_Web_Sl_DS_Arr_BS, $Rich_Web_Sl_DS_Arr_BC, $Rich_Web_Sl_DS_Arr_BR, $Rich_Web_Sl_DS_Arr_HC, $Rich_Web_Sl_DS_Arr_HBgC, $Rich_Web_Sl_DS_Nav_W, $Rich_Web_Sl_DS_Nav_H, $Rich_Web_Sl_DS_Nav_PB, $Rich_Web_Sl_DS_Nav_BW, $Rich_Web_Sl_DS_Nav_BS, $Rich_Web_Sl_DS_Nav_BC, $Rich_Web_Sl_DS_Nav_BR, $Rich_Web_Sl_DS_Nav_C, $Rich_Web_Sl_DS_Nav_HC, $Rich_Web_Sl_DS_Nav_CC, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Thumbnails Slider & Lightbox')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name12 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_Sl_TSL_W = %s, Rich_Web_Sl_TSL_H = %s, Rich_Web_Sl_TSL_BW = %s, Rich_Web_Sl_TSL_BS = %s, Rich_Web_Sl_TSL_BC = %s, Rich_Web_Sl_TSL_BR = %s, Rich_Web_Sl_TSL_BoxShShow = %s, Rich_Web_Sl_TSL_BoxShType = %s, Rich_Web_Sl_TSL_BoxSh = %s, Rich_Web_Sl_TSL_BoxShC = %s, Rich_Web_Sl_TSL_CM = %s, Rich_Web_Sl_TSL_TA = %s, Rich_Web_Sl_TSL_AP = %s, Rich_Web_Sl_TSL_PH = %s, Rich_Web_Sl_TSL_Loop = %s, Rich_Web_Sl_TSL_PT = %s, Rich_Web_Sl_TSL_CS = %s, Rich_Web_Sl_TSL_Nav_Show = %s, Rich_Web_Sl_TSL_Nav_W = %s, Rich_Web_Sl_TSL_Nav_H = %s, Rich_Web_Sl_TSL_Nav_PB = %s, Rich_Web_Sl_TSL_Nav_BC = %s, Rich_Web_Sl_TSL_Nav_BR = %s, Rich_Web_Sl_TSL_Nav_CBC = %s, Rich_Web_Sl_TSL_Nav_HBC = %s, Rich_Web_Sl_TSL_Nav_Pos = %s, Rich_Web_Sl_TSL_SS_Show = %s, Rich_Web_Sl_TSL_SS_W = %s, Rich_Web_Sl_TSL_SS_H = %s, Rich_Web_Sl_TSL_SS_BC = %s, Rich_Web_Sl_TSL_SS_BR = %s, Rich_Web_Sl_TSL_SS_StC = %s, Rich_Web_Sl_TSL_SS_SpC = %s, Rich_Web_Sl_TSL_Arr_Show = %s, Rich_Web_Sl_TSL_Arr_Type = %s, Rich_Web_Sl_TSL_Arr_S = %s, Rich_Web_Sl_TSL_Arr_C = %s, Rich_Web_Sl_TSL_Pop_OvC = %s, Rich_Web_Sl_TSL_Pop_BW = %s, Rich_Web_Sl_TSL_Pop_BS = %s, Rich_Web_Sl_TSL_Pop_BC = %s, Rich_Web_Sl_TSL_Pop_BR = %s, Rich_Web_Sl_TSL_Pop_BgC = %s, Rich_Web_Sl_TSL_TFS = %s, Rich_Web_Sl_TSL_TFF = %s, Rich_Web_Sl_TSL_TC = %s, Rich_Web_Sl_TSL_Pop_ArrType = %s, Rich_Web_Sl_TSL_Pop_ArrS = %s, Rich_Web_Sl_TSL_Pop_ArrC = %s, Rich_Web_Sl_TSL_CIT = %s, Rich_Web_Sl_TSL_CIS = %s, Rich_Web_Sl_TSL_CIC = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_Sl_TSL_W, $Rich_Web_Sl_TSL_H, $Rich_Web_Sl_TSL_BW, $Rich_Web_Sl_TSL_BS, $Rich_Web_Sl_TSL_BC, $Rich_Web_Sl_TSL_BR, $Rich_Web_Sl_TSL_BoxShShow, $Rich_Web_Sl_TSL_BoxShType, $Rich_Web_Sl_TSL_BoxSh, $Rich_Web_Sl_TSL_BoxShC, $Rich_Web_Sl_TSL_CM, $Rich_Web_Sl_TSL_TA, $Rich_Web_Sl_TSL_AP, $Rich_Web_Sl_TSL_PH, $Rich_Web_Sl_TSL_Loop, $Rich_Web_Sl_TSL_PT, $Rich_Web_Sl_TSL_CS, $Rich_Web_Sl_TSL_Nav_Show, $Rich_Web_Sl_TSL_Nav_W, $Rich_Web_Sl_TSL_Nav_H, $Rich_Web_Sl_TSL_Nav_PB, $Rich_Web_Sl_TSL_Nav_BC, $Rich_Web_Sl_TSL_Nav_BR, $Rich_Web_Sl_TSL_Nav_CBC, $Rich_Web_Sl_TSL_Nav_HBC, $Rich_Web_Sl_TSL_Nav_Pos, $Rich_Web_Sl_TSL_SS_Show, $Rich_Web_Sl_TSL_SS_W, $Rich_Web_Sl_TSL_SS_H, $Rich_Web_Sl_TSL_SS_BC, $Rich_Web_Sl_TSL_SS_BR, $Rich_Web_Sl_TSL_SS_StC, $Rich_Web_Sl_TSL_SS_SpC, $Rich_Web_Sl_TSL_Arr_Show, $Rich_Web_Sl_TSL_Arr_Type, $Rich_Web_Sl_TSL_Arr_S, $Rich_Web_Sl_TSL_Arr_C, $Rich_Web_Sl_TSL_Pop_OvC, $Rich_Web_Sl_TSL_Pop_BW, $Rich_Web_Sl_TSL_Pop_BS, $Rich_Web_Sl_TSL_Pop_BC, $Rich_Web_Sl_TSL_Pop_BR, $Rich_Web_Sl_TSL_Pop_BgC, $Rich_Web_Sl_TSL_TFS, $Rich_Web_Sl_TSL_TFF, $Rich_Web_Sl_TSL_TC, $Rich_Web_Sl_TSL_Pop_ArrType, $Rich_Web_Sl_TSL_Pop_ArrS, $Rich_Web_Sl_TSL_Pop_ArrC, $Rich_Web_Sl_TSL_CIT, $Rich_Web_Sl_TSL_CIS, $Rich_Web_Sl_TSL_CIC, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Accordion Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name13 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_AcSL_W = %s, Rich_Web_AcSL_H = %s, Rich_Web_AcSL_BW = %s, Rich_Web_AcSL_BS = %s, Rich_Web_AcSL_BC = %s, Rich_Web_AcSL_BSh = %s, Rich_Web_AcSL_BShC = %s, Rich_Web_AcSL_Img_W = %s, Rich_Web_AcSL_Img_BSh = %s, Rich_Web_AcSL_Img_BShC = %s, Rich_Web_AcSL_Title_FS = %s, Rich_Web_AcSL_Title_FF = %s, Rich_Web_AcSL_Title_C = %s, Rich_Web_AcSL_Title_TSh = %s, Rich_Web_AcSL_Title_TShC = %s, Rich_Web_AcSL_Title_BgC = %s, Rich_Web_AcSL_Link_FS = %s, Rich_Web_AcSL_Link_FF = %s, Rich_Web_AcSL_Link_C = %s, Rich_Web_AcSL_Link_TSh = %s, Rich_Web_AcSL_Link_TShC = %s, Rich_Web_AcSL_Link_BgC = %s, Rich_Web_AcSL_Link_Text = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_AcSL_W, $Rich_Web_AcSL_H, $Rich_Web_AcSL_BW, $Rich_Web_AcSL_BS, $Rich_Web_AcSL_BC, $Rich_Web_AcSL_BSh, $Rich_Web_AcSL_BShC, $Rich_Web_AcSL_Img_W, $Rich_Web_AcSL_Img_BSh, $Rich_Web_AcSL_Img_BShC, $Rich_Web_AcSL_Title_FS, $Rich_Web_AcSL_Title_FF, $Rich_Web_AcSL_Title_C, $Rich_Web_AcSL_Title_TSh, $Rich_Web_AcSL_Title_TShC, $Rich_Web_AcSL_Title_BgC, $Rich_Web_AcSL_Link_FS, $Rich_Web_AcSL_Link_FF, $Rich_Web_AcSL_Link_C, $Rich_Web_AcSL_Link_TSh, $Rich_Web_AcSL_Link_TShC, $Rich_Web_AcSL_Link_BgC, $Rich_Web_AcSL_Link_Text, $Rich_Web_Slider_UP_ID));
					
				}
				else if($Rich_Web_slider_type=='Animation Slider')
				{
					$wpdb->query($wpdb->prepare("UPDATE $table_name14 set rich_web_slider_name = %s, rich_web_slider_type = %s, Rich_Web_AnSL_W = %s, Rich_Web_AnSL_H = %s, Rich_Web_AnSL_BW = %s, Rich_Web_AnSL_BS = %s, Rich_Web_AnSL_BC = %s, Rich_Web_AnSL_BR = %s, Rich_Web_AnSL_BSh = %s, Rich_Web_AnSL_ShC = %s, Rich_Web_AnSL_ET = %s, Rich_Web_AnSL_SSh = %s, Rich_Web_AnSL_SShChT = %s, Rich_Web_AnSL_T_FS = %s, Rich_Web_AnSL_T_FF = %s, Rich_Web_AnSL_T_C = %s, Rich_Web_AnSL_T_BgC = %s, Rich_Web_AnSL_T_TA = %s, Rich_Web_AnSL_T_Sh = %s, Rich_Web_AnSL_T_ShC = %s, Rich_Web_AnSL_N_Sh = %s, Rich_Web_AnSL_N_S = %s, Rich_Web_AnSL_N_BW = %s, Rich_Web_AnSL_N_BC = %s, Rich_Web_AnSL_N_BgC = %s, Rich_Web_AnSL_N_BS = %s, Rich_Web_AnSL_N_HBgC = %s, Rich_Web_AnSL_N_CC = %s, Rich_Web_AnSL_N_M = %s, Rich_Web_AnSL_Ic_Sh = %s, Rich_Web_AnSL_Ic_T = %s, Rich_Web_AnSL_Ic_S = %s, Rich_Web_AnSL_Ic_C = %s, Rich_Web_AnSL_L_BgC = %s, Rich_Web_AnSL_L_T = %s, Rich_Web_AnSL_L_FS = %s, Rich_Web_AnSL_L_FF = %s, Rich_Web_AnSL_L_C = %s, Rich_Web_AnSL_L1_T = %s, Rich_Web_AnSL_L2_T = %s, Rich_Web_AnSL_L3_T = %s WHERE rich_web_slider_ID = %s", $Rich_Web_slider_name, $Rich_Web_slider_type, $Rich_Web_AnSL_W, $Rich_Web_AnSL_H, $Rich_Web_AnSL_BW, $Rich_Web_AnSL_BS, $Rich_Web_AnSL_BC, $Rich_Web_AnSL_BR, $Rich_Web_AnSL_BSh, $Rich_Web_AnSL_ShC, $Rich_Web_AnSL_ET, $Rich_Web_AnSL_SSh, $Rich_Web_AnSL_SShChT, $Rich_Web_AnSL_T_FS, $Rich_Web_AnSL_T_FF, $Rich_Web_AnSL_T_C, $Rich_Web_AnSL_T_BgC, $Rich_Web_AnSL_T_TA, $Rich_Web_AnSL_T_Sh, $Rich_Web_AnSL_T_ShC, $Rich_Web_AnSL_N_Sh, $Rich_Web_AnSL_N_S, $Rich_Web_AnSL_N_BW, $Rich_Web_AnSL_N_BC, $Rich_Web_AnSL_N_BgC, $Rich_Web_AnSL_N_BS, $Rich_Web_AnSL_N_HBgC, $Rich_Web_AnSL_N_CC, $Rich_Web_AnSL_N_M, $Rich_Web_AnSL_Ic_Sh, $Rich_Web_AnSL_Ic_T, $Rich_Web_AnSL_Ic_S, $Rich_Web_AnSL_Ic_C, $Rich_Web_AnSL_L_BgC, $Rich_Web_AnSL_L_T, $Rich_Web_AnSL_L_FS, $Rich_Web_AnSL_L_FF, $Rich_Web_AnSL_L_C, $Rich_Web_AnSL_L1_T, $Rich_Web_AnSL_L2_T, $Rich_Web_AnSL_L3_T, $Rich_Web_Slider_UP_ID));
					
				}
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}

	// $Rich_WebFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d",0));

	$Rich_WebFontCount = array("Abadi MT Condensed Light", "ABeeZee", "Abel", "Abhaya Libre", "Abril Fatface", "Aclonica", "Acme", "Actor", "Adamina", "Advent Pro", "Aguafina Script", "Aharoni", "Akronim", "Aladin", "Aldhabi", "Aldrich", "Alef", "Alegreya", "Alegreya Sans", "Alegreya Sans SC", "Alegreya SC", "Alex Brush", "Alfa Slab One", "Alice", "Alike", "Alike Angular", "Allan", "Allerta", "Allerta Stencil", "Allura", "Almendra", "Almendra Display", "Almendra SC", "Amarante", "Amaranth", "Amatic SC", "Amethysta", "Amiko", "Amiri", "Amita", "Anaheim", "Andada", "Andalus", "Andika", "Angkor", "Angsana New", "AngsanaUPC", "Annie Use Your Telescope", "Anonymous Pro", "Antic", "Antic Didone", "Antic Slab", "Anton", "Aparajita", "Arabic Typesetting", "Arapey", "Arbutus", "Arbutus Slab", "Architects Daughter", "Archivo", "Archivo Black", "Archivo Narrow", "Aref Ruqaa", "Arial", "Arial Black", "Arimo", "Arima Madurai", "Arizonia", "Armata", "Arsenal", "Artifika", "Arvo", "Arya", "Asap", "Asap Condensed", "Asar", "Asset", "Assistant", "Astloch", "Asul", "Athiti", "Atma", "Atomic Age", "Aubrey", "Audiowide", "Autour One", "Average", "Average Sans", "Averia Gruesa Libre", "Averia Libre", "Averia Sans Libre", "Averia Serif Libre", "Bad Script", "Bahiana", "Baloo", "Balthazar", "Bangers", "Barlow", "Barlow Condensed", "Barlow Semi Condensed", "Barrio", "Basic", "Batang", "BatangChe", "Battambang", "Baumans", "Bayon", "Belgrano", "Bellefair", "Belleza", "BenchNine", "Bentham", "Berkshire Swash", "Bevan", "Bigelow Rules", "Bigshot One", "Bilbo", "Bilbo Swash Caps", "BioRhyme", "BioRhyme Expanded", "Biryani", "Bitter", "Black And White Picture", "Black Han Sans", "Black Ops One", "Bokor", "Bonbon", "Boogaloo", "Bowlby One", "Bowlby One SC", "Brawler", "Bree Serif", "Browallia New", "BrowalliaUPC", "Bubbler One", "Bubblegum Sans", "Buda", "Buenard", "Bungee", "Bungee Hairline", "Bungee Inline", "Bungee Outline", "Bungee Shade", "Butcherman", "Butterfly Kids", "Cabin", "Cabin Condensed", "Cabin Sketch", "Caesar Dressing", "Cagliostro", "Cairo", "Calibri", "Calibri Light", "Calisto MT", "Calligraffitti", "Cambay", "Cambo", "Cambria", "Candal", "Candara", "Cantarell", "Cantata One", "Cantora One", "Capriola", "Cardo", "Carme", "Carrois Gothic", "Carrois Gothic SC", "Carter One", "Catamaran", "Caudex", "Caveat", "Caveat Brush", "Cedarville Cursive", "Century Gothic", "Ceviche One", "Changa", "Changa One", "Chango", "Chathura", "Chau Philomene One", "Chela One", "Chelsea Market", "Chenla", "Cherry Cream Soda", "Cherry Swash", "Chewy", "Chicle", "Chivo", "Chonburi", "Cinzel", "Cinzel Decorative", "Clicker Script", "Coda", "Coda Caption", "Codystar", "Coiny", "Combo", "Comic Sans MS", "Coming Soon", "Comfortaa", "Concert One", "Condiment", "Consolas", "Constantia", "Content", "Contrail One", "Convergence", "Cookie", "Copperplate Gothic", "Copperplate Gothic Light", "Copse", "Corbel", "Corben", "Cordia New", "CordiaUPC", "Cormorant", "Cormorant Garamond", "Cormorant Infant", "Cormorant SC", "Cormorant Unicase", "Cormorant Upright", "Courgette", "Courier New", "Cousine", "Coustard", "Covered By Your Grace", "Crafty Girls", "Creepster", "Crete Round", "Crimson Text", "Croissant One", "Crushed", "Cuprum", "Cute Font", "Cutive", "Cutive Mono", "Damion", "Dancing Script", "Dangrek", "DaunPenh", "David", "David Libre", "Dawning of a New Day", "Days One", "Delius", "Delius Swash Caps", "Delius Unicase", "Della Respira", "Denk One", "Devonshire", "DFKai-SB", "Dhurjati", "Didact Gothic", "DilleniaUPC", "Diplomata", "Diplomata SC", "Do Hyeon", "DokChampa", "Dokdo", "Domine", "Donegal One", "Doppio One", "Dorsa", "Dosis", "Dotum", "DotumChe", "Dr Sugiyama", "Duru Sans", "Dynalight", "Eagle Lake", "East Sea Dokdo", "Eater", "EB Garamond", "Ebrima", "Economica", "Eczar", "El Messiri", "Electrolize", "Elsie", "Elsie Swash Caps", "Emblema One", "Emilys Candy", "Encode Sans", "Encode Sans Condensed", "Encode Sans Expanded", "Encode Sans Semi Condensed", "Encode Sans Semi Expanded", "Engagement", "Englebert", "Enriqueta", "Erica One", "Esteban", "Estrangelo Edessa", "EucrosiaUPC", "Euphemia", "Euphoria Script", "Ewert", "Exo", "Expletus Sans", "FangSong", "Fanwood Text", "Farsan", "Fascinate", "Fascinate Inline", "Faster One", "Fasthand", "Fauna One", "Faustina", "Federant", "Federo", "Felipa", "Fenix", "Finger Paint", "Fira Mono", "Fira Sans", "Fira Sans Condensed", "Fira Sans Extra Condensed", "Fjalla One", "Fjord One", "Flamenco", "Flavors", "Fondamento", "Fontdiner Swanky", "Forum", "Francois One", "Frank Ruhl Libre", "Franklin Gothic Medium", "FrankRuehl", "Freckle Face", "Fredericka the Great", "Fredoka One", "Freehand", "FreesiaUPC", "Fresca", "Frijole", "Fruktur", "Fugaz One", "Gabriela", "Gabriola", "Gadugi", "Gaegu", "Gafata", "Galada", "Galdeano", "Galindo", "Gamja Flower", "Gautami", "Gentium Basic", "Gentium Book Basic", "Geo", "Georgia", "Geostar", "Geostar Fill", "Germania One", "GFS Didot", "GFS Neohellenic", "Gidugu", "Gilda Display", "Gisha", "Give You Glory", "Glass Antiqua", "Glegoo", "Gloria Hallelujah", "Goblin One", "Gochi Hand", "Gorditas", "Gothic A1", "Graduate", "Grand Hotel", "Gravitas One", "Great Vibes", "Griffy", "Gruppo", "Gudea", "Gugi", "Gulim", "GulimChe", "Gungsuh", "GungsuhChe", "Gurajada", "Habibi", "Halant", "Hammersmith One", "Hanalei", "Hanalei Fill", "Handlee", "Hanuman", "Happy Monkey", "Harmattan", "Headland One", "Heebo", "Henny Penny", "Herr Von Muellerhoff", "Hi Melody", "Hind", "Holtwood One SC", "Homemade Apple", "Homenaje", "IBM Plex Mono", "IBM Plex Sans", "IBM Plex Sans Condensed", "IBM Plex Serif", "Iceberg", "Iceland", "IM Fell Double Pica", "IM Fell Double Pica SC", "IM Fell DW Pica", "IM Fell DW Pica SC", "IM Fell English", "IM Fell English SC", "IM Fell French Canon", "IM Fell French Canon SC", "IM Fell Great Primer", "IM Fell Great Primer SC", "Impact", "Imprima", "Inconsolata", "Inder", "Indie Flower", "Inika", "Irish Grover", "IrisUPC", "Istok Web", "Iskoola Pota", "Italiana", "Italianno", "Itim", "Jacques Francois", "Jacques Francois Shadow", "Jaldi", "JasmineUPC", "Jim Nightshade", "Jockey One", "Jolly Lodger", "Jomhuria", "Josefin Sans", "Josefin Slab", "Joti One", "Jua", "Judson", "Julee", "Julius Sans One", "Junge", "Jura", "Just Another Hand", "Just Me Again Down Here", "Kadwa", "KaiTi", "Kalam", "Kalinga", "Kameron", "Kanit", "Kantumruy", "Karla", "Karma", "Kartika", "Katibeh", "Kaushan Script", "Kavivanar", "Kavoon", "Kdam Thmor", "Keania One", "Kelly Slab", "Kenia", "Khand", "Khmer", "Khmer UI", "Khula", "Kirang Haerang", "Kite One", "Knewave", "KodchiangUPC", "Kokila", "Kotta One", "Koulen", "Kranky", "Kreon", "Kristi", "Krona One", "Kurale", "La Belle Aurore", "Laila", "Lakki Reddy", "Lalezar", "Lancelot", "Lao UI", "Lateef", "Latha", "Lato", "League Script", "Leckerli One", "Ledger", "Leelawadee", "Lekton", "Lemon", "Lemonada", "Levenim MT", "Libre Baskerville", "Libre Franklin", "Life Savers", "Lilita One", "Lily Script One", "LilyUPC", "Limelight", "Linden Hill", "Lobster", "Lobster Two", "Londrina Outline", "Londrina Shadow", "Londrina Sketch", "Londrina Solid", "Lora", "Love Ya Like A Sister", "Loved by the King", "Lovers Quarrel", "Lucida Console", "Lucida Handwriting Italic", "Lucida Sans Unicode", "Luckiest Guy", "Lusitana", "Lustria", "Macondo", "Macondo Swash Caps", "Mada", "Magra", "Maiden Orange", "Maitree", "Mako", "Malgun Gothic", "Mallanna", "Mandali", "Mangal", "Manny ITC", "Manuale", "Marcellus", "Marcellus SC", "Marck Script", "Margarine", "Marko One", "Marlett", "Marmelad", "Martel", "Martel Sans", "Marvel", "Mate", "Mate SC", "Maven Pro", "McLaren", "Meddon", "MedievalSharp", "Medula One", "Meera Inimai", "Megrim", "Meie Script", "Meiryo", "Meiryo UI", "Merienda", "Merienda One", "Merriweather", "Merriweather Sans", "Metal", "Metal Mania", "Metamorphous", "Metrophobic", "Michroma", "Microsoft Himalaya", "Microsoft JhengHei", "Microsoft JhengHei UI", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Sans Serif", "Microsoft Tai Le", "Microsoft Uighur", "Microsoft YaHei", "Microsoft YaHei UI", "Microsoft Yi Baiti", "Milonga", "Miltonian", "Miltonian Tattoo", "Mina", "MingLiU_HKSCS", "MingLiU_HKSCS-ExtB", "Miniver", "Miriam", "Miriam Libre", "Mirza", "Miss Fajardose", "Mitr", "Modak", "Modern Antiqua", "Mogra", "Molengo", "Molle", "Monda", "Mongolian Baiti", "Monofett", "Monoton", "Monsieur La Doulaise", "Montaga", "Montez", "Montserrat", "Montserrat Alternates", "Montserrat Subrayada", "MoolBoran", "Moul", "Moulpali", "Mountains of Christmas", "Mouse Memoirs", "Mr Bedfort", "Mr Dafoe", "Mr De Haviland", "Mrs Saint Delafield", "Mrs Sheppards", "MS UI Gothic", "Mukta", "Muli", "MV Boli", "Myanmar Text", "Mystery Quest", "Nanum Brush Script", "Nanum Gothic", "Nanum Gothic Coding", "Nanum Myeongjo", "Nanum Pen Script", "Narkisim", "Neucha", "Neuton", "New Rocker", "News Cycle", "News Gothic MT", "Niconne", "Nirmala UI", "Nixie One", "Nobile", "Nokora", "Norican", "Nosifer", "Nothing You Could Do", "Noticia Text", "Noto Sans", "Noto Serif", "Nova Cut", "Nova Flat", "Nova Mono", "Nova Oval", "Nova Round", "Nova Script", "Nova Slim", "Nova Square", "NSimSun", "NTR", "Numans", "Nunito", "Nunito Sans", "Nyala", "Odor Mean Chey", "Offside", "Old Standard TT", "Oldenburg", "Oleo Script", "Oleo Script Swash Caps", "Open Sans", "Open Sans Condensed", "Oranienbaum", "Orbitron", "Oregano", "Orienta", "Original Surfer", "Oswald", "Over the Rainbow", "Overlock", "Overlock SC", "Overpass", "Overpass Mono", "Ovo", "Oxygen", "Oxygen Mono", "Pacifico", "Padauk", "Palanquin", "Palanquin Dark", "Palatino Linotype", "Pangolin", "Paprika", "Parisienne", "Passero One", "Passion One", "Pathway Gothic One", "Patrick Hand", "Patrick Hand SC", "Pattaya", "Patua One", "Pavanam", "Paytone One", "Peddana", "Peralta", "Permanent Marker", "Petit Formal Script", "Petrona", "Philosopher", "Piedra", "Pinyon Script", "Pirata One", "Plantagenet Cherokee", "Plaster", "Play", "Playball", "Playfair Display", "Playfair Display SC", "Podkova", "Poiret One", "Poller One", "Poly", "Pompiere", "Pontano Sans", "Poor Story", "Poppins", "Port Lligat Sans", "Port Lligat Slab", "Pragati Narrow", "Prata", "Preahvihear", "Pridi", "Princess Sofia", "Prociono", "Prompt", "Prosto One", "Proza Libre", "PT Mono", "PT Sans", "PT Sans Caption", "PT Sans Narrow", "PT Serif", "PT Serif Caption", "Puritan", "Purple Purse", "Quando", "Quantico", "Quattrocento", "Quattrocento Sans", "Questrial", "Quicksand", "Quintessential", "Qwigley", "Raavi", "Racing Sans One", "Radley", "Rajdhani", "Rakkas", "Raleway", "Raleway Dots", "Ramabhadra", "Ramaraja", "Rambla", "Rammetto One", "Ranchers", "Rancho", "Ranga", "Rasa", "Rationale", "Ravi Prakash", "Redressed", "Reem Kufi", "Reenie Beanie", "Revalia", "Rhodium Libre", "Ribeye", "Ribeye Marrow", "Righteous", "Risque", "Roboto", "Roboto Condensed", "Roboto Mono", "Roboto Slab", "Rochester", "Rock Salt", "Rod", "Rokkitt", "Romanesco", "Ropa Sans", "Rosario", "Rosarivo", "Rouge Script", "Rozha One", "Rubik", "Rubik Mono One", "Ruda", "Rufina", "Ruge Boogie", "Ruluko", "Rum Raisin", "Ruslan Display", "Russo One", "Ruthie", "Rye", "Sacramento", "Sahitya", "Sail", "Saira", "Saira Condensed", "Saira Extra Condensed", "Saira Semi Condensed", "Sakkal Majalla", "Salsa", "Sanchez", "Sancreek", "Sansita", "Sarala", "Sarina", "Sarpanch", "Satisfy", "Scada", "Scheherazade", "Schoolbell", "Scope One", "Seaweed Script", "Secular One", "Sedgwick Ave", "Sedgwick Ave Display", "Segoe Print", "Segoe Script", "Segoe UI Symbol", "Sevillana", "Seymour One", "Shadows Into Light", "Shadows Into Light Two", "Shanti", "Share", "Share Tech", "Share Tech Mono", "Shojumaru", "Shonar Bangla", "Short Stack", "Shrikhand", "Shruti", "Siemreap", "Sigmar One", "Signika", "Signika Negative", "SimHei", "SimKai", "Simonetta", "Simplified Arabic", "SimSun", "SimSun-ExtB", "Sintony", "Sirin Stencil", "Six Caps", "Skranji", "Slackey", "Smokum", "Smythe", "Sniglet", "Snippet", "Snowburst One", "Sofadi One", "Sofia", "Song Myung", "Sonsie One", "Sorts Mill Goudy", "Source Code Pro", "Source Sans Pro", "Source Serif Pro", "Space Mono", "Special Elite", "Spectral", "Spectral SC", "Spicy Rice", "Spinnaker", "Spirax", "Squada One", "Sree Krushnadevaraya", "Sriracha", "Stalemate", "Stalinist One", "Stardos Stencil", "Stint Ultra Condensed", "Stint Ultra Expanded", "Stoke", "Strait", "Stylish", "Sue Ellen Francisco", "Suez One", "Sumana", "Sunflower", "Sunshiney", "Supermercado One", "Sura", "Suranna", "Suravaram", "Suwannaphum", "Swanky and Moo Moo", "Sylfaen", "Syncopate", "Tahoma", "Tajawal", "Tangerine", "Taprom", "Tauri", "Taviraj", "Teko", "Telex", "Tenali Ramakrishna", "Tenor Sans", "Text Me One", "The Girl Next Door", "Tienne", "Tillana", "Times New Roman", "Timmana", "Tinos", "Titan One", "Titillium Web", "Trade Winds", "Traditional Arabic", "Trebuchet MS", "Trirong", "Trocchi", "Trochut", "Trykker", "Tulpen One", "Tunga", "Ubuntu", "Ubuntu Condensed", "Ubuntu Mono", "Ultra", "Uncial Antiqua", "Underdog", "Unica One", "UnifrakturCook", "UnifrakturMaguntia", "Unkempt", "Unlock", "Unna", "Utsaah", "Vampiro One", "Vani", "Varela", "Varela Round", "Vast Shadow", "Vesper Libre", "Vibur", "Vidaloka", "Viga", "Vijaya", "Voces", "Volkhov", "Vollkorn", "Vollkorn SC", "Voltaire", "VT323", "Waiting for the Sunrise", "Wallpoet", "Walter Turncoat", "Warnes", "Wellfleet", "Wendy One", "Wire One", "Work Sans", "Yanone Kaffeesatz", "Yantramanav", "Yatra One", "Yellowtail", "Yeon Sung", "Yeseva One", "Yesteryear", "Yrsa", "Zeyada", "Zilla Slab", "Zilla Slab Highlight");

	$Rich_WebSliderCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d",0));
	$Rich_Web_Sl1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE id>%d",0));
	if($Rich_Web_Sl1[0]->rich_web_Sl1_SlS=='true'){ $Rich_Web_Sl1_SlS='checked'; }
	if($Rich_Web_Sl1[0]->rich_web_Sl1_PoH=='true'){ $Rich_Web_Sl1_PoH='checked'; }
	// if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='true'){ $Rich_Web_Sl1_BoxS='checked'; }
	if($Rich_Web_Sl1[0]->rich_web_Sl1_TUp=='true'){ $Rich_Web_Sl1_TUp='checked'; }
	//Content Slider
	$rich_Effect1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE id > %d",0));
	if ($rich_Effect1[0]->rich_CS_BIB!='none'){ $rich_Checked1="checked"; }
	if ($rich_Effect1[0]->rich_CS_P!='none'){ $rich_Checked2="checked"; }
	// if ($rich_Effect1[0]->rich_CS_Loop!='none'){ $rich_Checked3="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_TShow!='none'){ $rich_Checked4="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_DShow!='none'){ $rich_Checked5="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_Show!='none'){ $rich_Checked6="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_ArrShow!='none'){ $rich_Checked7="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_H!=''){ $rich_Checked8="checked"; }
	if ($rich_Effect1[0]->rich_CS_Video_DC!=''){ $rich_Checked9="checked"; }
	//Fashion Slider
	$rich_Effect2=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE id > %d",0));
	if($rich_Effect2[0]->rich_fsl_SShow=='true'){ $rich_Checked9="checked"; }
	if($rich_Effect2[0]->rich_fsl_Ic_Show=="true"){ $rich_Checked10="checked"; }
	if($rich_Effect2[0]->rich_fsl_PPL_Show=='true'){ $rich_Checked11="checked"; }
	if($rich_Effect2[0]->rich_fsl_Randomize=='true'){ $rich_Checked12="checked"; }
	if($rich_Effect2[0]->rich_fsl_Loop=='true'){ $rich_Checked13="checked"; }
	if($rich_Effect2[0]->rich_fsl_Desc_Show=='on'){ $rich_Checked14="checked"; }
	//Fashion Slider
	$Rich_Web_Sl_Eff4=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id > %d",0));
	// if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSShow=='true'){ $Rich_Web_Sl_CT_BxSShow="checked"; }
	// if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='true'){ $Rich_Web_Sl_CT_BxSType="checked"; }
	if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArText=='true'){ $Rich_Web_Sl_CT_ArText="checked"; }
	//Slider Carousel
	$Rich_Web_Sl_Eff5=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id > %d",0));
	
	$Rich_Web_Sl_Eff6=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE id > %d",0));
	if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_AP=='true'){ $Rich_Web_Sl_FS_AP="checked"; }
	if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SVis=='on'){ $Rich_Web_Sl_FS_SVis="checked"; }
	if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SLoop=='true'){ $Rich_Web_Sl_FS_SLoop="checked"; }
	if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_ShNavBut=='true'){ $Rich_Web_Sl_FS_ShNavBut="checked"; }
	
	if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_Show=='true'){ $Rich_Web_Sl_FS_Nav_Show="checked"; }
	
	//Dynamic Slider
	$Rich_Web_Sl_Eff7=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11 WHERE id > %d",0));
	if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_AP=='true'){ $Rich_Web_Sl_DS_AP="checked"; }
	if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_DFS=='true'){ $Rich_Web_Sl_DS_DFS="checked"; }
	
	if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Tr=='true'){ $Rich_Web_Sl_DS_Tr="checked"; }
	if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_Show=='true'){ $Rich_Web_Sl_DS_Arr_Show="checked"; }
	//Thumbnails Slider & Lightbox
	$Rich_Web_Sl_Eff8=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12 WHERE id > %d",0));
	// if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShShow=='true'){ $Rich_Web_Sl_TSL_BoxShShow="checked"; }
	// if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='true'){ $Rich_Web_Sl_TSL_BoxShType="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_TA=='true'){ $Rich_Web_Sl_TSL_TA="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_AP=='true'){ $Rich_Web_Sl_TSL_AP="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_PH=='true'){ $Rich_Web_Sl_TSL_PH="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Loop=='true'){ $Rich_Web_Sl_TSL_Loop="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_Show=='true'){ $Rich_Web_Sl_TSL_Nav_Show="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_Show=='true'){ $Rich_Web_Sl_TSL_SS_Show="checked"; }
	if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Show=='true'){ $Rich_Web_Sl_TSL_Arr_Show="checked"; }
	//Accordion Slider
	$Rich_Web_Sl_Eff9=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13 WHERE id > %d",0));
	//Animation Slider
	$Rich_Web_Sl_Eff10=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14 WHERE id > %d",0));
	if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_SSh=='true'){ $Rich_Web_AnSL_SSh="checked"; }
	if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_Sh=='true'){ $Rich_Web_AnSL_N_Sh="checked"; }
	
?>
<div class="rw_loading_c" style="display: none;">
	<div class="cont_cont">
		<div class="cssload-thecube">
			<div class="cssload-cube cssload-c1"></div>
			<div class="cssload-cube cssload-c2"></div>
			<div class="cssload-cube cssload-c4"></div>
			<div class="cssload-cube cssload-c3"></div>
		</div>
		<div class="RW_Loader_Text_Navigation">
			Please Wait !
		</div>
	</div>
</div>
<form method="POST">
	<?php wp_nonce_field( 'edit-menu_', 'Rich_Web_PSlider_Nonce' );?>
	<?php require_once( 'Rich-Web-Slider-Header.php' ); ?>
	<?php require_once( 'Rich-Web-Slider-Check.php' ); ?>
	<div style="position: relative; width: 100%; right: 1%; height: 50px;">
		<input type="button" class="JAddSlider2" value="Add Option" onclick="addSliderJ2()"/>
		<input type="submit" class="JSaveSlider2" value="Save" name="rich_webSlSave"/>
		<input type="submit" class="JUpdateSlider2" value="Update" name="rich_webSlUpdate"/>
		<input type="button" class="JCanselSlider2" value="Cancel" onclick="canselSliderJ2()"/>
		<input type="text" class="richideo_EN_ID" style="display:none;" id="rich_web_slider_ID" name="rich_web_Slider_UP_ID">
	</div>
	<div class="Rich_Web_SliderIm_Fixed_Div"></div>
	<div class="Rich_Web_SliderIm_Absolute_Div">
		<div class="Rich_Web_SliderIm_Relative_Div">
			<p> Are you sure you want to remove ? </p>
			<span class="Rich_Web_SliderIm_Relative_No">No</span>
			<span class="Rich_Web_SliderIm_Relative_Yes">Yes</span>
		</div>
	</div>
	<div class="Table_Data_rich_web_Content_2" >
		<div class="Table_Data_rich_web1_2">
			<table class="rich_web_Tit_Table_2">
				<tr class="rich_web_Tit_Table_2_Tr">
					<td>No</td>
					<td>Option Name</td>
					<td>Slider Type</td>
					<td>Clone</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
			</table>
			<table class="rich_web_Tit_Table2_2">
				<?php for($i=0;$i<count($Rich_WebSliderCount);$i++){ ?>
					<tr class="rich_web_Tit_Table2_2_Tr2">
						<td><?php echo $i+1;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_name;?></td>
						<td><?php echo $Rich_WebSliderCount[$i]->slider_type;?></td>
						<td onclick="rich_web_Copy_Sl2('<?php echo $Rich_WebSliderCount[$i]->id;?>')"><i class="jIcFileso rich_web rich_web-files-o"></i></td>
						<td onclick="rich_web_Edit_Sl2('<?php echo $Rich_WebSliderCount[$i]->id;?>')"><i class="jIcPencil rich_web rich_web-pencil"></i></td>
						<td onclick="rich_web_Delete_Sl2('<?php echo $Rich_WebSliderCount[$i]->id;?>')"><i class="jIcDel rich_web rich_web-trash"></i></td>
					</tr>
				<?php }?>
			</table>
		</div>
		<div class="Table_Data_rich_web2_2">
			<table class="rich_web_SaveSl_Table">
				<tr>
					<td>Slider Name</td>
					<td>Slider Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rich_web_Text_Field" name="rich_web_slider_name" id="rich_web_slider_name" required="" placeholder="* Required">
					</td>
					<td class="SlType">
						<select class="rich_web_Text_Field" id="rich_web_slider_type" name="rich_web_slider_type" onchange="Rich_PS_Buttons_Clicked()">
							<option value="Slider Navigation">            Slider Navigation            </option>
							<option value="Content Slider">               Content Slider               </option>
							<option value="Fashion Slider">               Fashion Slider               </option>
							<option value="Circle Thumbnails">            Circle Thumbnails            </option>
							<option value="Slider Carousel">              Slider Carousel              </option>
							<option value="Flexible Slider">              Flexible Slider              </option>
							<option value="Dynamic Slider">               Dynamic Slider               </option>
							<option value="Thumbnails Slider & Lightbox"> Thumbnails Slider & Lightbox </option>
							<option value="Accordion Slider">             Accordion Slider             </option>
							<option value="Animation Slider">             Animation Slider             </option>
						</select>
					</td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_1" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Slide Show</td>
					<td>SlideShow Speed (s)</td>
					<td>Pause on Hover</td>
					<td>Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_web_Sl1_SlS" id="rich_web_Sl1_SlS" <?php echo $Rich_Web_Sl1_SlS;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_SlSS;?>" id="rich_web_Sl1_SlSS" name="rich_web_Sl1_SlSS" min="1" max="30">
							<span class="range-slider__value" id="rich_web_Sl1_SlSS_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_web_Sl1_PoH" id="rich_web_Sl1_PoH" <?php echo $Rich_Web_Sl1_PoH;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_W;?>" id="rich_web_Sl1_W" name="rich_web_Sl1_W" min="100" max="2000">
							<span class="range-slider__value" id="rich_web_Sl1_W_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Height (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_H;?>" id="rich_web_Sl1_H" name="rich_web_Sl1_H" min="100" max="2000">
							<span class="range-slider__value" id="rich_web_Sl1_H_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_BoxS" name="rich_web_Sl1_BoxS">
							<option value="Type 1" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="Type 10" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 10'){ echo 'selected';}?>> Type 10 </option>
							<option value="Type 11" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 11'){ echo 'selected';}?>> Type 11 </option>
							<option value="Type 12" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 12'){ echo 'selected';}?>> Type 12 </option>
							<option value="Type 13" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 13'){ echo 'selected';}?>> Type 13 </option>
							<option value="Type 14" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 14'){ echo 'selected';}?>> Type 14 </option>
							<option value="Type 15" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 15'){ echo 'selected';}?>> Type 15 </option>
							<option value="Type 16" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='Type 16'){ echo 'selected';}?>> Type 16 </option>
							<option value="none" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_BoxS=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_BoxSC" id="rich_web_Sl1_BoxSC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_BoxSC;?>">
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_IBS" id="rich_web_Sl1_IBS" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->Rich_Web_Sl1_IBS;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_IBW;?>" id="rich_web_Sl1_IBW" name="rich_web_Sl1_IBW" min="0" max="20">
							<span class="range-slider__value" id="rich_web_Sl1_IBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_IBC" id="rich_web_Sl1_IBC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_IBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_IBR;?>" id="rich_web_Sl1_IBR" name="rich_web_Sl1_IBR" min="0" max="500">
							<span class="range-slider__value" id="rich_web_Sl1_IBR_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Text Align</td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_TBgC" id="rich_web_Sl1_TBgC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_TBgC;?>">
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_TC" id="rich_web_Sl1_TC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_TC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_TTA" name="rich_web_Sl1_TTA">
							<option value="left"   <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_TTA=="left"){ echo "selected";}?>>   Left   </option>
							<option value="right"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_TTA=="right"){ echo "selected";}?>>  Right  </option>
							<option value="center" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_TTA=="center"){ echo "selected";}?>> Center </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_TFS;?>" id="rich_web_Sl1_TFS" name="rich_web_Sl1_TFS" min="8" max="48">
							<span class="range-slider__value" id="rich_web_Sl1_TFS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Uppercase</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_TFF" name="rich_web_Sl1_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl1[0]->rich_web_Sl1_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="rich_web_Sl1_TUp" name="rich_web_Sl1_TUp" <?php echo $Rich_Web_Sl1_TUp;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Opacity (%)</td>
					<td>Arrow Type</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_ArBgC" id="rich_web_Sl1_ArBgC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_ArBgC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_ArOp;?>" id="rich_web_Sl1_ArOp" name="rich_web_Sl1_ArOp" min="0" max="100">
							<span class="range-slider__value" id="rich_web_Sl1_ArOp_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_ArType" name="rich_web_Sl1_ArType">
							<option value="1"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="1"){ echo "selected";}?>>  Type 1  </option>
							<option value="2"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="2"){ echo "selected";}?>>  Type 2  </option>
							<option value="3"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="3"){ echo "selected";}?>>  Type 3  </option>
							<option value="4"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="4"){ echo "selected";}?>>  Type 4  </option>
							<option value="5"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="5"){ echo "selected";}?>>  Type 5  </option>
							<option value="6"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="6"){ echo "selected";}?>>  Type 6  </option>
							<option value="7"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="7"){ echo "selected";}?>>  Type 7  </option>
							<option value="8"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="8"){ echo "selected";}?>>  Type 8  </option>
							<option value="9"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="9"){ echo "selected";}?>>  Type 9  </option>
							<option value="10" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="10"){ echo "selected";}?>> Type 10 </option>
							<option value="11" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="11"){ echo "selected";}?>> Type 11 </option>
							<option value="12" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="12"){ echo "selected";}?>> Type 12 </option>
							<option value="13" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="13"){ echo "selected";}?>> Type 13 </option>
							<option value="14" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="14"){ echo "selected";}?>> Type 14 </option>
							<option value="15" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="15"){ echo "selected";}?>> Type 15 </option>
							<option value="16" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="16"){ echo "selected";}?>> Type 16 </option>
							<option value="17" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="17"){ echo "selected";}?>> Type 17 </option>
							<option value="18" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="18"){ echo "selected";}?>> Type 18 </option>
							<option value="19" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="19"){ echo "selected";}?>> Type 19 </option>
							<option value="20" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="20"){ echo "selected";}?>> Type 20 </option>
							<option value="21" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="21"){ echo "selected";}?>> Type 21 </option>
							<option value="22" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="22"){ echo "selected";}?>> Type 22 </option>
							<option value="23" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="23"){ echo "selected";}?>> Type 23 </option>
							<option value="24" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="24"){ echo "selected";}?>> Type 24 </option>
							<option value="25" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArType=="25"){ echo "selected";}?>> Type 25 </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_ArHBgC" id="rich_web_Sl1_ArHBgC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_ArHBgC;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Opacity (%)</td>
					<td>Hover Effect</td>
					<td>Box Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_ArHOp;?>" id="rich_web_Sl1_ArHOp" name="rich_web_Sl1_ArHOp" min="0" max="100">
							<span class="range-slider__value" id="rich_web_Sl1_ArHOp_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_ArHEff" name="rich_web_Sl1_ArHEff">
							<option value="slide out"       <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArHEff=="slide out"){ echo "selected";}?>>       Slide Out       </option>
							<option value="flip out"        <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArHEff=="flip out"){ echo "selected";}?>>        Flip Out        </option>
							<option value="double flip out" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArHEff=="double flip out"){ echo "selected";}?>> Double Flip Out </option>
							<option value="both ways"       <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_ArHEff=="both ways"){ echo "selected";}?>>       Both Ways       </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_ArBoxW;?>" id="rich_web_Sl1_ArBoxW" name="rich_web_Sl1_ArBoxW" min="50" max="150">
							<span class="range-slider__value" id="rich_web_Sl1_ArBoxW_Span">0</span>
						</div>
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavW;?>" id="rich_web_Sl1_NavW" name="rich_web_Sl1_NavW" min="0" max="20">
							<span class="range-slider__value" id="rich_web_Sl1_NavW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavH;?>" id="rich_web_Sl1_NavH" name="rich_web_Sl1_NavH" min="0" max="20">
							<span class="range-slider__value" id="rich_web_Sl1_NavH_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavPB;?>" id="rich_web_Sl1_NavPB" name="rich_web_Sl1_NavPB" min="0" max="15">
							<span class="range-slider__value" id="rich_web_Sl1_NavPB_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavBW;?>" id="rich_web_Sl1_NavBW" name="rich_web_Sl1_NavBW" min="0" max="5">
							<span class="range-slider__value" id="rich_web_Sl1_NavBW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Current Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="rich_web_Sl1_NavBS" name="rich_web_Sl1_NavBS">
							<option value="none"   <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavBS=="none"){ echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavBS=="solid"){ echo "selected";}?>>  Solid  </option>
							<option value="dashed" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavBS=="dashed"){ echo "selected";}?>> Dashed </option>
							<option value="dotted" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavBS=="dotted"){ echo "selected";}?>> Dotted </option>
						</select>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_NavBC" id="rich_web_Sl1_NavBC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavBR;?>" id="rich_web_Sl1_NavBR" name="rich_web_Sl1_NavBR" min="0" max="20">
							<span class="range-slider__value" id="rich_web_Sl1_NavBR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" name="rich_web_Sl1_NavCC" id="rich_web_Sl1_NavCC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavCC;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Position</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_web_Sl1_NavHC" id="rich_web_Sl1_NavHC" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl1[0]->rich_web_Sl1_NavHC;?>">
					</td>
					<td>
						<select id="rich_web_Sl1_NavPos" name="rich_web_Sl1_NavPos" class="rich_web_Select_Menu">
							<option value="top"    <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavPos=="top"){ echo "selected";}?>>    Top    </option>
							<option value="bottom" <?php if($Rich_Web_Sl1[0]->rich_web_Sl1_NavPos=="bottom"){ echo "selected";}?>> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_2" style="display:none;">
				<tr>
					<td colspan="4">General Settings</td>
				</tr>
				<tr>
					<td>Background Image Blur</td>
					<td>Navigation</td>
					<td>Slide Duration (s)</td>
					<td>Show Description</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_BIB" id="rich_CS_BIB" <?php echo $rich_Checked1;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_P" id="rich_CS_P" <?php echo $rich_Checked2;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_SD;?>" id="rich_CS_SD" name="rich_CS_SD" min="1" max="20">
							<span class="range-slider__value" id="rich_CS_SD_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_DShow" id="rich_CS_Video_DShow" <?php echo $rich_Checked5;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Animation Type</td>
					<td>Show Slideshow</td>
					<td>Background Color</td>
					<td>Box Shadox Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_AT" name="rich_CS_AT" >
							<option value="slide"      <?php if($rich_Effect1[0]->rich_CS_AT=="slide"){echo "selected";}?>>      Slide       </option>
							<option value="slideUp"    <?php if($rich_Effect1[0]->rich_CS_AT=="slideUp"){echo "selected";}?>>    Slide Up    </option>
							<option value="bounce"     <?php if($rich_Effect1[0]->rich_CS_AT=="bounce"){echo "selected";}?>>     Bounce      </option>
							<option value="bounceUp"   <?php if($rich_Effect1[0]->rich_CS_AT=="bounceUp"){echo "selected";}?>>   Bounce Up   </option>
							<option value="fade"       <?php if($rich_Effect1[0]->rich_CS_AT=="fade"){echo "selected";}?>>       Fade        </option>
							<option value="fadeEase"   <?php if($rich_Effect1[0]->rich_CS_AT=="fadeEase"){echo "selected";}?>>   FadeEase    </option>
							<option value="fadeBounse" <?php if($rich_Effect1[0]->rich_CS_AT=="fadeBounse"){echo "selected";}?>> FadeBounse  </option>
							<option value="bounce2"    <?php if($rich_Effect1[0]->rich_CS_AT=="bounce2"){echo "selected";}?>>    Bounce 2    </option>
							<option value="bounce3"    <?php if($rich_Effect1[0]->rich_CS_AT=="bounce3"){echo "selected";}?>>    Bounce 3    </option>
							<option value="bounceUp2"  <?php if($rich_Effect1[0]->rich_CS_AT=="bounceUp2"){echo "selected";}?>>  Bounce Up 2 </option>
							<option value="bounceUp3"  <?php if($rich_Effect1[0]->rich_CS_AT=="bounceUp3"){echo "selected";}?>>  Bounce Up 3 </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_H" id="rich_CS_Video_H" <?php echo $rich_Checked8;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" name="rich_CS_Cont_BgC" id="rich_CS_Cont_BgC" class="alpha-color-picker" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BgC;?>">
					</td>
					<td>
						<input type="text" id="rich_CS_Cont_BSC" class="alpha-color-picker" name="rich_CS_Cont_BSC" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BSC;?>">
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Popup</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_W;?>" id="rich_CS_Cont_W" name="rich_CS_Cont_W" min="400" max="1500">
							<span class="range-slider__value" id="rich_CS_Cont_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_H;?>" id="rich_CS_Cont_H" name="rich_CS_Cont_H" min="400" max="900">
							<span class="range-slider__value" id="rich_CS_Cont_H_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_DC" id="rich_CS_Video_DC" <?php echo $rich_Checked9;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BW;?>" id="rich_CS_Cont_BW" name="rich_CS_Cont_BW" min="0" max="10">
							<span class="range-slider__value" id="rich_CS_Cont_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_Cont_BC" class="alpha-color-picker" name="rich_CS_Cont_BC" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BR;?>" id="rich_CS_Cont_BR" name="rich_CS_Cont_BR" min="0" max="10">
							<span class="range-slider__value" id="rich_CS_Cont_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_CS_Cont_BS" class="alpha-color-picker" name="rich_CS_Cont_BS" value="<?php echo $rich_Effect1[0]->rich_CS_Cont_BS;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Image Title</td>
				</tr>
				<tr>
					<td>Show Title</td>
					<td>Color</td>
					<td>Font Size (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_TShow" id="rich_CS_Video_TShow" <?php echo $rich_Checked4;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" id="rich_CS_Video_TC" class="alpha-color-picker" name="rich_CS_Video_TC" value="<?php echo $rich_Effect1[0]->rich_CS_Video_TC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Video_TFS;?>" id="rich_CS_Video_TFS" name="rich_CS_Video_TFS" min="6" max="36">
							<span class="range-slider__value" id="rich_CS_Video_TFS_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Text Align</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_Video_TFF" name="rich_CS_Video_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl1[0]->rich_CS_Video_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_Video_TTA" name="rich_CS_Video_TTA">
							<option value="left"   <?php if($rich_Effect1[0]->rich_CS_Video_TTA=="left"){echo "selected";}?>>   Left   </option>
							<option value="right"  <?php if($rich_Effect1[0]->rich_CS_Video_TTA=="right"){echo "selected";}?>>  Right  </option>
							<option value="center" <?php if($rich_Effect1[0]->rich_CS_Video_TTA=="center"){echo "selected";}?>> Center </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Image</td>
				</tr>
				<tr>
					<td>Show Image</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_Show" id="rich_CS_Video_Show" <?php echo $rich_Checked6;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Link</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Text</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_LFS;?>" id="rich_CS_LFS" name="rich_CS_LFS" min="8" max="36">
							<span class="range-slider__value" id="rich_CS_LFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_LFF" name="rich_CS_LFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl1[0]->rich_CS_LFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" id="rich_CS_LC" class="alpha-color-picker" name="rich_CS_LC" value="<?php echo $rich_Effect1[0]->rich_CS_LC;?>">
					</td>
					<td>
						<input type="text" id="rich_CS_LT" name="rich_CS_LT" value="<?php echo $rich_Effect1[0]->rich_CS_LT;?>">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Position</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_LBgC" class="alpha-color-picker" name="rich_CS_LBgC" value="<?php echo $rich_Effect1[0]->rich_CS_LBgC;?>">
					</td>
					<td>
						<input type="text" id="rich_CS_LBC" class="alpha-color-picker" name="rich_CS_LBC" value="<?php echo $rich_Effect1[0]->rich_CS_LBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_LBR;?>" id="rich_CS_LBR" name="rich_CS_LBR" min="0" max="20">
							<span class="range-slider__value" id="rich_CS_LBR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_LPos" name="rich_CS_LPos">
							<option value="left"   <?php if($rich_Effect1[0]->rich_CS_LPos=="left"){echo "selected";}?>>   Left   </option>
							<option value="right"  <?php if($rich_Effect1[0]->rich_CS_LPos=="right"){echo "selected";}?>>  Right  </option>
							<option value="center" <?php if($rich_Effect1[0]->rich_CS_LPos=="center"){echo "selected";}?>> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_Link_BW;?>" id="rich_CS_Link_BW" name="rich_CS_Link_BW" min="0" max="20">
							<span class="range-slider__value" id="rich_CS_Link_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_Link_BS" name="rich_CS_Link_BS">
							<option value="none"   <?php if($rich_Effect1[0]->rich_CS_Link_BS=="none"){echo "selected";}?>>   None   </option>
							<option value="dotted" <?php if($rich_Effect1[0]->rich_CS_Link_BS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($rich_Effect1[0]->rich_CS_Link_BS=="dashed"){echo "selected";}?>> Dashed </option>
							<option value="solid"  <?php if($rich_Effect1[0]->rich_CS_Link_BS=="Solid"){echo "selected";}?>>  Solid  </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Hover Settings for Link</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_CS_LHBgC" class="alpha-color-picker" name="rich_CS_LHBgC" value="<?php echo $rich_Effect1[0]->rich_CS_LHBgC;?>">
					</td>
					<td>
						<input type="text" id="rich_CS_LHC" class="alpha-color-picker" name="rich_CS_LHC" value="<?php echo $rich_Effect1[0]->rich_CS_LHC;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Settings for Arrows</td>
				</tr>
				<tr>
					<td>Show Arrows</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td>Type</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_CS_Video_ArrShow" id="rich_CS_Video_ArrShow" <?php echo $rich_Checked7;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect1[0]->rich_CS_AFS;?>" id="rich_CS_AFS" name="rich_CS_AFS" min="8" max="36">
							<span class="range-slider__value" id="rich_CS_AFS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_CS_AC" class="alpha-color-picker" name="rich_CS_AC" value="<?php echo $rich_Effect1[0]->rich_CS_AC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_CS_Icon" name="rich_CS_Icon">
							<option value="1" <?php if($rich_Effect1[0]->rich_CS_Icon=="1"){echo "selected";}?>> Type 1 </option>
							<option value="2" <?php if($rich_Effect1[0]->rich_CS_Icon=="2"){echo "selected";}?>> Type 2 </option>
							<option value="3" <?php if($rich_Effect1[0]->rich_CS_Icon=="3"){echo "selected";}?>> Type 3 </option>
							<option value="4" <?php if($rich_Effect1[0]->rich_CS_Icon=="4"){echo "selected";}?>> Type 4 </option>
							<option value="5" <?php if($rich_Effect1[0]->rich_CS_Icon=="5"){echo "selected";}?>> Type 5 </option>
							<option value="6" <?php if($rich_Effect1[0]->rich_CS_Icon=="6"){echo "selected";}?>> Type 6 </option>
							<option value="7" <?php if($rich_Effect1[0]->rich_CS_Icon=="7"){echo "selected";}?>> Type 7 </option>
							<option value="8" <?php if($rich_Effect1[0]->rich_CS_Icon=="8"){echo "selected";}?>> Type 8 </option>
							<option value="9" <?php if($rich_Effect1[0]->rich_CS_Icon=="9"){echo "selected";}?>> Type 9 </option>
						</select>
					</td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_3" style="display:none;">
				<tr>
					<td colspan="4">General Option</td>
				</tr>
				<tr>
					<td>Animation Type</td>
					<td>Slideshow Show</td>
					<td>SlideShow Speed (s)</td>
					<td>Animation Duration (s)</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_animation" name="rich_fsl_animation">
							<option value="fade"  <?php if($rich_Effect2[0]->rich_fsl_animation=="fade"){echo "selected";}?>>  Fade  </option>
							<option value="slide" <?php if($rich_Effect2[0]->rich_fsl_animation=="slide"){echo "selected";}?>> Slide </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_SShow" id="rich_fsl_SShow" <?php echo $rich_Checked9;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_SShow_Speed;?>" id="rich_fsl_SShow_Speed" name="rich_fsl_SShow_Speed" min="1" max="30">
							<span class="range-slider__value" id="rich_fsl_SShow_Speed_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Anim_Dur;?>" id="rich_fsl_Anim_Dur" name="rich_fsl_Anim_Dur" min="1" max="10">
							<span class="range-slider__value" id="rich_fsl_Anim_Dur_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Icon Show</td>
					<td>Pause-Play Show</td>
					<td>Randomize</td>
					<td>Loop</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_Ic_Show" id="rich_fsl_Ic_Show" <?php echo $rich_Checked10;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_PPL_Show" id="rich_fsl_PPL_Show" <?php echo $rich_Checked11;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_Randomize" id="rich_fsl_Randomize" <?php echo $rich_Checked12;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_Loop" id="rich_fsl_Loop" <?php echo $rich_Checked13;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="rich_fsl_Border_Style" id="rich_fsl_Border_Style" class="alpha-color-picker" value="<?php echo $Rich_Web_Sl2_Loader[0]->rich_fsl_Border_Style;?>">
					</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Slider Settings</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Width;?>" id="rich_fsl_Width" name="rich_fsl_Width" min="300" max="1000">
							<span class="range-slider__value" id="rich_fsl_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Height;?>" id="rich_fsl_Height" name="rich_fsl_Height" min="200" max="1000">
							<span class="range-slider__value" id="rich_fsl_Height_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Border_Width;?>" id="rich_fsl_Border_Width" name="rich_fsl_Border_Width" min="0" max="20">
							<span class="range-slider__value" id="rich_fsl_Border_Width_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Box_Shadow" name="rich_fsl_Box_Shadow">
							<option value="Type 1" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="Type 10" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 10'){ echo 'selected';}?>> Type 10 </option>
							<option value="Type 11" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 11'){ echo 'selected';}?>> Type 11 </option>
							<option value="Type 12" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 12'){ echo 'selected';}?>> Type 12 </option>
							<option value="Type 13" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 13'){ echo 'selected';}?>> Type 13 </option>
							<option value="Type 14" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 14'){ echo 'selected';}?>> Type 14 </option>
							<option value="Type 15" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 15'){ echo 'selected';}?>> Type 15 </option>
							<option value="Type 16" <?php if($rich_Effect2[0]->rich_fsl_Box_Shadow=='Type 16'){ echo 'selected';}?>> Type 16 </option>
							<option value="none" <?php if($Rich_Web_VS10[0]->rich_fsl_Box_Shadow=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Shadow Color</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Border_Color" class="alpha-color-picker" name="rich_fsl_Border_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Border_Color;?>">
					</td>
					<td>
						<input type="text" id="rich_fsl_Shadow_Color" class="alpha-color-picker" name="rich_fsl_Shadow_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Shadow_Color;?>">
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Description Settings</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Background Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="rich_fsl_Desc_Show" id="rich_fsl_Desc_Show" <?php echo $rich_Checked14;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" id="rich_fsl_Desc_Bg_Color" class="alpha-color-picker" name="rich_fsl_Desc_Bg_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Desc_Bg_Color;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title Settings</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Font Family</td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Title_Font_Size;?>" id="rich_fsl_Title_Font_Size" name="rich_fsl_Title_Font_Size" min="8" max="36">
							<span class="range-slider__value" id="rich_fsl_Title_Font_Size_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_fsl_Title_Color" class="alpha-color-picker" name="rich_fsl_Title_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Title_Color;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Title_Font_Family" name="rich_fsl_Title_Font_Family">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$rich_Effect2[0]->rich_fsl_Title_Font_Family){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Title_Text_Align" name="rich_fsl_Title_Text_Align">
							<option value="left"   <?php if($rich_Effect2[0]->rich_fsl_Title_Text_Align=="left"){echo "selected";}?>>   Left   </option>
							<option value="right"  <?php if($rich_Effect2[0]->rich_fsl_Title_Text_Align=="right"){echo "selected";}?>>  Right  </option>
							<option value="center" <?php if($rich_Effect2[0]->rich_fsl_Title_Text_Align=="center"){echo "selected";}?>> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Link Settings</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Text" name="rich_fsl_Link_Text" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Text;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Border_Width;?>" id="rich_fsl_Link_Border_Width" name="rich_fsl_Link_Border_Width" min="0" max="30">
							<span class="range-slider__value" id="rich_fsl_Link_Border_Width_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Link_Border_Style" name="rich_fsl_Link_Border_Style">
							<option value="none"   <?php if($rich_Effect2[0]->rich_fsl_Link_Border_Style=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($rich_Effect2[0]->rich_fsl_Link_Border_Style=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($rich_Effect2[0]->rich_fsl_Link_Border_Style=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($rich_Effect2[0]->rich_fsl_Link_Border_Style=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Border_Color" class="alpha-color-picker" name="rich_fsl_Link_Border_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Border_Color;?>">
					</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Color</td>
					<td>Font Family</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Font_Size;?>" id="rich_fsl_Link_Font_Size" name="rich_fsl_Link_Font_Size" min="8" max="36">
							<span class="range-slider__value" id="rich_fsl_Link_Font_Size_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Color" class="alpha-color-picker" name="rich_fsl_Link_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Color;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Link_Font_Family" name="rich_fsl_Link_Font_Family">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$rich_Effect2[0]->rich_fsl_Link_Font_Family){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Bg_Color" class="alpha-color-picker" name="rich_fsl_Link_Bg_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Bg_Color;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Border Color</td>
					<td>Hover Background Color</td>
					<td>Radius (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Border_Color" class="alpha-color-picker" name="rich_fsl_Link_Hover_Border_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Hover_Border_Color;?>">
					</td>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Bg_Color" class="alpha-color-picker" name="rich_fsl_Link_Hover_Bg_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Hover_Bg_Color;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Title_Text_Shadow;?>" id="rich_fsl_Title_Text_Shadow" name="rich_fsl_Title_Text_Shadow" min="0" max="100">
							<span class="range-slider__value" id="rich_fsl_Title_Text_Shadow_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="rich_fsl_Link_Hover_Color" class="alpha-color-picker" name="rich_fsl_Link_Hover_Color" value="<?php echo $rich_Effect2[0]->rich_fsl_Link_Hover_Color;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Icon Settings</td>
				</tr>
				<tr>
					<td>Icon Size (px)</td>
					<td>Icon Type</td>
					<td>Hover Icon Type</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $rich_Effect2[0]->rich_fsl_Icon_Size;?>" id="rich_fsl_Icon_Size" name="rich_fsl_Icon_Size" min="10" max="45">
							<span class="range-slider__value" id="rich_fsl_Icon_Size_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Icon_Type" name="rich_fsl_Icon_Type">
							<option value="1"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="1"){echo "selected";}?>>  Icon 1  </option>
							<option value="2"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="2"){echo "selected";}?>>  Icon 2  </option>
							<option value="3"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="3"){echo "selected";}?>>  Icon 3  </option>
							<option value="4"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="4"){echo "selected";}?>>  Icon 4  </option>
							<option value="5"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="5"){echo "selected";}?>>  Icon 5  </option>
							<option value="6"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="6"){echo "selected";}?>>  Icon 6  </option>
							<option value="7"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="7"){echo "selected";}?>>  Icon 7  </option>
							<option value="8"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="8"){echo "selected";}?>>  Icon 8  </option>
							<option value="9"  <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="9"){echo "selected";}?>>  Icon 9  </option>
							<option value="10" <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="10"){echo "selected";}?>> Icon 10 </option>
							<option value="11" <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="11"){echo "selected";}?>> Icon 11 </option>
							<option value="12" <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="12"){echo "selected";}?>> Icon 12 </option>
							<option value="13" <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="13"){echo "selected";}?>> Icon 13 </option>
							<option value="14" <?php if($rich_Effect2[0]->rich_fsl_Icon_Type=="14"){echo "selected";}?>> Icon 14 </option>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="rich_fsl_Hover_Icon_Type" name="rich_fsl_Hover_Icon_Type">
							<option value="1"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="1"){echo "selected";}?>>  Icon 1  </option>
							<option value="2"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="2"){echo "selected";}?>>  Icon 2  </option>
							<option value="3"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="3"){echo "selected";}?>>  Icon 3  </option>
							<option value="4"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="4"){echo "selected";}?>>  Icon 4  </option>
							<option value="5"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="5"){echo "selected";}?>>  Icon 5  </option>
							<option value="6"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="6"){echo "selected";}?>>  Icon 6  </option>
							<option value="7"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="7"){echo "selected";}?>>  Icon 7  </option>
							<option value="8"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="8"){echo "selected";}?>>  Icon 8  </option>
							<option value="9"  <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="9"){echo "selected";}?>>  Icon 9  </option>
							<option value="10" <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="10"){echo "selected";}?>> Icon 10 </option>
							<option value="11" <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="11"){echo "selected";}?>> Icon 11 </option>
							<option value="12" <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="12"){echo "selected";}?>> Icon 12 </option>
							<option value="13" <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="13"){echo "selected";}?>> Icon 13 </option>
							<option value="14" <?php if($rich_Effect2[0]->rich_fsl_Hover_Icon_Type=="14"){echo "selected";}?>> Icon 14 </option>
						</select>
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_4" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_W;?>" id="Rich_Web_Sl_CT_W" name="Rich_Web_Sl_CT_W" min="100" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_H;?>" id="Rich_Web_Sl_CT_H" name="Rich_Web_Sl_CT_H" min="100" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BW;?>" id="Rich_Web_Sl_CT_BW" name="Rich_Web_Sl_CT_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_BS" name="Rich_Web_Sl_CT_BS">
							<option value="none"   <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BS=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BS=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BS=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_BC" name="Rich_Web_Sl_CT_BC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_BxSType" name="Rich_Web_Sl_CT_BxSType">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="Type 10" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 10'){ echo 'selected';}?>> Type 10 </option>
							<option value="Type 11" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 11'){ echo 'selected';}?>> Type 11 </option>
							<option value="Type 12" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 12'){ echo 'selected';}?>> Type 12 </option>
							<option value="Type 13" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 13'){ echo 'selected';}?>> Type 13 </option>
							<option value="Type 14" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 14'){ echo 'selected';}?>> Type 14 </option>
							<option value="Type 15" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 15'){ echo 'selected';}?>> Type 15 </option>
							<option value="Type 16" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='Type 16'){ echo 'selected';}?>> Type 16 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxSType=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_BxC" name="Rich_Web_Sl_CT_BxC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_BxC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">Title Content</td>
					<td colspan="2">Loading Icon</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Position</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_TDABgC" name="Rich_Web_Sl_CT_TDABgC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TDABgC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_TDAPos" name="Rich_Web_Sl_CT_TDAPos">
							<option value="top"    <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TDAPos=="top"){echo "selected";}?>>    Top    </option>
							<option value="bottom" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TDAPos=="bottom"){echo "selected";}?>> Bottom </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_LBgC" name="Rich_Web_Sl_CT_LBgC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_LBgC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Current Color</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TFS;?>" id="Rich_Web_Sl_CT_TFS" name="Rich_Web_Sl_CT_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_TFF" name="Rich_Web_Sl_CT_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_TCC" name="Rich_Web_Sl_CT_TCC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TCC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_TC" name="Rich_Web_Sl_CT_TC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_TC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Radius (px)</td>
					<td>Type</td>
					<td>Show Arrow Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_ArBgC" name="Rich_Web_Sl_CT_ArBgC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArBgC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArBR;?>" id="Rich_Web_Sl_CT_ArBR" name="Rich_Web_Sl_CT_ArBR" min="0" max="25">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_ArBR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_ArType" name="Rich_Web_Sl_CT_ArType">
							<option value="1" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArType=="1"){echo "selected";}?>> Type 1 </option>
							<option value="2" <?php if($Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArType=="2"){echo "selected";}?>> Type 2 </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_CT_ArText" id="Rich_Web_Sl_CT_ArText" <?php echo $Rich_Web_Sl_CT_ArText;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Left Arrow Text</td>
					<td>Right Arrow Text</td>
					<td>Text Color</td>
					<td>Text Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_CT_ArLeft" id="Rich_Web_Sl_CT_ArLeft" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArLeft;?>">
					</td>
					<td>
						<input type="text"  name="Rich_Web_Sl_CT_ArRight" id="Rich_Web_Sl_CT_ArRight" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArRight;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_ArTextC" name="Rich_Web_Sl_CT_ArTextC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArTextC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArTextFS;?>" id="Rich_Web_Sl_CT_ArTextFS" name="Rich_Web_Sl_CT_ArTextFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_ArTextFS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Text Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_CT_ArTextFF" name="Rich_Web_Sl_CT_ArTextFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArTextFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Hover</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_CT_ArHBC" name="Rich_Web_Sl_CT_ArHBC" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArHBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff4[0]->Rich_Web_Sl_CT_ArHBR;?>" id="Rich_Web_Sl_CT_ArHBR" name="Rich_Web_Sl_CT_ArHBR" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_CT_ArHBR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_5" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Shadow Type</td>
					<td>Border Color</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BW;?>" id="Rich_Web_Sl_SC_BW" name="Rich_Web_Sl_SC_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_BoxShType" name="Rich_Web_Sl_SC_BoxShType">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 2'){ echo 'selected';}?>> Type 2 </option>	
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShType=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_BC" name="Rich_Web_Sl_SC_BC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_BoxShC" name="Rich_Web_Sl_SC_BoxShC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BoxShC;?>">
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_BS" name="Rich_Web_Sl_SC_BS" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_BS;?>">
					</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_IW;?>" id="Rich_Web_Sl_SC_IW" name="Rich_Web_Sl_SC_IW" min="100" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_IW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_IH;?>" id="Rich_Web_Sl_SC_IH" name="Rich_Web_Sl_SC_IH" min="100" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_IH_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_IBW;?>" id="Rich_Web_Sl_SC_IBW" name="Rich_Web_Sl_SC_IBW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_IBW_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_IBC" name="Rich_Web_Sl_SC_IBC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_IBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_IBR;?>" id="Rich_Web_Sl_SC_IBR" name="Rich_Web_Sl_SC_IBR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_IBR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Image Container</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Hover Overlay Color</td>
					<td>Hover Type</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_ICBW;?>" id="Rich_Web_Sl_SC_ICBW" name="Rich_Web_Sl_SC_ICBW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_ICBW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_ICBC" name="Rich_Web_Sl_SC_ICBC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_ICBC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_CarSl_H_OvC" name="Rich_Web_CarSl_H_OvC" value="<?php echo $Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_H_OvC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_CarSl_HT" name="Rich_Web_CarSl_HT">
							<option value="1"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="1"){echo "selected";}?>>  Type 1  </option>
							<option value="2"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="2"){echo "selected";}?>>  Type 2  </option>
							<option value="3"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="3"){echo "selected";}?>>  Type 3  </option>
							<option value="4"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="4"){echo "selected";}?>>  Type 4  </option>
							<option value="5"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="5"){echo "selected";}?>>  Type 5  </option>
							<option value="6"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="6"){echo "selected";}?>>  Type 6  </option>
							<option value="7"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="7"){echo "selected";}?>>  Type 7  </option>
							<option value="8"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="8"){echo "selected";}?>>  Type 8  </option>
							<option value="9"  <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="9"){echo "selected";}?>>  Type 9  </option>
							<option value="10" <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="10"){echo "selected";}?>> Type 10 </option>
							<option value="11" <?php if($Rich_Web_Sl5_Loader[0]->Rich_Web_CarSl_HT=="11"){echo "selected";}?>> Default </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_TBgC" name="Rich_Web_Sl_SC_TBgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_TBgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_TC" name="Rich_Web_Sl_SC_TC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_TC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_TFS;?>" id="Rich_Web_Sl_SC_TFS" name="Rich_Web_Sl_SC_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_TFF" name="Rich_Web_Sl_SC_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color</td>
					<td>Hover Color</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_THBgC" name="Rich_Web_Sl_SC_THBgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_THBgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_THC" name="Rich_Web_Sl_SC_THC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_THC;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Popup Image Options</td>
				</tr>
				<tr>
					<td>Overlay Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Pop_OC" name="Rich_Web_Sl_SC_Pop_OC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_OC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BW;?>" id="Rich_Web_Sl_SC_Pop_BW" name="Rich_Web_Sl_SC_Pop_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_Pop_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Pop_BC" name="Rich_Web_Sl_SC_Pop_BC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_Pop_BoxShType" name="Rich_Web_Sl_SC_Pop_BoxShType">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="Type 10" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 10'){ echo 'selected';}?>> Type 10 </option>
							<option value="Type 11" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 11'){ echo 'selected';}?>> Type 11 </option>
							<option value="Type 12" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 12'){ echo 'selected';}?>> Type 12 </option>
							<option value="Type 13" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 13'){ echo 'selected';}?>> Type 13 </option>
							<option value="Type 14" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 14'){ echo 'selected';}?>> Type 14 </option>
							<option value="Type 15" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 15'){ echo 'selected';}?>> Type 15 </option>
							<option value="Type 16" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='Type 16'){ echo 'selected';}?>> Type 16 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShType=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Pop_BoxShC" name="Rich_Web_Sl_SC_Pop_BoxShC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Pop_BoxShC;?>">
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_L_BgC" name="Rich_Web_Sl_SC_L_BgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_L_C" name="Rich_Web_Sl_SC_L_C" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_C;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_FS;?>" id="Rich_Web_Sl_SC_L_FS" name="Rich_Web_Sl_SC_L_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_L_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BW;?>" id="Rich_Web_Sl_SC_L_BW" name="Rich_Web_Sl_SC_L_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_L_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_L_BS" name="Rich_Web_Sl_SC_L_BS">
							<option value="none"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BS=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BS=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BS=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_L_BC" name="Rich_Web_Sl_SC_L_BC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_BR;?>" id="Rich_Web_Sl_SC_L_BR" name="Rich_Web_Sl_SC_L_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_L_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_L_HBgC" name="Rich_Web_Sl_SC_L_HBgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_HBgC;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Text</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_L_HC" name="Rich_Web_Sl_SC_L_HC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_HC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_L_Type" name="Rich_Web_Sl_SC_L_Type">
							<option value="text" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_Type=="text"){echo "selected";}?>> Text </option>
							<option value="icon" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_Type=="icon"){echo "selected";}?>> Icon </option>
						</select>
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_SC_L_Text" id="Rich_Web_Sl_SC_L_Text" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_Text;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_L_IType" name="Rich_Web_Sl_SC_L_IType">
							<option value="link"          <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_IType=="link"){echo "selected";}?>>          Type 1 </option>
							<option value="paperclip"     <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_IType=="paperclip"){echo "selected";}?>>     Type 2 </option>
							<option value="external-link" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_IType=="external-link"){echo "selected";}?>> Type 3 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_L_FF" name="Rich_Web_Sl_SC_L_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_L_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Popup</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PI_BgC" name="Rich_Web_Sl_SC_PI_BgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_BgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PI_C" name="Rich_Web_Sl_SC_PI_C" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_C;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_FS;?>" id="Rich_Web_Sl_SC_PI_FS" name="Rich_Web_Sl_SC_PI_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_PI_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_BW;?>" id="Rich_Web_Sl_SC_PI_BW" name="Rich_Web_Sl_SC_PI_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_PI_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_PI_FF" name="Rich_Web_Sl_SC_PI_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PI_BC" name="Rich_Web_Sl_SC_PI_BC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_BR;?>" id="Rich_Web_Sl_SC_PI_BR" name="Rich_Web_Sl_SC_PI_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_PI_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PI_HBgC" name="Rich_Web_Sl_SC_PI_HBgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_HBgC;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Text</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PI_HC" name="Rich_Web_Sl_SC_PI_HC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_HC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_PI_Type" name="Rich_Web_Sl_SC_PI_Type">
							<option value="text" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_Type=="text"){echo "selected";}?>> Text </option>
							<option value="icon" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_Type=="icon"){echo "selected";}?>> Icon </option>
						</select>
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_SC_PI_Text" id="Rich_Web_Sl_SC_PI_Text" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_Text;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_PI_IType" name="Rich_Web_Sl_SC_PI_IType">
							<option value="file-image-o"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="file-image-o"){echo "selected";}?>>   Type 1 </option>
							<option value="picture-o"      <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="picture-o"){echo "selected";}?>>      Type 2 </option>
							<option value="eye"            <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="eye"){echo "selected";}?>>            Type 3 </option>
							<option value="object-ungroup" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="object-ungroup"){echo "selected";}?>> Type 4 </option>
							<option value="television"     <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="television"){echo "selected";}?>>     Type 5 </option>
							<option value="arrows-alt"     <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="arrows-alt"){echo "selected";}?>>     Type 6 </option>
							<option value="camera"         <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="camera"){echo "selected";}?>>         Type 7 </option>
							<option value="camera-retro"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PI_IType=="camera-retro"){echo "selected";}?>>   Type 8 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Color</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Arr_BgC" name="Rich_Web_Sl_SC_Arr_BgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Arr_C" name="Rich_Web_Sl_SC_Arr_C" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_C;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_FS;?>" id="Rich_Web_Sl_SC_Arr_FS" name="Rich_Web_Sl_SC_Arr_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_Arr_FS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BW;?>" id="Rich_Web_Sl_SC_Arr_BW" name="Rich_Web_Sl_SC_Arr_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_Arr_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Hover Background Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_Arr_BS" name="Rich_Web_Sl_SC_Arr_BS">
							<option value="none"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BS=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BS=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BS=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Arr_BC" name="Rich_Web_Sl_SC_Arr_BC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_BR;?>" id="Rich_Web_Sl_SC_Arr_BR" name="Rich_Web_Sl_SC_Arr_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_Arr_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Arr_HBgC" name="Rich_Web_Sl_SC_Arr_HBgC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_HBgC;?>">
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Type</td>
					<td>Font Family</td>
					<td>Icon Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_Arr_HC" name="Rich_Web_Sl_SC_Arr_HC" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_HC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_Arr_Type" name="Rich_Web_Sl_SC_Arr_Type">
							<option value="text" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_Type=="text"){echo "selected";}?>> Text </option>
							<option value="icon" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_Type=="icon"){echo "selected";}?>> Icon </option>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_Arr_FF" name="Rich_Web_Sl_SC_Arr_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_Arr_IType" name="Rich_Web_Sl_SC_Arr_IType">
							<option value="angle-double"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="angle-double"){echo "selected";}?>>   Type 1  </option>
							<option value="angle"          <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="angle"){echo "selected";}?>>          Type 2  </option>
							<option value="arrow-circle"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="arrow-circle"){echo "selected";}?>>   Type 3  </option>
							<option value="arrow-circle-o" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="arrow-circle-o"){echo "selected";}?>> Type 4  </option>
							<option value="arrow"          <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="arrow"){echo "selected";}?>>          Type 5  </option>
							<option value="caret"          <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="caret"){echo "selected";}?>>          Type 6  </option>
							<option value="caret-square-o" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="caret-square-o"){echo "selected";}?>> Type 7  </option>
							<option value="chevron-circle" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="chevron-circle"){echo "selected";}?>> Type 8  </option>
							<option value="chevron"        <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="chevron"){echo "selected";}?>>        Type 9  </option>
							<option value="hand-o"         <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="hand-o"){echo "selected";}?>>         Type 10 </option>
							<option value="long-arrow"     <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_IType=="long-arrow"){echo "selected";}?>>     Type 11 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Next Text</td>
					<td>Prev Text</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_SC_Arr_Next" id="Rich_Web_Sl_SC_Arr_Next" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_Next;?>">
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_SC_Arr_Prev" id="Rich_Web_Sl_SC_Arr_Prev" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_Arr_Prev;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Popup Close Icon</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color</td>
					<td>Type</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_FS;?>" id="Rich_Web_Sl_SC_PCI_FS" name="Rich_Web_Sl_SC_PCI_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_SC_PCI_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_SC_PCI_C" name="Rich_Web_Sl_SC_PCI_C" value="<?php echo $Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_C;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_SC_PCI_Type" name="Rich_Web_Sl_SC_PCI_Type">
							<option value="home"           <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_Type=="home"){echo "selected";}?>>           Type 1 </option>
							<option value="times"          <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_Type=="times"){echo "selected";}?>>          Type 2 </option>
							<option value="times-circle"   <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_Type=="times-circle"){echo "selected";}?>>   Type 3 </option>
							<option value="times-circle-o" <?php if($Rich_Web_Sl_Eff5[0]->Rich_Web_Sl_SC_PCI_Type=="times-circle-o"){echo "selected";}?>> Type 4 </option>
						</select>
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_6" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Autoplay</td>
					<td>Transition Speed (ms)</td>
					<td>Pause Time (s)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_BgC" name="Rich_Web_Sl_FS_BgC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_BgC;?>">
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_FS_AP" id="Rich_Web_Sl_FS_AP" <?php echo $Rich_Web_Sl_FS_AP;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_TS;?>" id="Rich_Web_Sl_FS_TS" name="Rich_Web_Sl_FS_TS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_TS_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_PT;?>" id="Rich_Web_Sl_FS_PT" name="Rich_Web_Sl_FS_PT" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_PT_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Slide Steps</td>
					<td>Popup</td>
					<td>Count of Slides</td>
					<td>Slide Loop</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SS;?>" id="Rich_Web_Sl_FS_SS" name="Rich_Web_Sl_FS_SS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_SS_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_FS_SVis" id="Rich_Web_Sl_FS_SVis" <?php echo $Rich_Web_Sl_FS_SVis;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_CS;?>" id="Rich_Web_Sl_FS_CS" name="Rich_Web_Sl_FS_CS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_CS_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_FS_SLoop" id="Rich_Web_Sl_FS_SLoop" <?php echo $Rich_Web_Sl_FS_SLoop;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Slide Scaling</td>
					<td>Slide Position</td>
					<td>Always Show Nav Buttons</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SSc;?>" id="Rich_Web_Sl_FS_SSc" name="Rich_Web_Sl_FS_SSc" min="100" max="300" step="10">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_SSc_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_FS_SlPos" name="Rich_Web_Sl_FS_SlPos">
							<option value="left"   <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SlPos=="left"){echo "selected";}?>>   Left   </option>
							<option value="right"  <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SlPos=="right"){echo "selected";}?>>  Right  </option>
							<option value="center" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_SlPos=="center"){echo "selected";}?>> Center </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_FS_ShNavBut" id="Rich_Web_Sl_FS_ShNavBut" <?php echo $Rich_Web_Sl_FS_ShNavBut;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_I_BS" name="Rich_Web_Sl_FS_I_BS" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BS;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_W;?>" id="Rich_Web_Sl_FS_I_W" name="Rich_Web_Sl_FS_I_W" min="100" max="900">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_I_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_H;?>" id="Rich_Web_Sl_FS_I_H" name="Rich_Web_Sl_FS_I_H" min="100" max="900">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_I_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BW;?>" id="Rich_Web_Sl_FS_I_BW" name="Rich_Web_Sl_FS_I_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_I_BW_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_I_BC" name="Rich_Web_Sl_FS_I_BC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BR;?>" id="Rich_Web_Sl_FS_I_BR" name="Rich_Web_Sl_FS_I_BR" min="0" max="200">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_I_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_FS_I_BoxShType" name="Rich_Web_Sl_FS_I_BoxShType">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="none"   <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShType=='none'){ echo 'selected';}?>>   None   </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_I_BoxShC" name="Rich_Web_Sl_FS_I_BoxShC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_I_BoxShC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Color</td>
					<td>Font Family</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_T_C" name="Rich_Web_Sl_FS_T_C" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_T_C;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_FS_T_FF" name="Rich_Web_Sl_FS_T_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_T_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_FS_Nav_Show" id="Rich_Web_Sl_FS_Nav_Show" <?php echo $Rich_Web_Sl_FS_Nav_Show;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_W;?>" id="Rich_Web_Sl_FS_Nav_W" name="Rich_Web_Sl_FS_Nav_W" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_H;?>" id="Rich_Web_Sl_FS_Nav_H" name="Rich_Web_Sl_FS_Nav_H" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_BW;?>" id="Rich_Web_Sl_FS_Nav_BW" name="Rich_Web_Sl_FS_Nav_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Nav_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Place Between (px)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_Nav_BC" name="Rich_Web_Sl_FS_Nav_BC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_BR;?>" id="Rich_Web_Sl_FS_Nav_BR" name="Rich_Web_Sl_FS_Nav_BR" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_PB;?>" id="Rich_Web_Sl_FS_Nav_PB" name="Rich_Web_Sl_FS_Nav_PB" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Nav_PB_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Current Color</td>
					<td>Hover Color</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_Nav_CC" name="Rich_Web_Sl_FS_Nav_CC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_CC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_Nav_HC" name="Rich_Web_Sl_FS_Nav_HC" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_HC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_Nav_C" name="Rich_Web_Sl_FS_Nav_C" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Nav_C;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_FS_Arr_Type" name="Rich_Web_Sl_FS_Arr_Type">
							<option value="angle-double"   <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="angle-double"){echo "selected";}?>>   Type 1  </option>
							<option value="angle"          <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="angle"){echo "selected";}?>>          Type 2  </option>
							<option value="arrow-circle"   <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="arrow-circle"){echo "selected";}?>>   Type 3  </option>
							<option value="arrow-circle-o" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="arrow-circle-o"){echo "selected";}?>> Type 4  </option>
							<option value="arrow"          <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="arrow"){echo "selected";}?>>          Type 5  </option>
							<option value="caret"          <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="caret"){echo "selected";}?>>          Type 6  </option>
							<option value="caret-square-o" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="caret-square-o"){echo "selected";}?>> Type 7  </option>
							<option value="chevron-circle" <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="chevron-circle"){echo "selected";}?>> Type 8  </option>
							<option value="chevron"        <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="chevron"){echo "selected";}?>>        Type 9  </option>
							<option value="hand-o"         <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="hand-o"){echo "selected";}?>>         Type 10 </option>
							<option value="long-arrow"     <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="long-arrow"){echo "selected";}?>>     Type 11 </option>
							<option value="none"     <?php if($Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_Type=="none"){echo "selected";}?>>     None </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_S;?>" id="Rich_Web_Sl_FS_Arr_S" name="Rich_Web_Sl_FS_Arr_S" min="8" max="80">
							<span class="range-slider__value" id="Rich_Web_Sl_FS_Arr_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_FS_Arr_C" name="Rich_Web_Sl_FS_Arr_C" value="<?php echo $Rich_Web_Sl_Eff6[0]->Rich_Web_Sl_FS_Arr_C;?>">
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_7" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Autoplay</td>
					<td>Pause Time (s)</td>
					<td>Transition</td>
					<td>Height (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_DS_AP" id="Rich_Web_Sl_DS_AP" <?php echo $Rich_Web_Sl_DS_AP;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_PT;?>" id="Rich_Web_Sl_DS_PT" name="Rich_Web_Sl_DS_PT" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_PT_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_DS_Tr" id="Rich_Web_Sl_DS_Tr" <?php echo $Rich_Web_Sl_DS_Tr;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_H;?>" id="Rich_Web_Sl_DS_H" name="Rich_Web_Sl_DS_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_H_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Popup</td>
					<td>Border Color</td>
					<td>Slider Image Type</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_BW;?>" id="Rich_Web_Sl_DS_BW" name="Rich_Web_Sl_DS_BW" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_BW_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_DS_DFS" id="Rich_Web_Sl_DS_DFS" <?php echo $Rich_Web_Sl_DS_DFS;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_BC" name="Rich_Web_Sl_DS_BC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_BC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_DynamicSl_ImgT" name="Rich_Web_DynamicSl_ImgT">
							<option value="Type 1" <?php if($Rich_Web_Sl7_Loader[0]->Rich_Web_DynamicSl_ImgT=="Type 1"){echo "selected";}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl7_Loader[0]->Rich_Web_DynamicSl_ImgT=="Type 2"){echo "selected";}?>> Type 2 </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Loading Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_BS" name="Rich_Web_Sl_DS_BS" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_BS;?>">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_TFS;?>" id="Rich_Web_Sl_DS_TFS" name="Rich_Web_Sl_DS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_DS_TFF" name="Rich_Web_Sl_DS_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_TC" name="Rich_Web_Sl_DS_TC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_TC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LFS;?>" id="Rich_Web_Sl_DS_LFS" name="Rich_Web_Sl_DS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_LFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_DS_LFF" name="Rich_Web_Sl_DS_LFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_LC" name="Rich_Web_Sl_DS_LC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_LBgC" name="Rich_Web_Sl_DS_LBgC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBgC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBW;?>" id="Rich_Web_Sl_DS_LBW" name="Rich_Web_Sl_DS_LBW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_LBW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_DS_LBS" name="Rich_Web_Sl_DS_LBS">
							<option value="none"   <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBS=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBS=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBS=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_LBC" name="Rich_Web_Sl_DS_LBC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LBR;?>" id="Rich_Web_Sl_DS_LBR" name="Rich_Web_Sl_DS_LBR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_LBR_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Hover Color</td>
					<td>Hover Background Color</td>
					<td>Link Text</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_LHC" name="Rich_Web_Sl_DS_LHC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LHC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_LHBgC" name="Rich_Web_Sl_DS_LHBgC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LHBgC;?>">
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_DS_LT" id="Rich_Web_Sl_DS_LT" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_LT;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Left Arrow Text</td>
					<td>Right Arrow Text</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_DS_Arr_Show" id="Rich_Web_Sl_DS_Arr_Show" <?php echo $Rich_Web_Sl_DS_Arr_Show;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_DS_Arr_LT" id="Rich_Web_Sl_DS_Arr_LT" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_LT;?>">
					</td>
					<td>
						<input type="text" class="rich_web_Select_Menu" name="Rich_Web_Sl_DS_Arr_RT" id="Rich_Web_Sl_DS_Arr_RT" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_RT;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Arr_C" name="Rich_Web_Sl_DS_Arr_C" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_C;?>">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Arr_BgC" name="Rich_Web_Sl_DS_Arr_BgC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BgC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BW;?>" id="Rich_Web_Sl_DS_Arr_BW" name="Rich_Web_Sl_DS_Arr_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Arr_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_DS_Arr_BS" name="Rich_Web_Sl_DS_Arr_BS">
							<option value="none"   <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BS=="none"){echo "selected";}?>>   None   </option>
							<option value="solid"  <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BS=="solid"){echo "selected";}?>>  Solid  </option>
							<option value="dotted" <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BS=="dotted"){echo "selected";}?>> Dotted </option>
							<option value="dashed" <?php if($Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BS=="dashed"){echo "selected";}?>> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Arr_BC" name="Rich_Web_Sl_DS_Arr_BC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Hover Color</td>
					<td>Hover Background Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_BR;?>" id="Rich_Web_Sl_DS_Arr_BR" name="Rich_Web_Sl_DS_Arr_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Arr_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Arr_HC" name="Rich_Web_Sl_DS_Arr_HC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_HC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Arr_HBgC" name="Rich_Web_Sl_DS_Arr_HBgC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Arr_HBgC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_W;?>" id="Rich_Web_Sl_DS_Nav_W" name="Rich_Web_Sl_DS_Nav_W" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_H;?>" id="Rich_Web_Sl_DS_Nav_H" name="Rich_Web_Sl_DS_Nav_H" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_PB;?>" id="Rich_Web_Sl_DS_Nav_PB" name="Rich_Web_Sl_DS_Nav_PB" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Nav_PB_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_BW;?>" id="Rich_Web_Sl_DS_Nav_BW" name="Rich_Web_Sl_DS_Nav_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Nav_BW_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Color</td>
					<td>Hover Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Nav_BC" name="Rich_Web_Sl_DS_Nav_BC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_BR;?>" id="Rich_Web_Sl_DS_Nav_BR" name="Rich_Web_Sl_DS_Nav_BR" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_DS_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Nav_C" name="Rich_Web_Sl_DS_Nav_C" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_C;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Nav_HC" name="Rich_Web_Sl_DS_Nav_HC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_HC;?>">
					</td>
				</tr>
				<tr>
					<td>Current Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_DS_Nav_CC" name="Rich_Web_Sl_DS_Nav_CC" value="<?php echo $Rich_Web_Sl_Eff7[0]->Rich_Web_Sl_DS_Nav_CC;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_8" style="display:none;">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Change Speed (ms)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_W;?>" id="Rich_Web_Sl_TSL_W" name="Rich_Web_Sl_TSL_W" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_H;?>" id="Rich_Web_Sl_TSL_H" name="Rich_Web_Sl_TSL_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BW;?>" id="Rich_Web_Sl_TSL_BW" name="Rich_Web_Sl_TSL_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CS;?>" id="Rich_Web_Sl_TSL_CS" name="Rich_Web_Sl_TSL_CS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_CS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_BC" name="Rich_Web_Sl_TSL_BC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BR;?>" id="Rich_Web_Sl_TSL_BR" name="Rich_Web_Sl_TSL_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_BoxShType" name="Rich_Web_Sl_TSL_BoxShType">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="Type 10" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 10'){ echo 'selected';}?>> Type 10 </option>
							<option value="Type 11" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 11'){ echo 'selected';}?>> Type 11 </option>
							<option value="Type 12" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 12'){ echo 'selected';}?>> Type 12 </option>
							<option value="Type 13" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 13'){ echo 'selected';}?>> Type 13 </option>
							<option value="Type 14" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 14'){ echo 'selected';}?>> Type 14 </option>
							<option value="Type 15" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 15'){ echo 'selected';}?>> Type 15 </option>
							<option value="Type 16" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='Type 16'){ echo 'selected';}?>> Type 16 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShType=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_BoxShC" name="Rich_Web_Sl_TSL_BoxShC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BoxShC;?>">
					</td>
				</tr>
				<tr>
					<td>Change Mode</td>
					<td>Toggle Arrows</td>
					<td>Auto Play</td>
					<td>Pause on Hover</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_CM" name="Rich_Web_Sl_TSL_CM">
							<option value="horizontal" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CM=="horizontal"){echo "selected";}?>> Horizontal </option>
							<option value="vertical"   <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CM=="vertical"){echo "selected";}?>>   Vertical   </option>
							<option value="fade"       <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CM=="fade"){echo "selected";}?>>       Fade       </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_TA" id="Rich_Web_Sl_TSL_TA" <?php echo $Rich_Web_Sl_TSL_TA;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_AP" id="Rich_Web_Sl_TSL_AP" <?php echo $Rich_Web_Sl_TSL_AP;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_PH" id="Rich_Web_Sl_TSL_PH" <?php echo $Rich_Web_Sl_TSL_PH;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td>Loop</td>
					<td>Pause Time (s)</td>
					<td>Loading Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_Loop" id="Rich_Web_Sl_TSL_Loop" <?php echo $Rich_Web_Sl_TSL_Loop;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_PT;?>" id="Rich_Web_Sl_TSL_PT" name="Rich_Web_Sl_TSL_PT" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_PT_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_BS" name="Rich_Web_Sl_TSL_BS" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_BS;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_Nav_Show" id="Rich_Web_Sl_TSL_Nav_Show" <?php echo $Rich_Web_Sl_TSL_Nav_Show;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_W;?>" id="Rich_Web_Sl_TSL_Nav_W" name="Rich_Web_Sl_TSL_Nav_W" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Nav_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_H;?>" id="Rich_Web_Sl_TSL_Nav_H" name="Rich_Web_Sl_TSL_Nav_H" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Nav_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_PB;?>" id="Rich_Web_Sl_TSL_Nav_PB" name="Rich_Web_Sl_TSL_Nav_PB" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Nav_PB_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Border Radius (px)</td>
					<td>Current Border Color</td>
					<td>Hover Border Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Nav_BC" name="Rich_Web_Sl_TSL_Nav_BC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_BR;?>" id="Rich_Web_Sl_TSL_Nav_BR" name="Rich_Web_Sl_TSL_Nav_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Nav_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Nav_CBC" name="Rich_Web_Sl_TSL_Nav_CBC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_CBC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Nav_HBC" name="Rich_Web_Sl_TSL_Nav_HBC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_HBC;?>">
					</td>
				</tr>
				<tr>
					<td>Position</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_Nav_Pos" name="Rich_Web_Sl_TSL_Nav_Pos">
							<option value="top"    <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_Pos=="top"){echo "selected";}?>>    Top    </option>
							<option value="bottom" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Nav_Pos=="bottom"){echo "selected";}?>> Bottom </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Start/Stop Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_SS_Show" id="Rich_Web_Sl_TSL_SS_Show" <?php echo $Rich_Web_Sl_TSL_SS_Show;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_W;?>" id="Rich_Web_Sl_TSL_SS_W" name="Rich_Web_Sl_TSL_SS_W" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_SS_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_H;?>" id="Rich_Web_Sl_TSL_SS_H" name="Rich_Web_Sl_TSL_SS_H" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_SS_H_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_SS_BC" name="Rich_Web_Sl_TSL_SS_BC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_BC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Start Color</td>
					<td>Stop Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_BR;?>" id="Rich_Web_Sl_TSL_SS_BR" name="Rich_Web_Sl_TSL_SS_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_SS_BR_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_SS_StC" name="Rich_Web_Sl_TSL_SS_StC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_StC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_SS_SpC" name="Rich_Web_Sl_TSL_SS_SpC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_SS_SpC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_Sl_TSL_Arr_Show" id="Rich_Web_Sl_TSL_Arr_Show" <?php echo $Rich_Web_Sl_TSL_Arr_Show;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_Arr_Type" name="Rich_Web_Sl_TSL_Arr_Type">
							<option value="5"  <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="5"){echo "selected";}?>>  Type 1  </option>
							<option value="6"  <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="6"){echo "selected";}?>>  Type 2  </option>
							<option value="7"  <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="7"){echo "selected";}?>>  Type 3  </option>
							<option value="8"  <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="8"){echo "selected";}?>>  Type 4  </option>
							<option value="9"  <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="9"){echo "selected";}?>>  Type 5  </option>
							<option value="10" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="10"){echo "selected";}?>> Type 6  </option>
							<option value="11" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="11"){echo "selected";}?>> Type 7  </option>
							<option value="12" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="12"){echo "selected";}?>> Type 8  </option>
							<option value="13" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="13"){echo "selected";}?>> Type 9  </option>
							<option value="14" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="14"){echo "selected";}?>> Type 10 </option>
							<option value="15" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="15"){echo "selected";}?>> Type 11 </option>
							<option value="16" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="16"){echo "selected";}?>> Type 12 </option>
							<option value="17" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="17"){echo "selected";}?>> Type 13 </option>
							<option value="18" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="18"){echo "selected";}?>> Type 14 </option>
							<option value="19" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="19"){echo "selected";}?>> Type 15 </option>
							<option value="20" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="20"){echo "selected";}?>> Type 16 </option>
							<option value="21" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="21"){echo "selected";}?>> Type 17 </option>
							<option value="22" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="22"){echo "selected";}?>> Type 18 </option>
							<option value="23" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="23"){echo "selected";}?>> Type 19 </option>
							<option value="24" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_Type=="24"){echo "selected";}?>> Type 20 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_S;?>" id="Rich_Web_Sl_TSL_Arr_S" name="Rich_Web_Sl_TSL_Arr_S" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Arr_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Arr_C" name="Rich_Web_Sl_TSL_Arr_C" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Arr_C;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Color</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
					<td>Content Background</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Pop_OvC" name="Rich_Web_Sl_TSL_Pop_OvC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_OvC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_BW;?>" id="Rich_Web_Sl_TSL_Pop_BW" name="Rich_Web_Sl_TSL_Pop_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Pop_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Pop_BC" name="Rich_Web_Sl_TSL_Pop_BC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_BC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Pop_BgC" name="Rich_Web_Sl_TSL_Pop_BgC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_BR;?>" id="Rich_Web_Sl_TSL_Pop_BR" name="Rich_Web_Sl_TSL_Pop_BR" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Pop_BR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title in Popup</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_TFS;?>" id="Rich_Web_Sl_TSL_TFS" name="Rich_Web_Sl_TSL_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_TFS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_TFF" name="Rich_Web_Sl_TSL_TFF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_TFF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_TC" name="Rich_Web_Sl_TSL_TC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_TC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows in Popup</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_Pop_ArrType" name="Rich_Web_Sl_TSL_Pop_ArrType">
							<option value="angle-double"   <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="angle-double"){echo "selected";}?>>   Type 1  </option>
							<option value="angle"          <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="angle"){echo "selected";}?>>          Type 2  </option>
							<option value="arrow-circle"   <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="arrow-circle"){echo "selected";}?>>   Type 3  </option>
							<option value="arrow-circle-o" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="arrow-circle-o"){echo "selected";}?>> Type 4  </option>
							<option value="arrow"          <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="arrow"){echo "selected";}?>>          Type 5  </option>
							<option value="caret"          <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="caret"){echo "selected";}?>>          Type 6  </option>
							<option value="caret-square-o" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="caret-square-o"){echo "selected";}?>> Type 7  </option>
							<option value="chevron-circle" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="chevron-circle"){echo "selected";}?>> Type 8  </option>
							<option value="chevron"        <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="chevron"){echo "selected";}?>>        Type 9  </option>
							<option value="hand-o"         <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="hand-o"){echo "selected";}?>>         Type 10 </option>
							<option value="long-arrow"     <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrType=="long-arrow"){echo "selected";}?>>     Type 11 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrS;?>" id="Rich_Web_Sl_TSL_Pop_ArrS" name="Rich_Web_Sl_TSL_Pop_ArrS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_Pop_ArrS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_Pop_ArrC" name="Rich_Web_Sl_TSL_Pop_ArrC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_Pop_ArrC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Close Icon in Popup</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Size (px)</td>
					<td>Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_Sl_TSL_CIT" name="Rich_Web_Sl_TSL_CIT">
							<option value="home"           <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIT=="home"){echo "selected";}?>>           Type 1 </option>
							<option value="times"          <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIT=="times"){echo "selected";}?>>          Type 2 </option>
							<option value="times-circle"   <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIT=="times-circle"){echo "selected";}?>>   Type 3 </option>
							<option value="times-circle-o" <?php if($Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIT=="times-circle-o"){echo "selected";}?>> Type 4 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIS;?>" id="Rich_Web_Sl_TSL_CIS" name="Rich_Web_Sl_TSL_CIS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_Sl_TSL_CIS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_Sl_TSL_CIC" name="Rich_Web_Sl_TSL_CIC" value="<?php echo $Rich_Web_Sl_Eff8[0]->Rich_Web_Sl_TSL_CIC;?>">
					</td>
					<td></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_9" style="display:none;">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_W;?>" id="Rich_Web_AcSL_W" name="Rich_Web_AcSL_W" min="200" max="1000">
							<span class="range-slider__value" id="Rich_Web_AcSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_H;?>" id="Rich_Web_AcSL_H" name="Rich_Web_AcSL_H" min="200" max="1000">
							<span class="range-slider__value" id="Rich_Web_AcSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BW;?>" id="Rich_Web_AcSL_BW" name="Rich_Web_AcSL_BW" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_AcSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_BS" name="Rich_Web_AcSL_BS" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BS;?>">
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_BC" name="Rich_Web_AcSL_BC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BC;?>">
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AcSL_BSh" name="Rich_Web_AcSL_BSh">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BSh=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_BShC" name="Rich_Web_AcSL_BShC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_BShC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Img_W;?>" id="Rich_Web_AcSL_Img_W" name="Rich_Web_AcSL_Img_W" min="50" max="700">
							<span class="range-slider__value" id="Rich_Web_AcSL_Img_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Img_BSh;?>" id="Rich_Web_AcSL_Img_BSh" name="Rich_Web_AcSL_Img_BSh" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_AcSL_Img_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Img_BShC" name="Rich_Web_AcSL_Img_BShC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Img_BShC;?>">
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Video Icon Options</td>
				</tr>
				<tr>
					<td>Color</td>
					<td>Background Color</td>
					<td colspan='2'></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Title_TSh" name="Rich_Web_AcSL_Title_TSh" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_TSh;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Title_TShC" name="Rich_Web_AcSL_Title_TShC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_TShC;?>">
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_FS;?>" id="Rich_Web_AcSL_Title_FS" name="Rich_Web_AcSL_Title_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_AcSL_Title_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AcSL_Title_FF" name="Rich_Web_AcSL_Title_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Title_C" name="Rich_Web_AcSL_Title_C" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_C;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Title_BgC" name="Rich_Web_AcSL_Title_BgC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Title_BgC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Slider Image Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Link_FS;?>" id="Rich_Web_AcSL_Link_FS" name="Rich_Web_AcSL_Link_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_AcSL_Link_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AcSL_Link_FF" name="Rich_Web_AcSL_Link_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Link_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Link_C" name="Rich_Web_AcSL_Link_C" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Link_C;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AcSL_Link_BgC" name="Rich_Web_AcSL_Link_BgC" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Link_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="Rich_Web_AcSL_Link_Text" name="Rich_Web_AcSL_Link_Text" value="<?php echo $Rich_Web_Sl_Eff9[0]->Rich_Web_AcSL_Link_Text;?>">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class="rich_web_SaveSl_Table_2 rich_web_SaveSl_Table_2_10" style="display:none;">
				<tr>
					<td colspan="4">General Settings</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Loading Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_W;?>" id="Rich_Web_AnSL_W" name="Rich_Web_AnSL_W" min="300" max="1400">
							<span class="range-slider__value" id="Rich_Web_AnSL_W_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_H;?>" id="Rich_Web_AnSL_H" name="Rich_Web_AnSL_H" min="300" max="1400">
							<span class="range-slider__value" id="Rich_Web_AnSL_H_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_BW;?>" id="Rich_Web_AnSL_BW" name="Rich_Web_AnSL_BW" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_AnSL_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_BS" name="Rich_Web_AnSL_BS" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_BS;?>">
					</td>
				</tr>
				<tr>
					<td>Border Color</td>
					<td>Radius (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_BC" name="Rich_Web_AnSL_BC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_BC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_BR;?>" id="Rich_Web_AnSL_BR" name="Rich_Web_AnSL_BR" min="0" max="200">
							<span class="range-slider__value" id="Rich_Web_AnSL_BR_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_N_BS" name="Rich_Web_AnSL_N_BS">
							<option value="Type 1" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 1'){ echo 'selected';}?>> Type 1 </option>
							<option value="Type 2" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 2'){ echo 'selected';}?>> Type 2 </option>
							<option value="Type 3" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 3'){ echo 'selected';}?>> Type 3 </option>
							<option value="Type 4" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 4'){ echo 'selected';}?>> Type 4 </option>
							<option value="Type 5" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 5'){ echo 'selected';}?>> Type 5 </option>
							<option value="Type 6" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 6'){ echo 'selected';}?>> Type 6 </option>
							<option value="Type 7" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 7'){ echo 'selected';}?>> Type 7 </option>
							<option value="Type 8" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 8'){ echo 'selected';}?>> Type 8 </option>
							<option value="Type 9" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='Type 9'){ echo 'selected';}?>> Type 9 </option>
							<option value="none" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BS=='none'){ echo 'selected';}?>> None </option>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_ShC" name="Rich_Web_AnSL_ShC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ShC;?>">
					</td>
				</tr>
				<tr>
					<td>Effect Type</td>
					<td>Slideshow</td>
					<td>Slideshow Change Time (ms)</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_ET" name="Rich_Web_AnSL_ET">
							<option value="1"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="1"){echo "selected";}?>>  Curve-Horizontal          </option>
							<option value="2"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="2"){echo "selected";}?>>  Curve-Vertical            </option>
							<option value="3"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="3"){echo "selected";}?>>  Curve-Criss-Cross         </option>
							<option value="4"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="4"){echo "selected";}?>>  Curve-Criss-Cross-Reverse </option>
							<option value="5"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="5"){echo "selected";}?>>  Opacity                   </option>
							<option value="6"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="6"){echo "selected";}?>>  Zoom-Out                  </option>
							<option value="7"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="7"){echo "selected";}?>>  Zoom-Out-Bazier           </option>
							<option value="8"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="8"){echo "selected";}?>>  Zoom-In                   </option>
							<option value="9"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="9"){echo "selected";}?>>  Zoom-In-Bazier            </option>
							<option value="10" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="10"){echo "selected";}?>> Zoom-In-Bazier-Circle     </option>
							<option value="11" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="11"){echo "selected";}?>> Zoom-In-Circle            </option>
							<option value="12" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="12"){echo "selected";}?>> Zoom-Criss-Cross          </option>
							<option value="13" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="13"){echo "selected";}?>> Zoom-Criss-Cross-Reverse  </option>
							<option value="14" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_ET=="14"){echo "selected";}?>> None                      </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_AnSL_SSh" id="Rich_Web_AnSL_SSh" <?php echo $Rich_Web_AnSL_SSh;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_SShChT;?>" id="Rich_Web_AnSL_SShChT" name="Rich_Web_AnSL_SShChT" min="1000" max="10000">
							<span class="range-slider__value" id="Rich_Web_AnSL_SShChT_Span">0</span>
						</div>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Settings</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_FS;?>" id="Rich_Web_AnSL_T_FS" name="Rich_Web_AnSL_T_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_AnSL_T_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_T_FF" name="Rich_Web_AnSL_T_FF">
							<?php for($i=0;$i<count($Rich_WebFontCount);$i++){ ?> 
								<?php if($Rich_WebFontCount[$i]==$Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_FF){ ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;" selected><?php echo $Rich_WebFontCount[$i];?></option>
								<?php } else { ?> 
									<option value="<?php echo $Rich_WebFontCount[$i];?>" style="font-family: <?php echo $Rich_WebFontCount[$i];?>;"><?php echo $Rich_WebFontCount[$i];?></option>
								<?php }?>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_T_C" name="Rich_Web_AnSL_T_C" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_C;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_T_BgC" name="Rich_Web_AnSL_T_BgC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_BgC;?>">
					</td>
				</tr>
				<tr>
					<td>Text Align</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_T_TA" name="Rich_Web_AnSL_T_TA">
							<option value="left"    <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_TA=="left"){echo "selected";}?>>    Left    </option>
							<option value="right"   <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_TA=="right"){echo "selected";}?>>   Right   </option>
							<option value="center"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_TA=="center"){echo "selected";}?>>  Center  </option>
							<option value="justify" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_TA=="justify"){echo "selected";}?>> Justify </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Settings</td>
				</tr>
				<tr>
					<td>Navigation</td>
					<td>Size (px)</td>
					<td>Border Width (px)</td>
					<td>Border Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_AnSL_N_Sh" id="Rich_Web_AnSL_N_Sh" <?php echo $Rich_Web_AnSL_N_Sh;?>/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_S;?>" id="Rich_Web_AnSL_N_S" name="Rich_Web_AnSL_N_S" min="5" max="30">
							<span class="range-slider__value" id="Rich_Web_AnSL_N_S_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BW;?>" id="Rich_Web_AnSL_N_BW" name="Rich_Web_AnSL_N_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_AnSL_N_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_N_BC" name="Rich_Web_AnSL_N_BC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BC;?>">
					</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td>Margin (px)</td>
					<td>Hover Background Color</td>
					<td>Current Color</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_N_BgC" name="Rich_Web_AnSL_N_BgC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_BgC;?>">
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_M;?>" id="Rich_Web_AnSL_N_M" name="Rich_Web_AnSL_N_M" min="0" max="12">
							<span class="range-slider__value" id="Rich_Web_AnSL_N_M_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_N_HBgC" name="Rich_Web_AnSL_N_HBgC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_HBgC;?>">
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_N_CC" name="Rich_Web_AnSL_N_CC" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_N_CC;?>">
					</td>
				</tr>
				<tr>
					<td colspan="4">Icons Settings</td>
				</tr>
				<tr>
					<td>Image/Icon</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_T_ShC" name="Rich_Web_AnSL_T_ShC">
							<option value="Image" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_ShC=="Image"){echo "selected";}?>> Image </option>
							<option value="Icon"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_ShC=="Icon"){echo "selected";}?>>  Icon  </option>
							<option value="none"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_ShC=="none"){echo "selected";}?>>  None  </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>Image Type</td>
					<td>Icon Type</td>
					<td>Size (px)</td>
					<td>Icon Color</td>
				</tr>
				<tr>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_T_Sh" name="Rich_Web_AnSL_T_Sh">
							<option value="1"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="1"){echo "selected";}?>>  Type 1  </option>
							<option value="2"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="2"){echo "selected";}?>>  Type 2  </option>
							<option value="3"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="3"){echo "selected";}?>>  Type 3  </option>
							<option value="4"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="4"){echo "selected";}?>>  Type 4  </option>
							<option value="5"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="5"){echo "selected";}?>>  Type 5  </option>
							<option value="6"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="6"){echo "selected";}?>>  Type 6  </option>
							<option value="7"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="7"){echo "selected";}?>>  Type 7  </option>
							<option value="8"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="8"){echo "selected";}?>>  Type 8  </option>
							<option value="9"  <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="9"){echo "selected";}?>>  Type 9  </option>
							<option value="10" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="10"){echo "selected";}?>> Type 10 </option>
							<option value="11" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="11"){echo "selected";}?>> Type 11 </option>
							<option value="12" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="12"){echo "selected";}?>> Type 12 </option>
							<option value="13" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="13"){echo "selected";}?>> Type 13 </option>
							<option value="14" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="14"){echo "selected";}?>> Type 14 </option>
							<option value="15" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="15"){echo "selected";}?>> Type 15 </option>
							<option value="16" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="16"){echo "selected";}?>> Type 16 </option>
							<option value="17" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="17"){echo "selected";}?>> Type 17 </option>
							<option value="18" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="18"){echo "selected";}?>> Type 18 </option>
							<option value="19" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="19"){echo "selected";}?>> Type 19 </option>
							<option value="20" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="20"){echo "selected";}?>> Type 20 </option>
							<option value="21" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="21"){echo "selected";}?>> Type 21 </option>
							<option value="22" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="22"){echo "selected";}?>> Type 22 </option>
							<option value="23" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="23"){echo "selected";}?>> Type 23 </option>
							<option value="24" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="24"){echo "selected";}?>> Type 24 </option>
							<option value="25" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="25"){echo "selected";}?>> Type 25 </option>
							<option value="26" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="26"){echo "selected";}?>> Type 26 </option>
							<option value="27" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="27"){echo "selected";}?>> Type 27 </option>
							<option value="28" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_T_Sh=="28"){echo "selected";}?>> Type 28 </option>
						</select>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_AnSL_Ic_T" name="Rich_Web_AnSL_Ic_T">
							<option value="rich_web rich_web-angle-double" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-angle-double"){echo "selected";}?>> Icon 1 </option>
							<option value="rich_web rich_web-angle" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-angle"){echo "selected";}?>> Icon 2 </option>
							<option value="rich_web rich_web-arrow-circle" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-arrow-circle"){echo "selected";}?>> Icon 3 </option>
							<option value="rich_web rich_web-arrow-circle-o" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-arrow-circle-o"){echo "selected";}?>> Icon 4 </option>
							<option value="rich_web rich_web-arrow" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-arrow"){echo "selected";}?>> Icon 5 </option>
							<option value="rich_web rich_web-caret" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-caret"){echo "selected";}?>> Icon 6 </option>
							<option value="rich_web rich_web-caret-square-o" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-caret-square-o"){echo "selected";}?>> Icon 7 </option>
							<option value="rich_web rich_web-chevron-circle" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-chevron-circle"){echo "selected";}?>> Icon 8 </option>
							<option value="rich_web rich_web-chevron" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-chevron"){echo "selected";}?>> Icon 9 </option>
							<option value="rich_web rich_web-hand-o" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-hand-o"){echo "selected";}?>> Icon 10 </option>
							<option value="rich_web rich_web-long-arrow" <?php if($Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_T=="rich_web rich_web-long-arrow"){echo "selected";}?>> Icon 11 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">  
							<input class="range-slider__range" type="range" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_S;?>" id="Rich_Web_AnSL_Ic_S" name="Rich_Web_AnSL_Ic_S" min="10" max="80">
							<span class="range-slider__value" id="Rich_Web_AnSL_Ic_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="alpha-color-picker" id="Rich_Web_AnSL_Ic_C" name="Rich_Web_AnSL_Ic_C" value="<?php echo $Rich_Web_Sl_Eff10[0]->Rich_Web_AnSL_Ic_C;?>">
					</td>
				</tr>
			</table>
		</div>
	</div>
</form>