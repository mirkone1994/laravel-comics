<div class="section info">
    <div class="container info">
      <div class="row info">
          @foreach ($info as $info)
          <div class="col info">
              <img class="info" src="{{ $info['image'] }}" alt="{{ $info['text']}} ">
              <span class="info">{{ $info['text'] }}</span>
          </div>     
          @endforeach
      </div>
  </div>
</div>
