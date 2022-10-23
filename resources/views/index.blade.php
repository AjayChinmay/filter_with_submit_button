<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{!! url('public/css/site.css') !!}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>


<main class="container mt-5">
<div class="row">

		<!--Heading Starts -->
		<div class="col-md-12 text-center">
			<h3><strong>Server Information</strong></h3><br/>
		</div>
		<!--Heading End -->

        <div id="loader" class="lds-dual-ring hidden overlay"></div>

		<!--Filter button starts -->
        <div class="col-lg-12">
            <div class="row common_user_filter" style="margin-bottom:20px;"> 
            <div class="col-md-12 common_filter" style="display: flex;">

                <div class="common_filter_sub">
                  <label><b>Select Storage</b></label>
                  <div class="rangeslider">
                  {{ csrf_field() }}
                  <input type="range" min="0" max="72" value="0" step="1" class="myslider" id="sliderRange">          
                  <p>Value: <span id="rangeval"></span></p>
                </div>
                </div>

                <div class="common_filter_sub">
                {{ csrf_field() }}
                <label><b>Select Ram</b></label>
                <div>
                <input name="selector[]" id="ad_Checkbox1" class="ads_Checkbox" type="checkbox" value="2GB" /> 2GB
                <input name="selector[]" id="ad_Checkbox2" class="ads_Checkbox" type="checkbox" value="4GB" /> 4GB
                <input name="selector[]" id="ad_Checkbox3" class="ads_Checkbox" type="checkbox" value="8GB" /> 8GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="12GB" /> 12GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="16GB" /> 16GB<br/>
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="24GB" /> 24GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="32GB" /> 32GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="48GB" /> 48GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="64GB" /> 64GB
                <input name="selector[]" id="ad_Checkbox4" class="ads_Checkbox" type="checkbox" value="96GB" /> 96GB
                </div>
                </div>

                <div class="common_filter_sub">
                  <label><b>Select Harddisk Type</b></label>
                  <div class="selection-box dropdown-wrap">
                  {{ csrf_field() }}
                  <select class="form-control" name="hd_type" id="hd_type">
                      <option value="">Select Type</option>
                      <option value="SAS">SAS</option>
                      <option value="SATA">SATA</option>
                      <option value="SSD">SSD</option>
                  </select>
                  </div>
                </div>

                <div class="common_filter_sub">
                  <label><b>Select Location</b></label>
                  <div class="selection-box dropdown-wrap">
                  {{ csrf_field() }}
                  <select class="form-control" name="location" id="location">
                      <option value="">Select Location</option>
                      <option value="AmsterdamAMS-01">AmsterdamAMS-01</option>
                      <option value="Washington D.C.WDC-01">Washington D.C.WDC-01</option>
                      <option value="San FranciscoSFO-12">San FranciscoSFO-12</option>
                      <option value="SingaporeSIN-11">SingaporeSIN-11</option>
                      <option value="DallasDAL-10">DallasDAL-10</option>
                      <option value="FrankfurtFRA-10">FrankfurtFRA-10</option>
                      <option value="Hong KongHKG-10">Hong KongHKG-10</option>
                  </select>
                  </div>
                </div>

                <div class="common_filter_sub button_style">
                <input class="button btn-primary" type="button" id="save_value" name="save_value" value="Search" />
                </div>
				
			      </div>
			      </div>
		    </div>
		    <!--Filter button ends -->
		
		<!--Table starts -->
		<div class="col-lg-12">
            <table class="table table-bordered data-table" id="user_approval">
                <thead>
                    <tr>
                        <th width="50">#</th>
                        <th>Model</th>
                        <th>RAM</th>
                        <th>HDD</th>
                        <th>Location</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody id="user_approval_tbody">
                  @foreach($Serverinfo_data as $Serverinfo_datas)
                    <tr>
                        <th scope="row">{{ $Serverinfo_datas->id }}</th>
                        <td>{{ $Serverinfo_datas->model }}</td>
                        <td>{{ $Serverinfo_datas->ram }}</td>
                        <td>{{ $Serverinfo_datas->hdd }}</td>
                        <td>{{ $Serverinfo_datas->location }}</td>
                        <td>{{ $Serverinfo_datas->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
		<!--Table ends -->
		
</div>
</main>

<script src="{!! url('public/js/action.js') !!}"></script>

</body>
</html>