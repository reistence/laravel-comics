 <section class="current-series">
    <div class="main-container">
      <span>CURRENT SERIES </span>
      <div class="wrapper">
        @foreach ($comics as $comic)   
        <div class="comic-card">
            <div class="card-img">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="card-txt">
                <p>{{$comic['title']}}</p>
            </div>
        </div>
        @endforeach
    </div>
      <button>LOAD MORE</button>
    </div>
  </section>