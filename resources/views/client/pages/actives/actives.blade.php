@extends('client.layouts.master')

@section('title')
    Hoạt động gần đây
@endsection

@section('content')
{{-- <div class="timeline-row">
    <div class="timeline-icon">
        <img src="{{asset('assets/client/images/vnua-1.jpg')}}" alt="">
    </div>

    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h6 class="mb-0">Lịch hoạt động của CLB </h6>
            <div class="ms-auto">
                <div class="d-inline-flex ms-3">
                    <div class="dropdown">
                        <a href="#" class="text-body" data-bs-toggle="dropdown">
                            <i class="ph-gear"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-lock-key me-2"></i>
                                Hide user posts
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-prohibit-inset me-2"></i>
                                Block user
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-user-circle-minus me-2"></i>
                                Unfollow user
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-brackets-curly me-2"></i>
                                Embed post
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-warning-circle me-2"></i>
                                Report this post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="my-schedule fc fc-media-screen fc-direction-ltr fc-theme-standard"><div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr"><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="Previous week" aria-pressed="false" class="fc-prev-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-left"></span></button><button type="button" title="Next week" aria-pressed="false" class="fc-next-button fc-button fc-button-primary"><span class="fc-icon fc-icon-chevron-right"></span></button></div><button type="button" title="This week" aria-pressed="false" class="fc-today-button fc-button fc-button-primary">today</button></div><div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title" id="fc-dom-1">Nov 13 – 19, 2022</h2></div><div class="fc-toolbar-chunk"><div class="fc-button-group"><button type="button" title="week view" aria-pressed="true" class="fc-timeGridWeek-button fc-button fc-button-primary fc-button-active">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button fc-button fc-button-primary">day</button></div></div></div><div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 648.148px;"><div class="fc-timegrid fc-timeGridWeek-view fc-view"><table role="grid" class="fc-scrollgrid  fc-scrollgrid-liquid"><thead role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header "><th role="presentation"><div class="fc-scroller-harness"><div class="fc-scroller" style="overflow: hidden scroll;"><table role="presentation" class="fc-col-header " style="width: 858px;"><colgroup><col style="width: 61px;"></colgroup><thead role="presentation"><tr role="row"><th aria-hidden="true" class="fc-timegrid-axis"><div class="fc-timegrid-axis-frame"></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun fc-day-past" data-date="2022-11-13"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 13, 2022">Sun 11/13</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon fc-day-past" data-date="2022-11-14"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 14, 2022">Mon 11/14</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue fc-day-past" data-date="2022-11-15"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 15, 2022">Tue 11/15</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed fc-day-past" data-date="2022-11-16"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 16, 2022">Wed 11/16</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu fc-day-past" data-date="2022-11-17"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 17, 2022">Thu 11/17</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri fc-day-past" data-date="2022-11-18"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 18, 2022">Fri 11/18</a></div></th><th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat fc-day-past" data-date="2022-11-19"><div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="November 19, 2022">Sat 11/19</a></div></th></tr></thead></table></div></div></th></tr></thead><tbody role="rowgroup"><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body "><td role="presentation"><div class="fc-scroller-harness"><div class="fc-scroller" style="overflow: hidden scroll;"><div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural" style="width: 858px;"><table role="presentation" class="fc-scrollgrid-sync-table" style="width: 858px;"><colgroup><col style="width: 61px;"></colgroup><tbody role="presentation"><tr role="row"><td aria-hidden="true" class="fc-timegrid-axis fc-scrollgrid-shrink"><div class="fc-timegrid-axis-frame fc-scrollgrid-shrink-frame fc-timegrid-axis-frame-liquid"><span class="fc-timegrid-axis-cushion fc-scrollgrid-shrink-cushion fc-scrollgrid-sync-inner">all-day</span></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2022-11-13"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"><div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;"><div class="fc-non-business"></div></div></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2022-11-14"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2022-11-15"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2022-11-16"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past" data-date="2022-11-17"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2022-11-18"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"></div></div></td><td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2022-11-19"><div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner"><div class="fc-daygrid-day-events"><div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div></div><div class="fc-daygrid-day-bg"><div class="fc-daygrid-bg-harness" style="left: 0px; right: 0px;"><div class="fc-non-business"></div></div></div></div></td></tr></tbody></table></div></div></div></td></tr><tr role="presentation" class="fc-scrollgrid-section"><td class="fc-timegrid-divider fc-cell-shaded"></td></tr><tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid"><td role="presentation"><div class="fc-scroller-harness fc-scroller-harness-liquid"><div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden scroll;"><div class="fc-timegrid-body" style="width: 858px;"><div class="fc-timegrid-slots"><table aria-hidden="true" class="" style="width: 858px;"><colgroup><col style="width: 61px;"></colgroup><tbody><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="00:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="00:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="00:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="00:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="01:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="01:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="01:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="01:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="02:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="02:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="02:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="02:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="03:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="03:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="03:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="03:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="04:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="04:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="04:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="04:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="05:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="05:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="05:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="05:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="06:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="06:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="06:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="06:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="07:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="07:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="07:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="07:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="08:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="08:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="08:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="08:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="09:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="09:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="09:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="09:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="10:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="10:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="10:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="10:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="11:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11am</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="11:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="11:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="11:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="12:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="12:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="12:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="12:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="13:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="13:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="13:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="13:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="14:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="14:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="14:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="14:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="15:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="15:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="15:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="15:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="16:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="16:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="16:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="16:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="17:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="17:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="17:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="17:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="18:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="18:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="18:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="18:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="19:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="19:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="19:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="19:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="20:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="20:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="20:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="20:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="21:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="21:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="21:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="21:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="22:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="22:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="22:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="22:30:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="23:00:00"><div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame"><div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11pm</div></div></td><td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="23:00:00"></td></tr><tr><td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="23:30:00"></td><td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="23:30:00"></td></tr></tbody></table></div><div class="fc-timegrid-cols"><table role="presentation" style="width: 858px;"><colgroup><col style="width: 61px;"></colgroup><tbody role="presentation"><tr role="row"><td aria-hidden="true" class="fc-timegrid-col fc-timegrid-axis"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-sun fc-day-past" data-date="2022-11-13"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 190px 0% -254px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(76, 175, 80); background-color: rgb(76, 175, 80);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">3:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Birthday Party</div></div></div></div></a></div><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 1206px 0% -1270px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(255, 112, 67); background-color: rgb(255, 112, 67);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">7:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Dinner</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-mon fc-day-past" data-date="2022-11-14"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -571px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1079px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 540px 0% -794px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(121, 134, 203); background-color: rgb(121, 134, 203);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">8:30 - 12:30</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Meeting</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-tue fc-day-past" data-date="2022-11-15"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -571px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1079px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"><div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 1016px 0% -1079px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-start fc-event-end fc-event-past" style="border-color: rgb(0, 188, 212); background-color: rgb(0, 188, 212);"><div class="fc-event-main"><div class="fc-event-main-frame"><div class="fc-event-time">4:00</div><div class="fc-event-title-container"><div class="fc-event-title fc-sticky">Shopping</div></div></div></div></a></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-wed fc-day-past" data-date="2022-11-16"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -571px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1079px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-thu fc-day-past" data-date="2022-11-17"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -571px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1079px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-fri fc-day-past" data-date="2022-11-18"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -571px;"><div class="fc-non-business"></div></div><div class="fc-timegrid-bg-harness" style="top: 1079px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td><td role="gridcell" class="fc-timegrid-col fc-day fc-day-sat fc-day-past" data-date="2022-11-19"><div class="fc-timegrid-col-frame"><div class="fc-timegrid-col-bg"><div class="fc-timegrid-bg-harness" style="top: 0px; bottom: -1524px;"><div class="fc-non-business"></div></div></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-col-events"></div><div class="fc-timegrid-now-indicator-container"></div></div></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
        </div>
    </div>
</div> --}}
@endsection