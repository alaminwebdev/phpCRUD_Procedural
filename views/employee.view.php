<?php require 'partials/header.php' ?>
<?php require 'partials/nav.php' ?>


<main>
    <div class="container">
        <div class="">
            <h1><?php echo $heading ?></h1>
            <hr>
        </div>
        <div class="">
            <?php if ($rows > 0) : ?>
                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Department</th>
                            <th scope="col">City</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($employee = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <th scope="row"><?php echo $employee['id'] ?></th>
                                <td><?php echo $employee['name'] ?></td>
                                <td><?php echo $employee['age'] ?></td>
                                <td><?php echo $employee['phone'] ?></td>
                                <td><?php echo $employee['salary'] ?></td>
                                <td><?php echo $employee['dep_name'] ?></td>
                                <td><?php echo $employee['cityname'] ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                        <a class="btn btn-success" href="#" role="button">Edit</a>
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $employee['id'] ?>" role="button">Delete</a>
                                    </div>
                            </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            <?php else :  ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">No result found !</div>
                    </div>
                    <span class="badge bg-primary rounded-pill"></span>
                </li>
            <?php endif ?>
        </div>
    </div>
</main>
<?php require 'partials/footer.php' ?>