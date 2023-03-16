<!-- Course section -->
<div class="col mb-5">
    <div class="card h-150">
        <a href="view/viewphone.php?spec=<?=$result2['spec']?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="spec/<?=$result2['p1.png'];?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <center>
                            <?=$result2['name'];?> &nbsp;&nbsp;
                            <?=$result2['price'];?>
                        </center>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="fa fa-shield"></i> สังกัดทีม: &nbsp;
                        <?=$result2['team'];?>
                    </div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fa fa-futbol-o"></i> ตำแหน่งของทีม: &nbsp;
                        <?=$result2['position'];?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>