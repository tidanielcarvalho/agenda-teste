<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVEGAÇÃO</li>
    <li class="{{ \App\Utils::checkRoute(['dashboard::index', 'admin::index']) ? 'active': '' }}">
        <a href="{{ route('dashboard::index') }}">
            <i class="fa fa-home"></i> <span>Início</span>
        </a>
    </li>

    @if (Auth::user()->can('viewList', \App\User::class))
        <li class="{{ \App\Utils::checkRoute(['admin::contacts.create', 'admin::contacts.create']) ? 'active': '' }}">
            <a href="{{ route('admin::contacts.create') }}">
                <i class="fa fa-user-plus"></i> <span>Adicionar Contato</span>
            </a>
        </li>
    @endif

    @if (Auth::user()->can('viewList', \App\User::class))
        <li class="{{ \App\Utils::checkRoute(['admin::contacts.index', 'admin::contacts.index']) ? 'active': '' }}">
            <a href="{{ route('admin::contacts.index') }}">
                <i class="fa fa-users"></i> <span>Visualizar Contatos</span>
            </a>
        </li>
    @endif

</ul>
