<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
            </a></li>
        {{-- <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed
            </a>
        </li>
        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                    11</b> </a></li>
        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                    19</b> </a></li> --}}
    </ul>
    <!--/.widget-nav-->


    {{-- <ul class="widget widget-menu unstyled">
        <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
        <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
        <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
        <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
        <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
    </ul> --}}
    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">



        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages">
                <i class="menu-icon icon-cog"></i> 
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>
                    Unit Types
            </a>

            <ul id="togglePages" class="collapse unstyled">
                <li><a href="{{route('addUnitType')}}"><i class="icon-inbox"></i>Add Unit Type</a></li>
                <li><a href="{{route('viewUnitTypes')}}"><i class="icon-inbox"></i>View Unit Types</a></li>
            </ul>
        </li>


        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages">
                <i class="menu-icon icon-cog"></i> 
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>
                    Units
            </a>

            <ul id="togglePages" class="collapse unstyled">
                <li><a href="{{route('addUnit')}}"><i class="icon-inbox"></i>Add Unit </a></li>
                <li><a href="{{route('viewUnits')}}"><i class="icon-inbox"></i>View Units</a></li>
            </ul>
        </li>


        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages">
                <i class="menu-icon icon-cog"></i> 
                <i class="icon-chevron-down pull-right"></i>
                <i class="icon-chevron-up pull-right"></i>
                  Pages
            </a>

            <ul id="togglePages" class="collapse unstyled">
                <li><a href="{{route('addPage')}}"><i class="icon-inbox"></i>Add Page</a></li>
                <li><a href="{{route('viewPages')}}"><i class="icon-inbox"></i>View Pages</a></li>
            </ul>
        </li>








        <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
    </ul>
</div>
