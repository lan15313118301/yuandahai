console.log ('version Consumer Actions b.com/e-comm v3.6 (brand.com latest)');

var jQueryMessageDisplayed=false;
 

function gaca_listener_b_com(event_data)
{
    if (typeof(_gaq) === 'undefined') return;
    var opt_label  = event_data.detail;
    if (typeof opt_label === "undefined") opt_label=="not available";
    if (event_data.action =="event_video_play")
    {
        try{
            //ga('set', 'dimension39', opt_label);            
            ga('send', 'event', 'event_informational_action', 'event_video_play', opt_label);    
        }
        catch(ex)
        {
        _gaq.push(['_trackEvent','event_informational_action', 'event_video_play', opt_label]);    
        }
    }
    else
    {
        var sCategory  = event_data.category;
        if (typeof sCategory === "undefined") sCategory=="not available";

        try{
            //ga('set', 'dimension39', opt_label);                
            ga('send', 'event', sCategory, event_data.action, opt_label);    
        }
        catch(ex)
        {
        _gaq.push(['_trackEvent',sCategory, event_data.action, opt_label]);    
        }
    }
}
 

function setupEvent_b_com(eventObject, sCategory, sDetail, sClassname, jqClicked){

    var category = sCategory;
    var action = sClassname;
    if (action=="event_add_to_cart")        action="event_buy_now_add_to_cart";
    if (action=="event_crm_registration")   action="event_profile_register";
    if (action=="event_share_email")        action="event_share";
    if (action=="event_coupon_requested")   action="event_coupon_print";
    if (action=="event_facebook_exit")      action ="event_socialmedia_exit";
    if (action=="event_twitter_exit")       action ="event_socialmedia_exit";
    if (action=="event_pinterest_exit")     action ="event_socialmedia_exit";
    if (action=="event_youtube_exit")       action ="event_socialmedia_exit";
    if (action=="event_linkedin_exit")      action ="event_socialmedia_exit";
    if (action=="event_sweepstakes_quiz")   action ="event_sweepstakes_entry";
    if (action=="event_sweepstakes_complete")  action ="event_sweepstakes_complete";
    if (action=="event_socialmedia_like")   action ="event_social_like";
    if (action=="event_socialmedia_share")  action ="event_social_comment";
//    if (action=="get-product-selected") action = "event_get_product_selected";
    
    var tagType = eventObject.currentTarget.tagName;
    
    // Stop the Event (Navigation) from going forward
    var target = jQuery(jqClicked).attr('target');
    if (typeof target  === "undefined") {
        target  = "";
    }
    
    // delay click navigation action if we are clicking on A tag that does not open up in a new tab
    if (target!="_blank" && (tagType == "A"))    eventObject.preventDefault();


    window.bt_url = eventObject.currentTarget.href;
    
    //data-action-retailer and data-action-productid are used to deliver data attributes when one action has 2 data attributes at the same time
 
    if (typeof sDetail  === "undefined" || sDetail=="")
    {
        var opt_label  = jQuery(jqClicked).attr('data-action-detail');
 
    }
    else
    {
        var opt_label=sDetail;    
 
    }
 
    
    
    if (sClassname=='event_buy_now_choose_retailer' || sClassname=='event_buy_now_eretailer_exit'){
        
        sDetail= jQuery(jqClicked).attr('data-action-retailer');
        if (typeof sDetail === "undefined" || sDetail=="") {
            sDetail= jQuery(jqClicked).attr('data-action-detail');
            if (typeof sDetail === "undefined" || sDetail=="") {
                if (typeof opt_label === "undefined" || opt_label=="") {
                      opt_label = 'not available';
                 }
            }
            else{
                opt_label=sDetail;
            }            
        }
        else{
            opt_label=sDetail;
        }
    }
    else if (sClassname=='event_buy_now_choose_product'  || 
            sClassname=='event_product_review_view'      || 
            sClassname=='event_product_review'           || 
            sClassname=='event_sample_request'           || 
            sClassname=='event_buy_now_add_to_cart'      || 
            sClassname=='event_comment'                  || 
            sClassname=='event_comment_submit'           || 
            sClassname=='event_remove_from_cart'         || 
            sClassname=='event_checkout_now'             || 
            sClassname=='event_submit_rating_score'      ||  
            sClassname=='event_sample_loyalty_point'     ||  
            sClassname=='event_coupon_request'           ||  
            sClassname=='event_coupon_print'             ||  
            sClassname=='event_coupon_requested'         ||  
            sClassname=='event_start_plan'               ||  
            sClassname=='event_add_to_plan'              ||  
            sClassname=='event_remove_from_plan'         ||  
            sClassname=='event_sample_paid' ){

        //try data-action-productid first, then data-action-detail
        sDetail= jQuery(jqClicked).attr('data-action-productid');
        if (typeof sDetail === "undefined" || sDetail=="") {
            sDetail= jQuery(jqClicked).attr('data-action-detail');
            if (typeof sDetail === "undefined" || sDetail=="") {
                if (typeof opt_label === "undefined" || opt_label=="") {
                      opt_label = 'not available';
                 }
            }
            else{
                opt_label=sDetail;
            }            
        }
        else{
            opt_label=sDetail;
        }
    }
    else
    {
        if (typeof opt_label === "undefined" || opt_label=="") {
                  opt_label = 'not available';
        }
    }
    //6-25-15 adding support for ratings
    var data_value = jQuery(jqClicked).attr('data-action-value');
    if (typeof data_value  !== "undefined") {
        if (data_value.length>0) opt_label  = data_value;
    }    


    //6-25-15 end    
    
    var redirection=jQuery(jqClicked).attr('data-pgaction-redirection');
    if (typeof redirection === "undefined") {
        redirection = "1";
    }
    

    var modal_popup = jQuery(jqClicked).attr('data-toggle');
    if (typeof modal_popup === "undefined") {
        modal_popup = "0";
    }

if (action == "event_buy_now_add_to_cart" || action == "event_buy_now_choose_product" ||
    action == "event_buy_now_add_to_cart" || action == "event_remove_from_cart" ||
    action == "event_update_quantity" || action == "event_product_quickview" ||
    action == "event_coupon_request" || action == "event_coupon_print" ||
    action == "event_coupon_redemption" || action == "event_product_review_view" ||
    action == "event_product_review" || action == "event_submit_review" ||
    action == "event_submit_review_approved" || action == "event_submit_rating_score"
     || action == "event_get_product_selected")
{

//    if (action == 'event_get_product_selected')
//    {
//        opt_label=jQuery(jqClicked).attr('data-itemid');
//    }

//console.log('line 173 - enable_ecommerce');
//console.log('enable_ecommerce='+enable_ecommerce);
    try{
        if (enable_ecommerce)
        {
        add_event_products('',opt_label,jqClicked);
        if (brandSet)           add_event_products('brand.',opt_label,jqClicked);
        if (brandRegionalSet)     add_event_products('brandRegional.',opt_label,jqClicked);
    	if (globalSet) 			add_event_products('global.',opt_label,jqClicked);
    	
    	switch(action)
    	{
    		case 'event_buy_now_add_to_cart':
    			ga('ec:setAction', 'add');
    			if (brandSet)			ga('brand.ec:setAction', 'add');
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'add');
    			if (globalSet) 			ga('global.ec:setAction', 'add');		
    			break;
    		case 'event_remove_from_cart':
    			ga('ec:setAction', 'remove');
    			if (brandSet)			ga('brand.ec:setAction', 'remove');
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'remove');
    			if (globalSet) 			ga('global.ec:setAction', 'remove');		
    		break;
    		case 'event_view_cart':
    			ga('ec:setAction', 'click');
    			if (brandSet)			ga('brand.ec:setAction', 'click');
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'click');
    			if (globalSet) 			ga('global.ec:setAction', 'click');		
    
    			break;
    		case 'event_checkout_now':
    			ga('ec:setAction', 'checkout');
    			if (brandSet)			ga('brand.ec:setAction', 'checkout');
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'checkout');
    			if (globalSet) 			ga('global.ec:setAction', 'checkout');		
    
    			break;
    		case 'event_update_quantity':
    			ga('ec:setAction', 'click');
    			if (brandSet)			ga('brand.ec:setAction', 'add');
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'add');
    			if (globalSet) 			ga('global.ec:setAction', 'add');		
    			break;
        	case 'event_get_product_selected':
        		ga('ec:setAction', 'click', {list: 'Search Results'});
    			if (brandSet)			ga('brand.ec:setAction', 'add', {list: 'Search Results'});
    			if (brandRegionalSet) 	ga('brandRegional.ec:setAction', 'add', {list: 'Search Results'});
    			if (globalSet) 			ga('global.ec:setAction', 'add', {list: 'Search Results'});		
    			break;
    	
    	}
        }
	}
    catch(ex)
    {}
        
}	
    /*      Call Audience Science    */
    try{
        //if (typeof as_listener12 == 'function') as_listener12(action);
        if (typeof as_listener13 == 'function') as_listener13(action,jqClicked);
    }
    catch (ex){ if (typeof console === "object") console.log(ex);}

    //opt_label=myTrim(opt_label);

    var have_many_hash=opt_label.split("#"); 
    if (have_many_hash.length>0)
    {
    	for(var i = 0; i<have_many_hash.length; i++)
		{
			var opt_label_arr_val = have_many_hash[i];
            try{
                ga('set', 'dimension39', opt_label_arr_val);     
                ga('send', 'event', category, action, opt_label_arr_val);
                if (brandSet)			ga('brand.send', 'event', category, action, opt_label_arr_val);
            	if (brandRegionalSet) 	ga('brandRegional.send', 'event', category, action, opt_label_arr_val);
            	if (globalSet) 			ga('global.send', 'event', category, action, opt_label_arr_val);		
            }
            catch(ex)
            {
            _gaq.push(['_trackEvent',category, action, opt_label_arr_val]);    
            }        
		}
    }	
    var redirection_enabled=false;
    if (redirection=="1") redirection_enabled=true;
    if (redirection_enabled)
    {
        if (typeof console === "object") console.log('GACA redirection was enabled');   
    }
    else
    {
        if (typeof console === "object") console.log('GACA redirection was disabled');
    }
    if (target!="_blank" && (tagType == "A")&&eventObject.which==1 && (redirection_enabled == true)&&(modal_popup!="modal"))
    {
        if (typeof console === "object") console.log('GACA redirection was enabled and moving to URL='+window.bt_url);
        setTimeout(function () {
            window.location = window.bt_url;
	    }, 50);
    }
    
}


