@extends('frontend.master')
@section('content')
<div class="main-wrap">
    
    <section class="row_section" style='  margin:20px 0px !important;'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="clearfix">
                        <section class="breadcrumbs clearfix">
                            <a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a>
                            &nbsp;&nbsp;/&nbsp;&nbsp;<a href="javascript:void(0)">Thư viện ảnh</a>                    
                        </section>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <script src="{{ asset('assets/frontend/js/jssor.slider-21.1.6.mini.js') }}" type="text/javascript"></script>

                    <style>
                        /* jssor slider arrow navigator skin 05 css */
                        /*
                        .jssora05l                  (normal)
                        .jssora05r                  (normal)
                        .jssora05l:hover            (normal mouseover)
                        .jssora05r:hover            (normal mouseover)
                        .jssora05l.jssora05ldn      (mousedown)
                        .jssora05r.jssora05rdn      (mousedown)
                        .jssora05l.jssora05lds      (disabled)
                        .jssora05r.jssora05rds      (disabled)
                        */
                        .jssora05l, .jssora05r {
                            display: block;
                            position: absolute;
                            /* size of arrow element */
                            width: 40px;
                            height: 40px;
                            cursor: pointer;
                            background: url('assets/frontend/img/a17.png') no-repeat;
                            overflow: hidden;
                        }
                        .jssora05l { background-position: -10px -40px; }
                        .jssora05r { background-position: -70px -40px; }
                        .jssora05l:hover { background-position: -130px -40px; }
                        .jssora05r:hover { background-position: -190px -40px; }
                        .jssora05l.jssora05ldn { background-position: -250px -40px; }
                        .jssora05r.jssora05rdn { background-position: -310px -40px; }
                        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
                        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
                        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01-99-66 .p            (normal).jssort01-99-66 .p:hover      (normal mouseover).jssort01-99-66 .p.pav        (active).jssort01-99-66 .p.pdn        (mousedown)*/.jssort01-99-66 .p {    position: absolute;    top: 0;    left: 0;    width: 99px;    height: 66px;}.jssort01-99-66 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01-99-66 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01-99-66 .c {    position: absolute;    top: 0px;    left: 0px;    width: 95px;    height: 62px;    border: #000 2px solid;    box-sizing: content-box;    background: url('assets/frontend/img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01-99-66 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 95px;    height: 62px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01-99-66 .p:hover .c {    top: 0px;    left: 0px;    width: 97px;    height: 64px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01-99-66 .p.pdn .c {    background-position: 50% 50%;    width: 95px;    height: 62px;    border: #000 2px solid;}* html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {    /* ie quirks mode adjust */    width /**/: 99px;    height /**/: 66px;}
                    </style>
                    <section class="row-section " style='  '>
                        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
                            <!-- Loading Screen -->
                            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;background:url('assets/frontend/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                            </div>
                            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
                                @if(count($files) > 0)
                                @foreach($files as $file)
                                <div data-p="150.00">
                                    <img data-u="image" src="{{ asset($file->image) }}" />
                                    <img data-u="thumb" src="{{ asset($file->image) }}" />
                                </div>
                                @endforeach
                                @endif
                                <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery with Vertical Thumbnail</a>
                                
                            </div>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
                                <!-- Thumbnail Item Skin Begin -->
                                <div data-u="slides" style="cursor: default;">
                                    <div data-u="prototype" class="p">
                                        <div class="w">
                                            <div data-u="thumbnailtemplate" class="t"></div>
                                        </div>
                                        <div class="c"></div>
                                    </div>
                                </div>
                                <!-- Thumbnail Item Skin End -->
                            </div>
                            <!-- Arrow Navigator -->
                            <span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
                            <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
                        </div>
                    </section>
                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {

                            var jssor_1_SlideshowTransitions = [
                              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
                              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
                              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
                              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
                              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
                              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
                              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
                            ];

                            var jssor_1_options = {
                              $AutoPlay: true,
                              $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                              },
                              $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                              },
                              $ThumbnailNavigatorOptions: {
                                $Class: $JssorThumbnailNavigator$,
                                $Rows: 2,
                                $Cols: 6,
                                $SpacingX: 14,
                                $SpacingY: 12,
                                $Orientation: 2,
                                $Align: 156
                              }
                            };

                            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                            /*responsive code begin*/
                            /*you can remove responsive code if you don't want the slider scales while window resizing*/
                            function ScaleSlider() {
                                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                                if (refSize) {
                                    refSize = Math.min(refSize, 1500);
                                    refSize = Math.max(refSize, 300);
                                    jssor_1_slider.$ScaleWidth(refSize);
                                }
                                else {
                                    window.setTimeout(ScaleSlider, 30);
                                }
                            }
                            ScaleSlider();
                            $(window).bind("load", ScaleSlider);
                            $(window).bind("resize", ScaleSlider);
                            $(window).bind("orientationchange", ScaleSlider);
                            /*responsive code end*/
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

 




 



 
 
 
 






 





 




 



 
 
 
 






 





 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 







 




 



 
 
 
 




