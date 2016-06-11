var LocalCache=function()
{var now=new Date().getTime();var cookieExpiry=new Date(now+3600*1000).toGMTString();var supports_html5_storage=false;try{if("localStorage"in window&&window["localStorage"]!==null){supports_html5_storage=true;}}catch(e){}
var inArray=function(needle,haystack)
{for(var i=0;i<haystack.length;i++){if(haystack[i]==needle)return i;}
return false;};var setCookie=function(method,id)
{var matches=[];if(cookie=document.cookie.match(/localCache=([^;]+)/)){matches=cookie[1].split(":");}
switch(method)
{case"add":if(false===inArray(id,matches))matches.push(id);break;case"remove":var idx=inArray(id,matches);if(false!==idx)matches.splice(idx,1);break;}
document.cookie="localCache="+matches.join(":")+"; expires="+cookieExpiry+"; path=/";};return{store:function(id,duration)
{if(!supports_html5_storage)return;if(!duration)duration=1;var expiryTime=now+duration*60*60*1000;var storedContent="LocalCache:"+expiryTime+":"+document.getElementById(id).innerHTML;localStorage.setItem(id,storedContent);if(localStorage.getItem(id)!=null){setCookie("add",id);}},remove:function(id)
{if(!supports_html5_storage)return;localStorage.removeItem(id);setCookie("remove",id);},retrieve:function(id)
{if(!supports_html5_storage)return;var storedContent=localStorage.getItem(id);if(storedContent==null){document.getElementById(id).innerHTML='<p style="color: #666;"><b>Error:</b> this content has disappeared from localStorage.  Reload to retrieve.</p>';this.remove(id);}else if(regs=storedContent.match(/^LocalCache:(\d+):([\s\S]*)/)){document.getElementById(id).innerHTML=regs[2];if(parseInt(regs[1])<now){this.remove(id);}}},gc:function()
{for(var key in localStorage){var storedContent=localStorage.getItem(key);if(storedContent==null)continue;if(regs=storedContent.match(/^LocalCache:(\d+):/)){if(parseInt(regs[1])<now){this.remove(key);}}}}};}();