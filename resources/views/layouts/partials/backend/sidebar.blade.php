<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="{{ route('dashboard::profile') }}">
                    <img src="{{ Auth::user()->getLogoPath() }}" class="img-circle" alt="{{ Auth::user()->name }}">
                </a>
            </div>
            <div class="pull-left info">
                <p><a href="{{ route('dashboard::profile') }}">{{ Auth::user()->name }}</a></p>
            </div>
        </div>

        <!-- search form -->
        <form action="{{ route('admin::contacts.search', ['page' => request('page'),'valor' => request('valor')]) }}" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="valor" class="form-control" placeholder="Pesquisar..." value="{{ request('valor') }}">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>


        @include('layouts.partials.backend.sidebar-menu')

    </section>
    <!-- /.sidebar -->
</aside>
