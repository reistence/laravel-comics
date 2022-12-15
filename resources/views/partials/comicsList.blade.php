 <section class="comics-list">
    <div class="comics-list-container">
      <span class="section-label">COMICS LIST</span>
      <div class="wrapper">
        @foreach ($comics as $comic)   
        <div class="comic-item">
            <div class="item-img">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="item-txt">
                <h3>{{$comic['title']}}</h3>
                <p><span class="comic-info">Series: </span>{{$comic['series']}}</p>
                <p>{{$comic['description']}}</p>
                <p><span class="comic-info">Price: </span>{{$comic['price']}}</p>
            </div>
        </div>
        @endforeach
    
  </section>