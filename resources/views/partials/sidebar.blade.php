<aside class="section-aside container-blur-sidebar">
    <ul>
        <li>
            <a href="{{ route('admin.devs.show', Auth::user()->id) }}" class="btn-neon2 text-white">
                il mio profilo
            </a>
        </li>
        <li>
            <a href="{{ route('admin.devs.edit', Auth::user()->id) }}" class="btn-neon2 text-white">
                modifica profilo
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/message') }}"  class="btn-neon2 text-white">
                chat
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/review') }}"  class="btn-neon2 text-white">
                reviews
            </a>
        </li>
        
        <li>
            <a href="{{url('/admin/devs/'.Auth::user()->id .'/payments') }}"   class="btn-neon2 text-white">
                ciccioPlus
            </a>
        </li>
    </ul>
</aside>