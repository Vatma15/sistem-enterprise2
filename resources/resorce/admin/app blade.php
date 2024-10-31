<i class='bx bx-buildings'></i>
                            <div data-i18n="Menu 2">Departements</div>
                        </a>
                    </li> <li class="menu-item">
                    </li> 
                    <li class="menu-item">
                        <a href="{{route('employees.index')}}" class="menu-link">
                            <i class='bx bxs-user-account'></i>
                            <div data-i18n="Menu 2">Employees</div>
                        </a>
                    </li> <li class="menu-item">
                    </li> 
                    <li class="menu-item">
                    <a href="{{route('payrolls.index')}}" class="menu-link">
                           <i class='bx bxl-paypal'></i>
                            <div data-i18n="Menu 2">Payroll</div>
@@ -64,11 +66,31 @@
                            <i class='bx bxs-door-open' ></i>
                            <div data-i18n="Menu 2">Leave</div>
                        </a>
                    </li> <li class="menu-item">
                    </li> 
                    <li class="menu-item">
                    <a href="{{route('attendances.index')}}" class="menu-link">
                            <i class='bx bxs-notepad'></i>
                            <div data-i18n="Menu 2">Attendance</div>
                        </a>
                    </li> 
                    <li class="menu-item">
                        <a href="{{route('customers.index')}}" class="menu-link">
                            <i class='bx bxs-user-account'></i>
                            <div data-i18n="Menu 2">Costumers</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('promotions.index')}}" class="menu-link">
                            <i class='bx bxs-user-account'></i>
                            <div data-i18n="Menu 2">Promotions</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('send.promotion.form') }}" class="menu-link">
                            <i class='bx bx-mail-send'></i>
                            <div data-i18n="Send Promotion">Send Promotion</div>
                        </a>
                    </li>
                    <li class="menu-item">
                    <a href="#" class="menu-link menu-toggle">
                         <div data-i18n="Menu 1" style="color: blue;">User Management</div>
@@ -212,4 +234,4 @@
    @include('admin.scripts.script')

</body>
</html>
</html>