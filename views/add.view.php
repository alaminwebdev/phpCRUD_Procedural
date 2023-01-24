<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>


<main>
    <div class="container">
        <div class="">
            <h1><?php echo $heading ?></h1>
            <hr>
        </div>
        <?php
        echo $msg;
        ?>
        <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="" name="name" value="<?php echo $name; ?>">
                <?php if ($nameErr) : ?>
                    <div class="invalid-feedback d-block">
                        <?= $nameErr ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="" name="age" value="<?php echo $age; ?>">
                <?php if ($ageErr) : ?>
                    <div class="invalid-feedback d-block">
                        <?= $ageErr ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="" name="phone" value="<?php echo $phone; ?>">
                <?php if ($phoneErr) : ?>
                    <div class="invalid-feedback d-block">
                        <?= $phoneErr ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="col-md-6">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="" name="salary" value="<?php echo $salary; ?>">
                <?php if ($salaryErr) : ?>
                    <div class="invalid-feedback d-block">
                        <?= $salaryErr ?>
                    </div>
                <?php endif ?>
            </div>
            <?php if ($dep_row > 0) : ?>
                <div class="col-md-6">
                    <label for="department" class="form-label">Department</label>
                    <select id="department" class="form-select" name="department">

                        <?php while ($dep = mysqli_fetch_assoc($dep_result)) : ?>
                            <option value="<?php echo $dep['dmid'] ?>" <?php echo $department === $dep['dmid'] ?  "selected" : ""; ?>>
                                <?php echo $dep['dep_name'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                    <?php if ($depErr) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $depErr ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <?php if ($city_row > 0) : ?>
                <div class="col-md-6">
                    <label for="city" class="form-label">City</label>
                    <select id="city" class="form-select" name="city">
                        <?php while ($city_arr = mysqli_fetch_assoc($city_result)) : ?>
                            <option value="<?php echo $city_arr['cid'] ?>" <?php echo $city === $city_arr['cid'] ?  "selected" : ""; ?>>
                                <?php echo $city_arr['cityname'] ?>
                            </option>
                        <?php endwhile ?>
                    </select>
                    <?php if ($cityErr) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $cityErr ?>
                        </div>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <div class="col-12">
                <button type="submit" class="btn btn-success" name="submit">Sign in</button>
            </div>
        </form>
        <!-- <form action="<?php // echo htmlspecialchars($_SERVER['PHP_SELF']); 
                            ?>" method="post">
            <select name="color">
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue" selected>Blue</option>
                <option value="Pink">Pink</option>
                <option value="Yellow">Yellow</option>
            </select>
            <input type="submit" name="clsubmit" value="Get Selected Values" />
        </form> -->
    </div>
</main>
<?php require 'partials/footer.php' ?>