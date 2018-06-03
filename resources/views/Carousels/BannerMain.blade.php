<div class="container" style="margin-bottom:25px;">
    <div class="row">
        <div class="titulos col-12">
            Lo  encuentras todo
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">

    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/001.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/002.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/003.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/004.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/005.png')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/006.png')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/007.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/008.png')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/009.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/010.jpg')}}" />
            </div>
            <div data-p="30.00">
                <img data-u="image" src="{{asset('public/slider/011.jpg')}}" />
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var jssor_1_options = {
          $AutoPlay: 1,
          $Idle: 0,
          $SlideDuration: 5000,
          $SlideEasing: $Jease$.$Linear,
          $PauseOnHover: 4,
          $SlideWidth: 140,
          $Align: 0
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    });
</script>
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>
