<div class="data-categories">
    <div class="list-group">
        <a href="/" class="list-group-item <?php echo !$activeCategory ? 'active' : '';?>" data-id="<?php echo "all";?>">
            <span class="badge"><?php echo $totalCount;?></span>
            Все
        </a>
        <?php foreach ($categories as $category) {?>
            <a href="?cat_id=<?php echo $category["id"];?>" class="list-group-item <?php echo $activeCategory == $category["id"] ? 'active' : '';?>" data-id="<?php echo $category["id"];?>">
                <span class="badge"><?php echo $category["count"];?></span>
                <?php echo $category["name"];?>
            </a>
        <?php } unset($category);?>
    </div>

    <div class="leftBanner">
        <a href="<?php echo $activeCat['banners']['left']['url'];?>" target="_blank">
            <img class="img-responsive" src="<?php echo IMAGES_PATH.$activeCat['banners']['left']['img'];?>" alt="">
        </a>
    </div>
</div>
