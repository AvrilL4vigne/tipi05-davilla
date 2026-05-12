<!--Main banner-->
<section class="main-slider">
    <div class="slider_wave"></div>
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-index="rs-<?php echo e($banner->id); ?>" 
                        data-transition="zoomout" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="850"  
                        data-thumb="#"  
                        data-delay="5999"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Slide">
                        
                        <!-- Imagem de Fundo (Dinâmica) -->
                        <img src="<?php echo e(asset('davilla/images/' . $banner->foto_banner)); ?>" 
                             alt="<?php echo e($banner->titulo); ?>" 
                             class="rev-slidebg" 
                             data-no-retina>
                        
                        <!-- O texto e o layout individual de cada slide -->
                        <div class="tp-caption tp-resizeme" 
                             style="z-index: 8; font-size: 72px; color: #4b4342; font-family:Leckerli One; text-align: center;"
                             data-x="center" data-y="center" data-voffset="-18" data-responsive_offset="on" 
                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"}]'>
                            <?php echo e($banner->titulo); ?>

                        </div>

                        <div class="tp-caption tp-resizeme" 
                             style="z-index: 7; font-size: 16px; color: #4b4342; font-family:ABeeZee; text-align: center;"
                             data-x="center" data-y="center" data-voffset="100" data-responsive_offset="on" 
                             data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"}]'>
                            <?php echo $banner->descricao; ?>

                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</section><?php /**PATH /var/www/html/resources/views/site/home/banner.blade.php ENDPATH**/ ?>