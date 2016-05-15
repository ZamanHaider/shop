<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        CakePHP Shopping Cart
    </title>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min.css');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <style>
    body {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .navbar {
      margin-bottom: 20px;
    }
    </style>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>

<div class="container">

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CakePHP Shopping Cart</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span>
             Shopping Cart <span class="badge" id="cart-counter">0</span>',
                                        array('controller'=>'products','action'=>'index'),array('escape'=>false));?>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <?php echo $this->fetch('content'); ?>

</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
           <!-- Placed at the end of the document so the pages load faster -->
           <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->Html->script('bootstrap.min'); ?>



<div class="row">
    <?php foreach ($products as $product):?>
    <div class="col-sm-6 col-md-4">
        <div class="">

            <div class="caption">



                          <?=$this->Html->image('$product->image', array('alt' => 'CakePHP', 'border' => '0', 'data-src' => 'holder.js/100%x100')); ?>
                <h5>
                   <?= h($product->name) ?>
                </h5>
                <h5>
                    Price: $:
                    <?= $this->Number->format($product->price) ?>
                </h5>

                 <?= $this->Html->link(__('show details'), ['action' => 'view', $product->id]) ?>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
       </body>
</html>
