<article class="bg-light mt-5">
    <h2 class="text-capitalize text-primary text-center pt-5 my-5 fw-bold fs-1">remove admin profiles</h2>

    <section class="d-flex justify-content-center mb-5">
        <table class="w-75">
            <tr>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">id</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">last name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">user name</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">email</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">country</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center">phone</td>
                <td class="bg-primary border border-dark text-light text-capitalize text-center"></td>
            </tr>
            <?php
            $userInfo = connect();
            $userInfo = $userInfo->query("SELECT * FROM admins");
            //$userInfo = $userInfo->fetch();
            while($rest = $userInfo->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['id']; ?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['name']; ?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['lastName']; ?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['userName']; ?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['email'];?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['country']; ?></td>
                <td class="bg-ligth border border-dark text-center"><?php echo $rest['phone']; ?></td>
                <td class="bg-light border border-dark text-center pt-1">
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $rest['id']; ?>">
                        <button class="btn rounde-pill" type="submit">
                            <span class="material-symbols-outlined delete__button mt-2 mx-2">delete</span>
                        </button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
            $userInfo = null;
            if(isset($_POST['id'])){
                $delete = connect();
                $delete = $delete->query("DELETE FROM admins WHERE id=".$_POST['id']);

                if(headers_sent()){
                    echo '<script>
                            location.assign("?user=admin&page=deleteAdmins");
                        </script>';
                }else{
                    header("Location: ?user=admin&page=deleteAdmins");
                }
            }
        ?>
    </section>
</article>