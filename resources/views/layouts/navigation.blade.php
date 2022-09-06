<nav class="flex bg-cyan-500 text-white">
    <a href="/" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('counter')) ? 'bg-slate-600' : '' }}">Counter</a>
    <a href="/todo-list" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('todo-list')) ? 'bg-slate-600' : '' }}">TodoList</a>
    <a href="/cascading-dropdown" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-600' : '' }}">Cascading Dropdown</a>
    <a href="/products" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('products')) ? 'bg-slate-600' : '' }}">Products Search</a>
    <a href="/image-upload" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('image-upload')) ? 'bg-slate-600' : '' }}">Image Upload</a>
    <a href="/admin" class="py-4 px-6 hover:bg-slate-600 {{ (request()->routeIs('admin')) ? 'bg-slate-600' : '' }}">Admin panel</a>
</nav>
