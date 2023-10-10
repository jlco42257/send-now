<article class="bg-light my-5 main">
    <h2 class="text-primary text-center pt-5 my-5 fw-bold fs-1 text-capitalize">
        users
    </h2>
    <!-- users table -->
    <div class="d-flex justify-content-center">
        <table class="w-75">
            <tr>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">id</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">last name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">user name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">email</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">country</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">phone</td>
            </tr>
            <?php
            $userInfo = connect();
            $userInfo = $userInfo->query("SELECT * FROM users");
            //$userInfo = $userInfo->fetch();
            while($rest = $userInfo->fetch(PDO::FETCH_ASSOC)){
                $phone = connect();
                $phone = $phone->query("SELECT phone FROM phones WHERE user_id=".$rest['id']);
                $phone = $phone->fetch();
                $email = connect();
                $email = $email->query("SELECT email FROM emails WHERE user_id=".$rest['id']);
                $email = $email->fetch();
            ?>
            <tr>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $rest['id']; ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $rest['name']; ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $rest['lastName']; ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $rest['userName']; ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $email[0] ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $rest['country']; ?></td>
                <td class="bg-ligth border border-dark text-capitalize text-center"><?php echo $phone[0] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
            $userInfo = null;
        ?>
    </div>
</article>