/*
    Set up each unique consumer action
    
    sClassname = HTML element class name
    sCategory = Event Category
	sDetail = (optional) Event details

*/ 
function createConsumerActionEvent_b_com ( sClassname, sCategory, sDetail) {
    if (typeof jQuery === 'undefined') {
        if (jQueryMessageDisplayed==false) console.log('jQuery is NOT available');
        jQueryMessageDisplayed=true;
         return;
    }
   if (jQuery().live === undefined) {
        jQuery(document).on('mousedown', "." + sClassname, function(eventObject) {
            setupEvent_b_com(eventObject, sCategory, sDetail, sClassname, jQuery(this));
        });
    } else {
        jQuery("." + sClassname).live('mousedown', function(eventObject) {
            setupEvent_b_com(eventObject, sCategory, sDetail, sClassname, jQuery(this));
        });
    }
}

/*
	Register all event handlers
*/
function load_gaca_library() {
    if (typeof console === "object") console.log('setting up b.com events');
    
    //createConsumerActionEvent_b_com ( "get-product-selected",   "event_bin_action","","");//new    
    
    createConsumerActionEvent_b_com ( "event_buy_now",         	        "event_bin_action");//BN1
    createConsumerActionEvent_b_com ( "event_buy_now_choose_retailer",  "event_bin_action");//BN2
	createConsumerActionEvent_b_com ( "event_buy_now_choose_product",   "event_bin_action");//BN3
	createConsumerActionEvent_b_com ( "event_buy_now_eretailer_exit", 	"event_bin_action");//BN4
    createConsumerActionEvent_b_com ( "event_buy_now_add_to_cart",      "event_bin_action");                      
    createConsumerActionEvent_b_com ( "event_add_to_cart",              "event_bin_action");
    createConsumerActionEvent_b_com ( "event_where_to_buy",             "event_bin_action");
    createConsumerActionEvent_b_com ( "event_remove_from_cart",         "event_bin_action");
    createConsumerActionEvent_b_com ( "event_view_cart",                "event_bin_action");
    createConsumerActionEvent_b_com ( "event_checkout_now",             "event_bin_action");
    createConsumerActionEvent_b_com ( "event_update_quantity",          "event_bin_action");    
    createConsumerActionEvent_b_com ( "event_product_quickview",        "event_bin_action");    
    createConsumerActionEvent_b_com ( "event_back_to_shopping",         "event_bin_action");//backward comp
    createConsumerActionEvent_b_com ( "event_continue_shopping",        "event_bin_action");//new
    createConsumerActionEvent_b_com ( "event_purchase_completed",       "event_bin_action");//backward comp           
    createConsumerActionEvent_b_com ( "event_where_to_buy_online", 	    "event_bin_action");//backward comp


    createConsumerActionEvent_b_com ( "event_plan_frequency",   "event_subscription_action");//new
    createConsumerActionEvent_b_com ( "event_start_plan",       "event_subscription_action");//new
    createConsumerActionEvent_b_com ( "event_finish_plan",      "event_subscription_action");//new
    createConsumerActionEvent_b_com ( "event_add_to_plan",      "event_subscription_action");//new
    createConsumerActionEvent_b_com ( "event_remove_from_plan", "event_subscription_action");//new


    createConsumerActionEvent_b_com ( "event_product_consultation_start",     "event_consultation_action");//CT1
    createConsumerActionEvent_b_com ( "event_product_consultation_reco",      "event_consultation_action");//CT2
	createConsumerActionEvent_b_com ( "event_product_consultation_complete",  "event_consultation_action");//CT3


    createConsumerActionEvent_b_com ( "event_coupon_request",       "event_coupon_action");//RC1 
	createConsumerActionEvent_b_com ( "event_coupon_requested", 	"event_coupon_action");//backward comp
	createConsumerActionEvent_b_com ( "event_coupon_print",     	"event_coupon_action");//RC2
    createConsumerActionEvent_b_com ( "event_coupon_redemption",    "event_coupon_action");    
    createConsumerActionEvent_b_com ( "event_coupon_redeem",        "event_coupon_action");//backward comp    


    createConsumerActionEvent_b_com ( "event_crm_registration",         "event_crm_action");//backward comp
    createConsumerActionEvent_b_com ( "event_profile_register", 		"event_crm_action");
	createConsumerActionEvent_b_com ( "event_profile_update", 		    "event_crm_action");
    createConsumerActionEvent_b_com ( "event_profile_register_start",   "event_crm_action");
    createConsumerActionEvent_b_com ( "event_profile_register_complete","event_crm_action");
    createConsumerActionEvent_b_com ( "event_profile_update_gender",    "event_crm_action");  
    
    //7-15-15 - begin
    createConsumerActionEvent_b_com ( "event_crm_action",               "event_crm_action");  
    createConsumerActionEvent_b_com ( "event_profile_login",            "event_crm_action");  //Chase added 7.21.15
    createConsumerActionEvent_b_com ( "event_profile_login_submit",     "event_crm_action");  
    createConsumerActionEvent_b_com ( "event_profile_logout",           "event_crm_action");  
    createConsumerActionEvent_b_com ( "event_profile_register_cancel",    "event_crm_action");  
    createConsumerActionEvent_b_com ( "event_profile_register_social",    "event_crm_action");  

    createConsumerActionEvent_b_com ( "event_online_tool",              "event_informational_action");  
    createConsumerActionEvent_b_com ( "event_button_click",             "event_informational_action");  
    createConsumerActionEvent_b_com ( "event_menu_click",               "event_informational_action");      
    
    createConsumerActionEvent_b_com ( "event_reward_add_to_cart",       "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_checkout",          "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_partner_offer",     "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_read_article",      "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_complete_order",    "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_sample_request",    "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_submit_codes",      "event_loyalty_action");  
    createConsumerActionEvent_b_com ( "event_reward_view_cart",         "event_loyalty_action");  
    
    createConsumerActionEvent_b_com ( "event_consumer_reported_transaction",    "event_sales_action");  
    createConsumerActionEvent_b_com ( "event_product_registered",               "event_sales_action");  
    createConsumerActionEvent_b_com ( "event_profile_register_submit",          "event_crm_action");  

     createConsumerActionEvent_b_com ( "event_continue_shopping",               "event_bin_action");  
    createConsumerActionEvent_b_com ( "event_preview_review",                   "event_ratings_action");  
    createConsumerActionEvent_b_com ( "event_cancel_review",                    "event_ratings_action");  
    //7-15-15 end
    
    
    
    


    createConsumerActionEvent_b_com ( "event_search",               "event_informational_action");//IV3
	createConsumerActionEvent_b_com ( "event_print_page",           "event_informational_action");//IV4
	createConsumerActionEvent_b_com ( "event_video_play",     	    "event_informational_action");//IV5
	createConsumerActionEvent_b_com ( "event_file_download", 		"event_informational_action");//IV6
	createConsumerActionEvent_b_com ( "event_product_review_view",  "event_informational_action");//IV7
    createConsumerActionEvent_b_com ( "event_bookmark_page",        "event_informational_action");  
    createConsumerActionEvent_b_com ( "event_scroll",               "event_informational_action");//new 
    createConsumerActionEvent_b_com ( "event_view_more_details",    "event_informational_action");//new     
    createConsumerActionEvent_b_com ( "event_banner_click",         "event_informational_action");//no GACA
    createConsumerActionEvent_b_com ( "event_outbound_link",        "event_informational_action");//new 
  
  
    createConsumerActionEvent_b_com ( "event_loyalty_point_activity",   "event_loyalty_action");    


    createConsumerActionEvent_b_com ( "event_product_review",           "event_ratings_action");//RR1
    createConsumerActionEvent_b_com ( "event_submit_review", 		    "event_ratings_action");//RR2
	createConsumerActionEvent_b_com ( "event_submit_review_approved",   "event_ratings_action");//RR3
    createConsumerActionEvent_b_com ( "event_submit_rating_score",      "event_ratings_action");  
    createConsumerActionEvent_b_com ( "event_submit_video_review",      "event_ratings_action");

    createConsumerActionEvent_b_com ( "event_sample_request",           "event_sample_action");//RS1
    createConsumerActionEvent_b_com ( "event_sample_loyalty_point",     "event_sample_action");
    createConsumerActionEvent_b_com ( "event_sample_order",             "event_sample_action");//Chase Added 7.30.15
    createConsumerActionEvent_b_com ( "event_sample_paid",              "event_sample_action"); 


    createConsumerActionEvent_b_com ( "event_socialmedia_share",        "event_social_action");       
    createConsumerActionEvent_b_com ( "event_share",                    "event_social_action");           
    createConsumerActionEvent_b_com ( "event_share_email",              "event_social_action");           
    createConsumerActionEvent_b_com ( "event_social_comment",           "event_social_action");               
    createConsumerActionEvent_b_com ( "event_socialmedia_comment",      "event_social_action");               
    createConsumerActionEvent_b_com ( "event_socialmedia_exit", 		"event_social_action");
    createConsumerActionEvent_b_com ( "event_socialmedia_like",         "event_social_action"); 
    createConsumerActionEvent_b_com ( "event_social_like",              "event_social_action");               
    createConsumerActionEvent_b_com ( "event_socialmedia_post",         "event_social_action");               


    createConsumerActionEvent_b_com ( "event_survey_start",             "event_survey_action");  
    createConsumerActionEvent_b_com ( "event_survey_complete",          "event_survey_action");  
 

    createConsumerActionEvent_b_com ( "event_sweepstakes_entry", 	"event_sweepstakes_action");//SS1 
	createConsumerActionEvent_b_com ( "event_sweepstakes_quiz", 	"event_sweepstakes_action");//backward comp
    createConsumerActionEvent_b_com ( "event_sweepstakes_complete", "event_sweepstakes_action");//SS2


    createConsumerActionEvent_b_com ( "event_comment",               "event_user_gen_content_action");    
    createConsumerActionEvent_b_com ( "event_comment_submit",        "event_user_gen_content_action"); 

    //****backward compatibility***
    createConsumerActionEvent_b_com ( "event_where_to_buy_offline", "event_locator_action"); 
	createConsumerActionEvent_b_com ( "event_where_to_buy_retailer","event_locator_action"); 
	createConsumerActionEvent_b_com ( "event_facebook_exit",        "event_socialmedia_action", "facebook.com",""); 
	createConsumerActionEvent_b_com ( "event_twitter_exit", 	    "event_socialmedia_action", "twitter.com",""); 
	createConsumerActionEvent_b_com ( "event_pinterest_exit",       "event_socialmedia_action", "pinterest.com",""); 
	createConsumerActionEvent_b_com ( "event_youtube_exit",         "event_socialmedia_action", "youtube.com",""); 
	createConsumerActionEvent_b_com ( "event_linkedin_exit",        "event_socialmedia_action", "linkedin.com",""); 
 
	//***consumer actions added by Divya on 02/01/16***
	createConsumerActionEvent_b_com ( "event_open_mobile_app",      "event_informational_action"); 
	createConsumerActionEvent_b_com ( "event_rewards_login",      "event_loyalty_action"); 
	createConsumerActionEvent_b_com ( "event_rewards_scan_receipt",      "event_loyalty_action"); 
	createConsumerActionEvent_b_com ( "event_rewards_submit_scan",      "event_loyalty_action"); 
	createConsumerActionEvent_b_com ( "event_rewards_view_screen",      "event_loyalty_action");
	createConsumerActionEvent_b_com ( "event_rewards_update_setting",      "event_loyalty_action");
	createConsumerActionEvent_b_com ( "event_internal_link",        "event_informational_action");
	createConsumerActionEvent_b_com ( "event_profile_register_view_form",        "event_crm_action");
	createConsumerActionEvent_b_com ( "event_product_video_review",        "event_ratings_action");
	createConsumerActionEvent_b_com ( "event_special_offer",        "event_informational_action");
	createConsumerActionEvent_b_com ( "event_product_compare",        "event_informational_action");

    track_search_event();	
}
  
