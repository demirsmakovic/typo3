!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror","diff_match_patch"],e):e(CodeMirror)}((function(e){"use strict";var t=e.Pos,i="http://www.w3.org/2000/svg";function r(e,t){this.mv=e,this.type=t,this.classes="left"==t?{chunk:"CodeMirror-merge-l-chunk",start:"CodeMirror-merge-l-chunk-start",end:"CodeMirror-merge-l-chunk-end",insert:"CodeMirror-merge-l-inserted",del:"CodeMirror-merge-l-deleted",connect:"CodeMirror-merge-l-connect"}:{chunk:"CodeMirror-merge-r-chunk",start:"CodeMirror-merge-r-chunk-start",end:"CodeMirror-merge-r-chunk-end",insert:"CodeMirror-merge-r-inserted",del:"CodeMirror-merge-r-deleted",connect:"CodeMirror-merge-r-connect"}}function n(t){t.diffOutOfDate&&(t.diff=L(t.orig.getValue(),t.edit.getValue(),t.mv.options.ignoreWhitespace),t.chunks=D(t.diff),t.diffOutOfDate=!1,e.signal(t.edit,"updateDiff",t.diff))}r.prototype={constructor:r,init:function(t,i,r){this.edit=this.mv.edit,(this.edit.state.diffViews||(this.edit.state.diffViews=[])).push(this),this.orig=e(t,W({value:i,readOnly:!this.mv.options.allowEditingOriginals},W(r))),"align"==this.mv.options.connect&&(this.edit.state.trackAlignable||(this.edit.state.trackAlignable=new _(this.edit)),this.orig.state.trackAlignable=new _(this.orig)),this.lockButton.title=this.edit.phrase("Toggle locked scrolling"),this.orig.state.diffViews=[this];var n=r.chunkClassLocation||"background";"[object Array]"!=Object.prototype.toString.call(n)&&(n=[n]),this.classes.classLocation=n,this.diff=L(M(i),M(r.value),this.mv.options.ignoreWhitespace),this.chunks=D(this.diff),this.diffOutOfDate=this.dealigned=!1,this.needsScrollSync=null,this.showDifferences=!1!==r.showDifferences},registerEvents:function(t){this.forceUpdate=function(t){var i,r={from:0,to:0,marked:[]},a={from:0,to:0,marked:[]},s=!1;function c(e){o=!0,s=!1,"full"==e&&(t.svg&&N(t.svg),t.copyButtons&&N(t.copyButtons),h(t.edit,r.marked,t.classes),h(t.orig,a.marked,t.classes),r.from=r.to=a.from=a.to=0),n(t),t.showDifferences&&(f(t.edit,t.diff,r,DIFF_INSERT,t.classes),f(t.orig,t.diff,a,DIFF_DELETE,t.classes)),"align"==t.mv.options.connect&&k(t),u(t),null!=t.needsScrollSync&&l(t,t.needsScrollSync),o=!1}function g(e){o||(t.dealigned=!0,d(e))}function d(e){o||s||(clearTimeout(i),!0===e&&(s=!0),i=setTimeout(c,!0===e?20:250))}function m(e,i){t.diffOutOfDate||(t.diffOutOfDate=!0,r.from=r.to=a.from=a.to=0),g(i.text.length-1!=i.to.line-i.from.line)}function v(){t.diffOutOfDate=!0,t.dealigned=!0,c("full")}t.edit.on("change",m),t.orig.on("change",m),t.edit.on("swapDoc",v),t.orig.on("swapDoc",v),"align"==t.mv.options.connect&&(e.on(t.edit.state.trackAlignable,"realign",g),e.on(t.orig.state.trackAlignable,"realign",g));return t.edit.on("viewportChange",(function(){d(!1)})),t.orig.on("viewportChange",(function(){d(!1)})),c(),c}(this),s(this,!0,!1),function(e,t){e.edit.on("scroll",(function(){l(e,!0)&&u(e)})),e.orig.on("scroll",(function(){l(e,!1)&&u(e),t&&l(t,!0)&&u(t)}))}(this,t)},setShowDifferences:function(e){(e=!1!==e)!=this.showDifferences&&(this.showDifferences=e,this.forceUpdate("full"))}};var o=!1;function l(e,t){if(e.diffOutOfDate)return e.lockScroll&&null==e.needsScrollSync&&(e.needsScrollSync=t),!1;if(e.needsScrollSync=null,!e.lockScroll)return!0;var i,r,n=+new Date;if(t?(i=e.edit,r=e.orig):(i=e.orig,r=e.edit),i.state.scrollSetBy==e&&(i.state.scrollSetAt||0)+250>n)return!1;var o=i.getScrollInfo();if("align"==e.mv.options.connect)v=o.top;else{var l,s,c=.5*o.clientHeight,h=o.top+c,f=i.lineAtHeight(h,"local"),g=function(e,t,i){for(var r,n,o,l,a=0;a<e.length;a++){var s=e[a],c=i?s.editFrom:s.origFrom,h=i?s.editTo:s.origTo;null==n&&(c>t?(n=s.editFrom,l=s.origFrom):h>t&&(n=s.editTo,l=s.origTo)),h<=t?(r=s.editTo,o=s.origTo):c<=t&&(r=s.editFrom,o=s.origFrom)}return{edit:{before:r,after:n},orig:{before:o,after:l}}}(e.chunks,f,t),d=a(i,t?g.edit:g.orig),u=a(r,t?g.orig:g.edit),m=(h-d.top)/(d.bot-d.top),v=u.top-c+m*(u.bot-u.top);if(v>o.top&&(s=o.top/c)<1)v=v*s+o.top*(1-s);else if((l=o.height-o.clientHeight-o.top)<c){var p=r.getScrollInfo();p.height-p.clientHeight-v>l&&(s=l/c)<1&&(v=v*s+(p.height-p.clientHeight-l)*(1-s))}}return r.scrollTo(o.left,v),r.state.scrollSetAt=n,r.state.scrollSetBy=e,!0}function a(e,t){var i=t.after;return null==i&&(i=e.lastLine()+1),{top:e.heightAtLine(t.before||0,"local"),bot:e.heightAtLine(i,"local")}}function s(t,i,r){t.lockScroll=i,i&&0!=r&&l(t,DIFF_INSERT)&&u(t),(i?e.addClass:e.rmClass)(t.lockButton,"CodeMirror-merge-scrolllock-enabled")}function c(e,t,i){for(var r=i.classLocation,n=0;n<r.length;n++)e.removeLineClass(t,r[n],i.chunk),e.removeLineClass(t,r[n],i.start),e.removeLineClass(t,r[n],i.end)}function h(t,i,r){for(var n=0;n<i.length;++n){var o=i[n];o instanceof e.TextMarker?o.clear():o.parent&&c(t,o,r)}i.length=0}function f(e,t,i,r,n){var o=e.getViewport();e.operation((function(){i.from==i.to||o.from-i.to>20||i.from-o.to>20?(h(e,i.marked,n),d(e,t,r,i.marked,o.from,o.to,n),i.from=o.from,i.to=o.to):(o.from<i.from&&(d(e,t,r,i.marked,o.from,i.from,n),i.from=o.from),o.to>i.to&&(d(e,t,r,i.marked,i.to,o.to,n),i.to=o.to))}))}function g(e,t,i,r,n,o){for(var l=i.classLocation,a=e.getLineHandle(t),s=0;s<l.length;s++)r&&e.addLineClass(a,l[s],i.chunk),n&&e.addLineClass(a,l[s],i.start),o&&e.addLineClass(a,l[s],i.end);return a}function d(e,i,r,n,o,l,a){var s=t(0,0),c=t(o,0),h=e.clipPos(t(l-1)),f=r==DIFF_DELETE?a.del:a.insert;function d(t,i){for(var r=Math.max(o,t),s=Math.min(l,i),c=r;c<s;++c)n.push(g(e,c,a,!0,c==t,c==i-1));t==i&&r==i&&s==i&&(r?n.push(g(e,r-1,a,!1,!1,!0)):n.push(g(e,r,a,!1,!0,!1)))}for(var u=0,m=!1,v=0;v<i.length;++v){var p=i[v],k=p[0],C=p[1];if(k==DIFF_EQUAL){var b=s.line+(E(i,v)?0:1);V(s,C);var w=s.line+(A(i,v)?1:0);w>b&&(m&&(d(u,b),m=!1),u=w)}else if(m=!0,k==r){var T=V(s,C,!0),y=P(c,s),F=H(h,T);j(y,F)||n.push(e.markText(y,F,{className:f})),s=T}}m&&d(u,s.line+1)}function u(e){if(e.showDifferences){if(e.svg){N(e.svg);var t=e.gap.offsetWidth;R(e.svg,"width",t,"height",e.gap.offsetHeight)}e.copyButtons&&N(e.copyButtons);for(var i=e.edit.getViewport(),r=e.orig.getViewport(),n=e.mv.wrap.getBoundingClientRect().top,o=n-e.edit.getScrollerElement().getBoundingClientRect().top+e.edit.getScrollInfo().top,l=n-e.orig.getScrollerElement().getBoundingClientRect().top+e.orig.getScrollInfo().top,a=0;a<e.chunks.length;a++){var s=e.chunks[a];s.editFrom<=i.to&&s.editTo>=i.from&&s.origFrom<=r.to&&s.origTo>=r.from&&w(e,s,l,o,t)}}}function m(e,t){for(var i=0,r=0,n=0;n<t.length;n++){var o=t[n];if(o.editTo>e&&o.editFrom<=e)return null;if(o.editFrom>e)break;i=o.editTo,r=o.origTo}return r+(e-i)}function v(e,t,i){for(var r=e.state.trackAlignable,n=e.firstLine(),o=0,l=[],a=0;;a++){for(var s=t[a],c=s?i?s.origFrom:s.editFrom:1e9;o<r.alignable.length;o+=2){var h=r.alignable[o]+1;if(!(h<=n)){if(!(h<=c))break;l.push(h)}}if(!s)break;l.push(n=i?s.origTo:s.editTo)}return l}function p(e,t,i,r){var n=0,o=0,l=0,a=0;e:for(;;n++){var s=e[n],c=t[o];if(!s&&null==c)break;for(var h=s?s[0]:1e9,f=null==c?1e9:c;l<i.length;){var g=i[l];if(g.origFrom<=f&&g.origTo>f){o++,n--;continue e}if(g.editTo>h){if(g.editFrom<=h)continue e;break}a+=g.origTo-g.origFrom-(g.editTo-g.editFrom),l++}if(h==f-a)s[r]=f,o++;else if(h<f-a)s[r]=h+a;else{var d=[f-a,null,null];d[r]=f,e.splice(n,0,d),o++}}}function k(e,t){if(e.dealigned||t){if(!e.orig.curOp)return e.orig.operation((function(){k(e,t)}));e.dealigned=!1;var i=e.mv.left==e?e.mv.right:e.mv.left;i&&(n(i),i.dealigned=!1);for(var r=function(e,t){var i=v(e.edit,e.chunks,!1),r=[];if(t)for(var n=0,o=0;n<t.chunks.length;n++){for(var l=t.chunks[n].editTo;o<i.length&&i[o]<l;)o++;o!=i.length&&i[o]==l||i.splice(o++,0,l)}for(n=0;n<i.length;n++)r.push([i[n],null,null]);return p(r,v(e.orig,e.chunks,!0),e.chunks,1),t&&p(r,v(t.orig,t.chunks,!0),t.chunks,2),r}(e,i),o=e.mv.aligners,l=0;l<o.length;l++)o[l].clear();o.length=0;var a=[e.edit,e.orig],s=[],c=[];i&&a.push(i.orig);for(l=0;l<a.length;l++)s.push(a[l].getScrollInfo().top),c.push(-a[l].getScrollerElement().getBoundingClientRect().top);(c[0]!=c[1]||3==a.length&&c[1]!=c[2])&&C(a,c,[0,0,0],o);for(var h=0;h<r.length;h++)C(a,c,r[h],o);for(l=0;l<a.length;l++)a[l].scrollTo(null,s[l])}}function C(e,t,i,r){for(var n=-1e8,o=[],l=0;l<e.length;l++)if(null!=i[l]){var a=e[l].heightAtLine(i[l],"local")-t[l];o[l]=a,n=Math.max(n,a)}for(l=0;l<e.length;l++)if(null!=i[l]){var s=n-o[l];s>1&&r.push(b(e[l],i[l],s))}}function b(e,t,i){var r=!0;t>e.lastLine()&&(t--,r=!1);var n=document.createElement("div");return n.className="CodeMirror-merge-spacer",n.style.height=i+"px",n.style.minWidth="1px",e.addLineWidget(t,n,{height:i,above:r,mergeSpacer:!0,handleMouseEvents:!0})}function w(e,t,r,n,o){var l="left"==e.type,a=e.orig.heightAtLine(t.origFrom,"local",!0)-r;if(e.svg){var s=a,c=e.edit.heightAtLine(t.editFrom,"local",!0)-n;if(l){var h=s;s=c,c=h}var f=e.orig.heightAtLine(t.origTo,"local",!0)-r,g=e.edit.heightAtLine(t.editTo,"local",!0)-n;if(l){h=f;f=g,g=h}var d=" C "+o/2+" "+c+" "+o/2+" "+s+" "+(o+2)+" "+s,u=" C "+o/2+" "+f+" "+o/2+" "+g+" -1 "+g;R(e.svg.appendChild(document.createElementNS(i,"path")),"d","M -1 "+c+d+" L "+(o+2)+" "+f+u+" z","class",e.classes.connect)}if(e.copyButtons){var m=e.copyButtons.appendChild(I("div","left"==e.type?"⇝":"⇜","CodeMirror-merge-copy")),v=e.mv.options.allowEditingOriginals;if(m.title=e.edit.phrase(v?"Push to left":"Revert chunk"),m.chunk=t,m.style.top=(t.origTo>t.origFrom?a:e.edit.heightAtLine(t.editFrom,"local")-n)+"px",v){var p=e.edit.heightAtLine(t.editFrom,"local")-n,k=e.copyButtons.appendChild(I("div","right"==e.type?"⇝":"⇜","CodeMirror-merge-copy-reverse"));k.title="Push to right",k.chunk={editFrom:t.origFrom,editTo:t.origTo,origFrom:t.editFrom,origTo:t.editTo},k.style.top=p+"px","right"==e.type?k.style.left="2px":k.style.right="2px"}}}function T(e,i,r,n){if(!e.diffOutOfDate){var o=n.origTo>r.lastLine()?t(n.origFrom-1):t(n.origFrom,0),l=t(n.origTo,0),a=n.editTo>i.lastLine()?t(n.editFrom-1):t(n.editFrom,0),s=t(n.editTo,0),c=e.mv.options.revertChunk;c?c(e.mv,r,o,l,i,a,s):i.replaceRange(r.getRange(o,l),a,s)}}var y,F=e.MergeView=function(t,i){if(!(this instanceof F))return new F(t,i);this.options=i;var n=i.origLeft,o=null==i.origRight?i.orig:i.origRight,l=null!=n,a=null!=o,s=1+(l?1:0)+(a?1:0),c=[],h=this.left=null,f=this.right=null,g=this;if(l){h=this.left=new r(this,"left");var d=I("div",null,"CodeMirror-merge-pane CodeMirror-merge-left");c.push(d),c.push(S(h))}var v=I("div",null,"CodeMirror-merge-pane CodeMirror-merge-editor");if(c.push(v),a){f=this.right=new r(this,"right"),c.push(S(f));var p=I("div",null,"CodeMirror-merge-pane CodeMirror-merge-right");c.push(p)}(a?p:v).className+=" CodeMirror-merge-pane-rightmost",c.push(I("div",null,null,"height: 0; clear: both;"));var C=this.wrap=t.appendChild(I("div",c,"CodeMirror-merge CodeMirror-merge-"+s+"pane"));this.edit=e(v,W(i)),h&&h.init(d,n,i),f&&f.init(p,o,i),i.collapseIdentical&&this.editor().operation((function(){!function(e,t){"number"!=typeof t&&(t=2);for(var i=[],r=e.editor(),n=r.firstLine(),o=n,l=r.lastLine();o<=l;o++)i.push(!0);e.left&&x(e.left,t,n,i);e.right&&x(e.right,t,n,i);for(var a=0;a<i.length;a++)if(i[a]){for(var s=a+n,c=1;a<i.length-1&&i[a+1];a++,c++);if(c>t){var h=[{line:s,cm:r}];e.left&&h.push({line:m(s,e.left.chunks),cm:e.left.orig}),e.right&&h.push({line:m(s,e.right.chunks),cm:e.right.orig});var f=B(c,h);e.options.onCollapse&&e.options.onCollapse(e,s,c,f)}}}(g,i.collapseIdentical)})),"align"==i.connect&&(this.aligners=[],k(this.left||this.right,!0)),h&&h.registerEvents(f),f&&f.registerEvents(h);var b=function(){h&&u(h),f&&u(f)};e.on(window,"resize",b);var w=setInterval((function(){for(var t=C.parentNode;t&&t!=document.body;t=t.parentNode);t||(clearInterval(w),e.off(window,"resize",b))}),5e3)};function S(t){var r=t.lockButton=I("div",null,"CodeMirror-merge-scrolllock"),n=I("div",[r],"CodeMirror-merge-scrolllock-wrap");e.on(r,"click",(function(){s(t,!t.lockScroll)}));var o=[n];if(!1!==t.mv.options.revertButtons&&(t.copyButtons=I("div",null,"CodeMirror-merge-copybuttons-"+t.type),e.on(t.copyButtons,"click",(function(e){var i=e.target||e.srcElement;i.chunk&&("CodeMirror-merge-copy-reverse"!=i.className?T(t,t.edit,t.orig,i.chunk):T(t,t.orig,t.edit,i.chunk))})),o.unshift(t.copyButtons)),"align"!=t.mv.options.connect){var l=document.createElementNS&&document.createElementNS(i,"svg");l&&!l.createSVGRect&&(l=null),t.svg=l,l&&o.push(l)}return t.gap=I("div",o,"CodeMirror-merge-gap")}function M(e){return"string"==typeof e?e:e.getValue()}function L(e,t,i){y||(y=new diff_match_patch);for(var r=y.diff_main(e,t),n=0;n<r.length;++n){var o=r[n];(i?/[^ \t]/.test(o[1]):o[1])?n&&r[n-1][0]==o[0]&&(r.splice(n--,1),r[n][1]+=o[1]):r.splice(n--,1)}return r}function D(e){var i=[];if(!e.length)return i;for(var r=0,n=0,o=t(0,0),l=t(0,0),a=0;a<e.length;++a){var s=e[a],c=s[0];if(c==DIFF_EQUAL){var h=!E(e,a)||o.line<r||l.line<n?1:0,f=o.line+h,g=l.line+h;V(o,s[1],null,l);var d=A(e,a)?1:0,u=o.line+d,m=l.line+d;u>f&&(a&&i.push({origFrom:n,origTo:g,editFrom:r,editTo:f}),r=u,n=m)}else V(c==DIFF_INSERT?o:l,s[1])}return(r<=o.line||n<=l.line)&&i.push({origFrom:n,origTo:l.line+1,editFrom:r,editTo:o.line+1}),i}function A(e,t){if(t==e.length-1)return!0;var i=e[t+1][1];return!(1==i.length&&t<e.length-2||10!=i.charCodeAt(0))&&(t==e.length-2||((i=e[t+2][1]).length>1||t==e.length-3)&&10==i.charCodeAt(0))}function E(e,t){if(0==t)return!0;var i=e[t-1][1];return 10==i.charCodeAt(i.length-1)&&(1==t||10==(i=e[t-2][1]).charCodeAt(i.length-1))}function O(i,r,n){i.addLineClass(r,"wrap","CodeMirror-merge-collapsed-line");var o=document.createElement("span");o.className="CodeMirror-merge-collapsed-widget",o.title=i.phrase("Identical text collapsed. Click to expand.");var l=i.markText(t(r,0),t(n-1),{inclusiveLeft:!0,inclusiveRight:!0,replacedWith:o,clearOnEnter:!0});function a(){l.clear(),i.removeLineClass(r,"wrap","CodeMirror-merge-collapsed-line")}return l.explicitlyCleared&&a(),e.on(o,"click",a),l.on("clear",a),e.on(o,"click",a),{mark:l,clear:a}}function B(e,t){var i=[];function r(){for(var e=0;e<i.length;e++)i[e].clear()}for(var n=0;n<t.length;n++){var o=t[n],l=O(o.cm,o.line,o.line+e);i.push(l),l.mark.on("clear",r)}return i[0].mark}function x(e,t,i,r){for(var n=0;n<e.chunks.length;n++)for(var o=e.chunks[n],l=o.editFrom-t;l<o.editTo+t;l++){var a=l+i;a>=0&&a<r.length&&(r[a]=!1)}}function I(e,t,i,r){var n=document.createElement(e);if(i&&(n.className=i),r&&(n.style.cssText=r),"string"==typeof t)n.appendChild(document.createTextNode(t));else if(t)for(var o=0;o<t.length;++o)n.appendChild(t[o]);return n}function N(e){for(var t=e.childNodes.length;t>0;--t)e.removeChild(e.firstChild)}function R(e){for(var t=1;t<arguments.length;t+=2)e.setAttribute(arguments[t],arguments[t+1])}function W(e,t){for(var i in t||(t={}),e)e.hasOwnProperty(i)&&(t[i]=e[i]);return t}function V(e,i,r,n){for(var o=r?t(e.line,e.ch):e,l=0;;){var a=i.indexOf("\n",l);if(-1==a)break;++o.line,n&&++n.line,l=a+1}return o.ch=(l?0:o.ch)+(i.length-l),n&&(n.ch=(l?0:n.ch)+(i.length-l)),o}F.prototype={constructor:F,editor:function(){return this.edit},rightOriginal:function(){return this.right&&this.right.orig},leftOriginal:function(){return this.left&&this.left.orig},setShowDifferences:function(e){this.right&&this.right.setShowDifferences(e),this.left&&this.left.setShowDifferences(e)},rightChunks:function(){if(this.right)return n(this.right),this.right.chunks},leftChunks:function(){if(this.left)return n(this.left),this.left.chunks}};function _(e){this.cm=e,this.alignable=[],this.height=e.doc.height;var t=this;e.on("markerAdded",(function(e,i){if(i.collapsed){var r=i.find(1);null!=r&&t.set(r.line,4)}})),e.on("markerCleared",(function(e,i,r,n){null!=n&&i.collapsed&&t.check(n,4,t.hasMarker)})),e.on("markerChanged",this.signal.bind(this)),e.on("lineWidgetAdded",(function(e,i,r){i.mergeSpacer||(i.above?t.set(r-1,2):t.set(r,1))})),e.on("lineWidgetCleared",(function(e,i,r){i.mergeSpacer||(i.above?t.check(r-1,2,t.hasWidgetBelow):t.check(r,1,t.hasWidget))})),e.on("lineWidgetChanged",this.signal.bind(this)),e.on("change",(function(e,i){var r=i.from.line,n=i.to.line-i.from.line,o=i.text.length-1,l=r+o;(n||o)&&t.map(r,n,o),t.check(l,4,t.hasMarker),(n||o)&&t.check(i.from.line,4,t.hasMarker)})),e.on("viewportChange",(function(){t.cm.doc.height!=t.height&&t.signal()}))}function H(e,t){return(e.line-t.line||e.ch-t.ch)<0?e:t}function P(e,t){return(e.line-t.line||e.ch-t.ch)>0?e:t}function j(e,t){return e.line==t.line&&e.ch==t.ch}function U(e,t,i){for(var r=e.length-1;r>=0;r--){var n=e[r],o=(i?n.origTo:n.editTo)-1;if(o<t)return o}}function z(e,t,i){for(var r=0;r<e.length;r++){var n=e[r],o=i?n.origFrom:n.editFrom;if(o>t)return o}}function Q(t,i){var r=null,o=t.state.diffViews,l=t.getCursor().line;if(o)for(var a=0;a<o.length;a++){var s=o[a],c=t==s.orig;n(s);var h=i<0?U(s.chunks,l,c):z(s.chunks,l,c);null==h||null!=r&&!(i<0?h>r:h<r)||(r=h)}if(null==r)return e.Pass;t.setCursor(r,0)}_.prototype={signal:function(){e.signal(this,"realign"),this.height=this.cm.doc.height},set:function(e,t){for(var i=-1;i<this.alignable.length;i+=2){var r=this.alignable[i]-e;if(0==r){if((this.alignable[i+1]&t)==t)return;return this.alignable[i+1]|=t,void this.signal()}if(r>0)break}this.signal(),this.alignable.splice(i,0,e,t)},find:function(e){for(var t=0;t<this.alignable.length;t+=2)if(this.alignable[t]==e)return t;return-1},check:function(e,t,i){var r=this.find(e);if(-1!=r&&this.alignable[r+1]&t&&!i.call(this,e)){this.signal();var n=this.alignable[r+1]&~t;n?this.alignable[r+1]=n:this.alignable.splice(r,2)}},hasMarker:function(e){var t=this.cm.getLineHandle(e);if(t.markedSpans)for(var i=0;i<t.markedSpans.length;i++)if(t.markedSpans[i].marker.collapsed&&null!=t.markedSpans[i].to)return!0;return!1},hasWidget:function(e){var t=this.cm.getLineHandle(e);if(t.widgets)for(var i=0;i<t.widgets.length;i++)if(!t.widgets[i].above&&!t.widgets[i].mergeSpacer)return!0;return!1},hasWidgetBelow:function(e){if(e==this.cm.lastLine())return!1;var t=this.cm.getLineHandle(e+1);if(t.widgets)for(var i=0;i<t.widgets.length;i++)if(t.widgets[i].above&&!t.widgets[i].mergeSpacer)return!0;return!1},map:function(e,t,i){for(var r=i-t,n=e+t,o=-1,l=-1,a=0;a<this.alignable.length;a+=2){var s=this.alignable[a];s==e&&2&this.alignable[a+1]&&(o=a),s==n&&2&this.alignable[a+1]&&(l=a),s<=e||(s<n?this.alignable.splice(a--,2):this.alignable[a]+=r)}if(o>-1){var c=this.alignable[o+1];2==c?this.alignable.splice(o,2):this.alignable[o+1]=-3&c}l>-1&&i&&this.set(e+i,2)}},e.commands.goNextDiff=function(e){return Q(e,1)},e.commands.goPrevDiff=function(e){return Q(e,-1)}}));