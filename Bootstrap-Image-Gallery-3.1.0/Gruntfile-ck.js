/*
 * Bootstrap Image Gallery Gruntfile
 * https://github.com/blueimp/Bootstrap-Image-Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *//*global module */module.exports=function(e){"use strict";e.initConfig({jshint:{all:["Gruntfile.js","js/bootstrap-image-gallery.js","js/demo.js"]},less:{production:{options:{cleancss:!0},src:["css/bootstrap-image-gallery.css"],dest:"css/bootstrap-image-gallery.min.css"}},uglify:{production:{src:["js/bootstrap-image-gallery.js"],dest:"js/bootstrap-image-gallery.min.js"}}});e.loadNpmTasks("grunt-contrib-jshint");e.loadNpmTasks("grunt-contrib-less");e.loadNpmTasks("grunt-contrib-uglify");e.loadNpmTasks("grunt-bump-build-git");e.registerTask("test",["jshint"]);e.registerTask("default",["test","less","uglify"])};