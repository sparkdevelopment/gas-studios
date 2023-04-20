<section id="section-category" class="h-screen !overflow-x-hidden bg-white flex flex-col justify-center">
    <div class="flex flex-col lg:flex-row flex-wrap content-center justify-center items-center lg:h-2/3 h-full self-center w-[80%] pt-24 lg:pt-0 -mb-[10vh]">
        <div class="text-3xl font-light w-full m-auto text-center mb-[6vh]">
            <p class="w-1/2 mx-auto">Space & experience message ipsim dolor sit amet, sed do eiusmod tempur incididunt</p>
        </div>
        <?php
        $categories = array(
            array(
                'heading' => 'Green room ipsum dolor sit',
                'class' => 'studio_a',
            ),
            array(
                'heading' => 'Break out space and kitchen',
                'class' => 'studio_b',
            ),
            array(
                'heading' => 'Tea, coffee and soft drinks dolor',
                'class' => 'studio_c',
            ),
        );
        ?>

        <?php foreach ($categories as $category) : ?>
            <div class="lg:w-[33.33333%] w-full lg:h-[33.33333vw] h-1/2 px-6">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div class="card-zoom !overflow-visible">
                        <div class="card-zoom-image gas-mask bg-<?php echo $category['class']; ?>"></div>
                    </div>
                </a>
                <h2 class="card-zoom-text !text-xl position relative w-full -top-[13vw]"><?php echo $category['heading']; ?></h1>
            </div>
        <?php endforeach; ?>
    </div>
</section>