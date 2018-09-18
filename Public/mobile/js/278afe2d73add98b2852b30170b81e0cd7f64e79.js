var utm_source     = gbs_getUrlVars()["utm_source"];
var utm_campaign   = gbs_getUrlVars()["utm_campaign"];

//console.log('utm_source='+utm_source);
//console.log('utm_campaign='+utm_campaign);


if ((utm_source!=null) &&(utm_source=="gbstest"))
{
    
    if (utm_campaign!=null){
        if (utm_campaign=="gaca")
        {
//            console.log('line 11');
            gbs_create_cookie('gaca-test','1');
        }else if(utm_campaign=="youtube")
        {
//            console.log('line 15');
            gbs_create_cookie('youtube-test','1');
        }else if(utm_campaign=="gap")
        {
//            console.log('line 19');
            gbs_create_cookie('gap-test','1');
        }else if(utm_campaign=="gbs-all-test")
        {
//            console.log('line 23');
            gbs_create_cookie('gaca-test','1');
            gbs_create_cookie('youtube-test','1');
            gbs_create_cookie('gap-test','1');
        }
    }
 
}
/*      NOW LOAD GACA   */

load_gaca();
load_youtube();

function load_gaca()
{
    if (typeof(_site_lib_blocker_) !== 'undefined')
    {
      if (typeof console == "object") console.log('_site_lib_blocker_ is set for domain '+document.location.hostname);
     return;
    }
    
    
    if (!checkJQuery())
    {
         if (typeof console == "object") console.log('This version of jQuery is not supported');   
    }
    
    utm_campaign =  gbs_get_cookie('gap-test');
    if (utm_campaign==null)
    {
        //load regular GACA
        if (typeof load_gaca_library== 'function') load_gaca_library();
    }
    else
    {
       // if (typeof console == "object") console.log('line 61 in GBS Firing Rule Library');
        //load test GACA   
        if (typeof load_gaca_libraryTEST== 'function') {
            //console.log('line 57 in GBS Firing Rule Library');
            load_gaca_libraryTEST();
        }
        else
        {
            if (typeof load_gaca_library== 'function') load_gaca_library();
        }
    }
}

function load_youtube()
{
  
    utm_campaign =  gbs_get_cookie('youtube-test');
    if (utm_campaign==null)
    {
        //load regular GACA
        if (typeof load_youtube_library== 'function') load_youtube_library();
    }
    else
    {
        //load test GACA   
        if (typeof load_test_youtube_library== 'function') {
            load_test_youtube_library();}
        else
        {
            if (typeof load_youtube_library== 'function') load_youtube_library();
        }
    }
}

/*

UTILITY FUNCTIONS

*/
    function compare(a, b) {
        
        if (typeof jQuery === 'undefined') {
             console.log('jQuery is NOT available');
             return -1;
        }
        
        if (a === b) {
            return 0;
        }
        var a_components = a.split(".");
        var b_components = b.split(".");
        var len = Math.min(a_components.length, b_components.length);
    	// loop while the components are equal
    	for (var i = 0; i < len; i++) {
    		// A bigger than B
    		if (parseInt(a_components[i]) > parseInt(b_components[i])) {
    			return 1;
    		}
    		// B bigger than A
    		if (parseInt(a_components[i]) < parseInt(b_components[i])) {
    			return -1;
    		}
    	}
    	// If one's a prefix of the other, the longer one is greater.
    	if (a_components.length > b_components.length) {
    		return 1;
    	}
    	if (a_components.length < b_components.length) {
    		return -1;
    	}
    	// Otherwise they are the same.
    	return 0;
    }

function checkJQuery()
{
    var $ = typeof(jQuery) === 'function' ? jQuery : typeof($) === 'function' ? $ : false;
    if (!$ || compare($().jquery, "1.4") == -1) 
    {
        if (typeof console == "object") { console.log('Unsupported version of jQuery');  }
    //return;
        return false;
    }
    return true;
}

function gbs_getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0].toLowerCase());
        vars[hash[0].toLowerCase()] = hash[1];
    }
 
//    console.log('line 154');
//    console.log(vars);
    return vars;
}
function gbs_create_cookie(name,value) 
{
    var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
//    console.log('line 156 setting cookie='+document.cookie);
}
function gbs_get_cookie(cname)
{
    var name = cname + "=";
//    console.log('line 161 getting cookie='+document.cookie);
    
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) 
      {
        var c="";
        try
          {
              var c = ca[i].replace(/^\s+|\s+$/gm,'');
          }
        catch(ex)
        {
            var c = ca[i];
        }
      if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}

 