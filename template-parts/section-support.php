<section id="section-category" class="h-screen !overflow-x-hidden bg-white flex flex-col justify-center">
    <div class="flex flex-col lg:flex-row flex-wrap content-center justify-center items-center lg:h-2/3 h-full self-center w-[80%] pt-24 lg:pt-0 -mb-[10vh]">
        <div class="text-3xl font-light w-full m-auto text-center mb-[6vh]">
            <p class="w-1/2 mx-auto">Support message ipsim dolor sit amet, sed do eiusmod tempur incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <?php
        $categories = array(
            array(
                'heading' => 'Gas production hire, sed do eiusmod tempur incididunt ut labore et dolore magna aliqua.',
                'class' => 'gas_production',
            ),
            array(
                'heading' => 'Flats and props ipsum dolor sit amet, sed do eiusmod tempur incididunt ut labore et dolore magna aliqua.',
                'class' => 'flats_and_props',
            ),
            array(
                'heading' => 'Hapaca backdrops sit amet, sed do eiusmod tempur incididunt ut labore et dolore magna aliqua.',
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