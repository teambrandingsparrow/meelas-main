<?php
         
      $sql = "SELECT * FROM `propertiess` INNER JOIN types ON propertiess.type=types.id INNER JOIN amenities ON propertiess.id_name=amenities.store_id ";
        $Results = mysqli_query($conn, $sql);
        // $count = mysqli_num_rows($Results);
        if (mysqli_num_rows($Results) > 0) {
          $cnt = 0;
          foreach ($Results as $Row) {
            $cnt++;

           
        ?>
<div class="col-md-4" onclick="goto(<?php echo $Row['id_name']; ?>)" style="cursor: pointer;">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="./backend/uploads/<?php echo $Row['image']; ?>" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">

                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#"> <?php $titles = $Row['names'];

                                      $newtext = wordwrap($titles, 15, "<br />\n");
                                      echo $newtext; ?></a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a"><?php echo $Row['name'] ?> |
                                            ₹<?php echo $Row['budget'] ?></span>
                                    </div>
                                    <a href="property-single.php?id=<?php echo $Row['id_name'];?>" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>


                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span><?php echo $Row['area'] ?>
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span><?php echo $Row['beds'] ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span><?php echo $Row['baths'] ?></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span><?php echo $Row['garage'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <?php
          }
        }
                ?>
                <script>
    function goto(params) {
      location.href = "property-single.php?id=" + params;
    }
  </script>
