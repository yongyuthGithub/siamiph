<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<div class="page-header">
    <h1>ข้อมูลAdmin</h1><h4><small>เพิ่มข้อมูลAdmin</small></h4>
</div>-->
<?php echo js_asset('views/CarMaintenance/CarMaintenance_edit.js') ?>
<div class="panel panel-default">
    <div class="panel-body">
        <form id="form_Carmtnedit">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-xs-12">
                        <div class="col-xs-12 "> 
                            <div class="row">
                                 <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="txtcmdCarnumber">ทะเบียนรถ :</label>
                                        <select id="txtcmdCarnumber" name="txtcmdCarnumber" class="form-control selectpicker show-menu-arrow"
                                                data-width="100%"
                                                data-show-Tick="true"
                                                data-tick-Icon="fa fa-check"
                                                data-size="5"
                                                data-header="false"
                                                data-live-Search="true"
                                                data-live-Search-Placeholder="key word"
                                                data-multiple-Separator=",&nbsp;&nbsp;"
                                                data-actions-Box="false"
                                                data-selectAll-Text="Select All"
                                                data-deselectAll-Text="Deselect All"
                                                data-selected-Text-Format="count > 3">
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="txtDetail">รายละเอียด:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-align-justify" style="min-width: 20px;"></i></div>
                                            <input type="text" class="form-control" id="txtDetail" name="txtDetail" placeholder="รายละเอียด">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="txtSDate">วันที่ลงรายละเอียด:</label>
                                        <div class="input-group date" id="txtSDate">
                                            <input type='text' class="form-control text-center" id="txtSDate1" name="txtSDate11" placeholder="วันที่ลงรายละเอียด" onkeydown="return false;" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="txtCash">ยอดเงิน:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa fa-money" style="min-width: 20px;"></i></div>
                                            <input type="text" class="form-control" id="txtCash" name="txtCash" placeholder="ยอดเงิน">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>