
<div class="navigation">

    <div class="navigation-menu-body">
        <ul>
            <li>
                <a   class=" {{ request()->routeIs('home') ? 'active' : '' }}" href="{{  route('home') }}">
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                    <span>لوحة القيادة</span>
                </a>
            </li>



            <li>
                <a   class="{{ request()->routeIs('users.user.index') ? 'active' : '' }}{{ request()->routeIs('users.user.show') ? 'active' : '' }}{{ request()->routeIs('users.user.create') ? 'active' : '' }}{{ request()->routeIs('users.user.edit') ? 'active' : '' }}" href="{{  route('users.user.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <span>المستخدمين</span>
                </a>
            </li>

            <li>
                <a   class="{{ request()->routeIs('evaluations.evaluation.index') ? 'active' : '' }}{{ request()->routeIs('evaluations.evaluation.show') ? 'active' : '' }}{{ request()->routeIs('evaluations.evaluation.create') ? 'active' : '' }}{{ request()->routeIs('evaluations.evaluation.edit') ? 'active' : '' }}" href="{{  route('evaluations.evaluation.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <span>تقييم</span>
                </a>
            </li>

{{--
            <li>
                <a   class="{{ request()->routeIs('licences.licence.index') ? 'active' : '' }}{{ request()->routeIs('licences.licence.show') ? 'active' : '' }}{{ request()->routeIs('licences.licence.create') ? 'active' : '' }}{{ request()->routeIs('licences.licence.edit') ? 'active' : '' }}" href="{{  route('licences.licence.index') }}">
                    <span class="nav-link-icon">
                        <i class="fa fa-barcode"></i>
                    </span>
                    <span>التراخيص</span>
                </a>
            </li>

            <li>
                <a   class="{{ request()->routeIs('packs.pack.index') ? 'active' : '' }}{{ request()->routeIs('packs.pack.show') ? 'active' : '' }}{{ request()->routeIs('packs.pack.create') ? 'active' : '' }}{{ request()->routeIs('packs.pack.edit') ? 'active' : '' }}" href="{{  route('packs.pack.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                    <span>باقه</span>
                </a>
            </li>
            <li>
                <a   class="{{ request()->routeIs('mac_adresses.mac_adress.index') ? 'active' : '' }}{{ request()->routeIs('mac_adresses.mac_adress.show') ? 'active' : '' }}{{ request()->routeIs('mac_adresses.mac_adress.create') ? 'active' : '' }}{{ request()->routeIs('mac_adresses.mac_adress.edit') ? 'active' : '' }}" href="{{  route('mac_adresses.mac_adress.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                    <span>عنوان MAC PC</span>
                </a>
            </li>


            <li>
                <a   class="{{ request()->routeIs('type_payments.type_payment.index') ? 'active' : '' }}{{ request()->routeIs('type_payments.type_payment.show') ? 'active' : '' }}{{ request()->routeIs('type_payments.type_payment.create') ? 'active' : '' }}{{ request()->routeIs('type_payments.type_payment.edit') ? 'active' : '' }}" href="{{  route('type_payments.type_payment.index') }}">
                    <span class="nav-link-icon">
                        <i data-feather="pie-chart"></i>
                    </span>
                    <span> نواع الدفع</span>
                </a>
            </li> --}}



        </ul>
    </div>
</div>
<!-- end::navigation -->
