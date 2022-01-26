<!--Main Footer / Footer Style One-->
<footer class="main-footer footer-style-one">

    <!--Footer Upper-->
    <div class="p-10" style="background-color: #696969;">
        <div class="">
            <div class="pl-16 text-[#E0E0E0]">
                <!--Footer Column-->

                <div class="flex flex-row space-x-32 items-center">
                    <div class='w-80'>
                        <img class="object-fit" src="{{$logo->logo_220_80}}" alt="">
                    </div>
                    <div class="copyright text-5xl  font-[pacific]">
                        @switch(session("locale"))
                            @case('uz')
                            <p >
                                Şeffaflık, adalet ve dürüstlük.
                            </p>
                            @break
                            @case('ru')
                            <p>
                                Прозрачность, справедливость и честность.
                            </p>
                            @break
                            @case('en')
                            <p>
                                Clarity, fairness and honesty.
                            </p>
                            @break
                        @endswitch
                    </div>
                </div>
{{--                                    <div class="footer-widget about-widget">--}}
{{--                                            <figure class="footer-logo" >--}}
{{--                                                <a>--}}

{{--                                                </a>--}}
{{--                                                <div class="space-y-10">--}}
{{--                                                    <span>--}}
{{--                                                        sadsad--}}
{{--                                                    </span>--}}
{{--                                                    <span>--}}
{{--                                                    sadad--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
{{--                                            </figure>--}}
{{--                                        <div class="text">--}}
{{--                                            @php--}}
{{--                                                echo $footer->text_desc_footer;--}}
{{--                                            @endphp--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                <!--Footer Column-->--}}
{{--                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column padd-left-60">--}}
{{--                                    <div class="footer-widget links-widget">--}}
{{--                               --}}
{{--                                        <br>--}}
{{--                                        <div class="social-links">--}}
{{--                                            <h3>{{$footer->follows_us}}</h3>--}}
{{--                                            <div class="links">--}}
{{--                                                @foreach($footer->social_links as $social_link)--}}
{{--                                                    <a href="{{$social_link->link}}"><span--}}
{{--                                                            class="fa fa-{{$social_link->name_of_icon}}"></span></a>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
                <div class="flex   flex-row items-end justify-between">
                    <div class="">
                        @foreach($headers as $header)
                            <span class="mr-12" >
                                <a class="text-[#E0E0E0]" href="{{$header->link}}">{{$header->title}}</a>
                            </span>
                        @endforeach
                    </div>
                    <div>
                        <img class="image right" src="{{asset('images/logo_turkish.png')}}" class="absolute">
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">
                <a href="{{$footer->actual_links[0]->link}}"><span class=" text-['Roboto Slab'] text-black text-2xl text-bold">{{$footer->actual_links[0]->name}}</span></a>
            </div>
        </div>
    </div>
</footer>
