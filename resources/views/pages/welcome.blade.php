@extends('main')

@section('title', "Dashboard")

@section('maintitle', "Dashboard")

@section('breadcrumb', "Dashboard")

@section('stylesheets')
      <link href="{{URL::to('css/plugins/switchery-master/dist/switchery.css')}}" rel="stylesheet">
@endsection

@section('content')
      {{-- <h3 class="font-bold">This is page content</h3>
      <div class="error-desc">
          You can create here any grid layout you want. And any variation layout you imagine:) Check out
          main dashboard and other site. It use many different layout.
          <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>
      </div> --}}

      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info alert-dismissable">
            <i class="fa fa-bell"> </i>
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              We detect the error. <a class="alert-link" href="#">Alert Link</a>.
          </div>
        </div>
          <div class="col-lg-3">
              <div class="widget style1">
                      <div class="row">
                          <div class="col-xs-4 text-center">
                              <i class="fa fa-trophy fa-5x"></i>
                          </div>
                          <div class="col-xs-8 text-right">
                              <span> Today income </span>
                              <h2 class="font-bold">$ 4,232</h2>
                          </div>
                      </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="widget style1 navy-bg">
                  <div class="row">
                      <div class="col-xs-4">
                          <i class="fa fa-cloud fa-5x"></i>
                      </div>
                      <div class="col-xs-8 text-right">
                          <span> Today degrees </span>
                          <h2 class="font-bold">26'C</h2>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="widget style1 lazur-bg">
                  <div class="row">
                      <div class="col-xs-4">
                          <i class="fa fa-envelope-o fa-5x"></i>
                      </div>
                      <div class="col-xs-8 text-right">
                          <span> New messages </span>
                          <h2 class="font-bold">260</h2>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3">
              <div class="widget style1 yellow-bg">
                  <div class="row">
                      <div class="col-xs-4">
                          <i class="fa fa-music fa-5x"></i>
                      </div>
                      <div class="col-xs-8 text-right">
                          <span> New albums </span>
                          <h2 class="font-bold">12</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="ibox">
            <div class="ibox-title">
                <h5>Settings</h5>
            </div>
            <div class="ibox-content">
              <div class="project-list">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td class="project-title">
                          <a href="project_detail.html">Contract with Zender Company</a>
                          <br/>
                          <small>Created 14.08.2014</small>
                      </td>
                      <td class="project-actions">
                          <input type="checkbox" class="js-switch" name="set1" value="" checked>
                      </td>
                    </tr>
                    <tr>
                      <td class="project-title">
                          <a href="project_detail.html">Contract with Zender Company</a>
                          <br/>
                          <small>Created 14.08.2014</small>
                      </td>
                      <td class="project-actions">
                          <input type="checkbox" class="js-switch_2" name="set2" value="">
                      </td>
                    </tr>
                    <tr>
                      <td class="project-title">
                          <a href="project_detail.html">Contract with Zender Company</a>
                          <br/>
                          <small>Created 14.08.2014</small>
                      </td>
                      <td class="project-actions">
                          <input type="checkbox" class="js-switch_3" name="set3" value="">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> <!--end of .ibox-->

          </div>
        </div>
      </div>

@endsection

@section('scripts')
  <script src="{{URL::to('css/plugins/switchery-master/dist/switchery.js')}}"></script>

  <script type="text/javascript">
  var elem   = document.querySelector('.js-switch');
  var init   = new Switchery(elem);
  var elem_2 = document.querySelector('.js-switch_2');
  var init_2 = new Switchery(elem_2);
  var elem_3 = document.querySelector('.js-switch_3');
  var init_3 = new Switchery(elem_3, { color: '#faab43', secondaryColor: '#fC73d0', jackColor: '#fcf45e', jackSecondaryColor: '#c8ff77' });

  </script>
@endsection
