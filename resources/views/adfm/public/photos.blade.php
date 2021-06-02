<div class="row">
    @foreach($page->files as $file)
    <div class="col-6 col-sm-3">
        <div class="photo__img">                           
            {!! ImageCache::get($file, ['w' => 640, 'h' => 360, 'fit' => 'crop'])->alt($file->original_name) !!}
        </div>
    </div>
    @endforeach
</div>