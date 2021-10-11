<div class="w-1/5 h-screen bg-gray-800 sidebar bg-center bg-cover px-4 shadow-lg">
    <h2 class="text-4xl font-semibold text-white uppercase text-center border-b mb-5 py-2">
        Admin
    </h2>
    <div class="flex flex-wrap flex-col">
        <x-admin.sidebarlink text="Posts" href="admin/posts"/>
        <x-admin.sidebarlink text="Projects" href="admin/projects"/>
        {{--        <x-admin.sidebarlink text="products" href="/admin/products"/>--}}
        {{--        <x-admin.sidebarlink text="brands" href="/admin/brands"/>--}}
        {{--        <x-admin.sidebarlink text="categories" href="/admin/categories"/>--}}
        {{--        <x-admin.sidebarlink text="settings" href="/admin/settings"/>--}}
    </div>
</div>
