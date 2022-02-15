<x-layout :title="$title" :version="$version">

    <x-navigation :sections="$sections" :current="$page" :version="$version"/>

    <x-markdown anchors class="docs lg:col-span-3 px-3 lg:px-0 mt-8 lg:mt-0 prose lg:prose-lg">
        {!! $markdown !!}
    </x-markdown>

    <div class="mt-8">
        <h6>On this page</h6>

        <x-toc class="mt-1 toc">
            {!! $markdown !!}
        </x-toc>
    </div>

</x-layout>
