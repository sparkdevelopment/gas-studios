<section id="section-category" class="h-screen !overflow-x-hidden bg-white flex flex-col justify-center">
    <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-[110%] pt-24 lg:pt-0">
        <?php
        $categories = array(
            array(
                'studio' => 'A',
                'class' => 'studio_a',
            ),
            array(
                'studio' => 'B',
                'class' => 'studio_b',
            ),
            array(
                'studio' => 'C',
                'class' => 'studio_c',
            ),
        );
        ?>

        <?php foreach ($categories as $category) : ?>
            <div class="lg:w-[33.33333%] w-full lg:h-[33.33333vw] h-1/2 mx-6">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div class="card-zoom !overflow-visible">
                        <div class="card-zoom-image gas-mask bg-<?php echo $category['class']; ?>"></div>
                    </div>
                </a>
                <h2 class="card-zoom-text !text-5xl position relative w-full -top-[5.5vw]">Studio <span class="font-extrabold"><?php echo $category['studio']; ?></span></h1>
            </div>
        <?php endforeach; ?>
    </div>
</section>