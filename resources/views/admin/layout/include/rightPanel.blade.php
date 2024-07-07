<div class="sl-sideright">
  <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
    <li class="nav-item justify-content-start">
      <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications</a>
    </li>
  </ul><!-- sidebar-tabs -->

  <!-- Tab panes -->
    <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
      <div class="media-list"> 
        <!-- loop starts here -->
        @forelse (auth()->user()->unReadNotifications as $notification)
        <a href="" class="media-list-link read">
          <div class="media pd-x-20 pd-y-15">
            <div class="media-body">
              <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">{{$notification->data['name']}}</strong> {{$notification->data['action']}}</p>
              <span class="tx-12">{{$notification->created_at->format('Y-m-d')}}</span>
            </div>
          </div><!-- media -->
        </a>
        @empty
          <p>No un read Notification</p>
        @endforelse
        <!-- loop ends here -->
      </div><!-- media-list -->
    </div><!-- #notifications -->

  </div><!-- tab-content -->
</div><!-- sl-sideright -->