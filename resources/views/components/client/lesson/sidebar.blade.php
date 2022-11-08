<!-- sidebar -->
<div class="sidebar">

    <!-- slide_menu for mobile -->
    <span class="btn-close-mobi right-3 left-auto" uk-toggle="target: #wrapper ; cls: is-active" tabindex="0"
        aria-expanded="false"></span>

    <!-- back to home link -->
    <div class="flex justify-between lg:-ml-1 mt-1 mr-2">
        <a href="course-intro.html" class="flex items-center text-blue-500">
            <ion-icon name="chevron-back-outline" class="md:text-lg text-2xl"></ion-icon>
            <span class="text-sm md:inline hidden"> back</span>
        </a>
    </div>

    {{-- <!-- title -->                                          đổi $course-> $ --}}
    <h1 class="lg:text-2xl text-lg font-bold mt-2 line-clamp-2"> {{ $exe->title }} </h1>

    <!-- sidebar list -->
    <div class="sidebar_inner is-watch-2" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -15px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                    <div class="simplebar-content" style="padding: 15px; height: 100%; overflow: hidden scroll;">

                        <div class="lg:inline hidden">
                            <div class="relative overflow-hidden rounded-md bg-gray-200 h-1 mt-4">
                                <div class="w-2/4 h-full bg-green-500"></div>
                            </div>
                            <div class="mt-2 mb-3 text-sm border-b pb-3">
                                <div> Hoàn thành 46% </div>
                                <div> Bài học cuối cùng on April 20, 2021</div>
                            </div>
                        </div>

                        <div id="curriculum">
                            <div uk-accordion="multiple: true" class="divide-y space-y-3 uk-accordion">
{{-- đổi $chapters-> $exe --}}
                                {{-- @forelse ($exe as $key => $chapter)
                                    <div class="uk-open">
                                        <a class="uk-accordion-title text-md mx-2 font-semibold" href="#">
                                            <div class="mb-1 text-sm font-medium"> Chương {{ ++$key }} </div>
                                            {{ $chapter->title }}
                                        </a>
                                        <div class="uk-accordion-content mt-3">

                                            <ul class="course-curriculum-list">
                                                @forelse ($chapter->lessons as $key2 => $lesson)
                                                    <li>
                                                        <a href="#" class="flex flex-col">
                                                            <div class="flex justify-between items-center">
                                                                <div class="">
                                                                    <span>{{ ++$key2 }}.
                                                                        {{ $lesson->title }}</span>
                                                                    <div class="">
                                                                        @if ($lesson->lesson_type == 'video')
                                                                            <ion-icon name="logo-youtube"></ion-icon>
                                                                        @else
                                                                            <ion-icon name="pencil"></ion-icon>
                                                                        @endif
                                                                        <span>
                                                                            4:00
                                                                        </span>
                                                                    </div>

                                                            </div>
                                                        </a>
                                                    </li>
                                                @empty
                                                @endforelse
                                            </ul>

                                        </div>
                                    </div>
                                @empty
                                @endforelse --}}
{{-- Phải cmt đoạn @forelse lại mới chạy đc  --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 359px; height: 867px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;">
            </div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 79px; transform: translate3d(0px, 0px, 0px); visibility: visible;"></div>
        </div>
    </div>

    <!-- overly for mobile -->
    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active" tabindex="0"
        aria-expanded="false"></div>

</div>
