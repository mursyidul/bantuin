
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
      <?php if($this->session->userdata('role') == 'SUPERADMIN') { ?>
      <div class="col-lg-3">
          <div class="widget style1 navy-bg">
              <div class="row">
                  <div class="col-xs-4">
                      <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-8 text-right">
                      <span> Jumlah User Aktif </span>
                      <h2 class="font-bold">90</h2>
                  </div>
              </div>
          </div>
      </div>
      <?php } ?>

      <?php if($this->session->userdata('role') == 'SUPERADMIN') { ?>
      <div class="col-lg-3">
      <?php } else { ?>
        <div class="col-lg-4">
        <?php } ?>
          <div class="widget style1 lazur-bg">
              <div class="row">
                  <div class="col-xs-4">
                      <i class="fa fa-calendar fa-5x"></i>
                  </div>
                  <div class="col-xs-8 text-right">
                      <span> Complete Help </span>
                      <h2 class="font-bold">4</h2>
                  </div>
              </div>
          </div>
      </div>

      <?php if($this->session->userdata('role') == 'SUPERADMIN') { ?>
      <div class="col-lg-3">
      <?php } else { ?>
        <div class="col-lg-4">
        <?php } ?>
          <div class="widget style1 yellow-bg">
              <div class="row">
                  <div class="col-xs-4">
                      <i class="fa fa-bell fa-5x"></i>
                  </div>
                  <div class="col-xs-8 text-right">
                      <span> On Going Help </span>
                      <h2 class="font-bold">2</h2>
                  </div>
              </div>
          </div>
      </div>
      <?php if($this->session->userdata('role') == 'SUPERADMIN') { ?>
      <div class="col-lg-3">
      <?php } else { ?>
        <div class="col-lg-4">
        <?php } ?>
          <div class="widget style1 red-bg">
              <div class="row">
                  <div class="col-xs-4">
                      <i class="fa fa-times fa-5x"></i>
                  </div>
                  <div class="col-xs-8 text-right">
                      <span> Helped </span>
                      <h2 class="font-bold">7</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script type="text/javascript">
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Data Responden MAN Kediri 1'
  },
  subtitle: {
    text: 'Berdasarkan Kategori'
  },
  xAxis: {
    // categories: [
    //   'Jan',
    //   'Feb',
    //   'Mar',
    //   'Apr',
    //   'May',
    //   'Jun',
    //   'Jul',
    //   'Aug',
    //   'Sep',
    //   'Oct',
    //   'Nov',
    //   'Dec'
    // ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Total (Nilai)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} votes</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [
    <?php
      foreach ($chartper as $charts) {
          echo "{";
          echo "name:'".$charts["name"]."',";
          echo "data:[".$charts["data"]."]";

          echo "},";
      }
    ?>
  ]
});
</script>