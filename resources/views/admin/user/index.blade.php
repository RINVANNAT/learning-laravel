@extends('layouts.master')

@section('content')
    <div class="row-fluid">
        <h3 class="header smaller lighter blue">jQuery dataTables</h3>
        <div class="table-header">
            Results for "Latest Registered Domains"
        </div>

        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th class="center">
                    <label>
                        <input type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>Name</th>
                <th>Email</th>
                {{--<th class="hidden-480">Clicks</th>--}}

                <th class="hidden-phone">
                    <i class="icon-time bigger-110 hidden-phone"></i>
                    Created
                </th>
                <th class="hidden-480">Status</th>

                <th> Action</th>
            </tr>
            </thead>

            <tbody>


            @foreach($users as $user)
                <tr>
                    <td class="center">
                        <label>
                            <input type="checkbox" />
                            <span class="lbl"></span>
                        </label>
                    </td>

                    <td>
                        {{$user->name}}
                    </td>
                    <td>{{$user->email}}</td>
                    {{--<td class="hidden-480">3,330</td>--}}
                    <td class="hidden-phone">{{$user->created_at}} </td>

                    <td class="hidden-480">
                        <span class="label label-warning">Expiring</span>
                    </td>

                    <td class="td-actions">
                        <div class="hidden-phone visible-desktop action-buttons">
                            <a class="blue" href="#">
                                <i class="icon-zoom-in bigger-130"></i>
                            </a>

                            <a class="green" href="#">
                                <i class="icon-pencil bigger-130"></i>
                            </a>

                            <a class="red" href="#">
                                <i class="icon-trash bigger-130"></i>
                            </a>
                        </div>

                        <div class="hidden-desktop visible-phone">
                            <div class="inline position-relative">
                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                    <li>
                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection


@section('after-script-end')


    <script src="{{url('bower_components/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{url('bower_components/datatables/media/js/dataTables.bootstrap.js')}}"></script>

    <script type="text/javascript">
        $(function() {
            var oTable1 = $('#sample-table-2').dataTable( {
                "aoColumns": [
                    { "bSortable": false },
                    null, null,null, null, null,
                    { "bSortable": false }
                ] } );


            $('table th input:checkbox').on('click' , function(){
                var that = this;
                $(this).closest('table').find('tr > td:first-child input:checkbox')
                        .each(function(){
                            this.checked = that.checked;
                            $(this).closest('tr').toggleClass('selected');
                        });

            });


            $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
            function tooltip_placement(context, source) {
                var $source = $(source);
                var $parent = $source.closest('table')
                var off1 = $parent.offset();
                var w1 = $parent.width();

                var off2 = $source.offset();
                var w2 = $source.width();

                if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                return 'left';
            }
        })
    </script>
@endsection