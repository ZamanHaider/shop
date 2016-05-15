           <?php echo $this->Html->script('bootstrap.min'); ?>
                  <?php echo $this->Html->css('bootstrap.min.css');?>
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <?php echo $this->Html->link('Home','/');?>

        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-4">
              <?=$this->Html->image('$product->image', array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100')); ?>

    <div class="col-lg-8 col-md-8">
                 <li class="active"><?= h($product->name) ?>

        <h2>
            Price: $
                <?= $this->Number->format($product->price) ?>
                        </h2>
        <p>
            <?php echo $this->Form->create('Product',array('id'=>'add-form','url'=>array('controller'=>'products','action'=>'add')));?>
            <?php echo $this->Form->hidden('product_id',array('value'=>$product['Product']['id']))?>
            <?php echo $this->Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));?>
            <?php echo $this->Form->end();?>
        </p>


    </div>
</div>