function add_event_products(prefix,sku,jqClicked)
{
    try{
        var quantity = jQuery(jqClicked).attr('data-action-product-quantity');
        if (typeof quantity === "undefined") {
            quantity = "1";
        }
        //console.log('line 456 quantity='+quantity);
        if (quantity=="1.0") quantity=1;
        ga(prefix+'ec:addProduct',{'id':sku,'quantity':quantity });
    }
    catch(ex){}
}  

function track_search_event()
{

    jQuery( document ).ready(function() {
        jQuery('.js-search-field').bind('keypress', function(e){
        if ( e.keyCode == 13 ) {
            
            try
            {
                ga('send', 'event', 'event_informational_action', 'event_search', jQuery(this).val());
            }
            catch(ex)
            {
                _gaq.push(['_trackEvent', 'event_informational_action', 'event_search', jQuery(this).val() ]);       
            }
            //console.log('keyword='+jQuery(this).val());
        }
        });
        jQuery( ".js-search-button" ).click(function() {
                   
            try
            {
                ga('send', 'event', 'event_informational_action', 'event_search', jQuery('.js-search-field').val());
            }
            catch(ex)
            {
                _gaq.push(['_trackEvent', 'event_informational_action', 'event_search', jQuery('.js-search-field').val()]); 
            }
            
            
            //console.log('keyword='+jQuery('.js-search-field').val());
        });
    });
}

function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');
}