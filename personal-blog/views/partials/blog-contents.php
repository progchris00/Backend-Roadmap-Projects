<div class="">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <?php

            foreach ($public_blogs as $blog) { ?>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500"><?= $blog['date'] ?></time>
                        <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?= $blog['category'] ?></a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="/blog?id=<?= $blog["id"] ?>">
                                <span class="absolute inset-0"></span>
                                <?= $blog['title'] ?>
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?= $blog['body'] ?></p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src=<?= $blog["avatar"] ?> alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    <?= ucfirst($blog['username']) ?>
                                </a>
                            </p>
                            <p class="text-gray-600"><?= ucfirst($blog["role"]) ?></p>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</div>