<?php

$title = "notifications";
$activeNav = 'notifications';
?>

@include('admin.header');
@include('admin.nav');

<div class="app-content content user view-customer customer-product">
    <div class="content-wrapper">
        <div class="content-body">
<div class="card">
<div class="card-header">
       <h1 class="in-heading">All Notification  </h1>

</div>
<div class="card-body">
    @foreach ($notif as $item)


<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">{{ $item->type }}</h5>
    <p class="card-text">{{ $item->data['description'] }}</p>
    <small>
        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->diffForHumans() }}</time>
    </small>
    <a href="{{ url('read_notification/'.$item->id) }}" class="btn btn-primary">Read</a>
  </div>
</div>
@endforeach

</div>


</div>

</div>
</div>
</div>

@include('admin.footer');