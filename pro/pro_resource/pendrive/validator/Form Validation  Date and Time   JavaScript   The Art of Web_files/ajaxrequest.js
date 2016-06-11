function AjaxRequest()
{var req;var method="GET";var nocache=false;var handler;this.loadXMLDoc=function(url,params)
{if(window.XMLHttpRequest){try{req=new XMLHttpRequest();}catch(e){req=false;}}else if(window.ActiveXObject){try{req=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{req=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){req=false;}}}
if(req){if(!handler)handler=processReqChange;req.onreadystatechange=handler;if(nocache){params+=(params!='')?'&'+(new Date()).getTime():(new Date()).getTime();}
if(method=="POST"){req.open("POST",url,true);req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');req.send(params);}else{if(params)url+="?"+ params;req.open(method,url,true);req.send(null);}
return true;}
return false;}
this.setMethod=function(newmethod){method=newmethod.toUpperCase();}
this.nocache=function(){nocache=true;}
this.setHandler=function(fn){handler=fn;}
this.getResponse=function(){return req;}
var getNodeValue=function(parent,tagName)
{var node=parent.getElementsByTagName(tagName)[0];return(node&&node.firstChild)?node.firstChild.nodeValue:'';}
var processReqChange=function()
{if(req.readyState==4&&req.status==200){var response=req.responseXML.documentElement;var commands=response.getElementsByTagName('command');for(var i=0;i<commands.length;i++){method=commands[i].getAttribute('method');switch(method)
{case'alert':var message=getNodeValue(commands[i],'message');window.alert(message);break;case'setvalue':var target=getNodeValue(commands[i],'target');var value=getNodeValue(commands[i],'value');if(target&&value!=null){document.getElementById(target).value=value;}
break;case'setdefault':var target=getNodeValue(commands[i],'target');if(target){document.getElementById(target).value=document.getElementById(target).defaultValue;}
break;case'focus':var target=getNodeValue(commands[i],'target');if(target){document.getElementById(target).focus();}
break;case'setcontent':var target=getNodeValue(commands[i],'target');var content=getNodeValue(commands[i],'content');if(target&&(content!=null)){document.getElementById(target).innerHTML=content;}
break;case'setstyle':var target=getNodeValue(commands[i],'target');var property=getNodeValue(commands[i],'property');var value=getNodeValue(commands[i],'value');if(target&&property&&(value!=null)){document.getElementById(target).style[property]=value;}
break;case'setproperty':var target=getNodeValue(commands[i],'target');var property=getNodeValue(commands[i],'property');var value=getNodeValue(commands[i],'value');if(value=="true")value=true;if(value=="false")value=false;if(target&&document.getElementById(target)){document.getElementById(target)[property]=value;}
break;default:window.console.log("Error: unrecognised method '"+ method+"' in processReqChange()");}}}}}