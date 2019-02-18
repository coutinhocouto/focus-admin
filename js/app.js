"use strict";

var app = {
    app: false,
    isloaded: false,
    header: false,
    footer: false,    
    settings: {
        navDetectAuto: true,
        navHorizontalDetectAuto: true,
        screen_md: 992,
        sidepanelMobileHeight: 400,
        sidebarMobileHeight: 400
    },
    accordion_settings: {titleHeight: 50, noResize: false},
    
    init: function(){
        this.app = jQuery(".app");
        this.header = jQuery(".app > .app-header").length > 0 ? jQuery(".app > .app-header") : false;
        this.footer = jQuery(".app > .app-footer").length > 0 ? jQuery(".app > .app-footer") : false;                
    },
    layout: function(){
        
        // sidebars media
        app.layoutSidebars();
        // end
        
        // check header position
        if(jQuery(".app-content > .app-header").length === 1)
            jQuery(".app-container").addClass("app-header-inside-content");        
        // end 
        
        // params for app-container
        jQuery(".app-container").each(function(){
            var app_content = jQuery(this).find(".app-content");
            
            jQuery(this).find(".app-sidebar").each(function(){
                
                if(jQuery(this).hasClass("dir-left")){                    
                    app_content.addClass("app-sidebar-left");
                }
                
                if(jQuery(this).hasClass("dir-right"))
                    app_content.addClass("app-sidebar-right");
                
            });
        });
        // end of params
        
        // sidebar actions        
        jQuery(".app-sidebar-left-closed .app-sidebar, .app-sidebar-right-closed .app-sidebar").css("display","none");
        
        jQuery("[data-sidebar-toggle]").on("click",function(){
            var app_sidebar = jQuery(jQuery(this).data("sidebar-toggle")),
                app_sidebar_direction = app_sidebar.hasClass("dir-left") ? 'left' : 'right',
                app_container = app_sidebar.parent(".app-container");
            
            if(app_container.hasClass("app-sidebar-"+app_sidebar_direction+"-closed")){
                app_sidebar.css("display","block");
                setTimeout(function(){
                    app_container.removeClass("app-sidebar-"+app_sidebar_direction+"-closed");
                },10);
                
            }else{
                app_sidebar.css("display","none");
                app_container.addClass("app-sidebar-"+app_sidebar_direction+"-closed");
            }
            //app_container.toggleClass("app-sidebar-"+app_sidebar_direction+"-closed");            
            //app_sidebar.toggleClass("app-sidebar-open"); ??? WTF?
            
            jQuery(window).resize();
            
            return false;
        });
        jQuery("[data-sidebar-minimize]").on("click",function(){
            
            if(jQuery(window).width() < app.settings.screen_md) return false;
            
            var app_sidebar = jQuery(jQuery(this).data("sidebar-minimize")),
                app_sidebar_direction = app_sidebar.hasClass("dir-left") ? 'left' : 'right',
                app_container = app_sidebar.parent(".app-container"),
                toggle_class = "app-sidebar-"+app_sidebar_direction+"-minimized";                
                
            app_container.removeClass("app-sidebar-"+app_sidebar_direction+"-closed");
            app_sidebar.css("display","block");
            
            if(app_container.hasClass(toggle_class)){
                app_container.removeClass(toggle_class);
                app_sidebar.removeClass("app-navigation-minimized").find("li.open").removeClass("open");                
                app_sidebar.removeAttr("data-minimized").removeData("minimized");                                
                
                if(app_sidebar.hasClass("scroll"))
                    app_sidebar.mCustomScrollbar("update");
            }else{
                app_container.addClass(toggle_class);
                app_sidebar.addClass("app-navigation-minimized").find("li.open").removeClass("open");
                app_sidebar.removeAttr("data-minimized").removeData("minimized");
                
                if(app_sidebar.hasClass("scroll"))
                    app_sidebar.mCustomScrollbar("disable",true);
            }                                    
            
            // fix after resize                                                
            jQuery(window).resize();
            
            return false;
        });        
        
        // sidepanel
        
        
        jQuery("[data-sidepanel-toggle]").on("click",function(){
            var app_sidepanel = jQuery(jQuery(this).data('sidepanel-toggle'));
                
            if(jQuery(".app").hasClass("app-sidepanel-open")){
                // close sidepanel
                jQuery(".app").removeClass("app-sidepanel-open");
                
                // remove overlay if needs
                if(app_sidepanel.data("overlay") === 'show'){
                    app.hideOverlay();
                }
                
            }else{
                // open sidepanel
                jQuery(".app").addClass("app-sidepanel-open");
                
                // show overlay if needs
                if(app_sidepanel.data("overlay") === 'show'){
                    app.showOverlay(function(){
                        jQuery(".app-overlay").on("click",function(){                            
                            jQuery(".app").removeClass("app-sidepanel-open");
                            app.hideOverlay();
                        });
                    });
                }
            }
            
            // fix after resize
            jQuery(window).resize();
            
            return false;
        });
        // end sidepanel actions
        
        // separated content actions
        jQuery("[data-separate-toggle-panel]").on("click",function(){
            jQuery(jQuery(this).data("separate-toggle-panel")).toggleClass("open");
        });
    },
    layoutSidebars: function(){
        
        // control sidebar media
        if(jQuery(window).width() < app.settings.screen_md){
            if(jQuery(".app-container").hasClass("app-sidebar-left-minimized")){
                jQuery(".app-container").removeClass("app-sidebar-left-minimized");
                jQuery(".app-sidebar.dir-left").removeClass("app-navigation-minimized");
                jQuery(".app-sidebar.dir-left").attr("data-minimized","minimized");
            }
            if(jQuery(".app-container").hasClass("app-sidebar-right-minimized")){
                jQuery(".app-container").removeClass("app-sidebar-right-minimized");
                jQuery(".app-sidebar.dir-right").removeClass("app-navigation-minimized");
                jQuery(".app-sidebar.dir-right").attr("data-minimized","minimized");
            }
        }else{
            if(jQuery(".app-sidebar.dir-left").data("minimized") === "minimized"){                
                jQuery(".app-container").addClass("app-sidebar-left-minimized");
                jQuery(".app-sidebar.dir-left").addClass("app-navigation-minimized");
                jQuery(".app-sidebar.dir-left").mCustomScrollbar("disable",true);
            }                        
            if(jQuery(".app-sidebar.dir-right").data("minimized") === "minimized"){
                jQuery(".app-container").addClass("app-sidebar-right-minimized");
                jQuery(".app-sidebar.dir-right").addClass("app-navigation-minimized");               
                jQuery(".app-sidebar.dir-right").mCustomScrollbar("disable",true);
            }                        
        }
        // end
        
    },
    navigation: function(){
        
        // set openable navigation items
        jQuery(".app-navigation nav > ul").find("ul").parent("li").addClass("openable"); 
        
        // set open element if it's avail
        if(app.settings.navDetectAuto && !jQuery(".app-navigation").hasClass("app-navigation-minimized")){
            var path        = window.location.pathname,
                pathArray   = path.split("/"),
                page        = pathArray[pathArray.length - 1];
            
            jQuery(".app-navigation a[href='"+page+"']").addClass("active").parents(".openable").addClass("open");
        }
        
        // add open handler
        jQuery(".app-navigation .openable > a").on("click",function(e){
            e.stopPropagation();
            
            var element = jQuery(this).parent(".openable");
            
            if(element.hasClass("open")){
                element.removeClass("open");
                element.find("li.open").removeClass("open");
            }else{
                
                if(element.parents(".app-navigation").hasClass("app-navigation-minimized") || element.parents(".app-navigation").data("type") === "close-other"){                   
                    element.parent("ul").find("> li").not(element).removeClass("open"); 
                }

                //element.parents(".app-navigation").css("height","auto"); // Tell me why?
                element.addClass("open");
            }
            
            // fix after resize
            
            if(jQuery(".app-navigation").hasClass("scroll")){
               jQuery(".app-navigation").mCustomScrollbar("update");
            }else{
                jQuery(window).resize();
            }
            
            return false;
        });
        
        // horizontal navigation handler 
        jQuery(".app-navigation-horizontal nav > ul > li > ul").each(function(){
            jQuery(this).parent("li").addClass("openable");
        });
        
        // set open element if it's avail
        if(app.settings.navHorizontalDetectAuto){
            var path        = window.location.pathname,
                pathArray   = path.split("/"),
                page        = pathArray[pathArray.length - 1];
            
            jQuery(".app-navigation-horizontal a[href='"+page+"']").parent("li").addClass("active").parents(".openable").addClass("active");
        }
        
        jQuery(".app-navigation-horizontal .openable > a").on("click",function(e){
            e.stopPropagation();
            
            var nav = jQuery(this).parents(".app-navigation-horizontal");            
            nav.find(".openable").removeClass("active");
            
            jQuery(this).parent(".openable").addClass("active");
            
            return false;
        });
        // end horizontal navigation handler 
    },
    navigationMobile: function(){
        
        /* Mobile navigation handler */
        if(jQuery(".app-navigation-moblie-wrapper").length > 0){
            jQuery("[data-navigation-mobile-toggle]").on("click",function(e){
                e.stopPropagation();
                jQuery(".app").toggleClass("app-navigation-moblie-open");            
                
                return false;
            });                

            jQuery(".app .app-navigation-mobile").on("click",function(e){
                e.stopPropagation();
            });

            jQuery(".app .app-content").on("click",function(){
                jQuery(".app").removeClass("app-navigation-moblie-open");
            });
        }
        /* end Mobile navigation handler */
        
        /* header navigation handler */
        if(jQuery(".app-header-navigation").length > 0){
            
            jQuery("[data-header-navigation-toggle]").on("click",function(){                
                jQuery(".app-header-navigation").toggleClass("show");
                return false;
            });
            
            jQuery(".app-header-navigation li > a").on("click",function(){
                var pli = jQuery(this).parent("li");
                
                if(pli.find("ul").length > 0 || pli.find(".app-header-navigation-megamenu").length > 0){                    
                    pli.toggleClass("open");
                    
                    return false;
                }
            });
            
        }
        /* end header navigation handler */
        
        /* navigation vertical handler */
        if(jQuery(".app-navigation-horizontal").length > 0){
            jQuery("[data-navigation-horizontal-toggle]").on("click",function(){
                jQuery(".app-navigation-horizontal").toggleClass("show");
                
                return false;
            });
        }
        /* end navigation vertical handler */
    },
    spy: function(){
        
        app.layoutSidebars();               
        
        var winHeight = jQuery(window).height(),
            offsetHeight = this._getHeaderHeight() + this._getFooterHeight() + this._getCustomOffset(),
            navFixed = jQuery(".app-container .app-sidebar.app-navigation-fixed").length > 0 ? true : false,
            sidebars = jQuery(".app-container .app-sidebar"),
            content = jQuery(".app-container .app-content"),
            sidepanel = jQuery(".app-sidepanel").length > 0 ? jQuery(".app-sidepanel") : false;
            
            sidebars.css({"height":"auto"});            
            
        var contentHeight = app._getTotalHeight(content.children()),
            sidebarHeight = this._getMaxHeight(sidebars);
        
        if(jQuery(window).width() > app.settings.screen_md){
            
            if(contentHeight >= sidebarHeight){                
                sidebars.height(contentHeight);
                
                if(sidebarHeight === 0 && (contentHeight+offsetHeight) < winHeight){
                    content.height(winHeight - offsetHeight);
                }
            }else{
                if((sidebarHeight + offsetHeight) <= winHeight){
                    sidebars.height(winHeight - offsetHeight);
                }                                
            }

            sidebars.each(function(){
                if(jQuery(this).attr("data-control-height") === 'true'){
                    jQuery(this).height(sidebarHeight);
                }
            });
            
            if(jQuery("[data-separate-control-height]").length > 0){
                var contentHeight = jQuery(".app-content").height() - app._getTotalHeight(jQuery(".app-content > div").not(".app-content-separate"));
                jQuery("[data-separate-control-height]").height(contentHeight);
            }
            
                        
            if(navFixed){
                var nav = jQuery(".app-container .app-sidebar.app-navigation-fixed");
                
                if(app.footer){
                    nav.addClass("app-navigation-fixed-absolute");
                    
                    //if(jQuery(".app").height() < winHeight)
                    //if(jQuery(".app").height() < winHeight)
                    
                    nav.height(jQuery(".app").height() - app.footer.height());
                }else
                    nav.height(winHeight);
            }

            if(sidepanel) sidepanel.height(winHeight);
            
        }else{
            if(jQuery("[data-separate-control-height]").length > 0){
                jQuery("[data-separate-control-height]").css({"height":"auto"});
            }                        
            
            sidebars.each(function(){
                if(jQuery(this).attr("data-control-height") === 'true'){
                    jQuery(this).height(app.settings.sidebarMobileHeight);
                }else{
                    jQuery(this).css({"height":"auto"});
                }
            });
            
            if(sidepanel) 
                sidepanel.height(jQuery(window).height());                
                //sidepanel.height(app.settings.sidepanelMobileHeight);
        }
        
        return false;        
    },
    
    /* block predefined functions */
    block: {
        delete: function(elm, fn){
            elm = jQuery(elm);
            
            elm.fadeOut(200,function(){
                jQuery(this).remove();
            });
            
            if(typeof fn === "function") fn();
            
            app.spy();
            
            return false;
        },
        toggle: function(elm, fn){
            elm = jQuery(elm);
            
            elm.toggleClass("block-toggled");
            
            if(typeof fn === "function") fn();
            
            app.spy();
            
            return false;
        },
        expand: function(elm, fn){
            elm = jQuery(elm);
                        
            elm.toggleClass("block-expanded");            
            
            if(typeof fn === "function") fn();
            
            return false;
        }
    },
    panel: {
        delete: function(elm, fn){
            elm = jQuery(elm);
            
            elm.fadeOut(200,function(){
                jQuery(this).remove();
            });
            
            if(typeof fn === "function") fn();
            
            app.spy();
            
            return false;
        },
        toggle: function(elm, fn){
            elm = jQuery(elm);
            
            elm.toggleClass("panel-toggled");
            
            if(typeof fn === "function") fn();
            
            app.spy();
            
            return false;
        },
        expand: function(elm, fn){
            elm = jQuery(elm);
                        
            elm.toggleClass("panel-expanded");            
            
            if(typeof fn === "function") fn();
            
            return false;
        }
    },
    /* end block predefined functions */
    
    /* resizable layout */    
    resizableLayout: function(){
        
        if(jQuery(".app-content-resizable").length === 0) return false;
                        
        var minWidth    = 300,
            wrapper     = jQuery(".app-content-resizable"),
            columns     = wrapper.children(".app-content-resizable-column");                                    
                        
            jQuery(".app-content-resizable-column").not(":last-child").resizable({
                handles: "e",
                minWidth: minWidth,
                start: function(e, ui) {
                    columns.each(function(){
                        jQuery(this).width(jQuery(this).width());
                    });
                },
                resize: function(e, ui){                    
                    
                    var next            = jQuery(this).next(".app-content-resizable-column"),                        
                        otherElements   = jQuery(".app-content-resizable-column").not(next).not(jQuery(this)),
                        otherWidth      = app._getMaxWidth(otherElements),
                        newWidth        = wrapper.width() - otherWidth - ui.size.width;
                                                                    
                    if(newWidth < minWidth){
                        newWidth = minWidth;
                        
                        jQuery(this).width(wrapper.width() - otherWidth - minWidth);
                        next.width(newWidth);
                        
                        return false;
                    }
                    
                    next.width(newWidth);
                },
                stop: function(e, ui) {
                    
                    columns.each(function(){
                        jQuery(this).width( Math.round((jQuery(this).width() / wrapper.width()) * 100) + "%" );
                    });
                    
                }
            });//.on('resize', function (e) {
                //e.stopPropagation(); 
            //});
    },
    /* end resizable layout */
    
    /* features */
    features: {
        gallery: {
            init: function(){
                this.controlHeight();
                
                jQuery(".app-feature-gallery > li").on("click",function(){
                    var gallery = jQuery(this).parents(".app-feature-gallery");
                    jQuery(this).appendTo(gallery);
                });
            },
            controlHeight: function(){                
                jQuery(".app-feature-gallery").each(function(){                    
                    var felm = jQuery(this).find("> li:first");                    
                    jQuery(this).height(app._getTotalHeight(felm.children()));                    
                });                
            }
        },
        preview: {
            init: function(){
                var preview = jQuery("#preview"),
                    dialog  = preview.find(".modal-dialog"),
                    content = preview.find(".modal-body");                
                
                jQuery(".preview").on("click",function(){      
                    content.html("");
                    dialog.removeClass("modal-lg modal-sm modal-fw");
                    
                    if(jQuery(this).data("preview-image"))
                        content.append(app.features.preview.build.image(jQuery(this).data("preview-image")));
                                                
                    if(jQuery(this).data("preview-video"))
                        content.append(app.features.preview.build.video(jQuery(this).data("preview-video")));
                    
                    if(jQuery(this).data("preview-href")){                        
                        content.html(app.features.preview.build.href(jQuery(this).data("preview-href")));
                        app_plugins.loaded();
                    }
                    
                    if(jQuery(this).data("preview-size"))
                        dialog.addClass(jQuery(this).data("preview-size"));                                                           
                    
                    if(jQuery(this).data("preview-title") && jQuery(this).data("preview-description"))
                        content.prepend(app.features.preview.build.text(jQuery(this).data("preview-title"),jQuery(this).data("preview-description")));                    
                    
                    preview.modal("show");
                    
                    return false;
                });
                
                preview.on('hidden.bs.modal',function(){
                    content.html("");
                });
                                
            },
            build: {
                image: function(src){
                    return jQuery("<img>").attr("src",src).addClass("img-responsive");
                },
                video: function(src){
                    return jQuery("<div class=\"app-preview-video\"><iframe src=\""+src+"\" width=\"100%\" frameborder=\"0\" allowfullscreen></iframe></div>");
                },
                href: function(path){
                    
                    var result = null;
                    
                    jQuery.ajax({url: path,type: 'get',dataType: 'html',async: false,
                        success: function(data) {
                            result = data;
                        }
                    });
                    
                    return result;                                        
                },
                text: function(title,description){
                    return jQuery("<div></div>").addClass("app-heading app-heading-small app-heading-condensed").append( jQuery("<div></div>").addClass("title").html("<h5>"+title+"</h5><p>"+description+"</p>") );
                }
            }
        }                      
    },
    /* end features */
    
    /* accordion feature */
    accordion: function(){
        
        if(jQuery(".app-accordion").length > 0){
            
            jQuery(".app-accordion").each(function(){
               var app_accordion = jQuery(this);
               
               app_accordion.find(".item").each(function(){
                    var app_accordion_item = jQuery(this);
                   
                    if(!app_accordion.data("type"))
                        app_accordion.addClass("app-accordion-simple");
                   
                    app_accordion_item.find(".heading").on("click",function(){
                       
                        if(app_accordion_item.hasClass("open"))
                            app_accordion_item.removeClass("open").removeAttr("style");
                        else
                            app_accordion_item.addClass("open");
                                                                       
                        
                        if(app_accordion.data("open") === "close-other"){
                           app_accordion.find(".item").not(app_accordion_item).removeClass("open").removeAttr("style");                           
                        }
                        
                        if(app_accordion.data("type") === "full-height"){
                            app.accordionFullHeight(app_accordion);
                        }
                        
                    });
               }); 
                
            });
            
        }
        
    },
    accordionFullHeight: function(accordion){        
        if(accordion.hasClass("app-accordion-simple")) return false;
                        
        var wrapper = accordion.parent("div"),
            items = accordion.find(".item"),
            itemsCount = items.length,
            openItemsCount = items.filter(".open").length;
        
        accordion.height(wrapper.height());                
        
        var items = items.filter(".open");        
            items.removeAttr("style");
        
        var freeHeight = wrapper.height() - (itemsCount - openItemsCount) * app.accordion_settings.titleHeight;
        var height = Math.floor(freeHeight / openItemsCount);
        
        items.each(function(){
            jQuery(this).height(height);
            jQuery(this).find(".content").height(height - app.accordion_settings.titleHeight);
        });
    },
    accordionFullHeightSpy: function(){
        jQuery(".app-accordion").each(function(){                        
            app.accordionFullHeight(jQuery(this));
        });                    
    },
    accordionFullHeightResize: function(){        
        jQuery(".app-accordion").removeAttr("style").find(".item.open").removeAttr("style");
        
        delayBeforeFire(function(){
            app.accordionFullHeightSpy();
        },200);
    },
    /* end accordion feature */
    
    /* content tabs */
    contentTabs: function(){
        
        if(jQuery(".app-content-tabs").length > 0){
            
            jQuery(".app-content-tabs a .close-tab").on("click",function(e){
                e.stopPropagation();                                
                
                var act = jQuery(this).parents(".app-content-tabs");
                
                jQuery(jQuery(this).parent("a").attr("href")).remove();                                
                jQuery(this).parents("li").remove();
                
                act.find("li:first > a").trigger("click");
            });
            
            jQuery(".app-content-tabs a").on("click",function(){
                jQuery(".app-content-tabs a, .app-content-tab").removeClass("active");                
                jQuery(this).addClass("active");                
                jQuery(jQuery(this).attr("href")).addClass("active");
                
                return false;
            });
    
        }
        
    },
    /* end content tabs */    
    
    /* features */
    showOverlay: function(func){
        jQuery(".app-overlay").addClass("show");        
        if(typeof func === "function") func();        
    },
    hideOverlay: function(){
        jQuery(".app-overlay").removeClass("show");
    },
    formsFile: function(){
        
        jQuery("input.file").each(function(){
            var if_title = typeof jQuery(this).attr("title") === "undefined" ? "Browse" : jQuery(this).attr("title");
            var if_class = jQuery(this).attr("class").replace("file","");

            if_class = if_class === "" ? " btn-default" : if_class;
            if_class = jQuery(this).is(":disabled") ? if_class+" disabled" : if_class;

            jQuery(this).wrap("<a href=\"#\" class=\"file-input btn"+if_class+"\"></a>").parent("a").append(if_title);
            jQuery(this).parent("a").after("<span class=\"file-input-name\"></span>");
        });

        jQuery("input.file").on("change",function(){
            
            var files = jQuery(this)[0].files,
                text = "",
                divider = files.length > 1 ? divider = ", " : "";
            
            for (var i = 0; i < files.length; i++)
                text += files[i].name.split('/').pop().split('\\').pop() + (i !== (files.length - 1) ? divider : "");
            
            jQuery(this).parent("a").next(".file-input-name").html(text);            
        });
            
    },    
    misc: function(){
        
        /* fix height after shown */
        jQuery(".panel-collapse").on("shown.bs.collapse", function(){            
            jQuery(window).resize();
        });
        /* end */
        
        /* fix height after tab shown */
        jQuery("a[data-toggle='tab']").on("shown.bs.tab", function(){
            jQuery(window).resize();
        });
        /* end */
        
        /* icon preview */
        jQuery(".icons-preview > li").on("click",function(){
            
            var icon = jQuery(this).find(".name").html();
            
            jQuery("#modal-icon-preview .modal-icon-preview-name").html(icon);
            jQuery("#modal-icon-preview .modal-icon-preview-span").val("<span class=\""+icon+"\"></span>");            
            jQuery("#modal-icon-preview .modal-icon-preview-value").val(icon);                        
            jQuery("#modal-icon-preview .modal-icon-preview-icon span").removeAttr("class").addClass(icon);
            
            jQuery("#modal-icon-preview").modal("show");
        });
        
        jQuery(".modal-icon-preview-value, .modal-icon-preview-span").on("click",function(){
            jQuery(this).select();
        });
        /* end icon preview */        
        
        /* lock screen */
        jQuery(".app-lock .app-lock-user").on("click",function(){
            jQuery(".app-lock").addClass("app-lock-open");
            jQuery(".app-lock .app-lock-form").show().addClass("animated bounceIn");
            jQuery(".app-lock .app-lock-form .form-control").focus();
        });        
        /* ./lock screen */        
        
        // New selector case insensivity        
        jQuery.expr[':'].containsi = function(a, i, m) {
            return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };
    },
    doc_nav: function(){
        
        var wH = jQuery(window).height(),
            nav = jQuery(".doc_fix_nav"),
            pdw = nav.parent("div").width() - 27;
    
        if(nav.length > 0){
            nav.width(pdw);
            
            if(nav.height() > wH){
                nav.height(wH - 60);                
                nav.mCustomScrollbar({axis:"y", autoHideScrollbar: true, scrollInertia: 200, advanced: {autoScrollOnFocus: false}});
            }
            
            jQuery(window).scroll(function(){
                var wp = jQuery(window).scrollTop();
                var point = jQuery(document).height() - 397 - nav.outerHeight(true);

                if(wp > 175){
                    nav.addClass("fixed");

                    if(wp > point)
                        nav.addClass("stack");
                    else
                        nav.removeClass("stack");

                }else{
                    nav.removeClass("fixed");
                }               

            });
            
        }
        
    },
    loading: function(action,options){

        var settings = jQuery.extend({
            state: '',            
            value: [0,0],
            position: '',
            speed: 20,
            complete: null
        },options);

        if(action == 'show' || action == 'update'){
            
            if(action == 'show'){
                jQuery(".app-loading").remove();
                var loading = '<div class="app-loading '+settings.position+'">\n\
                               <div class="app-loading-progress'+(settings.state != '' ? ' app-loading-'+settings.state: '')+'" style="width:'+settings.value[0]+'%;"></div>\n\
                           </div>';
                jQuery('body').append(loading);
            }
            
            var i  = jQuery.isArray(settings.value) ? settings.value[0] : jQuery(".app-loading .app-loading-progress").width();
            var to = jQuery.isArray(settings.value) ? settings.value[1] : settings.value;            
            
            var timer = setInterval(function(){
                jQuery(".app-loading .app-loading-progress").css('width',i+'%'); i++;
                
                if(i > to){
                    clearInterval(timer);
                    if(jQuery.isFunction(settings.complete)){
                        settings.complete.call(this);
                    }
                }
            }, settings.speed);

        }

        if(action == 'destroy'){
            jQuery(".app-loading").remove();
        }                
        
    },
    statusbar: {
        init: function(){
            
            jQuery(".app-statusbar-open, .app-statusbar-close").on("click",function () {
                app.statusbar.open(jQuery(this).attr('href'));
                return false;
            });
            
        },
        open: function(id){            
            jQuery(".app-statusbar").hide();            
            if(jQuery(id).is(":hidden")) jQuery(id).fadeIn();            
        }
    },
    search: function(){
        
        jQuery(".app-header-search").on("click",function(){
            jQuery(".app-header-search > input").focus();
        });
        
    },
    _getTotalHeight: function(elm){
        var totalHeight = 0;
        
        elm.each(function(){            
            totalHeight += jQuery(this).outerHeight(true);
        });
        
        return totalHeight;
    },
    _getMaxHeight: function(elm){
        var maxHeight = 0;
        
        elm.each(function(){            
            maxHeight = jQuery(this).height() > maxHeight ? jQuery(this).height() : maxHeight;
        });
        
        return maxHeight;
    },
    _getMaxWidth: function(elm){
        var maxWidth = 0;
        
        elm.each(function(){            
            maxWidth = jQuery(this).width() > maxWidth ? jQuery(this).width() : maxWidth;
        });
        
        return maxWidth;
    },
    _getHeaderHeight: function(){        
        return this.header ? this.header.outerHeight(true) : 0;        
    },
    _getFooterHeight: function(){        
        return this.footer ? this.footer.outerHeight(true) : 0;
    },
    _getCustomOffset: function(){
        return this.app.data("offset-height") ? this.app.data("offset-height") : 0;
    },
    _delayBeforeFire: function(){
        var timer = 0;
    
        return function (callback, ms) {
            clearTimeout(timer);
            timer = setTimeout(callback, ms);
        };
    },
    _toggleClass: function(container,cl){        
        jQuery(container).toggleClass(cl);        
        
        // spy height changes
        app.spy();
        
        return false;
    },
    _addClass: function(container,cl){        
        jQuery(container).addClass(cl);        
        
        // spy height changes
        app.spy();
        
        return false;
    },
    _removeClass: function(container,cl){        
        jQuery(container).removeClass(cl);        
        
        // spy height changes
        app.spy();
            
        return false;
    },
    loaded: function(){        
        app.spy();
        
        app.app.addClass("app-loaded");
        app.accordion();
        app.accordionFullHeightSpy();
        
        setTimeout(function(){
            jQuery("body").scrollTop(0);            
        },200);
        
        app.isloaded = true;
    }
};

jQuery(function(){    
    
    app.init();    
    app.layout();
    app.resizableLayout();           
    
    app.navigation();        
    app.navigationMobile();
    app.contentTabs();    
    app.formsFile();
    
    app.features.gallery.init();
    app.features.preview.init();
    app.statusbar.init();    
    
    app.search();    
    
    app.misc();
    app.doc_nav();
});

jQuery(window).resize(function(){        
    
    delayBeforeFire(function(){
        app.accordionFullHeightResize();
        app.features.gallery.controlHeight();
        app.spy();
    },100);
    
});

var delayBeforeFire = (function(){
    var timer = 0;
    
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();