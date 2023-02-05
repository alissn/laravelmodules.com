<x-html class="font-sans" :title="isset($title) ? $title . ' - ' . config('app.name') : ''">
    <x-slot name="head">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script defer data-domain="docs.laravelmodules.com" src="https://plausible.io/js/plausible.js"></script>
    </x-slot>
    <div class="bg-gray-900">
        <header class="flex justify-between max-w-screen-xl mx-auto mb-10 p-4">
            <div class="flex">
                <h1 class="text-white text-3xl">
                    <a href="{{ config('app.url') }}">Laravel Modules</a>
                </h1>

                <div
                    x-data="{
                        open: false,
                        toggle() {
                            if (this.open) {
                                return this.close()
                            }

                            this.open = true
                        },
                        close(focusAfter) {
                            this.open = false

                            focusAfter && focusAfter.focus()
                        }
                    }"
                    x-on:keydown.escape.prevent.stop="close($refs.button)"
                    x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                    x-id="['dropdown-button']"
                    class="relative"
                >
                    <!-- Button -->
                    <button
                        x-ref="button"
                        x-on:click="toggle()"
                        :aria-expanded="open"
                        :aria-controls="$id('dropdown-button')"
                        type="button"
                        class="bg-green-500 rounded-lg px-4 py-2 ml-5"
                    >
                        <span>V10</span>
                        <span aria-hidden="true">&darr;</span>
                    </button>

                    <!-- Panel -->
                    <div
                        x-ref="panel"
                        x-show="open"
                        x-transition.origin.top.left
                        x-on:click.outside="close($refs.button)"
                        :id="$id('dropdown-button')"
                        style="display: none;"
                        class="absolute left-0 mt-2 bg-white border border-black"
                    >
                        <div>
                            <a href="{{ config('app.url') }}/v1/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V1
                            </a>

                            <a href="{{ config('app.url') }}/v2/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V2
                            </a>

                            <a href="{{ config('app.url') }}/v3/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V3
                            </a>

                            <a href="{{ config('app.url') }}/v4/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V4
                            </a>

                            <a href="{{ config('app.url') }}/v5/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V5
                            </a>

                            <a href="{{ config('app.url') }}/v6/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V6
                            </a>

                            <a href="{{ config('app.url') }}/v7/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V7
                            </a>

                            <a href="{{ config('app.url') }}/v8/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V8
                            </a>

                            <a href="{{ config('app.url') }}/v9/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V9
                            </a>

                            <a href="{{ config('app.url') }}/v10/introduction" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                                V10
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center pl-4 text-white">
                    <p>Viewing: {{ $version }}</p>
                </div>

            </div>
            <a href="https://github.com/nWidart/laravel-modules" target="_blank" class="text-white">
                <svg class="h-8 w-8 inline" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </header>
    </div>
    <div class="max-w-screen-xl mx-auto px-4 lg:px-6 py-6 lg:grid lg:grid-cols-5 lg:gap-10">
        {{ $slot }}
    </div>
</x-html>
