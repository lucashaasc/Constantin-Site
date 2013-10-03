(function(e){var t=function(t){function r(e){var t=new Image;t.src=e;var n={height:t.height,width:t.width};return n}var n=this;this.tabs=null;this.activePanel=null;this.selectedItem=null;this.mdSliderToolbar=new MdSliderToolbar(n);this.mdSliderTimeline=new MdSliderTimeline(n);this.textBoxTemplate='<div class="slider-item ui-widget-content item-text" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" data-type="text" data-title="Text" style="width: 100px; height: 50px;"><div>Text</div><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span> </div>';this.imageBoxTemplate='<div class="slider-item ui-widget-content item-image" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" style="height: auto;width: auto;" data-type="image"><img width="100%" height="100%" src="'+t+'images/image.jpg" /><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span></div>';this.videoBoxTemplate='<div class="slider-item ui-widget-content item-video" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" data-type="video"><img width="100%" height="100%" src="'+t+'/images/video.jpg" /><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span></div>';this.tab_counter=e("#md-tabs ul.md-tabs-head li.tab-item").size();this.init=function(){n.initTab();n.initPanel();n.initSliderItem();e(document).keyup(function(t){var r=t.keyCode||t.which;var i=e(t.target).is("input, textarea, select");if(!i&&r==46&&n.selectedItem!=null){var s=n.selectedItem.data("timeline");if(s!=null){s.remove();n.selectedItem.remove();n.triggerChangeSelectItem()}}});e(window).resize(function(){n.resizeWindow()});var t=e("#md-tabs .md-slide-image img").size(),r=0;e("#md-tabs .md-slide-image img").each(function(){r++;var s=e(this),o=new Image;o.src=s.attr("src");o.onload=function(){s.data("width",o.width).data("height",o.height);if(r==t)n.resizeBackgroundImage()}})};this.initTab=function(){n.tabs=e("#md-tabs").tabs({activate:function(t,r){e(n.activePanel).find(".slider-item.ui-selected").removeClass("ui-selected");n.activePanel=e(r.newPanel);n.mdSliderTimeline.changeActivePanel();n.triggerChangeSelectItem();n.resizeBackgroundImage()},create:function(t,r){n.activePanel=e(r.panel);n.mdSliderTimeline.changeActivePanel();n.triggerChangeSelectItem()}});e(document).on("mouseenter",".md-tabs-head li",function(){e(this).find(".ui-icon-close").show()});e(document).on("mouseleave",".md-tabs-head li",function(){e(this).find(".ui-icon-close").hide()});e(document).on("click",".md-tabs-head span.ui-icon-close",function(){var t=e(this);var r=t.prev().attr("href");var i=JSON.parse(e(".settings input",e(r)).val());if(!confirm("Are you sure want to delete this slide? After accepting this slide will be removed completely.")){return}var s=e(this).parent().remove();var o=s.attr("aria-controls");e("#"+o).remove();e("tabs").tabs("refresh");n.tabs.tabs("option","active",0)});n.tabs.find(".ui-tabs-nav").sortable({axis:"x",stop:function(){n.tabs.tabs("refresh")}});e("#slide-setting-dlg").dialog({resizable:false,autoOpen:false,draggable:false,modal:true,width:960,open:function(){var t=e(this).data("tab");if(t){var r=e("input.panelsettings",t).val();r!=""&&(r=JSON.parse(r));n.setSlideSettingValue(r)}},buttons:{Save:function(){var t=e(this).data("tab");if(t){var r=n.getSlideSettingValue();var i=JSON.parse(e("input.panelsettings",t).val());r=e.extend(i,r);e("input.panelsettings",t).val(JSON.stringify(r));if(r.fid){var s={action:"mega_get_bg",id:r.fid,oldId:-1,width:e("#md-settings-width").val(),height:e("#md-settings-height").val(),oldWidth:0,oldHeight:0};e.post(ajaxurl,s,function(t){e(".md-slide-image img",n.activePanel).attr("src",t)})}}e(this).dialog("close")},Cancel:function(){e(this).dialog("close")}}});e(document).on("click",".panel-settings-link",function(){e("#slide-setting-dlg").data("tab",e(this).parent().parent()).dialog("open")});e(".random-transition").click(function(){e("#navbar-content-transitions input").removeAttr("checked");for(i=0;i<3;i++){randomTran=Math.floor(Math.random()*26)+1;e("#navbar-content-transitions li:eq("+randomTran+") input").attr("checked","checked")}return false});var t=e("#md-slider").mdSlider({transitions:"fade",height:150,width:290,fullwidth:false,showArrow:true,showLoading:false,slideShow:true,showBullet:true,showThumb:false,slideShowDelay:2e3,loop:true,strips:5,transitionsSpeed:1500});e("#navbar-content-transitions li").hoverIntent(function(){var t=e("input",this).attr("value");e("#md-slider").data("transitions",t);var n=e(this).position();e("#md-tooltip").css({left:n.left-230+e(this).width()/2,top:n.top-180}).show()},function(){e("#md-tooltip").hide()});e(document).on("click",".slide-choose-image-link",function(){var t=this;var n=wp.media.editor.send.attachment;wp.media.editor.send.attachment=function(t,r){e("#slide-backgroundimage").val(r.id);e("#slide-background-preview").attr("src",r.url);wp.media.editor.send.attachment=n};wp.media.editor.open()});e(document).on("click",".slide-choose-thumbnail-link",function(){var t=this;var n=wp.media.editor.send.attachment;wp.media.editor.send.attachment=function(t,r){e("#slide-thumbnail").val(r.id);e("#slide-thumbnail-preview").attr("src",r.url);wp.media.editor.send.attachment=n};wp.media.editor.open()});e(document).on("click",".panel-clone",function(){n.cloneTab(e(this).parent().parent());return false})};this.resizeWindow=function(){n.resizeBackgroundImage()};this.resizeBackgroundImage=function(){if(e(".md-slidewrap",n.activePanel).hasClass("md-fullwidth")){var t=e(".md-slide-image",n.activePanel).width(),r=e(".md-slide-image",n.activePanel).height(),i=e(".md-slide-image img",n.activePanel),s=parseInt(i.data("width")),o=parseInt(i.data("height"));if(o>0&&r>0){if(s/o>t/r){var u=t-r/o*s;i.css({width:"auto",height:"100%"});if(u<0){i.css({left:u/2+"px",top:0})}else{i.css({left:0,top:0})}}else{var a=r-t/s*o;i.css({width:"100%",height:"auto"});if(a<0){i.css({top:a/2+"px",left:0})}else{i.css({left:0,top:0})}}}}};this.initSliderItem=function(){e("#md-tabs div.slider-item").each(function(){var t=e(this).getItemValues();e(this).setItemStyle(t)})};this.initPanel=function(){e("#add_tab").click(function(){n.addTab();return false});e("#md-tabs .slider-item").each(function(){e(this).data("slidepanel",n).triggerItemEvent()})};this.addTab=function(){n.tab_counter++;var t="Slide "+n.tab_counter,r="tabs-"+n.tab_counter;var i=e('<div id="'+r+'"></div>');i.append(e("#dlg-slide-setting").html()).data("timelinewidth",e("input[name=default-timelinewidth]").val());e("#md-tabs").append(i);var s=e('<li class="tab-item first clearfix"><a class="tab-link" href="#'+r+'"><span class="tab-text">'+t+'</span></a> <span class="ui-icon ui-icon-close">Remove Tab</span></li>');s.appendTo("#md-tabs .ui-tabs-nav");var o=e("#md-tabs .ui-tabs-nav li").index(s);n.tabs.tabs("refresh");n.tabs.tabs("option","active",o)};this.cloneTab=function(t){n.addTab();e("#tabs-"+n.tab_counter).find(".md-slide-image").html(t.find(".md-slide-image").html());var r=e.stringToObject(e("input.panelsettings",t).val());r.slide_id=-1;e("#tabs-"+n.tab_counter+" input.panelsettings").val(e.objectToString(r));e("#tabs-"+n.tab_counter).data("timelinewidth",t.data("timelinewidth"));n.mdSliderTimeline.setTimelineWidth(t.data("timelinewidth"));e(".slider-item",t).each(function(){n.cloneBoxItem(e(this))})};this.cloneBoxItem=function(t){var r=e(t).getItemValues();if(r&&n.activePanel!=null){var i,s=r.type;if(s=="text"){i=e(n.textBoxTemplate).clone()}else if(s=="image"){i=e(n.imageBoxTemplate).clone()}else{i=e(n.videoBoxTemplate).clone()}i.data("slidepanel",n).appendTo(e(".md-objects",n.activePanel));i.setItemValues(r);i.setItemStyle(r);i.setItemHtml(r);i.triggerItemEvent();n.mdSliderTimeline.addTimelineItem(s,i);return true}};this.addBoxItem=function(t){if(this.activePanel!=null){var r;if(t=="text"){r=e(this.textBoxTemplate).clone()}else if(t=="image"){r=e(this.imageBoxTemplate).clone()}else{r=e(this.videoBoxTemplate).clone()}n.mdSliderTimeline.addTimelineItem(t,r);r.data("slidepanel",this).appendTo(e(".md-objects",this.activePanel)).triggerItemEvent();n.changeSelectItem(r);n.mdSliderTimeline.triggerChangeOrderItem();n.mdSliderToolbar.focusEdit();return true}return false};this.triggerChangeSelectItem=function(){if(this.activePanel==null)return;var t=e(this.activePanel).find(".slider-item.ui-selected");if(t.size()==1){this.selectedItem=t}else{this.selectedItem=null}this.mdSliderToolbar.changeSelectItem(this.selectedItem);this.mdSliderTimeline.changeSelectItem(this.selectedItem)};this.setItemAttribute=function(e,t){if(this.selectedItem!=null){switch(e){case"width":return n.setBoxWidth(this.selectedItem,t);break;case"height":return n.setBoxHeight(this.selectedItem,t);break;case"left":return n.setPositionBoxLeft(this.selectedItem,t);break;case"top":return n.setPositionBoxTop(this.selectedItem,t);break}}};this.setItemSize=function(e,t){n.setBoxWidth(this.selectedItem,e);n.setBoxHeight(this.selectedItem,t)};this.setItemBackground=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(e.removeMinusSign(t),n);var r=e(this.selectedItem).data("backgroundcolor");if(r&&r!=""){var i=parseInt(e(this.selectedItem).data("backgroundtransparent"));var s=e.HexToRGB(r);i=i?i:100;var o="rgba("+s.r+","+s.g+","+s.b+","+i/100+")";this.selectedItem.css("background-color",o)}else{this.selectedItem.css("backgroundColor","transparent")}}return false};this.setItemFontSize=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(e.removeMinusSign(t),n);this.selectedItem.css(t,n+"px")}};this.setItemColor=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("color",t);if(t!=""){this.selectedItem.css("color","#"+t)}else{this.selectedItem.css("color","")}}};this.setItemBorderColor=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(e.removeMinusSign(t),n);this.selectedItem.css("border-color","#"+n)}};this.setItemCssPx=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(e.removeMinusSign(t),n);this.selectedItem.css(t,n+"px")}};this.setItemCss=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(e.removeMinusSign(t),n);this.selectedItem.css(t,n)}};this.setItemStyle=function(t,n){if(this.selectedItem!=null){_tmpSelectedItem=this.selectedItem;e(_tmpSelectedItem).data(t,n);var r=e.map(e(".mdt-style option","#md-toolbar"),function(e){return e.value});e.each(r,function(e,t){_tmpSelectedItem.removeClass(t)});_tmpSelectedItem.addClass(n)}};this.setItemOpacity=function(t,n){if(this.selectedItem!=null){e(this.selectedItem).data(t,n);this.selectedItem.css(t,n/100)}};this.setItemTitle=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("title",t);if(e(this.selectedItem).data("type")=="text")e(this.selectedItem).find("div").html(t.replace(/\n/g,"<br />"));this.mdSliderTimeline.changeSelectedItemTitle()}};this.setImageData=function(t,r,i){if(this.selectedItem!=null){e(this.selectedItem).data("title",r);e(this.selectedItem).data("fileid",t);e(this.selectedItem).find("img").attr("src",i).load(function(){var e=new Image;e.src=i;var t=e.width,r=e.height,s=n.activePanel.find(".md-objects").width(),o=n.activePanel.find(".md-objects").height();if(r>0&&o>0){if(t>s||r>o){if(t/r>s/o){n.setItemSize(s,r*s/t)}else{n.setItemSize(t*o/r,o)}}else{n.setItemSize(t,r)}n.mdSliderToolbar.changeSelectItem(n.selectedItem)}});n.mdSliderTimeline.changeSelectedItemTitle()}};this.setItemFontWeight=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("fontweight",t);this.selectedItem.css("font-weight",parseInt(t));if(isNaN(t)){this.selectedItem.css("font-style","italic")}else{this.selectedItem.css("font-style","normal")}}};this.setVideoData=function(t,r,i){if(this.selectedItem!=null){e(this.selectedItem).data("title",r);e(this.selectedItem).data("fileid",t);e(this.selectedItem).find("img").attr("src",i).load(function(){var e=new Image;e.src=i;var t=e.width,r=e.height,s=n.activePanel.find(".md-objects").width(),o=n.activePanel.find(".md-objects").height();if(r>0&&o>0){if(t>s||r>o){if(t/r>s/o){n.setItemSize(s,r*s/t)}else{n.setItemSize(t*o/r,o)}}else{n.setItemSize(t,r)}n.mdSliderToolbar.changeSelectItem(n.selectedItem)}});n.mdSliderTimeline.changeSelectedItemTitle()}};this.setItemLinkData=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("link",t)}};this.changeBorderPosition=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("borderposition",t);var r=e(this.selectedItem).data("borderstyle");n.changeBorder(t,r)}};this.changeBorderStyle=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("borderstyle",t);var r=e(this.selectedItem).data("borderposition");n.changeBorder(r,t)}};this.changeBorder=function(t,n){if(this.selectedItem!=null){var r="";if(t&1){r=n}else{r="none"}if(t&2){r+=" "+n}else{r+=" none"}if(t&4){r+=" "+n}else{r+=" none"}if(t&8){r+=" "+n}else{r+=" none"}e(this.selectedItem).css("border-style",r)}};this.changeFontFamily=function(t){if(this.selectedItem!=null){e(this.selectedItem).data("fontfamily",t);e(this.selectedItem).css("font-family",t)}};this.alignLeftSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=1e4;t.each(function(){r=e(this).position().left<r?e(this).position().left:r});t.each(function(){n.setPositionBoxLeft(this,r)})}};this.alignRightSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=0;t.each(function(){var t=e(this).position().left+e(this).outerWidth();r=t>r?t:r});t.each(function(){n.setPositionBoxLeft(this,r-e(this).outerWidth())})}};this.alignCenterSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=t.first().position().left+t.first().outerWidth()/2;t.each(function(){n.setPositionBoxLeft(this,r-e(this).outerWidth()/2)})}};this.alignTopSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=1e4;t.each(function(){r=e(this).position().top<r?e(this).position().top:r});t.each(function(){n.setPositionBoxTop(this,r)})}};this.alignBottomSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=0;t.each(function(){thisBottom=e(this).position().top+e(this).outerHeight();r=thisBottom>r?thisBottom:r});t.each(function(){n.setPositionBoxTop(this,r-e(this).outerHeight())})}};this.alignMiddleSelectedBox=function(){var t=e(n.activePanel).find(".slider-item.ui-selected");if(t.size()>1){var r=t.first().position().top+t.first().outerHeight()/2;t.each(function(){n.setPositionBoxTop(this,r-e(this).outerHeight()/2)})}};this.spaceVertical=function(t){var r=e(n.activePanel).find(".slider-item.ui-selected");if(r.size()>1){t=parseInt(t);var i=r.size();for(var s=0;s<i-1;s++){for(var o=s+1;o<i;o++){if(e(r[s]).position().top>e(r[o]).position().top){var u=r[s];r[s]=r[o];r[o]=u}}}if(t>0){for(var s=1;s<i;s++){n.setPositionBoxTop(e(r[s]),e(r[s-1]).position().top+e(r[s-1]).outerHeight()+t)}}else if(i>2){var a=0;for(var s=0;s<i-1;s++){a+=e(r[s]).outerHeight()}t=(e(r[i-1]).position().top-e(r[0]).position().top-a)/(i-1);for(var s=1;s<i-1;s++){n.setPositionBoxTop(e(r[s]),e(r[s-1]).position().top+e(r[s-1]).outerHeight()+t)}}}};this.spaceHorizontal=function(t){var r=e(n.activePanel).find(".slider-item.ui-selected");if(r.size()>1){t=parseInt(t);var i=r.size();for(var s=0;s<i-1;s++){for(var o=s+1;o<i;o++){if(e(r[s]).position().left>e(r[o]).position().left){var u=r[s];r[s]=r[o];r[o]=u}}}if(t>0){for(var s=1;s<i;s++){n.setPositionBoxLeft(e(r[s]),e(r[s-1]).position().left+e(r[s-1]).outerWidth()+t)}}else if(i>2){var a=0;for(var s=0;s<i-1;s++){a+=e(r[s]).outerWidth()}t=(e(r[i-1]).position().left-e(r[0]).position().left-a)/(i-1);for(var s=1;s<i-1;s++){n.setPositionBoxLeft(e(r[s]),e(r[s-1]).position().left+e(r[s-1]).outerWidth()+t)}}}};this.setPositionBoxLeft=function(t,n){n=n>0?n:0;var r=e(t).parent().width()-e(t).outerWidth(true);if(n>r)n=r;e(t).css("left",n+"px");e(t).data("left",n);return n};this.setPositionBoxTop=function(t,n){n=n>0?n:0;var r=e(t).parent().height()-e(t).outerHeight();if(n>r)n=r;e(t).css("top",n+"px");e(t).data("top",n);return n};this.setBoxWidth=function(t,n){if(n>0){var r=e(t).parent().width()-e(t).position().left;if(n>r)n=r;e(t).width(n);e(t).data("width",n);return n}return e(t).width()};this.setBoxHeight=function(t,n){if(n>0){var r=e(t).parent().height()-e(t).position().top;if(n>r)n=r;e(t).height(n);e(t).data("height",n);return n}return e(t).height()};this.triggerChangeSettingItem=function(){n.mdSliderToolbar.changeToolbarValue()};this.changeSelectItem=function(t){e(n.activePanel).find(".slider-item.ui-selected").removeClass("ui-selected");e(t).addClass("ui-selected");this.triggerChangeSelectItem()};this.getAllItemBox=function(){return e("div.slider-item",n.activePanel)};this.changeTimelineValue=function(){n.mdSliderToolbar.changeTimelineValue()};this.setTimelineWidth=function(t){if(n.activePanel){e(n.activePanel).data("timelinewidth",t)}};this.getTimelineWidth=function(){if(n.activePanel){return e(n.activePanel).data("timelinewidth")}return null};this.getSliderData=function(){var t=[];var n=false;e("#md-tabs .ui-tabs-nav a.tab-link").each(function(){var r=e(e(this).attr("href"));if(r.size()){n=false;if(r.hasClass("ui-tabs-hide")){r.removeClass("ui-tabs-hide");n=true}var i=e.stringToObject(e("input.panelsettings",r).val());i.timelinewidth=r.data("timelinewidth");var s=[];e("div.slider-item",r).each(function(){s.push(e(this).getItemValues())});t.push({itemsetting:i,boxitems:s});if(n){r.addClass("ui-tabs-hide")}}});return t};this.getSlideSettingValue=function(){var t={fid:e("#slide-backgroundimage").val(),thumb:e("#slide-thumbnail").val()};var n=[];e("#navbar-content-transitions input:checked").each(function(){n.push(e(this).val())});t.transitions=n;return t};this.setSlideSettingValue=function(t){if(typeof t!="object"){t={}}e.extend({fid:"-1",thumb:"-1",transitions:[]},t);e("#slide-backgroundimage").val(t.fid);e("#slide-thumbnail").val(t.thumb);e("#navbar-content-transitions input").attr("checked",false);if(t&&t.transitions){e.each(t.transitions,function(t,n){e("#navbar-content-transitions input[value="+n+"]").attr("checked",true)})}e("#slide-background-preview").attr("src","data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");if(t&&t.thumb!=-1){var n={action:"mega_get_bg",id:t.fid,oldId:-1,width:e("#md-settings-width").val(),height:e("#md-settings-height").val(),oldWidth:0,oldHeight:0};e.post(ajaxurl,n,function(t){e("#slide-background-preview").attr("src",t)})}e("#slide-thumbnail-preview").attr("src","data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");if(t&&t.thumb!=-1){var n={action:"mega_get_bg",id:t.thumb,oldId:-1,width:e("#md-settings-width").val(),height:e("#md-settings-height").val(),oldWidth:0,oldHeight:0};e.post(ajaxurl,n,function(t){e("#slide-thumbnail-preview").attr("src",t)})}}};window.MdSliderPanel=t})(jQuery)