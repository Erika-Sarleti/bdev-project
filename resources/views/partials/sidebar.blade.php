<aside class="section-aside">
    <ul>
        <li>
            <a href="{{ route('admin.devs.show', Auth::user()->id) }}" class="btn-neon">
                il mio profilo
            </a>
        </li>
        <li>
            <a href="{{ route('admin.devs.edit', Auth::user()->id) }}" class="btn-neon">
                modifica profilo
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/message') }}"  class="btn-neon">
                chat
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/review') }}"  class="btn-neon">
                reviews
            </a>
        </li>
        <li>
            <a href="#"  class="btn-neon">
                statics
            </a>
        </li>
        <li>
            <a href="#"  class="btn-neon">
                ciccioPlus
            </a>
        </li>
    </ul>
</aside>