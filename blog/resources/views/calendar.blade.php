@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="section secondary-section " id="calendar">
            <div class="container">
                <div class=" title">
                    <h1>Calendar</h1>
                </div>
                <div align="center">
				<tr valign="top">
  					 <td width="50%" colspan="2">
						<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=piyaphan6929%40gmail.com&amp;color=%23182C57&amp;ctz=Asia%2FBangkok" style="border-width:0" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
					</td>
				 </tr>
				 </div>
            </div>
        </div>
    </div>
@endsection

