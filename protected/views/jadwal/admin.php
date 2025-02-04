<?php
/* @var $this JadwalController */
/* @var $model Jadwal */

$this->breadcrumbs=array(
	'List Jadwal Pencatatan'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<!-- Main content -->
<section class="content">
    <div class="card card-default">
        <div class="card-header">
        <h3 class="card-title">
            <!-- <i class="fas fa-bullhorn"></i> -->
            Manage Jadwal Stock Opname
        </h3>
		
		 <div class="float-lg-right p-2">
            <a href="create" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Tambah</a>
		</div>		
        </div>
		
        <!-- /.card-header -->
        <div class="card-body">
			
					
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'jadwal-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_jadwal',
				'id_apoteker',
				'jadwal_pengecekan',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>


        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->  

