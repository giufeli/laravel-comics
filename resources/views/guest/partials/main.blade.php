<main>
    {{-- <ul>
        @foreach ($comics as $item)
            <a>{{ ($item['title']) }}</a>
        @endforeach
    </ul> --}}
    <div class="containerGray">
        <div class="banner" />
        <div class="content">
          <div class="series">
            CURRENT SERIES
          </div>
            @foreach ($comics as $item)
                <div class="card">
                    <img src="{{ ($item['thumb']) }}" alt="">
                    <div>
                        {{ ($item['series']) }}
                    </div >
                </div>
            @endforeach
            <button>LOAD MORE</button>
        </div>
      </div>
</main>
