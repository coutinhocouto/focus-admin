"use strict";

var app_plugins = {
    checkbox_radio: function(){
        if(jQuery(".app-checkbox").length > 0 || jQuery(".app-radio").length > 0){            
            jQuery(".app-checkbox label, .app-radio label").each(function(){
                jQuery(this).append("<span></span>");
            });
        }
    },
    switch_button: function(){
        
        if(jQuery(".switch").length > 0){
            jQuery(".switch").each(function(){
                jQuery(this).append("<span></span>");
            });
        }
        
    },
    isotope: function(){
        if(jQuery(".grid").length === 0) return false;            
            
        var $grid = jQuery(".grid").isotope({
            itemSelector: ".grid-element",
            layoutMode: "fitRows",
            percentPosition: true
        });

        jQuery("button[data-filter]").on("click", function() {
            var filter = jQuery(this).attr("data-filter");                    
            $grid.isotope({filter: filter});

            jQuery(this).parents(".btn-group").find(".btn-primary").removeClass("btn-primary").addClass("btn-default");
            jQuery(this).removeClass("btn-default").addClass("btn-primary");
        });

        jQuery(window).resize(function(){
            setTimeout(function(){
                $grid.isotope('layout');
                
                app.accordionFullHeightResize();
                app.features.gallery.controlHeight();
                app.spy();
            },100);                    
        });                
    },
    formSpinner: function(){
        
        if(jQuery("input.spinner").length > 0){
            
            jQuery("input.spinner").each(function(){
                jQuery(this).wrap("<div class=\"spinner-wrapper\"></div>");
                jQuery(this).after("<button class=\"spinner-button-up\"><span class=\"fa fa-angle-up\"></span></button>");
                jQuery(this).after("<button class=\"spinner-button-down\"><span class=\"fa fa-angle-down\"></span></button>");                                                
            });                        
                                                    
            jQuery(".spinner-button-up").on("click", function(){

                var input       = jQuery(this).parent(".spinner-wrapper").find("input"),    
                    spinMax     = input.attr("data-spinner-max") ? parseFloat(input.data("spinner-max")) : false,
                    spinMin     = input.attr("data-spinner-min") ? parseFloat(input.data("spinner-min")) : false,
                    spinStep    = input.attr("data-spinner-step") ? parseFloat(input.data("spinner-step")) : 1,
                    val         = parseFloat(input.val()) + spinStep;                   
                    
                if(typeof spinMax !== 'undefined' && spinMax !== false){
                    if(val > spinMax) return false;
                }
                if(typeof spinMin !== 'undefined' && spinMin !== false){
                    if(val < spinMin) return false;
                }

                input.val(val);

                return false;
            });

            jQuery(".spinner-button-down").on("click", function(){

                var input       = jQuery(this).parent(".spinner-wrapper").find("input"),
                    spinMax     = input.attr("data-spinner-max") ? parseFloat(input.data("spinner-max")) : false,
                    spinMin     = input.attr("data-spinner-min") ? parseFloat(input.data("spinner-min")) : false,
                    spinStep    = input.attr("data-spinner-step") ? parseFloat(input.data("spinner-step")) : 1,
                    val         = parseFloat(input.val()) - spinStep;

                if(typeof spinMax !== 'undefined' && spinMax !== false){
                    if(val > spinMax) return false;
                }
                if(typeof spinMin !== 'undefined' && spinMin !== false){
                    if(val < spinMin) return false;
                }

                input.val(val);

                return false;
            });            
            
        }
        
    },
    customScrollBar: function(){
        if(jQuery(".scroll").length > 0)
            jQuery(".scroll").mCustomScrollbar({axis:"y", autoHideScrollbar: true, scrollInertia: 200, advanced: {autoScrollOnFocus: false}});
    },    
    bootstrap_select: function(){       
        if(jQuery(".bs-select").length > 0)
           jQuery(".bs-select").selectpicker({iconBase: '', tickIcon: 'fa fa-check'});              
    },
    select2: function(){
        if(jQuery(".s2-select").length > 0){
           jQuery(".s2-select").select2({minimumResultsForSearch: Infinity});
        }
        if(jQuery(".s2-select-search").length > 0){
           jQuery(".s2-select-search").select2();
        }
        if(jQuery(".s2-select-tags").length > 0){
           jQuery(".s2-select-tags").select2({tags: true});
        }
    },
    bootstrap_daterange: function(){
        if(jQuery(".daterange").length > 0){
            jQuery("input.daterange").daterangepicker();
        }
        if(jQuery(".datetimerange").length > 0){
            jQuery('input.datetimerange').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
        }
    },
    bootstrap_datepicker: function(){
       
       /* in case of update datepicker 
        * icons
        *   time: "icon-clock2",
            date: "icon-calendar-full",
            up: "icon-chevron-up",
            down: "icon-chevron-down",                    
            previous: 'icon-chevron-left',
            next: 'icon-chevron-right',
            today: 'icon-calendar-insert',
            clear: 'icon-trash2',
            close: 'icon-cross'
        * 
        */
        if(jQuery(".bs-datepicker").length > 0){
            jQuery(".bs-datepicker").datetimepicker({format: "DD/MM/YYYY"});
        }
        
        if(jQuery(".bs-datetimepicker").length > 0){
            jQuery(".bs-datetimepicker").datetimepicker();
        }
        if(jQuery(".bs-timepicker").length > 0){
            jQuery(".bs-timepicker").datetimepicker({format: "LT"});
        }
        
        if(jQuery(".bs-datepicker-weekends").length > 0){
            jQuery(".bs-datepicker-weekends").datetimepicker({format: "DD/MM/YYYY", daysOfWeekDisabled: [0, 6]});
        }
        
        if(jQuery(".bs-datepicker-inline").length > 0){
            jQuery(".bs-datepicker-inline").datetimepicker({
                inline: true                
            });
        }
        
        if(jQuery(".bs-datepicker-inline-time").length > 0){
            jQuery(".bs-datepicker-inline-time").datetimepicker({
                inline: true,
                 sideBySide: true
            });
        }
        
        if(jQuery(".bs-datepicker-inline-years").length > 0){
            jQuery(".bs-datepicker-inline-years").datetimepicker({
                inline: true,
                viewMode: 'years'
            });
        }
    },
    bootstrap_popover: function(){
        jQuery("[data-toggle='popover']").popover();
        
        jQuery(".popover-hover").on("mouseenter",function(){             
            jQuery(this).popover('show');
        }).on("mouseleave",function(){
            jQuery(this).popover('hide');
        });
                
        jQuery(".modal").on("show.bs.modal", function () {
            jQuery("[data-toggle='popover']").popover("hide");
        });
    },
    bootstrap_tooltip: function(){        
        jQuery("[data-toggle='tooltip']").tooltip();        
    },    
    maskedInput: function(){
        if(jQuery("input[class^='mask_']").length > 0){
            jQuery("input.mask_tin").mask('99-9999999');
            jQuery("input.mask_ssn").mask('999-99-9999');        
            jQuery("input.mask_date").mask('9999-99-99');
            jQuery("input.mask_date_rev").mask('99-99-9999');
            jQuery("input.mask_product").mask('a*-999-a999');
            jQuery("input.mask_phone").mask('99 (999) 999-99-99');
            jQuery("input.mask_phone_ext").mask('99 (999) 999-9999? x99999');
            jQuery("input.mask_credit").mask('9999-9999-9999-9999');        
            jQuery("input.mask_percent").mask('99%');            
        }
    },
    noty: function(){
        
        jQuery(".notify").on("click",function(){
            
            noty({
                text: jQuery(this).data("notify"),
                type: jQuery(this).data("notify-type"),
                layout: jQuery(this).data("notify-layout") ? jQuery(this).data("notify-layout") : 'topRight',
                animation: {
                    open: 'animated bounceIn',
                    close: 'animated fadeOut',                    
                    speed: 200
                }
            });
            
        });
        
    },
    datatables: function(){
        
        if(jQuery(".datatable-basic").length > 0){
            jQuery(".datatable-basic").DataTable({
                searching: false,
                paging: false,
                info: false
            });
        }
        
        if(jQuery(".datatable-extended").length > 0){
            jQuery(".datatable-extended").DataTable();
        }
        
    },
    knob: function(){
        if(jQuery(".knob").length > 0){
            jQuery(".knob").knob({
                'format' : function (value) {
                   return value + '%';
                }
            });
        }
    },
    sparkline: function(){
        if(jQuery(".sparkline").length > 0)
            jQuery(".sparkline").sparkline('html', { enableTagOptions: true,disableHiddenCheck: true});   
    },
    wizard: function(){
        
        if(jQuery(".wizard").length > 0){

            //check count of steps in each wizard
            jQuery(".wizard > ul").each(function(){
                jQuery(this).addClass("steps_"+jQuery(this).children("li").length);
            });// ./end                                    
            
            // init wizard plugin
            jQuery(".wizard").smartWizard({
                // This part (using for wizard validation) of code can be removed FROM 
                onLeaveStep: function(obj){
                    var wizard = obj.parents(".wizard");

                    if(wizard.hasClass("wizard-validation")){

                        var valid = true;

                        jQuery('input,textarea',jQuery(obj.attr("href"))).each(function(i,v){
                            valid = validate.element(v) && valid;
                        });

                        if(!valid){
                            wizard.find(".stepContainer").removeAttr("style");
                            validate.focusInvalid();                                
                            return false;
                        }         
                    }    

                    app.spy();

                    return true;
                },// <-- TO
                //this is important part of wizard init
                onShowStep: function(obj){
                    var wizard = obj.parents(".wizard");

                    if(wizard.hasClass("show-submit")){

                        var step_num = obj.attr('rel');
                        var step_max = obj.parents(".anchor").find("li").length;

                        if(step_num == step_max){                             
                            obj.parents(".wizard").find(".actionBar .btn-primary").css("display","block");
                        }                         
                    }
                    
                    app.spy();
                    
                    return true;                         
                }// ./end
            });                        
        }            

    },
    loaded: function(){
        app_plugins.customScrollBar();
        app_plugins.checkbox_radio();
        app_plugins.formSpinner();
        app_plugins.switch_button();
        app_plugins.bootstrap_select();
        app_plugins.select2();
        app_plugins.bootstrap_popover();
        app_plugins.bootstrap_datepicker();
        app_plugins.bootstrap_tooltip();
        app_plugins.maskedInput();
        app_plugins.datatables();
        app_plugins.knob();

        app_plugins.sparkline();
        
        app_plugins.isotope();

        app_plugins.noty();
        app_plugins.wizard();
        app_plugins.bootstrap_daterange();
    }
};

jQuery(function(){
    app_plugins.loaded();
});

jQuery(document).ready(function(){
    app.loaded();
}); 