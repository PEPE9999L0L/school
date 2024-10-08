<?php require_once 'header.php'; ?>

<!-- DIV -->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Registration</h4>
                <p class="card-text text-danger">Input fields with * shall be field</p>
                <hr class="mb-3">
                <form action="../controllers/register.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId"
                            placeholder="" requied />
                        <small id="helpId" class="form-text text-muted">Used to log in to the system</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div id="passwordContainer">
                            <input type="password" class="form-control" name="password" id="password"
                                aria-describedby="helpId" placeholder="" requied />
                            <i class="fa-solid fa-eye" id="eyeIcon" onclick="showContent('password', this)"></i>
                        </div>
                        <ul id="pwreq">
                            <li><small id="helpId" class="form-text text-muted">Min. 8 charchter</small></li>
                            <li><small id="helpId" class="form-text text-muted">Min. 1 numberr</small></li>
                            <li><small id="helpId" class="form-text text-muted">Min. 1 capitalcharacter</small></li>
                            <li><small id="helpId" class="form-text text-muted">Min. 1 specialcharcter</small></li>
                        </ul>

                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirm" class="form-label">Password Again</label>
                        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm"
                            aria-describedby="helpId" placeholder="" requied />
                        <small id="helpId" class="form-text text-muted">Please confirm your password</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId"
                            placeholder="" requied />
                        <small id="helpId" class="form-text text-muted">Email address</small>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" name="submit" id="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<!-- DIV END -->

<!-- JS -->
<script>
    let showContent = (id, eye) => {
        let input = document.getElementById(id)
        let hidden = input.getAttribute("type")
        if (hidden === "password") {
            input.setAttribute("type", "text")
            eye.setAttribute("class", "fa-solid fa-eye-slash")
        }
        else {
            input.setAttribute("type", "password")
            eye.setAttribute("class", "fa-solid fa-eye")
        }
    }
</script>
<!-- JS END -->

<?php require_once 'footer.php'; ?>