 <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6 z-10">
            <div class="flex items-center gap-4">
                <button id="toggleSidebarDesktop" class="text-slate-500 hover:text-indigo-600 p-2 rounded hover:bg-slate-100 hidden md:block">
                    <i class="fas fa-bars"></i>
                </button>
                <button id="toggleSidebarMobileBtn" class="text-slate-500 hover:text-indigo-600 p-2 rounded hover:bg-slate-100 md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-lg font-bold text-slate-700"><?= $pageTitle ?></h1>
            </div>
            <div class="flex items-center gap-4">
                <button class="relative text-slate-500 hover:text-indigo-600 p-2">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
                <div class="hidden sm:flex items-center gap-2 text-sm text-slate-500">
                    <i class="far fa-calendar-alt"></i>
                    <span><?= date("l, M d, Y"); ?></span>
                </div>
            </div>
        </header>
<br>
