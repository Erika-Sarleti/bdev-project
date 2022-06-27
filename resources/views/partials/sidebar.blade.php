<aside class="section-aside">
    <ul>
        <li>
            <a href="{{ route('admin.devs.show', $dev->id ) }}" class="btn-neon">
                il mio profilo
            </a>
        </li>
        <li>
            <a href="{{ route('admin.devs.edit', $dev->id ) }}" class="btn-neon">
                modifica profilo
            </a>
        </li>
        <li>
            {{-- <a href="{{ route('admin.devs.message', $dev->id ) }}"  class="btn-neon"> --}}
                chat
            </a>
        </li>
        <li>
            <a href="#"  class="btn-neon">
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