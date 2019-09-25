/* jquery.panzoom.min.js 3.2.2 (c) Timmy Willison - MIT License */

!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(c){return b(a,c)}):"object"==typeof exports?b(a,require("jquery")):b(a,a.jQuery)}("undefined"!=typeof window?window:this,function(a,b){"use strict";function c(a,b){for(var c=a.length;--c;)if(Math.round(+a[c])!==Math.round(+b[c]))return!1;return!0}function d(a){var c={range:!0,animate:!0};return"boolean"==typeof a?c.animate=a:b.extend(c,a),c}function e(a,c,d,e,f,g,h,i,j){"array"===b.type(a)?this.elements=[+a[0],+a[2],+a[4],+a[1],+a[3],+a[5],0,0,1]:this.elements=[a,c,d,e,f,g,h||0,i||0,j||1]}function f(a,b,c){this.elements=[a,b,c]}function g(a,c){if(!(this instanceof g))return new g(a,c);1!==a.nodeType&&b.error("Panzoom called on non-Element node"),b.contains(h,a)||b.error("Panzoom element must be attached to the document");var d=b.data(a,i);if(d)return d;this.options=c=b.extend({},g.defaults,c),this.elem=a;var e=this.$elem=b(a);this.$set=c.$set&&c.$set.length?c.$set:e,this.$doc=b(a.ownerDocument||h),this.$parent=e.parent(),this.parent=this.$parent[0],this.isSVG=n.test(a.namespaceURI)&&"svg"!==a.nodeName.toLowerCase(),this.panning=!1,this._buildTransform(),this._transform=b.cssProps.transform?b.cssProps.transform.replace(m,"-$1").toLowerCase():"transform",this._buildTransition(),this.resetDimensions();var f=b(),j=this;b.each(["$zoomIn","$zoomOut","$zoomRange","$reset"],function(a,b){j[b]=c[b]||f}),this.enable(),this.scale=this.getMatrix()[0],this._checkPanWhenZoomed(),b.data(a,i,this)}var h=a.document,i="__pz__",j=Array.prototype.slice,k=/trident\/7./i,l=function(){if(k.test(navigator.userAgent))return!1;var a=h.createElement("input");return a.setAttribute("oninput","return"),"function"==typeof a.oninput}(),m=/([A-Z])/g,n=/^http:[\w\.\/]+svg$/,o="(\\-?\\d[\\d\\.e-]*)",p=new RegExp("^matrix\\("+o+"\\,?\\s*"+o+"\\,?\\s*"+o+"\\,?\\s*"+o+"\\,?\\s*"+o+"\\,?\\s*"+o+"\\)$");return e.prototype={x:function(a){var b=a instanceof f,c=this.elements,d=a.elements;return b&&3===d.length?new f(c[0]*d[0]+c[1]*d[1]+c[2]*d[2],c[3]*d[0]+c[4]*d[1]+c[5]*d[2],c[6]*d[0]+c[7]*d[1]+c[8]*d[2]):d.length===c.length&&new e(c[0]*d[0]+c[1]*d[3]+c[2]*d[6],c[0]*d[1]+c[1]*d[4]+c[2]*d[7],c[0]*d[2]+c[1]*d[5]+c[2]*d[8],c[3]*d[0]+c[4]*d[3]+c[5]*d[6],c[3]*d[1]+c[4]*d[4]+c[5]*d[7],c[3]*d[2]+c[4]*d[5]+c[5]*d[8],c[6]*d[0]+c[7]*d[3]+c[8]*d[6],c[6]*d[1]+c[7]*d[4]+c[8]*d[7],c[6]*d[2]+c[7]*d[5]+c[8]*d[8])},inverse:function(){var a=1/this.determinant(),b=this.elements;return new e(a*(b[8]*b[4]-b[7]*b[5]),a*-(b[8]*b[1]-b[7]*b[2]),a*(b[5]*b[1]-b[4]*b[2]),a*-(b[8]*b[3]-b[6]*b[5]),a*(b[8]*b[0]-b[6]*b[2]),a*-(b[5]*b[0]-b[3]*b[2]),a*(b[7]*b[3]-b[6]*b[4]),a*-(b[7]*b[0]-b[6]*b[1]),a*(b[4]*b[0]-b[3]*b[1]))},determinant:function(){var a=this.elements;return a[0]*(a[8]*a[4]-a[7]*a[5])-a[3]*(a[8]*a[1]-a[7]*a[2])+a[6]*(a[5]*a[1]-a[4]*a[2])}},f.prototype.e=e.prototype.e=function(a){return this.elements[a]},g.rmatrix=p,g.defaults={eventNamespace:".panzoom",transition:!0,cursor:"move",disablePan:!1,disableZoom:!1,disableXAxis:!1,disableYAxis:!1,which:1,increment:.3,linearZoom:!1,panOnlyWhenZoomed:!1,minScale:.3,maxScale:6,rangeStep:.05,duration:200,easing:"ease-in-out",contain:!1},g.prototype={constructor:g,instance:function(){return this},enable:function(){this._initStyle(),this._bind(),this.disabled=!1},disable:function(){this.disabled=!0,this._resetStyle(),this._unbind()},isDisabled:function(){return this.disabled},destroy:function(){this.disable(),b.removeData(this.elem,i)},resetDimensions:function(){this.container=this.parent.getBoundingClientRect();var a=this.elem,c=a.getBoundingClientRect(),d=Math.abs(this.scale);this.dimensions={width:c.width,height:c.height,left:b.css(a,"left",!0)||0,top:b.css(a,"top",!0)||0,border:{top:b.css(a,"borderTopWidth",!0)*d||0,bottom:b.css(a,"borderBottomWidth",!0)*d||0,left:b.css(a,"borderLeftWidth",!0)*d||0,right:b.css(a,"borderRightWidth",!0)*d||0},margin:{top:b.css(a,"marginTop",!0)*d||0,left:b.css(a,"marginLeft",!0)*d||0}}},reset:function(a){a=d(a);var b=this.setMatrix(this._origTransform,a);a.silent||this._trigger("reset",b)},resetZoom:function(a){a=d(a);var b=this.getMatrix(this._origTransform);a.dValue=b[3],this.zoom(b[0],a)},resetPan:function(a){var b=this.getMatrix(this._origTransform);this.pan(b[4],b[5],d(a))},setTransform:function(a){for(var c=this.$set,d=c.length;d--;)b.style(c[d],"transform",a),this.isSVG&&c[d].setAttribute("transform",a)},getTransform:function(a){var c=this.$set,d=c[0];return a?this.setTransform(a):(a=b.style(d,"transform"),!this.isSVG||a&&"none"!==a||(a=b.attr(d,"transform")||"none")),"none"===a||p.test(a)||this.setTransform(a=b.css(d,"transform")),a||"none"},getMatrix:function(a){var b=p.exec(a||this.getTransform());return b&&b.shift(),b||[1,0,0,1,0,0]},getScale:function(a){return Math.sqrt(Math.pow(a[0],2)+Math.pow(a[1],2))},setMatrix:function(a,c){if(!this.disabled){c||(c={}),"string"==typeof a&&(a=this.getMatrix(a));var d=this.getScale(a),e=void 0!==c.contain?c.contain:this.options.contain;if(e){var f=c.dims;f||(this.resetDimensions(),f=this.dimensions);var g,h,i,j=this.container,k=f.width,l=f.height,m=j.width,n=j.height,o=m/k,p=n/l;"center"!==this.$parent.css("textAlign")||"inline"!==b.css(this.elem,"display")?(i=(k-this.elem.offsetWidth)/2,g=i-f.border.left,h=k-m-i+f.border.right):g=h=(k-m)/2;var q=(l-n)/2+f.border.top,r=(l-n)/2-f.border.top-f.border.bottom;a[4]="invert"===e||"automatic"===e&&o<1.01?Math.max(Math.min(a[4],g-f.border.left),-h):Math.min(Math.max(a[4],g),-h),a[5]="invert"===e||"automatic"===e&&p<1.01?Math.max(Math.min(a[5],q-f.border.top),-r):Math.min(Math.max(a[5],q),-r)}if("skip"!==c.animate&&this.transition(!c.animate),c.range&&this.$zoomRange.val(d),this.options.disableXAxis||this.options.disableYAxis){var s=this.getMatrix();this.options.disableXAxis&&(a[4]=s[4]),this.options.disableYAxis&&(a[5]=s[5])}return this.setTransform("matrix("+a.join(",")+")"),this.scale=d,this._checkPanWhenZoomed(d),c.silent||this._trigger("change",a),a}},isPanning:function(){return this.panning},transition:function(a){if(this._transition)for(var c=a||!this.options.transition?"none":this._transition,d=this.$set,e=d.length;e--;)b.style(d[e],"transition")!==c&&b.style(d[e],"transition",c)},pan:function(a,b,c){if(!this.options.disablePan){c||(c={});var d=c.matrix;d||(d=this.getMatrix()),c.relative&&(a+=+d[4],b+=+d[5]),d[4]=a,d[5]=b,this.setMatrix(d,c),c.silent||this._trigger("pan",d[4],d[5])}},zoom:function(a,c){"object"==typeof a?(c=a,a=null):c||(c={});var d=b.extend({},this.options,c);if(!d.disableZoom){var g=!1,h=d.matrix||this.getMatrix(),i=new e(h),j=this.getScale(h);"number"!=typeof a?(a=d.linearZoom?1+d.increment*(a?-1:1)/j:a?1/(1+d.increment):1+d.increment,g=!0):a=1/j,a=Math.max(Math.min(a,d.maxScale/j),d.minScale/j);var k=i.x(new e(a,0,0,0,"number"==typeof d.dValue?d.dValue/j:a,0)),l=d.focal;if(l&&!d.disablePan){this.resetDimensions();var m=d.dims=this.dimensions,n=l.clientX,o=l.clientY;this.isSVG||(n-=m.width/j/2,o-=m.height/j/2);var p=new f(n,o,1),q=this.parentOffset||this.$parent.offset(),r=new e(1,0,q.left-this.$doc.scrollLeft(),0,1,q.top-this.$doc.scrollTop()),s=i.inverse().x(r.inverse().x(p));i=i.x(new e([a,0,0,a,0,0])),p=r.x(i.x(s)),h[4]=+h[4]+(n-p.e(0)),h[5]=+h[5]+(o-p.e(1))}h[0]=k.e(0),h[1]=k.e(3),h[2]=k.e(1),h[3]=k.e(4),this.setMatrix(h,{animate:void 0!==d.animate?d.animate:g,range:!d.noSetRange}),d.silent||this._trigger("zoom",a,d)}},option:function(a,c){var d;if(!a)return b.extend({},this.options);if("string"==typeof a){if(1===arguments.length)return void 0!==this.options[a]?this.options[a]:null;d={},d[a]=c}else d=a;this._setOptions(d)},_setOptions:function(a){b.each(a,b.proxy(function(a,c){switch(a){case"disablePan":this._resetStyle();case"$zoomIn":case"$zoomOut":case"$zoomRange":case"$reset":case"disableZoom":case"onStart":case"onChange":case"onZoom":case"onPan":case"onEnd":case"onReset":case"eventNamespace":this._unbind()}switch(this.options[a]=c,a){case"disablePan":this._initStyle();case"$zoomIn":case"$zoomOut":case"$zoomRange":case"$reset":this[a]=c;case"disableZoom":case"onStart":case"onChange":case"onZoom":case"onPan":case"onEnd":case"onReset":case"eventNamespace":this._bind();break;case"cursor":b.style(this.elem,"cursor",c);break;case"minScale":this.$zoomRange.attr("min",c);break;case"maxScale":this.$zoomRange.attr("max",c);break;case"rangeStep":this.$zoomRange.attr("step",c);break;case"startTransform":this._buildTransform();break;case"duration":case"easing":this._buildTransition();case"transition":this.transition();break;case"panOnlyWhenZoomed":this._checkPanWhenZoomed();break;case"$set":c instanceof b&&c.length&&(this.$set=c,this._initStyle(),this._buildTransform())}},this))},_checkPanWhenZoomed:function(a){var b=this.options;if(b.panOnlyWhenZoomed){a||(a=this.getMatrix()[0]);var c=a<=b.minScale;b.disablePan!==c&&this.option("disablePan",c)}},_initStyle:function(){var a={"transform-origin":this.isSVG?"0 0":"50% 50%"};this.options.disablePan||(a.cursor=this.options.cursor),this.$set.css(a);var c=this.$parent;c.length&&!b.nodeName(this.parent,"body")&&(a={overflow:"hidden"},"static"===c.css("position")&&(a.position="relative"),c.css(a))},_resetStyle:function(){this.$elem.css({cursor:"",transition:""}),this.$parent.css({overflow:"",position:""})},_bind:function(){var a=this,c=this.options,d=c.eventNamespace,e="mousedown"+d+" pointerdown"+d+" MSPointerDown"+d,f="touchstart"+d+" "+e,h="touchend"+d+" click"+d+" pointerup"+d+" MSPointerUp"+d,i={},j=this.$reset,k=this.$zoomRange;if(b.each(["Start","Change","Zoom","Pan","End","Reset"],function(){var a=c["on"+this];b.isFunction(a)&&(i["panzoom"+this.toLowerCase()+d]=a)}),c.disablePan&&c.disableZoom||(i[f]=function(b){var d;("touchstart"===b.type?!(d=b.touches||b.originalEvent.touches)||(1!==d.length||c.disablePan)&&2!==d.length:c.disablePan||(b.which||b.originalEvent.which)!==c.which)||(b.preventDefault(),b.stopPropagation(),a._startMove(b,d))},3===c.which&&(i.contextmenu=!1)),this.$elem.on(i),j.length&&j.on(h,function(b){b.preventDefault(),a.reset()}),k.length&&k.attr({step:c.rangeStep===g.defaults.rangeStep&&k.attr("step")||c.rangeStep,min:c.minScale,max:c.maxScale}).prop({value:this.getMatrix()[0]}),!c.disableZoom){var m=this.$zoomIn,n=this.$zoomOut;m.length&&n.length&&(m.on(h,function(b){b.preventDefault(),a.zoom()}),n.on(h,function(b){b.preventDefault(),a.zoom(!0)})),k.length&&(i={},i[e]=function(){a.transition(!0)},i[(l?"input":"change")+d]=function(){a.zoom(+this.value,{noSetRange:!0})},k.on(i))}},_unbind:function(){this.$elem.add(this.$zoomIn).add(this.$zoomOut).add(this.$reset).off(this.options.eventNamespace)},_buildTransform:function(){return this._origTransform=this.getTransform(this.options.startTransform)},_buildTransition:function(){if(this._transform){var a=this.options;this._transition=this._transform+" "+a.duration+"ms "+a.easing}},_getDistance:function(a){var b=a[0],c=a[1];return Math.sqrt(Math.pow(Math.abs(c.clientX-b.clientX),2)+Math.pow(Math.abs(c.clientY-b.clientY),2))},_getMiddle:function(a){var b=a[0],c=a[1];return{clientX:(c.clientX-b.clientX)/2+b.clientX,clientY:(c.clientY-b.clientY)/2+b.clientY}},_trigger:function(a){"string"==typeof a&&(a="panzoom"+a),this.$elem.triggerHandler(a,[this].concat(j.call(arguments,1)))},_startMove:function(a,d){if(!this.panning){var e,f,g,i,j,k,l,m,n=this,o=this.options,p=o.eventNamespace,q=this.getMatrix(),r=q.slice(0),s=+r[4],t=+r[5],u={matrix:q,animate:"skip"},v=a.type;"pointerdown"===v?(e="pointermove",f="pointerup"):"touchstart"===v?(e="touchmove",f="touchend"):"MSPointerDown"===v?(e="MSPointerMove",f="MSPointerUp"):(e="mousemove",f="mouseup"),e+=p,f+=p,this.transition(!0),this.panning=!0,this._trigger("start",a,d);var w=function(a,b){if(b){if(2===b.length){if(null!=g)return;return g=n._getDistance(b),i=n.getScale(q),void(j=n._getMiddle(b))}if(null!=k)return;(m=b[0])&&(k=m.pageX,l=m.pageY)}null==k&&(k=a.pageX,l=a.pageY)};w(a,d);var x=function(a){var b;if(a.preventDefault(),d=a.touches||a.originalEvent.touches,w(a,d),d){if(2===d.length){var c=n._getMiddle(d),e=n._getDistance(d)-g;return n.zoom(e*(o.increment/100)+i,{focal:c,matrix:q,animate:"skip"}),n.pan(+q[4]+c.clientX-j.clientX,+q[5]+c.clientY-j.clientY,u),void(j=c)}b=d[0]||{pageX:0,pageY:0}}b||(b=a),n.pan(s+b.pageX-k,t+b.pageY-l,u)};b(h).off(p).on(e,x).on(f,function(a){a.preventDefault(),b(this).off(p),n.panning=!1,a.type="panzoomend",n._trigger(a,q,!c(q,r))})}}},b.Panzoom=g,b.fn.panzoom=function(a){var c,d,e,f;return"string"==typeof a?(f=[],d=j.call(arguments,1),this.each(function(){c=b.data(this,i),c?"_"!==a.charAt(0)&&"function"==typeof(e=c[a])&&void 0!==(e=e.apply(c,d))&&f.push(e):f.push(void 0)}),f.length?1===f.length?f[0]:f:this):this.each(function(){new g(this,a)})},g});