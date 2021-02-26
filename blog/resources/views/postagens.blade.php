<?php
    $postagens = TCG\Voyager\Models\Post::first();
?>
@can('browse', $postagens)
    você pode navegar pelas postagens
@else
    você não pode navegar pelas postagens
@endcan
