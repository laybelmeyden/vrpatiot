@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/assets/light/lightgallery.css">
<div class="container">
    <h1 class="galls__title">Практическое пособие</h1>
    <div style="width:100%; display:flex; align-items:center;">
    <a href="/assets/oblz/Prakticheskoe_posobie_po_ispolzovaniyu_innovatsionnykh_tekhnicheskikh_sredstv_i_interaktivnykh_tekhnologiy_v_proektakh_po_istoricheskim.pdf"><img style="width:100%; max-width: 350px;" src="/assets/oblz/Oblozhka_Sbornik-1.png" alt=""></a>
    </div>
    <h1 class="galls__title">Видео</h1>
    <iframe class="frames__video" width="100%" src="https://www.youtube.com/embed/qeSZWSmxL8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <h1 class="galls__title">Фото</h1>
    <div id="lightgallery">
        @foreach($result as $item)
        <a href="/assets/img/light/{{$item}}">
            <img src="/assets/img/light/{{$item}}" class="lazyload" data-sizes="auto" />
        </a>
        @endforeach
    </div>
</div>
<script src="/assets/js/lazy.js" async=""></script>
<script src="/assets/light/lightgallery.js"></script>
<script src="/assets/light/lg-thumbnail.js"></script>
<script src="/assets/light/lg-fullscreen.js"></script>
<script>
    lightGallery(document.getElementById('lightgallery'));
</script>
@endsection