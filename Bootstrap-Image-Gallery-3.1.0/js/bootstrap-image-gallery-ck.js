/*
 * Bootstrap Image Gallery 3.0.1
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *//*global define, window */(function(e){"use strict";typeof define=="function"&&define.amd?define(["jquery","./blueimp-gallery"],e):e(window.jQuery,window.blueimp.Gallery)})(function(e,t){"use strict";e.extend(t.prototype.options,{useBootstrapModal:!0});var n=t.prototype.close,r=t.prototype.imageFactory,i=t.prototype.videoFactory,s=t.prototype.textFactory;e.extend(t.prototype,{modalFactory:function(e,t,n,r){if(!this.options.useBootstrapModal||n)return r.call(this,e,t,n);var i=this,s=this.container.children(".modal"),o=s.clone().show().on("click",function(e){if(e.target===o[0]||e.target===o.children()[0]){e.preventDefault();e.stopPropagation();i.close()}}),u=r.call(this,e,function(e){t({type:e.type,target:o[0]});o.addClass("in")},n);o.find(".modal-title").text(u.title||String.fromCharCode(160));o.find(".modal-body").append(u);return o[0]},imageFactory:function(e,t,n){return this.modalFactory(e,t,n,r)},videoFactory:function(e,t,n){return this.modalFactory(e,t,n,i)},textFactory:function(e,t,n){return this.modalFactory(e,t,n,s)},close:function(){this.container.find(".modal").removeClass("in");n.call(this)}})});