/* jQuery v1.6.4 http://jquery.com/ | http://jquery.org/license */
(function(a,b){function cu(a){return f.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}function cr(a){if(!cg[a]){var b=c.body,d=f("<"+a+">").appendTo(b),e=d.css("display");d.remove();if(e==="none"||e===""){ch||(ch=c.createElement("iframe"),ch.frameBorder=ch.width=ch.height=0),b.appendChild(ch);if(!ci||!ch.createElement){ci=(ch.contentWindow||ch.contentDocument).document,ci.write((c.compatMode==="CSS1Compat"?"<!doctype html>":"")+"<html><body>"),ci.close()}d=ci.createElement(a),ci.body.appendChild(d),e=f.css(d,"display"),b.removeChild(ch)}cg[a]=e}return cg[a]}function cq(a,b){var c={};f.each(cm.concat.apply([],cm.slice(0,b)),function(){c[this]=a});return c}function cp(){cn=b}function co(){setTimeout(cp,0);return cn=f.now()}function cf(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function ce(){try{return new a.XMLHttpRequest}catch(b){}}function b$(a,c){a.dataFilter&&(c=a.dataFilter(c,a.dataType));var d=a.dataTypes,e={},g,h,i=d.length,j,k=d[0],l,m,n,o,p;for(g=1;g<i;g++){if(g===1){for(h in a.converters){typeof h=="string"&&(e[h.toLowerCase()]=a.converters[h])}}l=k,k=d[g];if(k==="*"){k=l}else{if(l!=="*"&&l!==k){m=l+" "+k,n=e[m]||e["* "+k];if(!n){p=b;for(o in e){j=o.split(" ");if(j[0]===l||j[0]==="*"){p=e[j[1]+" "+k];if(p){o=e[o],o===!0?n=p:p===!0&&(n=o);break}}}}!n&&!p&&f.error("No conversion from "+m.replace(" "," to ")),n!==!0&&(c=n?n(c):p(o(c)))}}}return c}function bZ(a,c,d){var e=a.contents,f=a.dataTypes,g=a.responseFields,h,i,j,k;for(i in g){i in d&&(c[g[i]]=d[i])}while(f[0]==="*"){f.shift(),h===b&&(h=a.mimeType||c.getResponseHeader("content-type"))}if(h){for(i in e){if(e[i]&&e[i].test(h)){f.unshift(i);break}}}if(f[0] in d){j=f[0]}else{for(i in d){if(!f[0]||a.converters[i+" "+f[0]]){j=i;break}k||(k=i)}j=j||k}if(j){j!==f[0]&&f.unshift(j);return d[j]}}function bY(a,b,c,d){if(f.isArray(b)){f.each(b,function(b,e){c||bA.test(a)?d(a,e):bY(a+"["+(typeof e=="object"||f.isArray(e)?b:"")+"]",e,c,d)})}else{if(!c&&b!=null&&typeof b=="object"){for(var e in b){bY(a+"["+e+"]",b[e],c,d)}}else{d(a,b)}}}function bX(a,c){var d,e,g=f.ajaxSettings.flatOptions||{};for(d in c){c[d]!==b&&((g[d]?a:e||(e={}))[d]=c[d])}e&&f.extend(!0,a,e)}function bW(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h=a[f],i=0,j=h?h.length:0,k=a===bP,l;for(;i<j&&(k||!l);i++){l=h[i](c,d,e),typeof l=="string"&&(!k||g[l]?l=b:(c.dataTypes.unshift(l),l=bW(a,c,d,e,l,g)))}(k||!l)&&!g["*"]&&(l=bW(a,c,d,e,"*",g));return l}function bV(a){return function(b,c){typeof b!="string"&&(c=b,b="*");if(f.isFunction(c)){var d=b.toLowerCase().split(bL),e=0,g=d.length,h,i,j;for(;e<g;e++){h=d[e],j=/^\+/.test(h),j&&(h=h.substr(1)||"*"),i=a[h]=a[h]||[],i[j?"unshift":"push"](c)}}}}function by(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=b==="width"?bt:bu;if(d>0){c!=="border"&&f.each(e,function(){c||(d-=parseFloat(f.css(a,"padding"+this))||0),c==="margin"?d+=parseFloat(f.css(a,c+this))||0:d-=parseFloat(f.css(a,"border"+this+"Width"))||0});return d+"px"}d=bv(a,b,b);if(d<0||d==null){d=a.style[b]||0}d=parseFloat(d)||0,c&&f.each(e,function(){d+=parseFloat(f.css(a,"padding"+this))||0,c!=="padding"&&(d+=parseFloat(f.css(a,"border"+this+"Width"))||0),c==="margin"&&(d+=parseFloat(f.css(a,c+this))||0)});return d+"px"}function bl(a,b){b.src?f.ajax({url:b.src,async:!1,dataType:"script"}):f.globalEval((b.text||b.textContent||b.innerHTML||"").replace(bd,"/*$0*/")),b.parentNode&&b.parentNode.removeChild(b)}function bk(a){f.nodeName(a,"input")?bj(a):"getElementsByTagName" in a&&f.grep(a.getElementsByTagName("input"),bj)}function bj(a){if(a.type==="checkbox"||a.type==="radio"){a.defaultChecked=a.checked}}function bi(a){return"getElementsByTagName" in a?a.getElementsByTagName("*"):"querySelectorAll" in a?a.querySelectorAll("*"):[]}function bh(a,b){var c;if(b.nodeType===1){b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase();if(c==="object"){b.outerHTML=a.outerHTML}else{if(c!=="input"||a.type!=="checkbox"&&a.type!=="radio"){if(c==="option"){b.selected=a.defaultSelected}else{if(c==="input"||c==="textarea"){b.defaultValue=a.defaultValue}}}else{a.checked&&(b.defaultChecked=b.checked=a.checked),b.value!==a.value&&(b.value=a.value)}}b.removeAttribute(f.expando)}}function bg(a,b){if(b.nodeType===1&&!!f.hasData(a)){var c=f.expando,d=f.data(a),e=f.data(b,d);if(d=d[c]){var g=d.events;e=e[c]=f.extend({},d);if(g){delete e.handle,e.events={};for(var h in g){for(var i=0,j=g[h].length;i<j;i++){f.event.add(b,h+(g[h][i].namespace?".":"")+g[h][i].namespace,g[h][i],g[h][i].data)}}}}}}function bf(a,b){return f.nodeName(a,"table")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function V(a,b,c){b=b||0;if(f.isFunction(b)){return f.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c})}if(b.nodeType){return f.grep(a,function(a,d){return a===b===c})}if(typeof b=="string"){var d=f.grep(a,function(a){return a.nodeType===1});if(Q.test(b)){return f.filter(b,d,!c)}b=f.filter(b,d)}return f.grep(a,function(a,d){return f.inArray(a,b)>=0===c})}function U(a){return !a||!a.parentNode||a.parentNode.nodeType===11}function M(a,b){return(a&&a!=="*"?a+".":"")+b.replace(y,"`").replace(z,"&")}function L(a){var b,c,d,e,g,h,i,j,k,l,m,n,o,p=[],q=[],r=f._data(this,"events");if(!(a.liveFired===this||!r||!r.live||a.target.disabled||a.button&&a.type==="click")){a.namespace&&(n=new RegExp("(^|\\.)"+a.namespace.split(".").join("\\.(?:.*\\.)?")+"(\\.|$)")),a.liveFired=this;var s=r.live.slice(0);for(i=0;i<s.length;i++){g=s[i],g.origType.replace(w,"")===a.type?q.push(g.selector):s.splice(i--,1)}e=f(a.target).closest(q,a.currentTarget);for(j=0,k=e.length;j<k;j++){m=e[j];for(i=0;i<s.length;i++){g=s[i];if(m.selector===g.selector&&(!n||n.test(g.namespace))&&!m.elem.disabled){h=m.elem,d=null;if(g.preType==="mouseenter"||g.preType==="mouseleave"){a.type=g.preType,d=f(a.relatedTarget).closest(g.selector)[0],d&&f.contains(h,d)&&(d=h)}(!d||d!==h)&&p.push({elem:h,handleObj:g,level:m.level})}}}for(j=0,k=p.length;j<k;j++){e=p[j];if(c&&e.level>c){break}a.currentTarget=e.elem,a.data=e.handleObj.data,a.handleObj=e.handleObj,o=e.handleObj.origHandler.apply(e.elem,arguments);if(o===!1||a.isPropagationStopped()){c=e.level,o===!1&&(b=!1);if(a.isImmediatePropagationStopped()){break}}}return b}}function J(a,c,d){var e=f.extend({},d[0]);e.type=a,e.originalEvent={},e.liveFired=b,f.event.handle.call(c,e),e.isDefaultPrevented()&&d[0].preventDefault()}function D(){return !0}function C(){return !1}function m(a,c,d){var e=c+"defer",g=c+"queue",h=c+"mark",i=f.data(a,e,b,!0);i&&(d==="queue"||!f.data(a,g,b,!0))&&(d==="mark"||!f.data(a,h,b,!0))&&setTimeout(function(){!f.data(a,g,b,!0)&&!f.data(a,h,b,!0)&&(f.removeData(a,e,!0),i.resolve())},0)}function l(a){for(var b in a){if(b!=="toJSON"){return !1}}return !0}function k(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(j,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:f.isNaN(d)?i.test(d)?f.parseJSON(d):d:parseFloat(d)}catch(g){}f.data(a,c,d)}else{d=b}}return d}var c=a.document,d=a.navigator,e=a.location,f=function(){function K(){if(!e.isReady){try{c.documentElement.doScroll("left")}catch(a){setTimeout(K,1);return}e.ready()}}var e=function(a,b){return new e.fn.init(a,b,h)},f=a.jQuery,g=a.$,h,i=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,j=/\S/,k=/^\s+/,l=/\s+$/,m=/\d/,n=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,o=/^[\],:{}\s]*$/,p=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,q=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,r=/(?:^|:|,)(?:\s*\[)+/g,s=/(webkit)[ \/]([\w.]+)/,t=/(opera)(?:.*version)?[ \/]([\w.]+)/,u=/(msie) ([\w.]+)/,v=/(mozilla)(?:.*? rv:([\w.]+))?/,w=/-([a-z]|[0-9])/ig,x=/^-ms-/,y=function(a,b){return(b+"").toUpperCase()},z=d.userAgent,A,B,C,D=Object.prototype.toString,E=Object.prototype.hasOwnProperty,F=Array.prototype.push,G=Array.prototype.slice,H=String.prototype.trim,I=Array.prototype.indexOf,J={};e.fn=e.prototype={constructor:e,init:function(a,d,f){var g,h,j,k;if(!a){return this}if(a.nodeType){this.context=this[0]=a,this.length=1;return this}if(a==="body"&&!d&&c.body){this.context=c,this[0]=c.body,this.selector=a,this.length=1;return this}if(typeof a=="string"){a.charAt(0)!=="<"||a.charAt(a.length-1)!==">"||a.length<3?g=i.exec(a):g=[null,a,null];if(g&&(g[1]||!d)){if(g[1]){d=d instanceof e?d[0]:d,k=d?d.ownerDocument||d:c,j=n.exec(a),j?e.isPlainObject(d)?(a=[c.createElement(j[1])],e.fn.attr.call(a,d,!0)):a=[k.createElement(j[1])]:(j=e.buildFragment([g[1]],[k]),a=(j.cacheable?e.clone(j.fragment):j.fragment).childNodes);return e.merge(this,a)}h=c.getElementById(g[2]);if(h&&h.parentNode){if(h.id!==g[2]){return f.find(a)}this.length=1,this[0]=h}this.context=c,this.selector=a;return this}return !d||d.jquery?(d||f).find(a):this.constructor(d).find(a)}if(e.isFunction(a)){return f.ready(a)}a.selector!==b&&(this.selector=a.selector,this.context=a.context);return e.makeArray(a,this)},selector:"",jquery:"1.6.4",length:0,size:function(){return this.length},toArray:function(){return G.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=this.constructor();e.isArray(a)?F.apply(d,a):e.merge(d,a),d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")");return d},each:function(a,b){return e.each(this,a,b)},ready:function(a){e.bindReady(),B.done(a);return this},eq:function(a){return a===-1?this.slice(a):this.slice(a,+a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(G.apply(this,arguments),"slice",G.call(arguments).join(","))},map:function(a){return this.pushStack(e.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:F,sort:[].sort,splice:[].splice},e.fn.init.prototype=e.fn,e.extend=e.fn.extend=function(){var a,c,d,f,g,h,i=arguments[0]||{},j=1,k=arguments.length,l=!1;typeof i=="boolean"&&(l=i,i=arguments[1]||{},j=2),typeof i!="object"&&!e.isFunction(i)&&(i={}),k===j&&(i=this,--j);for(;j<k;j++){if((a=arguments[j])!=null){for(c in a){d=i[c],f=a[c];if(i===f){continue}l&&f&&(e.isPlainObject(f)||(g=e.isArray(f)))?(g?(g=!1,h=d&&e.isArray(d)?d:[]):h=d&&e.isPlainObject(d)?d:{},i[c]=e.extend(l,h,f)):f!==b&&(i[c]=f)}}}return i},e.extend({noConflict:function(b){a.$===e&&(a.$=g),b&&a.jQuery===e&&(a.jQuery=f);return e},isReady:!1,readyWait:1,holdReady:function(a){a?e.readyWait++:e.ready(!0)},ready:function(a){if(a===!0&&!--e.readyWait||a!==!0&&!e.isReady){if(!c.body){return setTimeout(e.ready,1)}e.isReady=!0;if(a!==!0&&--e.readyWait>0){return}B.resolveWith(c,[e]),e.fn.trigger&&e(c).trigger("ready").unbind("ready")}},bindReady:function(){if(!B){B=e._Deferred();if(c.readyState==="complete"){return setTimeout(e.ready,1)}if(c.addEventListener){c.addEventListener("DOMContentLoaded",C,!1),a.addEventListener("load",e.ready,!1)}else{if(c.attachEvent){c.attachEvent("onreadystatechange",C),a.attachEvent("onload",e.ready);var b=!1;try{b=a.frameElement==null}catch(d){}c.documentElement.doScroll&&b&&K()}}}},isFunction:function(a){return e.type(a)==="function"},isArray:Array.isArray||function(a){return e.type(a)==="array"},isWindow:function(a){return a&&typeof a=="object"&&"setInterval" in a},isNaN:function(a){return a==null||!m.test(a)||isNaN(a)},type:function(a){return a==null?String(a):J[D.call(a)]||"object"},isPlainObject:function(a){if(!a||e.type(a)!=="object"||a.nodeType||e.isWindow(a)){return !1}try{if(a.constructor&&!E.call(a,"constructor")&&!E.call(a.constructor.prototype,"isPrototypeOf")){return !1}}catch(c){return !1}var d;for(d in a){}return d===b||E.call(a,d)},isEmptyObject:function(a){for(var b in a){return !1}return !0},error:function(a){throw a},parseJSON:function(b){if(typeof b!="string"||!b){return null}b=e.trim(b);if(a.JSON&&a.JSON.parse){return a.JSON.parse(b)}if(o.test(b.replace(p,"@").replace(q,"]").replace(r,""))){return(new Function("return "+b))()}e.error("Invalid JSON: "+b)},parseXML:function(c){var d,f;try{a.DOMParser?(f=new DOMParser,d=f.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(g){d=b}(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&e.error("Invalid XML: "+c);return d},noop:function(){},globalEval:function(b){b&&j.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(x,"ms-").replace(w,y)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var f,g=0,h=a.length,i=h===b||e.isFunction(a);if(d){if(i){for(f in a){if(c.apply(a[f],d)===!1){break}}}else{for(;g<h;){if(c.apply(a[g++],d)===!1){break}}}}else{if(i){for(f in a){if(c.call(a[f],f,a[f])===!1){break}}}else{for(;g<h;){if(c.call(a[g],g,a[g++])===!1){break}}}}return a},trim:H?function(a){return a==null?"":H.call(a)}:function(a){return a==null?"":(a+"").replace(k,"").replace(l,"")},makeArray:function(a,b){var c=b||[];if(a!=null){var d=e.type(a);a.length==null||d==="string"||d==="function"||d==="regexp"||e.isWindow(a)?F.call(c,a):e.merge(c,a)}return c},inArray:function(a,b){if(!b){return -1}if(I){return I.call(b,a)}for(var c=0,d=b.length;c<d;c++){if(b[c]===a){return c}}return -1},merge:function(a,c){var d=a.length,e=0;if(typeof c.length=="number"){for(var f=c.length;e<f;e++){a[d++]=c[e]}}else{while(c[e]!==b){a[d++]=c[e++]}}a.length=d;return a},grep:function(a,b,c){var d=[],e;c=!!c;for(var f=0,g=a.length;f<g;f++){e=!!b(a[f],f),c!==e&&d.push(a[f])}return d},map:function(a,c,d){var f,g,h=[],i=0,j=a.length,k=a instanceof e||j!==b&&typeof j=="number"&&(j>0&&a[0]&&a[j-1]||j===0||e.isArray(a));if(k){for(;i<j;i++){f=c(a[i],i,d),f!=null&&(h[h.length]=f)}}else{for(g in a){f=c(a[g],g,d),f!=null&&(h[h.length]=f)}}return h.concat.apply([],h)},guid:1,proxy:function(a,c){if(typeof c=="string"){var d=a[c];c=a,a=d}if(!e.isFunction(a)){return b}var f=G.call(arguments,2),g=function(){return a.apply(c,f.concat(G.call(arguments)))};g.guid=a.guid=a.guid||g.guid||e.guid++;return g},access:function(a,c,d,f,g,h){var i=a.length;if(typeof c=="object"){for(var j in c){e.access(a,j,c[j],f,g,d)}return a}if(d!==b){f=!h&&f&&e.isFunction(d);for(var k=0;k<i;k++){g(a[k],c,f?d.call(a[k],k,g(a[k],c)):d,h)}return a}return i?g(a[0],c):b},now:function(){return(new Date).getTime()},uaMatch:function(a){a=a.toLowerCase();var b=s.exec(a)||t.exec(a)||u.exec(a)||a.indexOf("compatible")<0&&v.exec(a)||[];
/*!window.MSStream&&(b[1]="msie");*/
return{browser:b[1]||"",version:b[2]||"0"}},sub:function(){function a(b,c){return new a.fn.init(b,c)}e.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function(d,f){f&&f instanceof e&&!(f instanceof a)&&(f=a(f));return e.fn.init.call(this,d,f,b)},a.fn.init.prototype=a.fn;var b=a(c);return a},browser:{}}),e.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){J["[object "+b+"]"]=b.toLowerCase()}),A=e.uaMatch(z),A.browser&&(e.browser[A.browser]=!0,e.browser.version=A.version),e.browser.webkit&&(e.browser.safari=!0),j.test(" ")&&(k=/^[\s\xA0]+/,l=/[\s\xA0]+$/),h=e(c),c.addEventListener?C=function(){c.removeEventListener("DOMContentLoaded",C,!1),e.ready()}:c.attachEvent&&(C=function(){c.readyState==="complete"&&(c.detachEvent("onreadystatechange",C),e.ready())});return e}(),g="done fail isResolved isRejected promise then always pipe".split(" "),h=[].slice;f.extend({_Deferred:function(){var a=[],b,c,d,e={done:function(){if(!d){var c=arguments,g,h,i,j,k;b&&(k=b,b=0);for(g=0,h=c.length;g<h;g++){i=c[g],j=f.type(i),j==="array"?e.done.apply(e,i):j==="function"&&a.push(i)}k&&e.resolveWith(k[0],k[1])}return this},resolveWith:function(e,f){if(!d&&!b&&!c){f=f||[],c=1;try{while(a[0]){a.shift().apply(e,f)}}finally{b=[e,f],c=0}}return this},resolve:function(){e.resolveWith(this,arguments);return this},isResolved:function(){return !!c||!!b},cancel:function(){d=1,a=[];return this}};return e},Deferred:function(a){var b=f._Deferred(),c=f._Deferred(),d;f.extend(b,{then:function(a,c){b.done(a).fail(c);return this},always:function(){return b.done.apply(b,arguments).fail.apply(this,arguments)},fail:c.done,rejectWith:c.resolveWith,reject:c.resolve,isRejected:c.isResolved,pipe:function(a,c){return f.Deferred(function(d){f.each({done:[a,"resolve"],fail:[c,"reject"]},function(a,c){var e=c[0],g=c[1],h;f.isFunction(e)?b[a](function(){h=e.apply(this,arguments),h&&f.isFunction(h.promise)?h.promise().then(d.resolve,d.reject):d[g+"With"](this===b?d:this,[h])}):b[a](d[g])})}).promise()},promise:function(a){if(a==null){if(d){return d}d=a={}}var c=g.length;while(c--){a[g[c]]=b[g[c]]}return a}}),b.done(c.cancel).fail(b.cancel),delete b.cancel,a&&a.call(b,b);return b},when:function(a){function i(a){return function(c){b[a]=arguments.length>1?h.call(arguments,0):c,--e||g.resolveWith(g,h.call(b,0))}}var b=arguments,c=0,d=b.length,e=d,g=d<=1&&a&&f.isFunction(a.promise)?a:f.Deferred();if(d>1){for(;c<d;c++){b[c]&&f.isFunction(b[c].promise)?b[c].promise().then(i(c),g.reject):--e}e||g.resolveWith(g,b)}else{g!==a&&g.resolveWith(g,d?[a]:[])}return g.promise()}}),f.support=function(){var a=c.createElement("div"),b=c.documentElement,d,e,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u;a.setAttribute("className","t"),a.innerHTML="   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>",d=a.getElementsByTagName("*"),e=a.getElementsByTagName("a")[0];if(!d||!d.length||!e){return{}}g=c.createElement("select"),h=g.appendChild(c.createElement("option")),i=a.getElementsByTagName("input")[0],k={leadingWhitespace:a.firstChild.nodeType===3,tbody:!a.getElementsByTagName("tbody").length,htmlSerialize:!!a.getElementsByTagName("link").length,style:/top/.test(e.getAttribute("style")),hrefNormalized:e.getAttribute("href")==="/a",opacity:/^0.55$/.test(e.style.opacity),cssFloat:!!e.style.cssFloat,checkOn:i.value==="on",optSelected:h.selected,getSetAttribute:a.className!=="t",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0},i.checked=!0,k.noCloneChecked=i.cloneNode(!0).checked,g.disabled=!0,k.optDisabled=!h.disabled;try{delete a.test}catch(v){k.deleteExpando=!1}!a.addEventListener&&a.attachEvent&&a.fireEvent&&(a.attachEvent("onclick",function(){k.noCloneEvent=!1}),a.cloneNode(!0).fireEvent("onclick")),i=c.createElement("input"),i.value="t",i.setAttribute("type","radio"),k.radioValue=i.value==="t",i.setAttribute("checked","checked"),a.appendChild(i),l=c.createDocumentFragment(),l.appendChild(a.firstChild),k.checkClone=l.cloneNode(!0).cloneNode(!0).lastChild.checked,a.innerHTML="",a.style.width=a.style.paddingLeft="1px",m=c.getElementsByTagName("body")[0],o=c.createElement(m?"div":"body"),p={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},m&&f.extend(p,{position:"absolute",left:"-1000px",top:"-1000px"});for(t in p){o.style[t]=p[t]}o.appendChild(a),n=m||b,n.insertBefore(o,n.firstChild),k.appendChecked=i.checked,k.boxModel=a.offsetWidth===2,"zoom" in a.style&&(a.style.display="inline",a.style.zoom=1,k.inlineBlockNeedsLayout=a.offsetWidth===2,a.style.display="",a.innerHTML="<div style='width:4px;'></div>",k.shrinkWrapBlocks=a.offsetWidth!==2),a.innerHTML="<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>",q=a.getElementsByTagName("td"),u=q[0].offsetHeight===0,q[0].style.display="",q[1].style.display="none",k.reliableHiddenOffsets=u&&q[0].offsetHeight===0,a.innerHTML="",c.defaultView&&c.defaultView.getComputedStyle&&(j=c.createElement("div"),j.style.width="0",j.style.marginRight="0",a.appendChild(j),k.reliableMarginRight=(parseInt((c.defaultView.getComputedStyle(j,null)||{marginRight:0}).marginRight,10)||0)===0),o.innerHTML="",n.removeChild(o);if(a.attachEvent){for(t in {submit:1,change:1,focusin:1}){s="on"+t,u=s in a,u||(a.setAttribute(s,"return;"),u=typeof a[s]=="function"),k[t+"Bubbles"]=u}}o=l=g=h=m=j=a=i=null;return k}(),f.boxModel=f.support.boxModel;var i=/^(?:\{.*\}|\[.*\])$/,j=/([A-Z])/g;f.extend({cache:{},uuid:0,expando:"jQuery"+(f.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){a=a.nodeType?f.cache[a[f.expando]]:a[f.expando];return !!a&&!l(a)},data:function(a,c,d,e){if(!!f.acceptData(a)){var g,h,i=f.expando,j=typeof c=="string",k=a.nodeType,l=k?f.cache:a,m=k?a[f.expando]:a[f.expando]&&f.expando;if((!m||e&&m&&l[m]&&!l[m][i])&&j&&d===b){return}m||(k?a[f.expando]=m=++f.uuid:m=f.expando),l[m]||(l[m]={},k||(l[m].toJSON=f.noop));if(typeof c=="object"||typeof c=="function"){e?l[m][i]=f.extend(l[m][i],c):l[m]=f.extend(l[m],c)}g=l[m],e&&(g[i]||(g[i]={}),g=g[i]),d!==b&&(g[f.camelCase(c)]=d);if(c==="events"&&!g[c]){return g[i]&&g[i].events}j?(h=g[c],h==null&&(h=g[f.camelCase(c)])):h=g;return h}},removeData:function(a,b,c){if(!!f.acceptData(a)){var d,e=f.expando,g=a.nodeType,h=g?f.cache:a,i=g?a[f.expando]:f.expando;if(!h[i]){return}if(b){d=c?h[i][e]:h[i];if(d){d[b]||(b=f.camelCase(b)),delete d[b];if(!l(d)){return}}}if(c){delete h[i][e];if(!l(h[i])){return}}var j=h[i][e];f.support.deleteExpando||!h.setInterval?delete h[i]:h[i]=null,j?(h[i]={},g||(h[i].toJSON=f.noop),h[i][e]=j):g&&(f.support.deleteExpando?delete a[f.expando]:a.removeAttribute?a.removeAttribute(f.expando):a[f.expando]=null)}},_data:function(a,b,c){return f.data(a,b,c,!0)},acceptData:function(a){if(a.nodeName){var b=f.noData[a.nodeName.toLowerCase()];if(b){return b!==!0&&a.getAttribute("classid")===b}}return !0}}),f.fn.extend({data:function(a,c){var d=null;if(typeof a=="undefined"){if(this.length){d=f.data(this[0]);if(this[0].nodeType===1){var e=this[0].attributes,g;for(var h=0,i=e.length;h<i;h++){g=e[h].name,g.indexOf("data-")===0&&(g=f.camelCase(g.substring(5)),k(this[0],g,d[g]))}}}return d}if(typeof a=="object"){return this.each(function(){f.data(this,a)})}var j=a.split(".");j[1]=j[1]?"."+j[1]:"";if(c===b){d=this.triggerHandler("getData"+j[1]+"!",[j[0]]),d===b&&this.length&&(d=f.data(this[0],a),d=k(this[0],a,d));return d===b&&j[1]?this.data(j[0]):d}return this.each(function(){var b=f(this),d=[j[0],c];b.triggerHandler("setData"+j[1]+"!",d),f.data(this,a,c),b.triggerHandler("changeData"+j[1]+"!",d)})},removeData:function(a){return this.each(function(){f.removeData(this,a)})}}),f.extend({_mark:function(a,c){a&&(c=(c||"fx")+"mark",f.data(a,c,(f.data(a,c,b,!0)||0)+1,!0))},_unmark:function(a,c,d){a!==!0&&(d=c,c=a,a=!1);if(c){d=d||"fx";var e=d+"mark",g=a?0:(f.data(c,e,b,!0)||1)-1;g?f.data(c,e,g,!0):(f.removeData(c,e,!0),m(c,d,"mark"))}},queue:function(a,c,d){if(a){c=(c||"fx")+"queue";var e=f.data(a,c,b,!0);d&&(!e||f.isArray(d)?e=f.data(a,c,f.makeArray(d),!0):e.push(d));return e||[]}},dequeue:function(a,b){b=b||"fx";var c=f.queue(a,b),d=c.shift(),e;d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),d.call(a,function(){f.dequeue(a,b)})),c.length||(f.removeData(a,b+"queue",!0),m(a,b,"queue"))}}),f.fn.extend({queue:function(a,c){typeof a!="string"&&(c=a,a="fx");if(c===b){return f.queue(this[0],a)}return this.each(function(){var b=f.queue(this,a,c);a==="fx"&&b[0]!=="inprogress"&&f.dequeue(this,a)})},dequeue:function(a){return this.each(function(){f.dequeue(this,a)})},delay:function(a,b){a=f.fx?f.fx.speeds[a]||a:a,b=b||"fx";return this.queue(b,function(){var c=this;setTimeout(function(){f.dequeue(c,b)},a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){function m(){--h||d.resolveWith(e,[e])}typeof a!="string"&&(c=a,a=b),a=a||"fx";var d=f.Deferred(),e=this,g=e.length,h=1,i=a+"defer",j=a+"queue",k=a+"mark",l;while(g--){if(l=f.data(e[g],i,b,!0)||(f.data(e[g],j,b,!0)||f.data(e[g],k,b,!0))&&f.data(e[g],i,f._Deferred(),!0)){h++,l.done(m)}}m();return d.promise()}});var n=/[\n\t\r]/g,o=/\s+/,p=/\r/g,q=/^(?:button|input)$/i,r=/^(?:button|input|object|select|textarea)$/i,s=/^a(?:rea)?$/i,t=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,u,v;f.fn.extend({attr:function(a,b){return f.access(this,a,b,!0,f.attr)},removeAttr:function(a){return this.each(function(){f.removeAttr(this,a)})},prop:function(a,b){return f.access(this,a,b,!0,f.prop)},removeProp:function(a){a=f.propFix[a]||a;return this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,g,h,i;if(f.isFunction(a)){return this.each(function(b){f(this).addClass(a.call(this,b,this.className))})}if(a&&typeof a=="string"){b=a.split(o);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1){if(!e.className&&b.length===1){e.className=a}else{g=" "+e.className+" ";for(h=0,i=b.length;h<i;h++){~g.indexOf(" "+b[h]+" ")||(g+=b[h]+" ")}e.className=f.trim(g)}}}}return this},removeClass:function(a){var c,d,e,g,h,i,j;if(f.isFunction(a)){return this.each(function(b){f(this).removeClass(a.call(this,b,this.className))})}if(a&&typeof a=="string"||a===b){c=(a||"").split(o);for(d=0,e=this.length;d<e;d++){g=this[d];if(g.nodeType===1&&g.className){if(a){h=(" "+g.className+" ").replace(n," ");for(i=0,j=c.length;i<j;i++){h=h.replace(" "+c[i]+" "," ")}g.className=f.trim(h)}else{g.className=""}}}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";if(f.isFunction(a)){return this.each(function(c){f(this).toggleClass(a.call(this,c,this.className,b),b)})}return this.each(function(){if(c==="string"){var e,g=0,h=f(this),i=b,j=a.split(o);while(e=j[g++]){i=d?i:!h.hasClass(e),h[i?"addClass":"removeClass"](e)}}else{if(c==="undefined"||c==="boolean"){this.className&&f._data(this,"__className__",this.className),this.className=this.className||a===!1?"":f._data(this,"__className__")||""}}})},hasClass:function(a){var b=" "+a+" ";for(var c=0,d=this.length;c<d;c++){if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(n," ").indexOf(b)>-1){return !0}}return !1},val:function(a){var c,d,e=this[0];if(!arguments.length){if(e){c=f.valHooks[e.nodeName.toLowerCase()]||f.valHooks[e.type];if(c&&"get" in c&&(d=c.get(e,"value"))!==b){return d}d=e.value;return typeof d=="string"?d.replace(p,""):d==null?"":d}return b}var g=f.isFunction(a);return this.each(function(d){var e=f(this),h;if(this.nodeType===1){g?h=a.call(this,d,e.val()):h=a,h==null?h="":typeof h=="number"?h+="":f.isArray(h)&&(h=f.map(h,function(a){return a==null?"":a+""})),c=f.valHooks[this.nodeName.toLowerCase()]||f.valHooks[this.type];if(!c||!("set" in c)||c.set(this,h,"value")===b){this.value=h}}})}}),f.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return !b||b.specified?a.value:a.text}},select:{get:function(a){var b,c=a.selectedIndex,d=[],e=a.options,g=a.type==="select-one";if(c<0){return null}for(var h=g?c:0,i=g?c+1:e.length;h<i;h++){var j=e[h];if(j.selected&&(f.support.optDisabled?!j.disabled:j.getAttribute("disabled")===null)&&(!j.parentNode.disabled||!f.nodeName(j.parentNode,"optgroup"))){b=f(j).val();if(g){return b}d.push(b)}}if(g&&!d.length&&e.length){return f(e[c]).val()}return d},set:function(a,b){var c=f.makeArray(b);f(a).find("option").each(function(){this.selected=f.inArray(f(this).val(),c)>=0}),c.length||(a.selectedIndex=-1);return c}}},attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attrFix:{tabindex:"tabIndex"},attr:function(a,c,d,e){var g=a.nodeType;if(!a||g===3||g===8||g===2){return b}if(e&&c in f.attrFn){return f(a)[c](d)}if(!("getAttribute" in a)){return f.prop(a,c,d)}var h,i,j=g!==1||!f.isXMLDoc(a);j&&(c=f.attrFix[c]||c,i=f.attrHooks[c],i||(t.test(c)?i=v:u&&(i=u)));if(d!==b){if(d===null){f.removeAttr(a,c);return b}if(i&&"set" in i&&j&&(h=i.set(a,d,c))!==b){return h}a.setAttribute(c,""+d);return d}if(i&&"get" in i&&j&&(h=i.get(a,c))!==null){return h}h=a.getAttribute(c);return h===null?b:h},removeAttr:function(a,b){var c;a.nodeType===1&&(b=f.attrFix[b]||b,f.attr(a,b,""),a.removeAttribute(b),t.test(b)&&(c=f.propFix[b]||b) in a&&(a[c]=!1))},attrHooks:{type:{set:function(a,b){if(q.test(a.nodeName)&&a.parentNode){f.error("type property can't be changed")}else{if(!f.support.radioValue&&b==="radio"&&f.nodeName(a,"input")){var c=a.value;a.setAttribute("type",b),c&&(a.value=c);return b}}}},value:{get:function(a,b){if(u&&f.nodeName(a,"button")){return u.get(a,b)}return b in a?a.value:null},set:function(a,b,c){if(u&&f.nodeName(a,"button")){return u.set(a,b,c)}a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e=a.nodeType;if(!a||e===3||e===8||e===2){return b}var g,h,i=e!==1||!f.isXMLDoc(a);i&&(c=f.propFix[c]||c,h=f.propHooks[c]);return d!==b?h&&"set" in h&&(g=h.set(a,d,c))!==b?g:a[c]=d:h&&"get" in h&&(g=h.get(a,c))!==null?g:a[c]},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):r.test(a.nodeName)||s.test(a.nodeName)&&a.href?0:b}}}}),f.attrHooks.tabIndex=f.propHooks.tabIndex,v={get:function(a,c){var d;return f.prop(a,c)===!0||(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;b===!1?f.removeAttr(a,c):(d=f.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase()));return c}},f.support.getSetAttribute||(u=f.valHooks.button={get:function(a,c){var d;d=a.getAttributeNode(c);return d&&d.nodeValue!==""?d.nodeValue:b},set:function(a,b,d){var e=a.getAttributeNode(d);e||(e=c.createAttribute(d),a.setAttributeNode(e));return e.nodeValue=b+""}},f.each(["width","height"],function(a,b){f.attrHooks[b]=f.extend(f.attrHooks[b],{set:function(a,c){if(c===""){a.setAttribute(b,"auto");return c}}})})),f.support.hrefNormalized||f.each(["href","src","width","height"],function(a,c){f.attrHooks[c]=f.extend(f.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),f.support.style||(f.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),f.support.optSelected||(f.propHooks.selected=f.extend(f.propHooks.selected,{get:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex);return null}})),f.support.checkOn||f.each(["radio","checkbox"],function(){f.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),f.each(["radio","checkbox"],function(){f.valHooks[this]=f.extend(f.valHooks[this],{set:function(a,b){if(f.isArray(b)){return a.checked=f.inArray(f(a).val(),b)>=0}}})});var w=/\.(.*)$/,x=/^(?:textarea|input|select)$/i,y=/\./g,z=/ /g,A=/[^\w\s.|`]/g,B=function(a){return a.replace(A,"\\$&")};f.event={add:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){if(d===!1){d=C}else{if(!d){return}}var g,h;d.handler&&(g=d,d=g.handler),d.guid||(d.guid=f.guid++);var i=f._data(a);if(!i){return}var j=i.events,k=i.handle;j||(i.events=j={}),k||(i.handle=k=function(a){return typeof f!="undefined"&&(!a||f.event.triggered!==a.type)?f.event.handle.apply(k.elem,arguments):b}),k.elem=a,c=c.split(" ");var l,m=0,n;while(l=c[m++]){h=g?f.extend({},g):{handler:d,data:e},l.indexOf(".")>-1?(n=l.split("."),l=n.shift(),h.namespace=n.slice(0).sort().join(".")):(n=[],h.namespace=""),h.type=l,h.guid||(h.guid=d.guid);var o=j[l],p=f.event.special[l]||{};if(!o){o=j[l]=[];if(!p.setup||p.setup.call(a,e,n,k)===!1){a.addEventListener?a.addEventListener(l,k,!1):a.attachEvent&&a.attachEvent("on"+l,k)}}p.add&&(p.add.call(a,h),h.handler.guid||(h.handler.guid=d.guid)),o.push(h),f.event.global[l]=!0}a=null}},global:{},remove:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){d===!1&&(d=C);var g,h,i,j,k=0,l,m,n,o,p,q,r,s=f.hasData(a)&&f._data(a),t=s&&s.events;if(!s||!t){return}c&&c.type&&(d=c.handler,c=c.type);if(!c||typeof c=="string"&&c.charAt(0)==="."){c=c||"";for(h in t){f.event.remove(a,h+c)}return}c=c.split(" ");while(h=c[k++]){r=h,q=null,l=h.indexOf(".")<0,m=[],l||(m=h.split("."),h=m.shift(),n=new RegExp("(^|\\.)"+f.map(m.slice(0).sort(),B).join("\\.(?:.*\\.)?")+"(\\.|$)")),p=t[h];if(!p){continue}if(!d){for(j=0;j<p.length;j++){q=p[j];if(l||n.test(q.namespace)){f.event.remove(a,r,q.handler,j),p.splice(j--,1)}}continue}o=f.event.special[h]||{};for(j=e||0;j<p.length;j++){q=p[j];if(d.guid===q.guid){if(l||n.test(q.namespace)){e==null&&p.splice(j--,1),o.remove&&o.remove.call(a,q)}if(e!=null){break}}}if(p.length===0||e!=null&&p.length===1){(!o.teardown||o.teardown.call(a,m)===!1)&&f.removeEvent(a,h,s.handle),g=null,delete t[h]}}if(f.isEmptyObject(t)){var u=s.handle;u&&(u.elem=null),delete s.events,delete s.handle,f.isEmptyObject(s)&&f.removeData(a,b,!0)}}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,e,g){var h=c.type||c,i=[],j;h.indexOf("!")>=0&&(h=h.slice(0,-1),j=!0),h.indexOf(".")>=0&&(i=h.split("."),h=i.shift(),i.sort());if(!!e&&!f.event.customEvent[h]||!!f.event.global[h]){c=typeof c=="object"?c[f.expando]?c:new f.Event(h,c):new f.Event(h),c.type=h,c.exclusive=j,c.namespace=i.join("."),c.namespace_re=new RegExp("(^|\\.)"+i.join("\\.(?:.*\\.)?")+"(\\.|$)");if(g||!e){c.preventDefault(),c.stopPropagation()}if(!e){f.each(f.cache,function(){var a=f.expando,b=this[a];b&&b.events&&b.events[h]&&f.event.trigger(c,d,b.handle.elem)});return}if(e.nodeType===3||e.nodeType===8){return}c.result=b,c.target=e,d=d!=null?f.makeArray(d):[],d.unshift(c);var k=e,l=h.indexOf(":")<0?"on"+h:"";do{var m=f._data(k,"handle");c.currentTarget=k,m&&m.apply(k,d),l&&f.acceptData(k)&&k[l]&&k[l].apply(k,d)===!1&&(c.result=!1,c.preventDefault()),k=k.parentNode||k.ownerDocument||k===c.target.ownerDocument&&a}while(k&&!c.isPropagationStopped());if(!c.isDefaultPrevented()){var n,o=f.event.special[h]||{};if((!o._default||o._default.call(e.ownerDocument,c)===!1)&&(h!=="click"||!f.nodeName(e,"a"))&&f.acceptData(e)){try{l&&e[h]&&(n=e[l],n&&(e[l]=null),f.event.triggered=h,e[h]())}catch(p){}n&&(e[l]=n),f.event.triggered=b}}return c.result}},handle:function(c){c=f.event.fix(c||a.event);var d=((f._data(this,"events")||{})[c.type]||[]).slice(0),e=!c.exclusive&&!c.namespace,g=Array.prototype.slice.call(arguments,0);g[0]=c,c.currentTarget=this;for(var h=0,i=d.length;h<i;h++){var j=d[h];if(e||c.namespace_re.test(j.namespace)){c.handler=j.handler,c.data=j.data,c.handleObj=j;var k=j.handler.apply(this,g);k!==b&&(c.result=k,k===!1&&(c.preventDefault(),c.stopPropagation()));if(c.isImmediatePropagationStopped()){break}}}return c.result},props:"altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "),fix:function(a){if(a[f.expando]){return a}var d=a;a=f.Event(d);for(var e=this.props.length,g;e;){g=this.props[--e],a[g]=d[g]}a.target||(a.target=a.srcElement||c),a.target.nodeType===3&&(a.target=a.target.parentNode),!a.relatedTarget&&a.fromElement&&(a.relatedTarget=a.fromElement===a.target?a.toElement:a.fromElement);if(a.pageX==null&&a.clientX!=null){var h=a.target.ownerDocument||c,i=h.documentElement,j=h.body;a.pageX=a.clientX+(i&&i.scrollLeft||j&&j.scrollLeft||0)-(i&&i.clientLeft||j&&j.clientLeft||0),a.pageY=a.clientY+(i&&i.scrollTop||j&&j.scrollTop||0)-(i&&i.clientTop||j&&j.clientTop||0)}a.which==null&&(a.charCode!=null||a.keyCode!=null)&&(a.which=a.charCode!=null?a.charCode:a.keyCode),!a.metaKey&&a.ctrlKey&&(a.metaKey=a.ctrlKey),!a.which&&a.button!==b&&(a.which=a.button&1?1:a.button&2?3:a.button&4?2:0);return a},guid:100000000,proxy:f.proxy,special:{ready:{setup:f.bindReady,teardown:f.noop},live:{add:function(a){f.event.add(this,M(a.origType,a.selector),f.extend({},a,{handler:L,guid:a.handler.guid}))},remove:function(a){f.event.remove(this,M(a.origType,a.selector),a)}},beforeunload:{setup:function(a,b,c){f.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}}},f.removeEvent=c.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},f.Event=function(a,b){if(!this.preventDefault){return new f.Event(a,b)}a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?D:C):this.type=a,b&&f.extend(this,b),this.timeStamp=f.now(),this[f.expando]=!0},f.Event.prototype={preventDefault:function(){this.isDefaultPrevented=D;var a=this.originalEvent;!a||(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=D;var a=this.originalEvent;!a||(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=D,this.stopPropagation()},isDefaultPrevented:C,isPropagationStopped:C,isImmediatePropagationStopped:C};var E=function(a){var b=a.relatedTarget,c=!1,d=a.type;a.type=a.data,b!==this&&(b&&(c=f.contains(this,b)),c||(f.event.handle.apply(this,arguments),a.type=d))},F=function(a){a.type=a.data,f.event.handle.apply(this,arguments)};f.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){f.event.special[a]={setup:function(c){f.event.add(this,b,c&&c.selector?F:E,a)},teardown:function(a){f.event.remove(this,b,a&&a.selector?F:E)}}}),f.support.submitBubbles||(f.event.special.submit={setup:function(a,b){if(!f.nodeName(this,"form")){f.event.add(this,"click.specialSubmit",function(a){var b=a.target,c=f.nodeName(b,"input")||f.nodeName(b,"button")?b.type:"";(c==="submit"||c==="image")&&f(b).closest("form").length&&J("submit",this,arguments)}),f.event.add(this,"keypress.specialSubmit",function(a){var b=a.target,c=f.nodeName(b,"input")||f.nodeName(b,"button")?b.type:"";(c==="text"||c==="password")&&f(b).closest("form").length&&a.keyCode===13&&J("submit",this,arguments)})}else{return !1}},teardown:function(a){f.event.remove(this,".specialSubmit")}});if(!f.support.changeBubbles){var G,H=function(a){var b=f.nodeName(a,"input")?a.type:"",c=a.value;b==="radio"||b==="checkbox"?c=a.checked:b==="select-multiple"?c=a.selectedIndex>-1?f.map(a.options,function(a){return a.selected}).join("-"):"":f.nodeName(a,"select")&&(c=a.selectedIndex);return c},I=function(c){var d=c.target,e,g;if(!!x.test(d.nodeName)&&!d.readOnly){e=f._data(d,"_change_data"),g=H(d),(c.type!=="focusout"||d.type!=="radio")&&f._data(d,"_change_data",g);if(e===b||g===e){return}if(e!=null||g){c.type="change",c.liveFired=b,f.event.trigger(c,arguments[1],d)}}};f.event.special.change={filters:{focusout:I,beforedeactivate:I,click:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(c==="radio"||c==="checkbox"||f.nodeName(b,"select"))&&I.call(this,a)},keydown:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(a.keyCode===13&&!f.nodeName(b,"textarea")||a.keyCode===32&&(c==="checkbox"||c==="radio")||c==="select-multiple")&&I.call(this,a)},beforeactivate:function(a){var b=a.target;f._data(b,"_change_data",H(b))}},setup:function(a,b){if(this.type==="file"){return !1}for(var c in G){f.event.add(this,c+".specialChange",G[c])}return x.test(this.nodeName)},teardown:function(a){f.event.remove(this,".specialChange");return x.test(this.nodeName)}},G=f.event.special.change.filters,G.focus=G.beforeactivate}f.support.focusinBubbles||f.each({focus:"focusin",blur:"focusout"},function(a,b){function e(a){var c=f.event.fix(a);c.type=b,c.originalEvent={},f.event.trigger(c,null,c.target),c.isDefaultPrevented()&&a.preventDefault()}var d=0;f.event.special[b]={setup:function(){d++===0&&c.addEventListener(a,e,!0)},teardown:function(){--d===0&&c.removeEventListener(a,e,!0)}}}),f.each(["bind","one"],function(a,c){f.fn[c]=function(a,d,e){var g;if(typeof a=="object"){for(var h in a){this[c](h,d,a[h],e)}return this}if(arguments.length===2||d===!1){e=d,d=b}c==="one"?(g=function(a){f(this).unbind(a,g);return e.apply(this,arguments)},g.guid=e.guid||f.guid++):g=e;if(a==="unload"&&c!=="one"){this.one(a,d,e)}else{for(var i=0,j=this.length;i<j;i++){f.event.add(this[i],a,g,d)}}return this}}),f.fn.extend({unbind:function(a,b){if(typeof a=="object"&&!a.preventDefault){for(var c in a){this.unbind(c,a[c])}}else{for(var d=0,e=this.length;d<e;d++){f.event.remove(this[d],a,b)}}return this},delegate:function(a,b,c,d){return this.live(b,c,d,a)},undelegate:function(a,b,c){return arguments.length===0?this.unbind("live"):this.die(b,null,c,a)},trigger:function(a,b){return this.each(function(){f.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0]){return f.event.trigger(a,b,this[0],!0)}},toggle:function(a){var b=arguments,c=a.guid||f.guid++,d=0,e=function(c){var e=(f.data(this,"lastToggle"+a.guid)||0)%d;f.data(this,"lastToggle"+a.guid,e+1),c.preventDefault();return b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length){b[d++].guid=c}return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var K={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout"};f.each(["live","die"],function(a,c){f.fn[c]=function(a,d,e,g){var h,i=0,j,k,l,m=g||this.selector,n=g?this:f(this.context);if(typeof a=="object"&&!a.preventDefault){for(var o in a){n[c](o,d,a[o],m)}return this}if(c==="die"&&!a&&g&&g.charAt(0)==="."){n.unbind(g);return this}if(d===!1||f.isFunction(d)){e=d||C,d=b}a=(a||"").split(" ");while((h=a[i++])!=null){j=w.exec(h),k="",j&&(k=j[0],h=h.replace(w,""));if(h==="hover"){a.push("mouseenter"+k,"mouseleave"+k);continue}l=h,K[h]?(a.push(K[h]+k),h=h+k):h=(K[h]||h)+k;if(c==="live"){for(var p=0,q=n.length;p<q;p++){f.event.add(n[p],"live."+M(h,m),{data:d,selector:m,handler:e,origType:h,origHandler:e,preType:l})}}else{n.unbind("live."+M(h,m),e)}}return this}}),f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "),function(a,b){f.fn[b]=function(a,c){c==null&&(c=a,a=null);return arguments.length>0?this.bind(b,a,c):this.trigger(b)},f.attrFn&&(f.attrFn[b]=!0)}),function(){function u(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}if(i.nodeType===1){f||(i.sizcache=c,i.sizset=g);if(typeof b!="string"){if(i===b){j=!0;break}}else{if(k.filter(b,[i]).length>0){j=i;break}}}i=i[a]}d[g]=j}}}function t(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}i.nodeType===1&&!f&&(i.sizcache=c,i.sizset=g);if(i.nodeName.toLowerCase()===b){j=i;break}i=i[a]}d[g]=j}}}var a=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,d=0,e=Object.prototype.toString,g=!1,h=!0,i=/\\/g,j=/\W/;[0,0].sort(function(){h=!1;return 0});var k=function(b,d,f,g){f=f||[],d=d||c;var h=d;if(d.nodeType!==1&&d.nodeType!==9){return[]}if(!b||typeof b!="string"){return f}var i,j,n,o,q,r,s,t,u=!0,w=k.isXML(d),x=[],y=b;do{a.exec(""),i=a.exec(y);if(i){y=i[3],x.push(i[1]);if(i[2]){o=i[3];break}}}while(i);if(x.length>1&&m.exec(b)){if(x.length===2&&l.relative[x[0]]){j=v(x[0]+x[1],d)}else{j=l.relative[x[0]]?[d]:k(x.shift(),d);while(x.length){b=x.shift(),l.relative[b]&&(b+=x.shift()),j=v(b,j)}}}else{!g&&x.length>1&&d.nodeType===9&&!w&&l.match.ID.test(x[0])&&!l.match.ID.test(x[x.length-1])&&(q=k.find(x.shift(),d,w),d=q.expr?k.filter(q.expr,q.set)[0]:q.set[0]);if(d){q=g?{expr:x.pop(),set:p(g)}:k.find(x.pop(),x.length===1&&(x[0]==="~"||x[0]==="+")&&d.parentNode?d.parentNode:d,w),j=q.expr?k.filter(q.expr,q.set):q.set,x.length>0?n=p(j):u=!1;while(x.length){r=x.pop(),s=r,l.relative[r]?s=x.pop():r="",s==null&&(s=d),l.relative[r](n,s,w)}}else{n=x=[]}}n||(n=j),n||k.error(r||b);if(e.call(n)==="[object Array]"){if(!u){f.push.apply(f,n)}else{if(d&&d.nodeType===1){for(t=0;n[t]!=null;t++){n[t]&&(n[t]===!0||n[t].nodeType===1&&k.contains(d,n[t]))&&f.push(j[t])}}else{for(t=0;n[t]!=null;t++){n[t]&&n[t].nodeType===1&&f.push(j[t])}}}}else{p(n,f)}o&&(k(o,h,f,g),k.uniqueSort(f));return f};k.uniqueSort=function(a){if(r){g=h,a.sort(r);if(g){for(var b=1;b<a.length;b++){a[b]===a[b-1]&&a.splice(b--,1)}}}return a},k.matches=function(a,b){return k(a,null,null,b)},k.matchesSelector=function(a,b){return k(b,null,null,[a]).length>0},k.find=function(a,b,c){var d;if(!a){return[]}for(var e=0,f=l.order.length;e<f;e++){var g,h=l.order[e];if(g=l.leftMatch[h].exec(a)){var j=g[1];g.splice(1,1);if(j.substr(j.length-1)!=="\\"){g[1]=(g[1]||"").replace(i,""),d=l.find[h](g,b,c);if(d!=null){a=a.replace(l.match[h],"");break}}}}d||(d=typeof b.getElementsByTagName!="undefined"?b.getElementsByTagName("*"):[]);return{set:d,expr:a}},k.filter=function(a,c,d,e){var f,g,h=a,i=[],j=c,m=c&&c[0]&&k.isXML(c[0]);while(a&&c.length){for(var n in l.filter){if((f=l.leftMatch[n].exec(a))!=null&&f[2]){var o,p,q=l.filter[n],r=f[1];g=!1,f.splice(1,1);if(r.substr(r.length-1)==="\\"){continue}j===i&&(i=[]);if(l.preFilter[n]){f=l.preFilter[n](f,j,d,i,e,m);if(!f){g=o=!0}else{if(f===!0){continue}}}if(f){for(var s=0;(p=j[s])!=null;s++){if(p){o=q(p,f,s,j);var t=e^!!o;d&&o!=null?t?g=!0:j[s]=!1:t&&(i.push(p),g=!0)}}}if(o!==b){d||(j=i),a=a.replace(l.match[n],"");if(!g){return[]}break}}}if(a===h){if(g==null){k.error(a)}else{break}}h=a}return j},k.error=function(a){throw"Syntax error, unrecognized expression: "+a};var l=k.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")},type:function(a){return a.getAttribute("type")}},relative:{"+":function(a,b){var c=typeof b=="string",d=c&&!j.test(b),e=c&&!d;d&&(b=b.toLowerCase());for(var f=0,g=a.length,h;f<g;f++){if(h=a[f]){while((h=h.previousSibling)&&h.nodeType!==1){}a[f]=e||h&&h.nodeName.toLowerCase()===b?h||!1:h===b}}e&&k.filter(b,a,!0)},">":function(a,b){var c,d=typeof b=="string",e=0,f=a.length;if(d&&!j.test(b)){b=b.toLowerCase();for(;e<f;e++){c=a[e];if(c){var g=c.parentNode;a[e]=g.nodeName.toLowerCase()===b?g:!1}}}else{for(;e<f;e++){c=a[e],c&&(a[e]=d?c.parentNode:c.parentNode===b)}d&&k.filter(b,a,!0)}},"":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("parentNode",b,f,a,e,c)},"~":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("previousSibling",b,f,a,e,c)}},find:{ID:function(a,b,c){if(typeof b.getElementById!="undefined"&&!c){var d=b.getElementById(a[1]);return d&&d.parentNode?[d]:[]}},NAME:function(a,b){if(typeof b.getElementsByName!="undefined"){var c=[],d=b.getElementsByName(a[1]);for(var e=0,f=d.length;e<f;e++){d[e].getAttribute("name")===a[1]&&c.push(d[e])}return c.length===0?null:c}},TAG:function(a,b){if(typeof b.getElementsByTagName!="undefined"){return b.getElementsByTagName(a[1])}}},preFilter:{CLASS:function(a,b,c,d,e,f){a=" "+a[1].replace(i,"")+" ";if(f){return a}for(var g=0,h;(h=b[g])!=null;g++){h&&(e^(h.className&&(" "+h.className+" ").replace(/[\t\n\r]/g," ").indexOf(a)>=0)?c||d.push(h):c&&(b[g]=!1))}return !1},ID:function(a){return a[1].replace(i,"")},TAG:function(a,b){return a[1].replace(i,"").toLowerCase()},CHILD:function(a){if(a[1]==="nth"){a[2]||k.error(a[0]),a[2]=a[2].replace(/^\+|\s*/g,"");var b=/(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2]==="even"&&"2n"||a[2]==="odd"&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}else{a[2]&&k.error(a[0])}a[0]=d++;return a},ATTR:function(a,b,c,d,e,f){var g=a[1]=a[1].replace(i,"");!f&&l.attrMap[g]&&(a[1]=l.attrMap[g]),a[4]=(a[4]||a[5]||"").replace(i,""),a[2]==="~="&&(a[4]=" "+a[4]+" ");return a},PSEUDO:function(b,c,d,e,f){if(b[1]==="not"){if((a.exec(b[3])||"").length>1||/^\w/.test(b[3])){b[3]=k(b[3],null,null,c)}else{var g=k.filter(b[3],c,d,!0^f);d||e.push.apply(e,g);return !1}}else{if(l.match.POS.test(b[0])||l.match.CHILD.test(b[0])){return !0}}return b},POS:function(a){a.unshift(!0);return a}},filters:{enabled:function(a){return a.disabled===!1&&a.type!=="hidden"},disabled:function(a){return a.disabled===!0},checked:function(a){return a.checked===!0},selected:function(a){a.parentNode&&a.parentNode.selectedIndex;return a.selected===!0},parent:function(a){return !!a.firstChild},empty:function(a){return !a.firstChild},has:function(a,b,c){return !!k(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){var b=a.getAttribute("type"),c=a.type;return a.nodeName.toLowerCase()==="input"&&"text"===c&&(b===c||b===null)},radio:function(a){return a.nodeName.toLowerCase()==="input"&&"radio"===a.type},checkbox:function(a){return a.nodeName.toLowerCase()==="input"&&"checkbox"===a.type},file:function(a){return a.nodeName.toLowerCase()==="input"&&"file"===a.type},password:function(a){return a.nodeName.toLowerCase()==="input"&&"password"===a.type},submit:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"submit"===a.type},image:function(a){return a.nodeName.toLowerCase()==="input"&&"image"===a.type},reset:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"reset"===a.type},button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&"button"===a.type||b==="button"},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)},focus:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b){return b===0},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2===0},odd:function(a,b){return b%2===1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=l.filters[e];if(f){return f(a,c,b,d)}if(e==="contains"){return(a.textContent||a.innerText||k.getText([a])||"").indexOf(b[3])>=0}if(e==="not"){var g=b[3];for(var h=0,i=g.length;h<i;h++){if(g[h]===a){return !1}}return !0}k.error(e)},CHILD:function(a,b){var c=b[1],d=a;switch(c){case"only":case"first":while(d=d.previousSibling){if(d.nodeType===1){return !1}}if(c==="first"){return !0}d=a;case"last":while(d=d.nextSibling){if(d.nodeType===1){return !1}}return !0;case"nth":var e=b[2],f=b[3];if(e===1&&f===0){return !0}var g=b[0],h=a.parentNode;if(h&&(h.sizcache!==g||!a.nodeIndex)){var i=0;for(d=h.firstChild;d;d=d.nextSibling){d.nodeType===1&&(d.nodeIndex=++i)}h.sizcache=g}var j=a.nodeIndex-f;return e===0?j===0:j%e===0&&j/e>=0}},ID:function(a,b){return a.nodeType===1&&a.getAttribute("id")===b},TAG:function(a,b){return b==="*"&&a.nodeType===1||a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1],d=l.attrHandle[c]?l.attrHandle[c](a):a[c]!=null?a[c]:a.getAttribute(c),e=d+"",f=b[2],g=b[4];return d==null?f==="!=":f==="="?e===g:f==="*="?e.indexOf(g)>=0:f==="~="?(" "+e+" ").indexOf(g)>=0:g?f==="!="?e!==g:f==="^="?e.indexOf(g)===0:f==="$="?e.substr(e.length-g.length)===g:f==="|="?e===g||e.substr(0,g.length+1)===g+"-":!1:e&&d!==!1},POS:function(a,b,c,d){var e=b[2],f=l.setFilters[e];if(f){return f(a,c,b,d)}}}},m=l.match.POS,n=function(a,b){return"\\"+(b-0+1)};for(var o in l.match){l.match[o]=new RegExp(l.match[o].source+/(?![^\[]*\])(?![^\(]*\))/.source),l.leftMatch[o]=new RegExp(/(^(?:.|\r|\n)*?)/.source+l.match[o].source.replace(/\\(\d+)/g,n))}var p=function(a,b){a=Array.prototype.slice.call(a,0);if(b){b.push.apply(b,a);return b}return a};try{Array.prototype.slice.call(c.documentElement.childNodes,0)[0].nodeType}catch(q){p=function(a,b){var c=0,d=b||[];if(e.call(a)==="[object Array]"){Array.prototype.push.apply(d,a)}else{if(typeof a.length=="number"){for(var f=a.length;c<f;c++){d.push(a[c])}}else{for(;a[c];c++){d.push(a[c])}}}return d}}var r,s;c.documentElement.compareDocumentPosition?r=function(a,b){if(a===b){g=!0;return 0}if(!a.compareDocumentPosition||!b.compareDocumentPosition){return a.compareDocumentPosition?-1:1}return a.compareDocumentPosition(b)&4?-1:1}:(r=function(a,b){if(a===b){g=!0;return 0}if(a.sourceIndex&&b.sourceIndex){return a.sourceIndex-b.sourceIndex}var c,d,e=[],f=[],h=a.parentNode,i=b.parentNode,j=h;if(h===i){return s(a,b)}if(!h){return -1}if(!i){return 1}while(j){e.unshift(j),j=j.parentNode}j=i;while(j){f.unshift(j),j=j.parentNode}c=e.length,d=f.length;for(var k=0;k<c&&k<d;k++){if(e[k]!==f[k]){return s(e[k],f[k])}}return k===c?s(a,f[k],-1):s(e[k],b,1)},s=function(a,b,c){if(a===b){return c}var d=a.nextSibling;while(d){if(d===b){return -1}d=d.nextSibling}return 1}),k.getText=function(a){var b="",c;for(var d=0;a[d];d++){c=a[d],c.nodeType===3||c.nodeType===4?b+=c.nodeValue:c.nodeType!==8&&(b+=k.getText(c.childNodes))}return b},function(){var a=c.createElement("div"),d="script"+(new Date).getTime(),e=c.documentElement;a.innerHTML="<a name='"+d+"'/>",e.insertBefore(a,e.firstChild),c.getElementById(d)&&(l.find.ID=function(a,c,d){if(typeof c.getElementById!="undefined"&&!d){var e=c.getElementById(a[1]);return e?e.id===a[1]||typeof e.getAttributeNode!="undefined"&&e.getAttributeNode("id").nodeValue===a[1]?[e]:b:[]}},l.filter.ID=function(a,b){var c=typeof a.getAttributeNode!="undefined"&&a.getAttributeNode("id");return a.nodeType===1&&c&&c.nodeValue===b}),e.removeChild(a),e=a=null}(),function(){var a=c.createElement("div");a.appendChild(c.createComment("")),a.getElementsByTagName("*").length>0&&(l.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if(a[1]==="*"){var d=[];for(var e=0;c[e];e++){c[e].nodeType===1&&d.push(c[e])}c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!="undefined"&&a.firstChild.getAttribute("href")!=="#"&&(l.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),c.querySelectorAll&&function(){var a=k,b=c.createElement("div"),d="__sizzle__";b.innerHTML="<p class='TEST'></p>";if(!b.querySelectorAll||b.querySelectorAll(".TEST").length!==0){k=function(b,e,f,g){e=e||c;if(!g&&!k.isXML(e)){var h=/^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);if(h&&(e.nodeType===1||e.nodeType===9)){if(h[1]){return p(e.getElementsByTagName(b),f)}if(h[2]&&l.find.CLASS&&e.getElementsByClassName){return p(e.getElementsByClassName(h[2]),f)}}if(e.nodeType===9){if(b==="body"&&e.body){return p([e.body],f)}if(h&&h[3]){var i=e.getElementById(h[3]);if(!i||!i.parentNode){return p([],f)}if(i.id===h[3]){return p([i],f)}}try{return p(e.querySelectorAll(b),f)}catch(j){}}else{if(e.nodeType===1&&e.nodeName.toLowerCase()!=="object"){var m=e,n=e.getAttribute("id"),o=n||d,q=e.parentNode,r=/^\s*[+~]/.test(b);n?o=o.replace(/'/g,"\\$&"):e.setAttribute("id",o),r&&q&&(e=e.parentNode);try{if(!r||q){return p(e.querySelectorAll("[id='"+o+"'] "+b),f)}}catch(s){}finally{n||m.removeAttribute("id")}}}}return a(b,e,f,g)};for(var e in a){k[e]=a[e]}b=null}}(),function(){var a=c.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector;if(b){var d=!b.call(c.createElement("div"),"div"),e=!1;try{b.call(c.documentElement,"[test!='']:sizzle")}catch(f){e=!0}k.matchesSelector=function(a,c){c=c.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']");if(!k.isXML(a)){try{if(e||!l.match.PSEUDO.test(c)&&!/!=/.test(c)){var f=b.call(a,c);if(f||!d||a.document&&a.document.nodeType!==11){return f}}}catch(g){}}return k(c,null,null,[a]).length>0}}}(),function(){var a=c.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>";if(!!a.getElementsByClassName&&a.getElementsByClassName("e").length!==0){a.lastChild.className="e";if(a.getElementsByClassName("e").length===1){return}l.order.splice(1,0,"CLASS"),l.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!="undefined"&&!c){return b.getElementsByClassName(a[1])}},a=null}}(),c.documentElement.contains?k.contains=function(a,b){return a!==b&&(a.contains?a.contains(b):!0)}:c.documentElement.compareDocumentPosition?k.contains=function(a,b){return !!(a.compareDocumentPosition(b)&16)}:k.contains=function(){return !1},k.isXML=function(a){var b=(a?a.ownerDocument||a:0).documentElement;return b?b.nodeName!=="HTML":!1};var v=function(a,b){var c,d=[],e="",f=b.nodeType?[b]:b;while(c=l.match.PSEUDO.exec(a)){e+=c[0],a=a.replace(l.match.PSEUDO,"")}a=l.relative[a]?a+"*":a;for(var g=0,h=f.length;g<h;g++){k(a,f[g],d)}return k.filter(e,d)};f.find=k,f.expr=k.selectors,f.expr[":"]=f.expr.filters,f.unique=k.uniqueSort,f.text=k.getText,f.isXMLDoc=k.isXML,f.contains=k.contains}();var N=/Until$/,O=/^(?:parents|prevUntil|prevAll)/,P=/,/,Q=/^.[^:#\[\.,]*$/,R=Array.prototype.slice,S=f.expr.match.POS,T={children:!0,contents:!0,next:!0,prev:!0};f.fn.extend({find:function(a){var b=this,c,d;if(typeof a!="string"){return f(a).filter(function(){for(c=0,d=b.length;c<d;c++){if(f.contains(b[c],this)){return !0}}})}var e=this.pushStack("","find",a),g,h,i;for(c=0,d=this.length;c<d;c++){g=e.length,f.find(a,this[c],e);if(c>0){for(h=g;h<e.length;h++){for(i=0;i<g;i++){if(e[i]===e[h]){e.splice(h--,1);break}}}}}return e},has:function(a){var b=f(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++){if(f.contains(this,b[a])){return !0}}})},not:function(a){return this.pushStack(V(this,a,!1),"not",a)},filter:function(a){return this.pushStack(V(this,a,!0),"filter",a)},is:function(a){return !!a&&(typeof a=="string"?f.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c=[],d,e,g=this[0];if(f.isArray(a)){var h,i,j={},k=1;if(g&&a.length){for(d=0,e=a.length;d<e;d++){i=a[d],j[i]||(j[i]=S.test(i)?f(i,b||this.context):i)}while(g&&g.ownerDocument&&g!==b){for(i in j){h=j[i],(h.jquery?h.index(g)>-1:f(g).is(h))&&c.push({selector:i,elem:g,level:k})}g=g.parentNode,k++}}return c}var l=S.test(a)||typeof a!="string"?f(a,b||this.context):0;for(d=0,e=this.length;d<e;d++){g=this[d];while(g){if(l?l.index(g)>-1:f.find.matchesSelector(g,a)){c.push(g);break}g=g.parentNode;if(!g||!g.ownerDocument||g===b||g.nodeType===11){break}}}c=c.length>1?f.unique(c):c;return this.pushStack(c,"closest",a)},index:function(a){if(!a){return this[0]&&this[0].parentNode?this.prevAll().length:-1}if(typeof a=="string"){return f.inArray(this[0],f(a))}return f.inArray(a.jquery?a[0]:a,this)},add:function(a,b){var c=typeof a=="string"?f(a,b):f.makeArray(a&&a.nodeType?[a]:a),d=f.merge(this.get(),c);return this.pushStack(U(c[0])||U(d[0])?d:f.unique(d))},andSelf:function(){return this.add(this.prevObject)}}),f.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return f.dir(a,"parentNode")},parentsUntil:function(a,b,c){return f.dir(a,"parentNode",c)},next:function(a){return f.nth(a,2,"nextSibling")},prev:function(a){return f.nth(a,2,"previousSibling")},nextAll:function(a){return f.dir(a,"nextSibling")},prevAll:function(a){return f.dir(a,"previousSibling")},nextUntil:function(a,b,c){return f.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return f.dir(a,"previousSibling",c)},siblings:function(a){return f.sibling(a.parentNode.firstChild,a)},children:function(a){return f.sibling(a.firstChild)},contents:function(a){return f.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:f.makeArray(a.childNodes)}},function(a,b){f.fn[a]=function(c,d){var e=f.map(this,b,c),g=R.call(arguments);N.test(a)||(d=c),d&&typeof d=="string"&&(e=f.filter(d,e)),e=this.length>1&&!T[a]?f.unique(e):e,(this.length>1||P.test(d))&&O.test(a)&&(e=e.reverse());return this.pushStack(e,a,g.join(","))}}),f.extend({filter:function(a,b,c){c&&(a=":not("+a+")");return b.length===1?f.find.matchesSelector(b[0],a)?[b[0]]:[]:f.find.matches(a,b)},dir:function(a,c,d){var e=[],g=a[c];while(g&&g.nodeType!==9&&(d===b||g.nodeType!==1||!f(g).is(d))){g.nodeType===1&&e.push(g),g=g[c]}return e},nth:function(a,b,c,d){b=b||1;var e=0;for(;a;a=a[c]){if(a.nodeType===1&&++e===b){break}}return a},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling){a.nodeType===1&&a!==b&&c.push(a)}return c}});var W=/ jQuery\d+="(?:\d+|null)"/g,X=/^\s+/,Y=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,Z=/<([\w:]+)/,$=/<tbody/i,_=/<|&#?\w+;/,ba=/<(?:script|object|embed|option|style)/i,bb=/checked\s*(?:[^=]|=\s*.checked.)/i,bc=/\/(java|ecma)script/i,bd=/^\s*<!(?:\[CDATA\[|\-\-)/,be={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]};be.optgroup=be.option,be.tbody=be.tfoot=be.colgroup=be.caption=be.thead,be.th=be.td,f.support.htmlSerialize||(be._default=[1,"div<div>","</div>"]),f.fn.extend({text:function(a){if(f.isFunction(a)){return this.each(function(b){var c=f(this);c.text(a.call(this,b,c.text()))})}if(typeof a!="object"&&a!==b){return this.empty().append((this[0]&&this[0].ownerDocument||c).createTextNode(a))}return f.text(this)},wrapAll:function(a){if(f.isFunction(a)){return this.each(function(b){f(this).wrapAll(a.call(this,b))})}if(this[0]){var b=f(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1){a=a.firstChild}return a}).append(this)}return this},wrapInner:function(a){if(f.isFunction(a)){return this.each(function(b){f(this).wrapInner(a.call(this,b))})}return this.each(function(){var b=f(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){return this.each(function(){f(this).wrapAll(a)})},unwrap:function(){return this.parent().each(function(){f.nodeName(this,"body")||f(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode){return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)})}if(arguments.length){var a=f(arguments[0]);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode){return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)})}if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,f(arguments[0]).toArray());return a}},remove:function(a,b){for(var c=0,d;(d=this[c])!=null;c++){if(!a||f.filter(a,[d]).length){!b&&d.nodeType===1&&(f.cleanData(d.getElementsByTagName("*")),f.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d)}}return this},empty:function(){for(var a=0,b;(b=this[a])!=null;a++){b.nodeType===1&&f.cleanData(b.getElementsByTagName("*"));while(b.firstChild){b.removeChild(b.firstChild)}}return this},clone:function(a,b){a=a==null?!1:a,b=b==null?a:b;return this.map(function(){return f.clone(this,a,b)})},html:function(a){if(a===b){return this[0]&&this[0].nodeType===1?this[0].innerHTML.replace(W,""):null}if(typeof a=="string"&&!ba.test(a)&&(f.support.leadingWhitespace||!X.test(a))&&!be[(Z.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Y,"<$1></$2>");try{for(var c=0,d=this.length;c<d;c++){this[c].nodeType===1&&(f.cleanData(this[c].getElementsByTagName("*")),this[c].innerHTML=a)}}catch(e){this.empty().append(a)}}else{f.isFunction(a)?this.each(function(b){var c=f(this);c.html(a.call(this,b,c.html()))}):this.empty().append(a)}return this},replaceWith:function(a){if(this[0]&&this[0].parentNode){if(f.isFunction(a)){return this.each(function(b){var c=f(this),d=c.html();c.replaceWith(a.call(this,b,d))})}typeof a!="string"&&(a=f(a).detach());return this.each(function(){var b=this.nextSibling,c=this.parentNode;f(this).remove(),b?f(b).before(a):f(c).append(a)})}return this.length?this.pushStack(f(f.isFunction(a)?a():a),"replaceWith",a):this},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,g,h,i,j=a[0],k=[];if(!f.support.checkClone&&arguments.length===3&&typeof j=="string"&&bb.test(j)){return this.each(function(){f(this).domManip(a,c,d,!0)})}if(f.isFunction(j)){return this.each(function(e){var g=f(this);a[0]=j.call(this,e,c?g.html():b),g.domManip(a,c,d)})}if(this[0]){i=j&&j.parentNode,f.support.parentNode&&i&&i.nodeType===11&&i.childNodes.length===this.length?e={fragment:i}:e=f.buildFragment(a,this,k),h=e.fragment,h.childNodes.length===1?g=h=h.firstChild:g=h.firstChild;if(g){c=c&&f.nodeName(g,"tr");for(var l=0,m=this.length,n=m-1;l<m;l++){d.call(c?bf(this[l],g):this[l],e.cacheable||m>1&&l<n?f.clone(h,!0,!0):h)}}k.length&&f.each(k,bl)}return this}}),f.buildFragment=function(a,b,d){var e,g,h,i;b&&b[0]&&(i=b[0].ownerDocument||b[0]),i.createDocumentFragment||(i=c),a.length===1&&typeof a[0]=="string"&&a[0].length<512&&i===c&&a[0].charAt(0)==="<"&&!ba.test(a[0])&&(f.support.checkClone||!bb.test(a[0]))&&(g=!0,h=f.fragments[a[0]],h&&h!==1&&(e=h)),e||(e=i.createDocumentFragment(),f.clean(a,i,e,d)),g&&(f.fragments[a[0]]=h?e:1);return{fragment:e,cacheable:g}},f.fragments={},f.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){f.fn[a]=function(c){var d=[],e=f(c),g=this.length===1&&this[0].parentNode;if(g&&g.nodeType===11&&g.childNodes.length===1&&e.length===1){e[b](this[0]);return this}for(var h=0,i=e.length;h<i;h++){var j=(h>0?this.clone(!0):this).get();f(e[h])[b](j),d=d.concat(j)}return this.pushStack(d,a,e.selector)}}),f.extend({clone:function(a,b,c){var d=a.cloneNode(!0),e,g,h;if((!f.support.noCloneEvent||!f.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!f.isXMLDoc(a)){bh(a,d),e=bi(a),g=bi(d);for(h=0;e[h];++h){g[h]&&bh(e[h],g[h])}}if(b){bg(a,d);if(c){e=bi(a),g=bi(d);for(h=0;e[h];++h){bg(e[h],g[h])}}}e=g=null;return d},clean:function(a,b,d,e){var g;b=b||c,typeof b.createElement=="undefined"&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||c);var h=[],i;for(var j=0,k;(k=a[j])!=null;j++){typeof k=="number"&&(k+="");if(!k){continue}if(typeof k=="string"){if(!_.test(k)){k=b.createTextNode(k)}else{k=k.replace(Y,"<$1></$2>");var l=(Z.exec(k)||["",""])[1].toLowerCase(),m=be[l]||be._default,n=m[0],o=b.createElement("div");o.innerHTML=m[1]+k+m[2];while(n--){o=o.lastChild}if(!f.support.tbody){var p=$.test(k),q=l==="table"&&!p?o.firstChild&&o.firstChild.childNodes:m[1]==="<table>"&&!p?o.childNodes:[];for(i=q.length-1;i>=0;--i){f.nodeName(q[i],"tbody")&&!q[i].childNodes.length&&q[i].parentNode.removeChild(q[i])}}!f.support.leadingWhitespace&&X.test(k)&&o.insertBefore(b.createTextNode(X.exec(k)[0]),o.firstChild),k=o.childNodes}}var r;if(!f.support.appendChecked){if(k[0]&&typeof(r=k.length)=="number"){for(i=0;i<r;i++){bk(k[i])}}else{bk(k)}}k.nodeType?h.push(k):h=f.merge(h,k)}if(d){g=function(a){return !a.type||bc.test(a.type)};for(j=0;h[j];j++){if(e&&f.nodeName(h[j],"script")&&(!h[j].type||h[j].type.toLowerCase()==="text/javascript")){e.push(h[j].parentNode?h[j].parentNode.removeChild(h[j]):h[j])}else{if(h[j].nodeType===1){var s=f.grep(h[j].getElementsByTagName("script"),g);h.splice.apply(h,[j+1,0].concat(s))}d.appendChild(h[j])}}}return h},cleanData:function(a){var b,c,d=f.cache,e=f.expando,g=f.event.special,h=f.support.deleteExpando;for(var i=0,j;(j=a[i])!=null;i++){if(j.nodeName&&f.noData[j.nodeName.toLowerCase()]){continue}c=j[f.expando];if(c){b=d[c]&&d[c][e];if(b&&b.events){for(var k in b.events){g[k]?f.event.remove(j,k):f.removeEvent(j,k,b.handle)}b.handle&&(b.handle.elem=null)}h?delete j[f.expando]:j.removeAttribute&&j.removeAttribute(f.expando),delete d[c]}}}});var bm=/alpha\([^)]*\)/i,bn=/opacity=([^)]*)/,bo=/([A-Z]|^ms)/g,bp=/^-?\d+(?:px)?$/i,bq=/^-?\d/,br=/^([\-+])=([\-+.\de]+)/,bs={position:"absolute",visibility:"hidden",display:"block"},bt=["Left","Right"],bu=["Top","Bottom"],bv,bw,bx;f.fn.css=function(a,c){if(arguments.length===2&&c===b){return this}return f.access(this,a,c,!0,function(a,c,d){return d!==b?f.style(a,c,d):f.css(a,c)})},f.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bv(a,"opacity","opacity");return c===""?"1":c}return a.style.opacity}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":f.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!!a&&a.nodeType!==3&&a.nodeType!==8&&!!a.style){var g,h,i=f.camelCase(c),j=a.style,k=f.cssHooks[i];c=f.cssProps[i]||i;if(d===b){if(k&&"get" in k&&(g=k.get(a,!1,e))!==b){return g}return j[c]}h=typeof d,h==="string"&&(g=br.exec(d))&&(d=+(g[1]+1)*+g[2]+parseFloat(f.css(a,c)),h="number");if(d==null||h==="number"&&isNaN(d)){return}h==="number"&&!f.cssNumber[i]&&(d+="px");if(!k||!("set" in k)||(d=k.set(a,d))!==b){try{j[c]=d}catch(l){}}}},css:function(a,c,d){var e,g;c=f.camelCase(c),g=f.cssHooks[c],c=f.cssProps[c]||c,c==="cssFloat"&&(c="float");if(g&&"get" in g&&(e=g.get(a,!0,d))!==b){return e}if(bv){return bv(a,c)}},swap:function(a,b,c){var d={};for(var e in b){d[e]=a.style[e],a.style[e]=b[e]}c.call(a);for(e in b){a.style[e]=d[e]}}}),f.curCSS=f.css,f.each(["height","width"],function(a,b){f.cssHooks[b]={get:function(a,c,d){var e;if(c){if(a.offsetWidth!==0){return by(a,b,d)}f.swap(a,bs,function(){e=by(a,b,d)});return e}},set:function(a,b){if(!bp.test(b)){return b}b=parseFloat(b);if(b>=0){return b+"px"}}}}),f.support.opacity||(f.cssHooks.opacity={get:function(a,b){return bn.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=f.isNaN(b)?"":"alpha(opacity="+b*100+")",g=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&f.trim(g.replace(bm,""))===""){c.removeAttribute("filter");if(d&&!d.filter){return}}c.filter=bm.test(g)?g.replace(bm,e):g+" "+e}}),f(function(){f.support.reliableMarginRight||(f.cssHooks.marginRight={get:function(a,b){var c;f.swap(a,{display:"inline-block"},function(){b?c=bv(a,"margin-right","marginRight"):c=a.style.marginRight});return c}})}),c.defaultView&&c.defaultView.getComputedStyle&&(bw=function(a,c){var d,e,g;c=c.replace(bo,"-$1").toLowerCase();if(!(e=a.ownerDocument.defaultView)){return b}if(g=e.getComputedStyle(a,null)){d=g.getPropertyValue(c),d===""&&!f.contains(a.ownerDocument.documentElement,a)&&(d=f.style(a,c))}return d}),c.documentElement.currentStyle&&(bx=function(a,b){var c,d=a.currentStyle&&a.currentStyle[b],e=a.runtimeStyle&&a.runtimeStyle[b],f=a.style;!bp.test(d)&&bq.test(d)&&(c=f.left,e&&(a.runtimeStyle.left=a.currentStyle.left),f.left=b==="fontSize"?"1em":d||0,d=f.pixelLeft+"px",f.left=c,e&&(a.runtimeStyle.left=e));return d===""?"auto":d}),bv=bw||bx,f.expr&&f.expr.filters&&(f.expr.filters.hidden=function(a){var b=a.offsetWidth,c=a.offsetHeight;return b===0&&c===0||!f.support.reliableHiddenOffsets&&(a.style.display||f.css(a,"display"))==="none"},f.expr.filters.visible=function(a){return !f.expr.filters.hidden(a)});var bz=/%20/g,bA=/\[\]$/,bB=/\r?\n/g,bC=/#.*$/,bD=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,bE=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,bF=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,bG=/^(?:GET|HEAD)$/,bH=/^\/\//,bI=/\?/,bJ=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bK=/^(?:select|textarea)/i,bL=/\s+/,bM=/([?&])_=[^&]*/,bN=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,bO=f.fn.load,bP={},bQ={},bR,bS,bT=["*/"]+["*"];try{bR=e.href}catch(bU){bR=c.createElement("a"),bR.href="",bR=bR.href}bS=bN.exec(bR.toLowerCase())||[],f.fn.extend({load:function(a,c,d){if(typeof a!="string"&&bO){return bO.apply(this,arguments)}if(!this.length){return this}var e=a.indexOf(" ");if(e>=0){var g=a.slice(e,a.length);a=a.slice(0,e)}var h="GET";c&&(f.isFunction(c)?(d=c,c=b):typeof c=="object"&&(c=f.param(c,f.ajaxSettings.traditional),h="POST"));var i=this;f.ajax({url:a,type:h,dataType:"html",data:c,complete:function(a,b,c){c=a.responseText,a.isResolved()&&(a.done(function(a){c=a}),i.html(g?f("<div>").append(c.replace(bJ,"")).find(g):c)),d&&i.each(d,[c,b,a])}});return this},serialize:function(){return f.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?f.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||bK.test(this.nodeName)||bE.test(this.type))}).map(function(a,b){var c=f(this).val();return c==null?null:f.isArray(c)?f.map(c,function(a,c){return{name:b.name,value:a.replace(bB,"\r\n")}}):{name:b.name,value:c.replace(bB,"\r\n")}}).get()}}),f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){f.fn[b]=function(a){return this.bind(b,a)}}),f.each(["get","post"],function(a,c){f[c]=function(a,d,e,g){f.isFunction(d)&&(g=g||e,e=d,d=b);return f.ajax({type:c,url:a,data:d,success:e,dataType:g})}}),f.extend({getScript:function(a,c){return f.get(a,b,c,"script")},getJSON:function(a,b,c){return f.get(a,b,c,"json")},ajaxSetup:function(a,b){b?bX(a,f.ajaxSettings):(b=a,a=f.ajaxSettings),bX(a,b);return a},ajaxSettings:{url:bR,isLocal:bF.test(bS[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":bT},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":f.parseJSON,"text xml":f.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:bV(bP),ajaxTransport:bV(bQ),ajax:function(a,c){function w(a,c,l,m){if(s!==2){s=2,q&&clearTimeout(q),p=b,n=m||"",v.readyState=a>0?4:0;var o,r,u,w=c,x=l?bZ(d,v,l):b,y,z;if(a>=200&&a<300||a===304){if(d.ifModified){if(y=v.getResponseHeader("Last-Modified")){f.lastModified[k]=y}if(z=v.getResponseHeader("Etag")){f.etag[k]=z}}if(a===304){w="notmodified",o=!0}else{try{r=b$(d,x),w="success",o=!0}catch(A){w="parsererror",u=A}}}else{u=w;if(!w||a){w="error",a<0&&(a=0)}}v.status=a,v.statusText=""+(c||w),o?h.resolveWith(e,[r,w,v]):h.rejectWith(e,[v,w,u]),v.statusCode(j),j=b,t&&g.trigger("ajax"+(o?"Success":"Error"),[v,d,o?r:u]),i.resolveWith(e,[v,w]),t&&(g.trigger("ajaxComplete",[v,d]),--f.active||f.event.trigger("ajaxStop"))}}typeof a=="object"&&(c=a,a=b),c=c||{};var d=f.ajaxSetup({},c),e=d.context||d,g=e!==d&&(e.nodeType||e instanceof f)?f(e):f.event,h=f.Deferred(),i=f._Deferred(),j=d.statusCode||{},k,l={},m={},n,o,p,q,r,s=0,t,u,v={readyState:0,setRequestHeader:function(a,b){if(!s){var c=a.toLowerCase();a=m[c]=m[c]||a,l[a]=b}return this},getAllResponseHeaders:function(){return s===2?n:null},getResponseHeader:function(a){var c;if(s===2){if(!o){o={};while(c=bD.exec(n)){o[c[1].toLowerCase()]=c[2]}}c=o[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){s||(d.mimeType=a);return this},abort:function(a){a=a||"abort",p&&p.abort(a),w(0,a);return this}};h.promise(v),v.success=v.done,v.error=v.fail,v.complete=i.done,v.statusCode=function(a){if(a){var b;if(s<2){for(b in a){j[b]=[j[b],a[b]]}}else{b=a[v.status],v.then(b,b)}}return this},d.url=((a||d.url)+"").replace(bC,"").replace(bH,bS[1]+"//"),d.dataTypes=f.trim(d.dataType||"*").toLowerCase().split(bL),d.crossDomain==null&&(r=bN.exec(d.url.toLowerCase()),d.crossDomain=!(!r||r[1]==bS[1]&&r[2]==bS[2]&&(r[3]||(r[1]==="http:"?80:443))==(bS[3]||(bS[1]==="http:"?80:443)))),d.data&&d.processData&&typeof d.data!="string"&&(d.data=f.param(d.data,d.traditional)),bW(bP,d,c,v);if(s===2){return !1}t=d.global,d.type=d.type.toUpperCase(),d.hasContent=!bG.test(d.type),t&&f.active++===0&&f.event.trigger("ajaxStart");if(!d.hasContent){d.data&&(d.url+=(bI.test(d.url)?"&":"?")+d.data,delete d.data),k=d.url;if(d.cache===!1){var x=f.now(),y=d.url.replace(bM,"$1_="+x);d.url=y+(y===d.url?(bI.test(d.url)?"&":"?")+"_="+x:"")}}(d.data&&d.hasContent&&d.contentType!==!1||c.contentType)&&v.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(k=k||d.url,f.lastModified[k]&&v.setRequestHeader("If-Modified-Since",f.lastModified[k]),f.etag[k]&&v.setRequestHeader("If-None-Match",f.etag[k])),v.setRequestHeader("Accept",d.dataTypes[0]&&d.accepts[d.dataTypes[0]]?d.accepts[d.dataTypes[0]]+(d.dataTypes[0]!=="*"?", "+bT+"; q=0.01":""):d.accepts["*"]);for(u in d.headers){v.setRequestHeader(u,d.headers[u])}if(d.beforeSend&&(d.beforeSend.call(e,v,d)===!1||s===2)){v.abort();return !1}for(u in {success:1,error:1,complete:1}){v[u](d[u])}p=bW(bQ,d,c,v);if(!p){w(-1,"No Transport")}else{v.readyState=1,t&&g.trigger("ajaxSend",[v,d]),d.async&&d.timeout>0&&(q=setTimeout(function(){v.abort("timeout")},d.timeout));try{s=1,p.send(l,w)}catch(z){s<2?w(-1,z):f.error(z)}}return v},param:function(a,c){var d=[],e=function(a,b){b=f.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=f.ajaxSettings.traditional);if(f.isArray(a)||a.jquery&&!f.isPlainObject(a)){f.each(a,function(){e(this.name,this.value)})}else{for(var g in a){bY(g,a[g],c,e)}}return d.join("&").replace(bz,"+")}}),f.extend({active:0,lastModified:{},etag:{}});var b_=f.now(),ca=/(\=)\?(&|$)|\?\?/i;f.ajaxSetup({jsonp:"callback",jsonpCallback:function(){return f.expando+"_"+b_++}}),f.ajaxPrefilter("json jsonp",function(b,c,d){var e=b.contentType==="application/x-www-form-urlencoded"&&typeof b.data=="string";if(b.dataTypes[0]==="jsonp"||b.jsonp!==!1&&(ca.test(b.url)||e&&ca.test(b.data))){var g,h=b.jsonpCallback=f.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,i=a[h],j=b.url,k=b.data,l="$1"+h+"$2";b.jsonp!==!1&&(j=j.replace(ca,l),b.url===j&&(e&&(k=k.replace(ca,l)),b.data===k&&(j+=(/\?/.test(j)?"&":"?")+b.jsonp+"="+h))),b.url=j,b.data=k,a[h]=function(a){g=[a]},d.always(function(){a[h]=i,g&&f.isFunction(i)&&a[h](g[0])}),b.converters["script json"]=function(){g||f.error(h+" was not called");return g[0]},b.dataTypes[0]="json";return"script"}}),f.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){f.globalEval(a);return a}}}),f.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),f.ajaxTransport("script",function(a){if(a.crossDomain){var d,e=c.head||c.getElementsByTagName("head")[0]||c.documentElement;return{send:function(f,g){d=c.createElement("script"),d.async="async",a.scriptCharset&&(d.charset=a.scriptCharset),d.src=a.url,d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState)){d.onload=d.onreadystatechange=null,e&&d.parentNode&&e.removeChild(d),d=b,c||g(200,"success")}},e.insertBefore(d,e.firstChild)},abort:function(){d&&d.onload(0,1)}}}});var cb=a.ActiveXObject?function(){for(var a in cd){cd[a](0,1)}}:!1,cc=0,cd;f.ajaxSettings.xhr=a.ActiveXObject?function(){return !this.isLocal&&ce()||cf()}:ce,function(a){f.extend(f.support,{ajax:!!a,cors:!!a&&"withCredentials" in a})}(f.ajaxSettings.xhr()),f.support.ajax&&f.ajaxTransport(function(c){if(!c.crossDomain||f.support.cors){var d;return{send:function(e,g){var h=c.xhr(),i,j;c.username?h.open(c.type,c.url,c.async,c.username,c.password):h.open(c.type,c.url,c.async);if(c.xhrFields){for(j in c.xhrFields){h[j]=c.xhrFields[j]}}c.mimeType&&h.overrideMimeType&&h.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(j in e){h.setRequestHeader(j,e[j])}}catch(k){}h.send(c.hasContent&&c.data||null),d=function(a,e){var j,k,l,m,n;try{if(d&&(e||h.readyState===4)){d=b,i&&(h.onreadystatechange=f.noop,cb&&delete cd[i]);if(e){h.readyState!==4&&h.abort()}else{j=h.status,l=h.getAllResponseHeaders(),m={},n=h.responseXML,n&&n.documentElement&&(m.xml=n),m.text=h.responseText;try{k=h.statusText}catch(o){k=""}!j&&c.isLocal&&!c.crossDomain?j=m.text?200:404:j===1223&&(j=204)}}}catch(p){e||g(-1,p)}m&&g(j,k,m,l)},!c.async||h.readyState===4?d():(i=++cc,cb&&(cd||(cd={},f(a).unload(cb)),cd[i]=d),h.onreadystatechange=d)},abort:function(){d&&d(0,1)}}}});var cg={},ch,ci,cj=/^(?:toggle|show|hide)$/,ck=/^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,cl,cm=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]],cn;f.fn.extend({show:function(a,b,c){var d,e;if(a||a===0){return this.animate(cq("show",3),a,b,c)}for(var g=0,h=this.length;g<h;g++){d=this[g],d.style&&(e=d.style.display,!f._data(d,"olddisplay")&&e==="none"&&(e=d.style.display=""),e===""&&f.css(d,"display")==="none"&&f._data(d,"olddisplay",cr(d.nodeName)))}for(g=0;g<h;g++){d=this[g];if(d.style){e=d.style.display;if(e===""||e==="none"){d.style.display=f._data(d,"olddisplay")||""}}}return this},hide:function(a,b,c){if(a||a===0){return this.animate(cq("hide",3),a,b,c)}for(var d=0,e=this.length;d<e;d++){if(this[d].style){var g=f.css(this[d],"display");g!=="none"&&!f._data(this[d],"olddisplay")&&f._data(this[d],"olddisplay",g)}}for(d=0;d<e;d++){this[d].style&&(this[d].style.display="none")}return this},_toggle:f.fn.toggle,toggle:function(a,b,c){var d=typeof a=="boolean";f.isFunction(a)&&f.isFunction(b)?this._toggle.apply(this,arguments):a==null||d?this.each(function(){var b=d?a:f(this).is(":hidden");f(this)[b?"show":"hide"]()}):this.animate(cq("toggle",3),a,b,c);return this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=f.speed(b,c,d);if(f.isEmptyObject(a)){return this.each(e.complete,[!1])}a=f.extend({},a);return this[e.queue===!1?"each":"queue"](function(){e.queue===!1&&f._mark(this);var b=f.extend({},e),c=this.nodeType===1,d=c&&f(this).is(":hidden"),g,h,i,j,k,l,m,n,o;b.animatedProperties={};for(i in a){g=f.camelCase(i),i!==g&&(a[g]=a[i],delete a[i]),h=a[g],f.isArray(h)?(b.animatedProperties[g]=h[1],h=a[g]=h[0]):b.animatedProperties[g]=b.specialEasing&&b.specialEasing[g]||b.easing||"swing";if(h==="hide"&&d||h==="show"&&!d){return b.complete.call(this)}c&&(g==="height"||g==="width")&&(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],f.css(this,"display")==="inline"&&f.css(this,"float")==="none"&&(f.support.inlineBlockNeedsLayout?(j=cr(this.nodeName),j==="inline"?this.style.display="inline-block":(this.style.display="inline",this.style.zoom=1)):this.style.display="inline-block"))}b.overflow!=null&&(this.style.overflow="hidden");for(i in a){k=new f.fx(this,b,i),h=a[i],cj.test(h)?k[h==="toggle"?d?"show":"hide":h]():(l=ck.exec(h),m=k.cur(),l?(n=parseFloat(l[2]),o=l[3]||(f.cssNumber[i]?"":"px"),o!=="px"&&(f.style(this,i,(n||1)+o),m=(n||1)/k.cur()*m,f.style(this,i,m+o)),l[1]&&(n=(l[1]==="-="?-1:1)*n+m),k.custom(m,n,o)):k.custom(m,h,""))}return !0})},stop:function(a,b){a&&this.queue([]),this.each(function(){var a=f.timers,c=a.length;b||f._unmark(!0,this);while(c--){a[c].elem===this&&(b&&a[c](!0),a.splice(c,1))}}),b||this.dequeue();return this}}),f.each({slideDown:cq("show",1),slideUp:cq("hide",1),slideToggle:cq("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){f.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),f.extend({speed:function(a,b,c){var d=a&&typeof a=="object"?f.extend({},a):{complete:c||!c&&b||f.isFunction(a)&&a,duration:a,easing:c&&b||b&&!f.isFunction(b)&&b};d.duration=f.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in f.fx.speeds?f.fx.speeds[d.duration]:f.fx.speeds._default,d.old=d.complete,d.complete=function(a){f.isFunction(d.old)&&d.old.call(this),d.queue!==!1?f.dequeue(this):a!==!1&&f._unmark(this)};return d},easing:{linear:function(a,b,c,d){return c+d*a},swing:function(a,b,c,d){return(-Math.cos(a*Math.PI)/2+0.5)*d+c}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig=b.orig||{}}}),f.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(f.fx.step[this.prop]||f.fx.step._default)(this)},cur:function(){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null)){return this.elem[this.prop]}var a,b=f.css(this.elem,this.prop);return isNaN(a=parseFloat(b))?!b||b==="auto"?0:b:a},custom:function(a,b,c){function g(a){return d.step(a)}var d=this,e=f.fx;this.startTime=cn||co(),this.start=a,this.end=b,this.unit=c||this.unit||(f.cssNumber[this.prop]?"":"px"),this.now=this.start,this.pos=this.state=0,g.elem=this.elem,g()&&f.timers.push(g)&&!cl&&(cl=setInterval(e.tick,e.interval))},show:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.show=!0,this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur()),f(this.elem).show()},hide:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b=cn||co(),c=!0,d=this.elem,e=this.options,g,h;if(a||b>=e.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),e.animatedProperties[this.prop]=!0;for(g in e.animatedProperties){e.animatedProperties[g]!==!0&&(c=!1)}if(c){e.overflow!=null&&!f.support.shrinkWrapBlocks&&f.each(["","X","Y"],function(a,b){d.style["overflow"+b]=e.overflow[a]}),e.hide&&f(d).hide();if(e.hide||e.show){for(var i in e.animatedProperties){f.style(d,i,e.orig[i])}}e.complete.call(d)}return !1}e.duration==Infinity?this.now=b:(h=b-this.startTime,this.state=h/e.duration,this.pos=f.easing[e.animatedProperties[this.prop]](this.state,h,0,1,e.duration),this.now=this.start+(this.end-this.start)*this.pos),this.update();return !0}},f.extend(f.fx,{tick:function(){for(var a=f.timers,b=0;b<a.length;++b){a[b]()||a.splice(b--,1)}a.length||f.fx.stop()},interval:13,stop:function(){clearInterval(cl),cl=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){f.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&a.elem.style[a.prop]!=null?a.elem.style[a.prop]=(a.prop==="width"||a.prop==="height"?Math.max(0,a.now):a.now)+a.unit:a.elem[a.prop]=a.now}}}),f.expr&&f.expr.filters&&(f.expr.filters.animated=function(a){return f.grep(f.timers,function(b){return a===b.elem}).length});var cs=/^t(?:able|d|h)$/i,ct=/^(?:body|html)$/i;"getBoundingClientRect" in c.documentElement?f.fn.offset=function(a){var b=this[0],c;if(a){return this.each(function(b){f.offset.setOffset(this,a,b)})}if(!b||!b.ownerDocument){return null}if(b===b.ownerDocument.body){return f.offset.bodyOffset(b)}try{c=b.getBoundingClientRect()}catch(d){}var e=b.ownerDocument,g=e.documentElement;if(!c||!f.contains(g,b)){return c?{top:c.top,left:c.left}:{top:0,left:0}}var h=e.body,i=cu(e),j=g.clientTop||h.clientTop||0,k=g.clientLeft||h.clientLeft||0,l=i.pageYOffset||f.support.boxModel&&g.scrollTop||h.scrollTop,m=i.pageXOffset||f.support.boxModel&&g.scrollLeft||h.scrollLeft,n=c.top+l-j,o=c.left+m-k;return{top:n,left:o}}:f.fn.offset=function(a){var b=this[0];if(a){return this.each(function(b){f.offset.setOffset(this,a,b)})}if(!b||!b.ownerDocument){return null}if(b===b.ownerDocument.body){return f.offset.bodyOffset(b)}f.offset.initialize();var c,d=b.offsetParent,e=b,g=b.ownerDocument,h=g.documentElement,i=g.body,j=g.defaultView,k=j?j.getComputedStyle(b,null):b.currentStyle,l=b.offsetTop,m=b.offsetLeft;while((b=b.parentNode)&&b!==i&&b!==h){if(f.offset.supportsFixedPosition&&k.position==="fixed"){break}c=j?j.getComputedStyle(b,null):b.currentStyle,l-=b.scrollTop,m-=b.scrollLeft,b===d&&(l+=b.offsetTop,m+=b.offsetLeft,f.offset.doesNotAddBorder&&(!f.offset.doesAddBorderForTableAndCells||!cs.test(b.nodeName))&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),e=d,d=b.offsetParent),f.offset.subtractsBorderForOverflowNotVisible&&c.overflow!=="visible"&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),k=c}if(k.position==="relative"||k.position==="static"){l+=i.offsetTop,m+=i.offsetLeft}f.offset.supportsFixedPosition&&k.position==="fixed"&&(l+=Math.max(h.scrollTop,i.scrollTop),m+=Math.max(h.scrollLeft,i.scrollLeft));return{top:l,left:m}},f.offset={initialize:function(){var a=c.body,b=c.createElement("div"),d,e,g,h,i=parseFloat(f.css(a,"marginTop"))||0,j="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";f.extend(b.style,{position:"absolute",top:0,left:0,margin:0,border:0,width:"1px",height:"1px",visibility:"hidden"}),b.innerHTML=j,a.insertBefore(b,a.firstChild),d=b.firstChild,e=d.firstChild,h=d.nextSibling.firstChild.firstChild,this.doesNotAddBorder=e.offsetTop!==5,this.doesAddBorderForTableAndCells=h.offsetTop===5,e.style.position="fixed",e.style.top="20px",this.supportsFixedPosition=e.offsetTop===20||e.offsetTop===15,e.style.position=e.style.top="",d.style.overflow="hidden",d.style.position="relative",this.subtractsBorderForOverflowNotVisible=e.offsetTop===-5,this.doesNotIncludeMarginInBodyOffset=a.offsetTop!==i,a.removeChild(b),f.offset.initialize=f.noop},bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;f.offset.initialize(),f.offset.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(f.css(a,"marginTop"))||0,c+=parseFloat(f.css(a,"marginLeft"))||0);return{top:b,left:c}},setOffset:function(a,b,c){var d=f.css(a,"position");d==="static"&&(a.style.position="relative");var e=f(a),g=e.offset(),h=f.css(a,"top"),i=f.css(a,"left"),j=(d==="absolute"||d==="fixed")&&f.inArray("auto",[h,i])>-1,k={},l={},m,n;j?(l=e.position(),m=l.top,n=l.left):(m=parseFloat(h)||0,n=parseFloat(i)||0),f.isFunction(b)&&(b=b.call(a,c,g)),b.top!=null&&(k.top=b.top-g.top+m),b.left!=null&&(k.left=b.left-g.left+n),"using" in b?b.using.call(a,k):e.css(k)}},f.fn.extend({position:function(){if(!this[0]){return null}var a=this[0],b=this.offsetParent(),c=this.offset(),d=ct.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(f.css(a,"marginTop"))||0,c.left-=parseFloat(f.css(a,"marginLeft"))||0,d.top+=parseFloat(f.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(f.css(b[0],"borderLeftWidth"))||0;return{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||c.body;while(a&&!ct.test(a.nodeName)&&f.css(a,"position")==="static"){a=a.offsetParent}return a})}}),f.each(["Left","Top"],function(a,c){var d="scroll"+c;f.fn[d]=function(c){var e,g;if(c===b){e=this[0];if(!e){return null}g=cu(e);return g?"pageXOffset" in g?g[a?"pageYOffset":"pageXOffset"]:f.support.boxModel&&g.document.documentElement[d]||g.document.body[d]:e[d]}return this.each(function(){g=cu(this),g?g.scrollTo(a?f(g).scrollLeft():c,a?c:f(g).scrollTop()):this[d]=c})}}),f.each(["Height","Width"],function(a,c){var d=c.toLowerCase();f.fn["inner"+c]=function(){var a=this[0];return a&&a.style?parseFloat(f.css(a,d,"padding")):null},f.fn["outer"+c]=function(a){var b=this[0];return b&&b.style?parseFloat(f.css(b,d,a?"margin":"border")):null},f.fn[d]=function(a){var e=this[0];if(!e){return a==null?null:this}if(f.isFunction(a)){return this.each(function(b){var c=f(this);c[d](a.call(this,b,c[d]()))})}if(f.isWindow(e)){var g=e.document.documentElement["client"+c],h=e.document.body;return e.document.compatMode==="CSS1Compat"&&g||h&&h["client"+c]||g}if(e.nodeType===9){return Math.max(e.documentElement["client"+c],e.body["scroll"+c],e.documentElement["scroll"+c],e.body["offset"+c],e.documentElement["offset"+c])}if(a===b){var i=f.css(e,d),j=parseFloat(i);return f.isNaN(j)?i:j}return this.css(d,typeof a=="string"?a:a+"px")}}),a.jQuery=a.$=f})(window);;
/*
 * jQuery UI 1.8.17
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI
 */
(function(D,B){function A(E){return !D(E).parents().andSelf().filter(function(){return D.curCSS(this,"visibility")==="hidden"||D.expr.filters.hidden(this)}).length}function C(H,I){var G=H.nodeName.toLowerCase();if("area"===G){var J=H.parentNode,E=J.name,F;if(!H.href||!E||J.nodeName.toLowerCase()!=="map"){return !1}F=D("img[usemap=#"+E+"]")[0];return !!F&&A(F)}return(/input|select|textarea|button|object/.test(G)?!H.disabled:"a"==G?H.href||I:I)&&A(H)}D.ui=D.ui||{};D.ui.version||(D.extend(D.ui,{version:"1.8.17",keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91}}),D.fn.extend({propAttr:D.fn.prop||D.fn.attr,_focus:D.fn.focus,focus:function(E,F){return typeof E=="number"?this.each(function(){var G=this;setTimeout(function(){D(G).focus(),F&&F.call(G)},E)}):this._focus.apply(this,arguments)},scrollParent:function(){var E;D.browser.msie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?E=this.parents().filter(function(){return/(relative|absolute|fixed)/.test(D.curCSS(this,"position",1))&&/(auto|scroll)/.test(D.curCSS(this,"overflow",1)+D.curCSS(this,"overflow-y",1)+D.curCSS(this,"overflow-x",1))}).eq(0):E=this.parents().filter(function(){return/(auto|scroll)/.test(D.curCSS(this,"overflow",1)+D.curCSS(this,"overflow-y",1)+D.curCSS(this,"overflow-x",1))}).eq(0);return/fixed/.test(this.css("position"))||!E.length?D(document):E},zIndex:function(G){if(G!==B){return this.css("zIndex",G)}if(this.length){var E=D(this[0]),F,H;while(E.length&&E[0]!==document){F=E.css("position");if(F==="absolute"||F==="relative"||F==="fixed"){H=parseInt(E.css("zIndex"),10);if(!isNaN(H)&&H!==0){return H}}E=E.parent()}}return 0},disableSelection:function(){return this.bind((D.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(E){E.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),D.each(["Width","Height"],function(I,F){function E(L,M,K,N){D.each(G,function(){M-=parseFloat(D.curCSS(L,"padding"+this,!0))||0,K&&(M-=parseFloat(D.curCSS(L,"border"+this+"Width",!0))||0),N&&(M-=parseFloat(D.curCSS(L,"margin"+this,!0))||0)});return M}var G=F==="Width"?["Left","Right"]:["Top","Bottom"],J=F.toLowerCase(),H={innerWidth:D.fn.innerWidth,innerHeight:D.fn.innerHeight,outerWidth:D.fn.outerWidth,outerHeight:D.fn.outerHeight};D.fn["inner"+F]=function(K){if(K===B){return H["inner"+F].call(this)}return this.each(function(){D(this).css(J,E(this,K)+"px")})},D.fn["outer"+F]=function(K,L){if(typeof K!="number"){return H["outer"+F].call(this,K)}return this.each(function(){D(this).css(J,E(this,K,!0,L)+"px")})}}),D.extend(D.expr[":"],{data:function(F,G,E){return !!D.data(F,E[3])},focusable:function(E){return C(E,!isNaN(D.attr(E,"tabindex")))},tabbable:function(G){var E=D.attr(G,"tabindex"),F=isNaN(E);return(F||E>=0)&&C(G,!F)}}),D(function(){var E=document.body,F=E.appendChild(F=document.createElement("div"));D.extend(F.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0}),D.support.minHeight=F.offsetHeight===100,D.support.selectstart="onselectstart" in F,E.removeChild(F).style.display="none"}),D.extend(D.ui,{plugin:{add:function(G,H,E){var F=D.ui[G].prototype;for(var I in E){F.plugins[I]=F.plugins[I]||[],F.plugins[I].push([H,E[I]])}},call:function(I,G,H){var E=I.plugins[G];if(!!E&&!!I.element[0].parentNode){for(var F=0;F<E.length;F++){I.options[E[F][0]]&&E[F][1].apply(I.element,H)}}}},contains:function(F,E){return document.compareDocumentPosition?F.compareDocumentPosition(E)&16:F!==E&&F.contains(E)},hasScroll:function(G,H){if(D(G).css("overflow")==="hidden"){return !1}var E=H&&H==="left"?"scrollLeft":"scrollTop",F=!1;if(G[E]>0){return !0}G[E]=1,F=G[E]>0,G[E]=0;return F},isOverAxis:function(G,E,F){return G>E&&G<E+F},isOver:function(H,I,F,G,J,E){return D.ui.isOverAxis(H,F,J)&&D.ui.isOverAxis(I,G,E)}}))})(jQuery);
/*
 * jQuery UI Widget 1.8.17
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Widget
 */
(function(D,B){if(D.cleanData){var C=D.cleanData;D.cleanData=function(G){for(var E=0,F;(F=G[E])!=null;E++){try{D(F).triggerHandler("remove")}catch(H){}}C(G)}}else{var A=D.fn.remove;D.fn.remove=function(E,F){return this.each(function(){F||(!E||D.filter(E,[this]).length)&&D("*",this).add([this]).each(function(){try{D(this).triggerHandler("remove")}catch(G){}});return A.call(D(this),E,F)})}}D.widget=function(H,I,F){var G=H.split(".")[0],J;H=H.split(".")[1],J=G+"-"+H,F||(F=I,I=D.Widget),D.expr[":"][J]=function(K){return !!D.data(K,H)},D[G]=D[G]||{},D[G][H]=function(L,K){arguments.length&&this._createWidget(L,K)};var E=new I;E.options=D.extend(!0,{},E.options),D[G][H].prototype=D.extend(!0,E,{namespace:G,widgetName:H,widgetEventPrefix:D[G][H].prototype.widgetEventPrefix||H,widgetBaseClass:J},F),D.widget.bridge(H,D[G][H])},D.widget.bridge=function(F,E){D.fn[F]=function(I){var J=typeof I=="string",G=Array.prototype.slice.call(arguments,1),H=this;I=!J&&G.length?D.extend.apply(null,[!0,I].concat(G)):I;if(J&&I.charAt(0)==="_"){return H}J?this.each(function(){var K=D.data(this,F),L=K&&D.isFunction(K[I])?K[I].apply(K,G):K;if(L!==K&&L!==B){H=L;return !1}}):this.each(function(){var K=D.data(this,F);K?K.option(I||{})._init():D.data(this,F,new E(I,this))});return H}},D.Widget=function(F,E){arguments.length&&this._createWidget(F,E)},D.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:!1},_createWidget:function(F,G){D.data(G,this.widgetName,this),this.element=D(G),this.options=D.extend(!0,{},this.options,this._getCreateOptions(),F);var E=this;this.element.bind("remove."+this.widgetName,function(){E.destroy()}),this._create(),this._trigger("create"),this._init()},_getCreateOptions:function(){return D.metadata&&D.metadata.get(this.element[0])[this.widgetName]},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName),this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled ui-state-disabled")},widget:function(){return this.element},option:function(G,E){var F=G;if(arguments.length===0){return D.extend({},this.options)}if(typeof G=="string"){if(E===B){return this.options[G]}F={},F[G]=E}this._setOptions(F);return this},_setOptions:function(E){var F=this;D.each(E,function(H,G){F._setOption(H,G)});return this},_setOption:function(F,E){this.options[F]=E,F==="disabled"&&this.widget()[E?"addClass":"removeClass"](this.widgetBaseClass+"-disabled ui-state-disabled").attr("aria-disabled",E);return this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_trigger:function(H,I,F){var G,J,E=this.options[H];F=F||{},I=D.Event(I),I.type=(H===this.widgetEventPrefix?H:this.widgetEventPrefix+H).toLowerCase(),I.target=this.element[0],J=I.originalEvent;if(J){for(G in J){G in I||(I[G]=J[G])}}this.element.trigger(I,F);return !(D.isFunction(E)&&E.call(this.element[0],I,F)===!1||I.isDefaultPrevented())}}})(jQuery);
/*
 * jQuery UI Mouse 1.8.17
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Mouse
 *
 * Depends:
 *	jquery.ui.widget.js
 */
(function(C,A){var B=!1;C(document).mouseup(function(D){B=!1}),C.widget("ui.mouse",{options:{cancel:":input,option",distance:1,delay:0},_mouseInit:function(){var D=this;this.element.bind("mousedown."+this.widgetName,function(E){return D._mouseDown(E)}).bind("click."+this.widgetName,function(E){if(!0===C.data(E.target,D.widgetName+".preventClickEvent")){C.removeData(E.target,D.widgetName+".preventClickEvent"),E.stopImmediatePropagation();return !1}}),this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName)},_mouseDown:function(F){if(!B){this._mouseStarted&&this._mouseUp(F),this._mouseDownEvent=F;var D=this,E=F.which==1,G=typeof this.options.cancel=="string"&&F.target.nodeName?C(F.target).closest(this.options.cancel).length:!1;if(!E||G||!this._mouseCapture(F)){return !0}this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){D.mouseDelayMet=!0},this.options.delay));if(this._mouseDistanceMet(F)&&this._mouseDelayMet(F)){this._mouseStarted=this._mouseStart(F)!==!1;if(!this._mouseStarted){F.preventDefault();return !0}}!0===C.data(F.target,this.widgetName+".preventClickEvent")&&C.removeData(F.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(H){return D._mouseMove(H)},this._mouseUpDelegate=function(H){return D._mouseUp(H)},C(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate),F.preventDefault(),B=!0;return !0}},_mouseMove:function(D){if(C.browser.msie&&!(document.documentMode>=9)&&!D.button){return this._mouseUp(D)}if(this._mouseStarted){this._mouseDrag(D);return D.preventDefault()}this._mouseDistanceMet(D)&&this._mouseDelayMet(D)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,D)!==!1,this._mouseStarted?this._mouseDrag(D):this._mouseUp(D));return !this._mouseStarted},_mouseUp:function(D){C(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,D.target==this._mouseDownEvent.target&&C.data(D.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(D));return !1},_mouseDistanceMet:function(D){return Math.max(Math.abs(this._mouseDownEvent.pageX-D.pageX),Math.abs(this._mouseDownEvent.pageY-D.pageY))>=this.options.distance},_mouseDelayMet:function(D){return this.mouseDelayMet},_mouseStart:function(D){},_mouseDrag:function(D){},_mouseStop:function(D){},_mouseCapture:function(D){return !0}})})(jQuery);(function(B,A){B.widget("ui.draggable",B.ui.mouse,{widgetEventPrefix:"drag",options:{addClasses:true,appendTo:"parent",axis:false,connectToSortable:false,containment:false,cursor:"auto",cursorAt:false,grid:false,handle:false,helper:"original",iframeFix:false,opacity:false,refreshPositions:false,revert:false,revertDuration:500,scope:"default",scroll:true,scrollSensitivity:20,scrollSpeed:20,snap:false,snapMode:"both",snapTolerance:20,stack:false,zIndex:false,concernAngle:false},_create:function(){if(this.options.helper=="original"&&!(/^(?:r|a|f)/).test(this.element.css("position"))){this.element[0].style.position="relative"}(this.options.addClasses&&this.element.addClass("ui-draggable"));(this.options.disabled&&this.element.addClass("ui-draggable-disabled"));this._mouseInit()},destroy:function(){if(!this.element.data("draggable")){return}this.element.removeData("draggable").unbind(".draggable").removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled");this._mouseDestroy();return this},_mouseCapture:function(D){var C=this.options;if(this.helper||C.disabled||B(D.target).is(".ui-resizable-handle,.ui-resizable-handle>.knob")){return false}this.handle=this._getHandle(D);if(!this.handle){return false}if(C.iframeFix){B(C.iframeFix===true?"iframe":C.iframeFix).each(function(){B('<div class="ui-draggable-iframeFix" style="background: #fff;"></div>').css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1000}).css(B(this).offset()).appendTo("body")})}return true},_mouseStart:function(E){var D=this.options;this.helper=this._createHelper(E);this._cacheHelperProportions();if(B.ui.ddmanager){B.ui.ddmanager.current=this}this._cacheMargins();this.cssPosition=this.helper.css("position");this.scrollParent=this.helper.scrollParent();this.offset=this.positionAbs=this.element.offset();if(D.concernAngle){var C=this.element.parent().offset();this.offset=this.positionAbs={left:C.left+B.parseInteger(this.element.parent().css("borderLeftWidth"))+B.parseInteger(this.element.css("left")),top:C.top+B.parseInteger(this.element.parent().css("borderTopWidth"))+B.parseInteger(this.element.css("top"))}}this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};B.extend(this.offset,{click:{left:E.pageX-this.offset.left,top:E.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.originalPosition=this.position=this._generatePosition(E);this.originalPageX=E.pageX;this.originalPageY=E.pageY;(D.cursorAt&&this._adjustOffsetFromHelper(D.cursorAt));if(D.containment){this._setContainment()}if(this._trigger("start",E)===false){this._clear();return false}this._cacheHelperProportions();if(B.ui.ddmanager&&!D.dropBehaviour){B.ui.ddmanager.prepareOffsets(this,E)}this.helper.addClass("ui-draggable-dragging");this._mouseDrag(E,true);if(B.ui.ddmanager){B.ui.ddmanager.dragStart(this,E)}return true},_mouseDrag:function(E,D){this.position=this._generatePosition(E);this.positionAbs=this._convertPositionTo("absolute");if(!D){var C=this._uiHash();if(this._trigger("drag",E,C)===false){this._mouseUp({});return false}this.position=C.position}if(!this.options.axis||this.options.axis!="y"){this.helper[0].style.left=this.position.left+"px"}if(!this.options.axis||this.options.axis!="x"){this.helper[0].style.top=this.position.top+"px"}if(B.ui.ddmanager){B.ui.ddmanager.drag(this,E)}return false},_mouseStop:function(E){var D=false;if(B.ui.ddmanager&&!this.options.dropBehaviour){D=B.ui.ddmanager.drop(this,E)}if(this.dropped){D=this.dropped;this.dropped=false}if((!this.element[0]||!this.element[0].parentNode)&&this.options.helper=="original"){return false}if((this.options.revert=="invalid"&&!D)||(this.options.revert=="valid"&&D)||this.options.revert===true||(B.isFunction(this.options.revert)&&this.options.revert.call(this.element,D))){var C=this;B(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){if(C._trigger("stop",E)!==false){C._clear()}})}else{if(this._trigger("stop",E)!==false){this._clear()}}return false},_mouseUp:function(C){if(this.options.iframeFix===true){B("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)})}if(B.ui.ddmanager){B.ui.ddmanager.dragStop(this,C)}return B.ui.mouse.prototype._mouseUp.call(this,C)},cancel:function(){if(this.helper.is(".ui-draggable-dragging")){this._mouseUp({})}else{this._clear()}return this},_getHandle:function(D){var C=!this.options.handle||!B(this.options.handle,this.element).length?true:false;B(this.options.handle,this.element).find("*").andSelf().each(function(){if(this==D.target){C=true}});return C},_createHelper:function(D){var C=this.options;var E=B.isFunction(C.helper)?B(C.helper.apply(this.element[0],[D])):(C.helper=="clone"?this.element.clone().removeAttr("id"):this.element);if(!E.parents("body").length){E.appendTo((C.appendTo=="parent"?this.element[0].parentNode:C.appendTo))}if(E[0]!=this.element[0]&&!(/(fixed|absolute)/).test(E.css("position"))){E.css("position","absolute")}return E},_adjustOffsetFromHelper:function(C){if(typeof C=="string"){C=C.split(" ")}if(B.isArray(C)){C={left:+C[0],top:+C[1]||0}}if("left" in C){this.offset.click.left=C.left+this.margins.left}if("right" in C){this.offset.click.left=this.helperProportions.width-C.right+this.margins.left}if("top" in C){this.offset.click.top=C.top+this.margins.top}if("bottom" in C){this.offset.click.top=this.helperProportions.height-C.bottom+this.margins.top}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var C=this.offsetParent.offset();if(this.cssPosition=="absolute"&&this.scrollParent[0]!=document&&B.ui.contains(this.scrollParent[0],this.offsetParent[0])){C.left+=this.scrollParent.scrollLeft();C.top+=this.scrollParent.scrollTop()}if((this.offsetParent[0]==document.body)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()=="html"&&B.browser.msie)){C={top:0,left:0}}return{top:C.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:C.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition=="relative"){var C=this.element.position();return{top:C.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:C.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}else{return{top:0,left:0}}},_cacheMargins:function(){this.margins={left:(parseInt(this.element.css("marginLeft"),10)||0),top:(parseInt(this.element.css("marginTop"),10)||0),right:(parseInt(this.element.css("marginRight"),10)||0),bottom:(parseInt(this.element.css("marginBottom"),10)||0)}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var D=this.options;if(D.containment=="parent"){D.containment=this.helper[0].parentNode}if(D.containment=="document"||D.containment=="window"){this.containment=[D.containment=="document"?0:B(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,D.containment=="document"?0:B(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,(D.containment=="document"?0:B(window).scrollLeft())+B(D.containment=="document"?document:window).width()-this.helperProportions.width-this.margins.left,(D.containment=="document"?0:B(window).scrollTop())+(B(D.containment=="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]}if(!(/^(document|window|parent)$/).test(D.containment)&&D.containment.constructor!=Array){var F=B(D.containment);var G=F[0];if(!G){return}var C=F.offset();var E=(B(G).css("overflow")!="hidden");this.containment=[(parseInt(B(G).css("borderLeftWidth"),10)||0)+(parseInt(B(G).css("paddingLeft"),10)||0),(parseInt(B(G).css("borderTopWidth"),10)||0)+(parseInt(B(G).css("paddingTop"),10)||0),(E?Math.max(G.scrollWidth,G.offsetWidth):G.offsetWidth)-(parseInt(B(G).css("borderLeftWidth"),10)||0)-(parseInt(B(G).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(E?Math.max(G.scrollHeight,G.offsetHeight):G.offsetHeight)-(parseInt(B(G).css("borderTopWidth"),10)||0)-(parseInt(B(G).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom];this.relative_container=F}else{if(D.containment.constructor==Array){this.containment=D.containment}}},_convertPositionTo:function(C,E){if(!E){E=this.position}var H=C=="absolute"?1:-1;var D=this.options,G=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&B.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,F=(/(html|body)/i).test(G[0].tagName);return{top:(E.top+this.offset.relative.top*H+this.offset.parent.top*H-(B.browser.safari&&B.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(F?0:G.scrollTop()))*H)),left:(E.left+this.offset.relative.left*H+this.offset.parent.left*H-(B.browser.safari&&B.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():F?0:G.scrollLeft())*H))}},_generatePosition:function(G){var K=this.options,L=this.cssPosition=="absolute"&&!(this.scrollParent[0]!=document&&B.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,C=(/(html|body)/i).test(L[0].tagName);var I=G.pageX;var H=G.pageY;if(this.originalPosition){var J;if(this.containment){if(this.relative_container){var F=this.relative_container.offset();J=[this.containment[0]+F.left,this.containment[1]+F.top,this.containment[2]+F.left,this.containment[3]+F.top]}else{J=this.containment}if(G.pageX-this.offset.click.left<J[0]){I=J[0]+this.offset.click.left}if(G.pageY-this.offset.click.top<J[1]){H=J[1]+this.offset.click.top}if(G.pageX-this.offset.click.left>J[2]){I=J[2]+this.offset.click.left}if(G.pageY-this.offset.click.top>J[3]){H=J[3]+this.offset.click.top}}if(K.grid){var D=K.grid[1]?this.originalPageY+Math.round((H-this.originalPageY)/K.grid[1])*K.grid[1]:this.originalPageY;H=J?(!(D-this.offset.click.top<J[1]||D-this.offset.click.top>J[3])?D:(!(D-this.offset.click.top<J[1])?D-K.grid[1]:D+K.grid[1])):D;var E=K.grid[0]?this.originalPageX+Math.round((I-this.originalPageX)/K.grid[0])*K.grid[0]:this.originalPageX;I=J?(!(E-this.offset.click.left<J[0]||E-this.offset.click.left>J[2])?E:(!(E-this.offset.click.left<J[0])?E-K.grid[0]:E+K.grid[0])):E}}return{top:(H-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(B.browser.safari&&B.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(C?0:L.scrollTop())))),left:(I-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(B.browser.safari&&B.browser.version<526&&this.cssPosition=="fixed"?0:(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():C?0:L.scrollLeft())))}},_clear:function(){this.helper.removeClass("ui-draggable-dragging");if(this.helper[0]!=this.element[0]&&!this.cancelHelperRemoval){this.helper.remove()}this.helper=null;this.cancelHelperRemoval=false},_trigger:function(C,E,D){D=D||this._uiHash();B.ui.plugin.call(this,C,[E,D]);if(C=="drag"){this.positionAbs=this._convertPositionTo("absolute")}return B.Widget.prototype._trigger.call(this,C,E,D)},plugins:{},_uiHash:function(C){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}});B.extend(B.ui.draggable,{version:"1.8.17"});B.ui.plugin.add("draggable","connectToSortable",{start:function(F,C){var E=B(this).data("draggable"),D=E.options,G=B.extend({},C,{item:E.element});E.sortables=[];B(D.connectToSortable).each(function(){var H=B.data(this,"sortable");if(H&&!H.options.disabled){E.sortables.push({instance:H,shouldRevert:H.options.revert});H.refreshPositions();H._trigger("activate",F,G)}})},stop:function(E,C){var D=B(this).data("draggable"),F=B.extend({},C,{item:D.element});B.each(D.sortables,function(){if(this.instance.isOver){this.instance.isOver=0;D.cancelHelperRemoval=true;this.instance.cancelHelperRemoval=false;if(this.shouldRevert){this.instance.options.revert=true}this.instance._mouseStop(E);this.instance.options.helper=this.instance.options._helper;if(D.options.helper=="original"){this.instance.currentItem.css({top:"auto",left:"auto"})}}else{this.instance.cancelHelperRemoval=false;this.instance._trigger("deactivate",E,F)}})},drag:function(G,C){var F=B(this).data("draggable"),D=this;var E=function(L){var M=this.offset.click.top,J=this.offset.click.left;var O=this.positionAbs.top,N=this.positionAbs.left;var I=L.height,P=L.width;var K=L.top,H=L.left;return B.ui.isOver(O+M,N+J,K,H,I,P)};B.each(F.sortables,function(H){this.instance.positionAbs=F.positionAbs;this.instance.helperProportions=F.helperProportions;this.instance.offset.click=F.offset.click;if(this.instance._intersectsWith(this.instance.containerCache)){if(!this.instance.isOver){this.instance.isOver=1;this.instance.currentItem=B(D).clone().removeAttr("id").appendTo(this.instance.element).data("sortable-item",true);this.instance.options._helper=this.instance.options.helper;this.instance.options.helper=function(){return C.helper[0]};G.target=this.instance.currentItem[0];this.instance._mouseCapture(G,true);this.instance._mouseStart(G,true,true);this.instance.offset.click.top=F.offset.click.top;this.instance.offset.click.left=F.offset.click.left;this.instance.offset.parent.left-=F.offset.parent.left-this.instance.offset.parent.left;this.instance.offset.parent.top-=F.offset.parent.top-this.instance.offset.parent.top;F._trigger("toSortable",G);F.dropped=this.instance.element;F.currentItem=F.element;this.instance.fromOutside=F}if(this.instance.currentItem){this.instance._mouseDrag(G)}}else{if(this.instance.isOver){this.instance.isOver=0;this.instance.cancelHelperRemoval=true;this.instance.options.revert=false;this.instance._trigger("out",G,this.instance._uiHash(this.instance));this.instance._mouseStop(G,true);this.instance.options.helper=this.instance.options._helper;this.instance.currentItem.remove();if(this.instance.placeholder){this.instance.placeholder.remove()}F._trigger("fromSortable",G);F.dropped=false}}})}});B.ui.plugin.add("draggable","cursor",{start:function(E,C){var F=B("body"),D=B(this).data("draggable").options;if(F.css("cursor")){D._cursor=F.css("cursor")}F.css("cursor",D.cursor)},stop:function(E,C){var D=B(this).data("draggable").options;if(D._cursor){B("body").css("cursor",D._cursor)}}});B.ui.plugin.add("draggable","opacity",{start:function(E,C){var F=B(C.helper),D=B(this).data("draggable").options;if(F.css("opacity")){D._opacity=F.css("opacity")}F.css("opacity",D.opacity)},stop:function(E,C){var D=B(this).data("draggable").options;if(D._opacity){B(C.helper).css("opacity",D._opacity)}}});B.ui.plugin.add("draggable","scroll",{start:function(E,C){var D=B(this).data("draggable");if(D.scrollParent[0]!=document&&D.scrollParent[0].tagName!="HTML"){D.overflowOffset=D.scrollParent.offset()}},drag:function(G,C){var D=B(this).data("draggable"),E=D.options,F=false;if(D.scrollParent[0]!=document&&D.scrollParent[0].tagName!="HTML"){if(!E.axis||E.axis!="x"){if((D.overflowOffset.top+D.scrollParent[0].offsetHeight)-G.pageY<E.scrollSensitivity){D.scrollParent[0].scrollTop=F=D.scrollParent[0].scrollTop+E.scrollSpeed}else{if(G.pageY-D.overflowOffset.top<E.scrollSensitivity){D.scrollParent[0].scrollTop=F=D.scrollParent[0].scrollTop-E.scrollSpeed}}}if(!E.axis||E.axis!="y"){if((D.overflowOffset.left+D.scrollParent[0].offsetWidth)-G.pageX<E.scrollSensitivity){D.scrollParent[0].scrollLeft=F=D.scrollParent[0].scrollLeft+E.scrollSpeed}else{if(G.pageX-D.overflowOffset.left<E.scrollSensitivity){D.scrollParent[0].scrollLeft=F=D.scrollParent[0].scrollLeft-E.scrollSpeed}}}}else{if(!E.axis||E.axis!="x"){if(G.pageY-B(document).scrollTop()<E.scrollSensitivity){F=B(document).scrollTop(B(document).scrollTop()-E.scrollSpeed)}else{if(B(window).height()-(G.pageY-B(document).scrollTop())<E.scrollSensitivity){F=B(document).scrollTop(B(document).scrollTop()+E.scrollSpeed)}}}if(!E.axis||E.axis!="y"){if(G.pageX-B(document).scrollLeft()<E.scrollSensitivity){F=B(document).scrollLeft(B(document).scrollLeft()-E.scrollSpeed)}else{if(B(window).width()-(G.pageX-B(document).scrollLeft())<E.scrollSensitivity){F=B(document).scrollLeft(B(document).scrollLeft()+E.scrollSpeed)}}}}if(F!==false&&B.ui.ddmanager&&!E.dropBehaviour){B.ui.ddmanager.prepareOffsets(D,G)}}});B.ui.plugin.add("draggable","snap",{start:function(F,C){var D=B(this).data("draggable"),E=D.options;D.snapElements=[];B(E.snap.constructor!=String?(E.snap.items||":data(draggable)"):E.snap).each(function(){var H=B(this);var G=H.offset();if(this!=D.element[0]){D.snapElements.push({item:this,width:H.outerWidth(),height:H.outerHeight(),top:G.top,left:G.left})}})},drag:function(O,G){var L=B(this).data("draggable"),J=L.options;var N=J.snapTolerance;var Q=G.offset.left,S=Q+L.helperProportions.width,R=G.offset.top,T=R+L.helperProportions.height;for(var H=L.snapElements.length-1;H>=0;H--){var K=L.snapElements[H].left,C=K+L.snapElements[H].width,F=L.snapElements[H].top,M=F+L.snapElements[H].height;if(!((K-N<Q&&Q<C+N&&F-N<R&&R<M+N)||(K-N<Q&&Q<C+N&&F-N<T&&T<M+N)||(K-N<S&&S<C+N&&F-N<R&&R<M+N)||(K-N<S&&S<C+N&&F-N<T&&T<M+N))){if(L.snapElements[H].snapping){(L.options.snap.release&&L.options.snap.release.call(L.element,O,B.extend(L._uiHash(),{snapItem:L.snapElements[H].item})))}L.snapElements[H].snapping=false;continue}if(J.snapMode!="inner"){var E=Math.abs(F-T)<=N;var I=Math.abs(M-R)<=N;var P=Math.abs(K-S)<=N;var U=Math.abs(C-Q)<=N;if(E){G.position.top=L._convertPositionTo("relative",{top:F-L.helperProportions.height,left:0}).top-L.margins.top}if(I){G.position.top=L._convertPositionTo("relative",{top:M,left:0}).top-L.margins.top}if(P){G.position.left=L._convertPositionTo("relative",{top:0,left:K-L.helperProportions.width}).left-L.margins.left}if(U){G.position.left=L._convertPositionTo("relative",{top:0,left:C}).left-L.margins.left}}var D=(E||I||P||U);if(J.snapMode!="outer"){var E=Math.abs(F-R)<=N;var I=Math.abs(M-T)<=N;var P=Math.abs(K-Q)<=N;var U=Math.abs(C-S)<=N;if(E){G.position.top=L._convertPositionTo("relative",{top:F,left:0}).top-L.margins.top}if(I){G.position.top=L._convertPositionTo("relative",{top:M-L.helperProportions.height,left:0}).top-L.margins.top}if(P){G.position.left=L._convertPositionTo("relative",{top:0,left:K}).left-L.margins.left}if(U){G.position.left=L._convertPositionTo("relative",{top:0,left:C-L.helperProportions.width}).left-L.margins.left}}if(!L.snapElements[H].snapping&&(E||I||P||U||D)){(L.options.snap.snap&&L.options.snap.snap.call(L.element,O,B.extend(L._uiHash(),{snapItem:L.snapElements[H].item})))}L.snapElements[H].snapping=(E||I||P||U||D)}}});B.ui.plugin.add("draggable","stack",{start:function(F,C){var E=B(this).data("draggable").options;var D=B.makeArray(B(E.stack)).sort(function(I,H){return(parseInt(B(I).css("zIndex"),10)||0)-(parseInt(B(H).css("zIndex"),10)||0)});if(!D.length){return}var G=parseInt(D[0].style.zIndex)||0;B(D).each(function(H){this.style.zIndex=G+H});this[0].style.zIndex=G+D.length}});B.ui.plugin.add("draggable","zIndex",{start:function(E,C){var F=B(C.helper),D=B(this).data("draggable").options;if(F.css("zIndex")){D._zIndex=F.css("zIndex")}F.css("zIndex",D.zIndex)},stop:function(E,C){var D=B(this).data("draggable").options;if(D._zIndex){B(C.helper).css("zIndex",D._zIndex)}}})})(jQuery);(function(B,A){B.widget("ui.droppable",{widgetEventPrefix:"drop",options:{accept:"*",activeClass:!1,addClasses:!0,greedy:!1,hoverClass:!1,scope:"default",tolerance:"intersect"},_create:function(){var C=this.options,D=C.accept;this.isover=0,this.isout=1,this.accept=B.isFunction(D)?D:function(E){return E.is(D)},this.proportions={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight},B.ui.ddmanager.droppables[C.scope]=B.ui.ddmanager.droppables[C.scope]||[],B.ui.ddmanager.droppables[C.scope].push(this),C.addClasses&&this.element.addClass("ui-droppable")},destroy:function(){var C=B.ui.ddmanager.droppables[this.options.scope];for(var D=0;D<C.length;D++){C[D]==this&&C.splice(D,1)}this.element.removeClass("ui-droppable ui-droppable-disabled").removeData("droppable").unbind(".droppable");return this},_setOption:function(C,D){C=="accept"&&(this.accept=B.isFunction(D)?D:function(E){return E.is(D)}),B.Widget.prototype._setOption.apply(this,arguments)},_activate:function(C){var D=B.ui.ddmanager.current;this.options.activeClass&&this.element.addClass(this.options.activeClass),D&&this._trigger("activate",C,this.ui(D))},_deactivate:function(C){var D=B.ui.ddmanager.current;this.options.activeClass&&this.element.removeClass(this.options.activeClass),D&&this._trigger("deactivate",C,this.ui(D))},_over:function(C){var D=B.ui.ddmanager.current;!!D&&(D.currentItem||D.element)[0]!=this.element[0]&&this.accept.call(this.element[0],D.currentItem||D.element)&&(this.options.hoverClass&&this.element.addClass(this.options.hoverClass),this._trigger("over",C,this.ui(D)))},_out:function(C){var D=B.ui.ddmanager.current;!!D&&(D.currentItem||D.element)[0]!=this.element[0]&&this.accept.call(this.element[0],D.currentItem||D.element)&&(this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("out",C,this.ui(D)))},_drop:function(E,F){var C=F||B.ui.ddmanager.current;if(!C||(C.currentItem||C.element)[0]==this.element[0]){return !1}var D=!1;this.element.find(":data(droppable)").not(".ui-draggable-dragging").each(function(){var G=B.data(this,"droppable");if(G.options.greedy&&!G.options.disabled&&G.options.scope==C.options.scope&&G.accept.call(G.element[0],C.currentItem||C.element)&&B.ui.intersect(C,B.extend(G,{offset:G.element.offset()}),G.options.tolerance)){D=!0;return !1}});if(D){return !1}if(this.accept.call(this.element[0],C.currentItem||C.element)){this.options.activeClass&&this.element.removeClass(this.options.activeClass),this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("drop",E,this.ui(C));return this.element}return !1},ui:function(C){return{draggable:C.currentItem||C.element,helper:C.helper,position:C.position,offset:C.positionAbs}}}),B.extend(B.ui.droppable,{version:"1.8.17"}),B.ui.intersect=function(L,M,P){if(!M.offset){return !1}var C=(L.positionAbs||L.position.absolute).left,N=C+L.helperProportions.width,O=(L.positionAbs||L.position.absolute).top,F=O+L.helperProportions.height,G=M.offset.left,D=G+M.proportions.width,E=M.offset.top,J=E+M.proportions.height;switch(P){case"fit":return G<=C&&N<=D&&E<=O&&F<=J;case"intersect":return G<C+L.helperProportions.width/2&&N-L.helperProportions.width/2<D&&E<O+L.helperProportions.height/2&&F-L.helperProportions.height/2<J;case"pointer":var K=(L.positionAbs||L.position.absolute).left+(L.clickOffset||L.offset.click).left,H=(L.positionAbs||L.position.absolute).top+(L.clickOffset||L.offset.click).top,I=B.ui.isOver(H,K,E,G,M.proportions.height,M.proportions.width);return I;case"touch":return(O>=E&&O<=J||F>=E&&F<=J||O<E&&F>J)&&(C>=G&&C<=D||N>=G&&N<=D||C<G&&N>D);default:return !1}},B.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(G,H){var D=B.ui.ddmanager.droppables[G.options.scope]||[],E=H?H.type:null,I=(G.currentItem||G.element).find(":data(droppable)").andSelf();droppablesLoop:for(var C=0;C<D.length;C++){if(D[C].options.disabled||G&&!D[C].accept.call(D[C].element[0],G.currentItem||G.element)){continue}for(var F=0;F<I.length;F++){if(I[F]==D[C].element[0]){D[C].proportions.height=0;continue droppablesLoop}}D[C].visible=D[C].element.css("display")!="none";if(!D[C].visible){continue}E=="mousedown"&&D[C]._activate.call(D[C],H),D[C].offset=D[C].element.offset(),D[C].proportions={width:D[C].element[0].offsetWidth,height:D[C].element[0].offsetHeight}}},drop:function(D,E){var C=!1;B.each(B.ui.ddmanager.droppables[D.options.scope]||[],function(){!this.options||(!this.options.disabled&&this.visible&&B.ui.intersect(D,this,this.options.tolerance)&&(C=this._drop.call(this,E)||C),!this.options.disabled&&this.visible&&this.accept.call(this.element[0],D.currentItem||D.element)&&(this.isout=1,this.isover=0,this._deactivate.call(this,E)))});return C},dragStart:function(C,D){C.element.parents(":not(body,html)").bind("scroll.droppable",function(){C.options.refreshPositions||B.ui.ddmanager.prepareOffsets(C,D)})},drag:function(C,D){C.options.refreshPositions&&B.ui.ddmanager.prepareOffsets(C,D),B.each(B.ui.ddmanager.droppables[C.options.scope]||[],function(){if(!(this.options.disabled||this.greedyChild||!this.visible)){var F=B.ui.intersect(C,this,this.options.tolerance),G=!F&&this.isover==1?"isout":F&&this.isover==0?"isover":null;if(!G){return}var H;if(this.options.greedy){var E=this.element.parents(":data(droppable):eq(0)");E.length&&(H=B.data(E[0],"droppable"),H.greedyChild=G=="isover"?1:0)}H&&G=="isover"&&(H.isover=0,H.isout=1,H._out.call(H,D)),this[G]=1,this[G=="isout"?"isover":"isout"]=0,this[G=="isover"?"_over":"_out"].call(this,D),H&&G=="isout"&&(H.isout=0,H.isover=1,H._over.call(H,D))}})},dragStop:function(C,D){C.element.parents(":not(body,html)").unbind("scroll.droppable"),C.options.refreshPositions||B.ui.ddmanager.prepareOffsets(C,D)}}})(jQuery);(function(D,B){D.widget("ui.resizable",D.ui.mouse,{widgetEventPrefix:"resize",options:{alsoResize:false,animate:false,animateDuration:"slow",animateEasing:"swing",aspectRatio:false,aspectFunc:false,autoHide:false,containment:false,ghost:false,grid:false,handles:"e,s,se",helper:false,scroll:false,scrollSensitivity:20,scrollSpeed:20,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:1000,concernAngle:false,concernLock:false},_create:function(){var G=this,H=this.options;this.element.addClass("ui-resizable");D.extend(this,{_aspectRatio:!!(H.aspectRatio),aspectRatio:H.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:H.helper||H.ghost||H.animate?H.helper||"ui-resizable-helper":null});if(this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)){if(/relative/.test(this.element.css("position"))&&D.browser.opera){this.element.css({position:"relative",top:"auto",left:"auto"})}this.element.wrap(D('<div class="ui-wrapper" style="overflow: hidden;"></div>').css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")}));this.element=this.element.parent().data("resizable",this.element.data("resizable"));this.elementIsWrapper=true;this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")});this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0});this.originalResizeStyle=this.originalElement.css("resize");this.originalElement.css("resize","none");this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"}));this.originalElement.css({margin:this.originalElement.css("margin")});this._proportionallyResize()}this.handles=H.handles||(!D(".ui-resizable-handle",this.element).length?"e,s,se":{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"});if(this.handles.constructor==String){if(this.handles=="all"){this.handles="n,e,s,w,se,sw,ne,nw"}var I=this.handles.split(",");this.handles={};for(var F=0;F<I.length;F++){var E=D.trim(I[F]),J="ui-resizable-"+E;var K=D('<div class="ui-resizable-handle '+J+'"></div>');if(/sw|se|ne|nw/.test(E)){K.css({zIndex:++H.zIndex})}if("se"==E){K.addClass("ui-icon ui-icon-gripsmall-diagonal-se")}this.handles[E]=".ui-resizable-"+E;this.element.append(K)}}this._renderAxis=function(O){O=O||this.element;for(var L in this.handles){if(this.handles[L].constructor==String){this.handles[L]=D(this.handles[L],this.element).show()}if(this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)){var P=D(this.handles[L],this.element),N=0;N=/sw|ne|nw|se|n|s/.test(L)?P.outerHeight():P.outerWidth();var M=["padding",/ne|nw|n/.test(L)?"Top":/se|sw|s/.test(L)?"Bottom":/^e$/.test(L)?"Right":"Left"].join("");O.css(M,N);this._proportionallyResize()}if(!D(this.handles[L]).length){continue}}};this._renderAxis(this.element);this._handles=D(".ui-resizable-handle",this.element).disableSelection();this._handles.mouseover(function(){if(!G.resizing){if(this.className){var L=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)}G.axis=L&&L[1]?L[1]:"se"}});if(H.autoHide){this._handles.hide();D(this.element).addClass("ui-resizable-autohide").hover(function(){if(H.disabled){return}D(this).removeClass("ui-resizable-autohide");G._handles.show()},function(){if(H.disabled){return}if(!G.resizing){D(this).addClass("ui-resizable-autohide");G._handles.hide()}})}this._mouseInit()},destroy:function(){this._mouseDestroy();var F=function(G){D(G).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};if(this.elementIsWrapper){F(this.element);var E=this.element;E.after(this.originalElement.css({position:E.css("position"),width:E.outerWidth(),height:E.outerHeight(),top:E.css("top"),left:E.css("left")})).remove()}this.originalElement.css("resize",this.originalResizeStyle);F(this.originalElement);return this},_mouseCapture:function(G){var E=false;for(var F in this.handles){if(D(this.handles[F])[0]==G.target||D(this.handles[F])[0]==G.target.parentNode){E=true}}var H=true;if(this.options.concernLock&&this.element.data("cstlayerstatus")=="unlock"){H=false}return !this.options.disabled&&E&&H},_mouseStart:function(I){var G=this.options,H=this.element.position(),E=this.element;this.resizing=true;this.documentScroll={top:D(document).scrollTop(),left:D(document).scrollLeft()};if(!G.concernAngle&&!G.noinit){if(E.is(".ui-draggable")||(/absolute/).test(E.css("position"))){E.css({position:"absolute",top:H.top,left:H.left})}}if(D.browser.opera&&(/relative/).test(E.css("position"))){E.css({position:"relative",top:"auto",left:"auto"})}this._renderProxy();var K=C(this.helper.css("left")),J=C(this.helper.css("top"));if(G.containment){K+=D(G.containment).scrollLeft()||0;J+=D(G.containment).scrollTop()||0}this.offset=this.helper.offset();this.position={left:K,top:J};if(D.browser.msie&&D.browser.version<9&&E.data("deg")%360!=0){this.size={width:E.data("IEWidth"),height:E.data("IEHeight")}}else{this.size=this._helper?{width:E.outerWidth(),height:E.outerHeight()}:{width:E.width(),height:E.height()}}this.originalSize=this._helper?{width:E.outerWidth(),height:E.outerHeight()}:{width:E.width(),height:E.height()};this.originalPosition={left:K,top:J};this.sizeDiff={width:E.outerWidth()-E.width(),height:E.outerHeight()-E.height()};this.originalMousePosition={left:I.pageX,top:I.pageY};if(G.scroll&&(!G.concernAngle||G.concernAngle&&!this.element.data("deg"))){this.scrollParent=this.element.scrollParent();this.originalMousePosition.top+=this.scrollParent.scrollTop()}this.aspectRatio=(typeof G.aspectRatio=="number")?G.aspectRatio:((this.originalSize.width/this.originalSize.height)||1);if(G.concernAngle){D.divrotate.getDegreeResizeCursor(this.element)}var F=this.element.find(".ui-resizable-"+this.axis).css("cursor");D("body").css("cursor",F=="auto"?this.axis+"-resize":F);E.addClass("ui-resizable-resizing");this._propagate("start",I);return true},_mouseDrag:function(H){var J=this.helper,L=this.options,I={},O=this,R=this.originalMousePosition,Q=this.axis;var K=H.pageY;if(L.scroll&&(!L.concernAngle||L.concernAngle&&!this.element.data("deg"))){K+=this.scrollParent.scrollTop()}var N=(H.pageX-R.left)||0,M=(K-R.top)||0;var E=this._change[Q];if(!E){return false}var G=E.apply(this,[H,N,M]),F=D.browser.msie&&D.browser.version<7,P=this.sizeDiff;this._updateVirtualBoundaries(H.shiftKey);if(!D.isFunction(L.aspectFunc)&&(this._aspectRatio||H.shiftKey)){G=this._updateRatio(G,H)}else{if(D.isFunction(L.aspectFunc)){G=this._updateAFunc(G,H)}}G=this._respectSize(G,H);this._propagate("resize",H);J.css({top:this.position.top+"px",left:this.position.left+"px",width:this.size.width+"px",height:this.size.height+"px"});if(!this._helper&&this._proportionallyResizeElements.length){this._proportionallyResize()}this._updateCache(G);this._trigger("resize",H,this.ui());return false},_mouseStop:function(I){this.resizing=false;var M=this.options,K=this;if(this._helper){var F=this._proportionallyResizeElements,E=F.length&&(/textarea/i).test(F[0].nodeName),L=E&&D.ui.hasScroll(F[0],"left")?0:K.sizeDiff.height,N=E?0:K.sizeDiff.width;var G={width:(K.helper.width()-N),height:(K.helper.height()-L)},H=(parseInt(K.element.css("left"),10)+(K.position.left-K.originalPosition.left))||null,J=(parseInt(K.element.css("top"),10)+(K.position.top-K.originalPosition.top))||null;if(!M.animate){this.element.css(D.extend(G,{top:J,left:H}))}K.helper.height(K.size.height);K.helper.width(K.size.width);if(this._helper&&!M.animate){this._proportionallyResize()}}D("body").css("cursor","auto");this.element.removeClass("ui-resizable-resizing");this._propagate("stop",I);if(this._helper){this.helper.remove()}return false},_updateVirtualBoundaries:function(H){var E=this.options,I,J,G,F,K;K={minWidth:A(E.minWidth)?E.minWidth:0,maxWidth:A(E.maxWidth)?E.maxWidth:Infinity,minHeight:A(E.minHeight)?E.minHeight:0,maxHeight:A(E.maxHeight)?E.maxHeight:Infinity};if(this._aspectRatio||H){I=K.minHeight*this.aspectRatio;G=K.minWidth/this.aspectRatio;J=K.maxHeight*this.aspectRatio;F=K.maxWidth/this.aspectRatio;if(I>K.minWidth){K.minWidth=I}if(G>K.minHeight){K.minHeight=G}if(J<K.maxWidth){K.maxWidth=J}if(F<K.maxHeight){K.maxHeight=F}}this._vBoundaries=K},_updateCache:function(F){var E=this.options;this.offset=this.helper.offset();if(A(F.left)){this.position.left=F.left}if(A(F.top)){this.position.top=F.top}if(A(F.height)){this.size.height=F.height}if(A(F.width)){this.size.width=F.width}},_updateRatio:function(J,G){var F=this.options,H=this.position,E=this.size,I=this.axis;if(A(J.height)){J.width=(J.height*this.aspectRatio)}else{if(A(J.width)){J.height=(J.width/this.aspectRatio)}}if(I=="sw"){J.left=H.left+(E.width-J.width);J.top=null}if(I=="nw"){J.top=H.top+(E.height-J.height);J.left=H.left+(E.width-J.width)}return J},_updateAFunc:function(G,H){var K=this.options,E=this.position,F=this.size,L=this.axis;var I=this.element;var J=K.aspectFunc;if(A(G.height)){G.width=J(I,G.height,"height")}else{if(A(G.width)){G.height=J(I,G.width,"width")}}if(L=="sw"){G.left=E.left+(F.width-G.width);G.top=null}if(L=="nw"){G.top=E.top+(F.height-G.height);G.left=E.left+(F.width-G.width)}return G},_respectSize:function(I,K){var M=this.helper,O=this._vBoundaries,N=this._aspectRatio||K.shiftKey,S=this.axis,L=A(I.width)&&O.maxWidth&&(O.maxWidth<I.width),F=A(I.height)&&O.maxHeight&&(O.maxHeight<I.height),H=A(I.width)&&O.minWidth&&(O.minWidth>I.width),G=A(I.height)&&O.minHeight&&(O.minHeight>I.height);if(H){I.width=O.minWidth}if(G){I.height=O.minHeight}if(L){I.width=O.maxWidth}if(F){I.height=O.maxHeight}var J=this.originalPosition.left+this.originalSize.width,P=this.position.top+this.size.height;var E=/sw|nw|w/.test(S),R=/nw|ne|n/.test(S);if(H&&E){I.left=J-O.minWidth}if(L&&E){I.left=J-O.maxWidth}if(G&&R){I.top=P-O.minHeight}if(F&&R){I.top=P-O.maxHeight}var Q=!I.width&&!I.height;if(Q&&!I.left&&I.top){I.top=null}else{if(Q&&!I.top&&I.left){I.left=null}}return I},_proportionallyResize:function(){var F=this.options;if(!this._proportionallyResizeElements.length){return}var I=this.helper||this.element;for(var E=0;E<this._proportionallyResizeElements.length;E++){var J=this._proportionallyResizeElements[E];if(!this.borderDif){var H=[J.css("borderTopWidth"),J.css("borderRightWidth"),J.css("borderBottomWidth"),J.css("borderLeftWidth")],G=[J.css("paddingTop"),J.css("paddingRight"),J.css("paddingBottom"),J.css("paddingLeft")];this.borderDif=D.map(H,function(N,L){var K=parseInt(N,10)||0,M=parseInt(G[L],10)||0;return K+M})}if(D.browser.msie&&!(!(D(I).is(":hidden")||D(I).parents(":hidden").length))){continue}J.css({height:(I.height()-this.borderDif[0]-this.borderDif[2])||0,width:(I.width()-this.borderDif[1]-this.borderDif[3])||0})}},_renderProxy:function(){var E=this.element,F=this.options;this.elementOffset=E.offset();if(this._helper){this.helper=this.helper||D('<div style="overflow:hidden;"></div>');var G=D.browser.msie&&D.browser.version<7,I=(G?1:0),H=(G?2:-1);this.helper.addClass(this._helper).css({width:this.element.outerWidth()+H,height:this.element.outerHeight()+H,position:"absolute",left:this.elementOffset.left-I+"px",top:this.elementOffset.top-I+"px",zIndex:++F.zIndex});this.helper.appendTo("body").disableSelection()}else{this.helper=this.element}},_change:{e:function(I,G,E){var F=this.options,J=this.originalSize,H=this.originalPosition;if(F.concernAngle&&this.element.data("deg")){return D.divrotate.getDegreeResizeChange(this.element,[G,E],H,J,"e")}return{width:this.originalSize.width+G}},w:function(I,G,E){var F=this.options,J=this.originalSize,H=this.originalPosition;if(F.concernAngle&&this.element.data("deg")){return D.divrotate.getDegreeResizeChange(this.element,[G,E],H,J,"w")}return{left:H.left+G,width:J.width-G}},n:function(I,G,E){var F=this.options,J=this.originalSize,H=this.originalPosition;if(F.concernAngle&&this.element.data("deg")){return D.divrotate.getDegreeResizeChange(this.element,[G,E],H,J,"n")}else{return{top:H.top+E,height:J.height-E}}},s:function(I,G,E){var F=this.options,J=this.originalSize,H=this.originalPosition;if(F.concernAngle&&this.element.data("deg")){return D.divrotate.getDegreeResizeChange(this.element,[G,E],H,J,"s")}return{height:this.originalSize.height+E}},se:function(G,F,E){return D.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[G,F,E]))},sw:function(G,F,E){return D.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[G,F,E]))},ne:function(G,F,E){return D.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[G,F,E]))},nw:function(G,M,L){var J=this.options,E=this.originalSize,F=this.originalPosition;if(J.concernAngle&&this.element.data("deg")){var K=F.left,H=F.top;var I=this._change.n.apply(this,arguments);var N=this._change.w.apply(this,arguments);var O=D.extend({},I,N);O.left=I.left+N.left-K;O.top=I.top+N.top-H;return O}return D.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[G,M,L]))}},_propagate:function(E,F){D.ui.plugin.call(this,E,[F,this.ui()]);(E!="resize"&&this._trigger(E,F,this.ui()))},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}});D.extend(D.ui.resizable,{version:"1.8.17"});D.ui.plugin.add("resizable","alsoResize",{start:function(H,E){var F=D(this).data("resizable"),G=F.options;var I=function(J){D(J).each(function(){var K=D(this);K.data("resizable-alsoresize",{width:parseInt(K.width(),10),height:parseInt(K.height(),10),left:parseInt(K.css("left"),10),top:parseInt(K.css("top"),10),position:K.css("position")})})};if(typeof(G.alsoResize)=="object"&&!G.alsoResize.parentNode){if(G.alsoResize.length){G.alsoResize=G.alsoResize[0];I(G.alsoResize)}else{D.each(G.alsoResize,function(J){I(J)})}}else{I(G.alsoResize)}},resize:function(G,E){var H=D(this).data("resizable"),I=H.options,L=H.originalSize,K=H.originalPosition;var J={height:(H.size.height-L.height)||0,width:(H.size.width-L.width)||0,top:(H.position.top-K.top)||0,left:(H.position.left-K.left)||0},F=function(M,N){D(M).each(function(){var O=D(this),R=D(this).data("resizable-alsoresize"),P={},Q=N&&N.length?N:O.parents(E.originalElement[0]).length?["width","height"]:["width","height","top","left"];D.each(Q,function(S,T){var U=(R[T]||0)+(J[T]||0);if(U&&U>=0){P[T]=U||null}});if(D.browser.opera&&/relative/.test(O.css("position"))){H._revertToRelativePosition=true;O.css({position:"absolute",top:"auto",left:"auto"})}O.css(P)})};if(typeof(I.alsoResize)=="object"&&!I.alsoResize.nodeType){D.each(I.alsoResize,function(M,N){F(M,N)})}else{F(I.alsoResize)}},stop:function(H,E){var F=D(this).data("resizable"),G=F.options;var I=function(J){D(J).each(function(){var K=D(this);K.css({position:K.data("resizable-alsoresize").position})})};if(F._revertToRelativePosition){F._revertToRelativePosition=false;if(typeof(G.alsoResize)=="object"&&!G.alsoResize.nodeType){D.each(G.alsoResize,function(J){I(J)})}else{I(G.alsoResize)}}D(this).removeData("resizable-alsoresize")}});D.ui.plugin.add("resizable","animate",{stop:function(H,G){var N=D(this).data("resizable"),M=N.options;var F=N._proportionallyResizeElements,E=F.length&&(/textarea/i).test(F[0].nodeName),L=E&&D.ui.hasScroll(F[0],"left")?0:N.sizeDiff.height,O=E?0:N.sizeDiff.width;var K={width:(N.size.width-O),height:(N.size.height-L)},J=(parseInt(N.element.css("left"),10)+(N.position.left-N.originalPosition.left))||null,I=(parseInt(N.element.css("top"),10)+(N.position.top-N.originalPosition.top))||null;N.element.animate(D.extend(K,I&&J?{top:I,left:J}:{}),{duration:M.animateDuration,easing:M.animateEasing,step:function(){var P={width:parseInt(N.element.css("width"),10),height:parseInt(N.element.css("height"),10),top:parseInt(N.element.css("top"),10),left:parseInt(N.element.css("left"),10)};if(F&&F.length){D(F[0]).css({width:P.width,height:P.height})}N._updateCache(P);N._propagate("resize",H)}})}});D.ui.plugin.add("resizable","containment",{start:function(J,G){var N=D(this).data("resizable"),L=N.options,K=N.element;var Q=L.containment,O=(Q instanceof D)?Q.get(0):(/parent/.test(Q))?K.parent().get(0):Q;if(!O){return}N.containerElement=D(O);if(/document/.test(Q)||Q==document){N.containerOffset={left:0,top:0};N.containerPosition={left:0,top:0};N.parentData={element:D(document),left:0,top:0,width:D(document).width(),height:D(document).height()||document.body.parentNode.scrollHeight}}else{var F=D(O),H=[];D(["Top","Right","Left","Bottom"]).each(function(S,T){H[S]=C(F.css("padding"+T))});N.containerOffset=F.offset();N.containerPosition=F.position();N.containerSize={height:(F.innerHeight()-H[3]),width:(F.innerWidth()-H[1])};var I=N.containerOffset,E=N.containerSize.height,P=N.containerSize.width,M=(D.ui.hasScroll(O,"left")?O.scrollWidth:P),R=(D.ui.hasScroll(O)?O.scrollHeight:E);N.parentData={element:O,left:I.left,top:I.top,width:M,height:R}}},resize:function(K,H){var P=D(this).data("resizable"),O=P.options,M=P.containerSize,J=P.containerOffset,G=P.size,S=P.position,N=P._aspectRatio||K.shiftKey,L={top:0,left:0},Q=P.containerElement;if(Q[0]!=document&&(/static/).test(Q.css("position"))){L=J}if(S.left<(P._helper?J.left:0)){P.size.width=P.size.width+(P._helper?(P.position.left-J.left):(P.position.left-L.left));if(N){P.size.height=P.size.width/O.aspectRatio}P.position.left=O.helper?J.left:0}if(S.top<(P._helper?J.top:0)){P.size.height=P.size.height+(P._helper?(P.position.top-J.top):P.position.top);if(N){P.size.width=P.size.height*O.aspectRatio}P.position.top=P._helper?J.top:0}P.offset.left=P.parentData.left+P.position.left;P.offset.top=P.parentData.top+P.position.top;var I=Math.abs((P._helper?P.offset.left-L.left:(P.offset.left-L.left))+P.sizeDiff.width),E=Math.abs((P._helper?P.offset.top-L.top:(P.offset.top-J.top))+P.sizeDiff.height);var F=P.containerElement.get(0)==P.element.parent().get(0),R=/relative|absolute/.test(P.containerElement.css("position"));if(F&&R){I-=P.parentData.left}if(I+P.size.width>=P.parentData.width){P.size.width=P.parentData.width-I;if(N){P.size.height=P.size.width/P.aspectRatio}}if(E+P.size.height>=P.parentData.height){P.size.height=P.parentData.height-E;if(N){P.size.width=P.size.height*P.aspectRatio}}},stop:function(I,F){var M=D(this).data("resizable"),K=M.options,P=M.position,H=M.containerOffset,J=M.containerPosition,N=M.containerElement;var O=D(M.helper),E=O.offset(),G=O.outerWidth()-M.sizeDiff.width,L=O.outerHeight()-M.sizeDiff.height;if(M._helper&&!K.animate&&(/relative/).test(N.css("position"))){D(this).css({left:E.left-J.left-H.left,width:G,height:L})}if(M._helper&&!K.animate&&(/static/).test(N.css("position"))){D(this).css({left:E.left-J.left-H.left,width:G,height:L})}}});D.ui.plugin.add("resizable","scroll",{start:function(G,E){var F=D(this).data("resizable");o=F.options;if(o.scroll&&(!o.concernAngle||o.concernAngle&&!F.element.data("deg"))){F.scrollout=1;if(F.scrollParent[0]!=document&&F.scrollParent[0].tagName!="HTML"){F.overflowOffset=F.scrollParent.offset()}}},resize:function(G,F){var J=D(this).data("resizable"),I=J.options,E=false;if(I.scroll&&(!I.concernAngle||I.concernAngle&&!J.element.data("deg"))){if(J.scrollParent[0]!=document&&J.scrollParent[0].tagName!="HTML"){var L=J.scrollParent[0].scrollTop;J.element.data("resize_oriscrolltop",L);var H=J.lastheightval||0;if((J.axis=="s"||J.axis=="n")&&H-J.size.height!=0){J.lastheightval=J.size.height;var K=0;var M=function(N){K=J.scrollParent[0].scrollTop-L;if(J.axis=="s"){if(J.scrollout==1){J.size.height+=K;J.scrollout=N}else{J.size.height+=K*2}}else{if(J.scrollout==1){J.size.height-=K;J.position.top+=K;J.scrollout=N}else{J.size.height-=K*2;J.position.top+=K*2}}};if((J.overflowOffset.top+J.scrollParent[0].offsetHeight)-G.pageY<I.scrollSensitivity){J.scrollParent[0].scrollTop=E=L+I.scrollSpeed;M(2)}else{if(G.pageY-J.overflowOffset.top<I.scrollSensitivity){J.scrollParent[0].scrollTop=E=L-I.scrollSpeed;M(3)}else{J.scrollout=1}}}}}}});D.ui.plugin.add("resizable","ghost",{start:function(H,E){var F=D(this).data("resizable"),G=F.options,I=F.size;F.ghost=F.originalElement.clone();F.ghost.css({opacity:0.25,display:"block",position:"relative",height:I.height,width:I.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass(typeof G.ghost=="string"?G.ghost:"");F.ghost.appendTo(F.helper)},resize:function(H,E){var F=D(this).data("resizable"),G=F.options;if(F.ghost){F.ghost.css({position:"relative",height:F.size.height,width:F.size.width})}},stop:function(H,E){var F=D(this).data("resizable"),G=F.options;if(F.ghost&&F.helper){F.helper.get(0).removeChild(F.ghost.get(0))}}});D.ui.plugin.add("resizable","grid",{resize:function(I,F){var L=D(this).data("resizable"),K=L.options,E=L.size,O=L.originalSize,M=L.originalPosition,N=L.axis,J=K._aspectRatio||I.shiftKey;K.grid=typeof K.grid=="number"?[K.grid,K.grid]:K.grid;var H=Math.round((E.width-O.width)/(K.grid[0]||1))*(K.grid[0]||1),G=Math.round((E.height-O.height)/(K.grid[1]||1))*(K.grid[1]||1);if(/^(se|s|e)$/.test(N)){L.size.width=O.width+H;L.size.height=O.height+G}else{if(/^(ne)$/.test(N)){L.size.width=O.width+H;L.size.height=O.height+G;L.position.top=M.top-G}else{if(/^(sw)$/.test(N)){L.size.width=O.width+H;L.size.height=O.height+G;L.position.left=M.left-H}else{L.size.width=O.width+H;L.size.height=O.height+G;L.position.top=M.top-G;L.position.left=M.left-H}}}}});var C=function(E){return parseInt(E,10)||0};var A=function(E){return !isNaN(parseInt(E,10))}})(jQuery);(function(C,A){var B=5;C.widget("ui.slider",C.ui.mouse,{widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null},_create:function(){var I=this,E=this.options,F=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),J="<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>",D=E.values&&E.values.length||1,G=[];this._keySliding=!1,this._mouseSliding=!1,this._animateOff=!0,this._handleIndex=null,this._detectOrientation(),this._mouseInit(),this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget ui-widget-content ui-corner-all"+(E.disabled?" ui-slider-disabled ui-disabled":"")),this.range=C([]),E.range&&(E.range===!0&&(E.values||(E.values=[this._valueMin(),this._valueMin()]),E.values.length&&E.values.length!==2&&(E.values=[E.values[0],E.values[0]])),this.range=C("<div></div>").appendTo(this.element).addClass("ui-slider-range ui-widget-header"+(E.range==="min"||E.range==="max"?" ui-slider-range-"+E.range:"")));for(var H=F.length;H<D;H+=1){G.push(J)}this.handles=F.add(C(G.join("")).appendTo(I.element)),this.handle=this.handles.eq(0),this.handles.add(this.range).filter("a").click(function(K){K.preventDefault()}).hover(function(){E.disabled||C(this).addClass("ui-state-hover")},function(){C(this).removeClass("ui-state-hover")}).focus(function(){E.disabled?C(this).blur():(C(".ui-slider .ui-state-focus").removeClass("ui-state-focus"),C(this).addClass("ui-state-focus"))}).blur(function(){C(this).removeClass("ui-state-focus")}),this.handles.each(function(K){C(this).data("index.ui-slider-handle",K)}),this.handles.keydown(function(L){var M=!0,Q=C(this).data("index.ui-slider-handle"),K,N,O,P;if(!I.options.disabled){switch(L.keyCode){case C.ui.keyCode.HOME:case C.ui.keyCode.END:case C.ui.keyCode.PAGE_UP:case C.ui.keyCode.PAGE_DOWN:case C.ui.keyCode.UP:case C.ui.keyCode.RIGHT:case C.ui.keyCode.DOWN:case C.ui.keyCode.LEFT:M=!1;if(!I._keySliding){I._keySliding=!0,C(this).addClass("ui-state-active"),K=I._start(L,Q);if(K===!1){return}}}P=I.options.step,I.options.values&&I.options.values.length?N=O=I.values(Q):N=O=I.value();switch(L.keyCode){case C.ui.keyCode.HOME:O=I._valueMin();break;case C.ui.keyCode.END:O=I._valueMax();break;case C.ui.keyCode.PAGE_UP:O=I._trimAlignValue(N+(I._valueMax()-I._valueMin())/B);break;case C.ui.keyCode.PAGE_DOWN:O=I._trimAlignValue(N-(I._valueMax()-I._valueMin())/B);break;case C.ui.keyCode.UP:case C.ui.keyCode.RIGHT:if(N===I._valueMax()){return}O=I._trimAlignValue(N+P);break;case C.ui.keyCode.DOWN:case C.ui.keyCode.LEFT:if(N===I._valueMin()){return}O=I._trimAlignValue(N-P)}I._slide(L,Q,O);return M}}).keyup(function(L){var K=C(this).data("index.ui-slider-handle");I._keySliding&&(I._keySliding=!1,I._stop(L,K),I._change(L,K),C(this).removeClass("ui-state-active"))}),this._refreshValue(),this._animateOff=!1},destroy:function(){this.handles.remove(),this.range.remove(),this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-slider-disabled ui-widget ui-widget-content ui-corner-all").removeData("slider").unbind(".slider"),this._mouseDestroy();return this},_mouseCapture:function(J){var K=this.options,N,D,L,M,G,H,E,F,I;if(K.disabled){return !1}this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),N={x:J.pageX,y:J.pageY},D=this._normValueFromMouse(N),L=this._valueMax()-this._valueMin()+1,G=this,this.handles.each(function(O){var P=Math.abs(D-G.values(O));L>P&&(L=P,M=C(this),H=O)}),K.range===!0&&this.values(1)===K.min&&(H+=1,M=C(this.handles[H])),E=this._start(J,H);if(E===!1){return !1}this._mouseSliding=!0,G._handleIndex=H,M.addClass("ui-state-active").focus(),F=M.offset(),I=!C(J.target).parents().andSelf().is(".ui-slider-handle"),this._clickOffset=I?{left:0,top:0}:{left:J.pageX-F.left-M.width()/2,top:J.pageY-F.top-M.height()/2-(parseInt(M.css("borderTopWidth"),10)||0)-(parseInt(M.css("borderBottomWidth"),10)||0)+(parseInt(M.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(J,H,D),this._animateOff=!0;return !0},_mouseStart:function(D){return !0},_mouseDrag:function(F){var D={x:F.pageX,y:F.pageY},E=this._normValueFromMouse(D);this._slide(F,this._handleIndex,E);return !1},_mouseStop:function(D){this.handles.removeClass("ui-state-active"),this._mouseSliding=!1,this._stop(D,this._handleIndex),this._change(D,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1;return !1},_detectOrientation:function(){this.orientation=this.options.orientation==="vertical"?"vertical":"horizontal"},_normValueFromMouse:function(H){var F,G,D,E,I;this.orientation==="horizontal"?(F=this.elementSize.width,G=H.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(F=this.elementSize.height,G=H.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),D=G/F,D>1&&(D=1),D<0&&(D=0),this.orientation==="vertical"&&(D=1-D),E=this._valueMax()-this._valueMin(),I=this._valueMin()+D*E;return this._trimAlignValue(I)},_start:function(F,D){var E={handle:this.handles[D],value:this.value()};this.options.values&&this.options.values.length&&(E.value=this.values(D),E.values=this.values());return this._trigger("start",F,E)},_slide:function(H,F,G){var D,E,I;this.options.values&&this.options.values.length?(D=this.values(F?0:1),this.options.values.length===2&&this.options.range===!0&&(F===0&&G>D||F===1&&G<D)&&(G=D),G!==this.values(F)&&(E=this.values(),E[F]=G,I=this._trigger("slide",H,{handle:this.handles[F],value:G,values:E}),D=this.values(F?0:1),I!==!1&&this.values(F,G,!0))):G!==this.value()&&(I=this._trigger("slide",H,{handle:this.handles[F],value:G}),I!==!1&&this.value(G))},_stop:function(F,D){var E={handle:this.handles[D],value:this.value()};this.options.values&&this.options.values.length&&(E.value=this.values(D),E.values=this.values()),this._trigger("stop",F,E)},_change:function(F,D){if(!this._keySliding&&!this._mouseSliding){var E={handle:this.handles[D],value:this.value()};this.options.values&&this.options.values.length&&(E.value=this.values(D),E.values=this.values()),this._trigger("change",F,E)}},value:function(D){if(arguments.length){this.options.value=this._trimAlignValue(D),this._refreshValue(),this._change(null,0)}else{return this._value()}},values:function(F,G){var D,E,H;if(arguments.length>1){this.options.values[F]=this._trimAlignValue(G),this._refreshValue(),this._change(null,F)}else{if(!arguments.length){return this._values()}if(!C.isArray(arguments[0])){return this.options.values&&this.options.values.length?this._values(F):this.value()}D=this.options.values,E=arguments[0];for(H=0;H<D.length;H+=1){D[H]=this._trimAlignValue(E[H]),this._change(null,H)}this._refreshValue()}},_setOption:function(F,G){var D,E=0;C.isArray(this.options.values)&&(E=this.options.values.length),C.Widget.prototype._setOption.apply(this,arguments);switch(F){case"disabled":G?(this.handles.filter(".ui-state-focus").blur(),this.handles.removeClass("ui-state-hover"),this.handles.propAttr("disabled",!0),this.element.addClass("ui-disabled")):(this.handles.propAttr("disabled",!1),this.element.removeClass("ui-disabled"));break;case"orientation":this._detectOrientation(),this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation),this._refreshValue();break;case"value":this._animateOff=!0,this._refreshValue(),this._change(null,0),this._animateOff=!1;break;case"values":this._animateOff=!0,this._refreshValue();for(D=0;D<E;D+=1){this._change(null,D)}this._animateOff=!1}},_value:function(){var D=this.options.value;D=this._trimAlignValue(D);return D},_values:function(G){var E,F,D;if(arguments.length){E=this.options.values[G],E=this._trimAlignValue(E);return E}F=this.options.values.slice();for(D=0;D<F.length;D+=1){F[D]=this._trimAlignValue(F[D])}return F},_trimAlignValue:function(G){if(G<=this._valueMin()){return this._valueMin()}if(G>=this._valueMax()){return this._valueMax()}var E=this.options.step>0?this.options.step:1,F=(G-this._valueMin())%E,D=G-F;Math.abs(F)*2>=E&&(D+=F>0?E:-E);return parseFloat(D.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var I=this.options.range,J=this.options,M=this,D=this._animateOff?!1:J.animate,K,L={},G,H,E,F;this.options.values&&this.options.values.length?this.handles.each(function(O,N){K=(M.values(O)-M._valueMin())/(M._valueMax()-M._valueMin())*100,L[M.orientation==="horizontal"?"left":"bottom"]=K+"%",C(this).stop(1,1)[D?"animate":"css"](L,J.animate),M.options.range===!0&&(M.orientation==="horizontal"?(O===0&&M.range.stop(1,1)[D?"animate":"css"]({left:K+"%"},J.animate),O===1&&M.range[D?"animate":"css"]({width:K-G+"%"},{queue:!1,duration:J.animate})):(O===0&&M.range.stop(1,1)[D?"animate":"css"]({bottom:K+"%"},J.animate),O===1&&M.range[D?"animate":"css"]({height:K-G+"%"},{queue:!1,duration:J.animate}))),G=K}):(H=this.value(),E=this._valueMin(),F=this._valueMax(),K=F!==E?(H-E)/(F-E)*100:0,L[M.orientation==="horizontal"?"left":"bottom"]=K+"%",this.handle.stop(1,1)[D?"animate":"css"](L,J.animate),I==="min"&&this.orientation==="horizontal"&&this.range.stop(1,1)[D?"animate":"css"]({width:K+"%"},J.animate),I==="max"&&this.orientation==="horizontal"&&this.range[D?"animate":"css"]({width:100-K+"%"},{queue:!1,duration:J.animate}),I==="min"&&this.orientation==="vertical"&&this.range.stop(1,1)[D?"animate":"css"]({height:K+"%"},J.animate),I==="max"&&this.orientation==="vertical"&&this.range[D?"animate":"css"]({height:100-K+"%"},{queue:!1,duration:J.animate}))}}),C.extend(C.ui.slider,{version:"1.8.17"})})(jQuery);(function(E,C){E.ui=E.ui||{};var D=/left|center|right/,H=/top|center|bottom/,A="center",F={},G=E.fn.position,B=E.fn.offset;E.fn.position=function(P){if(!P||!P.of){return G.apply(this,arguments)}P=E.extend({},P);var K=E(P.of),L=K[0],I=(P.collision||"flip").split(" "),J=P.offset?P.offset.split(" "):[0,0],N,O,M;L.nodeType===9?(N=K.width(),O=K.height(),M={top:0,left:0}):L.setTimeout?(N=K.width(),O=K.height(),M={top:K.scrollTop(),left:K.scrollLeft()}):L.preventDefault?(P.at="left top",N=O=0,M={top:P.of.pageY,left:P.of.pageX}):(N=K.outerWidth(),O=K.outerHeight(),M=K.offset()),E.each(["my","at"],function(){var Q=(P[this]||"").split(" ");Q.length===1&&(Q=D.test(Q[0])?Q.concat([A]):H.test(Q[0])?[A].concat(Q):[A,A]),Q[0]=D.test(Q[0])?Q[0]:A,Q[1]=H.test(Q[1])?Q[1]:A,P[this]=Q}),I.length===1&&(I[1]=I[0]),J[0]=parseInt(J[0],10)||0,J.length===1&&(J[1]=J[0]),J[1]=parseInt(J[1],10)||0,P.at[0]==="right"?M.left+=N:P.at[0]===A&&(M.left+=N/2),P.at[1]==="bottom"?M.top+=O:P.at[1]===A&&(M.top+=O/2),M.left+=J[0],M.top+=J[1];return this.each(function(){var W=E(this),Y=W.outerWidth(),X=W.outerHeight(),T=parseInt(E.curCSS(this,"marginLeft",!0))||0,U=parseInt(E.curCSS(this,"marginTop",!0))||0,V=Y+T+(parseInt(E.curCSS(this,"marginRight",!0))||0),R=X+U+(parseInt(E.curCSS(this,"marginBottom",!0))||0),S=E.extend({},M),Q;P.my[0]==="right"?S.left-=Y:P.my[0]===A&&(S.left-=Y/2),P.my[1]==="bottom"?S.top-=X:P.my[1]===A&&(S.top-=X/2),F.fractions||(S.left=Math.round(S.left),S.top=Math.round(S.top)),Q={left:S.left-T,top:S.top-U},E.each(["left","top"],function(a,Z){E.ui.position[I[a]]&&E.ui.position[I[a]][Z](S,{targetWidth:N,targetHeight:O,elemWidth:Y,elemHeight:X,collisionPosition:Q,collisionWidth:V,collisionHeight:R,offset:J,my:P.my,at:P.at})}),E.fn.bgiframe&&W.bgiframe(),W.offset(E.extend(S,{using:P.using}))})},E.ui.position={fit:{left:function(K,L){var I=E(window),J=L.collisionPosition.left+L.collisionWidth-I.width()-I.scrollLeft();K.left=J>0?K.left-J:Math.max(K.left-L.collisionPosition.left,K.left)},top:function(K,L){var I=E(window),J=L.collisionPosition.top+L.collisionHeight-I.height()-I.scrollTop();K.top=J>0?K.top-J:Math.max(K.top-L.collisionPosition.top,K.top)}},flip:{left:function(M,N){if(N.at[0]!==A){var J=E(window),O=N.collisionPosition.left+N.collisionWidth-J.width()-J.scrollLeft(),I=N.my[0]==="left"?-N.elemWidth:N.my[0]==="right"?N.elemWidth:0,K=N.at[0]==="left"?N.targetWidth:-N.targetWidth,L=-2*N.offset[0];M.left+=N.collisionPosition.left<0?I+K+L:O>0?I+K+L:0}},top:function(M,N){if(N.at[1]!==A){var J=E(window),O=N.collisionPosition.top+N.collisionHeight-J.height()-J.scrollTop(),I=N.my[1]==="top"?-N.elemHeight:N.my[1]==="bottom"?N.elemHeight:0,K=N.at[1]==="top"?N.targetHeight:-N.targetHeight,L=-2*N.offset[1];M.top+=N.collisionPosition.top<0?I+K+L:O>0?I+K+L:0}}}},E.offset.setOffset||(E.offset.setOffset=function(M,N){/static/.test(E.curCSS(M,"position"))&&(M.style.position="relative");var J=E(M),K=J.offset(),O=parseInt(E.curCSS(M,"top",!0),10)||0,I=parseInt(E.curCSS(M,"left",!0),10)||0,L={top:N.top-K.top+O,left:N.left-K.left+I};"using" in N?N.using.call(M,L):J.css(L)},E.fn.offset=function(I){var J=this[0];if(!J||!J.ownerDocument){return null}if(I){return this.each(function(){E.offset.setOffset(this,I)})}return B.call(this)}),function(){var M=document.getElementsByTagName("body")[0],N=document.createElement("div"),P,I,O,K,L;P=document.createElement(M?"div":"body"),O={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},M&&jQuery.extend(O,{position:"absolute",left:"-1000px",top:"-1000px"});for(var J in O){P.style[J]=O[J]}P.appendChild(N),I=M||document.documentElement,I.insertBefore(P,I.firstChild),N.style.cssText="position: absolute; left: 10.7432222px; top: 10.432325px; height: 30px; width: 201px;",K=E(N).offset(function(R,Q){return Q}).offset(),P.innerHTML="",I.removeChild(P),L=K.top+K.left+(M?2000:0),F.fractions=L>21&&L<22}()})(jQuery);(function(D,E){var F=0;D.widget("ui.autocomplete",{options:{appendTo:"body",autoFocus:false,delay:300,minLength:1,width:"auto",position:{my:"left top",at:"left bottom",collision:"none"},source:null},pending:0,_create:function(){var A=this,B=this.element[0].ownerDocument,C;this.element.addClass("ui-autocomplete-input").attr("autocomplete","off").attr({role:"textbox","aria-autocomplete":"list","aria-haspopup":"true"}).bind("keydown.autocomplete",function(I){if(A.options.disabled||A.element.propAttr("readOnly")){return}C=false;var J=D.ui.keyCode;switch(I.keyCode){case J.PAGE_UP:A._move("previousPage",I);break;case J.PAGE_DOWN:A._move("nextPage",I);break;case J.UP:A._move("previous",I);I.preventDefault();break;case J.DOWN:A._move("next",I);I.preventDefault();break;case J.ENTER:case J.NUMPAD_ENTER:if(A.menu.active){C=true;I.preventDefault()}case J.TAB:if(!A.menu.active){return}A.menu.select(I);break;case J.ESCAPE:A.element.val(A.term);A.close(I);break;default:clearTimeout(A.searching);A.searching=setTimeout(function(){if(A.term!=A.element.val()){A.selectedItem=null;A.search(null,I)}},A.options.delay);break}}).bind("keypress.autocomplete",function(H){if(C){C=false;H.preventDefault()}}).bind("focus.autocomplete",function(){if(A.options.disabled){return}A.selectedItem=null;A.previous=A.element.val()}).bind("blur.autocomplete",function(H){if(A.options.disabled){return}clearTimeout(A.searching);A.closing=setTimeout(function(){A.close(H);A._change(H)},150)});this._initSource();this.response=function(){return A._response.apply(A,arguments)};this.menu=D("<ul></ul>").addClass("ui-autocomplete").appendTo(D(this.options.appendTo||"body",B)[0]).mousedown(function(J){var I=A.menu.element[0];if(!D(J.target).closest(".ui-menu-item").length){setTimeout(function(){D(document).one("mousedown",function(G){if(G.target!==A.element[0]&&G.target!==I&&!D.ui.contains(I,G.target)){A.close()}})},1)}setTimeout(function(){clearTimeout(A.closing)},13)}).menu({focus:function(K,L){var J=L.item.data("item.autocomplete");if(false!==A._trigger("focus",K,{item:J})){if(/^key/.test(K.originalEvent.type)){A.element.val(J.value)}}},selected:function(L,M){var N=M.item.data("item.autocomplete"),K=A.previous;if(A.element[0]!==B.activeElement){A.element.focus();A.previous=K;setTimeout(function(){A.previous=K;A.selectedItem=N},1)}if(false!==A._trigger("select",L,{item:N})){A.element.val(N.value)}A.term=A.element.val();A.close(L);A.selectedItem=N},blur:function(I,J){if(A.menu.element.is(":visible")&&(A.element.val()!==A.term)){A.element.val(A.term)}}}).zIndex(this.element.zIndex()+1).css({top:0,left:0}).hide().data("menu");if(D.fn.bgiframe){this.menu.element.bgiframe()}A.beforeunloadHandler=function(){A.element.removeAttr("autocomplete")};D(window).bind("beforeunload",A.beforeunloadHandler)},destroy:function(){this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete").removeAttr("role").removeAttr("aria-autocomplete").removeAttr("aria-haspopup");this.menu.element.remove();D(window).unbind("beforeunload",this.beforeunloadHandler);D.Widget.prototype.destroy.call(this)},_setOption:function(B,A){D.Widget.prototype._setOption.apply(this,arguments);if(B==="source"){this._initSource()}if(B==="appendTo"){this.menu.element.appendTo(D(A||"body",this.element[0].ownerDocument)[0])}if(B==="disabled"&&A&&this.xhr){this.xhr.abort()}},_initSource:function(){var C=this,A,B;if(D.isArray(this.options.source)){A=this.options.source;this.source=function(I,J){J(D.ui.autocomplete.filter(A,I.term))}}else{if(typeof this.options.source==="string"){B=this.options.source;this.source=function(I,J){if(C.xhr){C.xhr.abort()}C.xhr=D.ajax({url:B,data:I,dataType:"json",autocompleteRequest:++F,success:function(H,G){if(this.autocompleteRequest===F){J(H)}},error:function(){if(this.autocompleteRequest===F){J([])}}})}}else{this.source=this.options.source}}},search:function(A,B){A=A!=null?A:this.element.val();this.term=this.element.val();if(A.length<this.options.minLength){return this.close(B)}clearTimeout(this.closing);if(this._trigger("search",B)===false){return}return this._search(A)},_search:function(A){this.pending++;this.element.addClass("ui-autocomplete-loading");this.source({term:A},this.response)},_response:function(A){if(!this.options.disabled&&A&&A.length){A=this._normalize(A);this._suggest(A);this._trigger("open")}else{this.close()}this.pending--;if(!this.pending){this.element.removeClass("ui-autocomplete-loading")}},close:function(A){clearTimeout(this.closing);if(this.menu.element.is(":visible")){this.menu.element.hide();this.menu.deactivate();this._trigger("close",A)}},_change:function(A){if(this.previous!==this.element.val()){this._trigger("change",A,{item:this.selectedItem})}},_normalize:function(A){if(A.length&&A[0].label&&A[0].value){return A}return D.map(A,function(B){if(typeof B==="string"){return{label:B,value:B}}return D.extend({label:B.label||B.value,value:B.value||B.label},B)})},_suggest:function(A){var B=this.menu.element.empty().zIndex(this.element.zIndex()+1);this._renderMenu(B,A);this.menu.deactivate();this.menu.refresh();B.show();this._resizeMenu();B.position(D.extend({of:this.element},this.options.position));if(this.options.autoFocus){this.menu.next(new D.Event("mouseover"))}},_resizeMenu:function(){var A=this.menu.element;if(this.options.width=="auto"){A.outerWidth(Math.max(A.width("").outerWidth()+1,this.element.outerWidth()))}else{A.outerWidth(this.options.width).css({"overflow-x":"hidden"})}},_renderMenu:function(A,B){var C=this;D.each(B,function(I,J){C._renderItem(A,J)})},_renderItem:function(B,A){return D("<li></li>").data("item.autocomplete",A).append(D("<a></a>").text(A.label)).appendTo(B)},_move:function(A,B){if(!this.menu.element.is(":visible")){this.search(null,B);return}if(this.menu.first()&&/^previous/.test(A)||this.menu.last()&&/^next/.test(A)){this.element.val(this.term);this.menu.deactivate();return}this.menu[A](B)},widget:function(){return this.menu.element}});D.extend(D.ui.autocomplete,{escapeRegex:function(A){return A.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")},filter:function(A,C){var B=new RegExp(D.ui.autocomplete.escapeRegex(C),"i");return D.grep(A,function(H){return B.test(H.label||H.value||H)})}})}(jQuery));(function(B){B.widget("ui.menu",{_create:function(){var A=this;this.element.addClass("ui-menu ui-widget ui-widget-content ui-corner-all").attr({role:"listbox","aria-activedescendant":"ui-active-menuitem"}).click(function(D){if(!B(D.target).closest(".ui-menu-item a").length){return}D.preventDefault();A.select(D)});this.refresh()},refresh:function(){var D=this;var A=this.element.children("li:not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","menuitem");A.children("a").addClass("ui-corner-all").attr("tabindex",-1).mouseenter(function(C){D.activate(C,B(this).parent())}).mouseleave(function(){D.deactivate()})},activate:function(J,A){this.deactivate();if(this.hasScroll()){var G=A.offset().top-this.element.offset().top,H=this.element.scrollTop(),I=this.element.height();if(G<0){this.element.scrollTop(H+G)}else{if(G>=I){this.element.scrollTop(H+G-I+A.height())}}}this.active=A.eq(0).children("a").addClass("ui-state-hover").attr("id","ui-active-menuitem").end();this._trigger("focus",J,{item:A})},deactivate:function(){if(!this.active){return}this.active.children("a").removeClass("ui-state-hover").removeAttr("id");this._trigger("blur");this.active=null},next:function(A){this.move("next",".ui-menu-item:first",A)},previous:function(A){this.move("prev",".ui-menu-item:last",A)},first:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},last:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},move:function(H,G,A){if(!this.active){this.activate(A,this.element.children(G));return}var F=this.active[H+"All"](".ui-menu-item").eq(0);if(F.length){this.activate(A,F)}else{this.activate(A,this.element.children(G))}},nextPage:function(F){if(this.hasScroll()){if(!this.active||this.last()){this.activate(F,this.element.children(".ui-menu-item:first"));return}var G=this.active.offset().top,A=this.element.height(),H=this.element.children(".ui-menu-item").filter(function(){var C=B(this).offset().top-G-A+B(this).height();return C<10&&C>-10});if(!H.length){H=this.element.children(".ui-menu-item:last")}this.activate(F,H)}else{this.activate(F,this.element.children(".ui-menu-item").filter(!this.active||this.last()?":first":":last"))}},previousPage:function(A){if(this.hasScroll()){if(!this.active||this.first()){this.activate(A,this.element.children(".ui-menu-item:last"));return}var E=this.active.offset().top,F=this.element.height();result=this.element.children(".ui-menu-item").filter(function(){var C=B(this).offset().top-E+F-B(this).height();return C<10&&C>-10});if(!result.length){result=this.element.children(".ui-menu-item:first")}this.activate(A,result)}else{this.activate(A,this.element.children(".ui-menu-item").filter(!this.active||this.first()?":last":":first"))}},hasScroll:function(){return this.element.height()<this.element[B.fn.prop?"prop":"attr"]("scrollHeight")},select:function(A){this._trigger("selected",A,{item:this.active})}})}(jQuery));(function(B,A){B.widget("ui.selectable",B.ui.mouse,{options:{appendTo:"body",autoRefresh:true,distance:0,filter:"*",tolerance:"touch"},_create:function(){var C=this;this.element.addClass("ui-selectable");this.dragged=false;var D;this.refresh=function(){D=B(C.options.filter,C.element[0]);D.addClass("ui-selectee");D.each(function(){var E=B(this);var F=E.offset();B.data(this,"selectable-item",{element:this,$element:E,left:F.left,top:F.top,right:F.left+E.outerWidth(),bottom:F.top+E.outerHeight(),startselected:false,selected:E.hasClass("ui-selected"),selecting:E.hasClass("ui-selecting"),unselecting:E.hasClass("ui-unselecting")})})};this.refresh();this.selectees=D.addClass("ui-selectee");this._mouseInit();this.helper=B("<div class='ui-selectable-helper'></div>")},destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item");this.element.removeClass("ui-selectable ui-selectable-disabled").removeData("selectable").unbind(".selectable");this._mouseDestroy();return this},_mouseStart:function(E){var C=this;this.opos=[E.pageX,E.pageY];if(this.options.disabled){return}var D=this.options;this.selectees=B(D.filter,this.element[0]);this._trigger("start",E);B(D.appendTo).append(this.helper);this.helper.css({"left":E.clientX,"top":E.clientY,"width":0,"height":0});if(D.autoRefresh){this.refresh()}this.selectees.filter(".ui-selected").each(function(){var F=B.data(this,"selectable-item");F.startselected=true;if(!E.metaKey&&!E.ctrlKey){F.$element.removeClass("ui-selected");F.selected=false;F.$element.addClass("ui-unselecting");F.unselecting=true;C._trigger("unselecting",E,{unselecting:F.element})}});B(E.target).parents().andSelf().each(function(){var F=B.data(this,"selectable-item");if(F){var G=(!E.metaKey&&!E.ctrlKey)||!F.$element.hasClass("ui-selected");F.$element.removeClass(G?"ui-unselecting":"ui-selected").addClass(G?"ui-selecting":"ui-unselecting");F.unselecting=!G;F.selecting=G;F.selected=G;if(G){C._trigger("selecting",E,{selecting:F.element})}else{C._trigger("unselecting",E,{unselecting:F.element})}return false}})},_mouseDrag:function(F){var J=this;this.dragged=true;if(this.options.disabled){return}var I=this.options;var C=this.opos[0],D=this.opos[1],E=F.pageX,H=F.pageY;if(C>E){var G=E;E=C;C=G}if(D>H){var G=H;H=D;D=G}this.helper.css({left:C,top:D,width:E-C,height:H-D});this.selectees.each(function(){var K=B.data(this,"selectable-item");if(!K||K.element==J.element[0]){return}var L=false;if(I.tolerance=="touch"){L=(!(K.left>E||K.right<C||K.top>H||K.bottom<D))}else{if(I.tolerance=="fit"){L=(K.left>C&&K.right<E&&K.top>D&&K.bottom<H)}}if(L){if(K.selected){K.$element.removeClass("ui-selected");K.selected=false}if(K.unselecting){K.$element.removeClass("ui-unselecting");K.unselecting=false}if(!K.selecting){K.$element.addClass("ui-selecting");K.selecting=true;J._trigger("selecting",F,{selecting:K.element})}}else{if(K.selecting){if((F.metaKey||F.ctrlKey)&&K.startselected){K.$element.removeClass("ui-selecting");K.selecting=false;K.$element.addClass("ui-selected");K.selected=true}else{K.$element.removeClass("ui-selecting");K.selecting=false;if(K.startselected){K.$element.addClass("ui-unselecting");K.unselecting=true}J._trigger("unselecting",F,{unselecting:K.element})}}if(K.selected){if(!F.metaKey&&!F.ctrlKey&&!K.startselected){K.$element.removeClass("ui-selected");K.selected=false;K.$element.addClass("ui-unselecting");K.unselecting=true;J._trigger("unselecting",F,{unselecting:K.element})}}}});return false},_mouseStop:function(E){var C=this;this.dragged=false;var D=this.options;B(".ui-unselecting",this.element[0]).each(function(){var F=B.data(this,"selectable-item");F.$element.removeClass("ui-unselecting");F.unselecting=false;F.startselected=false;C._trigger("unselected",E,{unselected:F.element})});B(".ui-selecting",this.element[0]).each(function(){var F=B.data(this,"selectable-item");F.$element.removeClass("ui-selecting").addClass("ui-selected");F.selecting=false;F.selected=true;F.startselected=true;C._trigger("selected",E,{selected:F.element})});this._trigger("stop",E);this.helper.remove();return false}});B.extend(B.ui.selectable,{version:"1.8.17"})})(jQuery);;
/*
 * Lazy Load - jQuery plugin for lazy loading images
 *
 * Copyright (c) 2007-2013 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/projects/lazyload
 *
 * Version:  1.9.3
 *
 */

(function($, window, document, undefined) {
    var $window = $(window);

    $.fn.lazyload = function(options) {
        var elements = this;
        var $container;
        var settings = {
            threshold       : 0,
            failure_limit   : 0,
            event           : "scroll",
            effect          : "show",
            container       : window,
            data_attribute  : "original",
            skip_invisible  : true,
            appear          : null,
            load            : null,
            placeholder     : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
        };

        function update() {
            var counter = 0;

            elements.each(function() {
                var $this = $(this);
                if (settings.skip_invisible && !$this.is(":visible")) {
                    return;
                }
			if($('.fullpage_alllist').length){
				$this.trigger("appear");
				counter = 0;
			}else{
				if ($.abovethetop(this, settings) ||
						$.leftofbegin(this, settings)) {
								/* Nothing. */
				} else if (!$.belowthefold(this, settings) &&
						!$.rightoffold(this, settings)) {
								$this.trigger("appear");
								/* if we found an image we'll load, reset the counter */
								counter = 0;
				} else {
						if (++counter > settings.failure_limit) {
								return false;
						}
				}
			}
            });

        }

        if(options) {
            /* Maintain BC for a couple of versions. */
            if (undefined !== options.failurelimit) {
                options.failure_limit = options.failurelimit;
                delete options.failurelimit;
            }
            if (undefined !== options.effectspeed) {
                options.effect_speed = options.effectspeed;
                delete options.effectspeed;
            }

            $.extend(settings, options);
        }

        /* Cache container as jQuery as object. */
        $container = (settings.container === undefined ||
                      settings.container === window) ? $window : $(settings.container);

        /* Fire one scroll event per scroll. Not one scroll event per image. */
        if (0 === settings.event.indexOf("scroll")) {
            $container.bind(settings.event, function() {
                return update();
            });
        }

        this.each(function() {
            var self = this;
            var $self = $(self);

            self.loaded = false;

            /* If no src attribute given use data:uri. */
            if ($self.attr("src") === undefined || $self.attr("src") === false) {
                if ($self.is("img")) {
                    $self.attr("src", settings.placeholder);
                }
            }
            /* fixed bug#1630 */
            //if(parseInt($self.css("top"))<-100) $self.css("top","");
            /* When appear is triggered load original image. */
            $self.one("appear", function() {
                if (!this.loaded) {
                    if (settings.appear) {
                        var elements_left = elements.length;
                        settings.appear.call(self, elements_left, settings);
                    }
                    $("<img />")
                        .bind("load", function() {

                            var original = $self.attr("data-" + settings.data_attribute);
                            $self.hide();
                            if ($self.is("img")) {
                                $self.attr("src", original);
                            } else {
                                $self.css("background-image", "url('" + original + "')");
                            }
                            $self[settings.effect](settings.effect_speed);

                            self.loaded = true;

                            /* Remove image from array so it is not looped next time. */
                            var temp = $.grep(elements, function(element) {
                                return !element.loaded;
                            });
                            elements = $(temp);

                            if (settings.load) {
                                var elements_left = elements.length;
                                settings.load.call(self, elements_left, settings);
                            }
                        })
                        .attr("src", $self.attr("data-" + settings.data_attribute));
                }
            });

            /* When wanted event is triggered load original image */
            /* by triggering appear.                              */
            if (0 !== settings.event.indexOf("scroll")) {
                $self.bind(settings.event, function() {
                    if (!self.loaded) {
                        $self.trigger("appear");
                    }
                });
            }
        });

        /* Check if something appears when window is resized. */
        $window.bind("resize", function() {
            update();
        });

        /* With IOS5 force loading images when navigating with back button. */
        /* Non optimal workaround. */
        if ((/(?:iphone|ipod|ipad).*os 5/gi).test(navigator.appVersion)) {
            $window.bind("pageshow", function(event) {
                if (event.originalEvent && event.originalEvent.persisted) {
                    elements.each(function() {
                        $(this).trigger("appear");
                    });
                }
            });
        }
	  update();
        /* Force initial check if images should appear. */
        $(document).ready(function() {
            update();
        });

        return this;
    };

    /* Convenience methods in jQuery namespace.           */
    /* Use as  $.belowthefold(element, {threshold : 100, container : window}) */

    $.belowthefold = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = (window.innerHeight ? window.innerHeight : $window.height()) + $window.scrollTop();
        } else {
            fold = $(settings.container).offset().top + $(settings.container).height();
        }
        return fold <= $(element).offset().top - settings.threshold;
    };

    $.rightoffold = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.width() + $window.scrollLeft();
        } else {
            fold = $(settings.container).offset().left + $(settings.container).width();
        }

        return fold <= $(element).offset().left - settings.threshold;
    };

    $.abovethetop = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.scrollTop();
        } else {
            fold = $(settings.container).offset().top;
        }
        //bug#2660
        var eleparwid = $(element).height();
        if(eleparwid==0&&$(element).parents().parents().attr('class')=='img_over'){
        	var eleparwid = $(element).parents().parents().height();
        }
        return fold >= $(element).offset().top + settings.threshold  + eleparwid;
    };

    $.leftofbegin = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.scrollLeft();
        } else {
            fold = $(settings.container).offset().left;
        }

        return fold >= Math.max($(element).offset().left + $(element).width(),2)+ settings.threshold ;
    };

    $.inviewport = function(element, settings) {
         return !$.rightoffold(element, settings) && !$.leftofbegin(element, settings) &&
                !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
     };

    /* Custom selectors for your convenience.   */
    /* Use as $("img:below-the-fold").something() or */
    /* $("img").filter(":below-the-fold").something() which is faster */

    $.extend($.expr[":"], {
        "below-the-fold" : function(a) { return $.belowthefold(a, {threshold : 0}); },
        "above-the-top"  : function(a) { return !$.belowthefold(a, {threshold : 0}); },
        "right-of-screen": function(a) { return $.rightoffold(a, {threshold : 0}); },
        "left-of-screen" : function(a) { return !$.rightoffold(a, {threshold : 0}); },
        "in-viewport"    : function(a) { return $.inviewport(a, {threshold : 0}); },
        /* Maintain BC for couple of versions. */
        "above-the-fold" : function(a) { return !$.belowthefold(a, {threshold : 0}); },
        "right-of-fold"  : function(a) { return $.rightoffold(a, {threshold : 0}); },
        "left-of-fold"   : function(a) { return !$.rightoffold(a, {threshold : 0}); }
    });

})(jQuery, window, document);;
(function(E,C){var B={0:0};var A={0:1};var D={0:0};E.math={};E.math.sin=function(G){if(G<0){G=G+360}if(G>=360){G=G%360}if(B[G]==C){var F=Math.sin(G*Math.PI/180);B[G]=F}return B[G]};E.math.cos=function(G){if(G<0){G=G+360}if(G>=360){G=G%360}if(A[G]==C){var F=Math.cos(G*Math.PI/180);A[G]=F}return A[G]};E.math.tan=function(G){if(G<0){G=G+360}if(G>=360){G=G%360}if(D[G]==C){var F=Math.tan(G*Math.PI/180);D[G]=F}return D[G]};E.math.acos=function(F){var G=Math.acos(F);return Math.round(G*180/Math.PI)};E.parseInteger=function(G){var F=parseInt(G);if(isNaN(F)){return 0}return F};E.divrotate=function(L,G,M,F){L=E(L);var H=L.width();var K=L.height();if(F){H=F[0];K=F[1]}if(M){var J=M[0];var I=M[1];if(E.browser.msie&&E.browser.version<9){H=parseInt(L.data("IEWidth"));K=parseInt(L.data("IEHeight"));J=L.data("IELeft");if(J==C){J=M[0];L.data("IELeft",J)}I=L.data("IETop");if(I==C){I=M[1];L.data("IETop",I)}ieRotate({degree:G,left:J,top:I,width:H,height:K,dom:L})}else{L[0].style.left=Math.round(J)+"px";L[0].style.top=Math.round(I)+"px"}}if(E.browser.safari||E.browser.mozilla||E.browser.opera||(E.browser.msie&&E.browser.version=="9.0")){ieRotate({degree:G,dom:L})}};E.fn.modattr=function(F,G){if(F=="leftpos"){var H=this.data("prop_leftpos");if(!H){H=[parseInt(this.css("left")),parseInt(this.css("top"))]}if(G!=C){this.data("prop_leftpos",G)}return H}if(F=="degree"){var H=this.data("deg");if(!H){H=0}if(G!=C){this.data("deg",G)}return H}if(F=="size"){var H=this.data("prop_size");if(!H){H=[this.width(),this.height()]}if(G!=C){this.data("prop_size",G)}return H}};E.divrotate.reversePos=function(N,H,I,M){var K=N[0];var J=N[1];var O=E.math.cos(H);var L=E.math.sin(H);if(E.browser.msie&&E.browser.version<9){var F=K;if(H<90){F=K+M*L}else{if(H<180){F=K+M*L-I*O}else{if(H<270){F=K-I*O}else{F=K}}}var G=J;if(H<90){G=J}else{if(H<180){G=J-M*O}else{if(H<270){G=J-M*O-I*L}else{G=J-I*L}}}return[F,G]}else{return N}};E.divrotate.getMaxDistance=function(N){var G=N.data("deg");var K=parseInt(N.css("left"));var J=parseInt(N.css("top"));var H=N.width();var M=N.height();var L=canv.width();var P,I,F;if(!G){P=K;I=L-H-K;F=J}else{if(G>360){G=G%360}var O=E.math.cos(G);var Q=E.math.sin(G);if(G<=90){P=K-M*Q;I=L-K-H*O;F=J}else{if(G>90&&G<=180){P=K-M*Q+H*O;I=L-K;F=J+M*O}else{if(G>180&&G<=270){P=K+H*O;I=L-K+M*Q;F=J+M*O+H*Q}else{if(G>270&&G<=360){P=K;I=L-K+M*Q-H*O;F=J+H*Q}}}}}return{left:P,right:I,top:F}};E.divrotate.getDegreeModMaxPointOrigin=function(O,G,N,H,R){var L=E.getElementFatherid(O);var F=E("#"+L).ab_pos_cnter("top");var G=G;if(!G){var M=0;var J=H[0];var K=H[1];switch(R){case"left":M=N[0];break;case"right":M=N[0]+J;break;case"top":M=N[1]+F;break;case"buttom":M=N[1]+K+F;break}return M}else{if(E.browser.msie&&E.browser.version<9){var M=0;switch(R){case"left":M=O.position().left;break;case"right":M=O.position().left+O.width();break;case"top":M=O.position().top;break;case"buttom":M=O.position().top+O.height();break}return M}var M=0;var J=H[0];var K=H[1];var P=N[0];var I=N[1];if(G>360){G=G%360}var Q=E.math.cos(G);var S=E.math.sin(G);switch(R){case"left":if(G<=90){M=P-K*S}else{if(G>90&&G<=180){M=P-K*S+J*Q}else{if(G>180&&G<=270){M=P+J*Q}else{if(G>270&&G<=360){M=P}}}}break;case"right":if(G<=90){M=P+J*Q}else{if(G>90&&G<=180){M=P}else{if(G>180&&G<=270){M=P-K*S}else{if(G>270&&G<=360){M=P-K*S+J*Q}}}}break;case"top":if(G<=90){M=I}else{if(G>90&&G<=180){M=I+K*Q}else{if(G>180&&G<=270){M=I+K*Q+J*S}else{if(G>270&&G<=360){M=I+J*S}}}}M=M+F;break;case"buttom":if(G<=90){M=I+K*Q+J*S}else{if(G>90&&G<=180){M=I+J*S}else{if(G>180&&G<=270){M=I}else{if(G>270&&G<=360){M=I+K*Q}}}}M=M+F;break}return M}};E.divrotate.getDegreeModMaxPoint=function(F,H,J){var K=F.data("deg");if(H==null){H=[E.parseInteger(F.css("left")),E.parseInteger(F.css("top"))]}var I=F.width();var G=F.height();return E.divrotate.getDegreeModMaxPointOrigin(F,K,H,[I,G],J)};E.divrotate.getDegreeModMaxPointForRotate=function(F,K,H,J){var I=F.width();var G=F.height();return E.divrotate.getDegreeModMaxPointOrigin(F,K,H,[I,G],J)};E.divrotate.getDegreeResizeCursor=function(F){var G=F.data("deg");if(G==null){G=0}if(G>360){G=G%360}if(G<=22||G>=338){F.find(".ui-resizable-n").css("cursor","n-resize");F.find(".ui-resizable-e").css("cursor","e-resize");F.find(".ui-resizable-w").css("cursor","w-resize");F.find(".ui-resizable-s").css("cursor","s-resize");F.find(".ui-resizable-ne").css("cursor","ne-resize");F.find(".ui-resizable-se").css("cursor","se-resize");F.find(".ui-resizable-nw").css("cursor","nw-resize");F.find(".ui-resizable-sw").css("cursor","sw-resize")}else{if(G>22&&G<=67){F.find(".ui-resizable-n").css("cursor","ne-resize");F.find(".ui-resizable-e").css("cursor","se-resize");F.find(".ui-resizable-w").css("cursor","nw-resize");F.find(".ui-resizable-s").css("cursor","sw-resize");F.find(".ui-resizable-ne").css("cursor","e-resize");F.find(".ui-resizable-se").css("cursor","s-resize");F.find(".ui-resizable-nw").css("cursor","n-resize");F.find(".ui-resizable-sw").css("cursor","w-resize")}else{if(G>67&&G<=112){F.find(".ui-resizable-n").css("cursor","e-resize");F.find(".ui-resizable-e").css("cursor","s-resize");F.find(".ui-resizable-w").css("cursor","n-resize");F.find(".ui-resizable-s").css("cursor","w-resize");F.find(".ui-resizable-ne").css("cursor","se-resize");F.find(".ui-resizable-se").css("cursor","sw-resize");F.find(".ui-resizable-nw").css("cursor","ne-resize");F.find(".ui-resizable-sw").css("cursor","nw-resize")}else{if(G>112&&G<=157){F.find(".ui-resizable-n").css("cursor","se-resize");F.find(".ui-resizable-e").css("cursor","sw-resize");F.find(".ui-resizable-w").css("cursor","ne-resize");F.find(".ui-resizable-s").css("cursor","nw-resize");F.find(".ui-resizable-ne").css("cursor","s-resize");F.find(".ui-resizable-se").css("cursor","w-resize");F.find(".ui-resizable-nw").css("cursor","e-resize");F.find(".ui-resizable-sw").css("cursor","n-resize")}else{if(G>157&&G<=202){F.find(".ui-resizable-n").css("cursor","s-resize");F.find(".ui-resizable-e").css("cursor","w-resize");F.find(".ui-resizable-w").css("cursor","e-resize");F.find(".ui-resizable-s").css("cursor","n-resize");F.find(".ui-resizable-ne").css("cursor","sw-resize");F.find(".ui-resizable-se").css("cursor","nw-resize");F.find(".ui-resizable-nw").css("cursor","se-resize");F.find(".ui-resizable-sw").css("cursor","ne-resize")}else{if(G>202&&G<=247){F.find(".ui-resizable-n").css("cursor","sw-resize");F.find(".ui-resizable-e").css("cursor","nw-resize");F.find(".ui-resizable-w").css("cursor","se-resize");F.find(".ui-resizable-s").css("cursor","ne-resize");F.find(".ui-resizable-ne").css("cursor","w-resize");F.find(".ui-resizable-se").css("cursor","n-resize");F.find(".ui-resizable-nw").css("cursor","s-resize");F.find(".ui-resizable-sw").css("cursor","e-resize")}else{if(G>247&&G<=292){F.find(".ui-resizable-n").css("cursor","w-resize");F.find(".ui-resizable-e").css("cursor","n-resize");F.find(".ui-resizable-w").css("cursor","s-resize");F.find(".ui-resizable-s").css("cursor","e-resize");F.find(".ui-resizable-ne").css("cursor","nw-resize");F.find(".ui-resizable-se").css("cursor","ne-resize");F.find(".ui-resizable-nw").css("cursor","sw-resize");F.find(".ui-resizable-sw").css("cursor","se-resize")}else{if(G>292&&G<=337){F.find(".ui-resizable-n").css("cursor","nw-resize");F.find(".ui-resizable-e").css("cursor","ne-resize");F.find(".ui-resizable-w").css("cursor","sw-resize");F.find(".ui-resizable-s").css("cursor","se-resize");F.find(".ui-resizable-ne").css("cursor","n-resize");F.find(".ui-resizable-se").css("cursor","e-resize");F.find(".ui-resizable-nw").css("cursor","w-resize");F.find(".ui-resizable-sw").css("cursor","s-resize")}}}}}}}}};E.divrotate.getDegreeResizeChange=function(N,Y,S,K,M){var R=N.data("deg");if(R>360){R=R%360}var O=Math.sin(R*Math.PI/180);var V=Math.cos(R*Math.PI/180);if(E.browser.msie&&E.browser.version<9){var G=N.data("IEWidth");var J=N.data("IEHeight");if(R>=0&&R<90){var Z=S.left+J*O,H=S.top}else{if(R>=90&&R<180){var Z=J*O-G*V+S.left,H=S.top-J*V}else{if(R>180&&R<=270){var Z=S.left-G*V,H=S.top-G*O-J*V}else{if(R>270&&R<360){var Z=S.left,H=G*V+S.top}}}}}else{var G=K.width;var J=K.height;var Z=S.left,H=S.top}var L=Y[0];var U=Y[1];var Q=E.math.tan(R);var T,P,X;var I=function(a){T=E.math.acos((L+a*U)/(Math.sqrt(L*L+U*U)*Math.sqrt(1+a*a)));P=Math.sqrt(L*L+U*U)*E.math.sin(T);X=L*a-U};var W=function(a){T=E.math.acos((L-a*U)/(Math.sqrt(L*L+U*U)*Math.sqrt(1+a*a)));P=Math.sqrt(L*L+U*U)*E.math.sin(T);X=0-(L*a+U)};if(E.browser.msie&&E.browser.version<9){var F=null;switch(M){case"n":I(Q);if(X==0){return{}}if(R<=90){if(X>0){F={height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)-(J+P)*E.math.sin(R)),top:Math.round(H-P*E.math.cos(R))}}else{if(X<0){F={height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)-(J-P)*E.math.sin(R)),top:Math.round(H+P*E.math.cos(R))}}}}else{if(R>270&&R<360){if(X>0){F={height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)),top:Math.round(H-P*E.math.cos(R)-G*E.math.cos(R))}}else{if(X<0){F={height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)),top:Math.round(H+P*E.math.cos(R)-G*E.math.cos(R))}}}}else{if(R>90&&R<=180){if(X>0){F={height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)-(J-P)*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H+P*E.math.cos(R)+(J-P)*E.math.cos(R))}}else{if(X<0){F={height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)-(J+P)*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H-P*E.math.cos(R)+(J+P)*E.math.cos(R))}}}}else{if(R>180&&R<=270){if(X>0){F={height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H+P*E.math.cos(R)+(J-P)*E.math.cos(R)+G*E.math.sin(R))}}else{if(X<0){F={height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H-P*E.math.cos(R)+(J+P)*E.math.cos(R)+G*E.math.sin(R))}}}}}}}break;case"s":I(Q);if(X==0){return{}}if(R<=90){if(X>0){F={width:G,height:Math.round(J-P),left:Math.round(Z-(J-P)*E.math.sin(R)),top:H}}else{if(X<0){F={width:G,height:Math.round(J+P),left:Math.round(Z-(J+P)*E.math.sin(R)),top:H}}}}else{if(R>90&&R<=180){if(X>0){F={width:G,height:Math.round(J+P),left:Math.round(Z-(J+P)*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H+(J+P)*E.math.cos(R))}}else{if(X<0){F={width:G,height:Math.round(J-P),left:Math.round(Z-(J-P)*E.math.sin(R)+G*E.math.cos(R)),top:Math.round(H+(J-P)*E.math.cos(R))}}}}else{if(R>180&&R<=270){if(X>0){F={width:G,height:Math.round(J+P),left:Math.round(Z+G*E.math.cos(R)),top:Math.round(H+(J+P)*E.math.cos(R)+G*E.math.sin(R))}}else{if(X<0){F={width:G,height:Math.round(J-P),left:Math.round(Z+G*E.math.cos(R)),top:Math.round(H+(J-P)*E.math.cos(R)+G*E.math.sin(R))}}}}else{if(R>270&&R<360){if(X>0){F={width:G,height:Math.round(J-P),left:Z,top:Math.round(H-G*E.math.cos(R))}}else{if(X<0){F={width:G,height:Math.round(J+P),left:Z,top:Math.round(H-G*E.math.cos(R))}}}}}}}break;case"w":W(1/Q);if(X==0){return{}}if(R<=90){if(X>0){F={width:Math.round(G+P),height:J,left:Math.round(Z-P*E.math.cos(R)-J*E.math.sin(R)),top:Math.round(H-P*E.math.sin(R))}}else{if(X<0){F={width:Math.round(G-P),height:J,left:Math.round(Z+P*E.math.cos(R)-J*E.math.sin(R)),top:Math.round(H+P*E.math.sin(R))}}}}else{if(R>90&&R<=180){if(X>0){F={width:Math.round(G+P),height:J,left:Math.round(Z-P*E.math.cos(R)-J*E.math.sin(R)+(G+P)*E.math.cos(R)),top:Math.round(H-P*E.math.sin(R)+J*E.math.cos(R))}}else{if(X<0){F={width:Math.round(G-P),height:J,left:Math.round(Z+P*E.math.cos(R)-J*E.math.sin(R)+(G-P)*E.math.cos(R)),top:Math.round(H+P*E.math.sin(R)+J*E.math.cos(R))}}}}else{if(R>180&&R<=270){if(X>0){F={width:Math.round(G-P),height:J,left:Math.round(Z+P*E.math.cos(R)+(G-P)*E.math.cos(R)),top:Math.round(H+P*E.math.sin(R)+(G-P)*E.math.sin(R)+J*E.math.cos(R))}}else{if(X<0){F={width:Math.round(G+P),height:J,left:Math.round(Z-P*E.math.cos(R)+(G+P)*E.math.cos(R)),top:Math.round(H-P*E.math.sin(R)+(G+P)*E.math.sin(R)+J*E.math.cos(R))}}}}else{if(R>270&&R<360){if(X>0){F={width:Math.round(G-P),height:J,left:Math.round(Z+P*E.math.cos(R)),top:Math.round(H+P*E.math.sin(R)-(G-P)*E.math.cos(R))}}else{if(X<0){F={width:Math.round(G+P),height:J,left:Math.round(Z-P*E.math.cos(R)),top:Math.round(H-P*E.math.sin(R)-(G+P)*E.math.cos(R))}}}}}}}break;case"e":W(1/Q);if(X==0){return{}}if(R<=90){if(X>0){F={width:Math.round(G-P),height:J,left:Z-J*E.math.sin(R),top:H}}else{if(X<0){F={width:Math.round(G+P),height:J,left:Z-J*E.math.sin(R),top:H}}}}else{if(R>90&&R<=180){if(X>0){F={width:Math.round(G-P),height:J,left:Z-J*E.math.sin(R)+(G-P)*E.math.cos(R),top:H+J*E.math.cos(R)}}else{if(X<0){F={width:Math.round(G+P),height:J,left:Z-J*E.math.sin(R)+(G+P)*E.math.cos(R),top:H+J*E.math.cos(R)}}}}else{if(R>180&&R<=270){if(X>0){F={width:Math.round(G+P),height:J,left:Z+(G+P)*E.math.cos(R),top:H+(G+P)*E.math.sin(R)+J*E.math.cos(R)}}else{if(X<0){F={width:Math.round(G-P),height:J,left:Z+(G-P)*E.math.cos(R),top:H+(G-P)*E.math.sin(R)+J*E.math.cos(R)}}}}else{if(R>270&&R<360){if(X>0){F={width:Math.round(G+P),height:J,left:Z,top:H-(G+P)*E.math.cos(R)}}else{if(X<0){F={width:Math.round(G-P),height:J,left:Z,top:H-(G-P)*E.math.cos(R)}}}}}}}break}N.data("IEWidth_tmp",F.width||G).data("IEHeight_tmp",F.height||J);E(".propblk,.posblk").remove();return F}else{switch(M){case"n":I(Q);if(X==0){return{}}if(R<=90||(R>270&&R<=360)){if(X>0){return{height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)),top:Math.round(H-P*E.math.cos(R))}}else{if(X<0){return{height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)),top:Math.round(H+P*E.math.cos(R))}}}}else{if(R>90&&R<=270){if(X>0){return{height:Math.round(J-P),left:Math.round(Z-P*E.math.sin(R)),top:Math.round(H+P*E.math.cos(R))}}else{if(X<0){return{height:Math.round(J+P),left:Math.round(Z+P*E.math.sin(R)),top:Math.round(H-P*E.math.cos(R))}}}}}break;case"s":I(Q);if(X==0){return{}}if(R<=90||(R>270&&R<=360)){if(X>0){return{height:Math.round(J-P)}}else{if(X<0){return{height:Math.round(J+P)}}}}else{if(R>90&&R<=270){if(X>0){return{height:Math.round(J+P)}}else{if(X<0){return{height:Math.round(J-P)}}}}}break;case"w":W(1/Q);if(X==0){return{}}if(R<=180){if(X>0){return{width:Math.round(G+P),left:Math.round(Z-P*E.math.cos(R)),top:Math.round(H-P*E.math.sin(R))}}else{if(X<0){return{width:Math.round(G-P),left:Math.round(Z+P*E.math.cos(R)),top:Math.round(H+P*E.math.sin(R))}}}}else{if(R>180&&R<=360){if(X>0){return{width:Math.round(G-P),left:Math.round(Z+P*E.math.cos(R)),top:Math.round(H+P*E.math.sin(R))}}else{if(X<0){return{width:Math.round(G+P),left:Math.round(Z-P*E.math.cos(R)),top:Math.round(H-P*E.math.sin(R))}}}}}break;case"e":W(1/Q);if(X==0){return{}}if(R<=180){if(X>0){return{width:Math.round(G-P)}}else{if(X<0){return{width:Math.round(G+P)}}}}else{if(R>180&&R<=360){if(X>0){return{width:Math.round(G+P)}}else{if(X<0){return{width:Math.round(G-P)}}}}}break}}}})(jQuery);function rotateWithCenter(L,E){L=$(L);var B=L.modattr("leftpos");var O=B[0];var M=B[1];var D=L.modattr("degree");var F=L.width();var I=L.height();var K=$.math.sin(D);var N=$.math.cos(D);var G=[O+F/2*N-I/2*K,M+I/2*N+F/2*K];var A=$.math.sin(E);var J=$.math.cos(E);var C=G[0]+I/2*A-F/2*J;var H=G[1]-F/2*A-I/2*J;$.divrotate(L,E,[C,H]);toolbarRotate(L,E,{w:F,h:I})}function toolbarRotate(M,S,A,P){if(!P){P=$(".propblk")}if(P.length==0){return}M=$(M);if(P.is(".propblk")){var Q=M.data("toolbarsize")}else{Q=M.data("posizeblksize");if(S){P.data("rotatedegree",S)}}if(!Q){Q=[P.width(),P.height()];M.data("toolbarsize",Q)}if($.browser.msie&&$.browser.version<9){var K=Q[0];var D=Q[1];var C=$("#"+M.attr("id")).width();var G=$("#"+M.attr("id")).height();var F=$.resetModToolbarLeft($("#"+M.attr("id")).position().left);var T=$("#"+M.attr("id")).position().top;var J=S%360;var E=M.data("IEWidth");var N=M.data("IEHeight");if(M.data("sinx")==undefined){var L=Math.PI*J/180;var U=Math.cos(L);var O=Math.sin(L);M.data("sinx",O);M.data("cosx",U)}else{var U=M.data("cosx");var O=M.data("sinx")}if(J>0&&J<=90){var B=(C+F)-D*O;var W=T+(G-N*U)}else{if(J>90&&J<=180){var B=C+F-(D*O-K*U)-(-1*U*E);var W=G+T+D*U}else{if(J>180&&J<=270){var B=F+K*U;var W=T-N*U+D*U+K*O}else{if(J>270&&J<360){var B=F+E*U;var W=T+K*O}}}}P.css({filter:"progid:DXImageTransform.Microsoft.Matrix(M11="+U+",M12="+(-O)+",M21="+O+",M22="+U+",SizingMethod='auto expand')","left":B+"px","top":W+"px"})}else{var X=M.data("prop_size");var C=0;if(X){C=X[0]}else{C=M.width()}if(!S){S=0}var Y=M.data("prop_leftpos");var R=parseInt(M.css("left"));var V=parseInt(M.css("top"));if(Y){R=Y[0];V=Y[1]}var G=35;var I=$.math.sin(S)*G+$.resetModToolbarLeft(parseInt(R))+canv.offset().left-(window.MobileOffsetLeft||0);var H=parseInt(V)-$.math.cos(S)*G+$("#"+$.getElementFatherid(M)).ab_pos_cnter("top");$.divrotate(P,S,[I,H],Q)}}function modPosRotate(K,R,B){if($(".posblk").length==0){return}K=$(K);var S=K.data("modpossize");if(!S){S=[$(".posblk").width(),$(".posblk").height()];K.data("modpossize",S)}if(!R){R=0}var W=K.data("prop_leftpos");var U=parseInt(K.css("left"));var Q=parseInt(K.css("top"));if(W){U=W[0];Q=W[1]}K.data("deg",R);$(".posblk").find(".posblk-position").html(Math.round(U)+","+Math.round(Q)).andSelf().find(".posblk-deg").html(K.data("deg")%360);if($.browser.msie&&$.browser.version<9){var X=S[0];var L=S[1];var D=$("#"+K.attr("id")).width();var F=$("#"+K.attr("id")).height();var O=$("#"+K.attr("id")).position().left;var T=$("#"+K.attr("id")).position().top;var I=R%360;var E=K.data("IEWidth");var M=K.data("IEHeight");if(K.data("sinx")==undefined){var J=Math.PI*I/180;var A=Math.cos(J);var N=Math.sin(J);K.data("sinx",N);K.data("cosx",A)}else{var A=K.data("cosx");var N=K.data("sinx")}if(I>=0&&I<=90){var P=O+M*N;var C=T-L*A}else{if(I>90&&I<=180){var P=O+D+X*A;var C=T-M*A}else{if(I>180&&I<=270){var P=O-E*A+X*A+L*N;var C=T+F+X*N}else{if(I>270&&I<360){var P=O+L*N;var C=T-E*N-L*A+X*N}}}}$(".posblk").css({filter:"progid:DXImageTransform.Microsoft.Matrix(M11="+A+",M12="+(-N)+",M21="+N+",M22="+A+",SizingMethod='auto expand')","left":P+"px","top":C+"px"})}else{var V=K.data("prop_size");var D=0;if(V){D=V[0]+10}else{D=K.width()+10}var H=$.math.cos(R)*D+parseInt(U)+canv.offset().left-(window.MobileOffsetLeft||0);var G=$.math.sin(R)*D+parseInt(Q)+$("#"+$.getElementFatherid(K)).ab_pos_cnter("top");$.divrotate($(".posblk"),R,[H,G],S)}}function getOldProxyFromSize(J,C,D,F){var I=C%360;var A=$("#"+J.attr("id")).position().left;var L=$("#"+J.attr("id")).position().top;var K=$("#"+J.attr("id"));if(J.data("sinx")==undefined){var E=Math.PI*I/180;var H=Math.cos(E);var G=Math.sin(E);J.data("sinx",G);J.data("cosx",H)}else{var G=J.data("sinx");var H=J.data("cosx")}if(I==0){var B=A;var M=L}else{if(I>=0&&I<=90){var B=(F*G+D*H-D)/2+A;var M=(D*G+F*H-F)/2+L}else{if(I>90&&I<=180){var B=(F*G-D*H-D)/2+A;var M=(D*G-F*H-F)/2+L}else{if(I>180&&I<=270){var B=(-1*F*G-D*H-D)/2+A;var M=(-1*D*G-F*H-F)/2+L}else{if(I>270&&I<360){var B=(-1*F*G+D*H-D)/2+A;var M=(-1*D*G+F*H-F)/2+L}}}}}return[B,M]}function getLeftPointProxy(B,A){var I=A%360;var C=B.position().left,D=B.position().top;var J=Math.PI*I/180;var G=Math.sin(J),H=Math.cos(J);var F=B.data("IEWidth"),E=B.data("IEHeight");if(I>=0&&I<90){return[Math.round(C+E*G),Math.round(D)]}else{if(I>=90&&I<180){return[Math.round(C+E*G-F*H),Math.round(D-E*H)]}else{if(I>=180&&I<270){return[Math.round(C-F*H),Math.round(D-E*H-F*G)]}else{if(I>=270&&I<360){return[Math.round(C),Math.round(D-F*G)]}}}}};;
(function(W){var Z=W.$LAB,v="UseLocalXHR",p="AlwaysPreserveOrder",U="AllowDuplicates",j="CacheBust",g="BasePath",h=/^[^?#]*\//.exec(location.href)[0],m=/^\w+\:\/\/\/?[^\/]+/.exec(h)[0],V=document.head||document.getElementsByTagName("head"),e=(W.opera&&Object.prototype.toString.call(W.opera)=="[object Opera]")||("MozAppearance" in document.documentElement.style),S=document.createElement("script"),n=typeof S.preload=="boolean",Q=n||(S.readyState&&S.readyState=="uninitialized"),k=!Q&&S.async===true,f=!Q&&!k&&!e;function l(A){return Object.prototype.toString.call(A)=="[object Function]"}function a(A){return Object.prototype.toString.call(A)=="[object Array]"}function c(C,B){var A=/^\w+\:\/\//;if(/^\/\/\/?/.test(C)){C=location.protocol+C}else{if(!A.test(C)&&C.charAt(0)!="/"){C=(B||"")+C}}return A.test(C)?C:((C.charAt(0)=="/"?m:h)+C)}function R(C,B){for(var A in C){if(C.hasOwnProperty(A)){B[A]=C[A]}}return B}function d(C){var B=false;for(var A=0;A<C.scripts.length;A++){if(C.scripts[A].ready&&C.scripts[A].exec_trigger){B=true;C.scripts[A].exec_trigger();C.scripts[A].exec_trigger=null}}return B}function T(D,C,B,A){D.onload=D.onreadystatechange=function(){if((D.readyState&&D.readyState!="complete"&&D.readyState!="loaded")||C[B]){return}D.onload=D.onreadystatechange=null;A()}}function b(B){B.ready=B.finished=true;for(var A=0;A<B.finished_listeners.length;A++){B.finished_listeners[A]()}B.ready_listeners=[];B.finished_listeners=[]}function X(B,E,C,A,D){setTimeout(function(){var H,G=E.real_src,F;if("item" in V){if(!V[0]){setTimeout(arguments.callee,25);return}V=V[0]}H=document.createElement("script");if(E.type){H.type=E.type}if(E.charset){H.charset=E.charset}if(D){if(Q){C.elem=H;if(n){H.preload=true;H.onpreload=A}else{H.onreadystatechange=function(){if(H.readyState=="loaded"){A()}}}H.src=G}else{if(D&&G.indexOf(m)==0&&B[v]){F=new XMLHttpRequest();F.onreadystatechange=function(){if(F.readyState==4){F.onreadystatechange=function(){};C.text=F.responseText+"\n//@ sourceURL="+G;A()}};F.open("GET",G);F.send()}else{H.type="text/cache-script";T(H,C,"ready",function(){V.removeChild(H);A()});H.src=G;V.insertBefore(H,V.firstChild)}}}else{if(k){H.async=false;T(H,C,"finished",A);H.src=G;V.insertBefore(H,V.firstChild)}else{T(H,C,"finished",A);H.src=G;V.insertBefore(H,V.firstChild)}}},0)}function Y(){var D={},G=Q||f,C=[],A={},E;D[v]=true;D[p]=false;D[U]=false;D[j]=false;D[g]="";function F(L,K,J){var I;function M(){if(I!=null){I=null;b(J)}}if(A[K.src].finished){return}if(!L[U]){A[K.src].finished=true}I=J.elem||document.createElement("script");if(K.type){I.type=K.type}if(K.charset){I.charset=K.charset}T(I,J,"finished",M);if(J.elem){J.elem=null}else{if(J.text){I.onload=I.onreadystatechange=null;I.text=J.text}else{I.src=K.real_src}}V.insertBefore(I,V.firstChild);if(J.text){M()}}function H(M,L,P,N){var I,O,K=function(){L.ready_cb(L,function(){F(M,L,I)})},J=function(){L.finished_cb(L,P)};L.src=c(L.src,M[g]);L.real_src=L.src+(M[j]?((/\?.*$/.test(L.src)?"&_":"?_")+~~(Math.random()*1000000000)+"="):"");if(!A[L.src]){A[L.src]={items:[],finished:false}}O=A[L.src].items;if(M[U]||O.length==0){I=O[O.length]={ready:false,finished:false,ready_listeners:[K],finished_listeners:[J]};X(M,L,I,((N)?function(){I.ready=true;for(var i=0;i<I.ready_listeners.length;i++){I.ready_listeners[i]()}I.ready_listeners=[]}:function(){b(I)}),N)}else{I=O[0];if(I.finished){J()}else{I.finished_listeners.push(J)}}}function B(){var I,o=R(D,{}),N=[],L=0,K=false,M;function i(r,q){r.ready=true;r.exec_trigger=q;O()}function J(s,r){s.ready=s.finished=true;s.exec_trigger=null;for(var q=0;q<r.scripts.length;q++){if(!r.scripts[q].finished){return}}r.finished=true;O()}function O(){while(L<N.length){if(l(N[L])){try{N[L++]()}catch(q){}continue}else{if(!N[L].finished){if(d(N[L])){continue}break}}L++}if(L==N.length){K=false;M=false}}function P(){if(!M||!M.scripts){N.push(M={scripts:[],finished:true})}}I={script:function(){for(var q=0;q<arguments.length;q++){(function(u,t){var s;if(!a(u)){t=[u]}for(var r=0;r<t.length;r++){P();u=t[r];if(l(u)){u=u()}if(!u){continue}if(a(u)){s=[].slice.call(u);s.unshift(r,1);[].splice.apply(t,s);r--;continue}if(typeof u=="string"){u=u+"?v=20151222"}if(typeof u=="string"){u={src:u}}u=R(u,{ready:false,ready_cb:i,finished:false,finished_cb:J});M.finished=false;M.scripts.push(u);H(o,u,M,(G&&K));K=true;if(o[p]){I.wait()}}})(arguments[q],arguments[q])}return I},wait:function(){if(arguments.length>0){for(var q=0;q<arguments.length;q++){N.push(arguments[q])}M=N[N.length-1]}else{M=false}O();return I}};return{script:I.script,wait:I.wait,setOptions:function(q){R(q,o);return I}}}E={setGlobalDefaults:function(I){R(I,D);return E},setOptions:function(){return B().setOptions.apply(null,arguments)},script:function(){return B().script.apply(null,arguments)},wait:function(){return B().wait.apply(null,arguments)},queueScript:function(){C[C.length]={type:"script",args:[].slice.call(arguments)};return E},queueWait:function(){C[C.length]={type:"wait",args:[].slice.call(arguments)};return E},runQueue:function(){var L=E,K=C.length,J=K,I;for(;--J>=0;){I=C.shift();L=L[I.type].apply(null,I.args)}return L},noConflict:function(){W.$LAB=Z;return E},sandbox:function(){return Y()}};return E}W.$LAB=Y();(function(C,B,A){if(document.readyState==null&&document[C]){document.readyState="loading";document[C](B,A=function(){document.removeEventListener(B,A,false);document.readyState="complete"},false)}})("addEventListener","DOMContentLoaded")})(this);;
var mclick = 'click',mtouchstart = 'mousedown',mtouchend = 'mouseup',mtouchmove = 'mousemove';
if (window.ontouchstart !== undefined) {
	mclick = 'click';mtouchstart = 'touchstart';mtouchend = 'touchend';mtouchmove = 'touchmove';
}
/**Global Function**/
function getSessionExpiredUrl()
{
	$(window).unbind('beforeunload');
	alert(translate('page.sessionTimeout')); 
	window.close();
	return null;
}

function wp_heightAdapt(dom,oldHeight){}

function is_website_mobile(){
	var type=getWebSiteType();
	return type=='mobile';
}

function layer_img_lzld(layerid){
	var imgcontainer=$('#scroll_container');
	var ismobile=is_website_mobile();
	if(!ismobile){
		var chromebug=$('#scroll_container').data('chrome_bug');
		if(chromebug){
			imgcontainer=window;
		}
	}else imgcontainer=window;
	$('#'+layerid+'  img.img_lazy_load').lazyload({
		     threshold  : 0,
			failure_limit : $('#'+layerid+'  img.img_lazy_load').length,
			container : imgcontainer,	
			placeholder:relativeToAbsoluteURL('template/default/images/blank.gif'),
			load:function(){
			 var self=$(this);
			 var id=self.closest('.cstlayer').prop('id');
			if(window['set_thumb_'+id]) window['set_thumb_'+id](this);
		 }
	});
}

function initScrollcontainerHeight(){
	var container=$('#scroll_container');
	var cvhgt = window.innerHeight || window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	container.height(cvhgt);
	$('#scroll_container_bg').css('height',cvhgt);
}

function noRightClick(){
	//禁用鼠标右键  CTRL+C 复制   CTRL+V  粘贴   CTRL+S 保存
	$(function(){
		document.body.oncontextmenu=function(){return false;}
		$(document).keydown(function(event) {
					if ((event.ctrlKey&&event.which==67) || (event.ctrlKey&&event.which==86)) {
							return false;
					}        
			})
			$(document).keydown(function(event) {
					if ((event.ctrlKey&&event.which==67) || (event.ctrlKey&&event.which==86) || (event.ctrlKey&&event.which==83)) {
							return false;
					}        
			})
	})
}

function doc_end_exec(){
	$(function(){
		$(document).triggerHandler('lastexec');
	})
	$('#scroll_container').css("visibility", 'visible');
	$('.mloading-mask').remove();
	$(window).load(function(){ 
		var heightadaptel=$("#canvas").find(".cstlayer[type='article_detail'],.cstlayer[type='product_detail'],.cstlayer[type='wzl'],.cstlayer[type='fxdp'],.cstlayer[type='tb_product_detail'],.cstlayer[type='tb_product_list'],.cstlayer[type='product_list'],.cstlayer[type='wkj'],.cstlayer[type='crowdfunding'],.cstlayer[type='btag'],.cstlayer[type='greetingcard'],.cstlayer[type='weiredpack'],.cstlayer[type='mseckill_detail'],.cstlayer[type='mgroupon_detail'],.cstlayer[type='mgroupons_detail']");
		if(heightadaptel.length){
			heightadaptel.each(function(){
				wp_heightAdapt($(this));
			}) 		
			window.scroll_container_adjust();
		}
	});
	
	var imgcontainer=$('#scroll_container');
	var ismobile=is_website_mobile();
	if(!ismobile){
		var chromebug=$('#scroll_container').data('chrome_bug');
		if(chromebug){
			imgcontainer=window;
		}
	}else imgcontainer=window;
	$('img.img_lazy_load').lazyload({
		     threshold  : 0,
			failure_limit : $('img.img_lazy_load').length,
			container : imgcontainer,	
			placeholder:relativeToAbsoluteURL('template/default/images/blank.gif'),
			load:function(){
			 var self=$(this);
			 var id=self.closest('.cstlayer').prop('id');
			if(window['set_thumb_'+id]) window['set_thumb_'+id](this);
		 }
	});
	
	$(window).load(function(){
		$('.cstlayer').showEffects();
	})
}

function wpfullcolumn_float(){
    var wp_ibody = $('#scroll_container'),wp_icontent = $('#canvas'),wp_icontent_foot = $('#site_footer #footer_content');
    $('.full_column').filter('[infixed=1]').each(function(){
        var fc_lid = '#'+$(this).attr('id');
        var $fc_lid = $(this);
        var wp_layer_abs = $('#canvas '+fc_lid),wp_layer_abs_footer = $('#site_footer #footer_content '+fc_lid),wp_layer_fix= $('#scroll_container '+fc_lid);
        var currpoor = ($('.full_width').width() - $('.full_content').width())/2;
        var isinfixed = $fc_lid.attr('infixed');
        if(isinfixed==1) {
            var nPos = $('#scroll_container').scrollTop() ;
            //oPos get第一次正确的值,以后不再获得
            var oPos_tmp = $fc_lid.data("oPos");
            if(!oPos_tmp){
                oPos_tmp =  $fc_lid.ab_pos_cnter('top');
                $fc_lid.data("oPos",oPos_tmp);
            }
            var oPos = $fc_lid.data("oPos") ;
            if(oPos==0 && $fc_lid.parent().is('#canvas')) return;
            if(oPos==0){
				var oldsty = $fc_lid.attr('oldstyle')||'';
				if(oldsty.match(/top:\d+px/)){
					var oldtop = oldsty.match(/top:\d+px/);
					oldtop = oldtop[0].match(/\d+/);
					oPos = oldtop[0];
				}
            }
            if($fc_lid.attr('inbuttom')>0){
                //存在页脚中
                if(nPos > oPos){
                    var newleft = $('.full_column').ab_pos('left') + currpoor ;
                    if(wp_layer_abs_footer.length>0){
                        var oldstyle = wp_layer_abs_footer.attr('style');
                        wp_layer_fix = wp_layer_abs_footer.clone(true).appendTo('#scroll_container')
                        .attr('oldstyle',oldstyle)
                        .addClass('full_column-fixed');
                    wp_layer_fix.show();wp_layer_fix.css({'position':'fixed','top':'','left':newleft,'z-index':'999'});
                    wp_layer_abs_footer.remove();
                    }
                }else{
                    oldstyle = wp_layer_fix.attr('oldstyle');
                    if(!wp_layer_abs_footer.length>0){
                        wp_layer_abs_footer = wp_layer_fix.clone(true).appendTo(wp_icontent_foot)
                        .attr('style',oldstyle);
                        wp_layer_abs_footer.show();wp_layer_fix.remove();
                    }
                }
            }else{
                var infixed_html = $('#canvas').data('infixed_content');
                if(!infixed_html){
                    infixed_html =wp_layer_abs.html(); $('#canvas').data('infixed_content',infixed_html);
                }
                if(nPos > oPos){
                    var newleft = Math.abs(parseFloat($('.full_column').find('.full_width').css('left')));
                    //clone(true) has true 可以存储data
                    if(wp_layer_abs.length>0){
                        //////////////////////
                        var oldstyle = wp_layer_abs.attr('style');
                        var func=function(){ //未加载完拖拽滚动条为空异常处理
                            var success=true;
                            var newleft = Math.abs(parseFloat($(fc_lid).find('.full_width').css('left')));
                            if(!(newleft)){success=false;}
                            if(success){
                                $(fc_lid).css('left',newleft);
                            }else {
                                setTimeout(func,100);
                            }
                         }
                         func();
                        var layerdiv=$("<div/>").attr({
                                'id':wp_layer_abs.attr('id'),'class':wp_layer_abs.attr('class'),'infixed':1,'style':wp_layer_abs.attr('style')});
                        $('#scroll_container').append(layerdiv);
                        wp_layer_abs.remove();
                        var wp_layer_fix =$(fc_lid).html(infixed_html)
                        .attr('oldstyle',oldstyle)
                        .addClass('full_column-fixed');
                        wp_layer_fix.show();wp_layer_fix.css({'position':'fixed','top':'','left':newleft,'z-index':'999'});
                        ////fix时 full_width宽为空异常处理
                        var funco=function(){
                            var full_width_val = Math.abs(parseFloat($(fc_lid).find('.full_width').css('left')));
                            if(!full_width_val){
                                $(fc_lid).children('.full_width').css({left:0-$('#canvas').offset().left-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});
                                if(!(Math.abs(parseFloat($(fc_lid).find('.full_width').css('left'))))){
                                    setTimeout(funco,100);
                                }
                            }
                        }
                        funco();
                        //////////
					var imgcontainer=$('#scroll_container');
					var ismobile=is_website_mobile();
					if(!ismobile){
						var chromebug=$('#scroll_container').data('chrome_bug');
						if(chromebug){
							imgcontainer=window;
						}
					}else imgcontainer=window;
                        $('.full_content img.img_lazy_load').lazyload({
                           threshold  : 0,
                        	  failure_limit : $('img.img_lazy_load').length,
                        	  container : imgcontainer,	
                        	  placeholder:relativeToAbsoluteURL('template/default/images/blank.gif'),
                        	  load:function(){
                        		 var self=$(this);
                        		 var id=self.closest('.cstlayer').prop('id');
                        		if(window['set_thumb_'+id]) window['set_thumb_'+id](this);
                        	 }
                        });	
                    }
                }else{
                    if( wp_layer_fix.data('always_fix')) return;
                    oldstyle = wp_layer_fix.attr('oldstyle');
                    if(!wp_layer_abs.length>0){
                        //////////////////////////////
                        var layerdiv=$("<div/>").attr({
                                'id':wp_layer_fix.attr('id'),'class':wp_layer_fix.attr('class'),'infixed':1,'style':wp_layer_fix.attr('oldstyle')});
                        wp_icontent.append(layerdiv);
                        wp_layer_fix.remove();
                        wp_layer_abs =$(fc_lid).html(infixed_html)
                        .attr('oldstyle',oldstyle)
                        .removeClass('full_column-fixed');
                        wp_layer_abs.show();
                        //为空异常处理
                        var funco=function(){
                            var full_width_val = Math.abs(parseFloat($(fc_lid).find('.full_width').css('left')));
                            if(!(full_width_val)){
                                $(fc_lid).children('.full_width').css({left:0-$('#canvas').offset().left-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});
                                if(!(Math.abs(parseFloat($(fc_lid).find('.full_width').css('left'))))){
                                    setTimeout(funco,100);
                                }
                            }
                        }
                        funco();
                        //////////////////////////////
				    var imgcontainer=$('#scroll_container');
					var ismobile=is_website_mobile();
					if(!ismobile){
						var chromebug=$('#scroll_container').data('chrome_bug');
						if(chromebug){
							imgcontainer=window;
						}
					}else imgcontainer=window;
                        $('.full_content img.img_lazy_load').lazyload({
                           threshold  : 0,
                        	  failure_limit : $('img.img_lazy_load').length,
                        	  container : imgcontainer,	
                        	  placeholder:relativeToAbsoluteURL('template/default/images/blank.gif'),
                        	  load:function(){
                        		 var self=$(this);
                        		 var id=self.closest('.cstlayer').prop('id');
                        		if(window['set_thumb_'+id]) window['set_thumb_'+id](this);
                        	 }
                        });	
                    }
                }
            }
        }
    });
}

function getTop(){//for ie6 css hack
  return document.documentElement.scrollTop;
}

function init_fullcolumn_fixed_code(){
	$(function(){
			setTimeout(function(){
					$('.full_column').filter('[infixed=1]').each(function(){
					var self=$(this);
					if(self.parent().is('#canvas')&&parseInt(self.css('top'))==0){
					var currpoor = ($('.full_width').width() - $('.full_content').width())/2;
					var newleft = self.ab_pos('left') + currpoor ;
					var wp_layer_abs=self;
					var layerid=wp_layer_abs.attr('id');
					 var oldstyle = wp_layer_abs.attr('style');
					var layerhtml=wp_layer_abs.html();
					var layerdiv=$("<div/>").attr({
						id:wp_layer_abs.attr('id'),
						'class':wp_layer_abs.attr('class'),
						infixed:1,
						style:wp_layer_abs.attr('style'),
					});
					wp_layer_abs.remove();
					$('#scroll_container').append(layerdiv);
					var wp_layer_fix =$('#'+layerid).html(layerhtml)
					.attr('oldstyle',oldstyle)
					.addClass('full_column-fixed');
					wp_layer_fix.data('always_fix',true);
					wp_layer_fix.show();wp_layer_fix.css({'position':'fixed','top':'','left':newleft,'z-index':'999'})
					var ismobile=is_website_mobile();
					var imgcontainer=window;
					if(!ismobile) imgcontainer=$('#scroll_container').add(window);
					wp_layer_fix.find('img.img_lazy_load').lazyload({
							threshold  : 0,
							failure_limit : wp_layer_fix.find('img.img_lazy_load').length,
							container : imgcontainer,
							placeholder:relativeToAbsoluteURL('template/default/images/blank.gif'),
							load:function(){
								 var self=$(this);
								 var id=self.closest('.cstlayer').prop('id');
								if(window['set_thumb_'+id]) window['set_thumb_'+id](this);
							 }
					});	

									//explain:修复bug(2282多语言模块放置固定的通栏后异常),author:fpf,date:2015/03/30,action:add;
									var $multilingual = $(document).find('.wp-multilingual_content');
									if($multilingual.get(0) != 'undefined'){
											var $multilingual_content = $multilingual.find('.wp-content > .overz');
											if(parseInt($multilingual_content.length) > 1){
													$multilingual.find('.wp-content > .overz:last').remove();
											}
									}
							}
					});
		// 修复“通栏设置‘固定显示’后导致‘鼠标滚轮’事件异常（bug#4230）”
		$(document).bind("mousewheel DomMouseScroll MozMousePixelScroll", function(e){
			e = e || window.event;
			var $target = $(e.target).closest('.full_column[infixed="1"]');
			if ($target.length > 0) {
				var $win = $(window),$stainer = $('#scroll_container'),
				$scroll = $stainer.height() <= $win.height() ? $stainer : $win,
				movey = e.wheelDelta || e.detail * -(Math.abs(e.detail) > 3 ? 1 : 40);
				$scroll.scrollTop($scroll.scrollTop() - movey);
				$win = $stainer = $scroll = movey = null;
			}
			$target = null;
		});
					//explain:修复flash模块在360安全浏览器极速模式下鼠标:hover后无法触发滚动效果，该事件在采用Webkit内核的浏览器下都会触发,author:fpf,date:2015-01-15,action:add;
					$('div.wp-flash_content').each(function(){
							$(this).unbind('mousewheel').bind('mousewheel',function(event){
									var scrolltop=$('#scroll_container').scrollTop();
									if(event.wheelDelta>0){
											$('#scroll_container').scrollTop(scrolltop-50);
									} else{
											$('#scroll_container').scrollTop(scrolltop+50);
									}
							});
					});

			},300);
	})

	$('#scroll_container').scroll(function(){
		wpfullcolumn_float();
	});
}

function initCanvasHeight(){
	var maxheight=0;
	var helperfunc=function(dom){
		var degree=dom.data('deg')||dom.attr('deg');
		var pos=[parseInt(dom.css('left')),parseInt(dom.css('top'))]
		var w=dom.width();
		var h=dom.height();
		if(dom.hasClass('cstlayer')){
			var buttompos=$.divrotate.getDegreeModMaxPointOrigin(dom,degree,pos,[w,h],'buttom');
		}else{
			var buttompos=dom.ab_pos_cnter('top')+parseInt(dom.css('height'));
		}
		return buttompos;
	}
	var filterfunc=function(){
		return $(this).is(":not(div[deleted='deleted'])") && $(this).attr('childdel') != 'del';
	}
	$('#canvas  .cstlayer,#canvas  .full_column').filter(filterfunc).each(function(){
		var canvheight=helperfunc($(this));
		if(canvheight>maxheight) maxheight=canvheight;
	})
	$("#canvas").data('layermaxheight',maxheight);
	//#5460
	setTimeout(function(){
		$('#site_footer').find('.cstlayer').each(function(){
			var sitetop = parseInt($('#site_footer').css('top'));
			var thistop = parseInt($(this).css('top'))
			if(thistop<0&&sitetop<-thistop) {$(this).css('top',-sitetop);}
		})
	},100)
}

$.fn.layer_ready=function(func){
	var is_exec=false;
	var execfunc=function(){
		if(is_exec) return;
		func();
		is_exec=true;
	}
	$(this).bind('layer_ready',function(){
		execfunc();
	})
	
	$(function(){
		execfunc();
	})
}

/**document ready js**/
$(document).bind('lastexec',function(){

	// Mobile device 2014/01/06
	if (window.MobileModel) {
		var $scontainer = $('#scroll_container'),canvaswidth = $('#canvas').width();
		$scontainer.unbind(".mbprevredhat.tmpredhat");
		if ($('#wp-mobile-device-header').length > 0) {
			// 手机模型定位
			var screenWidth = window.innerWidth||self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,
			deviceOtherHeight = $('#wp-mobile-device-header').closest('.wp-new-manage-toolbar-position').height() + $('#wp-mobile-device-footer').height();
			var onlyOnce_resize_width = false;
			$(window).bind("resize.mbeditor", function(e, status){
				var screenHeight = window.innerHeight||self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;
				$('#wp-mobile-device-sides').height(screenHeight - deviceOtherHeight).children('.mwrapper').height(screenHeight - deviceOtherHeight - 2);
				// 自定义滚动条样式
				var sidewidth = 14;/* 手机模型边缘宽度 */
				var mbtimer = setTimeout(function(){
					var newleft = ($._parseFloat($('#wp-mobile-device-header').css("left"))||0) + sidewidth;
					$scontainer.css({"left": (newleft - 10)+'px',"width": function(){/*-10是为了修复"缩放句柄被遮"问题*/
						if( onlyOnce_resize_width == false ){
							onlyOnce_resize_width = true;
							return ($(this).width() + (status?(sidewidth + 15 + 10):0))+'px';
						}else{
							return ;
						}
					},"margin": '0',"padding-left": '11px',"top": '-6px',"overflow-y": 'scroll'});
					$('#site_footer').css("left", '11px');/*11px是为了修复"缩放句柄被遮"问题*/
					if (status == undefined) $scontainer.mscroll("destroy");
					$scontainer.mscroll({difleft: 10,maskbg: '#ccc'});clearTimeout(mbtimer);
				}, 100);
			}).triggerHandler("resize.mbeditor", ['init']);
			$('#wp-mobile-device-header,#wp-mobile-device-sides,#wp-mobile-device-footer').css({"left": function(){
				return ((screenWidth - $(this).width()) / 2)+'px';
			}, "visibility": 'visible'});
			// 保存布局
			$('#wp-mobile-device-footer > span').click(function(){
				wp_floatpanel(parseToURL('wp_widgets','save_page'),{
					title: translate('page.saveLayout'),width: 418,overlay: true,isCenter: true,
					contentClass: 'wp-site-set_panel_c',id: 'wp-page_save',zIndex: 9999
				});
			});
		} else {/* 预览模式 */
			$scontainer.css("visibility", 'visible');
			$(window).load(function(){
				var $win = $(this),frmwidth = $win.width(),frmheight = window.getdeviceheight||565;
				$scontainer.height(frmheight);
				var mprevtimer = setTimeout(function(){
					$scontainer.mscroll({"maskcname": 'wp-mobile-device-premask',"difleft": -6,
					"height": frmheight,"barcname": 'wp-mobile-prescrollbar',"maskleft": frmwidth,"barleft": frmwidth});
					$win.triggerHandler("pageloaded");clearTimeout(mprevtimer);
					// 模拟“触屏”模式
					var maxtop = frmheight - $('.wp-mobile-prescrollbar > span.pane').height();
					$scontainer.bind("mousedown.mbprevredhat", function(e){
						e.preventDefault();
						var $prebar = $('.wp-mobile-prescrollbar'),pagey = e.pageY;
						$scontainer.bind("mousemove.tmpredhat", function(e){
							e.preventDefault();
							var scrltop = $scontainer.scrollTop(),movey = e.pageY - pagey;
							if (scrltop < 0) scrltop = 0;
							$scontainer.scrollTop(scrltop - movey);
						}).bind("mouseup.tmpredhat", function(e){
							e.preventDefault();$scontainer.unbind(".tmpredhat");
							$(parent.document).unbind(".rmredhat");
						});
						$(parent.document).bind("mouseup.rmredhat",function(){$scontainer.unbind(".tmpredhat")});
					});
				}, 150);
			});
		}
		$('#site_footer,#footer_content').width(canvaswidth);
	}
	
	function resizeCanvasHeight(){
		window.canv = $("#canvas");
		var container=$('#scroll_container');
		// 画布高度
		var cvhgt = window.getdeviceheight || window.innerHeight || self.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;//$(window).height();
		var ua = /micromessenger/i.test(navigator.userAgent.toLowerCase());
		if (window.isHandheld&&!ua) cvhgt = Math.min(cvhgt, MobileUtils.getScreenHeight());
		cvhgt -= container.offset().top,mfooterheight = $('#wp-mobile-device-footer').height()||0;
		container.height(cvhgt - mfooterheight);
		if($('#site_footer').length>0){
			var canvheight=Math.max($("#canvas").data('layermaxheight'),cvhgt-$('#site_footer').height()-mfooterheight);
			if($('#site_footer:not(.only_copyright)').length>0){
				canvheight=Math.max(canvheight,$("#canvas").height());
			}
		}else{
			var canvheight=Math.max($("#canvas").data('layermaxheight'),cvhgt);
			canvheight=Math.max($("#canvas").data('layermaxheight'),cvhgt-mfooterheight);//没有页脚时去设备底部高度，防没有任何模块时有滚动条bug/4574
		}
		// 重置bSlider模块高度 2013/03/25
		$('.cstlayer[type="bslider"]:not(.isplate)').each(function(i, dom){
			$(dom).triggerHandler('resetbsliderheight', [canvheight]);
		});
		if(!canv) var canv = $("#canvas");
		canv.css('height',canvheight+'px');
		$('#scroll_container_bg').css('height',(canvheight+$('#site_footer').height())+'px');
		if($(window).width()-canv.width()<0) $('#scroll_container_bg').width(canv.width());
		else  $('#scroll_container_bg').css('width','100%');
		// 更新标尺位置Start 2012/3/2
		var canvleft = canv.offset().left;
		if (typeof $.fn.ruler_locate != 'undefined') {
			$.fn.ruler_locate({
				x : {left:canvleft+'px'},
				y : {height:canvheight+'px', left:(canvleft>17?canvleft-17:0)+'px'}
			});
			$('.line_y').height(canvheight);// 辅助线高度
		}
		// 在手机设备上访问 2014/02/08
		if (window.isHandheld) {
			var $container = $('#scroll_container'),$footer = $('#site_footer'),
			maxheight = $('#scroll_container_bg').height() + $('>.mblank_placeholder',$container).height();
			$container.css({"height": maxheight+'px',"overflow-x": 'hidden',"overflow-y": 'hidden'});
			if($footer.length) {
				if (/micromessenger/i.test(navigator.userAgent.toLowerCase())) {
					$footer.css({'position':'absolute','top':$('#canvas').height()});
				}
				$footer.find('#footer_content').andSelf().width($('#canvas').width());
			}
			/*adpHandheld();*/$('.mloading-mask').remove();
			$container.css("visibility", 'visible');$(window).triggerHandler("pageloaded");
		}
		// 修复ipad中iframe touchmove冲突问题(bug#97) 2014/09/16
		if (/ipad/.test(navigator.userAgent.toLowerCase())) {
			$(document.body).parent().andSelf().css({"overflow-x": 'hidden',"overflow-y": 'auto'});
			container.css({"height": 'auto',"overflow-y": 'auto'});
		}
	}
	
	function correctFooterPos(){
		var canv = $("#canvas");
		var canvheight=canv.height();
		var canvwidth=canv.width();
		var containerOffsetLeft = $('#scroll_container').offset().left;
		$('#site_footer').css({left:canv.offset().left-containerOffsetLeft+$('#scroll_container').scrollLeft()+$.parseInteger($('#canvas').css("borderLeftWidth")),top:canvheight});
		$('#site_footer >.full_width').css({left:0-canv.offset().left+containerOffsetLeft-$('#scroll_container').scrollLeft()-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$(window.MobileModel?'#canvas':'#scroll_container_bg').width()});
		if($('#wp-mobile-device-header').length) $('#site_footer >.full_width').css("left", '0px');
	}
	window.correctFooterPos=correctFooterPos;
	
	window.scroll_container_adjust=function(){
		initCanvasHeight();
		//resizeCanvasHeight();
        //微信下初始化加载cvans高度过大出现滚动条。bug/4574
        if (/micromessenger/i.test(navigator.userAgent.toLowerCase())) {
            setTimeout(function(){
            resizeCanvasHeight();
            correctFooterPos();
            },600)
        }else {
            resizeCanvasHeight();
            correctFooterPos();
        }
		
	}
	window.scroll_container_adjust();
	if(!canv) var canv = $("#canvas");
	$('.full_column>.full_width').css({left:0-canv.offset().left+$('#scroll_container').offset().left-$('#scroll_container').scrollLeft()-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});
	//浏览器缩放是自动调整高度
	var me = "orientation" in window && "onorientationchange" in window ? "orientationchange" : "resize"
	$(window).bind(me, function(e){
		if(e.target==window||e.target==document){
			resizeCanvasHeight();
			correctFooterPos();
			$('.full_column>.full_width').css({left:0-canv.offset().left+$('#scroll_container').offset().left-$('#scroll_container').scrollLeft()-$.parseInteger($('#canvas').css("borderLeftWidth")),width:$('#scroll_container_bg').width()});
			if($('.full_column-fixed').length){
				var full_column_left = 0-$('.full_column-fixed>.full_width').position().left;
				$('.full_column-fixed').css("left",full_column_left+"px");
			}
		}
	})
	
	if (!window.isHandheld) rotateDom($('.cstlayer'));
	//Preview need resize window
	if(window.opener){
		var winH = screen.availHeight || 768,winW = screen.availWidth || 1024;
		window.resizeTo(winW, winH);
	}
	// 新窗口打开超链接
	$.extend({
		openNewWin: function(URI){
			var win = window.open(URI,'_blank');
			win.focus;
		}
	});
});
jQuery.cookie=function(B,F,E){if(arguments.length>1&&(F===null||typeof F!=="object")){E=jQuery.extend({},E);if(F===null){E.expires=-1}if(typeof E.expires==="number"){var D=E.expires,G=E.expires=new Date();G.setDate(G.getDate()+D)}return(document.cookie=[encodeURIComponent(B),"=",E.raw?String(F):encodeURIComponent(String(F)),E.expires?"; expires="+E.expires.toUTCString():"",E.path?"; path="+E.path:"",E.domain?"; domain="+E.domain:"",E.secure?"; secure":""].join(""))}E=F||{};var A,C=E.raw?function(H){return H}:decodeURIComponent;return(A=new RegExp("(?:^|; )"+encodeURIComponent(B)+"=([^;]*)").exec(document.cookie))?C(A[1]):null};;
(function(A){var E=A.browser.msie&&parseInt(A.browser.version)===6&&typeof window.XMLHttpRequest!=="object",D=A.browser.msie&&parseInt(A.browser.version)===7,C=null,B=[];A.modal=function(G,F){return A.modal.impl.init(G,F)};A.modal.close=function(){A.modal.impl.close()};A.modal.focus=function(F){A.modal.impl.focus(F)};A.modal.setContainerDimensions=function(){A.modal.impl.setContainerDimensions()};A.modal.setPosition=function(){A.modal.impl.setPosition()};A.modal.update=function(G,F){A.modal.impl.update(G,F)};A.fn.modal=function(F){return A.modal.impl.init(this,F)};A.modal.defaults={appendTo:"body",focus:true,opacity:50,overlayId:"simplemodal-overlay",overlayCss:{},containerId:"simplemodal-container",containerCss:{},dataId:"simplemodal-data",dataCss:{},minHeight:null,minWidth:null,maxHeight:null,maxWidth:null,autoResize:false,autoPosition:true,zIndex:1000,close:true,closeHTML:'<a class="modalCloseImg" title="Close"></a>',closeClass:"simplemodal-close",escClose:true,overlayClose:false,position:null,persist:false,modal:true,onOpen:null,onShow:null,onClose:null};A.modal.impl={d:{},init:function(H,F){var G=this;if(G.d.data){return false}C=A.browser.msie&&!A.boxModel;G.o=A.extend({},A.modal.defaults,F);G.zIndex=G.o.zIndex;G.occb=false;if(typeof H==="object"){H=H instanceof jQuery?H:A(H);G.d.placeholder=false;if(H.parent().parent().size()>0){H.before(A("<span></span>").attr("id","simplemodal-placeholder").css({display:"none"}));G.d.placeholder=true;G.display=H.css("display");if(!G.o.persist){G.d.orig=H.clone(true)}}}else{if(typeof H==="string"||typeof H==="number"){H=A("<div></div>").html(H)}else{alert("SimpleModal Error: Unsupported data type: "+typeof H);return G}}G.create(H);G.open();A.isFunction(G.o.onShow)&&G.o.onShow.apply(G,[G.d]);return G},create:function(G){var F=this;B=F.getDimensions();if(F.o.modal&&E){F.d.iframe=A('<iframe src="javascript:false;"></iframe>').css(A.extend(F.o.iframeCss,{display:"none",opacity:0,position:"fixed",height:B[0],width:B[1],zIndex:F.o.zIndex,top:0,left:0})).appendTo(F.o.appendTo)}F.d.overlay=A("<div></div>").attr("id",F.o.overlayId).addClass("simplemodal-overlay").css(A.extend(F.o.overlayCss,{display:"none",opacity:F.o.opacity/100,height:F.o.modal?B[0]:0,width:F.o.modal?B[1]:0,position:"fixed",left:0,top:0,zIndex:F.o.zIndex+1})).appendTo(F.o.appendTo);F.d.container=A("<div></div>").attr("id",F.o.containerId).addClass("simplemodal-container").css(A.extend(F.o.containerCss,{display:"none",position:"fixed",zIndex:F.o.zIndex+2})).append(F.o.close&&F.o.closeHTML?A(F.o.closeHTML).addClass(F.o.closeClass):"").appendTo(F.o.appendTo);F.d.wrap=A("<div></div>").attr("tabIndex",-1).addClass("simplemodal-wrap").css({height:"100%",outline:0,width:"100%"}).appendTo(F.d.container);F.d.data=G.attr("id",G.attr("id")||F.o.dataId).addClass("simplemodal-data").css(A.extend(F.o.dataCss,{display:"none"})).appendTo("body");F.setContainerDimensions();F.d.data.appendTo(F.d.wrap);if(E||C){F.fixIE()}},bindEvents:function(){var F=this;A("."+F.o.closeClass).bind("click.simplemodal",function(G){G.preventDefault();F.close()});F.o.modal&&F.o.close&&F.o.overlayClose&&F.d.overlay.bind("click.simplemodal",function(G){G.preventDefault();F.close()});A(document).bind("keydown.simplemodal",function(G){if(F.o.modal&&G.keyCode===9){F.watchTab(G)}else{if(F.o.close&&F.o.escClose&&G.keyCode===27){G.preventDefault();F.close()}}});A(window).bind("resize.simplemodal",function(){B=F.getDimensions();F.o.autoResize?F.setContainerDimensions():F.o.autoPosition&&F.setPosition();if(E||C){F.fixIE()}else{if(F.o.modal){F.d.iframe&&F.d.iframe.css({height:B[0],width:B[1]});F.d.overlay.css({height:B[0],width:B[1]})}}})},unbindEvents:function(){A("."+this.o.closeClass).unbind("click.simplemodal");A(document).unbind("keydown.simplemodal");A(window).unbind("resize.simplemodal");this.d.overlay.unbind("click.simplemodal")},fixIE:function(){var G=this,F=G.o.position;A.each([G.d.iframe||null,!G.o.modal?null:G.d.overlay,G.d.container],function(K,H){if(H){var I=H[0].style;I.position="absolute";if(K<2){I.removeExpression("height");I.removeExpression("width");I.setExpression("height",'document.body.scrollHeight > document.body.clientHeight ? document.body.scrollHeight : document.body.clientHeight + "px"');I.setExpression("width",'document.body.scrollWidth > document.body.clientWidth ? document.body.scrollWidth : document.body.clientWidth + "px"')}else{var J;if(F&&F.constructor===Array){K=F[0]?typeof F[0]==="number"?F[0].toString():F[0].replace(/px/,""):H.css("top").replace(/px/,"");K=K.indexOf("%")===-1?K+' + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"':parseInt(K.replace(/%/,""))+' * ((document.documentElement.clientHeight || document.body.clientHeight) / 100) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"';if(F[1]){J=typeof F[1]==="number"?F[1].toString():F[1].replace(/px/,"");J=J.indexOf("%")===-1?J+' + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"':parseInt(J.replace(/%/,""))+' * ((document.documentElement.clientWidth || document.body.clientWidth) / 100) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"'}}else{K='(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"';J='(document.documentElement.clientWidth || document.body.clientWidth) / 2 - (this.offsetWidth / 2) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"'}I.removeExpression("top");I.removeExpression("left");I.setExpression("top",K);I.setExpression("left",J)}}})},focus:function(H){var F=this;H=H&&A.inArray(H,["first","last"])!==-1?H:"first";var G=A(":input:enabled:visible:"+H,F.d.wrap);setTimeout(function(){G.length>0?G.focus():F.d.wrap.focus()},10)},getDimensions:function(){var F=A(window);return[A.browser.opera&&A.browser.version>"9.5"&&A.fn.jquery<"1.3"||A.browser.opera&&A.browser.version<"9.5"&&A.fn.jquery>"1.2.6"?F[0].innerHeight:F.height(),F.width()]},getVal:function(G,F){return G?typeof G==="number"?G:G==="auto"?0:G.indexOf("%")>0?parseInt(G.replace(/%/,""))/100*(F==="h"?B[0]:B[1]):parseInt(G.replace(/px/,"")):null},update:function(H,F){var G=this;if(!G.d.data){return false}G.d.origHeight=G.getVal(H,"h");G.d.origWidth=G.getVal(F,"w");G.d.data.hide();H&&G.d.container.css("height",H);F&&G.d.container.css("width",F);G.setContainerDimensions();G.d.data.show();G.o.focus&&G.focus();G.unbindEvents();G.bindEvents()},setContainerDimensions:function(){var L=this,J=E||D,K=L.d.origHeight?L.d.origHeight:A.browser.opera?L.d.container.height():L.getVal(J?L.d.container[0].currentStyle.height:L.d.container.css("height"),"h");J=L.d.origWidth?L.d.origWidth:A.browser.opera?L.d.container.width():L.getVal(J?L.d.container[0].currentStyle.width:L.d.container.css("width"),"w");var H=L.d.data.outerHeight(true),M=L.d.data.outerWidth(true);L.d.origHeight=L.d.origHeight||K;L.d.origWidth=L.d.origWidth||J;var F=L.o.maxHeight?L.getVal(L.o.maxHeight,"h"):null,I=L.o.maxWidth?L.getVal(L.o.maxWidth,"w"):null;F=F&&F<B[0]?F:B[0];I=I&&I<B[1]?I:B[1];var G=L.o.minHeight?L.getVal(L.o.minHeight,"h"):"auto";K=K?L.o.autoResize&&K>F?F:K<G?G:K:H?H>F?F:L.o.minHeight&&G!=="auto"&&H<G?G:H:G;F=L.o.minWidth?L.getVal(L.o.minWidth,"w"):"auto";J=J?L.o.autoResize&&J>I?I:J<F?F:J:M?M>I?I:L.o.minWidth&&F!=="auto"&&M<F?F:M:F;L.d.container.css({height:K,width:J});L.d.wrap.css({overflow:H>K||M>J?"auto":"visible"});L.o.autoPosition&&L.setPosition()},setPosition:function(){var H=this,F,G;F=B[0]/2-H.d.container.outerHeight(true)/2;G=B[1]/2-H.d.container.outerWidth(true)/2;if(H.o.position&&Object.prototype.toString.call(H.o.position)==="[object Array]"){F=H.o.position[0]||F;G=H.o.position[1]||G}else{F=F;G=G}H.d.container.css({left:G,top:F})},watchTab:function(G){var F=this;if(A(G.target).parents(".simplemodal-container").length>0){F.inputs=A(":input:enabled:visible:first, :input:enabled:visible:last",F.d.data[0]);if(!G.shiftKey&&G.target===F.inputs[F.inputs.length-1]||G.shiftKey&&G.target===F.inputs[0]||F.inputs.length===0){G.preventDefault();F.focus(G.shiftKey?"last":"first")}}else{G.preventDefault();F.focus()}},open:function(){var F=this;F.d.iframe&&F.d.iframe.show();if(A.isFunction(F.o.onOpen)){F.o.onOpen.apply(F,[F.d])}else{F.d.overlay.show();F.d.container.show();F.d.data.show()}F.o.focus&&F.focus();F.bindEvents()},close:function(){var G=this;if(!G.d.data){return false}G.unbindEvents();if(A.isFunction(G.o.onClose)&&!G.occb){G.occb=true;G.o.onClose.apply(G,[G.d])}else{if(G.d.placeholder){var F=A("#simplemodal-placeholder");if(G.o.persist){F.replaceWith(G.d.data.removeClass("simplemodal-data").css("display",G.display))}else{G.d.data.hide().remove();F.replaceWith(G.d.orig)}}else{G.d.data.hide().remove()}G.d.container.hide().remove();G.d.overlay.hide();G.d.iframe&&G.d.iframe.hide().remove();setTimeout(function(){G.d.overlay.remove();G.d={}},10)}}}})(jQuery);function wp_confirm(H,C,F){if($("#wp-confirmpnl_overlay,#wp-confirm_panel").size()){return}var E=286,G="",A='<div id="wp-confirmpnl_overlay"></div>';G='<div id="wp-confirm_panel" class="overz wp-manage_panel wp-alert-panel" style="position:absolute;width:'+E+'px;z-index:10001;"><div class="wp-panel_outpadding overz"><div class="wp-manage_panel_block_one wp-manage-link overz"><h2 class="overz">'+H+'</h2></div><div class="wp-alert_button overz"><a href="javascript:;" class="wp-alert-sure">'+translate("Sure")+'</a><a href="javascript:;" class="wp-alert-cancel">'+translate("Cancel")+"</a></div></div></div>";$(A+G).appendTo("body");var B=$("#wp-confirm_panel");B.bind("rename",function(J,K){if(K.length){var L=this;$("a.wp-alert-sure",L).html(K);var I=setTimeout(function(){var M=$("a.wp-alert-sure",L).outerWidth(true)+$("a.wp-alert-cancel",L).outerWidth(true);$(".wp-alert_button",L).width(M);M=null;clearTimeout(I)},50)}});var D=setTimeout(function(){var I=B.find(".wp-alert_button");I.width(I.outerWidth())},30);panel_position(B,E,"auto",true,"wp-confirmpnl_overlay");$(window).resize(function(){panel_position(B,E,"auto",true,"wp-confirmpnl_overlay")});B.find("a.wp-alert-sure").click(function(I){if(C&&$.isFunction(C)){C()}B.add("#wp-confirmpnl_overlay").remove();if(D){clearTimeout(D)}I.preventDefault()}).end().find("a.wp-alert-cancel").click(function(I){if(F&&$.isFunction(F)){F()}B.add("#wp-confirmpnl_overlay").remove();if(D){clearTimeout(D)}I.preventDefault()});$(document).keydown(function(I){if(I.keyCode==13){B.find("a.wp-alert-sure").trigger("click")}});return false}function wp_editPicOnline(C){var A=parseInt(getImageProcessType())||0;var D=["feather","xiuxiu"];if(A>=D.length){A=0}var B=D[A];$LAB.script(relativeToAbsoluteURL("script/wopop2_"+B+".js")).wait(function(){wp_editPicOnlineActual(C)})}function wp_alert(F,A){if($("#wp-alertpnl_overlay,#wp-alert_panel").size()){return}var E=286,D="",B='<div id="wp-alertpnl_overlay"></div>';D='<div id="wp-alert_panel" class="overz wp-manage_panel wp-alert-panel" style="position:absolute;width:'+E+'px;z-index:10001;"><div class="wp-panel_outpadding overz"><div class="wp-manage_panel_block_one wp-manage-link overz"><h2 class="overz">'+F+'</h2></div><div class="wp-alert_button overz" style="width:55px;"><a href="javascript:;" class="wp-alert-sure">'+translate("Sure")+"</a></div></div></div>";$(B+D).appendTo("body");var C=$("#wp-alert_panel");panel_position(C,E,"auto",true,"wp-alertpnl_overlay");$(window).resize(function(){panel_position(C,E,"auto",true,"wp-alertpnl_overlay")});C.find("a.wp-alert-sure").click(function(G){C.add("#wp-alertpnl_overlay").remove();if($.isFunction(A)){A()}G.preventDefault()});$(document).keydown(function(G){if(G.keyCode==13){C.find("a.wp-alert-sure").trigger("click")}});return false}function show_dialog(A,E,F,B,D,C){var G=$.extend({},{open:function(H){},close:function(H){}},D||{});$("#osx-modal-content").modal({overlayId:"osx-overlay",containerId:"osx-container",closeHTML:null,zIndex:1000,opacity:25,onOpen:function(I){G.open(I);var J=this,M=I.container,K=M[0];var H=$("#osx-modal-data",K);if(C=="iframe"){H.html('<iframe src="'+A+'" frameborder="0" width="'+F+'" onload="this.height=this.contentWindow.document.documentElement.scrollHeight" scrolling="no"></iframe>');I.overlay.show();H.show();$("#osx-modal-content,div.close",K).show();$("#osx-modal-title",K).html(E).show();M.fadeTo("fast",1).draggable({handle:"#osx-modal-title",cursor:"move"})}else{var L=$("#wp-ajaxsend_loading2"),N=$(window);if(L.size()==0){$('<div id="wp-ajaxsend_loading2" style="width:'+N.width()+"px;height:"+N.height()+'px;z-index:9999;"><img src="'+relativeToAbsoluteURL("template/default/images/loading.gif")+'" width="16" height="16" /></div>').appendTo("body")}$.get(A,function(O){H.html(O);I.overlay.show();H.show();$("#osx-modal-content,div.close",K).show();$("#osx-modal-title",K).html(E).show();M.fadeTo("fast",1).draggable({handle:"#osx-modal-title",cursor:"move"});J.setPosition();$("#wp-ajaxsend_loading2").remove()}).error(function(){$("#wp-ajaxsend_loading2").remove();alert(translate("Request failed!"));J.close();return})}if(F>0){M.css("width",F)}M.css("height",B||"");$("#osx-modal-content").bind("add_loading",function(){var O=H.children(".loading");if(O.size()){O.remove()}$('<div class="loading" style="width:'+H.width()+"px;height:"+H.outerHeight()+'px;z-index:9999;"><img src="'+relativeToAbsoluteURL("template/default/images/loading.gif")+'" width="16" height="16" /></div>').appendTo(H)})},onClose:function(H){G.close(H);var I=this;H.container.hide();H.overlay.hide();$("#osx-modal-content").triggerHandler("dialogclose",H);$("#osx-modal-content").unbind("dialogclose");$("#osx-modal-content").unbind("add_loading");setTimeout(function(){I.close()},500)}})}function get_plugin_css(tagid,css){var setcss=$("#page_set_css").html();setcss=setcss.replace(/<style>/ig,"").replace(/<\/style>/ig,"").replace(/[\r]/g," ").replace(/[\n]/g," ").replace(/[\r\n]/g," ").replace(/\s+/g," ");var reg=eval("/\\/\\*"+tagid+"\\*\\/(.*)\\/\\*"+tagid+"\\*\\//ig");setcss=setcss.replace(reg,"");if(setcss&&$.trim(setcss)!=""){css=css.replace(/@charset [^;]+;/i,"")}var tempcss=setcss+" /*"+tagid+"*/ "+css+" /*"+tagid+"*/ ";tempcss=tempcss.replace(/&gt;/ig,">");$("#page_set_css").html("<style> "+tempcss+"</style>")}(function(F,D){var B={};var E={};F.modplugin={addCallBack:function(G,I,H){if(F.isFunction(H)){if(!B[G]){B[G]={}}B[G][I]=H}},fireCallBack:function(G,J,I,K){var H=B[G];if(!H){return false}H=H[J];if(F.isFunction(H)){return H(I,K)}else{return false}}};F.fn.execPluginCallBack=function(G,H){return F.modplugin.fireCallBack(this.attr("type"),G,this,H)};F.fn.mod_property=function(G,J){if(F.isPlainObject(G)){for(var H in G){this.mod_property(H,G[H])}return}var K=this.prop("id");if(!K){return null}var I=E[K];if(!I){E[K]=I={}}if(J!==D){I[G]=J;return J}else{return I[G]}};var A=null;function C(){if(A){return}A=Undo.Command.createModuleCommand(function(G,I){var H=F("#"+G);if(I.propval!=D){H.mod_property(I.propkey,I.propval)}else{H.del_mod_property(I.propkey)}H.execPluginCallBack("property_undo",I)},null,{returntype:"class"})}F.fn.autoundo_mod_property=function(G,K){if(K===D){return this.mod_property(G)}C();var J=this.mod_property(G);this.mod_property(G,K);var I={propkey:G,propval:J,act:"set",cmdtype:"undo"};var H={propkey:G,propval:K,act:"set",cmdtype:"redo"};if(!Undo.Command.DefaultEqAct(J,K)){new A(this.attr("id")).insertWithVals(I,H)}};F.fn.autoundo_del_mod_property=function(G){C();var I=this.mod_property(G);this.del_mod_property(G);var H={propkey:G,propval:I,act:"del",cmdtype:"undo"};var J={propkey:G,act:"del",cmdtype:"redo"};if(I!=D){new A(this.attr("id")).insertWithVals(H,J)}};F.fn.del_mod_property=function(G){var J=this.prop("id");if(!J){return null}var H=E[J];if(F.isPlainObject(H)){var I=H[G];delete H[G];return I}};F.fn.get_mod_property=function(){var H=this.prop("id");if(!H){return null}var G=E[H];return G||{}}})(jQuery);;
function footerinit(){footerdrag();footerresize();$.showSiteFooterTips();$(".full_column").each(function(){fullcolumninit($(this))})}function fullcolumninit(A){A.children(".full_width").css({left:0-canv.offset().left-$.parseInteger($("#canvas").css("borderLeftWidth")),width:$("#scroll_container_bg").width()});A.wp_rightkey();if(A.is(":not(.isplate)")){fullcolumndrag(A);fullcolumnresize(A);fullcolumndrop(A)}}function footerdrag(){var C=0;var D=canv.height();var B=Undo.Command.createModuleCommand(function(E,G){var F=$("#"+E);F.css("top",G.top);canv.height(G.canvheight);$("#scroll_container_bg").css("height",(G.canvheight+F.height())+"px");$.updateselectbgopt();$.updatepospropblk();$.canvasHeightChange()},null,{returntype:"class"});var A=null;$("#site_footer").draggable({cursor:"move",axis:"y",start:function(F,E){initCanvasHeight();var G=canv.data("layermaxheight")||0;D=canv.height();C=D-G;A=new B("site_footer");A.setOldVal({top:$.parseInteger($(this).css("top")),canvheight:D})},drag:function(H,E){var G=E.position.top-E.originalPosition.top;if(G<0){var F=0-G;if(F>C){var I=canv.data("layermaxheight")||0;E.position.top=E.originalPosition.top-C;canv.height(I);$("#scroll_container_bg").css("height",(I+$(this).height()+100)+"px");$.showselectbgopt($(this));$(".bgblk").hide();$(".posizeblk").html("x:"+(parseFloat($(this).css("left"))||0)+", y:"+E.position.top).show();$(this).triggerHandler("drag_progress",[{left:0,top:E.position.top}]);return}}$(this).triggerHandler("drag_progress",[{left:0,top:E.position.top}]);canv.height(D+G);$.showselectbgopt($(this));$(".bgblk").hide();$(".posizeblk").html("x:"+(parseFloat($(this).css("left"))||0)+", y:"+E.position.top).show();$("#scroll_container_bg").css("height",(D+G+$(this).height()+100)+"px")},stop:function(G,E){var F=E.position.top-E.originalPosition.top;canv.height(D+F);$("#scroll_container_bg").css("height",(D+F+$(this).height()+100)+"px");$.canvasHeightChange();correctFooterPos();A.insertWithNewVal({top:$.parseInteger($(this).css("top")),canvheight:D+F});A=null;$(".bgblk").show();$(".posizeblk").hide();$(this).trigger("drag_stop",[{left:parseInt($(this).css("left")),top:parseInt($(this).css("top"))}])}})}function fullcolumndrag(A){A.wp_drag()}function fullcolumnresize(A){var B=function(E){A.each(function(){var F="ui-resizable-"+E;var G=$('<div class="ui-resizable-handle '+F+'"><p class="knob "></p></div>');G.css({zIndex:1000});$(this).children(".full_width").append(G)})};var C=function(E){A.each(function(){var F="placeholder-"+E;var G=$('<div class="li-placeholder  '+F+'"></div>');G.css({zIndex:1000}).hide();$(this).children(".full_width").append(G)})};B("n");B("s");C("w");C("e");var D;A.resizable({handles:{n:">.full_width .ui-resizable-n",s:">.full_width .ui-resizable-s"},noinit:true,canvascontain:"#canvas",distance:0,concernLock:true,scroll:true,create:function(){$(this).children(".full_width").find(".ui-resizable-handle").hide()},start:function(I,E){D=$.getFullColChildMaxButtom(A);var G=$(this);var H=new ResizeCommand(G.attr("id"));var K=["top","height"];var J={};for(var F=0;F<K.length;F++){J[K[F]]=G.css(K[F])}H.setOldVal(J);$(document).data("resizeundo",H)},resize:function(H,E){var I=A.ab_pos_cnter("top");var G=$.parseInteger(A.css("height"));if($.getElementAreaInf($(this))=="canvas"){var F=Math.max(I+D,I+G);$.canvasheightresizeOrigin(F)}$(this).children(".full_content,.full_width").height($(this).height());$(this).triggerHandler("resize_progress",[{ui:E}]);$.showselectbgopt($(this));$(".bgblk").hide();$(".posizeblk").html("W:"+$(this).width()+", H:"+$(this).height()).show()},stop:function(I,E){$(this).children(".full_content,.full_width").height($(this).height());$.showselectbgopt($(this));var H=$(document).data("resizeundo");$(document).removeData("resizeundo");var G=$(this);var K=["top","height"];var J={};for(var F=0;F<K.length;F++){J[K[F]]=G.css(K[F])}$(this).triggerHandler("resize_stop",[{ui:E}]);H.insertWithNewVal(J);$(".bgblk").show();$(".posizeblk").hide()}})}function footerresize(){var A=function(I){var J="ui-resizable-"+I;var K=$('<div class="ui-resizable-handle '+J+'"><p class="knob "></p></div>');K.css({zIndex:1000});$("#site_footer >.full_width").append(K)};var E=function(I){var J="placeholder-"+I;var K=$('<div class="li-placeholder  '+J+'"></div>');K.css({zIndex:1000});$("#site_footer> .full_width").append(K)};A("n");A("s");E("w");E("e");var D=0;var B=canv.height();var H=0;var C=Undo.Command.createModuleCommand(function(I,K){var J=$("#"+I);J.css("top",K.top);J.css("height",K.height);canv.height(K.canvheight);J.children(".full_content,.full_width").height(K.height);$("#scroll_container_bg").css("height",(K.canvheight+J.height())+"px");$.updateselectbgopt();$.updatepospropblk();$.canvasHeightChange()},null,{returntype:"class"});var G=null;var F=null;$("#site_footer").resizable({handles:{n:">.full_width .ui-resizable-n",s:">.full_width .ui-resizable-s"},noinit:true,distance:0,scroll:true,create:function(){$(this).children(".full_width").find(".ui-resizable-handle").hide()},start:function(J,I){initCanvasHeight();if(F){clearTimeout(F);F=null}H=canv.data("layermaxheight")||0;B=canv.height();D=B-H;G=new C("site_footer");G.setOldVal({top:$.parseInteger($(this).css("top")),canvheight:B,height:$(this).height()});$(this).triggerHandler("resize_progress",[{ui:I}])},resize:function(K,I){var O=$(this).data("resizable");var L=O.axis;if(L=="n"){var J=$(this).height()-I.originalSize.height;if(J>D){var N=H;$(this).css({top:N,height:I.originalSize.height+D});var M=$(this).data("resize_oriscrolltop");$(this).scrollParent().scrollTop(M);$(this).children(".full_content,.full_width").height($(this).height());canv.height(H);$("#scroll_container_bg").css("height",(H+$(this).height()+100)+"px");$.showselectbgopt($(this));$(".bgblk").hide();$(".posizeblk").html("W:"+$(this).width()+", H:"+$(this).height()).show();return}canv.height(B-J);$(this).children(".full_content,.full_width").height($(this).height());$("#scroll_container_bg").css("height",(canv.height()+$(this).height()+100)+"px")}else{$(this).children(".full_content,.full_width").height($(this).height());$("#scroll_container_bg").css("height",(canv.height()+$(this).height()+100)+"px")}$.showselectbgopt($(this));$(".bgblk").hide();$(".posizeblk").html("W:"+$(this).width()+", H:"+$(this).height()).show();$(this).triggerHandler("resize_stop",[{ui:I}])},stop:function(K,I){var J=$(this);G.insertWithNewVal({top:$.parseInteger(J.css("top")),canvheight:canv.height(),height:J.height()});G=null;$(".bgblk").show();$(".posizeblk").hide();$.canvasHeightChange()}})}function fullcolumndrop(A){var C=function(D){A.each(function(){var E="placeholder-"+D;var F=$('<div class="li-placeholder  '+E+'"></div>');F.css({zIndex:1000});$(this).children(".full_content").append(F)})};C("n");C("s");C("w");C("e");var B=A.children(".full_content");B.children(".li-placeholder").hide();B.children(".placeholder-n").css({"border-top":"#FF9900 dashed 4px"});B.children(".placeholder-s").css({"border-bottom":"#FF9900 dashed 4px"});B.children(".placeholder-e").css({"border-right":"#FF9900 dashed 4px"});B.children(".placeholder-w").css({"border-left":"#FF9900 dashed 4px"});B.droppable({tolerance:"pointer",accept:".full_column,.cstlayer",drop:function(G,D){var E=$.ui.ddmanager.current;if($.getElementAreaInf($(E.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")){$(this).children(".li-placeholder").hide();var H=$(document).data("layer_final_drop_id");var F=$.chooseBiggerColumn(H,A.attr("id"));$(document).data("layer_final_drop_id",F)}}},over:function(J,N){var H=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){H=true}});if(H){return}var I=$.ui.ddmanager.current;if($.getElementAreaInf($(I.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")){var D=A.attr("id");var F=$(document).data("layer_drop_over_id");if(D!=F){var K=$.chooseBiggerColumn(F,D);if(K==D){var M=$(this);$(this).children(".li-placeholder").show();if(F){var G=$("#"+F);var E=G.children(".full_content").data("droppable");E["isover"]=0;E["isout"]=1;E._out.call(E,J)}$(document).data("layer_drop_over_id",D)}else{var L=$(this).data("droppable");L["isover"]=0;L["isout"]=1}}}}},out:function(G,D){var H=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){H=true}});if(H){return}var E=$.ui.ddmanager.current;if($.getElementAreaInf($(E.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")){$(this).children(".li-placeholder").hide();var F=$(document).data("layer_drop_over_id");if(F==A.attr("id")){$(document).removeData("layer_drop_over_id")}}}}})}function fullcolumn_propblk_init(){var B;for(var A in $.backgroundPropDefaults){(function(){var F=A;var D=null;if($.inArray(F,["bg_moveto_prevop","bg_moveto_nextop"])!=-1){var C="",E="";switch(F){case"bg_moveto_prevop":E="top";C='<div class="wp-moveto_fstlevel"><a class="property-bar-top" href="###" title="'+translate("Move to top")+'"><span>&nbsp;</span></a></div>';break;case"bg_moveto_nextop":E="bottom";C='<div class="wp-moveto_lstlevel"><a class="property-bar-bottom" href="###" title="'+translate("Move to bottom")+'"><span>&nbsp;</span></a></div>';break}D={mousedown:function(){var I=$(this);var G=I.offset();var J=$("#scroll_container");var H=J.scrollTop();$(C).appendTo(J).css({top:function(){return(G.top+H-25-39)+"px"},left:G.left+"px"}).click(function(K){$("#"+$.bgselectedid).wp_setorder(E,$.bgselectedid);$(this).remove();I.removeClass("local");K.preventDefault()})},mouseup:function(){}}}$("#"+F).mousedown(function(G){var H=$(this);H.addClass("local");if($(".wp-moveto_fstlevel,.wp-moveto_lstlevel").size()){$(".wp-moveto_fstlevel,.wp-moveto_lstlevel").remove()}if(D!=null){D.mousedown.apply(this)}G.preventDefault()}).mouseup(function(G){var I=this,H=$(I);H.removeClass("local");$.backgroundPropDefaults[F].apply(this);if(D!=null){D.mouseup.apply(this)}G.preventDefault()})})()}}(function(B){function A(C){var D={};D[C.prop("id")]="null";var F=C;while(true){var E=B.getElementFatherid(F);if(E=="none"){break}D[E]=F.prop("id");F=B("#"+E)}return D}B.chooseBiggerColumn=function(J,E){var L=E;if(J==E){return L}if(J){var K=B("#"+J);var F=B("#"+E);var N=A(K);var G=A(F);var M="canvas";if(!N[M]){M="site_footer"}var H=M;var I=M;while(H==I){H=N[H];I=G[I];if(H=="null"||I=="null"){break}}if(H=="null"){L=E}else{if(I=="null"){L=J}else{var D=B.parseInteger(B("#"+H).css("z-index"));var C=B.parseInteger(B("#"+I).css("z-index"));if(D>C){L=J}}}}return L};B.transferToColumn=function(C,F){var D=B.getElementFatherid(C);if(D!=F){var H=B("#"+F);var I=C.ab_pos("top");var E=H.ab_pos("top");var G=H;if(F!="canvas"){G=H.children(".full_content")}C.detach().attr("fatherid",F).css("top",(I-E)).appendTo(G);if(F=="site_footer"||F=="canvas"){C.removeAttr("fatherid")}}};B.getElementAreaInf=function(C){return C.attr("inbuttom")=="1"?"site_footer":"canvas"};B.transferToArea=function(C,F,J,E){var G=C.ab_pos("top");var I=B.parseInteger(B("#site_footer").css("top"));if(J=="site_footer"){var D=G-I;C.css("top",D);C.attr("inbuttom","1");C.detach().removeAttr("fatherid").appendTo(B("#site_footer").children(".full_content"));if(C.hasClass("full_column")){C.find(".cstlayer,.full_column").attr("inbuttom","1")}}else{var D=G+I;C.css("top",D);var H=B("#canvas").height();if(H<D+C.height()&&!E){B.canvasheightresizeOrigin(D+C.height())}C.removeAttr("inbuttom");C.detach().removeAttr("fatherid").appendTo(B("#canvas"));if(C.hasClass("full_column")){C.find(".cstlayer,.full_column").removeAttr("inbuttom")}}if(C.is(".ui-modselected")){B.hidWidgetBorder(C);B.showWidgetBorder(C)}if(C.is(".full_column")){C.find(".cstlayer,.full_column").each(function(){if(B(this).is(".ui-modselected")){B.hidWidgetBorder(B(this));B.showWidgetBorder(B(this))}})}};B.addFullColumn=function(D){if(B('.fullpage_alllist:not([deleted="deleted"])').length>0){wp_alert(translate("fullpage.already can not add fullcolumn"));return false}var C=function(I,E){var G=I;if(E){var H=B(G).filter(".full_column");var F=H.prop("id");var J="layer"+fGuid();G=G.replace(new RegExp(F,"g"),J)}var K=B(G).appendTo("#canvas").css("top",D);K=K.filter(".full_column");fullcolumninit(K);K.css("z-index",100);B(".ui-modselected").each(function(){B.hidWidgetBorder(B(this));if(B(this).hasClass("graphic_edited")){actived_graphic()}});B.selectbgdiv(K);new AddCommand(K.prop("id")).insert();var L=new Array();L[0]=new Array(parseInt(B("#"+K.prop("id")).css("z-index")),K.prop("id"));B.zindexsort_new(L)};if(B.addFullColumn.html_cache){C(B.addFullColumn.html_cache,true);return}B.ajax({type:"GET",url:parseToURL("wp_widgets","gtfullcolumn"),success:function(E){B.addFullColumn.html_cache=E;C(E,false)},error:function(F,E,G){wp_alert((G||E)+"(add a fullcolumn).<br/>"+translate("Request failed!"));return false}})};B.curSelectableFather=function(){var C=B(".ui-modselected");if(C.length==0){B(document).data("cur_selectable_father",null);return null}else{var D=B.getElementFatherid(C.filter(":first"));B(document).data("cur_selectable_father",D);return D}};B.getElementFatherid=function(C){if(C.prop("id")=="canvas"||C.prop("id")=="site_footer"){return"none"}var D=C.attr("fatherid");if(!D||D==""){if(C.closest("#canvas").length>0){D="canvas"}else{if(C.closest("#site_footer").length>0){D="site_footer"}}}if(!B("#"+D).length){if(C.closest("#canvas").length>0){D="canvas"}else{if(C.closest("#site_footer").length>0){D="site_footer"}}C.removeAttr("fatherid")}return D};B.fn.ab_pos=function(D){var C=B(this);if(C.prop("id")=="canvas"||C.prop("id")=="site_footer"){return 0}if(D=="left"||D=="top"){if(!C.attr("fatherid")||C.attr("fatherid")==""){return C.rel_pos(D)}return C.rel_pos(D)+B("#"+C.attr("fatherid")).ab_pos(D)}};B.fn.ab_pos_cnter=function(C){var D=B(this).ab_pos(C);if(B(this).closest("#site_footer").length>0&&C=="top"){return D+B.parseInteger(B("#site_footer").css(C))}return D};B.fn.rel_pos=function(C){if(C=="left"||C=="top"){return B.parseInteger(B(this).css(C))}};B.getFullColChildMaxButtom=function(C){var E=C.ab_pos_cnter("top");var D=E;C.find(".cstlayer,.full_column").each(function(){var F=B(this);var G=0;if(F.hasClass("cstlayer")){G=B.divrotate.getDegreeModMaxPoint(F,null,"buttom")}else{G=F.ab_pos_cnter("top")+B.parseInteger(F.css("height"))}if(D<G){D=G}});return D-E};B.getFullColumnButtomPos=function(C){if(C.hasClass("cstlayer")){return B.divrotate.getDegreeModMaxPoint(C,null,"buttom")}else{if(C.hasClass("full_column")){var D=0;C.find(".cstlayer,.full_column").andSelf().each(function(){var E=B(this);var F=0;if(E.hasClass("cstlayer")){F=B.divrotate.getDegreeModMaxPoint(E,null,"buttom")}else{F=E.ab_pos_cnter("top")+B.parseInteger(E.css("height"))}if(D<F){D=F}});return D}}};B.saveFullColumnObj=function(C){var E=C.children(".full_width").data("backgroundprops")||{};var D=C.find(".full_content").data("backgroundprops")||{};var F=C.height();var G={};if(C.prop("id")!="site_footer"){G={top:B.parseInteger(C.css("top")),zindex:B.parseInteger(C.css("z-index")),lock:C.data("cstlayerstatus"),fixdisplay:C.attr("infixed")}}return B.extend({fullbackgroundprop:E,contentbackgroundprop:D,footerheight:F},G)}})(jQuery);;
eval(function(C,E,D,F,B,A){B=function(G){return(G<E?"":B(parseInt(G/E)))+((G=G%E)>35?String.fromCharCode(G+29):G.toString(36))};if(!"".replace(/^/,String)){while(D--){A[B(D)]=F[D]||B(D)}F=[function(G){return A[G]}];B=function(){return"\\w+"};D=1}while(D--){if(F[D]){C=C.replace(new RegExp("\\b"+B(D)+"\\b","g"),F[D])}}return C}("F S(s){4 g=s.g;4 e=s.e;4 d=s.d;4 w=s.D;4 h=s.C;4 a=s.a;4 n=g+'n';4 k=\"M(\"+n+\")\";6($.j.Q){6($.j.T>=9){a.5('-z-c',k);a.5(\"-z-c-p\",\"b b\")}f{4 H=v.Z*g/I; 4 7=v.13(H);4 8=v.10(H);4 m=g%J;a.x('8',8);a.x('7',7);6(m>=0&&m<=K){4 t=e-((h*8+w*7)/2-w/2);4 r=d-((w*8+h*7)/2-h/2)}6(m>K&&m<=I){6(h*8+w*7*-1>w)4 t=e-((h*8+w*7*-1)/2-w/2);f 4 t=e+(w/2-(h*8+w*7*-1)/2);6((h*7*-1+w*8)>h)4 r=d-((h*7*-1+w*8)/2-h/2);f 4 r=d+(h/2-(h*7*-1+w*8)/2)}6(m>I&&m<=N){4 t=e-((-1*h*8+-1*w*7)/2-w/2);4 r=d-((-1*w*8+-1*h*7)/2-h/2)}6(m>N&&m<J){4 t=e-((w*7+h*8*-1)/2-w/2);6(-1*w*8+h*7>h)4 r=d-(-1*w*8+h*7-h)/2;f 4 r=d+(h-(-1*w*8+h*7))/2}a.5({V:\"W:X.Y.14(1b=\"+7+\",1d=\"+(-8)+\",1e=\"+8+\",1f=\"+7+\",16='15 17')\"});a.5({'e':t+'L','d':r+'L'})}}f 6($.j.P){a.5('-B-c',k);a.5(\"-B-c-p\",\"b b\")}f 6($.j.U){a.5('-A-c',k);a.5(\"-A-c-p\",\"b b\")}f 6($.j.R){a.5('-o-c',k);a.5(\"-o-c-p\",\"b b\")}}F 1a(a){a.19(F(){4 g=11($(3).i('n'))||0;$(3).x('n',g);6(g!=0){4 n=g+'n';4 k=\"M(\"+n+\")\";6($.j.U){$(3).5('-A-c',k);$(3).5(\"-A-c-p\",\"b b\")}f 6($.j.P){$(3).5('-B-c',k);$(3).5(\"-B-c-p\",\"b b\")}f 6($.j.R){$(3).5('-o-c',k);$(3).5(\"-o-c-p\",\"b b\")}f 6($.j.Q){6($.j.T>=9){$(3).5('-z-c',k);$(3).5(\"-z-c-p\",\"b b\")}f{$(3).x('1c',$(3).D()).x('12',$(3).C());4 y=[$(3).q().e,$(3).q().d],u=[];S({g:g,e:$(3).q().e,d:$(3).q().d,D:$(3).D(),C:$(3).C(),a:$(3)});u=18($(\"#\"+$(3).i('l')),g);4 G=v.O(y[0]-u[0]),E=v.O(y[1]-u[1]);6(y[0]>u[0])$(\"#\"+$(3).i('l')).5('e',$(\"#\"+$(3).i('l')).q().e+G);f $(\"#\"+$(3).i('l')).5('e',$(\"#\"+$(3).i('l')).q().e-G);6(y[1]>u[1])$(\"#\"+$(3).i('l')).5('d',$(\"#\"+$(3).i('l')).q().d+E);f $(\"#\"+$(3).i('l')).5('d',$(\"#\"+$(3).i('l')).q().d-E)}}}})}",62,78,"|||this|var|css|if|cosx|sinx||dom|0px|transform|top|left|else|degree||attr|browser|degp|id|angle|deg||origin|position|topNew|json|leftNew|arr1|Math||data|arr|ms|moz|webkit|height|width|relativeTop|function|relativeLeft|rotation|180|360|90|px|rotate|270|abs|safari|msie|opera|ieRotate|version|mozilla|filter|progid|DXImageTransform|Microsoft|PI|sin|parseInt|IEHeight|cos|Matrix|auto|SizingMethod|expand|getLeftPointProxy|each|rotateDom|M11|IEWidth|M12|M21|M22".split("|"),0,{}));;
/* VelocityJS.org (1.1.0). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
/* VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */
(function(E){if(E.jQuery){return}var H=function(K,J){return new H.fn.init(K,J)};H.isWindow=function(J){return J!=null&&J==J.window};H.type=function(J){if(J==null){return J+""}return typeof J==="object"||typeof J==="function"?A[F.call(J)]||"object":typeof J};H.isArray=Array.isArray||function(J){return H.type(J)==="array"};function D(L){var K=L.length,J=H.type(L);if(J==="function"||H.isWindow(L)){return false}if(L.nodeType===1&&K){return true}return J==="array"||K===0||typeof K==="number"&&K>0&&(K-1) in L}H.isPlainObject=function(K){var J;if(!K||H.type(K)!=="object"||K.nodeType||H.isWindow(K)){return false}try{if(K.constructor&&!B.call(K,"constructor")&&!B.call(K.constructor.prototype,"isPrototypeOf")){return false}}catch(L){return false}for(J in K){}return J===undefined||B.call(K,J)};H.each=function(L,J,P){var O,K=0,M=L.length,N=D(L);if(P){if(N){for(;K<M;K++){O=J.apply(L[K],P);if(O===false){break}}}else{for(K in L){O=J.apply(L[K],P);if(O===false){break}}}}else{if(N){for(;K<M;K++){O=J.call(L[K],K,L[K]);if(O===false){break}}}else{for(K in L){O=J.call(L[K],K,L[K]);if(O===false){break}}}}return L};H.data=function(K,J,M){if(M===undefined){var N=K[H.expando],L=N&&I[N];if(J===undefined){return L}else{if(L){if(J in L){return L[J]}}}}else{if(J!==undefined){var N=K[H.expando]||(K[H.expando]=++H.uuid);I[N]=I[N]||{};I[N][J]=M;return M}}};H.removeData=function(K,L){var M=K[H.expando],J=M&&I[M];if(J){H.each(L,function(O,N){delete J[N]})}};H.extend=function(){var J,N,L,R,P,K,Q=arguments[0]||{},O=1,M=arguments.length,S=false;if(typeof Q==="boolean"){S=Q;Q=arguments[O]||{};O++}if(typeof Q!=="object"&&H.type(Q)!=="function"){Q={}}if(O===M){Q=this;O--}for(;O<M;O++){if((P=arguments[O])!=null){for(R in P){J=Q[R];L=P[R];if(Q===L){continue}if(S&&L&&(H.isPlainObject(L)||(N=H.isArray(L)))){if(N){N=false;K=J&&H.isArray(J)?J:[]}else{K=J&&H.isPlainObject(J)?J:{}}Q[R]=H.extend(S,K,L)}else{if(L!==undefined){Q[R]=L}}}}}return Q};H.queue=function(M,J,N){function K(Q,O){var P=O||[];if(Q!=null){if(D(Object(Q))){(function(T,R){var U=+R.length,V=0,S=T.length;while(V<U){T[S++]=R[V++]}if(U!==U){while(R[V]!==undefined){T[S++]=R[V++]}}T.length=S;return T})(P,typeof Q==="string"?[Q]:Q)}else{[].push.call(P,Q)}}return P}if(!M){return}J=(J||"fx")+"queue";var L=H.data(M,J);if(!N){return L||[]}if(!L||H.isArray(N)){L=H.data(M,J,K(N))}else{L.push(N)}return L};H.dequeue=function(K,J){H.each(K.nodeType?[K]:K,function(L,N){J=J||"fx";var O=H.queue(N,J),M=O.shift();if(M==="inprogress"){M=O.shift()}if(M){if(J==="fx"){O.unshift("inprogress")}M.call(N,function(){H.dequeue(N,J)})}})};H.fn=H.prototype={init:function(J){if(J.nodeType){this[0]=J;return this}else{throw new Error("Not a DOM node.")}},offset:function(){var J=this[0].getBoundingClientRect?this[0].getBoundingClientRect():{top:0,left:0};return{top:J.top+(E.pageYOffset||document.scrollTop||0)-(document.clientTop||0),left:J.left+(E.pageXOffset||document.scrollLeft||0)-(document.clientLeft||0)}},position:function(){function M(){var N=this.offsetParent||document;while(N&&(!N.nodeType.toLowerCase==="html"&&N.style.position==="static")){N=N.offsetParent}return N||document}var L=this[0],M=M.apply(L),J=this.offset(),K=/^(?:body|html)$/i.test(M.nodeName)?{top:0,left:0}:H(M).offset();J.top-=parseFloat(L.style.marginTop)||0;J.left-=parseFloat(L.style.marginLeft)||0;if(M.style){K.top+=parseFloat(M.style.borderTopWidth)||0;K.left+=parseFloat(M.style.borderLeftWidth)||0}return{top:J.top-K.top,left:J.left-K.left}}};var I={};H.expando="velocity"+(new Date().getTime());H.uuid=0;var A={},B=A.hasOwnProperty,F=A.toString;var C="Boolean Number String Function Array Date RegExp Object Error".split(" ");for(var G=0;G<C.length;G++){A["[object "+C[G]+"]"]=C[G].toLowerCase()}H.fn.init.prototype=H.fn;E.Velocity={Utilities:H}})(window);(function(A){if(typeof module==="object"&&typeof module.exports==="object"){module.exports=A()}else{if(typeof define==="function"&&define.amd){define(A)}else{A()}}}(function(){return function(K,I,H,R){var L=(function(){if(H.documentMode){return H.documentMode}else{for(var Y=7;Y>4;Y--){var Z=H.createElement("div");Z.innerHTML="<!--[if IE "+Y+"]><span></span><![endif]-->";if(Z.getElementsByTagName("span").length){Z=null;return Y}}}return R})();var E=(function(){var Y=0;return I.webkitRequestAnimationFrame||I.mozRequestAnimationFrame||function(Z){var a=(new Date()).getTime(),b;b=Math.max(0,16-(a-Y));Y=a+b;return setTimeout(function(){Z(a+b)},b)}})();function O(Z){var c=-1,a=Z?Z.length:0,b=[];while(++c<a){var Y=Z[c];if(Y){b.push(Y)}}return b}function C(Y){if(G.isWrapped(Y)){Y=[].slice.call(Y)}else{if(G.isNode(Y)){Y=[Y]}}return Y}var G={isString:function(Y){return(typeof Y==="string")},isArray:Array.isArray||function(Y){return Object.prototype.toString.call(Y)==="[object Array]"},isFunction:function(Y){return Object.prototype.toString.call(Y)==="[object Function]"},isNode:function(Y){return Y&&Y.nodeType},isNodeList:function(Y){return typeof Y==="object"&&/^\[object (HTMLCollection|NodeList|Object)\]$/.test(Object.prototype.toString.call(Y))&&Y.length!==R&&(Y.length===0||(typeof Y[0]==="object"&&Y[0].nodeType>0))},isWrapped:function(Y){return Y&&(Y.jquery||(I.Zepto&&I.Zepto.zepto.isZ(Y)))},isSVG:function(Y){return I.SVGElement&&(Y instanceof I.SVGElement)},isEmptyObject:function(Y){for(var Z in Y){return false}return true}};var S,U=false;if(K.fn&&K.fn.jquery){S=K;U=true}else{S=I.Velocity.Utilities}if(L<=8&&!U){throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.")}else{if(L<=7){jQuery.fn.velocity=jQuery.fn.animate;return}}var M=400,J="swing";var Q={State:{isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),isAndroid:/Android/i.test(navigator.userAgent),isGingerbread:/Android 2\.3\.[3-7]/i.test(navigator.userAgent),isChrome:I.chrome,isFirefox:/Firefox/i.test(navigator.userAgent),prefixElement:H.createElement("div"),prefixMatches:{},scrollAnchor:null,scrollPropertyLeft:null,scrollPropertyTop:null,isTicking:false,calls:[]},CSS:{},Utilities:S,Redirects:{},Easings:{},Promise:I.Promise,defaults:{queue:"",duration:M,easing:J,begin:R,complete:R,progress:R,display:R,visibility:R,loop:false,delay:false,mobileHA:true,_cacheValues:true},init:function(Y){S.data(Y,"velocity",{isSVG:G.isSVG(Y),isAnimating:false,computedStyle:null,tweensContainer:null,rootPropertyValueCache:{},transformCache:{}})},hook:null,mock:false,version:{major:1,minor:1,patch:0},debug:false};if(I.pageYOffset!==R){Q.State.scrollAnchor=I;Q.State.scrollPropertyLeft="pageXOffset";Q.State.scrollPropertyTop="pageYOffset"}else{Q.State.scrollAnchor=H.documentElement||H.body.parentNode||H.body;Q.State.scrollPropertyLeft="scrollLeft";Q.State.scrollPropertyTop="scrollTop"}function F(Y){var Z=S.data(Y,"velocity");return Z===null?R:Z}function B(Y){return function(Z){return Math.round(Z*Y)*(1/Y)}}function P(q,m,p,l){var n=4,s=0.001,Z=1e-07,t=10,h=11,y=1/(h-1),o="Float32Array" in I;if(arguments.length!==4){return false}for(var d=0;d<4;++d){if(typeof arguments[d]!=="number"||isNaN(arguments[d])||!isFinite(arguments[d])){return false}}q=Math.min(q,1);p=Math.min(p,1);q=Math.max(q,0);p=Math.max(p,0);var c=o?new Float32Array(h):new Array(h);function x(i,f){return 1-3*f+3*i}function u(i,f){return 3*f-6*i}function v(f){return 3*f}function g(f,Aa,i){return((x(Aa,i)*f+u(Aa,i))*f+v(Aa))*f}function z(f,Aa,i){return 3*x(Aa,i)*f*f+2*u(Aa,i)*f+v(Aa)}function w(Ac,Aa){for(var f=0;f<n;++f){var Ad=z(Aa,q,p);if(Ad===0){return Aa}var Ab=g(Aa,q,p)-Ac;Aa-=Ab/Ad}return Aa}function a(){for(var f=0;f<h;++f){c[f]=g(f*y,q,p)}}function k(Ad,Ab,Ae){var Ac,Aa,f=0;do{Aa=Ab+(Ae-Ab)/2;Ac=g(Aa,q,p)-Ad;if(Ac>0){Ae=Aa}else{Ab=Aa}}while(Math.abs(Ac)>Z&&++f<t);return Aa}function e(Ad){var i=0,Ae=1,Ab=h-1;for(;Ae!=Ab&&c[Ae]<=Ad;++Ae){i+=y}--Ae;var Ac=(Ad-c[Ae])/(c[Ae+1]-c[Ae]),f=i+Ac*y,Aa=z(f,q,p);if(Aa>=s){return w(Ad,f)}else{if(Aa==0){return f}else{return k(Ad,i,i+y)}}}var j=false;function r(){j=true;if(q!=m||p!=l){a()}}var b=function(f){if(!j){r()}if(q===m&&p===l){return f}if(f===0){return 0}if(f===1){return 1}return g(e(f),m,l)};b.getControlPoints=function(){return[{x:q,y:m},{x:p,y:l}]};var Y="generateBezier("+[q,m,p,l]+")";b.toString=function(){return Y};return b}var D=(function(){function Y(c){return(-c.tension*c.x)-(c.friction*c.v)}function b(e,c,d){var f={x:e.x+d.dx*c,v:e.v+d.dv*c,tension:e.tension,friction:e.friction};return{dx:f.v,dv:Y(f)}}function Z(f,k){var j={dx:f.v,dv:Y(f)},h=b(f,k*0.5,j),i=b(f,k*0.5,h),l=b(f,k,i),e=1/6*(j.dx+2*(h.dx+i.dx)+l.dx),g=1/6*(j.dv+2*(h.dv+i.dv)+l.dv);f.x=f.x+e*k;f.v=f.v+g*k;return f}return function a(c,f,h){var d={x:-1,v:0,tension:null,friction:null},k=[0],i=0,e=1/10000,j=16/1000,g,m,l;c=parseFloat(c)||500;f=parseFloat(f)||20;h=h||null;d.tension=c;d.friction=f;g=h!==null;if(g){i=a(c,f);m=i/h*j}else{m=j}while(true){l=Z(l||d,m);k.push(1+l.x);i+=16;if(!(Math.abs(l.x)>e&&Math.abs(l.v)>e)){break}}return !g?i:function(n){return k[(n*(k.length-1))|0]}}}());Q.Easings={linear:function(Y){return Y},swing:function(Y){return 0.5-Math.cos(Y*Math.PI)/2},spring:function(Y){return 1-(Math.cos(Y*4.5*Math.PI)*Math.exp(-Y*6))}};S.each([["ease",[0.25,0.1,0.25,1]],["ease-in",[0.42,0,1,1]],["ease-out",[0,0,0.58,1]],["ease-in-out",[0.42,0,0.58,1]],["easeInSine",[0.47,0,0.745,0.715]],["easeOutSine",[0.39,0.575,0.565,1]],["easeInOutSine",[0.445,0.05,0.55,0.95]],["easeInQuad",[0.55,0.085,0.68,0.53]],["easeOutQuad",[0.25,0.46,0.45,0.94]],["easeInOutQuad",[0.455,0.03,0.515,0.955]],["easeInCubic",[0.55,0.055,0.675,0.19]],["easeOutCubic",[0.215,0.61,0.355,1]],["easeInOutCubic",[0.645,0.045,0.355,1]],["easeInQuart",[0.895,0.03,0.685,0.22]],["easeOutQuart",[0.165,0.84,0.44,1]],["easeInOutQuart",[0.77,0,0.175,1]],["easeInQuint",[0.755,0.05,0.855,0.06]],["easeOutQuint",[0.23,1,0.32,1]],["easeInOutQuint",[0.86,0,0.07,1]],["easeInExpo",[0.95,0.05,0.795,0.035]],["easeOutExpo",[0.19,1,0.22,1]],["easeInOutExpo",[1,0,0,1]],["easeInCirc",[0.6,0.04,0.98,0.335]],["easeOutCirc",[0.075,0.82,0.165,1]],["easeInOutCirc",[0.785,0.135,0.15,0.86]]],function(Y,Z){Q.Easings[Z[0]]=P.apply(null,Z[1])});function A(a,Z){var Y=a;if(G.isString(a)){if(!Q.Easings[a]){Y=false}}else{if(G.isArray(a)&&a.length===1){Y=B.apply(null,a)}else{if(G.isArray(a)&&a.length===2){Y=D.apply(null,a.concat([Z]))}else{if(G.isArray(a)&&a.length===4){Y=P.apply(null,a)}else{Y=false}}}}if(Y===false){if(Q.Easings[Q.defaults.easing]){Y=Q.defaults.easing}else{Y=J}}return Y}var X=Q.CSS={RegEx:{isHex:/^#([A-f\d]{3}){1,2}$/i,valueUnwrap:/^[A-z]+\((.*)\)$/i,wrappedValueAlreadyExtracted:/[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,valueSplit:/([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/ig},Lists:{colors:["fill","stroke","stopColor","color","backgroundColor","borderColor","borderTopColor","borderRightColor","borderBottomColor","borderLeftColor","outlineColor"],transformsBase:["translateX","translateY","scale","scaleX","scaleY","skewX","skewY","rotateZ"],transforms3D:["transformPerspective","translateZ","scaleZ","rotateX","rotateY"]},Hooks:{templates:{"textShadow":["Color X Y Blur","black 0px 0px 0px"],"boxShadow":["Color X Y Blur Spread","black 0px 0px 0px 0px"],"clip":["Top Right Bottom Left","0px 0px 0px 0px"],"backgroundPosition":["X Y","0% 0%"],"transformOrigin":["X Y Z","50% 50% 0px"],"perspectiveOrigin":["X Y","50% 50%"]},registered:{},register:function(){for(var c=0;c<X.Lists.colors.length;c++){var Z=(X.Lists.colors[c]==="color")?"0 0 0 1":"255 255 255 1";X.Hooks.templates[X.Lists.colors[c]]=["Red Green Blue Alpha",Z]}var d,e,a;if(L){for(d in X.Hooks.templates){e=X.Hooks.templates[d];a=e[0].split(" ");var f=e[1].match(X.RegEx.valueSplit);if(a[0]==="Color"){a.push(a.shift());f.push(f.shift());X.Hooks.templates[d]=[a.join(" "),f.join(" ")]}}}for(d in X.Hooks.templates){e=X.Hooks.templates[d];a=e[0].split(" ");for(var c in a){var Y=d+a[c],b=c;X.Hooks.registered[Y]=[d,b]}}},getRoot:function(Z){var Y=X.Hooks.registered[Z];if(Y){return Y[0]}else{return Z}},cleanRootPropertyValue:function(Y,Z){if(X.RegEx.valueUnwrap.test(Z)){Z=Z.match(X.RegEx.valueUnwrap)[1]}if(X.Values.isCSSNullValue(Z)){Z=X.Hooks.templates[Y][1]}return Z},extractValue:function(Z,b){var Y=X.Hooks.registered[Z];if(Y){var a=Y[0],c=Y[1];b=X.Hooks.cleanRootPropertyValue(a,b);return b.toString().match(X.RegEx.valueSplit)[c]}else{return b}},injectValue:function(Z,f,c){var b=X.Hooks.registered[Z];if(b){var d=b[0],a=b[1],e,Y;c=X.Hooks.cleanRootPropertyValue(d,c);e=c.toString().match(X.RegEx.valueSplit);e[a]=f;Y=e.join(" ");return Y}else{return c}}},Normalizations:{registered:{clip:function(Y,a,b){switch(Y){case"name":return"clip";case"extract":var Z;if(X.RegEx.wrappedValueAlreadyExtracted.test(b)){Z=b}else{Z=b.toString().match(X.RegEx.valueUnwrap);Z=Z?Z[1].replace(/,(\s+)?/g," "):b}return Z;case"inject":return"rect("+b+")"}},blur:function(Y,b,c){switch(Y){case"name":return"-webkit-filter";case"extract":var a=parseFloat(c);if(!(a||a===0)){var Z=c.toString().match(/blur\(([0-9]+[A-z]+)\)/i);if(Z){a=Z[1]}else{a=0}}return a;case"inject":if(!parseFloat(c)){return"none"}else{return"blur("+c+")"}}},opacity:function(Y,a,b){if(L<=8){switch(Y){case"name":return"filter";case"extract":var Z=b.toString().match(/alpha\(opacity=(.*)\)/i);if(Z){b=Z[1]/100}else{b=1}return b;case"inject":a.style.zoom=1;if(parseFloat(b)>=1){return""}else{return"alpha(opacity="+parseInt(parseFloat(b)*100,10)+")"}}}else{switch(Y){case"name":return"opacity";case"extract":return b;case"inject":return b}}}},register:function(){if(!(L<=9)&&!Q.State.isGingerbread){X.Lists.transformsBase=X.Lists.transformsBase.concat(X.Lists.transforms3D)}for(var Y=0;Y<X.Lists.transformsBase.length;Y++){(function(){var Z=X.Lists.transformsBase[Y];X.Normalizations.registered[Z]=function(a,c,d){switch(a){case"name":return"transform";case"extract":if(F(c)===R||F(c).transformCache[Z]===R){return/^scale/i.test(Z)?1:0}else{return F(c).transformCache[Z].replace(/[()]/g,"")}case"inject":var b=false;switch(Z.substr(0,Z.length-1)){case"translate":b=!/(%|px|em|rem|vw|vh|\d)$/i.test(d);break;case"scal":case"scale":if(Q.State.isAndroid&&F(c).transformCache[Z]===R&&d<1){d=1}b=!/(\d)$/i.test(d);break;case"skew":b=!/(deg|\d)$/i.test(d);break;case"rotate":b=!/(deg|\d)$/i.test(d);break}if(!b){F(c).transformCache[Z]="("+d+")"}return F(c).transformCache[Z]}}})()}for(var Y=0;Y<X.Lists.colors.length;Y++){(function(){var Z=X.Lists.colors[Y];X.Normalizations.registered[Z]=function(a,e,f){switch(a){case"name":return Z;case"extract":var d;if(X.RegEx.wrappedValueAlreadyExtracted.test(f)){d=f}else{var b,c={black:"rgb(0, 0, 0)",blue:"rgb(0, 0, 255)",gray:"rgb(128, 128, 128)",green:"rgb(0, 128, 0)",red:"rgb(255, 0, 0)",white:"rgb(255, 255, 255)"};if(/^[A-z]+$/i.test(f)){if(c[f]!==R){b=c[f]}else{b=c.black}}else{if(X.RegEx.isHex.test(f)){b="rgb("+X.Values.hexToRgb(f).join(" ")+")"}else{if(!(/^rgba?\(/i.test(f))){b=c.black}}}d=(b||f).toString().match(X.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g," ")}if(!(L<=8)&&d.split(" ").length===3){d+=" 1"}return d;case"inject":if(L<=8){if(f.split(" ").length===4){f=f.split(/\s+/).slice(0,3).join(" ")}}else{if(f.split(" ").length===3){f+=" 1"}}return(L<=8?"rgb":"rgba")+"("+f.replace(/\s+/g,",").replace(/\.(\d)+(?=,)/g,"")+")"}}})()}}},Names:{camelCase:function(Y){return Y.replace(/-(\w)/g,function(Z,a){return a.toUpperCase()})},SVGAttribute:function(Z){var Y="width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";if(L||(Q.State.isAndroid&&!Q.State.isChrome)){Y+="|transform"}return new RegExp("^("+Y+")$","i").test(Z)},prefixCheck:function(a){if(Q.State.prefixMatches[a]){return[Q.State.prefixMatches[a],true]}else{var b=["","Webkit","Moz","ms","O"];for(var Y=0,Z=b.length;Y<Z;Y++){var c;if(Y===0){c=a}else{c=b[Y]+a.replace(/^\w/,function(d){return d.toUpperCase()})}if(G.isString(Q.State.prefixElement.style[c])){Q.State.prefixMatches[a]=c;return[c,true]}}return[a,false]}}},Values:{hexToRgb:function(Z){var a=/^#?([a-f\d])([a-f\d])([a-f\d])$/i,b=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i,Y;Z=Z.replace(a,function(e,d,c,f){return d+d+c+c+f+f});Y=b.exec(Z);return Y?[parseInt(Y[1],16),parseInt(Y[2],16),parseInt(Y[3],16)]:[0,0,0]},isCSSNullValue:function(Y){return(Y==0||/^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(Y))},getUnitType:function(Y){if(/^(rotate|skew)/i.test(Y)){return"deg"}else{if(/(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(Y)){return""}else{return"px"}}},getDisplayType:function(Z){var Y=Z&&Z.tagName.toString().toLowerCase();if(/^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(Y)){return"inline"}else{if(/^(li)$/i.test(Y)){return"list-item"}else{if(/^(tr)$/i.test(Y)){return"table-row"}else{return"block"}}}},addClass:function(Z,Y){if(Z.classList){Z.classList.add(Y)}else{Z.className+=(Z.className.length?" ":"")+Y}},removeClass:function(Z,Y){if(Z.classList){Z.classList.remove(Y)}else{Z.className=Z.className.toString().replace(new RegExp("(^|\\s)"+Y.split(" ").join("|")+"(\\s|$)","gi")," ")}}},getPropertyValue:function(Y,c,d,b){function h(i,j){var k=0;if(L<=8){k=S.css(i,j)}else{var o=false;if(/^(width|height)$/.test(j)&&X.getPropertyValue(i,"display")===0){o=true;X.setPropertyValue(i,"display",X.Values.getDisplayType(i))}function m(){if(o){X.setPropertyValue(i,"display","none")}}if(!b){if(j==="height"&&X.getPropertyValue(i,"boxSizing").toString().toLowerCase()!=="border-box"){var q=i.offsetHeight-(parseFloat(X.getPropertyValue(i,"borderTopWidth"))||0)-(parseFloat(X.getPropertyValue(i,"borderBottomWidth"))||0)-(parseFloat(X.getPropertyValue(i,"paddingTop"))||0)-(parseFloat(X.getPropertyValue(i,"paddingBottom"))||0);m();return q}else{if(j==="width"&&X.getPropertyValue(i,"boxSizing").toString().toLowerCase()!=="border-box"){var l=i.offsetWidth-(parseFloat(X.getPropertyValue(i,"borderLeftWidth"))||0)-(parseFloat(X.getPropertyValue(i,"borderRightWidth"))||0)-(parseFloat(X.getPropertyValue(i,"paddingLeft"))||0)-(parseFloat(X.getPropertyValue(i,"paddingRight"))||0);m();return l}}}var n;if(F(i)===R){n=I.getComputedStyle(i,null)}else{if(!F(i).computedStyle){n=F(i).computedStyle=I.getComputedStyle(i,null)}else{n=F(i).computedStyle}}if((L||Q.State.isFirefox)&&j==="borderColor"){j="borderTopColor"}if(L===9&&j==="filter"){k=n.getPropertyValue(j)}else{k=n[j]}if(k===""||k===null){k=i.style[j]}m()}if(k==="auto"&&/^(top|right|bottom|left)$/i.test(j)){var p=h(i,"position");if(p==="fixed"||(p==="absolute"&&/top|left/i.test(j))){k=S(i).position()[j]+"px"}}return k}var g;if(X.Hooks.registered[c]){var Z=c,f=X.Hooks.getRoot(Z);if(d===R){d=X.getPropertyValue(Y,X.Names.prefixCheck(f)[0])}if(X.Normalizations.registered[f]){d=X.Normalizations.registered[f]("extract",Y,d)}g=X.Hooks.extractValue(Z,d)}else{if(X.Normalizations.registered[c]){var e,a;e=X.Normalizations.registered[c]("name",Y);if(e!=="transform"){a=h(Y,X.Names.prefixCheck(e)[0]);if(X.Values.isCSSNullValue(a)&&X.Hooks.templates[c]){a=X.Hooks.templates[c][1]}}g=X.Normalizations.registered[c]("extract",Y,a)}}if(!/^[\d-]/.test(g)){if(F(Y)&&F(Y).isSVG&&X.Names.SVGAttribute(c)){if(/^(height|width)$/i.test(c)){g=Y.getBBox()[c]}else{g=Y.getAttribute(c)}}else{g=h(Y,X.Names.prefixCheck(c)[0])}}if(X.Values.isCSSNullValue(g)){g=0}if(Q.debug>=2){console.log("Get "+c+": "+g)}return g},setPropertyValue:function(Y,Z,f,b,g){var e=Z;if(Z==="scroll"){if(g.container){g.container["scroll"+g.direction]=f}else{if(g.direction==="Left"){I.scrollTo(f,g.alternateValue)}else{I.scrollTo(g.alternateValue,f)}}}else{if(X.Normalizations.registered[Z]&&X.Normalizations.registered[Z]("name",Y)==="transform"){X.Normalizations.registered[Z]("inject",Y,f);e="transform";f=F(Y).transformCache[Z]}else{if(X.Hooks.registered[Z]){var c=Z,d=X.Hooks.getRoot(Z);b=b||X.getPropertyValue(Y,d);f=X.Hooks.injectValue(c,f,b);Z=d}if(X.Normalizations.registered[Z]){f=X.Normalizations.registered[Z]("inject",Y,f);Z=X.Normalizations.registered[Z]("name",Y)}e=X.Names.prefixCheck(Z)[0];if(L<=8){try{Y.style[e]=f}catch(a){if(Q.debug){console.log("Browser does not support ["+f+"] for ["+e+"]")}}}else{if(F(Y)&&F(Y).isSVG&&X.Names.SVGAttribute(Z)){Y.setAttribute(Z,f)}else{Y.style[e]=f}}if(Q.debug>=2){console.log("Set "+Z+" ("+e+"): "+f)}}}return[e,f]},flushTransformCache:function(b){var d="";if((L||(Q.State.isAndroid&&!Q.State.isChrome))&&F(b).isSVG){function Z(e){return parseFloat(X.getPropertyValue(b,e))}var Y={translate:[Z("translateX"),Z("translateY")],skewX:[Z("skewX")],skewY:[Z("skewY")],scale:Z("scale")!==1?[Z("scale"),Z("scale")]:[Z("scaleX"),Z("scaleY")],rotate:[Z("rotateZ"),0,0]};S.each(F(b).transformCache,function(e){if(/^translate/i.test(e)){e="translate"}else{if(/^scale/i.test(e)){e="scale"}else{if(/^rotate/i.test(e)){e="rotate"}}}if(Y[e]){d+=e+"("+Y[e].join(" ")+") ";delete Y[e]}})}else{var c,a;S.each(F(b).transformCache,function(e){c=F(b).transformCache[e];if(e==="transformPerspective"){a=c;return true}if(L===9&&e==="rotateZ"){e="rotate"}d+=e+c+" "});if(a){d="perspective"+a+" "+d}}X.setPropertyValue(b,"transform",d)}};X.Hooks.register();X.Normalizations.register();Q.hook=function(Z,a,b){var Y=R;Z=C(Z);S.each(Z,function(c,e){if(F(e)===R){Q.init(e)}if(b===R){if(Y===R){Y=Q.CSS.getPropertyValue(e,a)}}else{var d=Q.CSS.setPropertyValue(e,a,b);if(d[0]==="transform"){Q.CSS.flushTransformCache(e)}Y=d}});return Y};var N=function(){function o(){if(p){return h.promise||null}else{return Z}}var f=(arguments[0]&&((S.isPlainObject(arguments[0].properties)&&!arguments[0].properties.names)||G.isString(arguments[0].properties))),p,Z,c;var g,y,u;if(G.isWrapped(this)){p=false;c=0;g=this;Z=this}else{p=true;c=1;g=f?arguments[0].elements:arguments[0]}g=C(g);if(!g){return}if(f){y=arguments[0].properties;u=arguments[0].options}else{y=arguments[c];u=arguments[c+1]}var s=g.length,n=0;if(y!=="stop"&&!S.isPlainObject(u)){var m=c+1;u={};for(var a=m;a<arguments.length;a++){if(!G.isArray(arguments[a])&&(/^(fast|normal|slow)$/i.test(arguments[a])||/^\d/.test(arguments[a]))){u.duration=arguments[a]}else{if(G.isString(arguments[a])||G.isArray(arguments[a])){u.easing=arguments[a]}else{if(G.isFunction(arguments[a])){u.complete=arguments[a]}}}}}var h={promise:null,resolver:null,rejecter:null};if(p&&Q.Promise){h.promise=new Q.Promise(function(x,i){h.resolver=x;h.rejecter=i})}var r;switch(y){case"scroll":r="scroll";break;case"reverse":r="reverse";break;case"stop":S.each(g,function(x,z){if(F(z)&&F(z).delayTimer){clearTimeout(F(z).delayTimer.setTimeout);if(F(z).delayTimer.next){F(z).delayTimer.next()}delete F(z).delayTimer}});var e=[];S.each(Q.State.calls,function(x,z){if(z){S.each(z[1],function(Ab,i){var Aa=G.isString(u)?u:"";if(u!==R&&z[2].queue!==Aa){return true}S.each(g,function(Ac,Ad){if(Ad===i){if(u!==R){S.each(S.queue(Ad,Aa),function(Af,Ae){if(G.isFunction(Ae)){Ae(null,true)}});S.queue(Ad,Aa,[])}if(F(Ad)&&Aa===""){S.each(F(Ad).tweensContainer,function(Ae,Af){Af.endValue=Af.currentValue})}e.push(x)}})})}});S.each(e,function(x,z){T(z,true)});if(h.promise){h.resolver(g)}return o();default:if(S.isPlainObject(y)&&!G.isEmptyObject(y)){r="start"}else{if(G.isString(y)&&Q.Redirects[y]){var t=S.extend({},u),w=t.duration,q=t.delay||0;if(t.backwards===true){g=S.extend(true,[],g).reverse()}S.each(g,function(i,x){if(parseFloat(t.stagger)){t.delay=q+(parseFloat(t.stagger)*i)}else{if(G.isFunction(t.stagger)){t.delay=q+t.stagger.call(x,i,s)}}if(t.drag){t.duration=parseFloat(w)||(/^(callout|transition)/.test(y)?1000:M);t.duration=Math.max(t.duration*(t.backwards?1-i/s:(i+1)/s),t.duration*0.75,200)}Q.Redirects[y].call(x,x,t||{},i,s,g,h.promise?h:R)});return o()}else{var l="Velocity: First argument ("+y+") was not a property map, a known action, or a registered redirect. Aborting.";if(h.promise){h.rejecter(new Error(l))}else{console.log(l)}return o()}}}var Y={lastParent:null,lastPosition:null,lastFontSize:null,lastPercentToPxWidth:null,lastPercentToPxHeight:null,lastEmToPx:null,remToPx:null,vwToPx:null,vhToPx:null};var d=[];function j(){var Ab=this,i=S.extend({},Q.defaults,u),x={},Aa;if(F(Ab)===R){Q.init(Ab)}if(parseFloat(i.delay)&&i.queue!==false){S.queue(Ab,i.queue,function(Ac){Q.velocityQueueEntryFlag=true;F(Ab).delayTimer={setTimeout:setTimeout(Ac,parseFloat(i.delay)),next:Ac}})}switch(i.duration.toString().toLowerCase()){case"fast":i.duration=200;break;case"normal":i.duration=M;break;case"slow":i.duration=600;break;default:i.duration=parseFloat(i.duration)||1}if(Q.mock!==false){if(Q.mock===true){i.duration=i.delay=1}else{i.duration*=parseFloat(Q.mock)||1;i.delay*=parseFloat(Q.mock)||1}}i.easing=A(i.easing,i.duration);if(i.begin&&!G.isFunction(i.begin)){i.begin=null}if(i.progress&&!G.isFunction(i.progress)){i.progress=null}if(i.complete&&!G.isFunction(i.complete)){i.complete=null}if(i.display!==R&&i.display!==null){i.display=i.display.toString().toLowerCase();if(i.display==="auto"){i.display=Q.CSS.Values.getDisplayType(Ab)}}if(i.visibility!==R&&i.visibility!==null){i.visibility=i.visibility.toString().toLowerCase()}i.mobileHA=(i.mobileHA&&Q.State.isMobile&&!Q.State.isGingerbread);function z(As){if(i.begin&&n===0){try{i.begin.call(g,g)}catch(Ai){setTimeout(function(){throw Ai},1)}}if(r==="scroll"){var Ar=(/^x$/i.test(i.axis)?"Left":"Top"),Ah=parseFloat(i.offset)||0,Aj,Av,Az;if(i.container){if(G.isWrapped(i.container)||G.isNode(i.container)){i.container=i.container[0]||i.container;Aj=i.container["scroll"+Ar];Az=(Aj+S(Ab).position()[Ar.toLowerCase()])+Ah}else{i.container=null}}else{Aj=Q.State.scrollAnchor[Q.State["scrollProperty"+Ar]];Av=Q.State.scrollAnchor[Q.State["scrollProperty"+(Ar==="Left"?"Top":"Left")]];Az=S(Ab).offset()[Ar.toLowerCase()]+Ah}x={scroll:{rootPropertyValue:false,startValue:Aj,currentValue:Aj,endValue:Az,unitType:"",easing:i.easing,scrollData:{container:i.container,direction:Ar,alternateValue:Av}},element:Ab};if(Q.debug){console.log("tweensContainer (scroll): ",x.scroll,Ab)}}else{if(r==="reverse"){if(!F(Ab).tweensContainer){S.dequeue(Ab,i.queue);return}else{if(F(Ab).opts.display==="none"){F(Ab).opts.display="auto"}if(F(Ab).opts.visibility==="hidden"){F(Ab).opts.visibility="visible"}F(Ab).opts.loop=false;F(Ab).opts.begin=null;F(Ab).opts.complete=null;if(!u.easing){delete i.easing}if(!u.duration){delete i.duration}i=S.extend({},F(Ab).opts,i);var Ac=S.extend(true,{},F(Ab).tweensContainer);for(var Au in Ac){if(Au!=="element"){var Ae=Ac[Au].startValue;Ac[Au].startValue=Ac[Au].currentValue=Ac[Au].endValue;Ac[Au].endValue=Ae;if(!G.isEmptyObject(u)){Ac[Au].easing=i.easing}if(Q.debug){console.log("reverse tweensContainer ("+Au+"): "+JSON.stringify(Ac[Au]),Ab)}}}x=Ac}}else{if(r==="start"){var Ac;if(F(Ab).tweensContainer&&F(Ab).isAnimating===true){Ac=F(Ab).tweensContainer}function Ak(AF,AC){var AB=R,AD=R,AE=R;if(G.isArray(AF)){AB=AF[0];if((!G.isArray(AF[1])&&/^[\d-]/.test(AF[1]))||G.isFunction(AF[1])||X.RegEx.isHex.test(AF[1])){AE=AF[1]}else{if((G.isString(AF[1])&&!X.RegEx.isHex.test(AF[1]))||G.isArray(AF[1])){AD=AC?AF[1]:A(AF[1],i.duration);if(AF[2]!==R){AE=AF[2]}}}}else{AB=AF}if(!AC){AD=AD||i.easing}if(G.isFunction(AB)){AB=AB.call(Ab,n,s)}if(G.isFunction(AE)){AE=AE.call(Ab,n,s)}return[AB||0,AD,AE]}S.each(y,function(AB,AE){if(RegExp("^"+X.Lists.colors.join("$|^")+"$").test(AB)){var AK=Ak(AE,true),AD=AK[0],AI=AK[1],AH=AK[2];if(X.RegEx.isHex.test(AD)){var AC=["Red","Green","Blue"],AG=X.Values.hexToRgb(AD),AL=AH?X.Values.hexToRgb(AH):R;for(var AF=0;AF<AC.length;AF++){var AJ=[AG[AF]];if(AI){AJ.push(AI)}if(AL!==R){AJ.push(AL[AF])}y[AB+AC[AF]]=AJ}delete y[AB]}}});for(var AA in y){var Ao=Ak(y[AA]),Aw=Ao[0],Ag=Ao[1],Al=Ao[2];AA=X.Names.camelCase(AA);var Ad=X.Hooks.getRoot(AA),Aq=false;if(!F(Ab).isSVG&&X.Names.prefixCheck(Ad)[1]===false&&X.Normalizations.registered[Ad]===R){if(Q.debug){console.log("Skipping ["+Ad+"] due to a lack of browser support.")}continue}if(((i.display!==R&&i.display!==null&&i.display!=="none")||(i.visibility!==R&&i.visibility!=="hidden"))&&/opacity|filter/.test(AA)&&!Al&&Aw!==0){Al=0}if(i._cacheValues&&Ac&&Ac[AA]){if(Al===R){Al=Ac[AA].endValue+Ac[AA].unitType}Aq=F(Ab).rootPropertyValueCache[Ad]}else{if(X.Hooks.registered[AA]){if(Al===R){Aq=X.getPropertyValue(Ab,Ad);Al=X.getPropertyValue(Ab,AA,Aq)}else{Aq=X.Hooks.templates[Ad][1]}}else{if(Al===R){Al=X.getPropertyValue(Ab,AA)}}}var At,An,Ap,Af=false;function Ay(AB,AD){var AC,AE;AE=(AD||"0").toString().toLowerCase().replace(/[%A-z]+$/,function(AF){AC=AF;return""});if(!AC){AC=X.Values.getUnitType(AB)}return[AE,AC]}At=Ay(AA,Al);Al=At[0];Ap=At[1];At=Ay(AA,Aw);Aw=At[0].replace(/^([+-\/*])=/,function(AB,AC){Af=AC;return""});An=At[1];Al=parseFloat(Al)||0;Aw=parseFloat(Aw)||0;if(An==="%"){if(/^(fontSize|lineHeight)$/.test(AA)){Aw=Aw/100;An="em"}else{if(/^scale/.test(AA)){Aw=Aw/100;An=""}else{if(/(Red|Green|Blue)$/i.test(AA)){Aw=(Aw/100)*255;An=""}}}}function Am(){var AE={myParent:Ab.parentNode||H.body,position:X.getPropertyValue(Ab,"position"),fontSize:X.getPropertyValue(Ab,"fontSize")},AG=((AE.position===Y.lastPosition)&&(AE.myParent===Y.lastParent)),AF=(AE.fontSize===Y.lastFontSize);Y.lastParent=AE.myParent;Y.lastPosition=AE.position;Y.lastFontSize=AE.fontSize;var AD=100,AB={};if(!AF||!AG){var AC=F(Ab).isSVG?H.createElementNS("http://www.w3.org/2000/svg","rect"):H.createElement("div");Q.init(AC);AE.myParent.appendChild(AC);S.each(["overflow","overflowX","overflowY"],function(AH,AI){Q.CSS.setPropertyValue(AC,AI,"hidden")});Q.CSS.setPropertyValue(AC,"position",AE.position);Q.CSS.setPropertyValue(AC,"fontSize",AE.fontSize);Q.CSS.setPropertyValue(AC,"boxSizing","content-box");S.each(["minWidth","maxWidth","width","minHeight","maxHeight","height"],function(AH,AI){Q.CSS.setPropertyValue(AC,AI,AD+"%")});Q.CSS.setPropertyValue(AC,"paddingLeft",AD+"em");AB.percentToPxWidth=Y.lastPercentToPxWidth=(parseFloat(X.getPropertyValue(AC,"width",null,true))||1)/AD;AB.percentToPxHeight=Y.lastPercentToPxHeight=(parseFloat(X.getPropertyValue(AC,"height",null,true))||1)/AD;AB.emToPx=Y.lastEmToPx=(parseFloat(X.getPropertyValue(AC,"paddingLeft"))||1)/AD;AE.myParent.removeChild(AC)}else{AB.emToPx=Y.lastEmToPx;AB.percentToPxWidth=Y.lastPercentToPxWidth;AB.percentToPxHeight=Y.lastPercentToPxHeight}if(Y.remToPx===null){Y.remToPx=parseFloat(X.getPropertyValue(H.body,"fontSize"))||16}if(Y.vwToPx===null){Y.vwToPx=parseFloat(I.innerWidth)/100;Y.vhToPx=parseFloat(I.innerHeight)/100}AB.remToPx=Y.remToPx;AB.vwToPx=Y.vwToPx;AB.vhToPx=Y.vhToPx;if(Q.debug>=1){console.log("Unit ratios: "+JSON.stringify(AB),Ab)}return AB}if(/[\/*]/.test(Af)){An=Ap}else{if((Ap!==An)&&Al!==0){if(Aw===0){An=Ap}else{Aa=Aa||Am();var Ax=(/margin|padding|left|right|width|text|word|letter/i.test(AA)||/X$/.test(AA)||AA==="x")?"x":"y";switch(Ap){case"%":Al*=(Ax==="x"?Aa.percentToPxWidth:Aa.percentToPxHeight);break;case"px":break;default:Al*=Aa[Ap+"ToPx"]}switch(An){case"%":Al*=1/(Ax==="x"?Aa.percentToPxWidth:Aa.percentToPxHeight);break;case"px":break;default:Al*=1/Aa[An+"ToPx"]}}}}switch(Af){case"+":Aw=Al+Aw;break;case"-":Aw=Al-Aw;break;case"*":Aw=Al*Aw;break;case"/":Aw=Al/Aw;break}x[AA]={rootPropertyValue:Aq,startValue:Al,currentValue:Al,endValue:Aw,unitType:An,easing:Ag};if(Q.debug){console.log("tweensContainer ("+AA+"): "+JSON.stringify(x[AA]),Ab)}}x.element=Ab}}}if(x.element){X.Values.addClass(Ab,"velocity-animating");d.push(x);if(i.queue===""){F(Ab).tweensContainer=x;F(Ab).opts=i}F(Ab).isAnimating=true;if(n===s-1){if(Q.State.calls.length>10000){Q.State.calls=O(Q.State.calls)}Q.State.calls.push([d,g,i,null,h.resolver]);if(Q.State.isTicking===false){Q.State.isTicking=true;W()}}else{n++}}}if(i.queue===false){if(i.delay){setTimeout(z,i.delay)}else{z()}}else{S.queue(Ab,i.queue,function(Ac,Ad){if(Ad===true){if(h.promise){h.resolver(g)}return true}Q.velocityQueueEntryFlag=true;z(Ac)})}if((i.queue===""||i.queue==="fx")&&S.queue(Ab)[0]!=="inprogress"){S.dequeue(Ab)}}S.each(g,function(x,z){if(G.isNode(z)){j.call(z)}});var t=S.extend({},Q.defaults,u),k;t.loop=parseInt(t.loop);k=(t.loop*2)-1;if(t.loop){for(var v=0;v<k;v++){var b={delay:t.delay,progress:t.progress};if(v===k-1){b.display=t.display;b.visibility=t.visibility;b.complete=t.complete}N(g,"reverse",b)}}return o()};Q=S.extend(N,Q);Q.animate=N;var V=I.requestAnimationFrame||E;if(!Q.State.isMobile&&H.hidden!==R){H.addEventListener("visibilitychange",function(){if(H.hidden){V=function(Y){return setTimeout(function(){Y(true)},16)};W()}else{V=I.requestAnimationFrame||E}})}function W(f){if(f){var u=(new Date).getTime();for(var d=0,l=Q.State.calls.length;d<l;d++){if(!Q.State.calls[d]){continue}var k=Q.State.calls[d],r=k[0],s=k[2],e=k[3],h=!!e;if(!e){e=Q.State.calls[d][3]=u-16}var n=Math.min((u-e)/s.duration,1);for(var b=0,g=r.length;b<g;b++){var p=r[b],t=p.element;if(!F(t)){continue}var Z=false;if(s.display!==R&&s.display!==null&&s.display!=="none"){if(s.display==="flex"){var v=["-webkit-box","-moz-box","-ms-flexbox","-webkit-flex"];S.each(v,function(j,x){X.setPropertyValue(t,"display",x)})}X.setPropertyValue(t,"display",s.display)}if(s.visibility!==R&&s.visibility!=="hidden"){X.setPropertyValue(t,"visibility",s.visibility)}for(var w in p){if(w!=="element"){var q=p[w],Y,a=G.isString(q.easing)?Q.Easings[q.easing]:q.easing;if(n===1){Y=q.endValue}else{Y=q.startValue+((q.endValue-q.startValue)*a(n));if(!h&&(Y===q.currentValue)){continue}}q.currentValue=Y;if(X.Hooks.registered[w]){var o=X.Hooks.getRoot(w),m=F(t).rootPropertyValueCache[o];if(m){q.rootPropertyValue=m}}var c=X.setPropertyValue(t,w,q.currentValue+(parseFloat(Y)===0?"":q.unitType),q.rootPropertyValue,q.scrollData);if(X.Hooks.registered[w]){if(X.Normalizations.registered[o]){F(t).rootPropertyValueCache[o]=X.Normalizations.registered[o]("extract",null,c[1])}else{F(t).rootPropertyValueCache[o]=c[1]}}if(c[0]==="transform"){Z=true}}}if(s.mobileHA){if(F(t).transformCache.translate3d===R){F(t).transformCache.translate3d="(0px, 0px, 0px)";Z=true}}if(Z){X.flushTransformCache(t)}}if(s.display!==R&&s.display!=="none"){Q.State.calls[d][2].display=false}if(s.visibility!==R&&s.visibility!=="hidden"){Q.State.calls[d][2].visibility=false}if(s.progress){s.progress.call(k[1],k[1],n,Math.max(0,(e+s.duration)-u),e)}if(n===1){T(d)}}}if(Q.State.isTicking){V(W)}}function T(k,e){if(!Q.State.calls[k]){return false}var d=Q.State.calls[k][0],a=Q.State.calls[k][1],f=Q.State.calls[k][2],Z=Q.State.calls[k][4];var b=false;for(var h=0,Y=d.length;h<Y;h++){var c=d[h].element;if(!e&&!f.loop){if(f.display==="none"){X.setPropertyValue(c,"display",f.display)}if(f.visibility==="hidden"){X.setPropertyValue(c,"visibility",f.visibility)}}if(f.loop!==true&&(S.queue(c)[1]===R||!/\.velocityQueueEntryFlag/i.test(S.queue(c)[1]))){if(F(c)){F(c).isAnimating=false;F(c).rootPropertyValueCache={};var m=false;S.each(X.Lists.transforms3D,function(j,o){var p=/^scale/.test(o)?1:0,q=F(c).transformCache[o];if(F(c).transformCache[o]!==R&&new RegExp("^\\("+p+"[^.]").test(q)){m=true;delete F(c).transformCache[o]}});if(f.mobileHA){m=true;delete F(c).transformCache.translate3d}if(m){X.flushTransformCache(c)}X.Values.removeClass(c,"velocity-animating")}}if(!e&&f.complete&&!f.loop&&(h===Y-1)){try{f.complete.call(a,a)}catch(n){setTimeout(function(){throw n},1)}}if(Z&&f.loop!==true){Z(a)}if(f.loop===true&&!e){S.each(F(c).tweensContainer,function(i,j){if(/^rotate/.test(i)&&parseFloat(j.endValue)===360){j.endValue=0;j.startValue=360}});Q(c,"reverse",{loop:true,delay:f.delay})}if(f.queue!==false){S.dequeue(c,f.queue)}}Q.State.calls[k]=false;for(var l=0,g=Q.State.calls.length;l<g;l++){if(Q.State.calls[l]!==false){b=true;break}}if(b===false){Q.State.isTicking=false;delete Q.State.calls;Q.State.calls=[]}}K.Velocity=Q;if(K!==I){K.fn.velocity=N;K.fn.velocity.defaults=Q.defaults}S.each(["Down","Up"],function(Y,Z){Q.Redirects["slide"+Z]=function(a,g,d,k,b,j){var f=S.extend({},g),i=f.begin,h=f.complete,c={height:"",marginTop:"",marginBottom:"",paddingTop:"",paddingBottom:""},e={};if(f.display===R){f.display=(Z==="Down"?(Q.CSS.Values.getDisplayType(a)==="inline"?"inline-block":"block"):"none")}f.begin=function(){i&&i.call(b,b);for(var l in c){e[l]=a.style[l];var m=Q.CSS.getPropertyValue(a,l);c[l]=(Z==="Down")?[m,0]:[0,m]}e.overflow=a.style.overflow;a.style.overflow="hidden"};f.complete=function(){for(var l in e){a.style[l]=e[l]}h&&h.call(b,b);j&&j.resolver(b)};Q(a,c,f)}});S.each(["In","Out"],function(Y,Z){Q.Redirects["fade"+Z]=function(a,f,c,i,b,g){var e=S.extend({},f),d={opacity:(Z==="In")?1:0},h=e.complete;if(c!==i-1){e.complete=e.begin=null}else{e.complete=function(){if(h){h.call(b,b)}g&&g.resolver(b)}}if(e.display===R){e.display=(Z==="In"?"auto":"none")}Q(this,d,e)}});return Q}((window.jQuery||window.Zepto||window),window,document)}));;
(function(A){$.WOPOP_EFFECTS={};$.WOPOP_EFFECTS["fromleft"]=function(H,J){var L=parseInt($(H).css("left"))||0;var I=$.WOPOP_EFFECTS._parseNum(J["delay"],1);var K=$.WOPOP_EFFECTS._parseNum(J["duration"],1);C(H).done(function(M){$(M).css("left",0-$(M).width());M.velocity({left:L+"px"},{delay:(I*1000),duration:(K*1000),display:"block",easing:"ease",complete:D(J)})})};$.WOPOP_EFFECTS["frombottom"]=function(H,J){var K=parseInt($(H).css("top"))||0;var L=$.WOPOP_EFFECTS._parseNum(J["delay"],1);var M=$.WOPOP_EFFECTS._parseNum(J["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var I=$("#scroll_container")}else{var I=$(A)}C(H).done(function(N){$(N).css("top",I.scrollTop()+I.height()+$(N).height());N.velocity({top:K+"px"},{delay:(L*1000),duration:(M*1000),display:"block",easing:"ease",complete:D(J)})})};$.WOPOP_EFFECTS["fromright"]=function(H,K){var M=parseInt($(H).css("left"))||0;var I=$.WOPOP_EFFECTS._parseNum(K["delay"],1);var L=$.WOPOP_EFFECTS._parseNum(K["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var J=$("#scroll_container")}else{var J=$(A)}C(H).done(function(N){$(N).css("left",J.width()-$(N).width());N.velocity({left:M+"px"},{delay:(I*1000),duration:(L*1000),display:"block",easing:"ease",complete:D(K)})})};$.WOPOP_EFFECTS["fromtop"]=function(H,J){var K=parseInt($(H).css("top"))||0;var L=$.WOPOP_EFFECTS._parseNum(J["delay"],1);var M=$.WOPOP_EFFECTS._parseNum(J["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var I=$("#scroll_container")}else{var I=$(A)}C(H).done(function(N){var O=$(N),P=(O.attr("fatherid")||"").length?0:(I.scrollTop()-$(N).height());O.css("top",P);N.velocity({top:K+"px"},{delay:(L*1000),duration:(M*1000),display:"block",easing:"ease",complete:D(J)})})};$.WOPOP_EFFECTS["fade"]=function(H,J){var I=parseInt($(H).css("opacity"))||1;var L=$.WOPOP_EFFECTS._parseNum(J["delay"],1);var K=$.WOPOP_EFFECTS._parseNum(J["duration"],1);C(H).done(function(M){$(M).css("opacity",0);M.velocity({opacity:I},{delay:(L*1000),duration:(K*1000),display:"block",easing:"ease-out",complete:D(J)})})};$.WOPOP_EFFECTS["rotation"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);$.Velocity.hook($(H),"rotateY","180deg");$(H).show();C(H).done(function(L){L.velocity({rotateY:["0deg","180deg"]},{delay:(K*1000),duration:(J*1000),display:"block",easing:"ease",complete:D(I)})})};$.WOPOP_EFFECTS["rotation2d"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);$(H).show();C(H).done(function(L){L.velocity({rotateZ:["360deg","0deg"]},{delay:(K*1000),duration:(J*1000),display:"block",easing:"linear"}).velocity({rotateZ:["360deg","0deg"]},{delay:0,duration:(J*1000),display:"block",loop:true,easing:"linear",complete:D(I)})})};$.WOPOP_EFFECTS["bounceIn"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);$.Velocity.hook($(H),"scale","0.3");$(H).css("opacity",0);C(H).done(function(L){L.velocity({scale:[1.05,0.3],opacity:[1,0]},{delay:(K*1000),duration:(J*333),display:"block"}).velocity({scale:[0.7,1.05]},{delay:0,duration:(J*333),display:"block"}).velocity({scale:[1,0.7]},{delay:0,duration:(J*333),display:"block",complete:D(I)})})};$.WOPOP_EFFECTS["big2small"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);$.Velocity.hook($(H),"scale","2");C(H).done(function(L){L.velocity({scale:[1,2],opacity:[1,0]},{delay:(K*1000),duration:(J*1000),display:"block",easing:"ease-in",complete:D(I)})})};$.WOPOP_EFFECTS["small2big"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);$.Velocity.hook($(H),"scale","0.5");C(H).done(function(L){L.velocity({scale:[1,0.5],opacity:[1,0]},{delay:(K*1000),duration:(J*1000),display:"block",easing:"ease-in",complete:D(I)})})};$.WOPOP_EFFECTS["fadeFromLeft"]=function(H,K){var M=parseInt($(H).css("left"))||0;var I=parseInt($(H).css("opacity"))||1;var J=$.WOPOP_EFFECTS._parseNum(K["delay"],1);var L=$.WOPOP_EFFECTS._parseNum(K["duration"],1);C(H).done(function(N){$(N).css("left",0-$(N).width());$(N).css("opacity",0);N.velocity({left:M+"px",opacity:I},{delay:(J*1000),duration:(L*1000),display:"block",easing:"ease",complete:D(K)})})};$.WOPOP_EFFECTS["fadeFromBottom"]=function(H,K){var L=parseInt($(H).css("top"))||0;var I=parseInt($(H).css("opacity"))||1;var M=$.WOPOP_EFFECTS._parseNum(K["delay"],1);var N=$.WOPOP_EFFECTS._parseNum(K["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var J=$("#scroll_container")}else{var J=$(A)}C(H).done(function(O){$(O).css("top",J.scrollTop()+J.height()+$(O).height());$(O).css("opacity",0);O.velocity({top:L+"px",opacity:I},{delay:(M*1000),duration:(N*1000),display:"block",easing:"ease",complete:D(K)})})};$.WOPOP_EFFECTS["fadeFromRight"]=function(H,L){var N=parseInt($(H).css("left"))||0;var I=parseInt($(H).css("opacity"))||1;var K=$.WOPOP_EFFECTS._parseNum(L["delay"],1);var M=$.WOPOP_EFFECTS._parseNum(L["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var J=$("#scroll_container")}else{var J=$(A)}C(H).done(function(O){$(O).css("left",J.width()-$(O).width());O.velocity({left:N+"px",opacity:I},{delay:(K*1000),duration:(M*1000),display:"block",easing:"ease",complete:D(L)})})};$.WOPOP_EFFECTS["fadeFromTop"]=function(H,K){var L=parseInt($(H).css("top"))||0;var I=parseInt($(H).css("opacity"))||1;var M=$.WOPOP_EFFECTS._parseNum(K["delay"],1);var N=$.WOPOP_EFFECTS._parseNum(K["duration"],1);if(!$.wismobile||$.WOPOP_EFFECTS._isEditMode()){var J=$("#scroll_container")}else{var J=$(A)}C(H).done(function(O){$(O).css("top",J.scrollTop()-$(O).height());O.velocity({top:L+"px",opacity:I},{delay:(M*1000),duration:(N*1000),display:"block",easing:"ease",complete:D(K)})})};$.WOPOP_EFFECTS["light"]=function(H,I){var K=$.WOPOP_EFFECTS._parseNum(I["delay"],1);var J=$.WOPOP_EFFECTS._parseNum(I["duration"],1);C(H).done(function(L){L.velocity({opacity:1},{delay:(K*1000),duration:(J*500),display:"block",easing:"ease-in-out"}).velocity({opacity:[0,1]},{delay:0,duration:(J*500),display:"block",loop:true,easing:"ease-in-out",complete:D(I)})})};function D(H){return function(){var I=$(this);if(I.data("wopop_effect_oristyle")){I.attr("style",I.data("wopop_effect_oristyle")).show();I.removeData("wopop_effect_oristyle")}I.trigger("effect_complete");I.removeClass("now_effecting")}}$.fn.showEffects=function(I,J){$.Velocity.defaults.mobileHA=false;var K=$(".fullpage_alllist");var H=!($.browser.msie&&$.browser.version<9);if(!K.length||I){return this.each(function(){var L=$(this);var M=J;if(!(M&&M.effect)){M=L.data("wopop_effects")}if(M&&M.effect){var O=L.data("deg")||0;var N=L.attr("style").replace(/display:\s*none\s*;?/,"");if(!O){N=N.replace(/ (-\w+-)?transform-origin:[^;]+;/g,"")}if(!L.data("wopop_effect_oristyle")){L.data("wopop_effect_oristyle",N)}$.Velocity.hook($(L),"rotateZ",O+"deg");L.hide();if($.WOPOP_EFFECTS[M.effect]&&H){L.addClass("now_effecting");$.WOPOP_EFFECTS[M.effect](L,M)}else{L.show()}}})}};$.fn.wopop_effect_command=function(H,I){if(H=="stop"){return this.each(function(){E($(this))})}};$.WOPOP_EFFECTS._parseNum=function(I,H){if(I==0){return 0}return I||H};function E(H){H.velocity("stop",true);if(H.data("wopop_effect_oristyle")){$.Velocity.hook($(H),"scale","1");$.Velocity.hook($(H),"rotateY","0deg");var I=H.data("deg")||0;$.Velocity.hook($(H),"rotateZ",I+"deg");H.attr("style",H.data("wopop_effect_oristyle"))}H.removeData("wopop_effect_oristyle");H.removeClass("now_effecting");H.trigger("effect_complete")}function C(H){var K=$(".fullpage_alllist");var I=$.Deferred();if(K.length){I.resolve($(H))}else{if(!$.wismobile){var J=$("#scroll_container");if(J.data("chrome_bug")){J=A}}else{var J=A}if(F($(H),J)){I.resolve($(H))}else{$(J).bind("scroll",function(L){if(F($(H),J)){I.resolve($(H));$(this).unbind(L)}})}}return I}function F(H,J){var L=0;var I=0;if(J===undefined||J===A){L=$(A).scrollTop();I=$(A).height()}else{L=$(J).scrollTop();I=$(J).height()}var K=$("#wp-mobile_navhandler").height()+$("#wp-mobile_navhandler").height();return L+I-K>parseInt(H.css("top"))}$.WOPOP_EFFECTS._hasEffectFilter=function(){var H=$(this);if(H.attr("deleted")=="deleted"){return false}var I=H.data("wopop_effects");if(I&&I.effect){return true}return false};$.WOPOP_EFFECTS._isEditMode=function(){if($.saveLayout&&$.isFunction($.saveLayout.save)){return true}return false};var G;$.WOPOP_EFFECTS._setindex=function(H){G=H};$.WOPOP_EFFECTS._getindex=function(){return G};var B={fromleft:{delay:0,duration:1.2},frombottom:{delay:0,duration:1.2},fromright:{delay:0,duration:1.2},fromtop:{delay:0,duration:1.2},fade:{delay:0,duration:0.9},rotation:{delay:0,duration:1.2},rotation2d:{delay:0,duration:1.2},bounceIn:{delay:0,duration:2.2},big2small:{delay:0,duration:1.2},small2big:{delay:0,duration:1.2},fadeFromLeft:{delay:0,duration:1.2},fadeFromBottom:{delay:0,duration:1.2},fadeFromRight:{delay:0,duration:1.2},fadeFromTop:{delay:0,duration:1.2},light:{delay:0,duration:1.2}};$.WOPOP_EFFECTS._getDefaultParam=function(I){var H=B[I];if(!H){H={delay:0,duration:1.2}}return H}})(window);;
function fullpagefooterinit(){$(".fullpage_alllist").each(function(){if($('.full_column:not([deleted="deleted"])').length>0){wp_alert(translate("full_column.already in backplane"))}});$(".full_pagescroll").each(function(){fullpagescrollinit($(this))});$(document).bind("fullpage_scroll_pro",function(A,B){setTimeout(function(){if($("#wp-property_settings2").length){var C="";$("#canvas #fullPage-nav li").each(function(D){});$(".fullpage_alllist .section").each(function(D){if($(this).hasClass("active")){C=D+1}});if(C>0){$("#all_extra_img_div .wp-manage-panel-album-img").each(function(D){var E=D+1;if(E==C){$(this).addClass("action")}else{$(this).removeClass("action")}})}}},100)})}function fullpagescrollinit(A){A.children(".full_width").css({left:0-canv.offset().left-$.parseInteger($("#canvas").css("borderLeftWidth")),width:$("#scroll_container_bg").width()});A.wp_rightkey();if(A.is(":not(.isplate)")){fullpagescrollresize(A);setTimeout(function(){fullpagescrolldrop(A)},1300)}}function fullpagescrolldrag(A){A.wp_drag()}function fullpagescrollresize(A){var B=function(E){A.each(function(){var F="ui-resizable-"+E;var G=$('<div class="ui-resizable-handle '+F+'"><p class="knob "></p></div>');G.css({zIndex:1000});$(this).children(".full_width").append(G)})};var C=function(E){A.each(function(){var F="placeholder-"+E;var G=$('<div class="li-placeholder  '+F+'"></div>');G.css({zIndex:1000}).hide();$(this).children(".full_width").append(G)})};B("n");B("s");C("w");C("e");var D;A.resizable({handles:{n:">.full_width .ui-resizable-n",s:">.full_width .ui-resizable-s"},noinit:true,canvascontain:"#canvas",distance:0,concernLock:true,scroll:true,create:function(){$(this).children(".full_width").find(".ui-resizable-handle").hide()},start:function(I,E){D=$.getFullColChildMaxButtomfullpage(A);var G=$(this);var H=new ResizeCommand(G.attr("id"));var K=["top","height"];var J={};for(var F=0;F<K.length;F++){J[K[F]]=G.css(K[F])}H.setOldVal(J);$(document).data("resizeundo",H)},resize:function(H,E){var I=A.ab_pos_cnter("top");var G=$.parseInteger(A.css("height"));if($.getElementAreaInf($(this))=="canvas"){var F=Math.max(I+D,I+G);$.canvasheightresizeOrigin(F)}$(this).children(".full_content,.full_width").height($(this).height());$(this).triggerHandler("resize_progress",[{ui:E}]);$.fullpageshowselectbgopt($(this))},stop:function(I,E){$(this).children(".full_content,.full_width").height($(this).height());$.fullpageshowselectbgopt($(this));var H=$(document).data("resizeundo");$(document).removeData("resizeundo");var G=$(this);var K=["top","height"];var J={};for(var F=0;F<K.length;F++){J[K[F]]=G.css(K[F])}$(this).triggerHandler("resize_stop",[{ui:E}]);H.insertWithNewVal(J)}})}function fullpagescrolldrop(A){if($.wismobile!=1){A.css({"border":"dashed #AF6935 2px"})}var C=function(D){A.each(function(){var E="placeholder-"+D;var F=$('<div class="li-placeholder  '+E+'"></div>');F.css({zIndex:1000});$(this).children(".full_content").append(F)})};C("n");C("s");C("w");C("e");var B=A.children(".full_content");B.children(".li-placeholder").hide();B.children(".placeholder-n").css({"border-top":"#FF9900 dashed 4px"});B.children(".placeholder-s").css({"border-bottom":"#FF9900 dashed 4px"});B.children(".placeholder-e").css({"border-right":"#FF9900 dashed 4px"});B.children(".placeholder-w").css({"border-left":"#FF9900 dashed 4px"});B.droppable({tolerance:"pointer",accept:".full_pagescroll,.cstlayer,.wp-new-tool-second-link,.wp-manage-plugin-block",drop:function(G,D){var E=$.ui.ddmanager.current;if($.getElementAreaInf($(E.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")||$(E.element).is(".wp-new-tool-second-link")||$(E.element).is(".wp-manage-plugin-block")){$(this).children(".li-placeholder").hide();var H=$(document).data("layer_final_drop_id");var F=$.chooseBiggerColumn(H,A.attr("id"));$(document).data("layer_final_drop_id",F)}}},over:function(J,N){var H=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){H=true}});if(H){return}var I=$.ui.ddmanager.current;if($.getElementAreaInf($(I.element))==$.getElementAreaInf(A)||$(I.element).is(".wp-new-tool-second-link")||$(I.element).is(".wp-manage-plugin-block")){if(!A.hasClass("ui-modselected")||$(I.element).is(".wp-new-tool-second-link")||$(I.element).is(".wp-manage-plugin-block")){var D=A.attr("id");var F=$(document).data("layer_drop_over_id");if(D!=F){var K=$.chooseBiggerColumn(F,D);if(K==D){var M=$(this);$(this).children(".li-placeholder").show();if(F){var G=$("#"+F);var E=G.children(".full_content").data("droppable");E["isover"]=0;E["isout"]=1;E._out.call(E,J)}$(document).data("layer_drop_over_id",D)}else{var L=$(this).data("droppable");L["isover"]=0;L["isout"]=1}}}}},out:function(G,D){var H=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){H=true}});if(H){return}var E=$.ui.ddmanager.current;if($.getElementAreaInf($(E.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")||$(E.element).is(".wp-new-tool-second-link")||$(E.element).is(".wp-manage-plugin-block")){$(this).children(".li-placeholder").hide();var F=$(document).data("layer_drop_over_id");if(F==A.attr("id")){$(document).removeData("layer_drop_over_id")}}}}})}function full_page_block_drop(B){var A=B.closest(".full_pagescroll");B.droppable({tolerance:"pointer",accept:".full_pagescroll,.cstlayer,.wp-new-tool-second-link,.wp-manage-plugin-block",drop:function(F,C){var D=$.ui.ddmanager.current;if($.getElementAreaInf($(D.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")||$(D.element).is(".wp-new-tool-second-link")||$(D.element).is(".wp-manage-plugin-block")){$(this).children(".li-placeholder").hide();var G=$(document).data("layer_final_drop_id");var E=$.chooseBiggerColumn(G,A.attr("id"));$(document).data("layer_final_drop_id",E)}}},over:function(I,M){var G=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){G=true}});if(G){return}var H=$.ui.ddmanager.current;if($.getElementAreaInf($(H.element))==$.getElementAreaInf(A)||$(H.element).is(".wp-new-tool-second-link")||$(H.element).is(".wp-manage-plugin-block")){if(!A.hasClass("ui-modselected")||$(H.element).is(".wp-new-tool-second-link")||$(H.element).is(".wp-manage-plugin-block")){var C=A.attr("id");var E=$(document).data("layer_drop_over_id");if(C!=E){var J=$.chooseBiggerColumn(E,C);if(J==C){var L=$(this);$(this).children(".li-placeholder").show();if(E){var F=$("#"+E);var D=F.children(".full_content").data("droppable");D["isover"]=0;D["isout"]=1;D._out.call(D,I)}$(document).data("layer_drop_over_id",C)}else{var K=$(this).data("droppable");K["isover"]=0;K["isout"]=1}}}}},out:function(F,C){var G=false;$(".ui-modselected").each(function(){if($(this).data("cstlayerstatus")=="unlock"){G=true}});if(G){return}var D=$.ui.ddmanager.current;if($.getElementAreaInf($(D.element))==$.getElementAreaInf(A)){if(!A.hasClass("ui-modselected")||$(D.element).is(".wp-new-tool-second-link")||$(D.element).is(".wp-manage-plugin-block")){$(this).children(".li-placeholder").hide();var E=$(document).data("layer_drop_over_id");if(E==A.attr("id")){$(document).removeData("layer_drop_over_id")}}}}})}function fullpagescroll_propblk_init(){var B;for(var A in $.fullpagebackgroundPropDefaults){(function(){var F=A;var D=null;if($.inArray(F,["fullpage_moveto_prevop","fullpage_moveto_nextop"])!=-1){var C="",E="";switch(F){case"fullpage_moveto_prevop":E="top";C='<div class="wp-moveto_fstlevel"><a class="property-bar-top" href="###" title="'+translate("Move to top")+'"><span>&nbsp;</span></a></div>';break;case"fullpage_moveto_nextop":E="bottom";C='<div class="wp-moveto_lstlevel"><a class="property-bar-bottom" href="###" title="'+translate("Move to bottom")+'"><span>&nbsp;</span></a></div>';break}D={mousedown:function(){var I=$(this);var G=I.offset();var J=$("#scroll_container");var H=J.scrollTop();$(C).appendTo(J).css({top:function(){return(G.top+H-25-39)+"px"},left:G.left+"px"}).click(function(K){$("#"+$.bgselectedid).wp_setorder(E,$.bgselectedid);$(this).remove();I.removeClass("local");K.preventDefault()})},mouseup:function(){}}}$("#"+F).mousedown(function(G){var H=$(this);H.addClass("local");if($(".wp-moveto_fstlevel,.wp-moveto_lstlevel").size()){$(".wp-moveto_fstlevel,.wp-moveto_lstlevel").remove()}if(D!=null){D.mousedown.apply(this)}G.preventDefault()}).mouseup(function(G){var I=this,H=$(I);H.removeClass("local");$.fullpagebackgroundPropDefaults[F].apply(this);if(D!=null){D.mouseup.apply(this)}G.preventDefault()})})()}}(function(B){function A(C){var D={};D[C.prop("id")]="null";var F=C;while(true){var E=B.getElementFatherid(F);if(E=="none"){break}D[E]=F.prop("id");F=B("#"+E)}return D}B.chooseBiggerColumn=function(J,E){var L=E;if(J==E){return L}if(J){var K=B("#"+J);var F=B("#"+E);var N=A(K);var G=A(F);var M="canvas";if(!N[M]){M="site_footer"}var H=M;var I=M;while(H==I){H=N[H];I=G[I];if(H=="null"||I=="null"){break}}if(H=="null"){L=E}else{if(I=="null"){L=J}else{var D=B.parseInteger(B("#"+H).css("z-index"));var C=B.parseInteger(B("#"+I).css("z-index"));if(D>C){L=J}}}}return L};B.transferToColumn=function(C,F){var D=B.getElementFatherid(C);if(D!=F){var H=B("#"+F);var I=C.ab_pos("top");var E=H.ab_pos("top");var G=H;if(F!="canvas"){G=H.children(".full_content")}C.detach().attr("fatherid",F).css("top",(I-E)).appendTo(G);if(F=="site_footer"||F=="canvas"){C.removeAttr("fatherid")}}};B.getElementAreaInf=function(C){return C.attr("inbuttom")=="1"?"site_footer":"canvas"};B.transferToArea=function(C,F,J,E){var G=C.ab_pos("top");var I=B.parseInteger(B("#site_footer").css("top"));if(J=="site_footer"){var D=G-I;C.css("top",D);C.attr("inbuttom","1");C.detach().removeAttr("fatherid").appendTo(B("#site_footer").children(".full_content"));if(C.hasClass("full_pagescroll")){C.find(".cstlayer,.full_pagescroll").attr("inbuttom","1")}}else{var D=G+I;C.css("top",D);var H=B("#canvas").height();if(H<D+C.height()&&!E){B.canvasheightresizeOrigin(D+C.height())}C.removeAttr("inbuttom");C.detach().removeAttr("fatherid").appendTo(B("#canvas"));if(C.hasClass("full_pagescroll")){C.find(".cstlayer,.full_pagescroll").removeAttr("inbuttom")}}if(C.is(".ui-modselected")){B.hidWidgetBorder(C);B.showWidgetBorder(C)}if(C.is(".full_pagescroll")){C.find(".cstlayer,.full_pagescroll").each(function(){if(B(this).is(".ui-modselected")){B.hidWidgetBorder(B(this));B.showWidgetBorder(B(this))}})}};B.addFullPagescroll=function(D){if(B.wisplate){wp_alert(translate("fullpage.plate do not support add"));return false}if(B('.fullpage_alllist:not([deleted="deleted"])').length>0){wp_alert(translate("fullpage.already plugin"));return false}if(B('.full_column:not([deleted="deleted"])').length>0){wp_alert(translate("full_column.already Please remove"));return false}setTimeout(function(){if(B("#site_footer").length>0){var E="fullpage";if(B.wismobile){E="mfullpage"}if(confirm(translate("fullpage.Please hide site_footer"))){B.post(parseToURL(E,"prosf"),{pid:B.page_id},function(G){var F=B.parseJSON(G);if(F.result=="OK"){B("#site_footer").remove()}else{location.reload();return false}}).error(function(){location.reload();return false})}else{return false}}},500);var C=function(J,E){var F=J;if(E){var K=B(F).filter(".full_pagescroll");var M=K.prop("id");var L="layer"+fGuid();F=F.replace(new RegExp(M,"g"),L)}var G=B(F).appendTo("#canvas");G.find(".full_pagescroll").each(function(){fullpagescrollinit(B(this))});G.css("z-index",100);var H=relativeToAbsoluteURL("plugin/title/css/title.css");if(B("body").data("title")!=H){B("body").data("title",H);var O=document.getElementsByTagName("head").item(0);var I=document.createElement("link");I.href=H;I.rel="stylesheet";I.type="text/css";O.appendChild(I)}B(".ui-modselected").each(function(){B.hidWidgetBorder(B(this));if(B(this).hasClass("graphic_edited")){actived_graphic()}});B.fullpageunselectbgdiv(G);B.fullpageselectbgdiv(G.find(".full_pagescroll:eq(0)"));new AddCommand(G.prop("id")).insert();var N=new Array();N[0]=new Array(parseInt(B("#"+G.prop("id")).css("z-index")),G.prop("id"));B.zindexsort_new(N)};if(B.addFullPagescroll.html_cache){C(B.addFullPagescroll.html_cache,true);return}B.ajax({type:"GET",url:parseToURL("wp_widgets","gtfullpagescroll"),success:function(E){C(E,false)},error:function(F,E,G){wp_alert((G||E)+"(add a fullpagescroll).<br/>"+translate("Request failed!"));return false}})};B.curSelectableFather=function(){var C=B(".ui-modselected");if(C.length==0){B(document).data("cur_selectable_father",null);return null}else{var D=B.getElementFatherid(C.filter(":first"));B(document).data("cur_selectable_father",D);return D}};B.getElementFatherid=function(C){if(C.prop("id")=="canvas"||C.prop("id")=="site_footer"){return"none"}var D=C.attr("fatherid");if(!D||D==""){if(C.closest("#canvas").length>0){D="canvas"}else{if(C.closest("#site_footer").length>0){D="site_footer"}}}if(!B("#"+D).length){if(C.closest("#canvas").length>0){D="canvas"}else{if(C.closest("#site_footer").length>0){D="site_footer"}}C.removeAttr("fatherid")}return D};B.getFullColChildMaxButtomfullpage=function(C){var E=C.ab_pos_cnter("top");var D=E;C.find(".cstlayer,.full_pagescroll").each(function(){var F=B(this);var G=0;if(F.hasClass("cstlayer")){G=B.divrotate.getDegreeModMaxPoint(F,null,"buttom")}else{G=F.ab_pos_cnter("top")+B.parseInteger(F.css("height"))}if(D<G){D=G}});return D-E};B.getFullPagescrollButtomPos=function(C){if(C.hasClass("cstlayer")){return B.divrotate.getDegreeModMaxPoint(C,null,"buttom")}else{if(C.hasClass("full_pagescroll")){var D=0;C.find(".cstlayer,.full_pagescroll").andSelf().each(function(){var E=B(this);var F=0;if(E.hasClass("cstlayer")){F=B.divrotate.getDegreeModMaxPoint(E,null,"buttom")}else{F=E.ab_pos_cnter("top")+B.parseInteger(E.css("height"))}if(D<F){D=F}});return D}}};B.saveFullPagescrollObj=function(C){var E=C.children(".full_width").data("backgroundprops")||{};var D=C.find(".full_content").data("backgroundprops")||{};var F=C.height();var G={};if(C.prop("id")!="site_footer"){G={top:B.parseInteger(C.css("top")),zindex:B.parseInteger(C.css("z-index")),lock:C.data("cstlayerstatus"),fixdisplay:C.attr("infixed"),fullpageext:C.data("fullpageext")}}return B.extend({fullbackgroundprop:E,contentbackgroundprop:D,footerheight:F},G)};B.fullpagecanvasleft=function(){if(B(window).width()<=B("#canvas").width()){return"0"}else{return(B(window).width()-B("#canvas").width())/2}};B.wp_fullpagezoom=function(G,J,K,O){var F=G;var E=0,N=0,L=J.width,P=J.height;var C=F.find(".fullimgc");C.css("position","relative");var R=L-E,M=P-N;var H=L-K.width,D=P-K.height;var Q=0,I=0;if(H||(H>D)){C.width(R).height("auto");I=M-C.height();if(I<0){C.css({top:Math.ceil(I/2)+"px",left:"0px"})}else{if(I>0){C.height(M).width("auto");Q=R-C.width();C.css({top:"0px",left:Math.ceil(Q/2)+"px"})}else{C.css({top:"",left:"",position:""})}}}else{if(D||(H<D)){C.height(M).width("auto");Q=R-C.width();if(Q<0){C.css({top:"0px",left:Math.ceil(Q/2)+"px"})}else{if(Q>0){C.width(R).height("auto");I=M-C.height();C.css({top:Math.ceil(I/2)+"px",left:"0px"})}else{C.css({top:"",left:"",position:""})}}}}};B.wp_fullpag_mobile=function(){return(/iphone|ipod|ipad|Macintosh|android|Windows phone/i.test(navigator.userAgent.toLowerCase()))};setTimeout(function(){if(B.wismobile&&B.wisviewmode){}else{var C={width:320,height:B(window).height()};if(!B.wiseditmode){C={width:B(window).width(),height:B(window).height()};var F=B(".fullpage_alllist");var D=F.find(".section.active .bg > img");var E={width:0,height:0};B.wp_fullpagezoom(F,C,E,"noresize")}}},800)})(jQuery);;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function openImageChooserDialog(options){
		window._imageChooserDefered=new $.Deferred();
		options=$.extend({},options);
		var title=options.title||translate('fileManager.selectImage');
		var width=options.width||850;
		var filetype=options.filetype||'pic';
		var dialogid=options.id||'wp-picmanage_panel';
		var zindex=options.zIndex||1003;
        var multi=options.multi||0;
        var mask = options.overlay;
		if (typeof mask === 'undefined') mask = true;
		//show_dialog(parseToURL("wp_widgets","common_pic_chooser",{filetype:filetype}), title,width, 0);
		wp_floatpanel(parseToURL('wp_widgets','common_pic_chooser',{filetype:filetype,multi:multi}),{
			title: title,
			id: dialogid,
			width: width,
			overlay: mask,
			isCenter: true,
			swfFix: true,
			zIndex: zindex
		});
		if(!options.cancelNotCloseDialog){
			window._imageChooserDefered.fail(function(){
				$.modal.close();
			})
		}
		
		return window._imageChooserDefered.promise();

}

// Add 'link to file' function 2013/02/25
function openMyDocChooserDialog(options){
	window._myDocChooserDefered = new $.Deferred();options = $.extend({},options);
	var title = options.title||translate('fileManager.myFile'),dwidth = options.width||850,icenter = options.isCenter||true,
	dialogid = options.id||'wp-file_explore',zindex = options.zIndex||1003,mask = options.overlay;
	if (typeof mask === 'undefined') mask = true;
	wp_floatpanel(parseToURL('wp_fileexplore', 'file_explore', {"geturl": '1'}), {swfFix: true,
		title: title,width: dwidth,isCenter: icenter,id: dialogid,zIndex: zindex,overlay: mask
	});
	return window._myDocChooserDefered.promise();
}

function transferToPageSetDialog(showdiv,hidediv,options){
		window._pagesetDefered=new $.Deferred();
		options=$.extend({},options);
		var dialogwin=window;
		if(options.iframe) dialogwin=parent;
		var title=options.title||translate('page.add');
		var mode=options.mode||'create';
		var url ='';
		if(mode=='edit'){
			var pageid=options.pageid;
			url =parseToURL("wp_page","editpage",{id:pageid});
		}else{
			var additionparam=options.createparam||{};
			url =parseToURL("wp_page","addpage",additionparam);
		}
		$.get(url, function(data) {	
			$(showdiv).html(data).show();
			$(hidediv).hide();
			wp_update_floatpanel($('#wp-manage_menu'),title,376,function(dom){
				dom.find('.wp-panel_button').hide();
				dom.find('#page_set_prop_div .wp-panel_button').show();
			});
		}).error(function(xhr, textStatus, errorThrown) { 
			wp_alert((errorThrown||textStatus)+"(edit/add a page).<br/>"+translate("Request failed!")); 
		})
		return window._pagesetDefered.promise();
}

function transferToPageSetDialogcur(showdiv,hidediv,options){
		window._pagesetDefered=new $.Deferred();
		options=$.extend({},options);
		var dialogwin=window;
		if(options.iframe) dialogwin=parent;
		var title=options.title||translate('page.add');
		var mode=options.mode||'create';
		var url ='';
		var pageid=options.pageid;
		var modact=options.modact||'navigation';
		
		
		var page_id=options.page_id;
		var supid=options.blockid;

		if(mode=='edit'){			
			url =parseToURL(modact,"editpage",{id:pageid,page_id:page_id,blockid:supid});
		}else{
			var additionparam=options.createparam||{};
			url =parseToURL(modact,"addpage",{page_id:page_id,blockid:supid,parentid:pageid});
		}
		$.post(url, {menudata:$("#"+supid).data("menudata")}, function(data) {									
				$(showdiv).html(data).show();
				$(hidediv).hide();
				/*
				dialogwin.$('#osx-container').css('width',500);
				if(options.iframe) dialogwin.$('#osx-modal-data').find('iframe').width(500).height(480);
				dialogwin.$("#osx-modal-title").data('origin_title',dialogwin.$("#osx-modal-title").html());
				dialogwin.$("#osx-modal-title").html(title);
				dialogwin.$.modal.setPosition();
				*/
		}).error(function(xhr, textStatus, errorThrown) { 
			wp_alert((errorThrown||textStatus)+"(edit/add a navigation page).<br/>"+translate("Request failed!")); 
		})
		return window._pagesetDefered.promise();
}

function openPageSetDialog(options){
		window._pagesetDefered=new $.Deferred();
		options=$.extend({},options);
		var title=options.title||translate('page.add');
		var width=options.width||400;
		var mode=options.mode||'create';
		var url ='';
		if(mode=='edit'){
			var pageid=options.pageid;
			url =parseToURL("wp_page","editpage",{id:pageid});
		}else{
			width = 400;
			var opts={};
			if(options.mtype) opts._mtype=options.mtype;
			if(options.parentid) opts.parentid=options.parentid;
			url =parseToURL("wp_page","addpage",opts);
		}
		//show_dialog(url, title,width, 0);
		wp_floatpanel(url,{
			title: title,
			contentClass: 'wp-site-set_panel_c',
			id: 'wp-add_page',
			overlay: true,
			isCenter: true,
			width: width,
			zIndex: 1002,
			cache:false,
			open: function(dom){
				if(options.callback && $.isFunction(options.callback)){
					$(dom).bind('addPageLink',function(e,url){
						options.callback(url);
					});
				}
			}
		});
		if(!options.cancelDefaultOp){
			window._pagesetDefered.done(function(data){
				if(data.refresh){
			
					$.saveLayout.save(true);
					window.location.reload();
					 $('#wp-add_page').triggerHandler('wpdialogclose');
				}else{
					setTimeout(function(){
						$.saveLayout.save(true);
						window.location.href=data.forward;
					},100);
				}
			})
			window._pagesetDefered.fail(function(){
				$('#wp-add_page').triggerHandler('wpdialogclose');
			})
		}
		
		return window._pagesetDefered.promise();

}

// 创建“文章/产品分类、列表”链接相关 2012/07/16
function setModuleLink(mtype,callback){
	openPageSetDialog({"mtype":mtype,"callback":callback});
}

// IFRAME自适应高度 2012/07/12
function initFrame(frame,contentClass,height){
	var self = frame,bh = self.contentWindow.document.body.scrollHeight,
	dh = self.contentWindow.document.documentElement.scrollHeight,max = Math.max;
	var $parent = $(self).closest('.wp-floatpanel_dialog'),otherh = 0,temph = max(bh,dh);
	temph+=1;
	if($.browser.msie){
		temph = temph+25;
	}
	$parent.find('.'+contentClass).siblings().each(function(i,dom){
		otherh += $(dom).outerHeight(true);
	});
	var _float = function(numString){
		var number = parseFloat(numString);
		if(isNaN(number)) return 0;
		return number;
	};
	var seth = _float(height),maxh = seth ? seth : $(document).height(),
	difw = maxh - otherh - 10;// 上下间隔5像素
	if(difw < temph) temph = difw;
	frame.height = max(temph,200);
	$(self).closest('.wp-floatpanel_dialog').triggerHandler('wpdialogsetpos');
}

(function($){
	var cachedtimer={};
	$.multi_exec_once=function(key,func,interval){
		var timer=cachedtimer[key];
		if(timer != null){
			clearTimeout(timer);
			delete cachedtimer[key];
		} 
		timer=setTimeout(func, interval);
		cachedtimer[key]=timer;
	}
	
	// 注册beforeLoaded方法 2012/07/11
	var loadedhash = {};
	$.beforeLoaded = {
		add: function(type, event, func){
			if ($.isFunction(func)) {
				if(!loadedhash[type]) loadedhash[type] = {};
				loadedhash[type][event] = func;
			}
		},
		run: function(type, event, data){
			var func = loadedhash[type];
			if(typeof func == 'undefined') return false;
			func = func[event];
			if($.isFunction(func)) return func(data);
			return false;
		}
	};
})(jQuery);
	
// 更新并定位浮动窗口
function wp_update_floatpanel(dom, title, width, callback){
	var $title = dom.find('.wp-title > h2'),curtitle = $title.html();
	dom.width(width);
	if(title) $title.data('origin_title',curtitle);
	else title = curtitle;
	$title.html(title);
	if(callback && $.isFunction(callback)) callback(dom);
	// setPosition
	var win = window,winw = $(win).width(),winh = $(win).height(),
	floor = Math.floor,newh = dom.outerHeight(true);
	dom.css({'left': floor((winw-width)/2),'top': floor((winh-newh)/2)});
}

/**
 * 个性化下拉框
 */
;(function($,undefined){
	var namespace = '.wpcstselect';
	$.widget('wp.cstselect',{
		options : {
			selectclass:'wp-diy-selected'//样式
		}, // 配置项
		_create : function(){
			var self = this;
			var selectclass=self.options.selectclass;
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			// 忽略多选的SELECT控件
			if(self.element.prop("multiple")) return;
			self._doinit(self).done(function(dom,selopts){
				var $ctarget = dom,$diysel = $ctarget.next('.'+selectclass+'-outside').find('.'+selectclass+'');
				// 设置默认值
				setTimeout(function(){
					var $cursel = $diysel.children('.'+selectclass+'-left'),difw = $cursel.siblings('.'+selectclass+'-button').outerWidth() + 2,
					pad = self._int($cursel.css("paddingLeft")) + self._int($cursel.css("paddingRight")),finalw = $diysel.width() - difw - pad + 1;
					if (finalw <= 0) finalw = Math.max(65, $ctarget.width()) - pad - 16;
					$cursel.width(finalw).attr("val",$ctarget.val()).html($ctarget.find('option:selected').html());$cursel = difw = finalw = null;
				},50);
				// 绑定CLICK事件
				$diysel.bind('click'+namespace,function(e){
					if(self.options.disabled || !selopts.length) return;
					var $selectedcnt = $(selopts).appendTo('body'),maxheight = $selectedcnt.outerHeight(true);
					self._selected($selectedcnt, $ctarget.val()); // 设置默认值
					// 绑定LI:HOVER及CLICK事件
					if ($selectedcnt.is(':hidden')) {
						var $target = $(this);
						$selectedcnt.find('li').bind('mouseenter'+namespace, function(e){
							$(this).addClass('local').siblings().removeClass('local');
						}).bind('mouseleave'+namespace, function(e){
							$(this).removeClass('local');
						}).bind('click'+namespace, function(e){
							var $li = $(this),selval = $li.attr("val");
							$target.children('.'+selectclass+'-left').html($li.html()).attr("val", selval);
							$ctarget.val(selval).trigger('change');// 捕获已绑定SELECT事件
						}).end().slideDown('slow',function(){
							var $selcnt = $(this);
							// 定位滚动条 2012/11/09
							var selcnt = $selcnt[0],clienth = selcnt.clientHeight,$selected = $selcnt.find('li.local');
							if ($selected.size() > 0) {
								var seltop = $._parseFloat($selcnt.css("top")),
								litop = seltop + $selected[0].offsetTop - selcnt.offsetTop + $selected.height();
								if(clienth < litop) selcnt.scrollTop = litop - clienth;
							}
							// End
							$(document).one('click'+namespace,function(e){
								$selcnt.slideUp().remove();
								return false;
							});
						});
						setSeloptsPos($target,$selectedcnt,maxheight);
						// 绑定RESIZE事件
						$(window).resize(function(){
							setSeloptsPos($target,$selectedcnt,maxheight);
						});
					}
				});
				function setSeloptsPos(target,dom,maxh){
					var $target = target,pos = $target.offset();
					dom.css({
						"top": function(i,val){
							var wnh = window.innerHeight||self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,
							_top = self._int(pos.top),_oh = $target.outerHeight(true),newtop = 0;
							if (wnh < _top + maxh + _oh) {
								newtop = Math.max(0, _top - maxh - 1);
								$(this).css({"border-bottom": 'none',"border-top": '1px solid #B5B5B5'});
							} else newtop = _top + _oh + 1;
							wnh = _top = _oh = null;
							return newtop+'px';
						},"left": function(i,val){
							return self._int(pos.left)+'px';
						}
					});
				}
			});
		},
	    value : function(value){
	    	var self = this;
			var selectclass=self.options.selectclass;
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			var $target = self.element,$select = $target.next('.'+selectclass+'-outside');
	    	$target.val(value);
	    	$select.find('.'+selectclass+'-left').attr("val",value).html($target.children('option:selected').html());
	    },
		_doinit : function(dom){
			var dtd = $.Deferred(),self = dom,$target = self.element;
			var selectclass=self.options.selectclass,_stripslashes = function(str){
				return (str + '').replace(/\\(.?)/g, function(s, $1){
				    switch ($1) {
				    	case '\\': return '\\';
				    	case '0': return '\u0000';
				    	case '': return '';
				    	default: return $1;
				    }
			  	});
			};
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			$target.hide();// 隐藏SELECT控件
			// 自定义类SELECT
			var selopt = '',selw = Math.max($target.width(), 65);
			var selhtm = '<div class="'+selectclass+'-outside overz" style="float:left;width:'+selw+'px;"><div class="'+selectclass+'">';
			$target.children('option').each(function(i,c){
				var self = c;
				selopt += '<li val="'+self.value+'">'+_stripslashes(self.innerHTML)+'</li>';
			});
			selhtm += '<div class="'+selectclass+'-left" val="0">&nbsp;</div><div class="'+selectclass+'-button"><a href="###" onclick="return false;"></a></div></div></div>';
			$target.after(selhtm);
			dtd.resolve($target,'<div class="'+selectclass+'-content overz" style="width:'+(selw-2)+'px;"><ul>'+selopt+'</ul></div>');
			return dtd.promise();
		},
		_int : function(numstr){
			var number = parseInt(numstr);
			if(isNaN(number)) return 0;
			return number;
		},
		_selected : function(dom,value){
			dom.find('li').each(function(i,c){
				var $target = $(c),ent = '';
				ent = ($target.attr("val") == value)?'addClass':'removeClass';
				$target[ent]('local');
			});
			return true;
		},
		enable : function(){
			var self = this;
			var selectclass=self.options.selectclass;
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			var $select = self.element.next('.'+selectclass+'-outside');
			$select.find('.'+selectclass+'-left').css("color","#5A5A5A");
			$select.find('.'+selectclass+'-button > a').removeClass('disabled');
			$.Widget.prototype.enable.call(self);
		},
		disable : function(){
			var self = this;
			var selectclass=self.options.selectclass;
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			var $target = self.element,$select = $target.next('.'+selectclass+'-outside');
			// 还原SELECT控件默认值
			var firstopt = $target.find('option')[0];
			$target[0].selectedIndex = 0;
			$select.find('.'+selectclass+'-left').css("color","#7C7C7C").attr("val",firstopt.value).html(firstopt.innerHTML);
			$select.find('.'+selectclass+'-button > a').addClass('disabled');
			$.Widget.prototype.disable.call(self);
		},
		destroy : function(){
			var self = this;
			var selectclass=self.options.selectclass;
			if(selectclass.length==0){ selectclass='wp-diy-selected';}
			$(document).unbind(namespace);
			self.element.next('.'+selectclass+'-outside').unbind(namespace).remove();
			$.Widget.prototype.destroy.call(self);
		}
	});
})(jQuery);

/**
 * 文本框绑定的事件
 * event(参数) - 触发回调的本地事件对象
 * -> onkeydown: function(event){
 * -> 	// do something
 * -> }
 * -> onkeyup: function(event){
 * -> 	// do something
 * -> }
 * -> onchange: function(event){
 * -> 	// do something
 * -> }
 * -> onfocus: function(event){
 * -> 	// do something
 * -> }
 * -> onblur: function(event){
 * -> 	// do something
 * -> }
 */
;(function($,undefined){
	var readyToOnBlur = true,
	  eventNamespace = '.wpcstinput';
	
	$.widget('wp.cstinput',{
		options : {
			value : '', // 文本默认值,
			regexp : /^\d+(\.\d+)?$/, // 输入值验证正则
			range : [0], // 可输入值范围[min,max](大于0)
			maxlength : 4, // 可输入值长度
			unit : 'px', // 可输入值单位(像素)
			step : 1, // 递增/减步长
			style : '', // 显示区域样式
			nmnode_style : '', // 文本框父节点样式
			btnnode_style : '', // 箭头父节点样式
			upbtn_style : '', // 上箭头节点样式
			downbtn_style : '', // 下箭头节点样式
			complete : function(){} // 方向键的回调函数(第一个参数为当前对象,第二个参数为递增/减的值)
		},
			
		_create : function(){
			var $this = this,
			  $input = $this.element,
			  options = $this.options;
			var uistyle = (options.hasOwnProperty('style') && options.style.length) ? ' style="'+options.style+'"' : '',
			nmstyle = (options.hasOwnProperty('nmnode_style') && options.nmnode_style.length) ? ' style="'+options.nmnode_style+'"' : '',
			btnstyle = (options.hasOwnProperty('btnnode_style') && options.btnnode_style.length) ? ' style="'+options.btnnode_style+'"' : '',
			upstyle = (options.hasOwnProperty('upbtn_style') && options.upbtn_style.length) ? ' style="'+options.upbtn_style+'"' : '',
			downstyle = (options.hasOwnProperty('downbtn_style') && options.downbtn_style.length) ? ' style="'+options.downbtn_style+'"' : '';
			$input.wrap('<div class="wp_cstinput_helper"'+uistyle+' unselectable="on"><div class="nminput_helper"'+nmstyle+' unselectable="on"></div>'
			+'<div class="minplus_helper"'+btnstyle+' unselectable="on"><span class="up"'+upstyle+' unselectable="on"></span><span class="down"'+downstyle+' unselectable="on"></span></div></div>');
			// Default value
			if(options.hasOwnProperty('value') && options.regexp.test(options.value)) $input.focus().val(options.value);
			// Maxlength
			if(options.hasOwnProperty('maxlength') && /^[1-9]{1}\d*$/.test(options.maxlength)) $input.attr('maxlength',options.maxlength);
			// Unit(像素)
			if(options.hasOwnProperty('unit') && options.unit.length)
			  $input.closest('.wp_cstinput_helper').after('<div class="wp_cstunit_helper" unselectable="on">'+options.unit+'</div>');
			
			// Bind input events
			$.each(['keydown','keyup','change','focus','blur'],function(i,event){
				$input.bind(event+eventNamespace,function(e){
					if(!readyToOnBlur && (event == 'blur')) return false;
					$this._trigger('on'+event, e, null);
				});
			});

			// Bind buttons events
			var $buttons, upbtn, downbtn;
			$buttons = $this.buttons = $input.closest('.wp_cstinput_helper').find('.minplus_helper > span');
			upbtn = $buttons[0];
			downbtn = $buttons[1];
			$buttons.mousedown(mouseDown).mouseup(mouseUp).mouseout(mouseUp);
			
			function mouseDown(){
				if(options.disabled) return;
				var step = (this === upbtn) ? options.step : -options.step;	
				$input.focus();
				$input.select();
				
				readyToOnBlur = false;
				$this._doCount(step);
				return false;
			}
			
			function mouseUp(){
				if (!readyToOnBlur) {
				//	$this._stopCount();					
					readyToOnBlur = true;
				}
				return false;
			}
		},
		
		_doCount : function(step){
			var newval,
			  range = this.options.range,
			  curval = this.element[0].value;
			if(!curval.length){ 
				// input值为空时，点击值变为0 leiminglin 2014/4/22 
				curval = this.element[0].value = 0;
			}
			newval = this._parseValue(curval) + step;
			// 范围限定
			if ($.isArray(range) && (range.length > 0)) {
				var min,max;
				if(typeof range[0] != 'undefined') min = range[0];
				if(typeof range[1] != 'undefined') max = range[1];
				// 溢出判断
				if((step < 0) && (typeof min === 'number') && (newval < min)) newval = min;
				if((step > 0) && (typeof max === 'number') && (newval > max)) newval = max;
			}
			this.element[0].value = newval;
			// 绑定方向键的回调函数
			if($.isFunction(this.options.complete)) this.options.complete(this.element,newval);
		},
			
		_parseValue : function(numString){
			var number = parseFloat(numString);
			if(isNaN(number)) return 0;
			return number;
		},
		
		enable : function(){
			this.buttons.removeClass('cstinput_disabled');
			$.Widget.prototype.enable.call(this);
		},
		
		disable : function(){
			this.buttons.addClass('cstinput_disabled');
			$.Widget.prototype.disable.call(this);
		},
		
		destroy : function(){
			var $this = this.element,
			  $cstinput_helper = $this.closest('.wp_cstinput_helper');
			$this.removeAttr('maxlength').unbind(eventNamespace);
			$cstinput_helper.before($this[0]);
			$cstinput_helper.siblings('.wp_cstunit_helper').remove().end().remove();
			$.Widget.prototype.destroy.call(this);
		}
	});
})(jQuery);

// 自定义垂直滚动条 2014/02/07
;(function($, undefined){
	var namespace = 'simroll',
	getMscrollWidth = function(){
		var noScroll,scroll,oDiv = document.createElement("DIV");
		oDiv.style.cssText = "position:absolute;top:-1000px;width:100px;height:100px;overflow:hidden;";
		noScroll = document.body.appendChild(oDiv).clientWidth;
		oDiv.style.overflowY = "scroll";
		scroll = oDiv.clientWidth;
		document.body.removeChild(oDiv);
		return noScroll - scroll;
	};
	$.widget('wp.mscroll', {
		options : {
			difleft: 0,/*滚动条自定义偏移量*/
			maskleft: 0,/*滚动条遮罩层left*/
			barleft: 0,/*滚动条滑块left*/
			height: 0,/*滚动条height*/
			maskbg: '#fff',
			maskcname: 'wp-mobile-device-mask',/*滚动条遮罩层class*/
			barcname: 'wp-mobile-scrollbar'/*滚动条滑块class*/
		},
		_create : function(){
			var self = this,creatid = '-'+self._getRandomStr(),maskbg = (self.options.maskbg||'').length?'background:'+self.options.maskbg:'',
			barstr = '<div id="'+namespace+creatid+'-mask" class="'+self.options.maskcname+'" style="'+maskbg+'"></div>';
			barstr += '<div id="'+namespace+creatid+'-bar" class="'+self.options.barcname+'"><span class="pane"></span></div>';
			self.options.creatid = creatid;
			self.element.before(barstr);
			self._setScrollPos(creatid);
			self._bindScroll(creatid);
		},
		_setScrollPos : function(id){
			var prefid = namespace+id,barleft = 0,self = this,$target = self.element,
			$mask = $target.prevAll('#'+prefid+'-mask'),$bar = $target.prevAll('#'+prefid+'-bar');
			$mask.add($bar).css({"left": function(){
				var curtype = $(this).attr("id").replace(prefid+'-', '');
				if (self.options[curtype+'left']) barleft = self.options[curtype+'left'];
				else {
					var swidth = getMscrollWidth() || 16;
					barleft = self._parseFloat($target.css("left")) + $target.width() - swidth;
				}
				return barleft+'px';
			},"height": ($target.height() + 1)+'px',"visibility": 'visible'});
			$bar.css("left", function(){return (barleft + self._parseFloat(self.options.difleft||0))+'px'});
		},
		_bindScroll : function(id){
			var self = this,$target = self.element,$bar = $target.prevAll('#'+namespace+id+'-bar'),paneH = 0,
			$spane = $bar.children('span.pane'),containerH = $target.height(),paneContainerH = 0;
			$target.bind("scroll."+namespace, function(e){
		  		var contentH = this.scrollHeight;$bar.height(self.options.height||containerH);
		  		if (containerH < contentH) paneH = self._parseFloat(containerH*containerH / contentH);
		  		$spane.height(paneH);
		  		var maxtop = containerH - paneH,
		  		movey = self._parseFloat(this.scrollTop * containerH / contentH);
		  		$spane.css("top", Math.min(movey, maxtop)+'px');
		  	}).triggerHandler("scroll."+namespace);
			// Pane Handler
		  	(function(){
		  		var curtop,curpagey;
		        $spane.bind("mousedown."+namespace, function(e){
		            e.preventDefault();curpagey = e.pageY;
		            curtop = self._parseFloat($spane.css("top"));
		            $spane.addClass("scrolling");
		            $(document).bind("mousemove."+namespace, function(e){
			        	if (! $spane.hasClass("scrolling")) return;
			        	var newtop = curtop + e.pageY - curpagey,panetop = Math.max(0, newtop),
			        	target = $target.get(0),contentH = target.scrollHeight;
			        	// Reset pane-top
			        	var scrltop = self._parseFloat(panetop * contentH / containerH),
			        	maxtop = containerH - $spane.height();
			        	if (panetop >= maxtop) scrltop = contentH - target.clientHeight;
			        	$target.scrollTop(scrltop);return false;
			        }).bind("mouseup."+namespace, function(e){
			        	e.preventDefault();$(document).unbind("."+namespace);
			        	$(parent.document).unbind(".rmscroll");
			        	if (! $spane.hasClass("scrolling")) return;
			        	$spane.removeClass("scrolling");
			        });
			        $(parent.document).bind("mouseup.rmscroll",function(){$(document).unbind("."+namespace)});
		        }).bind("mouseup."+namespace, function(e){
		        	$(document).unbind("."+namespace);
		        	$(parent.document).unbind(".rmscroll");return false;
		        });
		  	})();
		},
		_getRandomStr : function(len){
		    len = len || 16;
		    var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789',
		    maxlen = chars.length,result = '';
		    for(var i = 0; i < len; i++){
		        result += chars.charAt(Math.floor(Math.random() * maxlen));
		    }
		    return result;
		},
		_parseFloat : function(numstr){
			var number = parseFloat(numstr);
			if (isNaN(number)) return 0;
			return number;
		},
		destroy : function(){
			var self = this,prefid = '#'+namespace+self.options.creatid;
			$(document).add(self.element).unbind("."+namespace);
			self.element.prevAll(prefid+'-mask,'+prefid+'-bar').remove();
			$.Widget.prototype.destroy.call(self);
		}
	});
})(jQuery);

//js生成guid
function fGuid(bOrg)
{
//	 try
//	 {
//		 var sGuid=new ActiveXObject('scriptlet.typelib').GUID
//	 } 
//	 catch(e)
//	 { 
//		 var sGuid=fGuidCst();
//	 }
	 var sGuid=fGuidCst();
	 if(bOrg) return sGuid;
	 return (sGuid+'').replace(/\{|\}|-/g,'');
	 
	 function fGuidCst()
	 {
		  var sGuid='';
		  for(var i=1; i<=32; i++)
		  {
			   var nNum=0;
			   nNum=parseInt(Math.random()*16);
			   sGuid+=nNum.toString(16);
			   if(i==8||i==12||i==16||i==20)sGuid+='-';
		  }
		  return '{'+sGuid.toUpperCase()+'}';
	 }
}

(function(window){
	/**
	 * 对话框缓存ajax请求
	 */
	var html_caches={};
	
	/**
	 * Float对话框
	 * (String)load_url - 加载的地址
	 * (Object)option - 配置项(title|titlebg|contentClass|id|width|height|left|top|isCenter|overlay|showBottom|zIndex|open|close)
	 */
	function wp_floatpanel(load_url,option){
		var config = $.extend({},{
			title: 'Title',
			titlebg: true,
			contentClass: 'wp-panel_outpadding',
			id: 'wp-float_panel',
			width: 286,
			height: 'auto',
			left: 5,
			top: 60,
			isCenter: false,
			overlay: false,
			isIframe: false,
			contain:$('body'),
			zIndex: 1000,
			showBottom: false,
			cache: true,
			postbody:false,
			swfFix: false,
			open: function(){},
			close: function(){},
			data: option['data']||"{}",
		},option||{});
		// Remove old panel
		var pnl,$pnl,wp_timer,id = config.id,$target = id?$('#'+id):$('.wp-floatpanel_dialog'),$contain=config.contain;
		// Init parameters
		var rgx = /^\d+$/i,plw = config.width,plh = config.height,pllt = config.left,pltp = config.top,cc = config.contentClass,
		ct = config.isCenter,ol = config.overlay,z = config.zIndex,sm = config.showBottom,isfrm = config.isIframe;
		if (!$target.size()) {
			// Init overlay
			var ols = '';
			if (ol) {
				var $overlay = $('#wp-floatpanel_overlay');
				if($overlay.size() > 0) $overlay.remove();
				ols = '<div id="wp-floatpanel_overlay" style="z-index:'+z+';"></div>';
				z += 1;
			}
			// Show or not bottom
			var sms = '';
			if (sm) {
				sms += '<div class="wp-show_allpage"><input type="checkbox" name="show_allpage" value="" /><span>'+translate('property.showInBottom')+'</span></div>'
				+ '<div class="wp-coordinate"><span>x:<input type="text" name="xpos" value="0" id="xpos" /></span>'
				+ '<span>y:<input type="text" name="ypos" value="0" id="ypos" /></span>'
				+ '<span class="wp-coordinate-w">w:<input type="text" name="xwidth" value="0" id="xwidth" /></span>'
				+ '<span>h:<input type="text" name="xheight" value="0" id="xheight"/></span>'
				+ '<span class="wp-coordinate-lock overz"><img src="'+relativeToAbsoluteURL('template/default/images/un-lock.png')+'" width="16" height="15" /></span></div>';
			}
			// Loading area
			var $tmpwin = $(window),$load = $('#wp-floatpanel_loading'),loadstr = '<div id="wp-floatpanel_loading" style="z-index:'+(z-1)+';"><img src="'+relativeToAbsoluteURL('template/default/images/loading.gif')+'" width="16" height="16" /></div>';
			if($load.size() > 0) $load.remove();
			// Create panel
			var superid = $.options ? $.options.superid : 0;
			//<img src="'+relativeToAbsoluteURL("template/default/images/wp-help_icon.png")+'" width="16" height="16" class="wp-help" />
			var $ap = $('<div id="'+id+'" class="wp-floatpanel_dialog wp-manage_panel overz" style="display:none;position:absolute;z-index:'+z+';" belong="'+(superid||null)+'"><div class="wp-title overz'+(config.titlebg?' wp-title_black':'')+'"><h2>'+config.title+'</h2>'
			+'<div class="wp-icon" style="width:19px;"><a href="javascript:;" class="close"></a></div></div>'
			+'<div class="'+cc+' overz"></div>'+sms+'</div>'+ols+loadstr).appendTo($contain);
			pnl = $ap[0];$pnl = $(pnl);
			// Loading position
			var winWidth = $tmpwin.width(),pnlWidth = $pnl.width();
			$('#wp-floatpanel_loading').width(winWidth).height($tmpwin.height());
			// Events
			$pnl.draggable({handle: '.wp-title',cancel: '.wp-icon',cursor: 'move',scroll: false,iframeFix: true,start: function(e,ui){
				var $target = $(this),titleH = $target.find('.wp-title').outerHeight();
				$('.wp-diy-selected-content').slideUp().remove();// 拖拽弹窗时注销“自定义SELECT下拉框” 2012/11/09
				// SWF object ghost lines
				if (config.swfFix) {
					var $swf = $target.find('object');
					if ($swf.length > 0) {
						$swf.parent().data("wpswfsize",{"width": $swf.width(),"height": $swf.height()});
						$swf.css({"height": '0',"width": '0',"visibility": 'hidden'});
					}
					$swf = null;
				}
				if ($target.find('iframe').length > 0) {
					var $innerfrm = $target.find('.ui-resizable-innerIframeFix');
					($innerfrm.length > 0) && $innerfrm.remove();
					$('<div class="ui-resizable-innerIframeFix" style="background-color:#FFF;"></div>').css({
						left: 0,top: titleH+'px',position: 'absolute',opacity: '0.001',zIndex: 1000,
						width: $target.width()+'px', height: ($target.height() - titleH)+'px'
					}).appendTo($target);
				}
			},drag: function(e,ui){
				var pos = ui.position;// 防溢出 2012/10/29
				if(pos.top < 0) pos.top = 0;
				if(pos.left <0) pos.left = 0;
				if(winWidth < pnlWidth + pos.left) pos.left = winWidth - pnlWidth;
			},stop: function(){
				var $innerfrm = $('.ui-resizable-innerIframeFix', this);
				($innerfrm.length > 0) && $innerfrm.remove();
				// SWF object ghost lines
				if (config.swfFix) {
					var $swf = $(this).find('object');
					if ($swf.length > 0) {
						var $swfprt = $swf.parent(),swfsize = $swfprt.data('wpswfsize');
						$swf.css({"height": (swfsize.height||24)+'px',"width": (swfsize.width||82)+'px',"visibility": 'visible'});
						$swfprt.removeData('wpswfsize');$swfprt = swfsize = null;
					}
					$swf = null;
				}
			}}).bind('wpdialogclose',function(e){
				$pnl = {};// 注销$pnl对象
				clearTimeout(wp_timer);
				var dom = $(e.target);
				if(ol) dom = dom.add('#wp-floatpanel_overlay');
				if($.isFunction(config.close)) config.close(dom[0]);
				$(document).trigger('click');//IE8中无法移除cstselect插件的div.wp-diy-selected-content
				return dom.add('#wp-floatpanel_loading').remove();
			});
		} else {
			$pnl = $target;
			pnl = $target[0];
		}
		// Load content
		$.Deferred(function(dtd){
			// Modal setting
			if (isfrm == false) {
				if(config.cache && html_caches[load_url]){
					var data=html_caches[load_url];
					dtd.resolve(data);
				}else{
					var ajaxopts={};
					if(config.postbody)  ajaxopts={data:config.postbody};
					$.ajax($.extend({
						type: "POST",url: load_url,
						data: config.data,
						beforeSend: function(){
							// 取消全局设置属性以修复IE“闪屏”问题 2012/10/30
						},success: function(data){
							if(data.length > 0){
								if(data == 'Session expired')
									window.location.href = getSessionExpiredUrl();
								dtd.resolve(data);
								if(config.cache) html_caches[load_url]=data;
							} 
							else dtd.reject();
						},error: function(xhr, textStatus, errorThrown){
							wp_alert((errorThrown||textStatus)+'('+config.title+')'+".<br/>"+translate('Request failed!')); 
							$pnl.triggerHandler('wpdialogclose');
							return false;
						}
					},ajaxopts));
				}
			} else {
				var frmw = plw - 26/*左右padding值为2*13px*/,frame = '<div class="wp-iframe_beforloaded"><img src="'+relativeToAbsoluteURL('template/default/images/loading.gif')+'" width="16" height="16" /></div>'
				+'<iframe id="'+id+'_frame" name="'+id+'_frame" allowtransparency="true" frameborder="0" src="'+load_url+'" scrolling="auto" width="'+frmw+'" onload="this.height=200;$(\'.wp-iframe_beforloaded\',\'#'+id+'\').remove();initFrame(this,\''+cc+'\',\''+plh+'\');"></iframe>';
				dtd.resolve(frame);
			}
			return dtd.promise();
		}).done(function(data){
			$('#wp-floatpanel_loading').remove();
			// Append innerHTML
			var ocs = {};
			$('.'+cc,pnl).html(data);
			if(rgx.test(plw)) ocs['width'] = plw+'px';
			if(rgx.test(plh)) ocs['height'] = plh+'px';
			// Reset position
			if (ct || ol) {
				$pnl.show().css(ocs);
				wp_timer = setTimeout(function(){
					$pnl.triggerHandler('wpdialogsetpos');
				},30);
				// Bind window resize
				$(window).resize(function(){
					panel_position($pnl,plw,plh,ol,'wp-floatpanel_overlay');
				});
				$pnl.bind('wpdialogsetpos',function(e){
					panel_position($pnl,plw,plh,ol,'wp-floatpanel_overlay');
				});
			} else {
				if(rgx.test(pllt)) ocs['left'] = pllt+'px';
				if(rgx.test(pltp)) ocs['top'] = pltp+'px';
				$pnl.css(ocs).show();//.animate(ocs,'slow');
			}
			config.open(pnl);
		}).fail(function(){
			wp_alert(config.title+"(deferred fail).<br/>"+translate('Request failed!')); 
			$pnl.triggerHandler('wpdialogclose');
			return false;
		});
		// Bind close events
		$('.wp-title a.close',pnl).bind('click',function(e){
			$pnl.triggerHandler('wpdialogclose');
			// IE下禁止触发onbeforeunload
			e.preventDefault();
		});
		return null;
	}
	window.wp_floatpanel=wp_floatpanel;
})(window);

// Dialog定位
function panel_position(dom,width,height,isoverlay,overlayid){
	if(dom instanceof jQuery == false) return;
	var $target = dom,/*$win = $(window),*/tpw = $target.outerWidth(true),tph = $target.outerHeight(true),
	floor = Math.floor,rgx = /^\d+$/i,ocs = {};
	var scrolltop=$(document).scrollTop();
	// Parse
	if(rgx.test(height)) tph = height;
	tpw = Math.max(tpw,width);
//	var wnw = $win.width(),wnh = $win.height();
	var wnw = window.innerWidth || self.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
	wnh = window.innerHeight || self.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	pltp = floor((wnh - tph)/2);
	pllt = floor((wnw - tpw)/2);
	// Overlay
	if(isoverlay) $('#'+overlayid).width(wnw).height(wnh);
	// Panel
	ocs['left'] = pllt+'px';
	ocs['top'] = ((pltp>0?pltp:0)+scrolltop)+'px';
	$target.css(ocs);//animate(ocs,'slow');
//	return ocs;
}

$._parseFloat = function(numString){
	var number = parseFloat(numString);
	if(isNaN(number)) return 0;
	return number;
}

function fix_img_url_path(imgurl){
	var escapeRegExp = (function () {
		var specials = [ '-','[',']', '/','{', '}', '(',')', '*','+','?', '.','\\', '^','$', '|' ];
		var regex = new RegExp('[' + specials.join('\\') + ']', 'g'); 
		return function escapeRegExp(str) {
			return str.replace(regex, '\\$&');
		};
	})();
	var imgfilenameregxp=/\/([^\/]+)$/;
	var matches=imgurl.match(imgfilenameregxp);
	var codedimgurl='';
	if(matches){
		var oldfilename=matches[1];
		var newfilename=encodeURIComponent(oldfilename);
		var oldfileregexp=new RegExp(escapeRegExp(oldfilename)+'$');
		codedimgurl=imgurl.replace(oldfileregexp,newfilename);
	}else{
		codedimgurl=encodeURIComponent(imgurl);
	}
	return codedimgurl;
}

/**
* 图片自适应 居中显示
*/
function set_pic(obj) {
	var img = new Image();
	img.src =$(obj).attr("src"); 
	var width=img.width;
	var height=img.height;
	if(width==0){
		width=107;
	}
	if(height==0){
		height=107;
	}
	var W=107;
	var H=107;
	var _width=107;
	var _height=107;
	var _top=0;
	if(width>height){
		_height=(height*H)/width;
		_top= (W-_height)/2;
		$(obj).attr('style','width: ' + _width + 'px;height:'+_height+'px;');
		$(obj).parent().css('top', _top);
	}else{
		_width=(width*H)/height;
		_top= (W-_width)/2;
		$(obj).attr('style','width: ' + _width + 'px;height:'+_height+'px;left:'+_top+'px;');
		$(obj).parent().css({'top':0,'left':_top});
	}
	
}	

/**
 * 手机站弹窗(模拟新窗口打开) 2014/06/09
 */
function msite_popup(url){
	var $container = $('#scroll_container'),maxh = $(window).height(),
	bgimg = relativeToAbsoluteURL('template/default/images/loading.gif'),
	css = 'position:absolute;top:0;left:0;width:320px;overflow:hidden;z-index:10000',
	ihtml = '<div class="mspopup_mask" style="background:url('+bgimg+') no-repeat 50% 20% #fff;height:'
	+maxh+'px;'+css+'"><iframe allowtransparency="true" frameborder="0" scrolling="no" width="320" height="'
	+maxh+'" src="'+url+'" onload="mspopup_onload(this)"></iframe></div>';
	
	var $mask = $container.children('.mspopup_mask');
	if(! $mask.length) $container.append(ihtml).attr("data-height", $container.height()).height(maxh);
}

function mspopup_onload(win){
	win.height = 'auto';
	var bodh = win.contentWindow.document.body.scrollHeight,
	doch = win.contentWindow.document.documentElement.scrollHeight,
	maxheight = Math.max(bodh, doch);
	
	// Reset height
	win.height = maxheight;
	$(win).parent('.mspopup_mask').height(maxheight)
	.parent('#scroll_container').height(maxheight);
}

function create_pc_media_set_pic(layer_id,editmode){
	var func=function(obj) {
		var callback=function(img){
				img.show();
				img.closest('.img_over').children('.imgloading').remove();
				if(!editmode){
					$(function(){			
						var super_id=layer_id;
						var dom_img=$("#"+super_id).find('.paragraph_image');
						var left_img=parseInt(dom_img.css('left'));
						var top_img=parseInt(dom_img.css('top'));
						var width_img=parseInt(dom_img.css("width"));
						var height_img=parseInt(dom_img.css("height"));
						if(isNaN(left_img)){ left_img=0; }
						if(isNaN(top_img)){ top_img=0; }
						var ii=0;
						$("#"+super_id).find(".wp_mapclass").each(function(){
							var shape="rect";
							shape=$(this).attr('shape');
							if(shape != "circle"){
								shape="rect";
							}

							var leftz=parseInt($(this).css("left"));
							var topz=parseInt($(this).css("top"));
							var widthz=parseInt($(this).css("width"));
							var heightz=parseInt($(this).css("height"));

							if(shape != "circle"){
								var coords='0,0,0,0';
							}else{
								var coords='0,0,0';
							}		
							if( (leftz+widthz) < left_img || (topz+heightz)< top_img){
							}else{
								var cleft=0;
								var ctop=0;
								var r=0;
								if(shape != "circle"){
									cleft=leftz-left_img;
									ctop=topz-top_img;
									coords=cleft+','+ctop+','+(cleft+widthz)+','+(ctop+heightz);
								}else{
									r=widthz/2;
									cleft=leftz-left_img+r;
									ctop=topz-top_img+r;
									coords=cleft+','+ctop+','+r;
								}
							}	

							//var classid=$(this).attr('id');
							var classid="map_arear_"+ii;
							ii++;
							var mapd=$(this).parent().find("."+classid);
							mapd.attr('coords',coords);
							$(this).remove();

						});
					})
				}
		}
		$(obj).each(function() {
			var img=$(this);
			callback(img);
		});      
	}
	window['set_thumb_'+layer_id]=func;
};
function wp_heightAdapt(E,U){if(E==undefined){return false}if($.inArray(E.attr("type"),["bslider"])!=-1){return}var R=function(){var i=E.data("oriheight");if(!i){i=E.children("div").eq(0).height();E.data("oriheight",i)}return i};var e=function(m){var u=m.data("adaptoritop");var l=m.data("adaptoriheight");var r=m.data("adaptpress");var j=m.data("adaptwrap");var q=E.prop("id");var o=$.parseInteger(m.css("top"));if(!u&&u!==0){m.data("adaptoritop",o);m.data("adaptoriheight",m.height());return}if(r&&r.length){for(var n=0;n<r.length;n++){var t=r[n];if(t.id!=q){u+=t.diffY}}}if(j&&j.length){var p=l;for(var n=0;n<j.length;n++){var k=j[n];if(k.id!=q){p+=k.diffH}}if(p!=m.height()){m.css("height",p+"px");var v=parseInt(m.children("div").eq(0).css("padding-top"))+parseInt(m.children("div").eq(0).css("padding-bottom"));var s=parseInt(m.children("div").eq(0).css("border-top-width"))+parseInt(m.children("div").eq(0).css("border-bottom-width"));m.children("div").eq(0).height(m.height()-v-s)}}if(u!=o){m.css("top",u+"px")}};var J=$("#canvas").data("adaptoriheight");if(!J){$("#canvas").data("adaptoriheight",$("#canvas").height());J=$("#canvas").data("adaptoriheight")}var C=R();var H=E.children("div").eq(0).height();e(E);E.children("div").eq(0).css("height","auto");var W=E.children("div").eq(0).height();if(W<C){E.children("div").eq(0).css("height",C+"px");if(C==H){return}}else{var B=parseInt(E.children("div").eq(0).css("border-top-width"))+parseInt(E.children("div").eq(0).css("border-bottom-width"));if(B>0){W=W-B}E.children("div").eq(0).css("height",W+"px");if(W==H){return}}var A=parseInt(E.children("div").eq(0).css("padding-top"))+parseInt(E.children("div").eq(0).css("padding-bottom"));var S=parseInt(E.children("div").eq(0).css("border-top-width"))+parseInt(E.children("div").eq(0).css("border-bottom-width"));var V=U||C+A+S;var a=E.children("div").eq(0).outerHeight();var L=E.outerWidth();var K=E.ab_pos_cnter("top");var G=E.ab_pos_cnter("left");var Y=G+E.outerWidth();var g=0;var M=new Array();var P=new Array();var f=0,N=0;var O=0;$("#canvas").find(".cstlayer,.full_column").each(function(){e($(this));var i=$(this).ab_pos_cnter("left"),k=$(this).ab_pos_cnter("top"),j=$(this).outerWidth(),l=$(this).outerHeight();if($(this).hasClass("cstlayer")){if(i+j<G){return true}if(i>Y){return true}if(E.attr("id")==$(this).attr("id")){return true}if((i<=G&&i+j>=Y)&&(k<=K&&k+l>=K+V)){P.push($(this).attr("id"));return true}if($(this).parent().hasClass("full_content")||$(this).parent().hasClass("footer_content")){return true}}if(k>=(K+V)){M.push($(this).attr("id"));if(f==0){f=k;N=$(this).attr("id")}else{if(f>k){f=k;N=$(this).attr("id")}}}});g=$("#"+N).ab_pos_cnter("top")-(K+V);if(M.length>0&&(K+a)>=f){O=K+a+g-f;for(var d=0;d<M.length;d++){var Z=$("#"+M[d]);Z.css("top",(parseInt(Z.ab_pos_cnter("top"))+O)+"px");var b=Z.data("adaptpress");if(!b){b=[]}var D=[];for(var c=0;c<b.length;c++){if(b[c].id!=E.prop("id")){D.push(b[c])}}D.push({id:E.prop("id"),diffY:O});Z.data("adaptpress",D)}}if(P.length>0){for(var d=0;d<P.length;d++){var T=a-V;var Z=$("#"+P[d]);Z.height($("#"+P[d]).height()+(T));var F=parseInt(Z.children("div").eq(0).css("padding-top"))+parseInt($("#"+P[d]).children("div").eq(0).css("padding-bottom"));var I=parseInt(Z.children("div").eq(0).css("border-top-width"))+parseInt($("#"+P[d]).children("div").eq(0).css("border-bottom-width"));Z.children("div").eq(0).height(Z.height()-F-I);var Q=Z.data("adaptwrap");if(!Q){Q=[]}var X=[];for(var c=0;c<Q.length;c++){if(Q[c].id!=E.prop("id")){X.push(Q[c])}}X.push({id:E.prop("id"),diffH:T});Z.data("adaptwrap",X)}}if(E.attr("type")=="fxdp"){E.height(E.children("div").eq(0).height()+A+S+50)}else{E.height(E.children("div").eq(0).height()+A+S)}var h=$("#canvas").height();if(h!=J){$("#canvas").css("height",J)}scroll_container_adjust()};