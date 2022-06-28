<aside class="section-aside my-card">
    <ul>
        <li>
            <a href="{{ route('admin.devs.show', Auth::user()->id) }}" class="btn-neon text-white">
                il mio profilo
            </a>
        </li>
        <li>
            <a href="{{ route('admin.devs.edit', Auth::user()->id) }}" class="btn-neon text-white">
                modifica profilo
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/message') }}"  class="btn-neon text-white">
                chat
            </a>
        </li>
        <li>
            <a href="{{ url('/admin/review') }}"  class="btn-neon text-white">
                reviews
            </a>
        </li>
        
        <li>
            <a href="{{url('/admin/devs/'.Auth::user()->id .'/payments') }}"   class="btn-neon text-white">
                ciccioPlus
            </a>
        </li>
    </ul>
</aside>