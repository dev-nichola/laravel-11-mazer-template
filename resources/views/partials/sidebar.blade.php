<div id="sidebar">
    <div class="sidebar-wrapper active">

        <x-sidebar-header
            href="#"    
            label="Pembukuan"
        />


        <div class="sidebar-menu">
            <ul class="menu">

                {{-- Menu --}}
                <x-sidebar-menu label="Menu"/>

                <x-sidebar-item :href="route('dashboard')" icon="bi bi-stack" label="Dashboard" :active="request()->routeIs('dashboard')" />

                <x-sidebar-group href="#" icon="bi bi-grid-1x2-fill" label="Child Menu" :active="false">
                    <x-sidebar-group-item href="#" label="Menu 1"/>
                </x-sidebar-group>

                {{-- Lainya --}}
                <x-sidebar-menu label="User"/>

                <x-sidebar-item :href="route('user')" icon="bi bi-stack" label="User" :active="request()->routeIs('user')" />

            </ul>
        </div>
    </div>
</div>
