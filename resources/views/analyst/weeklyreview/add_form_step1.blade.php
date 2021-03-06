<?php

$d = date("d");
$m = date("m");
$y = date("Y");

?>
@extends('layouts.app')

@section('content')
    <div class="container add_form_step1">
    	
        <div class="row justify-content-center">
            <h3 class="title">Создание отчета</h3>
        </div>
        
        <form action="/analyst/weekly/add1" method="post">
            @csrf
            <div class="row name_report">
                <span>Еженедельный дайжест "Бюллетень военно-политической и военно-технической информации" за период от&nbsp;</span>
                <input type="text" hidden name="year" value="<?= $y?>">
                <input type="text" hidden name="month" value="<?= $m?>">
                <span class="select_wrap calendar_wrap"  style="display: none;">
		        	<input name="start_period_picker" value="" class="calendar_start"/>
		        	<input type="hidden" value="<?php echo mktime(0,0,0,$m,$d,$y); ?>" name="start_period">
	        	</span>
                <span>&nbsp;до&nbsp;</span>
                <span class="select_wrap calendar_wrap" style="display: none;">
		        	<input name="end_period_picker" value="" class="calendar_end"/>
		        	<input type="hidden" value="<?php echo mktime(0,0,0,$m,$d,$y); ?>" name="end_period">
		        </span>
                <span>&nbsp;номер отчета&nbsp;</span>
                <span>
		        	<input name="number" value="" placeholder="№"/>
		        </span>
            </div>
            <div class="row box_save_article mt30">
            	<a href="{{ URL::previous() }}" class="button butt_back">Назад</a>
                <button class="butt  butt_def">Сохранить</button>
            </div>
        </form>

    </div>

@endsection

@section('scripts')
<script type="text/javascript" charset="utf-8">
	jQuery(document).ready(function () {
		jQuery('.calendar_wrap').show(500);	
	});
</script>
@endsection