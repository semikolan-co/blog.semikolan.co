<style>
    .rbdiv{
        border-bottom:1px solid #fff5;
    }
    .modal-body a:last-child .rbdiv{
        border-bottom: none;
    }
    .rbdiv:hover{
        color:#fff;
    }
</style>
<div class="modal-content mb-5" style="  background: var(--darkerShade);">
    <div class="modal-header" style="border-bottom: 1px solid #dee2e699;">
        <h5 class="modal-title" id="exampleModalLabel">Recent Blogs</h5>
    </div>
    <div class="modal-body">
        @foreach ($blogs as $rbblog)
            <a class="my-4" href="{{ route('blog', ['slug' => $rbblog->slug]) }}"
                style="color:#fffa; text-decoration:none;">
                <div class="py-2 rbdiv" style="">
                    <h5 class="m-0">{{ $rbblog->title }}</h5>
                    <p class="m-0" style="font-size:0.8em;"> By {{ $rbblog->authorname }}</p>
                </div>
            </a>

        @endforeach

    </div>
</div>
