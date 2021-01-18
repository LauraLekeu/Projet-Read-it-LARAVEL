{{--
  Variables disponibles
    - $categories ARRAY(Categorie)
 --}}


<div class="categories">
   <h3>Tag Cloud</h3>
   <div class="tagcloud">
    @foreach ($tags as $tag)
      <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
    @endforeach
</div>
