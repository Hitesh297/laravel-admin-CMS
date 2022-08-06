<?= view('layout.header') ?>

        <section class="w3-padding">

            <form method="post" action="/auth/login" novalidate>

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" id="email" value="<?= old('email') ?>" required>
                    
                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <!-- <button type="submit">Log In</button> -->
                <input type="submit" value="Log In">

            </form>

        </section>

    </body>
</html>


        