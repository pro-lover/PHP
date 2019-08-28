@extends('layouts.app')

@section('content')
<div class=".container-fluid">
    <div class="col-md-3 col-md-offset-0">
        <div class="panel panel-default">
            <div class="panel-heading">side bar</div>
                <div class="panel-body">
                        <center>
                        Calendar
                        <script language="javascript" type="text/javascript">
                        var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                        var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

                        //  DECLARE AND INITIALIZE VARIABLES
                        var Calendar = new Date();

                        var year = Calendar.getFullYear();     // Returns year
                        var month = Calendar.getMonth();    // Returns month (0-11)
                        var today = Calendar.getDate();    // Returns day (1-31)
                        var weekday = Calendar.getDay();    // Returns day (1-31)

                        var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
                        var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
                        var cal;    // Used for printing

                        Calendar.setDate(1);    // Start the calendar day at '1'
                        Calendar.setMonth(month);    // Start the calendar month at now


                        /* VARIABLES FOR FORMATTING
                        NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                            tags to customize your caledanr's look. */

                        var TR_start = '<TR>';
                        var TR_end = '</TR>';
                        var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
                        var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
                        var TD_start = '<TD WIDTH="30"><CENTER>';
                        var TD_end = '</CENTER></TD>';

                        /* BEGIN CODE FOR CALENDAR
                        NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                        tags to customize your calendar's look.*/

                        cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
                        cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
                        cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                        cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
                        cal += TR_start;

                        //   DO NOT EDIT BELOW THIS POINT  //

                        // LOOPS FOR EACH DAY OF WEEK
                        for(index=0; index < DAYS_OF_WEEK; index++)
                        {

                        // BOLD TODAY'S DAY OF WEEK
                        if(weekday == index)
                        cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

                        // PRINTS DAY
                        else
                        cal += TD_start + day_of_week[index] + TD_end;
                        }

                        cal += TD_end + TR_end;
                        cal += TR_start;

                        // FILL IN BLANK GAPS UNTIL TODAY'S DAY
                        for(index=0; index < Calendar.getDay(); index++)
                        cal += TD_start + '  ' + TD_end;

                        // LOOPS FOR EACH DAY IN CALENDAR
                        for(index=0; index < DAYS_OF_MONTH; index++)
                        {
                        if( Calendar.getDate() > index )
                        {
                        // RETURNS THE NEXT DAY TO PRINT
                        week_day =Calendar.getDay();

                        // START NEW ROW FOR FIRST DAY OF WEEK
                        if(week_day == 0)
                        cal += TR_start;

                        if(week_day != DAYS_OF_WEEK)
                        {

                        // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
                        var day  = Calendar.getDate();

                        // HIGHLIGHT TODAY'S DATE
                        if( today==Calendar.getDate() )
                        cal += highlight_start + day + highlight_end + TD_end;

                        // PRINTS DAY
                        else
                        cal += TD_start + day + TD_end;
                        }

                        // END ROW FOR LAST DAY OF WEEK
                        if(week_day == DAYS_OF_WEEK)
                        cal += TR_end;
                        }

                        // INCREMENTS UNTIL END OF THE MONTH
                        Calendar.setDate(Calendar.getDate()+1);

                        }// end for loop

                        cal += '</TD></TR></TABLE></TABLE>';

                        //  PRINT CALENDAR
                        document.write(cal);

                        //  End -->
                        </script>
                        </center>
                </div>
                
        </div>
        
    </div>
</div>
<div class=".container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Picture</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Profile picture</label>

                            <div class="col-md-6">
                            <img src="{{asset('img/l.png')}}" >
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                {{ Auth::user()->name }}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {{ Auth::user()->email }}
                               
                            </div>
                        </div>
                        <!--iiiii-->
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">municipality</label>

                            <div class="col-md-6">
                                {{ Auth::user()->municipality }}
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">remember_token</label>

                            <div class="col-md-6">
                                {{ Auth::user()->remember_token }}
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">province</label>

                            <div class="col-md-6">
                                {{ Auth::user()->province }}
                               
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">department</label>

                            <div class="col-md-6">
                                {{ Auth::user()->department }}
                               
                            </div>
                        </div>
                        <!--jjjjj-->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="created_at" class="col-md-4 control-label">created_at</label>

                            <div class="col-md-6">
                                {{ Auth::user()->created_at }}
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                
                                <a href="http://localhost/laravel5_007/public/editProfile">
                                    <button class="btn btn-primary">
                                            Edit Profile
                                    </button>
                                        </a>
                                
                                <a href="{{ url('/home') }}">
                                <button class="btn btn-primary">
                                    Cancel
                                </button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
